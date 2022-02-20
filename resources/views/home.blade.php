<!-- ABOUT -->
@extends('frontend/master_home')    
@section('main_content')

{{-- about section  --}}
@include('frontend.body.about')
{{-- end about section  --}}

    <!-- PROJECTS -->
  @include('frontend.body.project')

    <!-- Experience -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

               @include('frontend.body.experience')

             @include('frontend.body.education')
                
            </div>
        </div>
    </section>

    <!-- CONTACT -->
   @include('frontend.body.contact')

@endsection
