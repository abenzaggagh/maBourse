document.addEventListener('DOMContentLoaded', function () {
    $("#app-informations").hide();

    $("#app-candidatures").show();
    $("#mes-candidatures").show();
    $("#nouvelle-candidatures").hide();

    $("#discipline").hide();

    var height = $(window).height();
    $("#home").css({"min-height":height});

});

$(document).ready(function () {

});

$("#sidebar-informations").click(function(event) {
    $("#sidebar-informations").addClass("active");
    $("#sidebar-candidatures").removeClass("active");
    
    $("#app-informations").show();
    $("#app-candidatures").hide();
    
});

$("#sidebar-candidatures").click(function(event) {
    $("#sidebar-informations").removeClass("active");
    $("#sidebar-candidatures").addClass("active");

    $("#app-informations").hide();
    $("#app-candidatures").show();

    $("#mes-candidatures").show();
    $("#nouvelle-candidatures").hide();
});

$("#candidater").click(function(event) {
    $("#mes-candidatures").hide();
    $("#nouvelle-candidatures").show();
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

$("#confirmer-candidature").click(function(event) {
    event.preventDefault();

    var disciplineID = $("#confirmer-candidature").val();
    
    $.ajax({
        type:'POST',
        url:'/candidater',
        data: {
            discipline_id: disciplineID,
        },

        success: function(data) {
            
        }

    });


})