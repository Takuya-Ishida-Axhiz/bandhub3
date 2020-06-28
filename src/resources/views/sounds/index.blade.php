@extends('layouts.default')

@section('title')
Bandhub Sheets
@endsection

@section('content')


    <main role="main" class=" ml-sm-auto px-4">
            <nav aria-label="パンくずリスト">
                <ol class="breadcrumb mt-4 mb-1">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/sounds">Sound</a></li>
                </ol>
            </nav>

            <br>
            <a href = "/upload"  class = "btn btn-outline-success rounded-pill mb-0">新規アップロード</a>
           

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            </div>
                <!-- カードで表示する部分 -->
                <div class="container">
                    <div class="row">
                        
                      
                        
                        <div class="card  col-sm-5 col-md-3 pr-2 mb-2 ">
                        <div class="card-body">
                            <h5 class="card-title">動画名</h5>
                            <p class="card-text">@ バンド名 投稿日時</p>
                            @foreach ($videos as $video)
                            <p>{{ $video->body }}</p>
                            @endforeach 
                            <a href="#" class="btn btn-outline-dark rounded-pill mb-0">再生</a>
                        </div>
                        </div>
                        
                    </div>    
                </div>     
            </div>
            

    </main>
    

@endsection