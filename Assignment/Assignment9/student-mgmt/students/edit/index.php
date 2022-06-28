<?php
require_once "../../utils/db.php";
if (!isset($_GET['id'])) {
    header("location:../?error=invalid id");
}
$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";



$result = $conn->query($sql);

if ($result->num_rows < 1) {
    header("location:../");
}

$student = $result->fetch_assoc();
$checked_arr = explode(",", $student['hobbies']);


?>
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
    <form method="POST" action="../action/update.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <div class="form-group">
            <label for="name">Name</label><br />
            <input type="text" id="name" placeholder="Bishal Shrestha" name="name" value="<?= $student['name'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label><br />
            <input type="email" id="email" placeholder="bishalshrestha133@gmail.com" name="email" value="<?= $student['email'] ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label><br />
            <input type="password" id="password" placeholder="********" name="password">
        </div>
        <div class="form-group">
            <label for="dob">D.O.B.</label><br />
            <input type="date" id="dob" name="dob" value="<?= $student['dob'] ?>">
        </div>
        <div class="form-group">
            <label for="favorite-color">Favorite Color</label><br />
            <input type="color" id="favorite-color" name="color" value="<?= $student['favourite_color'] ?>">
        </div>
        <div class="form-group">
            <label for="weight">Weight (kg)</label><br />
            <input type="number" id="weight" name="weight" value="<?= $student['weight'] ?>">
        </div>
        <div class="form-group">
            <label>Gender</label><br />
            <div>
                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="male" <?php if ($student['gender'] == "male") echo "checked" ?>>
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="female" <?php if ($student['gender'] == "female")  echo "checked" ?>>
                <label for="other">Other</label>
                <input type="radio" id="other" name="gender" value="other" <?php if ($student['gender'] == "other") echo "checked" ?>>
            </div>
        </div>

        <div class="form-group">
            <label>Hobbies</label>
            <input type="checkbox" id="traveling" name="hobbies[]" value="travelling" <?php if (in_array("travelling", $checked_arr)) echo "checked" ?> />
            <label for="traveling">Traveling</label>
            <input type="checkbox" id="dancing" value="dancing" name="hobbies[]" <?php if (in_array("dancing", $checked_arr)) echo "checked" ?> />
            <label for="dancing">Dancing</label>
            <input type="checkbox" id="singing" value="singing" name="hobbies[]" <?php if (in_array("singing", $checked_arr)) echo "checked" ?> />
            <label for="singing">Singing</label>
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label><br />
            <select id="nationality" name="nationality">
                <option value="NP" <?php if ($student['nationality'] == "NP") echo "selected" ?>>Nepal</option>
                <option value="IN" <?php if ($student['nationality'] == "IN") echo "selected" ?>>India</option>
                <option value="CH" <?php if ($student['nationality'] == "CH") echo "selected" ?>>China</option>
                <option value="UK" <?php if ($student['nationality'] == "UK") echo "selected" ?>>United Kingdom</option>
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