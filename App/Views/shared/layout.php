<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geek's Bakery</title>
    <link href="<?= URL_FONT ?>fontawesome/css/all.css" rel="stylesheet">
    <?php if(strpos($view, 'auth', 0) === false) : ?>
        <link rel="stylesheet" href="<?= URL_CSS ?>base.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>header.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>reset.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>home.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>footer.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>profile.css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
            rel="stylesheet" />
    <?php else :?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>auth.css">
    <?php endif; ?>

</head>
<body onload=<?php strpos($view, 'home', 0) === false ? "" : "currentSlide(1)"?>>
    <!-- Onload page -->
    <div class="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- Hidden tag to use AJAX -->
    <p id="documentRootId" hidden><?= DOCUMENT_ROOT ?></p>

    <?php if(strpos($view, 'auth', 0) === false) : ?>
        <!-- Hearder -->
        <?php require_once VIEW."/shared/header.php" ?>

        <!-- Content -->
        <?php require_once VIEW . DS . $view . ".php"?> 

        <!-- Footer -->
        <?php require_once VIEW. DS . "shared/footer.php" ?>
        
        <!-- Toast messsage when adding cake to cart -->
        <div id="toast">
            <div id="img" class="img"><i class="fas fa-check-square"></i></div>
            <div id="desc">A notification message..</div>
        </div>

        <!-- Javascript - AJAX -->
        <script src="<?= URL_JS ?>cart.js"></script>
    
    <?php else :?>
        <!-- Login & Register -->
        <?php require_once VIEW . DS . $view . ".php"?> 
        <script src="<?= URL_JS ?>auth.js"></script>
    <?php endif; ?>
    
    <script>
        window.addEventListener("load" , function(){
            const loader = document.querySelector(".loader");
            loader.className += " hidden";
        });
    </script>

</body>
</html>