
//resize de l'image a la taille de l'écran 
let header = document.querySelector(".header");
let fondProfil = document.querySelector(".profil")
let imageBanner = document.querySelector(".image-banner")



function viewportSize() {
    var d = document.documentElement;
    return {
        height: d.clientHeight,
        width: d.clientWidth
    };
}

window.addEventListener("load", redimmensionner);
window.addEventListener("resize", redimmensionner);

function redimmensionner(){
    var tailles = viewportSize();
    var hauteur = tailles.height;
    var largeur = tailles.width;
    //header.style.height = ((hauteur) + "px");
    header.style.width = (largeur + "px");
}




//Debut horaires
    var nowD = new Date();
    var weekday = new Array(7);
    weekday[0] = "Dimanche";
    weekday[1] = "Lundi";
    weekday[2] = "Mardi";
    weekday[3] = "Mercredi";
    weekday[4] = "Jeudi";
    weekday[5] = "Vendredi";
    weekday[6] = "Samedi";

var checkTime = function() {
    var now = new Date();
    var today = weekday[now.getDay()];
    var timeDiv = document.getElementById('timeDiv');
    var dayOfWeek = now.getDay();
    var hour = now.getHours();
    var minutes = now.getMinutes();
    
    // add 0 to one digit minutes
    if (minutes < 10) {
        minutes = "0" + minutes
    };
    
    if ((dayOfWeek == 2 || dayOfWeek == 3 || dayOfWeek == 4 || dayOfWeek == 5 || dayOfWeek == 6) && (hour >=10 && hour<= 12 || hour >= 14 && hour <= 19)) {
        timeDiv.innerHTML = "C'est " + today + ' ' + hour + ':' + minutes  + ' - ouvert!';
        timeDiv.className = 'open';
    } 
    else {
        timeDiv.innerHTML = "C'est "  + today + ' ' + hour + ':' + minutes +  ' - fermé!';
        timeDiv.className = 'closed';
    }
};

var currentDay = weekday[nowD.getDay()];
var currentDayID = "#" + currentDay; //gets todays weekday and turns it into id
$(currentDayID).toggleClass("today"); //hightlights today in the view hours modal popup

setInterval(checkTime, 1000);
checkTime();


// Animation du slogan

var text = '<p2>Armez vous  contre <br>le confinement</p2>';
var currentChar = 1;
var htmltag = false;
var cache = '';
function typewriter()
{
    var str = text.substr(0, currentChar);
    var last = str.substr(str.length -1, str.length);
    if(last != '<' && last != '>' & last != '/') {
        document.getElementById('slogan').innerHTML = str;
    }
    currentChar++;
    if(currentChar <= text.length)
    {
        if(last == '<') {
            htmltag = true;
        } else if(last == '>') {
            htmltag = false;
        }
        if(htmltag) {
            setTimeout(typewriter, 1);
        } else {
            setTimeout(typewriter, 75);
        }
    }
}



function loadtypewriter(){
    document.getElementById('slogan').innerHTML = '';
    setTimeout(typewriter, 1000); // début d'affichage après 2s
}
window.onload = loadtypewriter;


