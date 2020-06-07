@extends('layouts.default')

@section('title')
Bandhub {{ $sheet->name }}
@endsection

@section('content')

    <main role="main" class=" ml-sm-auto px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <div class="container　my-10 card ">
                <div class = "row">
                    <div class="card-body col-sm-12 col-md-6 ">
                        <h2 class="card-title px-2">{{ $sheet->name }} </h2>
                        <h3 class="card-text px-2">{{ $sheet->date }} @ {{ $sheet->place }} {{ $sheet->time}} ~ </h3>

                    </div>
                    
                    <div class="card-body col-sm-none col-md-4 ">
                        <!-- 空間調整用空白 -->
                    </div>
                
                    <div class="card-body col-sm-12 col-md-2 ">
                        <a href="{{ url('/sheets/edit',$sheet->id) }}" class="btn btn-primary">編集</a>
                    

                        <!-- 切り替えボタンの設定 -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">削除</button>
                        <!-- モーダルの設定 -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">セッティングシートを削除する</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>このセッティングシートを本当に削除しますか？</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                
                                <form method="post" name="delete" action="{{ url('/sheets/delete',$sheet->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger" id= "form_delete" data-id="{{ $sheet->id }}" >本当に削除する</button>
                               
                                </form>
                            </div><!-- /.modal-footer -->
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>


                
                </div>


                <div class = "row">   
                    <div class="col-sm-12 col-md-6 ">
                    <img  src="{{ asset('assets/images/src/setting_sample.jpg') }}" class="card-img-top img-thumbnail img-responsive" width="100%" height="50%" alt="...">
                    </div>

                    <div class="col-sm-12 col-md-6 ">
                        <div class="card-body">
                            <h3 class="card-title">SetList</h5>

                            <a class= "btn btn-success mb-2" href="{{ url('/sheets/song/create',$sheet->id) }}"  role="button">曲追加</a>

                            <div class="table-responsive">
                                <table class="table table-md">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th>曲順</th>
                                        <th>曲名</th>
                                        <th>時間</th>
                                        <th>ジャンル</th>
                                        <th>リハ</th>
                                        <th>編集</th>
                                        <th>削除</th>
                                        </tr>
                                    </thead>
                                    @foreach ($songs as $song)
                                    <tbody>
                                        <tr>
                                            <td> {{ $song->order }}</td>
                                            <td> {{ $song->name }}</td>
                                            <td> {{ $song->time }}</td>
                                            <td> {{ $song->genre }}</td>
                                            <td> {{ $song->rehe }}</td>
                                            <td><a class= "btn btn-primary " href="{{ url('/sheets/song/edit',$song->id) }}" role="button">編集</a></td>
                                            <td>
                                                <form method="post" name="delete" action="{{ url('/sheets/song/delete',$song->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger" id= "form_delete" data-id="{{ $sheet->id }}" >削除</button>
                                            </td>

                                            
                                        </tr>
                                      
                                        </tbody>  
                                    @endforeach 
                                     
                                    
                                </table>
                            </div><!-- /.table-responsive -->
                        </div>
                    </div>

                </div>
                    

                <div class = "row"> 
                        <div class="col-sm-12 col-md-6 card-body">
                            <h3 class="card-title">持ち込み機材</h5>
                            <div class="table-responsive">
                                <table class="table table-md">
                                    <thead class="thead">
                                        <tr>
                                        <th>機材名</th>
                                        <th>コメント</th>
                                    </thead>

                                    @foreach ($members as $member)
                                    <tbody>
                                        <tr>
                                            <td> {{ $member->instruments }}</td>
                                            <td> {{ $member->inst_comments }}</td>
   
                                        </tr>
                                      
                                        </tbody>  
                                    @endforeach 
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 card-body">
                            <h3>照明希望</h3>
                            <div class="table-responsive">
                                <table class="table table-md">
                                    <thead class="thead">
                                        <tr>
                                        <th>曲順</th>
                                        <th>照明</th>
                                        </tr>
                                    </thead>
                                    @foreach ($songs as $song)
                                    <tbody>
                                        <tr>
                                            <td> {{ $song->order }}</td>
                                            <td> {{ $song->light }}</td>

                                  
                                        </tr>
                                      
                                        </tbody>  
                                    @endforeach 
                                     
                                    
                                </table>
                            </div><!-- /.table-responsive -->
                        </div>
                </div>
            </div>
            

        </main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    
@endsection