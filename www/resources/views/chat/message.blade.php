@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Translation <span class="btn btn-primary">{{ $id }}</span></div>

                    <div class="card-body">
                        <translation-component
                            :translation_id="{{ $id }}"
                        ></translation-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
