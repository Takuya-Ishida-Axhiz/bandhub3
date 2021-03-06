@extends('layouts.default')
<!-- <link href="{{ asset('/css/profile.css') }}" rel="stylesheet"> -->

@section('title')
Bandhub Profile Edit {{ Auth::user()->name }}
@endsection


@section('content')


    
        <main role="main" class=" ml-sm-auto px-4">


            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <!-- ここにパンくず作ろう -->
                <nav aria-label="パンくずリスト">
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/profile">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                    </ol>
                </nav>
            </div>

            <form method="post" action= "{{ url('/profile/store',$auths->id)}}" enctype="multipart/form-data" >
                {{ csrf_field() }}
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    @if($auths->avatar_filename)
                    <p>
                        <img src="{{ asset('storage/avatar/' .$auths->avatar_filename) }}" alt="avater" width="100px" height="100px">
                    </p>
                    @endif
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="file">
                    <br>
                    <input type="submit" class="btn btn-outline-dark rounded-pill" value="画像をアップデートする">
                </div>
            </form>



            <br>
            <br>
    
            <form method="post" action="{{ url('/profile/update',$auths->id)  }}" class="was-validated">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">名前</label>
                    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="〇〇〇〇"  value = "{{ old('name',$auths->name) }}"> 
                    @if ($errors->has('name'))
                    <span class="error">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">年齢</label>
                    <input name="age" type="int" class="form-control" id="exampleFormControlInput1" placeholder="例：〇〇" value = "{{ old('age',$auths->age) }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">性別</label>
                    <input name="gender" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：〇〇" value = "{{ old('gender',$auths->gender) }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">パート</label>
                    <input name="part" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：〇〇〇〇" value = "{{ old('part',$auths->part) }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">機材</label>
                    <input name="instruments" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：〇〇〇〇" value = "{{ old('instruments',$auths->instruments) }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">機材コメント</label>
                    <input name="inst_comments" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：〇〇〇〇" value = "{{ old('inst_comments',$auths->inst_comments) }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">好きなジャンル</label>
                    <input name="genre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：〇〇〇〇" value = "{{ old('genre',$auths->genre) }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">一言</label>
                    <input name="comments" type="text" class="form-control" id="exampleFormControlInput1" placeholder="例：〇〇〇〇" value = "{{ old('comments',$auths->comments) }}">
                </div>

                <br>
                <input type="submit" class="btn btn-outline-dark rounded-pill" value="プロフィールを編集する">
               
            </form><!-- </form> -->
            <br>
            <br>
            <br>

        </main>
    


@endsection