
    (@include('MasterLayout.header'))
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets2/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets2/css/style.css">
</head>
<style type="text/css">
    
    #error{
        display: none;
    }
</style>
<body>
    <div class="main">
  <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="{{ route('register') }}"  name="myform" onsubmit=" validation()">
                        @csrf

                        <div class="form-group ">
                            <label for="name" ><i class="zmdi zmdi-account material-icons-name "></i>   </label>

                          
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required="" autocomplete="name" autofocus placeholder="Your Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>
                        <div id="error"></div>

                        <div class="form-group row">
                            <label for="email" ><i class="zmdi zmdi-email"></i>  </label>

                         
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group row">
                            <label for="password" ><i class="zmdi zmdi-lock"></i></label>

                          
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" ><i class="zmdi zmdi-lock-outline"></i>  </label>

                           
                                <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                         
                        </div>
                        <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                <div class="form-group " required="">
                         
                                <div class="form-check" required="">
                                  <select name="lawyer" id="departement" class="custom-select" required="">
                                  <option >--Select Lawyer--</option>
             
                                  <option value="0" selected>As a User</option>
                               
                                   <option value="2" selected>As a Lawyer</option>
            
         
                                    </select>

                                    
                                </div>
                 </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
           </div>
                    <div class="signup-image">
                        <figure><img src="assets2/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets2/js/main.js"></script>
         <script>
    var name12=document.forms['myform']['name'];
    var errors=document.getElementByid('error');

     function validation()
     {

      
     if(name.value.length>8)
      {
        errors.innerHTML="Username Must Be Filled..!!!";
        errors.style.display="block"
            return false;
        }
                    return true;
 
     }


  </script>   
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
 
                   
                          
                          
                           

 (@include('user.css'))
  (@include('user.js'))


