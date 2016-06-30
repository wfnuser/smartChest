<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/submit_act.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/clockpicker.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/datepicker.css')?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/fontawesome/css/font-awesome.css')?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/datetime/DateTimePicker.css')?>" />
    
  </head>




    <form class="create-event " id="create_event" method="post" action="<?php echo base_url('chest/submit');?>" accept-charset="utf-8" data-abide="" prevent-submit="true" >
            
            <div class="form-group error" style="border-bottom:0px;margin-bottom:0px;">
                <span class="icon-tag"></span>
                <input type="text" class="form-control" placeholder="账单名称" required data-validation-message="请输入账单主题" data-validation-type="warning" name="Title" value="" maxlength="100" data-invalid="">
            </div>
            <div class="form-group error" style="border-bottom:0px;margin-bottom:0px;">
                <span class="icon-tag"></span>
                <input type="text" class="form-control" placeholder="账单金额" required data-validation-message="请输入账单金额" data-validation-type="warning" name="Money" value="" maxlength="100" data-invalid="">
            </div>
            <div class="form-group error" style="border-bottom:0px;margin-bottom:-1px;">
                <span class="icon-tag"></span>
                <input type="text" class="form-control" placeholder="账单口令" required data-validation-message="请输入账单口令" data-validation-type="warning" name="Token" value="" maxlength="100" data-invalid="">
            </div>

            <div class="create-event-more" style="height:50px;">
                <div class="form-group" style="line-height:100px;">
                    <input style="display:none;" id="event-select-follow" name="Type" value="0"></input>
                    <span class="icon-tag"></span> <input type="text" class="form-control"  placeholder="账单主题" data-validation-message="请输入账单主题" data-validation-type="warning"  value="" maxlength="100" data-invalid="" style="padding-left:29px;" readonly="">
                    <select name="Setting.HdxTags" id="event-select-hdxtag" style="margin-top:10px;  position: absolute;top: 0px;right: 10px;">
                        <option value="吃货联盟" img="/Content/v2.0/img/poster/thumb/es.jpg">吃货联盟</option>
                        <option value="人在旅途" img="/Content/v2.0/img/poster/thumb/business.jpg">人在旅途</option>
                        <option value="影音书画" img="/Content/v2.0/img/poster/thumb/benefit.jpg">影音书画</option>
                        <option value="请求支援" img="/Content/v2.0/img/poster/thumb/social.jpg">请求支援</option>
                        <option value="其他" img="/Content/v2.0/img/poster/thumb/baby.jpg">其他</option>
                    </select>
                </div>
            </div>


            <div class="event-edit">
                <div class="placeholder"><span></span><!-- <p>添加账单详情，让小伙伴更好的了解账单～</p> --></div>
                <textarea class="form-control textarea" contenteditable="" placeholder="添加账单详情，让小伙伴更好的了解账单～" data-validation-message="活动详情不能少于5个字数" data-validation-type="warning" data-abide-validator="minLength" name="Description" required></textarea>
            </div>
        <div id="dtBox"></div>
<!--
            <div class="form-group error">
                <span class="icon-tag"></span>
                <input type="text" class="form-control" placeholder="个人姓名" required="" data-validation-message="请输入活动标题" data-validation-type="warning" name="name" value="" maxlength="100" data-invalid="">
            </div>
            <div class="form-group error">
                <span class="icon-tag"></span>
                <input type="text" class="form-control" placeholder="个人手机" required="" data-validation-message="请输入活动标题" data-validation-type="warning" name="phone" value="" maxlength="100" data-invalid="">
            </div>
            <div class="form-group error">
                <span class="icon-tag"></span>
                <input type="text" class="form-control" placeholder="个人学校" required="" data-validation-message="请输入活动标题" data-validation-type="warning" name="college" value="" maxlength="100" data-invalid="">
            </div>

            <div class="create-event-more open" >
                <h2><div class="pull-right"><span class="icon-arrow-down"></span></div>更多选项</h2>
                    <div>
                        设置为私密账单
                        <div id="isPrivate" class="toggle">
                            <div class="toggle-handle"></div>
                        </div>
                    </div>
                    <div>
                        报名者需要经过您的同意
                        <div id="isAccord" class="toggle">
                            <div class="toggle-handle"></div>
                        </div>
                    </div>
                    <div class="">
                        选择账单类别
                        <select name="Setting.HdxTags" id="event-select-hdxtag">
                            
                            <option value="" img="/Content/v2.0/img/poster/thumb/entertainment.jpg">选择主题</option>
                            <option value="创业" img="/Content/v2.0/img/poster/thumb/es.jpg">创业</option>
                            <option value="商务" img="/Content/v2.0/img/poster/thumb/business.jpg">商务</option>
                            <option value="公益" img="/Content/v2.0/img/poster/thumb/benefit.jpg">公益</option>
                            <option value="社交" img="/Content/v2.0/img/poster/thumb/social.jpg">社交</option>
                            <option value="亲子" img="/Content/v2.0/img/poster/thumb/baby.jpg">亲子</option>
                            <option value="电影" img="/Content/v2.0/img/poster/thumb/movie.jpg">电影</option>
                            <option value="娱乐" img="/Content/v2.0/img/poster/thumb/entertainment.jpg">娱乐</option>
                            <option value="生活" img="/Content/v2.0/img/poster/thumb/life.jpg">生活</option>
                            <option value="音乐" img="/Content/v2.0/img/poster/thumb/music.jpg">音乐</option>
                            <option value="科技" img="/Content/v2.0/img/poster/thumb/tech.jpg">科技</option>
                            <option value="运动" img="/Content/v2.0/img/poster/thumb/sport.jpg">运动</option>
                            <option value="课程" img="/Content/v2.0/img/poster/thumb/course.jpg">课程</option>
                            <option value="校园" img="/Content/v2.0/img/poster/thumb/school.jpg">校园</option>
                            <option value="文化" img="/Content/v2.0/img/poster/thumb/culture.jpg">文化</option>
                            
                            <option value="其他" img="/Content/v2.0/img/poster/thumb/es.jpg">其他</option>
                        </select>
                    </div>
                    <div>
                        用户报名填写项
                        <ul>
                            <li class="btn btn-sm btn-default active actived">姓名</li>
                            <li class="btn btn-sm btn-default active actived">手机</li>
                            <li class="btn btn-sm btn-default">学校</li>
                            <li class="btn btn-sm btn-default">学院</li>
                            <li class="btn btn-sm btn-default">年级</li>
                            <li class="btn btn-sm btn-default">备注</li>
                            <li class="btn btn-sm btn-default">参与人数</li>
                        </ul>
                    </div>
                
            </div>
            <!--<div class="text-center text-muted small">如需设置更多内容请下载APP～</div>-->
            <input id="btn_create_event" type="submit" class="btn btn-primary btn-block btn-lg"  value="确定发布">
        </form>



<style type="text/css">

    .special{
        top:0px; left:38px; color: rgb(159, 153, 181);
    }

</style>

    <script src="<?php echo base_url('js/clockpicker.js')?>"></script>
    <script src="<?php echo base_url('js/datepicker.js')?>"></script>
    <script src="<?php echo base_url('js/jquery-1.10.2.min.js')?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('css/datetime/DateTimePicker.js')?>"></script>


<script>
    $(".event-edit .textarea").bind('input propertychange', function() {
        var word = $(".event-edit .textarea").text();
        if (word != ''){
            $(".event-edit .placeholder p").addClass('display-none');
        }
        else 
            $(".event-edit .placeholder p").removeClass('display-none');
    });
    $(".create-event-more h2").bind('click',function(){
        if($(".create-event-more").hasClass('open'))
        {
            $(".create-event-more").removeClass('open');
        }
        else
        {
            $(".create-event-more").addClass('open');
        }
    })
</script>

<script type="text/javascript">

    $(document).ready(function()
    {
        $("#dtBox").DateTimePicker({
        
            formatHumanDate: function(date)
            {
                return date.day + ", " + date.month + " " + date.dd + ", " + date.yyyy;
            }
        
        });
    });

</script>

<script type="text/javascript">
    $("#event-select-hdxtag").change(function(){  
        var ccode = $(this).val();  
        switch (ccode){
            case("吃货联盟"):
                $("#event-select-follow").val(0);break;
            case("人在旅途"):
                $("#event-select-follow").val(1);break; 
            case("影音书画"):
                $("#event-select-follow").val(2);break;
            case("请求支援"):
                $("#event-select-follow").val(3);break; 
            case("其他"):
                $("#event-select-follow").val(4);break;
        }
        
          
    });   
</script>