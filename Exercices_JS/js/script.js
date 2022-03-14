// Exercice 01
function resultEx1() {
    let age = document.getElementById("zorgAge").value;
    let result = document.getElementById("resultTaxes");
    let gender = document.getElementById("gender").value;

    try {
        notANumber(age)
        emptyField(age, gender)
        if (gender == "homme") {
            if (age < 20) result.textContent = "Tu paies pas d'impôts :'c";
            else result.textContent = "Tu vas cracher !";
        } else {
            if (age < 18 || age > 35) result.textContent = "Tu paies pas d'impôts :'c";
            else result.textContent = "Tu vas cracher !";
        }
        resultZorg.style.display = "inline-block" // Affiche un autre div montrant le résultat uniquement si aucune alerte n'est présente
    } catch(erreur) {
        alert(erreur.message)
    }
} 

// Exercice 02
function resultEx2() {
    const FULL_PRICE = 0.1;
    const REDUC_1 = 0.09;
    const REDUC_2 = 0.08;
    let copie = document.getElementById("nbCopie").value;
    let result = document.getElementById("resultCopie");

    try {
        notANumber(copie);
        emptyField(copie);
        if (copie <= 10) {
            copie = FULL_PRICE*copie;
            result.textContent = "Tu vas me filer "+ copie.toFixed(2) + " balle !";
        } else if (copie <= 30) {
            copie = FULL_PRICE*10+(copie-10)*REDUC_1;
            result.textContent = "Tu vas me filer "+ copie.toFixed(2) + " balles !";
        } else {
            copie = FULL_PRICE*10+REDUC_1*20+(copie - 30)*REDUC_2;
            result.textContent = "Tu vas me filer "+ copie.toFixed(2) +" balles !";
        }
        reprogResult.style.display = "inline-block";
    }
    catch(erreur) {
        alert(erreur.message)
    }
} 

// Exercice 03
function resultEx3() {
    let hour = document.getElementById("hour").value;
    let minute = document.getElementById("minute").value;
    let second = document.getElementById("second").value;

    try {
        notANumber(second, minute, hour);
        emptyField(second, minute, hour);
        second++ // Incrémente les secondes de 1 à chaque clique sur le bouton
        if (second >= 60) { // Remet les secondes à 0 dès qu'elles atteignent 60 ou plus
            second = 0; // Corrige l'excédent de secondes
            minute++    
        }
        if (minute >= 60) { // Remet les minutes à 0 dès qu'elles atteignent 60 ou plus
            minute = 0; // Corrige l'éxcédent de minutes
            hour++
        }
        if (hour >= 24) hour = 0 // Remet les heures à 0 et corrige l'excédent dès qu'elles atteignent 24

        hourResult.style.display = "Inline-block"
        textHour.textContent = "Dans une seconde, il sera : " + hour + "heure(s), " + minute +  " minute(s) et " + second + " seconde(s)."
    } catch(erreur) {
        alert(erreur.message)
    }
} 

// Exercice 04
function resultEx4() {
    let ticket = document.getElementById("amount").value;
    let given = document.getElementById("paid").value;
    let money = given - ticket;
    let nbr10 = 0;
    let nbr5 = 0;
    let nbr1 = 0;

    try {
        notANumber(ticket, given);
        emptyField(ticket, given);
        if ((money < given)) alert("Vous n'avez pas assez d'argent") // Envoie une alerte si la somme donnée est inférieure au prix du ticket
        else {
            while (money>=10) {
                money -= 10; // Soustrait 10 de la différence entre le prix du ticket et la somme donnée tant qu'elle est supérieur ou égale à 10
                nbr10 ++; // Retiens le nombre de fois que 10 à été soustrait de la différence
            }
            while (money>=5) {
                money -= 5; // Soustrait 5 de la différence entre le prix du ticket et la somme donnée tant qu'elle est supérieur ou égale à 5
                nbr5 ++; // Retiens le nombre de fois que 5 à été soustrait de la différence
            }
            textMoney.textContent = "Tu vas te bouffer tes "+nbr10+" billets de 10€, tes "+nbr5+" billets de 5€ et tes "+nbr1+" pièces de 1€ dans ta gueule !";
            resultMoney.style.display = "inline-block";
        }
    } catch(erreur) {
        alert(erreur.message)
    }
}

// Exercice 05
mail.addEventListener("keyup", function resultEx5(e) { // Lance la fonction si une certaine touche est enfoncée
    let mail = document.getElementById("mail").value
    
    if (e.code == "Enter") { // Lance la fonction lorsque la touche "Entrée" est enfoncée
        if (mail.includes("@") && mail.includes(".")) { // Envoie une alerte s'il n'y a pas un @ ou un . dans le champ
            let mailVerif = mail.substring(mail.indexOf("@")) // Ne prend en compte que ce qu'il y a après @ dans le champ
            if (mailVerif.includes(".")) /* Vérifie qu'il a un . après @ */ textMail.textContent = "Adresse mail valide"
            else alert("Veuillez entrer une adresse mail valide.")
        } else alert("Veuillez entrer une adresse mail valide.")
        resultMail.style.display = "inline-block";
    }
});

// Exercice 06
function resultEx6() {
    const RATE = ["refusé", "rouge", "orange", "vert", "bleu"];
    let driverAge = document.getElementById("driverAge").value;
    let driverLicense = document.getElementById("driverLicense").value;
    let accident = document.getElementById("accident").value;
    let loyalty = document.getElementById("loyalty").value;
    let advantage = 1;

    try {
        notANumber(driverAge, driverLicense, accident, loyalty);
        emptyField(driverAge, driverLicense, accident, loyalty);
        if (accident > 2) advantage = 0 // Force la liste à rester sur l'index 0 si les accidents sont supérieurs à 2
        else {
            if (driverAge >= 25) advantage++ // Octroie un point bonus pour chaque bonne condition
            if (driverLicense) advantage++
            advantage -= accident // Retire un point pour chaque accident
            if (loyalty > 1) advantage++
            if (advantage < 0) advantage = 0
        } if (advantage == 0) {
            alert("Vous êtes "+RATE[advantage]+ ", cassez-vous !")
        } else {
            assurResult.textContent = "Vous bénéficiez du tarif "+ RATE[advantage]+ " !"
            resultAssurance.style.display = "inline-block";
        }
    } catch(erreur) {
        alert(erreur.message)
    }
}

// Exercice 07
function resultEx7() {
    const SECUR = ["Dangereux", "Moyen", "Sécurisé", "Très sécurisé"];
    const LENGTH = 8;
    const LOWER = /[a-z]/;
    const UPPER = /[A-Z]/;
    const NUM = /[0-9]/;
    const SPE_CHAR = /\W+/;
    let safety = 0;
    let testPassword = document.getElementById("password").value;

    if (LOWER.test(testPassword)) safety++ // Ajoute un niveau de sécurité pour chaque condition remplie
    if (UPPER.test(testPassword)) safety++
    if (NUM.test(testPassword)) safety++
    if (SPE_CHAR.test(testPassword)) safety++
    if (testPassword.length < LENGTH) safety-- // Retire un niveau de sécurité si le champ comporte moins de 8 caractères
    if (safety > 3) safety = 3 // Empêche l'index de dépasser "Très sécurisé"
    if (safety < 0) safety = 0 // Empêche l'index de se trouver avant "Dangereux"
    
    resultPassword.style.display = "inline-block"
    passwordResult.textContent = SECUR[safety]
}

// Exercice 08
function resultEx8() {
    const NAMES = ["Un caillou", "Une éponge (pas le hérisson)", "Une peluche Carbuncle émeraude (Final Fantasy XIV)", "Un meuble Ikéa", "Une <span style='text-decoration-line:line-through'>personne</span> chose très bizarre"];
    const PICTURES = ["Pictures/Caillou.jpg", "Pictures/Spontex.jpg", "Pictures/Carbuncle.png", "Pictures/Meuble.jpg", "Pictures/Maquerond.jpg"];
    const TRIES = 10;
    let randomPrice = Math.floor(Math.random()*100)+1;
    let randomObject = Math.floor(Math.random()*5); // Choisis un objet contenu dans un index aléatoire
    let objectName = document.getElementById("objectName");
    let objectPicture = document.getElementById("objectPicture");
    let numTry = 0;
    
    changeLabel.innerHTML = "Devinez le prix de cet objet :" // Modifie le contenu du label
    objectName.innerHTML = "<p>"+NAMES[randomObject]+"</p>"; // Insère le nom de l'objet choisi dans l'index
    justePrixResult.textContent = "";
    objectPicture.innerHTML = "<img src='"+PICTURES[randomObject]+"' width ='100%'>"; // Insère l'image de l'objet choisi dans l'index
    RESET[13].value = ""; // Vide le champ contenant un prix proposé à chaque nouvelle partie
    RESET[13].style.display = "inline-block"; // Affiche le champ à chaque nouvelle partie
    VALID[5].style.display = "none"; // Cache le bouton "Commencer/Recommencer" jusqu'à avoir terminé la partie
    PROPOSITION[0].style.display = "inline-block"; // Affiche le bouton "Proposer" pendant une partie
    resultJustePrix.style.display = "inline-block"; // Affiche le div permettant de jouer
    tries.textContent = "Vous avez 10 tentatives."
    
    function enterButton(e) {
        if (e.code =="Enter") proposition()
    }

    function proposition() {
        let price = document.getElementById("price");
        try {
            notANumber(price.value);
            emptyField(price.value);
            if (price.value < 1 || price.value > 100) alert("Veuillez entrer un nombre compris entre 1 et 100 inclus")
            else if (price.value == randomPrice) {
                justePrixResult.textContent = "Vous avez gagné !";
                tries.textContent = "Son prix était bien de "+randomPrice+"€ !";
                RESET[13].style.display = "none";
                price.removeEventListener("keyup", enterButton);
                PROPOSITION[0].removeEventListener("click", proposition);
                PROPOSITION[0].style.display = "none";
                VALID[5].innerHTML = "Recommencer";
                VALID[5].style.display = "inline-block";
                randomPrice = 0;
                numTry = 0;
            } else {
                if (price.value < randomPrice) justePrixResult.textContent = "C'est plus !";
                if (price.value > randomPrice) justePrixResult.textContent = "C'est moins !";
                if ((numTry+1) == TRIES) {
                    tries.innerHTML = "T'as perdu, les doigts dans le cul !<br> Le bon prix était : "+randomPrice+"€ !";
                    justePrixResult.textContent = "";
                    RESET[13].style.display = "none";
                    price.removeEventListener("keyup", enterButton);
                    PROPOSITION[0].removeEventListener("click", proposition);
                    PROPOSITION[0].style.display = "none";
                    VALID[5].innerHTML = "Recommencer";
                    VALID[5].style.display = "inline-block";
                    randomPrice = 0;
                    numTry = 0;
                } else {
                    numTry++ 
                    tries.textContent = "Il vous reste "+(TRIES-numTry)+" tentatives."
                }
            }
        } catch(erreur) {
            alert(erreur.message)
        }
    } PROPOSITION[0].addEventListener("click", proposition)
    price.addEventListener("keyup", enterButton);
}