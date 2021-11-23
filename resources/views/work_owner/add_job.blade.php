@include('work_owner.header')

@yield('content')
<form action="add_job" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleFormControlInput1">Company Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="companyName" placeholder="company name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Job Field</label>
        <select class="form-control" id="exampleFormControlSelect1" name="jobField">
            <option>Android Development</option>
            <option>IOS Development</option>
            <option>Networks</option>
            <option>Big Data</option>
            <option>Full Stack Web</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Job Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="jobDesc"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Other Notes</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="notes"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Add</button>
</form>

@include('main.footer')
