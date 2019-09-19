@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">確認画面</div>

                <div class="panel-body">
                    <form method="POST" action="{{url('/que/confirm/complete')}}">
                    {{ csrf_field() }}
                        <div class="card-body">

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■基本情報</label>
                        </div>

                        {{-- TODO: 質問内容は定義ファイルなどに外だしした方がベター --}}
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-1.所属部署は？</label>
                            @if ($q1 == 1)
                                事業推進統括部
                            @elseif ($q1 == 2)
                                サービス管理統括部
                            @elseif ($q1 == 3)
                                DX第一統括部
                            @else
                                DX第二統括部
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-2.年齢は？</label>
                            @if ($q2 == 1)
                                20代
                            @elseif ($q2 == 2)
                                30代
                            @elseif ($q2 == 3)
                                40代以上
                            @else
                                人間じゃない
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-3.等級は？</label>
                            @if ($q3 == 1)
                                等級1
                            @elseif ($q3 == 2)
                                等級2
                            @elseif ($q3 == 3)
                                等級3
                            @elseif ($q3 == 4)
                                等級4
                            @elseif ($q3 == 5)
                                等級5
                            @else
                                年棒
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-4.役職は？</label>
                            @if ($q4 == 1)
                                一般
                            @elseif ($q4 == 2)
                                リーダ
                            @elseif ($q4 == 3)
                                マネージャ
                            @else
                                管理職以上
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■総合的な満足度</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-1.現在の職場を親しい友人や家族にすすめたいと思いますか？</label>
                            @if ($q5 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-2.今の会社で働いていることに満足していますか？</label>
                            @if ($q6 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-3.今の会社で働いていることを、誇りをもって家族や友人に話をしていますか？</label>
                            @if ($q7 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-4.5年後も、今の会社で働き続けているイメージがわいてきますか？</label>
                            @if ($q8 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■職場環境</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-1.あなたの職場では、達成すべき目標が明確でメンバーで共有されていますか？</label>
                            @if ($q9 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-2.あなたの職場では、必要に応じて適切な業務の連携ができていますか？</label>
                            @if ($q10 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-3.あなたの職場では、安心して相談しあえる風土がありますか？</label>
                            @if ($q11 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-4.あなたの職場では、業務を行う上で必要な情報がタイムリーに共有されていますか？</label>
                            @if ($q12 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■上司のマネジメント</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-1.上司はあなたに対して方針を提示し、業務の指示・指導を適切に行っていますか？</label>
                            @if ($q13 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-2.あなたは上司と業務上に必要な連携がとれていますか？</label>
                            @if ($q14 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-3.上司はあなたに対して、成長につながる指摘やフィードバックをしてくれていますか？</label>
                            @if ($q15 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-4.あなたの上司は、期初に設定した目標に照らして公平な評価をしていますか？</label>
                            @if ($q16 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■業務内容</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-1.あなたは自分の業務が社会や顧客の役に立っていることが実感できていますか？</label>
                            @if ($q17 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-2.あなたは個人で設定された目標に納得感をもって仕事していますか？</label>
                            @if ($q18 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-3.あなたは、今の仕事をすることで個人の成長が実現できると感じていますか？</label>
                            @if ($q19 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-4.あなたの業務量は適切だと感じていますか？</label>
                            @if ($q20 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-5.業務を進める上で問題が発生した時に上司や周囲の人は適切なサポートをしてくれていますか？</label>
                            @if ($q21 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■人事制度</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-1.あなたの会社では、適切な基準にそって公平な人事評価がなされていますか？</label>
                            @if ($q22 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-2.あなたの会社では、明確な根拠で適切な処遇がなされていますか？</label>
                            @if ($q23 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-3.あなたの会社では、異動やキャリアの相談をすることができていますか？</label>
                            @if ($q24 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-4.あなたの会社では、従業員の成長やスキルアップに向けて教育や研修などの支援を行っていますか？</label>
                            @if ($q25 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-5.あなたの会社では、育児や介護をする必要が発生した時にサポートをする制度を活用することができますか？</label>
                            @if ($q26 == 1)
                                はい
                            @else
                                いいえ
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■フリー回答</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q7-1.総合的な満足度の理由を教えてください。</label>

                            {{ $free1 }}
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q7-2.会社に関して気になっていることや改善が必要だと思うことをご記入ください。</label>

                            {{ $free2 }}
                        </div>

                        <div class="col-md-8 offset-md-4">
                            <a type="button"class="btn btn-primary" href="javascript:history.back();">修正</a>
                            <button type="submit" class="btn btn-primary">
                            回答送信
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
