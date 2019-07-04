@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">エラー画面</div>

                <div class="panel-body">
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">回答は人生と同じ。一度きり</label>
                    </div>

                    <a type="button" href="{{ url('/logout') }}">ログアウト</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
