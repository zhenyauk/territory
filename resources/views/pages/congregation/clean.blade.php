@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Собрание</h1>
    </div>


    <div class="page-content">
        <p><a href="{{route('cong-add')}}">Создать новое собрание</a></p>
        <p><a href="">Подключится к собранию по коду приглашения</a></p>
    </div>
@endsection