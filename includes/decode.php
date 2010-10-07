<?php
//if ( !defined('LOAD_INC') || !is_readable($file)) { header('Location: http://your.ladder.page/'); exit; }

include_once('includes/skills.php');
include_once('merc.php');
include_once('exp.php');
include_once('items.php');
include_once('runewords.php');

$classes = array('Amazon', 'Sorceress', 'Necromancer', 'Paladin', 'Barbarian', 'Druid', 'Assassin', 'N/A');
$difficulty = array('Normal', 'Nightmare', 'Hell');

function showWaypoints ( $diff , $act ) {
	global $Char_Waypoints ;
	$data = '' ;
	foreach ( $Char_Waypoints [ $diff ] [ $act ] as $k => $v ) {
		$data .= $v ;
	}
	return $data ;
}

function padhex ($num) {
  return str_pad(dechex($num), 2, '0', STR_PAD_LEFT);
}

function town_decode ($num) {

  $active = ($num & 0x80) ? 1 : 0;
  $town = $num & 0x07;

  if ($active) {
    switch ($town) {
      case 0:
        return "Act 1 - Rogue Encampment";
        break;
      case 1:
        return "Act 2 - Lut Gholein";
        break;
      case 2:
        return "Act 3 - Kurast Docks";
        break;
      case 3:
        return "Act 4 - Pandemonium Fortress";
        break;
      case 4:
        return "Act 5 - Harrogath";
        break;
    }
  } else {
    return "";
  }
}

function select_waypoints ($bitstream) {
  $waypointlist = array();
  for ($i=1;$i<40;$i++) {
    array_push($waypointlist, substr($bitstream, -$i, 1));
  }
  return $waypointlist;
}


$RawCharData = file_get_contents($file);
$CharData = array_merge(unpack("C*", $RawCharData));

// Magic
$MAGIC = substr($RawCharData, 0, 4) == pack('H*', '55aa55aa') ? 1 : 0;

if ($MAGIC) {

  // File version
  $Version = hexdec(padhex($CharData[7]) . padhex($CharData[6]) . padhex($CharData[5]) . padhex($CharData[4]));

  // File Size
  $Size = hexdec(padhex($CharData[11]) . padhex($CharData[10]) . padhex($CharData[9]) . padhex($CharData[8]));

  // CRC
  $CRC = hexdec(padhex($CharData[15]) . padhex($CharData[14]) . padhex($CharData[13]) . padhex($CharData[12]));

  // Weapon Set
  $WeaponSet = hexdec(padhex($CharData[19]) . padhex($CharData[18]) . padhex($CharData[17]) . padhex($CharData[16]));

  // Character name
  $Name = trim(substr($RawCharData, 20, 16));

  // Character type
  $CharType = $CharData[36];
  $NoIdea0 = ($CharType & 0x80) ? 1 : 0;
  $Ladder = ($CharType & 0x40) ? 1 : 0;
  $Expansion = ($CharType & 0x20) ? 1 : 0;
  $NoIdea1 = ($CharType & 0x10) ? 1 : 0;
  $HasDied = ($CharType & 0x08) ? 1 : 0;
  $Hardcore = ($CharType & 0x04) ? 1 : 0;
  $NoIdea2 = ($CharType & 0x02) ? 1 : 0;
  $NewCharFormat = ($CharType & 0x01) ? 1 : 0;

  // Class - moved to make decoding Title easier
  $CharClass = $CharData[40];
  global $classes;
  $sexes = array(0, 0, 1, 1, 1, 1, 0);
  $Class = $classes[$CharClass];
  $MALE = $sexes[$CharClass];

  // Character Title
  $CharTitle = $CharData[37];
  if ($Expansion && $CharTitle != 4 && $CharTitle != 9 && $CharTitle != 14 ) {
    if ($CharTitle <= 3) {
      $Title = "";
    } elseif ($CharTitle == 4) {
      $Title = "Unknown";  // Converted from Non-Expansion
    } elseif ($CharTitle <= 8) {
      $Title = $Hardcore ? "Destroyer" : "Slayer";
    } elseif ($CharTitle == 9) {
      $Title = "Unknown";  // Converted from Non-Expansion
    } elseif ($CharTitle <= 13) {
      $Title = $Hardcore ? "Conqueror" : "Champion";
    } elseif ($CharTitle == 14) {
      $Title = "Unknown";  // Converted from Non-Expansion
    } elseif ($CharTitle == 15) {
      if ($Hardcore) {
        $Title = "Guardian";
      } else {
        $Title = $MALE ? "Patriarch" : "Matriarch";
      }
    } else {
      $Title = "Unknown";
    }
  } else { // non-expansion or converted non-expansion
    if ($CharTitle <= 3) {
      $Title = "";
    } elseif ($CharTitle <=7 ) {
      if ($Hardcore) {
        $Title = $MALE ? "Count" : "Countess";
      } else {
        $Title = $MALE ? "Sir" : "Dame";
      }
    } elseif ($CharTitle <= 11) {
      if ($Hardcore) {
        $Title = $MALE ?  "Duke" : "Dutchess";
      } else {
        $Title = $MALE ? "Lord" : "Lady";
      }
    } elseif ($CharTitle == 12) {
      if ($Hardcore) {
        $Title = $MALE ? "King" : "Queen";
      } else {
        $Title = $MALE ? "Baron" : "Baroness";
      }
    } else {
      $Title = "Unknown";
    }
  }

  // Unknown
  $NoIdea3 = hexdec(padhex($CharData[39]) . padhex($CharData[38]));

  // Class moved to make decoding Title easier 40

  // Unknown
  $NoIdea4 = hexdec(padhex($CharData[42]) . padhex($CharData[41]));

  // Level for character selection screen
  $SelectionLevel = $CharData[43];

  // Unknown
  $NoIdea5 = hexdec(padhex($CharData[47]) . padhex($CharData[46]) . padhex($CharData[45]) . padhex($CharData[44]));

  // Time Stamp
  $TimeStamp = hexdec(padhex($CharData[51]) . padhex($CharData[50]) . padhex($CharData[49]) . padhex($CharData[48]));

  // Unknown
  $NoIdea6 = hexdec(padhex($CharData[55]) . padhex($CharData[54]) . padhex($CharData[53]) . padhex($CharData[52]));

  // Skill Hot Keys
  $key = 56;
  for($i=1;$i<=16;$i++) {
    ${"SkillKey" . $i} = array_shift(skill_decode(hexdec(padhex($CharData[$key+3]) . padhex($CharData[$key+2]) . padhex($CharData[$key+1]) . padhex($CharData[$key]))));
    $key += 4;
  }

  // Left Skill Weapon 1
  $LeftSkillWeapon1 = array_shift(skill_decode(hexdec(padhex($CharData[123]) . padhex($CharData[122]) . padhex($CharData[121]) . padhex($CharData[120]))));

  // Right Skill Weapon 1
  $RightSkillWeapon1 = array_shift(skill_decode(hexdec(padhex($CharData[127]) . padhex($CharData[126]) . padhex($CharData[125]) . padhex($CharData[124]))));

  // Left Skill Weapon 2
  $LeftSkillWeapon2 = array_shift(skill_decode(hexdec(padhex($CharData[131]) . padhex($CharData[130]) . padhex($CharData[129]) . padhex($CharData[128]))));

  // Right Skill Weapon 2
  $RightSkillWeapon2 = array_shift(skill_decode(hexdec(padhex($CharData[135]) . padhex($CharData[134]) . padhex($CharData[133]) . padhex($CharData[132]))));

  // Character Outfit 136 - 151
  $key = 136;
  for($i=1;$i<=16;$i++) {
    ${"Outfit" . $i} = $CharData[$key-1+$i];
  }

  // Character Color 152 - 167
  $key = 152;
  for($i=1;$i<=16;$i++) {
    ${"Color" . $i} = $CharData[$key-1+$i];
  }

  // Normal Town
  $Town1 = town_decode($CharData[168]);

  // Nightmare Town
  $Town2 = town_decode($CharData[169]);

  // Hell Town
  $Town3 = town_decode($CharData[170]);

  // Map ID
  $MapID = hexdec(padhex($CharData[174]) . padhex($CharData[173]) . padhex($CharData[172]) . padhex($CharData[171]));

  // Unknown
  $NoIdea6 = hexdec(padhex($CharData[176]) . padhex($CharData[175]));

  // Merc Dead Flag
  $MercDead = $CharData[177];

  // Unknown
  $NoIdea7 = $CharData[178];

  // Merc Control Seed
  $MercControl = hexdec(padhex($CharData[182]) . padhex($CharData[181]) . padhex($CharData[180]) . padhex($CharData[179]));

  // Merc Type - moved to help decode name
  $MercType = merc_type(hexdec(padhex($CharData[186]) . padhex($CharData[185])), $MercSkill, $MercDiff);

  // Merc Name
  $MercName = merc_name($MercType, hexdec(padhex($CharData[184]) . padhex($CharData[183])));

  // Merc Type - moved to help decode name 185 - 186

  // Merc Experience
  $MercExp = hexdec(padhex($CharData[190]) . padhex($CharData[189]) . padhex($CharData[188]) . padhex($CharData[187]));
  $MercLevel = merc_level($MercExp, $MercType, $MercSkill, $MercDiff);

  // Is there a Merc at all?
  if ($MercExp == 0 || $MercControl == 0) $MercName = $MercType = $MercSkill = $MercDiff = "";

  // Unknown 191 - 334
//  $NoIdea8 = $CharData[191];


	//for ( $k = 347 ; $k <= 618; $k++) {
	//	echo $k . ' - ' . $CharData[$k]. '<br />' ;
	//}
  // QuestInfo 335 (345 - beginning of bitfield)
  // 346, 345 warriv intro
  // 358 - 347 Act I
  $normalimbue = ($CharData[351] & 0x02) && (~$CharData[351] & 0x01) ? 1 : 0;
  if ($Expansion) {
    $normalcow = ($CharData[425] & 0x01) && (~$CharData[354] & 0x04) ? 1 : 0;
  } else {
    $normalcow = ($CharData[397] & 0x01) && (~$CharData[354] & 0x04) ? 1 : 0;
  }
  // 360, 359 act I -> act II travel
  // 362, 361 Jerhyn intro
  // 374 - 363 Act II
  // 376, 375 act II -> act III travel
  // 378, 377 Hralti intro
  // 390 - 379 Act III
  // 392, 391 act III -> act IV travel
  // 394, 393 act IV intro
  // 400 - 395 Act IV
  // 402, 401 act IV -> act V
  // 408 - 403 unknown
  // 410, 409 talk to cain after killing diablo
  // 414 - 411 unknown
  // 426 - 415 Act V
  $normalsocket = ($CharData[415] & 0x20) && (~$CharData[415] & 0x01) ? 1 : 0;
  $normalpersonalize = ($CharData[421] & 0x10) && (~$CharData[421] & 0x01) ? 1 : 0;
  // 440 - 427 unknown
  // 442, 441 Nightmare warriv
  // 454 - 443 Act I
  $nightmareimbue = ($CharData[447] & 0x02) && (~$CharData[447] & 0x01) ? 1 : 0;
  if ($Expansion) {
    $nightmarecow = ($CharData[521] & 0x01) && (~$CharData[450] & 0x04) ? 1 : 0;
  } else {
    $nightmarecow = ($CharData[493] & 0x01) && (~$CharData[450] & 0x04) ? 1 : 0;
  }
  // guessing by couting for the rest of the quests for now
  // 456, 455 act I -> act II travel
  // 458, 457 Jerhyn intro
  // 470 - 459 Act II
  // 472, 471 act II -> act III travel
  // 474, 473 Hralti intro
  // 486 - 475 Act III
  // 488, 487 act III -> act IV travel
  // 490, 489 act IV intro
  // 496 - 491 Act IV
  // 498, 497 act IV -> act V
  // 504 - 499 unknown
  // 506, 505 talk to cain after killing diablo
  // 510 - 507 unknown
  // 522 - 511 Act V
  $nightmaresocket = ($CharData[511] & 0x20) && (~$CharData[511] & 0x01) ? 1 : 0;
  // nightmarepersonalize is not correct
  $nightmarepersonalize = ($CharData[517] & 0x10) && (~$CharData[517] & 0x01) ? 1 : 0;
  // 536 - 523 unknown
  // 538, 537 Hell warriv
  // 550 - 539 Act I
  $hellimbue = ($CharData[543] & 0x02) && (~$CharData[543] & 0x01) ? 1 : 0;
  if ($Expansion) {
    $hellcow = ($CharData[616] & 0x01) && (~$CharData[546] & 0x04) ? 1 : 0;
  } else {
    $hellcow = ($CharData[588] & 0x01) && (~$CharData[546] & 0x04) ? 1 : 0;
  }
  // 552, 551 act I -> act II travel
  // 554, 553 Jerhyn intro
  // 565 - 554 Act II
  // 567, 566 act II -> act III travel
  // 569, 568 Hralti intro
  // 581 - 570 Act III
  // 583, 582 act III -> act IV travel
  // 585, 584 act IV intro
  // 591 - 586 Act IV
  // 593, 592 act IV -> act V
  // 599 - 594 unknown
  // 601, 600 talk to cain after killing diablo
  // 605 - 602 unknown
  // 617 - 606 Act V
  $hellsocket = ($CharData[606] & 0x20) && (~$CharData[606] & 0x01) ? 1 : 0;
  $hellpersonalize = ($CharData[612] & 0x10) && (~$CharData[612] & 0x01) ? 1 : 0;
  // 631 - 618 unknown

  // Waypoints 633 (643 - beginning of bitfield)
  $waypoints = array('Rogue Encampment', 'Cold Plains', 'Stony Field', 'Dark Wood', 'Black Marsh', 'Outer Cloister', 'Jail Level 1', 'Inner Cloister', 'Catacombs Level 2', 'Lut Gholein', 'Sewers Level 2', 'Dry Hills', 'Halls of the Dead Level 2', 'Far Oasis', 'Lost City', 'The Palace Cellar Level 1', 'Arcane Sanctuary', 'Canyon of the Magi', 'Kurast Docks', 'Spider Forest', 'Great Marsh', 'Flayer Jungle', 'Lower Kurast', 'Kurast Bazaar', 'Upper Kurast', 'Travincal', 'Durance of Hate Level 2', 'Pandemonium Fortress', 'City of the Damned', 'River of Flame', 'Harrogath', 'Frigid Highlands', 'Arreat Plateau', 'Crystalline Passage', 'Glacial Trail', 'Halls of Pain', 'Frozen Tundra', 'The Ancients\' Way', 'Worldstone Keep Level 2');
  // Normal
  $BinaryWaypoints = "";
  for($i=647;$i>=643;$i--) {
    $BinaryWaypoints .= sprintf("%08b", hexdec(padhex($CharData[$i])));
  }
  $NormalWaypoints = select_waypoints($BinaryWaypoints);
  // Nightmare
  $BinaryWaypoints = "";
  for($i=671;$i>=667;$i--) {
    $BinaryWaypoints .= sprintf("%08b", hexdec(padhex($CharData[$i])));
  }
  $NightmareWaypoints = select_waypoints($BinaryWaypoints);
  // Hell
  $BinaryWaypoints = "";
  for($i=695;$i>=691;$i--) {
    $BinaryWaypoints .= sprintf("%08b", hexdec(padhex($CharData[$i])));
  }
  $HellWaypoints = select_waypoints($BinaryWaypoints);


	$Difficulties = array ( 'Normal' , 'Nightmare' , 'Hell' ) ;

	foreach ( $Difficulties as $list ) {
		$j = 1 ;
		for ( $i = 0 ; $i < 39 ; $i++ ) {
			
			if ( $ { $list . "Waypoints" } [ $i ] ) {
				$status = 1 ;
			}
			else {
				$status = 0 ;
			}
			if ( $i < 9 ) {
				$Char_Waypoints [ $list ] [ 'Act1' ] [ ] = '<p class="wp' . $j . ( ( empty ( $status ) ) ? FALSE : ' enabled' ) . '"></p>' . "\n" ;
				$j++;
			}
			elseif ( $i < 18 ) {
				if ( $j == 10 ) { $j = 1 ; }
				$Char_Waypoints [ $list ] [ 'Act2' ] [ ] = '<p class="wp' . $j . ( ( empty ( $status ) ) ? FALSE : ' enabled' ) . '"></p>' . "\n" ;
				$j++;
			}
			elseif ( $i < 27 ) {
				if ( $j == 10 ) { $j = 1 ; }
				$Char_Waypoints [ $list ] [ 'Act3' ] [ ] = '<p class="wp' . $j . ( ( empty ( $status ) ) ? FALSE : ' enabled' ) . '"></p>' . "\n" ;
				$j++;
			}
			elseif ( $i < 30 ) {
				if ( $j == 10 ) { $j = 1 ; }
				$Char_Waypoints [ $list ] [ 'Act4' ] [ ] = '<p class="wp' . $j . ( ( empty ( $status ) ) ? FALSE : ' enabled' ) . '"></p>' . "\n" ;
				$j++;
				if ( $j == 4 ) { $j = 1 ; }
			}
			else {
				$Char_Waypoints [ $list ] [ 'Act5' ] [ ] = '<p class="wp' . $j . ( ( empty ( $status ) ) ? FALSE : ' enabled' ) . '"></p>' . "\n" ;
				$j++;
			}
		}
	}

  // Greetings 714
  $greetings = $CharData[717];
  $normalgheed = $greetings & 0x02;
  $normalakara = $greetings & 0x04;
  $normalkashya = $greetings & 0x08;
  $normalcharsi = $greetings & 0x20;
  $normalwarriv = $greetings & 0x80;

  $greetings = $CharData[718];
  $normaldrognan = $greetings & 0x02;
  $normalfara = $greetings & 0x04;
  $normallysander = $greetings & 0x08;
  $normalgeglash = $greetings & 0x10;
  $normalmeshif = $greetings & 0x20;
  $normalgreiz = $greetings & 0x80;

  $greetings = $CharData[719];
  $normalelzix = $greetings & 0x01;
  $normalcain = $greetings & 0x04;
  $normalasheara = $greetings & 0x20;
  $normalalkor = $greetings & 0x80;

  $greetings = $CharData[720];
  $normalormus = $greetings & 0x01;
  $normalmeshif2 = $greetings & 0x08;
  $normalnatalya = $greetings & 0x10;
  $normalanya = $greetings & 0x40;
  $normalmalah = $greetings & 0x80;

  $greetings = $CharData[721];
  $normalnihlathak = $greetings & 0x01;
  $normalqualkehk = $greetings & 0x02;
  $normalcain2 = $greetings & 0x04;

  $greetings = $CharData[725];
  $nightmaregheed = $greetings & 0x02;
  $nightmareakara = $greetings & 0x04;
  $nightmarekashya = $greetings & 0x08;
  $nightmarecharsi = $greetings & 0x20;
  $nightmarewarriv = $greetings & 0x80;

  $greetings = $CharData[726];
  $nightmaredrognan = $greetings & 0x02;
  $nightmarefara = $greetings & 0x04;
  $nightmarelysander = $greetings & 0x08;
  $nightmaregeglash = $greetings & 0x10;
  $nightmaremeshif = $greetings & 0x20;
  $nightmaregreiz = $greetings & 0x80;

  $greetings = $CharData[727];
  $nightmareelzix = $greetings & 0x01;
  $nightmarecain = $greetings & 0x04;
  $nightmareasheara = $greetings & 0x20;
  $nightmarealkor = $greetings & 0x80;

  $greetings = $CharData[728];
  $nightmareormus = $greetings & 0x01;
  $nightmaremeshif2 = $greetings & 0x08;
  $nightmarenatalya = $greetings & 0x10;
  $nightmareanya = $greetings & 0x40;
  $nightmaremalah = $greetings & 0x80;

  $greetings = $CharData[729];
  $nightmarenihlathak = $greetings & 0x01;
  $nightmarequalkehk = $greetings & 0x02;
  $nightmarecain2 = $greetings & 0x04;

  $greetings = $CharData[733];
  $hellgheed = $greetings & 0x02;
  $hellakara = $greetings & 0x04;
  $hellkashya = $greetings & 0x08;
  $hellcharsi = $greetings & 0x20;
  $hellwarriv = $greetings & 0x80;

  $greetings = $CharData[734];
  $helldrognan = $greetings & 0x02;
  $hellfara = $greetings & 0x04;
  $helllysander = $greetings & 0x08;
  $hellgeglash = $greetings & 0x10;
  $hellmeshif = $greetings & 0x20;
  $hellgreiz = $greetings & 0x80;

  $greetings = $CharData[735];
  $hellelzix = $greetings & 0x01;
  $hellcain = $greetings & 0x04;
  $hellasheara = $greetings & 0x20;
  $hellalkor = $greetings & 0x80;

  $greetings = $CharData[736];
  $hellormus = $greetings & 0x01;
  $hellmeshif2 = $greetings & 0x08;
  $hellnatalya = $greetings & 0x10;
  $hellanya = $greetings & 0x40;
  $hellmalah = $greetings & 0x80;

  $greetings = $CharData[737];
  $hellnihlathak = $greetings & 0x01;
  $hellqualkehk = $greetings & 0x02;
  $hellcain2 = $greetings & 0x04;


  // Player Stats 765 - variable
/*
  // Get the ones that will always be there first.
  $StatString = "";
  for($i=820;$i>766;$i--) {
    $StatString = $StatString . padhex($CharData[$i]);
  }

  $tempstats = hexdec(substr($StatString, -5, 3));
  $Strength = ($tempstats & 0x7fe) >> 1;

  $tempstats = hexdec(substr($StatString, -10, 3));
  $Energy = $tempstats & 0x3ff;

  $tempstats = hexdec(substr($StatString, -15, 4));
  $Dexterity = ($tempstats & 0x1ff8) >> 3;

  $tempstats = hexdec(substr($StatString, -19, 3));
  $Vitality = ($tempstats & 0xffc) >> 2;
*/

  $Strength = $Energy = $Dexterity = $Vitality = $StatPoints = $SkillPoints = $CurrentLife = $MaximumLife = $CurrentMana = $MaximumMana = $CurrentStamina = $MaximumStamina = $Level = $Experience = $PersonalGold = $StashGold = 0;
  $skillsection = strpos ($RawCharData, 'if', 767);
  $BinaryStats = "";
  for($i=$skillsection-1;$i>766;$i--) {
    $BinaryStats .= sprintf("%08b", hexdec(padhex($CharData[$i])));
  }

  $start = 0;
  $keepgoing=1;
  while($keepgoing) { // Need to add || -start >= strlen
    $id = bindec(substr($BinaryStats, $start-9, 9));
    switch ($id) {
      case 0: // Strength
        $Strength = bindec(substr($BinaryStats, $start-19, 10));
        $start -= 19;
        break;
      case 1: //Energy
        $Energy = bindec(substr($BinaryStats, $start-19, 10));
        $start -= 19;
        break;
      case 2: // Dexterity
        $Dexterity = bindec(substr($BinaryStats, $start-19, 10));
        $start -= 19;
        break;
      case 3: // Vitality
        $Vitality = bindec(substr($BinaryStats, $start-19, 10));
        $start -= 19;
        break;
      case 4: // Stat Points Remaining
        $StatPoints = bindec(substr($BinaryStats, $start-19, 10));
        $start -= 19;
        break;
      case 5: // Skill Choices Remaining
        $SkillPoints = bindec(substr($BinaryStats, $start-17, 8));
        $start -= 17;
        break;
      case 6: // Current Life (/256)
        $CurrentLife = (int) (bindec(substr($BinaryStats, $start-30, 21)) / 256);
        $start -= 30;
        break;
      case 7: // Maximum Life (/256)
        $MaximumLife = (int) (bindec(substr($BinaryStats, $start-30, 21)) / 256);
        $start -= 30;
        break;
      case 8: // Current Mana (/256)
        $CurrentMana = (int) (bindec(substr($BinaryStats, $start-30, 21)) / 256);
        $start -= 30;
        break;
      case 9: // Maximum Mana (/256)
        $MaximumMana = (int) (bindec(substr($BinaryStats, $start-30, 21)) / 256);
        $start -= 30;
        break;
      case 10: // (A) Current Stamina (/256)
        $CurrentStamina = (int) (bindec(substr($BinaryStats, $start-30, 21)) / 256);
        $start -= 30;
        break;
      case 11: // (B) Maximum Stamina (/256)
        $MaximumStamina = (int) (bindec(substr($BinaryStats, $start-30, 21)) / 256);
        $start -= 30;
        break;
      case 12: // (C) Level
        $Level = bindec(substr($BinaryStats, $start-16, 7));
        $start -= 16;
        break;
      case 13: // (D) Experience
        $Experience = bindec(substr($BinaryStats, $start-41, 32));
        $start -= 41;
        break;
      case 14: // (E) Gold on Person
        $PersonalGold = bindec(substr($BinaryStats, $start-34, 25));
        $start -= 34;
        break;
      case 15: // (F) 
        $StashGold = bindec(substr($BinaryStats, $start-34, 25));
        // $start -= 34;
        $keepgoing = 0;
        break;
      default:
        $keepgoing = 0;
    }
  }

  // Player Skills 812 - variable start $skillsection + 2
  $skillstarts = array(6, 36, 66, 96, 126, 221, 251);
  $count=0;
  $skillnames = array('');
  $skilllevels = array('');
  for ($i=$skillsection+2;$i<$skillsection+32;$i++) {
      array_push($skillnames, array_shift(skill_decode($skillstarts[$CharClass]+$count)));
      array_push($skilllevels, $CharData[$i]);
//      ${"Skill" . $count} = $CharData[$i];
      $count++;
    }

  // Player Item List 844 variable
  $itemcount = hexdec(padhex($CharData[$skillsection+35]) . padhex($CharData[$skillsection+34]));
  $mercitemstart = strpos($RawCharData, 'jf', $skillsection+36);
  $mercitemend = strpos($RawCharData, 'kf', $mercitemstart);
  $ItemList = array();
  $itemstart = $skillsection+38;
  for ($i=0;$i<$itemcount;$i++) {
    $itemend = strpos ($RawCharData, 'JM', $itemstart); // corpse will put a JM after the player item list - should always be there
//    if ($itemend === false || $itemend >= $mercitemstart || $itemstart <= $itemend) {
    if ($itemend === false || $itemend >= $mercitemstart) {
      break;
    } else {
      $itemstart = item_decode($itemstart, $itemend, $RawCharData, $CharData, $ItemList, $mercitemend, $Level);
    }
  }

  // Number of Corpses (0 or 1) - skip 12 bytes or map/location info, then normal item list
  $corpseitemcount = 0;
  $CorpseCount = hexdec(padhex($CharData[$itemend+3]) . padhex($CharData[$itemend+2]));
  if ($CorpseCount) {
    $CorpseItemList = array();
    $corpseitemcount = hexdec(padhex($CharData[$itemend+19]) . padhex($CharData[$itemend+18]));
    $itemstart = $itemend+22;
    for ($i=0;$i<$corpseitemcount;$i++) {
      if ($i == $corpseitemcount-1) {
        $itemend = $mercitemstart - 1;
      } else {
        $itemend = strpos ($RawCharData, 'JM', $itemstart); // this will lose the last item
      }
      if ($itemend === false || $itemend >= $mercitemstart) {
        break;
      } else {
        $itemstart = item_decode($itemstart, $itemend, $RawCharData, $CharData, $CorpseItemList, $mercitemend, $Level);
      }

    }
  }

  // Merc Item List
  if ($mercitemstart+2 != $mercitemend) {
    $mercitemcount = hexdec(padhex($CharData[$mercitemstart+5]) . padhex($CharData[$mercitemstart+4]));
    $MercItemList = array();
    $itemstart = $mercitemstart + 8;
    for ($i=0;$i<$mercitemcount;$i++) {
      $itemend = strpos ($RawCharData, 'JM', $itemstart);
      if ($itemend === false || $itemend >= $mercitemend) $itemend = $mercitemend;
      $itemstart = item_decode($itemstart, $itemend, $RawCharData, $CharData, $MercItemList, $mercitemend, $MercLevel);
    }
  } else {
    $mercitemcount = 0;
  }

  // Iron Golem - Expansion only
  if ($Expansion) {
    $hasirongolem = $CharData[$mercitemend+2];
    if ($hasirongolem) {
      $GolemItemList = array();
      $itemstart = $mercitemend + 5;
      $itemend = strlen($RawCharData);
      item_decode($itemstart, $itemend, $RawCharData, $CharData, $GolemItemList, $itemend, $Level);
      $GolemItem = $GolemItemList[0];
    }
  }
}

?>
