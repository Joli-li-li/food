<script>
$(function(){
	var _rand=function(min, max){return Math.floor(Math.random()*(max-min+1))+min;};
	var ink=1,oldink=4;
	var slider=function(){
			setTimeout(function(){
				var callback=arguments.callee;
				$('.slider div').css({zIndex:0,width:'750px',height:'410px',top:'0px',left:'0px'});
				$('.slide'+oldink).css({zIndex:1});

		switch(_rand(1,4)){

			case 1:
				$('.slide'+ink).css({left:'750px',top:'0px',zIndex:2}).animate({left:'0px'},1000,slider);
				$('.slide'+oldink).css({left:'0px',top:'0px'}).animate({left:'-750px'},1000);break;

			case 2:
				$('.slide'+ink).css({top:'-410px',zIndex:2,left:'0px'}).animate({top:'0px'},1000,slider);
				$('.slide'+oldink).css({top:'0px',left:'0px'}).animate({top:'410px'},1000);break;

			case 3:
				$('.slide'+ink).css({top:'0px',zIndex:2,left:'0px',opacity:0.0}).animate({opacity:1.0},1000,slider);break;

			case 4:
				$('.slide'+ink).css({zIndex:2,left:'0px',width:'1px'}).animate({width:'750px'},1000,slider);
				$('.slide'+oldink).css({left:'0px',width:'750px'}).animate({left:'750px',width:'1px'},1000);break;

		}
	oldink=ink++;
		if(ink>4)ink=1;},1000+_rand(1,3)*1000);	
	};
	slider();
});

</script>
<div class="slider">
    <div class="slide1" style="background-image:url(./images/triple_photo.jpg"></div>
    <div class="slide2" style="background-image:url(./images/triple_photo1.jpg"></a></div>
    <div class="slide3" style="background-image:url(./images/triple_photo2.jpg"></a></div>
	<div class="slide4" style="background-image:url(./images/triple_photo3.jpg"></a></div>
</div>