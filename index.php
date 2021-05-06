<?php require_once __DIR__.'/vendor/autoload.php'; ?>

<html lang="en">
    <head>
        <title>Alumagubi PHP Test</title>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script
                src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
                integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
                crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

        <?php
            $page = (isset($_GET['p'])) ? $_GET['p'] : 1;
            echo '<script>const page = '. $page .'</script>';
        ?>

        <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <header class="mb-4 border-bottom py-3">
            <div class="container d-flex flex-column flex-md-row align-items-center ">
                <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
                    Alumagubi PHP Test
                </a>
                <nav class="d-inline-flex mt-0 mt-md-0 ms-md-auto"></nav>
            </div>
        </header>
        <main class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="pagination-area">
                <nav>
                    <ul class="pagination">

                    </ul>
                </nav>
            </div>
        </main>
    </body>
</html>
