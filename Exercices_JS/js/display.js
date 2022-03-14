function displayEx1() { // Une fonction présente à chaque exercice servant à afficher et désafficher les divs correspondants
    for (button of BTN) button.style.display = "none";
    for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, transparent, transparent)";

    EX_1_10[0].style.display = "inline-block";
    RETURN.style.display = "inline-block";
    BTN_FOOT.style.display = "inline-block";
    EX_0.style.display = "none";
    PAGE[0].style.display = "inline-block";
    VALID[0].style.display = "inline-block";
}

function displayEx2() {

    for (button of BTN) button.style.display = "none";
    for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, transparent, transparent)";

    EX_1_10[1].style.display = "inline-block";
    RETURN.style.display = "inline-block";
    BTN_FOOT.style.display = "inline-block";
    EX_0.style.display = "none";
    PAGE[1].style.display = "inline-block";
    VALID[1].style.display = "inline-block";
}

function displayEx3() {

    for (button of BTN) button.style.display = "none";
    for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, transparent, transparent)";

    EX_1_10[2].style.display = "inline-block";
    RETURN.style.display = "inline-block";
    BTN_FOOT.style.display = "inline-block";
    EX_0.style.display = "none";
    PAGE[2].style.display = "inline-block";
	VALID[2].style.display ="inline-block";
}

function displayEx4() {
    for (button of BTN) button.style.display = "none";
    for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, transparent, transparent)";

    EX_1_10[3].style.display = "inline-block";
    RETURN.style.display = "inline-block";
    BTN_FOOT.style.display = "inline-block";
    EX_0.style.display = "none";
    PAGE[3].style.display = "inline-block";
    VALID[3].style.display = "inline-block";
} 

function displayEx5() {

    for (button of BTN) button.style.display = "none";
    for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, transparent, transparent)";

    EX_1_10[4].style.display = "inline-block";
    RETURN.style.display = "inline-block";
    BTN_FOOT.style.display = "inline-block";
    EX_0.style.display = "none";
    PAGE[4].style.display = "inline-block";
}

function displayEx6() {
    for (button of BTN) button.style.display = "none";
    for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, transparent, transparent)";
    
    EX_1_10[5].style.display = "inline-block";
    RETURN.style.display = "inline-block";
    BTN_FOOT.style.display = "inline-block";
    EX_0.style.display = "none";
    PAGE[5].style.display = "inline-block";
    VALID[4].style.display = "inline-block";
}

function displayEx7() {
    for (button of BTN) button.style.display = "none"; 
    for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, transparent, transparent)";
    
    EX_1_10[6].style.display = "inline-block";
    RETURN.style.display = "inline-block";
    BTN_FOOT.style.display = "inline-block";
    EX_0.style.display = "none";
    PAGE[6].style.display = "inline-block";
}

function displayEx8() {
    for (button of BTN) button.style.display = "none"; 
    for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, transparent, transparent)";
    
    EX_1_10[7].style.display = "inline-block";
    RETURN.style.display = "inline-block";
    BTN_FOOT.style.display = "inline-block";
    EX_0.style.display = "none";
    PAGE[7].style.display = "inline-block";
    VALID[5].style.display = "inline-block";
}

function displayEx9() { 
	for (button of BTN) button.style.display = "none"; 
	for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, transparent, transparent)";
	
	EX_1_10[8].style.display = "inline-block";
	RETURN.style.display = "inline-block";
	BTN_FOOT.style.display = "inline-block";
	EX_0.style.display = "none";
	VALID[8].style.display = "inline-block";
	PAGE[8].style.display = "inline-block";
}

function displayEx10() {
    for (button of BTN) button.style.display = "none"; 
    for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, transparent, transparent)";
    
    EX_1_10[9].style.display = "inline-block";
    RETURN.style.display = "inline-block";
    BTN_FOOT.style.display = "inline-block";
    EX_0.style.display = "none";
    VALID[9].style.display = "inline-block";
    PAGE[9].style.display = "inline-block";
}

function displayEverything() {
    for (button of BTN) button.style.display = "inline-block";
    for (div of DIV_MAIN) div.style.background = "linear-gradient(to bottom right, rgba(255, 255, 255, 0.664), rgba(0, 0, 0, 0.664))";
    for (page of PAGE) page.style.display = "none";
    for (reset of RESET) reset.value = "";
    for (noResult of NO_RESULT) noResult.style.display = "none";
    for (hide of EX_1_10) hide.style.display = "none";
    document.querySelectorAll("select")[0].value = "";
    changeLabel.innerHTML ="Devinez le prix de l'objet qui apparaîtra.<br> (entre 1€ et 100€)"; // Change la valeur du texte de l'exercice 08
    objectName.innerHTML =""; // Retire le nom de l'objet affiché dans l'exercice 08
    objectPicture.innerHTML =""; // Retire l'image de l'objet affiché dans l'exercice 08

    RETURN.style.display = "none";
    BTN_FOOT.style.display = "none";
    EX_0.style.display = "inline-block";
}