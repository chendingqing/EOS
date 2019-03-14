@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="page-header">
            <h1>
                新闻管理
                <small>
                    <i class="icon-double-angle-right"></i>
                    新闻列表
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <a class="btn btn-primary pull-right" data-toggle="modal" data-target="#addpermission"
                               style="margin-bottom: 10px">添加新闻</a>

                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <span class="lbl">序号</span>
                                        </label>
                                    </th>
                                    <th>新闻标题</th>
                                    <th>新闻内容</th>
                                    <th>
                                        <i class="icon-time bigger-110 hidden-480"></i>
                                        创建时间
                                    </th>
                                    <th>操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($articles as $k=>$v)
                                    <tr class="">
                                        <td class="center">
                                            <label>
                                                <span class="lbl">{{$k+1}}</span>
                                            </label>
                                        </td>

                                        <td>
                                            <a href="#">{{$v->title}}</a>
                                        </td>
                                        <td>{!!$v->content!!}</td>
                                        <td class="hidden-480">{{$v->created_at}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a data-toggle="modal" data-target="#mmmm" class="btn btn-xs btn-info" href="{{url('admin/article/edit',['id'=>$v->id])}}">
                                                    <i class="icon-edit bigger-120">编辑</i>
                                                </a>

                                                <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#confirm-delete" data-href="{{url('admin/article/delete',['id'=>$v->id])}}">
                                                    <i class="icon-trash bigger-120">删除</i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!!$articles->render() !!}
                        </div><!-- /.table-responsive -->
                    </div><!-- /span -->
                </div><!-- /row -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addpermission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">添加新闻</h4>
                </div>

                <form action="{{route('admin.article.add')}}" method="post" class="form-horizontal">
                    <div class="modal-body">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 新闻标题:</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" id="form-field-1" placeholder="新闻标题"
                                       class="col-xs-10 col-sm-10">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 新闻内容:</label>
                            <div class="col-sm-9">
                                <script id="container" name="content" type="text/plain">

                                </script>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal-End -->
    <!-- Modal edit远程数据-->
    <div class="modal fade" tabindex="-1" role="dialog" id="mmmm" aria-labelledby="myModalLabel">

    </div>
    <!-- Modal 远程数据-->
@endsection
@section('script')
    <script>
        $("#mmmm").on("hidden.bs.modal", function () {
            $(this).removeData("bs.modal");
        });
        $('.select2').select2();
    </script>


    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
@endsection