@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $motorist->name }} {{ $motorist->surname }}</div>

                    <div class="panel-body">
                        @forelse ($motorist->cars as $car)
                            <p>- {{ $car->mark->name }} {{ $car->model }} ({{ $car->description }})</p>
                        @empty
                            <p>Добавленных автомобилей не найдено</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
