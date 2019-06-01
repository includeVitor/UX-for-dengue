<div class="container-fluid">

    <div class="col-md-12 mt-2">
        <h1 class="text-center font-weight-light">Pass Through</h1>
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
                        <button class="btn btn-primary btn-block">Enviar</button>
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