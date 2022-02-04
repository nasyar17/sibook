<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>
<div class="content-header">
   <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0"><?= $title; ?></h1>
      </div>
      <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
         </ol>
      </div>
   </div>
</div>

<!-- Main content -->
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col">
            <h1>haiiii</h1>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection(); ?>