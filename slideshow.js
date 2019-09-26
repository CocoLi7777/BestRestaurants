
var frame = document.getElementById('frame');
var oU1 =   document.getElementById('demo');


oU1.innerHTML += oU1.innerHTML;
//offsetWidth是ul自身的绝对宽度，不包括overflow而未显示的部分
oU1.style.width = oU1.offsetWidth *2 +'px';



var runPic = function(){
  //offsetLeft是ul相对于版面或者父节点的左侧位置
  oU1.style.left = oU1.offsetLeft+5+'px';
  if(oU1.offsetLeft >= 0){
    oU1.style.left = '-1200px';
  }
}

var timer = setInterval(runPic,50);
frame.onmouseover = function(){
  clearInterval(timer);
}
frame.onmouseout = function(){
  timer = setInterval(runPic,50);
}
