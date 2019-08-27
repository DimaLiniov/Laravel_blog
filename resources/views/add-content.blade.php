@if(Auth::check() && Auth::user()->role['is_admin'] == "1")
@extends('layouts.site')

@section('content')

<style type="text/css">
  div.col-md-6:nth-child(5) > p:nth-child(3) > input:nth-child(1) {
 width: 100%;
 height: 40px;
 background: #6AA3D2;
 color: white;
 font-weight: 600;
 border-radius: 8px;
 border-color: 2px solid #ADD8E6;
 text-align: center;
 vertical-align: center;
 padding-top: 0px;
 font-size: 25px;
 letter-spacing: 0.099em;
}

</style>

<div class="container" style="margin-top: 100px">
  <b style="color:red;"><?php if(isset($error)){echo $error;} ?></b>
</div>
  <div class="container">
      <form method="post" name="upload" enctype="multipart/form-data" action="{{route('articleStore')}}">
      <div class="row"> 
          <div class="col-md-4" >
            <label for="country">Название страны:</label>
            <input type="text" class="form-control" id="country" name="country" maxlength="25" required="" value="<?php if(isset($_POST['country'])){
              echo $_POST['country'];
              } ?>">
          </div>
          <div class="col-md-4">
            <label for="mount_name">Название горы:</label>
            <input type="text" class="form-control" id="mount_name" name="mount_name" maxlength="30" required="" value="<?php if(isset($_POST['mount_name'])){
              echo $_POST['mount_name'];
              } ?>">
          </div>
          <div class="col-md-4">
            <label for="exampleInputFile">Высота:</label>
            <input type="text" class="form-control" name="height" required="" value="<?php if(isset($_POST['height'])){
              echo $_POST['height'];
              }?>"> 
          </div>
          
          <div class="col-md-6" style="margin-top: 10px">
            <label for="exampleInputFile">Описание</label>
            <textarea class="form-control" name="description" maxlength="255" required=""><?php if(isset($_POST['description'])){
              echo $_POST['description'];
              }?></textarea> 
          </div>
          <div class="col-md-6" style="margin-top: 10px">
            <label for="image">Картинка</label>
            <p>
              <input type="file" name="image">
            </p> 
            <p>
              <input type="submit" name="upload" style="" value="Submit 👌⚽️">
            </p>
          </div>
          
          
          <div class="col-md-6" style="margin-top: 40px;">
            
          </div>
          @csrf
        </div>
        </form>

      <hr>
  </div>
@endsection
@endif