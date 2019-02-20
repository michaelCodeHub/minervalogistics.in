<!DOCTYPE html>
<html lang="en-US">
<meta charset="UTF-8">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php /**/ ?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<?php /**/ ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"  rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>



<script>
//jq=$.noConflict();
// Inline popups
$(document).ready(function(){
$('#inline-popups').magnificPopup({
  delegate: 'a',
  removalDelay: 500, //delay removal by X to allow out-animation
  callbacks: {
    beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
});


// Image popups
$('#image-popups').magnificPopup({
  delegate: 'a',
  type: 'image',
  removalDelay: 500, //delay removal by X to allow out-animation
  callbacks: {
    beforeOpen: function() {
      // just a hack that adds mfp-anim class to markup 
       this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
  closeOnContentClick: true,
  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
});


// Hinge effect popup
$('a.hinge').magnificPopup({
  mainClass: 'mfp-with-fade',
  removalDelay: 1000, //delay removal by X to allow out-animation
  callbacks: {
    beforeClose: function() {
        this.content.addClass('hinge');
    }, 
    close: function() {
        this.content.removeClass('hinge'); 
    }
  },
  midClick: true
});
setTimeout(function(){$("#popup_init").click();},1000);
});
</script>
    <!--[if IE]><![endif]-->
    <script type="text/javascript">
        //<![CDATA[
        try {
            if (!window.CloudFlare) {
                var CloudFlare = [{
                    verbose: 0,
                    p: 1490064819,
                    byc: 0,
                    owlid: "cf",
                    bag2: 1,
                    mirage2: 0,
                    oracle: 0,
                    paths: {
                        cloudflare: "/cdn-cgi/nexp/dok3v=1613a3a185/"
                    },
                    atok: "29caa4d988f78adfa1da38062b79cf8c",
                    petok: "2bb241370e8c2f2ccdbdcb505e528a67f6485d98-1490089265-1800",
                    zone: "g5plus.net",
                    rocket: "0",
                    apps: {
                        "abetterbrowser": {
                            "ie": "8",
                            "opera": null,
                            "chrome": null,
                            "safari": null,
                            "firefox": null
                        }
                    }
                }];
                ! function(a, b) {
                    a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "//ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3df2befc48d1/cloudflare.min.js", b.parentNode.insertBefore(a, b)
                }()
            }
        } catch (e) {};
        //]]>
    </script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins%3A300%2C600" />
    <link rel="stylesheet" href="wp-content/cache/min/1/24bf718e45c30a9683585870e9d61d5e.css" data-minify="1" />
    <script src="wp-content/cache/min/1/2c49ac68288b8d02619a2d91315fa40e.js" data-minify="1"></script>
    <script type="text/javascript">
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    
    <title>Minerva</title>
    <style>
        .wishlist_table .add_to_cart,
        a.add_to_wishlist.button.alt {
            border-radius: 16px;
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px
        }
    </style>
    <script type="text/javascript">
        var yith_wcwl_plugin_ajax_web_url = '';
    </script>
    <script>
        /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
        if (typeof WebFontConfig === "undefined") {
            WebFontConfig = new Object();
        }
        WebFontConfig['google'] = {
            families: ['Poppins:300,400,500,600,700']
        };

        (function() {
            var wf = document.createElement('script');
            wf.src = '//ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <link rel="alternate" type="application/rss+xml" title="Mowasalat &raquo; Feed" href="http://themes.g5plus.net/mowasalat/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Mowasalat &raquo; Comments Feed" href="http://themes.g5plus.net/mowasalat/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
            "ext": ".png",
            "source": {
                "concatemoji": "http:\/\/themes.g5plus.net\/mowasalat\/wp-includes\/js\/wp-emoji-release.min.js"
            }
        };
        ! function(a, b, c) {
            function d(a) {
                var c, d, e, f = b.createElement("canvas"),
                    g = f.getContext && f.getContext("2d"),
                    h = String.fromCharCode;
                if (!g || !g.fillText) return !1;
                switch (g.textBaseline = "top", g.font = "600 32px Arial", a) {
                    case "flag":
                        return g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3;
                    case "diversity":
                        return g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, d = c[0] + "," + c[1] + "," + c[2] + "," + c[3], g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e;
                    case "simple":
                        return g.fillText(h(55357, 56835), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0];
                    case "unicode8":
                        return g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0]
                }
                return !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var f, g, h, i;
            for (i = Array("simple", "flag", "unicode8", "diversity"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (g = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline!important;
            border: none!important;
            box-shadow: none!important;
            height: 1em!important;
            width: 1em!important;
            margin: 0 .07em!important;
            vertical-align: -0.1em!important;
            background: none!important;
            padding: 0!important
        }
		body#indx .g5plus-services  .services-content a{font-size:12px !important;}
		.g5plus-services.services-gray .services-inner {
       min-height: 420px;
}
		
    </style>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen72e6.css?ver=2.6.4' type='text/css' media='only screen and (max-width: 768px)' />
    <script type='text/javascript'>
        /*  */
        var wc_add_to_cart_params = {
            "ajax_url": "\/mowasalat\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/mowasalat\/home-01\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View Cart",
            "cart_url": "http:\/\/themes.g5plus.net\/mowasalat\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /*  */
    </script>
    <link rel='https://api.w.org/' href='http://themes.g5plus.net/mowasalat/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://themes.g5plus.net/mowasalat/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://themes.g5plus.net/mowasalat/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.5.7" />
    <meta name="generator" content="WooCommerce 2.6.4" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='http://themes.g5plus.net/mowasalat/?p=279' />
    <link rel="alternate" type="application/json+oembed" href="http://themes.g5plus.net/mowasalat/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fthemes.g5plus.net%2Fmowasalat%2Fhome-01%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://themes.g5plus.net/mowasalat/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fthemes.g5plus.net%2Fmowasalat%2Fhome-01%2F&amp;format=xml" />
    <style id='xmenu_custom_style'></style>
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress." />
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://themes.g5plus.net/mowasalat/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
    <!--[if IE  8]><link rel="stylesheet" type="text/css" href="http://themes.g5plus.net/mowasalat/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]-->
    <meta name="generator" content="Powered by Slider Revolution 5.2.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <style type="text/css" title="dynamic-css" class="options-output">
        body {
            font-family: Poppins;
            font-weight: 400;
            font-style: normal;
            font-size: 13px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out
        }
        .wf-loading body,
        {
            opacity: 0
        }
        .ie.wf-loading body,
        {
            visibility: hidden
        }
        {
            font-family: Poppins;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out
        }
        .wf-loading,
        {
            opacity: 0
        }
        .ie.wf-loading,
        {
            visibility: hidden
        }
        h1 {
            font-family: Poppins;
            font-weight: 400;
            font-style: normal;
            font-size: 36px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out
        }
        .wf-loading h1,
        {
            opacity: 0
        }
        .ie.wf-loading h1,
        {
            visibility: hidden
        }
        h2 {
            font-family: Poppins;
            font-weight: 400;
            font-style: normal;
            font-size: 30px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out
        }
        .wf-loading h2,
        {
            opacity: 0
        }
        .ie.wf-loading h2,
        {
            visibility: hidden
        }
        h3 {
            font-family: Poppins;
            font-weight: 400;
            font-style: normal;
            font-size: 24px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out
        }
        .wf-loading h3,
        {
            opacity: 0
        }
        .ie.wf-loading h3,
        {
            visibility: hidden
        }
        h4 {
            font-family: Poppins;
            font-weight: 400;
            font-style: normal;
            font-size: 20px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out
        }
        .wf-loading h4,
        {
            opacity: 0
        }
        .ie.wf-loading h4,
        {
            visibility: hidden
        }
        h5 {
            font-family: Poppins;
            font-weight: 400;
            font-style: normal;
            font-size: 16px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out
        }
        .wf-loading h5,
        {
            opacity: 0
        }
        .ie.wf-loading h5,
        {
            visibility: hidden
        }
        h6 {
            font-family: Poppins;
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out
        }
        .wf-loading h6,
        {
            opacity: 0
        }
        .ie.wf-loading h6,
        {
            visibility: hidden
        }
		
		.g5plus-services.excerpt-default .services-content h2{font-size:14px !important;color:#222 !important;padding-top:20px;font-weight:bold;}
		.g5plus-services.excerpt-default .services-content p{font-size:12px !important;color:#222 !important;}
		.g5plus-services .services-inner:hover p, .g5plus-services .services-inner:hover
h2 {
    color: #fff !important;
}
		
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1468403167359 {
            background-image: url(images/mailchimp-background2695.jpg?id=516) !important
        }
        .vc_custom_1468575400858 {
            margin-bottom: 35px !important
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1473991723632 {
            background-position: center;
            background-repeat: no-repeat !important;
            background-size: cover !important
        }
        .vc_custom_1468633713022 {
            background-image: url(images/testimonials-background-011398.jpg?id=87) !important
        }
        .vc_custom_1474270447247 {
            margin-bottom: 70px !important
        }
    </style>
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1
            }
			
			
        </style>
    </noscript>
</head>

<body id="indx" class="page page-id-279 page-template-default yith-wcan-free unknown wpb-js-composer js-comp-ver-4.12 vc_responsive" data-responsive="991" data-header="header-1">



 

  <ul id="inline-popups" style="display: none;"><li><a id="popup_init" href="#test-popup" data-effect="mfp-3d-unfold">3d unfold</a></li></ul>
  
  
<!--popup-wrap-->
<div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
<div class="popup-wrap">
<div class="pop-logo"> <img src="images/logo.png" alt="logo"></div>
<div class="land-title"> <img src="images/land-title.jpg" alt="logo"></div>

<div class="minerva-details">
<h1 data-sr="enter left, hustle 100px, wait 0.5s">MINERVA OFFERS</h1>

<div class="txt-details" data-sr="enter left, hustle 100px, wait 0.8s">
<div class="txt-details-left">
1
</div>
<div class="txt-details-right">
<p><span>FREE CHA</span> to customers.<br>
<span class="dfs">(giving complete end to end logistics business with 200 TEU/month)</span> </p>
</div>
<div class="clearfix"></div>
</div>

<div class="txt-details" data-sr="enter left, hustle 100px,wait 1.0s">
<div class="txt-details-left">
2
</div>
<div class="txt-details-right">
<p>Save <span>3 days</span> by on wheel clearance !</p>
</div>
<div class="clearfix"></div>
</div>

<div class="txt-details" data-sr="enter left, hustle 100px,wait 1.2s">
<div class="txt-details-left">
3
</div>
<div class="txt-details-right">
<p>Save <span><i class="fa fa-inr" aria-hidden="true"></i> 10,000</span> per container !</p>
</div>
<div class="clearfix"></div>
</div>

</div>

<div class="vid-iframe">
 
 <iframe width="100%" height="250" src="https://www.youtube.com/embed/_l7V1inhgzI?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

</div>
</div>
<!--popup-wrap-->

   
        
        
  <?php include 'header.php';?>  
      
        
        
        
        <div id="wrapper-content" class="clearfix ">
            <div id="primary-content" class="pd-top-0 pd-bottom-0 page-wrap">
                <div class="container clearfix">
                    <div class="page-inner">
                        <article id="post-279" class="pages post-279 page type-page status-publish hentry">
                            <div class="entry-content clearfix">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div id="rev_slider_9_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                                    <div id="rev_slider_9_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.6">
                                                        <ul>
                                                            <li data-index="rs-19" data-transition="flyin" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://themes.g5plus.net/mowasalat/images/slide-background-01-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="images/slide-background-01.jpg" alt="" title="slide-background-01" width="1920" height="824" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="-200 -100" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                                                                <div class="tp-caption   tp-resizeme" id="slide-19-layer-9" data-x="['right','right','right','left']" data-hoffset="['341','278','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="0" data-responsive_offset="on" style="z-index: 5;"><img src="images/overlay.png" alt="" width="3000" height="800" data-ww="" data-hh="" data-no-retina>
                                                                </div>
                                                                <div class="tp-caption   tp-resizeme" id="slide-19-layer-2" data-x="['left','left','center','center']" data-hoffset="['15','15','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-143','-146','-80','-69']" data-fontsize="['42','38','30','25']" data-lineheight="['42','38','auto','auto']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power3.easeInOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; font-size: 42px; line-height: 42px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Poppins;">MINERVA</div>
                                                                <div class="tp-caption   tp-resizeme" id="slide-19-layer-3" data-x="['left','left','center','center']" data-hoffset="['19','15','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-77','-79','-20','-20']" data-fontsize="['60','55','45','35']" data-lineheight="['60','55','auto','auto']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 60px; font-weight: 600; color: rgba(255, 255, 255, 1.00);font-family:Poppins;text-align:center;">Free Trade Warehousing Zone</div>
                                                                <div class="tp-caption fs-16   tp-resizeme" id="slide-19-layer-4" data-x="['left','left','center','center']" data-hoffset="['11','11','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-5','31','48']" data-fontsize="['16','16','16','14']" data-width="['620','550','500','320']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; min-width: 620px; max-width: 620px; white-space: normal; line-height: 20px;">Store goods without paying import duty for a maximum of 5 years.</div>
                                                            </li>
                                                            <li data-index="rs-20" data-transition="slotfade-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../images/flight-truck.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="images/flight-truck.jpg" alt="" title="slide-background-02" width="1920" height="1383" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="200 100" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                                <div class="tp-caption   tp-resizeme" id="slide-20-layer-9" data-x="['right','right','right','left']" data-hoffset="['351','279','0','0']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="0" data-responsive_offset="on" style="z-index: 5;"><img src="images/overlay.png" alt="" width="3000" height="800" data-ww="" data-hh="" data-no-retina>
                                                                </div>
                                                                <div class="tp-caption   tp-resizeme" id="slide-20-layer-2" data-x="['left','left','center','center']" data-hoffset="['15','15','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-143','-145','-80','-69']" data-fontsize="['42','38','30','25']" data-lineheight="['42','38','auto','auto']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power3.easeInOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; font-size: 42px; line-height: 42px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Poppins;text-align:center;">WE TAKE PRIDE IN SERVING</div>
                                                                <div class="tp-caption   tp-resizeme" id="slide-20-layer-3" data-x="['left','left','center','center']" data-hoffset="['15','15','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-75','-79','-20','-20']" data-fontsize="['60','55','45','35']" data-lineheight="['60','55','auto','auto']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 60px; font-weight: 600; color: rgba(255, 255, 255, 1.00);font-family:Poppins;text-align:center;">CARGO WORLDWIDE</div>
                                                                <div class="tp-caption fs-16   tp-resizeme" id="slide-20-layer-4" data-x="['left','left','center','center']" data-hoffset="['11','11','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-11','0','31','48']" data-fontsize="['16','16','16','14']" data-width="['620','550','500','320']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; min-width: 620px; max-width: 620px; white-space: normal; line-height: 20px;">Go beyond logistics, make the world go round and more for revolution business.</div>
                                                            </li>
                                                        </ul>
                                                        <script>
                                                            var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                            var htmlDivCss = "";
                                                            if (htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                            } else {
                                                                var htmlDiv = document.createElement("div");
                                                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                            }
                                                        </script>
                                                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                                    </div>
                                                    <script>
                                                        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                        var htmlDivCss = ".tp-caption.fs-16,.fs-16{color:rgba(255,255,255,1.00);font-size:16px;line-height:16px;font-weight:300;font-style:normal;font-family:Poppins;padding:0 0 0 0px;text-decoration:none;text-align:center;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}";
                                                        if (htmlDiv) {
                                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                        } else {
                                                            var htmlDiv = document.createElement("div");
                                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                        }
                                                    </script>
                                                    <script type="text/javascript">
                                                        /******************************************
                                                        				-	PREPARE PLACEHOLDER FOR SLIDER	-
                                                        			******************************************/

                                                        var setREVStartSize = function() {
                                                            try {
                                                                var e = new Object,
                                                                    i = jQuery(window).width(),
                                                                    t = 9999,
                                                                    r = 0,
                                                                    n = 0,
                                                                    l = 0,
                                                                    f = 0,
                                                                    s = 0,
                                                                    h = 0;
                                                                e.c = jQuery('#rev_slider_9_1');
                                                                e.responsiveLevels = [1240, 1024, 778, 480];
                                                                e.gridwidth = [1200, 1024, 778, 480];
                                                                e.gridheight = [700, 600, 500, 400];

                                                                e.sliderLayout = "fullwidth";
                                                                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                                                                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                                                                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                                                                    var u = (e.c.width(), jQuery(window).height());
                                                                    if (void 0 != e.fullScreenOffsetContainer) {
                                                                        var c = e.fullScreenOffsetContainer.split(",");
                                                                        if (c) jQuery.each(c, function(e, i) {
                                                                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                                                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                                                                    }
                                                                    f = u
                                                                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                                                                e.c.closest(".rev_slider_wrapper").css({
                                                                    height: f
                                                                })

                                                            } catch (d) {
                                                                console.log("Failure at Presize of Slider:" + d)
                                                            }
                                                        };

                                                        setREVStartSize();

                                                        var tpj = jQuery;

                                                        var revapi9;
                                                        tpj(document).ready(function() {
                                                            if (tpj("#rev_slider_9_1").revolution == undefined) {
                                                                revslider_showDoubleJqueryError("#rev_slider_9_1");
                                                            } else {
                                                                revapi9 = tpj("#rev_slider_9_1").show().revolution({
                                                                    sliderType: "standard",
                                                                    jsFileLocation: "//themes.g5plus.net/mowasalat/wp-content/plugins/revslider/public/assets/js/",
                                                                    sliderLayout: "fullwidth",
                                                                    dottedOverlay: "none",
                                                                    delay: 9000,
                                                                    navigation: {
                                                                        keyboardNavigation: "off",
                                                                        keyboard_direction: "horizontal",
                                                                        mouseScrollNavigation: "off",
                                                                        mouseScrollReverse: "default",
                                                                        onHoverStop: "off",
                                                                        touch: {
                                                                            touchenabled: "on",
                                                                            swipe_threshold: 75,
                                                                            swipe_min_touches: 50,
                                                                            swipe_direction: "horizontal",
                                                                            drag_block_vertical: false
                                                                        },
                                                                        arrows: {
                                                                            style: "mowasalat",
                                                                            enable: true,
                                                                            hide_onmobile: true,
                                                                            hide_under: 778,
                                                                            hide_onleave: false,
                                                                            tmp: '',
                                                                            left: {
                                                                                container: "layergrid",
                                                                                h_align: "left",
                                                                                v_align: "center",
                                                                                h_offset: 40,
                                                                                v_offset: 62
                                                                            },
                                                                            right: {
                                                                                container: "layergrid",
                                                                                h_align: "left",
                                                                                v_align: "center",
                                                                                h_offset: 110,
                                                                                v_offset: 69
                                                                            }
                                                                        }
                                                                    },
                                                                    responsiveLevels: [1240, 1024, 778, 480],
                                                                    visibilityLevels: [1240, 1024, 778, 480],
                                                                    gridwidth: [1200, 1024, 778, 480],
                                                                    gridheight: [700, 600, 500, 400],
                                                                    lazyType: "none",
                                                                    parallax: {
                                                                        type: "mouse",
                                                                        origo: "slidercenter",
                                                                        speed: 2000,
                                                                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                                                                        type: "mouse",
                                                                    },
                                                                    shadow: 0,
                                                                    spinner: "spinner2",
                                                                    stopLoop: "off",
                                                                    stopAfterLoops: -1,
                                                                    stopAtSlide: -1,
                                                                    shuffle: "off",
                                                                    autoHeight: "off",
                                                                    disableProgressBar: "on",
                                                                    hideThumbsOnMobile: "off",
                                                                    hideSliderAtLimit: 0,
                                                                    hideCaptionAtLimit: 0,
                                                                    hideAllCaptionAtLilmit: 0,
                                                                    debugMode: false,
                                                                    fallbacks: {
                                                                        simplifyAll: "off",
                                                                        nextSlideOnWindowFocus: "off",
                                                                        disableFocusListener: false,
                                                                    }
                                                                });
                                                            }
                                                        }); /*ready*/
                                                    </script>
                                                    <script>
                                                        var htmlDivCss = ' #rev_slider_9_1_wrapper .tp-loader.spinner2{ background-color: #079c98 !important; } ';
                                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                        if (htmlDiv) {
                                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                        } else {
                                                            var htmlDiv = document.createElement('div');
                                                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                        }
                                                    </script>
                                                    <script>
                                                        var htmlDivCss = unescape(".mowasalat.tparrows%20%7B%0A%09display%3A%20inline-block%3B%0A%09vertical-align%3A%20middle%3B%0A%09position%3A%20absolute%3B%0A%20%20%20%20width%3A%2050px%3B%0A%09height%3A%2060px%3B%0A%7D%0A.mowasalat.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%22FontAwesome%22%3B%0A%09height%3A%2060px%3B%0A%09line-height%3A%2060px%3B%0A%09width%3A%2050px%3B%0A%09font-size%3A%2032px%3B%0A%09border-radius%3A%200%3B%0A%09background-clip%3A%20padding-box%3B%0A%09text-align%3A%20center%3B%0A%09background-color%3A%20%23f6f6f6%3B%0A%09color%3A%20%231086df%3B%0A%09display%3A%20inline-block%3B%0A%7D%0A.mowasalat.tparrows%3Aafter%7B%0A%09content%3A%20%27%27%3B%0A%09display%3A%20block%3B%0A%09position%3A%20absolute%3B%0A%09top%3A%200%3B%0A%7D%0A.mowasalat.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Cf104%22%3B%0A%7D%0A.mowasalat.tparrows.tp-leftarrow%3Aafter%20%7B%0A%09left%3A%20100%25%3B%0A%09border-top%3A%20solid%2034px%20%23f6f6f6%3B%0A%09border-right%3A%20solid%206px%20transparent%3B%0A%09border-bottom%3A%20solid%200%20transparent%3B%0A%09border-top-width%3A%2060px%3B%0A%09border-right-width%3A%2010px%3B%0A%7D%0A.mowasalat.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Cf105%22%3B%0A%20%20%20%20background-color%3A%20%231086df%3B%0A%20%20%20%20color%3A%20%23fff%3B%0A%7D%0A.mowasalat.tparrows.tp-rightarrow%3Aafter%20%7B%0A%09right%3A%20100%25%3B%0A%09border-bottom%3A%20solid%2034px%20%231086df%3B%0A%09border-left%3A%20solid%206px%20transparent%3B%0A%09border-top%3A%20solid%200%20transparent%3B%0A%09border-bottom-width%3A%2060px%3B%0A%09border-left-width%3A%2010px%3B%0A%7D%0A%0A");
                                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                        if (htmlDiv) {
                                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                        } else {
                                                            var htmlDiv = document.createElement('div');
                                                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="mgf vc_row wpb_row vc_row-fluid mg-top-100 sm-mg-top-80 mg-bottom-100 sm-mg-bottom-80 vc_row-no-padding">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="g5plus-heading mg-bottom-60 sm-mg-bottom-40   text-center light size-md">
                                                    <h2>OUR SERVICES</h2> <span>BOOKING OUR CARGO TO THE FUTURE</span>
                                                </div>
                                                <div class="g5plus-services clearfix text-center excerpt-default padding-around-0 scale-top-bottom services-gray col-gap-0  ">
                                                    <div class="owl-carousel owl-nav-center-inner owl-nav-creative" data-plugin-options='{"autoHeight": true, "dots": false, "nav": true, "responsive": {"0" : {"items" : 1, "margin": 0}, "481" : {"items" : 2, "margin": 1}, "768" : {"items" : 3, "margin": 1}, "1200" : {"items" : 6, "margin": 1}}}'>
                                                        
														<a href="service1.php"> 
														<div class="services-item">
                                                            <div class="services-inner">
                                                                <div class="services-avatar">
                                                                    <img src="images/serv-01.jpg" > 
                                                                    <div class="services-triangle-overlay services-size-md"></div>
                                                                </div>
                                                                <div class="services-content"> <h2>Free Trade Warehousing Zone ( FTWZ)</h2>
                                                                   <p>The future of trading in and from India. Makes trading easier. Multinationals who want to enter Indian Market can test their products in Indian market without much hassle. Can make India a trading hub for SAARC and South East Asia.</p>
                                                                </div>
                                                            </div>
                                                        </div>
														</a>

                                                        <a href="service10.php"> 
                                                        <div class="services-item">
                                                            <div class="services-inner">
                                                                <div class="services-avatar">
                                                                    <img src="images/internationfright2.jpg" > 
                                                                    <div class="services-triangle-overlay services-size-md"></div>
                                                                </div>
                                                                <div class="services-content"> <h2>International Freight Forwarding</h2>
                                                                    <p>MINERVA will offer minimum 5% cost saving with customised  logistics solutions. We go beyond the conventional freight forwarding by providing the most important services required along with it. We not only do the Air and Sea but we also provide you the CHA and Bonded warehouses with a professional team. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                        
                                                        <a href="service3.php">     
                                                        <div class="services-item">
                                                            <div class="services-inner">
                                                                     
                                                                <div class="services-avatar">
                                                                    <img src="images/Container Freight Station.jpg" > 
                                                                    <div class="services-triangle-overlay services-size-md"></div>
                                                                </div>
                                                                <div class="services-content"> <h2>Container Freight Station (CFS)</h2>
                                                                    <p>For people who are looking at consolidating their import or export cargo to optimise freight or defer their duty payments we provide them with our freight stations. These  are equipped to store and handle your temperature control products.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>

                                                        <a href="service6-1.php"> 
                                                        <div class="services-item">
                                                            <div class="services-inner">
                                                                <div class="services-avatar">
                                                                     <img src="images/3PL4Pl2.jpg"> 
                                                                    <div class="services-triangle-overlay services-size-md"></div>
                                                                </div>
                                                                <div class="services-content"> <h2>3PL & 4PL Warehousing</h2>
                                                                    <p>Minerva is planning to build large warehouses in Key places with a concept of park and pay to ease your Inventory management and distribution issues. Our professional team equipped with modern handling equipment and a robust WMS system makes your inventory visibility and handling easier and cost effective. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>

                                                        <a href="service2.php"> 
                                                        <div class="services-item">
                                                            <div class="services-inner">
                                                                <div class="services-avatar">
                                                                     <img src="images/custom.jpg"> 
                                                                    <div class="services-triangle-overlay services-size-md"></div>
                                                                </div>
                                                                <div class="services-content"> <h2>Customs Clearance</h2>
                                                                   <p>For the first time in the logistics Industry , MINERVA will offer CHA services free of cost  to Customers who engage MINERVA  for the Complete end to end logistics services with volume above 200 TEU per month. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>     

                                                        <a href="service4.php"> 
                                                        <div class="services-item">
                                                            <div class="services-inner">
                                                                <div class="services-avatar">
                                                                    <img src="images/Cold STorage and COld chanin Logistics.jpg"> 
                                                                    <div class="services-triangle-overlay services-size-md"></div>
                                                                </div>
                                                                <div class="services-content"> <h2>Cold Storage & Cold Chain Logistics</h2>
                                                                    <p>Minerva is GDP (Good Distribution Practice) compliant and understands the importance of Cold Chain. Our facilities are equipped with the best of the cold chain equipment with temperature ranging from -20, 2 to 8 and 18-25 degree cold rooms.	</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                        
                                                        <a href="service11.php"> 
                                                        <div class="services-item">
                                                            <div class="services-inner">
                                                                <div class="services-avatar">
                                                                    <img src="images/Surface Transport.jpg"> 
                                                                    <div class="services-triangle-overlay services-size-md"></div>
                                                                </div>
                                                                <div class="services-content"> <h2>Surface Transportation</h2>
                                                                   <p>Minerva is ready to take care of all your primary and secondary transportation across India. We are ready to give you an end to end service from your manufacturer to your customer.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                        
                                                        <a href="service12.php"> 
                                                        <div class="services-item">
                                                            <div class="services-inner">
                                                                <div class="services-avatar">
                                                                    <img src="images/aircargo1.jpg"> 
                                                                    <div class="services-triangle-overlay services-size-md"></div>
                                                                </div>
                                                                <div class="services-content"> <h2>Air Cargo</h2>
     <p>Whether your shipments fly in the bellies of commercial planes or require specialist freighter aircraft to move them, Minerva can provide tailor-made solutions for your all your airfreight at affordable cost.
</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>

                                                        
                                                        <a href="service7.php"> 
                                                        <div class="services-item">
                                                            <div class="services-inner">
                                                                <div class="services-avatar">
                                                                    <img src="images/project Cargo handling.jpg"> 
                                                                    <div class="services-triangle-overlay services-size-md"></div>
                                                                </div>
                                                                <div class="services-content"> <h2>Project Cargo Handling</h2>
                                                                   <p>Our team is equipped to move your factories to moving your ODC cargo from any part of the world to any part of the world. Our relationship with Project specialists makes your project movement look easier.
</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>

                                                        
                                                        <a href="service13.php"> 
                                                        <div class="services-item">
                                                            <div class="services-inner">
                                                                <div class="services-avatar">
                                                                    <img src="images/expresscargo1.jpg"> 
                                                                    <div class="services-triangle-overlay services-size-md"></div>
                                                                </div>
                                                                <div class="services-content"> <h2>Express Cargo</h2>
                                                              <p> MINERVA offers Delivery within 8 hours in Tamilnadu within 24 hours across Metro cities in the country.  This will be tailor made for E-commerce players to reach their customers faster.
</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </a>
                                                        
                                                        <a href="service5.php">     
                                                            <div class="services-item">
                                                                <div class="services-inner">
                                                                    <div class="services-avatar">
                                                                       <img src="images/serv-05.jpg"> 
                                                                        <div class="services-triangle-overlay services-size-md"></div>
                                                                    </div>
                                                                    <div class="services-content"> <h2>Coastal Shipping</h2>
                                                             <p>We station our dedicated team of planners at the OEM’s facility to ensure hassle free movement of the automobile units from Factory to Dealers’ Showroom and maintain an end-to-end control over the supply chain.
    </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								
								
								
								
								
								<div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="g5plus-heading mg-bottom-60 sm-mg-bottom-40   text-center light size-md">
                                                    <h2>Free Trade Warehousing Zone </h2> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid mg-bottom-55 sm-mg-bottom-35">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
														    <iframe width="560" height="450" src="https://www.youtube.com/embed/_l7V1inhgzI?rel=0" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element  mg-bottom-40">
                                                    <div class="wpb_wrapper">
                                                        
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-flex">
                                                    <div class="mg-bottom-35 col-mb-12 wpb_column vc_column_container vc_col-sm-6 vc_col-xs-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="g5plus-icon-box text-left clearfix icon-box-dark    ">
                                                                    <div class="ib-shape">
                                                                        <div class="ib-shape-inner icon-bg-circle icon-scheme-gray ib-large step-no"> 1
                                                                        </div>
                                                                    </div>
                                                                    <div class="ib-content"> 
                                                                        <p>Duty deferment benefits (Improves cash flow). The goods can be stored in FTWZ even for maximum of 5 years without paying import duty.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													
													
													
                                                    <div class="mg-bottom-35 col-mb-12 wpb_column vc_column_container vc_col-sm-6 vc_col-xs-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="g5plus-icon-box text-left clearfix icon-box-dark    ">
                                                                    <div class="ib-shape">
                                                                        <div class="ib-shape-inner icon-bg-circle icon-scheme-gray ib-large step-no"> 2
                                                                        </div>
                                                                    </div>
                                                                    <div class="ib-content"> 
                                                                        <p>Express clearance – On wheel clearance . The consignment can delivered within 36 to 48 hours after unloaded from the ship 
</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mg-bottom-35 col-mb-12 wpb_column vc_column_container vc_col-sm-6 vc_col-xs-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="g5plus-icon-box text-left clearfix icon-box-dark    ">
                                                                    <div class="ib-shape">
                                                                        <div class="ib-shape-inner icon-bg-circle icon-scheme-gray ib-large step-no"> 3
                                                                        </div>
                                                                    </div>
                                                                    <div class="ib-content"> 
                                                                        <p> Exemption on 4% SAD, on imports through FTWZ & Hassle-free re-export </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-mb-12 wpb_column vc_column_container vc_col-sm-6 vc_col-xs-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="g5plus-icon-box text-left clearfix icon-box-dark    ">
                                                                    <div class="ib-shape">
                                                                        <div class="ib-shape-inner icon-bg-circle icon-scheme-gray ib-large step-no"> 4
                                                                        </div>
                                                                    </div>
                                                                    <div class="ib-content"> 
                                                                        <p> Foreign exchange transaction capability & Quality control capability prior to duty-payment </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="g5plus-heading mg-bottom-60 sm-mg-bottom-40   text-center light size-md">
                                                    <h2>Why Choose Us?</h2> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid mg-bottom-55 sm-mg-bottom-35">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img class="vc_single_image-img " src="images/why choose us new.jpg" width="557" height="521" alt="single-image-01" title="single-image-01" />
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element  mg-bottom-40">
                                                    <div class="wpb_wrapper">
                                                        <p class="fs-14 line-24">Team Minerva has abundant experience and the  ability to understand  customer requirements. The team is perpetually proactive and agile to ensure that all the customer expectations are met.
</p>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-flex">
                                                    <div class="mg-bottom-35 col-mb-12 wpb_column vc_column_container vc_col-sm-6 vc_col-xs-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="g5plus-icon-box text-left clearfix icon-box-dark    ">
                                                                    <div class="ib-shape">
                                                                        <div class="ib-shape-inner icon-bg-circle icon-scheme-gray ib-large"> <i class="flaticon-forklift-with-boxes"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ib-content"> <span>Unparalleled Quality</span>
                                                                        <p>No compromise on quality, but to remain,“Sturdy & Robust“</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mg-bottom-35 col-mb-12 wpb_column vc_column_container vc_col-sm-6 vc_col-xs-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="g5plus-icon-box text-left clearfix icon-box-dark    ">
                                                                    <div class="ib-shape">
                                                                        <div class="ib-shape-inner icon-bg-circle icon-scheme-gray ib-large"> <i class="flaticon-truck-3"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ib-content"> <span>Abundant Value added solutions</span>
                                                                        <p>Positioning our services and growing by offering  value added solutions and assessing cost feasibility
</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mg-bottom-35 col-mb-12 wpb_column vc_column_container vc_col-sm-6 vc_col-xs-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="g5plus-icon-box text-left clearfix icon-box-dark    ">
                                                                    <div class="ib-shape">
                                                                        <div class="ib-shape-inner icon-bg-circle icon-scheme-gray ib-large"> <i class="flaticon-ship-6"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ib-content"> <span>Continual Market Feedback</span>
                                                                        <p>Continuously giving new  services based on customer and market feedback</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-mb-12 wpb_column vc_column_container vc_col-sm-6 vc_col-xs-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="g5plus-icon-box text-left clearfix icon-box-dark    ">
                                                                    <div class="ib-shape">
                                                                        <div class="ib-shape-inner icon-bg-circle icon-scheme-gray ib-large"> <i class="flaticon-technology"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ib-content"> <span>Fostering Long Term Relationship</span>
                                                                        <p>Building long term business relations  with customers.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								

								
								
								
								
								
								
								
								
								
								
								
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="images/contact.jpg" class="request-quote vc_row wpb_row vc_row-fluid bg-half-left-dark  sm-mg-bottom-80 vc_custom_1473991723632 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                                    <div class="pd-right-25 xs-pd-right-0 mg-top-100 mg-bottom-100 sm-mg-top-80 sm-mg-bottom-80 wpb_column vc_column_container vc_col-sm-6 vc_col-xs-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="g5plus-heading mg-bottom-60 sm-mg-bottom-40   text-left dark size-md vc_custom_1474270447247">
                                                    <h2>GET IN TOUCH</h2> <span>MAKE THE WORLD GO ROUND AND REVOLUTION BUSINESS</span>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <div role="form" class="wpcf7" id="wpcf7-f17-p279-o1" lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response"></div>
                                                            <form action="" method="post" class="wpcf7-form" novalidate>
                                                                <div style="display: none;">
                                                                    <input type="hidden" name="_wpcf7" value="17" />
                                                                    <input type="hidden" name="_wpcf7_version" value="4.5" />
                                                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f17-p279-o1" />
                                                                    <input type="hidden" name="_wpnonce" value="b755820a13" />
                                                                </div>
                                                                <div class="g5plus-contact-form form-1"> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name *" /></span>
                                                                    <br /> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your E-mail Address *" /></span>
                                                                    <br /> <span class="wpcf7-form-control-wrap your-location"><input type="text" name="your-location" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Location" /></span>
                                                                    <br /> <span class="wpcf7-form-control-wrap destination"><input type="text" name="destination" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="To Destination" /></span>
                                                                    <br /> <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Cargo/Person *" /></span>
                                                                    <br /> <span class="wpcf7-form-control-wrap contact-number"><input type="tel" name="contact-number" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Contact Number" /></span>
                                                                    <br />
                                                                    <button type="submit" class="btn-icon"><i class="fa fa-paper-plane"></i>SEND A QUOTE</button>
                                                                </div>
                                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid mg-bottom-90 sm-mg-bottom-70" style="display:none;">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="g5plus-heading mg-bottom-60 sm-mg-bottom-40   text-center light size-md">
                                                    <h2>LATEST NEWS</h2> 
                                                </div>
                                                <div class="g5plus-posts blog-wrap clearfix   owl-carousel" data-plugin-options='{"autoHeight": true, "dots": false, "nav": false, "responsive": {"0" : {"items" : 1, "margin": 0}, "481" : {"items" : 2, "margin": 30}, "768" : {"items" : 2, "margin": 30}, "992" : {"items" : 3, "margin": 30}, "1200" : {"items" : 3, "margin": 30}}}'>
                                                    <article id="post-176" class="post-grid clearfix post-176 post type-post status-publish format-standard has-post-thumbnail hentry category-air-freight category-cargo-insurance tag-business tag-cargo tag-land-freight tag-logisitics">
                                                        <div class="entry-thumb-wrap">
                                                            <div class="entry-thumbnail">
                                                                <a  title="Possibility In Every Direction" class="entry-thumbnail-overlay"> <img width='370' height='320' src="images/blog-01-370x320.jpg" alt="Possibility In Every Direction" class="img-responsive"> </a> <a data-thumb-src="http://themes.g5plus.net/mowasalat/images/blog-01-150x150.jpg" data-gallery-id="199741911" data-rel="lightGallery" href="images/blog-01.jpg" class="zoomGallery"><i
class="fa fa-expand"></i></a>
                                                            </div>
                                                            <div class="entry-post-meta">
                                                                <div class="entry-meta-format"><i class="fa fa-file-text-o"></i>
                                                                </div>
                                                                <div class="entry-meta-date"><a title="Possibility In Every Direction">July 11, 2016</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="entry-content-wrap">
                                                            <h3 class="entry-post-title"><a>Possibility In Every Direction</a></h3>
                                                            <div class="entry-excerpt">
                                                                <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra. Mauris neque felis, volutpat nec ullamcorper eget, sagittis vel enim. Nam sit amet ante egestas, gravida tellus vitae, semper eros. Nullam mattis mi at metus egestas, in porttitor lectus sodales. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate laborum vero voluptatum. Lorem quasi aliquid [&hellip;]</p>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article id="post-180" class="post-grid clearfix post-180 post type-post status-publish format-gallery hentry category-cargo-management category-consulting tag-business tag-cargo tag-land-freight tag-logisitics post_format-post-format-gallery">
                                                        <div class="entry-thumb-wrap">
                                                            <div class="owl-carousel owl-dot-bottom owl-nav-center-inner owl-dark" data-plugin-options='{"items": 1, "loop" : false, "dots" : true, "nav" : true, "autoplay": true, "autoplayHoverPause": true}'>
                                                                <div class="entry-thumbnail">
                                                                    <a href="#" title="Not The Average Freight Fowarder" class="entry-thumbnail-overlay"> <img width='370' height='320' src="images/blog-02-370x320.jpg" alt="Not The Average Freight Fowarder" class="img-responsive"> </a> <a data-thumb-src="http://themes.g5plus.net/mowasalat/images/blog-02-150x150.jpg" data-gallery-id="1911613890" data-rel="lightGallery" href="images/blog-02.jpg" class="zoomGallery"><i
class="fa fa-expand"></i></a>
                                                                </div>
                                                                <div class="entry-thumbnail">
                                                                    <a href="" title="Not The Average Freight Fowarder" class="entry-thumbnail-overlay"> <img width='370' height='320' src="images/blog-03-370x320.jpg" alt="Not The Average Freight Fowarder" class="img-responsive"> </a> <a data-thumb-src="http://themes.g5plus.net/mowasalat/images/blog-03-150x150.jpg" data-gallery-id="1911613890" data-rel="lightGallery" href="images/blog-03.jpg" class="zoomGallery"><i
class="fa fa-expand"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="entry-post-meta">
                                                                <div class="entry-meta-format"><i class="fa fa-image"></i>
                                                                </div>
                                                                <div class="entry-meta-date"><a title="Not The Average Freight Fowarder">July 5, 2016</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="entry-content-wrap">
                                                            <h3 class="entry-post-title"><a class="text-color-bold text-color-accent-hover" title="Not The Average Freight Fowarder"
href="http://themes.g5plus.net/mowasalat/not-the-average-freight-fowarder/">Not The Average Freight Fowarder</a></h3>
                                                            <div class="entry-excerpt">
                                                                <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra. Mauris neque felis, volutpat nec ullamcorper eget, sagittis vel enim. Nam sit amet ante egestas, gravida tellus vitae, semper eros. Nullam mattis mi at metus egestas, in porttitor lectus sodales. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate laborum vero voluptatum. Lorem quasi aliquid [&hellip;]</p>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article id="post-184" class="post-grid clearfix post-184 post type-post status-publish format-video has-post-thumbnail hentry category-land-transport category-sea-freight tag-business tag-cargo tag-land-freight tag-logisitics post_format-post-format-video">
                                                        <div class="entry-thumb-wrap">
                                                            <div class="entry-thumbnail post-video">
                                                                <a class="entry-thumbnail-overlay"  title="Great Voyages Start Here"> <img class="img-responsive" src="images/blog-04-370x320.jpg" alt="Great Voyages Start Here" /> </a> <a class="view-video zoomGallery" data-src="https://www.youtube.com/watch?v=WQVO76h-p7Q"><i
class="fa fa-play"></i></a>
                                                            </div>
                                                            <div class="entry-post-meta">
                                                                <div class="entry-meta-format"><i class="fa fa-youtube-play"></i>
                                                                </div>
                                                                <div class="entry-meta-date"><a title="Great Voyages Start Here" >June 25, 2016</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="entry-content-wrap">
                                                            <h3 class="entry-post-title"><a class="text-color-bold text-color-accent-hover" title="Great Voyages Start Here">Great Voyages Start Here</a></h3>
                                                            <div class="entry-excerpt">
                                                                <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra. Mauris neque felis, volutpat nec ullamcorper eget, sagittis vel enim. Nam sit amet ante egestas, gravida tellus vitae, semper eros. Nullam mattis mi at metus egestas, in porttitor lectus sodales. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate laborum vero voluptatum. Lorem quasi aliquid [&hellip;]</p>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article id="post-187" class="post-grid clearfix post-187 post type-post status-publish format-standard has-post-thumbnail hentry category-land-transport category-warehosuing tag-business tag-cargo tag-land-freight tag-logisitics">
                                                        <div class="entry-thumb-wrap">
                                                            <div class="entry-thumbnail">
                                                                <a> <img width='370' height='320' src="images/blog-05-370x320.jpg" alt="Trucking Company History" class="img-responsive"> </a> <a data-thumb-src="http://themes.g5plus.net/mowasalat/images/blog-05-150x150.jpg" data-gallery-id="1013932018" data-rel="lightGallery" href="images/blog-05.jpg" class="zoomGallery"><i
class="fa fa-expand"></i></a>
                                                            </div>
                                                            <div class="entry-post-meta">
                                                                <div class="entry-meta-format"><i class="fa fa-file-text-o"></i>
                                                                </div>
                                                                <div class="entry-meta-date"><a title="Trucking Company History" >June 5, 2016</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="entry-content-wrap">
                                                            <h3 class="entry-post-title"><a class="text-color-bold text-color-accent-hover" title="Trucking Company History"
href="http://themes.g5plus.net/mowasalat/trucking-company-history/">Trucking Company History</a></h3>
                                                            <div class="entry-excerpt">
                                                                <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra. Mauris neque felis, volutpat nec ullamcorper eget, sagittis vel enim. Nam sit amet ante egestas, gravida tellus vitae, semper eros. Nullam mattis mi at metus egestas, in porttitor lectus sodales. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate laborum vero voluptatum. Lorem quasi aliquid [&hellip;]</p>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article id="post-195" class="post-grid clearfix post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-land-transport category-sea-freight tag-business tag-cargo tag-land-freight tag-logisitics">
                                                        <div class="entry-thumb-wrap">
                                                            <div class="entry-thumbnail">
                                                                <a> <img width='370' height='320' src="images/blog-06-370x320.jpg" alt="Ground Shipping" class="img-responsive"> </a> <a data-thumb-src="http://themes.g5plus.net/mowasalat/images/blog-06-150x150.jpg" data-gallery-id="230132587" data-rel="lightGallery" href="images/blog-06.jpg" class="zoomGallery"><i
class="fa fa-expand"></i></a>
                                                            </div>
                                                            <div class="entry-post-meta">
                                                                <div class="entry-meta-format"><i class="fa fa-file-text-o"></i>
                                                                </div>
                                                                <div class="entry-meta-date"><a title="Ground Shipping" >May 15, 2016</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="entry-content-wrap">
                                                            <h3 class="entry-post-title"><a class="text-color-bold text-color-accent-hover" title="Ground Shipping"
href="http://themes.g5plus.net/mowasalat/ground-shipping/">Ground Shipping</a></h3>
                                                            <div class="entry-excerpt">
                                                                <p>Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra. Mauris neque felis, volutpat nec ullamcorper eget, sagittis vel enim. Nam sit amet ante egestas, gravida tellus vitae, semper eros. Nullam mattis mi at metus egestas, in porttitor lectus sodales. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate laborum vero voluptatum. Lorem quasi aliquid [&hellip;]</p>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" class="vc_row wpb_row vc_row-fluid pd-top-100 pd-bottom-100 sm-pd-top-80 sm-pd-bottom-80 vc_custom_1468633713022 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving vc_row-background-overlay-wrap" style="display:none;>
                                    <div class="vc_row-background-overlay" style="background-color: rgba(0,0,0,0.9)"></div>
                                    <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-sm-offset-1" style="display:none;>
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="g5plus-heading mg-bottom-60 sm-mg-bottom-40   text-center dark size-md">
                                                    <h2>WHAT OUR CLIENTS SAYS</h2> <span>ALL WHAT CUSTOMERS SAID ABOUT US</span>
                                                </div>
                                                <div class="g5plus-testimonials owl-carousel style1 color-dark   owl-dot-round" data-plugin-options='{"dots": true, "nav": false, "items": 1, "animateOut": "fadeOut"}'>
                                                    <div class="testimonial-item"> <img alt="Fatma Hassan" src="images/testimonials-avatar.png" />
                                                        <div class="info">
                                                            <h4>Fatma Hassan</h4>
                                                        </div>
                                                        <p>Imagination… What we can easily see is only a small percentage of what is possible. Logistics through innovation, dedication, and technology.</p>
                                                    </div>
                                                    <div class="testimonial-item"> <img alt="Jollie Rose" src="images/testimonials-avatar-01.jpg" />
                                                        <div class="info">
                                                            <h4>Jollie Rose</h4>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="g5plus-partner-carousel  pd-top-45 pd-bottom-45 ">
                                                    <div class="row">
                                                        
														<div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-07" src="images/partner-02.png" /></div>
                                                            </div>
                                                            
															<div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-07" src="images/partner-01.png" /></div>
                                                            </div>
                                                            
                                                            <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-08" src="images/partner-03.png" /></div>
                                                            </div>
                                                            <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-09" src="images/partner-04.png" /></div>
                                                            </div>
                                                          
                                                            <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-07" src="images/partner-07.png" /></div>
                                                            </div>
                                                            <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-08" src="images/partner-08.png" /></div>
                                                            </div>
                                                            <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-09" src="images/partner-09.png" /></div>
                                                            </div>
                                                            <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-10" src="images/partner-10.png" /></div>
                                                            </div>
                                                            <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-10" src="images/partner-11.png" /></div>
                                                            </div>
                                                            <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-10" src="images/partner-12.jpg" /></div>
                                                            </div>
															
															  <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-10" src="images/partner-05.jpg" /></div>
                                                            </div>
                                                           
															
															<div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-05" src="images/partner-13.png" /></div>
                                                            </div>
                                                            <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-05" src="images/partner-14.png" /></div>
                                                            </div>
                                                            <div class='partner-item text-center height-160'>
                                                                <div class='bordered bg_white' style="opacity: 1 "> <img style="opacity: 1 " alt="partner-05" src="images/partner-15.png" /></div>
                                                            </div>

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        
   <?php include 'footer.php';?>  

   
    <script type="text/javascript">
        (function() {
            function addEventListener(element, event, handler) {
                if (element.addEventListener) {
                    element.addEventListener(event, handler, false);
                } else if (element.attachEvent) {
                    element.attachEvent('on' + event, handler);
                }
            }

            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields && urlFields.length > 0) {
                for (var j = 0; j < urlFields.length; j++) {
                    addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
                }
            } /* test if browser supports date fields */
            var testInput = document.createElement('input');
            testInput.setAttribute('type', 'date');
            if (testInput.type !== 'date') {

                /* add placeholder & pattern to all date fields */
                var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
                for (var i = 0; i < dateFields.length; i++) {
                    if (!dateFields[i].placeholder) {
                        dateFields[i].placeholder = 'YYYY-MM-DD';
                    }
                    if (!dateFields[i].pattern) {
                        dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                    }
                }
            }

        })();
    </script>
    <div id="search_popup_wrapper" class="dialog">
        <div class="dialog__overlay"></div>
        <div class="dialog__content">
            <div class="morph-shape">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 520 280" preserveAspectRatio="none">
                    <rect x="3" y="3" fill="none" width="516" height="276" /> </svg>
            </div>
            <div class="dialog-inner">
                <h2>Enter your keyword</h2>
                <form method="get" action="http://themes.g5plus.net/mowasalat/" class="search-popup-inner">
                    <input type="text" name="s" placeholder="Type and hit enter...">
                    <button type="submit">Search</button>
                </form>
                <div><a class="action prevent-default" data-dialog-close="close" href="#"><i
class="fa fa-close transition03"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>
    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">
            {{{ data.variation.variation_description }}}
        </div>

        <div class="woocommerce-variation-price">
            {{{ data.variation.price_html }}}
        </div>

        <div class="woocommerce-variation-availability">
            {{{ data.variation.availability_html }}}
        </div>
    </script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Sorry, this product is unavailable. Please choose a different combination.</p>
    </script>
    <script type='text/javascript'>
        /*  */
        var _wpcf7 = {
            "loaderUrl": "http:\/\/themes.g5plus.net\/mowasalat\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
            "recaptcha": {
                "messages": {
                    "empty": "Please verify that you are not a robot."
                }
            },
            "sending": "Sending ...",
            "cached": "1"
        };
        /*  */
    </script>
    <script type='text/javascript'>
        /*  */
        var woocommerce_params = {
            "ajax_url": "\/mowasalat\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/mowasalat\/home-01\/?wc-ajax=%%endpoint%%"
        };
        /*  */
    </script>
    <script type='text/javascript'>
        /*  */
        var wc_cart_fragments_params = {
            "ajax_url": "\/mowasalat\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/mowasalat\/home-01\/?wc-ajax=%%endpoint%%",
            "fragment_name": "wc_fragments"
        };
        /*  */
    </script>
    <script type='text/javascript'>
        /*  */
        var yith_woocompare = {
            "ajaxurl": "\/mowasalat\/home-01\/?wc-ajax=%%endpoint%%",
            "actionadd": "yith-woocompare-add-product",
            "actionremove": "yith-woocompare-remove-product",
            "actionview": "yith-woocompare-view-table",
            "added_label": "Added",
            "table_title": "Product Comparison",
            "auto_open": "yes",
            "loader": "http:\/\/themes.g5plus.net\/mowasalat\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif",
            "button_text": "Compare"
        };
        /*  */
    </script>
    <script type='text/javascript'>
        /*  */
        var yith_wcwl_l10n = {
            "ajax_url": "\/mowasalat\/wp-admin\/admin-ajax.php",
            "redirect_to_cart": "no",
            "multi_wishlist": "",
            "hide_add_button": "1",
            "is_user_logged_in": "",
            "ajax_loader_url": "http:\/\/themes.g5plus.net\/mowasalat\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif",
            "remove_from_wishlist_after_add_to_cart": "yes",
            "labels": {
                "cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your browser.",
                "added_to_cart_message": "<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"
            },
            "actions": {
                "add_to_wishlist_action": "add_to_wishlist",
                "remove_from_wishlist_action": "remove_from_wishlist",
                "move_to_another_wishlist_action": "move_to_another_wishlsit",
                "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem"
            }
        };
        /*  */
    </script>
    <script type='text/javascript'>
        /*  */
        var g5plus_app_variable = {
            "ajax_url": "http:\/\/themes.g5plus.net\/mowasalat\/wp-admin\/admin-ajax.php",
            "theme_url": "http:\/\/themes.g5plus.net\/mowasalat\/wp-content\/themes\/g5plus-mowasalat\/",
            "site_url": "http:\/\/themes.g5plus.net\/mowasalat"
        };
        /*  */
    </script>
    <script type='text/javascript'>
        /*  */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/mowasalat\/wp-admin\/admin-ajax.php"
            }
        };
        /*  */
    </script>
    <script type='text/javascript'>
        /*  */
        var wc_add_to_cart_variation_params = {
            "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
            "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
        };
        /*  */
    </script>
    <script type='text/javascript'>
        /*  */
        var mc4wp_forms_config = [];
        /*  */
    </script>
    <!--[if lte IE 9]> <script type='text/javascript' src='http://themes.g5plus.net/mowasalat/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=3.1.12'></script> <![endif]-->
    <script>
        jQuery("style#xmenu_custom_style").append("@media screen and (min-width: 992px) {#menu-item-1599 > ul.x-sub-menu{width:540px;}}");
    </script>
    <script>
        jQuery("style#xmenu_custom_style").append("@media screen and (min-width: 992px) {#menu-item-mobile-1599 > ul.x-sub-menu{width:540px;}}");
    </script>
    <script src="wp-content/cache/min/1/6e8faead5f77f65cbf40689e8c81d90b.js" data-minify="1"></script>
<style>
.mowasalat.tparrows.tp-rightarrow:before {
    content: "\f105";
    background-color: #079c98;
    color: #fff;
}
.mowasalat.tparrows:before {
    background-color: #f6f6f6;
    color: #079c98;

}
</style>



<style>

@font-face {
	font-family: 'Stellar-Regular';
	src: url('fonts/Stellar-Regular.otf') format('opentype');
}
@font-face {
	font-family: 'Stellar-Bold';
	src: url('fonts/Stellar-Bold.otf') format('opentype');
}




/* text-based popup styling */
.white-popup {
  position: relative;
  background: #FFF;
  width: auto;
  max-width: 700px;
  margin: 0 auto;
}

/* 




====== 3d unfold ======

*/
.mfp-3d-unfold {
  /* start state */
  /* animate in */
  /* animate out */
}
.mfp-3d-unfold .mfp-content {
  perspective: 2000px;
}
.mfp-3d-unfold .mfp-with-anim {
  opacity: 0;
  transition: all 0.3s ease-in-out;
  transform-style: preserve-3d;
  transform: rotateY(-60deg);
}
.mfp-3d-unfold.mfp-bg {
  opacity: 0;
  transition: all 0.5s;
}
.mfp-3d-unfold.mfp-ready .mfp-with-anim {
  opacity: 1;
  transform: rotateY(0deg);
}
.mfp-3d-unfold.mfp-ready.mfp-bg {
  opacity: 0.8;
}
.mfp-3d-unfold.mfp-removing .mfp-with-anim {
  transform: rotateY(60deg);
  opacity: 0;
}
.mfp-3d-unfold.mfp-removing.mfp-bg {
  opacity: 0;
}

/* 



====== "Hinge" close effect ======

*/
@keyframes hinge {
  0% {
    transform: rotate(0);
    transform-origin: top left;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    transform: rotate(80deg);
    transform-origin: top left;
    animation-timing-function: ease-in-out;
  }
  40% {
    transform: rotate(60deg);
    transform-origin: top left;
    animation-timing-function: ease-in-out;
  }
  80% {
    transform: rotate(60deg) translateY(0);
    opacity: 1;
    transform-origin: top left;
    animation-timing-function: ease-in-out;
  }
  100% {
    transform: translateY(700px);
    opacity: 0;
  }
}
.hinge {
  animation-duration: 1s;
  animation-name: hinge;
}

.mfp-with-fade .mfp-content, .mfp-with-fade.mfp-bg {
  opacity: 0;
  transition: opacity .5s ease-out;
}
.mfp-with-fade.mfp-ready .mfp-content {
  opacity: 1;
}
.mfp-with-fade.mfp-ready.mfp-bg {
  opacity: 0.8;
}
.mfp-with-fade.mfp-removing.mfp-bg {
  opacity: 0;
}

.pop-logo {
    width: 140px;
    margin: 0px auto 10px;
}

.land-title {
    text-align: center;
    margin: 20px 0px;
}

button.mfp-close {
    font-size: 36px !important;
    color: #000;
}

button.mfp-close:hover {
    background-color: transparent;
}

.txt-details-left {
    font-size: 30px;
    color: #004b9d;
    /* padding: 15px; */
    border: 2px solid #535353;
    border-radius: 50px;
    width:50px;
    height: 50px;
    line-height:50px;
    text-align: center;
    float: left;
    /* padding-right: 30px; */
}

.txt-details-right {
    float: left;
    padding-left: 20px;
    display: table;
    height: 50px;
}

.txt-details-right p {
    font-family: 'Stellar-Regular';
    color: #4f4c4a;
    font-size: 18px;
    margin: 0px;
    line-height: 24px;
    display: table-cell;
    vertical-align: middle;
}
.popup-wrap {
    padding-top: 18px;
}

.vid-iframe {
    background-color: #ededed;
    padding: 30px 60px 18px;
}

.minerva-details {
    width: 85%;
    margin: 20px auto 12px;
}

.txt-details-right p span{ font-size:18px;color:#004b9d;font-family: 'Stellar-Bold';
   }
   
 .txt-details {
    padding: 10px 0px;
}

</style>


<!--Reveal JS-->
<script type="text/javascript" src="css/scrollReveal.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		
		$('.list-inline a').click(function(){
  var selector = $(this).attr('data-filter');
  if(selector=="*")
  {
	  $(".works-area").addClass("allprd");
  }
  else
  {
	  $(".works-area").removeClass("allprd");
  }
});
 //  isoTop
            //==============================
            var $container = $('.works-area');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });

            $('.works-category li a').click(function () {
                $('.works-category .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
					
                });
                return false;
            });
			});	

//Reveal JS
        //================================
        window.scrollReveal = new scrollReveal();


        $(document).ready(function() {
            if ($(window).width() < 768)
            {
                $(".navbar-nav li a").click(function(event) {
                    $(".navbar-collapse").collapse('hide');
                });
            }
        });


</script>


	
	</body>


</html>
