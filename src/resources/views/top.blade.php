
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

    <title>@yield('title')</title>
</head>

<header> 
            <nav class="navbar bg-dark navbar-expand-md shadow-sm mb-5　navbar-prim  ">
                    <a href="/"><img class="navbar-brand img-responsive " width="70" height="70" src = "{{ asset('assets/images/src/logo.png') }}"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <!-- <li class="nav-item">
                          <a class="nav-link" href="/bands">Band</a>
                      </li> -->

                      <li class="nav-item">
                          <a class="nav-link" href="/sheets">Sheet</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="/sounds">Sound</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="/profile">Profile</a>
                      </li>
                  </ul>

                </div>
                    
                <a href = "/loginsaiyou" >
                    <p class = "btn btn-outline-light rounded-pill mb-0">ログイン</p>
                    </a>
            </nav>
  </header>

<main role="main" >

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src = "{{ asset('assets/images/src/live.jpg') }}" style="width:100%;  height=200%">
        
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Tools for All Bandmen.</h1>
            <p>完璧な打ち合わせはあなたを最高のステージへ。</p>
            <p><a class="btn btn-lg btn-primary" href="/login" role="button">Get started</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src = "{{ asset('assets/images/src/pa.jpg') }}" style="width:100%;  height=200%">
        
        <div class="container">
          <div class="carousel-caption ">
          <h1>Perfect Setting Sheet.</h1>
            <p>リハの前からPAはあなたのことを完璧に知っている</p>
            <p><a class="btn btn-lg btn-primary" href="/login" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src = "{{ asset('assets/images/src/amp.jpg') }}" style="width:100%;  height=200%">
        
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Tell me your gear.</h1>
            <p>あなたのGearを発信しよう</p>
            <p><a class="btn btn-lg btn-primary" href="/login" role="button">Browse gear</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        
        <h2>全てのバンドマンへ捧ぐオールインワンツール</h2>
        <p>ライブのために必要な情報を全てここにまとめておけば、当日はライブ本番に集中できるでしょう。</p>
        
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        
        <h2>セッティングシートを保存しよう</h2>
        <p>楽器構成や立ち位置、曲順とリハーサル予定箇所、曲ごとの照明希望まで一括して管理ができます。そのままライブハウスのPAさんに提出できるため、何度も手書きで書き直す必要はありません。</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       
        <h2>あなたのGearを登録しよう</h2>
        <p>バンドマンは皆こだわりの機材を一つや二つ持っているもの。登録してみんなに発信してみることで思いも寄らない使い方が見つかるかもしれません。</p>
        
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <!-- <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        {% include icons/placeholder.svg width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto" %}
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        {% include icons/placeholder.svg width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto" %}
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        {% include icons/placeholder.svg width="500" height="500" background="#eee" color="#aaa" class="bd-placeholder-img-lg featurette-image img-fluid mx-auto" %}
      </div>
    </div>

    <hr class="featurette-divider"> -->

    <!-- /END THE FEATURETTES -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy;  Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
ß