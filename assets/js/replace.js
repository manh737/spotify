$("#replaceButton").click(function () {
  var redeem = $(this);
  redeem.prop("disabled", true);
  setTimeout(function () {
    redeem.prop("disabled", false);
  }, 3000);
});

$(document).ready(function () {
  var replaceButton = $("#replaceButton");
  var keyInput = $("#replacekey");
  var redeemButton = $("#redeem_replace");
  var resultText = $("#replaceResultText");
  function replaceRequest(key) {
    $(resultText).text("Checking your key, please be patient.");
    $.ajax({
      method: "GET",
      url: "https://spotisave.com/api/replace",
      data: {
        key: key,
      },
      success: function (response) {
        // What to do if we succeed
        data = JSON.parse(response);
        window.setTimeout(function () {
          if (data["status"] == 0) {
            //show error
            resultText.text(data["message"]);
          } else {
            resultText.html(
              '<div class="row"><div class="col-12 mb-0"><h2 class="eyebrow mb-2">Output:</h2></div><div class="col"><span class="job row align-items-center"><span class="col-md-6 fs-22 font-weight-light text-white">Success!</span><span class="col-md-3">Address: ' +
                data["Adress"] +
                '</span><a target="_blank" href="' +
                data["Link"] +
                '" class="col-md-3">Click to accept invite!</a></span></div></div>'
            );
          }
        }, 1000);
      },
    });
  }

  replaceButton.click(function (e) {
    replaceRequest(keyInput.val());
  });
});
