@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | How to Sell Fast ')
@section('style')
<style>
</style>
@endsection
@section('frontend-content')

<div class="container about" style="margin-bottom: 50px;margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1 class="title">Welcome to SellQuicker.com How to sell fast Page</h1>
            <p class="sub-titile">In order for the website to provide a safe and useful service, it is important for SellQuicker.com to collect, use, and share personal information.</p>
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
                    <a class="nav-link active" href="{{url('/sellfast')}}">How to sell fast<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{url('/membership')}}">Membership<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/banner')}}">Banner Advertising<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/promote')}}">Promote Ads<span class="content-icon"><i class="fas fa-angle-right"></i></span></a>
                </li>
            </ul>
        </div>
        <div class="col-md-8 content-text">
            <h4>Collection</h4>
            <p style="margin-bottom:20px;">In order for the website to provide a safe and useful service, it is important for SellQuicker.com to collect, use, and share personal information.</p>
            <ul>
                <li>Email address, contact information, and (depending on the service used) sometimes financial information <br>Computer sign-on data, statistics on page views, traffic to and from SellQuicker.com and response to advertisements</li>
                <li>Other information, including users' IP address and standard web log information.</li>
            </ul>
            <hr>
            <h4>Use</h4>
            <p style="margin-bottom:20px;">We use users' personal information to:</p>
            <ul>
                <li>Provide our services</li>
                <li>Resolve disputes, collect fees, and troubleshoot problems</li>
                <li>Encourage safe trading and enforce our policies</li>
                <li>Customize users experience, measure interest in our services</li>
                <li>Improve our services and inform users about services and updates</li>
                <li>Communicate marketing and promotional offers to you according to your preferences</li>
                <li>Do other things for users as described when we collect the information</li>
            </ul>
            <hr>
            <h4>Disclosure</h4>
            <ul>
                <li>We don't sell or rent users' personal information to third parties for their marketing purposes without users' explicit consent. We may disclose personal information to respond to legal requirements, enforce our policies, respond to claims that a posting or other content violates other's rights, or protect anyone's rights, property, or safety.</li>
            </ul>
            <hr>
            <h4>Communication and email tools</h4>
            <ul>
                <li>You agree to receive marketing communications about consumer goods and services on behalf of our third party advertising partners unless you tell us that you prefer not to receive such communications. If you don't wish to receive marketing communications from us, simply indicate your preference by following directions provided with the communication. You may not use our site or communication tools to harvest addresses, send spam or otherwise breach our Terms of Use or Privacy Policy. We may automatically scan and manually filter email messages sent via our communication tools for malicious activity or prohibited content. If you use our tools to send content to a friend, we don't permanently store your friends' addresses or use or disclose them for marketing purposes. To report spam from other users, please contact customer support.</li>
            </ul>
            <hr>
            <h4>Security</h4>
            <ul>
                <li>We use lots of tools (encryption, passwords, physical security) to protect your personal information against unauthorized access and disclosure.</li>
                <li>All personal electronic details will be kept private by the Service except for those that you wish to disclose.</li>
                <li>It is unacceptable to disclose the contact information of others through the Service.</li>
                <li>If you violate the laws of your country of residence and/or the terms of use of the Service you forfeit your privacy rights over your personal information.</li>
            </ul>
            <hr>
            <h4>Unsubscribe information</h4>
            <ul>
                <li>If at any time you wish to have your information reviewed or removed from our active databases, please contact us at support@SellQuicker.com. Additionally, you will be able to unsubscribe anytime by clicking on the unsubscribe link at the bottom of all our email communications.</li>
                <li>This website makes use of Display Advertising, and uses Remarketing technology with Google Analytics to advertise online. Third-party vendors, including Google, may show our ads on various websites across the Internet, using first-party cookies and third-party cookies together to inform, optimize, and serve ads based on past visits to our website.</li>
                <li>Visitors can opt-out of Google Analytics for Display Advertising and customize Google Display Network ads using the Ads Preferences Manager.</li>
            </ul>
        </div>
    </div>
</div>

@section('scripts')
@endsection
@endsection
