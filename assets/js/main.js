const sections = document.querySelectorAll(".skills, .projects, .about, .contact");
const navButtons = document.querySelectorAll(".j-button");

const escapeRoom = document.querySelector(".escape");
const iceField = document.querySelector(".icefield")
const zuzu = document.querySelector(".zuzu");

const gmail = document.querySelector(".gmail");
const form = document.querySelector(".e-form");
const formExit = document.querySelector(".form-exit");

const instagram = document.querySelector(".instagram");

const whatsapp = document.querySelector(".whatsapp");
const whatsappPopUp = document.querySelector(".whatsapp-popup");
const wExit = document.querySelector(".w-exit-button");
const copyButton = document.querySelector(".copy-button");

console.log(navButtons);

for (let i = 0; i < navButtons.length; i++) {
    navButtons[i].onclick = function() {

        if(i > 3) {
            let temp = i

            switch (i) {
                case 4:
                    temp = 0
                    break;
                case 5:
                    temp = 1
                    break;
                case 6:
                    temp = 2
                    break;
                case 7:
                    temp = 3
                    break;
            }

            sections[temp].scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
        } else {
            sections[i].scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
        }
    }
}

escapeRoom.onclick = function() {
    window.open('https://jkousemaker.github.io/Escape-Room/index.html','mywindow');
}

iceField.onclick = function() {
    window.open('https://icefield.company.site/','mywindow');
}

zuzu.onclick = function() {
    window.open('zuzu.php','mywindow');
}

gmail.onclick = function() {
    form.classList.add("visible");
    console.log("hey");
}

formExit.onclick = function() {
    form.classList.remove("visible");
}

instagram.onclick = function () {
    window.open('https://www.instagram.com/icefieldoffical/', 'mywindow');
}

whatsapp.onclick = function () {
    whatsappPopUp.classList.add("visible");
}

wExit.onclick = function () {
    whatsappPopUp.classList.remove("visible");
}

copyButton.onclick = function () {
    navigator.clipboard.writeText("+31612059599")
}

console.log("js loaded");