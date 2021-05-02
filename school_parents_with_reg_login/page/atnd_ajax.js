function loadData(){

	document.getElementById('d1').innerHTML = "<img src='200.gif' width='100px' height='100px'>"
	var sid = document.getElementById('sid').value;
	if (sid=='') {
		alert("please insert an valid id")
	}
	//var password = document.getElementById('password').value;

	http = new XMLHttpRequest();
	http.open('GET', 'sattend.php?sid='+sid, true);//+'&password='+password
	http.send();
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('d1').innerHTML = this.responseText;
		}
	};
}

