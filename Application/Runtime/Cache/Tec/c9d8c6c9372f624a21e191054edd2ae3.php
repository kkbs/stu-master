<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta charset="utf-8" />
        <title>管理系统</title>
        <link rel="stylesheet" type="text/css" href="/stu-manage/Public/css/common.css"/>
        <script src="/stu-manage/Public/js/jquery.js"></script>
        <script src="/stu-manage/Public/js/common.js"></script>

        
    </head>
    <body>
        <!-- 头部 -->
        <div class="header">
            <!-- logo -->
            <span class="logo"></span>
            <!-- 顶部导航 -->
            <ul class="main-nav">
                <li><a href="<?php echo U('Index/index1');?>">首页</a></li>
                <li><a href="<?php echo U('Article/wait');?>">内容</a></li>
                <li><a href="<?php echo U('User/upinfo');?>">用户</a></li>
                
            </ul>
            <!-- 用户栏 -->
            <div class="user-bar">
                <a href="javascript:;" class="user-entrance">用户</a>
                <ul class="user-menu hidden">
                    <li>你好!<em title=""><?php echo ($name); ?></em></li>
                    <li><a href="<?php echo U('User/repswd');?>">修改密码</a></li>
                    <li><a href="<?php echo U('User/upinfo');?>">更新资料</a></li>
                    <li><a href="<?php echo U('Login/logout');?>">退出</a></li>
                </ul>
            </div>
        </div>
        <!-- /头部 -->
        <!-- 侧边栏 -->
        
            <div class="sideleft">
            <div class="subnav">
                <h3>
                    <i class="icon"></i>
                    综合信息
                </h3>
                <ul class="side-sub-menu">
                    <li><a href="<?php echo U('Article/wait');?>" class="item">待审核</a></li>
                    <li><a href="<?php echo U('Article/set');?>" class="item">已审核</a></li>
                    <li><a href="<?php echo U('Article/search');?>" class="item">综合素质</a></li>
                    
                </ul>
            </div>
            <div class="subnav">
                <h3>
                    <i class="icon"></i>
                    学生信息
                </h3>
                <ul class="side-sub-menu">
                    <li><a href="<?php echo U('Article/setin');?>" class="item">导入信息</a></li>
                    <li><a href="<?php echo U('Article/search_info');?>" class="item">查找信息</a></li>
                </ul>
            </div>
            
        </div>
        <!-- /侧边栏 -->

        <!-- 内容部分-->   
        
    <div class="main-content">
        <div id="top-alert" class="fixed alert alert-error" style="display:none;">
            <button class="fixed close">X</button>
            <div class="alert-content">这是内容</div>
        </div>
        <div class="main">
            <div class="main-title">正在查看文章细节，提交可更新</div>
            <div class="data-table">
                <form action="#" method="post">
                <input name="mix_id" style="display:none" value="<?php echo ($mix_id); ?>"/>
                <label for="data-title" class="label">申请名称</label>
                <p><?php echo ($apply_detial["name"]); ?></p>
                <label for="data-title" class="label">所在学期</label>
                <p>第<?php echo ($apply_detial["item"]); ?>学期</p>
                <label for="data-title" class="label">分类</label>
                <p><?php echo ($info_type["info_type_name"]); ?></p>
                <label for="data-title" class="label">详细内容</label>
                <textarea id="container" name="content" class="data-content">
                    <?php echo ($apply_detial["content"]); ?>
                </textarea> 
                
                </form>
                
            </div>
            <div class="page"></div>
        </div>
        <div class="ldsn-cp">&copy;2015 LDSN, <a href="http://www.ldustu.com" style="display:inline;">鲁大学生网</a> 版权所有</div>
    </div>

        
<script type="text/javascript" src="/stu-manage/Public/ue/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/stu-manage/Public/ue/ueditor.all.js"></script>
    <script type="text/javascript">

    $('document').ready(function(){
        //导航高亮
        highlight_subNav('<?php echo U('Article/set');?>');
        var ue = UE.getEditor('container');
    });
    </script>
   
    </body>
</html>