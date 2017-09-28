@extends('layouts.app_panel')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($cars as $car)
                                <a href="{{ route('car.edit', $car->id ) }}" class="list-group-item">
                                    {{ $car->mark->name }} {{ $car->model }}
                                </a>
                            @endforeach
                        </ul>
                        <a href="{{ route('car.create') }}" class="btn btn-primary" role="button">Добавить</a>
                    </div>
                </div>
                {{ $cars->links() }}
            </div>
        </div>
    </div>
@endsection
