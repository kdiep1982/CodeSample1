@extends('layouts.default')

@section('content')
    <script src="js/plugins/slick/slick.min.js"></script>
    <link rel="stylesheet" href="js/plugins/slick/slick.min.css">
    <link rel="stylesheet" href="js/plugins/slick/slick-theme.min.css">

    <script>
        jQuery(function () {
            // Init page helpers (Slick Slider + Easy Pie Chart plugins)
            App.initHelpers(['slick']);
        });
    </script>

    <div class="row">
        <div class="col-lg-12">
            <div class="block">
                <div class="js-slider remove-margin-b" data-slider-autoplay="true">
                    <div>
                        <img class="img-responsive img-homepage-slider" src="http://cf2.imgobject.com/t/p/original/jZcF7xZVvrX2A4qNOqeHpmtbdBT.jpg" alt="" >
                    </div>
                    <div>
                        <img class="img-responsive img-homepage-slider" src="http://cf2.imgobject.com/t/p/original/fyy1nDC8wm553FCiBDojkJmKLCs.jpg" alt="" >
                    </div>
                    <div>
                        <img class="img-responsive img-homepage-slider" src="http://cf2.imgobject.com/t/p/original/y52mjaCLoJJzxfcDDlksKDngiDx.jpg" alt="" >
                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="bg-gray-lighter">
        <section class="content content-boxed">
            <!-- New Arrivals -->
            <h3 class="font-w400 text-black push-30-t push-20">New Movies</h3>

            <div class="row">
                @foreach($new_movies as $media)
                    <div class="col-sm-6 col-lg-3">
                        <div class="block">
                            <div class="img-container">

                                <img class="img-responsive" src="{{$media->poster}}" height="283" width="424">
                                <div class="img-options">
                                    <div class="img-options-content">
                                        <div class="push-20">
                                            <a class="btn btn-sm btn-default" href="detail/{{$media->id}}">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="block-content">
                                <div class="push-10">
                                    <div class="h4 font-w600 text-success pull-right push-10-l"><i class="fa fa-heart pull-right" aria-hidden="true"></i>{{$media->vote_average}}</div>
                                    <a class="h4" href="detail/{{$media->media_id}}">{{$media->title}}</a>
                                </div>
                                <?php $release=date("m/d/Y",strtotime($media->release_date));?>
                                <p class="text-muted">Release Date: <?php echo $release; ?></p>
                            </div>
                        </div>

                    </div>
                @endforeach


                <div class="col-xs-12 text-right push">
                    <a class="font-w600 link-effect" href="newArrival">View More New Arrivals <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- END New Arrivals -->

            <!-- Upcoming Movies-->

            <h3 class="font-w400 text-black push-20">Upcoming Movies</h3>

            <div class="row">
                @foreach($upcoming_movies as $media)
                    <div class="col-sm-6 col-lg-3">
                        <div class="block">
                            <div class="img-container">
                                <img class="img-responsive" src="{{$media->poster}}" alt="">
                                <div class="img-options">
                                    <div class="img-options-content">
                                        <div class="push-20">
                                            <a class="btn btn-sm btn-default" href="detail/{{$media->id}}">View</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="push-10">
                                    <div class="h4 font-w600 text-success pull-right push-10-l"><i class="fa fa-heart pull-right" aria-hidden="true"></i>{{$media->vote_average}}</div>
                                    <a class="h4" href="detail/{{$media->media_id}}">{{$media->title}}</a>
                                </div>
                                <?php $release=date("m/d/Y",strtotime($media->release_date));?>
                                <p class="text-muted">Release Date: <?php echo $release; ?></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-xs-12 text-right push">
                    <a class="font-w600 link-effect" href="upcoming">View More Best Rated <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- END Upcoming Movies-->

            <!-- Best Sellers -->
            <h3 class="font-w400 text-black push-20">Top Rated Movies</h3>

            <div class="row">
                @foreach($top_rated as $media)
                    <div class="col-sm-6 col-lg-3">
                        <div class="block">
                            <div class="img-container">
                                <img class="img-responsive" src="{{$media->poster}}">
                                <div class="img-options">
                                    <div class="img-options-content">
                                        <div class="push-20">
                                            <a class="btn btn-sm btn-default" href="detail/{{$media->id}}">View</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="push-10">
                                    <div class="h4 font-w600 text-success pull-right push-10-l"><i class="fa fa-heart pull-right" aria-hidden="true"></i>{{$media->vote_average}}</div>
                                    <a class="h4" href="detail/{{$media->media_id}}">{{$media->title}}</a>
                                </div>
                                <?php $release=date("m/d/Y",strtotime($media->release_date));?>
                                <p class="text-muted">Release Date: <?php echo $release; ?></p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-xs-12 text-right push">
                    <a class="font-w600 link-effect" href="topRated">View More Best Sellers <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- END Best Sellers -->

        </section>
    </div>
@stop