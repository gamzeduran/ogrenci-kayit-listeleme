
 <?php

include("baglanti.php");

if(isset($_POST["submit"]))
{
    $fullname=$_POST["full_name"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];


    $ekle="INSERT INTO kullanicilar (fullname, email,gender) VALUES ('$fullname','$email','$gender')";

    $calistirekle = mysqli_query($baglanti, $ekle);

    if($calistirekle)
    {
        echo '<div class="alert alert-success" role="alert">
        The record has been successfully added.
      </div>';
    }
    else{
       echo '<div class="alert alert-danger" role="alert">
       There was a problem adding the record.
    </div>';
    }

    mysqli_close($baglanti);
}

?> 




 <!DOCTYPE html>
<html>
<head>
  <title>Student Registration Form</title>
</head>
<body>
  <h2>Student Registration Form</h2>
  <form>
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required><br><br>
    
    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label>Gender:</label><br>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label><br>
    
    <input type="radio" id="female" name="gender" value="female" required>
    <label for="female">Female</label><br><br>
    
    <input type="submit" value="Submit">
  </form>
</body>
</html>
