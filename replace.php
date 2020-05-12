<?php 

  $get_stock = file_get_contents("https://spoty.gg/api/v2/?action=stock");
  $response = json_decode($get_stock);
  $total = 0;
  $data2 = '';
  $failure = '';
  $token = '';
  foreach ($response->data->stock as $data) {
    $cc = $data->iso_code;
    $c = $data->country_name;
    $i = $data->invite_total;
    $total += $data->invite_total;
  $data2 .= "<option value=\"$cc\">$c Remaining: $i</option>";
  }
  
  
  	if(isset($_POST['k'], $_POST['c'])) {
  	    
  	    	$key = $_POST['k'];
	        $country = $_POST['c'];
		$upgrade = file_get_contents("https://spoty.gg/api/v2/?action=upgrade&key=$key&country=$country");
		$upgrade = json_decode($upgrade);
		$status = $upgrade->status;
		
		switch ($status){
			case "success":
			$token = $upgrade->data->token;
			$upgrade = $upgrade->data->address;
			break;
			
			case "failure":
				$failure = $upgrade->message;
			break;
			
			default:
				$failure = "Unknown Error";
			break;
		}
		
	}
	
	include'include/header.php';
?>



    <section class="bg-primary hero hero-with-header">
      <center><div class="container text-white">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <h1 class="mb-0">Replace <b>your</b> Spotify account.</h1>
          </div>
        </div>
      </div> </center>   
    </section>


  

    <section class="bg-primary text-white separator-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Enter your key, select your country click upgrade!</h2> 
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form method="post">
              <div class="form-row">
                <div class="form-group col-md-5 col-lg-6">
                  <input class="form-control form-control-lg" name="k" placeholder="Your Key">
                </div>
                <div class="form-group col-md-3 col-lg-4">
                  <select class="form-control form-control-lg" name="c" id="type-input">
                    <?=$data2?>
                  </select>
                </div>
                <div class="form-group col-md-4 col-lg-2">
                  <button type="submit" class="btn btn-block btn-lg btn-white">Upgrade</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      
      <?php if ($failure) {
        echo'

      <div class="container text-white">
        <div class="row">
          <div class="col-12 mb-0">
            <h2 class="eyebrow mb-2">Output:</h2>
          </div>
          <div class="col">
            <span class="job row align-items-center">
              <span class="col-md-6 fs-22 font-weight-light text-white">
                Failure!
              </span>
              <span class="col-md-3">
                Upgrade Failed '.$failure.'
              </span>
              <a target="_blank" href="info.php" class="col-md-3">
              Click to get key info!
              </a>
            </span>
          </div>
        </div>
      </div>
            ';}
            
           if ($token) {
             echo'
      <div class="container text-white">
        <div class="row">
          <div class="col-12 mb-0">
            <h2 class="eyebrow mb-2">Output:</h2>
          </div>
          <div class="col">
            <span class="job row align-items-center">
              <span class="col-md-6 fs-22 font-weight-light text-white">
                Success!
              </span>
              <span class="col-md-3">
                Address: '.$upgrade.'
              </span>
              <a target="_blank" href="'.$token.'" class="col-md-3">
              Click to accept invite!
              </a>
            </span>
          </div>
        </div>
      </div>
';} ?>

    </section>
   <?php include'include/footer.php'?>
