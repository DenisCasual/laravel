@extends('layouts.main')

@section('title', 'Профиль')

@section ('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Пользователи</h1>
                        @forelse($users as $item)
                            <h2>{{ $item->name }}</h2>
                            <hr>
                                <a class="btn btn-success" href="{{ route('admin.editUsers', $item) }}">Сделать администратором</a>

                        @empty
                            <p>Нет пользователей</p>
                        @endforelse
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
