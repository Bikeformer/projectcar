@extends('layouts.app_panel')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            {{ Form::open([ 'route' => ['car.store']]) }}

                                <div class="form-group col-xs-12 col-xs-offset-0">
                                    {{ Form::label('model', 'Модель') }}
                                    {{ Form::text('model', null, ['class' => 'form-control', 'placeholder' => 'Модель',
                                    'required' => true]) }}
                                </div>

                                <div class="form-group col-xs-12 col-xs-offset-0">
                                    {{ Form::label('description', 'Описание') }}
                                    {{ Form::text('description', null, ['class' => 'form-control',
                                    'placeholder' => 'Описание']) }}
                                </div>

                                <div class="form-group col-xs-12 col-xs-offset-0">
                                    {{ Form::label('car_mark_id', 'Марка') }}
                                    {{ Form::select('car_mark_id', $marks, null, ['id' => 'car_mark_id',
                                    'class' => ' form-control', 'required' => 'true']) }}
                                </div>

                                <div class="form-group col-xs-12 col-xs-offset-0">
                                    <span style="float: right">
                                        <button type="submit" class="btn btn-success">Сохранить</button>
                                    </span>

                                    <a href="{{ route('car.index') }}" class="btn btn-primary" role="button">Отмена</a>
                                </div>

                            {{ Form::close() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
           $("#car_mark_id").select2({
                placeholder: "Марка"
           });
    </script>

@endsection
