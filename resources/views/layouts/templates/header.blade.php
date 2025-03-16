<div class="bg-top navbar-light">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center py-4">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('templates/images/logo.png') }}" alt="University Logo" style="height: 50px;">
                </a>
            </div>
            <div class="col-lg-8 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <div class="text">
                            <span>Email</span>
                            <span>youremail@email.com</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <div class="text">
                            <span>Call</span>
                            <span>Call Us: + 1235 2355 98</span>
                        </div>
                    </div>
                    <div class="col-md topper d-flex align-items-center justify-content-end">
                        <p class="mb-0">
                            <a href="#" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                                <span>Apply now</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container d-flex align-items-center px-4">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" 
              aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
      </button>
      
      {{-- <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
              <input type="text" class="form-control pl-3" placeholder="Search">
              <button type="submit" class="form-control search">
                  <span class="ion-ios-search"></span>
              </button>
          </div>
      </form> --}}

      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a href="index.html" class="nav-link pl-0">Home</a>
              </li>

              <!-- About Us Dropdown -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" 
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About Us
                  </a>
                  <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                      <a class="dropdown-item" href="mission-vision.html">Mission & Vision</a>
                      <a class="dropdown-item" href="our-team.html">Our Team</a>
                      <a class="dropdown-item" href="our-partner.html">Our Partner</a>
                  </div>
              </li>

              <li class="nav-item">
                  <a href="admission.html" class="nav-link">Admission</a>
              </li>

              <!-- Program Dropdown -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="programDropdown" role="button" 
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Program
                  </a>
                  <div class="dropdown-menu" aria-labelledby="programDropdown">
                      <a class="dropdown-item" href="graduate-certificate.html">Graduate Certificate</a>
                      <a class="dropdown-item" href="master-of-arts.html">Master of Arts</a>
                  </div>
              </li>

              <li class="nav-item">
                  <a href="announcements.html" class="nav-link">Announcements</a>
              </li>

              <li class="nav-item">
                  <a href="research-publication.html" class="nav-link">Research & Publication</a>
              </li>

              <!-- CMP Dropdown -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="cmpDropdown" role="button" 
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      CMP
                  </a>
                  <div class="dropdown-menu" aria-labelledby="cmpDropdown">
                      <a class="dropdown-item" href="professional-development.html">Professional Development Training</a>
                  </div>
              </li>

              <li class="nav-item">
                  <a href="alumni.html" class="nav-link">Alumni</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
