<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php
    session_start();
    if (!isset($_SESSION["user_name"])) {
        $dangxuat = 'none';
        $dangnhap = 'block';
    } else {
        $dangxuat = 'block';
        $dangnhap = 'none';
    }
    ?>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="xmlrpc.php" />
    <script>
        (function (html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Trang chủ</title>
    <link rel='dns-prefetch' href='http://maxcdn.bootstrapcdn.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="Dòng thông tin Gấu bông siêu đẹp &raquo;"
        href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Gấu bông siêu đẹp &raquo;"
        href="comments/feed/index.html" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "\/./includes\/js\/wp-emoji-release.min.js?ver=5.5.7"
            }
        };
        ! function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++)
                t.supports[o[r]] = function (e) {
                    if (!p || !p.fillText)
                        return !1;
                    switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                        case "flag":
                            return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                                55356,
                                56826, 55356, 56819
                            ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                                56128,
                                56421, 56128, 56430, 56128, 56423, 56128, 56447
                            ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                                56128,
                                56430, 8203, 56128, 56423, 8203, 56128, 56447
                            ]);
                        case "emoji":
                            return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                    }
                    return !1
                }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t
                    .supports
                    .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function () {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function () {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load",
                    n, !
                    1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                    "complete" === a.readyState && t.readyCallback()
                })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji),
                    c(n
                        .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='.//css/dist/block-library/style.min234e.css?ver=5.5.7'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wc-block-vendors-style-css'
        href='content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style6b00.css?ver=3.4.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wc-block-style-css'
        href='content/plugins/woocommerce/packages/woocommerce-blocks/build/style6b00.css?ver=3.4.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='content/plugins/contact-form-7/./includes/css/stylesde54.css?ver=5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='wcva-shop-frontend-css'
        href='content/plugins/woocommerce-colororimage-variation-select/css/shop-frontend234e.css?ver=5.5.7'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='dashicons-css' href='./includes/css/dashicons.min234e.css?ver=5.5.7' type='text/css'
        media='all' />
    <link rel='stylesheet' id='flatsome-ionicons-css'
        href='../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min234e.css?ver=5.5.7' type='text/css'
        media='all' />
    <link rel='stylesheet' id='flatsome-icons-css' href='./content/themes/flatsome/assets/css/fl-iconsae34.css?ver=3.12'
        type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-main-css'
        href='./content/themes/flatsome/assets/css/flatsomee56c.css?ver=3.12.2' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-shop-css'
        href='./content/themes/flatsome/assets/css/flatsome-shope56c.css?ver=3.12.2' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css' href='content/themes/web-khoi-nghiep/style6aec.css?ver=3.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-googlefonts-css'
        href='http://fonts.googleapis.com/css?family=Helvetica%2CArial%2Csans-serif%3Aregular%2C700%2Cregular%2C700%2Cdefault&amp;display=swap&amp;ver=3.9'
        type='text/css' media='all' />
    <script type='text/javascript' src='./includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp' id='jquery-core-js'></script>
    <script type='text/javascript'
        src='./content/plugins/woocommerce-colororimage-variation-select/js/shop-frontend234e.js?ver=5.5.7'
        id='wcva-shop-frontend-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/41.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="./includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.5.7" />
    <meta name="generator" content="WooCommerce 4.6.3" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embedf8fe.json?url=http%3A%2F%2Fgaubong.giaodienwebmau.com%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed4c15?url=http%3A%2F%2Fgaubong.giaodienwebmau.com%2F&amp;format=xml" />
    <style>
    </style>

    <style id="custom-css" type="text/css">
        :root {
            --primary-color: #03c8c5;
        }

        .full-width .ubermenu-nav,
        .container,
        .row {
            max-width: 1170px
        }

        .row.row-collapse {
            max-width: 1140px
        }

        .row.row-small {
            max-width: 1162.5px
        }

        .row.row-large {
            max-width: 1200px
        }

        .header-main {
            height: 91px
        }

        #logo img {
            max-height: 91px
        }

        #logo {
            width: 281px;
        }

        .header-bottom {
            min-height: 44px
        }

        .header-top {
            min-height: 30px
        }

        .has-transparent+.page-title:first-of-type,
        .has-transparent+#main>.page-title,
        .has-transparent+#main>div>.page-title,
        .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
            padding-top: 141px;
        }

        .header.show-on-scroll,
        .stuck .header-main {
            height: 70px !important
        }

        .stuck #logo img {
            max-height: 70px !important
        }

        .search-form {
            width: 79%;
        }

        .header-bg-color,
        .header-wrapper {
            background-color: rgba(249, 249, 249, 0.9)
        }

        .header-bottom {
            background-color: #ef8da0
        }

        .stuck .header-main .nav>li>a {
            line-height: 50px
        }

        .header-bottom-nav>li>a {
            line-height: 16px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }

            #logo img {
                max-height: 70px
            }
        }

        .header-top {
            background-color: #3d3d3d !important;
        }

        /* Color */
        .accordion-title.active,
        .has-icon-bg .icon .icon-inner,
        .logo a,
        .primary.is-underline,
        .primary.is-link,
        .badge-outline .badge-inner,
        .nav-outline>li.active>a,
        .nav-outline>li.active>a,
        .cart-icon strong,
        [data-color='primary'],
        .is-outline.primary {
            color: #03c8c5;
        }

        /* Color !important */
        [data-text-color="primary"] {
            color: #03c8c5 !important;
        }

        /* Background Color */
        [data-text-bg="primary"] {
            background-color: #03c8c5;
        }

        /* Background */
        .scroll-to-bullets a,
        .featured-title,
        .label-new.menu-item>a:after,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        button[type="submit"],
        .button.wc-forward:not(.checkout):not(.checkout-button),
        .button.submit-button,
        .button.primary:not(.is-outline),
        .featured-table .title,
        .is-outline:hover,
        .has-icon:hover .icon-label,
        .nav-dropdown-bold .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown-bold.dark .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        .is-outline:hover,
        .tagcloud a:hover,
        .grid-tools a,
        input[type='submit']:not(.is-form),
        .box-badge:hover .box-text,
        input.button.alt,
        .nav-box>li>a:hover,
        .nav-box>li.active>a,
        .nav-pills>li.active>a,
        .current-dropdown .cart-icon strong,
        .cart-icon:hover strong,
        .nav-line-bottom>li>a:before,
        .nav-line-grow>li>a:before,
        .nav-line>li>a:before,
        .banner,
        .header-top,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover,
        .button.primary:not(.is-outline),
        input[type='submit'].primary,
        input[type='submit'].primary,
        input[type='reset'].button,
        input[type='button'].primary,
        .badge-inner {
            background-color: #03c8c5;
        }

        /* Border */
        .nav-vertical.nav-tabs>li.active>a,
        .scroll-to-bullets a.active,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        .accordion-title.active,
        .featured-table,
        .is-outline:hover,
        .tagcloud a:hover,
        blockquote,
        .has-border,
        .cart-icon strong:after,
        .cart-icon strong,
        .blockUI:before,
        .processing:before,
        .loading-spin,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover {
            border-color: #03c8c5
        }

        .nav-tabs>li.active>a {
            border-top-color: #03c8c5
        }

        .widget_shopping_cart_content .blockUI.blockOverlay:before {
            border-left-color: #03c8c5
        }

        .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
            border-left-color: #03c8c5
        }

        /* Fill */
        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            fill: #03c8c5;
        }

        /* Background Color */
        [data-icon-label]:after,
        .secondary.is-underline:hover,
        .secondary.is-outline:hover,
        .icon-label,
        .button.secondary:not(.is-outline),
        .button.alt:not(.is-outline),
        .badge-inner.on-sale,
        .button.checkout,
        .single_add_to_cart_button,
        .current .breadcrumb-step {
            background-color: #ef8da0;
        }

        [data-text-bg="secondary"] {
            background-color: #ef8da0;
        }

        /* Color */
        .secondary.is-underline,
        .secondary.is-link,
        .secondary.is-outline,
        .stars a.active,
        .star-rating:before,
        .woocommerce-page .star-rating:before,
        .star-rating span:before,
        .color-secondary {
            color: #ef8da0
        }

        /* Color !important */
        [data-text-color="secondary"] {
            color: #ef8da0 !important;
        }

        /* Border */
        .secondary.is-outline:hover {
            border-color: #ef8da0
        }

        @media screen and (max-width: 549px) {
            body {
                font-size: 100%;
            }
        }

        body {
            font-family: "Helvetica,Arial,sans-serif", sans-serif
        }

        body {
            font-weight: 0
        }

        .nav>li>a {
            font-family: "Helvetica,Arial,sans-serif", sans-serif;
        }

        .mobile-sidebar-levels-2 .nav>li>ul>li>a {
            font-family: "Helvetica,Arial,sans-serif", sans-serif;
        }

        .nav>li>a {
            font-weight: 700;
        }

        .mobile-sidebar-levels-2 .nav>li>ul>li>a {
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .off-canvas-center .nav-sidebar.nav-vertical>li>a {
            font-family: "Helvetica,Arial,sans-serif", sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .banner h1,
        .banner h2 {
            font-weight: 700;
        }

        .alt-font {
            font-family: "Helvetica,Arial,sans-serif", sans-serif;
        }

        .header:not(.transparent) .header-nav.nav>li>a {
            color: #ef8da0;
        }

        .header:not(.transparent) .header-bottom-nav.nav>li>a {
            color: #ffffff;
        }

        .header:not(.transparent) .header-bottom-nav.nav>li>a:hover,
        .header:not(.transparent) .header-bottom-nav.nav>li.active>a,
        .header:not(.transparent) .header-bottom-nav.nav>li.current>a,
        .header:not(.transparent) .header-bottom-nav.nav>li>a.active,
        .header:not(.transparent) .header-bottom-nav.nav>li>a.current {
            color: #eeee22;
        }

        .header-bottom-nav.nav-line-bottom>li>a:before,
        .header-bottom-nav.nav-line-grow>li>a:before,
        .header-bottom-nav.nav-line>li>a:before,
        .header-bottom-nav.nav-box>li>a:hover,
        .header-bottom-nav.nav-box>li.active>a,
        .header-bottom-nav.nav-pills>li>a:hover,
        .header-bottom-nav.nav-pills>li.active>a {
            color: #FFF !important;
            background-color: #eeee22;
        }

        @media screen and (min-width: 550px) {
            .products .box-vertical .box-image {
                min-width: 310px !important;
                width: 310px !important;
            }
        }

        .absolute-footer,
        html {
            background-color: #ef8da0
        }

        .label-new.menu-item>a:after {
            content: "New";
        }

        .label-hot.menu-item>a:after {
            content: "Hot";
        }

        .label-sale.menu-item>a:after {
            content: "Sale";
        }

        .label-popular.menu-item>a:after {
            content: "Popular";
        }
    </style>
    <meta property="fb:app_id" content="104537736801666" />
    <meta property="fb:admins" content="100001613853961" />
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=104537736801666";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <link rel="stylesheet" href="./admin/css/index.css">
</head>

<body>
    <div
        class="home page-template page-template-page-blank page-template-page-blank-php page page-id-41 theme-flatsome woocommerce-no-js lightbox nav-dropdown-has-arrow">
        <div id="wrapper">
            <header id="header" class="header has-sticky sticky-jump">
                <div class="header-wrapper">
                    <div id="masthead" class="header-main hide-for-sticky">
                        <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                            <div id="logo" class="flex-col logo">
                                <a href="index.php" title="Gấu bông siêu đẹp" rel="home">
                                    <img width="281" height="91" src="./content/uploads/2020/10/logoshop.png"
                                        class="header_logo header-logo" alt="Gấu bông siêu đẹp" /><img width="281"
                                        height="91" src="content/uploads/2020/10/logo.png" class="header-logo-dark"
                                        alt="Gấu bông siêu đẹp" /></a>
                            </div>
                            <div class="flex-col show-for-medium flex-left">
                                <ul class="mobile-nav nav nav-left ">
                                    <li class="nav-icon has-icon">
                                        <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay"
                                            data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu"
                                            aria-expanded="false">
                                            <i class="icon-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                           
                            <div class="flex-col hide-for-medium flex-right">
                                <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                                    <li class="html header-button-1">
                                        <div class="header-button">
                                            <a href="#" class="button primary" style="border-radius:99px;">
                                                <span>Hotline:0778153521</span>
                                            </a>
                                        </div>
                                    </li>


                                    <li class="account-item has-icon" style="display:<?php echo $dangnhap; ?>">
                                        <a href="./Dangnhap.php" class="nav-top-link nav-top-not-logged-in is-small">
                                            <input type="button" value="Đăng nhập" />

                                        </a>
                                    </li>


                                    <li class="cart-item has-icon has-dropdown" style="display:<?php echo $dangxuat; ?>"">

                                        <a href=" #" title="User" class="header-cart-link is-small">
                                        <img src="./images/user.png" alt="" id="avatar"
                                            style="width: 45px;margin-right: 10px">
                                        <span><?php echo $_SESSION["user_name"] ?></span>
                                        <a href="#" class="nav-top-link nav-top-not-logged-in is-small">

                                        </a>

                                        </a>

                                        <ul class="nav-dropdown nav-dropdown-default">
                                            <li class="html widget_shopping_cart">
                                                <div class="widget_shopping_cart_content">
                                                    <center>
                                            <li><a href="Giohang.php"> Giỏ hàng <i class="icon-shopping-bag"
                                                        data-icon-label="0"></i> </a>
                                            </li>
                                            <li><a href="index.php?user=dangxuat">ĐĂNG XUẤT</a></li>
                                            </center>
                                            <?php
                                                    if (!empty($_GET['user'])) {
                                                        if ($_REQUEST["user"]and $_REQUEST['user'] != "") {
                                                            unset($_SESSION["user_name"]);
                                                            echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
                                                        }
                                                    }
                                                    ?>
                            </div>
                            </li>
                            </ul>

                            </li>

                            </ul>
                        </div>
                        <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                                <li class="cart-item has-icon">
                                    <a href="#" class="header-cart-link off-canvas-toggle nav-top-link is-small"
                                        data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng"
                                        data-pos="right">

                                    </a>

                                    <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                                        <div class="cart-popup-inner inner-padding">
                                            <div class="cart-popup-title text-center">
                                                <h4 class="uppercase"></h4>
                                                <div class="is-divider"></div>
                                            </div>
                                            <div class="widget_shopping_cart_content">


                                                <p class="woocommerce-mini-cart__empty-message"></p>
                                            </div>
                                            <div class="cart-sidebar-content relative"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="container">
                        <div class="top-divider full-width"></div>
                    </div>
                </div>
                <div id="wide-nav" class="header-bottom wide-nav nav-dark flex-has-center hide-for-medium">
                    <div class="flex-row container">

                        <div class="flex-col hide-for-medium flex-left">
                            <ul class="nav header-nav header-bottom-nav nav-left  nav-spacing-xlarge nav-uppercase">
                            </ul>
                        </div>

                        <div class="flex-col hide-for-medium flex-center">
                            <ul class="nav header-nav header-bottom-nav nav-center  nav-spacing-xlarge nav-uppercase">
                                <li id="menu-item-50"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-41 current_page_item menu-item-50 active">
                                    <a href="index.php" aria-current="page" class="nav-top-link">Trang chủ</a></li>
                                <li id="menu-item-583"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-583">
                                    <a href="type.php?type=GẤUBÔNGTẶNGBẠNGÁI" class="nav-top-link">Gấu bông tặng bạn
                                        gái</a></li>
                                <li id="menu-item-584"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-584">
                                    <a href="type.php?type=GẤUBÔNGTẶNGBÉYÊU" class="nav-top-link">Gấu bông tặng bé
                                        yêu</a></li>
                                <li id="menu-item-585"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-585">
                                    <a href="type.php?type=GẤUBÔNGHOTTEEN" class="nav-top-link">Gấu bông hot teen</a>
                                </li>
                                <li id="menu-item-586"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-586">
                                    <a href="type.php?type=GẤUBÔNGHOT" class="nav-top-link">GẤU BÔNG HOT</a></li>
                                <li id="menu-item-587"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-587">
                                    <a href="type.php?type=GẤUBÔNGHOTTREND" class="nav-top-link">GẤU BÔNG HOT TREND</a>
                                </li>
                                <li id="menu-item-167"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-167">
                                    <a href="goccuagau.php" class="nav-top-link">Góc của gấu</a></li>
                                <li id="menu-item-165"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165">
                                    <a href="lienhe.php" class="nav-top-link">Liên hệ</a></li>

                            </ul>
                        </div>
                        <div class="flex-col hide-for-medium flex-right flex-grow">
                            <ul class="nav header-nav header-bottom-nav nav-right  nav-spacing-xlarge nav-uppercase">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div>
        </div>
        </header>
        <main id="main" class="">
            <div id="content" role="main" class="content-area">
                <section class="section section-danh-muc" id="section_153210049">
                    <div class="bg section-bg fill bg-fill  bg-loaded">
                    </div>
                    <div class="section-content relative">
                        <div class="row" id="row-380533759">
                            <div id="col-799809143" class="col div-danh-muc div-no-padding medium-2 small-4 large-2">
                                <div class="col-inner">
                                    <div class="icon-box featured-box icon-box-center text-center">
                                        <div class="icon-box-img" style="width: 130px">
                                            <div class="icon">
                                                <div class="icon-inner">
                                                    <img width="159" height="100"
                                                        src="./content/uploads/2020/10/giao-hang-gau.png"
                                                        class="attachment-medium size-medium" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                            <p><strong>GIAO HÀNG TẬN NHÀ</strong></p>
                                        </div>
                                    </div>


                                </div>
                            </div>



                            <div id="col-579139671" class="col div-danh-muc div-no-padding medium-2 small-4 large-2">
                                <div class="col-inner">
                                    <div class="icon-box featured-box icon-box-center text-center">
                                        <div class="icon-box-img" style="width: 130px">
                                            <div class="icon">
                                                <div class="icon-inner">
                                                    <img width="100" height="100"
                                                        src="./content/uploads/2020/10/boc-qua-1.png"
                                                        class="attachment-medium size-medium" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                            <p><strong>GÓI QUÀ GIÁ RẺ</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="col-935170341" class="col div-danh-muc div-no-padding medium-2 small-4 large-2">
                                <div class="col-inner">



                                    <div class="icon-box featured-box icon-box-center text-center">
                                        <div class="icon-box-img" style="width: 130px">
                                            <div class="icon">
                                                <div class="icon-inner">
                                                    <img width="87" height="100"
                                                        src="content/uploads/2020/10/tang-thiep.png"
                                                        class="attachment-medium size-medium" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                            <p><b>TẶNG THIỆP MIỄN PHÍ</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="col-330117709" class="col div-danh-muc div-no-padding medium-2 small-4 large-2">
                                <div class="col-inner">
                                    <div class="icon-box featured-box icon-box-center text-center">
                                        <div class="icon-box-img" style="width: 130px">
                                            <div class="icon">
                                                <div class="icon-inner">
                                                    <img width="136" height="100"
                                                        src="content/uploads/2020/10/nen-gau.png"
                                                        class="attachment-medium size-medium" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                            <p><strong>NÉN NHỎ GẤU</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="col-1025295116" class="col div-danh-muc div-no-padding medium-2 small-4 large-2">
                                <div class="col-inner">
                                    <div class="icon-box featured-box icon-box-center text-center">
                                        <div class="icon-box-img" style="width: 130px">
                                            <div class="icon">
                                                <div class="icon-inner">
                                                    <img width="87" height="100"
                                                        src="content/uploads/2020/10/tang-thiep.png"
                                                        class="attachment-medium size-medium" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                            <p><b>CÓ GIÁ SỈ</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="col-94064339" class="col div-danh-muc div-no-padding medium-2 small-4 large-2">
                                <div class="col-inner">
                                    <div class="icon-box featured-box icon-box-center text-center">
                                        <div class="icon-box-img" style="width: 130px">
                                            <div class="icon">
                                                <div class="icon-inner">
                                                    <img width="121" height="100"
                                                        src="content/uploads/2020/10/giat-gau.png"
                                                        class="attachment-medium size-medium" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                            <p><b>GIẶT GẤU BÔNG</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #section_153210049 {
                            padding-top: 23px;
                            padding-bottom: 23px;
                        }
                    </style>
                </section>


                <section class="section" id="section_777413036">
                    <div class="bg section-bg fill bg-fill  bg-loaded">
                    </div>
                    <div class="section-content relative">
                        <div class="row" id="row-513196996">
                            <div class=" has-hover box-normal box-text-bottom">
                                <div class="show">

                                    <div class="entry-content">
                                        <h2 style="text-align: center"><span style="color: #ff6683"><strong>GIỚI
                                                    THIỆU</strong></span></h2>
                                        <h2 style="text-align: center"><span class="_3gl1 _5zz4"
                                                data-offset-key="f8t1v-1-0"><span class="_ncl"><span
                                                        data-offset-key="f8t1v-1-0">🌟</span></span></span><span
                                                class="_3gl1 _5zz4" data-offset-key="f8t1v-2-0"><span class="_ncl"><span
                                                        data-offset-key="f8t1v-2-0">🌟</span></span></span><span
                                                class="_3gl1 _5zz4" data-offset-key="f8t1v-3-0"><span class="_ncl"><span
                                                        data-offset-key="f8t1v-3-0">🌟</span></span></span></h2>
                                        <div class="_39k2">
                                            <div class="_2yud clearfix">
                                                <div class="">
                                                    <div class="_42ef _8u">
                                                        <div class="_3uhg" style="text-align: center"><span
                                                                style="color: #02c4c1"><strong>GẤU BÔNG
                                                                    ONLINE</strong></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_39k5 _5s6c">
                                            <div class="_2cuy _3dgx _2vxa"><span style="color: #363636"><strong><span
                                                            style="color: #02c4c1"><em>Gaubongonline.vn</em></span></strong>
                                                    <span style="color: #02c4c1">ra đời từ đầu năm 2013, tiên phong việc
                                                        bán gấu bông online, với mục tiêu thay đổi thói quen mua Gấu
                                                        Bông của phần lớn khách hàng trên toàn quốc. Hơn 8 năm phát
                                                        triển đã tạo được niềm tin vững chắc trong lòng mọi Khách
                                                        Hàng.</span></span></div>
                                            <div><span style="color: #02c4c1">Nhận diện logo màu xanh để tránh bị mua
                                                    phải thương hiệu nhái và kém chất lượng.</span></div>
                                            <div><span style="color: #02c4c1">Shop có uy tín ván gấu bông đẹp &#8211;
                                                    chất lượng tại Hà Nội và TP. Hồ Chí Minh.</span></div>
                                            <h3 class="_2cuy _50a1 _2vxa"><span style="color: #ff6683">Hệ thống cửa hàng
                                                    toàn quốc</span></h3>
                                            <p class="_2cuy _50a1 _2vxa"><span style="color: #ff6683"><strong><em>▪️ Tại
                                                            Hà Nội:</em></strong></span></p>
                                            <ul>
                                                <li><span style="color: #02c4c1">Số 1028 Đường Láng, Đống Đa, Hà Nội
                                                    </span>
                                                    <ul>
                                                        <li><span style="color: #02c4c1">Hotline: 035.369.6616</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span style="color: #02c4c1">Số 17 ngõ 23 Nguyễn Khuyến, Văn Quán,
                                                        Hà Đông</span>
                                                    <ul>
                                                        <li><span style="color: #02c4c1">Hotline: 09.7989.6616 &#8211;
                                                                03.9799.6616</span></li>
                                                    </ul>
                                                </li>
                                                <li><span style="color: #02c4c1">Số 42 Xuân Thủy, Phường Dịch Vọng, Quận
                                                        Cầu Giấy</span>
                                                    <ul>
                                                        <li><span style="color: #02c4c1">Hotline: 093.777.6616</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <p><span style="color: #02c4c1"><em><strong>Website</strong></em>: <a
                                                        style="color: #02c4c1"
                                                        href="#"><em><strong>https://gaubongonline.vn</strong></em></a></span>
                                            </p>
                                            <p><span style="color: #ff6683"><em><strong>▪️ Tại Hồ Chí
                                                            Minh:</strong></em></span></p>
                                            <ul>
                                                <li><span style="color: #02c4c1">Số 77 Bàu Cát 1, Phường 14, Quận Tân
                                                        Bình</span>
                                                    <ul>
                                                        <li><span style="color: #02c4c1">Hotline: 09.6618.6616</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span style="color: #02c4c1">Số 555 Quang Trung, Phường 10, Quận Gò
                                                        Vấp</span>
                                                    <ul>
                                                        <li><span style="color: #02c4c1">Hotline: 09.3377.6616</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <p><span style="color: #02c4c1"><a style="color: #02c4c1"
                                                        href="#"><em><strong>https://gaubongonline.com/</strong></em></a></span>
                                            </p>
                                            <p><span style="color: #02c4c1">Quý khách chú ý nhớ đúng địa chỉ website
                                                    tránh mua nhầm thương hiệu nhái, và nhầm shop giả mạo.</span></p>
                                            <div class="_2cuy _3dgx _2vxa"><span style="color: #02c4c1">Thành lập và bán
                                                    những sản phẩm đầu tiên trên 1 căn gác nhỏ. Sau 8 năm phát triển,
                                                    Thương hiệu Gấu Bông Online đã trở nên quen thuộc với Khách Hàng mỗi
                                                    khi có nhu cầu mua Gấu. Xuất phát điểm chỉ với dòng Gấu Teddy, nhưng
                                                    hiện tại shop có hơn 500 mẫu gấu bông với đa dạng về chủng loại và
                                                    kích cỡ.</span></div>
                                            <h3 class="_2cuy _50a1 _2vxa"><span style="color: #ff6683">Sản phẩm đa dạng
                                                    &#8211; 500 mẫu</span></h3>
                                            <ul>
                                                <li class="_2cuy _3dgx _2vxa"><span style="color: #02c4c1">Gấu Teddy: <a
                                                            style="color: #02c4c1"
                                                            href="#"
                                                            target="_blank" rel="noopener nofollow noreferrer"
                                                            data-lynx-mode="asynclazy">https://gaubongonline.vn/gau-teddy</a></span>
                                                </li>
                                                <li class="_2cuy _3dgx _2vxa"><span style="color: #02c4c1">Thú Bông: <a
                                                            style="color: #02c4c1"
                                                            href="#"
                                                            target="_blank" rel="noopener nofollow noreferrer"
                                                            data-lynx-mode="asynclazy">https://gaubongonline.vn/thu-bong</a></span>
                                                </li>
                                                <li class="_2cuy _3dgx _2vxa"><span style="color: #02c4c1">Gấu Hoạt
                                                        Hình: <a style="color: #02c4c1"
                                                            href="#"
                                                            target="_blank" rel="noopener nofollow noreferrer"
                                                            data-lynx-mode="asynclazy">https://gaubongonline.vn/nhan-vat-hoat-hinh-truyen-tranh-1</a></span>
                                                </li>
                                                <li class="_2cuy _3dgx _2vxa"><span style="color: #02c4c1">Phụ Kiện
                                                        Bông:<a style="color: #02c4c1"
                                                            href="#"
                                                            target="_blank" rel="noopener nofollow noreferrer"
                                                            data-lynx-mode="asynclazy"
                                                            data-lynx-uri="https://l.facebook.com/l.php?u=https%3A%2F%2Fgaubongonline.vn%2Fgoi-bong-phu-kien%3Ffbclid%3DIwAR3cvsxWq4ritlufjMOnKpOiHdG7ZzWmprxnocNlDhFv_lfM0XEe3XkVlAU&amp;h=AT1aEOAD_LtnB5ZK_vxzIggyW2DKDgac_5kGuBZ7XTL8XGYWse8c2-ch0n4m92g0NLytOKznx_LxJMfJRCz5z28Reyjr6uBrn7qAQFkcxv2evqhl2a8QBIGBF_9bL9rpQ2z2MBv_yEk">https://gaubongonline.vn/goi-bong-phu-kien</a></span>
                                                </li>
                                            </ul>
                                            <h3 class="_2cuy _50a1 _2vxa"><span style="color: #ff6683">Dịch vụ chu
                                                    đáo</span></h3>
                                            <ul class="_5a_q _5yj1">
                                                <li class="_2cuy _509q _2vxa"><span style="color: #02c4c1"><a
                                                            style="color: #02c4c1"
                                                            href="#"
                                                            target="_blank" rel="noopener nofollow noreferrer"
                                                            data-lynx-mode="asynclazy"
                                                            data-lynx-uri="https://l.facebook.com/l.php?u=https%3A%2F%2Fgaubongonline.vn%2Fdich-vu%2Fgiao-hang-tan-nha.html%3Ffbclid%3DIwAR3ere3ik11GUcslty1S4bUy87ruX8DKGRxgwM3mTsa956W7kMgJur4Nijk&amp;h=AT3nEq6vL8jq3zjt_yGNyTWpO91wQ8IiwCToW6w-p-Pw94cBg6nx5F3yzWzFZHGf8VdXc7Wit3xqa-UIdojh0_8Hl--KRQxmH1HMazXzPkhe14usnbc2HBdkuFm0VRjYu4DbBwTXUE4">Giao
                                                            Hàng Tận Nhà</a></span></li>
                                                <li class="_2cuy _509q _2vxa"><span style="color: #02c4c1"><a
                                                            style="color: #02c4c1"
                                                            href="#"
                                                            target="_blank" rel="noopener nofollow noreferrer"
                                                            data-lynx-mode="async"
                                                            data-lynx-uri="https://l.facebook.com/l.php?u=https%3A%2F%2Fgaubongonline.vn%2Fdich-vu%2Fboc-qua-gia-re.html%3Ffbclid%3DIwAR0IBtngsb3UyZRyHeDi6FgxrXvWk9r5wrDtD_SZ1NKwcdrvxBVDhmoodEE&amp;h=AT2vGfBDp_-esNjVg5fylWBJtAzMxlNdrynU92P52yi4S-lI04Rs0HeizxqMmtl7M9tuiRsUu_KXjxF6idCQNqacgi36pc6QsKUfzT-Rp3XCMDWb41titXly2XCy2E83kgr34PX9sJWNLpQ-8tA0d9CE">Quà
                                                            Giá Rẻ</a></span></li>
                                                <li class="_2cuy _509q _2vxa"><span style="color: #02c4c1"><a
                                                            style="color: #02c4c1"
                                                            href="#"
                                                            target="_blank" rel="noopener nofollow noreferrer"
                                                            data-lynx-mode="asynclazy"
                                                            data-lynx-uri="https://l.facebook.com/l.php?u=https%3A%2F%2Fgaubongonline.vn%2Fdich-vu%2Ftang-thiep-mien-phi.html%3Ffbclid%3DIwAR2vXDzEFq8uwD0ehgd6v7l40bhxuDRSvw5iU7dVIfDz4znds91G3In2CHc&amp;h=AT1CX8y2X7863Cas5cuMMwq1RtwkLkI5R7Hivu4jNcKyjZpibfw4Fl7YcZyRDjcKWfXEYldBTKZcteWOaoszI7kXMafYfkD6NGRi9EWviXH3Bu_kIuaLrXPk79uUTWZJ9xhoobjK4Z8">Tặng
                                                            Thiệp Miễn Phí</a></span></li>
                                                <li class="_2cuy _509q _2vxa"><span style="color: #02c4c1"><a
                                                            style="color: #02c4c1"
                                                            href="#"
                                                            target="_blank" rel="noopener nofollow noreferrer"
                                                            data-lynx-mode="asynclazy"
                                                            data-lynx-uri="https://l.facebook.com/l.php?u=https%3A%2F%2Fgaubongonline.vn%2Fdich-vu%2Fgiat-gau-bong-khu-khuan-bong-gau.html%3Ffbclid%3DIwAR1S9KTHjfKjM8oXI6yfYm48s7s9mkXB4mkpHXdpgS45Qx7lWL4HCxVGAXQ&amp;h=AT0rOTnVTQirEzgxbJAeaTyG6dz0aM-8dJmk9I6FQTlsvEJF-yGaTpKUkCq7vBe5knc2PHTy_2l0J7_6N6G5wmiMaNJNZTVLMzS5jHCBDsfvPXtZURCDFlWD56-I6qDbPuNr7dUxFyA">Giặt
                                                            Gấu Bông Tận Nhà </a></span></li>
                                                <li class="_2cuy _509q _2vxa"><span style="color: #02c4c1"><a
                                                            style="color: #02c4c1"
                                                            href="#"
                                                            target="_blank" rel="noopener nofollow noreferrer"
                                                            data-lynx-mode="asynclazy">Nén Nhỏ Gấu Miễn Phí </a></span>
                                                </li>
                                            </ul>
                                            <h3 class="_2cuy _50a1 _2vxa"><span style="color: #ff6683">Nhân viên dễ
                                                    thương &amp; hết mình</span></h3>
                                            <div class="_2cuy _3dgx _2vxa"><span style="color: #02c4c1">Hi! Vấn đề này
                                                    phải trải nghiệm thực tế mới cảm nhận được ạ! Hẹn gặp Quý Khách tại
                                                    Shop hoặc cùng trò chuyện tại: </span></div>
                                            <div class="_2cuy _3dgx _2vxa"><span style="color: #02c4c1"><a
                                                        style="color: #02c4c1"
                                                        href="#">https://www.messenger.com/t/Shop.Gaubongonline.vn</a></span>
                                            </div>
                                        </div>
                                        <div></div>
                                        <h3 class="_2cuy _50a1 _2vxa"><span style="color: #ff6683">Địa chỉ Google map
                                                tin cậy</span></h3>
                                        <ul>
                                            <li><span style="color: #02c4c1">Nguyễn Khuyến: <a
                                                        href="#">https://g.page/Gaubongonlinevn?share</a></span>
                                            </li>
                                            <li><span style="color: #02c4c1">Đường Láng: <a
                                                        href="#">https://g.page/Gaubongonline-1028Lang?share</a></span>
                                            </li>
                                            <li><span style="color: #02c4c1">Xuân Thủy: <a style="color: #02c4c1"
                                                        href="#">https://g.page/gaubongonlinecaugiay?share</a></span>
                                            </li>
                                            <li><span style="color: #02c4c1">Bàu Cát: <a style="color: #02c4c1"
                                                        href="#">https://g.page/gaubongonlineHCM?share</a></span>
                                            </li>
                                            <li><span style="color: #02c4c1">Quang Trung: <a style="color: #02c4c1"
                                                        href="#">https://g.page/gaubongonlinehcm1?share</a></span>
                                            </li>
                                        </ul>
                                        <h2><span style="color: #ff6683">HỆ THỐNG CỬA HÀNG</span></h2>
                                        <p><span style="color: #02c4c1">➥ <strong>Store Hà Nội 1</strong>: Số 1028 Đường
                                                Láng &#8211; Đống Đa<br />
                                                Hotline: 035.369.6616 (zalo)</span></p>
                                        <p><span style="color: #02c4c1"><strong>➥ Store Hà Nội 2</strong>: Số 42 Xuân
                                                Thủy- Q.Cầu Giấy</span><br />
                                            <span style="color: #02c4c1"> Hotline: 093.777.6616 (zalo)</span></p>
                                        <p><span style="color: #02c4c1"><strong>➥ Store Hà Nội 3</strong>: Số 17 ngõ 23
                                                Nguyễn Khuyến, Văn Quán, Hà Đông<br />
                                                Hotline: 097.989.6616 (zalo) &#8211; 03.9799.6616</span></p>
                                        <p><span style="color: #02c4c1">➥ <strong>Store HCM 1</strong>: Số 77 Bàu Cát 1-
                                                P.14- Q.Tân Bình &#8211; TP HCM</span><br />
                                            <span style="color: #02c4c1"> Hotline: 09.6618.6616 (zalo)</span></p>
                                        <p><span style="color: #02c4c1">➥ <strong>Store tại HCM2</strong>: Số 555 Quang
                                                Trung- P.10- Q. Gò Vấp- TP HCM</span><br />
                                            <span style="color: #02c4c1"> Hotline: 09.3377.6616 (zalo)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="section" id="section_717357950">
                    <div class="bg section-bg fill bg-fill  bg-loaded">
                    </div>

                    <div class="section-content relative">

                        <div class="row" id="row-1539151524">

                            <div id="col-1287982943" class="col div-no-padding small-12 large-12">
                                <div class="col-inner text-center">
                                    <div class="container section-title-container">
                                        <h3 class="section-title section-title-center"><b></b><span
                                                class="section-title-main" style="color:rgb(239, 141, 160);">CHUYỆN
                                                NHÀ
                                                GẤU</span><b></b>
                                        </h3>
                                    </div>
                                    <div
                                        class="row large-columns-2 medium-columns-1 small-columns-1 has-shadow row-box-shadow-1">
                                        <div class="col post-item">
                                            <div class="col-inner">
                                                <a href="#" class="plain">
                                                    <div
                                                        class="box box-vertical box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image" style="width:33%;">
                                                            <div class="image-cover" style="padding-top:77%;">
                                                                <img width="438" height="400"
                                                                    src="./content/uploads/2020/10/gau-bong-to-cao-cap-438x400.jpg"
                                                                    class="attachment-medium size-medium wp-post-image"
                                                                    alt="" loading="lazy"
                                                                    srcset="./content/uploads/2020/10/gau-bong-to-cao-cap-438x400.jpg 438w, ./content/uploads/2020/10/gau-bong-to-cao-cap.jpg 500w"
                                                                    sizes="(max-width: 438px) 100vw, 438px" />
                                                            </div>
                                                        </div>
                                                        <div class="box-text text-left">
                                                            <div class="box-text-inner blog-post-inner">
                                                                <h5 class="post-title is-large ">Ý NGHĨA ĐẶC BIỆT
                                                                    CỦA
                                                                    NHỮNG CHÚ GẤU BÔNG</h5>
                                                                <div class="is-divider"></div>
                                                                <p class="from_the_blog_excerpt ">Gấu bông là biểu
                                                                    tượng
                                                                    của tình yêu Nếu một người tặng cho bạn một...
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col post-item">
                                            <div class="col-inner">
                                                <a href="#" class="plain">
                                                    <div
                                                        class="box box-vertical box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image" style="width:33%;">
                                                            <div class="image-cover" style="padding-top:77%;">
                                                                <img width="500" height="333"
                                                                    src="./content/uploads/2020/10/teddy-socola-2m-1.jpg"
                                                                    class="attachment-medium size-medium wp-post-image"
                                                                    alt="" loading="lazy" /> </div>
                                                        </div>
                                                        <div class="box-text text-left">
                                                            <div class="box-text-inner blog-post-inner">
                                                                <h5 class="post-title is-large ">BÍ KÍP TÁN GÁI BẰNG
                                                                    GẤU
                                                                    BÔNG ĐẸP GIÁ RẺ.</h5>
                                                                <div class="is-divider"></div>
                                                                <p class="from_the_blog_excerpt ">Một thời gian dài
                                                                    để ý
                                                                    cô ấy nhưng bạn vẫ chưa biết cách nào... </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col post-item">
                                            <div class="col-inner">
                                                <a href="#" class="plain">
                                                    <div
                                                        class="box box-vertical box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image" style="width:33%;">
                                                            <div class="image-cover" style="padding-top:77%;">
                                                                <img width="800" height="394"
                                                                    src="content/uploads/2020/10/cach-do-gau-bong-chuan-gaubongonline-1-800x394.jpg" />
                                                            </div>
                                                        </div>
                                                        <div class="box-text text-left">
                                                            <div class="box-text-inner blog-post-inner">
                                                                <h5 class="post-title is-large ">99% KHÁCH HÀNG
                                                                    KHÔNG
                                                                    BIẾT CÁCH ĐO GẤU BÔNG CHUẨN XÁC</h5>
                                                                <div class="is-divider"></div>
                                                                <p class="from_the_blog_excerpt ">Có một thực tế cho
                                                                    thấy rằng hiện có tới 99% khách hàng không
                                                                    biết...
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col post-item">
                                            <div class="col-inner">
                                                <a href="#" class="plain">
                                                    <div
                                                        class="box box-vertical box-text-bottom box-blog-post has-hover">
                                                        <div class="box-image" style="width:33%;">
                                                            <div class="image-cover" style="padding-top:77%;">
                                                                <img width="400" height="400"
                                                                    src="./content/uploads/2020/10/luu-ban-nhap-tu-dong-365-2-400x400.jpg"
                                                                    class="attachment-medium size-medium wp-post-image"
                                                                    alt="" loading="lazy"
                                                                    srcset="./content/uploads/2020/10/luu-ban-nhap-tu-dong-365-2-400x400.jpg 400w, ./content/uploads/2020/10/luu-ban-nhap-tu-dong-365-2-280x280.jpg 280w, ./content/uploads/2020/10/luu-ban-nhap-tu-dong-365-2-310x310.jpg 310w, ./content/uploads/2020/10/luu-ban-nhap-tu-dong-365-2-100x100.jpg 100w, ./content/uploads/2020/10/luu-ban-nhap-tu-dong-365-2.jpg 500w"
                                                                    sizes="(max-width: 400px) 100vw, 400px" />
                                                            </div>
                                                        </div>
                                                        <div class="box-text text-left">
                                                            <div class="box-text-inner blog-post-inner">
                                                                <h5 class="post-title is-large ">PHƯƠNG PHÁP GIÚP HẠ
                                                                    GỤC
                                                                    NÀNG CHỈ VỚI 1 CHÚ GẤU BÔNG</h5>
                                                                <div class="is-divider"></div>
                                                                <p class="from_the_blog_excerpt ">Nếu bạn đang để
                                                                    mắt
                                                                    đến một cô gái nào đó và muốn cô ấy... </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button secondary">
                                        <span>XEM THÊM</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #section_717357950 {
                            padding-top: 0px;
                            padding-bottom: 0px;
                        }
                    </style>
                </section>
                <section class="section" id="section_699571809">
                    <div class="bg section-bg fill bg-fill  bg-loaded">
                    </div>
                    <div class="section-content relative">

                        <div class="row" id="row-343691488">

                            <div id="col-1317357895" class="col div-no-padding small-12 large-12">
                                <div class="col-inner text-center">


                                    <div class="container section-title-container">
                                        <h3 class="section-title section-title-center"><b></b><span
                                                class="section-title-main" style="color:rgb(239, 141, 160);">VIDEO
                                                NHÀ
                                                GẤU</span><b></b></h3>
                                    </div>
                                    <div class="row" id="row-1255591122">

                                        <div id="col-1742909733" class="col medium-4 small-12 large-4">
                                            <div class="col-inner">


                                                <div class="video video-fit mb" style="padding-top:47%;">
                                                    <p><iframe title="Shop Gấu Bông Online" width="1020" height="574"
                                                            src="https://www.youtube.com/embed/yzm5iZuELHw?feature=oembed"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe></p>
                                                </div>
                                            </div>
                                        </div>



                                        <div id="col-1876818445" class="col medium-4 small-12 large-4">
                                            <div class="col-inner">


                                                <div class="video video-fit mb" style="padding-top:47%;">
                                                    <p><iframe title="Gấu 100% bông gòn cao cấp ở shop Gấu Bông Online."
                                                            width="1020" height="574"
                                                            src="https://www.youtube.com/embed/69KG-JWEWc4?feature=oembed"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="col-889820266" class="col medium-4 small-12 large-4">
                                            <div class="col-inner">
                                                <div class="video video-fit mb" style="padding-top:47%;">
                                                    <p><iframe title="Gói Quà Miễn Phí - Chỉ Có Tại Gấu Bông Online"
                                                            width="1020" height="574"
                                                            src="https://www.youtube.com/embed/p3fsUS9Ep30?feature=oembed"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button secondary">
                                        <span>XEM THÊM</span>
                                    </a>

                                </div>
                            </div>


                        </div>
                    </div>


                    <style>
                        #section_699571809 {
                            padding-top: 0px;
                            padding-bottom: 0px;
                        }
                    </style>
                </section>
            </div>
        </main><!-- #main -->

        <footer id="footer" class="footer-wrapper">

            <section class="section section-footer dark" id="section_861027577">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                <div class="section-content relative">


                    <div class="row" id="row-1871430183">
                        <div id="col-746550398" class="col div-no-padding medium-3 small-12 large-3">
                            <div class="col-inner">
                                <h3 class="title-footer">LIÊN HỆ</h3>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ:</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> Điện Thoại:
                                    <span>0778153521</span>
                                </p>
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> Email:
                                    <span>ntthanha20158@cusc.ctu.edu.vn</span></p>
                            </div>
                        </div>
                        <div id="col-1355455417" class="col div-no-padding medium-3 small-12 large-3">
                            <div class="col-inner">
                                <h3 class="title-footer">VỀ CHÚNG TÔI</h3>
                                <ul class="sidebar-wrapper ul-reset">
                                    <div id="nav_menu-2" class="col pb-0 widget widget_nav_menu">
                                        <div class="menu-menu-footer-container">
                                            <ul id="menu-menu-footer" class="menu">
                                                <li id="menu-item-156"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-41 current_page_item menu-item-156">
                                                    <a href="index.php" aria-current="page">Trang chủ</a></li>

                                                <li id="menu-item-158"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-158">
                                                    <a href="gioithieu.php">Giới thiệu</a></li>
                                                <li id="menu-item-160"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-160">
                                                    <a href="goccuagau.php">Góc của gấu</a></li>
                                                <li id="menu-item-159"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-159">
                                                    <a href="lienhe.php">Liên hệ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div id="col-1122418900" class="col div-no-padding medium-3 small-12 large-3">
                            <div class="col-inner">
                                <h3 class="title-footer">CHÍNH SÁCH</h3>
                                <ul class="sidebar-wrapper ul-reset">
                                    <div id="nav_menu-2" class="col pb-0 widget widget_nav_menu">
                                        <div class="menu-menu-footer-container">
                                            <ul id="menu-menu-footer-1" class="menu">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-41 current_page_item menu-item-156">
                                                    <a href="index.php" aria-current="page">Trang chủ</a></li>

                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-158">
                                                    <a href="gioithieu.php">Giới thiệu</a></li>
                                                <li
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-160">
                                                    <a href="goccuagau.php">Góc của gấu</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-159">
                                                    <a href="lienhe.php">Liên hệ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>


                            </div>
                        </div>
                        <div id="col-6828304" class="col div-no-padding medium-3 small-12 large-3">
                            <div class="col-inner">
                                <h3 class="title-footer">FACEBOOK</h3>
                                <div id="fb-root"></div>
                                <p>
                                    <script>
                                        (function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id))
                                                return;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src =
                                                "../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1058228637573834";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                </p>
                                <div class="fb-page" data-href="https://www.facebook.com/facebookappVietnam/"
                                    data-width="340" data-hide-cover="false" data-show-facepile="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #section_861027577 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                        background-color: rgb(239, 141, 160);
                    }
                </style>
            </section>

            <div class="absolute-footer dark medium-text-center text-center">
                <div class="container clearfix">
                </div>
            </div>
            <a href="#top"
                class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle"
                id="top-link"><i class="icon-angle-up"></i></a>

        </footer><!-- .footer-wrapper -->

    </div><!-- #wrapper -->

    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
        <div class="sidebar-menu no-scrollbar ">
            <ul class="nav nav-sidebar nav-vertical nav-uppercase">
                
                <li
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-41 current_page_item menu-item-50">
                    <a href="index.php" aria-current="page">Trang chủ</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-583"><a
                        href="type.php?type=GẤUBÔNGTẶNGBẠNGÁI">Gấu bông tặng bạn gái</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-584"><a
                        href="type.php?type=GẤUBÔNGTẶNGBÉYÊU">Gấu bông tặng bé yêu</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-585"><a
                        href="type.php?type=GẤUBÔNGHOTTEEN">Gấu bông hot teen</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-586"><a
                        href="type.php?type=GẤUBÔNGHOT">GẤU BÔNG HOT</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-587"><a
                        href="type.php?type=GẤUBÔNGHOTTEEN">GẤU BÔNG HOT TREND</a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-167"><a
                        href="goccuagau.php">Góc của gấu</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a
                        href="lienhe.php">Liên hệ</a></li>

        </div>
    </div>
    </div>
    <script>
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
        });
    </script>

    <script type="text/javascript">
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })()
    </script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        var wpcf7 = {
            "apiSettings": {
                "root": "\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            }
        };
    </script>
    <script type='text/javascript' src='./content/plugins/contact-form-7/./includes/js/scriptsde54.js?ver=5.3'
        id='contact-form-7-js'></script>
    <script type='text/javascript'
        src='./content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'
        id='jquery-blockui-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-js-extra'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
            "cart_url": "\/gio-hang\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='./content/plugins/woocommerce/assets/js/frontend/add-to-cart.min4698.js?ver=4.6.3' id='wc-add-to-cart-js'>
    </script>
    <script type='text/javascript'
        src='./content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4' id='js-cookie-js'>
    </script>
    <script type='text/javascript' id='woocommerce-js-extra'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='./content/plugins/woocommerce/assets/js/frontend/woocommerce.min4698.js?ver=4.6.3' id='woocommerce-js'>
    </script>
    <script type='text/javascript' id='wc-cart-fragments-js-extra'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_dafacc0bdbbc0bc040885ea8d1a0c99f",
            "fragment_name": "wc_fragments_dafacc0bdbbc0bc040885ea8d1a0c99f",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='./content/plugins/woocommerce/assets/js/frontend/cart-fragments.min4698.js?ver=4.6.3'
        id='wc-cart-fragments-js'></script>
    <script type='text/javascript'
        src='./content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-searche56c.js?ver=3.12.2'
        id='flatsome-live-search-js'></script>
    <script type='text/javascript' src='./includes/js/hoverIntent.minc245.js?ver=1.8.1' id='hoverIntent-js'></script>
    <script type='text/javascript' id='flatsome-js-js-extra'>
        var flatsomeVars = {
            "ajaxurl": "\/admin\/admin-ajax.php",
            "rtl": "",
            "sticky_height": "70",
            "lightbox": {
                "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
                "close_btn_inside": false
            },
            "user": {
                "can_edit_pages": false
            },
            "i18n": {
                "mainMenu": "Main Menu"
            },
            "options": {
                "cookie_notice_version": "1"
            }
        };
    </script>
    <script type='text/javascript' src='content/themes/flatsome/assets/js/flatsomee56c.js?ver=3.12.2'
        id='flatsome-js-js'></script>
    <script type='text/javascript' src='content/themes/flatsome/assets/js/woocommercee56c.js?ver=3.12.2'
        id='flatsome-theme-woocommerce-js-js'></script>
    <script type='text/javascript' src='./includes/js/wp-embed.min234e.js?ver=5.5.7' id='wp-embed-js'></script>
    <script type='text/javascript' id='zxcvbn-async-js-extra'>
        var _zxcvbnSettings = {
            "src": "\/./includes\/js\/zxcvbn.min.js"
        };
    </script>
    <script type='text/javascript' src='./includes/js/zxcvbn-async.min5152.js?ver=1.0' id='zxcvbn-async-js'></script>
    <script type='text/javascript' src='./includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'>
    </script>
    <script type='text/javascript' id='wp-polyfill-js-after'>
        ('fetch' in window) || document.write(
            '<script src="./includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>');
        (document.contains) || document.write(
            '<script src="./includes/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>'
        );
        (window.DOMRect) || document.write(
            '<script src="./includes/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
        (window.URL && window.URL.prototype && window.URLSearchParams) || document.write(
            '<script src="./includes/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>');
        (window.FormData && window.FormData.prototype.keys) || document.write(
            '<script src="./includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>');
        (Element.prototype.matches && Element.prototype.closest) || document.write(
            '<script src="./includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' +
            'ipt>');
    </script>
    <script type='text/javascript' src='./includes/js/dist/i18n.min1a51.js?ver=4ab02c8fd541b8cfb8952fe260d21f16'
        id='wp-i18n-js'></script>
    <script type='text/javascript' id='password-strength-meter-js-extra'>
        var pwsL10n = {
            "unknown": "M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh",
            "short": "R\u1ea5t y\u1ebfu",
            "bad": "Y\u1ebfu",
            "good": "Trung b\u00ecnh",
            "strong": "M\u1ea1nh",
            "mismatch": "M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"
        };
    </script>
    <script type='text/javascript' id='password-strength-meter-js-translations'>
        (function (domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", {
            "locale_data": {
                "messages": {
                    "": {}
                }
            }
        });
    </script>
</body>

</html>