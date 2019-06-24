candidatureHeader();

var stepper;

var stepper;

document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'));
});

$(document).ready(function () {
    window.stepper = new Stepper($('.bs-stepper')[0]);
});

// .next()
// .previous()
// .to()

// var stepper = new Stepper(document.querySelector('.bs-stepper'));

// Step 1 - Button
function stepperNext() {
    window.stepper.next();
}

function bourseNext() {
    // var stepper = new Stepper(document.querySelector('.bs-stepper'));
    window.stepper.next();
}

function stepperPrevious() {
    // var stepper = new Stepper(document.querySelector('.bs-stepper'));
    window.stepper.previous();
}


//file upload cin bacc note
function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});


//script pour recapitulatif
var niveau_etude = document.getElementById("niveau_etude");
var niveau_etude_v = document.getElementById("niveau_etude_v");
niveau_etude.addEventListener("input", function() {
	niveau_etude_v.innerText = niveau_etude.value;
  }, false);

var nationalite = document.getElementById("nationalite");
var nationalite_v = document.getElementById("nationalite_v");
nationalite.addEventListener("input", function() {
	nationalite_v.innerText = nationalite.value;
	}, false);

var nom = document.getElementById("nom");
var nom_v = document.getElementById("nom_v");
nom.addEventListener("input", function() {
		nom_v.innerText = nom.value;
	}, false);

var prenom = document.getElementById("prenom");
var prenom_v = document.getElementById("prenom_v");
prenom.addEventListener("input", function() {
		  prenom_v.innerText = prenom.value;
		}, false);

var CIN = document.getElementById("CIN");
var CIN_v = document.getElementById("CIN_v");
CIN.addEventListener("input", function() {
	CIN_v.innerText = CIN.value;
				}, false);

var code_mass = document.getElementById("code_mass");
var code_mass_v = document.getElementById("code_mass_v");
	code_mass.addEventListener("input", function() {
		code_mass_v.innerText = code_mass.value;
				}, false);


var date_naissance = document.getElementById("date_naissance");
var date_naissance_v = document.getElementById("date_naissance_v");
	date_naissance.addEventListener("input", function() {
		date_naissance_v.innerText = date_naissance.value;
				}, false);


var code_mass = document.getElementById("code_mass");
var code_mass_v = document.getElementById("code_mass_v");
		code_mass.addEventListener("input", function() {
			code_mass_v.innerText = code_mass.value;
					}, false);



var code_mass = document.getElementById("code_mass");
var code_mass_v = document.getElementById("code_mass_v");
	code_mass.addEventListener("input", function() {
		code_mass_v.innerText = code_mass.value;
				}, false);

				
		
var sexe = document.getElementById("sexe");
var sexe_v;
sexe.addEventListener("input", function() {
if (document.getElementById('homme').checked) {
	sexe_v = document.getElementById('homme').value;
  }
else{
	sexe_v = document.getElementById('femme').value;
  }
}, false);