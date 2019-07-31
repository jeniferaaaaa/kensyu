@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">質問画面</div>

                <div class="panel-body">
                    <form method="POST" action="{{url('/que/confirm')}}">
                    {{ csrf_field() }}
                        <div class="card-body">

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■基本情報</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-1.所属部署は？</label>

                            <input type="radio" name="q1" value="1" {{ old('q1') == "1" ? 'checked' : '' }}> 事業推進統括部
                            <input type="radio" name="q1" value="2" {{ old('q1') == "2" ? 'checked' : '' }}> サービス管理統括部
                            <input type="radio" name="q1" value="3" {{ old('q1') == "3" ? 'checked' : '' }}> DX第一統括部
                            <input type="radio" name="q1" value="4" {{ old('q1') == "4" ? 'checked' : '' }}> DX第二統括部
                        </div>
                        @if ($errors->has('q1'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q1') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-2.年齢は？</label>

                            <input type="radio" name="q2" value="1" {{ old('q2') == "1" ? 'checked' : '' }}> 20代
                            <input type="radio" name="q2" value="2" {{ old('q2') == "2" ? 'checked' : '' }}> 30代
                            <input type="radio" name="q2" value="3" {{ old('q2') == "3" ? 'checked' : '' }}> 40代以上
                            <input type="radio" name="q2" value="4" {{ old('q2') == "4" ? 'checked' : '' }}> 人間じゃない
                        </div>
                        @if ($errors->has('q2'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q2') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-3.等級は？</label>

                            <input type="radio" name="q3" value="1" {{ old('q3') == "1" ? 'checked' : '' }}> 等級1
                            <input type="radio" name="q3" value="2" {{ old('q3') == "2" ? 'checked' : '' }}> 等級2
                            <input type="radio" name="q3" value="3" {{ old('q3') == "3" ? 'checked' : '' }}> 等級3
                            <input type="radio" name="q3" value="4" {{ old('q3') == "4" ? 'checked' : '' }}> 等級4
                            <input type="radio" name="q3" value="5" {{ old('q3') == "5" ? 'checked' : '' }}> 等級5
                            <input type="radio" name="q3" value="6" {{ old('q3') == "6" ? 'checked' : '' }}> 年棒
                        </div>
                        @if ($errors->has('q3'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q3') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-4.役職は？</label>

                            <input type="radio" name="q4" value="1" {{ old('q4') == "1" ? 'checked' : '' }}> 一般
                            <input type="radio" name="q4" value="2" {{ old('q4') == "2" ? 'checked' : '' }}> リーダ
                            <input type="radio" name="q4" value="3" {{ old('q4') == "3" ? 'checked' : '' }}> マネージャ
                            <input type="radio" name="q4" value="4" {{ old('q4') == "4" ? 'checked' : '' }}> 管理職以上
                        </div>
                        @if ($errors->has('q4'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q4') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■総合的な満足度</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-1.現在の職場を親しい友人や家族にすすめたいと思いますか？</label>

                            <input type="radio" name="q5" value="1" {{ old('q5') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q5" value="2" {{ old('q5') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q5'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q5') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-2.今の会社で働いていることに満足していますか？</label>

                            <input type="radio" name="q6" value="1" {{ old('q6') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q6" value="2" {{ old('q6') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q6'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q6') }}</strong>
                            </span>
                        </div>
                        @endif


                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-3.今の会社で働いていることを、誇りをもって家族や友人に話をしていますか？</label>

                            <input type="radio" name="q7" value="1" {{ old('q7') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q7" value="2" {{ old('q7') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q7'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q7') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-4.5年後も、今の会社で働き続けているイメージがわいてきますか？</label>

                            <input type="radio" name="q8" value="1" {{ old('q8') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q8" value="2" {{ old('q8') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q8'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q8') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■職場環境</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-1.あなたの職場では、達成すべき目標が明確でメンバーで共有されていますか？</label>

                            <input type="radio" name="q9" value="1" {{ old('q9') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q9" value="2" {{ old('q9') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q9'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q9') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-2.あなたの職場では、必要に応じて適切な業務の連携ができていますか？</label>

                            <input type="radio" name="q10" value="1" {{ old('q10') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q10" value="2" {{ old('q10') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q10'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q10') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-3.あなたの職場では、安心して相談しあえる風土がありますか？</label>

                            <input type="radio" name="q11" value="1" {{ old('q11') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q11" value="2" {{ old('q11') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q11'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q11') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-4.あなたの職場では、業務を行う上で必要な情報がタイムリーに共有されていますか？</label>

                            <input type="radio" name="q12" value="1" {{ old('q12') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q12" value="2" {{ old('q12') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q12'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q12') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■上司のマネジメント</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-1.上司はあなたに対して方針を提示し、業務の指示・指導を適切に行っていますか？</label>

                            <input type="radio" name="q13" value="1" {{ old('q13') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q13" value="2" {{ old('q13') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q13'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q13') }}</strong>
                            </span>
                        </div>
                        @endif
                        

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-2.あなたは上司と業務上に必要な連携がとれていますか？</label>

                            <input type="radio" name="q14" value="1" {{ old('q14') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q14" value="2" {{ old('q14') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q14'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q14') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-3.上司はあなたに対して、成長につながる指摘やフィードバックをしてくれていますか？</label>

                            <input type="radio" name="q15" value="1" {{ old('q15') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q15" value="2" {{ old('q15') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q15'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q15') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-4.あなたの上司は、期初に設定した目標に照らして公平な評価をしていますか？</label>

                            <input type="radio" name="q16" value="1" {{ old('q16') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q16" value="2" {{ old('q16') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q16'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q16') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■業務内容</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-1.あなたは自分の業務が社会や顧客の役に立っていることが実感できていますか？</label>

                            <input type="radio" name="q17" value="1" {{ old('q17') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q17" value="2" {{ old('q17') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q17'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q17') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-2.あなたは個人で設定された目標に納得感をもって仕事していますか？</label>

                            <input type="radio" name="q18" value="1" {{ old('q18') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q18" value="2" {{ old('q18') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q18'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q18') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-3.あなたは、今の仕事をすることで個人の成長が実現できると感じていますか？</label>

                            <input type="radio" name="q19" value="1" {{ old('q19') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q19" value="2" {{ old('q19') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q19'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q19') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-4.あなたの業務量は適切だと感じていますか？</label>

                            <input type="radio" name="q20" value="1" {{ old('q20') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q20" value="2" {{ old('q20') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q20'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q20') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-5.業務を進める上で問題が発生した時に上司や周囲の人は適切なサポートをしてくれていますか？</label>

                            <input type="radio" name="q21" value="1" {{ old('q21') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q21" value="2" {{ old('q21') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q21'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q21') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■人事制度</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-1.あなたの会社では、適切な基準にそって公平な人事評価がなされていますか？</label>

                            <input type="radio" name="q22" value="1" {{ old('q22') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q22" value="2" {{ old('q22') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q22'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q22') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-2.あなたの会社では、明確な根拠で適切な処遇がなされていますか？</label>

                            <input type="radio" name="q23" value="1" {{ old('q23') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q23" value="2" {{ old('q23') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q23'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q23') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-3.あなたの会社では、異動やキャリアの相談をすることができていますか？</label>

                            <input type="radio" name="q24" value="1" {{ old('q24') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q24" value="2" {{ old('q24') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q24'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q24') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-4.あなたの会社では、従業員の成長やスキルアップに向けて教育や研修などの支援を行っていますか？</label>

                            <input type="radio" name="q25" value="1" {{ old('q25') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q25" value="2" {{ old('q25') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q25'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q25') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-5.あなたの会社では、育児や介護をする必要が発生した時にサポートをする制度を活用することができますか？</label>

                            <input type="radio" name="q26" value="1" {{ old('q26') == "1" ? 'checked' : '' }}> はい
                            <input type="radio" name="q26" value="2" {{ old('q26') == "2" ? 'checked' : '' }}> いいえ
                        </div>
                        @if ($errors->has('q26'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('q26') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■フリー回答</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q7-1.総合的な満足度の理由を教えてください。</label>

                            <div class="col-md-6">
                                <input id="free1" type="text" class="form-control" name="free1" value="{{ old('free1') }}">
                            </div>

                        </div>
                        @if ($errors->has('free1'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('free1') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q7-2.会社に関して気になっていることや改善が必要だと思うことをご記入ください。</label>

                            <div class="col-md-6">
                                <input id="free2" type="text" class="form-control" name="free2" value="{{ old('free2') }}">
                            </div>

                        </div>
                        @if ($errors->has('free2'))
                        <div class="form-group has-error">
                            <span class="help-block">
                                <strong>{{ $errors->first('free2') }}</strong>
                            </span>
                        </div>
                        @endif

                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                            確認画面へ
                            </button>
                        </div>

                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
