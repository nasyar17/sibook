$(document).ready(function () {
   var table = $('#buku-table').DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],
      "ajax": {
         "url": "<?php echo site_url('buku/ajaxList') ?>",
         "type": "POST"
      },
      "columnDefs": [{
         "targets": [],
         "orderable": false,
      }, ],
   });
});