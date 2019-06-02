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

    <form class="needs-validation" novalidate>

        <div class="tab-content" id="healthAgentContent">

            <div class="tab-pane fade show active" id="initial-data" role="tabpanel" aria-labelledby="initial-data-tab">
        

                <form>

                    <div class="row mt-3">

                        <div class="col-12">
                            <label for="SUS_ID">Identificação</label>
                            <input type="text" id="SUS_ID" class="form-control" maxlength="8" required>

                            <div class="valid-feedback">
                                    Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>  

                    </div>

                    <div class="row mt-3">

                        <div class="col-6">
                            <label for="age">Idade</label>
                            <input type="text" id="age" class="form-control" maxlength="9" required>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>    

                        <div class="col-6">
                            <label for="weight">Peso</label>
                            <input type="text" id="weight" class="form-control text-right" maxlength="9" required>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>    

                    </div>

                    <div class="row mt-3">

                        <div class="col-6">
                            <label for="height">Altura</label>
                            <input type="text" id="height" class="form-control text-right" maxlength="4" required>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>   

                        <div class="col-6">
                            <label for="temperature">Temperatura</label>
                            <input type="text" id="temperature" class="form-control text-right" maxlength="8" required>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>    

                    </div>

                    <div class="row mt-3">

                        <div class="col-6">
                            <label for="heart-beat">Pulso Cardiaco</label>
                            <input type="text" id="heart-beat" class="form-control text-right" maxlength="8" required>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>   

                        <div class="col-6">
                            <label for="blood-pressure">Pressão Sanguínea</label>
                            <input type="text" id="blood-pressure" class="form-control" maxlength="4" required>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>    

                    </div>

                    <div class="row mt-3">

                        <div class="col-6">
                            <label for="current-date">Data</label>
                            <input type="text" id="current-date" class="form-control" disabled>
                        </div>   

                        <div class="col-6">
                            <label for="current-time">Hora</label>
                            <input type="text" id="current-time" class="form-control" disabled>
                        </div>    

                    </div>

                    <div class="row mt-3">

                        <div class="col-12">
                            <label for="current-date">Latitude</label>
                            <input type="text" id="current-date" class="form-control">
                        </div>   

                    </div>

                    <div class="row mt-3">

                        <div class="col-12">
                            <label for="current-date">Longitude</label>
                            <input type="text" id="current-date" class="form-control">
                        </div>   

                    </div>


                    <div class="row mt-3 mb-3">

                        <div class="col-12">
                            <label for="symptoms">Sintomas</label>
                            <textarea id="symptoms" class="form-control" rows="3" required></textarea>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>  

                    </div>

                </form>

            </div>

            <div class="tab-pane fade" id="helth-agent-report" role="tabpanel" aria-labelledby="helth-agent-report-tab">

                <div class="row mt-3">
                    <div class="col-12">

                        <label>Paciente apresenta queda abrupta de plaquetas?</label>
                        <div class="col-10">
                            <select class="custom-select" id="expertProfileQ1" required>
                                <option value="" selected>Selecione uma Opção</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Não Sei</option>
                            </select> 

                            <div class="valid-feedback">
                                Sintoma Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário selecionar o sintoma
                            </div> 
                        </div>                 
                        <hr>

                    </div>               
                </div>

                <div class="row mt-3">
                    <div class="col-12">

                        <label>O paciente apresenta um aumento do tamanho do fígado (Hepatomegalia dolorosa)?</label>

                        <div class="col-10">
                            <select class="custom-select" id="expertProfileQ2" required>
                                <option value="" selected>Selecione uma Opção</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Não Sei</option>
                            </select> 

                            <div class="valid-feedback">
                                Sintoma Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário selecionar o sintoma
                            </div> 
                        </div>                 
                        <hr>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">

                        <label>O paciente apresenta dificuldade de manter a temperatura corpórea?</label>

                        <div class="col-10">
                            <select class="custom-select" id="expertProfileQ3" required>
                                <option value="" selected>Selecione uma Opção</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Não Sei</option>
                            </select> 

                            <div class="valid-feedback">
                                Sintoma Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário selecionar o sintoma
                            </div> 
                        </div>                 
                        <hr>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">

                        <label>O exame do hemograma encontra-se alterado?</label>

                        <div class="col-10">
                            <select class="custom-select" id="expertProfileQ4" required>
                                <option value="" selected>Selecione uma Opção</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Não Sei</option>
                            </select>

                            <div class="valid-feedback">
                                Sintoma Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário selecionar o sintoma
                            </div>  
                        </div>                 
                        <hr>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">

                        <label>O paciente não consegue ficar em ortostase?</label>

                        <div class="col-10">
                            <select class="custom-select" id="expertProfileQ5" required>
                                <option value="" selected>Selecione uma Opção</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Não Sei</option>
                            </select> 

                            <div class="valid-feedback">
                                Sintoma Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário selecionar o sintoma
                            </div> 
                        </div>                 
                        <hr>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">

                        <label>Existe algum desequilíbrio proporcional de água e células sanguíneas (hermatócrito)?</label>

                        <div class="col-10">
                            <select class="custom-select" id="expertProfileQ6" required>
                                <option value="" selected>Selecione uma Opção</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Não Sei</option>
                            </select> 

                            <div class="valid-feedback">
                                Sintoma Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário selecionar o sintoma
                            </div> 
                        </div>                 
                        <hr>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">

                        <label>Apresenta diminuição de diurese?</label>

                        <div class="col-10">
                            <select class="custom-select" id="expertProfileQ7" required>
                                <option value="" selected>Selecione uma Opção</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Não Sei</option>
                            </select> 

                            <div class="valid-feedback">
                                Sintoma Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário selecionar o sintoma
                            </div> 
                        </div>                 
                        <hr>

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">

                        <label>O exame de sorologia encontra-se alterado?</label>

                        <div class="col-10">
                            <select class="custom-select" id="expertProfileQ8" required>
                                <option value="" selected>Selecione uma Opção</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                                <option value="3">Não Sei</option>
                            </select> 
                            
                            <div class="valid-feedback">
                                Sintoma Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário selecionar o sintoma
                            </div> 
                        </div>                 
                        <hr>

                    </div>
                </div>
            
                <div class="row mt-3 mb-3">

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Enviar dados</button>
                    </div>  

                </div>

            </div>

        </div>
    </form>
</div>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/profiles/expert.js"></script>