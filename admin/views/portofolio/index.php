<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my portofolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="<?= baseurl;?>/asset/css/style.css">
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
    <div class="container">
        <a class="navbar-brand" href="#">Fitri Ramadhani</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#about">About Me</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#activity">My Activity</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Me</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<!--akhir navbar-->

<!--jumbotron-->
<?php foreach($data['profile'] as $pro) : ?>
<div class="jumbotron text-center mt-0" style="background-color: #B0E0E6;">
    <img src="<?= baseurl;?>/asset/img/<?= $pro['foto'];?> alt="Fitri Ramadhani" width="200px" class="rounded-circle">
  <h1 class="display-4"><?= $pro['nama'];?></h1>
  <p class="lead"><?= $pro['jabatan'];?> | <?= $pro['perusahaan'];?></p>
</div>
<?php endforeach ?>

<!--akhir jumbotron-->

<!--about-->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-6 text-center">
                <div class="col-sm">
                    <?php foreach($data['about me'] as $ab):?>
                    <p><?=$ab['column1']; ?></p>
                </div>
                <div class="col-sm">
                    <p><?=$ab['column2']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#B0E0E6" fill-opacity="1" d="M0,64L34.3,85.3C68.6,107,137,149,206,170.7C274.3,192,343,192,411,165.3C480,139,549,85,617,74.7C685.7,64,754,96,823,128C891.4,160,960,192,1029,197.3C1097.1,203,1166,181,1234,154.7C1302.9,128,1371,96,1406,80L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>
<!--akhir about-->

<!--activity-->
    <section id="activity">
        <div class="container">
            <div class="row text-center mb-3">
                <?php foreach($data['my activity'] as $pro) :?>
                <div class="col">
                    <h2>My Activity</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="<?= baseurl;?>/asset/img/b.jpg/<?=$pro['foto']; ?> class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $pro['nama_activity'];?></h5>
        <p class="card-text"><?= $pro['ket'];?></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= baseurl;?>/asset/img/c.jpg/<?=$pro['foto']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$pro['nama_activity']; ?></h5>
        <p class="card-text"><?=$pro['ket']; ?></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?= baseurl;?>/asset/img/d.jpg/<?=$pro['foto']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$pro['nama_activity']; ?></h5>
        <p class="card-text"><?=$pro['ket']; ?></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#B0E0E6" fill-opacity="1" d="M0,128L60,138.7C120,149,240,171,360,154.7C480,139,600,85,720,101.3C840,117,960,203,1080,213.3C1200,224,1320,160,1380,128L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </section>
<!--akhir activity-->

<!--contact-->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col-sm">
                    <h2>Contact</h2>
                </div>
            </div>
            <div class="row justify-content-center">
        <form acti0n="<?= baseurl;?>/Portofolio/pesan" method="POST">
            <div class="col-md-6">
            <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" nama="nama" id="nama">
            </div>
            <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" nama="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" nama="pesan" id="pesan" rows="3"></textarea>
            </div>
            <br>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            </br>
        </form>
            </div>
        </div>
    </section>
<!--akhir contact-->

<!--footer-->
<br>
    <footer class="text-center text-black">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#B0E0E6" fill-opacity="1" d="M0,32L80,58.7C160,85,320,139,480,176C640,213,800,235,960,218.7C1120,203,1280,149,1360,122.7L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    <div class="text-center p-3" style="background-color: #B0E0E6 "> © 2022 Copyright
        <a class="text-black" href="#">Fitri Ramadhani</a>
    </div>
    </footer>
</br>
<!--akhir footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>