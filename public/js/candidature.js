candidatureHeader();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


var stepper;

document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'));
});

$(document).ready(function () {
    // $('#naissance').val(new Date().toDateInputValue());
    window.stepper = new Stepper($('.bs-stepper')[0]);
    // window.stepper.to(2);
});



// .next()
// .previous()
// .to()

// var stepper = new Stepper(document.querySelector('.bs-stepper'));

// Step 1 - Button
function stepperNext() {

    // e.preventDefault();
    // niveau-etude

    var niveau = $("select[name=niveau]").val();
    var nom = $("input[name=nom]").val();
    var prenom = $("input[name=prenom]").val();
    var cin = $("input[name=cin]").val();
    var ce = $("input[name=ce]").val();
    var sexe = $("input[name=sexe]").val();
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
           alert(data.success);
        }

    });

    window.stepper.next();
    
}

function bourseNext() {
    window.stepper.next();
}

function stepperPrevious() {
    window.stepper.previous();
}