@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">管理评论</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th width="30%">Content</th>
                                <th width="20%">User</th>
                                <th width="30%">Page</th>
                                <th width="10%">编辑</th>
                                <th width="10%">删除</th>
                            </tr>
                            </thead>
                            @foreach ($comments as $comment)
                            <tbody>
                                <tr>
                                    <td>{{$comment->content}}</td>
                                    <td><div class="article">
                                            <h4>{{ $comment->nickname }}</h4>
                                            <div class="content">
                                                <p>
                                                    {{ $comment->email }}
                                                </p>
                                            </div>
                                        </div></td>
                                    <td>{{$comment->website}}</td>
                                    <td><a href="{{ url('admin/comment/'.$comment->id.'/edit') }}"
                                           class="btn btn-success">编辑</a></td>
                                    <td>
                                        <form action="{{ url('admin/comment/'.$comment->id) }}" method="POST"
                                              style="display: inline;">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">删除</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection