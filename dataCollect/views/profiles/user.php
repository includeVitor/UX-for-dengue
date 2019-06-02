<div class="container-fluid">

    <div class="col-md-12 mt-2">
        <h1 class="text-center font-weight-light">Perfil do Usuário</h1>
    </div>
    
    <ul class="nav nav-tabs mt-5" id="userProfile" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="initial-data-tab" data-toggle="tab" href="#initial-data" role="tab" aria-controls="initial-data" aria-selected="true">
                Dados Iniciais
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="user-report-tab" data-toggle="tab" href="#user-report" role="tab" aria-controls="user-report" aria-selected="false">Relatório do Usuário</a>
        </li>
    </ul>

    <form class="needs-validation" novalidate>

        <div class="tab-content" id="userProfileContent">

            <div class="tab-pane fade show active" id="initial-data" role="tabpanel" aria-labelledby="initial-data-tab">
            
                <form>

                    <div class="form-row mt-3">

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
                            <input type="text" id="temperature" class="form-control text-right" maxlength="8">
                        </div>    

                    </div>

                    <div class="row mt-3 mb-3">

                        <div class="col-12">
                            <label for="symptoms">Sintomas</label>
                            <textarea id="symptoms" class="form-control" rows="3" maxlength="255"></textarea>
                        </div>  

                    </div>


                </form>
            
            </div>

            <div class="tab-pane fade" id="user-report" role="tabpanel" aria-labelledby="user-report-tab">
                
                <div class="row mt-3">

                    <div class="col-12">

                        <label>Possuí dor abdominal intensa e contínua ?</label>

                        <div class="col-10">
                            <select class="custom-select" id="userProfileQ1" required>
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

                        <label>Está sentindo algum desconforto respiratório ou dificuldade de respirar?</label>

                        <div class="col-10">
                            <select class="custom-select" id="userProfileQ2" required>
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

                        <label>A ingestão de algum tipo de substancia inclusive água provoca vômitos?</label>

                        <div class="col-10">
                            <select class="custom-select" id="userProfileQ3" required>
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
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/profiles/user.js"></script>