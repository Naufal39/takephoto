@extends('layouts.app')
@include('layouts.index')

@section('content')

    <div class="container">
        <div class="section">
<form action="{{ route('post.result') }}" method="GET">
    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="q">
            <label for="title">Cari</label>
          </div style="display:inline-block">
           <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Cari<i class="material-icons right">search</i></button>
            <div class="form-group">
                    <select name="categori_id" id="" class="form-control">
                    @foreach ($categories as $categori) 
                    <a href="#"> <option value="{{ $categori->id }}"> {{$categori->name}} </option> </a>           
                    @endforeach
                    </select>
                </div>
    </div>
  
    
 </form>
    <div class="row justify-content-center">
        <div class="col-md-8">
                @foreach($posts as $post)
                    <div class="card">
                         <div class="card-header">
                             <h4> <a href="{{ route('post.show', $post) }}">{{$post->title}} | <small>{{ $post->categori->name}}</small></a> </h4>
                            

                            <div class="pull-right" style="float:right; display:inline-block;">
                               {{-- <a href="{{route('post.edit', $post)}}" class="btn btn-xs btn-default">edit</a>
                                <form class="" action="{{route ('post.destroy', $post)}}" method='post'>
                                  
                                    <button type="submit" class="btn btn-xs btn-danger">hapus</button> --}}
                                    
                                    @if (Route::has('login'))

                                        @auth

                                        @if (auth()->id()==$post->user_id)
                                            <form action="" method="post"> </form>
                                            {{csrf_field()}}
                                           

                                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-flat blue darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
                                            <a href="{{ route('post.destroy', $post->id) }}" onclick="return confirm('Yakin mau hapus data ini sob?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>
                                
                                        @endif
                                        
                                        @endauth
                                        
                                    @endif
                                    
                                </form>

                                </div>
                        </div>
                            
                     <div class="card-body">
                    {{-- <p> {{str_limit ($post->content, 100, '...')}} </p> --}}
                    
                            <img style="float:left;" src="{{ asset('image/'.$post->gambar)  }}" style="max-height:400px;max-width:400px;margin-top:10px;margin-bottom:10px;">
                            <p> <strong> Photographer : </strong>  {{$post->user->name}}</p>
                            <p> <strong>Harga : </strong> Rp. {{($post->harga)}} <small>*dalam satuan jam</small> </p>

                         </div> 
                     </div>
                     <br>
                     <br>
                @endforeach
                {{$posts->render()}}
            </div>
        </div>
    </div>
</div>

@section('footer')
    @include('layouts.footer')
@show

@endsection