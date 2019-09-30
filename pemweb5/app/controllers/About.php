<?php

class About extends Controller
{
    public function index($nama = 'Maul', $npm = '17081010040', $jurusan = 'Teknik Informatika')
    {
        $data['judul'] = 'About Me';
        $data['nama'] = $nama;
        $data['npm'] = $npm;
        $data['jurusan'] = $jurusan;

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }

    public function page()
    {
        $data['judul'] = 'My Page';

        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
