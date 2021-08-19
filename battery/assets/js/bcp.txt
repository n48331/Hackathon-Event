var c = document.getElementById("batCanvas");
var ctx = c.getContext("2d");

var batLevel = 0;

navigator.getBattery().then(function(battery) {
  function updateAllBatteryInfo() {
    updateChargeInfo();
    updateLevelInfo();
  }
  updateAllBatteryInfo();

  battery.addEventListener('chargingchange', function() {
    updateChargeInfo();
  });

  function updateChargeInfo() {
    console.log("Battery charging? " +
      (battery.charging ? "Yes" : "No"));

    if (battery.charging) {
      document.getElementById("bolt").style.visibility = "visible";

      console.log("imCharging");
      

    } 
    
    
    else {
      document.getElementById("bolt").style.visibility = "hidden";
      console.log("imNotCharging");

    }
  }

  battery.addEventListener('levelchange', function() {
    updateLevelInfo();
  });

  function updateLevelInfo() {

    var batteryL = battery.level;

    console.log("Battery level: " + battery.level * 100 + "%");
    if ((battery.level * 100)==28){
      window.location.replace("httmj.html");
    }

    batLevel = batteryL * 10;

    document.getElementById("BatteryLevel").innerHTML = '<p>' + Math.floor(batLevel * 10) + '%</p>';

    
  }

 
});