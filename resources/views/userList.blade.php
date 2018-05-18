@extends('layouts.app')

@section('content')
  <div class="card text-center">
    <h2 class="card-header">Login As </h2>
    <div class="card-body">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <h5><a href="{{url('register')}}">Buyer</a></h5>
          </div>
          <div class="col-md-6">
              <h5><a href="{{url('register')}}">Programmer</a></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
