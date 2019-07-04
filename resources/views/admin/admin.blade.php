@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">管理者画面</div>

                <div class="panel-body">
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">メニュー</label>
                    </div>

                    <div class="form-group row">
                        <a type="text" href="{{ url('/result') }}" class="col-md-4 col-form-label text-md-right">アンケート結果表示</label>
                    </div>

                    <div class="form-group row">
                        <a type="text" href="{{ url('/idpass') }}" class="col-md-4 col-form-label text-md-right">ID・パスワード発行</label>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection