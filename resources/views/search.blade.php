<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="referrer" content="no-referrer"/>
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="icon/cropped-con999-270x270.png"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
    <title>Kubernetes Yaml 搜索</title>
    <link href="style.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed"
          href="http://docs.kubernetes.org.cn/wp-content/uploads/2018/07/cropped-con999-180x180.png"/>
    <link rel="stylesheet" href="highlight/styles/stackoverflow-dark.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="font.js"></script>
    <script src="sou.js"></script>
    <script src="highlight/highlight.min.js"></script>
    <style>
        .con .sou #word {
            border-top: 6px solid #f1f1f1;
            border-bottom: 6px solid #f1f1f1;
        }

        .con {
            top: -250px;
        }

        .list.closed {
            right: -580px;
        }

        .list {
            width: 537px;
        }

        #menu.on {
            right: 580px;
        }

        .hljs {
            border-radius: 6px;
        }

        .sou li {
            border-bottom: 1px solid white;
            padding: 4px 0;
            cursor: pointer
        }

        .sou li:last-child {
            border-bottom: 0;
        }
    </style>
</head>

<body>

<div id="menu"><i></i></div>
<div class="list closed">
    <div style="margin-top: 5px">
        <pre id="pre-block">
            <code>not find code</code>
        </pre>
    </div>
    <ul>
        <!------>
        <li class="title">
            <svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-shipin"></use>
            </svg>
            视频媒体
        </li>
        <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-youtube"></use>
                </svg>
                Youtube</a></li>
        <li><a rel="nofollow" href="https://v.qq.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-tengxunshipin"></use>
                </svg>
                腾讯视频</a></li>
        <li><a rel="nofollow" href="https://www.youku.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-youku"></use>
                </svg>
                优酷</a></li>
        <li><a rel="nofollow" href="https://www.iqiyi.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-aiqiyi"></use>
                </svg>
                爱奇艺</a></li>
        <li><a rel="nofollow" href="http://www.acfun.cn/index.html" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-acfun"></use>
                </svg>
                ACFUN</a></li>
        <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-bili"></use>
                </svg>
                哔哩哔哩</a></li>


        <li class="title">
            <svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-sousuo"></use>
            </svg>
            搜索引擎
        </li>
        <li><a rel="nofollow" href="https://www.google.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-google"></use>
                </svg>
                Google</a></li>

        <li><a rel="nofollow" href="https:/m.baidu.com/?pu=sz%401321_480&wpo=btmfast" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-icon_baidulogo"></use>
                </svg>
                百度</a></li>
        <li><a rel="nofollow" href="https://hk.yahoo.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-yahoo"></use>
                </svg>
                雅虎</a></li>
        <li><a rel="nofollow" href="https://www.sogou.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-sougou"></use>
                </svg>
                搜狗</a></li>

        <!------>

        <li class="title">
            <svg class="icon" aria-hidden="true">
                <use xlink:href="#icon-kongzhitai"></use>
            </svg>
            开发
        </li>
        <li><a rel="nofollow" href="http://www.w3school.com.cn/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-h5"></use>
                </svg>
                W3school</a></li>
        <li><a rel="nofollow" href="https://github.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-github"></use>
                </svg>
                Github</a></li>
        <li><a rel="nofollow" href="https://codepen.io/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-codepen"></use>
                </svg>
                Codepen</a></li>
        <li><a rel="nofollow" href="https://www.52pojie.cn/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-theater-masks"></use>
                </svg>
                吾爱破解</a></li>
        <li><a rel="nofollow" href="https://segmentfault.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-msg"></use>
                </svg>
                SF思否</a></li>
        <li><a rel="nofollow" href="https://cdnjs.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-cdnjs"></use>
                </svg>
                CdnJs</a></li>
        <li><a rel="nofollow" href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-font-awesome"></use>
                </svg>
                Font A.</a></li>
        <li><a rel="nofollow" href="https://msdn.itellyou.cn/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-windows"></use>
                </svg>
                MSDN下载</a></li>
        <li><a rel="nofollow" href="https://dash.cloudflare.com/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-cloudflare"></use>
                </svg>
                C. flare</a></li>
        <li><a rel="nofollow" href="https://www.swiper.com.cn/" target="_blank">
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-S"></use>
                </svg>
                Swiper</a></li>
    </ul>
</div>

<div id="content">
    <div class="con">
        <div class="shlogo" style="background: url(icon/logo3.svg) no-repeat center/cover;"></div>
        <div class="sou">
            <form action="" method="post" target="_self">
                <div class="lg" style="background: url(icon/cropped-con999-270x270.png) no-repeat center/cover;"></div>
                <input class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN"
                       autocomplete="off">
                <button type=button id="button-submit">
                    <svg class="icon" style=" width: 21px; height: 21px; opacity: 0.5;" aria-hidden="true">
                        <use xlink:href="#icon-sousuo"></use>
                    </svg>
                </button>
            </form>
            <div id="word"></div>
        </div>
    </div>
</div>
<script>
    hljs.initHighlightingOnLoad();
</script>
</body>
</html>
