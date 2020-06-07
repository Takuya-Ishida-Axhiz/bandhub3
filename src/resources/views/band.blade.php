@extends('layouts.default')

@section('title')
Bandhub Sheets
@endsection

@section('content')


    <main role="main" class=" ml-sm-auto px-4">
            <nav aria-label="パンくずリスト">
                <ol class="breadcrumb mt-4 mb-1">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/sheets">Band</a></li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <!-- カード で表示するやつ作っとく -->
             
                <div class="row">
                    
                    <div class="col-sm-6">
                        <div class="card card-body mb-4">
                            <h5 class="card-title">{{ $band->name }}</h5>
                            <p class="card-text"> </p>
                            <a href="#" class="btn btn-primary"></a>
                        </div>
                    </div>
                    
                    
                </div>         
            </div>
            

    </main>
    

@endsection