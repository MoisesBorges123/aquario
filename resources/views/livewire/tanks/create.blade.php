@php
    $disabled = $errors->any() || empty($this->name) ? true : false;
@endphp
<div>
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Aquarios</h4>
            
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                @if($mode=='create' )
                    <button  wire:click='setMode("list")' class="btn btn-primary"><i class="fe fe-list mr-1"></i> Listar Aquarios</button>									
                @else
                    <button  wire:click='setMode("create")' class="btn btn-primary"><i class="fe fe-plus mr-1"></i> Novo Aquario</button>									
                @endif
            </div>
        </div>      
    </div>
   <x-alerts.form-alert></x-alerts.form-alert>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Novo Tanque</h3>
        </div>
        <div class="card-body">
            
            <form wire:submit.prevent="store" method="POST"> 
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Nome<span class="text-red">*</span></label>
                            <input type="text" wire:model="name" name='name' class="form-control" placeholder="Nome do Aquário">
                            @error('name') <span class="text-danger error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Litragem<span class="text-red">*</span></label>
                            <input type="number" class="form-control" wire:model="literage" name='literage' placeholder="40">
                            @error('literage') <span class="text-danger error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-label">Aquário Plantado?<span class="text-red">*</span></div>
                            <label class="custom-switch">
                                <input type="checkbox" name="planted" wire:model="planted" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Meu aquário tem plantas naturais</span>
                            </label>
                        </div>
                        @error('planted') <span class="text-danger error">{{ $message }}</span> @enderror
                    </div>               
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Tipo de Aquário<span class="text-red">*</span></label>
                            <select class="form-control custom-select select2" wire:model="fresh_water" name='fresh_water'>
                                <option value="">--Select--</option>
                                <option value="0">Marinho</option>
                                <option value="1">Água doce</option>                            
                            </select>
                            @error('fresh_water') <span class="text-danger error">{{ $message }}</span> @enderror                            
                        </div>
                    </div>                
                </div>
                <x-buttons.button-primary wire:loading.attr='disabled'  wire:loading wire:target="store" :disabled="$disabled">Salvar</x-buttons.button-primary>                
            </form>
        </div>
    </div>
</div>

