@extends("master")
@section("content")
<div class="w3layouts-main"> 
	<div class="bg-layer pb-5">
		<h1>Login Now</h1>
		<div class="header-main col-lg-6 col-md-8 col-10">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="/login" method="POST">
                    @csrf
					<div class="icon1">
						<span class="fa fa-envelope"></span>
						<input type="email" placeholder="Email Address" name="email" required >
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" name="password" required>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
					</div>
					<div class="bottom">
                        <button type="submit" class="btn btn-success">Login</button>
					</div>
					<div class="links">
						<p><a href="#">Forgot Password?</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			<div class="social">
				<ul>
					<li>or login using : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
			<p><kbd>New to m-cart? <a href="/signup">Create an account</a></kbd></p>
		</div> 
	</div>
</div>
@endsection