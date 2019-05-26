@extends('frontView.master')

@section('title_area')
    Insert | 
@endsection

@section('mainContent')
    <form action="/shoes/store" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="shoes" class="form-control" placeholder="Shoes"><br>
        <input type="text" name="price" class="form-control" placeholder="Price"><br>
        <input type="text" name="stock" class="form-control" placeholder="Stock"><br>
        Category    : <select name="idCategory" class="form-control">
                            @foreach ($category as $item)
                                <option value="{{ $item->idCategory }}">{{ $item->category }}</option>
                            @endforeach
                      </select>
        Brand       : <select name="idBrand" class="form-control">
                        @foreach ($brand as $item)
                            <option value="{{ $item->idBrand }}">{{ $item->brand }}</option>
                        @endforeach
                      </select><br>
        Image       : <div class="input-group control-group increment" >
                            <input type="file" accept=".gif,.jpg,.jpeg,.png" name="filename[]" >
                            <button type="button" id="add" class="btn btn-primary" onclick="addV()">Add</button>
                            </div>
                        </div>
                        <div class="clone" id="#group" style="visibility: hidden">
                            <div class="control-group" style="margin-top:10px">
                            <input type="file" accept=".gif,.jpg,.jpeg,.png" name="filename[]" class="form-control">
                            <button type="button" id="remove" class="btn btn-primary" onclick="removeV()">Remove</button>
                            </div>
                        </div>
                      <input type="submit" value="ADD" class="form-control btn btn-success">
    </form>
    @endsection

<script type="text/javascript">
 console.log('rtyu');
 function addV(){
    var html = $(".clone").html();
    $(".increment").after(html);
    console.log('sas');
 }
 function removeV(){
    $("body").on("click","#remove",function(){
        $(this).parents(".control-group").remove();
    });
 }

</script>

    
