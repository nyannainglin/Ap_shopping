


<?php include('header.php'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Listings</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <a href="product_add.php" type="button" class="btn btn-success">Create New Product</a>
                </div>
                <br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Category</th>
                      <th>In Stock</th>
                      <th>Price</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                        <tr>
                          <td>1</td>
                          <td>Product</td>
                          <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque repellat possimus<td>
                          <td>Pro</td>
                          <td>4</td>
                          <td>3$</td>
                          <td>
                            <div class="btn-group">
                              <div class="container">
                                <a href="product_edit.php?id=3" type="button" class="btn btn-warning">Edit</a>
                              </div>
                              <div class="container">
                                <a href="product_delete.php?id=5"
                                  onclick="return confirm('Are you sure you want to delete this item')"
                                  type="button" class="btn btn-danger">Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                  </tbody>
                </table><br>
                <nav aria-label="Page navigation example" style="float:right">
                  <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="?pageno=1">First</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item ">
                      <a class="page-link" href="#">Next</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="?pageno=5">Last</a></li>
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
