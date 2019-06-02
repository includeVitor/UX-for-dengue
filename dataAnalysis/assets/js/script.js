const API_URL = "http://localhost:3000/";
const BASE_URL = "http://localhost:8080/";


$(function() {

    $("#search").click(
        ()=> 
        {
            let SUS_ID = $("#SUS_ID");
            let hasId = $("#hasId");
            let notFoundId = $("#notFoundId");
            let noId = $("#noId");

            if(SUS_ID.val()){
                
                resetAlerts();
                $("#Spinner").html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`) 
                $.get(
                    `${API_URL}dengueAnalysis/${SUS_ID.val()}`, 
                    (data)=>
                        { 
                            if(data[0]){

                                showTypeOfAnalysis(data);

                                fillsReportResults(data);
                                fillsAnalyticalData(data); 

                                hasId.addClass("d-block");
                            }
                            else{
                                clearButtons();
                                clearAnalyticData();
                                notFoundId.addClass("d-block");
                            }
                        }
                )
                .done(
                    () => 
                    { 
                        $("#Spinner").html("")

                    }

                )
                

            }else{
                resetAlerts();
                clearButtons();
                clearAnalyticData();
                noId.addClass("d-block");
            }
        }
    );
  
});

function resetAlerts(){

    let noId = $("#noId");
    let hasId = $("#hasId");
    let notFoundId = $("#notFoundId");
    let userData = $("#userData");
    let healthAgentData = $("#healthAgentData");
    let ExpertData = $("#ExpertData");

    noId.removeClass("d-block");
    hasId.removeClass("d-block");
    notFoundId.removeClass("d-block");
    userData.removeClass("d-block");
    healthAgentData.removeClass("d-block");
    ExpertData.removeClass("d-block");
}

function showTypeOfAnalysis(data){

    let USER_PROFILE = 1;
    let HEALTH_AGENT_PROFILE = 2;
    let EXPERT_PROFILE = 3;

    if(data[0].type == USER_PROFILE){
        $("#userData").addClass("d-block");
    }

    if(data[0].type == HEALTH_AGENT_PROFILE){
        $("#healthAgentData").addClass("d-block");
    }

    if(data[0].type == EXPERT_PROFILE){
        $("#ExpertData").addClass("d-block");
    }
}


function fillsAnalyticalData(data){

    clearAnalyticData();
    var age = $("#age");
    var weight = $("#weight");
    var height = $("#height");
    var temperature = $("#temperature");
    var heartBeat = $("#heart-beat");
    var bloodPressure = $("#blood-pressure");
    var currentDate = $("#current-date");
    var currentTime = $("#current-time");
    var symptoms = $("#symptoms");
    var currentDate = $("#current-date");
    var currentTime = $("#current-time");

    age.val(`${data[0].age}  ANOS`);
    weight.val(`${data[0].weight}  KG`);
    height.val(`${data[0].height}  METROS`);
    temperature.val(`${data[0].temperature}  Cº`);

    if(data[0].heartBeat)
        heartBeat.val(`${data[0].heartBeat}  BPM`);

    if(data[0].bloodPressure)
        bloodPressure.val(`${data[0].bloodPressure}`);
    
    if(data[0].currentDate)
        currentDate.val(`${data[0].currentDate.substring(0, 10)}`);

    if(data[0].currentTime)
        currentTime.val(`${data[0].currentTime}`);

    if(data[0].symptoms)
        symptoms.html(`${data[0].symptoms}`);
    
}

function styleAnswer(answer){

    if(answer == 1)
        return `<span class="btn btn-success">Sim</span`;

    if(answer == 2)
        return `<span class="btn btn-danger">Não</span`;

    if(answer == 3)
        return `<span class="btn btn-secondary">Não Sei</span`;
    
}

function getQuestionsFromType(data){

    let USER_PROFILE = 1;
    let HEALTH_AGENT_PROFILE = 2;
    let EXPERT_PROFILE = 3;
    let type = data[0].type;
    
    if(type == USER_PROFILE)
        $.get(
            `${API_URL}userProfile/${data[0].userProfile}`,
            (data)=>{ 

                $("#userProfileq1").html(styleAnswer(data[0].question1));
                $("#userProfileq2").html(styleAnswer(data[0].question2));
                $("#userProfileq3").html(styleAnswer(data[0].question3));
             }
        )

    if(type == HEALTH_AGENT_PROFILE)
        $.get(
            `${API_URL}healthAgentProfile/${data[0].healthAgentProfile}`,
            (data)=>{ 

                $("#healthAgentProfileq1").html(styleAnswer(data[0].question1));
                $("#healthAgentProfileq2").html(styleAnswer(data[0].question2));
                $("#healthAgentProfileq3").html(styleAnswer(data[0].question3));
                $("#healthAgentProfileq4").html(styleAnswer(data[0].question4));
             }
        )

    if(type == EXPERT_PROFILE)
    $.get(
        `${API_URL}expertProfile/${data[0].expertProfile}`,
        (data)=>{ 

            $("#expertProfileq1").html(styleAnswer(data[0].question1));
            $("#expertProfileq2").html(styleAnswer(data[0].question2));
            $("#expertProfileq3").html(styleAnswer(data[0].question3));
            $("#expertProfileq4").html(styleAnswer(data[0].question4));
            $("#expertProfileq5").html(styleAnswer(data[0].question5));
            $("#expertProfileq6").html(styleAnswer(data[0].question6));
            $("#expertProfileq7").html(styleAnswer(data[0].question7));
            $("#expertProfileq8").html(styleAnswer(data[0].question8));
            }
    )



}

function fillsReportResults(data){

    getQuestionsFromType(data);

    if($("#Accept-send").length)
        $("#Accept-send").html(`
        <div class="row mt-2 mb-3">

            <div class="col-12">
                <button class="btn btn-primary btn-block">Enviar Diagnóstico</button>
            </div>  

        </div>`);
    else
        $("#Accept-approve").html(`
        <div class="row mt-2 mb-3">

            <div class="col-6">
                <button class="btn btn-danger btn-block">Recusar</button>
            </div> 

            <div class="col-6">
                <button class="btn btn-primary btn-block">Enviar Diagnóstico</button>
            </div>  

        </div>`);


}

function clearButtons(){

    if($("#Accept-send").length)
        $("#Accept-send").html("");
    else
        if($("#Accept-approve").length)
            $("#Accept-approve").html("");
}

function clearAnalyticData(){

    $("#age").val("");
    $("#weight").val("");
    $("#height").val("");
    $("#temperature").val("");
    $("#heart-beat").val("");
    $("#blood-pressure").val("");
    $("#current-date").val("");
    $("#current-time").val("");

}