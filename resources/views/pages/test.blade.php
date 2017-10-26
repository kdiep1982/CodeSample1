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
                        <img class="img-responsive" src="img/photos/photo2.jpg" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="img/photos/photo3.jpg" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="img/photos/photo4.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>

    </div>

@stop