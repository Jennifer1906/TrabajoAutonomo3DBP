/*
  Estudiante: Jennifer Elizabeth Quizhpe
  Ciclo: Quinto "A"
*/

novol = () =>{
	var vid = document.getElementById("video"); 
    vid.volume = 0.2;
}
sivol = () =>{
	var vid = document.getElementById("video"); 
    vid.volume = 1.0;
}
vol = () =>{
	var vid = document.getElementById("video"); 
    if(vid.volume==1){	  
		document.getElementById("vol").className = "btn-danger fa fa-volume-up ";  
		vid.volume=0; 
		} else {
		  document.getElementById("vol").className ="btn-success fa fa-volume-up ";
		  vid.volume=1; 
	}
}

document.onkeydown = checkKey;

function checkKey(e) {

    e = e || window.event; 
    if (e.keyCode == '38') {
        // tecla enter
		stop();
    }
	else if (e.keyCode == '32') {
	    // tecla espacio 32
	    playPause();
    }
    else if (e.keyCode == '13') {
	    // tecla enter
	    stop();
    }
    else if (e.keyCode == '37') {
       // tecla izquierda
	   atrasar();  
    }
    else if (e.keyCode == '39') {
       // tecla derecha
	   adelantar();
     }

}

function playPause() { 
	var myVideo = document.getElementById("video"); 

  	if (myVideo.paused) {
		  
	document.getElementById("play").className = "btn-primary  fa fa-pause";  
    myVideo.play(); 
	} else {
 	 document.getElementById("play").className ="btn-primary  fa fa-play";
    myVideo.pause(); }

} 

stop = () =>{
	
	var myVideo = document.getElementById("video");  
	document.getElementById("play").className ="btn-primary  fa fa-play";
	myVideo.pause();
    myVideo.currentTime = 0;
}

adelantar = () => {
	var myVideo = document.getElementById("video");  
		myVideo.currentTime += 5;   
}
atrasar = () => {
	var myVideo = document.getElementById("video");  
		myVideo.currentTime -= 5;   
}
