@extends('admin.admin_master')
@section('main_content')


	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  

			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Maps</h3>
                  <br>
                  <br>
                 
				</div>
                <div>
                   
                </div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								
								<th>Maps Link</th>
								<th>Action</th>
								
								
							</tr>
						</thead>
						<tbody>
                           
                                
 @foreach ($maps as $map)                         
<tr>
	
	<td>{{$map->map_link}}</td>

<td>
<a href="{{route('map.edit',$map->id)}}" class="btn btn-warning btn-sm" title="Edit Data"><i class="fa fa-edit"></i></a>
<a href="{{route('map.delete',$map->id)}}" class="btn btn-danger btn-sm" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
</td>
      @endforeach      
        </tr>
         
							
						</tbody>
					
					  </table>
					</div>
				</div>
				
			  </div>
			        
			</div>
            <div class="col-4">
	 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Maps link</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('map.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      
    
        <div class="form-group">
        <h5>Maps Links<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="map_link" class="form-control"  value=""  > 
		@error('map_link')
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

            </div>



           
  

@endsection