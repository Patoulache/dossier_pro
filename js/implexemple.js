FORMAT = {

    div : document.querySelector(".activtype"), // Selectionne la div qui accueille les formulaires d'exemple
    regex : /\d/g, // cible les chiffres de la variable

    // Selectionne les inputs qui vont devenir des ecouteurs
    init : function() {
      document.querySelectorAll("input[data-exemple]").forEach((a) => a.addEventListener("focusout", FORMAT.ciblage));
    },

    // ajout d'ecouteurs sur les inputs
    ciblage : function(e) {
        var papa = FORMAT.div;
        var cible = e.target.getAttribute("data-exemple"); // récupere nom de l'attribut
        // suppression form si champ vide alors que le form existe
        if (e.target.value === "" && cible !== "act1ex1") {
            var enfant = document.querySelector("#".concat(cible));
            papa.removeChild(enfant);
            FORMAT.indexage(cible); // indexage après suppression

        }
        // check si formulaires existent deja, sinon elle les cree
        else if (document.querySelector("input[data-example="+"\""+cible+"\"]") === null) {
            FORMAT.exemple(cible);
            document.querySelector("input[data-example="+"\""+cible+"\"]").value = e.target.value;
            // cible le bon input dans lequel on injecte la valeur rentree dans le sommaire
           // actualise la valeur du nom de l'exemple

        } else { // actualisation simple du nom de l'exemple si formulaire deja present
            document.querySelector("input[data-example="+"\""+cible+"\"]").value = e.target.value;
        }
    },
    // copie le formulaire pour les exemples avec les bon numeros
    exemple : function(cible) {
        var rep = cible.match(FORMAT.regex); // sort les chiffres de la variable
        var newEx = FORMAT.div.children[0].cloneNode(true); // copie du 1er form pour la transformer
        newEx.querySelectorAll("input, textarea").forEach((e) => e.value = ""); // reset des valeurs des champs de la copie s'il y en avait
        var activite = newEx.children[0].children; // cible la div contenant le nom et le champ de l'activité
        var exemple = newEx.children[1].children; // cible la div contenant le nom et le champ de l'exemple
        var cible1 = document.querySelector("#"+FORMAT.calcul(cible, 1)); // génère un n+1 de la cible ( si cible = act1ex2, cible1 = act1ex3)
        if (rep[0] == "2") { // si l'activité est la deuxième, change son attribut data-nombre
            activite[1].setAttribute("data-nombre", 1); // change l'attribut du champ activité
            activite[1].value = document.querySelector('textarea[data-nombre ="1"]').value; // assigne la valeur du champ activité par rapport à celui présent dans le sommaire
        } else {
            activite[1].value = document.querySelector('textarea[data-nombre ="0"]').value;
        };
        newEx.id = cible;
        activite[0].innerHTML = activite[0].innerHTML.replace("1", rep[0]); // change le nombre de l'activité
        exemple[1].setAttribute("data-example", cible); // assigne l'attribut du champ exemple
        exemple[0].innerHTML = exemple[0].innerHTML.replace("1", rep[1]); // change le nombre de l'exemple
        FORMAT.div.appendChild(newEx);
        FORMAT.div.insertBefore(newEx, cible1); // place le formulaire exemple avant son n+1 s'il existe

    },
    // remet les exemples dans l'ordre et les valeurs au bon endroit dans le sommaire après suppression d'un exemple
    indexage : function(cible) {

        var jumeau = document.querySelector("input[data-exemple="+"\""+cible+"\"]"); // champ exemple dans le sommaire
        var rep = cible.match(FORMAT.regex); // sort les chiffres de la variable
        var cible1 = FORMAT.calcul(cible, 1);
        var suppr = document.querySelector("input[data-exemple="+"\""+cible1+"\"]"); // champ exemple n+1 dans le sommaire
        var papa = document.querySelector("#"+cible1); // selectionne la div form exemple n+1
        switch (true) { // réindexage selon les cas
            case cible == "act1ex2":
                if (papa !== null) { // si la div n+1 existe réindexage en changeant les valeurs clés
                    papa.id = cible; 
                    papa.children[1].children[0].innerHTML = papa.children[1].children[0].innerHTML.replace("3", rep[1]); // change numéro exemple
                    papa.children[1].children[1].setAttribute("data-example", cible); // change attribut champ exemple
                    jumeau.value = papa.children[1].children[1].value; // réattribution valeur exemple dans le sommaire
                    suppr.value = null; // suppression valeur champ exemple n+1
                } else {}
                break;
            case cible == "act2ex1":
                if (papa !== null && document.querySelector("#"+FORMAT.calcul(cible, 2)) === null) { // si seulement la div n+1 existe réindexage comme au dessus
                    papa.id = cible;
                    papa.children[1].children[0].innerHTML = papa.children[1].children[0].innerHTML.replace("2", rep[1]);
                    papa.children[1].children[1].setAttribute("data-example", cible);
                    jumeau.value = papa.children[1].children[1].value;
                    suppr.value = null;
                } else { // si la div n+1 et n+2 existe, réindexage des deux divs en changeant les valeurs pour chacune
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
                }
                break;
            case cible == "act2ex2":
                if (papa !== null) { // si la div n+1 existe réindexage en changeant les valeurs clés
                    papa.id = cible;
                    papa.children[1].children[0].innerHTML = papa.children[1].children[0].innerHTML.replace("3", rep[1]);
                    papa.children[1].children[1].setAttribute("data-example", cible);
                    jumeau.value = papa.children[1].children[1].value;
                    suppr.value = null;
                } else {}
                break;
            default:
                break;
        }
    },
    // fonction pour calculer l'id N+"chiffre choisi" et retourner le string
    calcul : function(cible, chiffre) {

        var cible1 = cible.substring(6);
        var cible2 = parseInt(cible1) + chiffre;
        if (cible2 <= 3) { // si le nouvel exemple est <= à trois
            var cible3 = cible.replace(/\d$/, cible2);
            return cible3;
        } else if(cible == "act1ex3") { // si l'exemple cible est le dernier de sa catégorie (aka "act1ex3")
            var cible3 = cible.replace(/\d$/, 1);
            cible3 = cible3.replace(/\d/, 2);
            return cible3;
        } else { // sinon retourne la valeur de l'exemple cible
            return cible;
        }
    }

};

window.onload = FORMAT.init;
