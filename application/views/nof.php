<?php $this->load->view("header");?>
 <?php $this->load->view("menu");?>
<!--  / wrapper \ -->
<div id="wrapper" style="z-index: -90;">

    <!--  / main container \ -->
    <div id="mainCntr">

        <!--  / banner container \ -->
           	
        <div >
        	<div class="container">
        	<br>
        	<br>
        
        	<table>
        	<tr>
         <td> 
         <h1 style="margin-left:7em;">No Of Facility</h1>
         
         
         <br>
         
         
         <div class="style7">
<style type="text/css">
table tr td{
	padding:6px;
	
}
</style>
   <form method="post" action="mail.php">
					<table>
                    	<tr style="background:none; border:none;">
                        	<td><label>Name</label></td><td><input type="text" name="name" /></td>
                        </tr>
                        <tr style="background:none; border:none;">
                        	<td><label>Mobile No</label></td><td><input type="text" name="mob" /></td>
                        </tr>
                        <tr>
                        	<td><label>Email</label></td><td><input type="text" name="email" /></td>
                        </tr>
                        <tr style="background:none; border:none;">
           <td valign="top"><label>Message</label></td><td><textarea name="msg" rows="5" cols="20"></textarea></td>
                        </tr>
                        <tr>
     <td colspan="2" align="center"><input type="submit" value="Mail Us" /> &nbsp;&nbsp; <input type="reset" value="Reset" /></td>
                        </tr>
                    </table>
                    </form>
</div>
       
                        <br />
                        
        
        <br>
        <br>
    </div>

        </div>
   
         
    </div>
    

         
        
</td></tr>
                
			</table>
		
        		<br><br>
        	<br>
        	
        <br>	
			</div>
        </div>
        <!--  \ value box / -->
						
       
        <!--  / events box \ -->
       
       <?php $this->load->view("footer")?>
