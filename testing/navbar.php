<link rel="stylesheet" type="text/css" href="/csie/css/bootstrap-4-navbar.min.css" />
<script src="/csie/js/bootstrap-4-navbar.min.js"></script>
<nav id="nav-banner" class="navbar navbar-expand-lg navbar-light bg-light " style="box-shadow: 0 1px 2px 0 rgba(60,64,67,.3),0 2px 6px 2px rgba(60,64,67,.15);">

    <div class="" style="">
        <div>
            <div class="navbar-brand navbar-nav" style="display:flex;margin:0px;justify-content: space-between;">
                <a class="navbar-brand navbar-nav rwd_big" href="https://www.ncue.edu.tw" style="white-space:normal;margin:0px">
                    <div style="display: flex;flex-direction: column;">
                        <div style="flex-direction: row;display: flex;margin-top: auto;">
                            <img style="margin:auto 5px;height:60px" src="/csie/resources/images/ncue-csie-logo.png">
                            <div style="margin:auto 5px;">

                                <div style="letter-spacing:3.5px;font-family: &quot;標楷體&quot;;">國立彰化師範大學</div>
                                <div style="font-size:0.8rem;color: #28756b;">National Changhua University of Education</div>

                            </div>
                        </div>
                    </div>
                </a>
                <a class="navbar-brand navbar-nav" href="/csie/index.php" style="white-space:normal;margin:0px">
                    <div style="flex-direction: row;display: flex;">
                        <img class="rwd_small" style="margin:auto 5px;height:60px" src="/csie/resources/images/ncue-logo.png">
                        <div style="">
                            <div style="letter-spacing: 1.5px;font-size: 2rem;color: #24366e;font-weight: bold;" id="navbar_title">資訊工程學系暨研究所、物聯網碩士班</div>
                            <div style="font-size:0.8rem;color: #28756b;">Department of Computer Science and Information Engineering</div>
                        </div>
                    </div>
                </a>

                <form id="form-search" class="form-inline rwd_big" action="/csie/search.php" method="post" style="margin:5px 0">
                    <input class="form-control mr-sm-2" type="search" placeholder="全站搜尋" aria-label="Search" style="width:auto" id="key" name="key">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit" style="margin-left:2px; background-color:rgba(77, 144, 254, 1);color:#fff">Search</button>
                </form>
                <button class="navbar-toggler" style="margin-right:10px;border: 1px solid rgba(0, 0, 0, 0.4);height:50px;margin-top:auto;margin-bottom:auto" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

        </div>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto" id="nav-items">
                <li class="nav-item " id="nav-item-home" style="margin:auto 0"><a href="/csie/index.php" class="nav-link">首頁</a></li>
                <li class="nav-item " id="nav-item-news" style="margin:auto 0"><a href="/csie/news.php" class="nav-link">最新消息</a></li>
                <li class="nav-item dropdown" id="nav-item-honor" style="margin:auto 0">
                    <a class="nav-link dropdown-toggle" href="/csie/honor.php" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        榮譽榜
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/csie/honor.php?tag=0">教師榮譽</a>
                        <a class="dropdown-item" href="/csie/honor.php?tag=1">大學部榮譽</a>
                        <a class="dropdown-item" href="/csie/honor.php?tag=2">研究所榮譽</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/csie/honor.php">全部</a>
                    </div>
                </li>
                <li class="nav-item dropdown" id="nav-item-intro" style="margin:auto 0">
                    <a class="nav-link dropdown-toggle" href="/csie/introduction.php" id="intro" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        系所介紹
                    </a>
                    <div class="dropdown-menu" aria-labelledby="intro">
                        <a class="dropdown-item" href="/csie/introduction.php?tab=introduction1">系所沿革</a>
                        <a class="dropdown-item" href="/csie/introduction.php?tab=introduction2">教育目標</a>
                        <a class="dropdown-item" href="/csie/introduction.php?tab=introduction3">核心能力</a>
                        <a class="dropdown-item" href="/csie/introduction.php?tab=introduction4">教學資源</a>
                        <a class="dropdown-item" href="/csie/introduction.php?tab=introduction5">交通位置</a>
                        <a class="dropdown-item" href="/csie/introduction.php?tab=introduction7">系所法規</a>
                        <a class="dropdown-item" href="/csie/introduction.php?tab=introduction6">相關連結</a>
                    </div>
                </li>
                <li class="nav-item" id="nav-item-teacher" style="margin:auto 0"><a href="/csie/teacher.php" class="nav-link" id="nav-item-teacher">師資陣容</a></li>
                <li class="nav-item dropdown" id="nav-item-research" style="margin:auto 0">
                    <a class="nav-link dropdown-toggle" href="/csie/research.php" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        研究概況
                    </a>
                    <div class="dropdown-menu" aria-labelledby="">
                        <a class="dropdown-item" href="/csie/research.php?tab=research-0">研究領域及重點</a>
                        <a class="dropdown-item" href="/csie/research.php?tab=research-1">研究計畫</a>
                        <a class="dropdown-item" href="/csie/research.php?tab=research-2">期刊論文</a>
                        <a class="dropdown-item" href="/csie/research.php?tab=research-3">研討會論文</a>
                    </div>
                </li>
                <li class="nav-item dropdown" id="nav-item-course" style="margin:auto 0">
                    <a class="nav-link dropdown-toggle" href="/csie/course.php" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        課程資訊
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item dropdown-toggle" href="/csie/course.php?tab=undergraduate">學士班</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/csie/course.php?tab=undergraduate&card=intro">簡介</a></li>
                                <li><a class="dropdown-item" href="/csie/course.php?tab=undergraduate&card=map">課程地圖</a></li>
                                <li><a class="dropdown-item" href="/csie/course.php?tab=undergraduate&card=struct">課程架構</a></li>
                                <li><a class="dropdown-item" href="/csie/course.php?tab=undergraduate&card=condition">畢業條件</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item dropdown-toggle" href="/csie/course.php?tab=csiegraduate">資工碩班</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/csie/course.php?tab=csiegraduate&card=intro">簡介</a></li>
                                <li><a class="dropdown-item" href="/csie/course.php?tab=csiegraduate&card=struct">課程架構</a></li>
                                <li><a class="dropdown-item" href="/csie/course.php?tab=csiegraduate&card=condition">畢業條件</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item dropdown-toggle" href="/csie/course.php?tab=iotgraduate">物聯網碩班</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/csie/course.php?tab=iotgraduate&card=intro">簡介</a></li>
                                <li><a class="dropdown-item" href="/csie/course.php?tab=iotgraduate&card=struct">課程架構</a></li>
                                <li><a class="dropdown-item" href="/csie/course.php?tab=iotgraduate&card=condition">畢業條件</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item dropdown-toggle" href="/csie/course.php?tab=dualdegree">雙聯學制</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/csie/course.php?tab=dualdegree&card=intro">簡介</a></li>
                                <li><a class="dropdown-item" href="/csie/course.php?tab=dualdegree&card=download">檔案下載</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="nav-item dropdown" id="nav-item-enrollment" style="margin:auto 0">
                    <a class="nav-link dropdown-toggle" href="/csie/enrollment.php" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        招生入學
                    </a>
                    <div class="dropdown-menu" aria-labelledby="">
                        <a class="dropdown-item" href="/csie/enrollment.php?tab=undergraduate">學士班</a>
                        <a class="dropdown-item" href="/csie/enrollment.php?tab=csiegraduate">資工碩班</a>
                        <a class="dropdown-item" href="/csie/enrollment.php?tab=iotgraduate">物聯網碩班</a>
                        <a class="dropdown-item" href="/csie/enrollment.php?tab=fiveyear">五年一貫</a>
                    </div>
                </li>
                <li class="nav-item dropdown" id="nav-item-download" style="margin:auto 0">
                    <a class="nav-link dropdown-toggle" href="/csie/download.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        檔案下載
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item dropdown-toggle" href="/csie/download.php?tab=student">學生用資料下載</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/csie/download.php?tab=student&status=undergraduate">學士班文件</a></li>
                                <li><a class="dropdown-item" href="/csie/download.php?tab=student&status=graduate">碩士班文件</a></li>
                                <li><a class="dropdown-item" href="/csie/download.php?tab=student&status=dualdegree">雙聯學制</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="/csie/download.php?tab=teacher&status=affair">師長用資料下載</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown" id="nav-item-activity" style="margin:auto 0">
                    <a class="nav-link dropdown-toggle" href="/csie/activity.php" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">活動交流</a>
                    <div class="dropdown-menu" aria-labelledby="">
                        <a class="dropdown-item" href="/csie/activity.php?tab=communication">國際交流</a>
                        <a class="dropdown-item" href="/csie/activity.php?tab=cooperate">產學合作</a>
                        <a class="dropdown-item" href="/csie/activity.php?tab=academic">學術活動</a>
                        <a class="dropdown-item" href="/csie/activity.php?tab=other">其他</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/csie/activity.php?tab=all">全部</a>
                    </div>
                </li>
                <li class="nav-item" id="nav-item-map" style="margin:auto 0"><a href="/csie/other/focus.html" class="nav-link">畢業出路</a></li>
                <li class="nav-item" id="nav-item-map" style="margin:auto 0"><a href="/csie/map.php" class="nav-link">網站地圖</a></li>
                <li class="nav-item" id="nav-item-management" style="margin:auto 0"><a href="/csie/management.php" class="nav-link">網站管理</a></li>
            </ul>
            <a href="/csie/index_En.php" class="btn btn-outline-success btn-sm" style="">English</a>
            <form id="form-search" class="form-inline rwd_small" action="/csie/search.php" method="post" style="margin:5px 0">
                <input class="form-control mr-sm-2" type="search" placeholder="全站搜尋" aria-label="Search" style="width:auto" id="key" name="key">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit" style="margin-left:2px; background-color:rgba(77, 144, 254, 1);color:#fff">Search</button>
            </form>

        </div>
    </div>
</nav>
<script>
    $("#form-search").submit(function(e) {
        if ($("#key").val() === "")
            e.preventDefault();
    });
</script>