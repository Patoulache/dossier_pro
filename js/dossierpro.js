DOSSIER = {

  inputTitrePro : document.querySelector("#titrevise"),
  inputAutoComplet: document.querySelector('#resultautocomplete'),

  INIT: function(){
    DOSSIER.inputTitrePro.addEventListener("keyup",DOSSIER.AutoComplet)

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
      console.log(document.querySelectorAll('.autocompleted')[i].textContent);
    }
  },
  //insert dans INPUT le text choisi des propositions
  putOnTheSelection:function(e){
    console.log(e);
    DOSSIER.inputTitrePro.value = e.target.textContent;
    DOSSIER.errase();
  },
  //mise à zero de la div des proposition
  errase: function(){
    DOSSIER.inputAutoComplet.innerHTML = "";
    DOSSIER.inputAutoComplet.classList.remove("addBorders");
  }
}
DOSSIER.INIT();
