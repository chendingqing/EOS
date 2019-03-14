<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">修改新闻</h4>
        </div>
                <form action="{{route('admin.goods.update')}}" method="post" class="form-horizontal">
                <div class="modal-body">
                        <div class="modal-body">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{$good->id}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 项目名称:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" id="form-field-1" placeholder="" value="{{$good->name}}" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 满标数值:</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="max_money" placeholder="" value="{{$good->max_money}}" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">起投数值:</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="min_money" placeholder="" value="{{$good->min_money}}" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                           <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">投资币种</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="investment" placeholder="" value="{{$good->investment}}" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">收益币种</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="profit" placeholder="" value="{{$good->profit}}" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">简介</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="content" placeholder="" value="{{$good->content}}" class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">开标时间</label>
                                <div class="col-sm-9">
                                    <input type="date" id="form-field-1" name="open_time" placeholder="" value="{{$good->open_time}}" class="col-xs-10 col-sm-10">
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