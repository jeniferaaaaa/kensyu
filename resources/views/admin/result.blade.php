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
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.事業推進統括部：{{$qq1}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.サービス管理統括部：{{$qq2}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">3.DX第一統括部：{{$qq3}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">4.DX第二統括部：{{$qq4}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-2.年齢は？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.20代：{{$qq5}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.30代：{{$qq6}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">3.40代以上：{{$qq7}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">4.人間じゃない：{{$qq8}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-3.等級は？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.等級1：{{$qq9}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.等級2：{{$qq10}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">3.等級3：{{$qq11}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">4.等級4：{{$qq12}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">5.等級5：{{$qq13}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">6.年棒：{{$qq14}}%</label>
                        </div>


                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q1-4.役職は？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.一般：{{$qq15}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.リーダ：{{$qq16}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">3.マネージャ：{{$qq17}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">4.管理職以上：{{$qq18}}%</label>
                        </div>


                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■総合的な満足度</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-1.現在の職場を親しい友人や家族にすすめたいと思いますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy1}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn1}}%</label>
                        </div>


                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-2.今の会社で働いていることに満足していますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy2}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn2}}%</label>
                        </div>


                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-3.今の会社で働いていることを、誇りをもって家族や友人に話をしていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy3}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn3}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q2-4.5年後も、今の会社で働き続けているイメージがわいてきますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy4}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn4}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■職場環境</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-1.あなたの職場では、達成すべき目標が明確でメンバーで共有されていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy5}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn5}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-2.あなたの職場では、必要に応じて適切な業務の連携ができていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy6}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn6}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-3.あなたの職場では、安心して相談しあえる風土がありますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy7}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn7}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q3-4.あなたの職場では、業務を行う上で必要な情報がタイムリーに共有されていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy8}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn8}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■上司のマネジメント</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-1.上司はあなたに対して方針を提示し、業務の指示・指導を適切に行っていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy9}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn9}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-2.あなたは上司と業務上に必要な連携がとれていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy10}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn10}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-3.上司はあなたに対して、成長につながる指摘やフィードバックをしてくれていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy11}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn11}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q4-4.あなたの上司は、期初に設定した目標に照らして公平な評価をしていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy12}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn12}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■業務内容</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-1.あなたは自分の業務が社会や顧客の役に立っていることが実感できていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy13}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn13}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-2.あなたは個人で設定された目標に納得感をもって仕事していますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy14}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn14}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-3.あなたは、今の仕事をすることで個人の成長が実現できると感じていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy15}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn15}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-4.あなたの業務量は適切だと感じていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy16}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn16}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q5-5.業務を進める上で問題が発生した時に上司や周囲の人は適切なサポートをしてくれていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy17}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn17}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">■人事制度</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-1.あなたの会社では、適切な基準にそって公平な人事評価がなされていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy18}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn18}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-2.あなたの会社では、明確な根拠で適切な処遇がなされていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy19}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn19}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-3.あなたの会社では、異動やキャリアの相談をすることができていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy20}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn20}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-4.あなたの会社では、従業員の成長やスキルアップに向けて教育や研修などの支援を行っていますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy21}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn21}}%</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Q6-5.あなたの会社では、育児や介護をする必要が発生した時にサポートをする制度を活用することができますか？</label>
                        </div>

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">1.はい：{{$qy22}}%</label>
                            <label for="text" class="col-md-4 col-form-label text-md-right">2.いいえ：{{$qn22}}%</label>
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