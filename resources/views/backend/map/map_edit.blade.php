@extends('admin.admin_master')
@section('main_content')


  <div class="col-4">
	 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Education</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('map.update',$maps->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Maps Links<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="map_link" class="form-control"  value="{{$maps->map_link}}"  > 
		@error('map_link')
		<span class="text-danger">{{$message}}</span>
		@enderror
		</div>
    </div>    
   
    <div class="text-xs-right">
        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
       
    </div>
</form>
			</div>
			</div>
			
		  </div>

            </div>
@endsection