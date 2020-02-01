@extends('students.layouts.base')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('main/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Today's Events</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="#">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="#">Today's Event <i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>

    @if(count($events)===0)
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
          	
            <h2 class="mb-3">No Events</h2>
            <p>There are no events today</p>            
          </div> <!-- .col-md-8 -->
       
        </div>
      </div>
    </section>
    @else
        @foreach($events as $e)
        <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                <a href="/event-details" class="block-20" style="background-image: url('main/images/image_2.jpg');">
                </a>
                <div class="text p-4 float-right d-block">
                    <div class="topper d-flex align-items-center">
                    <div class="one two py-2 pl-3 pr-3 align-self-stretch">
                            <span class="day">{{$e->date}}</span>
                        </div>
                        
                    
                    </div>
                    <h3 class="heading mb-3"><a href="/event-details">{{$e->event_name}}</a></h3>
                    <p>{{$e->event_name}}</p>
                    <p><a href="/event-details" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Participate</a></p>
                </div>
                </div>
            </div>
                
        </div>
      </div>
    </section>

            @endforeach
        @endif

@endsection