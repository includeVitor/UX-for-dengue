$(function() {
    
    age("#age");
    weight("#weight");
    height("#height");
    temperature("#temperature");
    heartBeat("#heart-beat");

    $("#next").click(
      () =>
      {
        $('#expertProfile li:nth-child(2) a').tab('show');
      }
    )

    $("#back").click(
      () =>
      {
        $('#expertProfile li:nth-child(1) a').tab('show');
      }
    )

});

const status = 1; // Pendente 
const typeanalysis = 3; // Expert

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
            var currentDate = $("#current-date");
            var currentTime = $("#current-time");
            var expertProfileQ1 = $("#expertProfileQ1");
            var expertProfileQ2 = $("#expertProfileQ2");
            var expertProfileQ3 = $("#expertProfileQ3");
            var expertProfileQ4 = $("#expertProfileQ4");
            var expertProfileQ5 = $("#expertProfileQ5");
            var expertProfileQ6 = $("#expertProfileQ6");
            var expertProfileQ7 = $("#expertProfileQ7");
            var expertProfileQ8 = $("#expertProfileQ8");

            $.post(
              `${API_URL}dengueAnalysis`,
              {
                status: status,
                typeanalysis: typeanalysis,
                SUS_ID: SUS_ID.val(),
                age: (age.maskMoney('unmasked')[0]* 100),
                weight: weight.maskMoney('unmasked')[0],
                height: height.maskMoney('unmasked')[0],
                temperature: temperature.maskMoney('unmasked')[0],
                heartBeat: ( heartBeat.maskMoney('unmasked')[0] * 1000),
                bloodPressure: bloodPressure.val(),
                symptoms: `'${symptoms.val()}'`,
                question1: expertProfileQ1.val(),
                question2: expertProfileQ2.val(),
                question3: expertProfileQ3.val(),
                question4: expertProfileQ4.val(),
                question5: expertProfileQ5.val(),
                question6: expertProfileQ6.val(),
                question7: expertProfileQ7.val(),
                question8: expertProfileQ8.val()
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
