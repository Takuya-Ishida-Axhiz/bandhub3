@extends('layouts.default')
<!-- <link href="{{ asset('/css/profile.css') }}" rel="stylesheet"> -->

@section('title')
Bandhub Profile Edit {{ Auth::user()->name }}
@endsection


@section('content')


    
        <main role="main" class=" ml-sm-auto px-4">


                <aside class="profile-card">
                <header>
                    <!-- here’s the avatar -->
                    <a target="_blank" href="#">
                    <img src="http://lorempixel.com/150/150/people/" class="hoverZoomLink">
                    </a>

                    <!-- the username -->
                    <h1>
                        
                        {{ Auth::user()->name }}    
                        </h1>

                    <!-- and role or location -->
                    <h2>
                            Guitar @ Bandname
                        </h2>

                </header>

                <!-- bit of a bio; who are you? -->
                <div class="profile-bio">
                    <p>
                        age:{{ Auth::user()->age }} /  {{ Auth::user()->gender }}   
                    </p>
                    
                    <p>
                        使用機材：{{ Auth::user()->instruments }}
                    </p>

                    <p>
                        {{ Auth::user()->comments }}
                    </p>

                </div>

                <!-- some social links to show off -->
                <ul class="profile-social-links">
                    <li>
                    <a target="_blank" href="https://www.facebook.com/creativedonut">
                        <i class="fa fa-facebook"></i>
                    </a>
                    </li>
                    <li>
                    <a target="_blank" href="https://twitter.com/dropyourbass">
                        <i class="fa fa-twitter"></i>
                    </a>
                    </li>
                    <li>
                    <a target="_blank" href="https://github.com/vipulsaxena">
                        <i class="fa fa-github"></i>
                    </a>
                    </li>
                    <li>
                    <a target="_blank" href="https://www.behance.net/vipulsaxena">
                    
                        <i class="fa fa-behance"></i>
                    </a>
                    </li>
                </ul>
                </aside>





                <!-- エラーメッセージ。なければ表示しない -->
                @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                

                <!-- フォーム -->
                <form action="{{ url('/profile/store') }}" method="POST" enctype="multipart/form-data">

                    <!-- アップロードした画像。なければ表示しない -->
                    @isset ($filename)
                    <div>
                        <img src="{{ asset('storage/' . $filename) }}">
                    </div>
                    @endisset

                    @if ($is_image)
                    <figure>
                        <img src="/storage/profile_images/{{ Auth::id() }}.jpg" width="100px" height="100px">
                        <figcaption>現在のプロフィール画像</figcaption>
                    </figure>
                    @endif
                    

                    <label for="photo">画像ファイル:</label>
                    <input type="file" class="form-control" name="file">
                    <br>
                    <hr>
                    {{ csrf_field() }}
                    <button class="btn btn-success"> Upload </button>
                </form>
        </main>
    


@endsection