@extends('adminlte::page')

@section('title', 'SigeMKT')

@section('content_header')
    <h1>Relatórios</h1>
    <style>
        .frame{
            position: relative;
            width: 100%;
            height: 80vh;
            overflow: hidden;
        }
        iframe {
        position: relative;            
        top: 0px;
        left: 0px;
        width: 100%;
        height: 768px;
        }
    </style>
@stop

@section('content')

<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="frame">
                <iframe src="https://sigemarketingevendas.herokuapp.com/" frameborder="no"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection

@push('other_js')



@endpush
