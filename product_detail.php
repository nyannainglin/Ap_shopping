<?php include('header.php') ?>

<?php

?>
<!--================Single Product Area =================-->
<div class="product_image_area" style="padding-top:0px !important">
  <div class="container">
    <div class="row s_product_inner">
      <div class="col-lg-6">
        <div class="single-prd-item">
          <img class="img-fluid" src="admin/images/download (1).jpeg" width="500">
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="s_product_text">
          <h3>Product Name</h3>
          <h2>4$<h2>
          <ul class="list">
            <li><a href="#"><span>Availibility</span> : In Stock</a></li>
          </ul>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolorem harum doloribus dignissimos similique. Atque, porro? Odio, necessitatibus voluptas? Vero, eaque? Esse ipsam nulla quam sint aut nam tenetur molestias!</p>
          <form action="addtocart.php" method="post">
            <input name="_token" type="hidden" value="<?php echo $_SESSION['_token']; ?>">
            <input type="hidden" name="id" value="1">
            <div class="product_count">
              <label for="qty">Quantity:</label>
              <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
              <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
               class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
              <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst > 0 ) result.value--;return false;"
               class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
            </div>
            <div class="card_area d-flex align-items-center">
              <button class="primary-btn" href="#" style="border:1px">Add to Cart</button>
              <a class="primary-btn" href="index.php">Back</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><br>
<!--================End Single Product Area =================-->

<!--================End Product Description Area =================-->
<?php include('footer.php');?>
