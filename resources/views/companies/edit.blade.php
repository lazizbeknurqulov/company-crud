@extends('layouts.app')
@section('content')
    <h1 class="text-center p-3">Tashkelot ma'lumotlarini o'zgartirish</h1>

<div class="row">
    <div class="col-md-6">


      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif

        <form method="POST" action="{{route('companies.update', ['company' => $company -> id])}}">
          @csrf
          @method("PUT")
            @include('companies.form')
            <button type="submit" class="btn btn-primary btn-sm">Saqlash</button>
          </form>
    </div>
</div>
@endsection