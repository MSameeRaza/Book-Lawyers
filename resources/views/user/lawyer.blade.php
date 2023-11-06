  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Lawyers</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($data as $lawyers)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="lawyerimage/{{$lawyers->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$lawyers->name}}</p>
              <span class="text-sm text-grey">{{$lawyers->speciality}}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>