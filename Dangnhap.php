<!DOCTYPE html>
<html lang="vi" class="loading-site no-js">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Đăng Nhập</title>
        <meta property="og:site_name" content="Gấu bông siêu đẹp" />
        <link rel='stylesheet' id='wp-block-library-css'
              href='./includes/css/dist/block-library/style.min234e.css?ver=5.5.7' type='text/css' media='all' />
        <link rel='stylesheet' id='wc-block-vendors-style-css'
              href='./content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style6b00.css?ver=3.4.0'
              type='text/css' media='all' />
        <link rel='stylesheet' id='wc-block-style-css'
              href='./content/plugins/woocommerce/packages/woocommerce-blocks/build/style6b00.css?ver=3.4.0'
              type='text/css' media='all' />
        <link rel='stylesheet' id='contact-form-7-css'
              href='./content/plugins/contact-form-7/includes/css/stylesde54.css?ver=5.3' type='text/css' media='all' />
        <link rel='stylesheet' id='wcva-shop-frontend-css'
              href='./content/plugins/woocommerce-colororimage-variation-select/css/shop-frontend234e.css?ver=5.5.7'
              type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel='stylesheet' id='dashicons-css' href='./includes/css/dashicons.min234e.css?ver=5.5.7' type='text/css'
              media='all' />
        <link rel='stylesheet' id='flatsome-ionicons-css'
              href='././maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min234e.css?ver=5.5.7' type='text/css'
              media='all' />
        <link rel='stylesheet' id='flatsome-icons-css'
              href='./content/themes/flatsome/assets/css/fl-iconsae34.css?ver=3.12' type='text/css' media='all' />
        <link rel='stylesheet' id='flatsome-main-css'
              href='./content/themes/flatsome/assets/css/flatsomee56c.css?ver=3.12.2' type='text/css' media='all' />
        <link rel='stylesheet' id='flatsome-shop-css'
              href='./content/themes/flatsome/assets/css/flatsome-shope56c.css?ver=3.12.2' type='text/css' media='all' />
        <link rel='stylesheet' id='flatsome-style-css' href='./content/themes/web-khoi-nghiep/style6aec.css?ver=3.0'
              type='text/css' media='all' />
        <link rel='stylesheet' id='flatsome-googlefonts-css'
              href='http://fonts.googleapis.com/css?family=Helvetica%2CArial%2Csans-serif%3Aregular%2C700%2Cregular%2C700%2Cdefault&amp;display=swap&amp;ver=3.9'
              type='text/css' media='all' />
        <script type='text/javascript' src='./includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp' id='jquery-core-js'>
        </script>
        <script type='text/javascript'
                src='./content/plugins/woocommerce-colororimage-variation-select/js/shop-frontend234e.js?ver=5.5.7'
        id='wcva-shop-frontend-js'></script>
        <style id="custom-css" type="text/css">
            :root {
                --primary-color: #03c8c5;
            }
        </style>
        <link rel="stylesheet" href="./admin/css/css.css">
        <script src="./content/themes/flatsome/assets/js/form.js"></script>
    </head>
    <body
    <?php
    session_start();
    $k="";
    if (isset($_POST['sudmit'])) {
        $us = $_POST['un'];
        $pw = $_POST['pw'];
        require_once './Connett.php';
        require_once './Account.php';
        $Call = new Account('', '', $us, $pw, '', '', '', '', '', '');
        $user = $Call->login($conn);
        if ($user->fetch_assoc() > 0) {
            if (!empty($_POST['check'])) {
                setcookie('member_login', $us, time() + 60 * 60 * 1);
                setcookie('member_pwd', $pw, time() + 60 * 60 * 1);
            } else {
                if (isset($_COOKIE['member_login'])) {
                    setcookie('member_login', '');
                }
                if (isset($_COOKIE['member_pwd'])) {
                    setcookie('member_pwd', '');
                }
            }
            $_SESSION['user_name'] = $us;
            $_SESSION['id'] = $row['Customer_ID'];
            $_SESSION['last_login'] = time();
            if ($us == 'Admin') {
                header('location:Admin.php');
            } else {
                header('location:index.php');
            }
        } else {
            $k = "true";
        }
    }
    ?>
        <div class="archive post-type-archive post-type-archive-product theme-flatsome woocommerce woocommerce-page woocommerce-no-js lightbox nav-dropdown-has-arrow">
            <div id="wrapper">
                <header id="header" class="header has-sticky sticky-jump">
                    <div class="header-wrapper">
                        <div id="masthead" class="header-main hide-for-sticky">
                            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                                <div id="logo" class="flex-col logo">
                                    <a href="./index.php" title="Gấu bông siêu đẹp"
                                       rel="home">
                                        <img width="281" height="91" src="content/uploads/2020/10/logoshop.png"
                                             class="header_logo header-logo" alt="Gấu bông siêu đẹp" /><img width="281"
                                             height="91" src="content/uploads/2020/10/logoshop.png" class="header-logo-dark"
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
                                        <li class="account-item has-icon ">
                                            <a href="Dangky.php" >
                                                <span>
                                                    Đăng Ký </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex-col show-for-medium flex-right">
                                    <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                                        <li class="account-item has-icon ">
                                            <a href="Dangky.php" >
                                                <span>
                                                    Đăng Ký
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="container">
                                <div class="top-divider full-width">
                                </div>
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
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-50">
                                            <a href="./index.php" class="nav-top-link">Trang chủ</a></li>
                                        <li id="menu-item-583"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-583">
                                            <a href="type.php?type=GẤUBÔNGTẶNGBẠNGÁI" class="nav-top-link">Gấu bông tặng
                                                bạn gái</a></li>
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
                                            <a href="type.php?type=GẤUBÔNGHOTTREND" class="nav-top-link">GẤU BÔNG HOT
                                                TREND</a></li>
                                        <li id="menu-item-167"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-167"><a
                                                href="goccuagau.php" class="nav-top-link">Góc của gấu</a>
                                        </li>
                                        <li id="menu-item-165"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a
                                                href="lienhe.php" class="nav-top-link">Liên hệ</a></li>
                                    </ul>
                                </div>

                                <div class="flex-col hide-for-medium flex-right flex-grow">

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
                    <div class="row category-page-row">				
                        <div class="col large-12">
                            <div class="shop-container">
                                <div class="woocommerce-notices-wrapper">
                                    <section>
                                        <div class="noi-dung">
                                            <div class="form">
                                                <h2>Trang Đăng Nhập</h2>
                                                <form action="#" method="post">
                                                    <div class="input-form">
                                                        <span>Tên Người Dùng</span>
                                                        <input type="text" name="un" value="<?php
                                                        if (isset($_COOKIE['member_login'])) {
                                                            echo $_COOKIE['member_login'];
                                                        }
                                                        ?>">
                                                    </div>
                                                    <div class="input-form">
                                                        <span>Mật Khẩu</span>
                                                        <input type="password" name="pw" 
                                                               value="<?php
                                                               if (isset($_COOKIE['member_pwd'])) {
                                                                   echo $_COOKIE['member_pwd'];
                                                               }
                                                               ?>">
                                                    </div>
                                                    <div class="nho-dang-nhap">
                                                        <label><input type="checkbox" name="check" <?php if (isset($_COOKIE['member_login'])) { ?> checked <?php } ?>> Nhớ Đăng Nhập</label>
                                                    </div>
                                                    <div class="input-form">
                                                        <input type="submit" value="Đăng Nhập" name="sudmit">
                                                    </div>
                                                    <div class="messe">
                                                        <label for="messe" name="messe"></label>
                                                    </div>
                                                    <div class="input-form">
                                                        <p>Bạn Chưa Có Tài Khoản? <a href="Dangky.php">Đăng Ký</a></p>
                                                        <?php
                                                        if ($k=="true") {
                                                            echo "<script>alert('Đăng nhập không thành công');</script>";
                                                        }
                                                        ?>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </section> 
                                </div>	
                            </div>
                        </div>
                    </div>
                </main>
                <footer id="footer" class="footer-wrapper">
                    <section class="section section-footer dark" id="section_1133509363">
                        <div class="bg section-bg fill bg-fill  bg-loaded">
                        </div>
                        <div class="section-content relative">
                            <div class="row" id="row-1037885114">
                                <div id="col-1478641039" class="col div-no-padding medium-3 small-12 large-3">
                                    <div class="col-inner">
                                        <h3 class="title-footer">LIÊN HỆ</h3>
                                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>Địa chỉ</p>
                                        <p><i class="fa fa-phone" aria-hidden="true"></i> Hotline: <span>0778153521</span>
                                        </p>
                                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> Email:
                                            <span>ntthanha20158@cusc.ctu.edu.vn</span></p>
                                    </div>
                                </div>
                                <div id="col-1075494014" class="col div-no-padding medium-3 small-12 large-3">
                                    <div class="col-inner">
                                        <h3 class="title-footer">VỀ CHÚNG TÔI</h3>
                                        <ul class="sidebar-wrapper ul-reset">
                                            <div id="nav_menu-2" class="col pb-0 widget widget_nav_menu">
                                                <div class="menu-menu-footer-container">
                                                    <ul id="menu-menu-footer" class="menu">
                                                        <li id="menu-item-156"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-156">
                                                            <a href="./index.php">Trang chủ</a></li>
                                                       
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
                                <div id="col-992028006" class="col div-no-padding medium-3 small-12 large-3">
                                    <div class="col-inner">
                                        <h3 class="title-footer">CHÍNH SÁCH</h3>
                                        <ul class="sidebar-wrapper ul-reset">
                                            <div id="nav_menu-2" class="col pb-0 widget widget_nav_menu">
                                                <div class="menu-menu-footer-container">
                                                    <ul id="menu-menu-footer-1" class="menu">
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-156">
                                                            <a href="./index.php">Trang chủ</a></li>
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
                                <div id="col-117601245" class="col div-no-padding medium-3 small-12 large-3">
                                    <div class="col-inner">
                                        <h3 class="title-footer">FACEBOOK</h3>
                                        <div id="fb-root"></div>
                                        <p>
                                        </p>	
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="absolute-footer dark medium-text-center text-center">
                        <div class="container clearfix">
                            <div class="footer-primary pull-left">
                                <div class="copyright-footer">		
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#top"
                       class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle"
                       id="top-link"><i class="icon-angle-up"></i></a>
                </footer>
            </div>
            <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
                <div class="sidebar-menu no-scrollbar ">
                    <ul class="nav nav-sidebar nav-vertical nav-uppercase">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-50"><a
                                href="./index.php">Trang chủ</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-583"><a
                                href="type.php?type=GẤUBÔNGTẶNGBẠNGÁI">Gấu bông tặng bạn gái</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-584"><a
                                href="type.php?type=GẤUBÔNGTẶNGBÉYÊU">Gấu bông tặng bé yêu</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-585"><a
                                href="type.php?type=GẤUBÔNGHOTTEEN">Gấu bông hot teen</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-586"><a
                                href="type.php?type=GẤUBÔNGHOT">GẤU BÔNG HOT</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-587"><a
                                href="type.php?type=GẤUBÔNGHOTTREND">GẤU BÔNG HOT TREND</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-167"><a
                                href="goccuagau.php">Góc của gấu</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-165"><a
                                href="lienhe.php">Liên hệ</a></li>
                        <li class="account-item has-icon menu-item">
                            <a href="Dangky.php" >
                                Đăng Ký  </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> 
            <script type="text/javascript">
            (function () {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                document.body.className = c;
            })()
            </script>
            <script type='text/javascript' src='./content/plugins/contact-form-7/includes/js/scriptsde54.js?ver=5.3'
            id='contact-form-7-js'></script>
            <script type='text/javascript'
                    src='./content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'
            id='jquery-blockui-js'></script>

            <script type='text/javascript'
                    src='./content/plugins/woocommerce/assets/js/frontend/add-to-cart.min4698.js?ver=4.6.3'
            id='wc-add-to-cart-js'></script>
            <script type='text/javascript'
                    src='./content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4' id='js-cookie-js'>
            </script>
            <script type='text/javascript' id='woocommerce-js-extra'>
                var woocommerce_params = {
                    "ajax_url": "\/admin\/admin-ajax.php",
                    "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
                };
            </script>
            <script type='text/javascript'
                    src='./content/plugins/woocommerce/assets/js/frontend/woocommerce.min4698.js?ver=4.6.3' id='woocommerce-js'>
            </script>
            <script type='text/javascript'
                    src='./content/plugins/woocommerce/assets/js/frontend/cart-fragments.min4698.js?ver=4.6.3'
            id='wc-cart-fragments-js'></script>
            <script type='text/javascript'
                    src='./content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-searche56c.js?ver=3.12.2'
            id='flatsome-live-search-js'></script>
            <script type='text/javascript' src='./includes/js/hoverIntent.minc245.js?ver=1.8.1' id='hoverIntent-js'>
            </script>
            <script type='text/javascript' id='flatsome-js-js-extra'>
                var flatsomeVars = {
                    "ajaxurl": "admin\/admin-ajax.php",
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
            <script type='text/javascript' src='./content/themes/flatsome/assets/js/flatsomee56c.js?ver=3.12.2'
            id='flatsome-js-js'></script>
            <script type='text/javascript' src='./content/themes/flatsome/assets/js/woocommercee56c.js?ver=3.12.2'
            id='flatsome-theme-woocommerce-js-js'></script>
            <script type='text/javascript' src='./includes/js/wp-embed.min234e.js?ver=5.5.7' id='wp-embed-js'></script>
            <script type='text/javascript' src='./includes/js/zxcvbn-async.min5152.js?ver=1.0' id='zxcvbn-async-js'>
            </script>
            <script type='text/javascript' src='./includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4'
            id='wp-polyfill-js'></script>
            <script type='text/javascript' src='./includes/js/dist/i18n.min1a51.js?ver=4ab02c8fd541b8cfb8952fe260d21f16'
            id='wp-i18n-js'></script>
            <script type='text/javascript'
                    src='./content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min4698.js?ver=4.6.3'
            id='wc-password-strength-meter-js'></script>
    </body>

</html>