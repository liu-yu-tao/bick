/**
 * Created by liuyutao on 2018/4/9.
 */

$(function () {
   $(".xh_love").click(function () {
       var aid=$(this).attr("aid");
       var dom=$(this).children("span").children("span");
       $.ajax({
           type:"get",
           url:"http://localhost/bick/public/index/article/zan",
           date:{"aid":aid},  //文章id
           success:function (data) {
               dom.text(data);
           }
       })
   }) 
});





