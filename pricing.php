<?php include'include/header.php'?>


    <!-- hero -->
    <section class="bg-primary text-white hero hero-with-header">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center">
            <h1>Pricing <b>For Everyone!</b></h1>
          </div>
        </div>
      </div>    
    </section>
    <!-- / hero -->

    
    <!-- pricing -->
    <section class="bg-primary pt-0 pattern">
      <div class="container">
        <div class="row text-white">
          <div class="col text-center">
            <div class="nav nav-switch nav-lavalamp">
              <a class="nav-item nav-link active show" data-toggle="tab" href="#component-1-1">Individuals</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#component-1-2">Resellers</a>
            </div>
          </div>
        </div>
        <div class="tab-content" id="component-1">
          <div class="tab-pane show active" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
            <div class="row gutter-2">
              <div class="col-md-6 col-lg-4">
                <div class="card card-price rising">
                  <div class="card-body">
                    <i class="svg-icon w-50 equal">
                      <span>
                        <img src="assets/images/demo/illustrations/draw-7.svg" alt="Image">
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
              <div class="col-md-6 col-lg-4">
                <div class="card card-price rising">
                  <div class="card-body">
                    <i class="svg-icon w-50 equal">
                      <span>
                        <img src="assets/images/demo/illustrations/draw-8.svg" alt="Image">
                      </span>
                    </i>
                    <center><h5 class="card-title"><?=PACKAGE_2_NAME?></h5>
                    <ul class="list-group list-group-minimal text-muted">
                      <li class="list-group-item"><?=PACKAGE_2_KEY_AMOUNT?>x Key</li>
                      <li class="list-group-item"><?=SUB_LENGTH?> Spotify</li>
                      <li class="list-group-item">Friendly Support</li>
                    </ul></center>
                  </div>
                  <a data-shoppy-product="<?=PACKAGE_2_SHOPPYID?>"class="card-footer">
                    <strong class="card-price"><?=CURRENCY?><?=PACKAGE_2_PRICE?></strong>/<?=SUB_LENGTH?>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card card-price rising">
                  <div class="card-body">
                    <i class="svg-icon w-50 equal">
                      <span>
                        <img src="assets/images/demo/illustrations/draw-9.svg" alt="Image">
                      </span>
                    </i>
                    <center><h5 class="card-title"><?=PACKAGE_3_NAME?></h5>
                    <ul class="list-group list-group-minimal text-muted">
                      <li class="list-group-item"><?=PACKAGE_3_KEY_AMOUNT?>x Key</li>
                      <li class="list-group-item"><?=SUB_LENGTH?> Spotify</li>
                      <li class="list-group-item">Friendly Support</li>
                    </ul></center>
                  </div>
                  <a data-shoppy-product="<?=PACKAGE_3_SHOPPYID?>"class="card-footer">
                    <strong class="card-price"><?=CURRENCY?><?=PACKAGE_3_PRICE?></strong>/<?=SUB_LENGTH?>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="component-1-2" role="tabpanel" aria-labelledby="component-1-2">
            <div class="row gutter-2">
              <div class="col-md-6 col-lg-4">
                <div class="card card-price rising">
                  <div class="card-body">
                    <i class="svg-icon w-50 equal">
                      <span>
                        <img src="assets/images/demo/illustrations/draw-4.svg" alt="Image">
                      </span>
                    </i>
                    <center><h5 class="card-title"><?=RESELLER_PACKAGE_1_NAME?></h5>
                    <ul class="list-group list-group-minimal text-muted">
                      <li class="list-group-item"><?=RESELLER_PACKAGE_1_KEY_AMOUNT?>x Key</li>
                      <li class="list-group-item"><?=SUB_LENGTH?> Spotify</li>
                      <li class="list-group-item">Friendly Support</li>
                    </ul></center>
                  </div>
                  <a data-shoppy-product="<?=RESELLER_PACKAGE_1_SHOPPYID?>"class="card-footer">
                    <strong class="card-price"><?=CURRENCY?><?=RESELLER_PACKAGE_1_PRICE?></strong>/<?=SUB_LENGTH?>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card card-price rising">
                  <div class="card-body">
                    <i class="svg-icon w-50 equal">
                      <span>
                        <img src="assets/images/demo/illustrations/draw-5.svg" alt="Image">
                      </span>
                    </i>
                    <center><h5 class="card-title"><?=RESELLER_PACKAGE_2_NAME?></h5>
                    <ul class="list-group list-group-minimal text-muted">
                      <li class="list-group-item"><?=RESELLER_PACKAGE_2_KEY_AMOUNT?>x Key</li>
                      <li class="list-group-item"><?=SUB_LENGTH?> Spotify</li>
                      <li class="list-group-item">Friendly Support</li>
                    </ul></center>
                  </div>
                  <a data-shoppy-product="<?=RESELLER_PACKAGE_2_SHOPPYID?>"class="card-footer">
                    <strong class="card-price"><?=CURRENCY?><?=RESELLER_PACKAGE_2_PRICE?></strong>/<?=SUB_LENGTH?>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card card-price rising">
                  <div class="card-body">
                    <i class="svg-icon w-50 equal">
                      <span>
                        <img src="assets/images/demo/illustrations/draw-6.svg" alt="Image">
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
