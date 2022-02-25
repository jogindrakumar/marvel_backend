   <div class="col-lg-6 col-12">
                  <h2 class="mb-4 mobile-mt-2">Educations</h2>

                    <div class="timeline">
                        @foreach ($educations as $education )
                            
                      
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>{{$education->date}}</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>{{$education->from}}</span><small>{{$education->degree_name}}</small></h3>
                                  <p>{{$education->desp}}</p>
                             </div>
                        </div>
                  @endforeach
                        
                        
                       

                    </div>
                </div>