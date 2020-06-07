@extends('layouts.default')

@section('title')
Bandhub Mainmenu
@endsection

@section('content')
    <main role="main" class=" ml-sm-auto px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="btn-toolbar mb-2 mb-md-0"> 
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <a class="dropdown-item" href=""> {{ $sheet->name }} @ {{ $sheet->place}}</a>
                            <!-- ここEDITページ作る場合はドロップダウンに入れたいけど入ってくれない。。。 -->

                        </button>
                    </div>
                </div>

                <div class="container　my-10 card ">
                    <div class = "row">
                        <div class="card-body">
                            <h2 class="card-title px-2">{{ $sheet->name }} </h2>
                            <h3 class="card-text px-2">{{ $sheet->date }} @ {{ $sheet->place }} {{ $sheet->time}} ~ </h3>
                        </div>
                    
                    </div>

                    <div class = "row">   
                        <div class="col-sm-12 col-md-6 ">
                        <img  src="{{ asset('assets/images/src/setting_sample.jpg') }}" class="card-img-top img-thumbnail img-responsive" width="100%" height="50%" alt="...">
                        </div>

                        <div class="col-sm-12 col-md-6 ">
                            <div class="card-body">
                                <h3 class="card-title">SetList</h5>
                                <div class="table-responsive">
                                    <table class="table table-md">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th>曲順</th>
                                            <th>曲名</th>
                                            <th>時間</th>
                                            <th>ジャンル</th>
                                            <th>リハ</th>
                                            </tr>
                                        </thead>
                                        @foreach ($songs as $song)
                                        <tbody>
                                            <tr>
                                                <td> {{ $song->order }}</td>
                                                <td> {{ $song->name }}</td>
                                                <td> {{ $song->time }}</td>
                                                <td> {{ $song->genre }}</td>
                                                <td> {{ $song->rehe }}</td>
                                            </tr>
                                            </tbody>  
                                        @endforeach 
                                        
                                        
                                    </table>
                                </div><!-- /.table-responsive -->
                            </div>
                        </div>

                    </div>
                        

                    <div class = "row"> 
                            <div class="col-sm-12 col-md-6 card-body">
                                <h3 class="card-title">持ち込み機材</h5>
                                <div class="table-responsive">
                                    <table class="table table-md">
                                        <thead class="thead">
                                            <tr>
                                            <th>機材名</th>
                                            <th>コメント</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td> Helix</td>
                                            <td> キャノンケーブルでステレオ出力します。</td>
                                            

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 card-body">
                                <h3>照明希望</h3>
                                <p class="card-text">全体的にオレンジや赤など暖色系でお願いします。</p>
                            </div>
                    </div>
                </div>

            </main>
        
@endsection

