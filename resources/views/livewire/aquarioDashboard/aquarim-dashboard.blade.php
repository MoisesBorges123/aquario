<div class='container'>
    <x-slot name='title'>
       {{__('Painel')}}
    </x-slot>
    {{-- PAGE TITLE--}}
   <!--Page header-->
   <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{$aquarium->name}}</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Sales Dashboard</a></li>
            </ol>
        </div>
        <div class="page-rightheader">
            <div class="btn btn-list">
                <a href="{{url('/' . $page='#')}}" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
                <a href="{{url('/' . $page='#')}}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
                <a href="{{url('/' . $page='#')}}" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
            </div>
        </div>
    </div>
<!--End Page header-->
<!-- Row-1 -->
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1 ">Nome do aquario:{{Session::get('aquarium.name')}}</p>
                <h2 class="mb-1 number-font">$3,257</h2>
                <small class="fs-12 text-muted">Compared to Last Month</small>
                <span class="ratio bg-warning">76%</span>
                <span class="ratio-text text-muted">Goals Reached</span>
            </div>
            <div id="spark1"></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1 ">Total User</p>
                <h2 class="mb-1 number-font">1,678</h2>
                <small class="fs-12 text-muted">Compared to Last Month</small>
                <span class="ratio bg-info">85%</span>
                <span class="ratio-text text-muted">Goals Reached</span>
            </div>
            <div id="spark2"></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1 ">Total Income</p>
                <h2 class="mb-1 number-font">$2,590</h2>
                <small class="fs-12 text-muted">Compared to Last Month</small>
                <span class="ratio bg-danger">62%</span>
                <span class="ratio-text text-muted">Goals Reached</span>
            </div>
            <div id="spark3"></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1">Total Tax</p>
                <h2 class="mb-1 number-font">$1,954</h2>
                <small class="fs-12 text-muted">Compared to Last Month</small>
                <span class="ratio bg-success">53%</span>
                <span class="ratio-text text-muted">Goals Reached</span>
            </div>
            <div id="spark4"></div>
        </div>
    </div>
</div>
<!-- End Row-1 -->

<!-- Row-2 -->
<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-12">
        <livewire:equipments.equipment>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-12">
        <livewire:cleanings.cleaning>
    </div>
</div>
<!-- End Row-2 -->
</div>
