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
        var papa = FORMAT.div;
        //console.log(papa);
        var cible = e.target.getAttribute("data-exemple"); // récupere nom de l'attribut
        // suppression form si champ vide alors que le form existe
        if (e.target.value === "" && cible !== "act1ex1") {
            var enfant = document.querySelector("#".concat(cible));
            papa.removeChild(enfant);
            FORMAT.indexage(cible);
        
        }
        // check si formulaires existent deja, sinon elle les cree
        else if (document.querySelector("input[data-example="+"\""+cible+"\"]") === null) {
            FORMAT.exemple(cible);
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            // cible le bon input dans lequel on injecte la valeur rentree dans le sommaire 
            champs.value = e.target.value; // actualise la valeur du nom de l'exemple

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
        var cop1 = cop.children[0].children;
        var cop2 = cop.children[1].children;
        var cible1 = document.querySelector("#"+FORMAT.calcul(cible, 1));
        cop.id = cible;
        cop1[0].innerHTML = cop1[0].innerHTML.replace("1", rep[0]);
        cop2[1].setAttribute("data-example", cible);
        cop2[0].innerHTML = cop2[0].innerHTML.replace("1", rep[1]);
        FORMAT.div.appendChild(cop);
        FORMAT.div.insertBefore(cop, cible1);

    },
    // remet les exemples dans l'ordre et les valeurs au bon endroit dans le sommaire
    indexage : function(cible) {

        var jumeau = document.querySelector("input[data-exemple="+"\""+cible+"\"]");
        var regex = /\d/g;
        var rep = cible.match(regex);
        var cible1 = FORMAT.calcul(cible, 1);
        var suppr = document.querySelector("input[data-exemple="+"\""+cible1+"\"]");
        var papa = document.querySelector("#"+cible1);
        switch (true) {
            case cible == "act1ex2":
                if (papa !== null) {
                    papa.id = cible;
                    papa.children[1].children[0].innerHTML = papa.children[1].children[0].innerHTML.replace("3", rep[1]);
                    papa.children[1].children[1].setAttribute("data-example", cible);
                    jumeau.value = papa.children[1].children[1].value;
                    suppr.value = null;
                } else {};
                break;
            case cible == "act2ex1":
                if (papa !== null && document.querySelector("#"+FORMAT.calcul(cible, 2)) === null) {
                    papa.id = cible;
                    papa.children[1].children[0].innerHTML = papa.children[1].children[0].innerHTML.replace("2", rep[1]);
                    papa.children[1].children[1].setAttribute("data-example", cible);
                    jumeau.value = papa.children[1].children[1].value;
                    suppr.value = null;
                } else {
                    var papa1 = document.querySelector("#act2ex3");
                    var suppr1 = document.querySelector("input[data-exemple="+"\""+FORMAT.calcul(cible, 2)+"\"]");
                    papa.id = cible;
                    papa.children[1].children[0].innerHTML = papa.children[1].children[0].innerHTML.replace("2", rep[1]);
                    papa.children[1].children[1].setAttribute("data-example", cible);
                    papa1.id = cible1;
                    papa1.children[1].children[0].innerHTML = papa1.children[1].children[0].innerHTML.replace("3", "2");
                    papa1.children[1].children[1].setAttribute("data-example", cible1);
                    jumeau.value = papa.children[1].children[1].value;
                    suppr.value = papa1.children[1].children[1].value;
                    suppr1.value = null;
                };
                break;
            case cible == "act2ex2":
                if (papa !== null) {
                    papa.id = cible;
                    papa.children[1].children[0].innerHTML = papa.children[1].children[0].innerHTML.replace("3", rep[1]);
                    papa.children[1].children[1].setAttribute("data-example", cible);
                    jumeau.value = papa.children[1].children[1].value;
                    suppr.value = null;
                } else {};
                break;
            default:
                break;
        }
    },

    calcul : function(cible, chiffre) {

        var cible1 = cible.substring(6);
        var cible2 = parseInt(cible1) + chiffre;
        if (cible2 <= 3) {
            var cible3 = cible.replace(/\d$/, cible2);
            return cible3;
        } else {
            return cible;
        }
    }
}

window.onload = FORMAT.init();