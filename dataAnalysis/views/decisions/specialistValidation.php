<div class="container-fluid">

    <div class="col-md-12 mt-2">
        <h1 class="text-center font-weight-light">Validação do Especialista</h1>
    </div>


    <ul class="nav nav-tabs mt-5" id="healthAgent" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="initial-data-tab" data-toggle="tab" href="#initial-data" role="tab" aria-controls="initial-data" aria-selected="true">
                Resultados do Relatório
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="helth-agent-report-tab" data-toggle="tab" href="#helth-agent-report" role="tab" aria-controls="helth-agent-report" aria-selected="false">
                Dados analíticos
            </a>
        </li>
    </ul>

    <div class="tab-content" id="healthAgentContent">

        <div class="tab-pane fade show active" id="initial-data" role="tabpanel" aria-labelledby="initial-data-tab">
       

            <form>

                <div class="row mt-5">

                    <div class="col-12">
                        <label for="SUS_ID">Identificação</label>
                        <input type="text" id="SUS_ID" class="form-control">
                    </div>  

                </div>

                <div class="row mt-2">

                    <div class="col-12">
                        <label>Probabilidade de dengue comum: 15%</label>
                    </div>    

                </div>

                <div class="row mt-2">

                    <div class="col-12">
                        <label>Probabilidade de dengue hemorragica: 20%</label>
                    </div>    

                </div>

                <div class="row mt-4 mb-4">

                    <div class="col-12 text-center">
                        <i class="fas fa-info fa-3x btn btn-info" ></i>
                    </div>     

                </div>
                
                <div class="row mt-2">

                    <div class="col-12">
                        <label for="height">Resultado para avaliação: Normal</label>
                    </div>     

                </div>
                
                <div id="userData" >

                    <div class="col-md-12 mt-4">
                        <h4 class="text-center font-weight-light">Dados do Usuário</h4>
                        <hr>
                    </div>

                    <div class="col-md-12 mt-2">
                        <ol>
                            <li class="mt-2">Possuí dor abdominal intensa e contínua? Não sei</li>
                            <li class="mt-2">Está sentindo algum desconforto respiratório ou dificuldade de respirar? Não sei</li>
                            <li class="mt-2">A ingetão de algum tipo de substancia inclusive água provoca vômitos? Não sei</li>
                        </ol>
                    </div>

                </div>
                
                <div id="health-agent-data">

                    <div class="col-md-12 mt-4">
                        <h4 class="text-center font-weight-light">Dados do Agente de Saúde</h4>
                        <hr>
                    </div>

                    <div class="col-md-12 mt-2">
                        <ol>
                            <li class="mt-2">Apresenta algum tipo de sangramento, vias respiratórias e/ou sistema digestivo? Não sei</li>
                            <li class="mt-2">Está com dificuldade de se manter alerta apresentando sonolência e/ou irritabilidade? Não sei</li>
                            <li class="mt-2">Reside em local sem saneamento básico? Não sei</li>
                            <li class="mt-2">Localidade possuí coleta de lixo regular? Não sei</li>
                        </ol>
                    </div>

                </div>
                <div id="specialist-data">

                    <div class="col-md-12 mt-4">
                        <h4 class="text-center font-weight-light">Dados do Especialista</h4>
                        <hr>
                    </div>

                    <div class="col-md-12 mt-2">
                        <ol>
                            <li class="mt-2">Paciente apresenta queda abrupta de plaquetas? Não sei</li>
                            <li class="mt-2">O paciente apresenta um aumento do tamanho do fígado (Hepatomegalia dolorosa)? Não sei</li>
                            <li class="mt-2">O paciente apresenta dificuldade de manter a temperatura corpórea? Não sei</li>
                            <li class="mt-2">O exame do hemograma encontra-se alterado? Não sei</li>
                            <li class="mt-2">O paciente não consegue ficar em ortostase? Não sei</li>
                            <li class="mt-2">Existe algum desequilíbrio proporcional de água e células sanguíneas (hermatócrito)? Não sei</li>
                            <li class="mt-2">Apresenta diminuição de diurese? Não sei</li>
                            <li class="mt-2">O exame de sorologia encontra-se alterado? Não sei</li>
                        </ol>
                    </div>

                </div>
                <div class="row mt-2 mb-3">

                    <div class="col-6">
                        <button class="btn btn-danger btn-block">Recusar</button>
                    </div> 

                    <div class="col-6">
                        <button class="btn btn-primary btn-block">Aceitar</button>
                    </div>  

                </div>

            </form>

        </div>

        <div class="tab-pane fade" id="helth-agent-report" role="tabpanel" aria-labelledby="helth-agent-report-tab">

            <div class="row mt-3">

                <div class="col-6">
                    <label>Idade</label>                
                </div>
                <div class="col-6">
                    <label>Peso</label>                
                </div>

            </div>

            <div class="row mt-3">

                <div class="col-6">
                    <label>Altura</label>                
                </div>
                <div class="col-6">
                    <label>Temperatura</label>                
                </div>

            </div>

            <div class="row mt-3">

                <div class="col-6">
                    <label>Pulso</label>                
                </div>
                <div class="col-6">
                    <label>Pressão</label>                
                </div>

            </div>

            <div class="row mt-3">

                <div class="col-6">
                    <label>Data</label>                
                </div>
                <div class="col-6">
                    <label>Hora</label>                
                </div>

            </div>

            <div class="row mt-3">

                <div class="col-12">
                    <label>Sintomas</label>                
                </div>
              
            </div>

            <div class="row mt-3 mb-3">

                <div class="col-12">
                    <label>Endereço</label>                
                </div>
              
            </div>

           

        </div>

    </div>

</div>