
   var ban_btn = document.getElementById('id_bane_btn');
   var unban_btn = document.getElementById('id_unbane_btn');
      ban_val = "<?php echo $banned?>";

       if (ban_val = true) {

       }
       else
       {
           ban_btn.onClick = (function () {
               if (ban_val = true) {
                   ban_btn.innerHTML = "Unbanne - <?php echo $banned?>";
               }
               else
               {
                   ban_btn.innerHTML = "Banne - <?php echo $banned?>";
               }
               return ban_btn;
           });
        }
