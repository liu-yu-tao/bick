<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"F:\PHP\xiangmu\bick\public/../application/index\view\imglist\imglist.html";i:1522907953;s:54:"F:\PHP\xiangmu\bick\application\index\view\layout.html";i:1523268929;}*/ ?>
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




    <div id="wrapper">
           
    <style type="text/css">
        body
        {
            background-image: none;
            background-color: #dedede;
            color: #999999;
            font-family: "Microsoft Yahei" , "Helvetica Neue" ,Arial,Helvetica,sans-serif;
            font-size: 12px;
            height: 100%;
            text-align: left;
            width: 100%;
        }
        #xh_container
        {
            min-height: 1000px;
            background-color: #dedede;
            margin-top: 36px;
            width: 1098px;
        }
        #wrapper
        {
            background-color: #dedede;
        }
        #l-nav
        {
            background-image: url('/blog4http://localhost/bick/public/static/index/style/simg/look-bike-nav-bg.png');
            width: 188px;
            height: 360px;
            float: left;
        }
        #l-nav a
        {
            font-size: 14px;
            color: #000000;
        }
        #l-nav a:hover
        {
            font-size: 14px;
            color: #999999;
        }
        #l-nav div
        {
            padding-left: 20px;
        }
        #l-nav .l-nav-word
        {
            height: 40px;
            line-height: 40px;
        }
        #l-focus
        {
            float: right;
        }
        img
        {
            vertical-align: middle;
        }
        
        div
        {
            color: #666666;
        }
        #menu-item-196 a.a,#menu-item-198 a.a,#menu-item-197 a.a{color: #00BBEE;}
        #menu-item-198{ background-image:url('http://localhost/bick/public/static/index/images/up-arrow.png'); background-position: center bottom; background-repeat:no-repeat;} 
        .boxBor{
    position:absolute;left:0;top:0;display:none;z-index:9999; background-color:#ffffff;opacity: 0.3;filter:alpha(opacity=30)
}

    </style>
    <div id="xh_container">

        
<div class="xh_265x265x00">
    <div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/416.html"><img src="http://localhost/bick/public/static/index/images/1-1402061T015922.jpg" alt="COACH再度携手王力宏 踩单车演绎2013秋冬男士纽约风尚" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/416.html">COACH再度携手王力宏 踩单车演绎2013秋冬男士纽约风尚</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/392.html"><img src="http://localhost/bick/public/static/index/images/352.jpg" alt="骑看世界：三个女孩的欧洲骑行之路" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/392.html">骑看世界：三个女孩的欧洲骑行之路</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/395.html"><img src="http://localhost/bick/public/static/index/images/355.jpg" alt="骑看世界：探索地中海科西嘉岛" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/395.html">骑看世界：探索地中海科西嘉岛</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/361.html"><img src="http://localhost/bick/public/static/index/images/321.jpg" alt="骑行40000公里 英国胶片摄影师的骑游之旅" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/361.html">骑行40000公里 英国胶片摄影师的骑游之旅</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/394.html"><img src="http://localhost/bick/public/static/index/images/1-1402061F00W33.jpg" alt="骑看世界：春节骑行海南岛 畅游冬日骑行天堂" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/394.html">骑看世界：春节骑行海南岛 畅游冬日骑行天堂</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/364.html"><img src="http://localhost/bick/public/static/index/images/324.jpg" alt="隆猫西班牙自行车之旅-Mallorca岛梦幻旅程（上）" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/364.html">隆猫西班牙自行车之旅-Mallorca岛梦幻旅程（上）</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/393.html"><img src="http://localhost/bick/public/static/index/images/353.jpg" alt="复古骑行上海，听法国大梧桐诉说旧日故事" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/393.html">复古骑行上海，听法国大梧桐诉说旧日故事</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/389.html"><img src="http://localhost/bick/public/static/index/images/347.jpg" alt="执着的小辫与西藏的骑车旅行" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/389.html">执着的小辫与西藏的骑车旅行</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/390.html"><img src="http://localhost/bick/public/static/index/images/348.jpg" alt="大理洱海骑行 到挖色赶个大集" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/390.html">大理洱海骑行 到挖色赶个大集</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/391.html"><img src="http://localhost/bick/public/static/index/images/350.jpg" alt="KONA 29寸车骑游哥伦比亚" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/391.html">KONA 29寸车骑游哥伦比亚</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/386.html"><img src="http://localhost/bick/public/static/index/images/344.jpg" alt="Cyclist:赵勇权传授台湾环岛骑行摄影经验" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/386.html">Cyclist:赵勇权传授台湾环岛骑行摄影经验</a></div>
                    
                </div>
            </div><div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="/life/387.html"><img src="http://localhost/bick/public/static/index/images/346.jpg" alt="两个青海 骑行在3197米之上" height="188" width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;">2014年02月06日</div>
                    <div style="font-size: 14px;height:45px;">
                       <a target="_blank" href="/life/387.html">两个青海 骑行在3197米之上</a></div>
                    
                </div>
            </div>
 
           
        
    <div style="clear: both;">
    </div>
                <div id="pagination"><div class="wp-pagenavi">
                <span class="current">1</span><a class="page larger" href='list_2.html'>2</a><a class="page larger" href='list_3.html'>3</a><a class="page larger" href='list_2.html'>下一页</a><a class="page larger" href='list_3.html'>末页</a><span class="pages">共 3 页，36条</span>

                </div></div>    
</div>

        


    </div>
    <script type="text/javascript">
        $("#menu-item-198").find("a").addClass("a");
        $(".i-prev").hover(function () { $(this).addClass("i-prev-o"); }, function () { $(this).removeClass("i-prev-o"); });
        $(".i-next").hover(function () { $(this).addClass("i-next-o"); }, function () { $(this).removeClass("i-next-o"); });
        $(".more0").hover(function () { $(this).attr("src", "http://localhost/bick/public/static/index/style/simg/more-o.png"); }, function () { $(this).attr("src", "http://localhost/bick/public/static/index/style/simg/more.png"); });
    </script>
    <div class="boxBor"></div>
    
    <input type="hidden" id="hdBoxbor" />
    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>


    </div>
<script type="text/javascript">
        $(function () {
            var imgHoverSetTimeOut = null;
            $('.xh_265x265x00 img').hover(function () {
                var oPosition = $(this).offset();
                var oThis = $(this);
                $(".boxBor").css({
                    left: oPosition.left,
                    top: oPosition.top,
                    width: oThis.width(),
                    height: oThis.height()
                });
                $(".boxBor").show();
                var urlText = $(this).parent().attr("href");
                $("#hdBoxbor").val(urlText);
            }, function () {
                imgHoverSetTimeOut = setTimeout(function () { $(".boxBor").hide(); }, 500);
            });
            $(".boxBor").hover(
                function () {
                    clearTimeout(imgHoverSetTimeOut);
                }
                , function () {
                    $(".boxBor").hide();
                }
            );
        });
        function IBoxBor() {
            window.open($("#hdBoxbor").val());
        }
        function goanewurl() {
            window.open($("#hdUrlFocus").val());
        }
</script>

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
