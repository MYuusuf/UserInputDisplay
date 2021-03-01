

<?php
    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $mail = $_POST['email'];
        echo "$fname $lname, $mail";
        }


?>

<form method="POST" action="main.php">
    <p>First Name</p>
    <input type="text" name="firstname" placeholder="Enter your first name"/>
    <p>Last Name</p>
    <input type="text" name="lastname" placeholder="Enter your last name"/>
    <p>Email Address</p>
    <input type="email" name="email" placeholder="abc@example.com"/>
    </br>
    <button type="submit"><a href="main.php" style="text-decoration:none; color: black;">Subscribe</a></button>
</form>

