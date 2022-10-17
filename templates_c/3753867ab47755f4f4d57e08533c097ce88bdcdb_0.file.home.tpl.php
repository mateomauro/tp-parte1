<?php
/* Smarty version 4.2.1, created on 2022-10-12 19:23:13
  from 'C:\xampp\htdocs\codigos\trabajo especial entrega final\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6346f801469b00_33244411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3753867ab47755f4f4d57e08533c097ce88bdcdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\trabajo especial entrega final\\templates\\home.tpl',
      1 => 1665595391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6346f801469b00_33244411 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiat 147</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="home">
    <form action="inicio" method="POST">
        <button type="submit" name="invitador-btn">invitado</button>
    </form>
    <form action="login" method="POST">
        <button type="submit" name="administrador-btn">administrador</button>
    </form>
</div>
</body>
</html><?php }
}
