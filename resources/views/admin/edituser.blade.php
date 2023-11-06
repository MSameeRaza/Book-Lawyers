


<!DOCTYPE html>
<title>Admin Panel</title>

<html >
<head>
 

    @include('admin.css')
    

    <title>Laravel</title>

    <!-- Fonts -->
    


</head>
<body>
    <div> </div> class="container-scroller">
  <!-- partial:partials/_sidebar.html -->
   @include('admin.sidebar')
     
      <!-- partial -->
      @include('admin.navbar')

<div class="container-fluid page-body-wrapper">
<div class="container" align="center" style="padding: 100px;">
  @if (session()->has('messageuser'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">x</button>
  {{session()->get('messageuser')}}
</div>

        @endif
  <form action="{{url('updateuser',$data1->id)}}" method="POST" >
    @csrf
    
<input type="hidden" name="item_id" value="{{$data1->id}}">

    <div style="padding: 15px;">
      <label>Lawyer Name</label>
      <input type="text" name="name" value="{{$data1->name}}">
    </div>

       <div style="padding: 15px;">
      <label> Email</label>
      <input type="text" name="phone" value="{{$data1->email}}">
    </div>

       <div style="padding: 15px;">
      <label> Id_Admin</label>
      <input type="text" name="speciality" value="{{$data1->id_admin}}">
    </div>


     


     <div style="padding: 15px;">
    
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
</div>
 
    </div>
      @include('admin.design')

    </div>
  </div>
    <!-- container-scroller -->
@include('admin.js')
  </body>

</html> 








