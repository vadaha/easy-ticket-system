<div class="banner">        
<img src="img/banner/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon">
    <div id="slides">
		<div class="slides_container">
			<a href="" title="" target="_blank"><img src="img/banner/slide-1.jpg" width="570" height="270" alt="Slide 1"></a>
			<a href="" title="" target="_blank"><img src="img/banner/slide-2.jpg" width="570" height="270" alt="Slide 2"></a>
			<a href="" title="" target="_blank"><img src="img/banner/slide-3.jpg" width="570" height="270" alt="Slide 3"></a>
			<a href="" title="" target="_blank"><img src="img/banner/slide-4.jpg" width="570" height="270" alt="Slide 4"></a>
			<a href="" title="" target="_blank"><img src="img/banner/slide-5.jpg" width="570" height="270" alt="Slide 5"></a>
			<a href="" title="" target="_blank"><img src="img/banner/slide-6.jpg" width="570" height="270" alt="Slide 6"></a>
			<a href="" title="" target="_blank"><img src="img/banner/slide-7.jpg" width="570" height="270" alt="Slide 7"></a>
		</div>
		<!--<a href="#" class="prev"><img src="img/banner/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
		<a href="#" class="next"><img src="img/banner/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>-->
	</div>
	<img src="img/banner/example-frame.png" width="600" height="341" alt="Example Frame" id="frame">


</div><!--banner-->

<div class="login"></div>

<div>
    为了更好的服务广大客户，我们开发了这套系统。
    In order to streamline support requests and better serve you, we utilize a support ticket system.
    Every support request is assigned a unique ticket number which you can use to track the progress and responses online.
    For your reference we provide complete archives and history of all your support requests. 
    A valid email address is required.
         
    
    
    <a href="<?= Yii::app()->createUrl('ticket/list') ?>">我的易票<?= $msg_info ?></a>
    <a href="<?= Yii::app()->createUrl('ticket/create') ?>">新开易票</a>
</div>
               
           
        
