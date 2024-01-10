@extends('layouts.main')

@section('content')
<main class="py-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-title">
            <strong>Add New Car</strong>
          </div>
          <form class="m-3" action="{{ route('cars.store') }}" method="POST">
            @csrf
            @include('cars._form')
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection