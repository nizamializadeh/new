
$('.lang_select').on('change',function () {
   var redirect_url = $(this).val();
   window.location.href = redirect_url;
})