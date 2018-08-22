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

  ALLSET : function() {
    const allset = ((CHECKID.nomusage.value && CHECKID.nomnaissance.value && CHECKID.adresse.value && CHECKID.prenom.value) ? true : false);
    if (allset === false){
      CHECKID.COLOUR();
    }
    return allset;
  },

  COLOUR : function(){
    if (CHECKID.nomnaissance.value === ""){
      console.log("test");
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

const BUTTON = {
  INIT : function(){
    document.getElementById('validation').addEventListener("click",BUTTON.CLICKED);
  },
  CLICKED : function(){
    CHECKID.INIT();
    console.log(CHECKID.ALLSET());
  }
}
BUTTON.INIT();
