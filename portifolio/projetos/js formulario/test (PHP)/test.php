<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <title>Formulário</title>
</head>
<body>

<main>
    <div class="container">
        <div class="form-image">
            <img src="../index (HTML)/undraw_books_re_8gea.svg">
        </div>
    <div class="form-group">
        <form action="#" method="post" value="<?=htmlspecialchars ($_SERVER['PHP_SELF'])?>">
            <div class="form-header">
                <div class="form-title">
                    <h1>Formulário de Admissão</h1>
                </div>
                <div class="subtmit-button">
                    <button type="submit"><a href="#">Enviar</a></button>
                </div>
            </div>
                <div class="input-group">
                    <div class="input-group-box">
                        <label for="name" class="login_label" value="<?=htmlspecialchars (isset($_POST['name'])?$_POST['name']:'')?>">
                            <span>Nome Completo*:</span>
                            <input type="text" name="name" id="nome" class="input">
                        </label>
                    </div>

                    <div class="input-group-box">
                        <label for="email" class="login_label">
                            <span>Email*:</span>
                            <input type="email" name="email" id="email" class="input" value="<?=htmlspecialchars (isset($_POST['email'])?$_POST['email']:'')?>">
                        </label>
                    </div>

                    <div class="input-group-box">
                        <label for="tel" class="login_label">
                            <span>Telefone*:</span>
                            <input type="text" name="tel" id="tel" class="input"value="<?=htmlspecialchars (isset($_POST['tel'])?$_POST['tel']:'')?>">
                    </label>
                    </div>

                    <div class="input-group-box">
                        <label for="cpf" class="login_label">
                            <span>CPF*:</span>
                            <input type="text" name="cpf" id="cpf" class="input" value="<?=htmlspecialchars (isset($_POST['cpf'])?$_POST['cpf']:'')?>">
                    </label>
                    </div>

                    <div class="input-group-box">
                        <label for="senha" class="login_label">
                            <span>Senha*:</span>
                            <input type="password" name="pwd" id="pwd" class="input" value="<?=htmlspecialchars (isset($_POST['pwd'])?$_POST['pwd']:'')?>">
                    </label>
                    </div>

                    <div class="input-group-box">
                        <label for="confirma-senha" class="login_label">
                            <span>Confirmar Senha*:</span>
                            <input type="password" name="pwd2" id="pwd2" class="input" value="<?=htmlspecialchars (isset($_POST['pwd2'])?$_POST['pwd2']:'')?>">
                    </label>
                    </div>
                </div>

                <div class="option-group">
                     <label class="cursos">
                            <span>Cursos:</span>
                                <select name="curso">
                                    <option value="ads">Analise e Desenvolvimento de Sistemas</option>
                                    <option value="art">Artes Visuais</option>
                                    <option value="bio">Biomedicina</option>
                                    <option value="engq">Engenharia Química</option>
                                    <option value="engs">Engenharia de Software</option>
                                </select>
                        </label>
                        <label class="turno">
                                <span>Turno:</span>
                                <select name="turno">
                                    <option value="mat">Matutino</option>
                                    <option value="vesp">Vespertino</option>
                                    <option value="not">Noturno</option>
                                </select>
                        </label> 
                        <label class="cidade">
                                <span>Cidade:</span>
                                <select name="cidade">
                                    <option value="mat">Araquari</option>
                                    <option value="mat">Florianopolis</option>
                                    <option value="vesp">Jaragua do Sul</option>
                                    <option value="not">Joinville</option>
                                </select>
                        </label>
                </div>

                <div class="gender-input">
                    <div class="gender-title">
                        <span>Gênero</span>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" name="gender" id="masc">
                            <span>Masculino</span>
                        </div>
                        <div class="gender-input">
                            <input type="radio" name="gender" id="fem">
                            <span>Feminino</span>
                        </div>
                        <div class="gender-input">
                            <input type="radio" name="gender" id="out">
                            <span>Outro</span>
                        </div>
                    </div>
                </div>

                <div class="race-input">
                    <div class="race-title">
                        <span>Raça:</span>
                    </div>

                    <div class="race-group">
                        <div class="race-input">
                            <input type="radio" name="race" id="white">
                            <span>Branco</span>
                        </div>
                        <div class="race-input">
                            <input type="radio" name="race" id="black">
                            <span>Negro</span>
                        </div>
                        <div class="race-input">
                            <input type="radio" name="race" id="brown">
                            <span>Pardo</span>
                        </div>
                        <div class="race-input">
                            <input type="radio" name="race" id="yellow">
                            <span>Amarelo</span>
                        </div>
                    </div>
                </div>
                <div class="lic-button">
                    <label for="lic"> 
                        <span>Aceito os Termos de Uso e política de privacidade</span>
                        <input type="checkbox" name="lic" id="lic" class="input--checkbox">
                   </label>  
                </div>
        </form>
        </div>
    </div>
</main>

<?php

function validaCPF($cpf) {
 
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

    if (strlen($cpf) != 11) {
        return false;
    }

    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}


$nome = $_POST  ['name'];
if(strlen($nome)<=4){
 echo "Preencha o nome com no mínimo 2 caracteres.";
}else{
 echo "Seu nome \"$nome\" tem ".strlen($nome)." caracteres.";
}

$tel = $_POST['tel'];

if(!preg_match('^\(+[0-9]{2,3}\) [0-9]{4}-[0-9]{4}$^', $tel)){
 echo "Telefone inváildo.";
}

$erro = false;

if ( !isset( $_POST ) || empty( $_POST ) ) {
	$erro = 'Nada foi postado.';
}

foreach ( $_POST as $chave => $valor ) {
	$$chave = trim( strip_tags( $valor ) );
	
	if ( empty ( $valor ) ) {
		$erro = 'Existem campos em branco.';
	}
}

if ( ( ! isset( $site ) || ! filter_var( $site, FILTER_VALIDATE_URL ) ) && !$erro ) {
	$erro = 'Envie um site válido.';
}

if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
	$erro = 'Envie um email válido.';
}

if ( $erro ) {
	echo $erro;
} else {
	echo "<h1> Veja os dados enviados</h1>";
	
	foreach ( $_POST as $chave => $valor ) {
		echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
	}
}

?>

</body>
</html>