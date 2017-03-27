@extends('layouts.default')

@section('content')
    <div class="bg-image" style="background-image: url('img/various/hero1.jpg');">
        <div class="bg-primary-dark-op">
            <section class="content content-full content-boxed overflow-hidden">
                <!-- Section Content -->
                <div class="push-100-t push-50 text-center">
                    <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Build your Web Application with One.</h1>
                    <h2 class="h5 text-white-op push-50 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Powerful, flexible and reliable UI framework that just works. Your valuable feedback made it happen.</h2>
                    <a class="btn btn-rounded btn-noborder btn-lg btn-primary visibility-hidden" data-toggle="appear" data-class="animated bounceIn" data-timeout="800" href="frontend_pricing.html">Purchase Today</a>
                </div>
                <div class="row visibility-hidden" data-toggle="appear" data-class="animated fadeInUp">
                    <div class="col-sm-8 col-sm-offset-2">
                        <img class="img-responsive pull-b" src="img/various/promo1.jpg" alt="">
                    </div>
                </div>
                <!-- END Section Content -->
            </section>
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