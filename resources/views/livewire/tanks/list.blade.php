<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">Aquários</h4>
        
    </div>
    <div class="page-rightheader">
        <div class="btn btn-list">
            @if($mode=='create' )
                <button  wire:click='setMode("list")' class="btn btn-primary"><i class="fe fe-list mr-1"></i> Listar Aquarios</button>									
            @else
                <button  wire:click='setMode("create")' class="btn btn-primary"><i class="fe fe-plus mr-1"></i> Novo Aquario</button>									
            @endif
        </div>
    </div>      
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        @if(!empty($aquariums))
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Meus Aquários</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped card-table table-vcenter text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Litragem</th>
                                    <th>Tipo</th>
                                    <th>Plantado</th>
                                    <th></th>
                                </tr>
                            </thead>
                           <tbody>
                               @foreach($aquariums as $aquarium)
                               <tr>

                                   <td>{{$aquarium->id}}</td>
                                   <td>{{$aquarium->name}}</td>
                                   <td>{{$aquarium->literage}}L</td>
                                   <td>
                                       @if($aquarium->fresh_water)
                                           Água Doce
                                       @else
                                           Marinho
                                       @endif
                                   </td>
                                   <td>
                                       @if($aquarium->planted)
                                           <span class='fa fa-check-circle fs-20 text-success'></span>
                                       @else
                                           <span class='fa fa-times-circle fs-20 text-danger'></span>
                                       
                                       @endif
                                   </td>
                                   <td>
                                       <a href="{{route('aquariumDashboard',$aquarium->id)}}"><span class='fa fa-heartbeat fs-30 text-danger'></span></a>
                                   </td>
                               </tr>
                                    
                               @endforeach
                           </tbody>
                        </table>
                    </div><!-- bd -->
                </div><!-- bd -->
            </div><!-- bd -->
        @else
        
        
        <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Não existe aquários cadastrados!</strong>  <a href="#cadastrar" wire:click="setMode('create')" class="alert-link">Cadastrar novo aquário</a>
        </div>
            
        @endif

      
        
    </div>
</div>