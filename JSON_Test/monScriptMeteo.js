function load() {
    var mydata = JSON.parse(data);
    alert(mydata[0].country);
    alert(mydata[0].temp);
}

function interpreteMeteo(data){
	
	 console.log("mmm");	 
	 alert(data.name);
	 alert(data.weather[0].description);
	 alert(data.main.temp);
}
