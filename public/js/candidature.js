document.addEventListener('DOMContentLoaded', function () {
    var stepper = new Stepper(document.querySelector('.bs-stepper'));
});

$(document).ready(function () {
    var stepper = new Stepper($('.bs-stepper')[0]);
});

// .next()
// .previous()
// .to()

// Step 1 - Button
function stepperNext() {
    var stepper = new Stepper(document.querySelector('.bs-stepper'));
    stepper.next();

}