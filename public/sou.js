/*
作者:D.Young
主页：https://yyv.me/
github：https://github.com/5iux/sou
日期：2020/11/18
版权所有，请勿删除
*/

$(document).ready(function () {

    $(".wd").focus();

    function post_search_list(keywords) {

        if (keywords == '') {
            $('#word').hide();
            return
        }

        $.get("/api/question?question_content=" + keywords, function ($item) {
            $('#word').empty().show();
            if ($item.length == 0) {
                $('#word').append('<div class="error"> Not find  "' + keywords + '"</div>');
                // $('#word').hide();
            }
            $.each($item, function () {
                $('#word').append('<li data-qid=' + this.question_id + '><svg class="icon" style=" width: 15px; height: 15px; opacity: 0.5;" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg> ' + this.question_content + '</li>');
            })
        });

        // $.ajax({
        //     url: 'https://suggestion.baidu.com/su?wd=' + keywords,
        //     dataType: 'jsonp',
        //     jsonp: 'cb', //回调函数的参数名(键值)key
        //     beforeSend: function () {
        //         $('#word').append('<li>正在加载...</li>');
        //     },
        //     success: function (data) {
        //         $('#word').empty().show();
        //         if (data.s == '') {
        //             $('#word').append('<div class="error"> Not find  "' + keywords + '"</div>');
        //             // $('#word').hide();
        //         }
        //         $.each(data.s, function () {
        //             $('#word').append('<li style="border-bottom: 1px solid white;padding: 4px 0;cursor: pointer"><svg class="icon" style=" width: 15px; height: 15px; opacity: 0.5;" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg> ' + this + '</li>');
        //         })
        //     },
        //     error: function () {
        //         $('#word').empty().show();
        //         //$('#word').append('<div class="click_work">Fail "' + keywords + '"</div>');
        //         $('#word').hide();
        //     }
        // })
    }

    //菜单点击
    $("#menu").click(function (event) {
        $(this).toggleClass('on')
        $(".list").toggleClass('closed');
    });
    $("#content").click(function (event) {
        $(".on").removeClass('on');
        $(".list").addClass('closed');
        $('#word').hide();
    });

    $("#button-submit").click(function (event) {
        $("#menu").trigger('click');
        post_search_list($(".wd").val())
    });


    //当键盘键被松开时发送Ajax获取数据
    $('.wd').keyup(function () {
        post_search_list($(this).val())
    })

    //点击搜索数据复制给搜索框
    $(document).on('click', '#word li', function (e) {
        var word = $(this).text();
        $('.wd').val(word);
        $('#word').show();
        $("#menu").trigger('click');
        $.get("/api/question/" + $(this).data("qid"), function (params) {
            $("#pre-block code").html(hljs.highlightAuto(params.question_answer).value);
        })
    })
});
