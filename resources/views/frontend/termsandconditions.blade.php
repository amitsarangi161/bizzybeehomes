@extends('layouts.frontend')

@section('content')
<div class="main-content">
    <!-- Start Hero Section -->
    <section class="other-hero bg-img" data-src="img/other-hero-bg.jpg">
      <div class="container other-hero-text">
        <h1>Terms and Condtions</h1>
        <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li>Terms and Condtions</li>
        </ul>
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Single Project -->
    <section class="single-project section">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="project-details-wrap">
              <h2 class="project-entry-title">Terms and Condtions</h2>
              <div class="project-entry-content">
                {!! ($termsandcondition)?$termsandcondition->termsandconditions:'' !!}
              </div>
            </div>
          </div>
         
        </div>
        
      </div>
    </section>
    <!-- End Single Project -->
  </div><!-- .main-content -->

@endsection