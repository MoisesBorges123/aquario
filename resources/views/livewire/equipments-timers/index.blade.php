<div>
    @if(!empty(count($equipmentsTime)))
   <table class='table table-responsive'>
        <thead>
            <th>ID</th>
            <th>Dias Semana</th>
            <th>Liga</th>
            <th>Desliga</th>
            <th>24h</th>
            <th>Manual </th>
            <th class='text-center'>Ações</th>
        </thead>
        <tbody>
            @foreach($equipmentsTime as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>
                    {{count(explode(',',$item->day_sem))}} dias por sem.
                </td>
                <td>{{ str_pad($item->h_in,2,'0',STR_PAD_LEFT)}}:{{str_pad($item->m_in,2,'0',STR_PAD_LEFT)}}</td>
                <td>{{str_pad($item->h_out,2,'0',STR_PAD_LEFT)}}:{{str_pad($item->m_out,2,'0',STR_PAD_LEFT)}}</td>
                <td>
                    @if($item->_24hs)
                        <span class="fa fa-circle text-success"></span> On
                    @else
                        <span class="fa fa-circle text-default"></span> Off
                    @endif
                </td>
                <td>
                    @if($item->manual)
                        <span class="fa fa-circle text-success"></span> On
                    @else
                        <span class="fa fa-circle text-default"></span> Off
                    @endif
                </td>
                <td>
                    <div class="btn-list">
                        <button type="button" wire:click="info('{{$item->id}}')" class="btn btn-icon btn-info"><i class="fa fa-exclamation-circle"></i></button>
                        <button type="button" wire:click="$emit('swal-delete','Tem certeza que deseja excluir esse registro?','warning','EquipmentTimer.destroy','{{$item->id}}')"class="btn btn-icon btn-danger"><i class="fa fa-trash"></i></button>                        
                    </div>
                </td>
            </tr>            
            @endforeach
        </tbody>
   </table>
   @else
    <div class="alert">
        <div class="alert-default">Ainda não foi configurado o horário de funcionamento desse equipamento.</div>
    </div>    
   @endif
  
</div>
