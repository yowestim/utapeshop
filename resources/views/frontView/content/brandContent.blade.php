@extends('frontView.master')

@section('title_area')
Brand |
@endsection

@section('mainContent')

<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<button type="button" class="btn btn-warning"><a href="{{url('category/create')}}" style="color:#fff">Add
					Category</a></button>
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

								<button type="button" class="btn btn-success"><a
										href="{{url('brand/edit',$item->idBrand)}}" style="color:#fff">Edit</a></button>
								<button type="button" class="btn btn-danger"><a
										href="{{url('brand/delete',$item->idBrand)}}"
										style="color:#fff">Delete</a></button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection