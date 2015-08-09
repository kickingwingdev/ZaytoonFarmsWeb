@extends('layout')

@section('content')
	@include('_header')
	@include('_nav')

	<div class="theme-page">
	<div class="clearfix">

	<!--SERVICES-->
	<div class="row">
	    <ul class="services-list clearfix padding-top-70">
	        <li>
	            <a href="/food-safety" title="Service 1">
	                <img src="images/samples/390x260/small-sample-01.jpg" alt="">
	            </a>
	            <h4 class="box-header"><a href="/food-safety" title="Service 1">FOOD SAFETY</a></h4>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, soluta!</p
	        </li>
	        <li>
	            <a href="service-1.html" title="Service 2">
	                <img src="images/samples/390x260/small-sample-02.jpg" alt="">
	            </a>
	            <h4 class="box-header"><a href="service-1.html" title="Service 2">HALAAL</a></h4>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, explicabo.</p
	        </li>
	        <li>
	            <a href="service-1.html" title="Service 3">
	                <img src="images/samples/390x260/small-sample-03.jpg" alt="">
	            </a>
	            <h4 class="box-header"><a href="service-1.html" title="Service 3">DISPATCH AND TRANSPORT</a></h4>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, commodi!</p
	        </li>
	        <li>
	            <a href="service-1.html" title="Service 4">
	                <img src="images/samples/390x260/small-sample-03.jpg" alt="">
	            </a>
	            <h4 class="box-header"><a href="service-1.html" title="Service 4">QUALITY CONTROL</a></h4>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, itaque.</p>
	        </li>
	        <li>
	            <a href="service-1.html" title="Service 5">
	                <img src="images/samples/390x260/small-sample-02.jpg" alt="">
	            </a>
	            <h4 class="box-header"><a href="service-1.html" title="Service 5">PACKAGING</a></h4>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, cum.</p>
	        </li>
	        <li>
	            <a href="service-1.html" title="Service 6">
	                <img src="images/samples/390x260/small-sample-01.jpg" alt="">
	            </a>
	            <h4 class="box-header"><a href="service-1.html" title="Service 6">CUSTOM ORDERS</a></h4>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, facere.</p>
	        </li>
	    </ul>
	</div>
	<br>
	<!--CONTACT FOOTER-->
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

	</div>
	</div>

	@include('_footer')
@stop

@stop