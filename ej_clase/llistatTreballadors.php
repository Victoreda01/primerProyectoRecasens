<?php 
require_once 'treballador.php';
require_once 'treballador_infor.php';
require_once 'repartidor.php';
require_once 'gerents.php';
require_once 'mobil.php';
require_once 'pc.php';


$lTreballadors = array(new Treballador('Didac','Palleja','15/09/2022',32000,0.15), new Treballador('Dani','Palleja','16/10/2022',16000,0.15), new Treballador('Catasus','Barcelona','04/11/2022',32000,0.15));
$lInform = array(new Informatic('Ruben','Molins de Rei','25/09/2022',25000,0.25, 4),new Informatic('Toni','Molins de Rei','10/06/2022',24000,0.25, 5),new Informatic('Edgar','Molins de Rei','12/05/2022',14000,0.25, 6));
$lRepar = array(new Repartidor('David','Molins de Rei','18/03/2022',20000,0.15, 938723885),new Repartidor('Paco','Zaragoza','20/01/2022',20500,0.20, 943775154),new Repartidor('Migueh','Extremadura','27/07/2022',17000,0.25, 963841554));
$lGerents = array(new Gerent('Didac','Palleja','15/09/2022',32000,0.15,2000,"Director General",1), new Gerent('Dani','Palleja','16/10/2022',32000,0.15,2000,"Director Marketing",2), new Gerent('Victor','Barcelona','04/11/2022',32000,0.15,5000,"Gerent",3));
$lMobils = array(new Mobil(1,'Samsung','Note 7',1300,'17/12/2018','David',938723885), new Mobil(2,'Iphone','14 Pro Max',1400,'16/10/2022','Paco',943775154), new Mobil(3,'Iphone','14 Pro Max',1400,'04/11/2022','Migueh',963841554));
$lPc = array(new Pc(1,'Acer','Sobremesa', 5300, '15/09/2020','Didac', true), new Pc(2,'MSI','Sobremesa', 4300, '23/10/2019','Dani', true),new Pc(3,'Nvidia','Sobremesa', 6500, '30/07/2010','Victor', true),
new Pc(4,'MSI','Gaming Plus Ultra', 1400, '02/01/2002','Ruben', false), new Pc(5,'Corsair','Gaming Plus', 1300, '11/11/2017','Toni', false),new Pc(6,'Acer','Gaming', 1500, '10/08/2014','Edgar', false));

?>