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
    
    window.stepper = new Stepper($('.bs-stepper')[0]);

    if ($('#register').val() == '1') {
        window.stepper.to(2);
    }

    var element = document.getElementById("niveau");
    element.value = document.getElementById("niveau_etude").value;

});



// .next()
// .previous()
// .to()

// var stepper = new Stepper(document.querySelector('.bs-stepper'));

// Step 1 - Button
function stepperNext() {

    // e.preventDefault();

    var niveau = $("select[name=niveau]").val();
    var nom = $("input[name=nom]").val();
    var prenom = $("input[name=prenom]").val();
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
            // Display errors
            alert("Remplissez le formulaire ci-dessous.");
        }

    });
    
}

function bourseNext() {
    window.stepper.next();
}

function stepperPrevious() {
    window.stepper.previous();
}