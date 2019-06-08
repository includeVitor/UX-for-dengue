<div class="container-fluid">

    <div class="col-md-12 mt-2 text-center">
        <h1 class="font-weight-light fas fa-address-card"> Análise Especialista</h1>
    </div>
    <hr class="hr-user">

    <div class="row mt-4">
        <div class="col-12 text-left">
            <a href="/Ux-for-dengue/dataCollect"><i class="fas fa-home btn btn-expert btn-lg"></i></a>
        </div>
    </div>

    <ul class="nav nav-tabs mt-4" id="expertProfile" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="initial-data-tab" data-toggle="tab" href="#initial-data" role="tab" aria-controls="initial-data" aria-selected="true">
                <i class="fas fa-database"> Dados</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="expert-report-tab" data-toggle="tab" href="#expert-report" role="tab" aria-controls="expert-report" aria-selected="false">
                <i class="fas fa-question"> Perguntas</i>
            </a>
        </li>
    </ul>


    <form class="needs-validation" novalidate>

        <div class="tab-content" id="expertProfileContent">

            <div class="tab-pane fade show active" id="initial-data" role="tabpanel" aria-labelledby="initial-data-tab">
        

                <form>

                    <div class="row mt-3">

                        <div class="col-12">
                            <label for="SUS_ID">Número do SUS</label>
                            <input type="text" id="SUS_ID" class="form-control" maxlength="8" placeholder="Exemplo: 12" required>

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
                            <label for="age">Idade*</label>
                            <input type="text" id="age" class="form-control text-right" maxlength="3" placeholder="Exemplo: 18 anos" required>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>    

                        <div class="col-6">
                            <label for="weight">Peso (KG)*</label>
                            <input type="text" id="weight" class="form-control text-right" maxlength="5" placeholder="Exemplo: 80 kg" required>

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
                            <label for="height">Altura (M)*</label>
                            <input type="text" id="height" class="form-control text-right" maxlength="4" placeholder="Exemplo: 1,6 m" required>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>   

                        <div class="col-6">
                            <label for="temperature">Temperatura</label>
                            <input type="text" id="temperature" class="form-control text-right" maxlength="4" placeholder="Exemplo: 34 °C" required>

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
                            <label for="heart-beat">Pulso Cardiaco (BPM)*</label>
                            <input type="text" id="heart-beat" class="form-control text-right" maxlength="3" placeholder="Exemplo: 60 bpm" required>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>   

                        <div class="col-6">
                            <label for="blood-pressure">Pressão Sanguínea*</label>
                            <input type="text" id="blood-pressure" class="form-control text-right" maxlength="4" placeholder="Exemplo: 12" required>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>    
                    
                    </div>

                    <div class="row mt-3 mb-3">

                        <div class="col-12">
                            <label for="symptoms">Sintomas</label>
                            <textarea id="symptoms" class="form-control" rows="3" placeholder="Exemplo: Dor de cabeça" required></textarea>

                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 
                        </div>  

                    </div>

                    <div class="row mt-3 mb-3">              
                        <div class="col-12 text-right">
                            <i id="next" class="fas fa-angle-right btn btn-expert fa-2x"></i>
                        </div>
                    </div>

                </form>

            </div>

            <div class="tab-pane fade" id="expert-report" role="tabpanel" aria-labelledby="expert-report-tab">

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
                        <button type="submit" class="fas fa-paper-plane btn btn-expert btn-block btn-lg"> Enviar dados</button>
                    </div>  

                </div>

                <div class="row mt-3 mb-3">
                    <div class="col-2">
                        <i id="back" class="fas fa-angle-left btn btn-expert t fa-2x"></i>
                    </div>
                </div>

            </div> 

        </div>
    </form>
</div>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/profiles/expert.js"></script>