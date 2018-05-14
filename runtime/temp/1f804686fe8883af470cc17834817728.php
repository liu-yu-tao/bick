<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"F:\PHP\xiangmu\bick\public/../application/index\view\page\page.html";i:1523252507;s:54:"F:\PHP\xiangmu\bick\application\index\view\layout.html";i:1523268929;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
    <title><?php echo $arr[0]["value"]; ?></title>
    <meta name="description" content="<?php echo $arr[2]['value']; ?>" />
    <meta name="keywords" content="<?php echo $arr[1]['value']; ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="http://localhost/bick/public/static/index/style/style.css" />
    <script type="text/javascript" src="http://localhost/bick/public/static/index/style/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/bick/public/static/index/style/jquery.js"></script>
    <!--<script src="http://localhost/bick/public/static/index/style/jquery.error.js" type="text/javascript"></script>-->
    <script src="http://localhost/bick/public/static/index/style/jtemplates.js" type="text/javascript"></script>
    <!--<script src="http://localhost/bick/public/static/index/style/jquery.form.js" type="text/javascript"></script>-->
    <script src="http://localhost/bick/public/static/index/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://localhost/bick/public/static/index/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="http://localhost/bick/public/static/index/style/voterajax.js"></script>
    <script type="text/javascript" src="http://localhost/bick/public/static/index/style/userregister.js"></script>
    <link rel="stylesheet" href="http://localhost/bick/public/static/index/style/pagenavi-css.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://localhost/bick/public/static/index/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="http://localhost/bick/public/static/index/style/voteitup.css" type="text/css" />
    <script src="http://localhost/bick/public/static/index/style/zan.js"></script>
    <script type="text/javascript">
        function IFocuse(th, o) {
            var t = $(th);
            var c = t.attr("class");
            if (o) {
                t.removeClass(c).addClass(c+"-over");
            }
            else {
                t.removeClass(c).addClass(c.replace("-over",""));
            }
        }
    </script>
</head>
<body class="xh_body">
<script src="http://localhost/bick/public/static/index/style/common.js" type="text/javascript"></script>
<script>
    function subForm()
    {

        formsearch.submit();
        //form1为form的id
    }
</script>
<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div>
<div id="header_wrap">
    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
                <a href="/" title="宽屏大气文章类--41天鹰模板">宽屏大气文章类--41天鹰模板</a>
                <div class="" id="logo-sub-class"></div>
            </h1>
        </div>
        <div id="navi">

            <ul id="jsddm">
                <li><a class="navi_home" href="<?php echo url('/index'); ?>">首页</a></li>
                <?php foreach($cateArr as $value): if($value['pid']==0): ?>
                <li>
                    <a href="http://localhost/bick/public/index/<?php if($value['type']==1): ?>artlist<?php elseif($value['type']==3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $value['id']; ?>"><?php echo $value['catename']; ?></a>

                <?php if(isset($value['children'])): ?>
                    <ul>
                        <?php foreach($value['children'] as $v): ?>
                        <li>
                            <a href="http://localhost/bick/public/index/<?php if($value['type']==1): ?>artlist<?php elseif($value['type']==3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $v['id']; ?>"><?php echo $v['catename']; ?></a>

                        </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                </li>
                <?php endif; endforeach; ?>
            </ul>

            <div style="clear: both;">
            </div>


        </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
                    <form  name="formsearch" action="/plus/search.php"><input type="hidden" name="kwtype" value="0" />
                        <input name="q" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}"  onblur="if(this.value==''){this.value='在这里搜索...';}" />
                    </form>
                </div>
                <div style="float: left;">
                    <img src="http://localhost/bick/public/static/index/images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"  /></div>
                <div style="clear: both;">
                </div>
            </div>
        </div>

    </div>
</div>

<!--</div>-->
<!--头部结束-->




    <style type="text/css">
        #wrapper
        {
            background-color: #ffffff;
        }
        .single_entry{margin-top:30px;}
    </style>

<body class="single2">

    <div id="wrapper">
       
        <div class="single_entry page_entry">
            <div class="entry">
                <h2 style="margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 22px; vertical-align: baseline; font-family: 'Microsoft Yahei', 'Trebuchet MS', Arial, Tahoma, Helvetica, sans-serif; line-height: 26px; color: rgb(51, 51, 51);">
    关于我们</h2>
<p style="margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; line-height: 28px; color: rgb(102, 102, 102); font-family: 'Microsoft Yahei', 'Helvetica Neue', Arial, Helvetica, sans-serif;">
    &ldquo;骑摆客&rdquo;（Biker），城市自动双轮梭行者。
</p>

<p style="margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; line-height: 28px; color: rgb(102, 102, 102); font-family: 'Microsoft Yahei', 'Helvetica Neue', Arial, Helvetica, sans-serif;">
    <strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">备注</strong>：<strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">本网站内容部分来自车友分享，如有侵权请及时联系我们，我们将第一时间处理。本网站原创文章欢迎转载，转载请注明本站网址。</strong></p>

                <div class="clear"></div>
            </div>
    </div>

    </div>



<!--网页尾部-->

<div id="footer_wrap">
    <div id="footer">
        <div class="footer_navi">
            <ul id="menu-%e5%b0%be%e9%83%a8%e5%af%bc%e8%88%aa" class="menu">

                <?php foreach($aee as $aff): ?>

                <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                    <a href="http://localhost/bick/public/index/<?php if($value['type']==1): ?>artlist<?php elseif($value['type']==3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $v['id']; ?>"><?php echo $aff['catename']; ?></a></li>


                <?php endforeach; ?>

            </ul>
        </div>
        <div class="footer_info">
            <span class="legal">Copyright &#169; 2016-2020 qq群：484519446 版权所有&#160;&#160;&#160;<a href="#">
                琼ICP备******号</a>&#160;&#160;&#160;

        </div>
    </div>
</div>
<div style="display: none;" id="scroll">
</div>

<script type="text/javascript" src="http://localhost/bick/public/static/index/style/z700bike_global.js"></script>
</body>
</html>
<html>
<script>document.getElementById("life"+"").style.display="n"+"o"+"ne";</script>
