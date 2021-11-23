@include('admin.header')

@yield('content')


<form method="POST" action="create_new_admin">
    {{csrf_field()}}
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fullname" name="fullname">
    </div>

    <div class="form-group"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Username" name="username"></div>
    <div class="form-group"><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password"></div>
    <div class="form-group"><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password Again" name="repassword"></div>

    <button type="submit" class="btn btn-primary">Add New Admin</button>
</form>




@include('main.footer')
