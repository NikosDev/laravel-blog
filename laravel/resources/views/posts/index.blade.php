@extends('layouts.master')

@section('content')


<div class="blog-header">
   <div class="container">
     <h1 class="blog-title">The Bootstrap Blog</h1>
     <p class="lead blog-description">An example blog template built with Bootstrap.</p>
   </div>
 </div>



     <div class="col-sm-8 blog-main">

       @foreach ($posts as $post)
       @include('posts.post')
       @endforeach
      </div><!-- /.blog-main -->






@endsection
