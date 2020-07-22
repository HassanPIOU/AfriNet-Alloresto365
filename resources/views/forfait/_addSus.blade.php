<div id="sousModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body">
                <h3 class="text-center">Souscription</h3>
                <div >
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="title">Client</label>
                            <select name="" id="customer" class="form-control">
                                <option  disabled selected>Choisir le client</option>
                                @foreach($customers as $customer)
                                    <option value="{{$customer->id}}">{{$customer->first_name}} {{$customer->last_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="data">Data</label>
                            <select name="" id="forfait" class="form-control">
                                <option  disabled selected>Choisir le forfait</option>
                                @foreach($forfaits as $package)
                                    <option value="{{$package->id}}">{{$package->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="data">Duree</label>
                            <select name="" id="duration" class="form-control">
                                <option  disabled selected>Choisir la durée de validité</option>
                                @foreach($subscriptions as $sub)
                                    <option value="{{$sub->id}}">{{$sub->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <button  id="addSubscription" onclick="addSubscription()" class="btn btn-primary">Enrégistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
