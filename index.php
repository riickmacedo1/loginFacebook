<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu site.">
    <meta name="keywords" content="palavras,separadas,por,virgula">
    <meta name="author" content="Paulo Henrique">
    <link rel="shortcut icon" href="facebook.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Feacebook</title>
</head>
<body>
    
    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!--Logo-->
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou Telefone</p>
                    <input type="text" required>
                </div><!--form element-->
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password" required>
                </div><!--form element-->
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar">
                </div><!--form element-->
            </form><!--form login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <h3 class="msg-img">O Facebook ajuda você a se conectar e compartilhar 
                com as pessoas que fazem parte da sua vida.</h3>
                <img src="img/img1.png" alt="pessoas">
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra uma conta</h2>
                <h4>É gratuito e sempre será.</h4>
                <form class="criar-conta">
                    <div class="w50">
                        <input type="text" placeholder="Nome">
                    </div><!--w50-->
                    <div class="w50">
                        <input type="text" placeholder="Sobrenome">
                    </div><!--w50-->
                    <div class="w100">
                        <input type="email" placeholder="Celular ou e-mail">
                    </div><!--w100-->
                    <div class="w100">
                        <input type="password" placeholder="Senha">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de nascimento:</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                                for($i = 1; $i <=31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <option value="0">Janeiro</option>
                            <option value="0">Fevereiro</option>
                            <option value="0">Março</option>
                            <option value="0">Abril</option>
                            <option value="0">Maio</option>
                            <option value="0">Junho</option>
                            <option value="0">Julho</option>
                            <option value="0">Agosto</option>
                            <option value="0">Setembro</option>
                            <option value="0">Outubro</option>
                            <option value="0">Novembro</option>
                          <option value="0">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                        <?php
                                for($i = 1960; $i <=2021; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div><!--w100-->
                    
                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div><!--input-radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div><!--input-radio-->
                        <div class="clear"></div>
                    </div><!--W100-->

                    <div class="w50">
                        <input type="submit" value="Cadastre-se">
                    </div><!--w50-->
                </form><!--criar conta-->
            </div><!--abrir conta-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->
    <section class="footer">
        <div class="center">
            <a class="lingua-selected" href="">Português-Br</a>
            <a href="">Português-Br</a>
            <a href="">Português-Br</a>
            <a href="">Português-Br</a>
            <a href="">Português-Br</a>
            <a href="">Português-Br</a>
            <a href="">Português-Br</a>
            <a href="">Português-Br</a>
            <a href="">Português-Br</a>
            <a href="">Português-Br</a>
            <div class="borda"></div>
        </div>
        <div style="border:0; padding-top:8px; font-size:12px;" class="center">
            <a href="">@riickmacedo</a>
            <a href="">@riickmacedo</a>
            <a href="">@riickmacedo</a>
            <a href="">@riickmacedo</a>
            <a href="">@riickmacedo</a>
            <a href="">@riickmacedo</a>
            <a href="">@riickmacedo</a>
            <a href="">@riickmacedo</a>
            <a href="">@riickmacedo</a>
            <a href="">@riickmacedo</a>
            <a href="">@riickmacedo</a>
        </div>
    </section>

</body>
</html>