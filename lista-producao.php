<?php
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  <main>
 
    <div class="container">
        <h1>Lista de Produções</h1>
        <a href="./salvar-producao.php" class="btn btn-add">Incluir</a>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Produto</th>
              <th>Clientes</th>
              <th>Data</th>
              <th>Ações</th>
              <th>Funcionários</th>
            </tr>
          </thead>
          <tbody>
            
          <?php
          $sql = "SELECT p.ProducaoID,
                  pr.Nome As 'Produto',
                  p.DataProducao As 'Data',
                  f.Nome AS 'Funcionario',
                  c.Nome As 'Cliente'

                  FROM producao AS P
                  JOIN produtos AS pr ON p.ProdutosID = pr.ProdutoID
                  JOIN funcionarios AS f ON p.FuncionarioID = f.FuncionarioID
                  JOIN clientes AS c ON p.ClienteID = c.ClienteID
                  ";

                  $result = mysqli_query($conn, $sql);

                  while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>
                    <td>'.$row["ProducaoID"].'</td>
                    <td>'.$row["Produto"].'</td>
                    <td>'.$row["Funcionario"].'</td>
                    <td>'.$row["Cliente"].'</td>
                    <td>'.$row["Data"].'</td>
                    <td>
                    <a href="#" class="btn btn-edit">Editar</a>
                    <a href="#" class="btn btn-delete">Excluir</a>
                    </td>
                      </tr>';
                  }
              ?>
           
          </tbody>
        </table>
      </div>