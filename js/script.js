window.onload = function () {
	//check if geolocation is already asked
	if(sessionStorage.getItem('fired') === null) {
		getLocation();
		sessionStorage.setItem('fired', 'yes');
    }
}

function getLocation() {
    if (navigator.geolocation) {
		//get the current coordinates of the user
        navigator.geolocation.getCurrentPosition(showPosition, errorCallback);
		document.body.innerHTML += '<div id="loading"></div>';
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

function errorCallback(error) {
    if (error.code == error.PERMISSION_DENIED) {
        var loading = document.getElementById("loading");
		document.body.removeChild(loading);
    }
}
	
function showPosition(position) {			
    //Create query for the API.
    var latitude = "latitude=" + position.coords.latitude;
    var longitude = "&longitude=" + position.coords.longitude;

    const Http = new XMLHttpRequest();
    Http.open("GET", "https://api.bigdatacloud.net/data/reverse-geocode-client?" + latitude + longitude);
    Http.send();

    Http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
			//parse the response
			var json = JSON.parse(this.responseText);
			  
			//get the name of the city
			var city = json.localityInfo.administrative[2].isoName;
			  
			//remove accent from city name if existe like Fés => Fes
			var normalized_city = city.normalize('NFD').replace(/[\u0300-\u036f]/g, "");

			//get the page name like Fes => fes
			var page_name = normalized_city.toLowerCase();

			switch(normalized_city)
			{  
				case 'Casablanca':
					window.location = 'http://127.0.0.1:8000/'+ page_name +'.php'
					break;
					
				case 'Fes':
					window.location = 'http://127.0.0.1:8000/'+ page_name +'.php'
					break;
				
				case 'Rabat':
					window.location = 'http://127.0.0.1:8000/'+ page_name +'.php'
					break;
			}
        }
    };
}