


<?php include('header.php'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form class="" action="cat_edit.php" method="post">
                  <input type="hidden" name="id" value="1">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="name">
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" rows="8" cols="80">Hello candy</textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success" name="" value="SUBMIT">
                    <a href="category.php" class="btn btn-warning">Back</a>
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
