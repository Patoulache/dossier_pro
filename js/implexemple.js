FORMAT = {

    init : function() {
        var nameEx = document.querySelectorAll("input[data-exemple]");
        nameEx.forEach(FORMAT.setListener);
    },
    
    setListener : function(el) {
        el.addEventListener("focusout", FORMAT.ciblage);
    },
    
    ciblage : function(e) {
        var cible = e.target.getAttribute("data-exemple");
        switch(true) {
            case (cible == "act1ex1"):
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = nameEx.value;
            break;
            case (cible == "act1ex2"):
            FORMAT.exemple();
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = nameEx.value;
            break;
            case (cible == "act1ex3"):
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = nameEx.value;
            break;
            case (cible == "act2ex1"):
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = nameEx.value;
            break;
            case (cible == "act2ex2"):
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = nameEx.value;
            break;
            case (cible == "act2ex3"):
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = nameEx.value;
            break;

        };
    },

    exemple : function() {
        var div = document.querySelector(".activtype");
        var cop = div.children.cloneNode(true);
        cop.childNodes[2].innerText = cop.childNodes[2].innerText.replace("1", "2");
        div.appendChild(cop);

    }


}