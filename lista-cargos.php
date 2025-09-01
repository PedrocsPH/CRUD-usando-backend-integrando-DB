<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

?>
  <main>

    <div class="container">
        <h1>Lista de Cargos</h1>
        <a href="./salvar-cargos.php" class="btn btn-add">Incluir</a>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Teto Salárial</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            
          <?php
            $sql = "SELECT * FROM cargos";
            $result = mysqli_query($conn, $sql);
 
            while($row = mysqli_fetch_assoc($result)){
              echo '<tr>
              <td>'.$row["CargoID"].'</th>
              <td>'.$row["Nome"].'</th>
              <td>'.$row["TetoSalarial"].'</th>
              <td>Ações</th>
              <td>
                <a href="salvar-cargos.php?id=" class="btn btn-edit">Editar</a>
                <a href="#" class="btn btn-delete">Excluir</a>
              </td>
              </tr>';
 
            }
            ?>

          </tbody>
        </table>
      </div> 
  </main>
  
  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>