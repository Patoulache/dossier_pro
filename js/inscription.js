EMAIL = {
	tohide : document.getElementById('emailtohide'),
	regex: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
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
		if (CONTROLE.CheckRegex(EMAIL.regex, EMAIL.email1.value)) {
			// console.log("avant les ajax 13");
	    AJAX.Post(EMAIL.email1.value, "index.php?action=checkmail","mail=",EMAIL.MailUsed);
		}
	},

	MailUsed: function(reponse){
	    if (reponse !== ""){ // donc deja utilisé
	      CONTROLE.ColorBorder(EMAIL.email1,"red");
	      EMAIL.yes_no = false;
				EMAIL.tohide.classList.remove('hidden');
	    } else {  // on ne connait pas cette adresse
	      EMAIL.yes_no = true;
	      CONTROLE.ColorBorder(EMAIL.email1,"black");
				EMAIL.tohide.classList.add('hidden')
	    }
		// } else{
		// 	CONTROLE.ColorBorder(EMAIL.email1,"red");
		// 	EMAIL.yes_no = false;
		// }
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
	regex : /[\wéèàùç#!@]{8,20}/,
  pass1: "",
  pass2: "",
  yes_no: false,

  INIT: function(){
    document.getElementById("password1").addEventListener("focusout", PASSWORD.setPass1);
    document.getElementById("password2").addEventListener("focusout", PASSWORD.checkValid);
  },

  setPass1: function(){
    PASSWORD.pass1 = document.getElementById("password1")

    if (CONTROLE.CheckRegex(PASSWORD.regex, PASSWORD.pass1.value)){
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
