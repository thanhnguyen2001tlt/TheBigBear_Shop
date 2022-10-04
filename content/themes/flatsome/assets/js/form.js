jQuery(document).ready(function (jQuery) {
    jQuery('.producttabs h4').after('<button class="icon"><i class="icon-menu"></i></button>');
    jQuery('button').click(function () {
        jQuery(this).next('ul').toggleClass("reshow");
    });
    jQuery(document).click(function (e) {
        var target = e.target;
        if (!jQuery(target).is('.icon') && !jQuery(target).parents().is('.icon')) {
            jQuery('.producttabs .nav').removeClass('reshow');
        }
    });
    jQuery('.producttabs .nav li a').click(function () {
        jQuery('.producttabs .nav').removeClass('reshow');
    });
});(function () {
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
})()