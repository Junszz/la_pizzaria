// global var
var cafe_single_qty = null;
var cafe_double_qty = null;
var capp_single_qty = null;
var capp_double_qty = null;
var javaSubtotal = null;
var cafeSubtotal = null;
var cappSubtotal = null;

function java_subtotal(javaprice){
  // console.log("Receive price from php: ");
  // console.log(javaprice);
  var javaqty = document.getElementById("javaqty").value;
  javaSubtotal = javaqty * javaprice;
  
  //display java subtotal
  document.getElementById("output1").textContent = "Subtotal:\n" + '$' + javaSubtotal;
  
  // call total func
  total();
}

function cafe_subtotal(cafeSprice, cafeDprice){
  var cafeSqty = document.getElementById("cafeSqty").value;
  var cafeDqty = document.getElementById("cafeDqty").value;

  // var checking
  if (cafeSqty > 0){
    cafe_single_qty = cafeSqty;
  }
  if (cafeDqty > 0){
    cafe_double_qty = cafeDqty;
  }

  cafeSubtotal = cafe_single_qty * cafeSprice + cafe_double_qty * cafeDprice;

  // console.log(cafeSubtotal);

  //display cafe subtotal
  document.getElementById("output2").textContent = "Subtotal:\n" + '$' + cafeSubtotal;

  // Update total price
  total();
}

function capp_subtotal(cappSprice, cappDprice){
  var cappSqty = document.getElementById("cappSqty").value;
  var cappDqty = document.getElementById("cappDqty").value;

  // var checking
  if (cappSqty > 0){
    capp_single_qty = cappSqty;
  }
  if (cappDqty > 0){
    capp_double_qty = cappDqty;
  }

  cappSubtotal = capp_single_qty * cappSprice + cappDqty * cappDprice;

  console.log(cappSubtotal);

  //display cappacino subtotal
  document.getElementById("output3").textContent = "Subtotal:\n" + '$' + cappSubtotal;

  // call total func
  total();
}

function total(){
  console.log(javaSubtotal+","+cafeSubtotal+","+cappSubtotal);
  var total = javaSubtotal+cafeSubtotal+cappSubtotal;
  document.getElementById("total").textContent = "Total: " + '$' + total;
}