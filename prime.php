<?php 
//check the prime number in php 

function isPrime($number){
    if($number <= 1)
    return false;
    for($i = 2; $i <= sqrt ($number); $i++){
        // echo $i;
        if($number%$i == 0)
        
        return false;
    }
    return true;
}

$message = '';

if(isset($_POST['submit']) && !empty($_POST['number'])){
    $num = $_POST['number'];
    $is_prime = isPrime($num);

    if($is_prime){
        $message = $num . " is a prime number";
    }
    else{
        $message = $num . " is not a prime number";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <section>
        <div class="container">
            <?php if(!empty($message)){ ?>
            <div class="row">
                <h3><?php echo $message; ?></h3>
            </div>
            <?php } ?>
        <form action="" method="POST">
            <div class="row">
                <label>Please enter number</label>
            </div>
            <div class="row">
                <div class="col-75">
                    <input type="text" name="number">
                </div>
                <div class="col-25">
                    <input type="submit" name="submit" value="SUBMIT">
                </div>
            </div>
        </form>
        </div>
    </section>

</body>
</html>