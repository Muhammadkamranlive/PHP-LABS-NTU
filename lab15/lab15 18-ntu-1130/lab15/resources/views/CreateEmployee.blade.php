@extends('layout.Master')
@section('createEmployee')
    <div class="container mb-5">
        <div class="row">
        <div class="col-lg-12">
            <form action="/createemployee" method="post" class="mb-lg-5">
                @csrf
                <div class="form-group">
                    <label for="">Emploayee name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for="">Emploayee Salary</label>
                    <input type="number" class="form-control" placeholder="Salary" name="salary">
                </div>
                <div class="form-group">
                    <label for="">Emploayee Designation</label>
                    <input type="text" class="form-control" placeholder="Designation" name="designation">
                </div>
                <div class="form-group">
                    <label for="">Emploayee Department</label>
                    <input type="text" class="form-control" placeholder="Department" name="department">
                </div>
                <div class="form-group">
                    <br/>
                    <input type="submit" class="btn btn-lg btn-primary rounded" value="Save Data" >
                </div>
            </form>
        </div>
        </div>


    </div>
@endsection
