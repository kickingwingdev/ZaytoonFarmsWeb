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
	        </ul>
	        <div class="call-to-action sl-small-bubble page-margin-top">
	            <h4>Contact Us</h4>
	            <p class="description t1">Contact us for more info on any of our services.</p>
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
	        <div class="row padding-bottom-70">
	            <div class="column-1-1">
	                <h3 class="box-header">SA National Standards</h3>
	                <p class="description t1">Zaytoon Farms will strive to comply with the following standards and legislation.</p>
	            </div>
					<table class="margin-top-40">
					    <tbody>
					        <tr>
					            <td>SANS 10049:2012</td>
					            <td>- Food Safety Management – Requirements for prerequisite programmes (PRP’s)</td>
					        </tr>
					        <tr>
					            <td>SANS 241-1:2011</td>
								<td>- Drinking water</td>
					        </tr>
					        <tr>
					            <td>SANS 241-2:2011</td>
					            <td>- Drinking water</td>
					        </tr>
					        <tr>
					            <td>SANS 10330:2007</td>
					            <td>- Requirements for a Hazard Analysis and Critical Control Point (HACCP) system</td>
					        </tr>
					        <tr>
					            <td>SANS5763:2006</td>
					            <td>- Efficacy of cleaning plant, equipment and utensils: swab technique</td>
					        </tr>
							<tr>
					            <td>ANS 14159:2006</td>
					            <td>- Safety of machinery – Hygiene requirements for the design of machinery</td>
					        </tr>
					        <tr>
					            <td><em>Other Standards</em></td>
					            <td>- Global Food Safety Initiative Edition six
					            <br>- SAPA Code of Practise 2011</td>
					        </tr>
					    </tbody>
					</table>

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