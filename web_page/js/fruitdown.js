<script>
	var fruitmax=25 
	var fruitletter=["<img src=images/gif/apple.gif>","<img src=images/gif/peach.gif>","<img src=images/gif/cherry.gif>","<img src=images/gif/watermelon.gif>","<img src=images/gif/lemon.gif>","<img src=images/gif/raspberries.gif>","<img src=images/gif/grape.gif>","<img src=images/gif/orange.gif>","<img src=images/gif/kivi.gif>" , "<img src=images/gif/cabbage.gif>","<img src=images/gif/cabbage_red.gif>","<img src=images/gif/pumpkin.gif>","<img src=images/gif/tomato.gif>","<img src=images/gif/pepper.gif>","<img src=images/gif/beet.gif>","<img src=images/gif/onion.gif>","<img src=images/gif/cucumber.gif>","<img src=images/gif/salad.gif>"];
		// Set the letter that creates your fruitflake (recommended:*)
	var sinkspeed=1.5   // Set the speed of sinking (recommended values range from 0.3 to 2)
	var fruitmaxsize=80  // Set the maximal-size of your fruitflaxes
	var fruitminsize=40  // Set the minimal-size of your fruitflaxes
	var fruitsizerange=fruitmaxsize-fruitminsize
		// Set the fruiting-zone
		// Set 1 for all-over-fruiting, set 2 for left-side-fruiting 
		// Set 3 for center-fruiting, set 4 for right-side-fruiting
	var fruitingleft=0 //левая граница присутствия плодов
	var fruitingwidth=1.0    //ширина присутствия плодов в окне
	var opac=0.0       //непрозрачность плодов (0.0-1.0), при 1.0 в 2 раза быстрее работает.
	var stepTime=120    //шаг покадровой анимации (мсек). При менее 100 сильно нагружает процессор
	var fruit=new Array()
	var marginbottom
	var marginright
	var timer
	var x_mv=new Array();   var crds=new Array();   var lftrght=new Array();
	var browserinfos=navigator.userAgent 
	d=document
	var isOpera=self.opera  
	var ie5=d.all&&d.getElementById&&!isOpera
	var ns6=d.getElementById&&!d.all
	var browserok=ie5||ns6||isOpera

		function randommaker(range)
			{return Math.floor(range*Math.random())}

			function botRight()
			{
				if(ie5||isOpera)
				{
				  marginbottom=d.body.clientHeight;  
				  marginright=d.body.clientWidth;
				}
				else
				  if(ns6)
				  {
					marginbottom=innerHeight; marginright=innerWidth;
				  }
			}





		function checkPgDn()
		{
		 scrltop=ns6?pageYOffset:document.body.scrollTop;
		}
		
		
		


		function initfruit() 
		{
		  checkPgDn();if(ns6)setInterval("checkPgDn()",999);
		  botRight();
		  for (i=0;i<=fruitmax;i++)
		  {
			crds[i] = 0;                      
			lftrght[i] = Math.random()*20;         
			x_mv[i] = 0.03 + Math.random()/10;
			fruit[i]=d.getElementById("s"+i)
			fruit[i].style.fontSize=fruit[i].size=randommaker(fruitsizerange)+fruitminsize
			fruit[i].sink=sinkspeed*fruit[i].size/5
			newPosFruit(randommaker(marginbottom-3*fruit[i].size));
		  }
		  movefruit();
		}




						
		function newPosFruit(y)
		{
		  var o;
		  fruit[i].posx=randommaker(marginright*fruitingwidth-2*fruit[i].size)+marginright*fruitingleft
		  fruit[i].posy=y+(ns6?pageYOffset:d.body.scrollTop);
		  fruit[i].size=randommaker(fruitsizerange)+fruitminsize;
		  if(fruit[i].hasChildNodes()&&(o=fruit[i].childNodes[0]).tagName=='IMG') o.width=o.height=randommaker(fruitsizerange/1.6)+fruitminsize;
		}





		function movefruit() 
		{
		  for (i=0;i<=fruitmax;i++) 
		  {
			fruit[i].style.top=fruit[i].posy+=fruit[i].sink+lftrght[i]*Math.sin(crds[i])/3;
			crds[i] += x_mv[i];
			fruit[i].style.left=fruit[i].posx+lftrght[i]*Math.sin(crds[i]);
			if(fruit[i].posy>=marginbottom-3*fruit[i].size+scrltop || parseInt(fruit[i].style.left)>(marginright-3*lftrght[i]))newPosFruit(0);
		  }
		  var timer=setTimeout("movefruit()",stepTime)
		}



	for (i=0;i<=fruitmax;i++)
		
	{
		d.write("<span id='s"+i+"' style='position:absolute;"+(opac<1?"-moz-opacity:"+opac+";filter:alpha(opacity="+(opac*100)+")":"")+";top:-"+fruitmaxsize+"'>"+fruitletter[Math.floor(fruitletter.length*Math.random())]+"</span>")
	}           //-moz-opacity:0.5;filter:alpha(opacity=50);






	onload=function()
	{
		if(browserok)setTimeout("initfruit()",99);
	}

onmousewheel = onscroll = function(){checkPgDn()}
onresize = function(){botRight();} 

</script>