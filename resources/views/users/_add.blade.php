<div id="useraddModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" id="closeUser" aria-hidden="true">×</button>
            <div class="modal-body">
                <h3 class="text-center">
                    Ajouter administrateur
                </h3>
                <div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" id="firstnameUser">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="">Prénom</label>
                            <input type="text" class="form-control" id="lastnameUser">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="emailUser">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="">Téléphone</label>
                            <input type="text" class="form-control" id="phoneUser">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-2">
                            <label for="">Mot de passe</label>
                            <input type="password" class="form-control" id="passwordUser">
                        </div>
                    </div>
                    <input type="hidden" id="Userid">
                    <button class="btn btn-rounded btn-lg btn-success ripple" id="addUser" onclick="addUser()" >Ajouter</button>
                    <button class="btn btn-rounded btn-lg btn-success ripple" style="display: none;" id="editUser" onclick="editUser()" >Modifier</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
