@extends('master')


@section('content')

<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('index')}}">Home</a><span>|</span></li>
            <li>About Us</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        </nav>
    </div>
    <div class="w3l_banner_nav_right">
        <!-- about -->
        <div class="privacy about">
            <h3>About Us</h3>
            <p class="animi">We are a farming company that deals with foods of all types. We help farmers sell their fresh produce all over the country.</p>
            <div class="agile_about_grids">
                <div class="col-md-6 agile_about_grid_right">
                    <img src="{{asset('assets/images/31.jpg')}}" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 agile_about_grid_left">
                    <ol>
                        <li>Vegetables</li>
                        <li>Fruits</li>
                        <li>Cereals</li>
                        <li>Poultry</li>
                        <li>Red meat</li>
                        <li>White</li>
                    </ol>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //about -->
    </div>
    <div class="clearfix"></div>
</div>


@stop
