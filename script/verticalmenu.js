let menu1 = document.querySelector('.seclist-01');
let clck1 = document.querySelector('.btnfil');

let menu2 = document.querySelector('.seclist-02');
let clck2 = document.querySelector('.btnbri');

let menu3 = document.querySelector('.seclist-03');
let clck3 = document.querySelector('.btncon');

let menu4 = document.querySelector('.seclist-04');
let clck4 = document.querySelector('.btnsmo');

clck1.addEventListener("click", () => {

        const style = window.getComputedStyle(menu1);

        const displayValue = style.getPropertyValue("display");

        if(displayValue == "none"){
            menu1.style.display = "flex";
        }
        else{
            menu1.style.display = "none";
        }

    });

clck2.addEventListener("click", () => {

        const style = window.getComputedStyle(menu2);

        const displayValue = style.getPropertyValue("display");

        if(displayValue == "none"){
            menu2.style.display = "flex";
        }
        else{
            menu2.style.display = "none";
        }

    });

clck3.addEventListener("click", () => {

        const style = window.getComputedStyle(menu3);

        const displayValue = style.getPropertyValue("display");

        if(displayValue == "none"){
            menu3.style.display = "flex";
        }
        else{
            menu3.style.display = "none";
        }

    });

clck4.addEventListener("click", () => {

        const style = window.getComputedStyle(menu4);

        const displayValue = style.getPropertyValue("display");

        if(displayValue == "none"){
            menu4.style.display = "flex";
        }
        else{
            menu4.style.display = "none";
        }

    });