<?php include'include/header.php'?>


    <!-- cover classic -->
    <section class="p-0 pt-10 bg-primary text-white">
      <div class="container">
        <div class="row align-items-center justify-content-between py-5 py-md-10">
          <div class="col-12 col-lg-6 text-center text-lg-left">
            <h1 class="display-3">Go Premium. Be happy. <b><?=SUB_LENGTH?> Upgrades.</b></h1>
                <a href="pricing.php" <button class="btn btn-white" type="button">Purchase</button></a>
          </div>
          <div class="col-12 col-lg-6" data-aos="zoom-in" data-aos-delay="500">
            <img src="assets/images/demo/app/app-1.svg" alt="Image">
          </div>
        </div>
      </div>
    </section>
    <!-- / cover classic -->


    <!-- steps carousel -->
    <section class="bg-primary text-white">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-10 col-lg-8">
            <h2>Fast, Simple made with <b>you</b>  in mind.</h2>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="owl-carousel visible" data-items="[3,2,2]" data-margin="20">
              <div class="step step-highlight">
                <h4 class="step-title">Purchase</h4>
                <p>Simply purchase a key through our autobuy system using Paypal & Crypto</p>
              </div>
              <div class="step">
                <h4 class="step-title">Upgrade</h4>
                <p>Use your key to upgrade with our simple automated upgrader.</p>
              </div>
              <div class="step">
                <h4 class="step-title">Accept Invite</h4>
                <p>Accept the spotify invite we provide you with!</p>
              </div>
              <div class="step">
                <h4 class="step-title">Finished</h4>
                <p>That's all follow spotify's instructions and enjoy Premium.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / steps carousel -->


    <!-- features -->
    <section>
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-lg-6">
            <img src="assets/images/demo/app/app-2.svg" alt="Image">
          </div>
          <div class="col-12 col-lg-5">
            <div class="row">
              <div class="col">
                <h2 class="text-decorate"><?=SITENAME?>'s <b>features.</b></h2>
              </div>
            </div>
            <div class="row gutter-3">
              <div class="col-4" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <i class="icon-activity fs-30 mb-2 text-purple">
                </i>
                <span class="eyebrow">Instant Upgrades</span>
              </div>
              <div class="col-4" data-aos="fade-up">
                <i class="icon-airplay fs-30 mb-2 text-purple">
                </i>
                <span class="eyebrow">Mobile Friendly</span>
              </div>
              <div class="col-4" data-aos="fade-up">
                <i class="icon-command fs-30 mb-2 text-purple">
                </i>
                <span class="eyebrow">Replacements</span>
              </div>
              <div class="col-4" data-aos="fade-up">
                <i class="icon-headphones2 fs-30 mb-2 text-purple">
                </i>
                <span class="eyebrow"><?=SUB_LENGTH?> Spotify</span>
              </div>
              <div class="col-4" data-aos="fade-up">
                <i class="icon-life-buoy2 fs-30 mb-2 text-purple">
                </i>
                <span class="eyebrow">Friendly Support</span>
              </div>
              <div class="col-4" data-aos="fade-up">
                <i class="icon-map-pin2 fs-40 mb-1 text-purple">
                </i>
                <span class="eyebrow">50+ Countries</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / features  -->




    <!-- pricing -->
    <section class="bg-light">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-4 pr-md-4 text-center text-md-left">
            <h2 class="h1"><b>Pricing</b> plans</h2>
            <p>Perfect for Resellers and for the average Joe.</p>
            <a href="pricing.php" class="btn btn-primary mt-1">View More</a>
          </div>
          <div class="col-md-8">
            <div class="row gutter-2">
              <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-center">
                <div class="card card-price rising">
                  <div class="card-body">
                    <i class="svg-icon w-50 equal">
                      <span>
                        <img src="assets/images/demo/app/app-5.svg" alt="Image">
                      </span>
                    </i>
                    <center><h5 class="card-title"><?=PACKAGE_1_NAME?></h5>
                    <ul class="list-group list-group-minimal text-muted">
                      <li class="list-group-item"><?=PACKAGE_1_KEY_AMOUNT?>x Key</li>
                      <li class="list-group-item"><?=SUB_LENGTH?> Spotify</li>
                      <li class="list-group-item">Friendly Support</li>
                    </ul></center>
                  </div>
                  <a data-shoppy-product="<?=PACKAGE_1_SHOPPYID?>"class="card-footer">
                    <strong class="card-price"><?=CURRENCY?><?=PACKAGE_1_PRICE?></strong>/<?=SUB_LENGTH?>
                  </a>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="250">
                <div class="card card-price rising">
                  <div class="card-body">
                    <i class="svg-icon w-50 equal">
                      <span>
                        <img src="assets/images/demo/app/app-6.svg" alt="Image">
                      </span>
                    </i>
                    <center><h5 class="card-title"><?=RESELLER_PACKAGE_3_NAME?></h5>
                    <ul class="list-group list-group-minimal text-muted">
                      <li class="list-group-item"><?=RESELLER_PACKAGE_3_KEY_AMOUNT?>x Key</li>
                      <li class="list-group-item"><?=SUB_LENGTH?> Spotify</li>
                      <li class="list-group-item">Friendly Support</li>
                    </ul></center>
                  </div>
                  <a data-shoppy-product="<?=RESELLER_PACKAGE_3_SHOPPYID?>"class="card-footer">
                    <strong class="card-price"><?=CURRENCY?><?=RESELLER_PACKAGE_3_PRICE?></strong>/<?=SUB_LENGTH?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / pricing -->



   <?php include'include/footer.php'?>
