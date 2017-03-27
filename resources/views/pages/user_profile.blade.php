@extends('layouts.default')
@section('content')


    <!-- Main Container -->

        <!-- Page Content -->
        <div class="content content-boxed">
            <!-- User Header -->
            <div class="block">
                <!-- Basic Info -->
                <div class="bg-image" style="background-image: url('img/photos/photo6@2x.jpg');">
                    <div class="block-content bg-primary-dark-op text-center overflow-hidden">
                        <div class="push-30-t push animated fadeInDown">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="img/avatars/avatar4.jpg" alt="">
                        </div>
                        <div class="push-30 animated fadeInUp">
                            <h2 class="h4 font-w600 text-white push-5">{{Auth::user()->name}}</h2>

                        </div>
                    </div>
                </div>
                <!-- END Basic Info -->

                <!-- Stats -->
                <div class="block-content text-center">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Movie Reviews</div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">{{$movie_reviews}}</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">TV Show Reviews</div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">{{$tv_reviews}}<a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Anime Reviews</div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">2600</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Average Rating Ratings</div>
                            <div class="text-warning push-10-t animated flipInX">
                                <?php
                                    $counter=0;
                                    foreach ($review_ratings as $rating)
                                    {
                                        $counter += (int)$rating->review_rating;
                                    }
                                    $overall_ratings=$counter/count($review_ratings);
                                    for($i=1; $i<=$overall_ratings; $i++){
                                        echo  "<i class='fa fa-star'></i>";
                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Stats -->
            </div>
            <!-- END User Header -->

            <!-- Main Content -->
            <div class="row">
                <div class="col-sm-5 col-sm-push-7 col-lg-4 col-lg-push-8">
                    <!-- Follow -->
                    <div class="block">
                        <div class="block-content block-content-full text-center">
                            <button class="btn btn-sm btn-default"><i class="fa fa-fw fa-plus text-success"></i> Follow</button>
                            <button class="btn btn-sm btn-default"><i class="fa fa-fw fa-inbox text-info"></i> Send Message</button>
                        </div>
                    </div>
                    <!-- END Follow -->

                    <!-- About -->
                    <div class="block">
                        <div class="block-content">
                            <p>Hi there, welcome to my profile!</p>
                            <p>I'm a web designer and I love creating stuff that solve problems and make your life easier. Feel free to follow me to know more about me and my projects. Thanks for stopping by, wish you a great day!</p>
                        </div>
                    </div>
                    <!-- END About -->

                    <!-- Followers -->
                    <div class="block block-opt-refresh-icon6">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><i class="fa fa-fw fa-share-alt"></i> Followers</h3>
                        </div>
                        <div class="block-content">
                            <ul class="nav-users push">
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="assets/img/avatars/avatar13.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> George Stone
                                        <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                        <i class="fa fa-circle text-warning"></i> Amy Hunter
                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
                                        <i class="fa fa-circle text-danger"></i> Laura Bell
                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                    </a>
                                </li>
                            </ul>
                            <div class="text-center push">
                                <small><a href="javascript:void(0)">Load More..</a></small>
                            </div>
                        </div>
                    </div>
                    <!-- END Followers -->

                    <!-- Products -->
                    <div class="block block-opt-refresh-icon6">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><i class="fa fa-fw fa-briefcase"></i> Products</h3>
                        </div>
                        <div class="block-content">
                            <ul class="list list-simple list-li-clearfix">
                                <li>
                                    <a class="item item-rounded pull-left push-10-r bg-info" href="javascript:void(0)">
                                        <i class="si si-rocket text-white-op"></i>
                                    </a>
                                    <h5 class="push-10-t">MyPanel</h5>
                                    <div class="font-s13">Responsive App Template</div>
                                </li>
                                <li>
                                    <a class="item item-rounded pull-left push-10-r bg-amethyst" href="javascript:void(0)">
                                        <i class="si si-calendar text-white-op"></i>
                                    </a>
                                    <h5 class="push-10-t">Project Time</h5>
                                    <div class="font-s13">Web application</div>
                                </li>
                                <li>
                                    <a class="item item-rounded pull-left push-10-r bg-danger" href="javascript:void(0)">
                                        <i class="si si-speedometer text-white-op"></i>
                                    </a>
                                    <h5 class="push-10-t">iDashboard</h5>
                                    <div class="font-s13">Bootstrap Admin Template</div>
                                </li>
                            </ul>
                            <div class="text-center push">
                                <small><a href="javascript:void(0)">View More..</a></small>
                            </div>
                        </div>
                    </div>
                    <!-- END Products -->

                    <!-- Ratings -->
                    <div class="block block-opt-refresh-icon6">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><i class="fa fa-fw fa-star"></i> Ratings</h3>
                        </div>
                        <div class="block-content">
                            <ul class="list list-simple">
                                <li>
                                    <div class="push-5 clearfix">
                                        <div class="text-warning pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a class="font-w600" href="base_pages_profile.html">Dennis Ross</a>
                                        <span class="text-muted">(5/5)</span>
                                    </div>
                                    <div class="font-s13">Flawless design execution! I'm really impressed with the product, it really helped me build my app so fast! Thank you!</div>
                                </li>
                                <li>
                                    <div class="push-5 clearfix">
                                        <div class="text-warning pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a class="font-w600" href="base_pages_profile.html">Adam Hall</a>
                                        <span class="text-muted">(5/5)</span>
                                    </div>
                                    <div class="font-s13">Great value for money and awesome support! Would buy again and again! Thanks!</div>
                                </li>
                                <li>
                                    <div class="push-5 clearfix">
                                        <div class="text-warning pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a class="font-w600" href="base_pages_profile.html">Ethan Howard</a>
                                        <span class="text-muted">(5/5)</span>
                                    </div>
                                    <div class="font-s13">Working great in all my devices, quality and quantity in a great package! Thank you!</div>
                                </li>
                            </ul>
                            <div class="text-center push">
                                <small><a href="javascript:void(0)">Read More..</a></small>
                            </div>
                        </div>
                    </div>
                    <!-- END Ratings -->
                </div>
                <div class="col-sm-7 col-sm-pull-5 col-lg-8 col-lg-pull-4">
                    <!-- Timeline -->
                    <div class="block block-opt-refresh-icon6">
                        <div class="block-header">

                            <h3 class="block-title"><i class="glyphicon-folder-open"></i> My Watchlist</h3>
                        </div>
                        <div class="block-content">
                            <div class="block block-transparent pull-r-l">
                                <div class="block-content block-content-full">
                                   My watchlist
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Timeline -->
                </div>
            </div>
            <!-- END Main Content -->
        </div>

@stop