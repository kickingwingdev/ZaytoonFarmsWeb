@extends('layout')

@section('content')
@include('_header')
@include('_nav')

<div class="theme-page">
    <div class="clearfix">
        <!--PAGE CONTENT-->
        <div class="row margin-top-70 padding-bottom-66">
            <div class="column column-1-2">
                <img src='images/samples/570x380/fresh-added-value-skewered-wings-md.jpg' alt='Fresh Added Value Skewered Wings'>
            </div>
            <div class="column column-1-2">
                <h3 class="box-header">DESCRIPTION</h3>
                <p class="description t1">Fresh Whole Chicken Wing, Skewered and Spiced with Freddy Hirsch Chicken Grill Seasoning (Other Marinade on Request), 4-6 Portions Wrapped in tray.</p>
                <h4 class="box-header page-margin-top">AT A GLANCE</h4>
                <table class="margin-top-40">
                    <tbody>
                        <tr>
                            <td>Product Code</td>
                            <td>FASWS</td>
                        </tr>
                        <tr>
                            <td>Product Barcode</td>
                            <td>6009880098293</td>
                        </tr>
                    </tbody>
                </table>
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