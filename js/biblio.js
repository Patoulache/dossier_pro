AJAX = {
  xhr: "",
  tst: "",

  Post : function(what, to, attributs){
    AJAX.xhr = new XMLHttpRequest(),

    AJAX.xhr.onload = function(){
      AJAX.tst = AJAX.xhr.responseText;
    }//end ONLOAD
    AJAX.xhr.open('POST', to , false);
    AJAX.xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    AJAX.xhr.send(attributs+what);
  },

  Get : function(what, attributs, to){
    AJAX.xhr = new XMLHttpRequest(),

    AJAX.xhr.onload = function(){
      return AJAX.FromJson(AJAX.xhr.responseText)
  }// END ONLOAD
    AJAX.xhr.open('GET', to + attributs + what);
    AJAX.xhr.send();
  },

  ToJson : function(togo){
    return JSON.stringify(togo);
  },

  FromJson : function(togo){
    try {
      return JSON.parse(togo);
    } catch (e) {
      return togo;
    }
  }
}


CONTROLE = {
  CheckRegex: function(reg,pass){
    regex = new RegExp(reg)
    return regex.test(pass);
  },

  ColorBorder : function(qui,couleur){
    qui.style.border = "solid 2px "+ couleur;
  },

  AreTheSame : function(a,b){
    if (a === b){
      return true;
    }else{
      return false;
    }
  }
}
