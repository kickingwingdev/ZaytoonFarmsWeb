@extends('layout')

@section('content')
	@include('_header')
	@include('_nav')

	<div class="theme-page">
	<div class="clearfix">
	<!--PAGE CONTENT-->
	<div class="theme-page padding-bottom-66">
	    <div class="clearfix">
	        <div class="row full-width">
	            <div class="contact-map" id="map" data-scroll-wheel="0" data-draggable="0"></div>
	        </div>

	        <div class="row page-margin-top">
	            <form class="contact-form" id="contact-form" method="post" action="contact_form/contact_form.php">
	                <div class="row">
	                    <fieldset class="column column-1-2">
	                        <input class="text-input" name="name" type="text" value="Your Name *" placeholder="Your Name *">
	                        <input class="text-input" name="email" type="text" value="Your Email *" placeholder="Your Email *">
	                        <input class="text-input" name="phone" type="text" value="Your Phone" placeholder="Your Phone">
	                    </fieldset>
	                    <fieldset class="column column-1-2">
	                        <textarea name="message" placeholder="Message *">Message *</textarea>
	                    </fieldset>
	                </div>
	                <div class="row margin-top-30">
	                    <div class="column column-1-2">
	                        <p class="description t1">We will contact you within one business day.</p>
	                    </div>
	                    <div class="column column-1-2 align-right">
	                        <input type="hidden" name="action" value="contact_form" />
	                        <input type="submit" name="submit" value="SEND MESSAGE" class="more active">
	                    </div>
	                </div>
	            </form>
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