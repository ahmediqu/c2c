@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Terms and condition ')
@section('style')
<style>
</style>
@endsection
@section('frontend-content')
<div class="container about" style="margin-bottom: 50px;margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="title">Welcome to SellQuicker.com Terms & Conditions Page</h1>
            <p class="sub-titile">Here you can find answers to our most frequently asked questions and learn about SellQuicker.com, how to use it, how to stay safe and get in touch with us.</p>
            <img src="{{url('frontend/logo.png')}}" alt="SellQuicker" style="height: 30px;transform: scale(1.9);">
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row content-section">
        <div class="col-md-4 sidenav">
            <ul class="nav flex-column">
                 <li class="nav-item">
                    <a class="nav-link active" href="{{url('/condition')}}">Terms & Conditions<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/aboutus')}}">About Us <span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}">Contact<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/privacy')}}">Privacy Policy<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/sitemap')}}">Sitemap<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 content-text">
            <h4>Terms & Conditions</h4>
            <ul>
                <li>SellQuicker.com is a service provided by Saltside Technologies AB (subject to your compliance with the Terms and Conditions set forth below). Please read these Terms and Conditions before using this Web Site.</li>
            </ul>
            <hr>
            <h4>General</h4>
            <ul>
                <li>Advertisers and users are responsible for ensuring that advertising content, text, images, graphics, video ("Content") uploaded for inclusion on SellQuicker.com complies with all applicable laws. SellQuicker.com & Saltside Technologies AB assumes no responsibility for any illegality or any inaccuracy of the Content.</li>
                <li>The advertisers and user guarantees that his or her Content do not violate any copyright, intellectual property rights or other rights of any person or entity, and agrees to release SellQuicker.com and Saltside Technologies AB from all obligations, liabilities and claims arising in connection with the use of (or the inability to use) the service.</li>
                <li>Advertisers agree that their Content can may be presented through SellQuicker.com's partner sites under the same terms and conditions as on SellQuicker.com.</li>
            </ul>
            <hr>
            <h4>Copyright</h4>
            <ul>
                <li>Advertisers grant SellQuicker.com and Saltside Technologies AB a perpetual, royalty-free, irrevocable, non-exclusive right and license to use, reproduce, modify, adapt, publish, translate, create derivative works from and distribute such Content or incorporate such Content into any form, medium, or technology now known or later developed.</li>
                <li>The material (including the Content, and any other content, software or services) contained on SellQuicker.com are the property of Saltside Technologies AB, its subsidiaries, affiliates and/or third party licensors. Any intellectual property rights, such as copyright, trademarks, service marks, trade names and other distinguishing brands on the Web Site are the property of Saltside Technologies AB. To be clear: No material on this site may be copied, reproduced, republished, installed, posted, transmitted, stored or distributed without written permission from Saltside Technologies AB.</li>
            </ul>
            <hr>
            <h4>Watermarks</h4>
            <ul><li>All images on SellQuicker.com are watermarked, which prevents the images to be used for other purposes, without the consent of the advertiser.</li></ul>
            <hr>
            <h4>Safety and images</h4>
            <ul>
                <li>SellQuicker.com and Saltside Technologies AB reserves the right to change the title of the Content, for editorial purposes. SellQuicker.com and Saltside Technologies AB reserves the right not to publish images that are irrelevant or images that violate SellQuicker.com's rules.</li>
            </ul>
            <hr>
            <h4>Personal</h4>
            <ul>
                <li>SellQuicker.com and Saltside Technologies AB has the right to cooperate with authorities in the case any Content violates the law. The identity of advertisers, users or buyers may be determined, for example by an ISP. IP addresses may also be registered in order to ensure compliance with the terms and conditions.</li>
            </ul>
                <hr>
                <h4>Privacy</h4>
                <ul>
                    <li>SellQuicker.com and Saltside Technologies AB will collect information from Users and Advertisers. It is a condition of use of the SellQuicker.com that each User and advertiser consents and authorises SellQuicker.com and Saltside Technologies AB to collect and use this information. SellQuicker.com and Saltside Technologies AB also reserves the right to disclose it to Company Affiliates and any other person for the purposes of administering, supporting and maintaining SellQuicker.com, as well as for improving SellQuicker.com, for example by using the information for research, marketing, product development and planning.</li>
                </ul>
            </ul>
        </div>
    </div>
</div>
@section('scripts')
@endsection
@endsection
