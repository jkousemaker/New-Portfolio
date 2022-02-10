const iactText = document.querySelectorAll(".iact-text");
const aboutPopups = document.querySelectorAll(".about-popup");
const aboutCard = document.querySelectorAll(".about-card");
const dexit = document.querySelectorAll(".p-exit-button");

const title = document.querySelectorAll(".about-title");
const image = document.querySelectorAll(".about-image");
const dinfo = document.querySelectorAll(".about-info");


let openStatus = false;
let temp = 0;

for (let i = 0; i < iactText.length; i ++) {
        iactText[i].addEventListener('click', (e) => {
            console.log(openStatus);
            if(!openStatus) {
                switch (i) {
                    case 0:
                        openStatus = true;
                        console.log(openStatus);
                        temp = 0;
                        swapInfo("Roc Mondriaan", "assets/images/mondriaan.jpg", "This is a picture of my school.");
                        break;
                    case 1:
                        console.log(openStatus);
                        openStatus = true;
                        temp = 0;
                        swapInfo("Second Year of study", "assets/images/php.jpg", "In the second year of Software Developer study we have to learn about PHP and databases.");
                        break;
                    case 2:
                        console.log(openStatus);
                        openStatus = true;
                        temp = 1;
                        break;
                    case 3:
                        console.log(openStatus);
                        openStatus = true;
                        temp = 1;
                        break;
                }
                aboutPopups[temp].classList.remove("close");
                aboutPopups[temp].classList.add("open");
            }
        })
}

for (let i = 0; i < dexit.length; i ++) {
    dexit[i].addEventListener('click', (e) => {
        openStatus = false;
        aboutCard[temp].classList.remove("open");
        aboutPopups[temp].classList.remove("open");
        aboutPopups[temp].classList.add("close");
    })
}

function swapInfo (ttitle, timage, tinfo){
    title[temp].innerHTML = ttitle;
    image[temp].src = timage;
    dinfo[temp].innerHTML = tinfo;
}


console.log("interactive text loaded");