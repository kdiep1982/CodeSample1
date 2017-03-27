@extends('layouts.default')

@section('content')
    <div class="bg-image" style="background-image: url('img/various/bg01.jpg');">
        <div class="bg-primary-dark-op">
            <section class="content content-full content-boxed overflow-hidden">
                <!-- Section Content -->
                <div class="push-100-t push-50 text-center">
                    <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">TV Shows airing today</h1>
                </div>

                <!-- END Section Content -->
            </section>
        </div>
    </div>
    <div class="bg-gray-lighter">
        <section class="content content-boxed">
            <!-- New Arrivals -->
            <h3 class="font-w400 text-black push-30-t push-20">TV Shows airing today</h3>

            <div class="row">
                @foreach($recent_tvShows as $media)
                    <div class="col-sm-6 col-lg-3">
                        <div class="block">
                            <div class="img-container">
                                <?php

                                    $poster=($media->poster !=''? $media->poster: "img/photos/no-image-available-icon.jpg" )

                                ?>
                                <img class="img-responsive" src="<?php echo $poster;?>" height="283" width="424">
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

                                <p class="text-muted">Status: {{$media->status}}</p>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
            <div class="pull-right" >
                {{$recent_tvShows->links()}}
            </div>
            <!-- END New Arrivals -->
        </section>
    </div>
@stop