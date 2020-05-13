<?php
	
		include'include/header.php';
?>


    <section class="bg-primary hero hero-with-header">
      <center><div class="container text-white">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <h1 class="mb-0">Find <b>your</b> upgrade info.</h1>
          </div>
        </div>
      </div> </center>   
    </section>


  

    <section class="bg-primary text-white separator-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Enter your key, select your country click check!</h2> 
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form>
              <div class="form-row">
                <div class="form-group col-md-5 col-lg-6">
                  <input class="form-control form-control-lg" id="infokey" placeholder="Your Key">
                </div>
                <div class="form-group col-md-4 col-lg-2">
                  <button id="lookupButton" class="btn btn-block btn-lg btn-white">Check</button>
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
