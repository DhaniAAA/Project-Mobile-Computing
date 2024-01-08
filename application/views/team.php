<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sensor Hujan</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">

    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 170px;
            background-color: #00d4ff;
            /* Warna hijau yang diinginkan */
            padding-top: 1rem;
            color: #000000;
            /* Warna hitam untuk teks */
            overflow-y: auto;
            flex-shrink: 0;
        }

        .main-content {
            margin-left: 30px;
        }

        .nav-link {
            color: #000000;
            /* Warna hitam untuk teks link */
        }

        .table {
            top: 0;
            left: 0;
        }

        .table-container {
            overflow-x: auto;
            margin-top: 5px;
            /* Sesuaikan sesuai kebutuhan untuk memberi ruang antara tabel dan sidebar */
        }

        .table th,
        .table td {
            width: 20px;
        }

        .container-xxl {
            flex: 1;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>

<body class="d-flex flex-column">
    <div class="container-xxl">
        <div class="d-flex flex-row">
            <!-- Sidebar -->
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 170px;">
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="<?php echo base_url('welcome/Datasensor'); ?>" class="nav-link link-light"
                            aria-current="page">
                            <i class="fas fa-database"></i> Data Sensor
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('welcome/kelompok'); ?>" class="nav-link active">
                            <i class="fas fa-users"></i> Kelompok
                        </a>
                    </li>
                </ul>
                <hr>
            </div>

            <!-- Main Content -->
            <div class="col-md-5 main-content text-center mx-auto d-flex align-items-center">
                <div class="row">
                    <div class="col-md mb-5" style="margin-top: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nama Kelompok</h5>
                                <p>Ramadhanu (2104030005)</p>
                                <p>Ramadhani (2104030004)</p>
                                <p>Fahmi Fiddin (2104030048)</p>
                                <p>Muhammad Yusuf Syahbarna (2104030014)</p>
                                <p>Ade Yuga (2104030011)</p>
                                <p>Ahmad Fakhrur Rozi (2104030064)</p>
                                <p>Amrullah Fajri Artha Abdillah (2104030006)</p>
                                <p>Muahmmad Azhar Briliantara (2104030041)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script JavaScript Reload -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                location.reload();
            }, 7000);
        })
    </script> -->
    <!-- Script JavaScript Reload -->

    <!-- Footer -->
    <footer>
        <div class="text-center p-3 bg-light text-dark">
            <p>&copy; 2024 Kelompok 2. All rights reserved.</p>
        </div>
    </footer>

    <!-- Footer -->

    <!-- Bootstrap JS and Popper.js (required for Bootstrap JavaScript components) -->
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="extensions/mobile/bootstrap-table-mobile.js"></script>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="sidebars.js"></script>
</body>

</html>