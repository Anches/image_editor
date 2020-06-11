let menu = document.querySelector('.menu_little');
let img = document.querySelector('.down_btn');


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
