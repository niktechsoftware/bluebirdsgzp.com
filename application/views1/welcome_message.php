<?php $this->load->view("header");?>
 <?php $this->load->view("menu");?>
<!--  / wrapper \ -->
<div id="wrapper" style="z-index: -90;">

    <!--  / main container \ -->
    <div id="mainCntr">

        <!--  / banner container \ -->
        <div id="bannerCntr">
        
            <div class="logo">
                <div class="container">
                
            		<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt=" BLUE BIRD'S INTERNATIONAL SCHOOL - Green School in Delhi" title="BLUE BIRD'S INTERNATIONAL SCHOOL - Green School in Delhi"></a>
            		
                    
                </div>
            </div>
        
           <div class="cycle-slideshow" 
   
    data-cycle-caption="#alt-caption"
    data-cycle-caption-template="{{alt}}"
    >
    <img src="<?php echo base_url();?>assets/images/banner-img1.jpg" alt="Green thoughts in a green environs" title="Blue thoughts in a Blue environs" class="banner" >
    <img src="<?php echo base_url();?>assets/images/banner-img2.jpg" alt="Collaborative learning and group thinking " title="Collaborative learning and group thinking " class="banner" >
    <img src="<?php echo base_url();?>assets/images/banner-img3.jpg" title="Playing with sand grains of learning" alt="Playing with sand grains of learning"  class="banner" >
    <img src="<?php echo base_url();?>assets/images/banner-img4.jpg" alt="Sheltered, safe and smiles" title="Sheltered, safe and smiles" class="banner" >
    <img src="<?php echo base_url();?>assets/images/banner-img5.jpg" alt="Watering life spring" title="Watering life spring" class="banner" >

</div>
<!-- empty element for caption -->
<div id="alt-caption" class="text-center"></div>
            
        </div>
    
            		<a class="mobileMenu" href="#nav"><img src="<?php echo base_url();?>assets/images/mobile_menu.png" alt=""></a>
      
        <div class="valueBox text-center">
        	<div class="container">

                <h3 class="head-line"><span>Our builders</span></h3>
                
                <div class="hidden-xs">
                    <div class="tablist">
                    
                        <ul  class="row" id="tabs">
                            <li class="col-sm-3"><a class="active" href="#"><img src="<?php echo base_url();?>assets/images/value-img.jpg" alt="Day care" title="Day care"><span class="caption"><span class="line"></span><strong>Day care </strong></span></a></li>
                            <li class="col-sm-3"><a href="#"><img src="<?php echo base_url();?>assets/images/value-img1.jpg" alt="Campus as a live lab" title="Campus as a live lab"><span class="caption"><span class="line"></span><strong>Campus as a live lab </strong></span></a></li>
                            <li class="col-sm-3"><a href="#"><img src="<?php echo base_url();?>assets/images/value-img2.jpg" alt="Mindfulness in education" title="Mindfulness in education"><span class="caption"><span class="line"></span><strong>Mindfulness in education</strong></span></a></li>
                            <li class="col-sm-3"><a href="#"><img src="<?php echo base_url();?>assets/images/value-img3.jpg" alt="Sporting as a way of life" title="Sporting as a way of life"><span class="caption"><span class="line"></span><strong>Sporting as a way of life </strong></span></a></li>
                        </ul>
                    
                        <span id="indicator"></span>
                    
                    </div>
                   
               </div> 

                <div class="visible-xs">
                
                <ul  class="row" id="tabs">
                    	<li class="col-xs-6"><a href="why-choose-us.html"><img src="images/value-img.jpg" alt="Day care" title="Day care"><span class="caption"><span class="line"></span><strong>Day care </strong></span></a></li>
                    	<li class="col-xs-6"><a href="why-choose-us.html"><img src="images/value-img1.jpg" alt="Campus as a live lab" title="Campus as a live lab" ><span class="caption"><span class="line"></span><strong>Campus as a live lab </strong></span></a></li>
                    	<li class="col-xs-6"><a href="why-choose-us.html"><img src="images/value-img2.jpg" alt="indfulness in education" title="indfulness in education"><span class="caption"><span class="line"></span><strong>Mindfulness in education</strong></span></a></li>
                    	<li class="col-xs-6"><a href="why-choose-us.html"><img src="images/value-img3.jpg" alt="Sporting as a way of life" title="Sporting as a way of life"><span class="caption"><span class="line"></span><strong>Sporting as a way of life </strong></span></a></li>
                    </ul>
                
                </div>
                
			</div>	
        </div>
        <!--  \ value box / -->
						
       
        <!--  / events box \ -->
        <div class="eventsBox">
        	
            <div class="container">
            	
                <div class="row">
                	
                    <div class="col-sm-4">
                    	
                        <div class="block event">
                        	
                            <h3>Upcoming Events</h3>
                            
<ul>
    <li>Mango Festival and release of July edition of School Newsletter<br>  <small>July 16, 2016</small></li>
    <li>Language Week<br><small>July 25<sup>th</sup>-29<sup>th</sup>, 2016</small></li>
    <li>Inauguration of Green Gym, Math Lab and Tree House<br><small>August  2016</small></li>
</ul>
                            
           <a class="btn"  style="background-color:#261167; href="event.html">View All</a>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-sm-4">
                    	
                        <div class="block">
                        	
                            <h3>Updates</h3>
                            
<ul>
    <li>School reopens on July 04, 2016 </li>
    <li>Admissions open for 2016-17</li>
    <li>Day care facility available<br>
<small>July, 2016 onwards</small></li>
</ul>
                            
           <a class="btn" style="background-color:#261167; href="update.html">View All</a>
                        </div>
                        
                    </div>
                    
                    <div class="col-sm-4">
                    	
                        <div class="block gallery">
                        	
                            <h3>Remarkable Times </h3>
                            
							<img src="<?php echo base_url();?>assets/images/gallery-thumb.jpg" class="img-responsive" alt="">
                            
                            <img src="<?php echo base_url();?>assets/images/gallery-thumb1.jpg" class="img-responsive" alt="">
                            <a class="btn" style="background-color:#261167; href="gallery.html">View All</a>
                            
                        </div>
                        
                    </div>
                    
                    
                    
                </div>
                
            </div>
            	    	
        </div>
       <?php $this->load->view("footer")?>
