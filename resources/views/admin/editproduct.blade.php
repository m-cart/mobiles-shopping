@extends("admin.master")
@section("content")
<div class="container col-9 col-md-7 col-lg-7 center">
    <h3 class="py-4">Welcome Admin</h3>
    <form action="/update/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="name">Product Short Name (For Home Page):</label>
            <input type="text" class="form-control" placeholder="Enter Product Short Name(For Home Page)" name="product_name1" value="{{$product->product_name1}}" required/>
            @error("product_name1")
            <p style="color:red">{{$errors->first("product_name1")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Product Price (New):</label>
            <input type="text" class="form-control" placeholder="Enter Product Price (New):" name="product_new_price" value="{{$product->product_new_price}}" required/>
            @error("product_new_price")
            <p style="color:red">{{$errors->first("product_new_price")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Product Price (Old):</label>
            <input type="text" class="form-control" placeholder="Enter Product Price (Old):" name="product_old_price" value="{{$product->product_old_price}}" required/>
            @error("product_old_price")
            <p style="color:red">{{$errors->first("product_old_price")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Product Image 1:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="product_image1" value="{{$product->product_image1}}" required/>
                <label class="custom-file-label" for="customFile">{{$product->product_image1}}</label>
                @error("product_image1")
                <p style="color:red">{{$errors->first("product_image1")}}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="image">Product Image 2:</label>
            <div class="custom-file">
                Product Image 2:
                <input type="file" class="custom-file-input" id="customFile" name="product_image2" value="{{$product->product_image2}}" required/>
                <label class="custom-file-label" for="customFile">{{$product->product_image2}}</label>
                @error("product_image2")
                <p style="color:red">{{$errors->first("product_image2")}}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="name">Product Full Name (For View Page):</label>
            <input type="text" class="form-control" placeholder="Enter Product Full Name (For View Page)" name="product_name2" value="{{$product->product_name2}}" required/>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" placeholder="Enter Description" name="description" value="{{$product->description}}" required/>
        </div>
        <div class="form-group">
            <label for="highlights">Highlights 1:</label>
            <input type="text" class="form-control" placeholder="Enter highlights1" name="highlights1" value="{{$product->highlights1}}" required/>
        </div>
        <div class="form-group">
            <label for="highlights">Highlights 2:</label>
            <input type="text" class="form-control" placeholder="Enter highlights2" name="highlights2" value="{{$product->highlights2}}" required/>
        </div>
        <div class="form-group">
            <label for="highlights">Highlights 3:</label>
            <input type="text" class="form-control" placeholder="Enter highlights3" name="highlights3" value="{{$product->highlights3}}" required/>
        </div>
        <div class="form-group">
            <label for="highlights">Highlights 4:</label>
            <input type="text" class="form-control" placeholder="Enter highlights4" name="highlights4" value="{{$product->highlights4}}" required/>
        </div>
        <button type="submit" class="btn btn-success m-3">Update</button>
        <a class="btn btn-info m-3" href="/admin">Go back</a>
    </form>
</div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
@endsection