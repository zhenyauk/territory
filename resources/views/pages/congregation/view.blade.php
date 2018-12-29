@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h1 class="page-title">Собрание {{$cong->name  or 'No title'}}</h1>
    </div>

@php $no_item = "Не указано" @endphp
    <div class="page-content">
        <div class="panel">
            <div class="panel-heading">
                <br>
            </div>
            <div class="panel-body" style="min-height:400px;">
                <!-- content -->


                <table class="table table-bordered">
                    <p><a href="{{route('cong-edit')}}" style="color:chocolate">Изменить данные собрания</a></p>
                    <tbody>
                    <tr>
                        <td style="width:30%">Название</td>
                        <td>{{$cong->name or $no_item}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%">Язык</td>
                        <td>{{$cong->lang or $no_item}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%">Город</td>
                        <td>{{$cong->city or $no_item}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%">Страна</td>
                        <td>{{$cong->country or $no_item}}</td>
                    </tr>

                    <tr>
                        <td style="width:30%">Всего территорий</td>
                        <td>{{ $no_item}}</td>
                    </tr>
                    <tr>
                        <td style="width:30%">Всего необработанных</td>
                        <td>{{ $no_item}}</td>
                    </tr>

                    </tbody>

                </table>









            <!-- endcontent -->
            </div>
        </div>
    </div>
@endsection