<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>发票摇奖</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!--标准mui.css-->
		<link href="/new_lgx/Public/weixin/new_huodong/css/mui.min.css" rel="stylesheet">
		<!--App自定义的css-->
		<!--<link rel="stylesheet" type="text/css" href="../css/app.css" />-->
	</head>

	<body>

		<style>
			.mui-bar-nav.mui-bar .mui-icon{
				color: #FFFFFF;
			}
			.mui-control-content {
				background-color: white;
				min-height: 215px;
			}
			
			.mui-control-content .mui-loading {
				margin-top: 50px;
			}
			
			.mui-bar {
				background: url(/new_lgx/Public/weixin/new_huodong/images/toubu.png);
			}
			
			.mui-col-xs-4 {
				width: 50%;
			}
			
			.mui-slider {
				background-color: #ffffff;
			}
			
			.mui-input-group .mui-input-row {
				border: 1px solid #c8c7cc;
				border-radius: 5px;
				margin: 10px;
			}
			
			.mui-input-group .mui-input-row:after {
				height: 0;
			}
			
			.mui-input-group:before {
				height: 0;
			}
			
			.mui-input-group:after {
				height: 0px;
			}
			
			.mui-btn-block {
				font-size: 18px;
				display: block;
				width: 93%;
				margin-bottom: 10px;
				margin: 0 auto;
				padding: 0;
			}
			.mui-slider .mui-slider-group {
                height: 330px;
                }
		</style>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">发票摇奖</h1>
		</header>
		<div class="mui-content">
			<div class="mui-card-header mui-card-media" style="height:40vw;background-image:url(/new_lgx/Public/weixin/new_huodong/images/muwu.jpg)"></div>
			<p style="margin: 10px;">首次摇奖发票开具时间为2017年8月1日(含)之后，截止时间为2017年9月30日。详情请管制微信公众号。</p>
			<div id="slider" class="mui-slider">
				<div id="sliderSegmentedControl" class="mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
					<a class="mui-control-item" href="#item1mobile">
						参与摇奖
					</a>
					<a class="mui-control-item" href="#item2mobile">
						中奖查询
					</a>
				</div>
				<div id="sliderProgressBar" class="mui-slider-progress-bar mui-col-xs-4"></div>
				<div class="mui-slider-group">
					<div id="item1mobile" class="mui-slider-item mui-control-content mui-active">
						<div id="scroll1" class="mui-scroll-wrapper">
							<div class="mui-scroll">
								<form class="mui-input-group">
									<div class="mui-input-row">
										<label>发票代码</label>
										<input type="text" placeholder="请输入10/12位发票代码">
									</div>
									<div class="mui-input-row">
										<label>发票号码</label>
										<input type="text" placeholder="请输入8位发票号码">
									</div>

									<div class="mui-input-row">
										<label>开票日期</label>
										<input type="date" placeholder="请选择日期">
									</div>
									<div class="mui-input-row">
										<label>开票金额</label>
										<input type="text" placeholder="请输入发票金额">
									</div>
									<div class="mui-input-row">
										<label>手机号码</label>
										<input type="text" placeholder="请输入11位手机号码">
									</div>
									<div style="height: 10px;"></div>
									<button type="button" class="mui-btn mui-btn-primary mui-btn-block"><p style="margin-top:8px;color: #FFFFFF;">提交</p></button>
								</form>
							</div>
						</div>
					</div>
					<div id="item2mobile" class="mui-slider-item mui-control-content">
						<div id="scroll2" class="mui-scroll-wrapper">
							<div class="mui-scroll">
								<form class="mui-input-group">
									<div class="mui-input-row">
										<label>发票代码</label>
										<input type="text" placeholder="请输入10/12位发票代码">
									</div>
									<div class="mui-input-row">
										<label>发票号码</label>
										<input type="text" placeholder="请输入8位发票号码">
									</div>

									<div style="height: 10px;"></div>
									<button type="button" class="mui-btn mui-btn-primary mui-btn-block"><p style="margin-top:8px;color: #FFFFFF;">中奖查询</p></button>
								</form>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
		<script src="/new_lgx/Public/weixin/new_huodong/js/mui.min.js"></script>
		<script>
			mui.init({
				swipeBack: false
			});
			(function($) {
				$('.mui-scroll-wrapper').scroll({
					indicators: true //是否显示滚动条
				});
				//				var html2 = '<ul class="mui-table-view"><li class="mui-table-view-cell">第二个选项卡子项-1</li><li class="mui-table-view-cell">第二个选项卡子项-2</li><li class="mui-table-view-cell">第二个选项卡子项-3</li><li class="mui-table-view-cell">第二个选项卡子项-4</li><li class="mui-table-view-cell">第二个选项卡子项-5</li></ul>';
				//				var html3 = '<ul class="mui-table-view"><li class="mui-table-view-cell">第三个选项卡子项-1</li><li class="mui-table-view-cell">第三个选项卡子项-2</li><li class="mui-table-view-cell">第三个选项卡子项-3</li><li class="mui-table-view-cell">第三个选项卡子项-4</li><li class="mui-table-view-cell">第三个选项卡子项-5</li></ul>';
				var item2 = document.getElementById('item2mobile');
				var item3 = document.getElementById('item3mobile');
				document.getElementById('slider').addEventListener('slide', function(e) {
					if(e.detail.slideNumber === 1) {
						if(item2.querySelector('.mui-loading')) {
							setTimeout(function() {
								item2.querySelector('.mui-scroll').innerHTML = html2;
							}, 500);
						}
					} else if(e.detail.slideNumber === 2) {
						if(item3.querySelector('.mui-loading')) {
							setTimeout(function() {
								item3.querySelector('.mui-scroll').innerHTML = html3;
							}, 500);
						}
					}
				});
				var sliderSegmentedControl = document.getElementById('sliderSegmentedControl');
				$('.mui-input-group').on('change', 'input', function() {
					if(this.checked) {
						sliderSegmentedControl.className = 'mui-slider-indicator mui-segmented-control mui-segmented-control-inverted mui-segmented-control-' + this.value;
						//force repaint
						sliderProgressBar.setAttribute('style', sliderProgressBar.getAttribute('style'));
					}
				});
			})(mui);
		</script>

	</body>

</html>