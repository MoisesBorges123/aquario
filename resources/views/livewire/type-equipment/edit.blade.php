@php
    $disabled = $errors->any() || empty($this->name) ? true : false;
@endphp

<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h6 class="modal-title">Novo Tipo de Equipamento</h6>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="update" method="POST">
                    <div class="form">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="form-label text-left"><b>Nome</b></label>                                
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" wire:model="name" id="name" name='name' placeholder="Nome"> 
                                @error('name') <span class="text-danger error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>                                                           
                    <div class="form">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="form-label text-left"><b>Manutenção</b></label>                                
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" wire:model="maintenance_time" id="maintenance_time" name='maintenance_time' placeholder="Dias"> 
                                @error('maintenance_time') <span class="text-danger error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>                                                           
                    
                </form>
            </div>
            <div class="card-footer text-center">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <button class="btn btn-secondary" wire:click="$emit('goToIndexTypeEquipment')" type="button">Sair</button>

                    </div>
                    <div class="col-3">
                        <button class="btn btn-warning" wire:click="update" type="submit">Alterar</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
