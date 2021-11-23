@include('admin.header')

@yield('content')
<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <h5 class="card-title">Number Of Admins</h5>
        <h1><span class="badge badge-secondary">{{ $newUser1 }}</span> With Ration {{ ( $newUser1 / $newAllUser ) * 100 }} %</h1>

        <p class="card-text"></p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ ( $newUser1 / $newAllUser ) * 100 }}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </div>
</div>
<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <h5 class="card-title">Number Of Users</h5>
        <h1><span class="badge badge-secondary">{{ $newUser2 }}</span> With Ratio {{ ( $newUser2 / $newAllUser) * 100 }} %</h1>

        <p class="card-text"></p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ ( $newUser2 / $newAllUser) * 100 }}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </div>
</div>
<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <h5 class="card-title">Number Of Work Owners</h5>
        <h1><span class="badge badge-secondary">{{ $newUser3 }}</span> With Ration {{ ($newUser3 / $newAllUser) * 100 }} %</h1>

        <p class="card-text"></p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ ($newUser3 / $newAllUser) * 100 }}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </div>
</div>
<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <h5 class="card-title">Number Of Jobs</h5>
        <h1><span class="badge badge-secondary">{{$newAcceptedJobs}}</span> With Ratio {{ ($newAcceptedJobs / $newRejectedJobs ) * 100 }} %</h1>

        <p class="card-text"></p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ ($newAcceptedJobs / $newRejectedJobs ) * 100 }}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </div>
</div>



@include('main.footer')
