<style>
    #dropdownMenu1{
    padding-top: 7px;
    padding-bottom: 7px; 
    }
</style>

<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="{{URL::to('/')}}">Home</a>
          <a class="nav-link" href="{{URL::to('/posts/create')}}">Create a post</a>
          @if (!Auth::check())
          <a class="nav-link" href="login">Login</a>
          <a class="nav-link" href="register">Register</a>
          @endif

            @if (Auth::check())         
            <div class="nav-link ml-auto dropdown">
                <button class="btn btn-secondary dropdown-toggle"
                type="button" id="dropdownMenu1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="{{URL::to('/logout')}}">Logout</a>
                </div>
            </div>
            @endif
        </nav>
    </div>
</div>
