@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($motorists as $motorist)
                                <a href="/motorist/{{ $motorist->id }}" class="list-group-item">
                                    <span class="badge">{{ $motorist->cars_count }}</span>
                                    {{ $motorist->name }} {{ $motorist->surname }}
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{ $motorists->links() }}
            </div>
        </div>
    </div>
@endsection
