<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-12 mt-2 text-center">
            <h2 class="font-weight-light"> <i class="fas fa-chart-line"></i> Pass Through</h2>
        </div>
    </div>    
    <hr class="hr-user">

    <div class="row mt-4">
        <div class="col-12 text-left">
            <a href="/Ux-for-dengue/dataAnalysis/"><i class="fas fa-home btn btn-pass-through btn-lg"></i></a>
        </div>
    </div>


    <ul class="nav nav-tabs mt-4" id="passThrough" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="initial-data-tab" data-toggle="tab" href="#initial-data" role="tab" aria-controls="initial-data" aria-selected="true">
                <i class="fas fa-database"> Dados</i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="helth-agent-report-tab" data-toggle="tab" href="#helth-agent-report" role="tab" aria-controls="helth-agent-report" aria-selected="false">
                <i class="fas fa-question"> Perguntas</i>
            </a>
        </li>
    </ul>

    <div class="tab-content" id="passThroughContent">

        <div class="tab-pane fade show active" id="initial-data" role="tabpanel" aria-labelledby="initial-data-tab">
       

            <form>

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

                <div class="row mt-5">

                    <div class="col-6">
                        <label for="SUS_ID">Número da análise</label>
                        <input type="text" id="SUS_ID" class="form-control" maxlength="8">
                    </div>  

                    <div class="col-6" style="margin-top:33px">
                        <button class="btn btn-pass-through" type="button" id="search" >
                            <span id="Spinner"></span>
                            <i class="fas fa-search"></i> Pesquisar
                        </button>
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
                
                <div class="row mt-2 mb-3">

                    <div class="col-12">
                        <button class="btn btn-pass-through btn-block btn-lg fas fa-paper-plane"> Enviar</button>
                    </div>  

                </div>

                <div class="row mt-3 mb-3">              
                    <div class="col-12 text-right">
                        <i id="next" class="fas fa-angle-right btn btn-pass-through fa-2x"></i>
                    </div>
                </div>

            </form>

        </div>

        <div class="tab-pane fade" id="helth-agent-report" role="tabpanel" aria-labelledby="helth-agent-report-tab">

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
                    <i id="back" class="fas fa-angle-left btn btn-pass-through fa-2x"></i>
                </div>
            </div>  
           
        </div>

    </div>

</div>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/decisions/pass-through.js"></script>