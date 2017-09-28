@extends('layouts.app_panel')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            {{ Form::model($motorist, [ 'route' => ['motorist.update', $motorist->id], 'method' => 'PUT']) }}

                            <div class="form-group col-xs-12 col-xs-offset-0">
                                {{ Form::label('name', 'Имя') }}
                                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Имя',
                                'required' => true]) }}
                            </div>

                            <div class="form-group col-xs-12 col-xs-offset-0">
                                {{ Form::label('surname', 'Фамилия') }}
                                {{ Form::text('surname', null, ['class' => 'form-control',
                                'placeholder' => 'Фамилия', 'required' => true]) }}
                            </div>


                            <div class="form-group col-xs-12 col-xs-offset-0">
                                {{ Form::label('car_id', 'Автомобили') }}
                                {{ Form::select('car_id[]', $cars, $motorist->cars, ['id' => 'car_id',
                                'class' => ' form-control', 'required' => true, 'multiple' => 'multiple']) }}
                            </div>

                            <div class="form-group col-xs-12 col-xs-offset-0">
                                    <span style="float: right">
                                        <button type="submit" class="btn btn-success">Сохранить</button>
                                    </span>

                                <a href="{{ route('motorist.index') }}" class="btn btn-primary" role="button">Отмена</a>
                            </div>

                            {{ Form::close() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#car_id").select2({
            placeholder: "Автомобили"
        });
    </script>

@endsection
