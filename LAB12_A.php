<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 12 A PHP Lab</title>
</head>
<body>
    <?php
        echo "<h1>Below are the prime numbers between 1-50</h1>";
        $count = 0;
        for($i=1; $i<=50; $i++)
        {
            for($j=1; $j<=$i; $j++)
            {
                if($i%$j==0)
                {
                    $count++;
                }
            }
            if($count==2)
            {
                echo $i." is PRIME </br>";
            }
            $count=0;
        }
    ?>
</body>
</html>