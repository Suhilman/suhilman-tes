<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <title>Tes LifeTech 2022</title>
  </head>
  <body>
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-3">
                
                    <div class="card-body">
                    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                        <h4>Create Data</h4>
                    @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="nama" id="nama"  aria-describedby="nama" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                        <select class="form-select form-select-lg mb-3" name="jk" aria-label=".form-select-lg example" required>
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" name="notelpon" id="notelpon" aria-describedby="notelpon" placeholder="No. Telephone" required>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <button type="submit" class="btn btn-primary">SAVE</button>
                    </form>
                </div>

            
                </div>
            </div> 
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->


  </body>
</html>