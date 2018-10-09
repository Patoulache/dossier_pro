INSERTION = {

    params : {},
    grosTest : "",

    init : function() {
        INSERTION.params = {
            table1 : [],
            table5 : [],
            table6 : [],
            table7 : [],
            table8 : [],
            table9 : []
        };
        var btn = document.querySelector("button");
        btn.addEventListener("click", INSERTION.recupDonnees);
    },
    
    recupDonnees : function() {
        var selecDonnees = document.querySelectorAll("input#insertion, textarea#insertion, input.insertion");
        selecDonnees.forEach(INSERTION.triDonnees);
        INSERTION.makeTbl(INSERTION.params['table5'], 7, 6);
        // console.log(INSERTION.params['table5']);
        AJAX.Post(AJAX.ToJson(INSERTION.params), "controler/insertDossierProControl.php", "envoi=", INSERTION.test);
    },
    
    triDonnees : function(el) {       
        INSERTION.params[el.name].push(el.value);          
    },
    
    test : function(el) {
        INSERTION.grosTest = el;
    },

    makeTbl : function (el, delim, coeff) {
        for (var i=delim, c = i*coeff; i<= c; i = i + delim){
            if (i == 7){
                console.log(el.slice(0,i));
            } else {
                console.log(el.slice(i,i*2));
            }

        }

    }
};

window.onload = INSERTION.init;