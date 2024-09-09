<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{

    protected $BarangModel;

    public function __construct()
    {
        $this->BarangModel = new BarangModel();
    }

    public function index(): string
    {
        $data = [
            'barang' => $this->BarangModel->findAll()
        ];
        return view('homepage', $data);
    }

    public function tambahbarang()
    {
        // Handle file upload
        $file = $this->request->getFile('image');
        $lampiran_path = null;

        if ($file->isValid() && !$file->hasMoved()) {
            // Generate random 32 characters filename
            $newFileName = bin2hex(random_bytes(16)) . '.' . $file->getExtension();

            // Define the path to save the file in the public directory
            $path = FCPATH . 'img/';

            // Make sure directory exists
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Move the file to the new location
            $file->move($path, $newFileName);

            // Get the file name only (without path)
            $lampiran_path = $newFileName;
        }

        $data = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kategori' => $this->request->getVar('kategori'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'merek' => $this->request->getVar('merek'),
            'image' => $lampiran_path,
            'status' => 'tersedia',
        ];

        $this->BarangModel->insert($data);
        return redirect()->to('/')->with('msg-barang', 'Barang Berhasil ditambahkan');
    }

    public function edit($id_barang)
    {
        $result = $this->BarangModel->find($id_barang);

        $data = [
            'title' => 'Edit Form',
            'result' => $result
        ];

        return view('edit_barang', $data);
    }

    public function editbarang()
    {
        $data = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kategori' => $this->request->getVar('kategori'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'merek' => $this->request->getVar('merek'),
            'image' => $this->request->getVar('image'),
            'status' => 'tersedia',
        ];

        $this->BarangModel->save($data); // update data

        return redirect()->to('/')->with('msg-barang', 'Berhasil melakukan edit barang');
    }

    public function delete($id_barang)
    {
        $this->BarangModel->delete($id_barang);
        return redirect()->to('/')->with('msg-barang', 'Berhasil Menghapus Barang');
    }
}
