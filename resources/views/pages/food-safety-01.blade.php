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
	                <h3 class="box-header">National Legislation</h3>
	                <p class="description t1">Zaytoon Farms will strive to comply with the following standards and legislation.</p>
	            </div>
					<table class="margin-top-40">
					    <tbody>
					        <tr>
					            <td><em>Meat Safety Act (40 of 2000)</em></td>
					            <td>- R153 – Poultry Regulations</td>
					        </tr>
					        <tr>
					            <td>Health Act (63 of 1977)</td>
								<td>- R1809/1992 – Maximum limits for veterinary medicine and stock remedy residues that may be present in foodstuffs.
								    <br>- R44/1999 – Amendment Maximum limits for veterinary medicine and stock remedy residues that may be present in foodstuffs.
								</td>
					        </tr>
					        <tr>
					            <td>Agricultural Products Standards Act (119 of 1990)</td>
					            <td>- R946 – Regulations regarding control over the sale of poultry meat.
					            	<br>- R988 – Amendment Regulations regarding control over the sale of poultry meat.
					            </td>
					        </tr>
					        <tr>
					            <td>Food Stuffs, Cosmetics andDisinfectants Act (54 of 1972)</td>
					            <td>- R908 – Regulations relating to the application of a Hazard Analysis and Critical Control Point system.
					            <br>- R962 - Regulations governing general hygiene requirements for food premises and the transport of food.
					            <br>- R1387 – Level of Antibiotics in foodstuffs.
					            <br>- R313 – Regulations governing tolerances for funges-produced toxins in foodstuff.
					            <br>- R146 – Regulations relating to the labelling and advertising of foodstuffs.
					            <br>- R692 - Regulations governing microbiological standards for foodstuffs and related matters.
					            <br>- R965 – Regulating relating to preservatives and antioxidants.</td>
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
	</div>
	</div>

	@include('_footer')
@stop

@stop