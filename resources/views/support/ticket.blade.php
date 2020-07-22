<div id="AddTicketModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body">
                <h3 class="text-center mb-3">Ajouter un Nouveau Ticket</h3>

                <form id="newTicketForm" action="{{ route('tickets.store') }}" method="POST">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="title">Sujet</label>
                            <input class="form-control" type="text" name="title" id="title">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="type">Type</label>
                            <select class="form-control" name="type" id="type">
                                <option selected disabled>Selectionner le type</option>
                                <option value="request">Requete</option>
                                <option value="complaint">Plainte</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="customer_id">Client Conserné</label>
                            <select class="form-control" name="customer_id" id="customer_id">
                                <option selected disabled>Selectionner le client</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="content">Contenu</label>
                            <textarea class="form-control" name="content" id="content" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" id="addticket" class="btn btn-success">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
