EMAIL = {
	email1 : "",
	email2 : "",
  yes_no : false,

	INIT : function(){
		document.getElementById("email1").addEventListener("focusout", EMAIL.checkUsed);
		document.getElementById("email2").addEventListener("focusout", EMAIL.checkValid);
	},

// chech if email already used
	checkUsed: function(){
		EMAIL.email1 = document.getElementById("email1");
    if (EMAIL.email1.value !== "") {
      let address = AJAX.Post(EMAIL.email1.value, "index.php", "action=checkmail");
    }
    if (address){ // donc deja utilisé
      EMAIL.email1.style.border = "thick solid red";
      EMAIL.yes_no = false;
    } else {  // on ne connait pas cette adresse
      EMAIL.yes_no = true;
      CONTROLE.ColorBorder(EMAIL.email2,"black");
    }
	},

//check if email1 and email2 are the same
  checkValid : function(){
    EMAIL.email2 = document.getElementById("email2");
    if (CONTROLE.AreTheSame(EMAIL.email1.value, EMAIL.email2.value)){
      EMAIL.yes_no = true;
      CONTROLE.ColorBorder(EMAIL.email2,"black");
      EMAIL.checkUsed;
    }else{
      CONTROLE.ColorBorder(EMAIL.email2, "red");
      EMAIL.yes_no = false;
    }
  }
}

PASSWORD = {
  pass1: "",
  pass2: "",
  yes_no: false,

  INIT: function(){
    document.getElementById("password1").addEventListener("focusout", PASSWORD.setPass1);
    document.getElementById("password2").addEventListener("focusout", PASSWORD.checkValid);
  },

  setPass1: function(){
    PASSWORD.pass1 = document.getElementById("password1")
    if (CONTROLE.CheckPass(PASSWORD.pass1.value)){
      PASSWORD.yes_no = true;
      CONTROLE.ColorBorder(PASSWORD.pass1, "black");
    }else{
      CONTROLE.ColorBorder(PASSWORD.pass1, "red");
  }
},

  checkValid: function(){
    console.log("passici");
    PASSWORD.pass2 = document.getElementById("password2")
    if (CONTROLE.AreTheSame(PASSWORD.pass1.value,PASSWORD.pass2.value) && PASSWORD.yes_no){
      CONTROLE.ColorBorder(PASSWORD.pass2,"black");
    }else{
      PASSWORD.yes_no = false;
      CONTROLE.ColorBorder(PASSWORD.pass2,"red");
    }
  }
}

INITIALISATION = {

  INIT: function(){
    EMAIL.INIT();
    PASSWORD.INIT();
  }
}
INITIALISATION.INIT();
