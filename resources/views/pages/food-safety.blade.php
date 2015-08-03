@extends('layout')

@section('content')
	@include('_header')
	@include('_nav')

	<div class="theme-page">
	<div class="clearfix">
	<!--FOOD SAFETY-->
	<div class="row margin-top-70">
	    <div class="column column-1-4">
	        <ul class="vertical-menu">
	            <li>
	                <a href="/food-safety-01" title="Feature 1">
	                                        National Legislation
	                                        <span class="template-arrow-menu"></span>
	                                    </a>
	            </li>
	            <li>
	                <a href="/food-safety-02" title="SA National Standards">
	                                        SA National Standards
	                                        <span class="template-arrow-menu"></span>
	                                    </a>
	            </li>
	            <li>
	                <a href="/feature-3.html" title="Other Standards">
	                                        Other Standards
	                                        <span class="template-arrow-menu"></span>
	                                    </a>
	            </li>
	        </ul>
	        <div class="call-to-action sl-small-bubble page-margin-top">
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
					<img src='images/samples/480x320/small-sample-05.jpg' alt='img'>
	            </div>
	            <div class="column column-1-2">
					<img src='images/samples/480x320/small-sample-06.jpg' alt='img'>
	            </div>
	        </div>
	        <div class="row page-margin-top padding-bottom-70">
	            <div class="column-1-1">
	                <h3 class="box-header">FOOD SAFETY</h3>
	                <p class="description t1">Zaytoon Farms management is committed to ensure that all necessary resources and training are made available to ensure that a safe product of good quality is supplied to the customer and consumer. This will be ensured by the implementation of a food safety management system based on the establishment and maintenance of proper Pre-Requisite Programs and Good Manufacturing Practices and HACCP principles.</p>
	                <p class="description t1">All customer complaints will be addressed quickly and effectively to prevent the re-occurrence of such a non-conformance.</p>
	                <p class="description t1">Corrective actions are viewed as very important and will be performed on all non- conformances with investigations and a root cause analysis.</p>
	                <p class="description t1">Internal audits will be in place to continually review and monitor the management of the food safety program.</p>
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
	<!--FOOD SAFETY END-->
	</div>
	</div>

	@include('_footer')
@stop

@stop