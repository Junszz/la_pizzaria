function java_latest() {
  var java = document.getElementById("java_new");
  var javaqty = java.value;

  if (javaqty < 0) {
    alert("Please insert valid price(i.e. larger than or equal to 0)");
    java.focus();
    java.value = "";
  }
}

function cafe_latest() {
  var cafe = document.getElementById("cafe_new");
  var cafeqty = cafe.value;

  if (cafeqty < 0) {
    alert("Please insert valid price(i.e. larger than or equal to 0)");
    cafe.focus();
    cafe.value = "";
  }
}

function capp_latest() {
  var capp = document.getElementById("capp_new");
  var cappqty = capp.value;

  if (cappqty < 0) {
    alert("Please insert valid price(i.e. larger than or equal to 0)");
    capp.focus();
    capp.value = "";
  }
}
