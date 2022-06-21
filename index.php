
<?php 
if (isset($_GET["msg"])){
    if ($_GET["msg"] == '01'){
        echo "<script>alert('Password and Confirm Password do not match, please try again')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Registration Form</h1>
        </header>
        <div class="form">
            <form id="particularsform" action="acknowledge.php" method="post"
                enctype="multipart/form-data">
                <p class="particulars">
                    <label for="name">Name</label>
                </p>
                <input type="text" id="name" name="fullname"
                    placeholder="First name, last name" required autofocus>
                <p class="particulars">
                    <label for="email">Email</label>
                </p>
                <input type="email" id="email" name="email"
                    placeholder="someone@gmail.com" required>
                <p class="particulars">
                    <label for="password">Create a password</label>
                </p>
                <input type="password" id="password" name="password" required
                    pattern="[\w]{8,}">
                <p class="particulars">
                    <label for="confirmpassword">Confirm your password</label>
                </p>
                <input type="password" id="confirmpassword" name="confirmpassword"
                    required>
                <fieldset>
                    <legend>Gender</legend>
                    <label for="male">Male</label> 
                      <input type="radio" id="male" name="gender" value="Male" checked> 
                  <label for="female">Female</label>
                        <input type="radio" id="female" name="gender" value="Female">
                </fieldset>
                <p class="particulars">
                    <label for="dateofbirth">Date of Birth</label>
                </p>
                <input type="date" id="dateofbirth" name="dateofbirth">
                <p class="particulars">
                    <label for="hobbies">Hobbies</label>
                </p>
                    <input type="checkbox" id="hobbies" name="hobbies[]" value="Coding">Coding<br>
                    <input type="checkbox" id="hobbies" name="hobbies[]" value="Reading">Reading<br>
                    <input type="checkbox" id="hobbies" name="hobbies[]" value="Swimming">Swimming<br>
                    <input type="checkbox" id="hobbies" name="hobbies[]" value="Jogging">Jogging<br> 
                    <input type="checkbox" id="hobbies" name="hobbies[]" value="Eating">Eating<br> 
                    <input type="checkbox" id="hobbies" name="hobbies[]" value="Others">Others<br>
                <p class="particulars">
                    <label for="favoritecolor">Favorite Color</label>
                </p>
                <input type="color" id="favoritecolor" name="favoritecolor">
                <p class="particulars">
                    <label for="zodiac">Zodiac</label>
                </p>
                <input list="zodiac" name="zodiac">
                <datalist id="zodiac">
                    <option value="Aries"></option>
                    <option value="Taurus"></option>
                    <option value="Gemini"></option>
                    <option value="Cancer"></option>
                    <option value="Leo"></option>
                    <option value="Virgo"></option>
                    <option value="Libra"></option>
                    <option value="Scorpio"></option>
                    <option value="Sagittarius"></option>
                    <option value="Capricorn"></option>
                    <option value="Aquarius"></option>
                    <option value="Pisces"></option>
                </datalist>
                <p class="particulars">
                    <label for="portrait">Portrait</label>
                </p>
                <input type="file" id="portrait" name="portrait"><img src="images/chekube.jpeg" alt=""/> 
              <input type="submit" class="bottom" name="submit" id="submit" value="Sign up">
            </form>
        </div>
    </div>
</body>
</html>
