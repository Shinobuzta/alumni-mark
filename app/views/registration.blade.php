
<!DOCTYPE html> 
<html>
	<head>
		<title>Sky Forms Pro</title>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
		
		<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/demo.css" />
		<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/sky-forms.css" />
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<!--[if lt IE 10]>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	
	<body class="bg-cyan">
		<div class="body body-s">		
			<form action="{{ URL::to('guest/create') }}" id="sky-form" 
				  class="sky-form" method="post" />
				<header>Registration form</header>
				<fieldset>
				@if($errors->has())
					<div class="alert alert-danger alert-dismissable">
                        <ul>
                            @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" name="studentid" 
								   placeholder="Student ID" />
							<b class="tooltip tooltip-bottom-right">
							Needed to enter the website</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" name="username" 
								   placeholder="Username" />							
						</label>
					</section>
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" name="address" 
								   placeholder="Address" />							
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" name="contact" 
								   placeholder="Contact Number" />							
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" name="course" 
								   placeholder="Course" />
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" name="batch" 
								   placeholder="Batch Year" />							
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" name="birthday" 
								   placeholder="Birthday" />							
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="email" name="email" 
								   placeholder="Email address" />
							<b class="tooltip tooltip-bottom-right">
							Needed to verify your account</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" name="password" 
								   placeholder="Password" id="password" />
							<b class="tooltip tooltip-bottom-right">
							Don't forget your password</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" name="passwordConfirm" 
								   placeholder="Confirm password" />
							<b class="tooltip tooltip-bottom-right">
							Confirm your password</b>
						</label>
					</section>
				</fieldset>
					
				<fieldset>
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<input type="text" name="firstname" 
									   placeholder="First name" />
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<input type="text" name="middlename" 
									   placeholder="Middle name" />
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<input type="text" name="lastname" 
								       placeholder="Last name" />
							</label>
						</section>
					</div>
					
					<section>
						<label class="select">
							<select name="gender">
								<option value="0" selected="" 
									    disabled="" />Gender
								<option value="1" />Male
								<option value="2" />Female
								<option value="3" />Other
							</select>
							<i></i>
						</label>
					</section>
					
					<section>
						<label class="checkbox"><input type="checkbox" 
							   name="subscription" id="subscription" />
							   <i></i>
							   I want to receive news and  special offers
					    </label>
						<label class="checkbox">
							<input type="checkbox" name="terms" id="terms" />
							<i></i>I agree with the Terms and Conditions
						</label>
					</section>
				</fieldset>
				<footer>
					<button type="submit" class="button">Submit</button>
				</footer>
			</form>			
		</div>
		{{ $alumnis }}
		<script type="text/javascript">
			$(function()
			{
				// Validation		
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						username:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						password:
						{
							required: true,
							minlength: 3,
							maxlength: 20
						},
						passwordConfirm:
						{
							required: true,
							minlength: 3,
							maxlength: 20,
							equalTo: '#password'
						},
						firstname:
						{
							required: true
						},
						lastname:
						{
							required: true
						},
						gender:
						{
							required: true
						},
						terms:
						{
							required: true
						}
					},
					
					// Messages for form validation
					messages:
					{
						login:
						{
							required: 'Please enter your login'
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						password:
						{
							required: 'Please enter your password'
						},
						passwordConfirm:
						{
							required: 'Please enter your password one more time',
							equalTo: 'Please enter the same password as above'
						},
						firstname:
						{
							required: 'Please select your first name'
						},
						lastname:
						{
							required: 'Please select your last name'
						},
						gender:
						{
							required: 'Please select your gender'
						},
						terms:
						{
							required: 'You must agree with Terms and Conditions'
						}
					},					
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});			
		</script>
	</body>
</html>