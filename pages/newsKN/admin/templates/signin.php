    <div class="container">
        <div class="row" style="justify-content: center; display:flex;">
            <div class="col-md-6">
                <p style="color: white">Vui lòng đăng nhập để tiếp tục</p>
                <form method="POST" id="formSignin" onsubmit="return false;">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" placeholder="Tên đăng nhập" id="user_signin">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" class="form-control" placeholder="Mật khẩu" id="pass_signin">
                        </div>
                    </div>
                    <div class="form-group">
                        <button style="width: 100%" type="submit" name="btnSignin" id="btnSignin" class="btn btn-primary">Đăng nhập</button>
                    </div>
                    <div class="alert alert-danger hidden"></div>
                </form>
            </div>
        </div>
    </div>
</div