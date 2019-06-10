@extends('frontView.master')

@section('title_area')
Category |
@endsection

@section('mainContent')
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
						<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addCategoryModal">Add Category</button>
						<table id="example">
							<thead>
									<tr class="table100-head">
										<th class="column1">No</th>
										<th class="column2">Category</th>
										<th class="column3">Action</th>
									</tr>
								</thead>
								<tbody>
									<input type="hidden" value="{{$i = 1}}">
									@foreach ($category as $item)
									<tr>
									<input type="hidden" value="{{$item->idCategory}}">
									<td>{{$i++}}</td>
									<td>{{$item->category}}</td>
									<td>

											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#editCategoryModal" onclick="setId({{ $item->idCategory }},'{{ $item->category }}')">Edit</button>
											<button type="button" class="btn btn-danger"><a href="{{url('category/delete',$item->idCategory)}}" style="color:#fff">Delete</a></button>
									</td>
									</tr>
									@endforeach
								</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="defaultModalLabel">Add Category</h4>
					</div>
					<div class="modal-body" style="background:gray">
						<form method="POST" action="{{ url('category/store') }}" enctype="multipart/form-data" id="form">
							@csrf
							<input type="hidden" class="form-control" readonly id="idCategory" name="idCategory">
							<div class="row" style="margin-bottom:20px">
								<div class="col-md-12">
									<input type="text" placeholder="Category Name" class="form-control" required name="category" id="category">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<input type="submit" class="btn btn-success" id="btnSubmit" value="Add">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</div>
			</div>
	</div>
	<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">Edit Category</h4>
				</div>
				<div class="modal-body" style="background:gray">

					<form method="POST" action="{{ url('category/update') }}" enctype="multipart/form-data" id="form">
						@csrf
						<input type="hidden" class="form-control" value="" readonly id="idCategoryUpdate" name="idCategory">
						<div class="row" style="margin-bottom:20px">
							<div class="col-md-12">
								<input type="text" placeholder="Category Name" class="form-control"  name="category" id="categoryUpdate">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" class="btn btn-success" id="btnSubmit" value="Update">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			</div>
		</div>
	</div>
	@push('js')
		<script>
			function setId(id,category) {
				$('#idCategoryUpdate').val(id)
				$('#categoryUpdate').val(category)
			}
		</script>
	@endpush
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> rizki
