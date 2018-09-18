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

  MiseEnPageAUtoComplete: function(arr){
    list = AJAX.FromJson(arr);
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
  putOnTheSelection:function(e){
    console.log(e);
    DOSSIER.inputTitrePro.value = e.target.textContent;
    DOSSIER.errase();
  },
  errase: function(){
    DOSSIER.inputAutoComplet.innerHTML = "";
  }
}
DOSSIER.INIT();
