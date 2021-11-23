@include('admin.header')

@yield('content')


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Company Name</th>
        <th scope="col">Job Description</th>
        <th scope="col">Job Field</th>
        <th scope="col">Notes</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($newJob as $obj)
        <tr>
            <td>{{ $obj->company_name }}</td> <!--Fullname-->
            <td>{{ $obj->job_description }}</td> <!--Username-->
            <td>{{ $obj->job_field }}</td> <!--Password-->
            <td>{{ $obj->notes }}</td> <!--Type-->
            <td><button type="button" class="btn btn-primary accept"><a href="accept/{{$obj->jId}}">Accept</a> </button> &nbsp;
                <button type="button" class="btn btn-danger"><a href="delete/{{ $obj->jId }}">Reject</a> </button>
            </td>
        </tr>
    @endforeach




    </tbody>
</table>



@include('main.footer')

