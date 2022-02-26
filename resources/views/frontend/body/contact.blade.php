 <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">

            @foreach ($maps as $map )
     
              <iframe src="{{$map->map_link}}" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
               @endforeach
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Say hello</h3>
                  <p class="footer-text mb-0">010 020 0960</p>
                  <p><a href="mailto:hello@company.co">hello@company.co</a></p>
                </div>

                <ul class="social-links">
                  @foreach ($socialmedias as $socialmedia )
                    
   
                     <li><a href="{{$socialmedia->link}}" class="{{$socialmedia->icon}}" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                                  @endforeach
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Interested to work together? Let's talk</h2>

              <form action="{{route('message.store')}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name" required>
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
                  </div>

                  <div class="col-12">
                    <textarea name="msg" rows="6" class="form-control"  placeholder="Message" required></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Send Button">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>