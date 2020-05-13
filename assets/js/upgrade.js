$("#UpgradeButton").click(function () {
  var redeem = $(this);
  redeem.prop("disabled", true);
  setTimeout(function () {
    redeem.prop("disabled", false);
  }, 3000);
});
$(document).ready(function () {
  countries = [
    ["US", "United States"],
    ["UK", "Great Britain"],
    ["DE", "Germany"],
    ["CA", "Canada"],
    ["AU", "Australia"],
    ["IT", "Italy"],
    ["NZ", "New Zealand"],
    ["MX", "Mexico"],
    ["BE", "Belgium"],
    ["FR", "France"],
    ["ID", "Indonesia"],
    ["SG", "Singapore"],
    ["BR", "Brazil"],
    ["MY", "Malaysia"],
    ["PT", "Portugal"],
    ["DK", "Denmark"],
    ["NL", "Netherlands"],
    ["ES", "Spain"],
    ["SE", "Sweden"],
    ["NO", "Norway"],
    ["TR", "Turkey"],
    ["CR", "Costa Rica"],
    ["PA", "Panama"],
    ["IS", "Iceland"],
    ["AR", "Argentina"],
    ["AT", "Austria"],
    ["CZ", "Czech Republic"],
    ["CH", "Switzerland"],
    ["FI", "Finland"],
    ["IE", "Ireland"],
    ["TH", "Thailand"],
    ["PH", "Philippines"],
    ["CL", "Chile"],
    ["HK", "Hong Kong"],
    ["JP", "Japan"],
    ["UY", "Uruguay"],
    ["TW", "Taiwan"],
    ["PL", "Poland"],
    ["HU", "Hungary"],
    ["BG", "Bulgaria"],
    ["DO", "Dominican Republic"],
    ["LU", "Luxembourg"],
  ];
  country = $("#country");
  redeemButton = $("#UpgradeButton");
  countryInput = $("#country");
  keyInput = $("#key");
  resultText = $("#resultText");

  stockRequest();
  function upgrade(country, key) {
    resultText.html(
      '<a style="color: white; font-size: 20px; font-weight: bold;">Upgrading with your key, please be patient..</a>'
    );
    $.ajax({
      method: "GET",
      url: "https://spotisave.com/api/redeem",
      data: {
        country: country,
        key: key,
      },
      success: function (response) {
        // What to do if we succeed
        data = JSON.parse(response);
        console.log(data);
        window.setTimeout(function () {
          if (data["status"] == 0 && data["Error"] === "No stock left.") {
            resultText.text("No stock left.");
          } else if (data["status"] == 0) {
            lookupRequest(key);
          } else {
            resultText.html(
              '<div class="row"><div class="col-12 mb-0"><h2 class="eyebrow mb-2">Output:</h2></div><div class="col"><span class="job row align-items-center"><span class="col-md-6 fs-22 font-weight-light text-white">Success!</span><span class="col-md-3">Address: ' +
                data.data["Adress"] +
                '</span><a target="_blank" href="' +
                data["Link"] +
                '" class="col-md-3">Click to accept invite!</a></span></div></div>'
            );
          }
        }, 1000);
      },
    });
  }
  function lookupRequest(key) {
    resultText.html(
      '<a style="color: white; font-size: 20px; font-weight: bold;">Upgrading with your key, please be patient..</a>'
    );
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
        window.setTimeout(function () {
          if (data["status"] == 0) {
            //show error
            resultText.html(
              '<div class="row"><div class="col-12 mb-0"><h2 class="eyebrow mb-2">Output:</h2></div><div class="col"><span class="job row align-items-center"><span class="col-md-9 fs-22 font-weight-light text-white">Failure!</span><a target="_blank" href="https://www.spotify.com/us/family/join/invite/" class="col-md-3">Couldn\'t retreive invite!</a></span></div></div>'
            );
          } else {
            resultText.html(
              '<div class="row"><div class="col-12 mb-0"><h2 class="eyebrow mb-2">Output:</h2></div><div class="col"><span class="job row align-items-center"><span class="col-md-6 fs-22 font-weight-light text-white">Success!</span><span class="col-md-3">Address: ' +
                dataMessage["address"] +
                '</span><a target="_blank" href="' +
                dataMessage["link"] +
                '" class="col-md-3">Click to accept invite!</a></span></div></div>'
            );
          }
        }, 1000);
      },
    });
  }

  function stockRequest() {
    countryInput.html("<option>Loading countries...</option>");
    $.ajax({
      method: "GET",
      url: "https://spotisave.com/api/stock",
      success: function (response) {
        // What to do if we succeed
        data = JSON.parse(response);

        countryInput.html("");

        countries.forEach(function (e) {
          countryInput.append(
            '<option value="' +
              e[0] +
              '"> ' +
              e[1] +
              " (" +
              data[e[0]] +
              ")</option>"
          );
        });
      },
    });
  }

  redeemButton.click(function (e) {
    upgrade(countryInput.val(), keyInput.val());
  });
});
