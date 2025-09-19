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

    $resultado = mysqli_query($conexao, $sql);

    while($row = mysqli_fetch_assoc($resultado)){
         echo '<tr>';
         echo '<td>'.$row["CargoID"].'</td>';
         echo '<td>'.$row["Nome"].'</td>';
         echo '<td>'.$row["TetoSalarial"].'</td>';
         echo '<td>';
         echo '<a href="salvar-cargos.php?id=' . $row["CargoID"] . '" class="btn btn-edit">Editar</a>';
         echo '<a href="#" class="btn btn-delete">Excluir</a>';
         echo '</td>';
         echo '</tr>';
     
}
?>


     l

    </tbody>
    </table>
  </div>
 </main>

<?php

// include dos arquivox
include_once './include/footer.php';
?>