@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">アンケート結果表示画面</div>

                <div class="panel-body">
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">回答総数：{{ $ques }}名</label>
                    </div>

                    <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■基本情報</label>
                    </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-1.所属部署は？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.事業推進統括部：@if(isset($q1[1])){{$q1[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.サービス管理統括部：@if(isset($q1[2])){{$q1[2]}} @else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">3.DX第一統括部：@if(isset($q1[3])){{$q1[3]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">4.DX第二統括部：@if(isset( $q1[4])){{$q1[4]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-2.年齢は？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.20代：@if(isset($q2[1])){{$q2[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.30代：@if(isset($q2[2])){{$q2[2]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">3.40代以上：@if(isset($q2[3])){{$q2[3]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">4.人間じゃない：@if(isset($q2[4])){{$q2[4]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-3.等級は？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.等級1：@if(isset($q3[1])){{$q3[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.等級2：@if(isset($q3[2])){{$q3[2]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">3.等級3：@if(isset($q3[3])){{$q3[3]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">4.等級4：@if(isset($q3[4])){{$q3[4]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">5.等級5：@if(isset($q3[5])){{$q3[5]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">6.年棒：@if(isset($q3[6])){{$q3[6]}}@else 0 @endif %</label>
                        </div>


                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-4.役職は？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.一般：@if(isset($q4[1])){{$q4[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.リーダ：@if(isset($q4[2])){{$q4[2]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">3.マネージャ：@if(isset($q4[3])){{$q4[3]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">4.管理職以上：@if(isset($q4[4])){{$q4[4]}}@else 0 @endif %</label>
                        </div>


                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■総合的な満足度</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-1.現在の職場を親しい友人や家族にすすめたいと思いますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q5[1])){{$q5[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q5[2])){{$q5[2]}}@else 0 @endif %</label>
                        </div>


                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-2.今の会社で働いていることに満足していますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q6[1])){{$q6[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q6[2])){{$q6[2]}}@else 0 @endif %</label>
                        </div>


                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-3.今の会社で働いていることを、誇りをもって家族や友人に話をしていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q7[1])){{$q7[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q7[2])){{$q7[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-4.5年後も、今の会社で働き続けているイメージがわいてきますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q8[1])){{$q8[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q8[2])){{$q8[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■職場環境</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-1.あなたの職場では、達成すべき目標が明確でメンバーで共有されていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q9[1])){{$q9[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q9[2])){{$q9[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-2.あなたの職場では、必要に応じて適切な業務の連携ができていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q10[1])){{$q10[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q10[2])){{$q10[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-3.あなたの職場では、安心して相談しあえる風土がありますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q11[1])){{$q11[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q11[2])){{$q11[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-4.あなたの職場では、業務を行う上で必要な情報がタイムリーに共有されていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q12[1])){{$q12[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q12[2])){{$q12[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■上司のマネジメント</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-1.上司はあなたに対して方針を提示し、業務の指示・指導を適切に行っていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q13[1])){{$q13[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q13[2])){{$q13[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-2.あなたは上司と業務上に必要な連携がとれていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q14[1])){{$q14[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q14[2])){{$q14[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-3.上司はあなたに対して、成長につながる指摘やフィードバックをしてくれていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q15[1])){{$q15[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q15[2])){{$q15[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-4.あなたの上司は、期初に設定した目標に照らして公平な評価をしていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q16[1])){{$q16[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q16[2])){{$q16[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■業務内容</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-1.あなたは自分の業務が社会や顧客の役に立っていることが実感できていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q17[1])){{$q17[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q17[2])){{$q17[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-2.あなたは個人で設定された目標に納得感をもって仕事していますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">@if(isset($q18[1])){{$q18[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q18[2])){{$q18[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-3.あなたは、今の仕事をすることで個人の成長が実現できると感じていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q19[1])){{$q19[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q19[2])){{$q19[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-4.あなたの業務量は適切だと感じていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q20[1])){{$q20[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q20[2])){{$q20[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-5.業務を進める上で問題が発生した時に上司や周囲の人は適切なサポートをしてくれていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q21[1])){{$q21[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q21[2])){{$q21[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■人事制度</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-1.あなたの会社では、適切な基準にそって公平な人事評価がなされていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q22[1])){{$q22[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q22[2])){{$q22[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-2.あなたの会社では、明確な根拠で適切な処遇がなされていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q23[1])){{$q23[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q23[2])){{$q23[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-3.あなたの会社では、異動やキャリアの相談をすることができていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q24[1])){{$q24[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q24[2])){{$q24[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-4.あなたの会社では、従業員の成長やスキルアップに向けて教育や研修などの支援を行っていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q25[1])){{$q25[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q25[2])){{$q25[2]}}@else 0 @endif %</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-5.あなたの会社では、育児や介護をする必要が発生した時にサポートをする制度を活用することができますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：@if(isset($q26[1])){{$q26[1]}}@else 0 @endif %</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：@if(isset($q26[2])){{$q26[2]}}@else 0 @endif %</label>
                        </div>

                        <form method="POST" action="{{url('/result')}}">{{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <a type="button" href="{{ url('/admin') }}" class="btn btn-primary">戻る</a>
                                <button type="submit" class="btn btn-primary">CSVダウンロード</button>
                            </div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection