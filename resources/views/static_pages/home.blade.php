@extends('layouts.default')
@section('title','主页')
@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p>您现在所看到的是
      <a href="https://laravel-china.org/courses/laravel-essential-training-5.5">Laravel 入门教程的示例项目主页。</a>
    </p>
    <p>一切从这里开始。</p>
  <p><a href="{{ route('sign') }}" class="btn btn-lg btn-success">现在注册</a></p>
  </div>
@stop