EMAIL = {
	tohide : document.getElementById('emailtohide'),
	regex: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
	email1 : document.getElementById("email1"),
	email2 : document.getElementById("email2"),
	emailUsable: false,   //not already used
  yes_no : false,      //both are the same

	INIT : function(){
		EMAIL.email1.addEventListener("focusout", EMAIL.checkUsed);
		EMAIL.email2.addEventListener("focusout", EMAIL.checkValid);
	},

//send request AJAX with email
	checkUsed: function(){
		// EMAIL.email1 = document.getElementById("email1");
		if (CONTROLE.CheckRegex(EMAIL.regex, EMAIL.email1.value)) {
	    AJAX.Post(EMAIL.email1.value, "index.php?action=checkmail","mail=",EMAIL.MailUsed);
		}
	},

	// traite la réponse de la requette AJAX email
	MailUsed: function(reponse){
	    if (reponse === "1"){ // donc deja utilisé
	      CONTROLE.ColorBorder(EMAIL.email1,"red");
				EMAIL.emailUsed = false;
				EMAIL.yes_no = false;
				EMAIL.tohide.classList.remove('hidden');
	    } else {  // on ne connait pas cette adresse
	      CONTROLE.ColorBorder(EMAIL.email1,"black");
				EMAIL.tohide.classList.add('hidden')
				EMAIL.emailUsable = true;
	    }

	},

//check if email1 and email2 are the same
  checkValid : function(){
    // EMAIL.email2 = document.getElementById("email2");
    if (CONTROLE.AreTheSame(EMAIL.email1.value, EMAIL.email2.value) && EMAIL.emailUsable){
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
	regex : /[\wéèàùç#!@]{8,20}/,
  pass1: document.getElementById("password1"),
  pass2: document.getElementById("password2"),
	regexPass: false,
  yes_no: false,   //both the same

  INIT: function(){
    PASSWORD.pass1.addEventListener("focusout", PASSWORD.setPass1);
    PASSWORD.pass2.addEventListener("keyup", PASSWORD.checkValid);
  },

  setPass1: function(){
    // PASSWORD.pass1 = document.getElementById("password1")

    if (CONTROLE.CheckRegex(PASSWORD.regex, PASSWORD.pass1.value)){
      CONTROLE.ColorBorder(PASSWORD.pass1, "black");
			PASSWORD.regexPass = true;
    }else{
      CONTROLE.ColorBorder(PASSWORD.pass1, "red");
			PASSWORD.regexPass = false;
  }
},

  checkValid: function(){
    // PASSWORD.pass2 = document.getElementById("password2")
    if (CONTROLE.AreTheSame(PASSWORD.pass1.value,PASSWORD.pass2.value)){
      CONTROLE.ColorBorder(PASSWORD.pass2,"black");
			PASSWORD.yes_no = true;
    }else{
      PASSWORD.yes_no = false;
      CONTROLE.ColorBorder(PASSWORD.pass2,"red");
    }
  }
}

//si tout est valide , le BUTTON passe en clickable
BUTTON = {
	INIT: function(){
		document.addEventListener("keyup",BUTTON.freeBTN);
	},
	freeBTN: function(){

		if (EMAIL.yes_no && PASSWORD.yes_no && EMAIL.emailUsable && PASSWORD.regexPass) {
			document.getElementById('BTNinscrip').disabled = false;
		}else {
			document.getElementById('BTNinscrip').disabled = true;
		}
	}
}

INITIALISATION = {

  INIT: function(){
    EMAIL.INIT();
    PASSWORD.INIT();
		BUTTON.INIT();
  }
}
INITIALISATION.INIT();
