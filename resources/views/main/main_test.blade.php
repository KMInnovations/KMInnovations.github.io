@extends('adminlte::page')
@section('title', 'First DB read')
@section('content')
    <div style="width:300px">
        <table id="main_table" class="display compact">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('plugins.Datatables', true)
@section('js')
    <script> 
        console.log('Hi!'); 
        $("#main_table").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        } );
    </script>
@stop