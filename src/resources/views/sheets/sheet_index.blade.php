@extends('layouts.default')

@section('title')
Bandhub Sheets
@endsection

@section('content')


    <main role="main" class=" ml-sm-auto px-4">
            <nav aria-label="パンくずリスト">
                <ol class="breadcrumb mt-4 mb-1">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/sheets">Sheet</a></li>
                </ol>
            </nav>

            <br>
            <a href = "{{ url('/sheets/create') }}"  class = "btn btn-outline-success rounded-pill mb-0">新規シート追加</a>
           

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            </div>
                <!-- カードで表示する部分 -->
                <div class="container">
                    <div class="row">
                        
                      
                        @foreach ($sheets as $sheet)
                        <div class="card  col-sm-5 col-md-3 pr-2 mb-2 ">
                        <div class="card-body">
                            <h5 class="card-title">{{ $sheet->name }}</h5>
                            <p class="card-text">@ {{ $sheet->place }} {{ $sheet->time }}</p>
                            <a href="{{ url('/sheets',$sheet->id) }}"  class="btn btn-outline-dark rounded-pill mb-0">詳細を見る</a>
                        </div>
                        </div>
                        @endforeach
                        
                    </div>    
                </div>     
            </div>
            

    </main>
    

@endsection