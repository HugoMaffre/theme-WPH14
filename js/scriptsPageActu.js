/*jslint browser: true*/
/*global jQuery*/


jQuery(document).ready(function($){
	'use strict';

	//initialisation de l'état de base des divs
		$('#LienActu01').css("background-color", "#431c04");
		$('#LienActu02').css("background-color", "#431c04");
		$('#LienActu03').css("background-color", "#431c04");
		$('#LienActu04').css("background-color", "#f56000");
 	$('#actu01').css('display', 'none');
	$('#actu02').css('display', 'none');
	$('#actu03').css('display', 'none');
	$('#actu04').css('display', 'block');


/////////////////////////////////////////// CLICKS ///////////////////////////////////////////////
	// Quand on clique sur la catégorie de gauche
	$("#catActu01").click(function(){
		//affichage des divs
		$('#actu01').css('display', 'block');
		$('#actu02').css('display', 'none');
		$('#actu03').css('display', 'none');
		$('#actu04').css('display', 'none');
		//opacités
		$('#LienActu01').css("background-color", "#f56000");
		$('#LienActu02').css("background-color", "#431c04");
		$('#LienActu03').css("background-color", "#431c04");
		$('#LienActu04').css("background-color", "#431c04");
	});

	// Quand on clique sur la catégorie du milieu
	$("#catActu02").click(function(){
		//affichage des divs
		$('#actu01').css('display', 'none');
		$('#actu02').css('display', 'block');
		$('#actu03').css('display', 'none');
		$('#actu04').css('display', 'none');
				//opacités
		$('#LienActu01').css("background-color", "#431c04");
		$('#LienActu02').css("background-color", "#f56000");
		$('#LienActu03').css("background-color", "#431c04");
		$('#LienActu04').css("background-color", "#431c04");
	});

	// Quand on clique sur la catégorie de droite
	$("#catActu03").click(function(){
		//affichage des divs
		$('#actu01').css('display', 'none');
		$('#actu02').css('display', 'none');
		$('#actu03').css('display', 'block');
		$('#actu04').css('display', 'none');
				//opacités
		$('#LienActu01').css("background-color", "#431c04");
		$('#LienActu02').css("background-color", "#431c04");
		$('#LienActu03').css("background-color", "#f56000");
		$('#LienActu04').css("background-color", "#431c04");

	});

	// Quand on clique sur la catégorie de droite
	$("#catActu04").click(function(){
		//affichage des divs
		$('#actu01').css('display', 'none');
		$('#actu02').css('display', 'none');
		$('#actu03').css('display', 'none');
		$('#actu04').css('display', 'block');
				//opacités
		$('#LienActu01').css("background-color", "#431c04");
		$('#LienActu02').css("background-color", "#431c04");
		$('#LienActu03').css("background-color", "#431c04");
		$('#LienActu04').css("background-color", "#f56000");

	});



});		