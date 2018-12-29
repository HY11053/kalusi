@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}" >
    <link rel="canonical" href="{{config('app.url')}}{{str_replace('','',Request::getrequesturi())}}"/>
@stop
@section('main_content')
    <div class="topbanner">
        <script type="text/javascript" src="/frontend/js/topbannerindex.js"></script>
    </div>
    <!-- 王牌项目 -->
    <div class="king_item">
        <div class="m-1200">
            <p>卡露丝国际王牌项目<p>
            <ul>
                <li><a href="http://www.ganxi168.com/" title="" target="_blank"><i class="ico_1"></i><em>洗  衣      </em></a></li>
                <li><a href="http://www.ganxi168.com/" title="洗鞋" target="_blank"><i class="ico_2"></i><em>洗  鞋      </em></a></li>
                <li><a href="http://www.ganxi168.com/" title="洗包" target="_blank"><i class="ico_3"></i><em>洗  包      </em></a></li>
                <li><a href="http://www.ganxi168.com/" title="奢侈品护理" target="_blank"><i class="ico_4"></i><em>奢侈品护理</em></a></li>
                <li><a href="http://www.ganxi168.com/" title="家居及汽车饰品清洗" target="_blank"><i class="ico_5"></i><em>家居及汽车饰品清洗</em></a></li>
            </ul>
        </div>
    </div>
    <!-- 王牌项目结束 -->
    <!-- 主体 -->
    <div class="main m-1200">
        <!-- 第一屏 -->
        <div class="main_1">
            <div class="activity fl">
                <p class="title"><span>最新活动专区</span><em>/</em><em class="en">Activity</em></p>
                <div class="activity_list">
                    <ul>
                        <li class="yj"><a href="http://www.ganxi168.com/join/activity/186.html" target="_blank" class="yj"> <img src="http://www.ganxi168.com/frontend/images/1-150GF92103O6.jpg"><span><i></i><em>卡露丝辣妈华丽变身</em></span></a></li>
                        <li class="yj"><a href="http://www.ganxi168.com/join/activity/1.html" target="_blank" class="yj"> <img src="http://www.ganxi168.com/frontend/images/1-150G21P0551X.jpg"><span><i></i><em>卡露丝金牌店长训练</em></span></a></li>
                        <li class="yj"><a href="http://www.ganxi168.com/join/activity/188.html" target="_blank" class="yj"> <img src="http://www.ganxi168.com/frontend/images/1-150H2150G0417.jpg"><span><i></i><em>卡露丝招商峰会</em></span></a></li>
                        <li class="yj"><a href="http://www.ganxi168.com/join/activity/187.html" target="_blank" class="yj"> <img src="http://www.ganxi168.com/frontend/images/1-150H215043HU.jpg"><span><i></i><em>卡露丝万店冲刺活动</em></span></a></li>
                        <li class="yj"><a href="http://www.ganxi168.com/join/activity/189.html" target="_blank" class="yj"> <img src="http://www.ganxi168.com/frontend/images/1-150H215214IC.jpg"><span><i></i><em>卡露丝21周年庆典</em></span></a></li>

                    </ul>
                    <div class="both"></div>
                </div>
                <div class="activity_time_tel">
                    <ul>
                        <li> <i class="tel"></i>
                            <div class="info"> <em>400-881-6188</em> 24小时免费咨询热线 </div>
                        </li>
                        <li> <i class="time"></i>
                            <div class="info"> <em>08:30-22:00</em> 工作时间 </div>
                        </li>
                    </ul>
                    <div class="both"></div>
                </div>
                <div class="activity_swt">
                    <ul>
                        <li class="ico_1"><a href="javascript:void(0)" rel="nofollow" onclick="openZoosUrl();LR_HideInvite();return false;" target="_blank" rel="nofollow">立即咨询</a> </li>
                        <li class="ico_2"><a href="javascript:void(0)" rel="nofollow" onclick="openZoosUrl();LR_HideInvite();return false;" target="_blank" rel="nofollow">咨询专家</a> </li>
                        <li class="ico_3"><a href="http://web.archive.orghttp://wpa.qq.com/msgrd?v=3&amp;uin=1520540080&amp;site=qq&amp;menu=yes" rel="nofollow">QQ咨询</a> </li>
                        <div class="both"></div>
                    </ul>
                </div>
            </div>
            <div class="news_video_expert fr">
                <!-- 新闻热点与视频 -->
                <div class="news_video">
                    <div class="main_news fl"> <p class="title"><span>新闻热点</span><em>/</em><em class="en">news</em><a href="http://www.ganxi168.com/news/" target="_blank" class="fr">MORE</a></p>
                        <div class="synos"> <a href="http://www.ganxi168.com/news/546.html" target="_blank" class="fl"><img src="http://www.ganxi168.com/frontend/images/1-1P3161401201M-lp.jpg" alt=""></a>
                            <h3><a href="http://www.ganxi168.com/news/546.html" target="_blank"><font color="#0000FF">干洗店加盟成本：卡露丝准入门槛低引关注</font></a></h3>
                            <p> 卡露丝干洗店加盟价格合理利润有保障，你还在想着创业吗?你还在为了你的过去没好项目而担心未来如何走吗?现代年轻人不是之前的年轻人，很多人希望能够自主创业，选择一个好的行业是关键，干洗店以成本低、...<a href="http://www.ganxi168.com/news/546.html" target="_blank" rel="nofollow">[详细]</a></p>

                            <div class="both"></div>
                        </div>
                        <ul class="news_list">
                            <li class="clo"><a href="http://www.ganxi168.com/news/478.html" target="_blank">干洗店加盟的好处</a></li>
                            <li><a href="http://www.ganxi168.com/news/546.html" target="_blank"><font color="#0000FF">干洗店加盟成本：卡露丝准入门槛低引关注</font></a></li>
                            <li><a href="http://www.ganxi168.com/news/560.html" target="_blank"><font color="#FF0000">卡露丝干洗店加盟助力创业者2018年一起创造财</font></a></li>
                            <li><a href="http://www.ganxi168.com/news/556.html" target="_blank">卡露丝干洗店加盟经营哲学：如何控制好干洗</a></li>
                            <li><a href="http://www.ganxi168.com/news/555.html" target="_blank">干洗店加盟连锁：卡露丝干洗机品牌为您分析</a></li>
                            <li><a href="http://www.ganxi168.com/news/547.html" target="_blank">怎样开干洗店加盟品牌连锁？卡露丝干洗店设</a></li>
                        </ul>
                        <div class="both"></div>
                    </div>
                    <div class="main_video fr">
                        <p class="title"><span>卡露丝影像</span><em>/</em><em class="en">Video</em></p>
                        <div class="play">
                            <object class="playerpreview" type="application/x-shockwave-flash" data="http://www.ganxi168.com/frontend/images/player_flv.swf" width="335" height="220">
                                <param name="movie" value="/frontend/images/player_flv.swf"/>
                                <param name="allowFullScreen" value="true"/>
                                <param name="wmode" value="transparent">
                                <param name="FlashVars" value="flv=/frontend/images/colors.flv&amp;title=卡露丝|Garrison&amp;width=335&amp;height=220&amp;showstop=1&amp;showvolume=1&amp;showtime=1&amp;startimage=/frontend/images/index.jpg&amp;showfullscreen=1&amp;bgcolor1=000000&amp;bgcolor2=000000&amp;playercolor=000000"/>
                            </object>
                        </div>
                    </div>
                    <div class="both"></div>
                </div>
                <!-- 新闻热点与结束 -->
                <!-- 卡露丝技术专家-->
                <div class="main_expert fl">
                    <p class="title"><span>技术团队</span><em>/</em><em class="en">Team</em><a class="next"></a><a class="prev"></a></p>
                    <div class="bd">
                        <ul>
                            <li> <a href="http://www.ganxi168.com/xy/ll/" target="_blank" rel="nofollow" title="林勇"><img alt="林勇" src="http://www.ganxi168.com/frontend/images/td1.jpg">
                                    <p class="name">国家特级洗衣技师</p>
                                    <p>高级皮具护理及保养专家</p>
                                </a>
                            </li>
                            <li> <a href="http://www.ganxi168.com/xy/ll/" target="_blank" rel="nofollow" title="古嘉强"><img alt="古嘉强" src="http://www.ganxi168.com/frontend/images/td2.jpg">
                                    <p class="name">国家特级洗衣熨烫师</p>
                                    <p>干洗行业市场营销专家</p>
                                </a>
                            </li>
                            <li> <a href="http://www.ganxi168.com/xy/ll/" target="_blank" rel="nofollow" title="李文锋"><img alt="李文锋" src="http://www.ganxi168.com/frontend/images/td3.jpg">
                                    <p class="name">国家中级洗衣技师</p>
                                    <p>干洗行业网络营销专家</p>
                                </a> 
                            </li>
                            <li> <a href="http://www.ganxi168.com/xy/ll/" target="_blank" rel="nofollow" title="蔡伟平"><img alt="蔡伟平" src="http://www.ganxi168.com/frontend/images/td4.jpg">
                                    <p class="name">洗衣设备维护与修理技师</p>
                                    <p>上海洗涤行业协会会员</p>
                                </a>
                            </li>
                            <li> <a href="http://www.ganxi168.com/xy/ll/" target="_blank" rel="nofollow" title="魏巍"><img alt="魏巍" src="http://www.ganxi168.com/frontend/images/td5.jpg">
                                    <p class="name">上海洗衣培训首席指导专家</p>
                                    <p>国家技师高级考评员</p>
                                </a>
                            </li>
                            <li> <a href="http://www.ganxi168.com/xy/ll/" target="_blank" rel="nofollow" title="吴艳"><img alt="吴艳" src="http://www.ganxi168.com/frontend/images/td6.jpg">
                                    <p class="name">上海洗衣培训特邀专家 </p>
                                    <p>干洗设备研究员</p>
                                </a>
                            </li>
                            <li> <a href="http://www.ganxi168.com/xy/ll/" target="_blank" rel="nofollow" title="伍明政"><img alt="伍明政" src="http://www.ganxi168.com/frontend/images/td7.jpg">
                                    <p class="name">干洗机研发专家</p>
                                    <p>服装洗涤机械专家</p>
                                </a>
                            </li>
                            <li> <a href="http://www.ganxi168.com/xy/ll/" rel="nofollow" target="_blank" rel="nofollow"><img alt="周木槿" src="http://www.ganxi168.com/frontend/images/td8.jpg">
                                    <p class="name">干洗店运营实战专员</p>
                                    <p>市场营销专家</p>
                                </a> </li>
                            <li> <a href="http://www.ganxi168.com/xy/ll/" target="_blank" rel="nofollow" title="张双洲"><img alt="张双洲" src="http://www.ganxi168.com/frontend/images/td9.jpg">
                                    <p class="name">中级洗涤技师</p>
                                    <p>中国洗涤协会特邀嘉宾</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="expert_invite fr">
                    <div class="hd">
                        <ul>
                            <li class="on"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <li><a href="javascript:void(0)"><img alt="" src="http://www.ganxi168.com/frontend/images/expert_invite_1.jpg"></a></li>
                            <li><a href="javascript:void(0)"><img alt="" src="http://www.ganxi168.com/frontend/images/expert_invite_2.jpg"></a></li>
                            <li><a href="javascript:void(0)"><img alt="" src="http://www.ganxi168.com/frontend/images/expert_invite_3.jpg"></a></li>
                            <li><a href="javascript:void(0)"><img alt="" src="http://www.ganxi168.com/frontend/images/expert_invite_4.jpg"></a></li>
                            <li><a href="javascript:void(0)"><img alt="" src="http://www.ganxi168.com/frontend/images/expert_invite_5.jpg"></a></li>
                            <li><a href="javascript:void(0)"><img alt="" src="http://www.ganxi168.com/frontend/images/expert_invite_7.jpg"></a></li>
                        </ul>
                    </div>
                </div>

                <!-- 卡露丝技术专家 -->
            </div>
            <div class="both"></div>
        </div>
        <!-- 第一屏结束 -->
        <!--第二屏开始-->
        <div class="shishang">
            <div class="shishangcon">
                <div class="shishangleft">
                    <div class="title">
                        <h3><strong>净时尚</strong> 卡露丝形象店人气榜 <b></b></h3>
                        <a id="PPnext" href="javascript:void(0)" target="_self" title="点击卡露丝形象店人气榜换一批"><i id="inext"></i>换一批</a> </div>
                    <div class="shishangleftcon">
                        <div class="shishangleftL">
                            <a href="http://www.ganxi168.com/kd/md/239.html" title="天津干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R01536010-L.jpg" class="lazy" data-original="/frontend/images/1-150R01536010-L.jpg" alt="天津干洗店"/>
                                <p></p>
                                <h3>21行业经验，自主研发洗衣系统。……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/230.html" title="日照店"> <img src="http://www.ganxi168.com/frontend/images/1-150PQ324545I.jpg" class="lazy" data-original="/frontend/images/1-150PQ324545I.jpg" alt="日照店"/>
                                <p></p>
                                <h3>一变四整合资源形成洗涤中心模式……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/231.html" title="平湖店"> <img src="http://www.ganxi168.com/frontend/images/1-150PQ200300-L.jpg" class="lazy" data-original="/frontend/images/1-150PQ200300-L.jpg" alt="平湖店"/>
                                <p></p>
                                <h3>一变四新增盈利渠道，打破传统加盟被动营销模式……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/242.html" title="盛泽干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R01542070-L.jpg" class="lazy" data-original="/frontend/images/1-150R01542070-L.jpg" alt="盛泽干洗店"/>
                                <p></p>
                                <h3>公司一直以“科技至上，以人为本，缔造完美，改变世界”为企业宗旨。生产了世界顶尖科技……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/233.html" title="贵阳干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R01516300-L.jpg" class="lazy" data-original="/frontend/images/1-150R01516300-L.jpg" alt="贵阳干洗店"/>
                                <p></p>
                                <h3>中国洗衣行业贵族品牌 您身边最贴心的洗衣服务商……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/243.html" title="六安干洗店"> <img src="http://www.ganxi168.com/uploads/1-1510221FZ1b1.jpg" class="lazy" data-original="/frontend/images/1-1510221FZ1b1.jpg" alt="六安干洗店"/>
                                <p></p>
                                <h3>六安干洗店……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/235.html" title="秀山干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R01522270-L.jpg" class="lazy" data-original="/frontend/images/1-150R01522270-L.jpg" alt="秀山干洗店"/>
                                <p></p>
                                <h3>一站到家服务模式，开店无忧。……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/241.html" title="泸州干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-1510221F2134T.jpg" class="lazy" data-original="/frontend/images/1-1510221F2134T.jpg" alt="泸州干洗店"/>
                                <p></p>
                                <h3>国内首家智能洗衣管理软件 卡露丝远程上门取送POS机……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/244.html" title="兰州干洗店"> <img src="http://www.ganxi168.com/uploads/1-1510221A93U58.jpg" class="lazy" data-original="/uploads/1-1510221A93U58.jpg" alt="兰州干洗店"/>
                                <p></p>
                                <h3>卡露丝为国际洗衣产业连锁机构品牌，是国内外知名的洗衣连锁企业，多年来在全球范围内致……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/245.html" title="温州干洗店"> <img src="http://www.ganxi168.com/uploads/1-1510221AJ4N8.png" class="lazy" data-original="/uploads/1-1510221AJ4N8.png" alt="温州干洗店"/>
                                <p></p>
                                <h3>连续3年荣获洗衣连锁NO.1品牌，全新经营模式，7大优势，完善售后服务，大品牌，有保障，干……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/246.html" title="拉萨干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R01550580-L.jpg" class="lazy" data-original="/frontend/images/1-150R01550580-L.jpg" alt="拉萨干洗店"/>
                                <p></p>
                                <h3>11项专利干洗机干洗店设备,十大干洗店加盟赚钱绝招,国际化干洗店加盟经营管理,打造王者干洗……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/247.html" title="漯河干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R01551520-L.jpg" class="lazy" data-original="/frontend/images/1-150R01551520-L.jpg" alt="漯河干洗店"/>
                                <p></p>
                                <h3>为客户选最好的位置，开最好的干洗店。……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/240.html" title="福州干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R0153A00-L.jpg" class="lazy" data-original="/frontend/images/1-150R0153A00-L.jpg" alt="福州干洗店"/>
                                <p></p>
                                <h3>学的会，学的慧，国际品牌服务商，技术可靠。……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/238.html" title="珠海干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R01532290-L.jpg" class="lazy" data-original="/frontend/images/150820/1-150R01532290-L.jpg" alt="珠海干洗店"/>
                                <p></p>
                                <h3>干洗，水洗，皮具护理，洗衣行业专业级洗衣化料，省钱，省心，专业，放心。……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/237.html" title="南京干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R01531020-L.jpg" class="lazy" data-original="/frontend/images/1-150R01531020-L.jpg" alt="南京干洗店"/>
                                <p></p>
                                <h3>中欧科技，超凡技术，采用西门子变频电机。技术先进，设备稳定。……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/236.html" title="博野干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R0152I80-L.jpg" class="lazy" data-original="/frontend/images/1-150R0152I80-L.jpg" alt="博野干洗店"/>
                                <p></p>
                                <h3>洗衣技术培训，o差评，国际教学标准。……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/234.html" title="鹰潭干洗店"> <img src="http://www.ganxi168.com/frontend/images/1-150R01521000-L.jpg" class="lazy" data-original="/frontend/images/1-150R01521000-L.jpg" alt="鹰潭干洗店"/>
                                <p></p>
                                <h3>助力营销，开创洗衣行业信息化服务商。……</h3>
                            </a>
                            <a href="http://www.ganxi168.com/kd/md/232.html" title="淮安店"> <img src="http://www.ganxi168.com/frontend/images/1-150PQ51I90-L.jpg" class="lazy" data-original="/frontend/images/1-150PQ51I90-L.jpg" alt="淮安店"/>
                                <p></p>
                                <h3>总部数据导流 网络营销渠道 门店营销渠道 线下推广渠道……</h3>
                            </a>
                        </div>
                        <div class="shishangleftR">
                            <ul id="wrapper" class="wrapper">
                                <li class="sfhover">
                                    <p><b>天津市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/239.html" title="天津干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R01536010-L.jpg" class="lazy" data-original="/frontend/images/1-150R01536010-L.jpg" alt="天津干洗店"/>
                                        <h4>金牌店长：王慧</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>日照市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/230.html" title="日照店"><img src="http://www.ganxi168.com/frontend/images/1-150PQ324545I.jpg" class="lazy" data-original="/frontend/images/1-150PQ324545I.jpg" alt="日照店"/>
                                        <h4>金牌店长：李友荣</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>浙江省</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/231.html" title="平湖店"><img src="http://www.ganxi168.com/frontend/images/1-150PQ200300-L.jpg" class="lazy" data-original="/frontend/images/150808/1-150PQ200300-L.jpg" alt="平湖店"/>
                                        <h4>金牌店长：周敏</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>苏州市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/242.html" title="盛泽干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R01542070-L.jpg" class="lazy" data-original="/frontend/images/1-150R01542070-L.jpg" alt="盛泽干洗店"/>
                                        <h4>金牌店长：李津名</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>贵阳市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/233.html" title="贵阳干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R01516300-L.jpg" class="lazy" data-original="/frontend/images/1-150R01516300-L.jpg" alt="贵阳干洗店"/>
                                        <h4>金牌店长：王天章</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>六安市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/243.html" title="六安干洗店"><img src="http://www.ganxi168.com/1-1510221FZ1b1.jpg" class="lazy" data-original="/uploads/1-1510221FZ1b1.jpg" alt="六安干洗店"/>
                                        <h4>金牌店长：赵瑞涛</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>秀山土家族苗族自治县</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/235.html" title="秀山干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R01522270-L.jpg" class="lazy" data-original="/frontend/1-150R01522270-L.jpg" alt="秀山干洗店"/>
                                        <h4>金牌店长：朴尚杰</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>泸州市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/241.html" title="泸州干洗店"><img src="http://www.ganxi168.com/uploads/1-1510221F2134T.jpg" class="lazy" data-original="/uploads/1-1510221F2134T.jpg" alt="泸州干洗店"/>
                                        <h4>金牌店长：康泽金</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>兰州市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/244.html" title="兰州干洗店"><img src="http://www.ganxi168.com/uploads/1-1510221A93U58.jpg" class="lazy" data-original="/uploads/1-1510221A93U58.jpg" alt="兰州干洗店"/>
                                        <h4>金牌店长：唐买糖</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>温州市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/245.html" title="温州干洗店"><img src="http://www.ganxi168.com/uploads/1-1510221AJ4N8.png" class="lazy" data-original="/uploads/1-1510221AJ4N8.png" alt="温州干洗店"/>
                                        <h4>金牌店长：孙光华</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>拉萨市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/246.html" title="拉萨干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R01550580-L.jpg" class="lazy" data-original="/frontend/images/1-150R01550580-L.jpg" alt="拉萨干洗店"/>
                                        <h4>金牌店长：周晓泽</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>漯河市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/247.html" title="漯河干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R01551520-L.jpg" class="lazy" data-original="/frontend/images/1-150R01551520-L.jpg" alt="漯河干洗店"/>
                                        <h4>金牌店长：王云云</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>福州市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/240.html" title="福州干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R0153A00-L.jpg" class="lazy" data-original="/frontend/images/1-150R0153A00-L.jpg" alt="福州干洗店"/>
                                        <h4>金牌店长：唐瑶</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>珠海市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/238.html" title="珠海干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R01532290-L.jpg" class="lazy" data-original="/frontend/images/1-150R01532290-L.jpg" alt="珠海干洗店"/>
                                        <h4>金牌店长：王春萍</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>南京市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/237.html" title="南京干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R01531020-L.jpg" class="lazy" data-original="/frontend/images/1-150R01531020-L.jpg" alt="南京干洗店"/>
                                        <h4>金牌店长：张伟</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>保定市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/236.html" title="博野干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R0152I80-L.jpg" class="lazy" data-original="/frontend/images/1-150R0152I80-L.jpg" alt="博野干洗店"/>
                                        <h4>金牌店长：刘大红</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>鹰潭市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/234.html" title="鹰潭干洗店"><img src="http://www.ganxi168.com/frontend/images/1-150R01521000-L.jpg" class="lazy" data-original="/frontend/images/1-150R01521000-L.jpg" alt="鹰潭干洗店"/>
                                        <h4>金牌店长：芮恩</h4>
                                    </a>
                                </li>
                                <li class="sfhover">
                                    <p><b>淮安市</b><strong>100人喜欢</strong></p>
                                    <a href="http://www.ganxi168.com/kd/md/232.html" title="淮安店"><img src="http://www.ganxi168.com/frontend/images/1-150PQ51I90-L.jpg" class="lazy" data-original="/frontend/images/1-150PQ51I90-L.jpg" alt="淮安店"/>
                                        <h4>帅气老板:朱先生</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="shishangright">
                    <div style="height:25px; font-weight:bold">
                        <p style="float:left;display:inline;line-height:25px;padding:0 0 0 15px;height:25px;border-left:4px solid #2db3a6;"><span>最新加盟商</span></p>
                    </div>
                    <div style="overflow:hidden;height:340px;width:332px; margin-top:20px; background-color:#F0F1F2;border-radius:4px;">
                        <div id="demo61" style="overflow:hidden;height:320px;width:332px; margin-top:10px; margin-left:10px; ">
                            <table width="310" border="0" align="top" cellpadding="5" cellspace="2" bgcolor="#FFFFFF">
                                <tr>
                                    <td id="demo161" valign="top"><table width="100%" cellpadding="5" cellspacing="2" border="0" class="as">
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/广东清远店.jpg" width="100" height="60"></td>
                                                            <td>恭贺广东清远店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/广西桂林店.jpg" width="100" height="60"></td>
                                                            <td>恭贺广西桂林店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/贵州兴义店.jpg" width="100" height="60"></td>
                                                            <td>恭贺贵州兴义店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/贵州遵义店.jpg" width="100" height="60"></td>
                                                            <td>恭贺贵州遵义店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/河北邢台市.jpg" width="100" height="60"></td>
                                                            <td>恭贺河北邢台市干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/河南开封店.jpg" width="100" height="60"></td>
                                                            <td>恭贺河南开封店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/湖北武汉店.jpg" width="100" height="60"></td>
                                                            <td>恭贺湖北武汉店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/湖南邵阳店.jpg" width="100" height="60"></td>
                                                            <td>恭贺湖南邵阳店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/吉林龙井店.jpg" width="100" height="60"></td>
                                                            <td>恭贺吉林龙井店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/江西抚州店.jpg" width="100" height="60"></td>
                                                            <td>恭贺江西抚州店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/内蒙呼市店.jpg" width="100" height="60"></td>
                                                            <td>恭贺内蒙呼市店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/宁厦银川店.jpg" width="100" height="60"></td>
                                                            <td>恭贺宁厦银川店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/青海西宁店.jpg" width="100" height="60"></td>
                                                            <td>恭贺青海西宁店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/山东滕州店.jpg" width="100" height="60"></td>
                                                            <td>恭贺山东滕州店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/山东枣庄店.jpg" width="100" height="60"></td>
                                                            <td>恭贺山东枣庄店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/陕西西安店.jpg" width="100" height="60"></td>
                                                            <td>恭贺陕西西安店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/四川内江店.jpg" width="100" height="60"></td>
                                                            <td>恭贺四川内江店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/云南丽江店.jpg" width="100" height="60"></td>
                                                            <td>恭贺云南丽江店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                            <tr>
                                                <td><table width="290" border="0">
                                                        <tr>
                                                            <td><img src="http://www.ganxi168.com/uploads/images/浙江温州店.jpg" width="100" height="60"></td>
                                                            <td>恭贺浙江温州店干洗连锁店开业</td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="demo261" valign="top"></td>
                                </tr>
                            </table>
                        </div>
                        <script>
                            var speed=20
                            demo261.innerHTML=demo161.innerHTML
                            function Marquee(){
                                if(demo261.offsetHeight-demo61.scrollTop<=0)
                                    demo61.scrollTop-=demo161.offsetHeight
                                else{
                                    demo61.scrollTop++
                                }
                            }
                            var MyMar=setInterval(Marquee,speed)
                            demo61.onmouseover=function() {clearInterval(MyMar)}
                            demo61.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <!--第二屏结束-->
        <div style="width:1190px; margin:0 auto"> <img src="http://www.ganxi168.com/frontend/images/ad1.jpg" width="1190"/> </div>
        <!-- 第三屏开始 -->
        <div class="main_4">
            <p class="title"><span>品牌中心</span><em>/</em><em class="en">Brand</em></p>
            <div class="brand_slide">
                <div class="hd">
                    <ul>
                        <li class="on"><i class="ico_1"></i><em>国际标准化洗衣流程</em></li>
                        <li><i class="ico_4"></i><em>高级洗护专家领衔</em></li>
                        <li><i class="ico_5"></i><em>进口环保洗涤化料</em></li>
                        <li><i class="ico_2"></i><em>21年辉煌荣誉</em></li>
                        <li><i class="ico_5"></i><em>8千家连锁店共襄财富</em></li>
                        <li><i class="ico_3"></i><em>上下求索精益求精</em></li>
                    </ul>
                </div>
                <div class="bd">
                    <ul>
                        <li>
                            <img src="http://www.ganxi168.com/frontend/images/brand_1.jpg" alt="卡露丝21年品牌" width="550" height="340">
                            <div class="info">
                                <h3><em>中国第一部</em>服装纺织物洗涤深度还原技术标准</h3>
                                <p>近几年，干洗服务得到越来越多人的认可，为了规范干洗连锁行业发展，提高对意识，中国第一本《服装纺织物洗涤深度还原技术标准》发布，引爆第三届国际洗涤节热潮。该书由作为大学生创业导师教学研究基地的卡露丝干洗多年资料整理后由中华洗涤协会与皮具护理会员、中国洗涤协会副会长员崇生老师撰写，整书服装干洗、皮具护理修饰各个项目，从面到点，各个项目从概念、技术、深度还原标准、干洗注意事项以及干洗护理案例等罗列，单个皮衣护理还原技术标准就有21项，从服装干洗的方方面面达到完美者的要求。</p>
                                <a href="javascript:void(0)" onclick="openZoosUrl();LR_HideInvite();return false;" target="_blank" rel="nofollow">详细</a> </div>
                        </li>
                        <li>
                            <img src="http://www.ganxi168.com/frontend/images/brand_2.jpg" alt="卡露丝36年荣誉" width="550" height="340">
                            <div class="info">
                                <h3><em>全球</em>国际洗涤护理专家团队领衔</h3>
                                <p>专家，是安全洗衣的基石，卡露丝作为中国干洗店连锁领先品牌，吸引了众多有意投资开干洗店人士的加盟，数千家全球最顶尖、最权威的服装洗涤超级大腕齐聚卡露丝，进行服装洗涤标准化科研交流，从不同角度和层面展现国内外服装干洗护理方面的新技术、新进展、新成就，为国内服装干洗专家提供卓越的学习交流平台。</p>
                                <a href="javascript:void(0)" onclick="openZoosUrl();LR_HideInvite();return false;" target="_blank" rel="nofollow">详细</a> </div>
                        </li>
                        <li>
                            <img src="http://www.ganxi168.com/frontend/images/brand_3.jpg" alt="卡露丝21年技术" width="550" height="340">
                            <div class="info">
                                <h3><em>正品材料</em>品质保证</h3>
                                <p>材料，是安全干洗的质量保障。卡露丝国际洗衣，一直专注为消费者提供至安全、至周全的干洗服务。对于材料的选择，更是有着一套严格的流程！所用的材料都是得到正规权威认证的进口原材料，经过老师和专家的层层把关，保证材料来源渠道正宗，安全更有保障！</p>
                                <a href="javascript:void(0)" onclick="openZoosUrl();LR_HideInvite();return false;" target="_blank" rel="nofollow">详细</a> </div>
                        </li>
                        <li>
                            <img src="http://www.ganxi168.com/frontend/images/brand_4.jpg" alt="卡露丝21年专家" width="550" height="340">
                            <div class="info">
                                <h3><em>21年</em>辉煌荣誉</h3>
                                <p>作为中国服装干洗护理领导品牌，卡露丝始终秉承为消费者提供最好服务的宗旨，一直走在服装干洗护理行业前沿，不断刷新和引领着全球消费者服装干洗和皮革护理保养观念，一次次突破发展技术革新，卡露丝凭借其强大的综合实力获得了诸多干洗技术殊荣！</p>
                                <a href="javascript:void(0)" onclick="openZoosUrl();LR_HideInvite();return false;" target="_blank" rel="nofollow">详细</a> </div>
                        </li>
                        <li>
                            <img src="http://www.ganxi168.com/frontend/images/brand_5.jpg" alt="" width="550" height="340">
                            <div class="info">
                                <h3><em>全球8000多家连锁店共同见证</em></h3>
                                <p>卡露丝自1993年成立以来，卡露丝国际洗衣凭借比肩全球的顶尖洗涤专家阵容、国际最先进洗涤硬件设备、领先于行业的卓越洗涤技艺，屡创行业第一，被业界誉为中国洗涤服务的航母，被媒体评为最佳皮革护理机构，被广大消费者誉为洗衣、洗鞋最优品牌。成功的帮助几千加盟商创业实现财富梦想。作为"中国干洗技术培训老基地"，卡露丝也给众多怀抱着不断追求洁净健康的消费者分享洗涤技艺、乐趣、财富的机会，携手传播爱心，一起见证卡露丝塑造中国干洗连锁领导品牌的发展历程。</p>
                                <a href="javascript:void(0)" onclick="openZoosUrl();LR_HideInvite();return false;" target="_blank" rel="nofollow">详细</a> </div>
                        </li>
                        <li>
                            <img src="http://www.ganxi168.com/frontend/images/brand_6.jpg" alt="" width="550" height="340">
                            <div class="info">
                                <h3><em>致力于精益求精</em></h3>
                                <p>卡露丝“精”的技术质量，需要“美”的表达方式，追求的是管理和过程的精细，精细是一种意识、一种观念、一种认真的态度、一种精益求精的文化，细化管理，挖掘内部潜力，提升产品品质，满足客户需求，才能使企业在复杂多变的市场竞争中立于不败之地。</p>
                                <a href="javascript:void(0)" onclick="openZoosUrl();LR_HideInvite();return false;" target="_blank" rel="nofollow">详细</a> </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 第三屏结束 -->

        <!-- 第四屏开始 -->
        <div class="main_5">
            <div class="main_nav_son">
                <ul>
                    <li class="hover"><a href="http://www.ganxi168.com/" target="_blank"><span style="font-size: 18px; font-weight:bold;">干洗设备</span><em></em></a> </li>
                    <li><a href="http://www.ganxi168.com/" target="_blank"><span style="font-size: 18px;font-weight:bold;">水洗设备</span><em></em></a> </li>
                    <li><a href="http://www.ganxi168.com/" target="_blank"><span style="font-size: 18px;font-weight:bold;">烘干设备</span><em></em></a> </li>
                    <li><a href="http://www.ganxi168.com/" target="_blank"><span style="font-size: 18px;font-weight:bold;">洗鞋设备</span><em></em></a> </li>
                    <li><a href="http://www.ganxi168.com/" target="_blank"><span style="font-size: 18px;font-weight:bold;">辅助设备</span><em></em></a></li>
                </ul>
            </div>
            <div class="index_list_con" style="display:block;">
                <div class="index_list_project">
                    <div class="new_products">
                        <ul class="new_products_lists">
                            <li>
                                <a target="_blank" href="http://www.ganxi168.com/sb/gx/214.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150P209543E17.jpg"> <span>
              <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">变频水洗+烘干双筒机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">水洗 烘干 同步高效 精致节能</h4>
              </span></a>
                            </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/gx/269.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0163502445.jpg"> <span>
              <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">全自动电热烘干机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">快速 高效 节能 环保</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/gx/216.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150P209555B37.jpg"> <span>
              <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">全自动多溶剂干洗机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">高效节能  绿色环保</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/gx/215.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150P2095522937.jpg"> <span>
              <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">全封闭四氯乙烯干洗机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">高洁净 省时省力省成本</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/gx/213.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150P2094KY57.jpg"> <span>
              <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">全自动变频石油干洗机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">变频节能 环保碳烃干洗</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/gx/212.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150P2094G0330.jpg"> <span>
              <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">单件隔离干洗机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">单件单洗 无传染 环保卫生</h4>
              </span></a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- index_list_con_1 end -->

            <div class="index_list_con">
                <div class="index_list_project">
                    <div class="new_products">
                        <ul class="new_products_lists">
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/sx/248.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R01615545N.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">变频洗脱两用水洗机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">工业洗涤 变频节能 床单被套洗</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/sx/249.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0161641606.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">变频洗脱两用水洗机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">节能环保 大容量洗涤 洁净力高</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/sx/250.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0161H20-L.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">全自动变频洗脱两用机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">变频节能 环保洗涤 干洗店专用</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/sx/253.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0161Z2235.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">工业烘干机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">电热，蒸汽，燃气烘干3种</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/sx/252.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0161T4351.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">工业卧式洗衣机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">卧式洗涤 省水省电 环保节能</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/sx/251.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0161R2340.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">工业脱水机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">酒店，宾馆，洗涤布草脱水专</h4>
              </span></a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- index_list_con_2 end -->
            <div class="index_list_con">
                <div class="index_list_project">
                    <div class="new_products">
                        <ul class="new_products_lists">
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/hg/271.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R4102153K5.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">自动人像整烫机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">自动熨烫 省时 省力</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/hg/268.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0162912Q5.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">真空摇臂吸风熨烫台</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">自动吸风 简单方便</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/hg/267.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0162TX39.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">全自动烘干机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">自动烘干 控温 控压</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/hg/266.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0162R0458.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">全自动折叠机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">床单，被套折叠专家</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/hg/265.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0162K0317.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">不锈钢2辊烫平机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">床单，被套，一次成型 即干又</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/hg/264.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0162H42M.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">不锈钢3辊工业烫平机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">床单，被套熨烫专家</h4>
              </span></a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- index_list_con_3 end -->
            <div class="index_list_con">
                <div class="index_list_project">
                    <div class="new_products">
                        <ul class="new_products_lists">
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/xx/270.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R4102041G4.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">自动感应式擦鞋机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">伸脚即擦 全自动擦鞋</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/xx/258.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0162315210.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">鞋类护理翻新辅件</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center"></h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/xx/257.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0162250205.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">鞋靴美容修饰机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">皮鞋护理，打磨，抛光，保养</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/xx/256.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R016222H01.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">全自动烘鞋机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">快速烘干，定型，翻新</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/xx/255.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R01621492S.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">全自动洗鞋+烘鞋一体机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">洗烘同步，高效高质</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/xx/254.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R016211Wb.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">全自动洗鞋机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">洗运动鞋，帆布鞋，旅游鞋</h4>
              </span></a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- index_list_con_4 end -->
            <div class="index_list_con">
                <div class="index_list_project">
                    <div class="new_products">
                        <ul class="new_products_lists">
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/fz/263.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R016260H92.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">308格衣物输送线</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">电脑数控 自动旋转 专业品质</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/fz/262.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R016253T93.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">双层输送线</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">616格 电脑数控 自动旋转</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/fz/261.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R016245W19.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">成衣立体包装机</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">精美包装 防尘 防灰 防潮</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/fz/260.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0162430635.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">多功能去渍台</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">不锈钢去渍平台 3把喷枪</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/fz/259.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R0162404H7.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">多功能熨烫台（带去渍）</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">快捷 灵活 吸鼓风带去渍</h4>
              </span></a> </li>
                            <li> <a target="_blank" href="http://www.ganxi168.com/sb/fz/272.html">
                                    <p></p>
                                    <img width="180" height="230" src="http://www.ganxi168.com/frontend/images/1-150R410231Va.jpg"> <span>
             <h3 style="border-bottom:1px dotted #000; font-size:14px; font-weight:100; text-align:center; margin:0 17px; display:block;">豪华双门消毒柜</h3>
              <h4 style="font-size:12px;font-weight:100; display:block; text-align:center">紫外线+臭氧双重杀菌消毒</h4>
              </span></a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- index_list_con_5 end -->

            <!-- index_list_con_5 end -->
        </div>
        <!-- 第四屏结束 -->
        <!--第五屏开始-->

        <div class="main_3">
            <h2 class="title"><span>卡露丝品牌专区</span><em>/</em><em class="en">Brand of COLORS</em>
                <ul class="fr">
                    <li class="hover h"><a>加盟培训</a><b>/</b><i></i></li>
                    <li class="h"><a>模式创新</a><b>/</b><i></i></li>
                    <li class="h"><a>促销宣传</a><b>/</b><i></i></li>
                    <li class="h"><a>顶级化料</a><b>/</b><i></i></li>
                </ul>
            </h2>
            <div class="main_woman">
                <!--  -->
                <div class="main_woman_con"> <a class="woman_1 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_1.jpg" alt="卡露丝国际洗衣技术培训" width="225" height="350">
                        <p>卡露丝国际洗衣技术培训</p>
                    </a>
                    <div class="woman_img fr">
                        <div class="woman_img_1 fl"> <a class="woman_2 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_2.jpg" alt="卡露丝国际洗衣技术培训" width="113" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> <a class="woman_3 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_3.jpg" alt="卡露丝国际洗衣技术培训" width="113" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> <a class="woman_4 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_4.jpg" alt="卡露丝国际洗衣技术培训" width="228" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> </div>
                        <div class="woman_img_2 fl"> <a class="woman_5 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_5.jpg" alt="卡露丝国际洗衣技术培训" width="228" height="233">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> </div>
                        <div class="woman_img_3 fl"> <a class="woman_6 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_6.jpg" alt="卡露丝国际洗衣技术培训" width="113" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> <a class="woman_7 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_7.jpg" alt="卡露丝国际洗衣技术培训" width="228" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> <a class="woman_8 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_8.jpg" alt="卡露丝国际洗衣技术培训" width="228" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> <a class="woman_9 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_9.jpg" alt="卡露丝国际洗衣技术培训" width="113" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> </div>
                        <div class="woman_img_2 fl"> <a class="woman_10 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_10.jpg" alt="卡露丝国际洗衣技术培训" width="166" height="233">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> </div>
                        <div class="woman_img_4 fl"> <a class="woman_11 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_11.jpg" alt="卡露丝国际洗衣技术培训" width="113" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> <a class="woman_12 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_12.jpg" alt="卡露丝国际洗衣技术培训" width="113" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> <a class="woman_13 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_13.jpg" alt="卡露丝国际洗衣技术培训" width="113" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> <a class="woman_15 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_14.jpg" alt="卡露丝国际洗衣技术培训" width="228" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> <a class="woman_15 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_15.jpg" alt="卡露丝国际洗衣技术培训" width="113" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> <a class="woman_16 fl"><img src="http://www.ganxi168.com/frontend/images/woman_sj_16.jpg" alt="卡露丝国际洗衣技术培训" width="283" height="113">
                                <p>卡露丝国际洗衣技术培训</p>
                            </a> </div>
                    </div>
                </div>

                <!--  -->
                <div class="main_woman_con main_woman_tb"> <a class="woman_1 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_1.jpg" alt="卡露丝创新项目展示" width="225" height="350">
                        <p>卡露丝创新项目展示</p>
                    </a>
                    <div class="woman_img fr">
                        <div class="woman_img_1 fl"> <a class="woman_2 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_2.jpg" alt="卡露丝创新项目展示" width="113" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_3 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_3.jpg" alt="卡露丝创新项目展示" width="113" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_4 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_4.jpg" alt="卡露丝创新项目展示" width="228" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> </div>
                        <div class="woman_img_2 fl"> <a class="woman_5 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_5.jpg" alt="卡露丝创新项目展示" width="228" height="233">
                                <p>卡露丝创新项目展示</p>
                            </a> </div>
                        <div class="woman_img_3 fl"> <a class="woman_6 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_6.jpg" alt="卡露丝创新项目展示" width="113" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_7 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_7.jpg" alt="卡露丝创新项目展示" width="228" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_17 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_8.jpg" alt="卡露丝创新项目展示" width="113" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_8 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_9.jpg" alt="卡露丝创新项目展示" width="113" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_9 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_10.jpg" alt="卡露丝创新项目展示" width="113" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> </div>
                        <div class="woman_img_2 fl"> <a class="woman_10 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_11.jpg" alt="卡露丝创新项目展示" width="166" height="233">
                                <p>卡露丝创新项目展示</p>
                            </a> </div>
                        <div class="woman_img_4 fl"> <a class="woman_11 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_12.jpg" alt="卡露丝创新项目展示" width="113" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_12 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_13.jpg" alt="卡露丝创新项目展示" width="113" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_13 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_14.jpg" alt="卡露丝创新项目展示" width="113" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_15 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_15.jpg" alt="卡露丝创新项目展示" width="228" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_15 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_16.jpg" alt="" width="113" height="113">
                                <p>卡露丝创新项目展示</p>
                            </a> <a class="woman_16 fl"><img src="http://www.ganxi168.com/frontend/images/woman_tb_17.jpg" alt="卡露丝创新项目展示" width="283" height="113">
                                <p>"卡露丝创新项目展示</p>
                            </a> </div>
                    </div>
                </div>

                <!--  -->
                <div class="main_woman_con main_woman_tb"> <a class="woman_1 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_1.jpg" alt="卡露丝宣传海报" width="225" height="350">
                        <p>卡露丝宣传海报</p>
                    </a>
                    <div class="woman_img fr">
                        <div class="woman_img_1 fl"> <a class="woman_2 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_2.jpg" alt="卡露丝宣传海报" width="113" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_3 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_3.jpg" alt="卡露丝宣传海报" width="113" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_4 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_4.jpg" alt="卡露丝宣传海报" width="228" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> </div>
                        <div class="woman_img_2 fl"> <a class="woman_5 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_5.jpg" alt="卡露丝宣传海报" width="228" height="233">
                                <p>卡露丝宣传海报</p>
                            </a> </div>
                        <div class="woman_img_3 fl"> <a class="woman_6 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_6.jpg" alt="卡露丝宣传海报" width="113" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_7 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_7.jpg" alt="卡露丝宣传海报" width="228" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_17 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_8.jpg" alt="卡露丝宣传海报" width="113" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_8 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_9.jpg" alt="卡露丝宣传海报" width="113" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_9 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_10.jpg" alt="卡露丝宣传海报" width="113" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> </div>
                        <div class="woman_img_2 fl"> <a class="woman_10 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_11.jpg" alt="卡露丝宣传海报" width="166" height="233">
                                <p>卡露丝宣传海报</p>
                            </a> </div>
                        <div class="woman_img_4 fl"> <a class="woman_11 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_12.jpg" alt="卡露丝宣传海报" width="113" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_12 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_13.jpg" alt="卡露丝宣传海报" width="113" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_13 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_14.jpg" alt="卡露丝宣传海报" width="113" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_15 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_15.jpg" alt="卡露丝宣传海报" width="228" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_15 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_16.jpg" alt="卡露丝宣传海报" width="113" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> <a class="woman_16 fl"><img src="http://www.ganxi168.com/frontend/images/woman_gc_17.jpg" alt="卡露丝宣传海报" width="283" height="113">
                                <p>卡露丝宣传海报</p>
                            </a> </div>
                    </div>
                </div>

                <!--  -->
                <div class="main_woman_con main_woman_tb"> <a class="woman_1 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_1.jpg" alt="卡露丝国际洗衣化料" width="225" height="350">
                        <p>卡露丝国际洗衣化料</p>
                    </a>
                    <div class="woman_img fr">
                        <div class="woman_img_1 fl"> <a class="woman_2 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_2.jpg" alt="卡露丝国际洗衣化料" width="113" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> <a class="woman_3 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_3.jpg" alt="卡露丝国际洗衣化料" width="113" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> <a class="woman_4 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_4.jpg" alt="卡露丝国际洗衣化料" width="228" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> </div>
                        <div class="woman_img_2 fl"> <a class="woman_5 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_5.jpg" alt="卡露丝国际洗衣化料" width="228" height="233">
                                <p>卡露丝国际洗衣化料</p>
                            </a> </div>
                        <div class="woman_img_3 fl"> <a class="woman_6 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_6.jpg" alt="卡露丝国际洗衣化料" width="113" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> <a class="woman_7 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_7.jpg" alt="卡露丝国际洗衣化料" width="228" height="113">
                                <p>"卡露丝国际洗衣化料"</p>
                            </a> <a class="woman_17 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_8.jpg" alt="卡露丝国际洗衣化料" width="113" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> <a class="woman_8 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_9.jpg" alt="卡露丝国际洗衣化料" width="113" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> <a class="woman_9 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_10.jpg" alt="卡露丝国际洗衣化料" width="113" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> </div>
                        <div class="woman_img_2 fl"> <a class="woman_10 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_11.jpg" alt="卡露丝国际洗衣化料" width="166" height="233">
                                <p>"卡露丝国际洗衣化料"</p>
                            </a> </div>
                        <div class="woman_img_4 fl"> <a class="woman_11 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_12.jpg" alt="卡露丝国际洗衣化料" width="113" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> <a class="woman_12 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_13.jpg" alt="卡露丝国际洗衣化料" width="113" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> <a class="woman_13 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_14.jpg" alt="卡露丝国际洗衣化料" width="113" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> <a class="woman_15 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_15.jpg" alt="卡露丝国际洗衣化料" width="228" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> <a class="woman_15 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_16.jpg" alt="卡露丝国际洗衣化料" width="113" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> <a class="woman_16 fl"><img src="http://www.ganxi168.com/frontend/images/woman_hx_17.jpg" alt="卡露丝国际洗衣化料" width="283" height="113">
                                <p>卡露丝国际洗衣化料</p>
                            </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--第五屏结束-->
    </div>

@stop