<?php
    include'header.php';
?>
  

    <?php

      if (isset($_SESSION['u_id'])) {
          echo"You are logged in".$_SESSION['u_fname'].$_SESSION['u_lname'];
          include'index.html';
      }
    
    ?>
        
        <script>
            function ChangeBackground(x) {
                console.log(x.value);
                var body = document.getElementById('body');
                body.style.backgroundColor = x.value;
            }
        
        </script>
<?php
    include'footer.php';
?>