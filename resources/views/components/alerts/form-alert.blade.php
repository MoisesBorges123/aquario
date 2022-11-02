@if (session()->has('message-success'))
<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
    <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ session('message-success') }}</div>
</div>            
@endif
@if (session()->has('message-fail'))
<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
    <div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ session('message-fail') }}</div>
</div>            
@endif