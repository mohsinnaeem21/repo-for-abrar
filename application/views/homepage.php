<?php
	include_once("layout/headerlink.php");	
?>
    <div class="dashboard-main-wrapper">		
		<?php
			include_once("layout/navegation.php");	
		?>		
		<?php	
			include_once("layout/leftsidebar.php");
		?>		
		<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container dashboard-content ">
					<?php
						$this->load->view($page);
					?>		           	
				</div>
			</div>
		</div>
		<?php
			include_once("layout/footer.php");
		 ?>
    </div>
		 