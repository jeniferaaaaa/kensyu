@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">回答者ID・パスワード発行画面</div>

                <form method="POST" action="{{url('/idpass/user')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">CSVをアップロードしてください</label>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="file" name="csv_file" id="csv_file" size="75">
                        </div>
                    </div>

                    @if ($errors->has('csv_file'))
                    <div class="form-group has-error">
                        <span class="help-block">
                            <strong>{{ $errors->first('csv_file') }}</strong>
                        </span>
                    </div>
                    @endif


                    <div class="form-group row">
                        <div class="col-md-6">
                            <a type="button" href="{{ url('/idpass') }}" class="btn btn-primary">戻る</a>
                            <button type="submit" class="btn btn-primary">登録</button>
                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection