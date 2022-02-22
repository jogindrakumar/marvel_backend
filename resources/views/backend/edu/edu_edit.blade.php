 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Education</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('edu.update',$edus->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Degree Name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="degree_name"  class="form-control"  value="{{$edus->degree_name}}" required  > 
		@error('degree_name')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
     <div class="form-group">
        <h5>From<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="from" class="form-control"  value="{{$edus->from}}" required> 
		@error('from')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
    <div class="form-group">
        <h5>Year<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="date" class="form-control"  value="{{$edus->date}}"  required > 
		@error('from')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 <div class="form-group">
        <h5>Description<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="desp" class="form-control"  value="{{$edus->desp}}" required  > 
		@error('desp')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	 
	
   

             
   
    <div class="text-xs-right">
        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
       
    </div>
</form>
			</div>
			</div>
			
		  </div>
		  
		</section>
		
	  
	  </div>
      @endsection
