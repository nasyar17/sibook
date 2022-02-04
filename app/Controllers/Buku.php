<?php namespace App\Controllers;

use App\Models\m_Buku;
use Config\Services;

class Buku extends BaseController
{
   public function index()
   {
      $data = [
         'title' => 'Data Buku'
      ];

      return view('buku/index', $data);
   }

   public function ajaxList()
   {
      $request = Services::request();
      $datatable = new m_Buku($request);

      if ($request->getMethod(true) === 'POST') {
         $lists = $datatable->getDatatables();
         $data = [];
         $no = $request->getPost('start');

         foreach ($lists as $list) {
            $no++;
            $row = [];
            $row[] = $no;
            $row[] = $list->buku_id;
            $row[] = $list->buku_judul;
            $row[] = $list->buku_pengarang;
            $row[] = $list->buku_penerbit;
            $row[] = $list->buku_tahun;
            $data[] = $row;
         }

         $output = [
            'draw' => $request->getPost('draw'),
            'recordsTotal' => $datatable->countAll(),
            'recordsFiltered' => $datatable->countFiltered(),
            'data' => $data
         ];

         echo json_encode($output);
      }
   }
}
