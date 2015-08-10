@extends('layout')

@section('content')
	@include('_header')
	@include('_nav')
	@include('_slider')

	<div class="theme-page">
    <div class="clearfix">
	<!--ORDER LINK-->
	<div class="row full-width">
	    <div class="announcement clearfix">
	        <ul class="columns no-width">
	            <li class="column column-3-4">
	                <div class="vertical-align">
	                    <div class="vertical-align-cell sl-small-list">
	                        <h3>ORDER NOW</h3>
	                        <p class="description">Send us a product request and we will send you a quote!</p>
	                    </div>
	                </div>
	            </li>
	            <li class="column-right column-1-4">
	                <div class="vertical-align">
	                    <div class="vertical-align-cell">
	                        <a class="more" href="#" title="REQUEST A QUOTE">REQUEST A QUOTE</a>
	                    </div>
	                </div>
	            </li>
	        </ul>
	    </div>
	</div>
	<!--SERVICES-->
	<div class="row full-width gray page-padding-top-section">
	    <div class="row">
	        <h2 class="box-header">OUR SERVICES</h2>
	        <p class="description align-center">Zaytoon Farms offer a myriad of services for our clients and customers. Our focus is on delivering only the highest levels of quality in everything we do.</p>
	        <ul class="services-list clearfix page-margin-top">
	            <li>
	                <a href="/food-safety" title="Food Safety">
	                    <img src="images/samples/390x260/small-sample-01.jpg" alt="">
	                </a>
	                <h4 class="box-header"><a href="/food-safety" title="Food Safety">FOOD SAFETY</a></h4>
	                <p>We are commited to ensuring all food safety and quality of products supplied.</p>
	            </li>
	            <li>
	                <a href="/halaal" title="Halaal">
	                    <img src="images/samples/390x260/small-sample-02.jpg" alt="">
	                </a>
	                <h4 class="box-header"><a href="/halaal" title="Halaal">HALAAL</a></h4>
	                <p>We are commited to ensure that all products slaughtered are fully Halaal.</p>
	            </li>
	            <li>
	                <a href="/dispatch-and-transport" title="Dispatch and Transport">
	                    <img src="images/samples/390x260/small-sample-03.jpg" alt="">
	                </a>
	                <h4 class="box-header"><a href="/dispatch-and-transport" title="Dispatch and Transport">DISPATCH AND TRANSPORT</a></h4>
	                <p>We adhere to strict guidlines in delivering our products safely and efficiently.</p>
	            </li>
	        </ul>
	        <div class="align-center margin-top-67 padding-bottom-87">
	            <a class="more" href="/services" title="VIEW ALL SERVICES">VIEW ALL SERVICES</a>
	        </div>
	    </div>
	</div>
	<!--PRODUCTS-->
	<div class="row full-width page-margin-top-section">
	    <div class="row">
	        <h2 class="box-header">LATEST PRODUCTS</h2>
	        <p class="description align-center">See the latest products offered by Zaytoon. All our products are packed and dispatched to your order.</p>
	    </div>
	    <ul class="projects-list clearfix page-margin-top">
	        <li>
	            <a href="fresh-added-value-fillet-kebabs.html" title="Fresh Added Value Fillet Kebabs">
	                <img src="images/samples/570x380/fresh-added-value-fillet-kebabs-md.jpg" alt="Fresh Added Value Fillet Kebabs">
	            </a>
	            <div class="view align-center">
	                <div class="vertical-align-table">
	                    <div class="vertical-align-cell">
	                        <p class="description">Fresh Added Value Fillet Kebabs</p>
	                        <a class="more simple" href="fresh-added-value-fillet-kebabs.html" title="VIEW PRODUCT">VIEW PRODUCT</a>
	                    </div>
	                </div>
	            </div>
	        </li>
	        <li>
	            <a href="fresh-added-value-mini-kebabs.html" title="Fresh Added Value Mini Kebabs">
	                <img src="images/samples/570x380/fresh-added-value-mini-kebabs-md.jpg" alt="Fresh Added Value Mini Kebabs">
	            </a>
	            <div class="view align-center">
	                <div class="vertical-align-table">
	                    <div class="vertical-align-cell">
	                        <p class="description">Fresh Added Value Mini Kebabs</p>
	                        <a class="more simple" href="fresh-added-value-mini-kebabs.html" title="VIEW PRODUCT">VIEW PRODUCT</a>
	                    </div>
	                </div>
	            </div>
	        </li>
	        <li>
	            <a href="fresh-added-value-deboned-whole-birds.html" title="Fresh Added Value Deboned Whole Birds">
	                <img src="images/samples/570x380/fresh-added-value-deboned-whole-birds-md.jpg" alt="Fresh Added Value Deboned Whole Birds">
	            </a>
	            <div class="view align-center">
	                <div class="vertical-align-table">
	                    <div class="vertical-align-cell">
	                        <p class="description">Fresh Added Value Deboned Whole Birds</p>
	                        <a class="more simple" href="fresh-added-value-deboned-whole-birds.html" title="VIEW PRODUCT">VIEW PRODUCT</a>
	                    </div>
	                </div>
	            </div>
	        </li>
	        <li>
	            <!-- 480x320 Actual Image Size -->
	            <a href="fresh-retail-drum-10.html" title="Fresh Retail Drum 10">
	                <img src="images/samples/570x380/fresh-retail-drum-10-md.jpg" alt="Fresh Retail Drum 10">
	            </a>
	            <div class="view align-center">
	                <div class="vertical-align-table">
	                    <div class="vertical-align-cell">
	                        <p class="description">Fresh Retail Drum 10</p>
	                        <a class="more simple" href="fresh-retail-drum-10.html" title="VIEW PRODUCT">VIEW PRODUCT</a>
	                    </div>
	                </div>
	            </div>
	        </li>
	    </ul>
	</div>
	<div class="align-center margin-top-67">
	    <a class="more" href="/pages/products" title="VIEW ALL SERVICES">VIEW ALL PRODUCTS</a>
	</div>
	<!--FEATURES-->
	<div class="row gray full-width page-margin-top-section page-padding-top-section padding-bottom-66">
	    <div class="row">
	        <div class="tabs no-scroll clearfix">
	            <ul class="tabs-navigation clearfix">
	                <li>
	                    <a href="#we-offer" title="We Offer" class="sl-small-bubble-check">
	                                            We Offer
	                                        </a>
	                    <span></span>
	                </li>
	                <li>
	                    <a href="#we-guarantee" title="We Guarantee" class="sl-small-shield">
	                                            We Guarantee
	                                        </a>
	                    <span></span>
	                </li>
	                <li>
	                    <a href="#we-provide" title="We Provide" class="sl-small-truck">
	                                            We Provide
	                                        </a>
	                    <span></span>
	                </li>
	            </ul>
	            <div id="we-offer">
	                <h4 class="box-header">PERSONAL SERVICE</h4>
	                <p>'PLACEHOLDER'</p>
	            </div>
	            <div id="we-guarantee">
	                <h4 class="box-header">HIGH QUALITY</h4>
	                <p>'PLACEHOLDER'</p>
	            </div>
	            <div id="we-provide">
	                <h4 class="box-header">CUSTOM ORDERS</h4>
	                <p>'PLACEHOLDER'</p>
	            </div>
	        </div>
	    </div>
	</div>
	<!--CONTACT BANNER-->
	<div class="row yellow full-width padding-top-bottom-30">
	    <div class="row">
	        <div class="column column-1-3">
	            <ul class="contact-details-list">
	                <li class="sl-small-phone">
	                    <p>Phone:
	                        <br> 013 7127911/2</p>
	                </li>
	            </ul>
	        </div>
	        <div class="column column-1-3">
	            <ul class="contact-details-list">
	                <li class="sl-small-location">
	                    <p>Portion 16, Mount Olive Farms
	                        <br> Barberton</p>
	                </li>
	            </ul>
	        </div>
	        <div class="column column-1-3">
	            <ul class="contact-details-list">
	                <li class="sl-small-mail">
	                    <p>E-mail:
	                        <br>
	                        <a href="mailto:zaytoonpoultry@telkomsa.net">zaytoonpoultry@telkomsa.net</a></p>
	                </li>
	            </ul>
	        </div>
	    </div>
	</div>

	@include('_footer')
@stop

@stop