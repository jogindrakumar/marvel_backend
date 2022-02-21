 @extends('admin.admin_master')
@section('main_content')

 {{-- Add About form here  --}}

            	<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add About</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Name<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="name" class="form-control"  value=""  > 
		@error('name')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	
	 <div class="form-group">
        <h5>position First<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="post_one" class="form-control"  value=""  > 
		@error('post_one')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
	<div class="form-group">
        <h5>Position second<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="post_two" class="form-control"  value=""  > 
		@error('post_two')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>
    <div class="form-group">
        <h5>Description<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="desp"  class="form-control"  value=""  > 
	@error('desp')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	
	<div class="form-group">
        <h5>Profile pic<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="img"  class="form-control"  value=""  > 
	@error('img')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	<div class="form-group">
        <h5>CV<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="cv"  class="form-control"  value=""  > 
	@error('img')
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