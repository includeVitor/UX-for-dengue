<div class="container-fluid">

    <div class="col-md-12 mt-2 text-center">
        <h2 class="font-weight-light fas fa-address-card"> Análise Agente de Saúde</h2>
    </div>
    <hr class="hr-user">

    <div class="row mt-4">
        <div class="col-12 text-left">
            <a href="/Ux-for-dengue/dataCollect"><i class="fas fa-home btn btn-health-agent btn-lg"></i></a>
        </div>
    </div>

    <ul class="nav nav-tabs mt-4" id="healthAgentProfile" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="initial-data-tab" data-toggle="tab" href="#initial-data" role="tab" aria-controls="initial-data" aria-selected="true">
                <i class="fas fa-database"> Dados</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="health-agent-report-tab" data-toggle="tab" href="#health-agent-report" role="tab" aria-controls="health-agent-report" aria-selected="false">
                <i class="fas fa-question"> Perguntas</i>
            </a>
        </li>
    </ul>

    <form class="needs-validation" novalidate> 
        <div class="tab-content" id="healthAgentContent">

            <div class="tab-pane fade show active" id="initial-data" role="tabpanel" aria-labelledby="initial-data-tab">
        

                <form>

                    <div class="row mt-3">

                        <div class="col-12">
                            <label for="SUS_ID">Número do SUS</label>
                            <input type="text" id="SUS_ID" class="form-control" maxlength="8" placeholder="Exemplo: 30" required>
                            
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
                            <input type="text" id="height" class="form-control text-right" maxlength="4" placeholder="Exemplo: 1,65 m" required>
                            
                            <div class="valid-feedback">
                                Preenchido  
                            </div> 

                            <div class="invalid-feedback">
                                É necessário preencher esse campo
                            </div> 

                        </div>   

                        <div class="col-6">
                            <label for="temperature">Temperatura (°C)*</label>
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
                            <label for="symptoms">Sintomas*</label>
                            <textarea id="symptoms" class="form-control" rows="3" placeholder="Exemplo: Dor de cabeça, olhos ardendo" required></textarea>

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
                            <i id="next" class="fas fa-angle-right btn btn-health-agent fa-2x"></i>
                        </div>
                    </div>

                </form>

            </div>

            <div class="tab-pane fade" id="health-agent-report" role="tabpanel" aria-labelledby="health-agent-report-tab">

                <div class="row mt-3">
                    <div class="col-12">

                        <label>Apresenta algum tipo de sangramento, vias respiratórias e/ou sistema digestivo?</label>
                        <div class="col-10">
                            <select class="custom-select" id="healthAgentProfileQ1" required>
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

                        <label>Está com dificuldade de se manter alerta apresentando sonolência e/ou irritabilidade?</label>

                        <div class="col-10">
                            <select class="custom-select" id="healthAgentProfileQ2" required>
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

                        <label>Reside em local sem saneamento básico?</label>

                        <div class="col-10">
                            <select class="custom-select" id="healthAgentProfileQ3" required>
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

                        <label>Localidade possuí coleta de lixo regular?</label>

                        <div class="col-10">
                            <select class="custom-select" id="healthAgentProfileQ4" required>
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
                        <button type="submit" class="fas fa-paper-plane btn btn-health-agent btn-block btn-lg"> Enviar dados</button>
                    </div>  

                </div>

                <div class="row mt-3 mb-3">
                    <div class="col-2">
                        <i id="back" class="fas fa-angle-left btn btn-health-agent fa-2x"></i>
                    </div>
                </div>

            </div>

        </div>
    </form>

</div>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/profiles/healthAgent.js"></script>