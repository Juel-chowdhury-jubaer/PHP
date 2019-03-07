function start(){
			var intervalID;
			intervalID=setInterval(currentTime,1000);
		}
		function currentTime(){
			var d=new Date();
			document.getElementById("time").innerHTML=d.toLocaleTimeString();
		}
		start();
		