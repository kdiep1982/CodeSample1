<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>OneUI - Admin Dashboard Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="js/plugins/magnific-popup/magnific-popup.min.css">

    <!-- Bootstrap and OneUI CSS framework -->

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/oneui.css')!!}


    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<!--
    Available Classes:

    'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

    'sidebar-l'                  Left Sidebar and right Side Overlay
    'sidebar-r'                  Right Sidebar and left Side Overlay
    'sidebar-mini'               Mini hoverable Sidebar (> 991px)
    'sidebar-o'                  Visible Sidebar by default (> 991px)
    'sidebar-o-xs'               Visible Sidebar by default (< 992px)

    'side-overlay-hover'         Hoverable Side Overlay (> 991px)
    'side-overlay-o'             Visible Side Overlay by default (> 991px)

    'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

    'header-navbar-fixed'        Enables fixed header
    'header-navbar-transparent'  Enables a transparent header (if also fixed, it will get a solid dark background color on scrolling)
-->
<div id="page-container" class="side-scroll header-navbar-fixed header-navbar-transparent">

    <!-- END Sidebar -->

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero Content -->
        <div class="bg-image" style="background-image: url('img/various/ecom_product6.png');">
            <div class="bg-primary-dark-op">
                <section class="content content-full content-boxed overflow-hidden">
                    <!-- Section Content -->
                    <div class="push-30-t push-30 text-center">
                        <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Super Badges Pack.</h1>
                        <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">1000s of high quality badges.</h2>
                    </div>
                    <!-- END Section Content -->
                </section>
            </div>
        </div>
        <!-- END Hero Content -->

        <!-- Side Content and Product -->
        <div class="bg-gray-lighter">
            <section class="content content-boxed">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Buttons which toggles side nav content content in smaller screens -->
                        <!-- Toggle class helper (for .js-nav-content below), functionality initialized in App() -> uiToggleClass() -->
                        <div class="block hidden-lg">
                            <div class="block-content">
                                <button class="btn btn-sm btn-block btn-default push" type="button" data-toggle="class-toggle" data-target=".js-nav-content" data-class="visible-lg">
                                    <i class="fa fa-list-ul push-5-r"></i> Navigation
                                </button>
                            </div>
                        </div>
                        <h3>Casts</h3>
                        <div class="block">
                            <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img-avatar" src="assets/img/avatars/avatar6.jpg" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">Rebecca Reid</div>
                                        <div class="text-muted">50k Sales</div>
                                    </div>
                                </div>
                            </a>
                            <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">Eric Lawson</div>
                                        <div class="text-muted">48k Sales</div>
                                    </div>
                                </div>
                            </a>
                            <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img-avatar" src="assets/img/avatars/avatar2.jpg" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">Ann Parker</div>
                                        <div class="text-muted">35k Sales</div>
                                    </div>
                                </div>
                            </a>
                            <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">Donald Barnes</div>
                                        <div class="text-muted">31k Sales</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <h3>Staffs</h3>
                        <div class="block">
                            <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img-avatar" src="assets/img/avatars/avatar6.jpg" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">Rebecca Reid</div>
                                        <div class="text-muted">50k Sales</div>
                                    </div>
                                </div>
                            </a>
                            <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">Eric Lawson</div>
                                        <div class="text-muted">48k Sales</div>
                                    </div>
                                </div>
                            </a>
                            <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img-avatar" src="assets/img/avatars/avatar2.jpg" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">Ann Parker</div>
                                        <div class="text-muted">35k Sales</div>
                                    </div>
                                </div>
                            </a>
                            <a class="block block-link-hover3 block-transparent remove-margin-b" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="pull-right">
                                        <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                    </div>
                                    <div class="pull-left push-10-t">
                                        <div class="font-w600 push-5">Donald Barnes</div>
                                        <div class="text-muted">31k Sales</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h3>Movie Detail</h3>
                    <div class="col-lg-9">
                        <!-- Product -->
                        <div class="block">
                            <div class="block-content">
                                <div class="row items-push">
                                    <div class="col-sm-6">
                                        <!-- Images -->
                                        <div class="row js-gallery">
                                            <div class="col-xs-12 push-10">
                                                <a class="img-link" href="{{$movie_detail->poster}}">
                                                    <img class="img-responsive" src="{{$movie_detail->poster}}">
                                                </a>
                                            </div>
                                            <div class="col-xs-4">

                                                <iframe width="300" height="200" src="https://www.youtube.com/embed/gwqSi_ToNPs" frameborder="0" allowfullscreen></iframe>


                                            </div>

                                        </div>
                                        <!-- END Images -->
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- Vital Info -->
                                        <div class="clearfix">
                                            <div class="pull-right">
                                                <span class="h2 font-w700 text-success">$58</span>
                                            </div>
                                            <span class="h5">
                                                        <span class="font-w600 text-success">IN STOCK</span><br><small>200 Available</small>
                                                    </span>
                                        </div>
                                        <hr>
                                        <form class="form-inline" action="frontend_ecom_product.html" method="post" onsubmit="return false;">
                                            <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus push-5-r"></i> Add to Cart</button>
                                            <select class="form-control input-sm" id="ecom-license" name="ecom-license" size="1">
                                                <option value="0" disabled selected>LICENSE</option>
                                                <option value="simple">Simple</option>
                                                <option value="multiple">Multiple</option>
                                            </select>
                                        </form>
                                        <hr>
                                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                                        <!-- END Vital Info -->
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Author -->
                                        <div class="block block-rounded remove-margin-b">
                                            <div class="block-content block-content-full bg-gray-lighter clearfix">
                                                <div class="pull-right">
                                                    <img class="img-avatar" src="img/avatars/avatar2.jpg" alt="">
                                                </div>
                                                <div class="pull-left push-5-t">
                                                    <div class="push-10">
                                                        By <a class="font-w600" href="javascript:void(0)">Emma Cooper</a>
                                                    </div>
                                                    <div>
                                                        <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-plus push-5-r"></i> Follow</a>
                                                        <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-envelope"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Author -->
                                    </div>
                                    <div class="col-xs-12">
                                        <!-- Extra Info -->
                                        <div class="block">
                                            <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
                                                <li class="active">
                                                    <a href="#ecom-product-info">Info</a>
                                                </li>
                                                <li>
                                                    <a href="#ecom-product-comments">Comments</a>
                                                </li>
                                                <li>
                                                    <a href="#ecom-product-reviews">Reviews</a>
                                                </li>
                                            </ul>
                                            <div class="block-content tab-content">
                                                <!-- Info -->
                                                <div class="tab-pane pull-r-l active" id="ecom-product-info">
                                                    <table class="table table-striped table-borderless remove-margin-b">
                                                        <thead>
                                                        <tr>
                                                            <th colspan="2">File Formats</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td style="width: 20%;">Sketch</td>
                                                            <td>
                                                                <i class="fa fa-check text-success"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>PSD</td>
                                                            <td>
                                                                <i class="fa fa-check text-success"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>PDF</td>
                                                            <td>
                                                                <i class="fa fa-times text-danger"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>AI</td>
                                                            <td>
                                                                <i class="fa fa-check text-success"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>EPS</td>
                                                            <td>
                                                                <i class="fa fa-check text-success"></i>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="table table-striped table-borderless remove-margin-b">
                                                        <thead>
                                                        <tr>
                                                            <th colspan="2">Extra</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td style="width: 20%;"><i class="fa fa-calendar text-muted push-5-r"></i> Date</td>
                                                            <td>January 15, 2016</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-anchor text-muted push-5-r"></i> File Size</td>
                                                            <td>265.36 MB</td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="si si-vector text-muted push-5-r"></i> Vector</td>
                                                            <td>
                                                                <i class="fa fa-check text-success"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-expand text-muted push-5-r"></i> Dimensions</td>
                                                            <td>
                                                                <div class="push-5">16 x 16 px</div>
                                                                <div class="push-5">32 x 32 px</div>
                                                                <div class="push-5">64 x 64 px</div>
                                                                <div class="push-5">128 x 128 px</div>
                                                                <div>256 x 256 px</div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END Info -->

                                                <!-- Comments -->
                                                <div class="tab-pane pull-r-l" id="ecom-product-comments">
                                                    <div class="media push-15">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <img class="img-avatar img-avatar32" src="img/avatars/avatar3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                            <a class="font-w600" href="javascript:void(0)">Emma Cooper</a>
                                                            <mark class="font-w600 font-s13 text-danger">Purchased</mark>
                                                            <div class="push-5">High quality, thanks so much for sharing!</div>
                                                            <div class="font-s12">
                                                                <a href="javascript:void(0)">Like!</a> -
                                                                <a href="javascript:void(0)">Reply</a> -
                                                                <span class="text-muted"><em>12 min ago</em></span>
                                                            </div>
                                                            <div class="media push-10">
                                                                <div class="media-left">
                                                                    <a href="javascript:void(0)">
                                                                        <img class="img-avatar img-avatar32" src="img/avatars/avatar2.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body font-s13">
                                                                    <a class="font-w600" href="javascript:void(0)">Emma Cooper</a>
                                                                    <mark class="font-w600 font-s13 text-success">Author</mark>
                                                                    <div class="push-5">Thanks so much!!</div>
                                                                    <div class="font-s12">
                                                                        <a href="javascript:void(0)">Like!</a> -
                                                                        <a href="javascript:void(0)">Reply</a> -
                                                                        <span class="text-muted"><em>20 min ago</em></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media push-15">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <img class="img-avatar img-avatar32" src="img/avatars/avatar12.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                            <a class="font-w600" href="javascript:void(0)">Dennis Ross</a>
                                                            <mark class="font-w600 font-s13 text-danger">Purchased</mark>
                                                            <div class="push-5">Great work, thank you!</div>
                                                            <div class="font-s12">
                                                                <a href="javascript:void(0)">Like!</a> -
                                                                <a href="javascript:void(0)">Reply</a> -
                                                                <span class="text-muted"><em>30 min ago</em></span>
                                                            </div>
                                                            <div class="media push-10">
                                                                <div class="media-left">
                                                                    <a href="javascript:void(0)">
                                                                        <img class="img-avatar img-avatar32" src="img/avatars/avatar2.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body font-s13">
                                                                    <a class="font-w600" href="javascript:void(0)">Emma Cooper</a>
                                                                    <mark class="font-w600 font-s13 text-success">Author</mark>
                                                                    <div class="push-5">Thanks so much!!</div>
                                                                    <div class="font-s12">
                                                                        <a href="javascript:void(0)">Like!</a> -
                                                                        <a href="javascript:void(0)">Reply</a> -
                                                                        <span class="text-muted"><em>20 min ago</em></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media push-15">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar14.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                            <a class="font-w600" href="javascript:void(0)">Ronald George</a>
                                                            <div class="push-5">Really nice!</div>
                                                            <div class="font-s12">
                                                                <a href="javascript:void(0)">Like!</a> -
                                                                <a href="javascript:void(0)">Reply</a> -
                                                                <span class="text-muted"><em>42 min ago</em></span>
                                                            </div>
                                                            <div class="media push-10">
                                                                <div class="media-left">
                                                                    <a href="javascript:void(0)">
                                                                        <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar2.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body font-s13">
                                                                    <a class="font-w600" href="javascript:void(0)">Emma Cooper</a>
                                                                    <mark class="font-w600 font-s13 text-success">Author</mark>
                                                                    <div class="push-5">Thanks so much!!</div>
                                                                    <div class="font-s12">
                                                                        <a href="javascript:void(0)">Like!</a> -
                                                                        <a href="javascript:void(0)">Reply</a> -
                                                                        <span class="text-muted"><em>20 min ago</em></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal remove-margin-b" action="base_ui_timeline_social.html" method="post" onsubmit="return false;">
                                                        <input class="form-control" type="text" placeholder="Write a comment..">
                                                    </form>
                                                </div>
                                                <!-- END Comments -->

                                                <!-- Reviews -->
                                                <div class="tab-pane pull-r-l" id="ecom-product-reviews">
                                                    <!-- Average Rating -->
                                                    <div class="block block-rounded">
                                                        <div class="block-content bg-gray-lighter text-center">
                                                            <p class="h2 text-warning push-10">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </p>
                                                            <p>
                                                                <strong>5.0</strong>/5.0 out of <strong>5</strong> Ratings
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- END Average Rating -->

                                                    <!-- Ratings -->
                                                    <div class="media push-15">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar10.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                                    <span class="text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </span>
                                                            <a class="font-w600" href="javascript:void(0)">Eric Lawson</a>
                                                            <div class="push-5">Awesome Quality!</div>
                                                            <div class="font-s12">
                                                                <span class="text-muted"><em>2 hours ago</em></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media push-15">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar1.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                                    <span class="text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </span>
                                                            <a class="font-w600" href="javascript:void(0)">Laura Bell</a>
                                                            <div class="push-5">So cool badges!</div>
                                                            <div class="font-s12">
                                                                <span class="text-muted"><em>5 hours ago</em></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media push-15">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar11.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                                    <span class="text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </span>
                                                            <a class="font-w600" href="javascript:void(0)">Keith Simpson</a>
                                                            <div class="push-5">They look great, thank you!</div>
                                                            <div class="font-s12">
                                                                <span class="text-muted"><em>15 hours ago</em></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media push-15">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar10.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                                    <span class="text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </span>
                                                            <a class="font-w600" href="javascript:void(0)">Jeremy Fuller</a>
                                                            <div class="push-5">Badges for life!</div>
                                                            <div class="font-s12">
                                                                <span class="text-muted"><em>20 hours ago</em></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media push-15">
                                                        <div class="media-left">
                                                            <a href="javascript:void(0)">
                                                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar6.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body font-s13">
                                                                    <span class="text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </span>
                                                            <a class="font-w600" href="javascript:void(0)">Julia Cole</a>
                                                            <div class="push-5">So good, keep it up!</div>
                                                            <div class="font-s12">
                                                                <span class="text-muted"><em>22 hours ago</em></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END Ratings -->
                                                </div>
                                                <!-- END Reviews -->
                                            </div>
                                        </div>
                                        <!-- END Extra Info -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Product -->
                    </div>
                </div>
            </section>
        </div>
        <!-- END Side Content and Product -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-white">
        <div class="content content-boxed">
            <!-- Footer Navigation -->
            <div class="row push-30-t items-push-2x">
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">Company</h3>
                    <ul class="list list-simple-mini font-s13">
                        <li>
                            <a class="font-w600" href="frontend_home.html">Home</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_features.html">Features</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_about.html">About Us</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">Support</h3>
                    <ul class="list list-simple-mini font-s13">
                        <li>
                            <a class="font-w600" href="frontend_login.html">Log In</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_signup.html">Sign Up</a>
                        </li>
                        <li>
                            <a class="font-w600" href="frontend_support.html">Support Center</a>
                        </li>
                        <li>
                            <a class="font-w600" href="javascript:void(0)">Privacy Policy</a>
                        </li>
                        <li>
                            <a class="font-w600" href="javascript:void(0)">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3 class="h5 font-w600 text-uppercase push-20">Get In Touch</h3>
                    <div class="font-s13 push">
                        <strong>Company, Inc.</strong><br>
                        980 Folsom Ave, Suite 1230<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </div>
                    <div class="font-s13">
                        <i class="si si-envelope-open"></i> company@example.com
                    </div>
                </div>
            </div>
            <!-- END Footer Navigation -->

            <!-- Copyright Info -->
            <div class="font-s12 push-20 clearfix">
                <hr class="remove-margin-t">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                </div>
                <div class="pull-left">
                    <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">OneUI 3.1</a> &copy; <span class="js-year-copy"></span>
                </div>
            </div>
            <!-- END Copyright Info -->
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="js/core/jquery.min.js"></script>
<script src="js/core/bootstrap.min.js"></script>
<script src="js/core/jquery.slimscroll.min.js"></script>
<script src="js/core/jquery.scrollLock.min.js"></script>
<script src="js/core/jquery.appear.min.js"></script>
<script src="js/core/jquery.countTo.min.js"></script>
<script src="js/core/jquery.placeholder.min.js"></script>
<script src="js/core/js.cookie.min.js"></script>
<script src="js/app.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/magnific-popup/magnific-popup.min.js"></script>

<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Appear + Magnific Popup plugins)
        App.initHelpers(['appear', 'magnific-popup']);
    });
</script>
</body>
</html>