@extends('layouts.master')
@section('content')


    <div class="page-header">
        <h1 class="page-title">Настройки собрания</h1>
    </div>


    <div class="page-content">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body" style="min-height:400px;">
                <!-- content -->
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="form-horizontal" method="post" action="/adm/congrigation">
                    <div class="form-group form-material">
                        <label class="col-sm-4 control-label">Название собрания<small>*</small> : </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" placeholder="Львов Центральное" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group form-material">
                        <label class="col-sm-4 control-label">Язык: </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="lang">
                                <option value="ru" selected>Русский</option>
                                <option value="en" >English</option>
                                <option value="uk" >Українська</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-material">
                        <label class="col-sm-4 control-label">Email Администратора<small>*</small>: </label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" placeholder="@email" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group form-material">
                        <label class="col-sm-4 control-label">Пароль<small>*</small>: </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" placeholder="Пароль" autocomplete="off">
                        </div>
                    </div>
                    {{csrf_field()}}
                    <div class="form-group form-material">
                        <label class="col-sm-4 control-label">Пароль еще раз<small>*</small>: </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Пароль" autocomplete="off">
                        </div>
                    </div>

                    <br>
                    <hr>
                    <br>

                    <div class="form-group form-material">
                        <label class="col-sm-4 control-label">Номер собрания (для удобства): </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="number" placeholder="№" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group form-material">
                        <label class="col-sm-4 control-label">Страна: </label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Другая</option>
                                <option>Украина</option>
                                <option>Беларусь</option>
                                <option>Россия</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-material">
                        <label class="col-sm-4 control-label">Город: </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="number" placeholder="город" autocomplete="off">
                        </div>
                    </div>
                    <div class="pull-right col-md-3  "><br>
                        <!-- col-md-offset-6 -->
                        <p><small>*</small>  означает обязательные поля</p>
                    </div>
                    <br>
                    <div class="form-group form-material">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Сохранить </button>

                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>


@endsection