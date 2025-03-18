<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.templates.head')

</head>

<body>
    @include('layouts.templates.header')
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('templates/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">PHD</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>PHD Program <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>


    
    
	<br><br>
	
	{{-- @include('layouts.templates.gallery') --}}
	
	@include('layouts.templates.footer')

    @include('layouts.templates.script')
</body>

</html>
