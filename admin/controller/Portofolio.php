<?php

class Portofolio extends Controller
{
    public function index()
    {
        $data['profile'] = $this->model('PortofolioModel')->getProfile();
        $data['about me'] = $this->model('PortofolioModel')->getAboutMe();
        $data['my activity'] = $this->model('PortofolioModel')->getMyActivity();
        $data['contact'] = $this->model('PortofolioModel')->getContact();
        $this->view('portofolio/index',$data);
        //menargetkan ke indek.php yang ada di folder views/portofolio
    }
    public function pesan()
    {
        if ( $this->model('PortofolioModel')->tampungPesan($_POST) > 0) {
            echo "
            <script>
            alert('Data berhasil dikirim')
            window.location.href= 'http://localhost/portofolio_fitri/portofolio/public/'
            </script>      
            ";
            
        }
        else{
            echo "gagal terkirim
            window.location.href= 'http://localhost/portofolio_fitri/portofolio/public/'
            ";
        }   

    }
}
?>
