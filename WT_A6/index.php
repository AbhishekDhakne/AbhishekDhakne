<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <marquee behavior="ltr" direction="ltr"> Welcome to our Royal Fitness GYM..</marquee>
    <div class="box">
        <h1> GYM Registration</h1>
    <form action="insert.php" id="form" onsubmit="returnvalidateForm" method="POST">
        <input type="text" name="username" autocomplete="off" required placeholder="Full Name">
        <input type="password" name="pass" id="password" onkeydown="psvalidation()" required placeholder="Set Password">
        <input type="radio" name="gender" value="m" > <label>Male</label>
        <input type="radio" name="gender" value="f" > <label>Female</label>
        <input type="email" name="email" id="email" onkeydown="evalidation()" placeholder="Put your email id" required>
        <input type="tel" name="phoneno" id="phoneno" onkeydown="pvalidation()" autocomplete="off" placeholder="Enter your number">
        <input type="submit" name="Registration" value="Registration">
    </form>
    </div>
</body>
</html>