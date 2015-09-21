@extends('layout')

@section('content')
	@include('_header')
	@include('_nav')

	<div class="theme-page">
	<div class="clearfix">
	<!--PAGE CONTENT-->
	<div class="row margin-top-70">
	    <div class="column column-1-4">
	        <div class="call-to-action sl-small-bubble">
	            <h4>Contact Us</h4>
	            <p class="description t1">Contact us for more info on any of our services or features</p>
	            <a class="more" href="contact.html" title="REQUEST A QUOTE">CONTACT</a>
	        </div>
	        <h6 class="box-header page-margin-top">Download Brochure</h6>
	        <ul class="buttons margin-top-30">
	            <li class="template-arrow-circle-down padding-bottom-50">
	                <a href="#" title="Download Brochure">Coming Soon!</a>
	            </li>
	        </ul>
	    </div>
	    <div class="column column-3-4">
	        <div class="row">
	            <div class="column column-1-2">
					<img src='images/samples/480x320/halaal-sm.jpg' alt='img'>
	            </div>
	            <div class="column column-1-2">
					<img src='images/samples/480x320/small-sample-06.jpg' alt='img'>
	            </div>
	        </div>
	        <div class="row page-margin-top padding-bottom-70">
	            <div class="column-1-1">
	                <h3 class="box-header">HALAAL</h3>

	                <p class="description t1">Zaytoon Farms is registered and Certified at the South African National Halaal Authority (SANHA) and would voluntarily undergo random and unannounced Halaal inspections from the SANHA.</p>

	                <p class="description t1"><a href="http://www.sanha.org.za/a/index.php">www.sanha.org.za</a></p>

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

	</div>
	</div>

	@include('_footer')
@stop

@stop