@extends('layouts.app_panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($motorists as $motorist)
                                <a href="{{ route('motorist.edit', $motorist->id ) }}" class="list-group-item">
                                    <span class="badge">{{ $motorist->cars_count }}</span>
                                    {{ $motorist->name }} {{ $motorist->surname }}
                                </a>
                            @endforeach
                        </ul>
                        <a href="{{ route('motorist.create') }}" class="btn btn-primary" role="button">Добавить</a>
                    </div>
                </div>
                {{ $motorists->links() }}
            </div>
        </div>
    </div>
@endsection
