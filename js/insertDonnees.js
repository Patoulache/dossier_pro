INSERTION = {

    tbl : [], // tableau tampon
    params : {}, // objet pour envoi AJAX
    grosTest : "", // variable test réponse AJAX

    init : function() {
        INSERTION.params = { // création de l'objet que j'enverrai par POST
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
    // Récupération données à envoyer
    recupDonnees : function() {
        var selecDonnees = document.querySelectorAll("input#insertion, textarea#insertion, input.insertion, textarea.insertion"); // sélectionne tous les champs comportant les données à insérer
        selecDonnees.forEach(INSERTION.triDonnees); // formatage des données dans certains paramètres pour faire des sous-tableaux
        INSERTION.makeTbl("table5", 7, 6);
        INSERTION.makeTbl("table6", 3, 6);
        INSERTION.makeTbl("table7", 3, 10);
        INSERTION.makeTbl("table8", 1, 10);
        AJAX.Post(AJAX.ToJson(INSERTION.params), "controler/insertDossierProControl.php", "envoi=", INSERTION.test);
    },
    
    triDonnees : function(el) {       
        INSERTION.params[el.name].push(el.value); // Insertion des données dans l'objet    
    },
    
    test : function(el) {
        INSERTION.grosTest = el;
        INSERTION.params = { // reset de l'objet pour le prochain envoi
            table1 : [],
            table2 : [],
            table5 : [],
            table6 : [],
            table7 : [],
            table8 : [],
            table9 : []
        };
    },

    makeTbl : function (nomTable, delim, coeff) { // création des sous-tableaux en fonction des parametres (nomTable = table où l'on veut formater en sous-tableau 
                                                  // delim = nombre de donnée dans un sous-tableau, coeff = nombre de sous-tableau)

        for (var i=delim, c = i*coeff, j=0; i<= c; i = i + delim, j++){
            if (i == delim){
                INSERTION.tbl.push(INSERTION.params[nomTable].slice(0,i));
            } else {
                INSERTION.tbl.push(INSERTION.params[nomTable].slice(i-delim,i));
            }
        };
        INSERTION.params[nomTable] = INSERTION.tbl; // insertion du sous-tableau dans la table ciblée
        INSERTION.tbl = []; // reset tableau tampon
    }
};

window.onload = INSERTION.init;