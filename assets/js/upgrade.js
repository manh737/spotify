$('#UpgradeButton').click(function() {
    var redeem =  $(this);
    redeem.prop('disabled', true);
    setTimeout(function() {
        redeem.prop('disabled', false);
    }, 3000);
});

$('#lookupButton').click(function() {
    var redeem =  $(this);
    redeem.prop('disabled', true);
    setTimeout(function() {
        redeem.prop('disabled', false);
    }, 3000);
});


$(document).ready(function () {
    country = $('#country');
    redeemButton = $('#UpgradeButton');
    countryInput = $('#country');
    keyInput = $('#key');
    resultText = $('#resultText');
    lookupButton = $('#lookupButton');
    
        function upgrade(country, key) {
		resultText.html('<a style="color: white; font-size: 20px; font-weight: bold;">Upgrading with your key, please be patient..</a>');
        $.ajax({
            method: 'GET',
            url: 'https://spoty.gg/api/v2/?action=upgrade',
            data: {
                'country': country,
                'key': key
            },
            success: function (response) { // What to do if we succeed
                 data = response;
                 console.log(data);
				window.setTimeout(function(){
                if (data['status'] === false) { //show error
                    resultText.html('<div class="row"><div class="col-12 mb-0"><h2 class="eyebrow mb-2">Output:</h2></div><div class="col"><span class="job row align-items-center"><span class="col-md-6 fs-22 font-weight-light text-white">Failure!</span><span class="col-md-3">Error: '+data.data['message']+'</span><a target="_blank" href="'+data.data['link']+'" class="col-md-3">Couldn\'t retreive invite!</a></span></div></div>');
                } else {
                	  
                    resultText.html('<div class="row"><div class="col-12 mb-0"><h2 class="eyebrow mb-2">Output:</h2></div><div class="col"><span class="job row align-items-center"><span class="col-md-6 fs-22 font-weight-light text-white">Success!</span><span class="col-md-3">Address: '+data.data['address']+'</span><a target="_blank" href="https://www.spotify.com/us/family/join/invite/'+data.data['link']+'" class="col-md-3">Click to accept invite!</a></span></div></div>');
                    
                }
				}, 1000);
            }
        });
    }
        function lookupRequest( key) {
		resultText.html('<a style="color: white; font-size: 20px; font-weight: bold;">Upgrading with your key, please be patient..</a>');
        $.ajax({
            method: 'GET',
            url: 'https://spoty.gg/api/v2/?action=check&display=last',
            data: {
                'key': key
            },
            success: function (response) { // What to do if we succeed
                data = response;
                console.log(unescape(data.data.upgrades[0]['address']));
				window.setTimeout(function(){
                if (data['status'] === false) { //show error
                    resultText.html('<div class="row"><div class="col-12 mb-0"><h2 class="eyebrow mb-2">Output:</h2></div><div class="col"><span class="job row align-items-center"><span class="col-md-6 fs-22 font-weight-light text-white">Failure!</span><span class="col-md-3">Error: '+data.data['message']+'</span><a target="_blank" href="https://www.spotify.com/us/family/join/invite/'+data.data['link']+'" class="col-md-3">Couldn\'t retreive invite!</a></span></div></div>');
                } else {
                	  
                    resultText.html('<div class="row"><div class="col-12 mb-0"><h2 class="eyebrow mb-2">Output:</h2></div><div class="col"><span class="job row align-items-center"><span class="col-md-6 fs-22 font-weight-light text-white">Success!</span><span class="col-md-3">Address: '+unescape(data.data.upgrades[0]['address'])+'</span><a target="_blank" href="https://www.spotify.com/us/family/join/invite/'+data.data.upgrades[0]['invite_token']+'" class="col-md-3">Click to accept invite!</a></span></div></div>');
                    }
				}, 1000);
            }
        });
    }
    
        redeemButton.click(function (e) {
        upgrade(countryInput.val(), keyInput.val());
        });
           lookupButton.click(function (e) {
        lookupRequest(keyInput.val());
        });
});