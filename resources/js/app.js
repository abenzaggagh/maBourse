require('./bootstrap');
require('bs-stepper');

import $ from 'jquery';
import Stepper from 'bs-stepper';

window.$ = window.jQuery = $;
window.stepper = Stepper;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

document.addEventListener('DOMContentLoaded', function () {
    $("#nationalite").val('Marocaine');
    $("#annee-obtention").val('2019');
    $("#diplome-type").val('BAC');
    $("#multi-dip-cursus").hide();
    $("#notes").hide();
});

$(document).ready(function () {
    window.stepper = new Stepper($('.bs-stepper')[0])

    if ($('#has-notes').val() == 'true') {
        var type_bac_id_value = $("#type-bac").val();

        $.ajax({
            type:'GET',
            url:'/typeBacalaureats/' + type_bac_id_value,
            success: function(data) {

                var typeBac = JSON.parse(data);

                $("#mat-1").text(typeBac[0].mat_1_fr + ": ");   
                $("#mat-2").text(typeBac[0].mat_2_fr + ": ");   
                $("#mat-3").text(typeBac[0].mat_3_fr + ": ");

                document.getElementById("mat-1-input").placeholder=typeBac[0].mat_1_fr;
                document.getElementById("mat-2-input").placeholder=typeBac[0].mat_2_fr;
                document.getElementById("mat-3-input").placeholder=typeBac[0].mat_3_fr;

                $("#notes").show();

            },

            error: function(data){

            }

        });
        window.stepper.next();
    }

});

$("#acceuil").click(function(event) {
    $("#acceuil").addClass("active");
    $("#bourse").removeClass("active");
    $("#candidature").removeClass("active");
});

$("#bourse").click(function(event) {
    $("#acceuil").removeClass("active");
    $("#bourse").addClass("active");
    $("#candidature").removeClass("active");
});

$("#candidature").click(function(event) {
    $("#acceuil").removeClass("active");
    $("#bourse").removeClass("active");
    $("#candidature").addClass("active");
});


$("#informations-step").click(function(event) {
    event.preventDefault();
   
    var niveau = $("select[name=niveau]").val();                        
    var nom = $("input[name=nom]").val();                               
    var prenom = $("input[name=prenom]").val();
    var nom_ar = $("input[name=nom_ar]").val();                               
    var prenom_ar = $("input[name=prenom_ar]").val();
    var cin = $("input[name=cin]").val();
    var ce = $("input[name=ce]").val();
    var sexe = $("input[name=sexe]:checked").val();
    var dateNaissance = $("input[name=dateNaissance]").val();
    var villeNaissance = $("input[name=villeNaissance]").val();
    var paysNaissance = $("input[name=paysNaissance]").val();
    var telephone_1 = $("input[name=telephone_1]").val();
    var telephone_2 = $("input[name=telephone_2]").val();

    if (niveau == 'BAC') {
        $("#bac-cursus").show();
        $("#notes").hide();
        $("#multi-dip-cursus").hide();
        $("#multi-dip-cursus").empty();
        $("#multi-dip-cursus").remove();
        $("#diplome-type").val('BAC');
    } else {
        $("#multi-dip-cursus").show();
        $("#bac-cursus").hide();
        $("#bac-cursus").empty();
        $("#bac-cursus").remove();
    }

    // TODO: FORM VALIDATION

    $.ajax({
        type:'POST',
        url:'/information',

        data: {
            niveau: niveau,
            nom: nom, 
            prenom: prenom,
            nom_ar: nom_ar, 
            prenom_ar: prenom_ar,
            cin: cin,
            ce: ce, 
            sexe: sexe, 
            dateNaissance: dateNaissance,
            villeNaissance: villeNaissance,
            paysNaissance: paysNaissance,
            telephone_1: telephone_1,
            telephone_2: telephone_2,
        },

        success: function(data) {
           
            window.stepper.next();
        },

        error: function(data){
            alert('Veuillez remplir le formulaire.');
        }

    });

});

$("#type-bac").change(function(event) {
    event.preventDefault();

    var type_bac_id_value = $("#type-bac").val();

    $.ajax({
        type:'GET',
        url:'/typeBacalaureats/' + type_bac_id_value,
        success: function(data) {

            var typeBac = JSON.parse(data);

            $("#mat-1").text(typeBac[0].mat_1_fr + ": ");   
            $("#mat-2").text(typeBac[0].mat_2_fr + ": ");   
            $("#mat-3").text(typeBac[0].mat_3_fr + ": ");

            document.getElementById("mat-1-input").placeholder=typeBac[0].mat_1_fr;
            document.getElementById("mat-2-input").placeholder=typeBac[0].mat_2_fr;
            document.getElementById("mat-3-input").placeholder=typeBac[0].mat_3_fr;

            $("#notes").show();

        },

        error: function(data){

        }

    });

});

$("#cursus-step").click(function(event) {
    event.preventDefault();

    var typeDiplome = $("#diplome-type").val();

    var serieBac = $("select[name=serie_bac]").val();

    var academie = $("input[name=academie]").val();
    var anneeAcademique = $("#annee-obtention").val();

    var noteRegionale = $("input[name=note_reg]").val();
    var noteNationale = $("input[name=note_nat]").val();

    var noteMat1 = $("input[name=mat_1]").val();
    var noteMat2 = $("input[name=mat_2]").val();
    var noteMat3 = $("input[name=mat_3]").val();

    // TODO: FORM VALIDATION

    $.ajax({
        type:'POST',
        url:'/cursus',

        data: {
            type: typeDiplome,

            academie: academie,
            anneeAcademique: anneeAcademique,

            typeBac: serieBac,

            noteRegionale: noteRegionale,
            noteNationale: noteNationale,

            noteMat1: noteMat1,
            noteMat2: noteMat2,
            noteMat3: noteMat3,
        },

        success: function(data) {
            window.stepper.next();
        },

        error: function(data) {
            alert('Veuillez remplir le formulaire.');
        },

    });

    
    
});

$("#cursus-previous").click(function(event) {
    window.stepper.previous();
});

$("#multi-dip-cursus-previous").click(function(event) {
    $("#multi-dip-cursus").hide();
    window.stepper.previous();
});

$("#documents-previous").click(function(event) {
    window.stepper.previous();
});

$('#cin-file').on('change',function(){
    var fileName = $(this).val();
    fileName = fileName.replace("C:\\fakepath\\", "");
    $(this).next('#cin-filename').html(fileName);
});

$('#baccalaureat-file').on('change',function(){
    var fileName = $(this).val();
    fileName = fileName.replace("C:\\fakepath\\", "");
    $(this).next('#baccalaureat-filename').html(fileName);
});

$('#releve-notes-file').on('change',function(){
    var fileName = $(this).val();
    fileName = fileName.replace("C:\\fakepath\\", "");
    $(this).next('#releve-notes-filename').html(fileName);
});



