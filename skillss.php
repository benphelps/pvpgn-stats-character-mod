<?php
/*
$necromancer = array (
    1 => 'Amplify Damage' - 3
    2 => 'Teeth' - 2
    3 => 'Bone Armor' - 2
    4 => 'Skeleton Mastery' - 1
    5 => 'Raise Skeleton' - 1
    6 => 'Dim Vision' - 3
    7 => 'Weaken' - 3
    8 => 'Poison Dagger' - 2
    9 => 'Corpse Explosion' - 2
    10 => 'Clay Golem' - 1
    11 => 'Iron Maiden' - 3
    12 => 'Terror' - 3
    13 => 'Bone Wall' - 2
    14 => 'Golem Mastery' - 1
    15 => 'Raise Skeletal Mage' - 1
    16 => 'Confuse' - 3
    17 => 'Life Tap' - 3
    18 => 'Poison Explosion' - 2
    19 => 'Bone Spear' - 2
    20 => 'Blood Golem' - 1
    21 => 'Attract' - 3
    22 => 'Decrepify' - 3
    23 => 'Bone Prison' - 2
    24 => 'Summon Resist' - 1
    25 => 'Iron Golem' - 1
    26 => 'Lower Resist' - 3
    27 => 'Poison Nova' - 2
    28 => 'Bone Spirit' - 2
    29 => 'Fire Golem' - 1
    30 => 'Revive' - 1
)
*/

$sorceress_skills = array (

	1 => array ( 'name' => 'Fire Bolt' , 'tree' => 3 , 'position' => 'c2r1' ) ,
	2 =>  array ( 'name' => 'Warmth' , 'tree' => 3 , 'position' => 'c3r1' ) ,
	3 =>  array ( 'name' => 'Charged Bolt' , 'tree' => 2 , 'position' => 'c2r1' ) ,
	4 =>  array ( 'name' => 'Ice Bolt' , 'tree' => 1 , 'position' => 'c2r1' ) ,
	5 =>  array ( 'name' => 'Frozen Armor' , 'tree' => 1 , 'position' => 'c3r1' ) ,

	6 =>  array ( 'name' => 'Inferno' , 'tree' => 3 , 'position' => 'c1r2' ) ,
	7 =>  array ( 'name' => 'Static Field' , 'tree' => 2 , 'position' => 'c1r2' ) ,
	8 =>  array ( 'name' => 'Telekinesis' , 'tree' => 2 , 'position' => 'c3r2' ) ,
	9 =>  array ( 'name' => 'Frost Nova' , 'tree' => 1 , 'position' => 'c1r2' ) ,
	10 =>  array ( 'name' => 'Ice Blast' , 'tree' => 1 , 'position' => 'c2r2' ) ,

	11 =>  array ( 'name' => 'Blaze' , 'tree' => 3 , 'position' => 'c1r3' ) ,
	12 =>  array ( 'name' => 'Fire Ball' , 'tree' => 3 , 'position' => 'c2r3' ) ,
	13 =>  array ( 'name' => 'Nova' , 'tree' => 2 , 'position' => 'c1r3' ) ,
	14 =>  array ( 'name' => 'Lightning' , 'tree' => 2 , 'position' => 'c2r3' ) ,
	15 =>  array ( 'name' => 'Shiver Armor' , 'tree' => 1 , 'position' => 'c3r3' ) ,

	16 =>  array ( 'name' => 'Fire Wall' , 'tree' => 3 , 'position' => 'c1r4' ) ,
	17 =>  array ( 'name' => 'Enchant' , 'tree' => 3 , 'position' => 'c3r4' ) ,
	18 =>  array ( 'name' => 'Chain Lightning' , 'tree' => 2 , 'position' => 'c2r4' ) ,
	19 =>  array ( 'name' => 'Teleport' , 'tree' => 2 , 'position' => 'c3r4' ) ,
	20 =>  array ( 'name' => 'Glacial Spike' , 'tree' => 1 , 'position' => 'c2r4' ) ,

	21 =>  array ( 'name' => 'Meteor' , 'tree' => 3 , 'position' => 'c2r5' ) ,
	22 =>  array ( 'name' => 'Thunder Storm' , 'tree' => 2 , 'position' => 'c1r5' ) ,
	23 =>  array ( 'name' => 'Energy Shield' , 'tree' => 2 , 'position' => 'c3r5' ) ,
	24 =>  array ( 'name' => 'Blizzard' , 'tree' => 1 , 'position' => 'c1r5' ) ,
	25 =>  array ( 'name' => 'Chilling Armor' , 'tree' => 1 , 'position' => 'c3r5' ) ,

	26 =>  array ( 'name' => 'Fire Mastery' , 'tree' => 3 , 'position' => 'c2r6' ) ,
	27 =>  array ( 'name' => 'Hydra' , 'tree' => 3 , 'position' => 'c3r6' ) ,
	28 =>  array ( 'name' => 'Lightning Mastery' , 'tree' => 2 , 'position' => 'c2r6' ) ,
	29 =>  array ( 'name' => 'Frozen Orb' , 'tree' => 1 , 'position' => 'c1r6' ) ,
	30 =>  array ( 'name' => 'Cold Mastery' , 'tree' => 1 , 'position' => 'c2r6' )

) ;

?>
<html>
	<head>
		<meta http-equiv=Content-Type content="text/html; charset=windows-1251" />
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.idTabs.min.js"></script>
		<link href="skills.css" type="text/css" rel="stylesheet">
		<LINK href="css/disabled-tree.css" type="text/css" rel=stylesheet>
		<LINK href="css/enabled-tree.css" type="text/css" rel=stylesheet>
	</head>
	<body>
		<div id="char-skills" class="Sorceress">
			<ul class="idTabs">
				<li><a href="#char-skilltab1" class="tab1">tab1</a></li>
				<li><a href="#char-skilltab2" class="tab2">tab2</a></li>
				<li><a href="#char-skilltab3" class="tab3">tab3</a></li>
			</ul>
			<div id="char-skilltab1" class="char-skilltab">
<?php
	for ( $i = 1 ; $i <= 30 ; $i++ ) {
		$enabled = rand ( 0 , 1 ) ;
		if ( $sorceress_skills [ $i ] [ 'tree' ] == 1 ) {
			echo '<span class="' . ( ( empty ( $enabled ) ) ? 'disabled-skill ds' : 'enabled-skill es' ) . $sorceress_skills [ $i ] [ 'position' ] . '">' . $enabled . '</span>' . "\n" ;
		}
	}
?>

			</div>
			<div id="char-skilltab2" class="char-skilltab">
<?php
	for ( $i = 1 ; $i <= 30 ; $i++ ) {
		$enabled = rand ( 0 , 1 ) ;
		if ( $sorceress_skills [ $i ] [ 'tree' ] == 2 ) {
			echo '<span class="' . ( ( empty ( $enabled ) ) ? 'disabled-skill ds' : 'enabled-skill es' ) . $sorceress_skills [ $i ] [ 'position' ] . '">' . $enabled . '</span>' . "\n" ;
		}
	}
?>
			</div>
			<div id="char-skilltab3" class="char-skilltab">
<?php
	for ( $i = 1 ; $i <= 30 ; $i++ ) {
		$enabled = rand ( 0 , 1 ) ;
		if ( $sorceress_skills [ $i ] [ 'tree' ] == 3 ) {
			echo '<span class="' . ( ( empty ( $enabled ) ) ? 'disabled-skill ds' : 'enabled-skill es' ) . $sorceress_skills [ $i ] [ 'position' ] . '">' . $enabled . '</span>' . "\n" ;
		}
	}
?>
			</div>
		</div>
	</body>
</html>