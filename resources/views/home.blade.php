@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          {{ __('You are logged in!') }}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-2 pt-2">
      <div class="card">
        @auth
          <a href="{{ route('products.create') }}" class="btn btn-success">{{ __('Create Product') }}</a>
        @endauth
      </div>
    </div>
    <div class="col-md-2 pt-2">
      <div class="card">
        @auth
          <a href="{{ route('products.index') }}" class="btn btn-primary">{{ __('View Products') }}</a>
        @endauth
      </div>
    </div>
  </div>
</div>
@endsection