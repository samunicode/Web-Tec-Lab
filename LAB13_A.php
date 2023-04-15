<!DOCTYPE html>
<html lang="en">
<head>
    <title>LAB 13 A PHP SUM OF DIGIT</title>
</head>
<body>
    <form method="post">
        <h1>Enter the number of your choice: </h1>
        <input type="number" name="num">
        <input type="submit" name="submit" value="Enter">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $num=$_POST['num'];
            $copy=$num;
            $sum=0;
            while($num!=0)
            {
                $sum=$sum+($num%10);
                $num=$num/10;
            }
            echo "The sum of digits of ".$copy." is ".$sum;
        }
    ?>
</body>
</html>