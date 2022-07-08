<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>Tes LifeTech 2022</title>
    <link rel = "icon" href ="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" 
        type = "image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  </head>
  <body>
  
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="https://lifetech.co.id/wp-content/uploads/2019/12/logo-on-dark.png"
   alt="Girl in a jacket" width="100" ></a>
    </div>
    
    <ul class="nav ">
      <li><a href="/" style="color:white"><span class="glyphicon glyphicon-user"></span> Data Pegawai</a></li>
      <li><a href="#" style="color:green"><span class="glyphicon glyphicon-cloud-download"></span> Load Data</a></li>
      <li><a href="https://www.figma.com/file/0dXDL6BvuE1OrBQKuU84i4/Test-LifeTech-2022?node-id=27%3A207" target="_blank" rel="noopener noreferrer" style="color:white"><span class="glyphicon glyphicon-list-alt"></span> FIGMA</a></li>
        
    </ul>
  </div>
</nav>

    <div class="container">
    <h1>Load 1000 Dummy Data</h1>
        <div class="row">
        @if($massage = Session::get('success'))
            <div class="alert alert-success" role="alert">
            {{$massage}}
            </div>
        @endif
            <table class="table table-striped table-bordered " id="example">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Depan</th>
                        <th scope="col">Nama Belakang</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Tanggal Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach($data1 as $row)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$row->first_name}}</td>
                        <td>{{$row->last_name}}</td>
                        <td>{{$row->email }}</td>
                        <td>{{$row->birthdate}}</td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

  </body>
</html>