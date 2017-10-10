var common = function () {
    this.init();
};

// 全局变量
// 域名
common.prototype = {
    /* 初始化函数 */
    init: function () {
        var _self = this;
        /* 初始化功能 */
        _self.commonFn($('body'));
        _self.run();
    },
    /** AJAX请求函数--传参数获取数据（组原始的AJAX请求封装）
     * 全部以这个AJAX接口为准   （c此接口默认以POST请求，GET请求须传入参数）
     * @param  {[string]} url [拼接请求地址的后半部分请求接口]
     * @param  {[object]} data [以JSON对象传入需要请求的字段]
     * @param  {[function]} callback [回调函数]
     * @param  {[string]} type [接口请求类型，不传默认POST]
     */
    ajax: function (url, data, callback, type) {
        var _self = this;
        $.ajax({
            type: type || "POST",
            url: saasCtx + url,
            timeout: 120000, //超时时间设置，单位毫秒
            data: data,
            async: true,
            dataType: "json",
            cache: false,
            beforeSend: function (xhr) {
                xhr.withCredentials = true;
                if (!type) {
                    xhr.setRequestHeader("Content-Type", "application/json");
                }
            },
            success: function (data, status, xhr) {
                /* 接口请求超时问题 */
                if (data.errorCode == 200) {
                    callback(data, "success");
                }
                if (data.errorCode != 200 && data.errorCode != 2000) {
                    callback(data, 'other')
                }
                if (data.errorCode == 2000) {
                    callback(data, 'wait');
                }
                /* 后台提供字段，判别错误产生是否为后台处理错误 */
                // if (data.status == 1) {
                //     if (data.data.message) {
                //         _self.tips({
                //             msg: data.data.message
                //         })
                //     } else {
                //         callback(data, "success");
                //     }
                // } else {
                //     console.log('请求成功，服务器返回错误！原因：' + data.message);
                // }
            },
            error: function (data, status, xhr) {
                /* 接口请求超时问题 */
                if (data.statusText == "timeout") {
                    // console.log('接口请求超时，请尽快处理接口问题！！！');
                    return;
                }
                callback(data, "error");
            }
        });
    },
    /**
     * 原生上传，动态绑定节点，form表单提交 
     * @param  {[object]} $obj [传入对应的整体对象，最外层对象, 这个定义好后一定不能产生变动]
     * @param  {[string]} selector [传入对应的选择器class， input type=file 那个节点]
     * @param  {[string]} url [传入上传图片的接口地址]
     * @param  {[function]} beforeSend [回调函数, 上传之前执行，提前校验，成功返回true,不成功返回false]
     * @param  {[function]} callback [回调函数]
     */
    uploadFile: function ($obj, selector, beforeSend, url, callback) {
        $obj.off('change.upFile').on('change.upFile', selector, function (e) {
        $obj.find(selector).eq(0)
            var fileList = e.originalEvent.target.files;
            /* 上传之前进行校验 */
            if(!beforeSend(e.originalEvent.target.files)) {return false};
            $.each(fileList, function (i, f) {
                if (/^image/.test(f.type)) {
                    var xhr = new XMLHttpRequest();
                    xhr.open("post", url, true);
                    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                }
                //模拟数据
                var fd = new FormData();
                fd.append('file', f);
                xhr.send(fd);
                xhr.addEventListener('load', function (e) {
                    var r = JSON.parse(e.target.response);
                    if(r.errorCode == '200') {
                        callback('success', r);
                        /* 上传完成后清空input 不然同一个文件无法连续上传*/
                        $obj.find(selector).val('');
                    }
                });
            });
        });
    },
    /**
     * @param [{Object}] $_obj  传入需要校验输入框 父盒子对象
     */
    commonFn: function ($_obj) {
        /* 设置输入框提示信息显示 以及字数跟随变化 */
        $_obj.off('input propertychange').on('input propertychange', '.static-change', function () {
            // 校验必输输入浮点数 为input框 添加  static-change pattern-float 类名即可 前提必须有 static-change 类名
            if($(this).hasClass('pattern-float')) {
                $(this).val($(this).val().replace(/[^(\d+)|\.]|\.(?=\.)|^(\.).*/g, '').replace(/(\d\.)\./g,'$1').replace(/(\d+\.\d\d).*/g,'$1'));
            }
            // 校验必须输入整数  为input框 添加  static-change pattern-int 类名即可 前提必须有 static-change 类名
            if($(this).hasClass('pattern-int')) {
                $(this).val($(this).val().replace(/[^(\d+)]|^0.*/g, ''));
            }
            if($(this).hasClass('money')) {
                $(this).val($(this).val().replace(/(^\d.*)/g,'￥$1'));
            }
            if($(this).hasClass('no-space')) {
                $(this).val($(this).val().replace(/\s/g,''));
            }
            if($(this).hasClass('num')) {
                $(this).val($(this).val().replace(/[^(\d+)]|^0.*/g, ''));
            }
            if($(this).hasClass('num-or-XY')) {
                $(this).val($(this).val().replace(/[^\d|X|Y]+?/gi, ''));
            }
        });
    },
    /**
     * @param [{Object}] data 传入弹窗需要的data对象
     * @param [{Function}] callback  传入对应的回调函数
     */
    statusTips: function (data, callback) {
        var str = [
            '<div class="tips-mask tips info-state">',
                '<div class="cover"></div>',
                '<div class="niu-tips ">',
                    '<div class="closed"><i class="icon-close"></i></div>',
                    '<div class="tips-message">',
                        '<div><i class="icon-success"></i>提交成功</div>',
                    '</div>',
                    '<div class="info">',
                        '<p>您可以点击额度计算，</p>',
                        '<p>计算出您能拿到的借款额度！</p>',
                    '</div>',
                    '<div class="button-box">',
                        '<div class="submit-opt btn-common">额度计算</div>',
                    '</div>',
                '</div>',
            '</div>',
        ].join('');
        /* 获取弹窗对象 */
        var $commonTips = $('.info-state');
        $commonTips.length && $commonTips.remove();
        $('body').append(str);
        $commonTips = $('body').find('.info-state');
        /* 点击关闭 */
        $commonTips.off('click.tips').on('click.tips', '.niu-tips .closed', function () {
            _clear ()
        });
        $commonTips.off('click.btn').on('click.btn', '.submit-opt', function () {
            _clear ()
            callback();
        });

        /* 关闭函数 */
        function _clear () {
            $commonTips.length && $commonTips.remove();
            $commonTips.off('click');
        };
    },
    /**
     * @param [{Object}] data 传入弹窗需要的data对象
     * @param [{Function}] callback  传入对应的回调函数
     */
    drawMoney: function (data, callback) {
        var str = [
            '<div class="tips-mask tips qrcode">',
                '<div class="cover"></div>',
                '<div class="niu-tips ">',
                    '<div class="closed"><i class="icon-close-1"></i></div>',
                    '<div class="tips-message">',
                        '<i class="icon-draw"></i>',
                        '<p>您好，请联系微信客服进行提现！</p>',
                    '</div>',
                    '<div class="info">',
                        '<p class="title">微信号 :'+data.title+'</p>',
                        '<div class="qrcode"><img src="'+data.qrcode+'" style="width:100%;height:100%"></div>',
                        '<p class="info-tip">扫一扫，一键联系客服微信</p>',
                    '</div>',
                '</div>',
            '</div>',
        ].join('');
        /* 获取弹窗对象 */
        var $commonTips = $('.qrcode');
        $commonTips.length && $commonTips.remove();
        $('body').append(str);
        $commonTips = $('body').find('.qrcode');
        /* 点击关闭 */
        $commonTips.off('click.tips').on('click.tips', '.closed', function () {
            _clear();
        });

        /* 关闭函数 */
        function _clear () {
            $commonTips.length && $commonTips.remove();
            $('body').off('click');
        };
    },
    /**
     * 点击其中一个下拉菜单时，其余下拉菜单均会折叠
     * 点击可调用AJAX回调、点空白区域会折叠、不能同时打开多个
     * @param {[object]} $obj [传入对应的jquery对象]
     * @param  {[function]} callback [成功后传回对应的回调]
     */
    bindSelectBox: function ($obj, callback) {
        $obj.off('click.select-common').on('click.select-common', '.selectbox p', function (e) {
            if($obj.find('.selectbox p').hasClass('cancel-select-box-common')) {
                return false;
            }
            /* 同一时间只能显示一个 */
            var $cur = $(e.target).parents('.selectbox');
            $.each($obj.find('.selectbox'), function (i, _) {
                if(!$(_).is($cur)) {
                    $(_).find('ul').hide();
                    $(_).find('p').removeClass('on'); 
                }
            });
            /**
             * @param  {[object]} e [当前事件点击对象]
             * @param  {[object]} this [传入点击节点对象]
             * @param  {[function]} callback [成功后传回对应的回调，必须填写，调用时建议填写 selectCallback]
             */
            callback(e, $(this), function(flag) {
                !flag && $(document).trigger('click.select-box-common');
                flag && $(document).off('click');
            });

            /* 点击空白区域折叠 */
            $(document).off('click.select-box-common').on('click.select-box-common', function (e) {
                if($obj.find('.selectbox p.on').hasClass('cancel-select-box-common')) {
                    return;
                }
                
                if(!$(e.target).parents('.selectbox').length) {
                    $obj.find('.selectbox p.on').nextAll('ul').hide();
                    $obj.find('.selectbox p.on').removeClass('on');
                    $(document).off('click.select-box-common');
                }
            });
        });
    },
    run: function () {
    },
}

var common = new common();