@extends('layout.Master')

@section('showemployee')
    <div class="container-fluid py-lg-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover table-striped table-dark">
                    <thead>
                    <th>Employeename</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Desgination</th>
                    <th>Action</th>
                    </thead>
                    @foreach($arrayOfEmployees as $data)
                    <tr>
                        <td>{{$data['Employeename']}}</td>
                        <td>{{$data['Salary']}}</td>
                        <td>{{$data['Department']}}</td>
                        <td>{{$data['Designation']}}</td>
                        <td><a href="/del/{{$data['id']}}" class="btn shadow btn-danger">DELETE</a></td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

    @endsection
