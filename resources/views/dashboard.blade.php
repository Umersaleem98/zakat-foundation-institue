<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.admin.head')
</head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
     @include('layouts.admin.sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
        @include('layouts.admin.header')

        
        @include('layouts.admin.content')

       
      </div>

      
    </div>
    <!--   Core JS Files   -->

@include('layouts.admin.script')
  </body>
</html>
