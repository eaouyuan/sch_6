@extends('layouts.app')
@section('content')
        <h1>商品一覽</h1>
{{--  @show  結尾自動顯示--}}
@endsection


@section('my_menu')
    <li class="nav-item">
        <a class="nav-link" href="/home">回控制台</a>
    </li>
    {{--  @parent  --}}
@stop