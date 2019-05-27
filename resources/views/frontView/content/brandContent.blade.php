@extends('frontView.master')

@section('title_area')
Brand |
@endsection

@section('mainContent')
	<center><h1>BRAND</h1></center>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addBrandModal">Add Brand</button>
					<div class="table100">
					<table id="example">
						<thead>
							<tr class="table100-head">
								<th class="column1">No</th>
								<th class="column2">Brand</th>
								<th class="column3">Action</th>
							</tr>
						</thead>
						<tbody>
							<input type="hidden" value="{{$i = 1}}">
							@foreach ($brand as $item)
							<tr>
							<input type="hidden" value="{{$item->idBrand}}">
							<td>{{$i++}}</td>
							<td>{{$item->brand}}</td>
							<td>
							  
							  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editBrandModal" onclick="setId({{ $item->idBrand }},'{{ $item->brand }}')">Edit</button>
							  <button type="button" class="btn btn-danger"><a href="{{url('brand/delete',$item->idBrand)}}" style="color:#fff">Delete</a></button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="modal fade" id="addBrandModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Add Brand</h4>
                </div>
                <div class="modal-body" style="background:gray">
                    <form method="POST" action="{{ url('brand/store') }}" enctype="multipart/form-data" id="form">
                        @csrf
                        <input type="hidden" class="form-control" readonly id="idBrand" name="idBrand">
                        <div class="row" style="margin-bottom:20px">
                            <div class="col-md-12">
                                <input type="text" placeholder="Brand Name" class="form-control" required name="brand" id="brand">
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
<div class="modal fade" id="editBrandModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Edit Brand</h4>
			</div>
			<div class="modal-body" style="background:gray">	
			
				<form method="POST" action="{{ url('brand/update') }}" enctype="multipart/form-data" id="form">
					@csrf
					<input type="hidden" class="form-control" value="" readonly id="idBrandUpdate" name="idBrand">
					<div class="row" style="margin-bottom:20px">
						<div class="col-md-12">
							<input type="text" placeholder="Brand Name" class="form-control"  name="brand" id="brandUpdate">
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
		function setId(id,brand) {
			$('#idBrandUpdate').val(id)
			$('#brandUpdate').val(brand)
		}
	</script>
@endpush
@endsection