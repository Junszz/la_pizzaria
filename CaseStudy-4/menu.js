// global var
var javaPrice = 2.00;
var cafeSPrice = 2.00;
var cafeDPrice = 3.00;
var cappSPrice = 4.75;
var cappDPrice = 5.75;

function chkPrice(num) {
    // /^\d{3}-\d{4}$/
    var ok = num.search(/^\d+\.\d{0,2}$/);

    if (ok == 0) {
        return true;
    }
    else
        return false;
}
    
function updateJavaPrice() {
    // Get the checkbox
    var javaBox = document.getElementById("javaCheck");

    // If the checkbox is checked
    if (javaBox.checked == true){
        // get new price
        var javaNewPrice = prompt("Enter new price for Just Java \n", "");
    } 

    // Uncheck checkbox if user cancel
    if(javaNewPrice == null){
        javaBox.checked = false;
        return false; //break operation here if cancelled
    }

    // Check format
    var correct = chkPrice(javaNewPrice);

    if(correct){
        javaPrice = javaNewPrice;
        // print new price  
        document.getElementById("javaNewPrice").textContent = javaPrice;
    }
    else{
        alert("The price entered ($" + javaNewPrice + ") is not in the correct format.");
    }

    // reset button to false
    javaBox.checked = false;
}

function updateCafePrice() {
    // Get the checkbox
    var cafeBox = document.getElementById("cafeCheck");

    // If the checkbox is checked
    if (cafeBox.checked == true){
        // get new price
        var cafeNewSPrice = prompt("Enter new price for Single Cafe au Lait \n", "");
        var cafeNewDPrice = prompt("Enter new price for Double Cafe au Lait \n", "");
    } 

    // Uncheck checkbox if user cancel
    if(cafeNewSPrice == null || cafeNewDPrice == null){
        cafeBox.checked = false;
        return false; // break operation here if cancelled
    }

    // Check format
    var correctS = chkPrice(cafeNewSPrice);
    var correctD = chkPrice(cafeNewDPrice);

    if(correctS && correctD){
        cafeSPrice = cafeNewSPrice;
        cafeDPrice = cafeNewDPrice;
        // print new price  
        document.getElementById("cafeSNewPrice").textContent = cafeSPrice;
        document.getElementById("cafeDNewPrice").textContent = cafeDPrice;
    }
    if(!correctS){
        alert("The price for Single Cafe au Lait ($" + cafeNewSPrice + ") is not in the correct format.");
    }
    if(!correctD){
        alert("The price for Double Cafe au Lait ($" + cafeNewDPrice + ") is not in the correct format.");
    }
    
    // reset button to false
    cafeBox.checked = false;
}

function updateCappPrice() {
    // Get the checkbox
    var cappBox = document.getElementById("cappCheck");

    // If the checkbox is checked
    if (cappBox.checked == true){
        // get new price
        var cappNewSPrice = prompt("Enter new price for Single Cappucino \n", "");
        var cappNewDPrice = prompt("Enter new price for Double Cappucino \n", "");
    } 

    // Uncheck checkbox if user cancel
    if(cappNewSPrice == null || cappNewDPrice == null){
        cafeBox.checked = false;
        return false; // break operation here if cancelled
    }

    // Check format
    var correctS = chkPrice(cappNewSPrice);
    var correctD = chkPrice(cappNewDPrice);

    if(correctS && correctD){
        cappSPrice = cappNewSPrice;
        cappDPrice = cappNewDPrice;
        // print new price  
        document.getElementById("cappSNewPrice").textContent = cappSPrice;
        document.getElementById("cappDNewPrice").textContent = cappDPrice;
    }

    if(!correctS){
        alert("The price for Single Cafe au Lait ($" + cappNewSPrice + ") is not in the correct format.");
    }
    if(!correctD){
        alert("The price for Double Cafe au Lait ($" + cappNewDPrice + ") is not in the correct format.");
    }
    
    // reset button to false
    cappBox.checked = false;
}

/* 
    1. Tick checkbox
    2. Prompt user
    3. Get new price
    4. Update display
*/