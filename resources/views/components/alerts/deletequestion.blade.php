<div class="p-4 bg-light border border-bottom-0 mg-t-20">
    <div class="d-block pos-static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-4">
                    <!--<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="fe fe-trash fs-100 text-danger lh-1 mg-t-20 d-inline-block"></i>-->
                    <h4 class="text-danger"><b>Excluir?</b>{{$texto}}</h4>
                    <p class="mg-b-20 mg-x-20">{{$texto2}}</p><button aria-label="Close" class="btn btn-danger pd-x-25" wire:click="{{$action}}" type="button">Continuar e excluir</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- modal-wrapper-demo -->