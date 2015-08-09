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
					<img src='images/samples/480x320/small-sample-05.jpg' alt='img'>
	            </div>
	            <div class="column column-1-2">
					<img src='images/samples/480x320/small-sample-06.jpg' alt='img'>
	            </div>
	        </div>
	        <div class="row page-margin-top padding-bottom-70">
	            <div class="column-1-1">
	                <h3 class="box-header">QUALITY CONTROL</h3>
	                <p class="description t1">It is the policy of Zaytoon to control the quality of all final products, work-in-progress products and raw materials.</p>
	                <p class="description t1">The controlling of quality will be applied through various steps and stages in the slaughtering and processing process.</p>
	                <h5 class="margin-top-20">Recieving</h5>
	                <p class="description t1">Quality control will start at receiving of incoming goods to ensure all products conform to product specifications and Zaytoons standards. Handling of non-conforming products procedures are drafted in place. </p>
	               <h5 class="margin-top-20">Raw Materials and Packaging</h5>
	                <p class="description t1">A full Supplier evaluation is done by Zaytoon to ensure all Raw-Materials are conforming to standards. Material Safety Data Sheets, Product Specifications and Ingredient declarations are kept on record. All incoming Spices and Marinades must include a COA of the batch.</p>
	                <p class="description t1">All Packaging materials are of Food Grade material. All Raw materials transferred from the Bulk Packaging Store to the Abattoir will be recorded with their batch numbers.</p>
	                <h5 class="margin-top-20">Final Products</h5>
	                <p class="description t1">A Retention Sample will be kept of every production day. Monthly swabs will be done to ensure safe Microbiological levels and verify effective cleaning and sanitation programs.</p>
	                <p class="description t1">Records of testing will be kept on file.</p>
	                <p class="description t1">A corrective action procedure is in place and would be applied if any quality test showed the product did not meet minimum requirements.</p>
	                <p class="description t1">It is the responsibility of the Meat Inspector, to ensure correct Inspection of meat and condemning of non conforming product. Corrective actions are performed in the case of non-conforming products.</p>
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