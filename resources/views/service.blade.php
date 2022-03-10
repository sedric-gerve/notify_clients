@extends('layouts.master')
@section('contenu')
<style>
    #services{
        margin-top:25px;
    }
    #centre{
        text-align:center;
        text-transform:touppercase;
    }
</style>
 <div id="services" class="content-section">
 <h1 id="centre">services</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon first"></span>
                        <h3>Responsive Layout</h3>
                        <p>Sprint is free CSS template based on HTML5 and Bootstrap. You can feel free to download, modify and use this for your website.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon second"></span>
                        <h3>Mobile Friendly</h3>
                        <p>You may want to visit <a rel="nofollow" href="https://www.toocss.com">Too CSS blog</a> to see latest collections of free CSS templates for your websites. Etiam porttitor nibh et felis molestie fermentum.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon third"></span>
                        <h3>Highest Standard</h3>
                        <p>Phasellus mauris risus, sodales vitae finibus at, auctor et augue. Fusce est neque, ornare sit amet fringilla eget, tincidunt vel arcu.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <span class="service-icon fourth"></span>
                        <h3>Quick Support</h3>
                        <p>Ut congue interdum pharetra facilisi. Aenean consectetur pellentesque mauris nec ornare. Nam tortor justo, rutrum ut condimentum.</p>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
      </div> <!-- /#services -->
    <div id="product-promotion" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">New Arrivals</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="item-small">
                        <img src="images/promotion/promotion1.jpg" alt="Product 1">
                        <h4>Nullam Non Ultrices Arcu</h4>
                    </div> <!-- /.item-small -->
                </div> <!-- /.col-md-2 -->
                <div class="col-md-8 col-sm-6">
                    <div class="item-large">
                        <img src="images/promotion/promotion2.jpg" alt="Product 2">
                        <div class="item-large-content">
                            <div class="item-header">
                                <h2 class="pull-left">Fusce facilisis semper magna</h2>
                                <span class="pull-right">Rate: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i></span>
                                <div class="clearfix"></div>
                            </div> <!-- /.item-header -->
                            <p>Maecenas erat lacus, ultrices vel orci ac, eleifend pulvinar est. Proin mollis purus tincidunt enim aliquam posuere et eget magna. Proin sed posuere lorem. Nulla eget neque at eros ultricies venenatis eget sit amet risus. Donec ornare consequat efficitur. <br><br>In hac habitasse platea dictumst. Cras eget scelerisque justo, sit amet aliquam ex. Aliquam iaculis lectus accumsan, egestas lorem ac, malesuada purus.</p>
                        </div> <!-- /.item-large-content -->
                    </div> <!-- /.item-large -->
                </div> <!-- /.col-md-8 -->
                <div class="col-md-2 col-sm-3">
                    <div class="item-small">
                        <img src="images/promotion/promotion3.jpg" alt="Product 3">
                        <h4>Morbi Sit Amet Lorem</h4>
                    </div> <!-- /.item-small -->
                </div> <!-- /.col-md-2 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#product-promotion -->
 @endsection

