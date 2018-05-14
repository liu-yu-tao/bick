<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"F:\PHP\xiangmu\bick\public/../application/index\view\index\index.html";i:1523321625;s:54:"F:\PHP\xiangmu\bick\application\index\view\layout.html";i:1523268929;}*/ ?>
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




    <div id="xh_wrapper">
       
<input type="hidden" id="hdUrlFocus" />
    <div class="xh_h_show">
        <div class="xh_h_show_in">
        <div id="zSlider">
            <div id="picshow">
    <div id="picshow_img">
        <ul>
            <?php foreach($ass as $add): ?>
<li style="display: list-item;">
    <a href="http://localhost/bick/public/index/article/index/id/<?php echo $add['id']; ?>" target="_blank" title="<?php echo $v['catename']; ?>">

        <img src="http://localhost/bick/public<?php echo $add['thumb']; ?>" alt="<?php echo $add['title']; ?>">
    </a>
</li>
            <?php endforeach; ?>
<!--<li style="display: list-item;"><a href="/life/394.html" target="_blank">-->
                <!--<img src="http://localhost/bick/public/static/index/images/354.jpg" alt="骑看世界：春节骑行海南岛 畅游冬日骑行天堂"></a></li>-->
<!--<li style="display: list-item;"><a href="/life/364.html" target="_blank">-->
                <!--<img src="http://localhost/bick/public/static/index/images/1-1402061A315209.jpg" alt="隆猫西班牙自行车之旅-Mallorca岛梦幻旅程（上）"></a></li>-->
<!--<li style="display: list-item;"><a href="/gear/rs/320.html" target="_blank">-->
                <!--<img src="http://localhost/bick/public/static/index/images/1-1402061A155W4.jpg" alt="#CES展上的新玩意# Casio 发布 STB-1000 智能手表 可同步骑行速"></a></li>-->



        </ul>
    </div>
</div>
<div id="select_btn">
    <ul>
        <li class="current"></li><li class=""></li><li class=""></li><li class=""></li>
    </ul>
</div>
            <div class="focus-bg-title"><div id="focus-left" class="arrow-left" onmouseover="IFocuse(this,true)" onmouseout="IFocuse(this,false)"></div>
            <div id="focus-center" class="focus-title">
            <div style="float:left;width:580px;padding-left:10px;font-size:18px;" id="focus-tl-s"></div>
            <div style="float:right;width:200px;"></div>
            </div>
            <div id="focus-right" class="arrow-right"></div></div>
            </div>
            <div id="picshow_right">
      <a href="/life/416.html" target="_blank">
    <img src="http://localhost/bick/public/static/index/images/1-140206160415Y6.jpg" alt="COACH再度携手王力宏 踩单车演" width="255px" height="420px"></a>
   
            <div id="picshow_right_cover" onclick="goanewurl()" style="cursor:pointer;position:absolute;top:495px;font-size:14px;width:213px;height:45px;line-height:45px;padding-left:42px;color:#ffffff;zoom:1;background-image:url(http://localhost/bick/public/static/index/images/focus-left-bg.png); background-repeat:no-repeat; background-color:#01A1ED;"></div>
            </div>
        </div>
    </div>
    <div id="xh_container">
    <a name="new"></a>
        <div id="xh_content" style="padding-right:10px;">
            <div class="xh_area_h_3">
                <div class="xh_area_title">
                    <a href="javascript:" class="t">New 最近更新</a> <span class="r">
                    <?php foreach($recAdd as $reci): ?>


                    <!--<a href='/lookbike/fixed-gear/'><?php echo $reci['catename']; ?></a>-->
<a href="" target="_blank"><?php echo $reci['catename']; ?></a>


                    <?php endforeach; ?>
                     </span>
                </div>
                <br>
               <?php foreach($art as $articl): ?>
                
    <div class="xh_post_h_3 ofh">
                            <div class="xh_265x265">
                                <a target="_blank" href="http://localhost/bick/public/index/article/index/id/<?php echo $articl['id']; ?>" title="<?php echo $articl['keywords']; ?>">
                                    <img src="http://localhost/bick/public<?php echo $articl['thumb']; ?>" alt="<?php echo $articl['title']; ?>" height="240" width="400"></a></div>
                            <div class="r ofh">
                                <h2 class="xh_post_h_3_title ofh">
                                    <a target="_blank" href="http://localhost/bick/public/index/article/index/id/<?php echo $articl['id']; ?>" target="_blank" title="<?php echo $articl['title']; ?>"><?php echo $articl['title']; ?></a>
                                </h2>
                                <span class="time"><?php echo date('Y-m-d H-i-s',$articl['time']); ?></span>
                                <div class="xh_post_h_3_entry ofh">
                                    <?php echo $articl['desc']; ?>
                                </div>
                                <div class="b">
                                     <span title="<?php echo $articl['zan']; ?>人赞"  aid="<?php echo $articl['id']; ?>" class="xh_love">
                                         <span class="textcontainer">
                                             <span><?php echo $articl['zan']; ?></span>
                                         </span>
                                         <span class="bartext"></span>
                                     </span>
                                    <span title="<?php echo $articl['click']; ?>人浏览" class="xh_views"><?php echo $articl['click']; ?></span>
                                </div>
                            </div>
                            <span class="cat"><a href="http://localhost/bick/public/index/article/index/id/<?php echo $articl['id']; ?>" target="_blank" title="查看 <?php echo $articl['catename']; ?> 中的全部文章"
                                rel="category tag"><?php echo $articl['catename']; ?></a></span>
                        </div>



<?php endforeach; ?>
  
            </div>
            <div id="pagination"><div class='wp-pagenavi'>
                <a href="/lookbike/" style='float:right;'>
                    <img src='http://localhost/bick/public/static/index/images/next01.png' id='next-page'>
                </a>
            </div>
            </div>
        </div>



        <!--右边栏-->

        <div id="xh_sidebar">

         <div class="widget">

<div style="background: url('http://localhost/bick/public/static/index/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>

<ul id="ulHot">

    <?php foreach($right as $rt): ?>



<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;">
    <a href="http://localhost/bick/public/index/article/index/id/<?php echo $rt['id']; ?>" target="_blank">
        <img src="http://localhost/bick/public<?php echo $rt['thumb']; ?>" width="83" title="<?php echo $rt['title']; ?>" />
    </a>
</div>
<div style="float:right;width:145px;height:52px; overflow:hidden;">
    <a href="http://localhost/bick/public/index/article/index/id/<?php echo $rt['id']; ?>" target="_blank" title="<?php echo $rt['title']; ?>"><?php echo $rt['title']; ?></a>
</div>
</li>


    <?php endforeach; ?>
</ul>
                </div>
            
            <div class="widget portrait">
    <div>
        <div class="textwidget">
            <a href="/tougao.html"><img src="http://localhost/bick/public/static/index/images/tg.jpg" alt="投稿"></a><br><br>
        </div>
    </div>
</div>
            <div class="widget links">
                <h3>
                    友情链接</h3>
                <ul>

                    <?php foreach($link as $li): ?>


                <li><a href='<?php echo $li['url']; ?>' target='_blank'><?php echo $li['title']; ?></a> </li>

                    <?php endforeach; ?>
                </ul>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <input type="hidden" id="hdBoxbor" />
    <script type="text/javascript">

        $("#next-page").hover(function () { $(this).attr("src", "./style/images/next02.png"); }, function () { $(this).attr("src", "http://localhost/bick/public/static/index/images/next01.png"); });
        $("#last-page").hover(function () { $(this).attr("src", "./style/images/last02.png"); }, function () { $(this).attr("src", "http://localhost/bick/public/static/index/images/last01.png"); });

        $(function () {
            var imgHoverSetTimeOut = null;
            $('.xh_265x265 img').hover(function () {
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

    </div>
<div class="sitemap">
    <h4>
        SITE MAP</h4>
    <div class="l">
        <ul id="menu-sitemap" class="menu">
            <?php foreach($cateArr as $value): if($value['pid']==0 and isset($value['children'])): ?>
<li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" href="http://localhost/bick/public/index/<?php if($value['type']==1): ?>artlist<?php elseif($value['type']==3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $v['id']; ?>"><?php echo $value['catename']; ?></a>
                <ul class="sub-menu">
                    <?php if(isset($value['children'])): foreach($value['children'] as $v): ?>

                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                        <a target="_blank" href="http://localhost/bick/public/index/<?php if($value['type']==1): ?>artlist<?php elseif($value['type']==3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $v['id']; ?>"><?php echo $v['catename']; ?></a></li>
                
                    <?php endforeach; endif; ?>
                </ul>
            </li>
<?php endif; endforeach; ?>
      </ul>
    </div>
    <div class="r">
        <h5>
            FOLLOW US</h5>
        
                        <img src="http://localhost/bick/public/static/index/images/weixin.jpg" alt="" title="扫描添加我们的公众微信" class="alignnone size-full wp-image-18966"
                            height="140" width="120"></a></div>
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
