<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
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

  <?php

$Errname =  $Erremail = $Errgender = $Errcountry = "";
        
$name =  $email = $website = $about = $gender = $country = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        $Errname = "<p style='color:red'>Name is required</p>";
    } else{
            $name = validate($_POST["name"]);
            }
    if (empty($_POST["email"])){
        $Erremail = "<p style='color:red'>Email is required</p>";
    } elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $Erremail = "<p style='color:red'>Invalid Email Address</p>";
    } else{
        $email = validate($_POST["email"]);
        }
    
    $website = validate($_POST["website"]);
    $about = validate($_POST["about"]);

    if (empty($_POST["gender"])){
        $Errgender = "<p style='color:red'>Gender is required</p>";
    } else{
        $gender = validate($_POST["gender"]);
        }
    $country = validate($_POST["country"]);
    


}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>





<div class="contentarea">

  <form class="formfield" action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> */
        <table>
            <tr>
                <td>Full Name : </td>
                <td><input type="text" name="name">*<?php echo $Errname;?></td>
            </tr>
            <tr>
                <td>* Email : </td>
                <td><input type="text" name="email">*<?php echo $Erremail;?></td>
            </tr>
            <tr>
                <td>Website : </td>
                <td><input type="text" name="website"></td>
            </tr>
            <tr>
                <td>About : </td>
                <td><textarea  name="about" rows="5" cols="50"></textarea></td>
            </tr>
            <tr>
                <td>* Gender : </td>
                <td>
                 <input type="radio" name="gender" value="Male"> Male
                 <input type="radio" name="gender" value="Female"> Female
                 *<?php echo $Errgender;?></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <select id="country" name="country">
                        <option value="" selected=""></option>
                        <option value="Bangladesh" >Bangladesh</option>
                        <option value="Canada">Canada</option>
                        <option value="USA">USA</option>
                    </select>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    echo "<h2>Your Input:</h2>";
    echo "Your Name : "."<b>".$name."</b>"."<br/>";
    echo "Your Email : "."<b>".$email."</b>"."<br/>";
    echo "Your Website : "."<b>".$website."</b>"."<br/>";
    echo "About You : "."<b>".$about."</b>"."<br/>";
    echo "Gender : "."<b>".$gender."</b>"."<br/>";
    echo "Country You Live : "."<b>".$country;
    
    ?>



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