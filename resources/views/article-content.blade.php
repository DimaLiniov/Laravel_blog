 @extends('layouts.site')
 @section('content')
 <!-- Main jumbotron for a primary marketing message or call to action -->
  <style type="text/css">
    div.container {
 margin-top: 100px;
}
  </style>
  


  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
@if($article)
	<div>
        <h2>{{$article->country}}</h2>
        <p><img src="../img/{{$article->image}}" width="700px" height="380px"  > </p>
        <p>{{$article->mount_name}}, высота: {{$article->height}}м.</p>
        <p>{{$article->description}}</p>
     </div>
@endif
    <hr>

  </div> <!-- /container -->
  @endsection