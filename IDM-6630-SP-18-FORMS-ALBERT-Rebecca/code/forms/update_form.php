<form class="updateForm" action="db_actions/update.php" method="post">
  <h1>siteBase</h1>
  <input type="text" name="site_name" value="<?php echo $site_to_update['site_name']; ?>">
  <input type="text" name="site_url" value="<?php echo $site_to_update['site_url']; ?>">
  <input type="hidden" name="site_id" value="<?php echo $site_to_update['id']; ?>">
  <input type="submit" value="update site">

</form>
