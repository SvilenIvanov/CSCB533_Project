<?php $this->view("_Layout/header",$data); ?>
<style>
body {
    background: #E3FFFE
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

</style>

  <div class="page-content page-container" id="page-content">
  <div class="padding">
  <div class="row container d-flex justify-content-center">
  <div class="col-xl-6 col-md-12">
  <div class="card user-card-full">
  <div class="row m-l-0 m-r-0">
  <div class="col-sm-4 bg-c-lite-green user-profile">
  <div class="card-block text-center text-white">
  <div class="m-b-25">
  <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
  </div>
  <h6 class="f-w-600">Svilen Ivanov</h6>
  <p>Web Designer</p>
  <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
  </div>
  </div>
  <div class="col-sm-8">
  <div class="card-block">
  <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
  <div class="row">
  <div class="col-sm-6">
  <p class="m-b-10 f-w-600">Email</p>
  <h6 class="text-muted f-w-400">svilen.ivanov@gmail.com</h6>
  </div>
  <div class="col-sm-6">
  <p class="m-b-10 f-w-600">Phone</p>
  <h6 class="text-muted f-w-400">+359 1 234 5678</h6>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-6">
  <p class="m-b-10 f-w-600">Name</p>
  <h6 class="text-muted f-w-400">Svilen Ivanov</h6>
  </div>
  <div class="col-sm-6">
  </div>
  </div>
  <ul class="social-link list-unstyled m-t-40 m-b-10">
  <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
  <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
  <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>


  <?php $this->view("_Layout/footer"); ?>
  <?php $this->view("_Layout/scripts"); ?>
