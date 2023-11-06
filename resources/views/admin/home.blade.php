<!DOCTYPE html>
<title>Admin Panel</title>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
   @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

        <!-- partial -->
       @include('admin.body')
    <!-- container-scroller -->
@include('admin.js')
  </body>
</html> 