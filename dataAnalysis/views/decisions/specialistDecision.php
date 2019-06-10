<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-12 mt-2 text-center">
            <h2 class="font-weight-light"> <i class="fas fa-chart-line"></i> Decisão Especialista</h2>
        </div>
    </div>    
    <hr class="hr-user">

    <div class="row mt-4">
        <div class="col-12 text-left">
            <a href="/Ux-for-dengue/dataAnalysis/"><i class="fas fa-home btn btn-expert-decision btn-lg"></i></a>
        </div>
    </div>

    <ul class="nav nav-tabs mt-3" id="specialistDecision" role="tablist">

        <li class="nav-item">
            <a class="nav-link active" id="report-results-tab" data-toggle="tab" href="#report-results" role="tab" aria-controls="report-results" aria-selected="true">
                <i class="fas fa-database"> Dados</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="analytical-data-tab" data-toggle="tab" href="#analytical-data" role="tab" aria-controls="analytical-data" aria-selected="false">
                <i class="fas fa-question"> Perguntas</i>
            </a>
        </li>

    </ul>

    <div class="tab-content" id="specialistDecisionContent">

        <div class="tab-pane fade show active" id="report-results" role="tabpanel" aria-labelledby="report-results-tab">
           
            <div class="row mt-3 d-none" id="hasId">
                <div class="col-12">
                    <div class="alert alert-success" role="alert">
                        Identificação encontrada
                    </div>
                </div>
            </div>

            <div class="row mt-3 d-none" id="notFoundId">
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        Identificação inexistente
                    </div>
                </div>
            </div>

            <div class="row mt-3">

                <div class="col-12 d-none">
                    <div class="alert alert-warning" role="alert">
                        Não foi possível procurar uma identificação,
                        o problema pode ser o servidor ou a sua conexão
                        com internet
                    </div>
                </div>

            </div>

            <div class="row mt-3 d-none" id="noId">

                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        Preencha uma Identificação para efetuar a busca
                    </div>
                </div>

            </div>

            <div class="row mt-3">

                <div class="col-6">
                    <label for="SUS_ID">Número da análise</label>
                    <input type="text" id="SUS_ID" class="form-control" maxlength="8">
                </div>  

                <div class="col-6" style="margin-top:33px">
                    <button class="btn btn-expert-decision" type="button" id="search" >
                        <span id="Spinner"></span>
                        <i class="fas fa-search"></i> Pesquisar
                    </button>
                </div> 

            </div>

            <div class="row mt-3">

                <div class="col-12">
                    <label>Probabilidade de dengue comum: 15%</label>
                </div>    

            </div>

            <div class="row mt-3">

                <div class="col-12">
                    <label>Probabilidade de dengue hemorragica: 25%</label>
                </div>    

            </div>

            <div class="row mt-3 mb-3">

                <div class="col-12">
                    <label for="height">Sugestão do especialista</label>
                    <textarea id="specialistSuggestion" class="form-control" rows="3"></textarea>
                </div>     

            </div>

            <div id="userData" class="d-none">

                <div class="row mt-3">

                    <div class="col-md-12">
                        <h4 class="text-center font-weight-light">Dados do Usuário</h4>
                        <hr>
                    </div>

                </div>

                <div class="row mt-3">

                    <div class="col-md-12">
                        <ol>
                            <li class="mt-2">Possuí dor abdominal intensa e contínua <span id="userProfileq1"></span></li>
                            <li class="mt-2">Está sentindo algum desconforto respiratório ou dificuldade de respirar <span id="userProfileq2"></span> </li>
                            <li class="mt-2">A ingetão de algum tipo de substancia inclusive água provoca vômitos <span id="userProfileq3"></span> </li>
                        </ol>
                    </div>

                </div>

            </div>
            
            <div id="healthAgentData" class="d-none">

                <div class="row mt-3">
                    <div class="col-md-12 mt-4">
                        <h4 class="text-center font-weight-light">Dados do Agente de Saúde</h4>
                        <hr>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <ol>
                            <li class="mt-2">Apresenta algum tipo de sangramento, vias respiratórias e/ou sistema digestivo <span id="healthAgentProfileq1"></span></li>
                            <li class="mt-2">Está com dificuldade de se manter alerta apresentando sonolência e/ou irritabilidade <span id="healthAgentProfileq2"></span> </li>
                            <li class="mt-2">Reside em local sem saneamento básico <span id="healthAgentProfileq3"></span> </li>
                            <li class="mt-2">Localidade possuí coleta de lixo regular <span id="healthAgentProfileq4"></span> </li>
                        </ol>
                    </div>
                </div>

            </div>

            <div id="ExpertData" class="d-none">

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h4 class="text-center font-weight-light">Dados do Especialista</h4>
                        <hr>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12 ">
                        <ol>
                            <li class="mt-2">Paciente apresenta queda abrupta de plaquetas <span id="expertProfileq1"> </li>
                            <li class="mt-2">O paciente apresenta um aumento do tamanho do fígado (Hepatomegalia dolorosa) <span id="expertProfileq2"> </li>
                            <li class="mt-2">O paciente apresenta dificuldade de manter a temperatura corpórea <span id="expertProfileq3"> </li>
                            <li class="mt-2">O exame do hemograma encontra-se alterado <span id="expertProfileq4"> </li>
                            <li class="mt-2">O paciente não consegue ficar em ortostase <span id="expertProfileq5"> </li>
                            <li class="mt-2">Existe algum desequilíbrio proporcional de água e células sanguíneas (hermatócrito) <span id="expertProfileq6"> </li>
                            <li class="mt-2">Apresenta diminuição de diurese <span id="expertProfileq7"> </li>
                            <li class="mt-2">O exame de sorologia encontra-se alterado <span id="expertProfileq8"> </li>
                        </ol>
                    </div>
                </div>
                
            </div>

            

            <div id="Accept-send">
               
            </div>

            <div class="row mt-3 mb-3">              
                <div class="col-12 text-right">
                    <i id="next" class="fas fa-angle-right btn btn-expert-decision fa-2x"></i>
                </div>
            </div>


        </div>

        <div class="tab-pane fade" id="analytical-data" role="tabpanel" aria-labelledby="analytical-data-tab">

            <div class="row mt-3">

                <div class="col-6 ">
                    <label>Idade:</label> 
                    <input type="text" id="age" class="form-control text-right" disabled>               
                </div>
                <div class="col-6">
                    <label>Peso</label>    
                    <input type="text" id="weight" class="form-control text-right" disabled>                           
                </div>

            </div>

            <div class="row mt-3">

                <div class="col-6">
                    <label>Altura</label>   
                    <input type="text" id="height" class="form-control text-right" disabled>              
                </div>
                <div class="col-6">
                    <label>Temperatura</label>
                    <input type="text" id="temperature" class="form-control text-right" disabled>                 
                </div>

            </div>

            <div class="row mt-3">

                <div class="col-6">
                    <label>Pulso Cardiaco</label>
                    <input type="text" id="heart-beat" class="form-control text-right" disabled>                 
                </div>
                <div class="col-6">
                    <label>Pressão Sanguínea</label>    
                    <input type="text" id="blood-pressure" class="form-control text-right" disabled>                    
                </div>

            </div>

            <div class="row mt-3">

                <div class="col-6">
                    <label>Data</label>
                    <input type="date" id="current-date" class="form-control text-right" disabled>                        
                </div>
                <div class="col-6">
                    <label>Hora</label>           
                    <input type="text" id="current-time" class="form-control text-right" disabled>     
                </div>

            </div>

            <div class="row mt-3 mb-5">

                <div class="col-12">
                    <label><b>Sintomas:</b> </label>   
                    <span id="symptoms"></span>           
                </div>
              
            </div>   

            <div class="row mt-3 mb-3">
                <div class="col-2">
                    <i id="back" class="fas fa-angle-left btn btn-expert-decision fa-2x"></i>
                </div>
            </div>        

        </div>

    </div>

</div>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/decisions/specialist-decision.js"></script>