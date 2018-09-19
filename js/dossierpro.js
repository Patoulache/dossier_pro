DOSSIER = {

  inputTitrePro : document.querySelector("#titrevise"),
  inputAutoComplet: document.querySelector('#resultautocomplete'),

  INIT: function(){
    DOSSIER.inputTitrePro.addEventListener("keyup",DOSSIER.AutoComplet);
    // DOSSIER.inputTitrePro.addEventListener("focusout",PRATIQUEPRO.INIT);
  },

  AutoComplet: function(){
    DOSSIER.errase();
    if (DOSSIER.inputTitrePro.value) {
    AJAX.Post(DOSSIER.inputTitrePro.value, "index.php?action=autocomplet",
              "titrevise=", DOSSIER.MiseEnPageAUtoComplete);
    }
  },
  // executé par AJAX.ONLOAD()
  MiseEnPageAUtoComplete: function(arr){
    list = AJAX.FromJson(arr);
    DOSSIER.inputAutoComplet.classList.add("addBorders");
    for (var i = 0; i < list.length; i++) {
      DOSSIER.inputAutoComplet.innerHTML += '<div class="autocompleted">'+list[i]+'</div>'
    }
    DOSSIER.Selection()
  },

  Selection: function(){
    for (var i = 0; i < document.querySelectorAll('.autocompleted').length; i++) {
      document.querySelectorAll('.autocompleted')[i].addEventListener("click", DOSSIER.putOnTheSelection);
    }
  },
  //insert dans INPUT le text choisi des propositions
  putOnTheSelection:function(e){
    DOSSIER.inputTitrePro.value = e.target.textContent;
    PRATIQUEPRO.INIT();
    DOSSIER.errase();
  },
  //mise à zero de la div des proposition
  errase: function(){
    DOSSIER.inputAutoComplet.innerHTML = "";
    DOSSIER.inputAutoComplet.classList.remove("addBorders");
  }
}

PRATIQUEPRO = {

  pratiquePro1: document.querySelector("#pratiquePro1"),
  pratiquePro2: document.querySelector("#pratiquePro2"),

  INIT: function(){
    if (DOSSIER.inputTitrePro.value != "") {
      //ajax (what, to, attributs,whatToDo)
      AJAX.Post(DOSSIER.inputTitrePro.value,"index.php?action=autocomplet",
                "pratiquepro=", PRATIQUEPRO.setValues);
    }
  },
  setValues: function(arr){
    liste = AJAX.FromJson(arr);
    PRATIQUEPRO.pratiquePro1.value = liste[0];
    PRATIQUEPRO.pratiquePro2.value = liste[1];
  }
}

DOSSIER.INIT();
