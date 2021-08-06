<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <header>
        <nav>
            <div class="topnav">
                <a class="active" href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
            </div>
        </nav>
    </header>


    <div class="contentarea">
        <main>
            <h2>About Me</h2>
            <div>
                <table style="width:100%">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Occupation</th>
                    <th>Photo</th>
                </tr>
                <tr>
                    <td><?php echo "Rafsan"; ?></td>
                    <td><?php echo "Jani"; ?></td>
                    <td>Freelancer</td>
                    <td>
                        <div class="img_float"> <img class="borderimg" src="img/Rafsan.jpg" alt="Rafsan_Photo" ></div>
                    </td>
                </tr>

                </table>
            </div>
        </main>
    <footer>     
        <div class="footer">
            <h2><?php echo "www.RafsanJane.com"; ?></h2>
            © 2010-<?php echo date("Y");?>
        </div>
    </footer>

    <?php
    $b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
    $results = print_r($b, true); // $results now contains output from print_r
    ?>

</div>
</body>
</html>