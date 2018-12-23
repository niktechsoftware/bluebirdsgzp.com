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
    <img src="<?php echo base_url();?>assets/images/banner-img1.jpg"  title="Blue thoughts in a Blue environs" class="banner" >
    
</div>
<!-- empty element for caption -->
<div id="alt-caption" class="text-center"></div>
            
        </div>
    
            		<a class="mobileMenu" href="#nav"><img src="<?php echo base_url();?>assets/images/mobile_menu.png" alt=""></a>
      
        <div class="valueBox">
        	<div class="container">

              <p> &nbsp;&nbsp;&nbsp;The motive behind the establishment of Blue Bird's International School is to educate the children of the locality through discipline and by making
children, sensitive to the finer aspects of life, to meet the challenges in the future and to comptete with the modern world.
</p><p>&nbsp;&nbsp;&nbsp;The Blue Bird's International School is just beginning its first academic session 2013-14. The School aims at developing essential personality, positive
attitude, skills and behaviour in children. The overall development of the children physically, morally and ethically is our sole aim. Our objective is to train the
students to realize their social responsibilities and acquire leadership.</p>
                
			</div>	
        </div>
        <!--  \ value box / -->
						
       
        <!--  / events box \ -->
       
       <?php $this->load->view("footer")?>
