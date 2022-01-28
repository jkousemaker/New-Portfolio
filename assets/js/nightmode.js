const slider = document.querySelector(".slider");
const localTheme = localStorage.getItem("darkMode");
let darkMode = false;

if (slider) {
    slider.addEventListener('click', swapTheme)
}

if (localTheme == "true"){
    swapTheme();
    document.querySelector(".theme-switch").checked = true;
}

function swapTheme() {
    const elements = document.querySelectorAll(".j-buttom, .dynamic-txts, .escape, .icefield, .zuzu, .footer, .b-dropdown, body, h1, h2, h3, h4, p, a, .card, .jumbotron");

    //For loop which enables themer styling for every selected element.
    for (let i = 0; i < elements.length; i++){
        elements[i].classList.toggle("themer");
    }
    
    //Stores veriable in local storage.
    if (darkMode){
        darkMode = false;
        localStorage.setItem("darkMode", darkMode);
    }
    else{
        darkMode = true;
        localStorage.setItem("darkMode", darkMode);
    }

    console.log("Dark mode is: " + darkMode);
}


console.log("nightmode js loaded");