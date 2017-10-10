


$(function(){



	$('#picktime').mdatetimer({
		mode : 1, //时间选择器模式：1：年月日，2：年月日时分（24小时），3：年月日时分（12小时），4：年月日时分秒。默认：1
		format : 2, //时间格式化方式：1：2015年06月10日 17时30分46秒，2：2015-05-10  17:30:46。默认：2
		years : [1980, 1981, 1982, 1983, 1984, 1985, 1986, 1987, 1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,], //年份数组
		nowbtn : true, //是否显示现在按钮
		onOk : function(){
			//alert('OK');
		},  //点击确定时添加额外的执行函数 默认null
		onCancel : function(){
			//alert('www.sucaijiayuan.com');
		}, //点击取消时添加额外的执行函数 默认null
	});	

	var man = document.getElementById('man');
	var women = document.getElementById('women');

	man.onclick = function(){
		women.className = '';
		man.className = 'selected';
	}

	women.onclick = function(){
		man.className = '';
		women.className = "selected";
	}



});
























