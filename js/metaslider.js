jQuery(function(){


    var metaslider_33 = function($) {
        jQuery('#metaslider_33').addClass('flexslider'); // theme/plugin conflict avoidance
        jQuery('#metaslider_33').flexslider({ 
            slideshowSpeed:3800,
            animation:"slide",
            controlNav:false,
            directionNav:true,
            pauseOnHover:false,
            direction:"horizontal",
            reverse:false,
            animationSpeed:1300,
            prevText:"url('../images/slider_arrow (1).png')",
            // nextText:"&gt;",
            // easing:"linear",
            slideshow:true,
            maxltems: 3,
            move: 1
        });
    };
    var timer_metaslider_33 = function() {
        var slider = !window.jQuery ? window.setTimeout(timer_metaslider_33, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_33, 1) : metaslider_33(window.jQuery);
    };
    timer_metaslider_33();
});
