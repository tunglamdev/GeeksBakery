<!-- Profile -->
    <h3>Profile</h3>
    <div class="wraper">
        <div class="container">
            <div class="profile">
                <div class="user-info">
                    <form action="<?= DOCUMENT_ROOT ?>/users/update" class="profile-form" method="post">
                        <div class="form-content">
                            <div class="form-items">
                                <p class="input-name">Name</p>
                                <input name="name" type="text" id="username" value="<?= $data['user']['name']?>">                        
                            </div>

                            <div class="form-items">
                                <p class="input-name">Email</p>
                                <input name="email" type="text" id="email" value="<?= $data['user']['email'] ?>">                        
                            </div>

                            <div class="form-items">
                                <p class="input-name">Phone</p>
                                <input name="phone" type="text" id="phone" value="<?= $data['user']['phone'] ?>">                        
                            </div>

                            <div class="form-items">
                                <p class="input-name">Address</p>
                                <input name="address" type="text" id="address" value="<?= $data['user']['address'] ?>">
                            </div>
                        </div>
                        <input id="btn-save" type="submit" value="Save">
                    </form>
                </div>

                <div class="user-avatar">
                    <h3 class="avatar-title">Avatar</h3>
                    <img class ="avatar-img" src="<?= URL_USER ?><?= $data["user"]["avatar"]?>" alt="" srcset="">
                    <p class="avatar-name"><?= $data["user"]["name"]?></p>
                    <form action="<?= DOCUMENT_ROOT ?>/users/upload" method="post">
                        <input type="file" name="file" id="file">
                        <label for="file">Upload image</label>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- History -->
    <h3>History</h3>
    <div class="wraper">
        <div class="container">
            <!-- No processed Orders -->
            <?php foreach($data["noProcessedOrders"] as $index => $orders) :?>
                <div class="history">
                    <?php $total = 0; ?>
                    <div class="history-title">Bill-ID: #<?= $orders["id"] ?></div>
                    
                    <?php foreach($data[$orders["id"]]["cakes"] as $i => $cakes) :?>
                        <div class="history-content">
                            <div class="history-content-img">
                                    <img src="<?= URL_CAKE ?><?= $cakes['image'] ?>" alt="" class=>
                            </div>

                            <div class="history-content-decs">
                                <p class="cake-name"><?= $cakes['name'] ?></p>
                                <p class="cake-size">Size: <?= $cakes['size'] ?>cm</p>
                                <p class="cake-price" style="color: var(--main-color)">Price: <?= number_format($cakes["price"],0, ',','.') ?> VND</p>
                                <p class="cake-quantity">Quantity: <?= $cakes['amount'] ?></p>
                            </div>
                        </div>
                        <?php $total = $total + $cakes['price'] * $cakes['amount'] ?>
                    <?php endforeach; ?>

                    <div class="history-ending">
                        <div class="history-ending1">
                            <p class="history-ending-content">Total: </p>
                            <p class="history-ending-content" style="color: var(--main-color)"><?= number_format($total,0, ',','.') ?> VND</p>
                        </div>
                        <div class="history-ending2">
                            <p class="history-ending-content">Status: </p>
                            <p class="history-ending-content" style="color: var(--main-color)">Not processed</p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

            <!-- Prepairing Orders -->
            <?php foreach($data["prepairingOrders"] as $index => $orders) :?>
                <div class="history">
                    <?php $total = 0; ?>
                    <div class="history-title">Bill-ID: #<?= $orders["id"] ?></div>
                    
                    <?php foreach($data[$orders["id"]]["cakes"] as $i => $cakes) :?>
                        <div class="history-content">
                            <div class="history-content-img">
                                    <img src="<?= URL_CAKE ?><?= $cakes['image'] ?>" alt="" class=>
                            </div>

                            <div class="history-content-decs">
                                <p class="cake-name"><?= $cakes['name'] ?></p>
                                <p class="cake-size">Size: <?= $cakes['size'] ?>cm</p>
                                <p class="cake-price" style="color: var(--main-color)">Price: <?= number_format($cakes["price"],0, ',','.') ?> VND</p>
                                <p class="cake-quantity">Quantity: <?= $cakes['amount'] ?></p>
                            </div>
                        </div>
                        <?php $total = $total + $cakes['price'] * $cakes['amount'] ?>
                    <?php endforeach; ?>

                    <div class="history-ending">
                        <div class="history-ending1">
                            <p class="history-ending-content">Total: </p>
                            <p class="history-ending-content" style="color: var(--main-color)"><?= number_format($total,0, ',','.') ?> VND</p>
                        </div>
                        <div class="history-ending2">
                            <p class="history-ending-content">Status: </p>
                            <p class="history-ending-content" style="color: var(--main-color)">Prepairing</p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

            <!-- Delivering orders -->
            <?php foreach($data["deliveringOrders"] as $index => $orders) :?>
                <div class="history">
                    <?php $total = 0; ?>
                    <div class="history-title">Bill-ID: #<?= $orders["id"] ?></div>
                    
                    <?php foreach($data[$orders["id"]]["cakes"] as $i => $cakes) :?>
                        <div class="history-content">
                            <div class="history-content-img">
                                    <img src="<?= URL_CAKE ?><?= $cakes['image'] ?>" alt="" class=>
                            </div>

                            <div class="history-content-decs">
                                <p class="cake-name"><?= $cakes['name'] ?></p>
                                <p class="cake-size">Size: <?= $cakes['size'] ?>cm</p>
                                <p class="cake-price" style="color: var(--main-color)">Price: <?= number_format($cakes["price"],0, ',','.') ?> VND</p>
                                <p class="cake-quantity">Quantity: <?= $cakes['amount'] ?></p>
                            </div>
                        </div>
                        <?php $total = $total + $cakes['price'] * $cakes['amount'] ?>
                    <?php endforeach; ?>

                    <div class="history-ending">
                        <div class="history-ending1">
                            <p class="history-ending-content">Total: </p>
                            <p class="history-ending-content" style="color: var(--main-color)"><?= number_format($total,0, ',','.') ?> VND</p>
                        </div>
                        <div class="history-ending2">
                            <p class="history-ending-content">Status: </p>
                            <p class="history-ending-content" style="color: var(--main-color)">Delivering</p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

            <!-- Delivered Orders -->
            <?php foreach($data["deliveredOrders"] as $index => $orders) :?>
                <div class="history">
                    <?php $total = 0; ?>
                    <div class="history-title">Bill-ID: #<?= $orders["id"] ?></div>
                    
                    <?php foreach($data[$orders["id"]]["cakes"] as $i => $cakes) :?>
                        <div class="history-content">
                            <div class="history-content-img">
                                    <img src="<?= URL_CAKE ?><?= $cakes['image'] ?>" alt="" class=>
                            </div>

                            <div class="history-content-decs">
                                <p class="cake-name"><?= $cakes['name'] ?></p>
                                <p class="cake-size">Size: <?= $cakes['size'] ?>cm</p>
                                <p class="cake-price" style="color: var(--main-color)">Price: <?= number_format($cakes["price"],0, ',','.') ?> VND</p>
                                <p class="cake-quantity">Quantity: <?= $cakes['amount'] ?></p>
                            </div>
                        </div>
                        <?php $total = $total + $cakes['price'] * $cakes['amount'] ?>
                    <?php endforeach; ?>

                    <div class="history-ending">
                        <div class="history-ending1">
                            <p class="history-ending-content">Total: </p>
                            <p class="history-ending-content" style="color: var(--main-color)"><?= number_format($total,0, ',','.') ?> VND</p>
                        </div>
                        <div class="history-ending2">
                            <p class="history-ending-content">Status: </p>
                            <p class="history-ending-content" style="color: var(--main-color)">Delivered</p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
