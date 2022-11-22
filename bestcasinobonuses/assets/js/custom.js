jQuery(function ($) {
    jQuery(document).ready(function () {

        //Mobile menu
        $(".hamburger").click(function () {
            $(this).toggleClass("is-active");
            $(".menu-breakpoint").toggleClass("is-active");
        });

        //Faq container
        $(".show").click(function () {
            $(this).find(".arrow-up").toggle();
            $(this).find(".arrow-down").toggle();
            $(this).find(".show-text").toggle();
        });

        //Scroll to top
        $(window).scroll(function (e) {
            if ($(this).scrollTop() > 50) {
                $(".back-to-top").fadeIn("slow");
            } else {
                $(".back-to-top").fadeOut("slow");
            }
        });
        $(".back-to-top a").click(function () {
            $("html, body").animate({scrollTop: 0}, 500);
            return false;
        });
    });
})





