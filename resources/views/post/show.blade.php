
@include('layouts.index')

@section('layouts')
    @include('layouts.app')
    
@show

<head>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
           
                <div class="card-header">{{$post->title}} | <small>{{ $post->categori->name}}</small>
                    <div class="pull-right">
                       <a href="{{ route('post.pp', $post->user_id)}}">{{$post->user->name}}</a> 
                    </div>
              </div>

            <div class="card-body">
               <center>
                   <img src="{{ asset('image/'.$post->gambar)  }}" style="height:450px;width:700px;margin-top:10px;margin-bottom:10px;">
               </center> 
               <p> <strong>Harga : </strong> Rp. {{($post->harga)}} <small>*dalam satuan jam</small> </p>
               <p> <strong>Contact Person : </strong> {{$post->user->number_hp}} </p>
                <p> <strong>Deskripi : </strong> {{($post->content)}} </p>

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
                        <form action="{{route('post.pesan')}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id_photographer" value="{{ $post->user_id }}">
                            <input type="hidden" name="id_categori" value="{{ $post->categori_id }}">
                            <input type="hidden" name="harga" value="{{ $post->harga }}">
							<div class="form-group">
								<label>Phone Number*</label>
								<input type="text" name="number" placeholder="Phone Number" required="">
                            </div>
                            <div class="form-group">
								<label>Date*</label>
                                <input  type="text" class="date form-control" name="tanggal" placeholder="dd-mm-yyyy ex:24-12-2018" required="">
                            </div>
                            <div class="form-group">
								<label>Location*</label>
                                <input  type="text" class="text" name="lokasi" placeholder="Where are you located?" required="">
							</div>
							<div class="form-group">
								<label>Message*</label>
									<textarea name="note" placeholder="Message"></textarea>
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
        

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>  
    
