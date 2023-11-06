
<!DOCTYPE html>
<title>Lawyer Panel</title>

<html >
<head>
 

    @include('admin.css')
    

    <title>Laravel</title>

    <!-- Fonts -->
    


</head>
<body>
    <div class="container-scroller">
  <!-- partial:partials/_sidebar.html -->
   @include('lawyer.sidebar')
     
      <!-- partial -->
      @include('admin.navbar')
      <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="admin/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">$12.34</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Potential growth</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">$17.34</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Revenue current</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">$12.34</h3>
                          <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Daily Income</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">$31.53</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Expense current</h6>
                  </div>
                </div>
              </div>
            </div>
      <div class="container">

      <div class="container" align="center" >
        @if (session()->has('message'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">x</button>
  {{session()->get('message')}}
</div>

        @endif
        
<!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif



<form action="{{ url('upload_lawyer') }}" method="POST" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
     
          <div  class="form-group" style="padding: 15px;">
    <label>
      Lawyer Name
    </label>
<input type="text" name="name" class="form-control" placeholder="Write Your Name" style="color: black" >
  </div>

  <div class="form-group" style="padding: 15px;">
    <label>
      Phone
    </label>
<input type="number" name="number" class="form-control" placeholder="Write Your Phone Number" style="color: black" required="">
  </div>

  <div class="form-group" style="padding: 15px;">
    <label>
     Speciality
    </label>

<select name="speciality"  style="color: black;" required>
  <option required>--Select--</option>
  <option value="divorce" required>Speciality in Divorce Case</option >
    <option value="kidnaping" required>Speciality in Kidnaping Case</option>
    <option value="criminal">Speciality in Criminal Case </option>
  <option value="relation" required>Speciality in Relation Case</option>
<option value="affidavit">Speciality in affidavit Case</option>
  <option value="rapecase" required>RSpeciality in Rape Case </option>

</select>
  </div>
   
   <div class="form-group" style="padding: 15px;" >
    <label>
    Room No
    </label>
<input type="text" name="room" class="form-control" placeholder="Write Your Room No" style="color: black">
  </div>




 


    
    <div class="form-group" style="padding: 15px;">
         <label>
    Image
    </label>
        <input type="file" name="file"  >
    </div>

    
    <button type="submit">Submit</button>
</form>



      </div>
      </div>
      @include('admin.design')

    </div>
  </div>
    <!-- container-scroller -->
@include('admin.js')

</body>
</html>