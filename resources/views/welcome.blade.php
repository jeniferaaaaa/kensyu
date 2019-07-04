@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">従業員満足度アンケート</div>

                <div class="panel-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            みなさんの満足度を確認するためにアンケートを実施します。
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            下記ボタンよりログインしてアンケートに回答してください。
                        </div>
                    </div>

                    <div class="form-group">                
                            <a type="submit" href="{{ url('/login') }}" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> ログイン画面へ
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
