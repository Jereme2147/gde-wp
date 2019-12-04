const desktop = window.matchMedia("(min-width: 950px)");
const black = "rgba(16, 14, 16, 1)";
const white = "rgba(236, 234, 237, 1)";
const darkGrey = "rgba(43, 48, 58, 1)";
const yellow = "rgba(249, 195, 53, 1)";
const blue = "rgba(28, 63, 140, 1)";

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}


jQuery(document).ready(function($) {
    // $(this).scrollTop(0);
    $(".hamburger-div").click(function() {
        $(".hamburger").toggleClass("is-active");
        menu();
    })
    $(".banner-div").ready(function() {
        loadBanner();
    })
    
 
})
    //sets the banner text height. replaces 20 media queries.
function loadBanner() {
    let $el = jQuery('.banner-div');
    let bottom = $el.position().top + $el.offset().top + $el.outerHeight(true);
    // jQuery("#landing-top-spacer").css({ height: `jQuery{Math.floor(bottom)}px`});
    // jQuery(".banner-text").css({ height: `jQuery{Math.floor(bottom)}px` });
    jQuery(".banner-text").css({ height: `${bottom}px` });
// bellow works good enough
    // if (desktop.matches) {
    //     jQuery(".banner-text").css({ height: `800px` });
    // }else {
    //     jQuery(".banner-text").css({ height: `400px` });
    // }
    //MAYBE SET SERVICE CARD AND BELLOW TO DISPLAY: NONE UNTIL THIS LOADS?
}
function menu(){
    const opacity = jQuery(".mobile-menu").css('opacity');
    if (opacity == '0') {
        jQuery('.mobile-menu').animate({ opacity: '1' }, 500);
        jQuery('.mobile-menu').css({ pointerEvents: 'auto' });
    } else {
        jQuery('.mobile-menu').animate({ opacity: '' }, 500);
        jQuery('.mobile-menu').css({ pointerEvents: 'none' });
    }
}
//******************Scroll actions functions */
function scrollNum() {

    let z = fixWindow();
    let menu = jQuery('#navbar').css("height");
    let reg = /[0-9]/g;
    if (desktop.matches) {
        if (z.y > 200) {
            if (menu == '125px') {
                jQuery("#navbar").css({ height: "75px" })
                jQuery(".nav-box").css({borderBottom: "none"});
                jQuery(".banner-text").css({opacity: "0"});
            }
        } else {
            if (menu == '75px') {
                jQuery("#navbar").css({ height: "125px" });
                jQuery(".nav-box").css({ borderBottom: `4px solid ${black}` });
                //if opacity ends up being an issue using transition, just change
                //to fadeOut()
                jQuery(".banner-text").css({ opacity: "1" });
            }
        }
    } else {
        if (z.y > 100) {
            if (menu == '75px') {
                jQuery("#navbar").css({ height: "50px" });
                jQuery(".banner-text").css({ opacity: "0" });
                jQuery(".nav-box").css({ borderBottom: `none` });
            }
        } else {
            if (menu == '50px') {
                jQuery("#navbar").css({ height: "75px" });
                jQuery(".nav-box").css({ borderBottom: `4px solid ${black}` });
                jQuery(".banner-text").css({ opacity: "1" });
            }
        }
    }
    
}
function fixWindow() {
    var doc = document,
        w = window;
    var x, y, docEl;

    if (typeof w.pageYOffset === "number") {
        x = w.pageXOffset;
        y = w.pageYOffset;
    } else {
        docEl =
            doc.compatMode && doc.compatMode === "CSS1Compat"
                ? doc.documentElement
                : doc.body;
        x = docEl.scrollLeft;
        y = docEl.scrollTop;
    }
    return { x: x, y: y };
}