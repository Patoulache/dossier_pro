AJAX = {
  xhr: "",
  changedToJson : false,

  Post : function(what, to, attributs,whatToDo){
    AJAX.xhr = new XMLHttpRequest(),

    AJAX.xhr.onload = function(){
      if (AJAX.changedToJson) {
        whatToDo(AJAX.FromJson(AJAX.xhr.responseText))
      } else{
      whatToDo(AJAX.xhr.responseText);
      }

    }//end ONLOAD

    if (Array.isArray(what)) {
      what = AJAX.ToJson(what);
      AJAX.changedToJson = true;
    }

    AJAX.xhr.open('POST', to , true);
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
