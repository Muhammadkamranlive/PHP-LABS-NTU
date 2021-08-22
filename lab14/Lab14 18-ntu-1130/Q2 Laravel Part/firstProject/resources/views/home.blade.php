@extends('layout.master')


@section('content')
 <div class="comtainer">
     <div class="row">
         <div class="col-lg-12 text-center">
             <h1>Migrations are appllied</h1>
             <form action="/save" method="post">
                  @csrf
                 <input type="text" class="form-control" name="firstname">
                 <input type="text" class="form-control" name="lastname">
                 <input type="text" class="form-control" name="hiredate">
                 <input type="text" class="form-control" name="manager">
                 <select name="depid" id="" class="form-control">
                     @foreach( $array1 as $list)
                     <option value="{{$list->depid}}">{{$list->Name}}</option>
                     @endforeach
                 </select>
                 <input type="submit" class="btn btn-lg btn-primary " value="submit" name="btnsubmit">
             </form>
         </div>
     </div>
 </div>
@endsection
