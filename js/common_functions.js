
function readyAJAX() {

	try {
		return new XMLHttpRequest();
	} catch (e) {

		try {
			return new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {

			try {
				return new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {

				return "A newer browser is needed.";

			}

		}

	}

}

function getRegioni() {

	var url = "getRegioni.php";

	//var e = document.getElementById("ddregione");

	var requestObj = readyAJAX();

	//var strIdRegione =select.value;

	//var params = "id_regione="+encodeURIComponent(strIdRegione);

	requestObj.open("POST", url, true);

	requestObj.setRequestHeader("Content-type",
			"application/x-www-form-urlencoded");

	requestObj.send();

	requestObj.onreadystatechange = function() {

		if (requestObj.readyState == 4) {

			if (requestObj.status == 200) {

				document.getElementById("ddregione").innerHTML = requestObj.responseText;

				//alert(requestObj.responseText);

			} else {

				alert(requestObj.statusText);

			}

		}

	}

}

function getProvince(select) {

	var url = "getProvince.php";

	var e = document.getElementById("ddregione");

	var requestObj = readyAJAX();

	var strIdRegione = select.value;

	var params = "id_regione=" + encodeURIComponent(strIdRegione);

	requestObj.open("POST", url, true);

	requestObj.setRequestHeader("Content-type",
			"application/x-www-form-urlencoded");

	requestObj.send(params);

	requestObj.onreadystatechange = function() {

		if (requestObj.readyState == 4) {

			if (requestObj.status == 200) {

				document.getElementById("ddprovincia").innerHTML = requestObj.responseText;

				//alert(requestObj.responseText);

			} else {

				alert(requestObj.statusText);

			}

		}

	}

}

function getAtc(select) {

	var url = "getAtc.php";

	var e = document.getElementById("ddprovincia");

	var requestObj = readyAJAX();

	var strIdProvincia = select.value;

	var params = "id_provincia=" + encodeURIComponent(strIdProvincia);

	requestObj.open("POST", url, true);

	requestObj.setRequestHeader("Content-type",
			"application/x-www-form-urlencoded");

	requestObj.send(params);

	requestObj.onreadystatechange = function() {

		if (requestObj.readyState == 4) {

			if (requestObj.status == 200) {

				document.getElementById("ddatc").innerHTML = requestObj.responseText;

				//alert(requestObj.responseText);

			} else {

				alert(requestObj.statusText);

			}

		}

	}

}

function getSquadre(select) {

	var url = "getSquadre.php";

	var e = document.getElementById("ddatc");

	var requestObj = readyAJAX();

	var strIdAtc = select.value;

	//alert(strIdAtc);

	var params = "id_atc=" + encodeURIComponent(strIdAtc);

	requestObj.open("POST", url, true);

	requestObj.setRequestHeader("Content-type",
			"application/x-www-form-urlencoded");

	requestObj.send(params);

	requestObj.onreadystatechange = function() {

		if (requestObj.readyState == 4) {

			if (requestObj.status == 200) {

				document.getElementById("ddsquadre").innerHTML = requestObj.responseText;

				//alert(requestObj.responseText);

			} else {

				alert(requestObj.statusText);

			}

		}

	}

}

function setDataEvento(select) {

	var strDataSelezionata = select.value;

	var dataEventoImputText = document.getElementById("data_evento").value = strDataSelezionata;

}
