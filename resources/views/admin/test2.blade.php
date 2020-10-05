@extends('layouts.main')

@section('title', 'test 2')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="newsTitle">Введите имя</label>
                            <input type="text" name="title" id="newsTitle" class="form-control"
                                   value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="newsTitle">Номер телефона</label>
                            <input type="text" name="title" id="newsTitle" class="form-control"
                                   value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <label for="newsTitle">Ваш e-mail</label>
                            <input type="text" name="title" id="newsTitle" class="form-control"
                                   value="{{ old('mail') }}">
                        </div>
                        <div class="form-group">
                            <label for="newsTitle">Название новости</label>
                            <input type="text" name="title" id="newsTitle" class="form-control"
                                   value="{{ old('title') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('download') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
