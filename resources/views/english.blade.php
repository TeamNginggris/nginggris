@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Jawablah pertanyaan dengan benar!</div>

                <div class="panel-body" align="center">
                  <div class="row">
                    <h3>Manakah yang bukan merupakan <b>Camera</b> ?</h3><br>
                    <div class="col-xs-6 col-md-3">
                        <img src="{{ url('/') }}/img/quest/camera-icon.png" alt="Image" class="img-circle" width="140px"><br><br>
                      <div class="caption">
                        <label><input type="radio" id="radio1" name="jawaban" value=""> Camera</label>
                      </div>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <img src="{{ url('/') }}/img/quest/camera-icon.png" alt="Image" class="img-circle" width="140px"><br><br>
                      <div class="caption">
                        <label><input type="radio" id="radio2" name="jawaban" value=""> Camera</label>
                      </div>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <img src="{{ url('/') }}/img/quest/logo.png" alt="Image" class="img-circle" width="140px"><br><br>
                      <div class="caption">
                        <label><input type="radio" id="radio3" name="jawaban" value=""> Monitor</label>
                      </div>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <img src="{{ url('/') }}/img/quest/camera-icon.png" alt="Image" class="img-circle" width="140px"><br><br>
                      <div class="caption">
                        <label><input type="radio" id="radio4" name="jawaban" value=""> Camera</label>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="panel-footer">
                  <a href="{{ url('/selesai') }}" class="btn btn-success btn-lg btn-block">Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
