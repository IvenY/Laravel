@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">查看一篇文章</div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>编辑失败</strong> 输入不符合要求<br><br>
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif
                            <input type="text" name="title" class="form-control"  readonly value="{{ $articles->title }}" >
                            <br>
                            <textarea name="body" rows="10" class="form-control" readonly>{{ $articles->body }}</textarea>
                            <br>
                            <a onclick="javascript:history.back(-1)" class="btn btn-lg btn-info">返回</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
