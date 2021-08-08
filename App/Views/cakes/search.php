 <!-- Search cakes -->
    <div class="wraper">
        <div class="container">
            <div class="sweeties">
                <div class="sweeties__title">
                    <h2>Cakes</h2>
                </div>
                <div class="search-key" style="margin-top: 30px">
                    <p><i>Search:</i><b><i><?= $_GET["key"] ?></i></b></p>
                </div>
                <ul class="sweeties__list">
                    <?php foreach($data["cake_to_show"] as $index => $cakes) :?>
                        <a href="#">
                            <li class="sweeties__item">
                                <img src="<?= URL_CAKE ?><?= $cakes["image"] ?>" alt="<?= $cakes["name"] ?>">
                                <p class="sweeties__item-name"><?= $cakes["name"] ?></p>
                                <div class="sweeties__item-price">
                                    <p class="sweeties__item-new-price"><?= number_format($cakes["price"],0, ',','.') ?>đ</p>
                                    <p class="sweeties__item-old-price">300.000đ</p>
                                </div>
                                <!-- If not login => idUser = 0 -->
                                <button onclick="addToCart(<?= isset($_SESSION['user'])? $_SESSION['user']['id']: 0 ?> , <?= $cakes['id']?>)" class="sweeties__item-button" type="submit">Add to cart+</button>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </ul>
                <?php if($data["cake_to_show"] == []) :?>
                    <div class="search-key" style="margin-top: 30px">
                        <i>No results found.</i>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
