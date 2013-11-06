<?php
?>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
      <script type="text/javascript">
         $(function() {
         /**
         * the element
         */
         var $ui 		= $('#ui_element');
         
         /**
         * on focus and on click display the dropdown, 
         * and change the arrow image
         */
         $ui.find('.sb_input').bind('focus click',function(){
            $ui.find('.sb_down')
               .addClass('sb_up')
               .removeClass('sb_down')
               .andSelf()
               .find('.sb_dropdown')
               .show();
            $ui.find('.sb_input_wrapper').addClass('focused');
         });
         
         /**
         * on mouse leave hide the dropdown, 
         * and change the arrow image
         */
         $ui.bind('mouseleave',function(){
            $ui.find('.sb_up')
               .addClass('sb_down')
               .removeClass('sb_up')
               .andSelf()
               .find('.sb_dropdown')
               .hide();
         });
         $ui.find('.sb_input').bind('unfocus', function(){
            $ui.find('.sb_input_wrapper').removeClass('focused');
         });
         
         /**
         * selecting all checkboxes
         */
         $ui.find('#search_all').bind('click',function(){
            $(this).parent().siblings().find(':checkbox').attr('checked',this.checked).attr('disabled',this.checked);
         });
         });
      </script>	
	</body>
</html>
