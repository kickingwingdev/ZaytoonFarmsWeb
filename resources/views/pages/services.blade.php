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
	            <a href="/food-safety" title="Food Safety">
	                <img src="images/samples/780x520/service-food-safety-md.jpg" alt="">
	            </a>
	            <h4 class="box-header"><a href="/food-safety" title="Food Safety">FOOD SAFETY</a></h4>
	            <p>We are commited to ensuring all food safety and quality of products supplied.</p
	        </li>
	        <li>
	            <a href="/halaal" title="Halaal">
	                <img src="images/samples/780x520/service-halaal-md.jpg" alt="">
	            </a>
	            <h4 class="box-header"><a href="/halaal" title="Halaal">HALAAL</a></h4>
	            <p>We are commited to ensure that all products slaughtered are fully Halaal.</p
	        </li>
	        <li>
	            <a href="/dispatch-and-transport" title="Dispatch and Transport">
	                <img src="images/samples/780x520/service-dispatch-transport-md.jpg" alt="">
	            </a>
	            <h4 class="box-header"><a href="/dispatch-and-transport" title="Dispatch and Transport">DISPATCH AND TRANSPORT</a></h4>
	            <p>We adhere to strict guidlines in delivering our products safely and efficiently.</p
	        </li>
	        <li>
	            <a href="/packaging" title="Packaging">
	                <img src="images/samples/780x520/service-packaging-md.jpg" alt="">
	            </a>
	            <h4 class="box-header"><a href="/packaging" title="Packaging">PACKING</a></h4>
	            <p>Zaytoon provides in-house packaging in order to ensure safety and quality. </p>
	        </li>
	    </ul>
	</div>
	<br>
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

	</div>
	</div>

	@include('_footer')
@stop

@stop