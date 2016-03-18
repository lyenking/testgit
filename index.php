<script src="{$Think.const.PUBLIC_Q}js/index.js"></script>
<link href="{$Think.const.PUBLIC_Q}css/index.css" rel="stylesheet" type="text/css" />
<link href="{$Think.const.PUBLIC_Q}css/support.css" rel="stylesheet" type="text/css" />
   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script type="text/javascript">
    window.onscroll = function () {
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        function ai(a) {
            return document.getElementById(a);
        }
        //var top_div = document.getElementById( "top_div" );
        if (t >= 900 && t <= 1200) {
            //top_div.style.display = "inline";
            ai("three_title").style.opacity = "1";
            ai("three_title").style.transition = "opacity 1s";

            ai("three_a1").style.opacity = "1";
            ai("three_a1").style.transition = "opacity 2s";

            ai("three_a2").style.opacity = "1";
            ai("three_a2").style.transition = "opacity 3s";

            ai("three_a3").style.opacity = "1";
            ai("three_a3").style.transition = "opacity 4s";

            ai("three_a4").style.opacity = "1";
            ai("three_a4").style.transition = "opacity 3s";

            ai("three_a5").style.opacity = "1";
            ai("three_a5").style.transition = "opacity 2s";

            ai("three_a6").style.opacity = "1";
            ai("three_a6").style.transition = "opacity 1s";
        } else {
            //top_div.style.display = "none";
        }
        
    }
</script>
<style>
	.desc_img{width:100%;height:400px;}/*#fff8dc*/
	.desc_img_1{width:30%;height:260px;background:;float:left;margin-left:2.5%;margin-top:10px;}
	.img_desc_1{width:250px;height:150px;background:;margin:0 auto;}
	.img_desc_contrs{width:250px;height:150px;margin-top:0px;}
	.text_desc_contrs{
		width:100%;height:95px;background:;text-align:center;font-size:24px;
		line-height:30px;margin-top:10px;color:#005EA8;font-weight: bold;
	}

	@media screen and (max-width:868px){
		.index_content{height:5250px;}
		.desc_img{width:100%;height:970px;}
		.desc_img_1{width:50%;background:;float:left;margin-left:25%;margin-top:20px;}
		.text_desc_contrs{background:;}
	}
	@media screen and (max-width:500px){
		.desc_img_1{width:80%;background:;float:left;margin-left:12%;}
		.img_desc_1{background:;}
	}
</style>

<div style="width:100%;">
	<div class="qw">
	<img style="width:100%" src="{$Think.const.PUBLIC_Q}img/rok01.jpg"/>
	</div>
</div>

<div style="width: 150px;height: 150px;position: absolute;left: 10%;top: 120px;z-index: 1">
	<!--<img src="{$Think.const.PUBLIC_Q}img/034.jpg" style="width: 150px;height:150px" />-->
	<!--<img src="{$Think.const.PUBLIC_Q}img/034.jpg" style="width:70%;height:70%" />-->
</div>
<!--<div id="" class="index_first">
    <div class="frist_text">企服网--企业信息化管理专家</div>
    <div class="index_img_butt btn_link_reg" id="jion" onmouseover="jion()" onmouseout="jionout()">
        <div class="img_butt_1" id="jion2" ></div>
        加入企服网
    </div>
</div>-->

<!-- 售前的模块 begin-->
<div class="supportBox" style="width:100%;background: #fff;border:0px solid #EEEED1">
	<div style="width:98%;margin: auto;border:1px solid #CDCDB4; text-align: center;font-size:2em;height:100%;margin-top: 5px">
		<div style="padding: 20px 0px">企服网能企业解决管理方面的问题</div>
	</div>
	<div style="" class="sup_main">
		<div style="" class="sup_left">
			<div style="width: 100%">
				<div style="" class="left_head head_first"><div style="" class="f_hd">免费</div><div>咨询</div></div>
				<div style="" class="left_head"><div style="" class="f_hd">免费</div><div>设计方案</div></div>
				<div style="" class="left_head"><div style="" class="f_hd">免费</div><div>免费报价</div></div>
				<div style="" class="left_head"><div style="" class="f_hd">全程</div><div>监督</div></div>
			</div>
			<div style="clear: both;height:20px"></div>
			<div style="text-align:left;margin-left:10px;border:0px solid red;clear: both;font-size:16px;">
				<dl>
					<dt>
						<dd>5秒登记，免费诊断企业问题；</dd>
						<dd>免费获取3套解决方案；</dd>
						<dd>报价对比，方案更靠谱，拒绝超预算；</dd>
						<dd>服务过程全程监督，保证解决问题。</dd>
					</dt>
				</dl>
			</div>
			<div style="" class="ipu_frist">
				<input class="username" style="width: 100%;border:0px;height:35px" type="text" placeholder="您的称呼"
				onblur="if(this.value==''){this.value='您的称呼'}" onfocus="if(this.value=='您的称呼'){this.value=''}"
				 />
			</div>
			<div style="" class="ipu_frist">
				<input class="usertell" style="width: 100%;border:0px;height:35px" type="text" placeholder="您的手机号" 
				 onblur="if(this.value==''){this.value='您的手机号'}" onfocus="if(this.value=='您的手机号'){this.value=''}"
				/>
			</div>
			<div style="" class="sup_left_sb">立即申请</div>
			<div style="text-align:left;margin-left:20px;border:0px solid red;margin-top: 30px;font-size: 16px">
				<dl>
					<dt>
						<dd>企业有问题，就上企服网</dd>
						<dd>最专业SAAS产品选用与售后服务平台</dd>
						<dd>数百家公司的共同选择</dd>
					</dt>
				</dl>
			</div>
		</div>
		<div style="" class="sup_right">
			<div style="padding:20px 0px;width:100%;font-size:2em;text-align: center;color:#38B3E9">如果您的企业有这样的问题</div>
			<div class="sub_tips" style="">
				<div style="width:20px;height:20px;background: #fff;float: right;cursor:pointer" class="cha">
					<img style="width: 20px;height:20px" src="{$Think.const.PUBLIC_Q}img/cha.jpg">
				</div>
				<div style="background: ;width:80%;margin: auto;height: 100px;margin-top: 10px">
					<div style="width:90%" class="ipu_frist">
						<input class="username_one" style="width: 100%;border:0px;height:35px" type="text" placeholder="&nbsp;&nbsp;您的称呼" />
					</div>
					<div style="width:90%" class="ipu_frist">
						<input class="usertell_one" style="width: 100%;border:0px;height:35px" type="text" placeholder="&nbsp;&nbsp;您的电话" />
					</div>
				</div>
				<div style="background: #ff5151;width:50%;margin: auto;height: 30px;line-height:30px;cursor:pointer" class="sub_tj">提交</div>
				<div style="width:95%;margin: auto;margin-top: 10px">请留下您的联系方式，您的问题马上就可以得到解决</div>
			</div>
			<div class="sup_right_u" style="overflow:hidden;">
				<div class="right-u">
					<div class="right-u-list" style="margin-top:1px" id="wt_1">
						<input type="hidden" value="" />
						问题1、企服网能企业解决管理方面的问题
						企服网能企业解决管理方面的问题企服网能企业解决管理方面的问题
						企服网能企业解决管理方面的问题
						企服网能企业解决管理方面的问题
						企服网能企业解决管理方面的问题
					</div>
					<div class="right-u-list" id="wt_2">问题2、XXXXXXXXXXXX<input type="hidden" value="" /></div>
					<div class="right-u-list" id="wt_3">问题3、XXXXXXXXXXXX<input type="hidden" value="" /></div>
					<div class="right-u-list" id="wt_4">问题4、XXXXXXXXXXXX<input type="hidden" value="" /></div>
					<div class="right-u-list" id="wt_5">问题5、XXXXXXXXXXXX<input type="hidden" value="" /></div>
				</div>
				<div class="right-u">
					<div class="right-u-list" style="margin-top:1px" id="wt_6">问题6、XXXXXXXXXXXX<input type="hidden" value="" /></div>
					<div class="right-u-list" id="wt_7">问题7、XXXXXXXXXXXX<input type="hidden" value="" /></div>
					<div class="right-u-list" id="wt_8">问题8、XXXXXXXXXXXX<input type="hidden" value="" /></div>
					<div class="right-u-list" id="wt_9">问题9、XXXXXXXXXXXX<input type="hidden" value="" /></div>
					<div class="right-u-list" id="wt_10">问题10、XXXXXXXXXXXX<input type="hidden" value="" /></div>
				</div>
			</div>
		</div>
	</div>
	<div style="" class="sup_sept">
		<div style="padding:10px 20px;width:100%;font-size: 18px;text-align: left;">企业问题解决流程</div>
		<div class="sept-list"><p style="margin-top: 20px">申请服务</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list"><p style="margin-top: 20px">专业客服对接</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list"><p style="margin-top: 20px">三家服务商对接</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list"><p style="margin-top: 20px">问题沟通阶段</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list"><p style="margin-top: 20px">设计方案</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list"><p style="margin-top: 20px">报价对比</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list"><p style="margin-top: 20px">签订合同</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list"><p style="margin-top: 20px">实施服务</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list"><p style="margin-top: 20px">竣工验收</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list"><p style="margin-top: 20px">持续售后</p></div>
	</div>
	
	<!--<div class="container" style="width:100%">
		<div class="row">
			<div class="col-md-12" style="background: #dedef8;font-size: 22px;padding: 20px;text-align: center;">
				企服网能企业解决管理方面的问题
			</div>
		</div>
		<div class="row">
			<div class="col-md-4" style="background: red;">
				<div class="row">
					<span style="padding: 20px;background:pink;margin-left: 5px">免费咨询</span>
					<span style="padding: 20px;background:pink;margin-left: 5px">免费设计方案</span>
					<span style="padding: 20px;background:pink;margin-left: 5px">免费报价</span>
					<span style="padding: 20px;background:pink;margin-left: 5px">全程监督</span>
				</div>
			</div>
			<div class="col-md-8" style="background: green;">
				<div class="row">
					<div class="col-md-12" style="background: red;">全程监督</div>
				</div>
			</div>
		</div>
	</div>-->
</div>

<div class="softwareBox" style="width:100%;background: #fff;margin-top: 10px;">
	<div style="width:98%;margin:auto;border:1px solid #CDCDB4;text-align:center;font-size:2em;height:100%;background: #4074E1">
		<div style="padding: 20px 0px;color: #fff">企服网能企业解决管理方面的问题</div>
	</div>
	<div class="sof_main">
		<div class="sof_left">
			<div class="sofLeft_content">
				<div style="" class="cont-img">
					<img class="cont-img-list" src="{$Think.const.PUBLIC_Q}img/0lt.jpg">
				</div>
				<div class="cont-text">
					第一时间结合您提出的问题， 迅速派出最合适的工程师，保证问题的快速解决。
				</div>
			</div>
			<div class="sofLeft_content">
				<div style="" class="cont-img">
					<img class="cont-img-list" src="{$Think.const.PUBLIC_Q}img/0lt.jpg">
				</div>
				<div class="cont-text">
					结合我们众多经验丰富且技艺精湛的工程师， 来帮助您解决企业管理软件出现的所有问题，为您的企业保驾护航
				</div>
			</div>
			<div class="sofLeft_content">
				<div style="" class="cont-img">
					<img class="cont-img-list" src="{$Think.const.PUBLIC_Q}img/0lt.jpg">
				</div>
				<div class="cont-text">
					您可以通过透明化评价系统实现对工程师服务质量的监督与跟进， 更有效的保障自己的权益，提升满意度!
				</div>
			</div>
			<div class="sofLeft_content">
				<div style="" class="sof_reg">
					立即注册，马上为您服务
				</div>
			</div>
		</div>
		<div class="sof_right">
			<div style="padding:20px 0px;width:100%;font-size:2em;text-align: center">如果您的企业有这样的问题</div>
			<div class="" style="overflow:hidden;">
				<div class="right-f">
					<div class="right-f-list" style="margin-top: 1px;cursor: pointer;">
						问题1、企服网能企业解决管理方面的问题
						企服网能企业解决管理方面的问题
						企服网能企业解决管理方面的问题
					</div>
					<div class="right-f-list">问题2、XXXXXXXXXXXX</div>
					<div class="right-f-list">问题3、XXXXXXXXXXXX</div>
					<div class="right-f-list">问题4、XXXXXXXXXXXX</div>
					<div class="right-f-list">问题5、XXXXXXXXXXXX</div>
				</div>
				<div class="right-f">
					<div class="right-f-list" style="margin-top: 1px">问题6、XXXXXXXXXXXX</div>
					<div class="right-f-list">问题7、XXXXXXXXXXXX</div>
					<div class="right-f-list">问题8、XXXXXXXXXXXX</div>
					<div class="right-f-list">问题9、XXXXXXXXXXXX</div>
					<div class="right-f-list">问题10、XXXXXXXXXXXX</div>
				</div>
			</div>
		</div>
	</div>
	<div style="" class="sof_sept">
		<div style="padding:10px 20px;width:100%;font-size: 18px;text-align: left;">企业问题解决流程</div>
		<div class="sept-list-f"><p style="margin-top: 20px">注册</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list-f"><p style="margin-top: 20px">一键呼叫</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list-f"><p style="margin-top: 20px">工程师对接</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list-f"><p style="margin-top: 20px">提供服务</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list-f"><p style="margin-top: 20px">解决问题</p></div>
		<div class="tj_div">
			<img class="jt_img" src="{$Think.const.PUBLIC_Q}img/jt.jpg">
		</div>
		<div class="sept-list-f"><p style="margin-top: 20px">服务评价</p></div>
	</div>
	<div class="sof-data">
		<div class="sof-data-left">
			<div style="margin-top: 10%;margin-left: 20px">截止到</div>
			<div style="margin-left: 20px">2016年XX月XX日</div>
		</div>
		<div class="sof-data-right">
			<div style="margin-top: 1%;margin-left: 50px">企服网已完成<span style="font-size:1.5em;color:#ff4242">163</span>个客户订单</div>
			<div style="margin-left: 50px"><span style="font-size:1.5em;color:#ff4242">138</span>家企业正在使用企服网</div>
		</div>
	</div>
</div>
<!-- 售前的模块 end -->


<div class="desc_img" style="">
	<div style="width:100%;height:120px;background:;line-height:100px;font-size:28px;text-align:center;color:#000">
		企服网为您提供的服务
		<hr width="50%" color="gray" style="line-height: 20px" />
	</div>
	<div class="desc_img_1">
		<div class="img_desc_1">
			<img class="img_desc_contrs" src="{$Think.const.PUBLIC_Q}img/1-01.jpg" />
		</div>
		<div class="text_desc_contrs" onmousemove="this.style.background='#06CDFF';this.style.color='#fff'" onmouseout="this.style.background='';this.style.color='#005EA8'"><dt>ERP</dt><dt>（用友、金蝶）</dt><dt>售后服务</dt></div>
	</div>
	<div class="desc_img_1">
		<div class="img_desc_1">
			<img class="img_desc_contrs" src="{$Think.const.PUBLIC_Q}img/2-02.jpg" />
		</div>
		<div class="text_desc_contrs" onmousemove="this.style.background='#06CDFF';this.style.color='#fFF'" onmouseout="this.style.background='';this.style.color='#005EA8'"><dt style="padding-top: 10px;">SAAS平台</dt><dt>售前售后服务</dt></div>
	</div>
	<div class="desc_img_1">
		<div class="img_desc_1">
			<img class="img_desc_contrs" src="{$Think.const.PUBLIC_Q}img/manger.jpg" />
		</div>
		<div class="text_desc_contrs" onmousemove="this.style.background='#06CDFF';this.style.color='#fFF'" onmouseout="this.style.background='';this.style.color='#005EA8'"><dt style="padding-top: 10px;">企业管理</dt><dt>咨询服务</dt></div>
	</div>
</div>



<div id="" class="index_two">
    <div class="two_box">
        <div class="index_mid_1 mid_1" style="">
            <div class="mid_b"><img id="rotate" class="mid_img" src="{$Think.const.PUBLIC_Q}img/1112.gif" /></div>
            <div class="mid_a mid_a_1">快速响应</div>
            <div class="mid_a mid_a_2" onmouseover="this.style.background = '#009EE3'" onmouseout="this.style.background = '#fff'">
                <div id="" class="mid_a_a" style="text-align:left">
                    企服网在您提交订单之后，第一时间结合您提出的要求，
					迅速派出最合适的工程师，以最高效的服务回馈您对我们长期的信任与支持！
                </div>
            </div>
        </div>
        <div class="index_mid_1">
            <div class="mid_b"><img id="rotate1" class="mid_img" src="{$Think.const.PUBLIC_Q}img/4444.jpg" /></div>
            <div class="mid_a mid_a_1">优质服务</div>
            <div class="mid_a mid_a_2" onmouseover="this.style.background = '#009EE3'" onmouseout="this.style.background = '#fff'">
                <div id="" class="mid_a_a" style="text-align:left">
				   通过企服网，结合我们众多经验丰富且技艺精湛的工程师，
				   来帮助您解决企业管理软件出现的所有问题，为您提供最优质的服务！
			    </div>
            </div>
        </div>
        <div class="index_mid_1" style="">
            <div class="mid_b"><img id="rotate2" class="mid_img" src="{$Think.const.PUBLIC_Q}img/148.png" /></div>
            <div class="mid_a mid_a_1">用户好评</div>
            <div class="mid_a mid_a_2" onmouseover="this.style.background = '#009EE3'" onmouseout="this.style.background = '#fff'">
				<div id="" class="mid_a_a" style="text-align:left">
					您可以通过透明化评价系统实现对工程师服务质量的监督与跟进，
					更有效的保障自己的权益，提升满意度!
				</div>
            </div>
        </div>
    </div>
</div>
<div class="index_three">
    <div id="" class="three_box">
        <h2 id="three_title" style="color:#fff;opacity: 0;">他们正在使用企服网</h2><hr width="180px" color="#e3e3e3"/>
        <div id="three_a1" style="opacity: 0;" class="three_a" onmouseover="guodu()" onmouseout="guoduout()">
            <div class="three_a_1" style="background:">
                <!-- <div id="xuangzhuang" class="xuanz"><img id="noxuan" class="imgxuan" src="{$Think.const.PUBLIC_Q}img/geli.jpg"/></div> -->
				<div id="xuangzhuang"><img id="noxuan" style="width:90%;height:90px;" src="{$Think.const.PUBLIC_Q}img/geli.jpg"/></div>
            </div>
            <div id="three_a_2">
                <div id="tdown" class="tdown_a" style="">
                    <div style="width:88%;margin:0 auto;font-size:14px;color:#fff;line-height:20px">
						<p><b style="font-size:20px;color:#000">格力电器</b></p>
					   珠海格力电器股份有限公司是集研发、生产、销售、服务于一体的国有控股家电企业，
					   其产品包括家用空调、中央空调、空气能热水器、TOSOT生活电器、晶弘冰箱等。
				   </div>
                </div>
            </div>
        </div>
        <div id="three_a2" style="opacity: 0;" class="three_a" onmouseover="guodu1()" onmouseout="guoduout1()">
            <div class="three_a_1" style="">
                <!-- <div id="xuangzhuang1" class="xuanz"><img id="noxuan1" class="imgxuan" src="{$Think.const.PUBLIC_Q}img/jinbinlianhewuye.jpg"/></div> -->
				<div id="xuangzhuang1"><img id="noxuan" style="width:90%;height:90px;" src="{$Think.const.PUBLIC_Q}img/jinbin.jpg"/></div>
            </div>
            <div id="three_a_2">
                <div id="tdown1" class="tdown_a">
					 <div style="width:88%;margin:0 auto;font-size:14px;color:#fff;line-height:20px">
						<p><b style="font-size:20px;color:#000">津滨联合物业</b></p>
						天津津滨联合物业服务有限公司是津滨发展旗下由多家股东出资、提供高端物业服务以及物业顾问咨询的专业化企业，业务范围涉及物业服务、物业顾问咨询、会所管理、环境清洁咨询等领域
					</div>
                </div>
            </div>
        </div>
        <div id="three_a3" style="opacity: 0;" class="three_a" onmouseover="guodu2()" onmouseout="guoduout2()">
            <div class="three_a_1" style="">
                <!-- <div id="xuangzhuang2" class="xuanz"><img id="noxuan2" class="imgxuan" src="{$Think.const.PUBLIC_Q}img/tianhaoshangmou.jpg"/></div> -->
				<div id="xuangzhuang2"><img id="noxuan" style="width:90%;height:90px;" src="{$Think.const.PUBLIC_Q}img/tianhao.jpg"/></div>
            </div>
            <div id="three_a_2">
                <div id="tdown2" class="tdown_a">
					<div style="width:88%;margin:0 auto;font-size:14px;color:#fff;line-height:20px">
						<p><b style="font-size:20px;color:#000">天浩实业</b></p>
					   天津开发区滨海天浩实业有限公司成立于2008年的主要经营的产品有：办公用品、电脑耗材、劳保用品、五金机电、办公家具等。
					</div>
                </div>
            </div>
        </div>
        <div id="three_a4" style="opacity: 0;" class="three_a" onmouseover="guodu3()" onmouseout="guoduout3()">
            <div class="three_a_1" style="">
                <!-- <div id="xuangzhuang3" class="xuanz"><img id="noxuan3" class="imgxuan" src="{$Think.const.PUBLIC_Q}img/yilan.jpg"/></div> -->
				<div id="xuangzhuang3"><img id="noxuan" style="width:90%;height:90px;" src="{$Think.const.PUBLIC_Q}img/yilan.jpg"/></div>
            </div>
            <div id="three_a_2">
                <div id="tdown3" class="tdown_a">
					<div style="width:88%;margin:0 auto;font-size:14px;color:#fff;line-height:20px">
						<p><b style="font-size:20px;color:#000">天津依兰国际酒店</b></p>
						天津依兰国际商务酒店是按照4星级标准设计建造的集客房、餐饮、娱乐、商务会议为一体的现代化商务休闲酒店。
					</div>
                </div>
            </div>
        </div>
        <div id="three_a5" style="opacity: 0;" class="three_a" onmouseover="guodu4()" onmouseout="guoduout4()">
            <div class="three_a_1" style="">
                <!-- <div id="xuangzhuang4" class="xuanz"><img id="noxuan4" class="imgxuan" src="{$Think.const.PUBLIC_Q}img/yixiang.jpg"/></div> -->
				<div id="xuangzhuang4"><img id="noxuan" style="width:90%;height:90px;" src="{$Think.const.PUBLIC_Q}img/yixiang.png"/></div>
            </div>
            <div id="three_a_2">
                <div id="tdown4" class="tdown_a">
					<div style="width:88%;margin:0 auto;font-size:14px;color:#fff;line-height:20px">
						<p><b style="font-size:20px;color:#000">怡乡春竹</b></p>
						怡乡春竹集团创立于2005年9月，是一家以经营健康养生餐饮为主的大型健康餐饮管理集团。倡导健康的用餐方式，践行健康的饮食理念，主推以新鲜海鲜为主要食材的养生火锅，是中华第九菜系的倡导者！
					</div>
                </div>
            </div>
        </div>
        <div id="three_a6" style="opacity: 0;" class="three_a" onmouseover="guodu5()" onmouseout="guoduout5()">
            <div class="three_a_1" style="">
                <!-- <div id="xuangzhuang5" class="xuanz"><img id="noxuan5" class="imgxuan" src="{$Think.const.PUBLIC_Q}img/beifangzhonglian.jpg"/></div> -->
				<div id="xuangzhuang5"><img id="noxuan" style="width:90%;height:90px;" src="{$Think.const.PUBLIC_Q}img/beifang.jpg"/></div>
            </div>
            <div id="three_a_2">
                <div id="tdown5" class="tdown_a">
					<div style="width:88%;margin:0 auto;font-size:14px;color:#fff;line-height:20px">
						<p><b style="font-size:20px;color:#000">北方中联</b></p>
						北方中联（天津）电子科技有限公司于2014年8月15日在天津工商局登记注册，公司注册资本500（万元）位于天津经济技术开发区，主要经营计算机软硬件开发、转让、服务、咨询等。
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="" class="index_four">
    <div id="" class="">
        <iframe frameborder=0 border=0 width="100%" height="450px" scrolling="no" src="{$Think.const.PUBLIC_Q}tu/index5.html"></iframe>
    </div>
</div>


<!--the new add begin-->
<div id="" class="index_four">
    <div id="" class="">
        <iframe frameborder=0 border=0 width="100%" height="450px" scrolling="no" src="{$Think.const.PUBLIC_Q}tu/index6.html"></iframe>
    </div>
</div>
<!-- add and -->

<div id="" class="index_five">
    <div id="" class="five_1">
        数百家企业正在使用企服网<hr width="200px" />
    </div>
    <div class="five_3" style="">我们每天都为数以百计的客户提供软硬件在内的企业服务</dvi>
        <div class="five_2 btn_link_reg" id="lo" onmouseover="zhuce()" onmouseout="zhuceout()" onclick="window.location.href = 'http://www.baidu.com'">
            立即注册，马上使用
            <div class="five_2_a" id="lo2"></div>
        </div>
    </div>
</div>

<script>
$(function(){
	
	//立即申请
	$('.sup_left_sb').click(function(){
		var name = $('.username').val();
		var tell = $('.usertell').val();
		
		if(name == "您的称呼" && tell == "您的手机号"){
			layer.msg('请输入您的称呼和手机号！',{time:3000});
		}else if(name == "您的称呼" && tell != ""){
			layer.msg('请输入您的称呼！',{time:3000});
		}else if(name != "" && tell == "您的手机号"){
			layer.msg('请输入您的手机号！',{time:3000});
		}else{
			 $.post(
			 	   "<?php echo U('Index/apiapply');?>",
	                  {	
	                  	data_name: $('.username').val(),
	                  	data_phone: $('.usertell').val(),
	                  },
	                  function(ret){
	                     if('ok' == ret.status){
	                        //成功
	                        layer.msg("您的申请已成功提交，稍后客服人员将与您联系！", {time: 3500});
	                     } else {
	                        //失败
	                        layer.msg(ret.msg, {time: 1500});
	                     }
		             },
		             'json'
                );
		}
	});
	
	//控制弹窗申请的显示与否
	$('.right-u-list').click(function(){
		var sd = $(this).attr("id");
		$(this).children("input").val(sd);
		$('.sub_tips').css('display','block');
		$('.username_one').val("");
		$('.usertell_one').val("");
	});
	
	//关闭弹窗
	$('.cha').click(function(){
		$('.sub_tips').css('display','none');
	});
	
	//弹窗申请的提交
	$('.sub_tj').click(function(){
		var name = $('.username_one').val();
		var tell = $('.usertell_one').val();
		//var arr = $('.right-u-list').children("input").val();
		
		if(name == "" && tell == ""){
			layer.msg('您的称呼和手机号不能为空！',{time:1500});
		}else if(name == "" && tell != ""){
			layer.msg('您的称呼不能为空！',{time:1500});
		}else if(name != "" && tell == ""){
			layer.msg('您的手机号不能为空！',{time:1500});
		}else{
			    var sel_aid = $('.right-u-list').children('input'); 
			    var arr = new Array();    
			    $.each(sel_aid,function(i,obj){
			          arr[i] =   $(obj).val();
			    });
			    /*$.post("<?php echo U('Index/test');?>",{arr:arr},function(data){
			    		alert(data);
			    });*/
			 $.post(
			 	   "<?php echo U('Index/apiapply');?>",
	                  {	
	                  	data_name: $('.username_one').val(),
	                  	data_phone: $('.usertell_one').val(),
	                  	arr:arr,
	                  },
	                  function(ret){
	                     if('ok' == ret.status){
	                     	$('.sub_tips').css('display','none');
	                        //成功
	                        layer.msg("提交成功，稍后客服人员将与你联系！", {time: 1500});
	                     } else {
	                        //失败
	                        layer.msg(ret.msg, {time: 1500});
	                     }
		             },
		             'json'
                );
		}
	});

	//立马注册
	$('.sof_reg').click(function(){
		window.location.href = "<?php echo U('Index/reg');?>";
	});
	
	//点击问题跳转到注册页面
	$('.right-f-list').click(function(){
		window.location.href = "<?php echo U('Index/reg');?>";
	});
});

</script>


<script>
(function(){
	var element = document.getElementById("rotate");
	var r = 0;
	var i = 1;
	function rotate(){
		r += i;
		if( Math.abs(r) >= 360 ) i*=1
		element.style.MozTransform = "rotate(" + r + "deg)";
		element.style.webkitTransform ="rotate(" + r + "deg)";
		element.style.msTransform = "rotate(" + r + "deg)";
		element.style.OTransform = "rotate(" + r + "deg)";
		element.style.transform = "rotate(" + r + "deg)";
	}

	var timer = setInterval(rotate,10);

	element.onmouseover = function(){
		clearInterval(timer);
		timer = null;
	};

	element.onmouseout = function(){
		if(timer)return;
		timer = setInterval(rotate,10);
	};
}());

(function(){
	var element = document.getElementById("rotate1");
	var r = 0;
	var i = 1;
	function rotate(){
		r += i;
		if( Math.abs(r) >= 360 ) i*=1
		element.style.MozTransform = "rotate(" + r + "deg)";
		element.style.webkitTransform ="rotate(" + r + "deg)";
		element.style.msTransform = "rotate(" + r + "deg)";
		element.style.OTransform = "rotate(" + r + "deg)";
		element.style.transform = "rotate(" + r + "deg)";
	}

	var timer = setInterval(rotate,10);

	element.onmouseover = function(){
		clearInterval(timer);
		timer = null;
	};

	element.onmouseout = function(){
		if(timer)return;
		timer = setInterval(rotate,10);
	};
}());


(function(){
	var element = document.getElementById("rotate2");
	var r = 0;
	var i = 1;
	function rotate(){
		r += i;
		if( Math.abs(r) >= 360 ) i*=1
		element.style.MozTransform = "rotate(" + r + "deg)";
		element.style.webkitTransform ="rotate(" + r + "deg)";
		element.style.msTransform = "rotate(" + r + "deg)";
		element.style.OTransform = "rotate(" + r + "deg)";
		element.style.transform = "rotate(" + r + "deg)";
	}

	var timer = setInterval(rotate,8);

	element.onmouseover = function(){
		clearInterval(timer);
		timer = null;
	};

	element.onmouseout = function(){
		if(timer)return;
		timer = setInterval(rotate,8);
	};
}());
</script>
