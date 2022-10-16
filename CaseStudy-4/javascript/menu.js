// global var
var cafe_price = null;
var capp_price = null;
var prev = null;
var javaSubtotal = null;
var cafeSubtotal = null;
var cappSubtotal = null;

function updateCafePrice(price) {
  switch(price){
    case 2:  //when single had been chosen
      cafe_price = 2.00;
      break;
    case 3:  //when double had been chosen
      cafe_price = 3.00;
      break;
  }
  //when user changes the option from single to double or vice versa, the subtotal will be updated accordingly
  if(prev != price){
    cafe_subtotal();
  }

  prev = price;
}

function updateCappPrice(price) {
  switch(price){
    case 4.75:  //when single had been chosen
      capp_price = 4.75;
      break;
    case 5.75:  //when double had been chosen
      capp_price = 5.75;
      break;
  }
  
  //when user changes the option from single to double or vice versa, the subtotal will be updated accordingly
  if(prev != price){
    capp_subtotal();
  }
  prev = price;
}

function java_subtotal(){
  var javaqty = document.getElementById("javaqty").value;
  javaSubtotal = javaqty * 2;
  
  //display java subtotal
  document.getElementById("output1").textContent = "Subtotal:\n" + '$' + javaSubtotal;
  
  // call total func
  total();
}

function cafe_subtotal(){
  var cafeqty = document.getElementById("cafeqty").value;

  if(cafe_price) {
    cafeSubtotal = cafeqty * cafe_price;

    //display cafe subtotal
    document.getElementById("output2").textContent = "Subtotal:\n" + '$' + cafeSubtotal;
  }
  // call total func
  total();
}
function capp_subtotal(){
  var cappqty = document.getElementById("cappqty").value;

  if(capp_price) {
    cappSubtotal = cappqty * capp_price;

    //display cappacino subtotal
    document.getElementById("output3").textContent = "Subtotal:\n" + '$' + cappSubtotal;
  }
  // call total func
  total();
}

function total(){
  console.log(javaSubtotal+","+cafeSubtotal+","+cappSubtotal);
  var total = javaSubtotal+cafeSubtotal+cappSubtotal;
  document.getElementById("total").textContent = "Total: " + '$' + total;
}