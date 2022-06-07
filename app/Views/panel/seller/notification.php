<?php
include 'includes/head.php';
include 'includes/header.php';
?>

<div class="aiz-user-panel">

    <div class="card">
        <form class="" id="sort_customers" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col" id="notifications_button">
                    <h5 class="mb-0 h6">Notifications</h5>
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <!-- <div class="py-4 text-center fs-16">No notification found</div> -->

                        <a href="javascript:void(0)" onclick="show_purchase_history_details(51)" class="text-reset">
                            <span class="ml-2">
                             <?php $o['order']?>   
                             <!-- Order code: 20220425-13385590 has been Placed -->
                            </span>
                        </a>
                    </li>
                </ul>


            </div>
        </form>
    </div>

</div>
</div>
</div>
<script>
      $(document).ready(function () {
          $('#notifications_button').click(function () {
              jQuery.ajax({
				url:'update_message_status.php',
				success:function(){
					$('#notifications').fadeToggle('fast', 'linear');
					$('#notifications_counter').fadeOut('slow');
				}
			  })
              return false;
          });
          $(document).click(function () {
              $('#notifications').hide(); 
          });
      });
   </script>
</section>
<?php
include 'includes/footer.php';
?>