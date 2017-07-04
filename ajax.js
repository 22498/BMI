document.getElementById('submit').onclick = function() {
let gewicht = document.getElementById("gewicht").value;
let lengte = document.getElementById("lengte").value;

ajax(gewicht, lengte);
}

function ajax(gewicht, lengte) {

	let debug = true;

	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	let controlScript = "BMI.php";
	let httpString = controlScript + "?gewicht=" + gewicht + "&lengte=" + lengte;
	let httpResponse = "";
	if(debug) console.log(httpString);

	xmlhttp.open("GET", httpString, true);
	xmlhttp.send();
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if(debug) console.log("http response = " + xmlhttp.responseText);
			httpResponse = xmlhttp.responseText;
			document.getElementById("resultaat").innerHTML = httpResponse;
		}
	}
}
