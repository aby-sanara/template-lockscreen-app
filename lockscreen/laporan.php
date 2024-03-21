<?php 

$title = "Lock Screen - Laporan";

require "template/header.php";
require "template/navbar.php";
require "template/sidebar.php";

?>

    <div class="frame-timer" hidden>
      <div class="timer-center" id="timer"></div>
    </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">
      <div class="d-flex justify-content-between border-bottom flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Data Siswa</h1>
      </div>

      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NIS</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>1001</td>
              <td>Aang Santoso</td>
              <td>XII</td>
              <td>Pesawahan</td>
            </tr>
            <tr>
              <td>2</td>
              <td>1002</td>
              <td>Budi Junaidi</td>
              <td>XII</td>
              <td>Bambu Kuning</td>
            </tr>
            <tr>
              <td>3</td>
              <td>1003</td>
              <td>Iwan Supriadi</td>
              <td>XII</td>
              <td>Rawa Laut</td>
            </tr>
            <tr>
              <td>4</td>
              <td>1004</td>
              <td>Julianto</td>
              <td>XII</td>
              <td>Gedong Aer</td>
            </tr>
            <tr>
              <td>5</td>
              <td>1005</td>
              <td>Sukarianto</td>
              <td>XII</td>
              <td>Gedong Aer</td>
            </tr>
            <tr>
              <td>6</td>
              <td>1006</td>
              <td>Desi Aprianti</td>
              <td>XII</td>
              <td>Pesawahan</td>
            </tr>
            <tr>
              <td>7</td>
              <td>1007</td>
              <td>Siti Emawati</td>
              <td>XII</td>
              <td>Kemiling</td>
            </tr>
            <tr>
              <td>8</td>
              <td>1008</td>
              <td>Yeni Asia</td>
              <td>XII</td>
              <td>Kasui</td>
            </tr>
            <tr>
              <td>9</td>
              <td>1009</td>
              <td>Okta Supriadi</td>
              <td>XII</td>
              <td>Danau Ranau</td>
            </tr>
            <tr>
              <td>10</td>
              <td>1010</td>
              <td>Andri Santiko</td>
              <td>XII</td>
              <td>Garuntang</td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>
  
<?php 

require "template/footer.php";

?>