@extends('layouts.app')
@section('content')
    <h1 class="text-center p-3">Tashkelot haqida ma'lumot</h1>

<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="mb-3">
            <a href="{{route('companies.index')}}">Ortga</a>
        </div>
         <table class="table table-bordered">
            <tr>
                <td>Tashkilot nomi</td>
                <td>{{$company -> name}}</td>
            </tr>
            <tr>
                <td>Tashkilot manzili</td>
                <td>{{$company -> address}}</td>
            </tr>
            <tr>
                <td>Tashkilot telefon raqami</td>
                <td>{{$company -> phone}}</td>
            </tr>
            <tr>
                <td>Qo'shilgan vaqt</td>
                <td>{{$company -> created_at}}</td>
            </tr>
         </table> 
    </div>
</div>
@endsection