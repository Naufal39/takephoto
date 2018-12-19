@extends('layouts.app')
@include('layouts.index')

@section('content')

<div class="section">
@if (count($hasil))
<div class="card-panel green white-text"> <h4> Hasil pencarian : <b>{{$query}}</b> </h4> </div>

    <div class="row justify-content-center">
        <div class="col-md8">

                @foreach($hasil as $data)

    <div class="row">
		<div class="col s12">
			<h1>{{ $data->title }}</h1>

            <div class="divider"></div>
            <p> <h4> {!!substr($data->content,0,100)!!} ...</h4> </p>
                
            <a href="{{ route('post.show', $data->id) }}" class="btn btn-flat red accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a>
            <a href="{{ route('post.edit', $data->id) }}" class="btn btn-flat blue darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
            <a href="{{ route('post.destroy', $data->id) }}" onclick="return confirm('Yakin mau hapus data ini sob?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>
		</div>
    </div>
    <br>
	@endforeach            
        </div>

    </div>




</div>

{{ $hasil->render() }}
	
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</div>
@endif

@endsection