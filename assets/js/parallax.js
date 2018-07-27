$(document).ready(function(){    
    $('#landing-content').mousemove(function(e){
    var x = -(e.pageX + this.offsetLeft) / 20;
    var y = -(e.pageY + this.offsetTop) / 20;
    $(this).css('background-position', (-125 + x) + 'px ' + (-105 + y) + 'px');
  });    
});