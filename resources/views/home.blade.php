@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        <div class="col-sm-4">
            <h1>{{ config('app.name', 'Personaliser') }}</h1>
            <h3 class="text-muted">You are logged in.</h3>
        </div>
        <div class="col-sm-8 text-right">
            <p class="lead">Oliver: 01274 854963<br>Dan: 01374 854977</p>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm-3">
            <img src="{{ asset('images/homepage/welcome.jpg') }}" style="width: 200px;" alt="Welcome">
        </div>
        <div class="col-sm-9">
            <p class="lead">
            Welcome to your very own bespoke box portal for sampling purposes. 
            Here you can create bespoke boxes featuring your prospective clients logo or design. 
            Once created add to cart and we will print and dispatch within 3 days.
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{ asset('images/homepage/firstimp.jpg') }}" style="width: 200px;" alt="First Impressions">
        </div>
        <div class="col-sm-9">
            <p class="lead">
            Bespoke boxes are a fantastic way to add value to yours or your clients merchandise/giveaways. 
            Gift boxes are used currently for product launches, onboarding gifts, thankyou and commemerative gifts. 
            Help your customers stay ahead of their competition and create a positive first impression.
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{ asset('images/homepage/helpline.jpg') }}" style="width: 200px;" alt="Help Line">
        </div>
        <div class="col-sm-9">
            <p class="lead">
            Once you have gained your clients interest in the product and discussed what products may feature in the box,
            please call <strong class="text-primary">Dan on 01274 854977</strong> or <strong class="text-primary">Oliver on 01274 854963</strong> for help and advice. They will guide you through the process
            of housing products in the box and provide layout designs free of cost.
            </p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{ asset('images/homepage/tou.jpg') }}" style="width: 200px;" alt="Terms of use">
        </div>
        <div class="col-sm-9">
            <p class="lead">
            Once your client is happy with the proposed layout, should you wish to see a finished sample with foam inlay this laser
            sample is charged at £25, any subsequent changes to the layout and further samples will be charged at £15 each.</p>
            <p class="lead">
            As a new user your first 10 box designs are free of cost. Following that we will invoice you monthly for any box
            designs you order via the portal (Payment terms are 30 days nett of month end). Late payment of invoices will result in your
            access to the portal being suspended.<br>
            Boxes are limited to 1 box 1 design - should you require more than 1 box for your chosen design, you just speak to 
            Dan or Oliver who can help.
            </p>
        </div>
    </div>


    <p><a href="{{ action('ProductController@index') }}" class="btn btn-md btn-primary">Click to view the product list</a></p>
    
    
</div>

@endsection

