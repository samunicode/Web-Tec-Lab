<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET Form DisplayPage</title>
    <style>
        h1 {
            display: flex;
            justify-content: center;
        }
        table {
            margin: 0 auto;
            border: 2px solid;
            border-radius: 5px;
        }
        td {
            padding: 10px;
            border: 2px solid;
            border-radius: 5px;
        }
        input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>MUJ Display Entries</h1>
    <?php
        if(isset($_GET['submit']))
        {
            echo "<table>
                <tr>
                    <td>User ID:</td>
                    <td>".$_GET['username']."</td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>".$_GET['password']."</td>
                </tr>
            </table>";
        }
    ?>
</body>
</html>
