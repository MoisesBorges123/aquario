<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tipo de Equipamentos</h3>       
           
    </div>
    <div class="card-body p-0">
        @if($typeEquipments->count())

        <div class="table-responsive">
            <table class="table table-striped card-table table-vcenter text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Manutenção</th>
                        <th></th>                       
                    </tr>
                </thead>
               <tbody>
                  @foreach($typeEquipments as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->maintenance_time}} dias</td>
                            <td>
                                <div class="btn btn-list">
                                    <button wire:click='$emit("editTypeEquipment",{{$item->id}})' class='btn btn-warning btn-sm'><i class='fe fe-edit-3'></i></button>
                                    <button wire:click='$emit("deleteTypeEquipment",{{$item->id}})' class="btn btn-danger btn-sm"><i class='fe fe-trash'></i></button>                                    
                                </div>
                            </td>
                        </tr>
                  @endforeach
               </tbody>
            </table>
        </div><!-- bd -->
        @else
        <div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Você não tem nenhum tipo de equipamento cadastrado.</div>
        @endif
    </div><!-- bd -->
</div>