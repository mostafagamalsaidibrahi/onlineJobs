@include('main.header')

@yield('content')

<form method="POST" action="signUp">
    {{csrf_field()}}
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fullname" name="fullname">
  </div>

    <div class="form-group"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Username" name="username"></div>
    <div class="form-group"><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password"></div>
    <div class="form-group"><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password Again" name="repassword"></div>
    <div class="form-group">
        <input type="radio" id="user" name="type" value="user">
        <label for="user">Normal User</label><br>
        <input type="radio" id="work_owner" name="type" value="work_owner">
        <label for="work_owner">Work Owner</label><br>

    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>



@include('main.footer')
