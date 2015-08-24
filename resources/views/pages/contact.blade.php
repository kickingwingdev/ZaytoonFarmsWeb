@extends('layout')

@section('content')
	@include('_header')
	@include('_nav')

	<div class="theme-page">
	<div class="clearfix">
	<!--PAGE CONTENT-->
	<div class="clearfix padding-bottom-66">
	    <div class="row margin-top-70">
	        <div class="column column-1-1">
	            <ul class="features-list big">
	                <li class="sl-large-construction">
	                    <div class="ornament"></div>
	                    <h2 class="box-header page-margin-top">Under Construction</h2>
	                    <p class="description">We are working on a contact form in order for us to respond to your questions sooner!
	                        <br> In the meantime, give us a call or send us a mail and we will get back to you shortly.</p>
	                </li>
	            </ul>
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