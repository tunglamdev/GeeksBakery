<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add new cake</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT?>/admin">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= DOCUMENT_ROOT?>/admin/cakes">Cakes</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <!-- general form elements -->
      <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Cake information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php DOCUMENT_ROOT ?>/admin/cakes/store" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cate">Category</label>
                                <select class="custom-select" id="cate" name="cate" required>
                                    <option value="" selected disabled>Select one</option>
                                    <?php foreach($data["categories"] as $i => $categories): ?>
                                        <option value="<?= $categories["id"] ?>"><?= $categories["name"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter cake name" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price"  placeholder="Enter price" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="size">Size</label>
                                <input type="text" class="form-control" id="size" name="size"  placeholder="Enter size" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" required>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="des">Description</label>
                                <textarea class="form-control" id="des" name="des" placeholder="Enter description" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</section>