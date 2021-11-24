<?php

namespace App\Controllers;
use App\Models\EventModel;

use App\Controllers\BaseController;

class EventCtl extends BaseController
{
    public function index()
    {
        //
    }

    public function inputingEvent()
    {
        $eventModel = new EventModel();
        $inputData = [
            'nama_eo'      => $this->request->getVar('namaeo'),
            'nama_acara'  => $this->request->getVar('namacara'),
            'deskripsi'     => $this->request->getVar('desc'),
            'kuota'     => $this->request->getVar('kuota'),
            'harga_normal'      => $this->request->getVar('harga'),
            'harga_referral'       => $this->request->getVar('referal'),
            'komisi_referral'       => $this->request->getVar('komisi'),
        ];
        $inputing = $eventModel->save($inputData);
        return redirect()->to(base_url('panel/event'))->with('success', 'Event berhasil ditambahkan');
    }

    public function deletingEvent($seg1 = false)
    {
        $eventModel = new EventModel();
        $deleting = $eventModel->delete($seg1);
        return redirect()->to(base_url('panel/event'))->with('success', 'Berhasil menghapus event');
    }

    public function updatingEvent($seg1 = false)
    {
        $eventModel = new EventModel();
        $inputData = [
            'id' => $seg1,
            'nama_eo'      => $this->request->getVar('namaeo'),
            'nama_acara'  => $this->request->getVar('namacara'),
            'deskripsi'     => $this->request->getVar('desc'),
            'kuota'     => $this->request->getVar('kuota'),
            'harga_normal'      => $this->request->getVar('harga'),
            'harga_referral'       => $this->request->getVar('referal'),
            'komisi_referral'       => $this->request->getVar('komisi'),
        ];
        $inputing = $eventModel->save($inputData);
        return redirect()->to(base_url('panel/event'))->with('success', 'Berhasil memperbarui event');
    }


}
