//verif si les champs sont set
const CHECKID = {
  nomnaissance : "",
  nomusage : "",
  prenom : "",
  adresse : "",

  INIT : function(){
    CHECKID.nomnaissance = document.getElementById('nomnaissance')
    CHECKID.nomusage = document.getElementById('nomusage')
    CHECKID.prenom = document.getElementById('prenom')
    CHECKID.adresse = document.getElementById('adresse')
  },
  // verif les champs
  ALLSET : function() {
    const allset = ((CHECKID.nomusage.value && CHECKID.nomnaissance.value && CHECKID.adresse.value && CHECKID.prenom.value) ? true : false);
    if (allset === false){
      CHECKID.COLOUR();
    }
    return allset;
  },
//change la couleur, pour rouge, des input si vide
  COLOUR : function(){
    if (CHECKID.nomnaissance.value === ""){
      CHECKID.nomnaissance.style.border = "2px solid red";
    };
    if (CHECKID.nomusage.value === ""){
      CHECKID.nomusage.style.border = "2px solid red";
    };
    if (CHECKID.prenom.value === ""){
      CHECKID.prenom.style.border = "2px solid red";
    };
    if (CHECKID.adresse.value === ""){
      CHECKID.adresse.style.border = "2px solid red";
    };
  }

}

// gère le click button
// TOUT se pass ici
const BUTTON = {
  INIT : function(){
    document.getElementById('validation').addEventListener("click",BUTTON.CLICKED);
  },
  CLICKED : function(){
    CHECKID.INIT();
    if (CHECKID.ALLSET()){
      LESVARIABLES.INIT();
      SENDER.INIT();
    } //end if
  }// end clicked
}

const LESVARIABLES = {
  all : {},

  INIT : function(){
    LESVARIABLES.TRAITEMENT(document.getElementsByTagName('input'));
    LESVARIABLES.TRAITEMENT(document.getElementsByTagName('textarea'));
  },

  TRAITEMENT : function(inp){
    for (i=0; i< inp.length; i++){
      LESVARIABLES.all[inp[i].id] = inp[i].value;
    }
  }
}
// ajax
const SENDER = {
  xhr : "",
  tosend : "",

  INIT : function(){
    SENDER.xhr = new XMLHttpRequest();
    SENDER.tosend = JSON.stringify(LESVARIABLES.all);
    SENDER.SENDINFO();
  },

  // TODO: changer adresse script php
  SENDINFO : function(){
  SENDER.xhr.open('POST', 'script2.php' , true);
  SENDER.xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  SENDER.xhr.send('info='+SENDER.tosend);
  }
}


BUTTON.INIT();
