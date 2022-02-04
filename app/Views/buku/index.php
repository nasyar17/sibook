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
            <div class="card">
               <div class="card-header">
                  Buku
                  <a href="" class="btn btn-primary btn-sm float-right">New Record</a>
               </div>
               <div class="card-body">
                  <table id="tableBook" class="table table-striped table-bordered table-hover">
                     <thead>
                        <tr>
                           <td>No</td>
                           <td>ID Buku</td>
                           <td>Judul</td>
                           <td>Pengarang</td>
                           <td>Penerbit</td>
                           <td>Tahun</td>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?= $this->endSection(); ?>