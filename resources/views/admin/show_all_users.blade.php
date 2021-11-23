@include('admin.header')

@yield('content')


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Fullname</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Type</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

        @foreach($newUser as $obj)
            <tr>
                <td>{{ $obj->fullname }}</td> <!--Fullname-->
                <td>{{ $obj->username }}</td> <!--Username-->
                <td>{{ $obj->password }}</td> <!--Password-->
                <td>{{ $obj->type }}</td> <!--Type-->
                <td><button type="button" class="btn btn-primary accept"><a href="accept_user_from_admin/{{$obj->id}}">Accept</a> </button> &nbsp;
                    <button type="button" class="btn btn-danger"><a href="delete_user_from_admin/{{ $obj->id }}">Reject</a> </button>
                </td>
            </tr>
        @endforeach




    </tbody>
</table>



@include('main.footer')

