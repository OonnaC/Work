
function interpreteMeteo(data){
    console.log(data['target']);

}

function load() {
    url="https://api.openweathermap.org/data/2.5/weather?q=Paris,France&appid=85be96e5e540cb5d1ae7ffa7c07bdd3a";
    requete = new XMLHttpRequest(); 
    requete.open("GET", url, true); 
    requete.onload = interpreteMeteo; 
    requete.send(); 
}
