<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.head')
</head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
     @include('layouts.sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
        @include('layouts.header')

        
        @include('layouts.content')

       
      </div>

      
    </div>
    <!--   Core JS Files   -->

@include('layouts.script')
  </body>
</html>
