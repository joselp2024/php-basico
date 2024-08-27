<?php

    $animal = ["https://perchance.org/random-vehicle-car-generator","https://perchance.org/random-vehicle-car-generator", "https://perchance.org/random-vehicle-car-generator"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>1</h1>
    <?php foreach ($animal as $animal){?>
        <img src="<?php echo $animal; ?>">
    <?php }?>

</body>
</html>