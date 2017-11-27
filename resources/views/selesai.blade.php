@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Congratulation!</div>

                <div class="panel-body" align="center">
                  <div class="col-xs-12 col-md-12">
                      <img src="{{ url('/') }}/img/quest/gift.jpg" alt="Image" class="img-circle" width="140px"><br><br>
                  </div>
                  <h1>Selamat!!</h1>
                  <h3>Anda Mendapatkan Voucer diskon 15 % di KFC.</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
