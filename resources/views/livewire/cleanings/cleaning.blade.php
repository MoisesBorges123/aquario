<div class='card'>
    <div class="card-header">
        <h3 class="card-title">Limpezas</h3>
        <div class="card-options">
            <a href="{{url('/' . $page='#')}}" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal fs-20"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <button wire:click='create' class="dropdown-item" >Registrar Limpeza</button>
                <a class="dropdown-item" href="{{url('/' . $page='#')}}">Ver mais</a>
                <a class="dropdown-item" href="{{url('/' . $page='#')}}">Last Month</a>
                <a class="dropdown-item" href="{{url('/' . $page='#')}}">Last Year</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if($window=='index')
            <livewire:cleanings.index>
        @elseif($window=='create')
            <livewire:cleanings.create>
        @elseif($window =='edit')
            <livewire:cleanings.edit id='{{$selectedId}}'>
        @elseif($window =='delete')
            <livewire:cleanings.delete id='{{$selectedId}}'>
        @elseif($window == 'show')
            <livewire:cleanings.show id='{{$selectedId}}'>
        @endif

    </div>
</div>