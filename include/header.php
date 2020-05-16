<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=SITENAME?> | <?=ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME))?></title>
    <link rel="stylesheet" href="./assets/css/vendor.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="shortcut icon" type="image/png" href="./assets/images/favicon100x100.png"/>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css" rel="stylesheet" />
  </head>
  <body>

    <!-- header -->
    <header class="header-sticky header-dark">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.php">
            <img class="navbar-logo navbar-logo-light" src="assets/images/spotify.png" alt="Logo">
            <img class="navbar-logo navbar-logo-dark" src="assets/images/spotify.png" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="burger"><span></span></span></button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php" role="button">
                  Trang Chủ
                </a>
              </li>
                  <li class="nav-item">
                <a class="nav-link" href="pricing.php" role="button">
                  Bảng Giá
                </a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="upgrade.php" role="button">
                  Nâng Cấp
                </a>
              </li>
                   <li class="nav-item">
                <a class="nav-link" href="replace.php" role="button">
                  Bảo Hành
                </a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="faq.php" role="button">
                  FAQ
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="info.php" role="button">
                  Kiểm Tra Info
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Liên Hệ
                </a>
                
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" target="_blank" href="discord.php">
                    <span>Discord</span>
                  </a>
                  <a class="dropdown-item" target="_blank" href="facebook.php">
                    <span>Facebook</span>
                  </a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
            </ul>

          </div>
        </nav>
      </div>
    </header>
    <!-- header -->