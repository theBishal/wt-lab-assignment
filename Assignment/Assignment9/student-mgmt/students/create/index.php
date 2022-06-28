<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<style type="text/css">
		* {
			font-size: 18px;
		}

		form {
			position: absolute;
			padding: 50px;
			left: 40%
		}

		.form-group {
			margin-top: 15px;
		}

		input {
			padding: 10px 15px;
		}

		label {
			font-size: 20 px;
		}
	</style>
</head>

<body>
	<form method="POST" action="../action/save.php" enctype="multipart/form-data">
		<div class="form-group">
			<label for="name">Name</label><br />
			<input type="text" id="name" placeholder="Bishal Shrestha" name="name">
		</div>
		<div class="form-group">
			<label for="email">Email</label><br />
			<input type="email" id="email" placeholder="bishalshrestha133@gmail.com" name="email">
		</div>
		<div class="form-group">
			<label for="password">Password</label><br />
			<input type="password" id="password" placeholder="********" name="password">
		</div>
		<div class="form-group">
			<label for="dob">D.O.B.</label><br />
			<input type="date" id="dob" name="dob">
		</div>
		<div class="form-group">
			<label for="favorite-color">Favorite Color</label><br />
			<input type="color" id="favorite-color" name="color">
		</div>
		<div class="form-group">
			<label for="weight">Weight (kg)</label><br />
			<input type="number" id="weight" name="weight">
		</div>
		<div class="form-group">
			<label>Gender</label><br />
			<div>
				<label for="male">Male</label>
				<input type="radio" id="male" name="gender" value="male">
				<label for="female">Female</label>
				<input type="radio" id="female" name="gender" value="female">
				<label for="other">Other</label>
				<input type="radio" id="other" name="gender" value="other">
			</div>
		</div>

		<div class="form-group">
			<label>Hobbies</label>
			<input type="checkbox" id="traveling" name="hobbies[]" value="traveling" />
			<label for="traveling">Traveling</label>
			<input type="checkbox" id="dancing" value="dancing" name="hobbies[]" />
			<label for="dancing">Dancing</label>
			<input type="checkbox" id="singing" value="singing" name="hobbies[]" />
			<label for="singing">Singing</label>
		</div>

		<div class="form-group">
			<label for="nationality">Nationality</label><br />
			<select id="nationality" name="nationality">
				<option value="NP">Nepal</option>
				<option value="IN">India</option>
				<option value="CH">China</option>
				<option value="UK">United Kingdom</option>
			</select>
		</div>

		<div class="form-group">
			<label for="profile">Profile</label>
			<input type="file" id="profile" accept="image/png,image/jpeg" name="profile" />
		</div>
		<div class="form-group">
			<input type="submit" value="Create" />
			<input type="reset" value="Cancel" />
		</div>
	</form>
</body>

</html>