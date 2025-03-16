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
              <h1 class="mb-2 bread">About Us</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section ftco-no-pt ftc-no-pb mt-5">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about d-flex align-items-stretch">
                    <div class="img" style="background-image: url(templates/images/about.jpg); border"></div>
                </div>
                <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                    <h2 class="mb-4">Zakat Foundation Institute</h2>
                    <p>Welcome to the Zakat Foundation Institute (ZFI), where we are dedicated to transforming the landscape of social goods sectors through specialized education and empowerment. As an independent professional graduate program, ZFI was founded by the Zakat Foundation of America in 2020, providing a unique and hands-on training experience for those serving the Muslim charitable sector. ZFI is accredited by the Indiana Board for Proprietary Education, ensuring excellence in our specialized programs.</p>
                    <p>Our aim is to offer advanced degrees in humanitarian and development studies, empowering local charitable work leaders with specialized knowledge and professional skills. To achieve this, the ZFI partners with the Indiana University Lilly Family School of Philanthropy, providing specialized coursework to students and professionals who have demonstrated a strong commitment to serving the Muslim charitable sector. The Lilly Family School of Philanthropy is the world’s first school dedicated solely to the study and teaching of philanthropy.</p>
                    
                    <!-- Hidden text -->
                    <div id="moreText" style="display: none;">
                        <p>We are proud to award a certain number of graduate fellowships annually, fully funded by the Zakat Foundation of America, to professionals with proven dedication to established Muslim charities. Upon successful completion of their fellowship, students get the opportunity to enroll in the fully funded flagship MS in the Philanthropic Studies program offered by the Indiana University Lilly Family School of Philanthropy. This inclusion reflects our institute’s commitment to bringing about effective and much-needed changes in the world of Muslim charitable work and the global humanitarian sector, which is currently facing unprecedented and dire systemic crises.</p>
                        <p>Our first batch in the 2020 Fall Semester, welcomed Fellows from both the US and abroad. ZFI coursework is primarily conducted online, with limited in-person seminar requirements and internships. Join us at ZFI, where education meets purpose, and together, we shape a brighter future for the world.</p>
                    </div>
    
                    <!-- Read More / Read Less Button -->
                    <button class="btn btn-primary mt-3" id="toggleButton" onclick="toggleText()">Read More</button>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        function toggleText() {
            var moreText = document.getElementById("moreText");
            var button = document.getElementById("toggleButton");
    
            if (moreText.style.display === "none") {
                moreText.style.display = "block";
                button.textContent = "Read Less";
            } else {
                moreText.style.display = "none";
                button.textContent = "Read More";
            }
        }
    </script>
    
    
	<br><br>
	
	{{-- @include('layouts.templates.gallery') --}}
	
	@include('layouts.templates.footer')

    @include('layouts.templates.script')
</body>

</html>
