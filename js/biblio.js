AJAX = {
  xhr: "",

  Post : function(what, attributs, to){
    AJAX.xhr = new XMLHttpRequest(),

    AJAX.xhr.onload = function(){
      return FromJson(AJAX.xhr.responseText)
    }//end ONLOAD
    WAITING.xhr.open('POST', to , true);
    WAITING.xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    WAITING.xhr.send(attribut + AJAX.Post(what));

  }
  Get : function(what, attributs, to){
    AJAX.xhr = new XMLHttpRequest(),

    AJAX.xhr.onload = function(){
      return FromJson(AJAX.xhr.responseText)
  }// END ONLOAD
  AJAX.xhr.open('GET', to + attributs + what);
  AJAX.xhr.send();

  ToJson : function(togo){
    return JSON.stringify(togo);
  }
  FomJson : function(togo){
    try {
      return JSON.parse(togo);
    } catch (e) {
      return togo;
  }
}
