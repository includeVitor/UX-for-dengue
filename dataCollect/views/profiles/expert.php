<div class="container-fluid">

    <div class="col-md-12 mt-2">
        <h1 class="text-center font-weight-light">Perfil do Especialista</h1>
    </div>


    <ul class="nav nav-tabs mt-5" id="healthAgent" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="initial-data-tab" data-toggle="tab" href="#initial-data" role="tab" aria-controls="initial-data" aria-selected="true">
                Dados Iniciais
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="helth-agent-report-tab" data-toggle="tab" href="#helth-agent-report" role="tab" aria-controls="helth-agent-report" aria-selected="false">Relatório do Especialista</a>
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

                    <label>Paciente apresenta queda abrupta de plaquetas?</label>
                    <div class="col-10">
                        <select class="form-control" id="expertProfileQ1">
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

                    <label>O paciente apresenta um aumento do tamanho do fígado (Hepatomegalia dolorosa)?</label>

                    <div class="col-10">
                        <select class="form-control" id="expertProfileQ2">
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

                    <label>O paciente apresenta dificuldade de manter a temperatura corpórea?</label>

                    <div class="col-10">
                        <select class="form-control" id="expertProfileQ3">
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

                    <label>O exame do hemograma encontra-se alterado?</label>

                    <div class="col-10">
                        <select class="form-control" id="expertProfileQ4">
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

                    <label>O paciente não consegue ficar em ortostase?</label>

                    <div class="col-10">
                        <select class="form-control" id="expertProfileQ5">
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

                    <label>Existe algum desequilíbrio proporcional de água e células sanguíneas (hermatócrito)?</label>

                    <div class="col-10">
                        <select class="form-control" id="expertProfileQ6">
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

                    <label>Apresenta diminuição de diurese?</label>

                    <div class="col-10">
                        <select class="form-control" id="expertProfileQ7">
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

                    <label>O exame de sorologia encontra-se alterado?</label>

                    <div class="col-10">
                        <select class="form-control" id="expertProfileQ8">
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