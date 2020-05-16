<?php 
header('Access-Control-Allow-Origin: *');
include 'include/header.php';
?>


<section class="bg-primary hero hero-with-header">
  <center>
    <div class="container text-white">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <h1 class="mb-0"><b>Nâng Cấp Tài Khoản Spotify Của Bạn</b></h1>
        </div>
      </div>
    </div>
  </center>
</section>




<section class="bg-primary text-white separator-top">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><b>Nhập Key - Chọn Quốc Gia - Ấn Nâng Cấp</b></h2>
        <li><span>Đôi khi sẽ mất 3-4 phút để hệ thống kiểm tra, vui lòng kiên nhẫn. Nếu không được hãy thử lại.</span></li>
        <li><span>Hãy chấp nhận link invite sớm nhất có thể sau khi ấn Nâng Cấp ( trong khoảng 30 phút ). Vì nếu đợi quá lâu đôi khi bạn sẽ nhận thông báo Family Plan is Full.</span></li>
        <li><span>Nếu có thêm bất cứ lỗi nào hãy liên hệ với chúng tôi.</span></li>
        <li><span>Đọc kỹ <a href="http://meownbb.site/faq.php">FAQ</a> trước khi sử dụng</span></li>
        <li><span>Lưu ý: Không sử dụng Safari để nâng cấp vì đôi khi sẽ gặp lỗi</span></li>
      </div>
    </div>
    <div class="row">
      <div class="col">
          <div class="form-row">
            <div class="form-group col-md-5 col-lg-6">
              <input class="form-control form-control-lg" id="key" placeholder="Your Key">
            </div>
            <div class="form-group col-md-3 col-lg-4">
              <select class="form-control form-control-lg my-selectpicker load-country" id="country" id="type-input">
              </select>
            </div>
            <div class="form-group col-md-4 col-lg-2">
              <button id="UpgradeButton" class="btn btn-block btn-lg btn-white">Nâng Cấp</button>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div id="resultText" class="container text-white">
  </div>

</section>
<?php include 'include/footer.php' ?>