CONNECTION = {

  INIT: function(){
    document.addEventListener('keyup', CONNECTION.checkEntry);
  },

  checkEntry: function(){
    if (document.getElementById('email').value != "" && document.getElementById('pass').value != "") {
      document.getElementById('btnconnection').disabled = false;
    }else {
      document.getElementById('btnconnection').disabled = true;
    }
  }
};
CONNECTION.INIT();
