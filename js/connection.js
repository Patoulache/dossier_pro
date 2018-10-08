CONNECTION = {

  INIT: function(){
    document.addEventListener('keyup', CONNECTION.checkEntry);
  },


//TODO: try if if document.getElementById('email').value > 0 && document.getElementById('pass').value.value > 0
  checkEntry: function(){
    if (document.getElementById('email').value != "" && document.getElementById('pass').value != "") {
      document.getElementById('btnconnection').disabled = false;
    }else {
      document.getElementById('btnconnection').disabled = true;
    }
  }
};
CONNECTION.INIT();
