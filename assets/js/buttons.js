//Projects
const escapeRoom = document.querySelector(".escape");
const iceField = document.querySelector(".icefield")
const zuzu = document.querySelector(".zuzu");

//Email Form
const gmail = document.querySelector(".gmail");
const form = document.querySelector(".e-form");

//Socials
const instagram = document.querySelector(".instagram");
const socialInfo = document.querySelectorAll(".whatsapp, .snapchat");
const popUp = document.querySelector(".popup");

//Personal Info
const info = document.querySelector(".info");
const copyButton = document.querySelector(".copy-button");

//All pop ups
const popUps = document.querySelectorAll(".e-form, .popup");
const exit = document.querySelectorAll(".exit-button");

//Nightmode button
const burgerButton = document.querySelector(".burger");
const dropdownMenu = document.querySelector(".dropdown");
const bugerExit = document.querySelector(".b-exit");

let currentInfo = "";


//Porject Buttons
if(escapeRoom){
    escapeRoom.onclick = function() {
        window.open('https://jkousemaker.github.io/Escape-Room/index.html','mywindow');
    }
}

if(iceField){
    iceField.onclick = function() {
        window.open('https://icefield.company.site/','mywindow');
    }
}

if(zuzu){
    zuzu.onclick = function() {
        window.open('zuzu.php','mywindow');
    }
}

//Make pop ups hidden on exit press
if(popUps) {
    for (let i = 0; i < popUps.length; i++) {
        exit[i].addEventListener('click', (e) => {
            visibility(popUps[i], false, "open");
            switch(i) {
                case 0:
                    form.classList.add("open");
                    break;
                case 1:
                    console.log("1");
                    copyButton.textContent="Copy to clipboard";
                    break;
                case 2:
                    break;
            }
        })
    }
}

if(gmail){
    gmail.onclick = function() {
        visibility(form, true);
        form.classList.remove("open");
        console.log("hey");
    }
}

if(instagram){
    instagram.onclick = function () {
        window.open('https://www.instagram.com/icefieldoffical/', 'mywindow');
    }
}

if(socialInfo){
    for (let i = 0; i < socialInfo.length; i++) {
        socialInfo[i].addEventListener('click', (e) => {
            switch(i) {
                case 0:
                    currentInfo = "lilmogoal";
                    break;
                case 1:
                    currentInfo = "+31 6 12059599";
                    break;
            }
            console.log(currentInfo);
            visibility(popUp, true);
            info.textContent = currentInfo;
        })
    }
}

if(copyButton){
    copyButton.onclick = function () {
        navigator.clipboard.writeText(currentInfo);
        copyButton.textContent="Copied!";
    }
}

if(burgerButton && dropdownMenu){
    burgerButton.addEventListener('click', (e) => {
        visibility(burgerButton, false);
        burgerButton.classList.add("open");
        visibility(dropdownMenu, true, "open");
    })
    bugerExit.addEventListener('click', (e) => {
        visibility(burgerButton, true);
        burgerButton.classList.remove("open");
        visibility(dropdownMenu, false, "open");
    })
}

function visibility(element1, visibility, xClass) {
    if(visibility) {
        element1.classList.add("visible", xClass);
    } else {
        element1.classList.remove("visible", xClass);
    }
}