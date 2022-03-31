<?php
    $sql = mysqli_connect("localhost", "root", "", "responsive_form");

    if (!$sql) {
        echo "Nu s-a conectat la baza de date!";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['first'];
        $last_name = $_POST['last'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $string = "INSERT INTO users (name, email, password) VALUES ('$first_name $last_name', '$email', '$password')";
        mysqli_query($sql, $string);
        header('location: form.php');
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive form by Cyber Warriours</title>

    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">

</head>

<body>
<div class="container">
    <h2>Registration Form</h2>
    <div class="container" id="containter1">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <div class="input-name">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="First Name" name="first" class="name" required>

                <span>
                <i class="fa fa-user"></i>
                <input type="text" placeholder="Last Name" name="last" class="name" required>
                </span>
            </div>

    <div class="input-name">
        <i class="fa fa-envelope email"></i>
        <input type="email" placeholder="Email" name="email" class="text-name" required>
    </div>

    <div class="input-name">
        <i class="fa fa-lock lock"></i>
        <input type="password" placeholder="Password" name="password" class="text-name" required>
    </div>

    <div class="input-name">
    <i class="fa fa-lock lock"></i>
    <input type="password" placeholder="Confirm Password" class="text-name" required>
</div>

     <div class="input-name">
          <input type="submit" class="button" value="Register">
</div>

    </form>
</div>
</div>

</body>

</html>