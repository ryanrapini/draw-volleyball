@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
            <teams v-bind:teams='{!! json_encode($teams) !!}'></teams>
            
        </div>
    </div>
</div>
@endsection
