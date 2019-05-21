var gulp 						= require('gulp'),
		htmlbeautify    = require('gulp-html-beautify'),
		pump 						= require('pump'),
		plumber 				= require('gulp-plumber'),
		del 						= require('del'),
		gutil 					= require('gulp-util'),
		notify 					= require("gulp-notify"),
		browserSync 		= require('browser-sync'),
		uglify 					= require('gulp-uglify'),
		cache						= require('gulp-cache'),
		sass 						= require('gulp-sass'),
		pug 						= require('gulp-pug'),
		concat 					= require('gulp-concat'),
		csso 						= require('gulp-csso'),
		autoprefixer 		= require('gulp-autoprefixer'),
		cleanCSS 				= require('gulp-clean-css'),
		shorthand 			= require('gulp-shorthand'),
		gcmq 						= require('gulp-group-css-media-queries'),
		sourcemaps 			= require('gulp-sourcemaps'),
		image 					= require('gulp-image'),
		svgSprite 			= require('gulp-svg-sprite'),
		svgmin 					= require('gulp-svgmin'),
		cheerio					= require('gulp-cheerio'),
		rename 					= require("gulp-rename"),
		ttf2woff2				= require('gulp-ttf2woff2'),
		ttf2eot 				= require('gulp-ttf2eot'),
		ttf2woff 				= require('gulp-ttf2woff'),
		replace 				= require('gulp-replace');


// Sass 
gulp.task('sass', function () {
  return gulp.src('app/precss/**/*.sass')
    .pipe(sass({ outputStyle: 'expand' }).on("error", notify.onError()))
    .pipe(sourcemaps.init())
    .pipe(gcmq())
    .pipe(shorthand())
    .pipe(autoprefixer({
      browsers: [
        'last 15 version',
        '> 1%',
        'ie 8',
        'ie 9',
        'Opera 12.1',
        'Android 2.3',
        'Android >= 4',
        'Chrome >= 20',
        'Firefox >= 24',
        'Explorer >= 8',
        'iOS >= 6',
        'Opera >= 12',
        'Safari >= 6'
      ]
    }))
    .pipe(csso({
      restructure: true,
      sourceMap: true,
      debug: true
    }))
    .pipe(cleanCSS({
      level: 2
    }))
		.pipe(sourcemaps.write('../style/', {
			sourceMappingURLPrefix: 'http://localhost:3000/'
		}))
		.pipe(rename("main.min.css"))
    .pipe(gulp.dest('app/style'))
    .pipe(browserSync.reload({ stream: true }));
});

// Pug 
gulp.task('pug', function buildHTML() {
  return gulp.src(['app/pug/*.pug', '!app/pug/_*.pug'])
	.pipe(pug({ pretty: true })).on("error", notify.onError())
	.pipe(gulp.dest('app'))
	.pipe(browserSync.reload({ stream: true }));
});

// Pretty HTML 
gulp.task('htmlbeautify', function () {
	var options = {
		indentSize: 2,
			unformatted: [
				'abbr', 'area', 'bdi', 'bdo', 'cite',
				'code', 'data', 'datalist', 'del', 'dfn', 'em', 'embed', 'i', 'ins', 'kbd', 'keygen', 'map', 'mark', 'math', 'meter', 'noscript',
				'object', 'output', 'progress', 'q', 'ruby', 's', 'samp', 'small',
				'strong', 'sub', 'sup', 'template', 'u', 'var', 'wbr', 'text',
				'acronym', 'big', 'dt', 'ins', 'strike', 'tt'
			]
		};
	return gulp.src('app/*.html')
		.pipe(htmlbeautify(options))
		.pipe(gulp.dest('app/'))
});

// JS 
gulp.task('main-js', function () {
  return gulp.src([
    'app/js/main.js',
  ])
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest('app/js/'));
});

gulp.task('js', function () {
  return gulp.src([
    'app/libs/jquery/jquery.min.js',
    'app/libs/select/jquery.nice-select.min.js',
    'app/libs/slick/slick.min.js',
    'app/libs/range/jquery.range.js',
    'app/libs/svg4everybody/svg4everybody.min.js',
    'app/libs/fancy/jquery.fancybox.min.js',
    'app/libs/rating/jquery.rateyo.min.js',
    'app/libs/calendar/datepicker.min.js',
    'app/libs/calendar/datepicker_ru.js',
    'app/libs/dropdown/jquery.dropdown.min.js',
    'app/js/main.min.js', // Всегда в конце
  ])
    .pipe(uglify())
    .pipe(concat('scripts.min.js'))
    .pipe(gulp.dest('app/js'))
    .pipe(browserSync.reload({ stream: true }));
});

// Images Press & SVG Sprite
gulp.task('image', function () {
  gulp.src('./app/images/main/**/*')
    .pipe(image())
    .pipe(gulp.dest('dist/images/main'));
});

gulp.task('svgSpriteBuild', function () {
  return gulp.src('app/images/sprite/main-icon/*.svg')
    // minify svg
    .pipe(svgmin({
      js2svg: {
        pretty: true
      }
    }))
    // remove all fill, style and stroke declarations in out shapes
    .pipe(cheerio({
      run: function ($) {
        $('[fill]').removeAttr('fill');
        $('[stroke]').removeAttr('stroke');
        $('[style]').removeAttr('style');
      },
      parserOptions: { xmlMode: true }
    }))
    // cheerio plugin create unnecessary string '&gt;', so replace it.
    .pipe(replace('&gt;', '>'))
    // build svg sprite
    .pipe(svgSprite({
      mode: {
        symbol: {
          sprite: "../sprite.svg",
        }
      }
    }))
    .pipe(gulp.dest('app/images/sprite'));
});

// WebFonts Generate 
gulp.task('fonts', function () {
  gulp.src('app/fonts/**/*.ttf')
		.pipe(ttf2eot())
		.pipe(gulp.dest('app/fonts/'));
  gulp.src('app/fonts/**/*.ttf')
		.pipe(ttf2woff2())
		.pipe(gulp.dest('app/fonts/'));
	return gulp.src('app/fonts/**/*.ttf')
		.pipe(ttf2woff())
		.pipe(gulp.dest('app/fonts/'));
});

// BrowserSync 
gulp.task('browser-sync', function () {
  browserSync({
    server: {
      baseDir: 'app'
    },
    open: false,
    notify: false,
  });
});

// Watch 
gulp.task('watch', function () {
  gulp.watch('./app/precss/**/*.sass', gulp.series('sass'));
  gulp.watch('./app/pug/**/*.pug', gulp.series('pug'));
  gulp.watch('./app/js/main.js', gulp.series('main-js'));
  gulp.watch('./app/js/main.min.js', gulp.series('js'));
});

// Clean this file when start 
gulp.task('del', function () {
  return del([
    './app/*.html',
    './app/style/main.min.css',
    './app/js/scripts.min.js',
    'dist'
  ]);
});


// Start all task's
gulp.task('default', gulp.series(
  'del',
  gulp.parallel(
    'sass',
    'pug',
    'main-js',
    'js',
    'svgSpriteBuild',
  ),
  gulp.parallel(
		'watch',
		'htmlbeautify',
    'browser-sync'
  )
));




// Build 
// Copy files to dist folder 
gulp.task('build', function () {
  gulp.src('./app/style/main.min.css')
    .pipe(gulp.dest('./dist/style'))
  gulp.src('./app/js/scripts.min.js')
    .pipe(gulp.dest('./dist/js'))
  gulp.src('./app/js/maps.js')
    .pipe(gulp.dest('./dist/js'))
  gulp.src('./app/ajax/**/*')
    .pipe(gulp.dest('./dist/ajax/'))
  gulp.src('./app/images/main/**/*')
    .pipe(gulp.dest('./dist/images/main'))
  gulp.src('./app/images/sprite/sprite.svg')
    .pipe(gulp.dest('./dist/images/sprite'))
  gulp.src('./app/*.html')
    .pipe(gulp.dest('./dist'))
  gulp.src('./app/.htaccess')
    .pipe(gulp.dest('./dist'))
  gulp.src('./app/fonts/**/*')
    .pipe(gulp.dest('./dist/fonts'));
  return gulp.src('./app/images/main/**/*')
    .pipe(image())
    .pipe(gulp.dest('dist/images/main'));
});

