@extends('layouts.admin.masterAdmin')
@section('title', '500 错误')
@section('class','class="gray-bg"')
@section('content')
    <div class="middle-box text-center animated fadeInDown">
        <h1>500</h1>
        <h3 class="font-bold">服务器内部错误</h3>

        <div class="error-desc">
            服务器好像出错了...
            <br/>您可以返回主页看看
            <br/><a href="index.html" class="btn btn-primary m-t">主页</a>
        </div>
    </div>
@endsection
