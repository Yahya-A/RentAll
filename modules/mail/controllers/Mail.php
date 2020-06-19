<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {
    public function index(){
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_user' => 'portgasd.ace955@gmail.com',
            'smtp_pass' => 'portgasD.ace',
            'smtp_port' => 465,
            'crlf'      => "\r\n",
            ];
            $this->load->library('email', $config);
            $this->email->from('portgasd.ace955@gmail.com', 'Pintas ID');
            $this->email->to('ariyahya63@gmail.com');
            // $this->email->attach('File.png');
            $this->email->subject('Kirim Email dengan SMTP Gmail');

            $this->email->message("Ini adalah contoh email CodeIgniter yang dikirim menggunakan SMTP email Google
            (Gmail).<br><br> Klik <strong><a
            href='https://dinsutek.com/masaboe/materi' target='_blank'
            rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

            if ($this->email->send()) {
                echo 'Sukses! email berhasil dikirim.';
            } else {
                echo 'Error! email tidak dapat dikirim.';
            }
    }
}