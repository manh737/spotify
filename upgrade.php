<?php 

  $stock = file_get_contents("https://spoty.gg/api/v2/?action=stock");
  $response = json_decode($stock);
  $total = 0;
  $data2 = '';
usort($response->data->stock, 'sort_');

function sort_($a, $b)
{   

  return $a->invite_total < $b->invite_total;
}


  foreach ($response->data->stock as $data) {
    $cc = $data->iso_code;
    $c = $data->country_name;
    $i = $data->invite_total;
    $total += $data->invite_total;
  $data2 .= "<option value=\"$cc\">$c Remaining: $i</option>";
  }
  
	
	include'include/header.php';
?>


    <section class="bg-primary hero hero-with-header">
      <center><div class="container text-white">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <h1 class="mb-0">Upgrade <b>your</b> Spotify account.</h1>
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
                  <input class="form-control form-control-lg" id="key" placeholder="Your Key">
                </div>
                <div class="form-group col-md-3 col-lg-4">
                  <select class="form-control form-control-lg" id="country" id="type-input">
                    <?=$data2?>
                  </select>
                </div>
                <div class="form-group col-md-4 col-lg-2">
                  <button  id="UpgradeButton" class="btn btn-block btn-lg btn-white">Upgrade</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
            
      <div id = "resultText" class="container text-white">
      </div>

    </section>
   <?php include'include/footer.php'?>
