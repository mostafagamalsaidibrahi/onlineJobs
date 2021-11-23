@include('user.header')

@yield('content')

@if(session('result'))
    <script>
        window.alert("You Are Upplied This Later");
    </script>
@endif
                  @foreach($newJob as $obj)
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Company Name : <span>{{ $obj->company_name }}</span></h5>
                            <h5>Job Description :  <span>{{ $obj->job_description }}</span></h5>
                            <h5>Job Field :  <span>{{ $obj->job_field }}</span></h5>
                            <h5>Notes :  <span>{{ $obj->notes }}</span></h5>
                            <button type="button" class="btn btn-success" id="btn_upply"><a href="upply/{{ $obj->jId }}">Upply</a> </button>

                        </div>
                    </div>
                  @endforeach
@include('main.footer')
