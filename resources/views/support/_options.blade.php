<div id="OptionModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <button type="button" class="close" id="closeOption" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body">
               <h3 class="text-center mb-3">Options</h3>

                <div class="row">
                    <div class="col-12"> <button  onclick="changeOption('1')" class="btn btn-info btn-block mt-1">Attente</button></div>
                    <div class="col-12"><button onclick="changeOption('2')" class="btn btn-primary btn-block mt-1">Affecté</button></div>
                    <div class="col-12"><button onclick="changeOption('3')" class="btn btn-outline-primary btn-block mt-1">En cours de traitement</button></div>
                    <div class="col-12"><button onclick="changeOption('4')" class="btn btn-success btn-block mt-1">Terminé</button></div>
                    <div class="col-12"><button onclick="changeOption('5')" class="btn btn-outline-info btn-block mt-1">Evalué</button></div>
                    <div class="col-12"><button onclick="changeOption('6')" class="btn btn-secondary btn-block mt-1">Archivé</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
