$(document).ready(function () {
  var keyInput = $("#infokey");
  var lookupButton = $("#lookupButton");
  var resultText = $("#resultText");

  function redeemRequest(key) {
    $(resultText).text("Checking your key, please be patient.");
    $.ajax({
      method: "GET",
      url: "https://spotisave.com/api/lookup",
      data: {
        key: key,
      },
      success: function (response) {
        // What to do if we succeed
        data = JSON.parse(response);
        dataMessage = data["message"][0];
        $(resultText).text("");
        if (data["status"] == 0) {
          //show error
          resultText.text(data["message"]);
        } else {
          resultText.html(
            '<div class="row"><div class="col-12 mb-0"><h2 class="eyebrow mb-2">Output:</h2></div><div class="col"><span class="job row align-items-center"><span class="col-md-6 fs-22 font-weight-light text-white">Success!</span><span class="col-md-3">Address: ' +
              dataMessage["address"] +
              '</span><a target="_blank" href="' +
              dataMessage["link"] +
              '" class="col-md-3">Click to accept invite!</a></span></div></div>'
          );
        }
      },
    });
  }

  lookupButton.click(function (e) {
    redeemRequest(keyInput.val());
  });
});
