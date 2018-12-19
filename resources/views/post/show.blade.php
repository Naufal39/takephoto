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
                        <input type="submit" value="Komentar" class="btn btn-primary">
                    </div>
                </form>
            </div>
                </div>
            </div>

            <div class="card-body">
            <div class="contact" id="contact">
		<div class="container">
			<h3 class="title-w3l">Pesan Sekarang</h3>
				<div class="contact-grid1">
					<div class="contact-top1">
						<form action="#" method="post">
							<div class="form-group">
								<label>Name*</label>
								<input type="text" name="Name" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<label>E-mail*</label>
								<input type="email" name="E-mail" placeholder="E-mail" required="">
							</div>
							<div class="form-group">
								<label>Phone Number*</label>
								<input type="text" name="number" placeholder="Phone Number" required="">
							</div>
							<div class="form-group">
								<label>Message*</label>
									<textarea name="Message" placeholder="Message" required=""></textarea>
							</div>
								<input type="submit" value="Send" class="btn btn-ptimary" >
						</form>
					</div>
				</div>
		</div>
	</div>
    </div>
        </div>
    </div>
</div>

    
@endsection