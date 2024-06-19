<?php

namespace App\Controllers;

use App\Models\ObatModel;
use CodeIgniter\RESTful\ResourceController;

class ObatController extends ResourceController
{
    protected $obatModel;

    public function __construct()
    {
        $this->obatModel = new ObatModel();
    }

    public function index()
    {
        $data['obat'] = $this->obatModel->findAll();
        return view('obat/index', $data);
    }

    public function show($id = null)
    {
        $data['obat'] = $this->obatModel->find($id);
        if (!$data['obat']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Obat with ID ' . $id . ' not found.');
        }
        return view('obat/show', $data);
    }

    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $this->obatModel->save([
                'nama_obat' => $this->request->getPost('nama_obat'),
                'stock' => $this->request->getPost('stock'),
                'Gambar' => $this->request->getPost('Gambar'),
            ]);
            return redirect()->to('/obat');
        }

        return view('obat/create');
    }

    public function edit($id = null)
    {
        $data['obat'] = $this->obatModel->find($id);
        if (!$data['obat']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Obat with ID ' . $id . ' not found.');
        }

        return view('obat/edit', $data);
    }

    public function update($id = null)
{
    if ($this->request->getMethod() === 'post') {
        $postData = [
            'nama_obat' => $this->request->getPost('nama_obat'),
            'stock' => $this->request->getPost('stock'),
            'Gambar' => $this->request->getPost('Gambar'),
        ];

        // Check if the data is being received correctly
        log_message('debug', 'Post data: ' . json_encode($postData));

        $updateResult = $this->obatModel->update($id, $postData);
        
        // Check if the update query was successful
        if($updateResult) {
            return redirect()->to('/obat');
        } else {
            log_message('error', 'Update failed for ID ' . $id);
            return redirect()->back()->withInput()->with('error', 'Update failed.');
        }
    }

    $data['obat'] = $this->obatModel->find($id);
    if (!$data['obat']) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Obat with ID ' . $id . ' not found.');
    }

    return view('obat/edit', $data);
}


    
    

    public function delete($id = null)
    {
        $this->obatModel->delete($id);
        return redirect()->to('/obat');
    }
}
