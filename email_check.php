<?php
$message = "";
$color = "";
if (isset($_POST['check'])) {
    $email = $_POST['email'];
    // Regular expression for email validation
    $pattern = "/^([a-zA-Z0-9._]+)@([a-zA-Z]+)\.([a-zA-Z]{2,3})(\.[a-zA-Z]{2})?$/";
    if (preg_match($pattern, $email)) {
        $message = "Valid Email";
        $color = "green";
    } else {
        $message = "Invalid Email";
        $color = "red";    }} ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Email Validation</title>
    <style>
        body{font-family: Arial;
            margin:50px;}
        input{width:250px;padding:8px; }
        button{padding:8px 15px;
        }
    </style>
</head>
<body>
<h2>Email Validation Using PHP</h2>
<form method="POST" action="">
    <input type="text"name="email"placeholder="Enter Email"
        value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
    <br><br>
    <button type="submit" name="check">
        Check Email
    </button>
</form>
<br>
<?php
if($message!=""){
    echo "<h3 style='color:$color;'>$message</h3>";}
?>
</body>
</html>