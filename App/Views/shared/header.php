 <!-- Header -->
    <div class="wraper">
        <div class="container">
            <div class="header">
                <a class="header__logo" href="#"><img src="<?= URL_ICON ?>/Geek's Bakery 1.svg" alt="Geek's Bakery "></a>
                <div class="header__menu">
                    <a href="<?= DOCUMENT_ROOT?>/home">Home</a>
                    <a href="<?= DOCUMENT_ROOT?>/cakes">Cakes</a>
                    <a href="#">About</a>
                </div>
                <div class="header__search">
                    <img src="<?= URL_ICON ?>/loupe.png" alt="Tìm kiếm">
                    <form action="<?= DOCUMENT_ROOT ?>/cakes/search" method="get">
                        <input placeholder="Search..." class="button" type="text" name="key" id="search">
                    </form>
                </div>
                <div class="header__personal">
                    <div class="header__cart">
                        <img class="header__cart-img" src="<?= URL_ICON ?>/bag.svg" alt="Giỏ hàng">
                            <p id="numInCartId" class="header__cart-amount">0</p>
                    </div>
                    <div class="header__user">
                        <?php if(isset($_SESSION["user"])) :?>
                            <img class="header__user-avatar" src="<?= URL_USER ?><?= $_SESSION["user"]["avatar"] ?>" alt="Avatar">
                            <ul class="header__user-menu">
                                <a href="<?= DOCUMENT_ROOT ?>/users"><li>Profile</li></a>
                                <a href=""><li>Cart</li></a>
                                <a href="<?= DOCUMENT_ROOT ?>/accounts/logout"><li>Log out</li></a>
                            </ul>
                        <?php else : ?>
                            <a href="<?= DOCUMENT_ROOT ?>/accounts"><button class="btn-login">Login</button></a>
                        <?php endif; ?>
                    </div>
                    <div class="header__menu-mobile">
                        <input type="checkbox" class="header__mobile-nav-btn" id="mobile-check">
                        <label for="mobile-check" class="header__menu-mobile-img">
                            <img src="<?= URL_ICON?>/menu-mobile.svg" alt="Menu-mobile">
                        </label>
                        <label for="mobile-check" class="header__overlay"></label for="">
                        <div class="header__mobile-nav">
                            <label for="mobile-check" class="header__mobile-nav-close">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                            </label>
                            <ul class="header__mobile-nav-list">
                                <a href="<?= DOCUMENT_ROOT ?>/home"><li class="header__mobile-nav-link">Home</li></a>
                                <a href="<?= DOCUMENT_ROOT ?>/cakes"><li class="header__mobile-nav-link">Cakes</li></a>
                                <a href="#"><li class="header__mobile-nav-link">About</li></a>
                                <a href="<?= DOCUMENT_ROOT ?>/users"><li class="header__mobile-nav-link">Profile</li></a>
                                <a href="#"><li class="header__mobile-nav-link">Cart</li></a>
                                <a href="<?= DOCUMENT_ROOT ?>/accounts/logout"><li class="header__mobile-nav-link">Log out</li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>