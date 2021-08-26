<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cakes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Home</a></li>
              <li class="breadcrumb-item active">Cakes</li>
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
              <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                      <h4>Cakes list</h4>
                      <a class="btn btn-primary" href="<?= DOCUMENT_ROOT ?>/admin/cakes/create">Create</a>
                  </div>
              </div>
              <div class="card-body">
                <table id="cakeTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data["cake"] as $key => $cake) :?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $cake["name"] ?></td>
                      <td><?= $cake["price"] ?></td>
                      <td><?= $cake["size"] ?></td>
                      <td><?= $cake["id_cake_type"] ?></td>
                      <td>
                      <img src="<?= URL_CAKE?><?= $cake["image"] ?>" class="rounded" alt="..." style="width: 100px">
                      </td>
                      <td><?= $cake["description"] ?></td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="<?= DOCUMENT_ROOT ?>/admin/cakes/edit/<?= $cake["id"] ?>"><button type="button" class="btn btn-info">Edit</button></a>
                          <a href="<?= DOCUMENT_ROOT ?>/admin/cakes/delete"><button type="button" class="btn btn-danger">Delete</button></a>
                        </div>
                      </td>
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
