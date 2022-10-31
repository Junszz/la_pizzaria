const plus1 = document.querySelector(".plus1"),
        minus1 = document.querySelector(".minus1"),
        num1 = document.querySelector(".num1");
        
        let a1 = 1;
        
        plus1.addEventListener("click", ()=>{
            a1++;
            a1 = (a1 < 10) ? "0" + a1 : a1;
            num1.innerText = a1;
            console.log(a1);
        });
        minus1.addEventListener("click", ()=>{
            if(a1 > 1){
                a1--;
                a1 = (a1 < 10) ? "0" + a1 : a1;
                num1.innerText = a1;
                console.log(a1);
            }
        });

        const plus2 = document.querySelector(".plus2"),
        minus2 = document.querySelector(".minus2"),
        num2 = document.querySelector(".num2");

        let a2 = 1;

        plus2.addEventListener("click", ()=>{
            a2++;
            a2 = (a2 < 10) ? "0" + a2 : a2;
            num2.innerText = a2;
            console.log(a2);
        });
        minus2.addEventListener("click", ()=>{
            if(a2 > 1){
                a2--;
                a2 = (a2 < 10) ? "0" + a2 : a2;
                num2.innerText = a2;
                console.log(a2);
            }
        });

        const plus3 = document.querySelector(".plus3"),
        minus3 = document.querySelector(".minus3"),
        num3 = document.querySelector(".num3");
        
        let a3 = 1;
        
        plus3.addEventListener("click", ()=>{
            a3++;
            a3 = (a3 < 10) ? "0" + a3 : a3;
            num3.innerText = a3;
            console.log(a3);
        });
        minus3.addEventListener("click", ()=>{
            if(a3 > 1){
                a3--;
                a3 = (a3 < 10) ? "0" + a3 : a3;
                num3.innerText = a3;
                console.log(a3);
            }
        });

        const plus4 = document.querySelector(".plus4"),
        minus4 = document.querySelector(".minus4"),
        num4 = document.querySelector(".num4");
        
        let a4 = 1;
        
        plus4.addEventListener("click", ()=>{
            a4++;
            a4 = (a4 < 10) ? "0" + a4 : a4;
            num4.innerText = a4;
            console.log(a4);
        });
        minus4.addEventListener("click", ()=>{
            if(a4 > 1){
                a4--;
                a4 = (a4 < 10) ? "0" + a4 : a4;
                num4.innerText = a4;
                console.log(a4);
            }
        });

        const form = document.getElementById('form');

        form.addEventListener('click', function handleClick(event) {
          // 👇️ if you are submitting a form (prevents page reload)
          event.preventDefault();
        
          const qty1 = document.getElementById('a1');
        
          // Send value to server
        //   console.log(qty1.value);
        
          // 👇️ clear input field
          //qty1.value = '1';
          num1.innerText = 'qty1';
        });