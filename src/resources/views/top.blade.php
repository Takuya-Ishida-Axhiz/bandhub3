@extends('layouts.default')

@section('title')
Bandhub
@endsection

@section('content')



<div id="carousel-2" class="carousel slide " >
  <ol class="carousel-indicators">
    <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-2" data-slide-to="1"></li>
    <li data-target="#carousel-2" data-slide-to="2"></li>
  </ol>
  
      <!-- スライドさせる画像の設定 -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src = "{{ asset('assets/images/src/live.jpg') }}">
        <div class="carousel-caption d-none d-md-block">
            <h5>完璧な打ち合わせはあなたを最高のステージへ</h5>
            <a class="btn btn-primary rounded-pill" href="/login" role="button">Get Started</a>
        </div><!-- /.carousel-caption -->
    </div><!-- /.carousel-item -->
    <div class="carousel-item">
        <img src = "{{ asset('assets/images/src/pa.jpg') }}">
        <div class="carousel-caption d-none d-md-block">
            <h5>PAはもうすでに完璧のあなたのことを知っている</h5>
            <a class="btn btn-primary rounded-pill" href="/login" role="button">Get Started</a>
        </div><!-- /.carousel-caption -->
    </div><!-- /.carousel-item -->
    <div class="carousel-item">
        <img src = "{{ asset('assets/images/src/amp.jpg') }}">
        <div class="carousel-caption d-none d-md-block">
            <h5>自分のGearを世界に発信しよう</h5>
            <a class="btn btn-primary rounded-pill" href="/login" role="button">Get Started</a>
        </div><!-- /.carousel-caption -->
    </div><!-- /.carousel-item -->
  </div>
  <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


  
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

@endsection