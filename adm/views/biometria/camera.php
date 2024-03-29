
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?= URL ?>controle-home/index">Home </a>


            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="<?= URL ?>assets/image/cis-logopp.jpg">
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Bem vindo!</h6>
                        </div>
                        <a href="<?= URL ?>controle-login/logout" class="dropdown-item">
                            <i class="ni ni-lock-circle-open">
                                Logout
                            </i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-4 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-2 text-center">
                    <div class="card card-stats">
                        <div class="card-body">
                            <img src="<?= URL ?>assets/image/FOTO2.png" style="width:50px;"/>
                            <h3 class="label"><span style="cursor:pointer" class="modalAjax2" data-toggle="modal" data-target="#modalLeitorBioid" >Camera</span></h3>
                            <input type="hidden" id="TIPOEQPTO" value="2">
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 text-center">
                    <div class="card card-stats">
                        <div class="card-body">
                            <h3 class="label">Último registro</h3>
                            <p id="lastregisterbio"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase text-muted mb-0">1ª Leitura e inserção dos dados do equipamento.</h5><br>
                            <label>Serial number</label>
                            <input type="text" class="form-control" id="SREQPTO">
                            <label>Patrimônio</label>
                            <input type="text" class="form-control" id="PTEQPTO">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase text-muted mb-0">2ª Comparação de dados da caixa com o equipamento.</h5><br>
                            <label>Serial number</label>
                            <input type="text" class="form-control" id="SRCAIXA">
                            <label>Patrimônio</label>
                            <input type="text" class="form-control" id="PTCAIXA">
                            <input type="hidden" id="ajudaSRPTbanco" value="1">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-stats mt-3 bg">
                        <div class="card-body text-center">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" id="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="resultprogres">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 mt-4">
                    <div class="card card-stats">
                        <input type="text" class="form-control" id="INPUTTEXTHELP">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalLeitorBioid" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Relação de associação SN/PAT - CAMERA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalRelCamera">

            </div>
        </div>
    </div>
</div>




<script src="<?= URL ?>assets/jquery/jquery-3.2.1.min.js"></script>
<script src="<?= URL ?>assets/js/jsSaveCam.js"></script>

<script src="<?= URL ?>assets/jquery/jquery-mask.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {$('#SREQPTO').focus();},1000);
        $('#SREQPTO').mask('AAA 000-S0S');
    });
</script>
