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
                        <li class="breadcrumb-item active" aria-current="page">Create sheet</li>
                    </ol>
                </nav>
            </div>
    
            <form method="post" action="{{ url('/sheets/store') }}" class="was-validated">
            {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">ライブ＋バンド名</label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：7月ライブ アニソンバンド"  value = "{{ old('name') }}"> 
                    @if ($errors->has('name'))
                    <span class="error">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">ライブハウス名</label>
                    <input name="place" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：吉祥寺シルバーエレファント">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1">開始時間</label>
                    <input name="time" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：20:00~">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">日程</label>
                    <input name="date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="例：2020-7-13">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">バンドID</label>
                    <input name="band_id" type="int" class="form-control" id="exampleFormControlInput1" value="1">
                </div>

                <input type="submit" class="btn btn-success" value="新規作成">
                
            </form><!-- </form> -->
    
    </main>

@endsection
