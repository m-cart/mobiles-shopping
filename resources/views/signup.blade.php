@extends("master")
@section("content")
<div class="w3layouts-main"> 
	<div class="bg-layer pb-5">
		<h1>Create New Account</h1>
		<div class="header-main col-lg-6 col-md-8 col-10">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="/signup" method="POST">
                    @csrf
                    <div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Full Name" required="" name="name"/>
                    </div>
                    <div class="icon1">
						<span class="fa fa-mobile-phone" style="font-size: 24px;"></span>
						<input type="text" placeholder="Mobile Number" required="" name="mobile_number"/>
					</div>
					<div class="icon1">
						<span class="fa fa-envelope"></span>
						<input type="email" placeholder="Email Address" required="" name="email"/>
					</div>
					
					<div class="icon1">
						<span class="fa fa-address-card"></span>
						<textarea name="address" class="form-control border-0" rows="4" placeholder="Enter Delivery Address Here..." required=""></textarea>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" required="" name="password"/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Remember Me</label>
					</div>
					<div class="bottom">
                    <button type="submit" class="btn btn-success">Signup</button>
					</div>
				</form>	
			</div>
			<div class="social">
				<ul>
					<li>or Signup using : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
			<p><kbd>Already have an account? <a href="/login"><b>Log In</b></a></kbd></p>
		</div>
	</div>
</div>
@endsection