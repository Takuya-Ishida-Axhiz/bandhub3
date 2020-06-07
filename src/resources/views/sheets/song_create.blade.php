@extends('layouts.default')

@section('title')
Bandhub NewSheet
@endsection

@section('content')

    <main role="main" class=" ml-sm-auto px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <!-- ここにパンくず作ろう -->
                <nav aria-label="パンくずリスト">
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/sheets">Sheet</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Song</li>
                    </ol>
                </nav>
            </div>
    
            <form method="post" action="{{ url('/sheets/song/store') }}" class="was-validated">
            {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">曲順</label>
                    <input name="order" type="int" class="form-control" id="exampleFormControlInput1" placeholder="例：1"  value = "{{ old('order') }}"> 
                    @if ($errors->has('order'))
                    <span class="error">{{ $errors->first('order') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">曲名</label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：〇〇〇〇">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1">時間</label>
                    <input name="time" type="time" class="form-control" id="exampleFormControlInput1" placeholder="例：〇〇:〇〇">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">ジャンル</label>
                    <input name="genre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：Rock">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">照明希望</label>
                    <input name="light" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：暖色系多め明るめ">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">シートID</label>
                    <input name="sheet_id" type="int" class="form-control" id="exampleFormControlInput1" placeholder="例：1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">リハ</label>
                    <input name="rehe" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：1サビ前〜2Aまで">
                </div>

                <input type="submit" class="btn btn-success" value="新規作成">
                
            </form><!-- </form> -->
    
    </main>

@endsection
