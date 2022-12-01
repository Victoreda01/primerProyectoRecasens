<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2">
    <title>Ej Classes</title>
</head>
<body>
    <p style="float:right"> <?php $today = getdate(); echo $today["mday"].'/'.$today["mon"].'/'.$today["year"]; 
    $hoy = date("d/m/y"); echo $hoy;?></p>

    <table border='1px'>
    <h2> Treballadors </h2>
        <tr>
            <th>Nom</th>
            <th>Data Inici</th>
            <th>Sou Base</th>
            <th>IRPF</th>
            <th>Sou Net</th>
            <th>Increment Sou</th>
            <th>Sou Mensual Actualitzat</th>
        </tr>
    <?php
    require_once 'llistatTreballadors.php';
    require_once 'calculaSou.php';

    foreach ($lTreballadors as $key => $value) {?>
        <tr>
            <td>
            <?= $value->getNom();?>
            </td>
            <td>
            <?= $value->getDatInc();?>
            </td>
            <td>
            <?=$value->getSBase();?>
            </td>
            <td>
            <?= $value->getIrpf();?>
            </td>
            <td>
            <?= $value->calculaSouMensualNet();?>
            </td>
            <td style="color:red">
            <?php if ($value->getSBase() < 17000) {
            echo $value->getSBase() + ($value->getSBase()*0.1);
            }?>
            </td>
            <td style="color:red">
            <?= $value->souMensualActualitzat();?>
            </td>
        </tr>
        <?php }?>
        <tr>
            <td> TOTAL:</td>
            <td colspan="2" align="right">
            <?= calculaSou::calculaSumaSous($lTreballadors)?>
            </td>
        </tr>

    </table>
    <table border="1px">
    <h2> Informatics </h2>
        <tr>
            <th>Nom</th>
            <th>Data Inici</th>
            <th>Sou Base</th>
            <th>IRPF</th>
            <th>Sou Net</th>
            <th>Equip Informatic</th>
            <th>Increment Sou</th>
            <th>Sou Mensual Actualitzat</th>
        </tr>
        <?php foreach ($lInform as $key => $value) {?>
        <tr>
            <td>
            <?= $value->getNom();?>
            </td>
            <td>
            <?= $value->getDatInc();?>
            </td>
            <td>
            <?= $value->getSBase();?>
            </td>
            <td>
            <?= $value->getIrpf();?>
            </td>
            <td>
            <?= $value->calculaSouMensualNet();?>
            </td>
            <td>
            <?= $value->getEInform();?>
            </td>
            <td style="color:red">
            <?php if ($value->getSBase() < 17000) {
                echo $value->getSBase() + ($value->getSBase()*0.1);
            }?>
            </td>
            <td style="color:red">
            <?= $value->souMensualActualitzat();?>
            </td>
        </tr>
        <?php }?>
        <tr>
            <td> TOTAL:</td>
            <td colspan="2" align="right">
            <?= calculaSou::calculaSumaSous($lInform)?>
            </td>
        </tr>
    </table>
    <table border="1px">
    <h2> Repartidor </h2>
        <tr>
            <th>Nom</th>
            <th>Data Inici</th>
            <th>Sou Base</th>
            <th>IRPF</th>
            <th>Sou Net</th>
            <th>Mobil</th>
            <th>Increment Sou</th>
            <th>Sou Mensual Actualitzat</th>
        </tr>
        <?php

    foreach ($lRepar as $key => $value) {?>
        <tr >
            <td>
            <?= $value->getNom();?>
            </td>
            <td>
            <?= $value->getDatInc();?>
            </td>
            <td>
            <?= $value->getSBase();?>
            </td>
            <td>
            <?= $value->getIrpf();?>
            </td>
            <td>
            <?= $value->calculaSouMensualNet();?>
            </td>
            <td>
            <?= $value->getMobil();?>
            </td>
            <td style="color:red">
            <?php if ($value->getSBase() < 17000) {
                echo $value->getSBase() + ($value->getSBase()*0.1);
            }?>
            </td>
            <td style="color:green">
            <?= $value->souMensualActualitzat();?>
            </td>
        </tr>
        <?php }?>
        <tr>
            <td> TOTAL:</td>
            <td colspan="2" align="right">
            <?= calculaSou::calculaSumaSous($lRepar)?>
            </td>
        </tr>
    </table>
    <table border="1px">
    <h2> Gerents </h2>
        <tr>
            <th>Nom</th>
            <th>Data Inici</th>
            <th>Sou Base</th>
            <th>IRPF</th>
            <th>Sou Net</th>
            <th>Complement</th>
            <th>Carrec</th>
            <th>Equip Informatic</th>
            <th>Increment Sou</th>
            <th>Sou Mensual Actualitzat</th>

        </tr>
        <?php foreach ($lGerents as $key => $value) {?>
        <tr>
            <td>
            <?= $value->getNom();?>
            </td>
            <td>
            <?= $value->getDatInc();?>
            </td>
            <td>
            <?= $value->getSBase();?>
            </td>
            <td>
            <?= $value->getIrpf();?>
            </td>
            <td>
            <?= $value->calculaSouMensualNet();?>
            </td>
            <td>
            <?= $value->getComplement();?>
            </td>
            <td>
            <?= $value->getCarrec();?>
            </td>
            <td>
            <?= $value->getEquip();?>
            </td>
            <td style="color:red">
            <?php if ($value->getSBase() < 17000) {
                echo $value->getSBase() + ($value->getSBase()*0.1);
            }?>
            </td>
            <td style="color:green">
            <?= $value->souMensualActualitzat();?>
            </td>
        </tr>
        <?php }?>
        <tr>
            <td> TOTAL:</td>
            <td colspan="2" align="right">
            <?= calculaSou::calculaSumaSous($lGerents   )?>
            </td>
        </tr>
    </table>
    <h1> Inventari </h1>
    <table border="1px">
    <h2> Mobils </h2>
        <tr>
            <th>Num Serie</th>
            <th>Marca</th>
            <th>Model</th>
            <th>Preu</th>
            <th>Any Compra</th>
            <th>Propietari</th>
            <th>Num Telefon</th>

        </tr>
        <?php foreach ($lMobils as $key => $value) {?>
        <tr>
            <td>
            <?= $value->getNumSerie();?>
            </td>
            <td>
            <?= $value->getMarca();?>
            </td>
            <td>
            <?= $value->getModel();?>
            </td>
            <td>
            <?= $value->getPreu();?>
            </td>
            <td>
            <?= $value->getAnyCompra();?>
            </td>
            <td>
            <?= $value->getPropietari();?>
            </td>
            <td>
            <?= $value->getNum();?>
            </td>
        </tr>
        <?php }?>
        <tr>
            <td> TOTAL:</td>
            <td colspan="2" align="right">
            <?= calculaSou::calculaSumaSous($lGerents   )?>
            </td>
        </tr>
    </table>
    <table border="1px">
    <h2> Mobils </h2>
        <tr>
            <th>Num Serie</th>
            <th>Marca</th>
            <th>Model</th>
            <th>Preu</th>
            <th>Any Compra</th>
            <th>Propietari</th>
            <th>Num Telefon</th>

        </tr>
        <?php foreach ($lMobils as $key => $value) {?>
        <tr>
            <td>
            <?= $value->getNumSerie();?>
            </td>
            <td>
            <?= $value->getMarca();?>
            </td>
            <td>
            <?= $value->getModel();?>
            </td>
            <td>
            <?= $value->getPreu();?>
            </td>
            <td>
            <?= $value->getAnyCompra();?>
            </td>
            <td>
            <?= $value->getPropietari();?>
            </td>
            <td>
            <?= $value->getNum();?>
            </td>
        </tr>
        <?php }?>
    </table>
    <table border="1px">
    <h2> PC </h2>
        <tr>
            <th>Num Serie</th>
            <th>Marca</th>
            <th>Model</th>
            <th>Preu</th>
            <th>Any Compra</th>
            <th>Propietari</th>
            <th>Sobretaula</th>

        </tr>
        <?php foreach ($lPc as $key => $value) {?>
        <tr>
            <td>
            <?= $value->getNumSerie();?>
            </td>
            <td>
            <?= $value->getMarca();?>
            </td>
            <td>
            <?= $value->getModel();?>
            </td>
            <td>
            <?= $value->getPreu();?>
            </td>
            <td>
            <?= $value->getAnyCompra();?>
            </td>
            <td>
            <?= $value->getPropietari();?>
            </td>
            <td>
            <?php
                if ($value->getSobretaula() == true) {
                    echo "Si";
                }else{
                    echo "No";
                } ?>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>