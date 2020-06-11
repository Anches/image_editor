let menu = document.querySelector('.phpmenu');
let img = document.querySelector('.menuimg');


    img.addEventListener("click", () => {

        const style = window.getComputedStyle(menu);

        const displayValue = style.getPropertyValue("display");

        if(displayValue == "none"){
            menu.style.display = "block";
        }
        else{
            menu.style.display = "none";
        }

    });
