function calculate(){
		
	var get_value;
	var result;
	if(document.test_form.gender[0].checked)
	{
		get_value=document.test_form.gender[0].value;
	}else if(document.test_form.gender[1].checked){
		get_value=document.test_form.gender[1].value;
	}
	
	var age=document.getElementById('age').value;
	var age_final=parseFloat(age);
	
	var height1=document.getElementById('height1').value;
	var height_final1=parseFloat(height1);

	var height2=document.getElementById('height2').value;
	var height_final2=parseFloat(height2);
	var height=height_final1*30.48 + height_final2*2.54;
	var weight=document.getElementById('weight').value;
	var weight_final=parseFloat(weight);
	var e = document.getElementById("effort");
	var effort_value = e.options[e.selectedIndex].value;
	var effort_value_final=parseFloat(effort_value);
	//console.log(age+"hurrah");

	if(get_value==='male'){
		result=(655+weight*9.6+height*1.8-age*4.7)*effort_value_final;
		var result = Math.round(result); 
		
	}else if(get_value==='female'){
		result=(66+weight*13.7+height*5-age*6.8)*effort_value_final;
		var result = Math.round(result);
	}
	//console.log(result+"hurrah");
	if(!isNaN(result)){
		document.getElementById('result').innerHTML="The Calorie you need is " +result;
		var br=document.createElement("br");
		var input=document.createElement("INPUT");
		input.setAttribute("type","text");
		input.setAttribute("name","pres_value");
		input.setAttribute("id","pres_value");
		input.setAttribute("value",result);
		

		var btn = document.createElement("INPUT");
		btn.setAttribute("type","submit")
		btn.setAttribute("name","see_prescription")
		btn.setAttribute("class","see_pres")
		btn.setAttribute("value","See Prescription")

		document.getElementById('result').appendChild(br);
		document.getElementById('result').appendChild(input);
		document.getElementById('result').appendChild(br);
		document.getElementById('result').appendChild(btn);

		document.getElementById("pres_value").style.display='none';
	}else{
		document.getElementById('result').innerHTML="Sorry! You have to fill all the boxes.";
		
	}
	}
		
	
