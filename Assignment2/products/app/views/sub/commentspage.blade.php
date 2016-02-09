@extends('layouts.master')

@section('title')
Comments
@stop

@section('content')
<div class="col-md-9 col-sm-1" id="right"> 

<div id="post">
        <div class = "bar" value="{{{ $post->id }}}">
            <p class ="white" id = "date">{{{ $post->title }}}</p>
        </div>   
        <figure><img id ="imgright" class="img-circle" src="images/rembrandt_profile.jpg" width="100px" height="100px"></figure>
    {{--    <h4><br>{{{ $post->message }}}</h4> --}}
    {{--    <h5>Post by {{{ $post->author }}}</h5> --}}
        <p>Comments</p>

        </div>
            <!-- post form -->
      <hr>      
      <h4>Comment<br><br></h4>
      <form class="form-horizontal" method="post" action="add_post_action">
        <div class="form-group">
          <label for="text" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-5">
            <input type="text" name= "author" class="form-control" id="inputEmail3" placeholder="Name">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
          <div class="col-sm-8">
            <textarea class="form-control" rows="3" name= "message" placeholder="Message"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" value="Add post">Post</button>
          </div>
        </div>
      </form>
      <hr>
</div>

@stop