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
const BUTTON = {
  INIT : function(){
    document.getElementById('validation').addEventListener("click",BUTTON.CLICKED);
  },
  CLICKED : function(){
    CHECKID.INIT();
    if (CHECKID.ALLSET()){
      LESVARIABLES.INIT();
    } //end if
  }// end clicked
}

const LESVARIABLES = {
  inputs : "",
  textareas : "",
  all : [],

  INIT : function(){
    console.log("et ici on a " + CHECKID.prenom.value);
    LESVARIABLES.inputs = document.getElementsByTagName('input');
    LESVARIABLES.textareas = document.getElementsByTagName('textarea');

    LESVARIABLES.TRAITEMENT(LESVARIABLES.inputs);
    LESVARIABLES.TRAITEMENT(LESVARIABLES.textareas);
  },

  TRAITEMENT : function(inp){
    for (i=0; i< inp.length; i++){
      LESVARIABLES.all[inp[i].id] = inp[i].value;
    }
    console.log(LESVARIABLES.all);
  }
}
BUTTON.INIT();
