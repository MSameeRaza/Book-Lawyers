<!DOCTYPE html>
<title>Admin Panel</title>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/Assets
    ">

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
   @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

        <!-- partial -->
 
    <!-- container-scroller -->

   
      <!-- partial:partials/_sidebar.html -->

<div class="container-fluid page-body-wrapper">
<div class="container" align="center" style="padding: 100px;">
  <form action="{{url('updatelawyer',$data->id)}}" method="POST" >
    @csrf
    
<input type="hidden" name="item_id" value="{{$data->id}}">

    <div style="padding: 15px;">
      <label>Lawyer Name</label>
      <input type="text" name="name" value="{{$data->name}}">
    </div>

       <div style="padding: 15px;">
      <label>Phone Number</label>
      <input type="text" name="phone" value="{{$data->phone}}">
    </div>

       <div style="padding: 15px;">
      <label> Speciality</label>
      <input type="text" name="speciality" value="{{$data->speciality}}">
    </div>


       <div style="padding: 15px;">
      <label>Room</label>
      <input type="text" name="room" value="{{$data->room}}">
    </div>

      <div style="padding: 15px;">
      <label>Old Image</label>
     <img src="{{$data->image}}">
    </div>

      <div style="padding: 15px;">
      <label>Change Image</label>
      <input type="file" name="file">
    </div>


     <div style="padding: 15px;">
    
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
</div>
 
      @include('admin.js')

  </body>
</html> 