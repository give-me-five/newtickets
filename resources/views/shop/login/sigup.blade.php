<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('myadmin/assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('myadmin/assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset('myadmin/assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('myadmin/assets/css/amazeui.datatables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('myadmin/assets/css/app.css')}}">
    <script src="{{asset('myadmin/assets/js/jquery.min.js')}}"></script>
	 <script type="text/javascript" src="{{asset('myadmin/js/jQuery-2.1.4.min.js')}}"></script>
</head>

<body >
    <script src="{{asset('myadmin/assets/js/theme.js')}}"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-title">注册用户</div>
                <span class="tpl-login-content-info">
                  创建一个新的用户
              </span>


                <form action="{{url('shop/registered')}}" method="post" class="am-form tpl-form-line-form" name="myform" onsubmit="reuturn doSubmit">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    
                    <div class="am-form-group">
                        <input type="text" name="shopname" class="tpl-form-input" id="user-name" placeholder="商家名称">
                    </div>

                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" name="myname" onblur="checkMyname()" id="user-name" placeholder="账号，5-20位数字、字母或下划线">
                    </div>

                    <div class="am-form-group">
                        <input type="password" name="mypassword" class="tpl-form-input" id="user-name" placeholder="密码，6-16位数字、字母或下划线">
                    </div>

                    <div class="am-form-group">
                        <input type="password" name="twopassword" class="tpl-form-input" id="user-name" placeholder="再次填写上面的密码">
                    </div>					
					<!--加载验证码-->
					 <div class="am-form-group">
					 
						<div class="col-xs-6"> 
							  <div class="form-group has-feedback" style="width:140px;">
								<input type="text" name="mycode" class="form-control" placeholder="验证码"/>
							  </div>

						  </div>
						  <div style="float:right" class="col-xs-6">
							  <img src="{{url('shop/getcode')}}" onclick="this.src='{{url('shop/getcode')}}?id='+Math.random(); " width="100" height="34"/>
						  </div>
					  </div>
					
                    <div class="am-form-group">

                        <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('myadmin/assets/js/amazeui.min.js')}}"></script>
    <script src="{{asset('myadmin/assets/js/app.js')}}"></script>
    <!--执行注册验证-->
   <script>
    function doSubmit(){
        return checkMyname() &&  checkPassword() && checkTWopassword();
    }
    //判断用户名是否合法
    function checkMyname(){
        //获取用户输入的信息
        var uname = $("input[name='myname']").val();
        //var myname = document.myform.myname.value;
        //删除信息
        $("input[name='myname']").nextAll("span").remove();
        //判断用户是否合法
        if(uname.match(/^[0-9,a-z,A-Z]{5,20}$/)==null){
            $("<span style='color:red;'>用户名不合法请重新输入</span>").insertAfter("input[name='myname']");
            return false;
        }
        //执行ajax判断
        $.ajax({
            headers: {
                'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
            },
            url:"/shop/registered",
            type:"post",
            data:"myname="+uname,
            datatype:"text",
            success:function(data){
                if(data==1){
                   $("<span style='color:red;'>您输入的用户名"+uname+"已存在</span>").insertafter("input[name='myname']");
                    //document.myform.myname.value = "";
                    return false;
                }
                if(data==2){
                    $("<span style='color:red;'>用户名不可用</span>").insertafter("input[name='myname']");
                    return false;
                }else{
                    $("<span style='color:green;'>用户名可用</span>").insertafter("input[name='myname']");
                }
            }
        });
        return true;
    }
    //密码验证
    function checkpassword(){
        //获取用户的输入密码
        var password = document.myform.password.value;
        $("input[name='password']").nextall('span').remove();

        if(password==""){
            $("<span style='color:red'>密码不能为空</span>").insertafter("input[name='password']");
            return false
        }
        if(password.match(/^[a-za-z0-9_]{6,20}$/)==null){
            $("<span style='color:red'>密码不合法请重新输入</span>").insertafter("input[name='password']");
            return false;
        }
        //执行ajax验证
        $.ajax({
            headers: {
                'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
            },
            url:'/reg/dologin',
            type:'post',
            data:'password='+password,
            datatype:'text',
            success:function(data){
                //密码不合法
                if(data==4){
                    $("<span style='color:red'>密码格式不合法</span>").insertafter("input[name='password']");
                    return false;
                }else{
                    $("<span style='color:green'>密码可用</span>").insertafter("input[name='password']");
                }
            }
        });
        return true;
    }
    //确认密码验证
    function checkpassword2()
    {
        //获取确认密码
        var password2 = document.myform.password2.value;
        var password = document.myform.password.value;
        $("input[name='password2']").nextall("span").remove();
        if(password2 != password){
            $("<span style='color:red'>两次密码不一致请重新输入</span>").insertafter("input[name='password2']");
            document.myform.password2.value ="";
            return false;
        }
        if(password2==""){
            $("<span style='color:red'>密码不能为空</span>").insertafter("input[name='password2']");
            return false
        }
        $.ajax({
            headers: {
                'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
            },
            url:'/reg/dologin',
            type:'post',
            data:'password2='+password2+"password"+password,
            datatype:'text',
            success:function(data){
                if(data==6){
                    $("<span style='color:red'>两次密码不一致请重新输入</span>").insertafter("input[name='password2']");
                    document.myform.password2.value ="";
                    return false;
                }else{
                    $("<span style='color:green'>密码一致</span>").insertafter("input[name='password2']");
                }
            }
        });
        return true;
    }
</script> 
</body>

</html>