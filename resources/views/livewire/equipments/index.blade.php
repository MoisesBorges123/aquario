<div class="card">
    <div class="card-header">
        <h3 class="card-title">Equipamentos Instalados</h3>
        <div class="card-options">
            <a href="{{url('/' . $page='#')}}" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal fs-20"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" wire:click='$emit("equipment.create")'>Novo Equipamento</button>
                
            </div>
        </div>
           
    </div>
    <div class="card-body p-0">
        @if($equipments->count())

        <div class="table-responsive">
            <table class="table table-striped card-table table-vcenter text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Potência</th>
                        <th>Saúde</th>
                        <th>Tempo de uso</th>
                        <th></th>
                    </tr>
                </thead>
               <tbody>
                  @foreach($equipments as $item)
                  <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->potency}}w</td>
                      <td>?</td>
                      <td>{{date('d',time()-strtotime($item->bought))}} dia(s)</td>
                      <td>
                        <div class="btn btn-list">
                            <button wire:click='$emit("equipment.edit",{{$item->id}})' class='btn btn-warning btn-sm'><i class='fe fe-edit-3'></i></button>
                            <button wire:click='$emit("equipment.delete",{{$item->id}})' class="btn btn-danger btn-sm"><i class='fe fe-trash'></i></button>                                    
                        </div>
                      </td>                      
                  </tr>
                  <tr>
                    <td 
                     colspan="6">
                     @livewire('equipments-timers.equipment-time',['id'=>$item->id], key("'equipmentTime.index-'.$item->id"))
                        
                    </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
        </div><!-- bd -->
        @else
        <div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Você não tem nenhum equipamento relacionado a esse aquário.</div>
        @endif
    </div><!-- bd -->
</div>