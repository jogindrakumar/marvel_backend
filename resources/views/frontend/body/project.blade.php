  <section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2>Things I have designed for digital media agencies</h2>
                      </div>

                      <div class="owl-carousel owl-theme">
                        @foreach ($portfolios as $portfolio )
                          
                    
                        <div class="item">
                          <div class="project-info">
                            <img src="{{asset($portfolio->project_img)}}" class="img-fluid" alt="project image">
                          </div>
                        </div>
                   @endforeach
                      </div>

                  </div>
                </div>
        </div>
    </section>