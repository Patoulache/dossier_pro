FORMAT = {
    nameEx:"",
    div : document.querySelector(".activtype"),

    // Selectionne les inputs qui vont devenir des ecouteurs
    init : function() {
        FORMAT.nameEx = document.querySelectorAll("input[data-exemple]");
        FORMAT.nameEx.forEach(FORMAT.setListener);
    },
    
    // ajout d'ecouteurs sur les inputs
    setListener : function(el) {
        el.addEventListener("focusout", FORMAT.ciblage);
    },
    
    ciblage : function(e) {
        var cible = e.target.getAttribute("data-exemple"); // récupere nom de l'attribut
        // check si formulaires existent deja, sinon elle les cree
        if (document.querySelector("input[data-example="+"\""+cible+"\"]") === null) {
            FORMAT.exemple(cible);
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            // cible le bon input dans lequel on injecte la valeur rentree dans le sommaire
            switch(true) {
                case (cible == "act1ex1"):
                champs.value = e.target.value; // actualise la valeur du nom de l'exemple.
                break;
                case (cible == "act1ex2"):
                champs.value = e.target.value;
                break;
                case (cible == "act1ex3"):
                champs.value = e.target.value;
                break;
                case (cible == "act2ex1"):
                champs.value = e.target.value;
                break;
                case (cible == "act2ex2"):
                champs.value = e.target.value;
                break;
                case (cible == "act2ex3"):
                champs.value = e.target.value;
                break;
                
            };
        } else { // actualisation simple du nom de l'exemple si formulaire deja present
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = e.target.value;
       
        };
    },
    // copie le formulaire pour les exemples avec les bon numeros
    exemple : function(cible) {
        var regex = /\d/g;
        var rep = cible.match(regex);
        var cop = FORMAT.div.children[0].cloneNode(true);
        var cop1 = FORMAT.div.children[1].cloneNode(true);
        var cop2 = FORMAT.div.children[2].cloneNode(true);
        var cop3 = cop.children;
        var cop4 = cop1.children;
        cop3[0].innerHTML = cop3[0].innerHTML.replace("1", rep[0]);
        cop4[1].setAttribute("data-example", cible);
        cop4[0].innerHTML = cop4[0].innerHTML.replace("1", rep[1]);
        FORMAT.div.append(cop, cop1, cop2);

    },

}

window.onload = FORMAT.init();