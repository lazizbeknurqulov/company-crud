@extends('layouts.app')
@section('content')
<div class="text-center">
    <h1>Tashkilotlar ro'yxati</h1>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/companies/create">
        <button class="btn btn-success " type="button">Kompaniya qo'shish</button>
    </a>
</div>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>T/R</th>
            <th>Tashkelot nomi</th>
            <th>Tashkelot adresi</th>
            <th>Tashkelot nomeri</th>
            <th>Amallar</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr>
                <td>{{(($companies->currentpage() - 1)* $companies -> perpage() + ($loop-> index + 1))}}</td>
                <td><a href="{{route('companies.show', ['company' => $company -> id])}}">{{$company -> name}}</a></td>
                <td>{{$company -> address}}</td>
                <td>{{$company -> phone}}</td>
                <td>
                    <a href="{{route('companies.edit', ['company' => $company -> id])}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{route('companies.destroy', ['company' => $company -> id])}}" method="POST"> @csrf @method('DELETE')
                        <button type = "submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>   
            @endforeach
        </tbody>
</table>
{{$companies -> links()}}
@endsection

