$( document ).ready(function() {
    setInterval(function time(){
    var d = new Date();
    var hours = 24 - d.getHours();
    var min = 60 - d.getMinutes();
    if((min + '').length == 1){
      min = '0' + min;
    }
    jQuery('#countdown #hour').html(hours);
    jQuery('#countdown #min').html(min);
  }, 1000); });