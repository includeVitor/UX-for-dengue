<div class="container-fluid">

    <div class="col-md-12 mt-2">
        <h1 class="text-center font-weight-light">Perfil do Agente de saúde</h1>
    </div>


    <ul class="nav nav-tabs mt-5" id="healthAgent" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="initial-data-tab" data-toggle="tab" href="#initial-data" role="tab" aria-controls="initial-data" aria-selected="true">
                Dados Iniciais
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="helth-agent-report-tab" data-toggle="tab" href="#helth-agent-report" role="tab" aria-controls="helth-agent-report" aria-selected="false">Relatório do Agente de saúde</a>
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

                <div class="row">

                    <div class="col-6">
                        <label for="age">Idade</label>
                        <input type="number" id="age" class="form-control">
                    </div>    

                    <div class="col-6">
                        <label for="weight">Peso</label>
                        <input type="number" id="weight" class="form-control">
                    </div>    

                </div>

                <div class="row mt-2">

                    <div class="col-6">
                        <label for="height">Altura</label>
                        <input type="number" id="height" class="form-control">
                    </div>   

                    <div class="col-6">
                        <label for="temperature">Temperatura</label>
                        <input type="number" id="temperature" class="form-control">
                    </div>    

                </div>

                <div class="row mt-2">

                    <div class="col-6">
                        <label for="heart-beat">Pulso Cardiaco</label>
                        <input type="number" id="heart-beat" class="form-control">
                    </div>   

                    <div class="col-6">
                        <label for="blood-pressure">Pressão Sanguínea</label>
                        <input type="number" id="blood-pressure" class="form-control">
                    </div>    

                </div>

                <div class="row mt-2">

                    <div class="col-6">
                        <label for="current-date">Data</label>
                        <input type="number" id="current-date" class="form-control">
                    </div>   

                    <div class="col-6">
                        <label for="current-time">Hora</label>
                        <input type="number" id="current-time" class="form-control">
                    </div>    

                </div>

                <div class="row mt-2">

                    <div class="col-12">
                        <label for="current-date">Latitude</label>
                        <input type="number" id="current-date" class="form-control">
                    </div>   

                </div>

                <div class="row mt-2">

                    <div class="col-12">
                        <label for="current-date">Longitude</label>
                        <input type="number" id="current-date" class="form-control">
                    </div>   

                </div>


                <div class="row mt-2 mb-2">

                    <div class="col-12">
                        <label for="symptoms">Sintomas</label>
                        <textarea id="symptoms" class="form-control" rows="3">
                        </textarea>
                    </div>  

                </div>

            </form>

        </div>

        <div class="tab-pane fade" id="helth-agent-report" role="tabpanel" aria-labelledby="helth-agent-report-tab">

            <div class="row mt-3">
                <div class="col-12">

                    <label>Apresenta algum tipo de sangramento, vias respiratórias e/ou sistema digestivo?</label>
                    <div class="col-10">
                        <select class="form-control" id="healthAgentProfileQ1">
                            <option selected>Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="3">Não Sei</option>
                        </select> 
                    </div>                 
                    <hr>

                </div>               
            </div>

            <div class="row mt-3">
                <div class="col-12">

                    <label>Está com dificuldade de se manter alerta apresentando sonolência e/ou irritabilidade?</label>

                    <div class="col-10">
                        <select class="form-control" id="healthAgentProfileQ2">
                            <option selected>Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="3">Não Sei</option>
                        </select> 
                    </div>                 
                    <hr>

                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">

                    <label>Reside em local sem saneamento básico?</label>

                    <div class="col-10">
                        <select class="form-control" id="healthAgentProfileQ2">
                            <option selected>Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="3">Não Sei</option>
                        </select> 
                    </div>                 
                    <hr>

                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">

                    <label>Localidade possuí coleta de lixo regular?</label>

                    <div class="col-10">
                        <select class="form-control" id="healthAgentProfileQ3">
                            <option selected>Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="3">Não Sei</option>
                        </select> 
                    </div>                 
                    <hr>

                </div>
            </div>
           
            <div class="row mt-3 mb-3">

                <div class="col-12">
                    <button class="btn btn-primary btn-block">Enviar dados</button>
                </div>  

            </div>

        </div>

    </div>

</div>