<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.templates.head')

	{{-- <style>
        .custom-card {
            text-align: center;
            position: relative;
            margin: 50px auto;
            width: 250px;
        }
        .top-circle {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 50%;
            border: 5px solid #0a4d9b;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            position: relative;
            top: -50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            background: #0a4d9b;
            color: white;
            padding: 20px;
            border-radius: 10px;
            font-weight: bold;
        }
        .bottom-circle {
            width: 70px;
            height: 70px;
            background: #0a4d9b;
            border-radius: 50%;
            color: white;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            top: 20px;
            margin: 0 auto;
        }
        .dashed-line {
            width: 2px;
            height: 20px;
            background: #0a4d9b;
            margin: -10px auto;
            border-left: 2px dashed white;
        }
    </style> --}}
</head>

<body>
    @include('layouts.templates.header')
    <!-- END nav -->

    @include('layouts.templates.hero')

    @include('layouts.templates.services')
   
	@include('layouts.templates.courses')

	@include('layouts.templates.teachers')
	
	@include('layouts.templates.request_a_quat')
	
	@include('layouts.templates.blogs')

	@include('layouts.templates.testimony')
	
	{{-- @include('layouts.templates.gallery') --}}
	
	@include('layouts.templates.footer')



   


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    @include('layouts.templates.script')


	{{-- <div class="custom-card">
        <!-- Top Circle -->
        <div class="top-circle">
            <img src="https://via.placeholder.com/80x80" alt="Logo" width="80">
        </div>

        <!-- Middle Card -->
        <div class="card-body">
            Realizing the <br> localization agenda
        </div>

        <!-- Dashed Line -->
        <div class="dashed-line"></div>

        <!-- Bottom Circle -->
        <div class="bottom-circle">
            (3 Cr)
        </div>
    </div> --}}
</body>

</html>
