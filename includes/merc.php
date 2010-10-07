<?php
//if ( !defined('LOAD_INC') ) { header('Location: http://your.ladder.page/'); exit; }

function merc_name ($type, $name) {

  $roguenames = array('Aliza', 'Amplisa', 'Annor', 'Abhaya', 'Elly', 'Paige', 'Basanti', 'Blaise', 'Kyoko', 'Klaudia', 'Kundri', 'Kyle', 'Visala', 'Elexa', 'Floria', 'Fiona', 'Gwinni', 'Gaile', 'Hannah', 'Heather', 'Iantha', 'Diane', 'Isolde', 'Divo', 'Ithera', 'Itonya', 'Liene', 'Maeko', 'Mahala', 'Liaza', 'Meghan', 'Olena', 'Oriana', 'Ryann', 'Rozene', 'Raissa', 'Sharyn', 'Shikha', 'Debi', 'Tylena', 'Wendy');
  $desertnames = array('Hazade', 'Alhizeer', 'Azrael', 'Ahsab', 'Chalan', 'Haseen', 'Razan', 'Emilio', 'Pratham', 'Fazel', 'Jemali', 'Kasim', 'Gulzar', 'Mizan', 'Leharas', 'Durga', 'Neeraj', 'Ilzan', 'Zanarhi', 'Waheed', 'Vikhyat');
  $sorcnames = array('Jelani', 'Barani', 'Jabari', 'Devak', 'Raldin', 'Telash', 'Ajheed', 'Narphet', 'Khaleel', 'Phaet', 'Geshef', 'Vanji', 'Haphet', 'Thadar', 'Yatiraj', 'Rhadge', 'Yashied', 'Jarulf', 'Flux', 'Scorch');
  $barbnames = array('Varaya', 'Khan', 'Klisk', 'Bors', 'Brom', 'Wiglaf', 'Hrothgar', 'Scyld', 'Healfdane', 'Heorogar', 'Halgaunt', 'Hygelac', 'Egtheow', 'Bohdan', 'Wulfgar', 'Hild', 'Heatholaf', 'Weder', 'Vikhyat', 'Unferth', 'Sigemund', 'Heremod', 'Hengest', 'Folcwald', 'Frisian', 'Hnaef', 'Guthlaf', 'Oslaf', 'Yrmenlaf', 'Garmund', 'Freawaru', 'Eadgils', 'Onela', 'Damien', 'Erfor', 'Weohstan', 'Wulf', 'Bulwye', 'Lief', 'Magnus', 'Klatu', 'Drus', 'Hoku', 'Kord', 'Uther', 'Ip', 'Ulf', 'Tharr', 'Kaelim', 'Ulric', 'Alaric', 'Ethelred', 'Caden', 'Elgifu', 'Tostig', 'Alcuin', 'Emund', 'Sigurd', 'Gorm', 'Hollis', 'Ragnar', 'Torkel', 'Wulfstan', 'Alban', 'Barloc', 'Bill', 'Theodoric');

  switch ($type) {
    case "Rogue Scout":
      return $roguenames[$name];
      break;
    case "Desert Mercenary":
      return $desertnames[$name];
      break;
    case "Ironwolf":
      return $sorcnames[$name];
      break;
    case "Barbarian":
      return $barbnames[$name];
    default:
      return "";
  }
}

function merc_type($type, &$skill, &$diff) {

  $merctypes = array ('Rogue Scout', 'Rogue Scout', 'Rogue Scout', 'Rogue Scout', 'Rogue Scout', 'Rogue Scout', 'Desert Mercenary', 'Desert Mercenary', 'Desert Mercenary', 'Desert Mercenary', 'Desert Mercenary', 'Desert Mercenary', 'Desert Mercenary', 'Desert Mercenary', 'Desert Mercenary', 'Ironwolf', 'Ironwolf', 'Ironwolf', 'Ironwolf', 'Ironwolf', 'Ironwolf', 'Ironwolf', 'Ironwolf', 'Ironwolf', 'Barbarian', 'Barbarian', 'Barbarian', 'Barbarian', 'Barbarian', 'Barbarian');
  $mercskills = array ('Fire Arrow', 'Cold Arrow', 'Fire Arrow', 'Cold Arrow', 'Fire Arrow', 'Cold Arrow', 'Combat', 'Defensive', 'Offensive', 'Combat', 'Defensive', 'Offensive', 'Combat', 'Defensive', 'Offensive', 'Fire Spells', 'Cold Spells', 'Lightning Spells', 'Fire Spells', 'Cold Spells', 'Lightning Spells', 'Fire Spells', 'Cold Spells', 'Lightning Spells', '', '', '', '', '', '');
  $mercdiff = array ('Normal', 'Normal', 'Nightmare', 'Nightmare', 'Hell', 'Hell', 'Normal', 'Normal', 'Normal', 'Nightmare', 'Nightmare', 'Nightmare', 'Hell', 'Hell', 'Hell', 'Normal', 'Normal', 'Normal', 'Nightmare', 'Nightmare', 'Nightmare', 'Hell', 'Hell', 'Hell', 'Normal', 'Normal', 'Nightmare', 'Nightmare', 'Hell', 'Hell');

  $skill = $mercskills[$type];
  $diff = $mercdiff[$type];

  return $merctypes[$type];
}

function merc_level($exp, $type, $skill, $diff) {

  switch($type) {
    case "Rogue Scout":
      if ($skill == "Fire Arrow") {
        $rate = 100;
      } else { // "Ice Arrow"
        $rate = 105;
      }
      break;
    case "Desert Mercenary":
      $rate = 110;
      break;
    case "Ironwolf":
      if ($skill == "Cold Spells") {
        $rate = 120;
      } else { // "Fire Spells" and "Lightning Spells"
        $rate = 110;
      }
      break;
    case "Barbarian":
      $rate = 120;
      break;
  }
  if ($diff == "Nightmare") $rate += 10;
  if ($diff == "Hell") $rate += 20;

  $requiredexp = $rate * 12;
  $level = 2;
  while ($exp > $requiredexp) {
    $level++;
    $requiredexp = $rate * ($level+1) * $level * $level;
  }
  return $level-1;
}


?>
