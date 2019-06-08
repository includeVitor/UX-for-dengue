$(function() {
    
  age("#age");
  weight("#weight");
  height("#height");
  temperature("#temperature")

  $("#next").click(
    () =>
    {
      $('#userProfile li:nth-child(2) a').tab('show');
    }
  )

  $("#back").click(
    () =>
    {
      $('#userProfile li:nth-child(1) a').tab('show');
    }
  )

});

const status = 1; // Pendente 
const typeanalysis = 1; // Usuário

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
            var symptoms = $("#symptoms");
            var userProfileQ1 = $("#userProfileQ1");
            var userProfileQ2 = $("#userProfileQ2");
            var userProfileQ3 = $("#userProfileQ3");

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
                symptoms: `'${symptoms.val()}'`,
                question1: userProfileQ1.val(),
                question2: userProfileQ2.val(),
                question3: userProfileQ3.val()
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