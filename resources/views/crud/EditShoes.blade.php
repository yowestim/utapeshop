<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Sepatu</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
    <form action="/shoes/update/{{ $data->idShoes }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        Shoes : <input type="text" name="shoes" value="{{ $data->shoes }}"><br>
        Price       : <input type="text" name="price" value="{{ $data->price }}"><br>
        Stock        : <input type="text" name="stock" value="{{ $data->stock }}"><br>
        Category    : <select name="idCategory">
                            @foreach ($category as $item)
                                <option value="{{ $item->idCategory }}"
                                    @if ($data->idCategory == $item->idCategory)
                                        {{ "selected" }}
                                    @endif
                                    >{{ $item->category }}
                                </option>
                            @endforeach
                      </select>
        Brand       : <select name="idBrand">
                        @foreach ($brand as $item)
                            <option value="{{ $item->idBrand }}"
                                @if ($data->idaBrand == $item->idBrand)
                                    {{ "selected" }}
                                @endif
                                >{{ $item->brand }}</option>
                        @endforeach
                      </select><br>
        Image       : <div class="input-group control-group increment" >
                            <input type="file" accept=".gif,.jpg,.jpeg,.png" name="filename[]" value="{{public_path().'/images/'.$image[0]->fileName}}">
                            <button type="button" id="add">Add</button>
                            </div>
                        </div>
                        <div class="clone" id="#group" style="visibility: hidden">
                            <div class="control-group" style="margin-top:10px">
                            <input type="file" accept=".gif,.jpg,.jpeg,.png" name="filename[]" >
                            <button type="button" id="remove"> Remove</button>
                            </div>
                        </div>
                      <input type="submit" value="Submit">
    </form>
</body>
</html>
<script type="text/javascript">

    $(document).ready(function() {

        $("#add").click(function(){
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("body").on("click","#remove",function(){
            $(this).parents(".control-group").remove();
        });

    });

</script>
