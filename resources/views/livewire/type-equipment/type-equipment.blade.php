<div>
    @if($window=='list')
        <livewire:type-equipment.index></livewire:type-equipment.index>
    @elseif($window=='edit')
        <livewire:type-equipment.edit :id ={{$selectedId}}></livewire:type-equipment.edit>
    @elseif($window=='delete')
        <livewire:type-equipment.delete :id ={{$selectedId}}></livewire:type-equipment.delete>
    @elseif($window=='create')
        <livewire:type-equipment.create></livewire:type-equipment.create>
    @else
    @endif
</div>
