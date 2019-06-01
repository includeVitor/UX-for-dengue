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

    <div class="tab-content" id="userProfileContent">

        <div class="tab-pane fade show active" id="initial-data" role="tabpanel" aria-labelledby="initial-data-tab">
        
            <form>

                <div class="row mt-3">

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

                <div class="row mt-2 mb-2">

                    <div class="col-12">
                        <label for="symptoms">Sintomas</label>
                        <textarea id="symptoms" class="form-control" rows="3">
                        </textarea>
                    </div>  

                </div>


            </form>
        
        </div>

        <div class="tab-pane fade" id="user-report" role="tabpanel" aria-labelledby="user-report-tab">
            
            <div class="row mt-3">

                <div class="col-12">

                    <label>Possuí dor abdominal intensa e contínua ?</label>

                    <div class="col-10">
                        <select class="form-control" id="userProfileQ1">
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

                    <label>Está sentindo algum desconforto respiratório ou dificuldade de respirar?</label>

                    <div class="col-10">
                        <select class="form-control" id="userProfileQ2">
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

                    <label>A ingestão de algum tipo de substancia inclusive água provoca vômitos?</label>

                    <div class="col-10">
                        <select class="form-control" id="userProfileQ3">
                            <option selected>Selecione uma Opção</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                            <option value="3">Não Sei</option>
                        </select> 
                    </div>                 
                    <hr>
                </div>

            </div>


            <div class="row mt-2 mb-2">

                <div class="col-12">
                    <button class="btn btn-primary btn-block">Enviar dados</button>
                </div>  
                
            </div>

        </div>
    </div>
</div>