
<!DOCTYPE html>
<html lang="en">
<head>
	<title>se connecter </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="acceuil/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="acceuil/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="acceuil/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="acceuil/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="acceuil/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="acceuil/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="acceuil/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="acceuil/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="acceuil/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="acceuil/css/util.css">
	<link rel="stylesheet" type="text/css" href="acceuil/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
					<span class="login100-form-title p-b-43">
						Se connecter pour continuer
					</span>
					
					
					<div >
					<label for="">Email :</label>
						<input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  type="email" >
						
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						
					</div>
					
					
					<div>
					<label for="">Mot de passe :</label>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				
						<span class="label-input100">Mot de passe</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
					

						<div>
						@if (Route::has('password.request'))
							<a href="{{ route('password.request') }}" class="txt1">
								Mot de passe oublié?
							</a>
							@endif
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button   type="submit" class="login100-form-btn">
							Se connecter
						</button>
					</div>
					
					
				
				</form>

				<div class="login100-more"  style="background-image: url('acceuil/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="acceuil/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="acceuil/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="acceuil/vendor/bootstrap/js/popper.js"></script>
	<script src="acceuil/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="acceuil/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="acceuil/vendor/daterangepicker/moment.min.js"></script>
	<script src="acceuil/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="acceuil/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="acceuil/js/main.js"></script>

</body>
</html>