<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="cakeTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>User</th>
                    <th>Cake</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>OrderDate</th>
                    <th>DeliverDate</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($data["order"] as $key => $cake) :?>
                        <tr>
                        <td><?= $cake["id"] ?></td>
                        <td><?= $cake["User"] ?></td>
                        <td><?= $cake["Cake"] ?></td>
                        <td><?= $cake["size"] ?></td>
                        <td><?= $cake["price"] ?></td>
                        <td><?= $cake["amount"] ?></td>
                        <td><?= $cake["order_date"] ?></td>
                        <td><?= $cake["delivery_date"] ?></td>
                        <td><?= $cake["Status"] ?></td>
                        </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
    </section>
