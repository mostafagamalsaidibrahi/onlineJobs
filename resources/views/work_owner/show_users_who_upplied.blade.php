@include('work_owner.header')

@yield('content')


@foreach($newUppliedUser as $obj)
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <h5 class="card-title">Username : <span>{{ $obj->username }}</span></h5>
            <button type="button" class="btn btn-success"><a href="/accept_user/{{ $obj->uJId }}">Accept</a> </button>
            <button type="button" class="btn btn-danger"><a href="/delete_user/{{ $obj->uJId }}">Reject</a> </button>
            </div>
        </div>
    @endforeach

@include('main.footer')

