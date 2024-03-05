

<?php include('header.php'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form class="" action="" method="post" enctype="multipart/form-data">
                  <input name="id" type="hidden" value="1">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="name">
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" rows="8" cols="30">hello description</textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Category</label>
                    <select class="form-control" class="" name="category">
                      <option value="">SELECT CATEGORY</option>
                      <?php foreach ($catResult as $value) { ?>
                        <?php if ($value['id'] == $result[0]['category_id']) : ?>
                          <option value="3" selected>option</option>
                          <option value="4">option2</option>
                        <?php endif?>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="3">
                  </div>
                  <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="price" value="3$">
                  </div>
                  <div class="form-group">
                    <label for="">Image</label>
                    <img src="images/lebron-7-mens-shoe-dpMWh4.jpg" alt="" width="150" height="150"><br>
                    <input type="file" name="image" value="">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success" name="" value="SUBMIT">
                    <a href="index.php" class="btn btn-warning">Back</a>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  <?php include('footer.html')?>
