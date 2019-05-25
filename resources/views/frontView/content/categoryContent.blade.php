@extends('frontView.master')

@section('title_area')
Category |
@endsection

@section('mainContent')

<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<div class="table100">
				<button type="button" class="btn btn-warning"><a href="{{url('category/create')}}"
						style="color:#fff">Add Category</a></button>
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

								<button type="button" class="btn btn-success"><a
										href="{{url('category/edit',$item->idCategory)}}"
										style="color:#fff">Edit</a></button>
								<button type="button" class="btn btn-danger"><a
										href="{{url('category/delete',$item->idCategory)}}"
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
