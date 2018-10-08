INSERTION = {

    params : {},
    grosTest : "",

    init : function() {
        INSERTION.params = {
            table1 : "",
            table5 : "",
            table6 : "",
            table7 : "",
            table8 : "",
            table9 : ""
        };
        var btn = document.querySelector("button");
        btn.addEventListener("click", INSERTION.recupDonnees);
    },
    
    recupDonnees : function() {
        var selecDonnees = document.querySelectorAll("input#insertion, textarea#insertion, input.insertion");
        selecDonnees.forEach(INSERTION.triDonnees);
        console.log(INSERTION.params);
        AJAX.Post(AJAX.ToJson(INSERTION.params), "controler/insertDossierProControl.php", "envoi=", INSERTION.test);
    },

    triDonnees : function(el) {
       
        INSERTION.params[el.name] += el.value+"@";
           
    },

    test : function(el) {
        INSERTION.grosTest = el;
    }
};

window.onload = INSERTION.init;