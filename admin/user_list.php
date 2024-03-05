


<?php include('header.php'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Listings</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <a href="user_add.php" type="button" class="btn btn-success">Create User</a>
                </div>
                <br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                        <tr>
                          <td>2</td>
                          <td>name</td>
                          <td>email</td>
                          <td>admin</td>
                          <td>
                            <div class="btn-group">
                              <div class="container">
                                <a href="user_edit.php?id=1" type="button" class="btn btn-warning">Edit</a>
                              </div>
                              <div class="container">
                                <a href="user_delete.php?id=4"
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
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="?pageno=4">Last</a></li>
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
