jQuery(document).ready(function($) {

        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#up-to-top').fadeIn();
            } else {
                $('#up-to-top').fadeOut();
            }
        });

        $('#up-to-top').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });
  
});