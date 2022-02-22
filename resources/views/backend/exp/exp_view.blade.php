@extends('admin.admin_master')
@section('main_content')


	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Experience</h3>
                  <br>
                  <br>
                   <a href="{{route('add.exp')}}" class="btn btn-success" title="Add exp"><i class="fa fa-plus"></i></a>
				</div>
                <div>
                   
                </div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								
								<th>Post Name</th>
								<th>Company</th>
								<th>Year</th>
								<th>Description</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                           
                                
 @foreach ($exps as $exp)                         
<tr>
	
	<td>{{$exp->post_name}}</td>
	<td>{{$exp->company_name}}</td>	
	<td>{{$exp->date}}</td>	
	<td>{{$exp->desp}}</td>	
<td width="20%">
<a href="{{route('exp.edit',$exp->id)}}" class="btn btn-warning btn-sm" title="Edit Data"><i class="fa fa-edit"></i></a>
<a href="{{route('exp.delete',$exp->id)}}" class="btn btn-danger btn-sm" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
</td>
      @endforeach      
        </tr>
         
							
						</tbody>
					
					  </table>
					</div>
				</div>
				
			  </div>
			        
			</div>



           
  

@endsection