
<?php include('header.php'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category Listings</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <a href="cat_add.php" type="button" class="btn btn-success">New Category</a>
                </div>
                <br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                        <tr>
                          <td>1</td>
                          <td>product name</td>
                          <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur ut dignissimos fuga minus, sit enim nesciunt incidunt, molestiae omnis blanditiis vero labore consequatur voluptatem aliquam perferendis quia. Ratione, vitae consequuntur.</td>
                          <td>
                            <div class="btn-group">
                              <div class="container">
                                <a href="cat_edit.php?id=1" type="button" class="btn btn-warning">Edit</a>
                              </div>
                              <div class="container">
                                <a href="cat_delete.php?id=3"
                                  onclick="return confirm('Are you sure you want to delete this item')"
                                  type="button" class="btn btn-danger">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                    </tbody>
                  </tbody>
                </table><br>
                <nav aria-label="Page navigation example" style="float:right">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="?pageno=1">First</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="?pageno=3">Last</a></li>
                  </ul>
                </nav>
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  <?php include('footer.html')?>
