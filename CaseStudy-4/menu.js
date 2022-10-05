var javaPrice = 2;
var cafeSPrice = 2;
var cafeDPrice = 3;
var cappSPrice = 4.75;
var cappDPrice = 5.75;

function updatePrice() {
    // Get the checkbox
    var javaBox = document.getElementById("javaCheck");
    var cafeBox = document.getElementById("cafeCheck");
    var cappBox = document.getElementById("cappCheck");

    // If the checkbox is checked
    if (javaBox.checked == true){
        // get new price
        javaPrice = prompt("Enter new price for Just Java \n", "");
        // print new price  
        document.getElementById("javaNewPrice").textContent = javaPrice;
        // reset button to false
        javaBox.checked = false;
    } 
    if (cafeBox.checked == true) {
        // get new price
        cafeSPrice = prompt("Enter new price for Single Cafe au Lait \n", "");
        cafeDPrice = prompt("Enter new price for Double Cafe au Lait \n", "");
        // print new price
        document.getElementById("cafeSNewPrice").textContent = cafeSPrice;
        document.getElementById("cafeDNewPrice").textContent = cafeDPrice;
        // reset button to false
        cafeBox.checked = false;
    }
    if (cappBox.checked == true) {
        // get new price
        cappSPrice = prompt("Enter new price for Single Cafe au Lait \n", "");
        cappDPrice = prompt("Enter new price for Double Cafe au Lait \n", "");
        // print new price
        document.getElementById("cappSNewPrice").textContent = cappSPrice;
        document.getElementById("cappDNewPrice").textContent = cappDPrice;
        // reset button to false
        cappBox.checked = false;
    }
}

function debug() {
    document.write(javaPrice +','+ cafeSPrice+ ','+ cafeDPrice+ ','+ cappSPrice+ ','+ cappDPrice);
}

/* 
    1. Tick checkbox
    2. Prompt user
    3. Get new price
    4. Update display
*/