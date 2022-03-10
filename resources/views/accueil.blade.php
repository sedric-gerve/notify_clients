@extends("layouts.master")
@section("contenu")
<div class="site-slider ">
        <ul class="bxslider">
            <li>
                <img src="images/slider/slide1.jpg" alt="slider image 1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Your HTML5 Website</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide2.jpg" alt="slider image 2">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
                        <h2>Free Bootstrap Template</h2>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide3.jpg" alt="slider image 3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Mobile Ready Design</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide4.jpg" alt="slider image 4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Responsive Bootstrap</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="images/slider/slide5.jpg" alt="slider image 5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <div class="slider-caption">
                                <h2>Get it for free!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> <!-- /.bxslider -->
        <div class="bx-thumbnail-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="bx-pager">
                            <a data-slide-index="0" href=""><img src="images/slider/thumb1.jpg" alt="image 1" /></a>
                            <a data-slide-index="1" href=""><img src="images/slider/thumb2.jpg" alt="image 2" /></a>
                            <a data-slide-index="2" href=""><img src="images/slider/thumb3.jpg" alt="image 3" /></a>
                            <a data-slide-index="3" href=""><img src="images/slider/thumb4.jpg" alt="image 4" /></a>
                            <a data-slide-index="4" href=""><img src="images/slider/thumb5.jpg" alt="image 5" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.site-slider -->
@endsection