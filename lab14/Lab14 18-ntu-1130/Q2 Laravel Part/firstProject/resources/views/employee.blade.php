@extends('layout.master')
@section('employee')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <table class="table table-hover">
                    <tr>
                        <thead>
                        <th>
                            First name
                        </th>
                        <th>
                            lastname
                        </th>
                        <th>
                            Hire date
                        </th>
                        <th>
                            Manager
                        </th>
                        </thead>
                    </tr>
                    @foreach($data as $list)
                        <tr>
                            <thead>
                            <th>
                                {{$list->firstName}}
                            </th>
                            <th>
                                {{$list->lastname}}
                            </th> <th>
                                {{$list->HireDate}}
                            </th>
                            <th>
                                {{$list->manager}}
                            </th>
                             <th>
                                 <a href="/del/{{$list->id}}" class="btn btn-danger">Del</a>
                             </th>
                            </thead>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <table class="table table-hover">
                    <tr>
                        <thead>
                        <th>
                            First name
                        </th>
                        <th>
                            lastname
                        </th>
                        <th>
                            Hire date
                        </th>
                        <th>
                            Manager
                        </th>
                        </thead>
                    </tr>
                    @foreach($data2 as $list)
                        <tr>
                            <thead>
                            <th>
                                {{$list->Name}}
                            </th>

                            <th>
                                <a href="/d/{{$list->depid}}" class="btn btn-danger">Del</a>
                            </th>
                            </thead>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>
@endsection
