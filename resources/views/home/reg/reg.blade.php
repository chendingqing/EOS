

<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form action="{{route('home.reg')}}" method="post" class="form-horizontal">
                <div class="modal-body">
                    <div class="modal-body">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 用户名:</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" id="form-field-1" placeholder="用户名" class="col-xs-10 col-sm-10">
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email:</label>
                            <div class="col-sm-9">
                                <input type="email" id="form-field-1" name="email" placeholder="Email" class="col-xs-10 col-sm-10">
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">密码:</label>
                            <div class="col-sm-9">
                                <input type="password" id="form-field-1" name="password" placeholder="密码" class="col-xs-10 col-sm-10">
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">确认密码:</label>
                            <div class="col-sm-9">
                                <input type="password" id="form-field-1" name="password_confirmation" placeholder="确认密码" class="col-xs-10 col-sm-10">
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

