<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 12 B PHP Lab</title>
</head>
<body>
    <form method="post">
        <h1>Enter the two numbers</h1>
        Number 1 : <input type="number" name="num1"> <br>
        Number 2 : <input type="number" name="num2"> <br>
        <input type="submit" name="submit" value="Enter"><br><br>
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $sum=$num1+$num2;
        }
    ?>
    <input value="<?php echo $sum; ?>"
</body>
</html>