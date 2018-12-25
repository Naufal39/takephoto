@extends('layouts.app')

@section('content')

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
    <div class="container">
        <form class="" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Post Title">
            </div>

            <div class="form-group">
                <label for="">Category</label>
                    <select name="categori_id" id="" class="form-control">
                    @foreach ($categories as $categori) 
                        <option value="{{ $categori->id }}"> {{$categori->name}} </option>                   
                    @endforeach
                    </select>
                </div>
            
            <div class="form-group">
                <label for="">Harga <small>*dalam satuan jam</small></label>
                <input type="text" class="form-control" name="harga" placeholder="Harga">
            </div>

            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea class="form-control" name="content" rows="5" placeholder="Post Content"></textarea>
            </div>

            <div class="form-group">
                <div class="row">
        <div class="col s6">
            <img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
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

    @section('footer')
    @include('layouts.footer')
@show
@endsection