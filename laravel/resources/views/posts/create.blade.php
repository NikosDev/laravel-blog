@extends ('layouts.master')

@section('content')


<div class="col-sm-8 blog-main">
  <h2> Publish a post </h2>
  <hr>
  <form method="POST" action="/posts">
    {{ csrf_field() }}


      <div class="form-group">
        <label >Title</label>
        <input type="text" class="form-control"  name="title" required>
      </div>

      <div class="form-group">
        <label >Body input</label>
        <input type="text" class="form-control"  name="body" required>

      </div>
      <button type="submit" class="btn btn-primary" >  Submit </button>

  </form>
</div><!-- /.blog-main -->

@endsection
