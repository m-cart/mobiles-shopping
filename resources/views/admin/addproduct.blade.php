@extends("admin.master")
@section("content")
<div class="container col-9 col-md-7 col-lg-7 center">
    <h3 class="py-4">Welcome Admin</h3>
    <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Short Name (For Home Page):</label>
            <input type="text" class="form-control" placeholder="Enter Product Short Name(For Home Page)" name="product_name1" value="{{ old('product_name1') }}" required/>
            @error("product_name1")
            <p style="color:red">{{$errors->first("product_name1")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Product Price (New):</label>
            <input type="text" class="form-control" placeholder="Enter Product Price (New):" name="product_new_price" value="{{ old('product_new_price') }}" required/>
            @error("product_new_price")
            <p style="color:red">{{$errors->first("product_new_price")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Product Price (Old):</label>
            <input type="text" class="form-control" placeholder="Enter Product Price (Old):" name="product_old_price" value="{{ old('product_old_price') }}" required/>
            @error("product_old_price")
            <p style="color:red">{{$errors->first("product_old_price")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Product Image 1:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="product_image1" value="{{ old('product_image1') }}" required/>
                <label class="custom-file-label" for="customFile">Upload Product Image 1</label>
                @error("product_image1")
                <p style="color:red">{{$errors->first("product_image1")}}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="image">Product Image 2:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="product_image2" value="{{ old('product_image2') }}" required/>
                <label class="custom-file-label" for="customFile">Upload Product Image 2</label>
                @error("product_image2")
                <p style="color:red">{{$errors->first("product_image2")}}</p>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="name">Product Full Name (For View Page):</label>
            <input type="text" class="form-control" placeholder="Enter Product Full Name (For View Page)" name="product_name2" value="{{ old('product_name2') }}" required/>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" placeholder="Enter Description" name="description" value="{{ old('description') }}" required/>
        </div>
        <div class="form-group">
            <label for="highlights">Highlights 1:</label>
            <input type="text" class="form-control" placeholder="Enter highlights1" name="highlights1" value="{{ old('highlights1') }}" required/>
        </div>
        <div class="form-group">
            <label for="highlights">Highlights 2:</label>
            <input type="text" class="form-control" placeholder="Enter highlights2" name="highlights2" value="{{ old('highlights2') }}" required/>
        </div>
        <div class="form-group">
            <label for="highlights">Highlights 3:</label>
            <input type="text" class="form-control" placeholder="Enter highlights3" name="highlights3" value="{{ old('highlights3') }}" required/>
        </div>
        <div class="form-group">
            <label for="highlights">Highlights 4:</label>
            <input type="text" class="form-control" placeholder="Enter highlights4" name="highlights4" value="{{ old('highlights4') }}" required/>
        </div>
        <button type="submit" class="btn btn-success m-3">Save</button>
        <a class="btn btn-info m-3" href="/admin">Go back</a>
    </form>
</div>

@endsection