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
        if (e.target.value === "") {
            var enfant = document.querySelector("#".concat(cible));
            papa.removeChild(enfant);
        
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
        cop.id = cible;
        var cop1 = cop.children[0].children;
        var cop2 = cop.children[1].children;
        cop1[0].innerHTML = cop1[0].innerHTML.replace("1", rep[0]);
        cop2[1].setAttribute("data-example", cible);
        cop2[0].innerHTML = cop2[0].innerHTML.replace("1", rep[1]);
        FORMAT.div.appendChild(cop);

    },
    
    indexage : function() {
        
    }
}

window.onload = FORMAT.init();