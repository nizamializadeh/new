//  MAP Location 
if ($('#map').length) {
	function initMap() {
		var uluru = {
			lat: -25.363,
			lng: 131.044
		};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 8,
			center: uluru,
			disableDefaultUI: false,
			stylers: [{
				visibility: "on"
			}]
		});


		var contentString = '<div class="contacts_block">' +
			'<div class="contacts_block_row">' +
			'<h5>Address</h5>' + '<span>We are waiting for you </span>' +
			'</div>' +
			'<div class="contacts_block_row">' + '<a href="tel: +985688718791">+985688718791 </a>' + '<span>Office number</span>' + '</div>' +
			'<div class="contacts_block_row">' + '<a href="tel: +6666222211">+6666222211 </a>' + '<span>24 hour emergency room</span>' + '</div>' +
			'<div class="contacts_block_row">' +
			'<p>Watch on GoogleMaps </p>' +
			'</div>' +
			'</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		var marker = new google.maps.Marker({
			position: uluru,
			map: map,
			icon: {
				url: "images/main/icon/location-pin.svg",
				scaledSize: new google.maps.Size(32, 32)
			}
		});
		marker.addListener('click', function () {
			infowindow.open(map, marker);
		});
	}
}


// Map about  
if ($('#map_about').length) {
	function initMap() {
		var uluru = {
			lat: -25.363,
			lng: 131.044
		};
		var map = new google.maps.Map(document.getElementById('map_about'), {
			zoom: 8,
			center: uluru,
			disableDefaultUI: false,
			stylers: [{
				visibility: "on"
			}]
		});


		var contentString = '<div class="about_contacts_box_main about_maps_box">' +
			'<h4 class="h4">Places.az Team</h4>' +
			'<div class="about_contacts_box_work_time">' + '<svg class="icon icon-time about_time_ico">' +
			'<use xlink:href="./images/sprite/sprite.svg#time"></use>' + '</svg>' + '<p>' + '<span>09:00 — 00:00 </span>' +
			'</p>' + '</div>' + '<div class="about_contacts_box_work_time">' + '<svg class="icon icon-pin about_time_ico">' +
			'<use xlink:href="./images/sprite/sprite.svg#pin"></use>' + '</svg>' + '<p>' +
			'<span>20 Nigar Rəfibəyli, Baku</span>' + '</p>' + '</div>' + '<a href="tel: 0124567766">' +
			'<svg class="icon icon-tel about_tel_ico">' + '<use xlink:href="./images/sprite/sprite.svg#tel1"></use>' + '</svg>012 456-77-66</a>' + '</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		var marker = new google.maps.Marker({
			position: uluru,
			map: map,
			icon: {
				url: "images/main/icon/location-pin.svg",
				scaledSize: new google.maps.Size(32, 32)
			}
		});
		marker.addListener('click', function () {
			infowindow.open(map, marker);
		});
	}
}

