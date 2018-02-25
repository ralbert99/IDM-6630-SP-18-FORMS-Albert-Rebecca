<body>
  <main>

      <?php
        if ($file == 'stage.php') {
          require 'forms/update_form.php';
        } else {
          require 'forms/insert_form.php';
        }
          require 'site_list.php';
      ?>


  </main>
</body>
