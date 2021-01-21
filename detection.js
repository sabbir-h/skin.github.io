function detect(){
	var brown = document.getElementById("brown");
	var black = document.getElementById("black");
	var mixed = document.getElementById("mixed");
	var unevenly = document.getElementById("unevenly");
	
	var oar = document.getElementById("oar");
	var irreguler = document.getElementById("irreguler");
	var notched = document.getElementById("notched");
	
	var smaller = document.getElementById("smaller");
	var larger = document.getElementById("larger");
	
	var y = document.getElementById("y");
	var n= document.getElementById("n");
	
	var a = b = c = d = total = 0;
	
	if(unevenly.checked==true)
		a=25;
	else if(mixed.checked== true)
		a=10;
	else
		a=0;
	
	if(irreguler.checked==true && notched.checked==true)
		b=25;
	else if(irreguler.checked==true)
		b=12.5;
	else if(notched.checked==true)
		b=12.5;
	else
		b=0;
	
	if(larger.checked==true)
		c=25;
	else
		c=0;
	
	if(y.checked==true)
		d=25;
	else
		d=0;
	
	total = a+b+c+d;
	document.getElementById("rslt").innerHTML ="Probability of melanoma is "+total+"%";
}