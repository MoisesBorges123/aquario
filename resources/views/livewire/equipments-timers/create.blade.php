<div class='mt-5'>
    <form wire:submit.prevent="store" method="POST">
        <div class="row">        
            <div class="col-sm-3">
                <div class='form-group'>
                    <label class="custom-switch">
                        <span class="custom-switch-description mr-2">Ligado 24h</span>
                        <input type="checkbox" wire:model='_24h' class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="form-group">
                    <label class="custom-switch">
                        <span class="custom-switch-description mr-2">Acionamento Manual</span>
                        <input type="checkbox" wire:model='manual' class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                
            </div>
            
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">Liga</label>
                    <input type="time" wire:model='power_on' class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Desliga</label>
                    <input type="time" wire:model='power_off' class="form-control">
                </div>
            </div>            
            <div class="col-sm-3">
                <h5 class="title">Dias da Semana</h5>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" wire:model="day_sem" value='0' >
                    <span class="custom-control-label">Domingo</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" wire:model="day_sem" value="1">
                    <span class="custom-control-label">Segunda</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" wire:model="day_sem" value="2">
                    <span class="custom-control-label">Terça</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" wire:model="day_sem" value="3">
                    <span class="custom-control-label">Quarta</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" wire:model="day_sem" value="4">
                    <span class="custom-control-label">Quinta</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" wire:model="day_sem" value="5">
                    <span class="custom-control-label">Sexta</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" wire:model="day_sem" value="6">
                    <span class="custom-control-label">Sábado</span>
                </label>                
            </div>
            <div class="col-sm-3">
                <h5>Dias Mês</h5>
                <input type="text" wire:model='day_month'  placeholder='1,15,30'class="form-control">
            </div>
            <div class="col-sm-12">
                <button type='submit' class="btn btn-primari" >Salvar</button>
            </div>
        </div>
    </form>
</div>
