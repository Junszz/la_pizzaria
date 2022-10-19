// global var
var javaPrice = 2.00;
var cafeSPrice = 2.00;
var cafeDPrice = 3.00;
var cappSPrice = 4.75;
var cappDPrice = 5.75;

function chkPrice(num) {
    // must give 2 decimal places
    var ok = num.search(/^\d+\.\d{2}$/);

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
        var javaNewPrice = prompt("Enter new price for Just Java (Ex: 2.00)\n", "");
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
        var cafeNewSPrice = prompt("Enter new price for Single Cafe au Lait (Ex: 2.00)\n", "");
        var cafeNewDPrice = prompt("Enter new price for Double Cafe au Lait (Ex: 2.00)\n", "");
    } 

    // Uncheck checkbox if user cancel
    if(cafeNewSPrice == null && cafeNewDPrice == null){
        cafeBox.checked = false;
        return false; // break operation here if cancelled
    }

    // Check format
    if(cafeNewSPrice == null){
        if(cafeNewDPrice){
            var correctD = chkPrice(cafeNewDPrice);

            if(correctD){
                cafeDPrice = cafeNewDPrice;
                document.getElementById("cafeDNewPrice").textContent = cafeDPrice;
            }
            else{
                alert("The price for Double Cafe au Lait ($" + cafeNewDPrice + ") is not in the correct format.");
                return false;
            }
        }
        else
            return false;
    }
    
    if(cafeNewDPrice == null){
        if(cafeNewSPrice){
            var correctS = chkPrice(cafeNewSPrice);

            if(correctS){
                cafeSPrice = cafeNewSPrice;
                document.getElementById("cafeSNewPrice").textContent = cafeSPrice;
            }
            else{
                alert("The price for Single Cafe au Lait ($" + cafeNewSPrice + ") is not in the correct format.");
                return false;
            }
        }
        else
            return false;
    }

    // case where both are not null
    if(cafeNewSPrice && cafeNewDPrice) {
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
        var cappNewSPrice = prompt("Enter new price for Single Iced Cappucino (Ex: 2.00)\n", "");
        var cappNewDPrice = prompt("Enter new price for Double Iced Cappucino (Ex: 2.00)\n", "");
    } 

    // Uncheck checkbox if user cancel
    if(cappNewSPrice == null && cappNewDPrice == null){
        cappBox.checked = false;
        return false; // break operation here if cancelled
    }

    // Check format
    if(cappNewSPrice == null){
        if(cappNewDPrice){
            var correctD = chkPrice(cappNewDPrice);

            if(correctD){
                cappDPrice = cappNewDPrice;
                document.getElementById("cappDNewPrice").textContent = cappDPrice;
            }
            else{
                alert("The price for Double Iced Cappucino ($" + cappNewDPrice + ") is not in the correct format.");
            }
        }
        else
            return false;
    }
    
    if(cappNewDPrice == null){
        if(cappNewSPrice){
            var correctS = chkPrice(cappNewSPrice);

            if(correctS){
                cappSPrice = cappNewSPrice;
                document.getElementById("cappSNewPrice").textContent = cappSPrice;
            }
            else{
                alert("The price for Single Iced Cappucino ($" + cappNewSPrice + ") is not in the correct format.");
            }
        }
        else
            return false;
    }

    // case where both are not null
    if(cappNewSPrice && cappNewDPrice) {
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