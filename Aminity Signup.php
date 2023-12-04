<?php
    session_start();

    include("db.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $phone = $_POST['phone'];

        if (!empty($email) && !empty($pass) && !empty($cpass) && !is_numeric($gmail)) {
            $con = mysqli_connect("localhost", "root", "root", "register");
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $query = "INSERT INTO quick (name, email, pass, cpass, phone) VALUES ('$name', '$email', '$pass', '$cpass', '$phone')";
        
            mysqli_query($con, $query);

            echo "<script type='text/javascript'>alert('Successfully Registered')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Please Enter some valid Information')</script>";
        }
    }
?>



<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,500,700&display=swap');
        .container{
    background-image: url("https://i.pinimg.com/originals/e3/8b/7c/e38b7ca307838fbb48d1d53fcdd437b8.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
        body{
    background-image: url("https://szechuanrestaurant.no/wp-content/uploads/2021/04/slide-1-1920x1080-1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .container {
      width: 500px;
      margin: 0 auto;
      background-color:beige;
      padding: 20px;
      border-radius: 10px;
    }

        h1 {
            text-align: center;
            color: #333;
            font-family: 'Roboto Slab', serif;
            font-size: 36px;
        }

        p {
            text-align: center;
            color: #160854ac;
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            text-decoration-style: wavy
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
        }

        input:focus {
            border-color: #66a3ff;
        }

        button {
            padding: 10px;
            background-color: #66a3ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;

        }

        button:hover {
            background-color: #4d8ae6;

        }

        a {
            color: #f4f5f6;
            

text-decoration:none;

font-family:'Roboto',sans-serif;

font-size :16px;

}

a:hover {

text-decoration :underline;

}

</style>

</head>

<body>

<br><br><br>

<div class="container">

<h1>Sign Up for Quick Serve</h1>

<p>Please fill in this form to create an account.</p>

<form  method="POST">

<div class="form-group">

<label>Name</label>

<input type="text" id="name" name="name" placeholder="Enter your name" required>

</div>

<div class="form-group">

<label for="email">Email</label>

<input type="email" id="email" name="email" placeholder="Enter your email" required>

</div>

<div class="form-group">

<label for="password">Password</label>

<input type="password" id="pass" name="pass" placeholder="Enter your password" required>

</div>

<div class="form-group">

<label for="confirm-password">Confirm Password</label>

<input type="password" id="cpass" name="cpass" placeholder="Confirm your password" required>

</div>

<div class="form-group">

<label for="phone">Phone Number</label>

<input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

</div>

<div class="form-group">

<table><th><input type="checkbox" id="terms" name="terms" required></th>

<td><label for="terms">I agree to the Terms and Conditions</label></td></table>

</div>

<button type="submit" id="submit-btn"><a href="home page.html">Sign Up</a></button>

</form>

<p>Already have an account? <a href="login page.php" style="color: rgb(232, 0, 0);">Log In</a></p>


</div>

</body>

</html>
