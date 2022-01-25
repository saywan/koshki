var linearStepper = document.querySelector("#linearStepper"), linearStepperInstace = new MStepper(linearStepper, {
    firstActive: 0,
    showFeedbackPreloader: !0,
    autoFormCreation: !0,
    stepTitleNavigation: !0,
    feedbackPreloader: '<div class="spinner-layer spinner-blue-only">...</div>'
});
linearStepperInstace.resetStepper();
var horizStepper = document.querySelector("#horizStepper"), horizStepperInstace = new MStepper(horizStepper, {
    firstActive: 0,
    showFeedbackPreloader: !0,
    autoFormCreation: !0,
    stepTitleNavigation: !0,
    feedbackPreloader: '<div class="spinner-layer spinner-blue-only">...</div>'
});
horizStepperInstace.resetStepper();
var nonLinearStepper = document.querySelector("#nonLinearStepper"),
    nonLinearStepperInstace = new MStepper(nonLinearStepper, {
        firstActive: 0,
        showFeedbackPreloader: !0,
        autoFormCreation: !0,
        validationFunction: defaultValidationFunction,
        stepTitleNavigation: !0,
        feedbackPreloader: '<div class="spinner-layer spinner-blue-only">...</div>'
    });

function validationFunction(e, r) {
    return someValidationPlugin(e), !0
}

function defaultValidationFunction(e, r) {
    for (var t = r.querySelectorAll("input, textarea, select"), n = 0; n < t.length; n++) if (!t[n].checkValidity()) return !1;
    return !0
}

$(".btn-reset").on("click", function () {
    horizStepperInstace.openStep(0), linearStepperInstace.openStep(0), nonLinearStepperInstace.openStep(0)
});
