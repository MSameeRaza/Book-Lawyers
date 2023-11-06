<!DOCTYPE html>
<html lang="en">
<title>Lawyer Panel</title>
  <head>

    <!-- Required meta tags -->
    

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
            @include('lawyer.sidebar')

      <!-- partial -->
      @include('lawyer.navbar')

        <!-- partial -->
       @include('lawyer.body')
    <!-- container-scroller -->
@include('admin.js')
  </body>
</html> 