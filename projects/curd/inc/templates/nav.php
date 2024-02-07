<div style="float: left;">
  <p>
    <a href="/?task=report">All Students</a> |
    <a href="/?task=add">Add New Student</a> |
    <a href="/?task=seed">Seed </a> |

  </p>
</div>
<div style="float: right;">
  <?php if ( !$_SESSION['login'] ): ?>
  <a href="/auth.php">Log In</a>
  <?php else: ?>
  <a href="/auth.php?logout=true">Log out</a>
  <?php endif;?>
</div>
