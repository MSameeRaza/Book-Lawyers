
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST" name="myform" onsubmit="return validation()">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name1" >
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address.." name="email1" required="">
          </div>
    
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" >
            <select name="lawyer" id="departement" class="custom-select" required="">
              <option>--Select Lawyer--</option >
              @foreach($data as $lawyers)
              <option value="{{$lawyers->name}}" >{{$lawyers->name}} --Speciality--{{$lawyers->speciality}} </option>
             
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number.." name="phone1" required="">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." name="message" required=""></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div>
  <script>
    var name12=document.forms['myform']['name1'];
     function validation(){
      if (name1.value=='') {

            alert("Username Must Be Filled..!!!");
            return false;

      }
      return true;
     }


  </script>