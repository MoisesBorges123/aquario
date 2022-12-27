<div>
    @if($window=='index')
        <livewire:equipments.index>
    @elseif($window=='create')
        <livewire:equipments.create></livewire:equipments.create>
    @else
    @endif
</div>