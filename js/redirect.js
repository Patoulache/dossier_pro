const countDown = {

  monSpan: document.querySelector('#count'),
  number: 4,

  INIT: function(){
    console.log("on test");
    (countDown.number >= 0 )?  countDown.countdown = setTimeout(countDown.ChangeToTime, 1000) : clearTimeout(countDown.countdown);
  },

  ChangeToTime: function(){
    countDown.monSpan.innerHTML = countDown.number;
    countDown.number -= 1;
    countDown.INIT();
  }
};
countDown.INIT();
