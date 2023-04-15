<!DOCTYPE html>
<html lang="en">
<head>
    <title>LAB 13 B Palindrome</title>
</head>
<body>
    <form method="post">
        <h1>Enter the number of your choice :</h1>
        <input name="num" type="number">
        <input name="submit" style="margin-bottom: 20px;" type="submit" value="Enter">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $num=$_POST['num'];
            $copy=$num;
            $rev=0; $r=0;
            while($num!=0)
            {
                $r=$num%10;
                $rev=($rev*10)+$r;
                $num=(int)($num/10);
            }
            if($copy==$rev)
            {
                echo $copy." is PALINDROME";
            }
        }
    ?>
</body>
</html>