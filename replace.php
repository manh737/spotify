<?php include 'include/header.php';
?>



<section class="bg-primary hero hero-with-header">
  <center>
    <div class="container text-white">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <h1 class="mb-0"><b>Bảo Hành</b></h1>
        </div>
      </div>
    </div>
  </center>
</section>


<section class="bg-primary text-white separator-top">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Nhập Key Bạn Từng Sử Dụng Cho Tài Khoản Trước Đây - Ấn Bảo Hành</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <form method="post">
          <div class="form-row">
            <div class="form-group col-md-5 col-lg-10">
              <input class="form-control form-control-lg" name="k" id="replacekey" placeholder="Your Key">
            </div>
            <div class="form-group col-md-4 col-lg-2">
              <button id="replaceButton" type="submit" class="btn btn-block btn-lg btn-white">Bảo Hành</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="replaceResultText" class="container text-white">
  </div>


</section>
<?php include 'include/footer.php' ?>