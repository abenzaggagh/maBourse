candidatureHeader();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var stepper;

document.addEventListener('DOMContentLoaded', function () {

    
});

$(document).ready(function () {

    $("#discipline").hide();
    $("notes_mat").hide();

    var niveau = $("#niveau");

    niveau.change(function() {
        niveau.addClass("form-input");
    });
    
    window.stepper = new Stepper($('.bs-stepper')[0]);

    if ($('#register').val() == '1') {
        window.stepper.to(2);
    }
  
});



$("#informations").click(function(event) {
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

$("#programmes").change(function(event) {
    event.preventDefault();

    var programmes = $("#programmes");
    
    var programme_id_value = programmes.val();

    $("#disciplines").empty();

    $("#disciplines").removeAttr("disabled");

    $.ajax({
        type:'GET',
        url:'/disciplines/' + programme_id_value,
        
        success: function(data) {


            var disciplines = JSON.parse(data);

            $("#disciplines").append('<option selected disabled>Discipline</option>');

            disciplines.forEach(function(element) {
                $("#disciplines").append('<option value="'+element.discipline_id+'">'+ element.titre + '</option>');
            });

        },

        error: function(data){
            alert(' Selected' + selectedValue);
        }

    });
});

$("#disciplines").change(function(event) {
    event.preventDefault();

    $("#discipline").show();

    var discipline_id_value = $("#disciplines").val();

    $("#type-bac").empty();
    $("#type-bac").removeAttr("disabled");

    $.ajax({
        type:'GET',
        url:'/discipline/' + discipline_id_value,
        success: function(data) {

            var disciplines = JSON.parse(data);

            $("#type-bac").append('<option selected disabled>Série de Baccalauréat</option>');

            disciplines.forEach(function(element) {
                $("#type-bac").append('<option value="'+element.type_bacalaureat_id+'">'+ element.bacalaureat_fr + '</option>');          
            });

        },

        error: function(data){
            alert('NO');
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
            alert('NO');
        }

    });

    

});

$("#candidature").click(function(event) {
    // event.preventDefault();

    var noteRegionale;
    var noteNationale;

    var noteMat1;
    var noteMat2;
    var noteMat3;
    
    noteRegionale = $("#noteRegionale").val();

    alert(noteRegionale);

});

function cand() {

    var disciplineID = $("#disciplines").val();

    var typeBacID = $("#type-bac").val();

    var anneeAcademique = $("#anneeAcadimique").val();
    var academique = $("#academie").val();
    
    var noteRegionale = $("#note-reg").val();
    var noteNationale = $("#note-nat").val();

    var noteMat1 = $("#mat-1-input").val();
    var noteMat2 = $("#mat-2-input").val();
    var noteMat3 = $("#mat-3-input").val();

    // alert(disciplineID + ' T ' + typeBacID + ' AA ' + anneeAcademique  + ' A ' + academique);

    $.ajax({
        type:'POST',
        url:'/candidature',
        data: {
            disciplineID: disciplineID,
            typeBacID: typeBacID,
            anneeAcademique: anneeAcademique,
            academique: academique,
            noteRegionale: noteRegionale,
            noteNationale: noteNationale,
            noteMat1: noteMat1,
            noteMat2: noteMat2,
            noteMat3: noteMat3,
        },
    
        success: function(data) {

        },

        error: function(data) {

        },



    });

}

function bourseNext() {
    window.stepper.next();
}

$("#previous").click(function() {
    window.stepper.previous();
})




