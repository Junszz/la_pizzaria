// global var
var cafe_single_qty = null;
var cafe_double_qty = null;
var capp_single_qty = null;
var capp_double_qty = null;
var javaSubtotal = null;
var cafeSubtotal = null;
var cappSubtotal = null;
var cafeSubtotal_single = null;
var cafeSubtotal_double = null;
var cappSubtotal_single = null;
var cappSubtotal_double = null;


function java_subtotal(javaprice){
  var java = document.getElementById("javaqty");
  var javaqty = java.value;
  
  var pos = javaqty.search(/^[0-9]+$/);

  if (pos != 0){
    alert("Please insert valid quantity(i.e. integer which is larger than or equal to 0)");
    javaSubtotal = 0;
    document.getElementById("output1").textContent = "$" +javaSubtotal;
    java.focus();
    java.value = '';}
  else {
    if (javaqty>=0){
      javaSubtotal = javaqty * javaprice;
      //display java subtotal
      document.getElementById("output1").textContent = "$" +javaSubtotal;
    }
    else {
      javaSubtotal = 0;
      document.getElementById("output1").textContent = "$" +javaSubtotal;
      alert("Please insert valid quantity(i.e. larger than or equal to 0)");
      java.focus();
      java.value = '';
      //return false;
    }
  }
  // call total func
  total();
    
}

function cafeqty_check(){
  var cafeS = document.getElementById("cafeSqty");
  var cafeD = document.getElementById("cafeDqty");
  var cafeSqty = cafeS.value;
  var cafeDqty = cafeD.value;
  var pos1 = cafeSqty.search(/^[0-9]+$/);
  var pos2 = cafeDqty.search(/^[0-9]+$/);

  if (pos1 )

}

function cafe_subtotal(cafeSprice, cafeDprice){
  var cafeS = document.getElementById("cafeSqty");
  var cafeD = document.getElementById("cafeDqty");
  var cafeSqty = cafeS.value;
  var cafeDqty = cafeD.value;
  /* if (cafeS.value != 0){
    var cafeSqty = cafeS.value;
  }
  else{
    var cafeSqty = 0;
  }
  var cafeDqty = cafeD.value;

  var pos1 = cafeSqty.search(/^[0-9]+$/);
  var pos2 = cafeDqty.search(/^[0-9]+$/);
  // var checking
  if (pos1 != 0 || pos2 != 0){
    alert("Please insert valid quantity(i.e. integer which is larger than or equal to 0)");
    cafeSubtotal = 0;
    document.getElementById("output1").textContent = "$" +cafeSubtotal;
    cafe.focus();
    cafe.value = '';} */

  if (cafeSqty >= 0){
    cafe_single_qty = cafeSqty;
    cafeSubtotal_single = cafe_single_qty * cafeSprice;
    cafeSubtotal = cafeSubtotal_single + cafeSubtotal_double;
    document.getElementById("output2").textContent = '$' + cafeSubtotal;
  }
  if (cafeSqty < 0){
    cafeSubtotal_single = 0;
    cafeSubtotal = cafeSubtotal_single + cafeSubtotal_double;
    document.getElementById("output2").textContent = '$' + cafeSubtotal;
    alert("Please insert valid quantity(i.e. larger than or equal to 0)");
    cafeS.focus();
    cafeS.value='';
  }
  if (cafeDqty >= 0){
    cafe_double_qty = cafeDqty;
    cafeSubtotal_double = cafe_double_qty * cafeDprice;
    cafeSubtotal = cafeSubtotal_single + cafeSubtotal_double;
    document.getElementById("output2").textContent = '$' + cafeSubtotal;
  }
  if (cafeDqty < 0) {
    cafeSubtotal_double = 0;
    cafeSubtotal = cafeSubtotal_single + cafeSubtotal_double;
    document.getElementById("output2").textContent = '$' + cafeSubtotal;
    alert("Please insert valid quantity(i.e. larger than or equal to 0)");
    cafeD.focus();
    cafeD.value='';
  }

  // Update total price
  total();
}

function capp_subtotal(cappSprice, cappDprice){
  var cappS = document.getElementById("cappSqty");
  var cappD = document.getElementById("cappDqty");
  var cappSqty = cappS.value;
  var cappDqty = cappD.value;

  if (cappSqty >= 0){
    capp_single_qty = cappSqty;
    cappSubtotal_single = capp_single_qty * cappSprice;
    cappSubtotal = cappSubtotal_single + cappSubtotal_double;
    document.getElementById("output3").textContent = '$' + cappSubtotal;
  }
  if (cappSqty < 0){
    cappSubtotal_single = 0;
    cappSubtotal = cappSubtotal_single + cappSubtotal_double;
    document.getElementById("output3").textContent = '$' + cappSubtotal;
    alert("Please insert valid quantity(i.e. larger than or equal to 0)");
    cappS.focus();
    cappS.value='';
  }
  if (cappDqty >= 0){
    capp_double_qty = cappDqty;
    cappSubtotal_double = capp_double_qty * cappDprice;
    cappSubtotal = cappSubtotal_single + cappSubtotal_double;
    document.getElementById("output3").textContent = '$' + cappSubtotal;
  }
  if (cappDqty < 0) {
    cappSubtotal_double = 0;
    cappSubtotal = cappSubtotal_single + cappSubtotal_double;
    document.getElementById("output3").textContent = '$' + cappSubtotal;
    alert("Please insert valid quantity(i.e. larger than or equal to 0)");
    cappD.focus();
    cappD.value='';
  }
  // var checking
  /* if (cappSqty > 0){
    capp_single_qty = cappSqty;
  }
  else {
    alert("Please insert valid quantity(i.e. larger than or equal to 0)");
    javaqty.focus();
    javaqty.select();
    return false;
  }
  if (cappDqty > 0){
    capp_double_qty = cappDqty;
  }
  else {
    alert("Please insert valid quantity(i.e. larger than or equal to 0)");
    cappDqty.focus();
    cappDqty.select();
    return false;
  }

  cappSubtotal = capp_single_qty * cappSprice + cappDqty * cappDprice;

  console.log(cappSubtotal);

  //display cappacino subtotal
  document.getElementById("output3").textContent = "Subtotal:\n" + '$' + cappSubtotal; */

  // call total func
  total();
}

function total(){
  console.log(javaSubtotal+","+cafeSubtotal+","+cappSubtotal);
  var total = javaSubtotal+cafeSubtotal+cappSubtotal;
  document.getElementById("total").textContent = "Total: " + '$' + total;
}