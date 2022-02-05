<?php
/**
 * 诺天的个人主页PHP版本
 * Author: 诺天 <s235784@gmail.com>
 * Date  : 2021/9/9
 * Time  : 20:47
 */

?>


<!--
     _   _             _______  _
    | \ | |           |__   __|(_)
    |  \| | _   _   ___  | |    _   __ _  _ __
    | . ` || | | | / _ \ | |   | | / _` || '_ \
    | |\  || |_| || (_) || |   | || (_| || | | |
    |_| \_| \__,_| \___/ |_|   |_| \__,_||_| |_|

    Author: NuoTian (https://github.com/s235784)

-->

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>诺天 NuoTian - 个人主页</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="NuoTian,诺天,HomePage,个人主页,Furry,兽圈"/>
    <meta name="Description" content="诺天的个人主页"/>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="fullPage.css">
    <link href="https://cafe.furcode.cn/favicon_48.ico" type="image/x-icon" rel="icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://res.furcode.cn/materialize/0.97.8/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script type="text/javascript" src="https://res.furcode.cn/jquery/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://res.furcode.cn/materialize/0.97.8/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://res.furcode.cn/jquery/backstretch/2.1.18/filter/backstretch.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149898603-3"></script>
    <!--    <script>-->
    <!--        window.dataLayer = window.dataLayer || [];-->
    <!--        function gtag(){dataLayer.push(arguments);}-->
    <!--        gtag('js', new Date());-->
    <!--        gtag('config', 'UA-149898603-3');-->
    <!--    </script>-->
</head>

<body>
<main>
    <div id="section-div">
        <div class="section" style="padding: 0; position:relative;">
            <div class="content-div">
                <div class="center">
                    <img src="https://cafe.furcode.cn/nuotian/avatar.jpg" width="144px" class="circle responsive-img" alt="avatar">
                </div>
                <div>
                    <h3 class="center-align" style="margin-top: 0; font-size: 28px">
                        <span class="white-text">诺天 NuoTian</span>
                    </h3>
                    <h5 class="center-align" style="font-size: 18px">
                        <span class="white-text">对不起，您的请求发送失败请不要重试！QVQ</span>
                    </h5>
                </div>
                <br>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col s12 m4 center">
                        <a class="waves-effect waves-light btn works-btn" href="https://tohboe.furrycafe.com/">TohBoe</a>
                    </div>
                    <div class="col s12 m4 center">
                        <a class="waves-effect waves-light btn works-btn" href="https://www.furrycafe.com/">FurryCafe</a>
                    </div>
                    <div class="col s12 m4 center">
                        <a class="waves-effect waves-light btn works-btn" href="https://www.mium.studio/ExaTool/">ExaTool</a>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="center" style="margin-top: 10px; font-size: 18px;">
                    <a class="white-text" href="https://space.bilibili.com/11517485">BiliBili</a>
                    <a class="white-text" href="mailto:2357846676@qq.com">Email</a>
                    <a class="white-text" href="https://github.com/s235784">GitHub</a>
                    <a class="white-text" href="http://sighttp.qq.com/authd?IDKEY=dc5227f0717d58348c62a3958d17907b897f311d78013513">QQ</a>
                    <a class="white-text" href="https://twitter.com/NuoTian_QVQ">Twitter</a>
                </div>
            </div>

            <div class="footer-div">
                <footer>
                    <div class="white-text center-align background-div" style="margin-bottom: 0;">Background By 猫舌かぐ</div>
                    <div class="white-text center-align copyright-div">Copyright © 2021 NuoTian</div>
                </footer>
            </div>

            <div class="float-opener-div">
                <div class="float-opener-div-child">
                    <p class="white-text">下面还有好康的</p>
                    <div class="float-opener-div-child-second">
                        <i class="material-icons large white-text">expand_more</i>
                    </div>
                </div>

            </div>
        </div>

        <div class="section" style="padding: 0;">
            <div class="container row" style="height: 100%">
                <div class="">

                </div>
            </div>
        </div>
    </div>
</main>

</body>

<script src="fullPage.min.js"></script>
<script>
    const images = {
        url: [
            "https://cafe.furcode.cn/nuotian/background-猫舌かぐ.png",
            "https://cafe.furcode.cn/nuotian/background-うまに.jpg",
            "https://cafe.furcode.cn/nuotian/background-外.jpg",
            "https://cafe.furcode.cn/nuotian/background-うまに2.png"
        ],
        painter: [
            "猫舌かぐ",
            "うまに",
            "外",
            "うまに"
        ],
        link: [
            "https://twitter.com/nekojitaaaaaaaa",
            "https://twitter.com/umani",
            "https://twitter.com/totatetta_",
            "https://twitter.com/umani"
        ]
    };

    $(window).on("backstretch.before", function (e, instance, index) {
        const background_info = "Background By <a class='white-text' target='_blank' href='"+ images.link[index] +"'>"+ images.painter[index] +"</a>";
        $(".background-div").html(background_info);
    });
    $.backstretch(images.url, {blurRadius: 3, duration:8000, fade:1000,});
    const div_backstretch = $('.backstretch');
    div_backstretch.css("transform", "scale(1.01)");
    div_backstretch.css("pointer-events", "none");

    const year = new Date().getFullYear();
    $(".copyright-div").html("Copyright © " + year + " NuoTian");

    let full_page;
    $(function() {
        setWaterFallHeight();
        waterFall();
        full_page = $('#section-div').fullpage({
            scrollingSpeed: 1000,
            onLeave: function (index, nextIndex, direction) {
                if (direction === "up") {
                    let i = 0;
                    setTimeout(function x(){
                        const percentage = i / 100;
                        div_backstretch.css("opacity", percentage);
                        i++;
                        if(i<=100) setTimeout(x,5);
                    },5);
                } else {
                    let i = 0;
                    setTimeout(function x(){
                        const percentage = 1 - (i / 100);
                        div_backstretch.css("opacity", percentage);
                        i++;
                        if(i<=100) setTimeout(x,5);
                    },5);
                }
            }
        });
    });

    const gap = 20;

    function setWaterFallHeight() {
        const pageWidth = $('.card-body').width();
        const eachItemWidth = (pageWidth - (gap * 3)) / 3;
        let img_count = 0;
        <?php echo "img_count = $img_position;";?>
        for (let count = 0; count <= img_count; count++) {
            $('.waterfall-img-div:eq('+count+')').css('height', (eachItemWidth / arrWidth[count]) * arrHeight[count])
        }
    }

    function waterFall() {
        //瀑布流实现
        const pageWidth = $('.card-body').width();
        const eachItemWidth = (pageWidth - (gap * 3)) / 3;
        const items = document.getElementsByClassName('waterfall-item');
        //自适配宽度
        const waterfallBox = $('.waterfall-box');
        $('.waterfall-item').css('width', eachItemWidth);
        $('.waterfall-img').css('width', eachItemWidth);
        //首先确定列数 = 页面的宽度 / 图片的宽度
        const itemWidth = eachItemWidth;
        const columns = parseInt(pageWidth / (itemWidth + gap) + "");
        const arr = [];//定义一个数组，用来存储元素的高度
        for(let i = 0;i < items.length; i++){
            if(i < columns) {
                //满足这个条件则说明在第一行，文章里面有提到
                items[i].style.top = 0;
                items[i].style.left = (gap / 2) + ((itemWidth + gap) * i) + 'px';
                arr.push(items[i].offsetHeight);
            }else {
                //其他行，先找出最小高度列，和索引
                //假设最小高度是第一个元素
                let minHeight = arr[0];
                let index = 0;
                for(let j = 0; j < arr.length; j++){//找出最小高度
                    if(minHeight > arr[j]){
                        minHeight = arr[j];
                        index = j;
                    }
                }
                //设置下一行的第一个盒子的位置
                //top值就是最小列的高度+gap
                items[i].style.top = arr[index] + gap + 'px';
                items[i].style.left = items[index].offsetLeft + 'px';

                //修改最小列的高度
                //最小列的高度 = 当前自己的高度 + 拼接过来的高度 + 间隙的高度
                arr[index] = arr[index] + items[i].offsetHeight + gap;
            }
        }
        //找出最大高度
        let maxHeight = arr[0];
        for(let j = 0; j < arr.length; j++) {
            if(maxHeight < arr[j]) {
                maxHeight = arr[j];
            }
        }
        //设置父元素的高度
        waterfallBox.css('height', maxHeight + 'px');
    }

    //当页面尺寸发生变化时，触发函数，实现响应式
    window.onresize = function () {
        setWaterFallHeight();
        waterFall();
    };

    // clientWidth 处理兼容性
    function getClient() {
        return {
            width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
            height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight
        }
    }
    // scrollTop兼容性处理
    function getScrollTop() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }

</script>
</html>
