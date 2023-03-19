@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Трансляция <span class="btn btn-primary"></span></div>

                    <div class="card-body" id="app">
                        <translation-component></translation-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
