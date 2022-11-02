
<div class='container'>
    
    @if($mode=='list')
        @include('livewire.tanks.list')
    @elseif($mode=='create')
        @include('livewire.tanks.create')
    
    @endif
    <!-- End Row -->
   
</div>
