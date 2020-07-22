<div id="customerModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body">
                <div>
                    <div class="row">
                            <div class="col-12 mb-2">
                                <label for="">Type de client</label>
                                <select name="" id="type" onchange="typeToggle(this.value)" class="form-control">
                                    <option  selected disabled>Choisir le type de client</option>
                                    <option value="1">Client</option>
                                    <option value="2">Compagnie</option>
                                </select>
                            </div>
                        <div class="col-12 mb-2" style="display: none;">
                            <label for="">Nom de la compagnie</label>
                            <input type="text"  class="form-control" id="company_name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" id="firstname">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="">Prénom</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="">Téléphone</label>
                            <input type="text" class="form-control" id="tel">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="">Adresse</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="">Ville</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="">Pays</label>
                            <input type="text" class="form-control" id="country">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="">Mot de passe</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                    </div>
                  <button class="btn btn-rounded btn-lg btn-success ripple" id="addcustomers" onclick="addCustomer(this)" >Ajouter</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
