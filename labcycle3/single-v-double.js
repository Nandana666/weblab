var the_div=document.getElementById("the_div");
function singleclick(){
	the_div.style.backgroundColor='red';
	}
function doubleclick(){
	the_div.style.backgroundColor='green';
	}
var clickcount=0;
the_div.addEventListener('click',function(){
	clickcount++;
	if(clickcount===1){
		singleClickTimer=setTimeout(function(){
			clickcount=0;
			singleclick();
		},400);
	}else if(clickcount===2){
		clearTimeout(singleClickTimer);
		clickcount=0;
		doubleclick();
	}
},false);					
