@extends('layouts.app')

@section('content')
<table class="table">
@foreach($table as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->user_role->code}}</td>
        <td>{{$row->created_at}}</td>
        <td>{{$row->updated_at}}</td>
    </tr>
@endforeach
</table>
@endsection