@extends ('layouts.master')

@section('content')
  <div class="col-sm-8">
    <h1>Sign In</h1>

    <form method="POST" action="login">
      {{ csrf_field() }}

      <div class="form-group">

        <label for="email">Email:</label>

        <input type="email" class="form-control" id="email" name="email" required>

      </div>

      <div class="form-group">

        <label for="password">Password:</label>

        <input type="password" class="form-control" id="password" name="password" required>

      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>

      @include('layouts.errors')

    </form>
    
    <!-- Display Message if user is not logged in -->
    
    
            @if (session('message'))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        <li> {{ session('message') }} </li>
                    </ul>
                </div>
            </div>
            @endif
            @if (session('message2'))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        <li> {{ session('message2') }} </li>
                    </ul>
                </div>
            </div>
            @endif
            @if (session('message3'))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        <li> {{ session('message3') }} </li>
                    </ul>
                </div>
            </div>
            @endif
          
    

  </div>

@endsection
