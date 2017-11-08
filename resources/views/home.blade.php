@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pilih kursus</div>

                <div class="panel-body" align="center">
                    <a href="{{ url('/english') }}" class="btn btn-primary btn-lg btn-block">English</a>
                    <button type="button" name="button" class="btn btn-default btn-lg btn-block" disabled>Comming Soon..</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
