@extends('layouts.app')
@include('layouts.index')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$post->title}} | <small>{{ $post->categori->name}}</small>
   
              </div>

            <div class="card-body">
                <img src="{{ asset('image/'.$post->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
   
                <p> {{($post->content)}} </p>
            </div>
                </div>
                <br>
                 <div class="card">
                <div class="card-header">Tambahkan Komentar</div>

                @foreach ($post->comments()->get() as $comment)
                    <div class="panel-body">
                        <h5> 
                            <strong> {{ $comment->user->name }} </strong> 
                            <small>  - {{$comment->created_at}} </small> 
                        </h5>

                        <p>{{ $comment->message }}</p>
                    </div>
                    
                @endforeach

            <div class="card-body">
                <form action="{{route('post.comment.store', $post)}}" method="post" class="form-horizontal">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="berikan komentar..."></textarea>    
                    </div>    

                    <div class="form-group">
                        <input type="submit" value="Komentar" class="btn btn-ptimary">
                    </div>
                </form>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection