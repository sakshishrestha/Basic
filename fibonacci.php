<?php 
// program to find n numbers of fibonacci series

function fibonacci($n){
    $num1 = 0;
    $num2 = 1; 
    $counter = 0; 
    $series = '';

    while($counter < $n){
        $series.=$num1;
        // echo "<pre>" . $series;
        if($counter < ($n-1)){
            $series.=" , ";
        }  
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
        $counter++; 
    }
    return $series; 
}

// $num = 10;

$message = '';

if(isset($_POST['submit'])){
    if(!empty($_POST['number'])){
        $num = $_POST['number'];
        $fibonacci_series = fibonacci($num);
        $message = $fibonacci_series;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <section>
        <div class="container">
            <?php if(!empty($message)){ ?>
            <div class="row">
                <h3>Fibonacci Series : <?php echo $message; ?></h3>
            </div>
            <?php } ?>
            <form action="" method="post">
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