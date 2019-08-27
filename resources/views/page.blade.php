 @extends('layouts.site')
 @section('content')
 <!-- Main jumbotron for a primary marketing message or call to action -->
 <style type="text/css">
 	/*overflow: hidden;
text-overflow: ellipsis;
-webkit-line-clamp: 3;
display: -webkit-box;
-webkit-box-orient: vertical;*/
 	.display-4 {
 font-weight: 10px;
 font-weight: 500;
 font-style: normal;
 letter-spacing: 0.221em;
 color: #000;
 font-size: 3.9rem;
 line-height: 1.2;
}
div.container:nth-child(1) > p:nth-child(2) {
 font-style: italic;
 line-height: 108px;
 color: white;
}

 	.jumbotron{
 		margin-top: 40px;
 		background-image: url("http://caubasephotos2.narod.ru/photos/cau_9844_vt.jpg");
 		background-size: 100%;
 		background-size:cover;
 	}
 </style>
  <div class="jumbotron">

    <div class="container"style="color:black;" >

      <h1 class="display-4" style="font-weight: 10px;">{{$header}}</h1>
      <p>{{$message}}</p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
@foreach($articles as $article)
	<div class="col-md-4">
        <h2>{{$article->country}}</h2>
        <p><img src="img/{{$article->image}}" width="350px" height="190px" > </p>
        <p>{{$article->mount_name}}, высота: {{$article->height}}м.</p>
        <p>Количество просмотров: {{$article->views}}</p>
        <p><a class="btn btn-secondary" href="{{route('articleShow',['id'=>$article->id])}}" role="button">Посмотреть описание &raquo;</a></p>
        <form action="{{route('articleDelete',['article'=>$article->id])}}" method="POST">
        <!-- <input type="hidden" name="_method" value="DELETE"> -->
        {{method_field('DELETE')}}
        @guest
                            
                            @if (Route::has('login')) 
                                
                            @endif
                        @elseif (Auth::user()->is_admin == '1')
          <button type="submit" class="btn btn-danger">
            Delete💣
          </button>@endguest
          @csrf
        </form>
     </div>
@endforeach
    <hr>

  </div> <!-- /container -->
  @endsection