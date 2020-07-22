@foreach ($packages as $package)
<div id="forfaitModal-{{ $package->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body">
                <form class="forfaitEditForm" action="{{ route('forfait.update', $package) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="title">Titre du forfait</label>
                            <input type="text" class="form-control" name="title" value="{{ $package->title }}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="data">Data</label>
                            <input type="text" class="form-control" name="data" value="{{ $package->data }}">
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach

