<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>雅捷官网</title>
        <link rel="shortcut icon" href="./public/image/logoTitle.png"> 
        <link href="./public/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="./public/css/homePage.css" media="all" />
        <link rel="stylesheet" type="text/css" href="./public/css/productionIntruduction.css" media="all" />

        <style>
            article,aside,dialog,footer,header,section,footer,nav,figure,menu{display:block}
            .accordion-group {
                border-radius:0;
                border: none;
            }
            .navbar{margin-bottom:0}
            .navWidth{
                width:13%;

            }
            .navFontColor{
                color:black !important;
            }
            .navFontColor:hover{
                font-weight: bold !important;
            }

            .navbar .nav > li a {
                color: white;
                text-shadow: none;

            }
            
            .navbar .nav > li  a:focus{
                color:white;
                font-weight: bold;
            }
            .navbar .nav > li a:hover{
                color:white;
                font-weight: bold;
            }
            .collapse { position: static}
            .linerColor{
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient (GradientType=0, startColorstr=#16425a, endColorstr=#63746b)";
                background:  -webkit-linear-gradient(top,#16425a,#63746b);
                background: -moz-linear-gradient( top,#16425a,#63746b);
                background: -ms-linear-gradient( top,#16425a,#63746b);
            }
            /*            topMod的css*/
            .slidePosition{margin-left:-2%;}
            .topMod { overflow:hidden}
            .topMod li { list-style: none; }
            .topMod ul li {height: 400px; overflow: hidden; }
            .topMod .dots li {
                display: inline-block;
                width: 5px;
                height: 5px;
                margin: 0px 4px;
                text-indent: -999em;
                border: 2px solid white;
                cursor: pointer;
                opacity: 0.4;
                border-radius: 6px 6px 6px 6px;
                transition: background 0.5s ease 0s, opacity 0.5s ease 0s;
            }
            .topMod .dots li.active {
                background: none repeat scroll 0% 0% white;
                opacity: 1;
            }
            .topMod .dots {
                position: absolute;
                left: 955px;
                top: 370px;
                bottom: 20px;
                z-index: 3;
            }
            .topModFirstBotton{
                position:relative;
                z-index: 15;
                cursor:pointer; 
                width:127px;
                height: 123px;
            }
            .turnButton{
                position: absolute;
                /*                left: 1050px;*/
                top: 360px;
                z-index: 3;
            }
            /*--------------------*/
            .redPoint{
                background-color: red;
                width: 15px;
                height: 15px;
                border-radius:  6px 6px 6px 6px;
                position:relative;

                left: 150px;
                top:-600px;
                opacity: 0;
            }
            #teamMainDivs >div:hover{
                cursor: pointer;
            }
            .accordionHeight{
                background-color: #fff;
            }
            .navInnerBlock{
                position: absolute;
                height: 100%;
                background-color: #fff;
                opacity: 0; 
                cursor: pointer;
            }
            .navInnerBlock:hover{
                color:white;
                font-weight: bold;
            }
        </style>
    </head>
    <body data-spy="scroll" data-offset="30">
        <!-- 页面弹窗 -->
        <div id="back" style="width:100%;border-bottom:solid #8BD4F5 5px;display: none;  background-color: #1C465C; position:  fixed; z-index: 3000; overflow-y:scroll">
            <div style="background-color:white; height:80px;border-bottom:solid #8BD4F5 15px; position: relative; width: 100%; ">
                <div class="backBottom">返回</div>  
                                <div id="backTextTitle" class="backTitle">

                </div>
                <div class="menuBottom perButtom" style="left:3%;">
                    
                </div>
                <div class="menuBottom nextButtom" style="right:3%;"></div>

            </div>
            <div class="blankDivNormal"></div>
            <div id="mainText" style="line-height: 30px;margin-top:20px; margin-bottom:100px;color: #FDF6AE;">
                loading.......
            </div>

        </div>
        <!--            上部导航栏-->
        <div id="aaa" class="topBanner">
            <div id="titleArea" style=" padding-top: 12px; padding-left: 175px;">
                
<!--                <span id="scorllVal"></span>-->
                <div style="float: left; text-align: center; font-size: 20px; width: 75%;padding-top: 7px;">
                    <img src="./public/image/logoTitleText.png"/>
                    <div id="scorllVal"></div>
                </div>
                <div style="display: inline-block;text-align: right;float: left; ">
                    
                    <div class="bannerAction bannerActionLeft"><a style="color:white;cursor: pointer" onclick="gotoWhere(4700)">联系我们</a></div>
                    
                    <div id="addFavourite" class="bannerAction bannerActionRight"><a style="color:black;cursor: pointer" onclick="gotoWhere(650)">返回顶部</a></div>
                </div>
            </div>

        </div>
        <div id="titleAreaLine" style="height: 3px; background-color: skyblue; position: fixed;width: 100%; margin-top: 60px; z-index:20"></div>

        <!--[if lte IE 8]>
            <div id="browserVerpPrompt" style="cursor: pointer;font-family:黑体;position: fixed;z-index:999;background:#fff;right: 0;bottom: 0px;">
            您当前IE浏览器的内核版本低于IE9
            <br/>
            请务必使用使用firefox chrome Safari以及IE9及以上版本等浏览器浏览本页面
            <br/>
            <a id="closeMessage"  href="#3">关闭</a>
        </div> 
        <![endif]-->
        <!--[if IE 9]> 
        <div id="browserVerpPrompt" style="cursor: pointer;font-family:黑体;position: fixed;z-index:999;background:#fff;right: 0;bottom: 0px;">
            您当前IE浏览器的内核为IE9
         <br/>
            请使用IE10及以上版本浏览器 或者 firefox chrome Safari等浏览器以获取更好的浏览效果 <br/>
         <a id="closeMessage" href="#3">关闭</a>
        </div><![endif]-->
        <div id="a1" style="background-color: #102b4a;">



            <div>       
                <div class="topMod" style="position: relative; height:500px;">
                    <div id="q" style="background-image: url('./public/image/email.png');width: 32px;height: 22px;transition: all 1s linear 0s;
                         opacity:0;"></div> 
                    <ul>
                        <!--one-->
                        <li>
                            <div class="slidePosition" >
                               
                                <div id="redPoint" class="topModDivWidthValue" style="background: url('./public/image/map1.png') no-repeat;width: 1168px; height: 750px; left: 0;top: 0; opacity: 0;position:relative;z-index: 1;"></div>
                                <div  class="topModDivWidthValue" style="background: url('./public/image/first_piece.png') no-repeat;top:0px; width: 1168px; height: 750px;position:absolute;"></div>
                                <div class="topModDivWidthValue" id="hiddenDisplay1" style="display: none; background-color: black; z-index: 55;position: relative;width: 1168px; height: 750px;top:-710px;"></div>
                                <div id="firstWords" style="width:431px;height: 238px;left: -130px;top: -690px;z-index: 2; position:relative"></div>
                                <div id="topFirstWordItalic" style="left: 235px;top: -300px;z-index: 2;  position:relative;" class="topFirstWordItalic">雅捷承诺并实践</div>
                                <div id="firstBlock" class="topModFirstBotton thridBlockImg " style="left: -300px;top: -592px;  "></div>
                                <div id="secondBlock" class="topModFirstBotton secondBlockImg" style="left:-300px;top: -713px;"></div>
                                <div id="thridBlock" class="topModFirstBotton firstBlockImg" style="left:-300px;top: -835px;"></div>
                                
                            </div>
                        </li>
                        <!--two-->
                        <li>
                            <div class="slidePosition">
                                <div class="topModDivWidthValue" id="hiddenDisplay2" style=" background-color: black; z-index: 55;position: absolute;width: 1168px; height: 750px;"></div>
                                <div class="topModDivWidthValue" style="overflow: hidden;position:absolute;background-color: #ea5953;width: 1162px; height: 750px;margin-top: 40px;">
                                    <div style="width: 100%; height:576px;position: absolute; right: 0; bottom: 80px;">
                                         <img src='./public/image/bg1.png' style="width: 100%;height:400px; "/>
                                    </div>
                                    <div style="position: absolute;left:15%;top:10%;">
                                          <img src='./public/image/gaoxiao.png' />
                                    </div>
                                    <div style="width: 500px;position: absolute;left: 150px; top: 35%">
                                        雅捷用精湛的信息技术服务助您更高效的完成工作
                                        ，<br>并且消除您对系统维护和客户维护的顾虑，对于您的需求，我们全心投入。
                                    </div>
                                    <a class="bottonStyle topButton" style="position: absolute; right: 100px;bottom: 45%; " href="#fourth">
                                                雅捷提供的服务
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--                        four-->
                        <li>

                            <div class="slidePosition">
                                <div class="topModDivWidthValue" id="hiddenDisplay3" style=" background-color: black; z-index: 455;position: absolute;width: 1168px; height: 750px;"></div>
                                <div class="topModDivWidthValue" id="curtain" style=" top: 0px; position:absolute; background: url('./public/image/wendingBeijing.png');width: 1162px; height: 524px">
                                    <div id="fourthWords" style=" top: 15%;left:10%; position:absolute;">
                                        <div style=" background: url('./public/image/wending.png') no-repeat;width: 282px; height: 66px"></div>
                                    </div>
                                    <div style="color:#F3FBAD;position: absolute; left:15%;top:35%;">
                                        即使夜深人静时，也不用承担雅捷信息产品的任何风险，<br>
                                        时间的历练打磨出坚若磐石的雅捷，在银行运转的各个层面我们均有成熟的产品
                                    </div>
                                        <a href="#seconed" class="bottonStyle topButton" style="right: 100px;top:65%;margin-top: 20px;position: absolute;z-index: 15;">
                                            为什么选择雅捷
                                        </a>

                                </div>
                                <div style="height:230px;"></div>
                                <div class="topModDivWidthValue" style="background: url('./public/image/ppt_four_color.png');width: 1162px; height: 500px"></div>

                            </div>
                        </li>
                        <!--three-->
                        <li>
                            <div class="slidePosition">
                                <div class="topModDivWidthValue" id="hiddenDisplay4" style=" background-color: black; z-index: 55;position: absolute;width: 1168px; height: 750px;">
                                    
                                </div>
                               
                                <div class="topModDivWidthValue" style="overflow: hidden;position:absolute;background-color: #528d22;width: 1162px; height: 750px;margin-top: 40px;">
                                    <div style="width:100%;">
                                    <img src="./public/image/anquanBeijing.png" style="width:100%;"/>
                                    </div>
                                    <div style="background: url('./public/image/ppt_three_headline.png');top:30%;left: 26%; width:206px;height:67px;position:absolute;z-index: 10; "></div>
                                    <div id="threeTextGroup" style="position:absolute; z-index: 10; top:45%;width: 60%; left:30%">
                                        <div class="topText" style=" width: 400px;">
                                            大数据量时代的到来将数据安全性提高到十分重要的地位，<br>
                                            雅捷用认真的态度为您的信息安全提供保障
                                        </div>
                                        
                                    </div>
                                    <div style="position:absolute;right: 100px;top:45%;z-index: 20" ><a href="#thrid" class="bottonStyle topButton">雅捷的成功案例</a></div>
                                </div>
                            </div>
                        </li> 





                    </ul>

                </div>
                <div class="turnButton">
                    <a href="javascript:void(0)" class="unslider-arrow prev" style="background: url('./public/image/arrow_left.png');width: 24px;height:25px;display:inline-block; "></a>
                    <a href="javascript:void(0)" class="unslider-arrow next"  style="background: url('./public/image/arrow_right.png');width: 24px;height:25px;display:inline-block;"></a>

                </div>
            </div>



        </div>
        <!--        下部导航栏-->
        <div id="b1">
            <div id="bbb" style="position: relative;z-index: 555; width: 100%;" > 
                <div id="hiddenDiv" style="" ></div>
                <div class="navbar" data-target=".navbar" >
                    <div id="navBarColor" class="navbar-inner" style="filter:none;background-color: black;background-image: none;border: none;border-radius: 0px;">
                        <ul class="nav" style="width:100%">
                            <li class="navWidth"><a></a></li>
                            <li class="navWidth active" onclick="gotoWhere(650)"><div class="navWidth navInnerBlock"></div><a href="#seconedTitle" >关于雅捷</a></li>
                            <li class="navWidth" onclick="gotoWhere(1700)"><div class="navWidth navInnerBlock"></div><a href="#thridTitle">产品</a></li>
                            <li class="navWidth" onclick="gotoWhere(2680)"><div class="navWidth navInnerBlock"></div><a href="#fourthTitle">服务</a></li>
<!--                            <li class="navWidth"><a href="#fifth">团队</a></li>-->
                            <li class="navWidth" onclick="gotoWhere(3950)"><div class="navWidth navInnerBlock"></div><a href="#sixthTitle">合作伙伴</a></li>
                            <li class="navWidth" onclick="gotoWhere(4700)"><div class="navWidth navInnerBlock"></div><a href="#contactUsTitle">加入雅捷</a></li>
                        </ul>
                    </div>
                </div>
                <div style="height:3px;background-color: skyblue "></div>
            </div> 
           <!--            此处开始是企业文化-->
            <section id="seconed" style="background-color:#161525;height: 1100px;">
                 <div id="seconedTitle" style="height:50px;"></div>
                <div style="height:150px;"></div>
                <div  class="sectionDiv seconedTitleText">
                    为什么选择雅捷?
                </div>
                <div class="blankDiv">

                </div>
                <div class="sectionDiv secondText">
                    &nbsp;&nbsp;雅捷信息技术服务（上海）有限公司成立于2003年，公司总部位于上海。由美国主线信息服务有限公司发起成立，2006年销售额达17.4亿，被列为财富1000企业之一，在金融、政府、酒店、制造及零售等各大领域的IT应用中，雅捷的行业经验和服务始终是其关键。本公司是一家专门做金融行业技术服务与产品的公司，公司成立以来一直以提供中小型银行高端产品和服务，满足客户个性化需求为目标，在本领域中担任重要角色。现已拥有国内外金融及跨国企业客户80多家，公司现拥有北京，美国两个分支机构，国内外员工200多人，其中专业技术咨询及应用开发服务人员占80%以上。公司是美国IBM及德国SAP公司在中小银行业的主要战略伙伴，2005年雅捷取得SO9001国际认证及CMMI5国际认证。
                </div>
                <div  class="blankDiv"></div>
                <div class="sectionDiv seconedTitleText">
                    企业文化
                </div>
                <div class="sectionDiv" style="position:relative; margin-top:150px;">
                    <div id="introduction1" class="companyIntroduction" style="position: relative;width: 177px;height: 176px;">
                        <div id="introductionPic1" class="companyIntroductionImage" style="background-image: url('./public/image/1.png');width: 177px;height: 176px;" >

                        </div>
                        <div id="introductionText1" style="display:none; left: 200px; width: 500px; position: absolute; top:25px;">
                            <p class="companyIntroductTextTitle">客户至上，服务为本</p>
                            <p class="companyIntroductMainText">&nbsp;&nbsp;公司理念一，为顾客提供最佳服务是企业长久不衰的根本。
                                从顾客或用户的需求出发，基于客户的项目实施，定期对系统进行巡检，培养技术人员，
                                及时解答他们提出的各种技术问题，提供产品详细说明书和维护手册及资料，听取使用产
                                品后的评价和意见等。通过多种多样的服务，使客户达到百分之百的满意， 从而建立起
                                企业有口皆碑的信誉。我们的语录就是 " Lactec Best IT Services for you ."</p>
                        </div>
                    </div>
                    <div id="introduction2" class="companyIntroduction" style="width: 174px;height: 175px;">
                        <div id="introductionPic2" class="companyIntroductionImage" style="background-image: url('./public/image/2.png');width: 174px;height: 175px;">
                        </div>
                        <div id="introductionText2" style="display: none;left: 200px; width: 500px; position: absolute; top:25px;">
                            <p  class="companyIntroductTextTitle">重视人才，以人为本</p>
                            <p class="companyIntroductMainText">公司理念二，尊重每一个员工的人格和尊严，尊重员工的利益和价值观的实现。重视人才培养，为员工提供优越、宽松、和谐的工作环境同时，也为员工的持续性发展提供了完善的职业发展规划，以求员工的价值得到最大的体现。</p>

                        </div>
                    </div>
                    <div id="introduction3" class="companyIntroduction" style="position:static; width: 174px;height: 175px;">
                        <div id="introductionText3" style="display: none; left: 45px;width: 500px; position: absolute; top:25px;">
                            <p  class="companyIntroductTextTitle">不断创新，以诚为本</p>
                            <p class="companyIntroductMainText">公司理念三，正正是基于不断创新和诚信服务理念，才能使得公司在IT业迅速崛起且做大做强。不断创新是公司为客户提供最优质服务的保证也是公司一直在同行业中保持强劲竞争优势的最根本动力。</p>
                        </div>
                        <div id="introductionPic3" class="companyIntroductionImage" style="background-image: url('./public/image/3.png');width: 174px;height: 175px;">
                        </div>

                    </div>

                </div>
                <div class="blankDivLarge"></div>
                 <div id="thridTitle" style="height:50px;"></div>
            </section>
            <!--此处开始是产品介绍-->
            <section id="thrid" class="linerColor" >
                
                 <div  style="height:150px;"></div>
                <div class="seconedTitleText sectionDiv">
                    产品
                </div>
                <div style="height:50px;"></div>
                <div class="sectionDiv thridText">
                    <div>
                        <div class="productionIntruductionListBox">
                            <div onclick="getAttachHTML('./public/ajaxPage/bankFinancialManagement.php');" id="productionImg1" class="productionIntruductionList productionImg1"  ></div>
                            <div class="productionText">银行财务管理系统</div>
                        </div>
                        <div class="productionIntruductionListBox">
                            <div onclick="getAttachHTML('./public/ajaxPage/bankCredit.php');" id="productionImg2" class="productionIntruductionList productionImg2" ></div>
                            <div class="productionText">银行信贷业务系统</div>
                        </div>
                        <div class="productionIntruductionListBox">
                            <div onclick="getAttachHTML('./public/ajaxPage/processBank.php');" id="productionImg3" class="productionIntruductionList productionImg3" ></div>
                            <div class="productionText">流程银行整体解决方案</div>
                        </div>
                    </div>
                    <div style="margin-top: 80px; margin-left: 220px;">
                        <div class="productionIntruductionListBox">
                            <div onclick="getAttachHTML('./public/ajaxPage/coreBusinessSystem.php');" id="productionImg4" class="productionIntruductionList productionImg4" ></div>
                            <div class="productionText">核心业务系统解决方案</div>
                        </div>
                        <div class="productionIntruductionListBox">
                            <div onclick="getAttachHTML('./public/ajaxPage/CustomerInformationManagement.php');" id="productionImg5" class="productionIntruductionList productionImg5" ></div>
                            <div class="productionText">银行客户信息管理系统</div>
                        </div>
                        <div class="productionIntruductionListBox">
                            <div onclick="getAttachHTML('./public/ajaxPage/MobilQueue.php');" id="productionImg6" class="productionIntruductionList productionImg6" ></div>
                            <div class="productionText">移动排队系统</div>
                        </div>
                    </div>
                </div>
                <div id="fourthTitle" style="height:50px;"></div>
                <div class="blankDivLarge"></div>
                
            </section>
            <!--            此处是合作伙伴-->
            <section id="fourth" style="background-color: #f1eeed; ">
                 
                <div  style="height:150px;"></div>   
                <div class="seconedTitleText sectionDiv" style="color:#ff453d">服务</div>
                <div class="blankDivSmall"></div>
                <div class="fourthText sectionDiv">高效全方面的服务是雅捷核心竞争力的另一个方面，成熟的产品是成功的基石，配套合理的IT服务则是成功的最终体现，过硬的技术和管理流程满足您所有个性化需求。</div>

                <div class="blankDivSmall"></div>
                <div class="sectionDiv">
                    <div id="lineOne">
                        <div class="showArea" >
                            <div  class="serviceWords">
                                <div style=" height: 20px;"></div>
                                <div class="serviceWordsTitle"><a onclick="getAttachHTML('./public/ajaxPage/technicalSupport.php')">产品技术支持</a></div>
                                <p class="serviceWordsText">雅捷公司专业从事计算机主机、网络系统软件集成、应
                                    用系统开发和技术支持服务。在国际上实施过多项大型
                                    银行集成项目（包括系统软硬件网络方面的设计、安装、调试、维护等）。
                                    雅捷公司的技术服务队伍在国内经历过多次大型银行应
                                    用软件项目开发的考验，在行业经验上得到Lactec强有力
                                    的后援支持，既提供专业的各种软硬件及网络产品的技术咨询
                                    和开发维护服务，也向银行、证券、保险等领域客户提供
                                    业务系统咨询服务。</p>
                            </div>
                            <div class="serviceBackground">
                            </div>   
                        </div>
                        <div class="showArea">
                            <div  class="serviceWords">
                                <div style=" height: 20px;"></div>
                                <div class="serviceWordsTitle"><a onclick="getAttachHTML('./public/ajaxPage/MaintenanceService.php')">维保服务</a></div>
                                <p class="serviceWordsText">
                                    根据客户的IT环境和系统要求，提供相应技能和数量
                                    的工程师常驻客户现场，服务工程师将严格遵守客户
                                    的作息时间，并根据工作需要与客户共同加班工作；
                                    遵守有关保密安全方面的规定及服务外包合约的相关协
                                    议书，保证系统安全。</p>
                            </div>
                            <div class="serviceBackground">
                            </div>   
                        </div>
                        <div class="showArea">
                            <div  class="serviceWords">
                                <div style=" height: 20px;"></div>
                                <div class="serviceWordsTitle">
                                    <a onclick="getAttachHTML('./public/ajaxPage/ProjectManagement.html')">项目建设管理</a>
                                </div>
                                <p class="serviceWordsText">
                                    利用跨国公司的企业管理理念：ERP管理，计划管理，全面
                                    质量管理，ISO标准等，同时结合企业的实际业务管理流程
                                    ， 建立标准的业务需求分析报告， 并实现专业化的软件
                                    设计和和系统测试，形成客户度身定制的软件包。</p>
                            </div>
                            <div class="serviceBackground">
                            </div>   
                        </div>
                    </div>
                    <div id="lineTwo">
                        <div class="showArea" >
                            <div  class="serviceWords">
                                <div style=" height: 20px;"></div>
                                <div class="serviceWordsTitle"><a onclick="getAttachHTML('./public/ajaxPage/riskManagement.html')">风险管理</a></div>
                                <p class="serviceWordsText">
                                    软件项目风险体现在，能不能按时、按质向客户提供所
                                    需产品，客户对产品和服务满不满意，风险管理就是
                                    预先防范、有效的处置，以最小的代价换取最大的安全。
                                </p>
                            </div>
                            <div class="serviceBackground">
                            </div>   
                        </div>
                        <div class="showArea">
                            <div  class="serviceWords">
                                <div style=" height: 20px;"></div>
                                <div class="serviceWordsTitle"><a onclick="getAttachHTML('./public/ajaxPage/qualityManagement.html')">质量管理</a></div>
                                <p class="serviceWordsText">
                                    满足用户需求的程度是软件和服务质量的衡量标准，
                                    体现在功能、性能、稳定性、安全性、技术先进性、
                                    支持和服务等方面。质量是控制出来的而不是检测出
                                    来的，质量管理的基本任务就是通过规范、严格的过
                                    程控制，提供让用户满意的交付物。
                                </p>
                            </div>
                            <div class="serviceBackground">
                            </div>   
                        </div>
                        <div class="showArea">
                            <div  class="serviceWords">
                                <div style=" height: 20px;"></div>
                                <div class="serviceWordsTitle">
                                    <a onclick="getAttachHTML('./public/ajaxPage/constructionManagement.html')">计划管理</a>
                                </div>
                                <p class="serviceWordsText">
                                    计划是项目有序进行的依据，是进度控制的保证。项
                                    目组应对客户的计划草案，结合本企业情况进行修改
                                    、补充，再经双方讨论形成项目的最终的实施计划。
                                </p>
                            </div>
                            <div class="serviceBackground">
                            </div>   
                        </div>
                        <div id="sixthTitle" style="height:50px;"></div>
                    </div>
                    <div class="blankDivNormal"></div>
                    
            </section>

            <section id="sixth" style="background-color: #233773;height: 800px">
                 
            <div  style="height:180px;"></div>   
                <div class=" seconedTitleText postionCss" style="position: absolute; left:11%">合作伙伴</div>
                <div class="sectionDiv" style="margin-top: 80px; display:inline-block;">
                    <div class=" " style="width: 400px">
                        <div class="accordion" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a style="padding: 0 " class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                        <img src="./public/image/headline1.png"/>
                                    </a>
                                </div>
                                <div id="collapseOne" class="accordion-body in collapse ">
                                    <div class="accordion-inner accordionHeight">
                                        <img src="./public/image/guoWai.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a style=" padding: 0" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                        <img src="./public/image/headline2.png"/>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner accordionHeight">
                                        <img src="./public/image/guoNei.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a style=" padding: 0" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                        <img src="./public/image/headline3.png"/>
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner accordionHeight" >
                                        <img src="./public/image/qiye.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group cancelBorder">
                                <div class="accordion-heading">
                                    <a style=" padding: 0;" class="accordion-toggle setNoStyle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                        <div style="color:#233773;font-size: 1px;">aaaaaaaaaaaaa</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style=" height:240px; margin-top: 150px; width:800px;position: absolute; display: inline-block; right: 0;">
                    <img src="./public/image/hezuo.png">
                </div>
                <div id="contactUsTitle" style="height:50px;"></div>
                <div class="blankDivNormal"></div>
            </section>
            
            <section id="contactUs" class=""  style="background-color: #DBD9DC; ">
                
                <div  style="height:200px;"></div>  
                <div class="sectionDiv contactFont">
                    <div style="font-size: 46px;font-family: SimHei;">联系我们</div>
                    <div class="blankDivSmall"></div>
                    <div class="contactDiv"> 
                        <div class="inlineDisplay contactUsDivDisplay">
                            <div class="contactUsTextsHeight contactUsTextsWidth">
                            <div class="centerText contactUsImg contactUsTextsHeight"><img src="./public/image/tel.png"></div>
                            <div class="contactUsMessage contactUsTextsHeight">+86 021 31263800</div>
                            </div>
                           <div class="centerText contactUsTitileText contactUsTextsWidth"><img src="./public/image/telText.png"/></div>  
                        </div>
                        <div class="inlineDisplay contactUsDivDisplay">
                            <div class="contactUsTextsHeight contactUsTextsWidth">
                            <div class="centerText contactUsImg contactUsTextsHeight"><img src="./public/image/loc.png"></div>
                            <div class="contactUsMessage contactUsTextsHeight" style="line-height: normal;text-align: left;padding-top: 20px;">上海市闵行区沪闵路6088号<br/>凯德龙之梦商务楼2102室</div>
                            </div>
                           <div class="centerText contactUsTitileText contactUsTextsWidth"><img src="./public/image/locText.png"/></div>  
                        </div>
                        <div class="inlineDisplay contactUsDivDisplay">
                            <div class="contactUsTextsHeight contactUsTextsWidth">
                             <div class="centerText contactUsImg contactUsTextsHeight"><img src="./public/image/mail.png"></div>
                             <div class="contactUsMessage contactUsTextsHeight">lactec@lactec.net</div>
                            </div>
                            <div class="centerText contactUsTitileText contactUsTextsWidth"><img src="./public/image/mailText.png"/></div>                          
                        </div>
                        <div class="inlineDisplay contactUsDivDisplay">
                            <div class="contactUsTextsHeight contactUsTextsWidth">
                             <div class="centerText contactUsImg contactUsTextsHeight"><img src="./public/image/fax.png"></div>
                             <div class="contactUsMessage contactUsTextsHeight">+86 021 31263800</div>
                             </div>
                            <div class="centerText contactUsTitileText contactUsTextsWidth"><img src="./public/image/faxText.png"/></div>  
                            
                        </div>
                    </div>
<!--                    <div class="contactDiv"><span><img src="./public/image/tel.png"></span><span style=" margin-left: 80px;">+68 21 31263800</span></div>
                    <div class="blankDivSmall"></div>
                    <div class="contactDiv">
                        <div><span ><img src="./public/image/loc.png"></span><span style=" margin-left: 40px;">上海市闵行区沪闵路6088号凯德龙之梦商务楼2102室</span></div>
                        <div class="blankDivSmall"></div>
                        <div ><span ><img src="./public/image/mail.png"></span><span style=" margin-left: 80px;">lactec@lactec.net</span></div>
                    </div>
                    <div class="blankDivSmall"></div>
                    <div class="contactDiv" style="position: relative"><span><img src="./public/image/fax.png"></span><span style=" margin-left: 80px;">+68 21 64475729</span><span style="position: absolute;left:450px;top: -55px;"><img src="./public/image/logo00.png" style="width: 250px;height: 90px"></span></div>
                    <div class="blankDivSmall"></div>-->
                </div>
                <div class="centerText" style="margin-bottom:  60px;">
                        <img src="./public/image/logo00.png" style="width: 250px;height: 90px;margin-left: -60px;">
                </div>
                <div style=" text-align: right;font-family: 楷体; border-bottom: 2px #63746b solid; border-top: 2px #63746b solid; padding: 7px 30px 7px 0  ;">
                    <div>版权所有：2010-<?php echo date("Y")?> 雅捷信息技术（上海）有限公司 </div>
                </div>
                <div class="blankDiv"></div>
                
                    
               
            </section>
        </div>
    </body>
 <!--[if lte IE 8]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <script  type="text/javascript" src="./public/jquery-1.9.1.min.js"></script>
    <script  type="text/javascript" src="./public/jquery.pin.js"></script>
    <script  type="text/javascript" src="./public/bootstrap/js/bootstrap.js"></script>
    <script  type="text/javascript" src="./public/unslider.js"></script>
    <script  type="text/javascript" src="./public/productionIntruduction.js"></script>
    <script  type="text/javascript" src="./public/jquery.event.swipe.js"></script>
    <script  type="text/javascript" src="./public/jquery.event.move.js"></script>
<!--    <script  type="text/javascript" src="./public/smooth.pack.js"></script>-->
    <script>
        // $("#aaa").pin();
        $(document).scrollTop(0);
        $("#bbb").pin({
            containerSelector: "#b1"
        });
        
        var winHeight=$(window).height();
        var winWidth=$(window).width();
        //alert(winWidth);
        $(".topModDivWidthValue").css("width",winWidth+"px");
        $("#back").css({"height":winHeight+"px"});
        // alert(winHeight+":"+winWidth);
        if(winHeight<=750)
        {
            $('.topMod ul li').css("height",(winHeight-40)+"px")
        }
        else{
            $('.topMod ul li').css("height","750px")    
        }
       
        var divHeight=$(".topMod ul li").height();
        
        // alert(divHeight);
//            scollHeightChange(divHeight,60);

           
        $(document).scroll(function(){
//            $("#scorllVal").html($(document).scrollTop());
//           if ($(document).scrollTop()>"500"&&$(document).scrollTop()<="510"){
//              $(document).scrollTop(625);
//           }
//            if ($(document).scrollTop()>="600"&&$(document).scrollTop()<"625"){
//              $(document).scrollTop(500);
//           }
            scollHeightChange(divHeight,60);
        });
        moveSecondDiv();

        //---------------topMode js工作模块-------------------------
        var unslider =   $('.topMod').unslider({
            speed: 1000,               //  The speed to animate each slide (in milliseconds)
            delay: false,            //  The delay between slide animations (in milliseconds)
            complete: function() {
                //                if($(".dots li").attr('class').split(" ")[1]==='active'){
                //                   redPoint();
                //                $("#curtain").animate({"top":"-210px"},800);
                //                }
                //                else{
                //                    $("#curtain").css("top","0px");
                //                } 
                    
                resetCurtian();
                resetMoveSecondDiv();
                resetMoveFourDiv();
                $("#redPoint").stop(true);
                  $("#redPoint").css({opacity: "0"});
                /*此处需更改*/
                $(".dots li").each(function(){
                    if($(this).attr('class').split(" ")[1]==='active'){
                        switch ($(this).html()){
                            case "1":
                                hiddenPic("1");
                                resetMoveWords(1);
                                moveWords(1); 
                                break;
                            case "2":
                                hiddenPic("2");
//                                moveSecondDiv();
                                break;
                            case "4":
                                    hiddenPic("4");   
//                                    moveFourDiv()
                                break;
                            case "3":
                                hiddenPic("3");
//                                resetMoveWords(2);
//                                setCurtian(800);
                                break;

                        }
                    }
                });
                    
             
                
            },  //  A function that gets called after every slide animation
            keys: true,               //  Enable keyboard (left, right) arrow shortcuts
            dots: true,               //  Display dot navigation
            fluid: false              //  Support responsive design. May break non-responsive designs
        });
        data = unslider.data('unslider');
        $('.unslider-arrow').click(function() {
            var fn = this.className.split(' ')[1];

            //  Either do unslider.data('unslider').next() or .prev() depending on the className
            data[fn]();
            
        });
        $("#moveToOne").click(function(){
           
            data.move(1);
            
        });

        //------------------初始化幻灯片dots的位置-------------------
        $(".dots").css('left',(winWidth-300)+"px");
        $(".dots").css('top',(winHeight-100)+"px");
        var dotsPostionLeft= $(".dots").css('left');
        var dotsPostionTop= $(".dots").css('Top');
        dotsPostionLeft= parseInt(dotsPostionLeft);
        dotsPostionTop=parseInt(dotsPostionTop);
        var topVer=dotsPostionTop-10+"px";
        // alert(dotsPostion);
        var leftVer=dotsPostionLeft+95+"px";
        $(".turnButton").css('left', leftVer); 
        $(".turnButton").css('top', topVer); 
        //--------------点击div移动滑块----------------
        $(".topModFirstBotton").click(function(){
          
            switch( $(this).attr("id")){
                case "firstBlock":
                    data.move(1);
                    break;
                case "secondBlock":
                    data.move(3);
                    break;
                case "thridBlock":
                    data.move(2);
                    break;
            }
               
                
            
        });
        //----------------------背景图片移动效果-------------------
        function moveSecondDiv(){
            $("#seconedRight").animate({"right":"0px"},500);
            $("#seconedLeftTop").animate({"left":"0px"},1000);
            $("#seconedLeftBut").animate({"left":"0px"},1300);
            $("#seconedWords").animate({"top":"20px"},1800);
        }
        function resetMoveSecondDiv(){
            $("#seconedRight").css({"right":"-600px"});
            $("#seconedLeftTop").css({"left":"-200px"});
            $("#seconedLeftBut").css({"left":"-200px"});
            $("#seconedWords").css({"top":"820px"});
        }
        function moveFourDiv(){
            $("#threeTextGroup").animate({"top":"36%"},500)
            
        }
        function resetMoveFourDiv(){
           
            
        }
        //--------------------幕布遮罩效果------------------------
        function hiddenPic(num){
            switch(num){
                case "1":
                    $("#hiddenDisplay1").css("display","none");
                    $("#hiddenDisplay2").css("display","block");
                    $("#hiddenDisplay3").css("display","block");
                    $("#hiddenDisplay4").css("display","block");
                break;
                case "2":
                    $("#hiddenDisplay1").css("display","block");
                    $("#hiddenDisplay2").css("display","none");
                    $("#hiddenDisplay3").css("display","block");
                    $("#hiddenDisplay4").css("display","block");
                break;
                case "3":
                    $("#hiddenDisplay1").css("display","block");
                    $("#hiddenDisplay2").css("display","block");
                    $("#hiddenDisplay3").css("display","none");
                    $("#hiddenDisplay4").css("display","block");
                break;
                case "4":
                    $("#hiddenDisplay1").css("display","block");
                    $("#hiddenDisplay2").css("display","block");
                    $("#hiddenDisplay3").css("display","block");
                    $("#hiddenDisplay4").css("display","none");
                break;
            }
        }
        
        //--------------------幕布移动效果------------------------      
        function setCurtian(speed){
            $("#curtain").animate({"top":"-260px"},speed);
            setTimeout("moveWords(2)",speed);
        }
        function resetCurtian(){
            $("#curtain").css("top","40px");
        }
        //------------------幻灯片鼠标按下效果---------------------------
        $(".topMod ul li").mousedown(function(){
            $(this).css('cursor',"move");
        }).mouseup(function(){
            $(this).css("cursor","default");
        });
    
        //------------------地图闪烁效果-------------------------

           
        //redPoint();
        function redPoint(moveSpeed){
            $("#redPoint").queue(function(){
            $(this).css("background-image", "url('./public/image/map"+1+".png')");
            $(this).animate({opacity: '1'},moveSpeed);
            $(this).animate({opacity: "0"},moveSpeed,function(){
                $(this).css("background-image", "url('./public/image/map"+2+".png')");
            });
            
            $(this).animate({opacity: '1'},moveSpeed);
            $(this).animate({opacity: "0"},moveSpeed,function(){
                $(this).css("background-image", "url('./public/image/map"+3+".png')");
            });
            
            $(this).animate({opacity: '1'},moveSpeed);
            $(this).animate({opacity: "0"},moveSpeed,function(){
                $(this).css("background-image", "url('./public/image/map"+4+".png')");
            });
            
            $(this).animate({opacity: '1'},moveSpeed);
            $(this).animate({opacity: "0"},moveSpeed,function(){
                $(this).css("background-image", "url('./public/image/map"+5+".png')");
            });
            $(this).animate({opacity: '1'},moveSpeed);
            $(this).animate({opacity: "0"},moveSpeed);
            
            $(this).dequeue();
        });
            //           for(var i=1; i<=5;i++){
            //              // alert(i);
            //               
            //               setTimeout("setFlash("+i+")",2000);
            //               //setClear();
            //            }



//            $("#redPoint").css("background-image", "url('./public/image/map"+1+".png')");
//            $("#redPoint").animate({opacity: '1'},'300');
//            $("#redPoint").animate({opacity: "0"},'300');
//            $("#redPoint").css("background-image", "url('./public/image/map"+2+".png')");
//
//            $("#redPoint").css("background-image", "url('./public/image/map"+3+".png')");
//
//            $("#redPoint").css("background-image", "url('./public/image/map"+4+".png')");
//
//            $("#redPoint").css("background-image", "url('./public/image/map"+5+".png')");
            //           $("#redPoint").css("background-image", "url('./public/image/map"+6+".png')");
            //            $("#redPoint").animate({opacity: '1'},'300', function(){
            //                for(var i=1;i<5;i++){
            //                    
            //                
            //                $("#redPoint").animate({opacity: "0"},"300",function(){
            //                    setFlash(i);
            //                });
            //            }
            //            });  

        }
        function setClear(){
            $("#redPoint").animate({opacity: "0"},"300");
        }
        function setFlash(num){
            
            $("#redPoint").css("background-image", "url('./public/image/map"+num+".png')");
            $("#redPoint").css({opacity: '1'});  
            alert( $("#redPoint").css("background-image"));
        }
        //alert( $(".dots li").attr('class').split(" ")[1]==='active');
        //------------------文字以及div移动--------------------------------------
        function moveWords(number){
            switch(number){
                case 1:
                    $("#firstWords").animate({left: '200px'}, 1000,function(){
                        $("#topFirstWordItalic").animate({"top":"-610px"},600,function(){
                            $("#thridBlock").animate({"left":"515px"},800);
                            $("#secondBlock").animate({"left":"372px"},1200);
                            $("#firstBlock").animate({"left":"230px"},1500,function(){
                                redPoint(1000);
                            });
                        })

                    });
                    break;
                case 2:
                    $("#fourthWords").animate({top: '310px'}, 500);
                    break;
            
            }
        }
        function resetMoveWords(number){
            switch(number){
                case 1:
                    $("#firstWords").css({left: '-430px'});
                    $("#firstBlock").css({"left":"-300px"});
                    $("#secondBlock").css({"left":"-300px"});
                    $("#thridBlock").css({"left":"-300px"});
                     $("#topFirstWordItalic").css({"top":"-300px"})
                    break;
                case 2:
                    $("#fourthWords").css({top: '800px'}, 500);
                    break;}
            
    
            }
            moveWords(1);  
            
            
            //------------变动窗口大小执行模块-----------------
            $(window).resize(function(){
                //------------变动窗口大小改变TopMode大小-----------------
                var winHeight=$(window).height();
                if(winHeight<=750)
                {
                    $('.topMod ul li').css("height",(winHeight-40)+"px");
                    $(".topMod").css("height",(winHeight-40)+"px");
                }
                else{
                    $('.topMod ul li').css("height","750px");
                    $(".topMod").css("height","750px");
                }
                //------------ 变动窗口改变navbar长度---------------------
                var nowWinWidth=$(window).width()
                $("#bbb").width(nowWinWidth+"px");
                if(nowWinWidth<850){
                    $("#navBarColor").css("display","none");
                }
                else{
                    $("#navBarColor").css("display","block");
                }
                //-------------------改变topmod宽度--------------------------
                $(".topMod").width(nowWinWidth+"px");
                //----------------------修改弹窗大小----------------
                 $("#back").css({"height":winHeight+"px"});
                 //修改导航栏状态
                 var divHeight=$(".topMod ul li").height();
                 scollHeightChange(divHeight,60);
               //-------------------调整button位置---------------------
                 $(".dots").css('left',(nowWinWidth-300)+"px");
                 $(".dots").css('top',(winHeight-100)+"px");
                 var dotsPostionLeft= $(".dots").css('left');
                 var dotsPostionTop= $(".dots").css('Top');
                 dotsPostionLeft= parseInt(dotsPostionLeft);
                 dotsPostionTop=parseInt(dotsPostionTop);
                 var topVer=dotsPostionTop-10+"px";
                 // alert(dotsPostion);
                 var leftVer=dotsPostionLeft+95+"px";
                 $(".turnButton").css('left', leftVer); 
                 $(".turnButton").css('top', topVer); 
            });
            
            //---------------resizeEnd----------------------------



            //-------------------收藏按钮------------------
            //            $("#addFavourite").click(function(){
            //                var favouriteLocation=window.location;
            //                 AddFavorite('favouriteLocation',"雅捷");
            //            });
            //------------------------------公司介绍点击图片动画--------------------------
            var elementWidth=new Array();
            $(".companyIntroductionImage").click(function(){
                switch($(this).parent().attr("id")){
                    case "introduction1":
                        if(($(this).attr("class")).split(" ")[1]=="act"){
                            $(this).removeClass("act"); 
                            $("#introductionText1").fadeOut("fast",function(){
                                $("#introduction2").slideDown("3000");
                                $("#introduction3").slideDown("3000");
                            });
                        }else{
                            $("#introduction2").slideUp("3000");
                            $("#introduction3").slideUp("3000",function(){
                                $("#introductionText1").fadeIn("fast");
                            });
                            $(this).addClass("act");
                             
                            
                        }
                        break;
                    case "introduction2":
                        
                        if(($(this).attr("class")).split(" ")[1]=="act"){
                            $("#introductionText2").fadeOut("fast",function(){
                                $("#introduction1").animate({width:elementWidth[0]+"px"},"normal",function(){
                                    
                                    $("#introductionPic1").slideDown("3000");
                                    $("#introductionPic3").slideDown("3000");
                                })

                            });

                                 
                            $(this).removeClass("act");
                             
                        }else{
                            
                            $("#introductionPic1").slideUp("3000");
                            $("#introductionPic3").slideUp("3000",function(){
                                elementWidth[0]=$("#introduction1").width();
                                $("#introduction1").animate({width:"0px"},"normal",function(){
                                    
                                    $("#introductionText2").fadeIn("fast");
                                })
                                
                            });
                            $(this).addClass("act");
                        }
                        break;
                    case "introduction3":
                        if(($(this).attr("class")).split(" ")[1]=="act"){
                            $("#introductionText3").fadeOut("normal",function(){
                                $("#introductionPic1").slideDown("3000");
                                $("#introductionPic2").slideDown("3000");          
                            });
                            //                            $("#introduction1").show("fast");
                            //                            $("#introduction2").show("fast",function(){
                            //                                $("#introduction2").animate({width:elementWidth[1]+"px"},"normal");
                            //                                $("#introduction1").animate({width:elementWidth[0]+"px"},"normal",function(){
                               
                            //                                });

                            //                            });

                            $(this).removeClass("act");
                        }else{
                            $("#introductionPic1").slideUp("3000");
                            $("#introductionPic2").slideUp("3000",function(){
                                //                                elementWidth[0]=$("#introduction1").width();
                                //                                elementWidth[1]=$("#introduction2").width();
                                $("#introductionText3").fadeIn("normal");

                               
                            });
                            $(this).addClass("act");
                        }
                        break;
                }
              
            })
          
            //---------------------返回按钮事件----------------------------------
            //            $("#mainText").load("./public/ajaxPage/technicalSupport.php")
            $(".backBottom").click(function(){
                $(".backBottom").toggle();
                $("#back").slideToggle("slow",function(){
                    $("#mainText").html("loading......");
                     $(".perButtom").show();
                     $(".nextButtom").show();
                });
               
                $('body').css('overflow','visible');
                
            });
            //-----------------------------二级页面内容获取ajax--------------------------
            function getAttachHTML(attachUrl){

                if(attachUrl!=""&&attachUrl!=undefined){
                    $("#mainText").load(attachUrl,function(){
                        $("#backTextTitle").html($("#productionTitle").val()); 
                    });
                }
                
//                 alert( $('body').css('overflow'));
                $(".backBottom").show();
                $("#back").slideToggle("slow");
                $('body').css('overflow','hidden');
                
            }
            //--------------------------向前向后----------------
                $(".perButtom").click(function(){
                     $(".perButtom").show();
                     $(".nextButtom").show();
                     if($("#perUrl").val()==""){
                         alert("这已经是第一页了");
                     }else{
                         $("#mainText").load($("#perUrl").val(),function(){
                             $("#backTextTitle").html($("#productionTitle").val()); 
                         });
                        
                     }
                     
                });
                $(".nextButtom").click(function(){
                     $(".perButtom").show();
                     $(".nextButtom").show();
                  if($("#NextUrl").val()==''){
                       alert("这已经是最后一页了");
                  }
                  else{
                     $("#mainText").load( $("#NextUrl").val(),function(){
                         $("#backTextTitle").html($("#productionTitle").val()); 
                     });
                   
                 }
                });
            //------------------启动时默认块大小---------------------------------
            $("section").each(function(){
                
                if($(this).outerHeight()<750){
                    $(this).height(750);
                }
                
            });
            //------------判断滚动条的位置以及修改颜色-------------------
//                $(document).scrollTop(556);
            function scollHeightChange(changeHeight,offsetValue){
                var scrollValue= $(document).scrollTop();
              var changeValue=changeHeight-scrollValue;
              var offVal=offsetValue-changeValue;
//              alert(offVal+":"+ scrollValue+","+changeValue);
              var changeValue=0;
                offVal=offVal>=60?60:offVal;
                offVal=offVal<=0?0:offVal;
                if($(document).scrollTop()>=(changeHeight-offsetValue)){
                    
                    $("#hiddenDiv").css("marginBottom",offVal+"px");
                    $("#titleAreaLine").css({background:"#fff"});
                    $("#navBarColor").css({background: "#fff"});
                    $(".nav>li>a").addClass("navFontColor");
                }
                else{
                     $("#hiddenDiv").css("marginBottom","0px");
                    $("#navBarColor").css({transition:'background-color 0.2s linear',background: "#000"});
                    $("#titleAreaLine").css({background:"skyblue"});
                    $(".nav>li>a").removeClass("navFontColor");
                }
    }
    //----------------------topblock鼠标移动hover效果----------------------
//    $(".contactUsDivDisplay").mouseover(function(){
//        $(this).find(".contactUsImg").slideUp();
//        $(this).find(".contactUsMessage").slideDown();
//    });
//    $(".contactUsDivDisplay").hover(function(){
//        $(this).find(".contactUsImg").slideUp();
//        $(this).find(".contactUsMessage").slideDown();
//    }, function(){
//        $(this).find(".contactUsImg").slideDown();
//        $(this).find(".contactUsMessage").slideUp();
//    })
           $(".contactUsDivDisplay").hover(function(){
        $(this).find(".contactUsImg").css("display","none");
        $(this).find(".contactUsMessage").css("display","block");
    }, function(){
        $(this).find(".contactUsImg").css("display","block");
        $(this).find(".contactUsMessage").css("display","none");
    })

    //----------------切换样式-----------------
    $("#closeMessage").click(function(){
        $("#browserVerpPrompt").css("display","none");
    })
//----------------位置跳跃（暂时性解决方案）-----------------
    function gotoWhere(whereNumber){
        $(document).scrollTop(whereNumber);
    }
            
    </script>
</html>
