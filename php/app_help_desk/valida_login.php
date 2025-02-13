<?php 

    session_start();

    // variavel que verifica se a autenticação foi realizada
    $usuarios_autenticado = false;
    $usuario_id = null;
    $perfis = array(1 => 'administrativo', 2 => 'usuario');
    $usuario_perfil_id = null;

    //usuarios do sistema
    $usuarios_app = [
        [
            'id'=> 1,
            "email" => "roberto@gmail.com",
            "senha" => "654321",
            "perfil_id" => 1,
        ],
        [
            'id'=> 2,
            "email" => "fernanda@hotmail.com",
            "senha" => "654321",
            "perfil_id" => 1,
        ],
        [
            'id'=> 3,
            "email" => "jose@gmail.com",
            "senha" => "123456",
            "perfil_id" => 2,
        ],
        [
            "id"=> 4,
            "email" => "maria@gmail.com",
            "senha" => "123456",
            "perfil_id" => 2,
        ]
    ];

    foreach ($usuarios_app as $user) {
        if ($user["email"] == $_POST["email"] && $user["senha"] == $_POST ["senha"]) {
                $usuarios_autenticado = true;
                $usuario_id = $user["id"];
                $usuario_perfil_id = $user["perfil_id"];
        }
    }

    if ($usuarios_autenticado) {
        echo"usuarios autenticado";
        $_SESSION["autenticado"] = "SIM";
        $_SESSION["id"] = $usuario_id;
        $_SESSION["perfil_id"] = $usuario_perfil_id;
        header("Location: home.php");
    }else{
        $_SESSION["autenticado"] = "NAO";
        header("Location: index.php?login=erro");
    } 

?>