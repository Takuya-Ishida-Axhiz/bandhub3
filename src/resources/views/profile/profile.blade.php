@extends('layouts.default')
<link href="{{ asset('/css/profile.css') }}" rel="stylesheet">

@section('title')
Bandhub Profile {{ Auth::user()->name }}
@endsection


@section('content')

    
        <main role="main" class=" ml-sm-auto px-4">


                <aside class="profile-card">
                <header>
                    <!-- here’s the avatar -->
                    <a target="_blank" href="#">
                    @if($auths->avatar_filename)
                        <img src="{{ asset('storage/avatar/' .$auths->avatar_filename) }}" alt="avater" width="100px" height="100px">
                    @endif
                    </a>

                    <!-- the username -->
                    <h1>
                        
                        {{ Auth::user()->name }}    
                        </h1>

                    <!-- and role or location -->
                    <h2>
                            {{ Auth::user()->part }} @ {{ $band->band_name }}
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

                    <a href ="{{ url('/profile/edit',$auths->id) }}"  class="btn btn-outline-dark rounded-pill">編集</a>
                
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





        </main>
    

@endsection