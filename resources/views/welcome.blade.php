@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card border-0 shadow rounded">
        <div class="card-body">Welcome, <strong>{{ auth()->user()->name }}</strong>
            <hr>
            <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-md btn-primary">Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
            <a class="btn btn-primary" href="{{ url('/game') }}" enctype="multipart/form-data"> View Games Data</a>
        </div>
    </div>
</div>  
@endsection