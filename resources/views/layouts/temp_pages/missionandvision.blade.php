<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.templates.head')

</head>

<body>
    @include('layouts.templates.header')
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2 mb-5" style="background-image: url('templates/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">Mission and Vision</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>

   <section class="ftco-section ftco-no-pt ftc-no-pb mt-5">
    <div class="container-fluid">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
                <h2 class="mb-4">Our Mission & Vision</h2>
                <p class="text-muted">Learn about our core purpose and aspirations.</p>
            </div>
        </div>

        <div class="row">
            <!-- Mission Card -->
            <div class="col-md-4">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="icon mb-3">
                            <i class="fas fa-bullseye fa-3x text-primary"></i>
                        </div>
                        <h4 class="card-title">
                            <i class="fas fa-rocket text-primary"></i> Motivation
                        </h4>
                        <p class="card-text">
                            No human being should be subjected to preventable poverty, hunger, or displacement while the world has the knowledge, tools, and ability to respond to humanitarian challenges.
                        </p>
                        <div class="mt-auto"></div> <!-- Pushes content up -->
                    </div>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="col-md-4">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="icon mb-3">
                            <i class="fas fa-eye fa-3x text-success"></i>
                        </div>
                        <h4 class="card-title">
                            <i class="fas fa-lightbulb text-success"></i> Mission
                        </h4>
                        <p class="card-text">
                            Our mission is to offer a solution-oriented educational experience that accelerates the success of the social good sector by empowering local charitable work leaders with specialized knowledge and professional skills and integrating them into the services of global humanitarianism and philanthropy.
                        </p>
                        <div class="mt-auto"></div>
                    </div>
                </div>
            </div>

            <!-- Our Vision Card -->
            <div class="col-md-4">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="icon mb-3">
                            <i class="fas fa-eye fa-3x text-success"></i>
                        </div>
                        <h4 class="card-title">
                            <i class="fas fa-lightbulb text-success"></i> Our Vision
                        </h4>
                        <p class="card-text">
                            We envision building a diverse, multi-generational alumni body that develops sustainable, evolving, socially responsive projects that engender inclusive cultures of compassion and mutual respect, and change the world for the better.
                        </p>
                        <div class="mt-auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  
   
    
    <!-- FontAwesome CDN for Icons -->
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
    
    
	<br><br>
	
	{{-- @include('layouts.templates.gallery') --}}
	
	@include('layouts.templates.footer')

    @include('layouts.templates.script')
</body>

</html>
