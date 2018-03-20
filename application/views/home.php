<div class="container text-center">
  <h1> Home </h1>

  <?php 
    if($this->session->userdata('username')): ?>
      <a href="<?= base_url() ?>/home/logout"> Logout </a>
  <?php endif; ?>
</div>