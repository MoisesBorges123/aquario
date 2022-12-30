<div>
    @if($window=='index')
        <livewire:equipments-timers.index id="{{$universalID}}"></livewire:equipments-timers.index>
        <div class="row justify-content-center">
            <div class="col-md-2 col-sm-2">
                <button class="btn btn-primary btn-icon" wire:click='create'>
                    <span class="fa fa-plus"></span> Adicionar
                </button>
            </div>
        </div>
    @elseif($window=='create')
    <div class="row justify-content-left">
        <div class="col-md-2 col-sm-2">
            <button class="btn btn-primary btn-icon" wire:click='index'>
                <span class="fa fa-arrow-left"></span> Voltar
            </button>
        </div>
    </div>
        <livewire:equipments-timers.create id="{{$universalID}}"></livewire:equipments-timers.create>
    @else
    @endif
</div>
