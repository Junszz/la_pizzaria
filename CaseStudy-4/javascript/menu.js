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

var cafeSqty = 0;
var cafeDqty = 0;
var g_cafeSprice = 0; 
var g_cafeDprice = 0;
var cappSqty = 0;
var cappDqty = 0;
var g_cappSprice = 0; 
var g_cappDprice = 0;

function java_subtotal(javaprice){
  var java = document.getElementById("javaqty");
  var javaqty = java.value;
  
  var pos = javaqty.search(/^[0-9]+$/);

  if (pos != 0){
    alert("Please insert valid quantity(i.e. integer which is larger than or equal to 0)");
    javaSubtotal = 0;
    document.getElementById("output1").textContent = "$" +javaSubtotal;
    java.focus();
    java.value = '';
  }
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

function check_cafe_single(cafeSprice, cafeDprice){
  g_cafeSprice = cafeSprice;
  g_cafeDprice = cafeDprice;
  var cafeS = document.getElementById("cafeSqty");
  cafeSqty = cafeS.value;
  var pos1 = cafeSqty.search(/^[0-9]+$/);

  if(pos1 != 0){
    alert("Please insert valid quantity(i.e. integer which is larger than or equal to 0)");
    cafeS.focus();
    cafeS.value = '';
    cafeSqty = 0;
  }
  else{
    console.log("Pass checking");
  }
  cafe_subtotal();
}

function check_cafe_double(cafeSprice, cafeDprice){
  g_cafeSprice = cafeSprice;
  g_cafeDprice = cafeDprice;
  var cafeD = document.getElementById("cafeDqty");
  cafeDqty = cafeD.value;
  var pos2 = cafeDqty.search(/^[0-9]+$/);

  if(pos2 != 0){
    alert("Please insert valid quantity(i.e. integer which is larger than or equal to 0)");
    cafeD.focus();
    cafeD.value = '';
    cafeDqty = 0;
  }
  else{
    console.log("Pass checking");
  }
  cafe_subtotal();
}


function cafe_subtotal(){
  if (cafeSqty >= 0){
    cafe_single_qty = cafeSqty;
    cafeSubtotal_single = cafe_single_qty * g_cafeSprice;
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
    cafeSubtotal_double = cafe_double_qty * g_cafeDprice;
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

function check_capp_single(cappSprice, cappDprice){
  g_cappSprice = cappSprice;
  g_cappDprice = cappDprice;
  var cappS = document.getElementById("cappSqty");
  cappSqty = cappS.value;
  var pos1 = cappSqty.search(/^[0-9]+$/);

  if(pos1 != 0){
    alert("Please insert valid quantity(i.e. integer which is larger than or equal to 0)");
    cappS.focus();
    cappS.value = '';
    cappSqty = 0;
  }
  else{
    console.log("Pass checking");
  }
  capp_subtotal();
}

function check_capp_double(cappSprice, cappDprice){
  g_cappSprice = cappSprice;
  g_cappDprice = cappDprice;
  var cappD = document.getElementById("cappDqty");
  cappDqty = cappD.value;
  var pos2 = cappDqty.search(/^[0-9]+$/);

  if(pos2 != 0){
    alert("Please insert valid quantity(i.e. integer which is larger than or equal to 0)");
    cappD.focus();
    cappD.value = '';
    cappDqty = 0;
  }
  else{
    console.log("Pass checking");
  }
  capp_subtotal();
}

function capp_subtotal(cappSprice, cappDprice){
  if (cappSqty >= 0){
    capp_single_qty = cappSqty;
    cappSubtotal_single = capp_single_qty * g_cappSprice;
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
    cappSubtotal_double = capp_double_qty * g_cappDprice;
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

  // call total func
  total();
}

function total(){
  console.log(javaSubtotal+","+cafeSubtotal+","+cappSubtotal);
  var total = javaSubtotal+cafeSubtotal+cappSubtotal;
  document.getElementById("total").textContent = "Total: " + '$' + total;
}