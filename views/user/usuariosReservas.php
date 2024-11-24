<?php
require_once BASE_PATH . "/src/user/usuariosReservas.php";
?>


<div class=" body container-fluid justify-content-center " id="container-user-reservas">
    <div class="header container-fluid">
        <h2> Historial de Reservas </h2>
    </div>

    <div class="container-fluid mb-3">

        <div class="row justify-content-center gap-3">
            <?php foreach ($arrayDatosPorPagina as $data => $data_reservas): ?>
                <div class="col-sm-5 mb-3 mb-sm-0 ">
                    <div class="card">

                        <div class="card-header bg-primary-subtle bg-gradient">
                            <h6>
                                Codigo de Reserva :
                                <?php echo  $data_reservas['Id Reservas'] ?>
                                <span class="badge  text-bg-info"><?php echo  $data_reservas['Estado'] ?></span>

                            </h6>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                            </h5>
                            <p class="card-text row">
                                <span class="">
                                    <span>
                                        Entrada :
                                        <?php echo  $data_reservas['Check In'] ?>
                                    </span>
                                    <span>
                                        Salida :
                                        <?php echo  $data_reservas['Check Out'] ?>
                                    </span>
                                </span>
                                <span class="">
                                    Numero de Noches :
                                    <?php echo  $data_reservas['Numero de Noches'] ?>
                                </span>
                                <span class="">
                                    Tipo de Habitacion :
                                    <?php echo  $data_reservas['Tipo de Habitación'] ?>
                                </span>
                            </p>
                            <span class="container-button row">
                                <?php if ($data_reservas['Estado'] == 'PEND'): ?>
                                    <button class="btn btn-info bg-gradient  col-lg-5" id="btn_confirmar_reserva_usuario"><i class="fa-solid fa-check"></i> Confirmar Reserva</button>
                                    <button class="btn btn-danger bg-gradient col-lg-5" id="btn_delete_reserva_usuario"> <i class="fa-solid fa-trash"></i> Cancelar Reserva</button>
                                <?php endif; ?>

                                <?php if ($data_reservas['Estado'] != 'PEND'): ?>
                                    <button class="btn btn-danger bg-gradient col-lg-5" id="btn_delete_reserva_usuario"> <i class="fa-solid fa-trash"></i> Eliminar Reserva de Historial</button>
                                <?php endif; ?>
                            </span>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include './components/pagination.php' ?>

</div>