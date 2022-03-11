



 jQuery(function() {
    jQuery("img.lazy").lazyload({
        effect: "fadeIn"
    })
});


jQuery(document).ready(function ($) {
    jQuery('.thumb-img a').on("click", function(e){
        e.preventDefault();
        jQuery('.thumb-previewer img').attr("src", jQuery(this).attr("href"));
    });

});

jQuery(document).ready(function() {
    jQuery(".nav-bar .mobile-toggle").click(function() {
        jQuery(".nav-bar nav").slideToggle()
    }), jQuery(".nav-bar .mobile-toggle").click(function() {
        jQuery(".nav-bar .mobile-toggle").toggleClass("active")
    })
})

    jQuery('.thumb-img li').click(function(e){
        imgSrc = jQuery(this).find("img").attr('src');
        jQuery(".thumb-previewer").find("img").attr("src",imgSrc);
    })

jQuery(window).scroll(function() {
    jQuery(window).scrollTop() >= 10 ? jQuery(".nav-bar").addClass("active") : jQuery(".nav-bar").removeClass("active")
});