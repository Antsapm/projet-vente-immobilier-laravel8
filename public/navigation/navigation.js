$(document).ready(function(){

    // NAVIGARION ==========================================
    $('.menuxx').each(function(){
        $(this).on('click',function() {
            var page = $(this).find('a').attr('href');
            //alert(page);
            $('.page').each(function(){
                $(this).removeClass('active');
            });
            $(page).each(function(){
                $(this).addClass('active');
            });
        })
    });

    // /NAVIGATION==========================================
});