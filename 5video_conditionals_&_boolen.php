<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolen</title>
</head>
<body>
    <?php 
    $name =  "Dark Matter";
    $read = true;
    if($read){
        $message = "Congratulations! You have read $name";
    }else{
        $message = "Sorry! You didnt have read $name";
    }
    ?>

<h1>  
<!-- Both are same do 1st or 2nd, better to choose 2nd one -->
    <!-- 1st method Like -->
    <?php echo " $message"?> <br>

    <!-- 2nd Method -->
    <?= $message ?> 
</h1>
</body>
</html>