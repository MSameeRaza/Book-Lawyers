<!DOCTYPE html>
<html lang="en">
<head>


  <meta name="copyright" content="MACode ID, https://macodeid.com/">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="table/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="table/css/util.css">
  <link rel="stylesheet" type="text/css" href="table/css/main.css">


</head>


  <!-- Back to top button -->
  <div class="back-to-top"></div>
 (@include('MasterLayout.header'))

<body>



  
 <div class="limiter" style="margin-top: 100px;">
    

        
        <div class="table100 ver3 m-b-110">
         
            <table >
              <thead >
          
              <tr>
                <th >Name</th>
                <th >Email ID</th>
                <th>Phone</th>
                <th >Lawyer</th>
                <th >Message</th>
                <th >Status</th>
                  <th >Cancel Appointment</th>
        </tr>
              </thead>
        
        

        
        
               @foreach($file as $appointments)
            <tbody>
              
                <tr>
                  <td >{{$appointments -> name}}</td>
                  <td >{{$appointments -> email}}</td>
                  <td >{{$appointments -> phone}}</td>
                  <td >${{$appointments -> doctor}}</td>
                  <td >{{$appointments -> message}}</td>
                  <td >{{$appointments -> status}}</td>
                     <td>
                     <a  href="{{url('cancel_appoint',$appointments->id)}}" style="background-color: red" class="btn btn-danger" onclick="return confirm('Are you sure to delete this Appointment')">Cancel</a>
                     </a>
                    </td>
                </tr>
            </tbody>
                      @endforeach
            </table>
          </div>
        </div>

        
      

      
        
  
    </div>
  </div>



  



   (@include('MasterLayout.footer'))
 (@include('user.css'))
  (@include('user.js'))
  
</body>
</html>
