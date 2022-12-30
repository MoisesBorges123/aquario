@php
    $disabled = $errors->any() || empty($this->name) || empty($this->bougth) || empty($this->type_equipment_id) ? true : false;
@endphp
<div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Novo Equipamento</h3>
        </div>
        <div class="card-body">
            
            <form wire:submit.prevent="store" method="POST"> 
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Nome<span class="text-red">*</span></label>
                            <input type="text" wire:model="name" name='name' class="form-control" placeholder="Nome do equipamento">
                            @error('name') <span class="text-danger error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Tipo Equipamento<span class="text-red">*</span></label>
                            <select class="form-control custom-select select2" wire:model="type_equipment_id" name='type_equipment_id'>
                                <option value="">--Selecione--</option>
                                @foreach($typeEquipments as $typeEquipment)
                                <option value="{{$typeEquipment->id}}">{{$typeEquipment->name}}</option>
                                @endforeach
                                                          
                            </select>
                            @error('fresh_water') <span class="text-danger error">{{ $message }}</span> @enderror                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Potência do equipamento (Wats)<span class="text-red">*</span></label>
                            <input type="number" class="form-control" wire:model="potency" name='potency'>
                            @error('potency') <span class="text-danger error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Data de Compra<span class="text-red">*</span></label>
                            <input type="date" class="form-control" wire:model="bought" name='bought'>
                            @error('bought') <span class="text-danger error">{{ $message }}</span> @enderror
                        </div>                      
                    </div>               
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Preço<span class="text-red">*</span></label>
                            <input type="text" class="form-control" wire:model="price" name='price'>
                            @error('bought') <span class="text-danger error">{{ $message }}</span> @enderror
                        </div>                      
                    </div>               
                    
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-warning" wire:click='$emit("equipment.index")'>Voltar</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <button  type='submit' class="btn btn-primary">Salvar</button>
                           <!-- <x-buttons.button-primary wire:loading.attr='disabled'  wire:loading wire:target="store" :disabled="$disabled">Salvar</x-buttons.button-primary> -->               
                        </div>
                    </div>                    
                </div>
            </form>
        </div>
    </div>
</div>
