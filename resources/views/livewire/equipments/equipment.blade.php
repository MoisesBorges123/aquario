<div>
    @if($window=='index')
        <livewire:equipments.index >
    @elseif($window=='create')
        <livewire:equipments.create></livewire:equipments.create>
    @elseif($window =='edit')
        <livewire:equipments.edit id='{{$selectedId}}'></livewire:equipments.edit>
    @elseif($window =='delete')
        <livewire:equipments.delete id='{{$selectedId}}'></livewire:equipments.delete>
    @elseif($window == 'show')
        <livewire:equipments.show id='{{$selectedId}}'></livewire:equipments.show>
    @endif
</div>