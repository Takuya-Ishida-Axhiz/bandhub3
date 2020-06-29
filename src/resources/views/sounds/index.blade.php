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
           

            
                <!-- カードで表示する部分 -->
                    
                <div class="row">
                    <div class="col-sm-6 col-md-4 mt-2 ">
                        @foreach ($movies as $movie)
                            <div class="card  ">
                                {!! $movie['html'] !!} 
                                <div class="card-body px-2 py-3">
                                    <p class="card-text"><a href="{{ $movie['link'] }}">{{ $movie['name'] }}</a> from <a href="{{ $movie['useruri'] }}">{{ $movie['username'] }}</a> on <a href="https://vimeo.com">Vimeo</a></p>
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        @endforeach 
                    </div><!-- /.col-sm-6.col-md-3 -->
                </div><!-- /.row -->
            

    </main>
    

@endsection