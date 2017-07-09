window.onload=function(){
	var myScroll;
	var myScroll = new IScroll('#wrapper',
        {
            mouseWheel: true,
            click:true,
        });
    $(".xin").on("touchstart",function(){
		if($(this).attr("src","../../static/img/zjl-xin.png")){
			$(this).attr("src","../../static/img/zjl-redxin.png")
		}else{
			$(this).attr("src","../../static/img/zjl-xin.png")
		}
		})
	
	
	var input=document.querySelector('input');
	var zhe=document.querySelector(".zhe")
	document.body.onclick=function(e){
		var obj=e.target;
		if(obj.className=='sousuo'||obj.nodeName=='INPUT'){
			
			zhe.style.display="block";
		}else{
			zhe.style.display="none";
		}
		
	}
}