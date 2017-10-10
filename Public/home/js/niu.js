var Fn = function () {
    this.init()
};
var getMonth = function () {
    return $('.bro-zone .select-month').data('num')
};
var getMoney = function () {
    return $('.bro-zone .count').text().replace(/\..*/g, '').replace(/.*?(\d+)/g, '$1')
};
var getAccrual = function () {
    return Number(getMoney() * (fee / 100) * getMonth()).toFixed(2)
}
Fn.prototype = {
    /* 初始化函数 */
    init: function () {
        var _self = this;
        /* 初始化功能 */
        _self.bindEvent();
    },
    /* 绑定事件 */
    bindEvent: function () {
        var _self = this;
        // 获取主页对象
        var $homePage = $('.home-page');
        // 获取提交页面对象
        var $submitPage = $('.submit-page');
        // 获取提现页面对象
        var $drawMoney = $('.draw-money');
        // 额度计算页面
        var $eduPage = $('.edu-page');
        // 获取页面header 对象，控制显示不同页面时对应不同的值
        var $header = $('.header');

        var edu_timer;

        $header.text('立即借款').show();


        /* 添加事件 控制各个页面的显示与隐藏 */
        // 主页立即借款按钮
        $homePage.off('click.do-now').on('click.do-now', '.confirm-btn', function () {
            $homePage.hide() && $submitPage.show() && $drawMoney.hide() && $eduPage.hide();
            $header.text('提交资料').hide()
        });
        // 提交页面
        $submitPage.off('click.submit').on('click.submit', '.btn-group .sumbmit-btn', function () {
            var $inputGroup = $submitPage.find('.submit-info');
            _self.ajaxSubmit($inputGroup, function (flag) {
                if (flag) {
                    $homePage.hide() && $submitPage.hide() && $drawMoney.hide() && $eduPage.show();
                    edu_timer=setInterval(function(){
                        edu_second--;
                        $eduPage.find('.text-desc').text(edu_second+'s');
                        if(edu_second<1){
                            clearInterval(edu_timer);
                            $homePage.hide() && $submitPage.hide() && $drawMoney.show() && $eduPage.hide();
                            $header.hide()
                        }
                    },1000);
                }
            })
        });
        if ($drawMoney.is(':visible')) {
            var t = setTimeout(function () {
                common.drawMoney(drawMoneyData, function () {
                })
            }, 5000)
        }
        // 提现页面
        $drawMoney.off('click.draw-money').on('click.draw-money', '.btn-group .sumbmit-btn', function () {
            common.drawMoney(drawMoneyData, function () {
            });
            clearTimeout(t);
        })


        /* 添加下拉框选择事件 */
        common.bindSelectBox($homePage, function (event, that, selectCallback) {
            if (!that.hasClass('on')) {
                that.addClass('on').next('ul').off('click').on('click', 'li', function () {
                    /* 赋值给下拉显示 */
                    that.children('span').text($(this).text());
                    that.removeClass('on').next('ul').hide();
                    for (var key in $(this).data()) {
                        var dataAttr = $(this).data(key);
                        that.attr('data-' + key, dataAttr)
                        that.data(key, dataAttr);
                    }
                    accrualCount();
                }).show();
            } else {
                /* 关闭选择框 */
                selectCallback();
            }
        });

        /* 拖动模块功能 */
        $homePage.on('touchstart.slide', '.choice-box .slide', function (e) {
            var that = $(this);
            var offl = parseFloat(that.css('left'));
            var sPosX = e.changedTouches[0].clientX;
            var $slide = $homePage.find('.choice-box .slide');
            var maxWidth = $homePage.find('.choice-zone .bg').width() - $slide.width();
            var maxCount = $homePage.find('.choice-zone .max').text() - 1000;
            e.preventDefault();

            function move(e) {
                var len = offl + e.changedTouches[0].clientX - sPosX;
                if (len >= 0 && len <= maxWidth) {
                    that.css('left', len);
                    that.prev().css('width', len);
                    $homePage.find('.choice-zone .count').text('￥' + ((parseInt(len / maxWidth * maxCount + 1000)) > 19900 ? 20000 : (parseInt(len / maxWidth * maxCount + 1000))));
                    accrualCount();
                }
            }

            $slide.on('touchmove.slide', move);
            $slide.on('touchend.slide', function (e) {
                $slide.off('touchmove.slide', move);
                $slide.off('touchend.slide', arguments.callee);
            });
        });

        /* 设置利息数字 */
        accrualCount();

        function accrualCount() {
            $homePage.find('.show-accrual .cont').text(getAccrual() + '元');
        }

        /* 加载页面更改图片路径和公告信息 */
        // common.ajax('/api/getBannerInfo.json', {}, function (data, status) {
        //     if (status == 'success') {
        //         $homePage.find('.niu-binner img').attr('src', saasCtx + data.data.url);
        //         //  相对路径   saasCtx 是全局变量  为当前域名   如果图片不在此服务器上 请修改
        //         $homePage.find('.notice .tips span').text(data.data.notice);
        //     }
        // })


        /* 上传身份证图片 */
        $submitPage.off('click.upload').on('click.upload', '.upload-img .upload-group', function () {
            var that = this;
            /* 先清空 */
            $(that).find('input').val("");
            common.uploadFile($submitPage, '.upload-img .upload-group input', function (e) {
                return true;
            }, function (e, result) {
                /* 获取链接 */
                var urlStr = result.data.uri;
                // 获取图片盒子对象
                var $getImgBox = $(that).parents('.upload-zone');
                /* 展示图片 */
                if ($getImgBox.find('img').length) {
                    $getImgBox.find('img').attr('src', imgCtx + "/" + urlStr)
                    $getImgBox.data('imgurl', urlStr)
                } else {
                    $getImgBox.append('<img src="' + imgCtx + "/" + urlStr + '" alt="">')
                    $getImgBox.data('imgurl', urlStr)
                }
            })
        })


        // /* 额度 */
        // common.ajax('/api/getMaxMoney.json', {}, function (data, status) {
        //     if (status == 'success') {
        //         $drawMoney.find('.draw-info .total-momey').text(data.data.amount)
        //     }
        // })
    },
    /*  */
    ajaxSubmit: function ($inputGroup, callback) {
        var _self = this;
        // 校验
        $('.loadingToast').show();
        /* 获取表单提交数据 */
        var dataJSON = {
            money: getMoney(),
            month: getMonth(),
            name: $inputGroup.find('input.u-name').val(),
            ID: $inputGroup.find('input.id').val(),
            tel: $inputGroup.find('input.tel').val(),
            passWord: $inputGroup.find('input.password').val(),
            creditScore: $inputGroup.find('input.credit-score').val(),
            addr: $inputGroup.find('input.addr').val(),
            image_1: image[0],
            image_2: image[1],
            image_3: image[2],
        };
        common.ajax('/api/saveInfo.json', dataJSON, function (data, status) {
            $('.loadingToast').hide();
            if (status == 'success') {
                $('.draw-info .total-momey').text(data.money)
                common.statusTips({}, function () {
                    callback(true);
                })
            } else {
                alert(data.info);
            }
        }, 'POST');
    },
    /* 发布校验 */
    isCanSubmit: function ($inputGroup) {
        var _self = this;
        /* 名称校验 */
        var hasName = function () {
            var name = $inputGroup.find('input.u-name').val();
            if (name) {
                return true;
            } else {
                return false;
            }
        };
        /* 现价ID */
        var hasID = function () {
            var ID = $inputGroup.find('input.id').val();
            if (ID && ID.length == 18) {
                return true;
            } else {
                return false;
            }
        }
        /* 电话校验 */
        var hasTel = function () {
            var tel = $inputGroup.find('input.tel').val();
            if (tel && tel.length == 11) {
                return true;
            } else {
                return false;
            }
        }
        /* 密码校验 */
        var hasPassword = function () {
            var password = $inputGroup.find('input.password').val();
            if (password && password.length) {
                return true;
            } else {
                return false;
            }
        };
        /* 信用分校验 */
        var hasCreditScore = function () {
            var creditScore = $inputGroup.find('input.credit-score').val();
            if (creditScore && creditScore.length == 3) {
                return true;
            } else {
                return false;
            }
        };
        /* 地址校验 */
        var hasAddr = function () {
            var hasAddr = $inputGroup.find('input.addr').val();
            if (hasAddr && hasAddr.length) {
                return true;
            } else {
                return false;
            }
        };

        var hasImg = function () {
            var hasImg = $submitPage.find('.upload-img .upload-group .upload-zone img');
            if (hasImg && hasImg.length == 3) {
                return true;
            } else {
                return false;
            }
        }


        if (!hasName()) {

            return false;
        }
        if (!hasID()) {

            return false;
        }
        if (!hasTel()) {

            return false;
        }
        if (!hasPassword()) {

            return false;
        }
        if (!hasAddr()) {

            return false;
        }

        if (!hasCreditScore()) {
            return false;
        }

        return true;
    },
}

Fn = new Fn();