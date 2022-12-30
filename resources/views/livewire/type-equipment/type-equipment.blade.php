<div class='row justify-content-center'>
    <div class="col-8">
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0">Tipos de Equipameto</h4>
                
            </div>
            <div class="page-rightheader">
                <div class="btn btn-list">
                    @if($window=='list' )
                        <button  wire:click='create' class="btn btn-primary"><i class="fe fe-plus mr-1"></i> Novo Tipo de Equipamento</button>									
                    @else
                        <button  wire:click='list' class="btn btn-primary"><i class="fe fe-list mr-1"></i> Listar Tipos de Equipamentos</button>									
                    @endif
                </div>
            </div>      
        </div>
        @if($window=='list')
            <livewire:type-equipment.index>
        @elseif($window=='edit')        
            <livewire:type-equipment.edit id={{$selectedId}}></livewire:type-equipment.edit>
        @elseif($window=='delete')       
            <livewire:type-equipment.delete id="{{$selectedId}}">
        @elseif($window=='create')
            <livewire:type-equipment.create>
        @else
        @endif
    </div>
</div>
