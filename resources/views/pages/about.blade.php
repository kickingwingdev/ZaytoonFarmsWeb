@extends('layout')

@section('content')
	@include('_header')
	@include('_nav')

	<div class="theme-page">
	<div class="clearfix">
	<!--PAGE CONTENT-->
	<div class="row margin-top-70">
	    <div class="column column-1-2 align-center re-preload">
	        <img src="images/samples/480x480/small-about-01.jpg" alt="" class="">
	    </div>
	    <div class="column column-1-2">
	        <h2 class="box-header align-left">WE ARE ZAYTOON</h2>
	        <p class="description t1">Zaytoon Farms is a family and community run business that supplies only the highest quality chicken produce and products. We pride ourselves on our values of transparency and safety in farming and distributing delicious and healthy chicken products. We supply only the freshest chicken that complies to our rigorous quality control and food safety regulations.</p>
	        <p class="description t1">We supply some of the biggest stores and distributors in the Lowveld, aiming to expand our reach and become a leader in supplying only the highest quality chicken products while enriching the lives of the local communities involved with Zaytoon.</p>
	        <p class="description t1"> Our customers include some of the Lowvelds largest food retailers such as:</p>
	        <ul class="list margin-top-20">
	            <li class="template-bullet">Crossings Super Spar</li>
	            <li class="template-bullet">The Grove Super Spar</li>
	            <li class="template-bullet">Malelane Super Spar</li>
	            <li class="template-bullet">White River Super Spar</li>
	            <li class="template-bullet">Orchards Spar</li>
	            <li class="template-bullet">Sonpark Spar</li>
	            <li class="template-bullet">Tarentaal Spar</li>
	            <li class="template-bullet">Westend Spar</li>
	            <li class="template-bullet">Lydenburg Longtom Spar</li>
	            <li class="template-bullet">Komati Spar</li>
	        </ul>
	        <div class="page-margin-top">
	            <a class="more" href="/services" title="OUR SERVICES">MORE INFO</a>
	        </div>
	    </div>
	</div>
	<div class="row gray full-width page-margin-top-section padding-top-70 padding-bottom-66">
	    <div class="row">
	        <div class="column column-1-3">
	            <ul class="features-list">
	                <li class="sl-small-bubble-check">
	                    <h4>BEST VALUE</h4>
	                    <p>Zaytoon offers great value in offering only the highest quality products at affordable prices. Due to our localised facilities we are able to deliver fresher and healthier chicken while keeping costs down.</p>
	                </li>
	            </ul>
	        </div>
	        <div class="column column-1-3">
	            <ul class="features-list">
	                <li class="sl-small-eco">
	                    <h4>ECO FRIENDLY</h4>
	                    <p>All farming, processing and distribution of Zaytoon products are done with minimal environmental impact. We value our commitment to sustainable farming.</p>
	                </li>
	            </ul>
	        </div>
	        <div class="column column-1-3">
	            <ul class="features-list">
	                <li class="sl-small-team">
	                    <h4>COMMUNITY</h4>
	                    <p>Zaytoon is a family and community run farm with our focus on creating better opportunites and quality of life for all our employees and their families.</p>
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