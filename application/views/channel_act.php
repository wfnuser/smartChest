<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('css/channel_act.css')?>" rel="stylesheet">
  </head>
      <div id="carousel-channel-generic" class="carousel slide" data-ride="carousel">



      <div id="board">
        <a href="<?php echo base_url('Chest/display')?>" class="b_item">
          <i class="b_icon"></i>
          <div class="fl">
            <p>借款记录</p>
            <span>亲兄弟就要明算账</span>
          </div>
        </a>
        <a href="#" class="b_item">
          <i class="b_icon"></i>
          <div class="fl">
            <p>全部账单</p>
            <span>点点滴滴全记录</span>
          </div>
        </a>
      </div>
      <ul id="channel_list">
        <a class="ch_item" href="<?php echo base_url('chest/submit')?>" data-order="3">
          <i class="ch_icon" style="background-position: 0px -140.625px;"></i>
          <div class="fl">
            <p>吃货联盟</p>
            <span>－聚餐、外卖明算钱</span>
          </div>
        </a>
        <a class="ch_item" href="<?php echo base_url('chest/submit')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px -70.3125px;"></i>
          <div class="fl">
            <p>人在旅途</p>
            <span>－提前拼车、一起回家</span>
          </div>
        </a>
        <a class="ch_item" href="<?php echo base_url('chest/submit')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px -70.3125px;"></i>
          <div class="fl">
            <p>影音书画</p>
            <span>－电影、展览全搞定</span>
          </div>
        </a>
        <a class="ch_item" href="<?php echo base_url('chest/submit')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px 0px;"></i>
          <div class="fl">
            <p>请求支援</p>
            <span>－月底将至，全靠舍友</span>
          </div>
        </a>
        <a class="ch_item" href="<?php echo base_url('chest/submit')?>" data-order="1">
          <i class="ch_icon" style="background-position: 0px 0px;"></i>
          <div class="fl">
            <p>其他</p>
            <span>－23333333</span>
          </div>
        </a>


      </ul>
</html>
