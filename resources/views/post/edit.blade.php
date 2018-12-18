@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>

@stop

@extends('layouts.app')

@section('content')

<div class="container">
         <form class="" action="{{ route('post.update', $post) }}" method="post">
        {{csrf_field()}}
        {{method_field('PATCH')}}
            <div class="form-group">
                <label for="">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Post Title" value= "{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="">Category</label>
                    <select name="categori_id" id="" class="form-control">
                    @foreach ($categories as $categori) 
                        <option value="{{ $categori->id }}"
                            @if ($categori->id === $post->categori_id)
                            selected
                            
                        @endif> {{$categori->name}} </option>                   
                    @endforeach
                    </select>
                </div>

            <div class="form-group">
                <label for="">Content</label>
                <textarea class="form-control" name="content" rows="5" placeholder="Post Content"> {{ $post->content }} </textarea>
            </div>

            <div class="form-group">
                <div class="row">
        <div class="col s6">
            <img src="{{ asset('image/'.$post->gambar) }}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
          <input type="file" id="inputgambar" name="gambar" class="validate"/ >
        </div>
      </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="save">
            </div>
        </form>    
    </div>
  
    
@endsection