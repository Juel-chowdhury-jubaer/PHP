function colors(sign){
				var col=(sign.options[sign.selectedIndex].value);
				if(col){
					document.body.style.backgroundImage = "url('images/"+col+"')";
					}
			}
		
		
		function start(){
			var intervalID;
			intervalID=setInterval(currentTime,1000);
		}
		function currentTime(){
			var d=new Date();
			document.getElementById("showtime").innerHTML=d.toLocaleTimeString();
		}