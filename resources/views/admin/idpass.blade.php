@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ID・パスワード発行画面</div>

                <div class="panel-body">
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">メニュー</label>
                    </div>

                    <div class="form-group row">
                        <a type="text" href="{{ url('/idpass/user') }}" class="col-md-4 col-form-label text-md-right">回答者ID・パスワード発行</a>
                    </div>

                    <div class="form-group row">
                        <a type="text" href="{{ url('/idpass/admin') }}" class="col-md-4 col-form-label text-md-right">管理者ID・パスワード発行</a>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <a type="button" href="{{ url('/admin') }}" class="btn btn-primary">戻る</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection