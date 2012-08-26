<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/banner.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<script src="js/jquery-1.4.4.min.js"></script>
    <script src="js/slides.min.jquery.js"></script>
    <script>
    		$(function(){
    			$('#slides').slides({
    				preload: true,
    				preloadImage: 'img/banner/loading.gif',
    				play: 5000,
    				pause: 2500,
    				hoverPause: true
    			});
    		});
    	</script>
    <script language="javascript">
    	function qiehuan(num){
    		for(var id = 0;id<=8;id++)
    		{
    			if(id==num)
    			{
    				document.getElementById("qh_con"+id).style.display="block";
    				document.getElementById("mynav"+id).className="nav_on";
    			}
    			else
    			{
    				document.getElementById("qh_con"+id).style.display="none";
    				document.getElementById("mynav"+id).className="";
    			}
    		}
    	}
    </script>
	
</head>

<body>
<!--<div class="header-bar"></div>-->
<div id="global-box">
    <div id="header">
        <div class="logo"><img src="http://img03.taobaocdn.com/tps/i3/T1ogqgXfXeXXXXXXXX-168-42.png" /> </div>
        <div class="search"></div>       
    </div><!--header-->
    
    <div class="nav">        
    <div id=menu_out>
  <div id=menu_in>
    <div id=menu>
      <UL id=nav>
        <LI><A class=nav_on id=mynav0 onmouseover=javascript:qiehuan(0) href="<?= Yii::app()->createUrl('ticket/index') ?>"><SPAN>首 页</SPAN></A></LI>
        <LI class="menu_line"></LI>
        <li><a href="#" onmouseover="javascript:qiehuan(1)" id="mynav1" class="nav_off"><span>菜单</span></a></li>        
      </UL>
      <div id=menu_con>
        <div id=qh_con0 style="DISPLAY: block">
          <UL>
            <LI><?= Yii::app()->user->isGuest ? '欢迎您.': '欢迎您'.Yii::app()->user->getState('user_name') ?></LI>
          </UL>
        </div>
        <div id=qh_con1 style="DISPLAY: none">
          <UL>
            <LI><a href="#"><span>栏目名称4</span></A></LI>
            <LI class=menu_line2></LI>
            <LI><A href="#"><SPAN>栏目名称5</SPAN></A></LI>
            <LI class=menu_line2></LI>
            <LI><A href="#"><SPAN>栏目名称6</SPAN></A></LI>
          </UL>
        </div>
        <div id=qh_con2 style="DISPLAY: none">
          <UL>
            <LI><a href="#"><span>栏目名称7</span></A></LI>
            <LI class=menu_line2></LI>
            <LI><A href="#"><SPAN>栏目名称8</SPAN></A></LI>
            <LI class=menu_line2></LI>
            <LI><A href="#"><SPAN>栏目名称9</SPAN></A></LI>
          </UL>
        </div>        
      </div>
    </div>
  </div>
</div>        
    
    </div><!--menu-->
    
    
    <div class="pageBody layout">
    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif?>
    
    <?php echo $content; ?></div>

    
    <div id="footer">
               
        <p>淘宝网 版权所有 2012</p>
        <p>Email:me@hihans.com</p>
        <p>上海市嘉定区张掖路333号 瑞尔大厦701</p>
        <p>Copyright &copy; wdtxl.com All rights reserved.</p>
    </div><!--footer-->    
</div><!--global-box-->
</body>
</html>
