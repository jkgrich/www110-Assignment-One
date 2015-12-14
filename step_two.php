<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Creature Generator</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/uniform.default.css">
</head>

    <div id="holder">
    <h1>Seneca College</h1>
    <h2>Webmaster Program</h2>
    <h3>Creature Generator</h3>
    
<?php

    if ( isset( $_POST['name'] ) && !empty($_POST['name']) && isset( $_POST['creature_type'] ) ) {
        $full_name = $_POST['name'];
        $creature = $_POST['creature_type'];
        $full_name = strip_tags($full_name);
        $full_name = htmlspecialchars($full_name);
        $full_name = strtolower($full_name);
        $full_name = ucwords($full_name);   
?>

<body>
    <div id="content"> 
        <p>Thanks <?php echo $full_name; ?></p> 
        
        <?php
        echo 'Today is '. date("l F jS Y"); 
        ?> 
        <p> and it's been a busy day. But don't worry! Our wizards and witches are using their best potions and spells to provide you with the scariest creature in all of the land. </p>
        <p>When you are ready to see the results <button id="dropdown" type="submit"> click here. </button></p>

        <br>
        
        <div id="description"> <!--validator does not think this should be here, because it does not see the php-->

<?php
        $robotDesc = array('Sent from the future to destroy all humans, this robot is not messing around!','Hide your children, hide your wife, the killer robots on the lose!','Disguised as a human but still talks like a robot. This guy is not fooling anyone.','Half man, half robot, all heart!');

        $alienDesc = array('This is bob, he doesnt fit in with all the other aliens because his nose glows.','Six arms, four legs, two heads, one mission...eat everyone!','They told you monster did not live under your bed...they were wrong!','Its a bird, no its a plane, no its a flesh eating alien that loves to dance!');

        if ($_POST['creature_type'] == "alien"){
            echo $full_name . "zilla<br>";
            echo $alienDesc[mt_rand(0,3)];
            echo '<img src="images/alien.png" alt="alien" width="192" height="177">';
        } else {
            echo $full_name . "-bot<br>";
          echo $robotDesc[mt_rand(0,3)];
            echo '<img src="images/robot.png" alt="robot" width="240" height="500">';

        }
?> 

        </div><!--end description-->
	
    </div><!--content-->
<?php     
    
    } else {
    $full_name = $_POST['name'];
    //$full_name = "Please enter your name</font>";
     echo "<font color='red'><p>Please fill in all required fields.</p></font>";
    }
?>

    <form method="post" action="step_one.php">
        <button id="backbutton" type="submit">Go Back</button>
    </form>  
    
    </div><!--end holder-->
        
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>  
  
<script>
    
    $(document).ready(function () {
    
        $('#description').hide();
    
        $('#dropdown').click(function(i){
            i.preventDefault(); 
            $('#description').slideDown(1000);
        });
    });
</script>
    
</body>
</html>


