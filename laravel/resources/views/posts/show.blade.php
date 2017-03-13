
@extends ('layouts.master')

@section ('content')

  <div class="col-sm-8 blog-main">

    <!-- Show Post Made by User -->
    <h1> {{ $post->title }} </h1> 
    <p> By <u> {{ $post->user['name'] }}: </u> </p> 
    {{ $post->body }}
    <hr>

    <!-- Show Comment -->
    <div class="comments">
      <ul class="list-group">
        @foreach($post->comments as $comment)
          <li class="list-group-item">
           <span class="badge badge-info"> {{ $comment->user['name'] }} </span>  &nbsp; {{ $comment-> body }}
          </li>
         @endforeach
        </ul>
      </div>
      <hr>

    <!-- Show Comment FORM -->
    <div class="card">
      <div class="card-block">
        <form method="POST" action="/posts/ {{ $post->id }}/comments">
          {{ csrf_field() }}
          <div class="form-group">
            <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
          </div>

          <div clas="form-group">
            <button type="submit" class="btn btn-primary"> Add Comment </button>
          </div>
        </form>
      </div>
    </div>
    
    

  </div>


@endsection
