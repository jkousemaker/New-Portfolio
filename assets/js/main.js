const sections = document.querySelectorAll(".skills, .projects, .about, .contact");
const navButtons = document.querySelectorAll(".j-button");

console.log(navButtons);

for (let i = 0; i < navButtons.length; i++) {
    navButtons[i].onclick = function() {
        if(sections.length != 0){
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
}

console.log("js loaded");