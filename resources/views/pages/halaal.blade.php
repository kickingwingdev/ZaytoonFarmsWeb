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
	            <li class="template-arrow-circle-down">
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
	                <p class="description t1">We are committed to ensure that all products slaugthered at Zaytoon Farms be fully Halaal. Only dedicated Muslim slaughterers would be employed to slaughter the birds on a daily basis.</p>

	                <p class="description t1">Adequate Halaal slaughterers would be employed as to ensure that there would be time for rest and prayer and have a slaughterer and relieve slaughterer on the slaughter line at all times. The Halaal Supervisor is appointed by SANHA to oversee all Halaal activities.</p>
	                <p class="description t1">Zaytoon Farms is registered and Certified at the South African National Halaal Authority (SANHA) and would voluntarily undergo random and unannounced Halaal inspections from the SANHA.</p>
	                <p class="description t1">A prayer room for the slaughterers is made available and they are permitted to attend Mosque on Friday’s on a scheduled and rotation basis.</p>
	                <p class="description t1 margin-top-34">A Halaal check list is in place to ensure that all Halaal protocols regarding the slaughter of chickens remain fully in accordance with the Muslim requirements.</p>
	                <ul class="list margin-top-20">
	                    <li>- Visible lip movement for Tasmiya</li>
	                    <li>- Knife Sterilizers</li>
	                    <li>- 40 - 50 V for Stunning</li>
	                    <li>- Complete bled out carcasses</li>
	                    <li>- Stunning to be reversible</li>
	                    <li>- Only live birds to be presented for slaughter.</li>
	                </ul>
	            </div>
	        </div>
	        <div class="row page-margin-top padding-bottom-50">
	            <div class="column column-1-2">
	                <h4 class="box-header">WHY CHOOSE US</h4>
	                <p class="description t1 margin-top-34">We endeavour to bring you products and services that surpass the industry regulations and standards of quality.</p>
	                <ul class="list margin-top-20">
	                    <li class="template-bullet">Experience</li>
	                    <li class="template-bullet">Industry Training</li>
	                    <li class="template-bullet">Community Involvement</li>
	                    <li class="template-bullet">Highest Quality</li>
	                    <li class="template-bullet">Accredited</li>
	                    <li class="template-bullet">Transparency</li>
	                </ul>
	            </div>
	            <div class="column column-1-2">
	                <h4 class="box-header">POPULAR QUESTIONS</h4>
	                <ul class="accordion margin-top-40 clearfix">
	                    <li>
	                        <div id="accordion-1">
	                            <h5>How are your chickens grown?</h5>
	                        </div>
	                        <p class="description t1">Morbi nulla tortor, degnissim at node cursus euismod est arcu. Nomad turbina uter vehicula justo magna paetos in accumsan tempus, terminal ullamcorper a quam suscipit.</p>
	                    </li>
	                    <li>
	                        <div id="accordion-2">
	                            <h5>Do your birds contain GMO's?</h5>
	                        </div>
	                        <p class="description t1">Morbi nulla tortor, degnissim at node cursus euismod est arcu. Nomad turbina uter vehicula justo magna paetos in accumsan tempus, terminal ullamcorper a quam suscipit.</p>
	                    </li>
	                    <li>
	                        <div id="accordion-3">
	                            <h5>Are the birds free-range?</h5>
	                        </div>
	                        <p class="description t1">Morbi nulla tortor, degnissim at node cursus euismod est arcu. Nomad turbina uter vehicula justo magna paetos in accumsan tempus, terminal ullamcorper a quam suscipit.</p>
	                    </li>
	                    <li>
	                        <div id="accordion-4">
	                            <h5>Is your packaging recyclable?</h5>
	                        </div>
	                        <p class="description t1">Morbi nulla tortor, degnissim at node cursus euismod est arcu. Nomad turbina uter vehicula justo magna paetos in accumsan tempus, terminal ullamcorper a quam suscipit.</p>
	                    </li>
	                </ul>
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