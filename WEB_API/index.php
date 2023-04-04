<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEB_API</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <h3 class="text-center"> ABSENSI KELAS TI 21 A3<br>
    <div class="container">
      <table class="table table-striped table-hover table-bordered text-center">
        <hr>

        <thead class='table-info'>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">NIM</th>
            <th scope="col">Pertemuan 1</th>
            <th scope="col">Pertemuan 2</th>
            <th scope="col">Pertemuan 3</th>
          </tr>
        </thead>
        <?php
        $data = json_decode(file_get_contents("https://tifupb.id/21a3"), true);
        if(count($data) !=0){
          foreach ($data as $value){
        ?>
          <tbody>
            <tr>
              <td><?=$value['NO'];?></td>
              <td class= "text-start"><?=$value['NaMa'];?></td>
              <td><?=$value['NIM'];?></td>
              <td><?=$value['1'];?></td>
              <td><?=$value['2'];?></td>
              <td><?=$value['3'];?></td>
              
            </tr>
          </tbody> 
          <?php 
      }
        }
        ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>