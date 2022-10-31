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