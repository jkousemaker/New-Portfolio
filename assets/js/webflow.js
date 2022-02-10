function changeCss () {
    const skills = document.querySelectorAll(".skills1 > p, .skills2 > p");
    console.log(skills);
    let scroll = this.scrollY;
    for(let i = 0; i < skills.length; i++){
        switch(i){
            case 0:
                if(scroll > 400) {
                    skills[i].style.position = "relative";
                    skills[i].style.left = "0px";
                }
                break;
            case 1:
                if(scroll > 450) {
                    skills[i].style.position = "relative";
                    skills[i].style.left = "0px";
                }
                break;
            case 2:
                if(scroll > 500) {
                    skills[i].style.position = "relative";
                    skills[i].style.left = "0px";
                }
                break;
            case 3:
                if(scroll > 550) {
                    skills[i].style.position = "relative";
                    skills[i].style.left = "0px";
                }
                break;
            case 4:
                if(scroll > 600) {
                    skills[i].style.position = "relative";
                    skills[i].style.left = "0px";
                }
                break;
            case 5:
                if(scroll > 650) {
                    skills[i].style.position = "relative";
                    skills[i].style.left = "0px";
                }
                break;
                case 6:
                    if(scroll > 450) {
                        skills[i].style.position = "relative";
                        skills[i].style.left = "0px";
                    }
                    break;
                case 7:
                    if(scroll > 500) {
                        skills[i].style.position = "relative";
                        skills[i].style.left = "0px";
                    }
                    break;
                case 8:
                    if(scroll > 550) {
                        skills[i].style.position = "relative";
                        skills[i].style.left = "0px";
                    }
                    break;
                case 9:
                    if(scroll > 600) {
                        skills[i].style.position = "relative";
                        skills[i].style.left = "0px";
                    }
                    break;
                case 10:
                    if(scroll > 650) {
                        skills[i].style.position = "relative";
                        skills[i].style.left = "0px";
                    }
                    break;
                case 11:
                    if(scroll > 700) {
                        skills[i].style.position = "relative";
                        skills[i].style.left = "0px";
                    }
                    break;
        }
    }
}


  
  window.addEventListener("scroll", changeCss , false);