<div class="profile-sidebar">
 <!-- SIDEBAR USERPIC -->
 <div class="profile-userpic">
      <img src="https://cdn0.iconfinder.com/data/icons/users-android-l-lollipop-icon-pack/24/user-512.png" class="img-responsive" alt="">
</div>
<!-- END SIDEBAR USERPIC -->
<!-- SIDEBAR USER TITLE -->
<div class="profile-usertitle">
      <div class="profile-usertitle-name">
          <?= $username; ?>
     </div>
    <!--  <div class="profile-usertitle-job">
           Developer
     </div> -->
</div>
<!-- END SIDEBAR USER TITLE -->
<!-- SIDEBAR BUTTONS -->
<div class="profile-userbuttons hidden">
      <button type="button" class="btn btn-success btn-sm">Follow</button>
      <button type="button" class="btn btn-danger btn-sm">Message</button>
</div>
<!-- END SIDEBAR BUTTONS -->
<!-- SIDEBAR MENU -->
<div class="profile-usermenu">
      <ul class="nav">
           <li class="<?php if($this->uri->segment('1') == 'my-address') { echo 'active'; } ?>">
                <a href="<?= base_url('my-address'); ?>">
                     <i class="fa fa-address-book" aria-hidden="true"></i>
               My Address </a>
         </li>
         <li class="<?php if($this->uri->segment('1') == 'my-orders') { echo 'active'; } ?>">
          <a href="<?= base_url('my-orders'); ?>">
               <i class="fa fa-cart-plus" aria-hidden="true"></i>
         My Orders </a>
   </li>
   <li class="<?php if($this->uri->segment('1') == 'change-password') { echo 'active'; } ?>">
    <a href="<?= base_url('change-password'); ?>">
         <i class="fa fa-sliders" aria-hidden="true"></i>
   Change Password </a>
</li>
<li>
    <a href="<?= base_url('logout'); ?>" >
         <i class="fa fa-sign-out" aria-hidden="true"></i>
   Logout </a>
</li>
<li>
    <a href="<?= base_url(''); ?>">
         <i class="fa fa-question-circle" aria-hidden="true"></i>
   Help </a>
</li>
</ul>
</div>
<!-- END MENU -->
</div>