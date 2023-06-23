@extends('master')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop


@section('body')
    @yield('content')
    
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
@yield('adminlte_js')