 <div class="col-lg-6 col-12">
                  <h2 class="mb-4">Experiences</h2>

                    <div class="timeline">
                        @foreach ($experiences as $experience )
                            
                       
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>{{$experience->date}}</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>{{$experience->post_name}}</span><small>{{$experience->company_name}}</small></h3>
                                  <p>P{{$experience->desp}}</p>
                             </div>
                        </div>

                        @endforeach

                       

                    </div>
                </div>