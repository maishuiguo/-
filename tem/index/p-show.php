<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/1
 * Time: 17:43
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../static/css/common.css">
    <link rel="stylesheet" href="../../static/css/p-show.css">
    <script src="../../static/js/common.js"></script>
    <script src="../../static/js/common.js"></script>
</head>
<body>
<div class="top">
    <p style="font-size: 15px">商品详情</p>
    <p style="font-size: 12px">SHANGPINXIANGQING</p>
    <a href="p-list.php"> <img class="hou" src="../../static/img/p-hou.png"></a>
</div>
<div style="width: 100%;height: 0.97rem"></div>
<div id="wrapper">
    <div id="scroller">
        <ul>
            <li>
                <div class="banner" style="background-image: url('../../static/img/p-b1.png');background-size: cover">
                    <img src="../../static/img/p-tiao.png">
                    <p class="one">细腻多汁 甜度高于红心橙</p>
                    <div class="jianjie">
                        <p>商品简介：甜而不腻，其水分
                            更多，口感好清淡中透着香，越吃越香。</p>
                    </div>
                </div>
            </li>
            <li>

                <div class="xq">
                    <img src="../../static/img/p-xq.png">
                    <p>红心橙</p>
                    <p>HONGXiNCHENG</p>
                    <p>月销量：362 邮费包邮 各地区均有货--送至山西太原</p>
                </div>   </li>
            <li>
                <div class="pinglun" style="background-image: url('../../static/img/p-xqbg.png');background-size: cover">
                    <ul>
                        <li>
                            <div class="tx" style="background-image: url('../../static/img/p-touxiang.png');background-size: cover"></div>
                            <div class="list">
                                <b>会飞的猪</b>
                                <b>20.16.01.12</b><br>
                                <span>很新鲜，包装绝对到位，吃完还会来。</span>
                            </div>
                        </li>
                        <li>
                            <div class="tx" style="background-image: url('../../static/img/p-touxiang.png');background-size: cover"></div>
                            <div class="list">
                                <b>会飞的猪</b>
                                <b>20.16.01.12</b><br>
                                <span>很新鲜，包装绝对到位，吃完还会来。</span>
                            </div>
                        </li>
                        <li>
                            <div class="tx" style="background-image: url('../../static/img/p-touxiang.png');background-size: cover"></div>
                            <div class="list">
                                <b>会飞的猪</b>
                                <b>20.16.01.12</b><br>
                                <span>很新鲜，包装绝对到位，吃完还会来。</span>
                            </div>
                        </li>
                        <li>
                            <div class="tx" style="background-image: url('../../static/img/p-touxiang.png');background-size: cover"></div>
                            <div class="list">
                                <b>会飞的猪</b>
                                <b>20.16.01.12</b><br>
                                <span>很新鲜，包装绝对到位，吃完还会来。</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
                <li><div class="cnxh">
                    <img src="../../static/img/p-cnxh.png">
                    </div></li>
               <li><div class="tuijian">
                    <div class="list" style="background-image: url('../../static/img/p-tuijian.png');background-size: cover">
                        <div class="zhezhao">
                            <p>红草莓</p>
                            <p>HONGCAOMEI</p>
                        </div>
                    </div>
                    <div class="list" style="background-image: url('../../static/img/p-tuijian.png');background-size: cover">
                        <div class="zhezhao">
                            <p>红草莓</p>
                            <p>HONGCAOMEI</p>
                        </div>
                    </div>
                    <div class="list" style="background-image: url('../../static/img/p-tuijian.png');background-size: cover">
                        <div class="zhezhao">
                            <p>红草莓</p>
                            <p>HONGCAOMEI</p>
                        </div>
                    </div>
                    <div class="hong"></div>
                    <div class="bottom">
                        <div class="box">
                            <img src="../../static/img/p-jian.png">
                            <b>0</b>
                            <img src="../../static/img/p-jia.png">
                        </div>
                        <div class="box">
                            <button class="one">
                                立即购买
                            </button>
                            <button class="two">
                                加入购物车
                            </button>
                        </div>
                    </div>
                    <div class="list1">
                        <span><b>35.2</b> RMB</span>
                        <span style="float: right;text-decoration: line-through"><b style="color:#000;">50.2</b> RMB</span>
                    </div>
                    <div class="list1">
                        <span><b>35.2</b> RMB</span>
                        <span style="float: right;text-decoration: line-through"><b style="color:#000;">50.2</b> RMB</span>
                    </div>
                    <div class="list1">
                        <span><b>35.2</b> RMB</span>
                        <span style="float: right;text-decoration: line-through"><b style="color:#000;">50.2</b> RMB</span>
                    </div>
                    <div class="list2">
                        了解详情
                    </div>
                    <div class="list2">
                        了解详情
                    </div>
                    <div class="list2">
                        了解详情
                    </div>
                </div></li>

        </ul>

    </div>
</div>
</body>
</html>

<script type="text/javascript">

    var myScroll;

    function loaded () {
        myScroll = new IScroll('#wrapper', { keyBindings: true });
    }

    document.addEventListener('touchmove', function (e) { e.preventDefault(); }, isPassive() ? {
        capture: false,
        passive: false
    } : false);

</script>