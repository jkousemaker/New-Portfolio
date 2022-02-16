//Email Form
const gmail = document.querySelector(".gmail");
const form = document.querySelector(".e-form");

//Socials
const socials = document.querySelectorAll(".social");
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
const burgerExit = document.querySelector(".burger-but");

let currentInfo = "";

//Make pop ups hidden on exit press
if(popUps) {
    console.log(popUps);
    for (let i = 0; i < popUps.length; i++) {
        exit[i].addEventListener('click', (e) => {
            visibility(popUps[i], false, "open");
            switch(i) {
                case 0:
                    form.classList.add("open");
                    break;
                default:
                    break;
            }
        })
    }
}

if(gmail){
    gmail.onclick = function() {
        visibility(form, true);
        form.classList.remove("open");
    }
}

if(instagram){
    instagram.onclick = function () {
        window.open('https://www.instagram.com/icefieldoffical/', 'mywindow');
    }
}

if(socials){
    for (let i = 0; i < socials.length; i++) {
        socials[i].addEventListener('click', (e) => {
            switch(i) {
                case 0:
                    currentInfo = "lilmogoal";
                    copyButton.textContent="Copy to clipboard";
                    visibility(popUp, true);
                    info.textContent = currentInfo;
                    break;
                case 1:
                    socials[i].onclick = function () {
                        window.open('https://www.instagram.com/icefieldoffical/', 'mywindow');
                    }
                    break;
                case 2:
                    currentInfo = "+31 6 12059599";
                    copyButton.textContent="Copy to clipboard";
                    visibility(popUp, true);
                    info.textContent = currentInfo;
                    break;
            }
        })
    }
}

if(copyButton){
    copyButton.onclick = function () {
        navigator.clipboard.writeText(currentInfo);
        copyButton.textContent="Copied!";
    }
}

let bStatus = false;

if(burgerButton && dropdownMenu){
        burgerButton.addEventListener('click', (e) => {
            if (!bStatus) {
            open(burgerButton, true);
            setTimeout(open, 500, dropdownMenu, true);
            visibility(dropdownMenu, true);
            bStatus = true;
            console.log("open");
            }
        })
        burgerExit.addEventListener('click', (e) => {
            if(bStatus) {
            open(burgerButton, false);
            setTimeout(open, 500, dropdownMenu, false);
            visibility(dropdownMenu, false);
            setTimeout(swapStatus, 500);
            console.log("close");
            }
        })
};;

function open(element, status) {
    if(status) {
        console.log("kanker");
        element.classList.add("open");
    } else {
        console.log("kanker2");
        element.classList.remove("open");
    }
}

function swapStatus() {
    bStatus = false;
}

function visibility(element1, visibility, xClass) {
    if(visibility) {
        element1.classList.add("visible", xClass);
    } else {
        element1.classList.remove("visible", xClass);
    }
}

