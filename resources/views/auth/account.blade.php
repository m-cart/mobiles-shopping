@extends("master")
@section("content")
<div class="container col-8 col-md-6 col-lg-6 center mt-4">
    <h3 class="text-center text-info display-4 mb-5"><b>My Account</b></h3>
    <form class="form-horizontal" action="/account/{{ Auth::user()->id }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ Auth::user()->name }}" required>
            @error("name")
            <p style="color:red">{{$errors->first("name")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" class="form-control" placeholder="Enter mobile number" name="mobile_number" value="{{ Auth::user()->mobile }}" required>
            @error("mobile_number")
            <p style="color:red">{{$errors->first("mobile_number")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ Auth::user()->email }}" required>
            @error("email")
            <p style="color:red">{{$errors->first("email")}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" class="form-control" rows="4" placeholder="Enter Delivery Address Here..." required="">{{ Auth::user()->address }}</textarea>
            @error("address")
            <p style="color:red">{{$errors->first("address")}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mb-4">Update</button>
    </form>
</div>
@endsection