<!DOCTYPE html>
<html lang="en">
<title>Admin Panel</title>

  <head>
    <!-- Required meta tags -->
      <meta name="copyright" content="MACode ID, https://macodeid.com/">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
   @include('admin.sidebar')

   
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
                        <h4 class="mb-1 mb-sm-0">Welcome To Admin Panel</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out for more!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">LearnMore</a>
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

          <div class="row ">
              
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Appointments Status</h4>
                    
                      <table class="table">
                        <thead>
                          <tr>
                           
                           <th >Customer Name</th>
                <th style="padding: 20px;">Email ID</th>
                <th style="padding: 20px;" >Phone</th>
                <th style="padding: 20px;">Lawyer Name</th>
                <th style="padding: 20px;" >Message</th>
                <th  style="padding: 20px;">Status</th>
                 <th style="padding: 20px;" >Approved</th>
                  <th style="padding: 20px;" >Cancel</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>       
                        
                             @foreach($file as $appointments)
                           <td style="padding: 20px;" >{{$appointments -> name}}</td>
                  <td  style="padding: 20px;">{{$appointments -> email}}</td>
                  <td style="padding: 20px;" >{{$appointments -> phone}}</td>
                  <td style="padding: 20px;">${{$appointments -> doctor}}</td>
                  <td style="padding: 20px;">{{$appointments -> message}}</td>
                  <td style="padding: 20px;" >{{$appointments -> status}}</td>
                  <td>
                     <a  href="{{url('approved',$appointments->id)}}"  class="badge badge-outline-success" >Approved</a>
                  
                    </td>
                        <td>      
                     <a  href="{{url('canceled',$appointments->id)}}"   class="badge badge-outline-danger" >Cancel</a>
                  
                    </td>
                        
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                    </div>
                  
                </div>
           
            </div>

</div>
@include('admin.design')


          </div>
        </div>
  


        <!-- partial -->
  
    <!-- container-scroller -->
@include('admin.js')
  </body>
</html> 