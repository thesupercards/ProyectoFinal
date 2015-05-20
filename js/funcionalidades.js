/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var iniciar = function () {
    connectJS();
    pintarCartas();
    $("#chat").hide();
    $("#menuOpciones").hide();
    var carta1 = document.getElementById("c1");
    carta1.addEventListener("click", movCarta1, false);
    carta1.addEventListener("mouseover", verCarta1, false);
};

function connectJS() {

}

function iconoDelChat(){
  $("#chat").fadeToggle();
}

function iconoOpciones(){
    $("#menuOpciones").fadeToggle();
}
/*
var verCarta1 = function(evt) {
    $("#c1").animate({
	top: "-=75",
	left: "-=50"
    },{
	duration: 700,
	complete: function() {
	    $("#c1").animate({
		width: "+=50",
		height: "+=75"
	    });
	}
    });
};*/

var movCarta1 = function (evt) {
    $("#c1").animate({
	top: "-=300"
    },
    {duration: 1500,
	complete: function () {
	    $("#c1").animate({
		left: "+=50"
	    },
	    {duration: 800,
		complete: function () {
		    $("#c1").css("width", "170");
		    $("#c1").css("height", "260");
		    $("#c1").css("background-image", "url('../img/G-Gaben2.png')");
		}
	    });
	}
    });
};

window.addEventListener("load", iniciar, false);

function pintarCartas() {
    var carta1 = document.createElement("DIV");
    var carta2 = document.createElement("DIV");
    var carta3 = document.createElement("DIV");
    var carta4 = document.createElement("DIV");
    var poten1 = document.createElement("DIV");
    var poten2 = document.createElement("DIV");
    $("#tablero").append(carta1, carta2, carta3, carta4, poten1, poten2);
    carta1.className = "carta1";
    carta1.setAttribute("id", "c1");
    carta2.className = "carta2";
    carta3.className = "carta3";
    carta4.className = "carta4";
    poten1.className = "poten1";
    poten2.className = "poten2";
}

function cerrarMenu() {
    $("#menuOpciones").fadeToggle();
}

function botonSurrender() {
    alert("Te has rendido like a bitch!!!");
}