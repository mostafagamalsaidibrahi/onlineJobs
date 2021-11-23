@include('work_owner.header')

@yield('content')

@foreach($newJob as $obj)
<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <h5 class="card-title">Company Name : <span>{{ $obj->company_name }}</span></h5>
        <h5>Job Description :  <span>{{ $obj->job_description }}</span></h5>
        <h5>Job Field :  <span>{{ $obj->job_field }}</span></h5>
        <h5>Notes :  <span>{{ $obj->notes }}</span></h5>

        <a href="upplied/{{ $obj->jId }}">View Users</a>

    </div>
</div>
@endforeach

@include('main.footer')
