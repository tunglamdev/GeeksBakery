<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geek's Cakes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet" />
    <link rel="stylesheet" href="<?= URL_CSS ?>base.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>header.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>reset.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>home.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>footer.css">
</head>
<body>
    <!-- Header -->
    <?php require_once VIEW."/shared/header.php" ?>
    
    <!-- Cakes -->
    <div class="wraper">
        <div class="container">
            <div class="sweeties">
                <div class="sweeties__title">
                    <h2>Cakes</h2>
                </div>
                <ul class="sweeties__list">
                    <?php foreach($data["cake_to_show"] as $index => $cakes) :?>
                        <a href="#">
                            <li class="sweeties__item">
                                <img src="<?= URL_CAKE ?><?= $cakes["image"] ?>" alt="<?= $cakes["name"] ?>">
                                <p class="sweeties__item-name"><?= $cakes["name"] ?></p>
                                <div class="sweeties__item-price">
                                    <p class="sweeties__item-new-price"><?= $cakes["price"] ?>đ</p>
                                    <p class="sweeties__item-old-price">300.000đ</p>
                                </div>
                                <button class="sweeties__item-button" type="submit">Add to cart+</button>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </ul>
                <ul class="sweeties__menu">
                    <li>
                        <a <?= $data['page']==1 ? 'onclick="event.preventDefault()"' : "" ?> href="<?= DOCUMENT_ROOT ?>/cakes/categories?id=<?= $data["id_cate"] ?>&page=<?= $data['page']-1 ?>"><img src="<?= URL_ICON ?>Arrow_1.svg" alt="Previous"></a>
                    </li>
                    <?php for($i=1; $i<=$data["num_of_page"]; $i++) :?>
                        <a <?= $i==$data['page'] ? 'onclick="event.preventDefault()"' : "" ?> href="<?= DOCUMENT_ROOT ?>/cakes/categories?id=<?= $data["id_cate"] ?>&page=<?= $i ?>"><li class="sweeties__menu-number <?= $i == $data['page'] ? "sweeties__menu-number--active" : "" ?>"><?= $i ?></li></a>
                    <?php endfor; ?>
                    <li>
                        <a <?= $data['page']==$data["num_of_page"] ? 'onclick="event.preventDefault()"' : "" ?> href="<?= DOCUMENT_ROOT ?>/cakes/categories?id=<?= $data["id_cate"] ?>&page=<?= $data['page']+1 ?>"><img src="<?= URL_ICON ?>Arrow_2.svg" alt="Next"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once VIEW."/shared/footer.php" ?>
</body>
</html>