$(function() {
    
    age("#age");
    weight("#weight");
    height("#height");
    temperature("#temperature");
    heartBeat("#heart-beat");

    $("#next").click(
      () =>
      {
        $('#healthAgentProfile li:nth-child(2) a').tab('show');
      }
    )

    $("#back").click(
      () =>
      {
        $('#healthAgentProfile li:nth-child(1) a').tab('show');
      }
    )


});

const status = 1; // Pendente 
const typeanalysis = 2; // Health Agent

(function() {
    'use strict';
    window.addEventListener('load', function() {
      
      var forms = document.getElementsByClassName('needs-validation');
      
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {

          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }else{
            
            var SUS_ID = $("#SUS_ID");
            var age = $("#age");
            var weight = $("#weight");
            var height = $("#height");
            var temperature = $("#temperature");
            var heartBeat = $("#heart-beat");
            var bloodPressure = $("#blood-pressure");
            var symptoms = $("#symptoms");
            var healthAgentProfileQ1 = $("#healthAgentProfileQ1");
            var healthAgentProfileQ2 = $("#healthAgentProfileQ2");
            var healthAgentProfileQ3 = $("#healthAgentProfileQ3");
            var healthAgentProfileQ4 = $("#healthAgentProfileQ4");

            $.post(
              `${API_URL}dengueAnalysis`,
              {
                status: status,
                typeanalysis: typeanalysis,
                SUS_ID: SUS_ID.val(),
                age: (age.maskMoney('unmasked')[0] * 100),
                weight: weight.maskMoney('unmasked')[0],
                height: height.maskMoney('unmasked')[0],
                temperature: temperature.maskMoney('unmasked')[0],
                heartBeat: (heartBeat.maskMoney('unmasked')[0] * 1000),
                bloodPressure: bloodPressure.val(),
                symptoms: `'${symptoms.val()}'`,
                question1: healthAgentProfileQ1.val(),
                question2: healthAgentProfileQ2.val(),
                question3: healthAgentProfileQ3.val(),
                question4: healthAgentProfileQ4.val()
              }
            ).done(function(){
                alert("dados enviados com sucesso");
                window.location.href= `${BASE_URL}UX-for-dengue/dataCollect/`;
            });

          }

          form.classList.add('was-validated');
          event.preventDefault(); 
          
        }, false);
        
      });
    }, false);
  })();