
  <div>
      @if(!empty($aquariumCleannings[0]))

          <div class="latest-timeline scrollbar3" id="scrollbar3">
              <ul class="timeline mb-0">
                  @foreach($aquariumCleannings as $aquariumCleanning)
                      <li class="mt-0">
                          <div class="d-flex"><span class="time-data">Task Finished</span><span class="ml-auto text-muted fs-11">09 June 2020</span></div>
                          <p class="text-muted fs-12"><span class="text-info">Joseph Ellison</span> finished task on<a href="{{url('/' . $page='#')}}" class="font-weight-semibold"> Project Management</a></p>
                      </li>
                  @endforeach                       
                  
              </ul>
          </div>
      
      @else
     
          <div class="latest-timeline scrollbar3" id="scrollbar3">
              <div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><p class='fs-20'>Ops! Não encontramos nenhum registro :<span class='text-danger'>( </span></p><p>Ainda não foi registrado nenhuma limpeza para esse aquário, caso realmente você não tenha limpado o seu aquário, por favor faça a TPA urgentemente e <button class='btn btn-pill btn-warning'>registre aqui</button> a limpeza realizada </p></div>                    
              
          </div>
     
      @endif
  </div>
        
        

