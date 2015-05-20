function pass(){
	var p1 = document.getElementById("pass1");
	var p2 = document.getElementById("pass2");
	var sino = document.getElementById("sino");
	
	if (p1.value != p2.value){
		p1.style.border="2px solid red";
		p2.style.border="2px solid red";
		sino.innerHTML = "X";
	}
	else{
		p1.style.border="2px solid green";
		p2.style.border="2px solid green";
		sino.innerHTML = "V";
	}
}