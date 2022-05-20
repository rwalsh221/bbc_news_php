<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../views/css/style.css" type="text/css"> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>BBC NEWS PHP</title>
    <style>
        <?php 
        include '../views/css/style.css'
        ?>
    </style>
</head>
<body>
    <?php include 'header.php' ?>
    <main class="main">
    <?php
    
    for ($i = 0; $i <5; $i++) {
        $content = $getLorem->getLorem();
        echo 
        '<div>
        <img src="https://picsum.photos/200">'
        .$content.
        '</div>';
    }
 ?>
    </main>
    <?php include 'footer.php' ?>
</body>
</html>

