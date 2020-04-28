<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body ><center> 
    <h1>Register Here</h1>
    <hr>
<br><br><section id="margin">
<div class="col-md-5 "  >

<form action="registerdatabase.php" method="post">
       <div class="row">  
		     <div class="col-md-3">
					<select class="form-control"  name="subtitle">
						<option value="Mr.">Male</option>
						<option value="Miss.">Female</option>
					</select>
				</div>
					<div class="col-md-5"><input type="text"  class="form-control" placeholder="First Name..." required=" " name="firstname"></div>
					
					<div class="col-md-4"><input type="text"  class="form-control" placeholder="Last Name..." required=" "  name="lastname"></div>
		</div>
		 
			 <div class="col-md-6">
		       <div class="form-group">
					<input type="text"  class="form-control" style="margin-top:10px;" placeholder="City ..." required=" "  name="city">
					</div>
			 </div>
				<h6 >Login information</h6>
				
					<input type="email"  class="form-control" placeholder="Email Address" name="email" id="id_username">
				<br><div class="row">
				<p class="helptext"></p>
				<p class="helptext2"></p>
					<div class="col-md-6"><input type="password" placeholder="Password"  class="form-control" onkeyup="checkPass()" id="pass" name="pass"  required=" "></div>
					<div class="col-md-6"><input type="password" placeholder="Password Confirmation"  class="form-control" onkeyup="checkPass()" id="cpass" name="cpass"  required=" "></div>
					</div>	
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox" required><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
					<div class="form-group">
					<input type="submit" value="Register" class="btn btn-outline-primary">
</div>
<h6>OR</h6>
    <div class="form-group">
    <a href="log-in.php"> <input type="button" value="LOGIN" class="btn btn-outline-primary"></a>
    </div>
				</form>
				<script>
	function checkPass(){
		let p = $('#pass').val();
		let cp = $('#cpass').val();
		if(p==cp){
			$('#pass').css('border','1px solid green');
			$('#cpass').css('border','1px solid green');
	
			$('.helptext2').html(' ');
		}else{
			$('.helptext2').html('Password Does Not Match');
			$('#pass').css('border','1px solid red');
			$('#cpass').css('border','1px solid red');

		}
	}

	</script>
</section>
</center>
</body>
</html>