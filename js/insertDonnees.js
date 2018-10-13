INSERTION = {

    tbl : [],
    params : {},
    grosTest : "",

    init : function() {
        INSERTION.params = {
            table1 : [],
            table2 : [],
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
        var selecDonnees = document.querySelectorAll("input#insertion, textarea#insertion, input.insertion, textarea.insertion");
        selecDonnees.forEach(INSERTION.triDonnees);
        INSERTION.makeTbl("table5", 7, 6);
        INSERTION.makeTbl("table6", 3, 6);
        INSERTION.makeTbl("table7", 3, 10);
        INSERTION.makeTbl("table8", 1, 10);
        AJAX.Post(AJAX.ToJson(INSERTION.params), "controler/insertDossierProControl.php", "envoi=", INSERTION.test);
    },
    
    triDonnees : function(el) {       
        INSERTION.params[el.name].push(el.value);          
    },
    
    test : function(el) {
        INSERTION.grosTest = el;
        INSERTION.params = {
            table1 : [],
            table2 : [],
            table5 : [],
            table6 : [],
            table7 : [],
            table8 : [],
            table9 : []
        };
    },

    makeTbl : function (nomTable, delim, coeff) {

        for (var i=delim, c = i*coeff, j=0; i<= c; i = i + delim, j++){
            if (i == delim){
                INSERTION.tbl.push(INSERTION.params[nomTable].slice(0,i));
            } else {
                INSERTION.tbl.push(INSERTION.params[nomTable].slice(i-delim,i));
            }
        };
        INSERTION.params[nomTable] = INSERTION.tbl;
        INSERTION.tbl = [];        
    }
};

window.onload = INSERTION.init;