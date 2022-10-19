// global var
var java_sucess = false;
var cafe_sucess = false;
var capp_sucess = false;

function java_latest() {
  var java = document.getElementById("java_new");
  var javaqty = java.value;

  if (javaqty < 0) {
    alert("Please insert valid price(i.e. larger than or equal to 0)");
    java.focus();
    java.value = "";
    java_sucess = false;
  }
  else {
    java_sucess = true;
  }
}

// function cafe_latest() {
//   var cafe = document.getElementById("cafe_new");
//   var cafe_radio = document.getElementByName("cafechoice");
//   var cafeqty = cafe.value;

//   if (cafeqty < 0) {
//     alert("Please insert valid price(i.e. larger than or equal to 0)");
//     cafe.focus();
//     cafe.value = "";
//     cafe_sucess = false;
//   }
//   else {
//     if (cafe_radio){
//       cafe_sucess = true;
//     }
//     else{
//       alert("Please select type (single/double)");
//       cafe_sucess = false;
//     }
//   }
// }

function cafe_latest() {
    var cafe = document.getElementById("cafe_new");
    var cafe_radio1 = document.getElementById("cafechoice1").checked;
    var cafe_radio2 = document.getElementById("cafechoice2").checked;
    var cafeqty = cafe.value;

    if (cafeqty < 0) {
      alert("Please insert valid price(i.e. larger than or equal to 0)");
      cafe.focus();
      cafe.value = "";
      cafe_sucess = false;
    }
    else {
      if (cafe_radio1 || cafe_radio2){
        cafe_sucess = true;
      }
      else{
        alert("Please select type (single/double)");
        cafe.focus();
        cafe.value = "";
        cafe_sucess = false;
      }
    }
}

function capp_latest() {
  var capp = document.getElementById("capp_new");
  var capp_radio1 = document.getElementById("cappchoice1").checked;
  var capp_radio2 = document.getElementById("cappchoice2").checked;
  var cappqty = capp.value;

  if (cappqty < 0) {
    alert("Please insert valid price(i.e. larger than or equal to 0)");
    capp.focus();
    capp.value = "";
    capp_sucess = false;
  }
  else {
    if (capp_radio1 || capp_radio2){
      capp_sucess = true;
    }
    else{
      alert("Please select type (single/double)");
      capp.focus();
      capp.value = "";
      capp_sucess = false;
    }
  }
}

function update_success() {
  if (java_sucess || capp_sucess || cafe_sucess){
    alert("Update successful!");
  }
  else {
    alert("No new price received!");
  }
  // reset var to false;
  java_sucess = false;
  cafe_sucess = false;
  capp_sucess = false;
}
