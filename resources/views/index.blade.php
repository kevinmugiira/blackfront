@extends('master')


@section('content')

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
                <!-- Collect the nav links, forms, and other content for toggling -->
                {{--            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">--}}
                {{--                <ul class="nav navbar-nav nav_1">--}}
                {{--                    <li><a href="{{asset('assets/products.html')}}">Branded Foods</a></li>--}}
                {{--                    <li><a href="{{asset('assets/household.html')}}">Households</a></li>--}}
                {{--                    <li class="dropdown mega-dropdown active">--}}
                {{--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>--}}
                {{--                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">--}}
                {{--                            <div class="w3ls_vegetables">--}}
                {{--                                <ul>--}}
                {{--                                    <li><a href="{{asset('assets/vegetables.html')}}">Vegetables</a></li>--}}
                {{--                                    <li><a href="{{asset('assets/vegetables.html')}}">Fruits</a></li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                    <li><a href="{{asset('assets/kitchen.html')}}">Kitchen</a></li>--}}
                {{--                    <li><a href="{{asset('assets/short-codes.html')}}">Short Codes</a></li>--}}
                {{--                    <li class="dropdown">--}}
                {{--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>--}}
                {{--                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">--}}
                {{--                            <div class="w3ls_vegetables">--}}
                {{--                                <ul>--}}
                {{--                                    <li><a href="{{asset('assets/drinks.html')}}">Soft Drinks</a></li>--}}
                {{--                                    <li><a href="{{asset('assets/drinks.html')}}">Juices</a></li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                    <li><a href="{{asset('assets/pet.html')}}">Pet Food</a></li>--}}
                {{--                    <li class="dropdown">--}}
                {{--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>--}}
                {{--                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">--}}
                {{--                            <div class="w3ls_vegetables">--}}
                {{--                                <ul>--}}
                {{--                                    <li><a href="{{asset('assets/frozen.html')}}">Frozen Snacks</a></li>--}}
                {{--                                    <li><a href="{{asset('assets/frozen.html')}}">Frozen Nonveg</a></li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                    <li><a href="{{asset('assets/bread.html')}}">Bread & Bakery</a></li>--}}
                {{--                </ul>--}}
                {{--            </div><!-- /.navbar-collapse -->--}}
            </nav>
        </div>
        <div class="w3l_banner_nav_right">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="w3l_banner_nav_right_banner">
                                <h3>Make your <span>food</span> with fresh produce.</h3>
                                <div class="more">
                                    <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3l_banner_nav_right_banner1">
                                <h3>Make your <span>food</span> with Spicy.</h3>
                                <div class="more">
                                    <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3l_banner_nav_right_banner2">
                                <h3>upto <i>50%</i> off.</h3>
                                <div class="more">
                                    <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- flexSlider -->
            <link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}" type="text/css" media="screen" property="" />
            <script defer src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
            <script type="text/javascript">
                $(window).load(function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- //flexSlider -->
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- banner -->
    <div class="banner_bottom">
        <div class="wthree_banner_bottom_left_grid_sub">
        </div>
        <div class="wthree_banner_bottom_left_grid_sub1">
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="{{asset('assets/images/4.jpg')}}" alt=" " class="img-responsive" />
                    <div class="wthree_banner_bottom_left_grid_pos">
                        <h4>Discount Offer <span>25%</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="{{asset('assets/images/5.jpg')}}" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos">
                        <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="{{asset('assets/images/6.jpg')}}" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos1">
                        <h3>Save <span>Money</span> Today</h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Products</h3>
            @foreach($products as $product)
            <div class="agile_top_brands_grids">
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
{{--                            <div class="tag"><img src="{{asset('assets/images/1.png')}}" alt=" " class="img-responsive" /></div>--}}
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block" >
                                        <div class="snipcart-thumb">
                                            <a href="single.html"><img title=" " alt=" " src="{{asset('uploads/products/'. $product->image)}}" /></a>
                                            <p>{{ $product->name }}</p>
                                            <h4>Ksh {{$product->offer_price}} <span>Ksh {{$product->original_price}}</span></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <form action="checkout" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value={{ $product->name }} />
                                                    <input type="hidden" name="amount" value={{$product->offer_price}} />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="Ksh" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>

                                            </form>

                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                @foreach($products as $prod)--}}
{{--                <div class="col-md-3 top_brand_left">--}}
{{--                    <div class="hover14 column">--}}
{{--                        <div class="agile_top_brand_left_grid">--}}
{{--                            <div class="agile_top_brand_left_grid1">--}}
{{--                                <figure>--}}
{{--                                    <div class="snipcart-item block" >--}}
{{--                                        <div class="snipcart-thumb">--}}
{{--                                            <a href="{{asset('assets/single.html')}}"><img title=" " alt=" " src="{{asset('uploads/products/'. $product->image)}}" /></a>--}}
{{--                                            <p>{{ $product->name }}</p>--}}
{{--                                            <h4>Ksh {{$product->offer_price}} <span>Ksh {{$product->original_price}}</span></h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="basmati rise" />--}}
{{--                                                    <input type="hidden" name="amount" value="11.99" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--                <div class="col-md-3 top_brand_left">--}}
{{--                    <div class="hover14 column">--}}
{{--                        <div class="agile_top_brand_left_grid">--}}
{{--                            <div class="agile_top_brand_left_grid_pos">--}}
{{--                                <img src="{{asset('assets/images/offer.png')}}" alt=" " class="img-responsive" />--}}
{{--                            </div>--}}
{{--                            <div class="agile_top_brand_left_grid1">--}}
{{--                                <figure>--}}
{{--                                    <div class="snipcart-item block">--}}
{{--                                        <div class="snipcart-thumb">--}}
{{--                                            <a href="{{asset('assets/single.html')}}"><img src="{{asset('assets/images/2.png')}}" alt=" " class="img-responsive" /></a>--}}
{{--                                            <p>Pepsi soft drink (2 Ltr)</p>--}}
{{--                                            <h4>$8.00 <span>$10.00</span></h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Pepsi soft drink" />--}}
{{--                                                    <input type="hidden" name="amount" value="8.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 top_brand_left">--}}
{{--                    <div class="hover14 column">--}}
{{--                        <div class="agile_top_brand_left_grid">--}}
{{--                            <div class="agile_top_brand_left_grid_pos">--}}
{{--                                <img src="{{asset('assets/images/offer.png')}}" alt=" " class="img-responsive" />--}}
{{--                            </div>--}}
{{--                            <div class="agile_top_brand_left_grid1">--}}
{{--                                <figure>--}}
{{--                                    <div class="snipcart-item block">--}}
{{--                                        <div class="snipcart-thumb">--}}
{{--                                            <a href="{{asset('assets/single.html')}}"><img src="{{asset('assets/images/4.png')}}" alt=" " class="img-responsive" /></a>--}}
{{--                                            <p>dogs food (4 Kg)</p>--}}
{{--                                            <h4>$9.00 <span>$11.00</span></h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="dogs food" />--}}
{{--                                                    <input type="hidden" name="amount" value="9.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
                <div class="clearfix"> </div>
{{--                @endforeach--}}
            </div>
{{--            <div class="agile_top_brands_grids">--}}
{{--                <div class="col-md-3 top_brand_left">--}}
{{--                    <div class="hover14 column">--}}
{{--                        <div class="agile_top_brand_left_grid">--}}
{{--                            <div class="tag"><img src="{{asset('assets/images/tag.png')}}" alt=" " class="img-responsive" /></div>--}}
{{--                            <div class="agile_top_brand_left_grid1">--}}
{{--                                <figure>--}}
{{--                                    <div class="snipcart-item block" >--}}
{{--                                        <div class="snipcart-thumb">--}}
{{--                                            <a href="single.html"><img title=" " alt=" " src="{{asset('assets/images/1.png')}}" /></a>--}}
{{--                                            <p>fortune sunflower oil</p>--}}
{{--                                            <h4>$7.99 <span>$10.00</span></h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details">--}}
{{--                                            <form action="checkout" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />--}}
{{--                                                    <input type="hidden" name="amount" value="7.99" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                                </fieldset>--}}

{{--                                            </form>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 top_brand_left">--}}
{{--                    <div class="hover14 column">--}}
{{--                        <div class="agile_top_brand_left_grid">--}}
{{--                            <div class="agile_top_brand_left_grid1">--}}
{{--                                <figure>--}}
{{--                                    <div class="snipcart-item block" >--}}
{{--                                        <div class="snipcart-thumb">--}}
{{--                                            <a href="{{asset('assets/single.html')}}"><img title=" " alt=" " src="{{asset('assets/images/3.png')}}" /></a>--}}
{{--                                            <p>basmati rise (5 Kg)</p>--}}
{{--                                            <h4>$11.99 <span>$15.00</span></h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="basmati rise" />--}}
{{--                                                    <input type="hidden" name="amount" value="11.99" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 top_brand_left">--}}
{{--                    <div class="hover14 column">--}}
{{--                        <div class="agile_top_brand_left_grid">--}}
{{--                            <div class="agile_top_brand_left_grid_pos">--}}
{{--                                <img src="{{asset('assets/images/offer.png')}}" alt=" " class="img-responsive" />--}}
{{--                            </div>--}}
{{--                            <div class="agile_top_brand_left_grid1">--}}
{{--                                <figure>--}}
{{--                                    <div class="snipcart-item block">--}}
{{--                                        <div class="snipcart-thumb">--}}
{{--                                            <a href="{{asset('assets/single.html')}}"><img src="{{asset('assets/images/2.png')}}" alt=" " class="img-responsive" /></a>--}}
{{--                                            <p>Pepsi soft drink (2 Ltr)</p>--}}
{{--                                            <h4>$8.00 <span>$10.00</span></h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="Pepsi soft drink" />--}}
{{--                                                    <input type="hidden" name="amount" value="8.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 top_brand_left">--}}
{{--                    <div class="hover14 column">--}}
{{--                        <div class="agile_top_brand_left_grid">--}}
{{--                            <div class="agile_top_brand_left_grid_pos">--}}
{{--                                <img src="{{asset('assets/images/offer.png')}}" alt=" " class="img-responsive" />--}}
{{--                            </div>--}}
{{--                            <div class="agile_top_brand_left_grid1">--}}
{{--                                <figure>--}}
{{--                                    <div class="snipcart-item block">--}}
{{--                                        <div class="snipcart-thumb">--}}
{{--                                            <a href="{{asset('assets/single.html')}}"><img src="{{asset('assets/images/4.png')}}" alt=" " class="img-responsive" /></a>--}}
{{--                                            <p>dogs food (4 Kg)</p>--}}
{{--                                            <h4>$9.00 <span>$11.00</span></h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="snipcart-details top_brand_home_details">--}}
{{--                                            <form action="#" method="post">--}}
{{--                                                <fieldset>--}}
{{--                                                    <input type="hidden" name="cmd" value="_cart" />--}}
{{--                                                    <input type="hidden" name="add" value="1" />--}}
{{--                                                    <input type="hidden" name="business" value=" " />--}}
{{--                                                    <input type="hidden" name="item_name" value="dogs food" />--}}
{{--                                                    <input type="hidden" name="amount" value="9.00" />--}}
{{--                                                    <input type="hidden" name="discount_amount" value="1.00" />--}}
{{--                                                    <input type="hidden" name="currency_code" value="USD" />--}}
{{--                                                    <input type="hidden" name="return" value=" " />--}}
{{--                                                    <input type="hidden" name="cancel_return" value=" " />--}}
{{--                                                    <input type="submit" name="submit" value="Add to cart" class="button" />--}}
{{--                                                </fieldset>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clearfix"> </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <!-- //top-brands -->
    <!-- fresh-vegetables -->
    {{--<div class="fresh-vegetables">--}}
    {{--    <div class="container">--}}
    {{--        <h3>Top Products</h3>--}}
    {{--        <div class="w3l_fresh_vegetables_grids">--}}
    {{--            <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">--}}
    {{--                <div class="w3l_fresh_vegetables_grid2">--}}
    {{--                    <ul>--}}
    {{--                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{asset('assets/products.html')}}')}}">All Brands</a></li>--}}
    {{--                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{asset('assets/vegetables.html')}}')}}">Vegetables</a></li>--}}
    {{--                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{asset('assets/vegetables.html')}}">Fruits</a></li>--}}
    {{--                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{asset('assets/drinks.html')}}">Juices</a></li>--}}
    {{--                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{asset('assets/pet.html')}}">Pet Food</a></li>--}}
    {{--                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{asset('assets/bread.html')}}">Bread & Bakery</a></li>--}}
    {{--                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{asset('assets/household.html')}}">Cleaning</a></li>--}}
    {{--                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{asset('assets/products.html')}}">Spices</a></li>--}}
    {{--                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{asset('assets/products.html')}}">Dry Fruits</a></li>--}}
    {{--                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{asset('assets/products.html')}}">Dairy Products</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-9 w3l_fresh_vegetables_grid_right">--}}
    {{--                <div class="col-md-4 w3l_fresh_vegetables_grid">--}}
    {{--                    <div class="w3l_fresh_vegetables_grid1">--}}
    {{--                        <img src="{{asset('assets/images/8.jpg')}}" alt=" " class="img-responsive" />--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-4 w3l_fresh_vegetables_grid">--}}
    {{--                    <div class="w3l_fresh_vegetables_grid1">--}}
    {{--                        <div class="w3l_fresh_vegetables_grid1_rel">--}}
    {{--                            <img src="{{asset('assets/images/7.jpg')}}" alt=" " class="img-responsive" />--}}
    {{--                            <div class="w3l_fresh_vegetables_grid1_rel_pos">--}}
    {{--                                <div class="more m1">--}}
    {{--                                    <a href="{{asset('assets/products.html')}}" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="w3l_fresh_vegetables_grid1_bottom">--}}
    {{--                        <img src="{{asset('assets/images/10.jpg')}}" alt=" " class="img-responsive" />--}}
    {{--                        <div class="w3l_fresh_vegetables_grid1_bottom_pos">--}}
    {{--                            <h5>Special Offers</h5>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-4 w3l_fresh_vegetables_grid">--}}
    {{--                    <div class="w3l_fresh_vegetables_grid1">--}}
    {{--                        <img src="{{asset('assets/images/9.jpg')}}" alt=" " class="img-responsive" />--}}
    {{--                    </div>--}}
    {{--                    <div class="w3l_fresh_vegetables_grid1_bottom">--}}
    {{--                        <img src="{{asset('assets/images/11.jpg')}}" alt=" " class="img-responsive" />--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="clearfix"> </div>--}}
    {{--                <div class="agileinfo_move_text">--}}
    {{--                    <div class="agileinfo_marquee">--}}
    {{--                        <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>--}}
    {{--                    </div>--}}
    {{--                    <div class="agileinfo_breaking_news">--}}
    {{--                        <span> </span>--}}
    {{--                    </div>--}}
    {{--                    <div class="clearfix"></div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="clearfix"> </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    <!-- //fresh-vegetables -->
    <!-- newsletter -->
    {{--<div class="newsletter">--}}
    {{--    <div class="container">--}}
    {{--        <div class="w3agile_newsletter_left">--}}
    {{--            <h3>sign up for our newsletter</h3>--}}
    {{--        </div>--}}
    {{--        <div class="w3agile_newsletter_right">--}}
    {{--            <form action="#" method="post">--}}
    {{--                <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">--}}
    {{--                <input type="submit" value="subscribe now">--}}
    {{--            </form>--}}
    {{--        </div>--}}
    {{--        <div class="clearfix"> </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    <!-- //newsletter -->

@stop
