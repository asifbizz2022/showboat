@extends('layout.app')
@section('content')
<div class='my-1'>
    <h5>Heading</h5>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            Status {{ session('status') }}
                        </div>
                    @endif 
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
   
    $(document).ready(function(){
        $('.table').DataTable();
       
        
    });
</script>
@endsection


