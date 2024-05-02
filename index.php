<?php
    include_once("./header.php");
?>

<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="col-12 grid-margin stretch-card ">
            <div class="card ">
                <div class="card-body ">
                    <h4 class="card-title">Ajouts des utilisateurs</h4>
                    <p class="card-description">Tout les champs sont requis pour une inscriptions</p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Nom complet utilisateurs</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nom && Prénoms" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email de l'utilisateur</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Entrer un mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Mot de passe" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Mot de passe" />
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Role</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>Administrateur</option>
                                <option>Etudiants</option>
                                    </select>
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default" />
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" placeholder="Importer une photo de profile" />
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button"> Importer </button>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">AJOUTER UN UTILISATEUR</button>
                        <button class="btn btn-danger">TOUT EFFACER</button>
                    </form>
                </div>
            </div>
        </div>
<?php
    include_once('./footer.php');
?>

<script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>


