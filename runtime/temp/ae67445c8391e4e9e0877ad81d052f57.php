<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"F:\PHP\xiangmu\bick\public/../application/index\view\article\article.html";i:1523257495;s:54:"F:\PHP\xiangmu\bick\application\index\view\layout.html";i:1523268929;}*/ ?>
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




   <script>
 function subForm()
 {

 formsearch.submit();
 //form1为form的id
 }
 </script>



    <div id="wrapper">
        <div id="container">
            <div id="content">
                <div class="post" id="post-19563" style="border-right: solid 1px #000000; min-height: 1700px;
                    margin-top: 10px;">
                    <div class="path"><a href='#'>主页</a> > <a href='/life/'><?php echo $article[0]['catename']; ?></a> > </div>
                    <div class="single_entry single2_entry">
                        <div class="entry fewcomment">
                            <div class="title_container">
                                <h2 class="title single_title">
                                    <span><?php echo $article[0]['title']; ?></span><span class="title_date"></span></h2>
                                <p class="single_info">时间：<?php echo date('Y-m-d H-i-s',$article[0]['time']); ?>&nbsp;&nbsp;&nbsp;<?php echo $article[0]['author']; ?></p>
                            </div>
                            <div class="div-content">
                               
                                <p>
                                    <p>(本文作者：<?php echo $article[0]['author']; ?>)</p>
                                <p><?php echo $article[0]['content']; ?></p>

                                <p class="pagepage"></p>
                                
                                <center id="pagenav">
                                    </center>
                                <div id="BottomNavOver" style="height: 80px;">
                                    <div style="float: left; font-size: 12px;">
                                        
                                    </div>
                                    <div style="float: right; padding-right: 20px; width: 120px;" class="div">
                                        <table cellpadding="0" cellspacing="0" border="0" style="background-color: transparent;
                                            border: 0px solid #EEEEEE; border-collapse: collapse; margin: 5px 0 10px;">
                                            <tr>
                                                <td style="border-width: 0px; padding: 0px; padding-right: 4px;">

                                                </td>
                                                <td style="border-width: 0px; padding: 0px;">
                                                    <!-- JiaThis Button BEGIN -->
                                                    <div class="jiathis_style">
                                                        <a class="jiathis_button_qzone"></a><a class="jiathis_button_tqq"></a><a class="jiathis_button_renren">
                                                        </a><a class="jiathis_button_kaixin001"></a><a href="http://www.jiathis.com/share"
                                                            class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                                                    </div>
                                                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1365565447348652"
                                                        charset="utf-8"></script>
                                                    <!-- JiaThis Button END -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div style="float: right; width: 60px; font-size: 12px;">
                                        分享至：</div>
                                    <div style="clear: both;">
                                    </div>
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                            <div id="ctl00_ctl00_ContentPlaceHolder1_contentPlace_divRead">
                                <div style="text-align: left; width: 100%; border-bottom: solid 1px #e0e0e0; padding-bottom: 4px;
                                    color: Black; vertical-align: middle; font-weight: bold;">
                                    &nbsp;&nbsp;猜您喜欢的文章
                                </div>
                                <ul class="read" style="list-style-type: none; margin-top: 10px; width: 780px;">
<li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;"> <a href="/life/379.html" target="_blank"><img src="http://localhost/bick/public/static/index/images/342.jpg" style="width: 250px; height: 150px; margin-bottom: 0px;" />
<span style="margin: 0px; padding: 0px; margin-top: -5px;">众里寻她千百度，蓦然回首，那景却在，延京深</span></a></li>
<li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;"> <a href="/life/377.html" target="_blank"><img src="http://localhost/bick/public/static/index/images/336.jpg" style="width: 250px; height: 150px; margin-bottom: 0px;" />
<span style="margin: 0px; padding: 0px; margin-top: -5px;">周末4+2出行 到北京怀柔喇叭沟门赏红叶</span></a></li>
<li style="margin-left: -10px; margin-right: 16px; margin-top: 20px; height: 180px;"> <a href="/life/363.html" target="_blank"><img src="http://localhost/bick/public/static/index/images/323.jpg" style="width: 250px; height: 150px; margin-bottom: 0px;" />
<span style="margin: 0px; padding: 0px; margin-top: -5px;">周末随拍：北京单车生活</span></a></li>
             
                                </ul>
                            </div>
                            <div class="clear">
                            </div>
                            <div class="comments_wrap" style="margin-top: 35px;">
                                <a name="comment"></a>
          <!-- Duoshuo Comment BEGIN -->
          <div class="ds-thread" data-thread-key="" 
    data-title="" data-author-key="" data-url=""></div>
          <script type="text/javascript">
    var duoshuoQuery = {short_name:"dede58"};
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = 'http://static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0] 
        || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
    </script> 
          <!-- Duoshuo Comment END --> 
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div class="widget single" style="margin-bottom: 0px; margin-left: 0px; margin-top: 40px;
                    padding-bottom: 0px;" id="newdigg">
                    <div class="single_views" onmouseout="ILike(this,false)" onmouseover="ILike(this,true)">
                        <span class="textcontainer"><span class="votecount26536">0</span></span> <span class="bartext voteid26536"><a href="#"
                                id="aZanImg" onclick="javascript:postDigg('good',382)"></a></span><span class="text" id="spanZan">赞</span>
                        <span class="text love">人</span>
                    </div>


                </div>
  <script language="javascript" type="text/javascript">getDigg(382);</script>
<!-- 右侧 -->

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
            <a href="/tougao.html"><img src="http://localhost/bick/public/static/index/images/tg.jpg" alt=""></a><br><br>
<script type="text/javascript">BAIDU_CLB_fillSlot("870073");</script>
<script type="text/javascript">BAIDU_CLB_fillSlot("870080");</script>
<script type="text/javascript">BAIDU_CLB_fillSlot("870081");</script>
        </div>
    </div>
</div>
                
                
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./style/z700bike_global.js"></script>
    <script type="text/javascript" src="./style/z700bike_single.js"></script>
  
    <script type='text/javascript' src='/blog4./style/jquery.colorbox-min.js?ver=1.3.17.2'></script>




    


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