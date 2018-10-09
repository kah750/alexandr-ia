<?php

  function Reserva($id_usuario, $id_livro) {

    $bd = CriaConexãoBd();

    /* $sql = $bd -> prepare('INSERT INTO emprestimo(aluno_prof,	bibliotecario,	livro,	retirado,	_data,	horario)
                          VALUES (:id_usuario, :id_bibliotecario, :id_livro, FALSE, NULL, NULL);

    ');

    $sql -> bindValue(':id_usuario', $id_usuario);
    $sql -> bindValue(':id_bibliotecario', $id_bibliotecario);
    $sql -> bindValue(':id_livro', $id_livro); */

    $sql = $bd -> prepare('INSERT INTO reserva(aluno_prof,	livro) VALUES (\':id_usuario, :id_livro\')');
    $sql -> bindValue('id_usuario', $id_usuario);
    $sql -> bindValue('id_livro', $id_livro);

    $sql -> execute();

  }

  function Empresta($id_usuario, $id_bibliotecario, $id_livro) {

    $bd = CriaConexãoBd();
    $erro = '';

    date_default_timezone_set ('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $sql = $bd -> prepare('SELECT aluno_prof, livro FROM emprestimo WHERE aluno_prof = :id_usuario AND livro = :id_livro');
    $sql -> bindValue(':id_usuario', $id_usuario);
    $sql -> bindValue(':id_livro', $id_livro);

    $sql -> execute();

    $retorno = $sql -> rowCount();

    $bd = CriaConexãoBd();
    $sql = $bd -> prepare('SELECT aluno_prof FROM emprestimo WHERE aluno_prof = :id_usuario');
    $sql -> bindValue(':id_usuario', $id_usuario);

    $sql -> execute();

    $retorno2 = $sql -> rowCount();

    if($retorno == 0 AND $retorno2 < 3){

      $bd = CriaConexãoBd();
      $sql = NULL;

      $sql = $bd -> prepare('INSERT INTO emprestimo(aluno_prof,	bibliotecario,	livro,	retirado,	_data,	horario)
                            VALUES (:id_usuario, :id_bibliotecario, :id_livro, FALSE, :_data, :horario);

      ');

      $sql -> bindValue(':id_usuario', $id_usuario);
      $sql -> bindValue(':id_bibliotecario', $id_bibliotecario);
      $sql -> bindValue(':id_livro', $id_livro);
      $sql -> bindValue(':_data', $data);
      $sql -> bindValue(':horario', $horario);

      $sql -> execute();

    } else {

      if($retorno2 < 3){

        $erro = 'Você não pode pegar emprestado mais de 2 livros';

      }

      if($retorno != 0){

        $erro = 'Este livro já está emprestado a este usuário';

      }

    }

    return($erro);

  }

  function Retirar($id_emprestimo){

    $bd = CriaConexãoBd();

    date_default_timezone_set ('America/Sao_Paulo');
    $data = date('d-m-Y');
    $horario = date('H:i:s');

    $sql = $bd -> preapre('UPDATE emprestimo SET retirado = TRUE, _data = :_data, horario = :horario');

    $sql -> bindValue(':_data', $data);
    $sql -> bindValue(':horario', $horario);

  }

  function ExemplaresDisponiveis($id_livro){

    $bd = CriaConexãoBd();

    $sql = $bd -> prepare('SELECT retirado FROM emprestimo WHERE livro = :id_livro AND retirado = TRUE;');

    $sql -> bindValue('id_livro', $id_livro);
    $sql -> execute();

    $emprestados = 0;
    $emprestados = $sql -> rowCount();

    $sql = NULL;
    $bd = CriaConexãoBd();

    $sql = $bd -> prepare('SELECT exemplar FROM livro WHERE id = :id_livro');

    $sql -> bindValue('id_livro', $id_livro);
    $sql -> execute();

    $sql = $sql -> fetch();

    $total = 0;
    $total = $sql['exemplar'];

    $qtd_disponivel = $total - $emprestados;

    return($qtd_disponivel);

  }

?>
