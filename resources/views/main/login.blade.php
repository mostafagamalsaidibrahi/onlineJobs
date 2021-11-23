@include('main.header')

@yield('content')

<form action="login" method="POST" >
  <div class="form-group">
      {{csrf_field()}}
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>



@include('main.footer')
