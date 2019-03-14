@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="page-header">
            <h1>
                发表项目
                <small>
                    <i class="icon-double-angle-right"></i>
                     项目列表
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
                            <a class="btn btn-primary pull-right" data-toggle="modal" data-target="#addGoods" style="margin-bottom: 10px">添加项目</a>

                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <span class="lbl">项目名称</span>
                                        </label>
                                    </th>
                                    <th>满标数值</th>
                                    <th>起投数值</th>
                                    <th>年利率</th>
                                    <th>投资产品</th>
                                    <th>收益产品</th>
                                    <th>投资期限</th>
                                    <th>项目简介</th>
                                    <th>开标时间</th>
                                    <th>满标时间</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($goods as $k=>$v)
                                <tr class="">
                                    <td class="center">
                                        <label>
                                            <span class="lbl" style="color: red">{{$k+1}} </span>{{$v->name}}
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">{{$v->max_money}}</a>
                                    </td>
                                    <td>{{$v->min_money}}</td>
                                    <td>{{$v->interest}}%</td>

                                    <td>{{$v->investment}}</td>
                                    <td>{{$v->profit}}</td>

                                    <td>{{$v->term}}</td>
                                    <td>{{$v->content}}</td>
                                    <td>{{$v->open_time}}</td>

                                    <td class="hidden-480">{{$v->full_time}}</td>

                                         @if($v->status==0)
                                        <td>未启用</td>
                                        @else
                                        @endif
                                        <td>
                                            <div class="btn-group">
                                                <a data-toggle="modal" data-target="#mmmm" class="btn btn-xs btn-info" href="{{url('admin/goods/edit',['id'=>$v->id])}}">
                                                    <i class="icon-edit bigger-120">编辑</i>
                                                </a>
                                                <a class="btn btn-xs btn-danger" data-toggle="modal"  data-target="#confirm-delete" data-href="{{url('admin/goods/delete',['id'=>$v->id])}}">
                                                    <i class="icon-trash bigger-120">删除</i>
                                                </a>
                                            </div>
                                        </td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                                {!! $goods->render() !!}
                        </div><!-- /.table-responsive -->
                    </div><!-- /span -->
                </div><!-- /row -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addGoods" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">添加项目</h4>
                </div>
                <form action="{{route('admin.goods.add')}}" method="post" class="form-horizontal">
                <div class="modal-body">
                        <div class="modal-body">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 项目名称:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" id="form-field-1" placeholder="" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 满标数值:</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="max_money" placeholder="" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">起投数值:</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="min_money" placeholder="" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                           <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">投资币种</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="investment" placeholder="" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">收益币种</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="profit" placeholder="" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">简介</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="content" placeholder="" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">开标时间</label>
                                <div class="col-sm-9">
                                    <input type="date" id="form-field-1" name="open_time" placeholder="" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
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
    <!-- Modal edit远程数据-->
    <div class="modal fade" tabindex="-1" role="dialog" id="mmmm" aria-labelledby="myModalLabel">
    </div>
    <!-- Modal 远程数据-->
@endsection
@section('script')
    <script>
        $("#mmmm").on("hidden.bs.modal", function() {
            $(this).removeData("bs.modal");
        });
    </script>
@endsection