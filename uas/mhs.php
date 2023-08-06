<?php
$data = file_get_contents('data/mhs.json');
$mhs = json_decode($data, true);

$mhs = $mhs["Mahasiswa"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistem Informasi 20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="../uas/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet" />
    <link rel="icon" href="../uas/gambar/logo.jpg" />
</head>

<body>
    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
        <div class="row">
            <img src="../uas/gambar/logo.jpg" class="rounded mx-auto d-block" />
        </div>
        <div class="row mt-3">
            <h1>SI 20</h1>
            <a href="#sosmed" class="btn btn-lg mt-4">Jelajahi</a>
        </div>
    </section>
    <section id="sosmed" class="sosmed">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid justify-content-center">
                    <img src="./gambar/logo.jpg" width="40" height="34" class="d-inline-block align-text-center" />&nbsp;&nbsp;
                    <a class="navbar-brand text-dark" href="#jelajah">
                        SI 20
                    </a>
                    <a class="navbar-brand text-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"> Menu </a>
                </div>
            </nav>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card">
                        <div class="card-header">Istagram</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6"><img src="./gambar/ig.png" class="img-thumbnail mx-auto"></div>
                                <div class="col-6">
                                    <img src="./gambar/follower.png" alt="" height="40" width="40"> 620 Pengikut
                                    <p>Alamat :Jl. Blangbintang Lama No.KM, RW.5, Lampoh Keude,Kuta Baro, Kabupaten Aceh Besar, Aceh 24415</p>
                                    <a href="https://www.instagram.com/himasi_unaya/" class="btn btn-primary">Kunjungi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card">
                        <div class="card-header">Email</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6"><img src="./gambar/Gmail_icon.png" class="img-thumbnail mx-auto"></div>
                                <div class="col-6">
                                    <p style="font-size: medium;">Email: himasiunaya@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="jelajah" class="mhs">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid justify-content-center">
                    <img src="./gambar/logo.jpg" width="40" height="34" class="d-inline-block align-text-center" />&nbsp;&nbsp;
                    <a class="navbar-brand" href="#">
                        SI 20
                    </a>
                    <a class="navbar-brand" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"> Menu </a>
                </div>
            </nav>
            <div class="row mt-4" id="profil">
                <?php foreach ($mhs as $row) : ?>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="../uas/gambar/<?= $row["Foto"] ?>" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row["Nama"] ?></h5>
                                <h5 class="card-title"><?= $row["Prodi"] ?></h5>
                                <a href="" class="btn btn-primary tbl" data-bs-toggle="modal" data-bs-target="#exampleModal">Profile</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data Mahasiswa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanva -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">SI 20</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</div>
                    <div class="dropdown mt-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown button</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="#">SI || 20</a>
    </div>
    <!-- Copyright -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script>
        function loadDataToModal(dataIndex) {
            fetch('data/mhs.json')
                .then(response => response.json())
                .then(data => {
                    let modalBody = document.querySelector('.modal-body');
                    modalBody.innerHTML = '';

                    let item = data.Mahasiswa[dataIndex]; // Access the specific data object based on the dataIndex
                    let itemDiv = document.createElement('div');
                    itemDiv.innerHTML = `
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4"><img src="../uas/gambar/${item.Foto}" class="img-thumbnail"></div>
              <div class="col-md-8">
                <ul class="list-group">
                  <li class="list-group-item"><h2>${item.Prodi}</h2></li>
                  <li class="list-group-item">Nama  : ${item.Nama}</li>
                  <li class="list-group-item">Nim   : ${item.Nim}</li>
                  <li class="list-group-item">Alamat    : ${item.Asal}</li>
                  <li class="list-group-item">Tpt/Tgl lahir : ${item.Tempat}</li>
                  <li class="list-group-item"><a href="${item.Sosmed}" class="btn btn-primary stretched-link">Sosmed</a></li>
                </ul>
              </div>
            </div>
          </div>
        `;
                    modalBody.appendChild(itemDiv);
                })
                .catch(error => console.error('Error data tidak dapat dimuat:', error));
        }

        const myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
        const profileButtons = document.querySelectorAll('.tbl');

        profileButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                loadDataToModal(index); // Pass the index of the clicked item to the function
                myModal.show();
            });
        });
    </script>
</body>

</html>