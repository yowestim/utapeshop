@extends('frontView.master')

@section('title_area')
     Shoes |
@endsection

@section('mainContent')
<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <button type="button" class="btn btn-warning"><a href="{{url('category/insert')}}" style="color:#fff">Add Shoes</a></button>
    <table id="example">
        <thead>
        <tr class="table100-head">
            <th class="column1">Id</th>
            <th class="column1">Shoes</th>
            <th class="column1">Brand</th>
            <th class="column1">Category</th>
            <th class="column2">Stock</th>
            <th class="column3">Price</th>
            <th class="column3">Image</th>
            <th class="column3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shoes as $item)
        <tr>
            <td>{{ $item->idShoes }}</td>
            <td>{{ $item->shoes }}</td>
            <td>{{ $item->brand }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->stock }}</td>
            <td>{{ $item->price }}</td>
            <td><img src="{{URL::asset('/images/').'/'.$item->fileName}}" style="height : 100px; width: auto;"></td>
            <td><a href="/shoes/edit/{{ $item->idShoes }}">Edit</a>
            <a href="/shoes/delete/{{ $item->idShoes }}">Hapus</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
</div>
@endsection
