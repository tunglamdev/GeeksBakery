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
            <?php foreach($data["delivered-order"] as $index => $orders) :?>
                <div class="history">
                    <div class="history-title">Bill-ID: #69</div>
                    
                    <div class="history-content">
                    <div class="history-content-img">
                            <img src="<?= URL_CAKE ?>12.3.jpg" alt="" class=>
                    </div>

                    <div class="history-content-decs">
                        <p class="cake-name">Chocolate</p>
                        <p class="cake-size">Size: 23cm</p>
                        <p class="cake-price" style="color: var(--main-color)">Price: 200.000 VND</p>
                        <p class="cake-quantity">Quantity: 2</p>
                    </div>
                    </div>

                    <div class="history-ending">
                        <div class="history-ending1">
                            <p class="history-ending-content">Total: </p>
                            <p class="history-ending-content" style="color: var(--main-color)">400.000 VND</p>
                        </div>
                        <div class="history-ending2">
                            <p class="history-ending-content">Status: </p>
                            <p class="history-ending-content" style="color: var(--main-color)">Đã giao</p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
            

            <div class="history">
                <div class="history-title">Bill-ID: #69</div>
                
                <div class="history-content">
                   <div class="history-content-img">
                        <img src="<?= URL_CAKE ?>12.3.jpg" alt="" class=>
                   </div>

                   <div class="history-content-decs">
                       <p class="cake-name">Chocolate</p>
                       <p class="cake-size">Size: 23cm</p>
                       <p class="cake-price" style="color: var(--main-color)">Price: 200.000 VND</p>
                       <p class="cake-quantity">Quantity: 2</p>
                   </div>
                </div>

                <div class="history-content">
                   <div class="history-content-img">
                        <img src="<?= URL_CAKE ?>12.3.jpg" alt="" class=>
                   </div>

                   <div class="history-content-decs">
                       <p class="cake-name">Chocolate</p>
                       <p class="cake-size">Size: 23cm</p>
                       <p class="cake-price" style="color: var(--main-color)">Price: 200.000 VND</p>
                       <p class="cake-quantity">Quantity: 2</p>
                   </div>
                </div>

                <div class="history-content">
                   <div class="history-content-img">
                        <img src="<?= URL_CAKE ?>12.3.jpg" alt="" class=>
                   </div>

                   <div class="history-content-decs">
                       <p class="cake-name">Chocolate</p>
                       <p class="cake-size">Size: 23cm</p>
                       <p class="cake-price" style="color: var(--main-color)">Price: 200.000 VND</p>
                       <p class="cake-quantity">Quantity: 2</p>
                   </div>
                </div>

                <div class="history-ending">
                    <div class="history-ending1">
                        <p class="history-ending-content">Total: </p>
                        <p class="history-ending-content" style="color: var(--main-color)">400.000 VND</p>
                    </div>
                    <div class="history-ending2">
                        <p class="history-ending-content">Status: </p>
                        <p class="history-ending-content" style="color: var(--main-color)">Đã giao</p>
                    </div>
                </div>
            </div>

            <div class="history">
                <div class="history-title">Bill-ID: #69</div>
                
                <div class="history-content">
                   <div class="history-content-img">
                        <img src="<?= URL_CAKE ?>12.3.jpg" alt="" class=>
                   </div>

                   <div class="history-content-decs">
                       <p class="cake-name">Chocolate</p>
                       <p class="cake-size">Size: 23cm</p>
                       <p class="cake-price" style="color: var(--main-color)">Price: 200.000 VND</p>
                       <p class="cake-quantity">Quantity: 2</p>
                   </div>
                </div>

                <div class="history-content">
                   <div class="history-content-img">
                        <img src="<?= URL_CAKE ?>12.3.jpg" alt="" class=>
                   </div>

                   <div class="history-content-decs">
                       <p class="cake-name">Chocolate</p>
                       <p class="cake-size">Size: 23cm</p>
                       <p class="cake-price" style="color: var(--main-color)">Price: 200.000 VND</p>
                       <p class="cake-quantity">Quantity: 2</p>
                   </div>
                </div>

                <div class="history-ending">
                    <div class="history-ending1">
                        <p class="history-ending-content">Total: </p>
                        <p class="history-ending-content" style="color: var(--main-color)">400.000 VND</p>
                    </div>
                    <div class="history-ending2">
                        <p class="history-ending-content">Status: </p>
                        <p class="history-ending-content" style="color: var(--main-color)">Đã giao</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
