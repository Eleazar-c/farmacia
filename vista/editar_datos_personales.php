<?php
session_start(['name'=>'FARM']);
if ($_SESSION['us_tipo']==1) {
    include_once 'layout/header.php';
?>

<title>Editar Datos</title>
<?php include_once 'layout/nav.php'; ?>
<div class="content-wrapper">
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Datos Personales</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../vistas/adm_catalogo.php">Home</a></li>
                        <li class="breadcrumb-item active">Datos personales</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<section>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-success card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img src="../img/avatar.jpg" alt="" class="profile-user-img img-fluid img-circle">
                            </div>
                            <h3 class="profile-username text-center text-success">Nombre</h3>
                                <p class="text-muted text-center">Apellidos</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b style="color:#0b7300">Edad</b><a class="float-right">12</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b style="color:#0b7300">DNI</b><a class="float-right">12</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b style="color:#0b7300">Tipo usuario</b><span class="badge badge-primary float-right">Adminsitrador</span>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="card card-success">
                        <div class="card-header"><h3 class="card-title">Sobre mi</h3></div>
                        <div class="card-body">
                            <strong  style="color:#0b7300"><i class="fas fa-phone mr-1"></i>Telefono</strong>
                            <p class="text-muted">342341</p>
                            <strong  style="color:#0b7300"><i class="fa-solid fa-location-dot"></i>Residencia</strong>
                            <p class="text-muted">342341</p>
                            <strong  style="color:#0b7300"><i class="fa-solid fa-at"></i>Correo</strong>
                            <p class="text-muted">342341</p>
                            <strong  style="color:#0b7300"><i class="fa-solid fa-smile-wink"></i>Sexo</strong>
                            <p class="text-muted">342341</p>
                            <strong  style="color:#0b7300"><i class="fa-solid fa-pencil-alt"></i>Informacion adicional</strong>
                            <p class="text-muted">342341</p>
                            <button class="btn btn-block bg-gradient-danger">Editar</button>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">Click en el boton si desea editar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Datos Personales</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                    <div class="col-sm-10">
                                        <input type="number" id="telefono" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="residencia" class="col-sm-2 col-form-label">Residencia</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="residencia" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="sexo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="adicional" class="col-sm-2 col-form-label">Informacion adicional</label>
                                    <div class="col-sm-10">
                                        <textarea id="adicional"  cols="30" row="10"class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 cols-sm-10 float-right">
                                        <button class="btn btn-block btn-outline-success">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted">Cuidado con ingresar datos erroneos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- /.content-wrapper -->


<?php
include_once 'layout/footer.php';
}else{
    header('Location:../index.php');
}
?>