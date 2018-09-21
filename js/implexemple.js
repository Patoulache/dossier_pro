FORMAT = {
    nameEx:"",


    init : function() {
        FORMAT.nameEx = document.querySelectorAll("input[data-exemple]");
        FORMAT.nameEx.forEach(FORMAT.setListener);
    },
    
    setListener : function(el) {
        el.addEventListener("focusout", FORMAT.ciblage);
    },
    
    ciblage : function(e) {
        var cible = e.target.getAttribute("data-exemple");
        switch(true) {
            case (cible == "act1ex1"):
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = e.target.value;
            break;
            case (cible == "act1ex2"):
            FORMAT.exemple(cible);
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            console.log(champs);
            champs.value = e.target.value;
            break;
            case (cible == "act1ex3"):
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = e.target.value;
            break;
            case (cible == "act2ex1"):
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = e.target.value;
            break;
            case (cible == "act2ex2"):
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = e.target.value;
            break;
            case (cible == "act2ex3"):
            var champs = document.querySelector("input[data-example="+"\""+cible+"\"]");
            champs.value = e.target.value;
            break;

        };
    },

    exemple : function(cible) {
        var div = document.querySelector(".activtype");
        console.log(div);
        var cop = div.cloneNode(true);
        var cop1 = cop.children;
        var cop2 = cop1[1].children
        cop2[1].setAttribute("data-example", cible);
        console.log(cible);
        cop2[0].innerHTML = cop2[0].innerHTML.replace("1", "2");
        // console.log(cop1);
        div.appendChild(cop);

    },

}

window.onload = FORMAT.init();