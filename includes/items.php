<?php
//if ( !defined('LOAD_INC') ) { header('Location: http://your.ladder.page/'); exit; }

function item_name ($item, &$desc, &$stacked) {
  switch ($item) {

    // Potions
    case "yps":
      $desc = "poti";
      return "Antidote Potion";
      break;
    case "vps":
      $desc = "poti";
      return "Stamina Potion";
      break;
    case "vms":
      $desc = "poti";
      return "Thawing Potion";
      break;
    case "hp1":
      $desc = "poti";
      return "Minor Healing Potion";
      break;
    case "hp2":
      $desc = "poti";
      return "Light Healing Potion";
      break;
    case "hp3":
      $desc = "poti";
      return "Healing Potion";
      break;
    case "hp4":
      $desc = "poti";
      return "Greater Healing Potion";
      break;
    case "hp5":
      $desc = "poti";
      return "Super Healing Potion";
      break;
    case "mp1":
      $desc = "poti";
      return "Minor Mana Potion";
      break;
    case "mp2":
      $desc = "poti";
      return "Light Mana Potion";
      break;
    case "mp3":
      $desc = "poti";
      return "Mana Potion";
      break;
    case "mp4":
      $desc = "poti";
      return "Greater Mana Potion";
      break;
    case "mp5":
      $desc = "poti";
      return "Super Mana Potion";
      break;
    case "rvs":
      $desc = "poti";
      return "Rejuv Potion";
      break;
    case "rvl":
      $desc = "poti";
      return "Full Rejuv Potion";
      break;
    // Throwing Potions
    case "gps":
      $desc = "tpot";
      return "Rancid Gas Potion";
      break;
    case "ops":
      $desc = "tpot";
      return "Oil Potion";
      break;
    case "gpm":
      $desc = "tpot";
      return "Choking Gas Potion";
      break;
    case "opm":
      $desc = "tpot";
      return "Exploding Potion";
      break;
    case "gpl":
      $desc = "tpot";
      return "Strangling Gas";
      break;
    case "opl":
      $desc = "tpot";
      return "Fulminating Potion";
      break;
    // Charms
    case "cm1":
      $desc = "char";
      return "Small Charm";
      break;
    case "cm2":
      $desc = "char";
      return "Large Charm";
      break;
    case "cm3":
      $desc = "char";
      return "Grand Charm";
      break;
    // Scrolls
    case "isc":
      $desc = "scro";
      return "Identify Scroll";
      break;
    case "tsc":
      $desc = "scro";
      return "Town Portal Scroll";
      break;
    // Tomes
    case "tbk":
      $desc = "book";
      $stacked = 1;
      return "Tome of Town Portal";
      break;
    case "ibk":
      $desc = "book";
      $stacked = 1;
      return "Tome of Identify";
      break;
    // Misc
    case "aqv":
      $stacked = 1;
      $desc = "bowq";
      return "Arrows";
      break;
    case "cqv":
      $stacked = 1;
      $desc = "xbow";
      return "Bolts";
      break;
    case "jew":
      $desc = "jewl";
      return "Jewel";
      break;
    case "key":
      $stacked = 1;
      $desc = "key";
      return "Key";
//      return "Skeleton Key";
      break;
    case "amu":
      $desc = "amulet";
      return "Amulet";
      break;
    case "gld":
      $desc = "gold";
      return "Gold";
      break;
    case "rin":
      $desc = "ring";
      return "Ring";
      break;
    case "ear":
      $desc = "body";
      return "Ear";
      break;
    // Gems
    case "gcv":
      $desc = "gem";
      return "Chipped Amethyst";
      break;
    case "gfv":
      $desc = "gem";
      return "Flawed Amethyst";
      break;
    case "gsv":
      $desc = "gem";
      return "Amethyst";
      break;
    case "gzv":
      $desc = "gem";
      return "Flawless Amethyst";
      break;
    case "gpv":
      $desc = "gem";
      return "Perfect Amethyst";
      break;
    case "gcw":
      $desc = "gem";
      return "Chipped Diamond";
      break;
    case "gfw":
      $desc = "gem";
      return "Flawed Diamond";
      break;
    case "gsw":
      $desc = "gem";
      return "Diamond";
      break;
    case "glw":
      $desc = "gem";
      return "Flawless Diamond";
      break;
    case "gpw":
      $desc = "gem";
      return "Perfect Diamond";
      break;
    case "gcg":
      $desc = "gem";
      return "Chipped Emerald";
      break;
    case "gfg":
      $desc = "gem";
      return "Flawed Emerald";
      break;
    case "gsg":
      $desc = "gem";
      return "Emerald";
      break;
    case "glg":
      $desc = "gem";
      return "Flawless Emerald";
      break;
    case "gpg":
      $desc = "gem";
      return "Perfect Emerald";
      break;
    case "gcr":
      $desc = "gem";
      return "Chipped Ruby";
      break;
    case "gfr":
      $desc = "gem";
      return "Flawed Ruby";
      break;
    case "gsr":
      $desc = "gem";
      return "Ruby";
      break;
    case "glr":
      $desc = "gem";
      return "Flawless Ruby";
      break;
    case "gpr":
      $desc = "gem";
      return "Perfect Ruby";
      break;
    case "gcb":
      $desc = "gem";
      return "Chipped Saphire";
      break;
    case "gfb":
      $desc = "gem";
      return "Flawed Saphire";
      break;
    case "gsb":
      $desc = "gem";
      return "Saphire";
      break;
    case "glb":
      $desc = "gem";
      return "Flawless Saphire";
      break;
    case "gpb":
      $desc = "gem";
      return "Perfect Saphire";
      break;
    case "skc":
      $desc = "gem";
      return "Chipped Skull";
      break;
    case "skf":
      $desc = "gem";
      return "Flawed Skull";
      break;
    case "sku":
      $desc = "gem";
      return "Skull";
      break;
    case "skl":
      $desc = "gem";
      return "Flawless Skull";
      break;
    case "skz":
      $desc = "gem";
      return "Perfect Skull";
      break;
    case "gcy":
      $desc = "gem";
      return "Chipped Topaz";
      break;
    case "gfy":
      $desc = "gem";
      return "Flawed Topaz";
      break;
    case "gsy":
      $desc = "gem";
      return "Topaz";
      break;
    case "gly":
      $desc = "gem";
      return "Flawless Topaz";
      break;
    case "gpy":
      $desc = "gem";
      return "Perfect Topaz";
      break;
    // Runes
    case "r01":
      $desc = "rune";
      return "El Rune";
      break;
    case "r02":
      $desc = "rune";
      return "Eld Rune";
      break;
    case "r03":
      $desc = "rune";
      return "Tir Rune";
      break;
    case "r04":
      $desc = "rune";
      return "Nef Rune";
      break;
    case "r05":
      $desc = "rune";
      return "Eth Rune";
      break;
    case "r06":
      $desc = "rune";
      return "Ith Rune";
      break;
    case "r07":
      $desc = "rune";
      return "Tal Rune";
      break;
    case "r08":
      $desc = "rune";
      return "Ral Rune";
      break;
    case "r09":
      $desc = "rune";
      return "Ort Rune";
      break;
    case "r10":
      $desc = "rune";
      return "Thul Rune";
      break;
    case "r11":
      $desc = "rune";
      return "Amn Rune";
      break;
    case "r12":
      $desc = "rune";
      return "Sol Rune";
      break;
    case "r13":
      $desc = "rune";
      return "Shael Rune";
      break;
    case "r14":
      $desc = "rune";
      return "Dol Rune";
      break;
    case "r15":
      $desc = "rune";
      return "Hel Rune";
      break;
    case "r16":
      $desc = "rune";
      return "Io Rune";
      break;
    case "r17":
      $desc = "rune";
      return "Lum Rune";
      break;
    case "r18":
      $desc = "rune";
      return "Ko Rune";
      break;
    case "r19":
      $desc = "rune";
      return "Fal Rune";
      break;
    case "r20":
      $desc = "rune";
      return "Lem Rune";
      break;
    case "r21":
      $desc = "rune";
      return "Pul Rune";
      break;
    case "r22":
      $desc = "rune";
      return "Um Rune";
      break;
    case "r23":
      $desc = "rune";
      return "Mal Rune";
      break;
    case "r24":
      $desc = "rune";
      return "Ist Rune";
      break;
    case "r25":
      $desc = "rune";
      return "Gul Rune";
      break;
    case "r26":
      $desc = "rune";
      return "Vex Rune";
      break;
    case "r27":
      $desc = "rune";
      return "Ohm Rune";
      break;
    case "r28":
      $desc = "rune";
      return "Lo Rune";
      break;
    case "r29":
      $desc = "rune";
      return "Sur Rune";
      break;
    case "r30":
      $desc = "rune";
      return "Ber Rune";
      break;
    case "r31":
      $desc = "rune";
      return "Jah Rune";
      break;
    case "r32":
      $desc = "rune";
      return "Cham Rune";
      break;
    case "r33":
      $desc = "rune";
      return "Zod Rune";
      break;
    // Quest Items - Act 1
    case "leg":
      $desc = "weap";
      return "Wirt's Leg";
      break;
    case "hdm":
      $desc = "ques";
      return "Horadric Malus";
      break;
    case "bks":
      $desc = "ques";
      return "Scroll of Infuss 1";
      break;
    case "bkd":
      $desc = "ques";
      return "Scroll of Infuss 2";
      break;
    // Quest Items - Act 2
    case "ass":
      $desc = "ques";
      return "Book of Skill";
      break;
    case "box":
      $desc = "cube";
      return "Horadric Cube";
      break;
    case "tr1":
      $desc = "ques";
      return "Hoadric Scroll";
      break;
    case "msf":
      $desc = "ques";
      return "Staff of Kings";
      break;
    case "vip":
      $desc = "ques";
      return "Viper Amulet";
      break;
    case "hst":
      $desc = "ques";
      return "Horadric Staff";
      break;
    // Quest Items - Act III
    case "xyz":
      $desc = "ques";
      return "Potion of Life";
      break;
    case "j34":
      $desc = "ques";
      return "A Jade Figurine";
      break;
    case "g34":
      $desc = "ques";
      return "The Golden Bird";
      break;
    case "bbb":
      $desc = "ques";
      return "Lan Esen's Tome";
      break;
    case "g33":
      $desc = "ques";
      return "Gidbinn";
      break;
    case "qf1":
      $desc = "ques";
      return "Khalim's Flail";
      break;
    case "qf2":
      $desc = "ques";
      return "Khalim's Will";
      break;
    case "qey":
      $desc = "ques";
      return "Khalim's Eye";
      break;
    case "qhr":
      $desc = "ques";
      return "Khalim's Heart";
      break;
    case "qbr":
      $desc = "ques";
      return "Khalim's Brain";
      break;
    case "mss":
      $desc = "ques";
      return "Methisto's Soulstone";
      break;
    // Quest Items - Act IV
    case "hfh":
      $desc = "ques";
      return "Hellforge Hammer";
      break;
    // Quest Items - Act V
    case "ice":
      $desc = "ques";
      return "Malah's Potion";
      break;
    case "tr2":
      $desc = "ques";
      return "Scroll of Resistance";
      break;
    // Quest Items - Pandemonium Event
    case "pk1";
      $desc = "ques";
      return "Key of Terror";
      break;
    case "pk2";
      $desc = "ques";
      return "Key of Hate";
      break;
    case "pk3";
      $desc = "ques";
      return "Key of Destruction";
      break;
    case "bey";
      $desc = "ques";
      return "Baal's Eye";
      break;
    case "dhn";
      $desc = "ques";
      return "Diablo's Horn";
      break;
    case "mbr";
      $desc = "ques";
      return "Mephisto's Brain";
      break;
    case "std";
      $desc = "ques";
      return "Standard of Heroes";
      break;

    // Armor - Helms - Normal
    case "cap":
      $desc = "armo";
      return "Cap";
      break;
    case "skp":
      $desc = "armo";
      return "Skull Cap";
      break;
    case "hlm":
      $desc = "armo";
      return "Helm";
      break;
    case "fhl":
      $desc = "armo";
      return "Full Helm";
      break;
    case "ghm":
      $desc = "armo";
      return "Great Helm";
      break;
    case "crn":
      $desc = "armo";
      return "Crown";
      break;
    case "msk":
      $desc = "armo";
      return "Mask";
      break;
    case "bhm":
      $desc = "armo";
      return "Bone Helm";
      break;
    // Armor - Helms - Exceptional
    case "xap":
      $desc = "armo";
      return "War Hat";
      break;
    case "xkp":
      $desc = "armo";
      return "Sallet";
      break;
    case "xlm":
      $desc = "armo";
      return "Casque";
      break;
    case "xhl":
      $desc = "armo";
      return "Basinet";
      break;
    case "xhm":
      $desc = "armo";
      return "Winged Helm";
      break;
    case "xrn":
      $desc = "armo";
      return "Grand Crown";
      break;
    case "xsk":
      $desc = "armo";
      return "Death Mask";
      break;
    case "xh9":
      $desc = "armo";
      return "Grim Helm";
      break;
    // Armor - Helms - Elite
    case "uap":
      $desc = "armo";
      return "Shako";
      break;
    case "ukp":
      $desc = "armo";
      return "Hydraskull";
      break;
    case "ulm":
      $desc = "armo";
      return "Armet";
      break;
    case "uhl":
      $desc = "armo";
      return "Giant Conch";
      break;
    case "uhm":
      $desc = "armo";
      return "Spired Helm";
      break;
    case "urn":
      $desc = "armo";
      return "Corona";
      break;
    case "usk":
      $desc = "armo";
      return "Demonhead";
      break;
    case "uh9":
      $desc = "armo";
      return "Bone Visage";
      break;
    // Armor - Helms - Other
    case "ci0":
      $desc = "armo";
      return "Circlet";
      break;
    case "ci1":
      $desc = "armo";
      return "Coronet";
      break;
    case "ci2":
      $desc = "armo";
      return "Tiara";
      break;
    case "ci3":
      $desc = "armo";
      return "Diadem";
      break;
    // Armor - Body Armor - Normal
    case "qui":
      $desc = "armo";
      return "Quilted Armor";
      break;
    case "lea":
      $desc = "armo";
      return "Leather Armor";
      break;
    case "hla":
      $desc = "armo";
      return "Hard Leather";
      break;
    case "stu":
      $desc = "armo";
      return "Studded Leather";
      break;
    case "rng":
      $desc = "armo";
      return "Ring Mail";
      break;
    case "scl":
      $desc = "armo";
      return "Scale Mail";
      break;
    case "chn":
      $desc = "armo";
      return "Chain Mail";
      break;
    case "brs":
      $desc = "armo";
      return "Breast Plate";
      break;
    case "spl":
      $desc = "armo";
      return "Splint Mail";
      break;
    case "plt":
      $desc = "armo";
      return "Plate Mail";
      break;
    case "fld":
      $desc = "armo";
      return "Field Plate";
      break;
    case "gth":
      $desc = "armo";
      return "Gothic Plate";
      break;
    case "ful":
      $desc = "armo";
      return "Full Plate Mail";
      break;
    case "aar":
      $desc = "armo";
      return "Ancient Armor";
      break;
    case "ltp":
      $desc = "armo";
      return "Light Plate";
      break;
    // Armor - Body Armor - Exceptional
    case "xui":
      $desc = "armo";
      return "Ghost Armor";
      break;
    case "xea":
      $desc = "armo";
      return "Serpentskin";
      break;
    case "xla":
      $desc = "armo";
      return "Demonhide Armor";
      break;
    case "xtu":
      $desc = "armo";
      return "Trellised Armor";
      break;
    case "xng":
      $desc = "armo";
      return "Linked Mail";
      break;
    case "xcl":
      $desc = "armo";
      return "Tigulated Mail";
      break;
    case "xhn":
      $desc = "armo";
      return "Mesh Armor";
      break;
    case "xrs":
      $desc = "armo";
      return "Cuirass";
      break;
    case "xpl":
      $desc = "armo";
      return "Russet Armor";
      break;
    case "xlt":
      $desc = "armo";
      return "Templar Coat";
      break;
    case "xld":
      $desc = "armo";
      return "Sharktooth";
      break;
    case "xth":
      $desc = "armo";
      return "Embossed Plate";
      break;
    case "xul":
      $desc = "armo";
      return "Chaos Armor";
      break;
    case "xar":
      $desc = "armo";
      return "Ornate Armor";
      break;
    case "xtp":
      $desc = "armo";
      return "Mage Plate";
      break;
    // Armor - Body Armor - Elite
    case "uui":
      $desc = "armo";
      return "Dusk Shroud";
      break;
    case "uea":
      $desc = "armo";
      return "Wyrmhide";
      break;
    case "ula":
      $desc = "armo";
      return "Scarab Husk";
      break;
    case "utu":
      $desc = "armo";
      return "Wire Fleece";
      break;
    case "ung":
      $desc = "armo";
      return "Diamond Mail";
      break;
    case "ucl":
      $desc = "armo";
      return "Loricated Mail";
      break;
    case "uhn":
      $desc = "armo";
      return "Boneweave";
      break;
    case "urs":
      $desc = "armo";
      return "Great Hauberk";
      break;
    case "upl":
      $desc = "armo";
      return "Balrog Skin";
      break;
    case "ult":
      $desc = "armo";
      return "Hellforge Plate";
      break;
    case "uld":
      $desc = "armo";
      return "Kraken Shell";
      break;
    case "uth":
      $desc = "armo";
      return "Lacquered Plate";
      break;
    case "uul":
      $desc = "armo";
      return "Shadow Plate";
      break;
    case "uar":
      $desc = "armo";
      return "Sacred Armor";
      break;
    case "utp":
      $desc = "armo";
      return "Archon Plate";
      break;
    // Armor - Shields - Normal
    case "buc":
      $desc = "shld";
      return "Buckler";
      break;
    case "sml":
      $desc = "shld";
      return "Small Shield";
      break;
    case "lrg":
      $desc = "shld";
      return "Large Shield";
      break;
    case "kit":
      $desc = "shld";
      return "Kite Shield";
      break;
    case "tow":
      $desc = "shld";
      return "Tower Shield";
      break;
    case "gts":
      $desc = "shld";
      return "Gothic Shield";
      break;
    case "bsh":
      $desc = "shld";
      return "Bone Shield";
      break;
    case "spk":
      $desc = "shld";
      return "Spiked Shield";
      break;
    // Armor - Shields - Exceptional
    case "xuc":
      $desc = "shld";
      return "Defender";
      break;
    case "xml":
      $desc = "shld";
      return "Round Shield";
      break;
    case "xrg":
      $desc = "shld";
      return "Scutum";
      break;
    case "xit":
      $desc = "shld";
      return "Dragon Shield";
      break;
    case "xow":
      $desc = "shld";
      return "Pavise";
      break;
    case "xts":
      $desc = "shld";
      return "Ancient Shield";
      break;
    case "xsh":
      $desc = "shld";
      return "Grim Shield";
      break;
    case "xpk":
      $desc = "shld";
      return "Barbed Shield";
      break;
    // Armor - Shields - Elite
    case "uuc":
      $desc = "shld";
      return "Heater";
      break;
    case "uml":
      $desc = "shld";
      return "Luna";
      break;
    case "urg":
      $desc = "shld";
      return "Hyperion";
      break;
    case "uit":
      $desc = "shld";
      return "Monarch";
      break;
    case "uow":
      $desc = "shld";
      return "Aegis";
      break;
    case "uts":
      $desc = "shld";
      return "Ward";
      break;
    case "ush":
      $desc = "shld";
      return "Troll Nest";
      break;
    case "upk":
      $desc = "shld";
      return "Blade Barrier";
      break;
    // Armor - Gloves - Normal
    case "lgl":
      $desc = "armo";
      return "Leather Gloves";
      break;
    case "vgl":
      $desc = "armo";
      return "Heavy Gloves";
      break;
    case "mgl":
      $desc = "armo";
      return "Chain Gloves";
      break;
    case "tgl":
      $desc = "armo";
      return "Light Gauntlets";
      break;
    case "hgl":
      $desc = "armo";
      return "Gauntlets";
      break;
    // Armor - Gloves - Exceptional
    case "xlg":
      $desc = "armo";
      return "Demonhide Gloves";
      break;
    case "xvg":
      $desc = "armo";
      return "Sharkskin Gloves";
      break;
    case "xmg":
      $desc = "armo";
      return "Heavy Bracers";
      break;
    case "xtg":
      $desc = "armo";
      return "Battle Gauntlets";
      break;
    case "xhg":
      $desc = "armo";
      return "War Gauntlets";
      break;
    // Armor - Gloves - Elite
    case "ulg":
      $desc = "armo";
      return "Bramble Mitts";
      break;
    case "uvg":
      $desc = "armo";
      return "Vampirebone Gloves";
      break;
    case "umg":
      $desc = "armo";
      return "Vambraces";
      break;
    case "utg":
      $desc = "armo";
      return "Crusader Gauntlets";
      break;
    case "uhg":
      $desc = "armo";
      return "Ogre Gauntlets";
      break;
    // Armor - Boots - Normal
    case "lbt":
      $desc = "armo";
      return "Boots";
      break;
    case "vbt":
      $desc = "armo";
      return "Heavy Boots";
      break;
    case "mbt":
      $desc = "armo";
      return "Chain Boots";
      break;
    case "tbt":
      $desc = "armo";
      return "Light Plate";
      break;
    case "hbt":
      $desc = "armo";
      return "Greaves";
      break;
    // Armor - Boots - Exceptional
    case "xlb":
      $desc = "armo";
      return "Demonhide Boots";
      break;
    case "xvb":
      $desc = "armo";
      return "Sharkskin Boots";
      break;
    case "xmb":
      $desc = "armo";
      return "Mesh Boots";
      break;
    case "xtb":
      $desc = "armo";
      return "Battle Boots";
      break;
    case "xhb":
      $desc = "armo";
      return "War Boots";
      break;
    // Armor - Boots - Elite
    case "ulb":
      $desc = "armo";
      return "Wyrmhide Boots";
      break;
    case "uvb":
      $desc = "armo";
      return "Scarabshell Boots";
      break;
    case "umb":
      $desc = "armo";
      return "Boneweave Boots";
      break;
    case "utb":
      $desc = "armo";
      return "Mirrored Boots";
      break;
    case "uhb":
      $desc = "armo";
      return "Myrmidon Greaves";
      break;
    // Armor - Belts - Normal
    case "lbl":
      $desc = "armo";
      return "Sash";
      break;
    case "vbl":
      $desc = "armo";
      return "Light Belt";
      break;
    case "mbl":
      $desc = "armo";
      return "Belt";
      break;
    case "tbl":
      $desc = "armo";
      return "Heavy Belt";
      break;
    case "hbl":
      $desc = "armo";
      return "Plated Belt";
      break;
    // Armor - Belts - Exceptional
    case "zlb":
      $desc = "armo";
      return "Demonhide Sash";
      break;
    case "zvb":
      $desc = "armo";
      return "Sharkskin Belt";
      break;
    case "zmb":
      $desc = "armo";
      return "Mesh Belt";
      break;
    case "ztb":
      $desc = "armo";
      return "Battle Belt";
      break;
    case "zhb":
      $desc = "armo";
      return "War Belt";
      break;
    // Armor - Belts - Elite
    case "ulc":
      $desc = "armo";
      return "Spiderweb Sash";
      break;
    case "uvc":
      $desc = "armo";
      return "Vampirefang Belt";
      break;
    case "umc":
      $desc = "armo";
      return "Mithril Coil";
      break;
    case "utc":
      $desc = "armo";
      return "Troll Belt";
      break;
    case "uhc":
      $desc = "armo";
      return "Colossus Girdle";
      break;
    // Armor - Druid Pelts - Normal
    case "dr1":
      $desc = "armo";
      return "Wolf Head";
      break;
    case "dr2":
      $desc = "armo";
      return "Hawk Helm";
      break;
    case "dr3":
      $desc = "armo";
      return "Antlers";
      break;
    case "dr4":
      $desc = "armo";
      return "Falcon Mask";
      break;
    case "dr5":
      $desc = "armo";
      return "Spirit Mask";
      break;
    // Armor - Druid Pelts - Exceptional
    case "dr6":
      $desc = "armo";
      return "Alpha Helm";
      break;
    case "dr7":
      $desc = "armo";
      return "Griffon Headress";
      break;
    case "dr8":
      $desc = "armo";
      return "Hunter's Guise";
      break;
    case "dr9":
      $desc = "armo";
      return "Sacred Feathers";
      break;
    case "dra":
      $desc = "armo";
      return "Totemic Mask";
      break;
    // Armor - Druid Pelts - Elite
    case "drb":
      $desc = "armo";
      return "Blood Spirit";
      break;
    case "drc":
      $desc = "armo";
      return "Sun Spirit";
      break;
    case "drd":
      $desc = "armo";
      return "Earth Spirit";
      break;
    case "dre":
      $desc = "armo";
      return "Sky Spirit";
      break;
    case "drf":
      $desc = "armo";
      return "Dream Spirit";
      break;
    // Armor - Barbarian Helms - Normal
    case "ba1":
      $desc = "armo";
      return "Jawbone Cap";
      break;
    case "ba2":
      $desc = "armo";
      return "Fanged Helm";
      break;
    case "ba3":
      $desc = "armo";
      return "Horned Helm";
      break;
    case "ba4":
      $desc = "armo";
      return "Assualt Helmet";
      break;
    case "ba5":
      $desc = "armo";
      return "Avenger Guard";
      break;
    // Armor - Barbarian Helms - Exceptional
    case "ba6":
      $desc = "armo";
      return "Jawbone Visor";
      break;
    case "ba7":
      $desc = "armo";
      return "Lion Helm";
      break;
    case "ba8":
      $desc = "armo";
      return "Rage Mask";
      break;
    case "ba9":
      $desc = "armo";
      return "Savage Helmet";
      break;
    case "baa":
      $desc = "armo";
      return "Slayer Guard";
      break;
    // Armor - Barbarian Helms - Elite
    case "bab":
      $desc = "armo";
      return "Carnage Helm";
      break;
    case "bac":
      $desc = "armo";
      return "Fury Visor";
      break;
    case "bad":
      $desc = "armo";
      return "Destroyer Helm";
      break;
    case "bae":
      $desc = "armo";
      return "Conqueror Crown";
      break;
    case "baf":
      $desc = "armo";
      return "Guardian Crown";
      break;
    // Armor - Paladin Shields - Normal
    case "pa1":
      $desc = "shld";
      return "Targe";
      break;
    case "pa2":
      $desc = "shld";
      return "Rondache";
      break;
    case "pa3":
      $desc = "shld";
      return "Heraldic Shield";
      break;
    case "pa4":
      $desc = "shld";
      return "Aerin Shield";
      break;
    case "pa5":
      $desc = "shld";
      return "Crown Shield";
      break;
    // Armor - Paladin Shields - Exceptional
    case "pa6":
      $desc = "shld";
      return "Akaran Targe";
      break;
    case "pa7":
      $desc = "shld";
      return "Akaran Rondache";
      break;
    case "pa8":
      $desc = "shld";
      return "Protector Shield";
      break;
    case "pa9":
      $desc = "shld";
      return "Guilded Shield";
      break;
    case "paa":
      $desc = "shld";
      return "Royal Shield";
      break;
    // Armor - Paladin Shields - Elite
    case "pab":
      $desc = "shld";
      return "Sacred Targe";
      break;
    case "pac":
      $desc = "shld";
      return "Sacred Rondache";
      break;
    case "pad":
      $desc = "shld";
      return "Kurast Shield";
      break;
    case "pae":
      $desc = "shld";
      return "Zakarum Shield";
      break;
    case "paf":
      $desc = "shld";
      return "Vortex Shield";
      break;
    // Armor - Necromancer Shrunken Heads - Normal
    case "ne1":
      $desc = "shld";
      return "Preserved Head";
      break;
    case "ne2":
      $desc = "shld";
      return "Zombie Head";
      break;
    case "ne3":
      $desc = "shld";
      return "Unraveller Head";
      break;
    case "ne4":
      $desc = "shld";
      return "Gargoyle Head";
      break;
    case "ne5":
      $desc = "shld";
      return "Demon Head";
      break;
    // Armor - Necromancer Shrunken Heads - Exceptional
    case "ne6":
      $desc = "shld";
      return "Mummified Trophy";
      break;
    case "ne7":
      $desc = "shld";
      return "Fetish Trophy";
      break;
    case "ne8":
      $desc = "shld";
      return "Sexton Trophy";
      break;
    case "ne9":
      $desc = "shld";
      return "Cantor Trophy";
      break;
    case "nea":
      $desc = "shld";
      return "Hierophant Trophy";
      break;
    // Armor - Necromancer Shrunken Heads - Elite
    case "neb":
      $desc = "shld";
      return "Minion Skull";
      break;
    case "nec":
      $desc = "shld";
      return "Hellspawn Skull";
      break;
    case "ned":
      $desc = "shld";
      return "Overseer Skull";
      break;
    case "nee":
      $desc = "shld";
      return "Succubae Skull";
      break;
    case "nef":
      $desc = "shld";
      return "Bloodlord Skull";
      break;

    // Weapons - Axes - Normal
    case "hax":
      $desc = "weap";
      return "Hand Axe";
      break;
    case "axe":
      $desc = "weap";
      return "Axe";
      break;
    case "2ax":
      $desc = "weap";
      return "Double Axe";
      break;
    case "mpi":
      $desc = "weap";
      return "Military Pick";
      break;
    case "wax":
      $desc = "weap";
      return "War Axe";
      break;
    case "lax":
      $desc = "weap";
      return "Large Axe";
      break;
    case "bax":
      $desc = "weap";
      return "Broad Axe";
      break;
    case "btx":
      $desc = "weap";
      return "Battle Axe";
      break;
    case "gax":
      $desc = "weap";
      return "Great Axe";
      break;
    case "gix":
      $desc = "weap";
      return "Giant Axe";
      break;
    // Weapons - Axes - Exceptional
    case "9ha":
      $desc = "weap";
      return "Hatchet";
      break;
    case "9ax":
      $desc = "weap";
      return "Cleaver";
      break;
    case "92a":
      $desc = "weap";
      return "Twin Axe";
      break;
    case "9mp":
      $desc = "weap";
      return "Crowbill";
      break;
    case "9wa":
      $desc = "weap";
      return "Naga";
      break;
    case "9la":
      $desc = "weap";
      return "Military Axe";
      break;
    case "9ba":
      $desc = "weap";
      return "Bearded Axe";
      break;
    case "9bt":
      $desc = "weap";
      return "Tabar";
      break;
    case "9ga":
      $desc = "weap";
      return "Gothic Axe";
      break;
    case "9gi":
      $desc = "weap";
      return "Ancient Axe";
      break;
    // Weapons - Axes - Elite
    case "7ha":
      $desc = "weap";
      return "Tomahawk";
      break;
    case "7ax":
      $desc = "weap";
      return "Small Crescent";
      break;
    case "72a":
      $desc = "weap";
      return "Ettin Axe";
      break;
    case "7mp":
      $desc = "weap";
      return "War Spike";
      break;
    case "7wa":
      $desc = "weap";
      return "Berserker Axe";
      break;
    case "7la":
      $desc = "weap";
      return "Feral Axe";
      break;
    case "7ba":
      $desc = "weap";
      return "Silver Edged Axe";
      break;
    case "7bt":
      $desc = "weap";
      return "Decapitator";
      break;
    case "7ga":
      $desc = "weap";
      return "Champion Axe";
      break;
    case "7gi":
      $desc = "weap";
      return "Glorious Axe";
      break;
    // Weapons - Maces - Normal
    case "clb":
      $desc = "weap";
      return "Club";
      break;
    case "spc":
      $desc = "weap";
      return "Spiked Club";
      break;
    case "mac":
      $desc = "weap";
      return "Mace";
      break;
    case "mst":
      $desc = "weap";
      return "Morning Star";
      break;
    case "fla":
      $desc = "weap";
      return "Flail";
      break;
    case "whm":
      $desc = "weap";
      return "War Hammer";
      break;
    case "mau":
      $desc = "weap";
      return "Maul";
      break;
    case "gma":
      $desc = "weap";
      return "Great Maul";
      break;
    // Weapons - Maces - Exceptional
    case "9cl":
      $desc = "weap";
      return "Cudgel";
      break;
    case "9sp":
      $desc = "weap";
      return "Barbed Club";
      break;
    case "9ma":
      $desc = "weap";
      return "Flanged Mace";
      break;
    case "9mt":
      $desc = "weap";
      return "Jagged Star";
      break;
    case "9fl":
      $desc = "weap";
      return "Knout";
      break;
    case "9wh":
      $desc = "weap";
      return "Battle Hammer";
      break;
    case "9m9":
      $desc = "weap";
      return "War Club";
      break;
    case "9gm":
      $desc = "weap";
      return "Martel de Fer";
      break;
    // Weapons - Maces - Elite
    case "7cl":
      $desc = "weap";
      return "Truncheon";
      break;
    case "7sp":
      $desc = "weap";
      return "Tyrant Club";
      break;
    case "7ma":
      $desc = "weap";
      return "Reinforced Mace";
      break;
    case "7mt":
      $desc = "weap";
      return "Devil Star";
      break;
    case "7fl":
      $desc = "weap";
      return "Scourge";
      break;
    case "7wh":
      $desc = "weap";
      return "Legendary Mallet";
      break;
    case "7m7":
      $desc = "weap";
      return "Ogre Maul";
      break;
    case "7gm":
      $desc = "weap";
      return "Thunder Maul";
      break;
    // Weapons - Swords - Normal
    case "ssd":
      $desc = "weap";
      return "Short Sword";
      break;
    case "scm":
      $desc = "weap";
      return "Scimitar";
      break;
    case "sbr":
      $desc = "weap";
      return "Saber";
      break;
    case "flc":
      $desc = "weap";
      return "Falchion";
      break;
    case "crs":
      $desc = "weap";
      return "Crystal Sword";
      break;
    case "bsd":
      $desc = "weap";
      return "Broad Sword";
      break;
    case "lsd":
      $desc = "weap";
      return "Long Sword";
      break;
    case "wsd":
      $desc = "weap";
      return "War Sword";
      break;
    case "2hs":
      $desc = "weap";
      return "Two-handed Sword";
      break;
    case "clm":
      $desc = "weap";
      return "Claymore";
      break;
    case "gis":
      $desc = "weap";
      return "Giant Sword";
      break;
    case "bsw":
      $desc = "weap";
      return "Bastard Sword";
      break;
    case "flb":
      $desc = "weap";
      return "Flamberge";
      break;
    case "gsd":
      $desc = "weap";
      return "Great Sword";
      break;
    // Weapons - Swords - Exceptional
    case "9ss":
      $desc = "weap";
      return "Gladius";
      break;
    case "9sm":
      $desc = "weap";
      return "Cutlass";
      break;
    case "9sb":
      $desc = "weap";
      return "Shamshir";
      break;
    case "9fc":
      $desc = "weap";
      return "Tulwar";
      break;
    case "9cr":
      $desc = "weap";
      return "Dimensional Blade";
      break;
    case "9bs":
      $desc = "weap";
      return "Battle Sword";
      break;
    case "9ls":
      $desc = "weap";
      return "Rune Sword";
      break;
    case "9wd":
      $desc = "weap";
      return "Ancient Sword";
      break;
    case "92h":
      $desc = "weap";
      return "Espadon";
      break;
    case "9cm":
      $desc = "weap";
      return "Dacian Falx";
      break;
    case "9gs":
      $desc = "weap";
      return "Tusk Sword";
      break;
    case "9b9":
      $desc = "weap";
      return "Gothic Sword";
      break;
    case "9fb":
      $desc = "weap";
      return "Zweihander";
      break;
    case "9gd":
      $desc = "weap";
      return "Executioner Sword";
      break;
    // Weapons - Swords - Elite
    case "7ss":
      $desc = "weap";
      return "Falcata";
      break;
    case "7sm":
      $desc = "weap";
      return "Ataghan";
      break;
    case "7sb":
      $desc = "weap";
      return "Elegant Blade";
      break;
    case "7fc":
      $desc = "weap";
      return "Hydra Edge";
      break;
    case "7cr":
      $desc = "weap";
      return "Phase Blade";
      break;
    case "7bs":
      $desc = "weap";
      return "Conquest Sword";
      break;
    case "7ls":
      $desc = "weap";
      return "Cryptic Sword";
      break;
    case "7wd":
      $desc = "weap";
      return "Mythical Sword";
      break;
    case "72h":
      $desc = "weap";
      return "Legend Sword";
      break;
    case "7cm":
      $desc = "weap";
      return "Highland Blade";
      break;
    case "7gs":
      $desc = "weap";
      return "Balrog Blade";
      break;
    case "7b7":
      $desc = "weap";
      return "Champion Sword";
      break;
    case "7fb":
      $desc = "weap";
      return "Colossal Sword";
      break;
    case "7gd":
      $desc = "weap";
      return "Colossus Blade";
      break;
    // Weapons - Daggers - Normal
    case "dgr":
      $desc = "weap";
      return "Dagger";
      break;
    case "dir":
      $desc = "weap";
      return "Dirk";
      break;
    case "kri":
      $desc = "weap";
      return "Kriss";
      break;
    case "bld":
      $desc = "weap";
      return "Blade";
      break;
    // Weapons - Daggers - Exceptional
    case "9dg":
      $desc = "weap";
      return "Poignard";
      break;
    case "9di":
      $desc = "weap";
      return "Rondel";
      break;
    case "9kr":
      $desc = "weap";
      return "Cinquedeas";
      break;
    case "9bl":
      $desc = "weap";
      return "Stilleto";
      break;
    // Weapons - Daggers - Elite
    case "7dg":
      $desc = "weap";
      return "Bone Knife";
      break;
    case "7di":
      $desc = "weap";
      return "Mithral Point";
      break;
    case "7kr":
      $desc = "weap";
      return "Fanged Knife";
      break;
    case "7bl":
      $desc = "weap";
      return "Legend Spike";
      break;
    // Weapons - Throwing - Normal
    case "tkf":
      $desc = "weap";
      $stacked = 1;
      return "Throwing Knife";
      break;
    case "tax":
      $desc = "weap";
      $stacked = 1;
      return "Throwing Axe";
      break;
    case "bkf":
      $desc = "weap";
      $stacked = 1;
      return "Balanced Knife";
      break;
    case "bal":
      $desc = "weap";
      $stacked = 1;
      return "Balanced Axe";
      break;
    // Weapons - Throwing - Exceptional
    case "9tk":
      $desc = "weap";
      $stacked = 1;
      return "Battle Dart";
      break;
    case "9ta":
      $desc = "weap";
      $stacked = 1;
      return "Francisca";
      break;
    case "9bk":
      $desc = "weap";
      $stacked = 1;
      return "War Dart";
      break;
    case "9b8":
      $desc = "weap";
      $stacked = 1;
      return "Hurlbat";
      break;
    // Weapons - Throwing - Elite
    case "7tk":
      $desc = "weap";
      $stacked = 1;
      return "Flying Knife";
      break;
    case "7ta":
      $desc = "weap";
      $stacked = 1;
      return "Flying Axe";
      break;
    case "7bk":
      $desc = "weap";
      $stacked = 1;
      return "Winged Knife";
      break;
    case "7b8":
      $desc = "weap";
      $stacked = 1;
      return "Winged Axe";
      break;
    // Weapons - Javelins - Normal
    case "jav":
      $desc = "weap";
      $stacked = 1;
      return "Javelin";
      break;
    case "pil":
      $desc = "weap";
      $stacked = 1;
      return "Pilum";
      break;
    case "ssp":
      $desc = "weap";
      $stacked = 1;
      return "Short Spear";
      break;
    case "glv":
      $desc = "weap";
      $stacked = 1;
      return "Glaive";
      break;
    case "tsp":
      $desc = "weap";
      $stacked = 1;
      return "Throwing Spear";
      break;
    // Weapons - Javelins - Exceptional
    case "9ja":
      $desc = "weap";
      $stacked = 1;
      return "War Javelin";
      break;
    case "9pi":
      $desc = "weap";
      $stacked = 1;
      return "Great Pilum";
      break;
    case "9s9":
      $desc = "weap";
      $stacked = 1;
      return "Simbilan";
      break;
    case "9gl":
      $desc = "weap";
      $stacked = 1;
      return "Spiculum";
      break;
    case "9ts":
      $desc = "weap";
      $stacked = 1;
      return "Harpoon";
      break;
    // Weapons - Javelins - Elite
    case "7ja":
      $desc = "weap";
      $stacked = 1;
      return "Hyperion Javelin";
      break;
    case "7pi":
      $desc = "weap";
      $stacked = 1;
      return "Stygian Pilum";
      break;
    case "7s7":
      $desc = "weap";
      $stacked = 1;
      return "Balrog Spear";
      break;
    case "7gl":
      $desc = "weap";
      $stacked = 1;
      return "Ghost Glaive";
      break;
    case "7ts":
      $desc = "weap";
      $stacked = 1;
      return "Winged Harpoon";
      break;
    // Weapons - Spears - Normal
    case "spr":
      $desc = "weap";
      return "Spear";
      break;
    case "tri":
      $desc = "weap";
      return "Trident";
      break;
    case "brn":
      $desc = "weap";
      return "Brandistock";
      break;
    case "spt":
      $desc = "weap";
      return "Spetum";
      break;
    case "pik":
      $desc = "weap";
      return "Pike";
      break;
    // Weapons - Spears - Exceptional
    case "9sr":
      $desc = "weap";
      return "War Spear";
      break;
    case "9tr":
      $desc = "weap";
      return "Fuscina";
      break;
    case "9br":
      $desc = "weap";
      return "War Fork";
      break;
    case "9st":
      $desc = "weap";
      return "Yari";
      break;
    case "9p9":
      $desc = "weap";
      return "Lance";
      break;
    // Weapons - Spears - Elite
    case "7sr":
      $desc = "weap";
      return "Hyperion Spear";
      break;
    case "7tr":
      $desc = "weap";
      return "Stygian Pike";
      break;
    case "7br":
      $desc = "weap";
      return "Mancatcher";
      break;
    case "7st":
      $desc = "weap";
      return "Ghost Spear";
      break;
    case "7p7":
      $desc = "weap";
      return "War Pike";
      break;
    // Weapons - Polearms - Normal
    case "bar":
      $desc = "weap";
      return "Bardiche";
      break;
    case "vou":
      $desc = "weap";
      return "Voulge";
      break;
    case "scy":
      $desc = "weap";
      return "Scythe";
      break;
    case "pax":
      $desc = "weap";
      return "Poleaxe";
      break;
    case "hal":
      $desc = "weap";
      return "Halberd";
      break;
    case "wsc":
      $desc = "weap";
      return "War Scythe";
      break;
    // Weapons - Polearms - Exceptional
    case "9b7":
      $desc = "weap";
      return "Lochaber Axe";
      break;
    case "9vo":
      $desc = "weap";
      return "Bill";
      break;
    case "9s8":
      $desc = "weap";
      return "Battle Scythe";
      break;
    case "9pa":
      $desc = "weap";
      return "Partizan";
      break;
    case "9h9":
      $desc = "weap";
      return "Bec-de-Corbin";
      break;
    case "9wc":
      $desc = "weap";
      return "Grim Scythe";
      break;
    // Weapons - Polearms - Elite
    case "7o7":
      $desc = "weap";
      return "Ogre Axe";
      break;
    case "7vo":
      $desc = "weap";
      return "Colossus Voulge";
      break;
    case "7s8":
      $desc = "weap";
      return "Thresher";
      break;
    case "7pa":
      $desc = "weap";
      return "Cryptic Axe";
      break;
    case "7h7":
      $desc = "weap";
      return "Great Poleaxe";
      break;
    case "7wc":
      $desc = "weap";
      return "Giant Thresher";
      break;
    // Weapons - Bows - Normal
    case "sbw":
      $desc = "weap";
      return "Short Bow";
      break;
    case "hbw":
      $desc = "weap";
      return "Hunter's Bow";
      break;
    case "lbw":
      $desc = "weap";
      return "Long Bow";
      break;
    case "cbw":
      $desc = "weap";
      return "Composite Bow";
      break;
    case "sbb":
      $desc = "weap";
      return "Short Battle Bow";
      break;
    case "lbb":
      $desc = "weap";
      return "Long Battle Bow";
      break;
    case "swb":
      $desc = "weap";
      return "Short War Bow";
      break;
    case "lwb":
      $desc = "weap";
      return "Long War Bow";
      break;
    // Weapons - Bows - Exceptional
    case "8sb":
      $desc = "weap";
      return "Edge Bow";
      break;
    case "8hb":
      $desc = "weap";
      return "Razor Bow";
      break;
    case "8lb":
      $desc = "weap";
      return "Cedar Bow";
      break;
    case "8cb":
      $desc = "weap";
      return "Double Bow";
      break;
    case "8s8":
      $desc = "weap";
      return "Short Siege Bow";
      break;
    case "8l8":
      $desc = "weap";
      return "Long Siege Bow";
      break;
    case "8sw":
      $desc = "weap";
      return "Rune Bow";
      break;
    case "8lw":
      $desc = "weap";
      return "Gothic Bow";
      break;
    // Weapons - Bows - Elite
    case "6sb":
      $desc = "weap";
      return "Spider Bow";
      break;
    case "6hb":
      $desc = "weap";
      return "Blade Bow";
      break;
    case "6lb":
      $desc = "weap";
      return "Shadow Bow";
      break;
    case "6cb":
      $desc = "weap";
      return "Great Bow";
      break;
    case "6s7":
      $desc = "weap";
      return "Diamond Bow";
      break;
    case "6l7":
      $desc = "weap";
      return "Crusader Bow";
      break;
    case "6sw":
      $desc = "weap";
      return "Ward Bow";
      break;
    case "6lw":
      $desc = "weap";
      return "Hydra Bow";
      break;
    // Weapons - Crossbows - Normal
    case "lxb":
      $desc = "weap";
      return "Light Crossbow";
      break;
    case "mxb":
      $desc = "weap";
      return "Crossbow";
      break;
    case "hxb":
      $desc = "weap";
      return "Heavy Crossbow";
      break;
    case "rxb":
      $desc = "weap";
      return "Repeating Crossbow";
      break;
    // Weapons - Crossbows - Exceptional
    case "8lx":
      $desc = "weap";
      return "Arbalest";
      break;
    case "8mx":
      $desc = "weap";
      return "Siege Crossbow";
      break;
    case "8hx":
      $desc = "weap";
      return "Ballista";
      break;
    case "8rx":
      $desc = "weap";
      return "Chu-Ko-Nu";
      break;
    // Weapons - Crossbows - Elite
    case "6lx":
      $desc = "weap";
      return "Pellet Bow";
      break;
    case "6mx":
      $desc = "weap";
      return "Gorgon Crossbow";
      break;
    case "6hx":
      $desc = "weap";
      return "Colossus Crossbow";
      break;
    case "6rx":
      $desc = "weap";
      return "Demon Crossbow";
      break;
    // Weapons - Staves - Normal
    case "sst":
      $desc = "weap";
      return "Short Staff";
      break;
    case "lst":
      $desc = "weap";
      return "Long Staff";
      break;
    case "cst":
      $desc = "weap";
      return "Gnarled Staff";
      break;
    case "bst":
      $desc = "weap";
      return "Battle Staff";
      break;
    case "wst":
      $desc = "weap";
      return "War Staff";
      break;
    // Weapons - Staves - Exceptional
    case "8ss":
      $desc = "weap";
      return "Jo Staff";
      break;
    case "8ls":
      $desc = "weap";
      return "Quarterstaff";
      break;
    case "8cs":
      $desc = "weap";
      return "Cedar Staff";
      break;
    case "8bs":
      $desc = "weap";
      return "Gothic Staff";
      break;
    case "8ws":
      $desc = "weap";
      return "Rune Staff";
      break;
    // Weapons - Staves - Elite
    case "6ss":
      $desc = "weap";
      return "Walking Stick";
      break;
    case "6ls":
      $desc = "weap";
      return "Stalagmite";
      break;
    case "6cs":
      $desc = "weap";
      return "Elder Staff";
      break;
    case "6bs":
      $desc = "weap";
      return "Shillelagh";
      break;
    case "6ws":
      $desc = "weap";
      return "Archon Staff";
      break;
    // Weapons - Wands - Normal
    case "wnd":
      $desc = "weap";
      return "Wand";
      break;
    case "ywn":
      $desc = "weap";
      return "Yew Wand";
      break;
    case "bwn":
      $desc = "weap";
      return "Bone Wand";
      break;
    case "gwn":
      $desc = "weap";
      return "Grim Wand";
      break;
    // Weapons - Wands - Exceptional
    case "9wn":
      $desc = "weap";
      return "Burnt Wand";
      break;
    case "9yw":
      $desc = "weap";
      return "Petrified Wand";
      break;
    case "9bw":
      $desc = "weap";
      return "Tomb Wand";
      break;
    case "9gw":
      $desc = "weap";
      return "Grave Wand";
      break;
    // Weapons - Wands - Elite
    case "7wn":
      $desc = "weap";
      return "Polished Wand";
      break;
    case "7yw":
      $desc = "weap";
      return "Ghost Wand";
      break;
    case "7bw":
      $desc = "weap";
      return "Lich Wand";
      break;
    case "7gw":
      $desc = "weap";
      return "Unearthed Wand";
      break;
    // Weapons - Scepters - Normal
    case "scp":
      $desc = "weap";
      return "Sceptre";
      break;
    case "gsc":
      $desc = "weap";
      return "Grand Sceptre";
      break;
    case "wsp":
      $desc = "weap";
      return "War Sceptre";
      break;
    // Weapons - Scepters - Exceptional
    case "9sc":
      $desc = "weap";
      return "Rune Sceptre";
      break;
    case "9qs":
      $desc = "weap";
      return "Holy Water Sprinkler";
      break;
    case "9ws":
      $desc = "weap";
      return "Divine Sceptre";
      break;
    // Weapons - Scepters - Elite
    case "7sc":
      $desc = "weap";
      return "Mighty Sceptre";
      break;
    case "7qs":
      $desc = "weap";
      return "Seraph Rod";
      break;
    case "7ws":
      $desc = "weap";
      return "Caduceus";
      break;
    // Weapons - Assassin Katars - Normal
    case "ktr":
      $desc = "weap";
      return "Katar";
      break;
    case "wrb":
      $desc = "weap";
      return "Wrist Blade";
      break;
    case "axf":
      $desc = "weap";
      return "Hatchet Hands";
      break;
    case "ces":
      $desc = "weap";
      return "Cestus";
      break;
    case "clw":
      $desc = "weap";
      return "Claws";
      break;
    case "btl":
      $desc = "weap";
      return "Blade Talons";
      break;
    case "skr":
      $desc = "weap";
      return "Scissors Katar";
      break;
    // Weapons - Assassin Katars - Exceptional
    case "9ar":
      $desc = "weap";
      return "Quhab";
      break;
    case "9wb":
      $desc = "weap";
      return "Wrist Spike";
      break;
    case "9xf":
      $desc = "weap";
      return "Fascia";
      break;
    case "9cs":
      $desc = "weap";
      return "Hand Scythe";
      break;
    case "9lw":
      $desc = "weap";
      return "Greater Claws";
      break;
    case "9tw":
      $desc = "weap";
      return "Greater Talons";
      break;
    case "9qr":
      $desc = "weap";
      return "Scissors Quhab";
      break;
    // Weapons - Assassin Katars - Elite
    case "7ar":
      $desc = "weap";
      return "Suwayyah";
      break;
    case "7wb":
      $desc = "weap";
      return "Wrist Sword";
      break;
    case "7xf":
      $desc = "weap";
      return "War Fist";
      break;
    case "7cs":
      $desc = "weap";
      return "Battle Cestus";
      break;
    case "7lw":
      $desc = "weap";
      return "Feral Claws";
      break;
    case "7tw":
      $desc = "weap";
      return "Runic Talons";
      break;
    case "7qr":
      $desc = "weap";
      return "Scissors";
      break;
    // Weapons - Sorceress Orbs - Normal
    case "ob1":
      $desc = "weap";
      return "Eagle Orb";
      break;
    case "ob2":
      $desc = "weap";
      return "Sacred Globe";
      break;
    case "ob3":
      $desc = "weap";
      return "Smoked Sphere";
      break;
    case "ob4":
      $desc = "weap";
      return "Clasped Orb";
      break;
    case "ob5":
      $desc = "weap";
//      return "Dragon Stone";
      return "Jared's Stone";
      break;

    // Weapons - Sorceress Orbs - Exceptional
    case "ob6":
      $desc = "weap";
      return "Glowing Orb";
      break;
    case "ob7":
      $desc = "weap";
      return "Crystalline Globe";
      break;
    case "ob8":
      $desc = "weap";
      return "Cloudy Sphere";
      break;
    case "ob9":
      $desc = "weap";
      return "Sparkling Ball";
      break;
    case "oba":
      $desc = "weap";
      return "Swirling Crystal";
      break;
    // Weapons - Sorceress Orbs - Elite
    case "obb":
      $desc = "weap";
      return "Heavenly Stone";
      break;
    case "obc":
      $desc = "weap";
      return "Eldritch Orb";
      break;
    case "obd":
      $desc = "weap";
      return "Demon Heart";
      break;
    case "obe":
      $desc = "weap";
      return "Vortex Orb";
      break;
    case "obf":
      $desc = "weap";
      return "Dimensional Shard";
      break;
    // Weapons - Amazon Weapons - Normal
    case "am1":
      $desc = "weap";
      return "Stag Bow";
      break;
    case "am2":
      $desc = "weap";
      return "Reflex Bow";
      break;
    case "am3":
      $desc = "weap";
      return "Maiden Spear";
      break;
    case "am4":
      $desc = "weap";
      return "Maiden Pike";
      break;
    case "am5":
      $desc = "weap";
      $stacked = 1;
      return "Maiden Javelin";
      break;
    // Weapons - Amazon Weapons - Exceptional
    case "am6":
      $desc = "weap";
      return "Ashwood Bow";
      break;
    case "am7":
      $desc = "weap";
      return "Ceremonial Bow";
      break;
    case "am8":
      $desc = "weap";
      return "Ceremonial Spear";
      break;
    case "am9":
      $desc = "weap";
      return "Ceremonial Pike";
      break;
    case "ama":
      $desc = "weap";
      $stacked = 1;
      return "Ceremonial Javelin";
      break;
    // Weapons - Amazon Weapons - Elite
    case "amb":
      $desc = "weap";
      return "Matriarchal Bow";
      break;
    case "amc":
      $desc = "weap";
      return "Grand Matron Bow";
      break;
    case "amd":
      $desc = "weap";
      return "Matriarchal Spear";
      break;
    case "ame":
      $desc = "weap";
      return "Matriarchal Pike";
      break;
    case "amf":
      $desc = "weap";
      $stacked = 1;
      return "Matriarchal Javelin";
      break;

    // Unused Items
//    case (true):
//      $desc = "other";
    case "tch":
      return "Torch";
      break;
    case "hrt":
      return "Heart";
      break;
    case "brz":
      return "Brain";
      break;
    case "jaw":
      return "Jawbone";
      break;
    case "eyz":
      return "Eye";
      break;
    case "hrn":
      return "Horn";
      break;
    case "hrb":
      return "Herb";
      break;
    case "tal":
      return "Tail";
      break;
    case "flg":
      return "Flag";
      break;
    case "fng":
      return "Fang";
      break;
    case "qll":
      return "Quill";
      break;
    case "sol":
      return "Soul";
      break;
    case "scz":
      return "Scalp";
      break;
    case "spe":
      return "Spleen";
      break;
    case "luv":
      return "The Black Tower Key";
      break;
    case "elx":
      return "Elixir";
      break;
    case "0sc":
      return "Scroll of Knowledge";
      break;
/*
    // Unknown
    case "rps":
      return "Unknown item rps";
      break;
    case "rpl":
      return "Unknown item rpl";
      break;
    case "bps":
      return "Unknown item bps";
      break;
    case "bpl":
      return "Unknown item bpl";
      break;
    case "hpo":
      return "Unknown item hpo";
      break;
    case "mpo":
      return "Unknown item mpo";
      break;
    case "hpf":
      return "Unknown item hpf";
      break;
    case "mpf":
      return "Unknown item mpf";
      break;
*/
    default:
      return "Unknown item $item";
//      return "<u>Unknown item $item</u>";
  }
}

function unique_name ($id, $type) {
  switch($id) {
    case 0:
      return "The Gnasher $type";
      break;
    case 1:
      return "Deathspade $type";
      break;
    case 2:
      return "Bladebone $type";
      break;
    case 3:
//      return "Mindrend $type";
      return "Skull Splitter $type";
      break;
    case 4:
      return "Rakescar $type";
      break;
    case 5:
//      return "Fechmars Axe $type";
      return "Axe of Fechmar $type";
      break;
    case 6:
      return "Goreshovel $type";
      break;
    case 7:
      return "The Chieftan $type";
      break;
    case 8:
      return "Brainhew $type";
      break;
    case 9:
//      return "The Humongous $type";
      return "Humongous $type";
      break;
    case 10:
//      return "Iros Torch $type";
      return "Torch of Iro $type";
      break;
    case 11:
//      return "Maelstromwrath $type";
      return "Maelstrom $type";
      break;
    case 12:
      return "Gravenspine $type";
      break;
    case 13:
      return "Ume's Lament $type";
      break;
    case 14:
      return "Felloak $type";
      break;
    case 15:
      return "Knell Striker $type";
      break;
    case 16:
      return "Rusthandle $type";
      break;
    case 17:
      return "Stormeye $type";
      break;
    case 18:
      return "Stoutnail $type";
      break;
    case 19:
      return "Crushflange $type";
      break;
    case 20:
      return "Bloodrise $type";
      break;
    case 21:
      return "The Generals Tan Do Li Ga $type";
      break;
    case 22:
      return "Ironstone $type";
      break;
    case 23:
//      return "Bonesob $type";
      return "Bonesnap $type";
      break;
    case 24:
      return "Steeldriver $type";
      break;
    case 25:
      return "Rixot's Keen $type";
      break;
    case 26:
      return "Blood Crescent $type";
      break;
    case 27:
//      return "Krintizs Skewer $type";
      return "Skewer of Krintizs $type";
      break;
    case 28:
      return "Gleamscythe $type";
      break;
    case 29:
      return "Azurewrath $type";
      break;
    case 30:
      return "Griswold's Edge $type";
      break;
    case 31:
      return "Hellplague $type";
      break;
    case 32:
      return "Culwen's Point $type";
      break;
    case 33:
      return "Shadowfang $type";
      break;
    case 34:
      return "Soulflay $type";
      break;
    case 35:
      return "Kinemil's Awl $type";
      break;
    case 36:
      return "Blacktongue $type";
      break;
    case 37:
      return "Ripsaw $type";
      break;
    case 38:
      return "The Patriarch $type";
      break;
    case 39:
      return "Gull $type";
      break;
    case 40:
      return "The Diggler $type";
      break;
    case 41:
      return "The Jade Tan Do $type";
      break;
    case 42:
//      return "Irices Shard $type";
      return "Spectral Shard $type";
      break;
    case 43:
      return "The Dragon Chang $type";
      break;
    case 44:
      return "Razortine $type";
      break;
    case 45:
      return "Bloodthief $type";
      break;
    case 46:
      return "Lance of Yaggai $type";
      break;
    case 47:
      return "The Tannr Gorerod $type";
      break;
    case 48:
      return "Dimoak's Hew $type";
      break;
    case 49:
      return "Steelgoad $type";
      break;
    case 50:
      return "Soul Harvest $type";
      break;
    case 51:
      return "The Battlebranch $type";
      break;
    case 52:
      return "Woestave $type";
      break;
    case 53:
      return "The Grim Reaper $type";
      break;
    case 54:
      return "Bane Ash $type";
      break;
    case 55:
      return "Serpent Lord $type";
      break;
    case 56:
//      return "Lazarus Spire $type";
      return "Spire of Lazarus $type";
      break;
    case 57:
      return "The Salamander $type";
      break;
    case 58:
      return "The Iron Jang Bong $type";
      break;
    case 59:
      return "Pluckeye $type";
      break;
    case 60:
      return "Witherstring $type";
      break;
    case 61:
//      return "Rimeraven $type";
      return "Raven Claw $type";
      break;
    case 62:
//      return "Piercerib $type";
      return "Rogue's Bow $type";
      break;
    case 63:
//      return "Pullspite $type";
      return "Stormstrike $type";
      break;
    case 64:
      return "Wizendraw $type";
      break;
    case 65:
      return "Hellclap $type";
      break;
    case 66:
      return "Blastbark $type";
      break;
    case 67:
      return "Leadcrow $type";
      break;
    case 68:
      return "Ichorsting $type";
      break;
    case 69:
      return "Hellcast $type";
      break;
    case 70:
//      return "Doomspittle $type";
      return "Doomslinger $type";
      break;
    case 71:
//      return "War Bonnet $type";
      return "Biggin's Bonnet $type";
      break;
    case 72:
      return "Tarnhelm $type";
      break;
    case 73:
      return "Coif of Glory $type";
      break;
    case 74:
      return "Duskdeep $type";
      break;
    case 75:
      return "Wormskull $type";
      break;
    case 76:
      return "Howltusk $type";
      break;
    case 77:
      return "Undead Crown $type";
      break;
    case 78:
      return "The Face of Horror $type";
      break;
    case 79:
      return "Greyform $type";
      break;
    case 80:
      return "Blinkbat's Form $type";
      break;
    case 81:
      return "The Centurion $type";
      break;
    case 82:
      return "Twitchthroe $type";
      break;
    case 83:
      return "Darkglow $type";
      break;
    case 84:
      return "Hawkmail $type";
      break;
    case 85:
      return "Sparking Mail $type";
      break;
    case 86:
//      return "Venomsward $type";
      return "Venom Ward $type";
      break;
    case 87:
      return "Iceblink $type";
      break;
    case 88:
      return "Boneflesh $type";
      break;
    case 89:
      return "Rockfleece $type";
      break;
    case 90:
      return "Rattlecage $type";
      break;
    case 91:
      return "Goldskin $type";
      break;
    case 92:
//      return "Victors Silk $type";
      return "Silks of the Victor $type";
      break;
    case 93:
      return "Heavenly Garb $type";
      break;
    case 94:
      return "Pelta Lunata $type";
      break;
    case 95:
      return "Umbral Disk $type";
      break;
    case 96:
      return "Stormguild $type";
      break;
    case 97:
      return "Wall of the Eyeless $type";
      break;
    case 98:
      return "Swordback Hold $type";
      break;
    case 99:
      return "Steelclash $type";
      break;
    case 100:
      return "Bverrit Keep $type";
      break;
    case 101:
      return "The Ward $type";
      break;
    case 102:
      return "The Hand of Broc $type";
      break;
    case 103:
      return "Bloodfist $type";
      break;
    case 104:
      return "Chance Guards $type";
      break;
    case 105:
      return "Magefist $type";
      break;
    case 106:
      return "Frostburn $type";
      break;
    case 107:
      return "Hotspur $type";
      break;
    case 108:
      return "Gorefoot $type";
      break;
    case 109:
      return "Treads of Cthon $type";
      break;
    case 110:
      return "Goblin Toe $type";
      break;
    case 111:
      return "Tearhaunch $type";
      break;
    case 112:
//      return "Lenyms Cord $type";
      return "Lenymo $type";
      break;
    case 113:
      return "Snakecord $type";
      break;
    case 114:
      return "Nightsmoke $type";
      break;
    case 115:
      return "Goldwrap $type";
      break;
    case 116:
      return "Bladebuckle $type";
      break;
    case 117:
      return "Nokozan Relic $type";
      break;
    case 118:
      return "The Eye of Etlich $type";
      break;
    case 119:
      return "The Mahim-Oak Curio $type";
      break;
    case 120:
      return "Nagelring $type";
      break;
    case 121:
      return "Manald Heal $type";
      break;
    case 122:
      return "Stone of Jordan $type";
      break;
    case 123:
      return "Amulet of the Viper";
      break;
    case 124:
      return "Staff of Kings";
      break;
    case 125:
      return "Horadric Staff";
      break;
    case 126:
      return "Hell Forge $type";
      break;
    case 127:
      return "Khalim's Flail $type";
      break;
    case 128:
//      return "SuperKhalimFlail $type";
      return "Super Khalim's Flail $type";
      break;

    // Expansion
    case 129:
      return "Coldkill $type";
      break;
    case 130:
      return "Butcher's Pupil $type";
      break;
    case 131:
      return "Islestrike $type";
      break;
    case 132:
//      return "Pompe's Wrath $type";
      return "Pompeii's Wrath $type";
      break;
    case 133:
      return "Guardian Naga $type";
      break;
    case 134:
      return "Warlord's Trust $type";
      break;
    case 135:
      return "Spellsteel $type";
      break;
    case 136:
      return "Stormrider $type";
      break;
    case 137:
      return "Boneslayer Blade $type";
      break;
    case 138:
      return "The Minataur $type";
      break;
    case 139:
      return "Suicide Branch $type";
      break;
    case 140:
      return "Carin Shard $type";
      break;
    case 141:
      return "Arm of King Leoric $type";
      break;
    case 142:
      return "Blackhand Key $type";
      break;
    case 143:
      return "Dark Clan Crusher $type";
      break;
    case 144:
      return "Zakarum's Hand $type";
      break;
    case 145:
      return "The Fetid Sprinkler $type";
      break;
    case 146:
      return "Hand of Blessed Light $type";
      break;
    case 147:
      return "Fleshrender $type";
      break;
    case 148:
      return "Sureshrill Frost $type";
      break;
    case 149:
      return "Moonfall $type";
      break;
    case 150:
      return "Baezil's Vortex $type";
      break;
    case 151:
      return "Earthshaker $type";
      break;
    case 152:
      return "Bloodtree Stump $type";
      break;
    case 153:
      return "The Gavel of Pain $type";
      break;
    case 154:
      return "Bloodletter $type";
      break;
    case 155:
      return "Coldsteel Eye $type";
      break;
    case 156:
      return "Hexfire $type";
      break;
    case 157:
      return "Blade of Ali Baba $type";
      break;
    case 158:
      return "Ginther's Rift $type";
      break;
    case 159:
      return "Headstriker $type";
      break;
    case 160:
      return "Plague Bearer $type";
      break;
    case 161:
//      return "The Atlantian $type";
      return "The Atlantean $type";
      break;
    case 162:
      return "Crainte Vomir $type";
      break;
    case 163:
      return "Bing Sz Wang $type";
      break;
    case 164:
      return "The Vile Husk $type";
      break;
    case 165:
      return "Cloudcrack $type";
      break;
    case 166:
      return "Todesfaelle Flamme $type";
      break;
    case 167:
      return "Swordguard $type";
      break;
    case 168:
      return "Spineripper $type";
      break;
    case 169:
      return "Heart Carver $type";
      break;
    case 170:
      return "Blackbog's Sharp $type";
      break;
    case 171:
      return "Stormspike $type";
      break;
    case 172:
      return "The Impaler $type";
      break;
    case 173:
      return "Kelpie Snare $type";
      break;
    case 174:
      return "Soulfeast Tine $type";
      break;
    case 175:
      return "Hone Sundan $type";
      break;
    case 176:
      return "Spire of Honor $type";
      break;
    case 177:
      return "The Meat Scraper $type";
      break;
    case 178:
      return "Blackleach Blade $type";
      break;
    case 179:
      return "Athena's Wrath $type";
      break;
    case 180:
      return "Pierre Tombale Couant $type";
      break;
    case 181:
      return "Husoldal Evo $type";
      break;
    case 182:
      return "Grim's Burning Dead $type";
      break;
    case 183:
      return "Razorswitch $type";
      break;
    case 184:
      return "Ribcracker $type";
      break;
    case 185:
      return "Chromatic Ire $type";
      break;
    case 186:
      return "Warpspear $type";
      break;
    case 187:
//      return "Skullcollector $type";
      return "Skull Collector $type";
      break;
    case 188:
      return "Skystrike $type";
      break;
    case 189:
      return "Riphook $type";
      break;
    case 190:
      return "Kuko Shakaku $type";
      break;
    case 191:
      return "Endlesshail $type";
      break;
    case 192:
      return "Whichwild String $type";
      break;
    case 193:
      return "Cliffkiller $type";
      break;
    case 194:
      return "Magewrath $type";
      break;
    case 195:
//      return "Godstrike Arch $type";
      return "Goldstrike Arch $type";
      break;
    case 196:
      return "Langer Briser $type";
      break;
    case 197:
//      return "Pus Spiter $type";
      return "Pus Spitter $type";
      break;
    case 198:
      return "Buriza-Do Kyanon $type";
      break;
    case 199:
      return "Demon Machine $type";
      break;

    // Armor
    case 201:
      return "Peasant Crown $type";
      break;
    case 202:
      return "Rockstopper $type";
      break;
    case 203:
      return "Stealskull $type";
      break;
    case 204:
      return "Darksight Helm $type";
      break;
    case 205:
//      return "Valkiry Wing $type";
      return "Valkyrie Wing $type";
      break;
    case 206:
      return "Crown of Thieves $type";
      break;
    case 207:
      return "Blackhorn's Face $type";
      break;
    case 208:
//      return "Vampiregaze $type";
      return "Vampire Gaze $type";
      break;
    case 209:
      return "The Spirit Shroud $type";
      break;
    case 210:
      return "Skin of the Vipermagi $type";
      break;
    case 211:
//      return "Skin of the Flayerd One $type";
      return "Skin of the Flayed One $type";
      break;
    case 212:
//      return "Ironpelt $type";
      return "Iron Pelt $type";
      break;
    case 213:
//      return "Spiritforge $type";
      return "Spirit Forge $type";
      break;
    case 214:
      return "Crow Caw $type";
      break;
    case 215:
      return "Shaftstop $type";
      break;
    case 216:
      return "Duriel's Shell $type";
      break;
    case 217:
      return "Skullder's Ire $type";
      break;
    case 218:
      return "Guardian Angel $type";
      break;
    case 219:
      return "Toothrow $type";
      break;
    case 220:
      return "Atma's Wail $type";
      break;
    case 221:
      return "Black Hades $type";
      break;
    case 222:
      return "Corpsemourn $type";
      break;
    case 223:
//      return "Que-Hegan's Wisdon $type";
      return "Que-Hegan's Wisdom $type";
      break;
    case 224:
      return "Visceratuant $type";
      break;
    case 225:
      return "Moser's Blessed Circle $type";
      break;
    case 226:
      return "Stormchaser $type";
      break;
    case 227:
      return "Tiamat's Rebuke $type";
      break;
    case 228:
//      return "Kerke's Sanctuary $type";
      return "Gerke's Sanctuary $type";
      break;
    case 229:
//      return "Radimant's Sphere $type";
      return "Radament's Sphere $type";
      break;
    case 230:
      return "Lidless Wall $type";
      break;
    case 231:
      return "Lance Guard $type";
      break;
    case 232:
      return "Venom Grip $type";
      break;
    case 233:
      return "Gravepalm $type";
      break;
    case 234:
      return "Ghoulhide $type";
      break;
    case 235:
//      return "Lavagout $type";
      return "Lava Gout $type";
      break;
    case 236:
      return "Hellmouth $type";
      break;
    case 237:
      return "Infernostride $type";
      break;
    case 238:
      return "Waterwalk $type";
      break;
    case 239:
      return "Silkweave $type";
      break;
    case 240:
//      return "Wartraveler $type";
      return "War Traveler $type";
      break;
    case 241:
//      return "Gorerider $type";
      return "Gore Rider $type";
      break;
    case 242:
      return "String of Ears $type";
      break;
    case 243:
      return "Razortail $type";
      break;
    case 244:
//      return "Gloomstrap $type";
      return "Gloom's Trap $type";
      break;
    case 245:
      return "Snowclash $type";
      break;
    case 246:
      return "Thudergod's Vigor $type";
      break;

    // Elite Uniques
    case 248:
      return "Harlequin Crest $type";
      break;
    case 249:
      return "Veil of Steel $type";
      break;
    case 250:
      return "The Gladiator's Bane $type";
      break;
    case 251:
      return "Arkaine's Valor $type";
      break;
    case 252:
      return "Blackoak Shield $type";
      break;
    case 253:
      return "Stormshield $type";
      break;
    case 254:
      return "Hellslayer $type";
      break;
    case 255:
      return "Messerschmidt's Reaver $type";
      break;
    case 256:
      return "Baranar's Star $type";
      break;
    case 257:
      return "Schaefer's Hammer $type";
      break;
    case 258:
      return "The Cranium Basher $type";
      break;
    case 259:
      return "Lightsabre $type";
      break;
    case 260:
      return "Doombringer $type";
      break;
    case 261:
      return "The Grandfather $type";
      break;
    case 262:
      return "Wizardspike $type";
      break;
    case 263:
      return "Constricting Ring $type";
      break;
    case 264:
      return "Stormspire $type";
      break;
    case 265:
      return "Eaglehorn $type";
      break;
    case 266:
      return "Windforce $type";
      break;

    // Rings
    case 268:
//      return "Bul Katho's Wedding Band $type";
      return "Bul-Kathos' Wedding Band $type";
      break;
    case 269:
      return "The Cat's Eye $type";
      break;
    case 270:
      return "The Rising Sun $type";
      break;
    case 271:
      return "Crescent Moon $type";
      break;
    case 272:
      return "Mara's Kaleidoscope $type";
      break;
    case 273:
      return "Atma's Scarab $type";
      break;
    case 274:
      return "Dwarf Star $type";
      break;
    case 275:
      return "Raven Frost $type";
      break;
    case 276:
      return "Highlord's Wrath $type";
      break;
    case 277:
      return "Saracen's Chance $type";
      break;

    // Class Specific
    case 279:
      return "Arreat's Face $type";
      break;
    case 280:
      return "Homunculus $type";
      break;
    case 281:
      return "Titan's Revenge $type";
      break;
    case 282:
      return "Lycander's Aim $type";
      break;
    case 283:
      return "Lycander's Flank $type";
      break;
    case 284:
      return "The Oculus $type";
      break;
    case 285:
      return "Herald of Zakarum $type";
      break;
    case 286:
//      return "Cutthroat1 $type";
      return "Bartuc's Cut-Throat $type";
      break;
    case 287:
      return "Jalal's Mane $type";
      break;
    case 288:
      return "The Scalper $type";
      break;
    case 289:
      return "Bloodmoon $type";
      break;
    case 290:
//      return "Djinnslayer $type";
      return "Djinn Slayer $type";
      break;
    case 291:
      return "Deathbit $type";
      break;
    case 292:
      return "Warshrike $type";
      break;
    case 293:
//      return "Gutsiphon $type";
      return "Gut Siphon $type";
      break;
    case 294:
//      return "Razoredge $type";
      return "Razor's Edge $type";
      break;
    case 295:
      return "Gore Ripper $type";
      break;

    case 296:
//      return "Demonlimb $type";
      return "Demon Limb $type";
      break;
    case 297:
      return "Steelshade $type";
      break;
    case 298:
      return "Tomb Reaver $type";
      break;
    case 299:
//      return "Deaths's Web $type";
      return "Death's Web $type";
      break;
    case 300:
      return "Nature's Peace $type";
      break;
    case 301:
      return "Azurewrath $type";
      break;
    case 302:
      return "Seraph's Hymn $type";
      break;
    case 303:
      return "Zakarum's Salvation $type";
      break;
    case 304:
      return "Fleshripper $type";
      break;
    case 305:
      return "Odium $type";
      break;
    case 306:
      return "Horizon's Tornado $type";
      break;
    case 307:
      return "Stone Crusher $type";
      break;
    case 308:
//      return "Jadetalon $type";
      return "Jade Talon $type";
      break;
    case 309:
//      return "Shadowdancer $type";
      return "Shadow Dancer $type";
      break;
    case 310:
//      return "Cerebus $type";
      return "Cerebus' Bite $type";
      break;
    case 311:
      return "Tyrael's Might $type";
      break;
    case 312:
//      return "Souldrain $type";
      return "Soul Drainer $type";
      break;
    case 313:
//      return "Runemaster $type";
      return "Rune Master $type";
      break;
    case 314:
//      return "Deathcleaver $type";
      return "Death Cleaver $type";
      break;
    case 315:
      return "Executioner's Justice $type";
      break;
    case 316:
      return "Stoneraven $type";
      break;
    case 317:
      return "Leviathan $type";
      break;
    case 318:
      return "Larzuk's Champion $type";
      break;
    case 319:
//      return "Wisp $type";
      return "Wisp Projector $type";
      break;
    case 320:
      return "Gargoyle's Bite $type";
      break;
    case 321:
      return "Lacerator $type";
      break;
    case 322:
      return "Mang Song's Lesson $type";
      break;
    case 323:
      return "Viperfork $type";
      break;
    case 324:
      return "Ethereal Edge $type";
      break;
    case 325:
      return "Demonhorn's Edge $type";
      break;
    case 326:
      return "The Reaper's Toll $type";
      break;
    case 327:
//      return "Spiritkeeper $type";
      return "Spirit Keeper $type";
      break;
    case 328:
      return "Hellrack $type";
      break;
    case 329:
      return "Alma Negra $type";
      break;
    case 330:
//      return "Darkforge Spawn $type";
      return "Darkforce Spawn $type";
      break;
    case 331:
      return "Widowmaker $type";
      break;
    case 332:
//      return "Bloodraven's Charge $type";
      return "Blood Raven's Charge $type";
      break;
    case 333:
      return "Ghostflame $type";
      break;
    case 334:
//      return "Shadowkiller $type";
      return "Shadow Killer $type";
      break;
    case 335:
      return "Gimmershred $type";
      break;
    case 336:
      return "Griffon's Eye $type";
      break;
    case 337:
      return "Windhammer $type";
      break;
    case 338:
      return "Thunderstroke $type";
      break;
    case 339:
      return "Giantmaimer $type";
      break;

    case 340:
      return "Demon's Arch $type";
      break;
    case 341:
      return "Boneflame $type";
      break;
    case 342:
//      return "Steelpillar $type";
      return "Steel Pillar $type";
      break;
    case 343:
      return "Nightwing's Veil $type";
      break;
    case 344:
      return "Crown of Ages $type";
      break;
    case 345:
      return "Andariel's Visage $type";
      break;
    case 346:
      return "Darkfear $type";
      break;
    case 347:
      return "Dragonscale $type";
      break;
    case 348:
//      return "Steel Carapice $type";
      return "Steel Carapace $type";
      break;
    case 349:
      return "Medusa's Gaze $type";
      break;
    case 350:
      return "Ravenlore $type";
      break;
    case 351:
      return "Boneshade $type";
      break;
    case 352:
      return "Nethercrow $type";
      break;

    case 353:
      return "Flamebellow $type";
      break;
    case 354:
//      return "Fathom $type";
      return "Death's Fathom $type";
      break;
    case 355:
      return "Wolfhowl $type";
      break;
    case 356:
      return "Spirit Ward $type";
      break;
    case 357:
      return "Kira's Guardian $type";
      break;
    case 358:
      return "Ormus' Robes $type";
      break;
    case 359:
      return "Gheed's Fortune $type";
      break;
    case 360:
      return "Stormlash $type";
      break;
    case 361:
      return "Halaberd's Reign $type";
      break;
    case 362:
      return "Warriv's Warder $type";
      break;
    case 363:
      return "Spike Thorn $type";
      break;
    case 364:
      return "Dracul's Grasp $type";
      break;
    case 365:
      return "Frostwind $type";
      break;
    case 366:
      return "Templar's Might $type";
      break;
    case 367:
      return "Eschuta's Temper $type";
      break;
    case 368:
      return "Firelizard's Talons $type";
      break;
    case 369:
      return "Sandstorm Trek $type";
      break;
    case 370:
      return "Marrowwalk $type";
      break;
    case 371:
      return "Heaven's Light $type";
      break;
    case 372:
      return "Merman's Speed $type";
      break;
    case 373:
      return "Arachnid Mesh $type";
      break;
    case 374:
      return "Nosferatu's Coil $type";
      break;
    case 375:
      return "Metalgrid $type";
      break;
    case 376:
//      return "Verdugo's Hearty Cord $type";
      return "Verdungo's Hearty Cord $type";
      break;
    case 377:
      return "Sigurd's Staunch $type";
      break;
    case 378:
      return "Carrion Wind $type";
      break;
    case 379:
      return "Giantskull $type";
      break;
    case 380:
//      return "Ironward $type";
      return "Astreon's Iron Ward $type";
      break;
    case 381:
      return "Annihilus $type";
      break;
    case 382:
      return "Arioc's Needle $type";
      break;
    case 383:
      return "Cranebeak $type";
      break;
    case 384:
      return "Nord's Tenderizer $type";
      break;
    case 385:
//      return "Earthshifter $type";
      return "Earth Shifter $type";
      break;
    case 386:
      return "Wraithflight $type";
      break;
    case 387:
      return "Bonehew $type";
      break;
    case 388:
      return "Ondal's Wisdom $type";
      break;
    case 389:
//      return "The Reedeemer $type";
      return "The Redeemer $type";
      break;
    case 390:
//      return "Headhunter's Glory $type";
      return "Head Hunter's Glory $type";
      break;
    case 391:
      return "Steelrend $type";
      break;
    case 392:
      return "Rainbow Facet $type";
      break;
    case 393:
//      return "rainbow facet 1 $type";
//      break;
    case 394:
//      return "rainbow facet 2 $type";
//      break;
    case 395:
//      return "rainbow facet 3 $type";
//      break;
    case 396:
//      return "rainbow facet 4 $type";
//      break;
    case 397:
//      return "rainbow facet 5 $type";
//      break;
    case 398:
//      return "rainbow facet 6 $type";
//      break;
    case 399:
//      return "rainbow facet 7 $type";
//      break;
      return "Rainbow Facet $type";
      break;
    case 400:
      return "Hellfire Torch $type";
      break;
    default:
      return "$id $type";
  }
}

function set_name ($id, $type) {
  switch ($id) {
    case 0:
      return "Civerb's Vestments - Civerb's Ward $type";
      break;
    case 1:
      return "Civerb's Vestments - Civerb's Icon $type";
      break;
    case 2:
      return "Civerb's Vestments - Civerb's Cudgel $type";
      break;
    case 3:
      return "Hsarus' Defense - Hsarus' Iron Heel $type";
      break;
    case 4:
      return "Hsarus' Defense - Hsarus' Iron Fist $type";
      break;
    case 5:
      return "Hsarus' Defense - Hsarus' Iron Stay $type";
      break;
    case 6:
      return "Cleglaw's Brace - Cleglaw's Tooth $type";
      break;
    case 7:
      return "Cleglaw's Brace - Cleglaw's Claw $type";
      break;
    case 8:
      return "Cleglaw's Brace - Cleglaw's Pincers $type";
      break;
    case 9:
      return "Iratha's Finery - Iratha's Collar $type";
      break;
    case 10:
      return "Iratha's Finery - Iratha's Cuff $type";
      break;
    case 11:
      return "Iratha's Finery - Iratha's Coil $type";
      break;
    case 12:
      return "Iratha's Finery - Iratha's Cord $type";
      break;
    case 13:
      return "Isenhart's Armory - Isenhart's Lightbrand $type";
      break;
    case 14:
      return "Isenhart's Armory - Isenhart's Parry $type";
      break;
    case 15:
      return "Isenhart's Armory - Isenhart's Case $type";
      break;
    case 16:
      return "Isenhart's Armory - Isenhart's Horns $type";
      break;
    case 17:
      return "Vidala's Rig - Vidala's Barb $type";
      break;
    case 18:
      return "Vidala's Rig - Vidala's Fetlock $type";
      break;
    case 19:
      return "Vidala's Rig - Vidala's Ambush $type";
      break;
    case 20:
      return "Vidala's Rig - Vidala's Snare $type";
      break;
    case 21:
      return "Milabrega's Regalia - Milabrega's Orb $type";
      break;
    case 22:
      return "Milabrega's Regalia - Milabrega's Rod $type";
      break;
    case 23:
      return "Milabrega's Regalia - Milabrega's Diadem $type";
      break;
    case 24:
      return "Milabrega's Regalia - Milabrega's Robe $type";
      break;
    case 25:
      return "Cathan's Traps - Cathan's Rule $type";
      break;
    case 26:
      return "Cathan's Traps - Cathan's Mesh $type";
      break;
    case 27:
      return "Cathan's Traps - Cathan's Visage $type";
      break;
    case 28:
      return "Cathan's Traps - Cathan's Sigil $type";
      break;
    case 29:
      return "Cathan's Traps - Cathan's Seal $type";
      break;
    case 30:
      return "Tancred's Battlegear - Tancred's Crowbill $type";
      break;
    case 31:
      return "Tancred's Battlegear - Tancred's Spine $type";
      break;
    case 32:
      return "Tancred's Battlegear - Tancred's Hobnails $type";
      break;
    case 33:
      return "Tancred's Battlegear - Tancred's Weird $type";
      break;
    case 34:
      return "Tancred's Battlegear - Tancred's Skull $type";
      break;
    case 35:
      return "Sigon's Complete Steel - Sigon's Gage $type";
      break;
    case 36:
      return "Sigon's Complete Steel - Sigon's Visor $type";
      break;
    case 37:
      return "Sigon's Complete Steel - Sigon's Shelter $type";
      break;
    case 38:
      return "Sigon's Complete Steel - Sigon's Sabot $type";
      break;
    case 39:
      return "Sigon's Complete Steel - Sigon's Wrap $type";
      break;
    case 40:
      return "Sigon's Complete Steel - Sigon's Guard $type";
      break;
    case 41:
      return "Infernal Tools - Infernal Cranium $type";
      break;
    case 42:
      return "Infernal Tools - Infernal Torch $type";
      break;
    case 43:
      return "Infernal Tools - Infernal Sign $type";
      break;
    case 44:
      return "Berserker's Garb - Berserker's Headgear $type";
      break;
    case 45:
      return "Berserker's Garb - Berserker's Hauberk $type";
      break;
    case 46:
      return "Berserker's Garb - Berserker's Hatchet $type";
      break;
    case 47:
      return "Death's Disguise - Death's Hand $type";
      break;
    case 48:
      return "Death's Disguise - Death's Guard $type";
      break;
    case 49:
      return "Death's Disguise - Death's Touch $type";
      break;
    case 50:
      return "Angelical Raiment - Angelic Sickle $type";
      break;
    case 51:
      return "Angelical Raiment - Angelic Mantle $type";
      break;
    case 52:
      return "Angelical Raiment - Angelic Halo $type";
      break;
    case 53:
      return "Angelical Raiment - Angelic Wings $type";
      break;
    case 54:
      return "Arctic Gear - Arctic Horn $type";
      break;
    case 55:
      return "Arctic Gear - Arctic Furs $type";
      break;
    case 56:
      return "Arctic Gear - Arctic Binding $type";
      break;
    case 57:
      return "Arctic Gear - Arctic Mitts $type";
      break;
    case 58:
      return "Arcanna's Tricks - Arcanna's Sign $type";
      break;
    case 59:
      return "Arcanna's Tricks - Arcanna's Deathwand $type";
      break;
    case 60:
      return "Arcanna's Tricks - Arcanna's Head $type";
      break;
    case 61:
      return "Arcanna's Tricks - Arcanna's Flesh $type";
      break;
    // Expansion

    case 62:
      return "Natalya's Odium - Natalya's Totem $type";
      break;
    case 63:
      return "Natalya's Odium - Natalya's Mark $type";
      break;
    case 64:
      return "Natalya's Odium - Natalya's Shadow $type";
      break;
    case 65:
      return "Natalya's Odium - Natalya's Soul $type";
      break;
    case 66:
      return "Aldur's Watchtower - Aldur's Stony Gaze $type";
      break;
    case 67:
      return "Aldur's Watchtower - Aldur's Deception $type";
      break;
    case 68:
      return "Aldur's Watchtower - Aldur's Gauntlet $type";
      break;
    case 69:
      return "Aldur's Watchtower - Aldur's Advance $type";
      break;
    case 70:
      return "Immortal King - Immortal King's Will $type";
      break;
    case 71:
      return "Immortal King - Immortal King's Soul Cage $type";
      break;
    case 72:
      return "Immortal King - Immortal King's Detail $type";
      break;
    case 73:
      return "Immortal King - Immortal King's Forge $type";
      break;
    case 74:
      return "Immortal King - Immortal King's Pillar $type";
      break;
    case 75:
      return "Immortal King - Immortal King's Stone Crusher $type";
      break;
    case 76:
      return "Tal Rasha's Wrap - Tal Rasha's Fire-Spun Cloth $type";
      break;
    case 77:
      return "Tal Rasha's Wrap - Tal Rasha's Adjudication $type";
      break;
    case 78:
      return "Tal Rasha's Wrap - Tal Rasha's Lidless Eye $type";
      break;
    case 79:
      return "Tal Rasha's Wrap - Tal Rasha's Howling Wind $type";
      break;
    case 80:
      return "Tal Rasha's Wrap - Tal Rasha's Horadric Crest $type";
      break;
    case 81:
      return "Griswold's Legacy - Griswold's Valor $type";
      break;
    case 82:
      return "Griswold's Legacy - Griswold's Heart $type";
      break;
    case 83:
      return "Griswold's Legacy - Griswolds's Redemption $type";
      break;
    case 84:
      return "Griswold's Legacy - Griswold's Honor $type";
      break;
    case 85:
      return "Trang-Oul's Avatar - Trang-Oul's Guise $type";
      break;
    case 86:
      return "Trang-Oul's Avatar - Trang-Oul's Scales $type";
      break;
    case 87:
      return "Trang-Oul's Avatar - Trang-Oul's Wing $type";
      break;
    case 88:
      return "Trang-Oul's Avatar - Trang-Oul's Claws $type";
      break;
    case 89:
      return "Trang-Oul's Avatar - Trang-Oul's Girth $type";
      break;
    case 90:
      return "M'avina's Battle Hymn - M'avina's True Sight $type";
      break;
    case 91:
      return "M'avina's Battle Hymn - M'avina's Embrace $type";
      break;
    case 92:
      return "M'avina's Battle Hymn - M'avina's Icy Clutch $type";
      break;
    case 93:
      return "M'avina's Battle Hymn - M'avina's Tenet $type";
      break;
    case 94:
      return "M'avina's Battle Hymn - M'avina's Caster $type";
      break;
    case 95:
      return "The Disciple - Telling of Beads $type";
      break;
    case 96:
      return "The Disciple - Laying of Hands $type";
      break;
    case 97:
      return "The Disciple - Rite of Passage $type";
      break;
    case 98:
      return "The Disciple - Spiritual Custodian $type";
      break;
    case 99:
      return "The Disciple - Credendum $type";
      break;
    case 100:
      return "Heaven's Brethren - Dangoon's Teaching $type";
      break;
    case 101:
      return "Heaven's Brethren - Heaven's Taebaek $type";
      break;
    case 102:
      return "Heaven's Brethren - Haemosu's Adament $type";
      break;
    case 103:
      return "Heaven's Brethren - Ondal's Almighty $type";
      break;
    case 104:
      return "Orphan's Call - Guillaume's Face $type";
      break;
    case 105:
      return "Orphan's Call - Wilhelm's Pride $type";
      break;
    case 106:
      return "Orphan's Call - Magnus' Skin $type";
      break;
    case 107:
      return "Orphan's Call - Wihtstan's Guard $type";
      break;
    case 108:
      return "Hwanin's Majesty - Hwanin's Splendor $type";
      break;
    case 109:
      return "Hwanin's Majesty - Hwanin's Refuge $type";
      break;
    case 110:
      return "Hwanin's Majesty - Hwanin's Seal $type";
      break;
    case 111:
      return "Hwanin's Majesty - Hwanin's Justice $type";
      break;
    case 112:
      return "Sazabi's Grand Tribute - Sazabi's Cobalt Redeemer $type";
      break;
    case 113:
      return "Sazabi's Grand Tribute - Sazabi's Ghost Liberator $type";
      break;
    case 114:
      return "Sazabi's Grand Tribute - Sazabi's Mental Sheath $type";
      break;
    case 115:
      return "Bul-Kathos' Children - Bul-Kathos' Sacred Charge $type";
      break;
    case 116:
      return "Bul-Kathos' Children - Bul-Kathos' Tribal Guardian $type";
      break;
    case 117:
      return "Cow King's Leathers - Cow King's Horns $type";
      break;
    case 118:
      return "Cow King's Leathers - Cow King's Hide $type";
      break;
    case 119:
      return "Cow King's Leathers - Cow King's Hoofs $type";
      break;
    case 120:
      return "Naj's Ancient Set - Naj's Puzzler $type";
      break;
    case 121:
      return "Naj's Ancient Set - Naj's Light Plate $type";
      break;
    case 122:
      return "Naj's Ancient Set - Naj's Circlet $type";
      break;
    case 123:
      return "McAuley's Folly - McAuley's Paragon $type";
      break;
    case 124:
      return "McAuley's Folly - McAuley's Riprap $type";
      break;
    case 125:
      return "McAuley's Folly - McAuley's Taboo $type";
      break;
    case 126:
      return "McAuley's Folly - McAuley's Superstition $type";
      break;
    default:
      return "$id $type";
  }
}

function rare_name ($id) {
  switch ($id) {

    case 0:
      return "";
      break;

    // Second Name
    case 1:
      return "bite";
      break;
    case 2:
      return "scratch";
      break;
    case 3:
      return "scalpel";
      break;
    case 4:
      return "fang";
      break;
    case 5:
      return "gutter";
      break;
    case 6:
      return "thirst";
      break;
    case 7:
      return "razor";
      break;
    case 8:
      return "scythe";
      break;
    case 9:
      return "edge";
      break;
    case 10:
      return "saw";
      break;
    case 11:
      return "splitter";
      break;
    case 12:
      return "cleaver";
      break;
    case 13:
      return "sever";
      break;
    case 14:
      return "sunder";
      break;
    case 15:
      return "rend";
      break;
    case 16:
      return "mangler";
      break;
    case 17:
      return "slayer";
      break;
    case 18:
      return "reaver";
      break;
    case 19:
      return "spawn";
      break;
    case 20:
      return "gnash";
      break;
    case 21:
      return "star";
      break;
    case 22:
      return "blow";
      break;
    case 23:
      return "smasher";
      break;
    case 24:
      return "Bane";
      break;
    case 25:
      return "crusher";
      break;
    case 26:
      return "breaker";
      break;
    case 27:
      return "grinder";
      break;
    case 28:
      return "crack";
      break;
    case 29:
      return "mallet";
      break;
    case 30:
      return "knell";
      break;
    case 31:
      return "lance";
      break;
    case 32:
      return "spike";
      break;
    case 33:
      return "impaler";
      break;
    case 34:
      return "skewer";
      break;
    case 35:
      return "prod";
      break;
    case 36:
      return "scourge";
      break;
    case 37:
      return "wand";
      break;
    case 38:
      return "wrack";
      break;
    case 39:
      return "barb";
      break;
    case 40:
      return "needle";
      break;
    case 41:
      return "dart";
      break;
    case 42:
      return "bolt";
      break;
    case 43:
      return "quarrel";
      break;
    case 44:
      return "fletch";
      break;
    case 45:
      return "flight";
      break;
    case 46:
      return "nock";
      break;
    case 47:
      return "horn";
      break;
    case 48:
      return "stinger";
      break;
    case 49:
      return "quill";
      break;
    case 50:
      return "goad";
      break;
    case 51:
      return "branch";
      break;
    case 52:
      return "spire";
      break;
    case 53:
      return "song";
      break;
    case 54:
      return "call";
      break;
    case 55:
      return "cry";
      break;
    case 56:
      return "spell";
      break;
    case 57:
      return "chant";
      break;
    case 58:
      return "weaver";
      break;
    case 59:
      return "gnarl";
      break;
    case 60:
      return "visage";
      break;
    case 61:
      return "crest";
      break;
    case 62:
      return "circlet";
      break;
    case 63:
      return "veil";
      break;
    case 64:
      return "hood";
      break;
    case 65:
      return "mask";
      break;
    case 66:
      return "brow";
      break;
    case 67:
      return "casque";
      break;
    case 68:
      return "visor";
      break;
    case 69:
      return "cowl";
      break;
    case 70:
      return "hide";
      break;
    case 71:
      return "Pelt";
      break;
    case 72:
      return "carapace";
      break;
    case 73:
      return "coat";
      break;
    case 74:
      return "wrap";
      break;
    case 75:
      return "suit";
      break;
    case 76:
      return "cloak";
      break;
    case 77:
      return "shroud";
      break;
    case 78:
      return "jack";
      break;
    case 79:
      return "mantle";
      break;
    case 80:
      return "guard";
      break;
    case 81:
      return "badge";
      break;
    case 82:
      return "rock";
      break;
    case 83:
      return "aegis";
      break;
    case 84:
      return "ward";
      break;
    case 85:
      return "tower";
      break;
    case 86:
      return "shield";
      break;
    case 87:
      return "wing";
      break;
    case 88:
      return "mark";
      break;
    case 89:
      return "emblem";
      break;
    case 90:
      return "hand";
      break;
    case 91:
      return "fist";
      break;
    case 92:
      return "claw";
      break;
    case 93:
      return "clutches";
      break;
    case 94:
      return "grip";
      break;
    case 95:
      return "grasp";
      break;
    case 96:
      return "hold";
      break;
    case 97:
      return "touch";
      break;
    case 98:
      return "finger";
      break;
    case 99:
      return "knuckle";
      break;
    case 100:
      return "shank";
      break;
    case 101:
      return "spur";
      break;
    case 102:
      return "tread";
      break;
    case 103:
      return "stalker";
      break;
    case 104:
      return "greave";
      break;
    case 105:
      return "blazer";
      break;
    case 106:
      return "nails";
      break;
    case 107:
      return "trample";
      break;
    case 108:
      return "Brogues";
      break;
    case 109:
      return "track";
      break;
    case 110:
      return "slippers";
      break;
    case 111:
      return "clasp";
      break;
    case 112:
      return "buckle";
      break;
    case 113:
      return "harness";
      break;
    case 114:
      return "lock";
      break;
    case 115:
      return "fringe";
      break;
    case 116:
      return "winding";
      break;
    case 117:
      return "chain";
      break;
    case 118:
      return "strap";
      break;
    case 119:
      return "lash";
      break;
    case 120:
      return "cord";
      break;
    case 121:
      return "knot";
      break;
    case 122:
      return "circle";
      break;
    case 123:
      return "loop";
      break;
    case 124:
      return "eye";
      break;
    case 125:
      return "turn";
      break;
    case 126:
      return "spiral";
      break;
    case 127:
      return "coil";
      break;
    case 128:
      return "gyre";
      break;
    case 129:
      return "band";
      break;
    case 130:
      return "whorl";
      break;
    case 131:
      return "talisman";
      break;
    case 132:
      return "heart";
      break;
    case 133:
      return "noose";
      break;
    case 134:
      return "necklace";
      break;
    case 135:
      return "collar";
      break;
    case 136:
      return "beads";
      break;
    case 137:
      return "torc";
      break;
    case 138:
      return "gorget";
      break;
    case 139:
      return "scarab";
      break;
    case 140:
      return "wood";
      break;
    case 141:
      return "brand";
      break;
    case 142:
      return "bludgeon";
      break;
    case 143:
      return "cudgel";
      break;
    case 144:
      return "loom";
      break;
    case 145:
      return "harp";
      break;
    case 146:
      return "master";
      break;
    case 147:
      return "barRI";
      break;
    case 148:
      return "hew";
      break;
    case 149:
      return "crook";
      break;
    case 150:
      return "mar";
      break;
    case 151:
      return "shell";
      break;
    case 152:
      return "stake";
      break;
    case 153:
      return "picket";
      break;
    case 154:
      return "pale";
      break;
    case 155:
      return "flange";
      break;

    // First Name
    case 156:
      return "Beast";
      break;
    case 157:
      return "Eagle";
      break;
    case 158:
      return "Raven";
      break;
    case 159:
      return "Viper";
      break;
    case 160:
//      return "GhoulRI";
      return "Ghoul";
      break;
    case 161:
      return "Skull";
      break;
    case 162:
      return "Blood";
      break;
    case 163:
      return "Dread";
      break;
    case 164:
      return "Doom";
      break;
    case 165:
      return "Grim";
      break;
    case 166:
      return "Bone";
      break;
    case 167:
      return "Death";
      break;
    case 168:
      return "Shadow";
      break;
    case 169:
      return "Storm";
      break;
    case 170:
      return "Rune";
      break;
    case 171:
//      return "PlagueRI";
      return "Plague";
      break;
    case 172:
      return "Stone";
      break;
    case 173:
      return "Wraithra";
      break;
    case 174:
      return "Spirit";
      break;
    case 175:
      return "Storm";
      break;
    case 176:
      return "Demon";
      break;
    case 177:
      return "Cruel";
      break;
    case 178:
      return "Empyrion";
      break;
    case 179:
      return "Bramble";
      break;
    case 180:
      return "Pain";
      break;
    case 181:
      return "Loath";
      break;
    case 182:
      return "Glyph";
      break;
    case 183:
      return "Imp";
      break;
    case 184:
      return "Fiendra";
      break;
    case 185:
      return "Hailstone";
      break;
    case 186:
      return "Gale";
      break;
    case 187:
      return "Dire";
      break;
    case 188:
      return "Soul";
      break;
    case 189:
      return "Brimstone";
      break;
    case 190:
      return "Corpse";
      break;
    case 191:
      return "Carrion";
      break;
    case 192:
      return "Holocaust";
      break;
    case 193:
      return "Havoc";
      break;
    case 194:
      return "Bitter";
      break;
    case 195:
      return "Entropy";
      break;
    case 196:
      return "Chaos";
      break;
    case 197:
      return "Order";
      break;
    case 198:
      return "Rule";
      break;
    case 199:
      return "Warp";
      break;
    case 200:
      return "Rift";
      break;
    case 201:
      return "Corruption";
      break;
    default:
      return $id;
//      return "";
  }
}

function magic_prefix ($id) {
  switch ($id) {
/*
    case 146:
      return "Glorious";
      break;
    case 282:
      return "Fortuitous";
      break;
    case 337:
      return "Scintillating";
      break;
    case 392:
      return "Coral";
      break;
    case 410:
      return "Viridian";
      break;
    case 470:
      return "Hawk Branded";
      break;
*/
    case 1:
      return "Sturdy";
      break;
    case 2:
      return "Strong";
      break;
    case 3:
      return "Glorious";
      break;
    case 4:
      return "Blessed";
      break;
    case 5:
      return "Saintly";
      break;
    case 6:
      return "Holy";
      break;
    case 7:
      return "Devious";
      break;
    case 8:
      return "Fortified";
      break;
    case 9:
      return "";
      break;
    case 10:
      return "";
      break;
    case 11:
      return "";
      break;
    case 12:
      return "Jagged";
      break;
    case 13:
      return "Deadly";
      break;
    case 14:
      return "Vicious";
      break;
    case 15:
      return "Brutal";
      break;
    case 16:
      return "Massive";
      break;
    case 17:
      return "Savage";
      break;
    case 18:
      return "Merciless";
      break;
    case 19:
      return "Vulpine";
      break;
    case 20:
      return "";
      break;
    case 21:
      return "";
      break;
    case 22:
      return "";
      break;
    case 23:
      return "";
      break;
    case 24:
      return "Tireless";
      break;
    case 25:
      return "Rugged";
      break;
    case 26:
      return "Bronze";
      break;
    case 27:
      return "Iron";
      break;
    case 28:
      return "Steel";
      break;
    case 29:
      return "Silver";
      break;
    case 30:
      return "";
      break;
    case 31:
      return "Gold";
      break;
    case 32:
      return "Platinum";
      break;
    case 33:
      return "Meteoric";
      break;
    case 34:
      return "Sharp";
      break;
    case 35:
      return "Fine";
      break;
    case 36:
      return "Warrior's";
      break;
    case 37:
      return "Soldier's";
      break;
    case 38:
      return "Knight's";
      break;
    case 39:
      return "Lord's";
      break;
    case 40:
      return "King's";
      break;
    case 41:
      return "Howling";
      break;
    case 42:
      return "Fortuitous";
      break;
    case 43:
      return "";
      break;
    case 44:
      return "";
      break;
    case 45:
      return "";
      break;
    case 46:
      return "";
      break;
    case 47:
      return "";
      break;
    case 48:
      return "Glimmering";
      break;
    case 49:
      return "Glowing";
      break;
    case 50:
      return "";
      break;
    case 51:
      return "";
      break;
    case 52:
      return "Lizard's";
      break;
    case 53:
      return "";
      break;
    case 54:
      return "Snake's";
      break;
    case 55:
      return "Serpent's";
      break;
    case 56:
      return "Serpent's";
      break;
    case 57:
      return "Drake's";
      break;
    case 58:
      return "Dragon's";
      break;
    case 59:
      return "Dragon's";
      break;
    case 60:
      return "Wyrm's";
      break;
    case 61:
      return "";
      break;
    case 62:
      return "";
      break;
    case 63:
      return "Prismatic";
      break;
    case 64:
      return "Prismatic";
      break;
    case 65:
      return "Azure";
      break;
    case 66:
      return "Lapis";
      break;
    case 67:
      return "Lapis";
      break;
    case 68:
      return "Cobalt";
      break;
    case 69:
      return "Cobalt";
      break;
    case 70:
      return "";
      break;
    case 71:
      return "Sapphire";
      break;
    case 72:
      return "";
      break;
    case 73:
      return "";
      break;
    case 74:
      return "Crimson";
      break;
    case 75:
      return "Burgundy";
      break;
    case 76:
      return "Burgundy";
      break;
    case 77:
      return "Garnet";
      break;
    case 78:
      return "Garnet";
      break;
    case 79:
      return "";
      break;
    case 80:
      return "Ruby";
      break;
    case 81:
      return "";
      break;
    case 82:
      return "";
      break;
    case 83:
      return "Ocher";
      break;
    case 84:
      return "Tangerine";
      break;
    case 85:
      return "Tangerine";
      break;
    case 86:
      return "Coral";
      break;
    case 87:
      return "Coral";
      break;
    case 88:
      return "";
      break;
    case 89:
      return "Amber";
      break;
    case 90:
      return "";
      break;
    case 91:
      return "";
      break;
    case 92:
      return "Beryl";
      break;
    case 93:
      return "Jade";
      break;
    case 94:
      return "Jade";
      break;
    case 95:
      return "Viridian";
      break;
    case 96:
      return "Viridian";
      break;
    case 97:
      return "";
      break;
    case 98:
      return "Emerald";
      break;
    case 99:
      return "";
      break;
    case 100:
      return "Fletcher's";
      break;
    case 101:
      return "Archer's";
      break;
    case 102:
      return "Archer's";
      break;
    case 103:
      return "Monk's";
      break;
    case 104:
      return "Priest's";
      break;
    case 105:
      return "Priest's";
      break;
    case 106:
      return "Summoner's";
      break;
    case 107:
      return "Necromancer's";
      break;
    case 108:
      return "Necromancer's";
      break;
    case 109:
      return "Angel's";
      break;
    case 110:
      return "Arch-Angel's";
      break;
    case 111:
      return "Arch-Angel's";
      break;
    case 112:
      return "Slayer's";
      break;
    case 113:
      return "Berserker's";
      break;
    case 114:
      return "Berserker's";
      break;
    case 115:
      return "";
      break;
    case 116:
      return "";
      break;
    case 117:
      return "Triumphant";
      break;

// Expansion
    case 118:
//      return "Expansion";
      return "";
      break;
    case 119:
      return "Stout";
      break;
    case 120:
      return "Stout";
      break;
    case 121:
      return "Stout";
      break;
    case 122:
      return "Burly";
      break;
    case 123:
      return "Burly";
      break;
    case 124:
      return "Burly";
      break;
    case 125:
      return "Stalwart";
      break;
    case 126:
      return "Stalwart";
      break;
    case 127:
      return "Stalwart";
      break;
    case 128:
      return "Stout";
      break;
    case 129:
      return "Stout";
      break;
    case 130:
      return "Stout";
      break;
    case 131:
      return "Burly";
      break;
    case 132:
      return "Burly";
      break;
    case 133:
      return "Stalwart";
      break;
    case 134:
      return "Stalwart";
      break;
    case 135:
      return "Stout";
      break;
    case 136:
      return "Stout";
      break;
    case 137:
      return "Burly";
      break;
    case 138:
      return "Stalwart";
      break;
    case 139:
      return "Blanched";
      break;
    case 140:
      return "Eburin";
      break;
    case 141:
      return "Bone";
      break;
    case 142:
      return "Ivory";
      break;
    case 143:
      return "Sturdy";
      break;
    case 144:
      return "Sturdy";
      break;
    case 145:
      return "Strong";
      break;
    case 146:
      return "Glorious";
      break;
    case 147:
      return "Blessed";
      break;
    case 148:
      return "Saintly";
      break;
    case 149:
      return "Holy";
      break;
    case 150:
      return "Godly";
      break;
    case 151:
      return "unused000";
      break;
    case 152:
      return "unused001";
      break;
    case 153:
      return "unused002";
      break;
    case 154:
      return "unused003";
      break;
    case 155:
      return "unused004";
      break;
    case 156:
      return "unused005";
      break;
    case 157:
      return "unused006";
      break;
    case 158:
      return "unused007";
      break;
    case 159:
      return "unused008";
      break;
    case 160:
      return "unused009";
      break;
    case 161:
      return "unused010";
      break;
    case 162:
      return "unused011";
      break;
    case 163:
      return "unused012";
      break;
    case 164:
      return "unused013";
      break;
    case 165:
      return "unused014";
      break;
    case 166:
      return "Scarlet";
      break;
    case 167:
      return "Crimson";
      break;
    case 168:
      return "unused015";
      break;
    case 169:
      return "unused016";
      break;
    case 170:
      return "unused017";
      break;
    case 171:
      return "unused018";
      break;
    case 172:
      return "unused019";
      break;
    case 173:
      return "unused020";
      break;
    case 174:
      return "unused021";
      break;
    case 175:
      return "unused022";
      break;
    case 176:
      return "unused023";
      break;
    case 177:
      return "unused024";
      break;
    case 178:
      return "unused025";
      break;
    case 179:
      return "unused026";
      break;
    case 180:
      return "unused027";
      break;
    case 181:
      return "unused028";
      break;
    case 182:
      return "unused029";
      break;
    case 183:
      return "Carbuncle";
      break;
    case 184:
      return "Carmine";
      break;
    case 185:
      return "Vermillion";
      break;
    case 186:
      return "Jagged";
      break;
    case 187:
      return "Deadly";
      break;
    case 188:
      return "Vicious";
      break;
    case 189:
      return "Brutal";
      break;
    case 190:
      return "Massive";
      break;
    case 191:
      return "Savage";
      break;
    case 192:
      return "Merciless";
      break;
    case 193:
      return "Ferocious";
      break;
    case 194:
      return "Cruel";
      break;
    case 195:
      return "Cinnabar";
      break;
    case 196:
      return "Rusty";
      break;
    case 197:
      return "Realgar";
      break;
    case 198:
      return "Ruby";
      break;
    case 199:
      return "Vulpine";
      break;
    case 200:
      return "Dun";
      break;
    case 201:
      return "Tireless";
      break;
    case 202:
      return "Tireless";
      break;
    case 203:
      return "Brown";
      break;
    case 204:
      return "Rugged";
      break;
    case 205:
      return "Rugged";
      break;
    case 206:
      return "Rugged";
      break;
    case 207:
      return "Rugged";
      break;
    case 208:
      return "Rugged";
      break;
    case 209:
      return "Rugged";
      break;
    case 210:
      return "Rugged";
      break;
    case 211:
      return "Rugged";
      break;
    case 212:
      return "Rugged";
      break;
    case 213:
      return "Rugged";
      break;
    case 214:
      return "Rugged";
      break;
    case 215:
      return "Vigorous";
      break;
    case 216:
      return "Chestnut";
      break;
    case 217:
      return "Maroon";
      break;
    case 218:
      return "Bronze";
      break;
    case 219:
      return "Bronze";
      break;
    case 220:
      return "Bronze";
      break;
    case 221:
      return "Iron";
      break;
    case 222:
      return "Iron";
      break;
    case 223:
      return "Iron";
      break;
    case 224:
      return "Steel";
      break;
    case 225:
      return "Steel";
      break;
    case 226:
      return "Steel";
      break;
    case 227:
      return "Bronze";
      break;
    case 228:
      return "Bronze";
      break;
    case 229:
      return "Bronze";
      break;
    case 230:
      return "Iron";
      break;
    case 231:
      return "Iron";
      break;
    case 232:
      return "Steel";
      break;
    case 233:
      return "Steel";
      break;
    case 234:
      return "Bronze";
      break;
    case 235:
      return "Bronze";
      break;
    case 236:
      return "Iron";
      break;
    case 237:
      return "Steel";
      break;
    case 238:
      return "Bronze";
      break;
    case 239:
      return "Iron";
      break;
    case 240:
      return "Steel";
      break;
    case 241:
      return "Silver";
      break;
    case 242:
      return "Gold";
      break;
    case 243:
      return "Platinum";
      break;
    case 244:
      return "Meteoric";
      break;
    case 245:
      return "Strange";
      break;
    case 246:
      return "Weird";
      break;
    case 247:
      return "Nickel";
      break;
    case 248:
      return "Tin";
      break;
    case 249:
      return "Silver";
      break;
    case 250:
      return "Argent";
      break;
    case 251:
      return "Fine";
      break;
    case 252:
      return "Fine";
      break;
    case 253:
      return "Sharp";
      break;
    case 254:
      return "Fine";
      break;
    case 255:
      return "Sharp";
      break;
    case 256:
      return "Fine";
      break;
    case 257:
      return "Sharp";
      break;
    case 258:
      return "Fine";
      break;
    case 259:
      return "Warrior's";
      break;
    case 260:
      return "Soldier's";
      break;
    case 261:
      return "Knight's";
      break;
    case 262:
      return "Lord's";
      break;
    case 263:
      return "King's";
      break;
    case 264:
      return "Master's";
      break;
    case 265:
      return "Grandmaster's";
      break;
    case 266:
      return "Glimmering";
      break;
    case 267:
      return "Glowing";
      break;
    case 268:
      return "Bright";
      break;
    case 269:
      return "Screaming";
      break;
    case 270:
      return "Howling";
      break;
    case 271:
      return "Wailing";
      break;
    case 272:
      return "Screaming";
      break;
    case 273:
      return "Howling";
      break;
    case 274:
      return "Wailing";
      break;
    case 275:
      return "Lucky";
      break;
    case 276:
      return "Lucky";
      break;
    case 277:
      return "Lucky";
      break;
    case 278:
      return "Lucky";
      break;
    case 279:
      return "Lucky";
      break;
    case 280:
      return "Lucky";
      break;
    case 281:
      return "Felicitous";
      break;
    case 282:
      return "Fortuitous";
      break;
    case 283:
      return "Emerald";
      break;
    case 284:
      return "Lizard's";
      break;
    case 285:
      return "Lizard's";
      break;
    case 286:
      return "Lizard's";
      break;
    case 287:
      return "Snake's";
      break;
    case 288:
      return "Snake's";
      break;
    case 289:
      return "Snake's";
      break;
    case 290:
      return "Serpent's";
      break;
    case 291:
      return "Serpent's";
      break;
    case 292:
      return "Serpent's";
      break;
    case 293:
      return "Lizard's";
      break;
    case 294:
      return "Lizard's";
      break;
    case 295:
      return "Lizard's";
      break;
    case 296:
      return "Snake's";
      break;
    case 297:
      return "Snake's";
      break;
    case 298:
      return "Serpent's";
      break;
    case 299:
      return "Serpent's";
      break;
    case 300:
      return "Lizard's";
      break;
    case 301:
      return "Lizard's";
      break;
    case 302:
      return "Snake's";
      break;
    case 303:
      return "Serpent's";
      break;
    case 304:
      return "Lizard's";
      break;
    case 305:
      return "Snake's";
      break;
    case 306:
      return "Serpent's";
      break;
    case 307:
      return "Serpent's";
      break;
    case 308:
      return "Drake's";
      break;
    case 309:
      return "Dragon's";
      break;
    case 310:
      return "Dragon's";
      break;
    case 311:
      return "Wyrm's";
      break;
    case 312:
      return "Great Wyrm's";
      break;
    case 313:
      return "Bahamut's";
      break;
    case 314:
      return "Zircon";
      break;
    case 315:
      return "Jacinth";
      break;
    case 316:
      return "Turquoise";
      break;
    case 317:
      return "Shimmering";
      break;
    case 318:
      return "Shimmering";
      break;
    case 319:
      return "Shimmering";
      break;
    case 320:
      return "Shimmering";
      break;
    case 321:
      return "Shimmering";
      break;
    case 322:
      return "Shimmering";
      break;
    case 323:
      return "Shimmering";
      break;
    case 324:
      return "Rainbow";
      break;
    case 325:
      return "Scintillating";
      break;
    case 326:
      return "Prismatic";
      break;
    case 327:
      return "Chromatic";
      break;
    case 328:
      return "Shimmering";
      break;
    case 329:
      return "Rainbow";
      break;
    case 330:
      return "Scintillating";
      break;
    case 331:
      return "Prismatic";
      break;
    case 332:
      return "Chromatic";
      break;
    case 333:
      return "Shimmering";
      break;
    case 334:
      return "Rainbow";
      break;
    case 335:
      return "Scintillating";
      break;
    case 336:
      return "Shimmering";
      break;
    case 337:
      return "Scintillating";
      break;
    case 338:
      return "Azure";
      break;
    case 339:
      return "Lapis";
      break;
    case 340:
      return "Cobalt";
      break;
    case 341:
      return "Sapphire";
      break;
    case 342:
      return "Azure";
      break;
    case 343:
      return "Lapis";
      break;
    case 344:
      return "Cobalt";
      break;
    case 345:
      return "Sapphire";
      break;
    case 346:
      return "Azure";
      break;
    case 347:
      return "Lapis";
      break;
    case 348:
      return "Cobalt";
      break;
    case 349:
      return "Sapphire";
      break;
    case 350:
      return "Azure";
      break;
    case 351:
      return "Lapis";
      break;
    case 352:
      return "Lapis";
      break;
    case 353:
      return "Cobalt";
      break;
    case 354:
      return "Cobalt";
      break;
    case 355:
      return "Sapphire";
      break;
    case 356:
      return "Lapis Lazuli";
      break;
    case 357:
      return "Sapphire";
      break;
    case 358:
      return "Crimson";
      break;
    case 359:
      return "Russet";
      break;
    case 360:
      return "Garnet";
      break;
    case 361:
      return "Ruby";
      break;
    case 362:
      return "Crimson";
      break;
    case 363:
      return "Russet";
      break;
    case 364:
      return "Garnet";
      break;
    case 365:
      return "Ruby";
      break;
    case 366:
      return "Crimson";
      break;
    case 367:
      return "Russet";
      break;
    case 368:
      return "Garnet";
      break;
    case 369:
      return "Ruby";
      break;
    case 370:
      return "Russet";
      break;
    case 371:
      return "Russet";
      break;
    case 372:
      return "Garnet";
      break;
    case 373:
      return "Garnet";
      break;
    case 374:
      return "Ruby";
      break;
    case 375:
      return "Garnet";
      break;
    case 376:
      return "Ruby";
      break;
    case 377:
      return "Tangerine";
      break;
    case 378:
      return "Ocher";
      break;
    case 379:
      return "Coral";
      break;
    case 380:
      return "Amber";
      break;
    case 381:
      return "Tangerine";
      break;
    case 382:
      return "Ocher";
      break;
    case 383:
      return "Coral";
      break;
    case 384:
      return "Amber";
      break;
    case 385:
      return "Tangerine";
      break;
    case 386:
      return "Ocher";
      break;
    case 387:
      return "Coral";
      break;
    case 388:
      return "Amber";
      break;
    case 389:
      return "Tangerine";
      break;
    case 390:
      return "Ocher";
      break;
    case 391:
      return "Ocher";
      break;
    case 392:
      return "Coral";
      break;
    case 393:
      return "Coral";
      break;
    case 394:
      return "Amber";
      break;
    case 395:
      return "Camphor";
      break;
    case 396:
      return "Ambergris";
      break;
    case 397:
      return "Beryl";
      break;
    case 398:
      return "Viridian";
      break;
    case 399:
      return "Jade";
      break;
    case 400:
      return "Emerald";
      break;
    case 401:
      return "Beryl";
      break;
    case 402:
      return "Viridian";
      break;
    case 403:
      return "Jade";
      break;
    case 404:
      return "Emerald";
      break;
    case 405:
      return "Beryl";
      break;
    case 406:
      return "Viridian";
      break;
    case 407:
      return "Jade";
      break;
    case 408:
      return "Emerald";
      break;
    case 409:
      return "Beryl";
      break;
    case 410:
      return "Viridian";
      break;
    case 411:
      return "Viridian";
      break;
    case 412:
      return "Jade";
      break;
    case 413:
      return "Jade";
      break;
    case 414:
      return "Emerald";
      break;
    case 415:
      return "Beryl";
      break;
    case 416:
      return "Jade";
      break;
    case 417:
      return "Triumphant";
      break;
    case 418:
      return "Victorious";
      break;
    case 419:
      return "Aureolin";
      break;
    case 420:
      return "Mechanist's";
      break;
    case 421:
      return "Artificer's";
      break;
    case 422:
      return "Jeweler's";
      break;
    case 423:
      return "Assamic";
      break;
    case 424:
      return "Arcadian";
      break;
    case 425:
      return "Unearthly";
      break;
    case 426:
      return "Astral";
      break;
    case 427:
      return "Elysian";
      break;
    case 428:
      return "Celestial";
      break;
    case 429:
      return "Diamond";
      break;
    case 430:
      return "Fletcher's";
      break;
    case 431:
      return "Acrobat's";
      break;
    case 432:
      return "Harpoonist's";
      break;
    case 433:
      return "Fletcher's";
      break;
    case 434:
      return "Bowyer's";
      break;
    case 435:
      return "Archer's";
      break;
    case 436:
      return "Acrobat's";
      break;
    case 437:
      return "Gymnast's";
      break;
    case 438:
      return "Athlete's";
      break;
    case 439:
      return "Harpoonist's";
      break;
    case 440:
      return "Spearmaiden's";
      break;
    case 441:
      return "Lancer's";
      break;
    case 442:
      return "Burning";
      break;
    case 443:
      return "Sparking";
      break;
    case 444:
      return "Chilling";
      break;
    case 445:
      return "Burning";
      break;
    case 446:
      return "Blazing";
      break;
    case 447:
      return "Volcanic";
      break;
    case 448:
      return "Sparking";
      break;
    case 449:
      return "Charged";
      break;
    case 450:
      return "Powered";
      break;
    case 451:
      return "Chilling";
      break;
    case 452:
      return "Freezing";
      break;
    case 453:
      return "Glacial";
      break;
    case 454:
      return "Hexing";
      break;
    case 455:
      return "Fungal";
      break;
    case 456:
      return "Graverobber's";
      break;
    case 457:
      return "Hexing";
      break;
    case 458:
      return "Blighting";
      break;
    case 459:
      return "Accursed";
      break;
    case 460:
      return "Fungal";
      break;
    case 461:
      return "Noxious";
      break;
    case 462:
      return "Venomous";
      break;
    case 463:
      return "Graverobber's";
      break;
    case 464:
      return "Vodoun";
      break;
    case 465:
      return "Golemlord's";
      break;
    case 466:
      return "Lion Branded";
      break;
    case 467:
      return "Captain's";
      break;
    case 468:
      return "Preserver's";
      break;
    case 469:
      return "Lion Branded";
      break;
    case 470:
      return "Hawk Branded";
      break;
    case 471:
      return "Rose Branded";
      break;
    case 472:
      return "Captain's";
      break;
    case 473:
      return "Commander's";
      break;
    case 474:
      return "Marshal's";
      break;
    case 475:
      return "Preserver's";
      break;
    case 476:
      return "Warder's";
      break;
    case 477:
      return "Guardian's";
      break;
    case 478:
      return "Expert's";
      break;
    case 479:
      return "Fanatic";
      break;
    case 480:
      return "Sounding";
      break;
    case 481:
      return "Expert's";
      break;
    case 482:
      return "Veteran's";
      break;
    case 483:
      return "Master's";
      break;
    case 484:
      return "Fanatic";
      break;
    case 485:
      return "Raging";
      break;
    case 486:
      return "Furious";
      break;
    case 487:
      return "Sounding";
      break;
    case 488:
      return "Resonant";
      break;
    case 489:
      return "Echoing";
      break;
    case 490:
      return "Trainer's";
      break;
    case 491:
      return "Spiritual";
      break;
    case 492:
      return "Nature's";
      break;
    case 493:
      return "Trainer's";
      break;
    case 494:
      return "Caretaker's";
      break;
    case 495:
      return "Keeper's";
      break;
    case 496:
      return "Spiritual";
      break;
    case 497:
      return "Feral";
      break;
    case 498:
      return "Communal";
      break;
    case 499:
      return "Nature's";
      break;
    case 500:
      return "Terra's";
      break;
    case 501:
      return "Gaea's";
      break;
    case 502:
      return "Entrapping";
      break;
    case 503:
      return "Mentalist's";
      break;
    case 504:
      return "Shogukusha's";
      break;
    case 505:
      return "Entrapping";
      break;
    case 506:
      return "Trickster's";
      break;
    case 507:
      return "Cunning";
      break;
    case 508:
      return "Mentalist's";
      break;
    case 509:
      return "Psychic";
      break;
    case 510:
      return "Shadow";
      break;
    case 511:
      return "Shogukusha's";
      break;
    case 512:
      return "Sensei's";
      break;
    case 513:
      return "Kenshi's";
      break;
    case 514:
      return "unused030";
      break;
    case 515:
      return "unused031";
      break;
    case 516:
      return "unused032";
      break;
    case 517:
      return "unused033";
      break;
    case 518:
      return "unused034";
      break;
    case 519:
      return "unused035";
      break;
    case 520:
      return "Paleocene";
      break;
    case 521:
      return "Paleocene";
      break;
    case 522:
      return "unused036";
      break;
    case 523:
      return "unused037";
      break;
    case 524:
      return "unused038";
      break;
    case 525:
      return "unused039";
      break;
    case 526:
      return "Trump";
      break;
    case 527:
      return "unused040";
      break;
    case 528:
      return "unused041";
      break;
    case 529:
      return "unused042";
      break;
    case 530:
      return "unused043";
      break;
    case 531:
      return "Gritty";
      break;
    case 532:
      return "unused044";
      break;
    case 533:
      return "unused045";
      break;
    case 534:
      return "unused046";
      break;
    case 535:
      return "unused047";
      break;
    case 536:
      return "unused048";
      break;
    case 537:
      return "Hawkeye";
      break;
    case 538:
      return "unused049";
      break;
    case 539:
      return "Visionary";
      break;
    case 540:
      return "Mnemonic";
      break;
    case 541:
      return "Snowflake";
      break;
    case 542:
      return "Shivering";
      break;
    case 543:
      return "Boreal";
      break;
    case 544:
      return "Hibernal";
      break;
    case 545:
      return "Ember";
      break;
    case 546:
      return "Smoldering";
      break;
    case 547:
      return "Smoking";
      break;
    case 548:
      return "Flaming";
      break;
    case 549:
      return "Scorching";
      break;
    case 550:
      return "Static";
      break;
    case 551:
      return "Glowing";
      break;
    case 552:
      return "Buzzing";
      break;
    case 553:
      return "Arcing";
      break;
    case 554:
      return "Shocking";
      break;
    case 555:
      return "Septic";
      break;
    case 556:
      return "Envenomed";
      break;
    case 557:
      return "Corosive";
      break;
    case 558:
      return "Toxic";
      break;
    case 559:
      return "Pestilent";
      break;
    case 560:
      return "Maiden's";
      break;
    case 561:
      return "Valkyrie's";
      break;
    case 562:
      return "Maiden's";
      break;
    case 563:
      return "Valkyrie's";
      break;
    case 564:
      return "Monk's";
      break;
    case 565:
      return "Priest's";
      break;
    case 566:
      return "Monk's";
      break;
    case 567:
      return "Priest's";
      break;
    case 568:
      return "Monk's";
      break;
    case 569:
      return "Priest's";
      break;
    case 570:
      return "Summoner's";
      break;
    case 571:
      return "Necromancer's";
      break;
    case 572:
      return "Summoner's";
      break;
    case 573:
      return "Necromancer's";
      break;
    case 574:
      return "Angel's";
      break;
    case 575:
      return "Arch-Angel's";
      break;
    case 576:
      return "Angel's";
      break;
    case 577:
      return "Arch-Angel's";
      break;
    case 578:
      return "Slayer's";
      break;
    case 579:
      return "Berserker's";
      break;
    case 580:
      return "Slayer's";
      break;
    case 581:
      return "Berserker's";
      break;
    case 582:
      return "Slayer's";
      break;
    case 583:
      return "Berserker's";
      break;
    case 584:
      return "Shaman's";
      break;
    case 585:
      return "Hierophant's";
      break;
    case 586:
      return "Shaman's";
      break;
    case 587:
      return "Hierophant's";
      break;
    case 588:
      return "Magekiller's";
      break;
    case 589:
      return "Witch-hunter's";
      break;
    case 590:
      return "Magekiller's";
      break;
    case 591:
      return "Witch-hunter's";
      break;
    case 592:
      return "Compact";
      break;
    case 593:
      return "Thin";
      break;
    case 594:
      return "Dense";
      break;
    case 595:
      return "Consecrated";
      break;
    case 596:
      return "Pure";
      break;
    case 597:
      return "Sacred";
      break;
    case 598:
      return "Hallowed";
      break;
    case 599:
      return "Divine";
      break;
    case 600:
      return "Pearl";
      break;
    case 601:
      return "Crimson";
      break;
    case 602:
      return "Red";
      break;
    case 603:
      return "Sanguinary";
      break;
    case 604:
      return "Bloody";
      break;
    case 605:
      return "Red";
      break;
    case 606:
      return "Sanguinary";
      break;
    case 607:
      return "Red";
      break;
    case 608:
      return "Jagged";
      break;
    case 609:
      return "Forked";
      break;
    case 610:
      return "Serrated";
      break;
    case 611:
      return "Jagged";
      break;
    case 612:
      return "Forked";
      break;
    case 613:
      return "Jagged";
      break;
    case 614:
      return "Snowflake";
      break;
    case 615:
      return "Shivering";
      break;
    case 616:
      return "Boreal";
      break;
    case 617:
      return "Hibernal";
      break;
    case 618:
      return "Snowflake";
      break;
    case 619:
      return "Shivering";
      break;
    case 620:
      return "Boreal";
      break;
    case 621:
      return "Hibernal";
      break;
    case 622:
      return "Snowflake";
      break;
    case 623:
      return "Shivering";
      break;
    case 624:
      return "Boreal";
      break;
    case 625:
      return "Hibernal";
      break;
    case 626:
      return "Ember";
      break;
    case 627:
      return "Smoldering";
      break;
    case 628:
      return "Smoking";
      break;
    case 629:
      return "Flaming";
      break;
    case 630:
      return "Ember";
      break;
    case 631:
      return "Smoldering";
      break;
    case 632:
      return "Smoking";
      break;
    case 633:
      return "Flaming";
      break;
    case 634:
      return "Ember";
      break;
    case 635:
      return "Smoldering";
      break;
    case 636:
      return "Smoking";
      break;
    case 637:
      return "Flaming";
      break;
    case 638:
      return "Static";
      break;
    case 639:
      return "Glowing";
      break;
    case 640:
      return "Arcing";
      break;
    case 641:
      return "Shocking";
      break;
    case 642:
      return "Static";
      break;
    case 643:
      return "Glowing";
      break;
    case 644:
      return "Arcing";
      break;
    case 645:
      return "Shocking";
      break;
    case 646:
      return "Static";
      break;
    case 647:
      return "Glowing";
      break;
    case 648:
      return "Arcing";
      break;
    case 649:
      return "Shocking";
      break;
    case 650:
      return "Septic";
      break;
    case 651:
      return "Envenomed";
      break;
    case 652:
      return "Toxic";
      break;
    case 653:
      return "Pestilent";
      break;
    case 654:
      return "Septic";
      break;
    case 655:
      return "Envenomed";
      break;
    case 656:
      return "Toxic";
      break;
    case 657:
      return "Pestilent";
      break;
    case 658:
      return "Septic";
      break;
    case 659:
      return "Envenomed";
      break;
    case 660:
      return "Toxic";
      break;
    case 661:
      return "Pestilent";
      break;
    case 662:
      return "Tireless";
      break;
    case 663:
      return "Lizard's";
      break;
    case 664:
      return "Azure";
      break;
    case 665:
      return "Crimson";
      break;
    case 666:
      return "Tangerine";
      break;
    case 667:
      return "Beryl";
      break;
    case 668:
      return "Godly";
      break;
    case 669:
      return "Cruel";
      break;
    default:
      return "$id";
  }
}

function magic_suffix ($id) {
  switch ($id) {
/*
    case 202:
      return "of Butchery";
      break;
    case 269:
      return "of Regeneration";
      break;
    case 272:
      return "of Regrowth";
      break;
    case 395:
      return "of Haste";
      break;
    case 667:
      return "of Lightning";
      break;
    case 703:
      return "of the Icicle";
      break;
*/
    case 0:
      return "of Health";
      break;
    case 1:
      return "of Protection";
      break;
    case 2:
      return "of Absorption";
      break;
    case 3:
      return "of Life";
      break;
    case 4:
      return "";
      break;
    case 5:
      return "of Warding";
      break;
    case 6:
      return "of the Sentinel";
      break;
    case 7:
      return "of Guarding";
      break;
    case 8:
      return "of Negation";
      break;
    case 9:
      return "";
      break;
    case 10:
      return "of Piercing";
      break;
    case 11:
      return "of Bashing";
      break;
    case 12:
      return "of Puncturing";
      break;
    case 13:
      return "of Thorns";
      break;
    case 14:
      return "of Spikes";
      break;
    case 15:
      return "of Readiness";
      break;
    case 16:
      return "of Alacrity";
      break;
    case 17:
      return "of Swiftness";
      break;
    case 18:
      return "of Quickness";
      break;
    case 19:
      return "of Blocking";
      break;
    case 20:
      return "of Deflecting";
      break;
    case 21:
      return "of the Apprentice";
      break;
    case 22:
      return "of the Magus";
      break;
    case 23:
      return "of Frost";
      break;
    case 24:
      return "of the Glacier";
      break;
    case 25:
      return "of Frost";
      break;
    case 26:
      return "of Warmth";
      break;
    case 27:
      return "of Flame";
      break;
    case 28:
      return "of Fire";
      break;
    case 29:
      return "of Burning";
      break;
    case 30:
      return "of Flame";
      break;
    case 31:
      return "of Shock";
      break;
    case 32:
      return "of Lightning";
      break;
    case 33:
      return "of Thunder";
      break;
    case 34:
      return "of Shock";
      break;
    case 35:
      return "of Craftsmanship";
      break;
    case 36:
      return "of Quality";
      break;
    case 37:
      return "of Maiming";
      break;
    case 38:
      return "of Slaying";
      break;
    case 39:
      return "of Gore";
      break;
    case 40:
      return "of Carnage";
      break;
    case 41:
      return "of Slaughter";
      break;
    case 42:
      return "of Maiming";
      break;
    case 43:
      return "of Worth";
      break;
    case 44:
      return "of Measure";
      break;
    case 45:
      return "of Excellence";
      break;
    case 46:
      return "of Performance";
      break;
    case 47:
      return "of Measure";
      break;
    case 48:
      return "of Blight";
      break;
    case 49:
      return "of Venom";
      break;
    case 50:
      return "of Pestilence";
      break;
    case 51:
      return "of Blight";
      break;
    case 52:
      return "of Dexterity";
      break;
    case 53:
      return "of Dexterity";
      break;
    case 54:
      return "of Skill";
      break;
    case 55:
      return "of Skill";
      break;
    case 56:
      return "of Accuracy";
      break;
    case 57:
      return "of Precision";
      break;
    case 58:
      return "of Precision";
      break;
    case 59:
      return "of Perfection";
      break;
    case 60:
      return "of Balance";
      break;
    case 61:
      return "of Stability";
      break;
    case 62:
      return "";
      break;
    case 63:
      return "of Regeneration";
      break;
    case 64:
      return "of Regeneration";
      break;
    case 65:
      return "of Regeneration";
      break;
    case 66:
      return "of Regrowth";
      break;
    case 67:
      return "of Regrowth";
      break;
    case 68:
      return "of Vileness";
      break;
    case 69:
      return "";
      break;
    case 70:
      return "of Greed";
      break;
    case 71:
      return "of Wealth";
      break;
    case 72:
      return "of Chance";
      break;
    case 73:
      return "of Fortune";
      break;
    case 74:
      return "of Energy";
      break;
    case 75:
      return "of Energy";
      break;
    case 76:
      return "of the Mind";
      break;
    case 77:
      return "of Brilliance";
      break;
    case 78:
      return "of Sorcery";
      break;
    case 79:
      return "of Wizardry";
      break;
    case 80:
      return "of the Bear";
      break;
    case 81:
      return "of Light";
      break;
    case 82:
      return "of Radiance";
      break;
    case 83:
      return "of the Sun";
      break;
    case 84:
      return "of Life";
      break;
    case 85:
      return "of the Jackal";
      break;
    case 86:
      return "of the Fox";
      break;
    case 87:
      return "of the Wolf";
      break;
    case 88:
      return "of the Wolf";
      break;
    case 89:
      return "of the Tiger";
      break;
    case 90:
      return "of the Mammoth";
      break;
    case 91:
      return "of the Mammoth";
      break;
    case 92:
      return "of the Colosuss";
      break;
    case 93:
      return "of the Leech";
      break;
    case 94:
      return "of the Locust";
      break;
    case 95:
      return "of the Bat";
      break;
    case 96:
      return "of the Vampire";
      break;
    case 97:
      return "of Defiance";
      break;
    case 98:
      return "of Amelioration";
      break;
    case 99:
      return "of Remedy";
      break;
    case 100:
      return "";
      break;
    case 101:
      return "of Simplicity";
      break;
    case 102:
      return "of Ease";
      break;
    case 103:
      return "";
      break;
    case 104:
      return "of Strength";
      break;
    case 105:
      return "of Might";
      break;
    case 106:
      return "of the Ox";
      break;
    case 107:
      return "of the Ox";
      break;
    case 108:
      return "of the Giant";
      break;
    case 109:
      return "of the Giant";
      break;
    case 110:
      return "of the Titan";
      break;
    case 111:
      return "of Pacing";
      break;
    case 112:
      return "of Haste";
      break;
    case 113:
      return "of Speed";
      break;
// Expansion
    case 114:
//      return "Expansion";
      return "";
      break;
    case 115:
      return "of Health";
      break;
    case 116:
      return "of Protection";
      break;
    case 117:
      return "of Absorption";
      break;
    case 118:
      return "of Life";
      break;
    case 119:
      return "of Life Everlasting";
      break;
    case 120:
      return "of Protection";
      break;
    case 121:
      return "of Absorption";
      break;
    case 122:
      return "of Life";
      break;
    case 123:
      return "of Anima";
      break;
    case 124:
      return "of Warding";
      break;
    case 125:
      return "of the Sentinel";
      break;
    case 126:
      return "of Guarding";
      break;
    case 127:
      return "of Negation";
      break;
    case 128:
      return "of the Sentinel";
      break;
    case 129:
      return "of Guarding";
      break;
    case 130:
      return "of Negation";
      break;
    case 131:
      return "unused001";
      break;
    case 132:
      return "unused002";
      break;
    case 133:
      return "unused003";
      break;
    case 134:
      return "unused004";
      break;
    case 135:
      return "unused005";
      break;
    case 136:
      return "unused006";
      break;
    case 137:
      return "unused007";
      break;
    case 138:
      return "unused008";
      break;
    case 139:
      return "unused009";
      break;
    case 140:
      return "unused010";
      break;
    case 141:
      return "unused011";
      break;
    case 142:
      return "unused012";
      break;
    case 143:
      return "unused013";
      break;
    case 144:
      return "unused014";
      break;
    case 145:
      return "unused015";
      break;
    case 146:
      return "unused016";
      break;
    case 147:
      return "unused017";
      break;
    case 148:
      return "unused018";
      break;
    case 149:
      return "unused019";
      break;
    case 150:
      return "unused020";
      break;
    case 151:
      return "unused021";
      break;
    case 152:
      return "unused022";
      break;
    case 153:
      return "unused023";
      break;
    case 154:
      return "unused024";
      break;
    case 155:
      return "unused025";
      break;
    case 156:
      return "unused026";
      break;
    case 157:
      return "unused027";
      break;
    case 158:
      return "of Piercing";
      break;
    case 159:
      return "unused028";
      break;
    case 160:
      return "unused029";
      break;
    case 161:
      return "of Thorns";
      break;
    case 162:
      return "of Spikes";
      break;
    case 163:
      return "of Razors";
      break;
    case 164:
      return "of Swords";
      break;
    case 165:
      return "of Malice";
      break;
    case 166:
      return "of Readiness";
      break;
    case 167:
      return "of Alacrity";
      break;
    case 168:
      return "of Swiftness";
      break;
    case 169:
      return "of Quickness";
      break;
    case 170:
      return "of Alacrity";
      break;
    case 171:
      return "of Fervor";
      break;
    case 172:
      return "of Blocking";
      break;
    case 173:
      return "of Deflecting";
      break;
    case 174:
      return "of the Apprentice";
      break;
    case 175:
      return "of the Magus";
      break;
    case 176:
      return "of Frost";
      break;
    case 177:
      return "of the Icicle";
      break;
    case 178:
      return "of the Glacier";
      break;
    case 179:
      return "of Winter";
      break;
    case 180:
      return "of Frost";
      break;
    case 181:
      return "of Frigidity";
      break;
    case 182:
      return "of Warmth";
      break;
    case 183:
      return "of Flame";
      break;
    case 184:
      return "of Fire";
      break;
    case 185:
      return "of Burning";
      break;
    case 186:
      return "of Incineration";
      break;
    case 187:
      return "of Flame";
      break;
    case 188:
      return "of Passion";
      break;
    case 189:
      return "of Shock";
      break;
    case 190:
      return "of Lightning";
      break;
    case 191:
      return "of Thunder";
      break;
    case 192:
      return "of Storms";
      break;
    case 193:
      return "of Shock";
      break;
    case 194:
      return "of Ennui";
      break;
    case 195:
      return "of Craftsmanship";
      break;
    case 196:
      return "of Quality";
      break;
    case 197:
      return "of Maiming";
      break;
    case 198:
      return "of Slaying";
      break;
    case 199:
      return "of Gore";
      break;
    case 200:
      return "of Carnage";
      break;
    case 201:
      return "of Slaughter";
      break;
    case 202:
      return "of Butchery";
      break;
    case 203:
      return "of Evisceration";
      break;
    case 204:
      return "of Maiming";
      break;
    case 205:
      return "of Craftsmanship";
      break;
    case 206:
      return "of Craftsmanship";
      break;
    case 207:
      return "of Craftsmanship";
      break;
    case 208:
      return "of Quality";
      break;
    case 209:
      return "of Quality";
      break;
    case 210:
      return "of Maiming";
      break;
    case 211:
      return "of Maiming";
      break;
    case 212:
      return "unused030";
      break;
    case 213:
      return "unused031";
      break;
    case 214:
      return "unused032";
      break;
    case 215:
      return "unused033";
      break;
    case 216:
      return "unused034";
      break;
    case 217:
      return "unused035";
      break;
    case 218:
      return "unused036";
      break;
    case 219:
      return "unused037";
      break;
    case 220:
      return "of Ire";
      break;
    case 221:
      return "of Wrath";
      break;
    case 222:
      return "of Carnage";
      break;
    case 223:
      return "of Worth";
      break;
    case 224:
      return "of Measure";
      break;
    case 225:
      return "of Excellence";
      break;
    case 226:
      return "of Performance";
      break;
    case 227:
      return "of Transcendence";
      break;
    case 228:
      return "of Worth";
      break;
    case 229:
      return "of Measure";
      break;
    case 230:
      return "of Excellence";
      break;
    case 231:
      return "of Performance";
      break;
    case 232:
      return "of Joyfulness";
      break;
    case 233:
      return "of Bliss";
      break;
    case 234:
      return "of Blight";
      break;
    case 235:
      return "of Venom";
      break;
    case 236:
      return "of Pestilence";
      break;
    case 237:
      return "of Anthrax";
      break;
    case 238:
      return "of Blight";
      break;
    case 239:
      return "of Envy";
      break;
    case 240:
      return "of Dexterity";
      break;
    case 241:
      return "of Skill";
      break;
    case 242:
      return "of Accuracy";
      break;
    case 243:
      return "of Precision";
      break;
    case 244:
      return "of Perfection";
      break;
    case 245:
      return "of Nirvana";
      break;
    case 246:
      return "of Dexterity";
      break;
    case 247:
      return "of Skill";
      break;
    case 248:
      return "of Accuracy";
      break;
    case 249:
      return "of Precision";
      break;
    case 250:
      return "of Perfection";
      break;
    case 251:
      return "of Dexterity";
      break;
    case 252:
      return "of Skill";
      break;
    case 253:
      return "of Accuracy";
      break;
    case 254:
      return "of Precision";
      break;
    case 255:
      return "of Dexterity";
      break;
    case 256:
      return "of Dexterity";
      break;
    case 257:
      return "of Dexterity";
      break;
    case 258:
      return "of Dexterity";
      break;
    case 259:
      return "of Dexterity";
      break;
    case 260:
      return "of Dexterity";
      break;
    case 261:
      return "of Daring";
      break;
    case 262:
      return "of Balance";
      break;
    case 263:
      return "of Equilibrium";
      break;
    case 264:
      return "of Stability";
      break;
    case 265:
      return "of Balance";
      break;
    case 266:
      return "of Balance";
      break;
    case 267:
      return "of Balance";
      break;
    case 268:
      return "of Truth";
      break;
    case 269:
      return "of Regeneration";
      break;
    case 270:
      return "of Regeneration";
      break;
    case 271:
      return "of Regeneration";
      break;
    case 272:
      return "of Regrowth";
      break;
    case 273:
      return "of Regrowth";
      break;
    case 274:
      return "of Revivification";
      break;
    case 275:
      return "of Honor";
      break;
    case 276:
      return "of Vileness";
      break;
    case 277:
      return "of Greed";
      break;
    case 278:
      return "of Wealth";
      break;
    case 279:
      return "of Greed";
      break;
    case 280:
      return "of Greed";
      break;
    case 281:
      return "of Greed";
      break;
    case 282:
      return "of Greed";
      break;
    case 283:
      return "of Greed";
      break;
    case 284:
      return "of Greed";
      break;
    case 285:
      return "of Avarice";
      break;
    case 286:
      return "of Chance";
      break;
    case 287:
      return "of Fortune";
      break;
    case 288:
      return "of Fortune";
      break;
    case 289:
      return "of Luck";
      break;
    case 290:
      return "of Fortune";
      break;
    case 291:
      return "of Good Luck";
      break;
    case 292:
      return "of Prosperity";
      break;
    case 293:
      return "of Energy";
      break;
    case 294:
      return "of the Mind";
      break;
    case 295:
      return "of Brilliance";
      break;
    case 296:
      return "of Sorcery";
      break;
    case 297:
      return "of Wizardry";
      break;
    case 298:
      return "of Enlightenment";
      break;
    case 299:
      return "of Energy";
      break;
    case 300:
      return "of the Mind";
      break;
    case 301:
      return "of Brilliance";
      break;
    case 302:
      return "of Sorcery";
      break;
    case 303:
      return "of Wizardry";
      break;
    case 304:
      return "of Energy";
      break;
    case 305:
      return "of the Mind";
      break;
    case 306:
      return "of Brilliance";
      break;
    case 307:
      return "of Sorcery";
      break;
    case 308:
      return "of Knowledge";
      break;
    case 309:
      return "of the Bear";
      break;
    case 310:
      return "of Light";
      break;
    case 311:
      return "of Radiance";
      break;
    case 312:
      return "of the Sun";
      break;
    case 313:
      return "of the Jackal";
      break;
    case 314:
      return "of the Fox";
      break;
    case 315:
      return "of the Wolf";
      break;
    case 316:
      return "of the Tiger";
      break;
    case 317:
      return "of the Mammoth";
      break;
    case 318:
      return "of the Colosuss";
      break;
    case 319:
      return "of the Squid";
      break;
    case 320:
      return "of the Whale";
      break;
    case 321:
      return "of the Jackal";
      break;
    case 322:
      return "of the Fox";
      break;
    case 323:
      return "of the Wolf";
      break;
    case 324:
      return "of the Tiger";
      break;
    case 325:
      return "of the Mammoth";
      break;
    case 326:
      return "of the Colosuss";
      break;
    case 327:
      return "of the Jackal";
      break;
    case 328:
      return "of the Fox";
      break;
    case 329:
      return "of the Wolf";
      break;
    case 330:
      return "of the Tiger";
      break;
    case 331:
      return "of the Mammoth";
      break;
    case 332:
      return "of Life";
      break;
    case 333:
      return "of Life";
      break;
    case 334:
      return "of Life";
      break;
    case 335:
      return "of Substinence";
      break;
    case 336:
      return "of Substinence";
      break;
    case 337:
      return "of Substinence";
      break;
    case 338:
      return "of Vita";
      break;
    case 339:
      return "of Vita";
      break;
    case 340:
      return "of Vita";
      break;
    case 341:
      return "of Life";
      break;
    case 342:
      return "of Life";
      break;
    case 343:
      return "of Substinence";
      break;
    case 344:
      return "of Substinence";
      break;
    case 345:
      return "of Vita";
      break;
    case 346:
      return "of Vita";
      break;
    case 347:
      return "of Life";
      break;
    case 348:
      return "of Substinence";
      break;
    case 349:
      return "of Vita";
      break;
    case 350:
      return "of Spirit";
      break;
    case 351:
      return "of Hope";
      break;
    case 352:
      return "of the Leech";
      break;
    case 353:
      return "of the Locust";
      break;
    case 354:
      return "of the Lamprey";
      break;
    case 355:
      return "of the Leech";
      break;
    case 356:
      return "of the Locust";
      break;
    case 357:
      return "of the Lamprey";
      break;
    case 358:
      return "of the Leech";
      break;
    case 359:
      return "of the Bat";
      break;
    case 360:
      return "of the Wraith";
      break;
    case 361:
      return "of the Vampire";
      break;
    case 362:
      return "of the Bat";
      break;
    case 363:
      return "of the Wraith";
      break;
    case 364:
      return "of the Vampire";
      break;
    case 365:
      return "of the Bat";
      break;
    case 366:
      return "of Defiance";
      break;
    case 367:
      return "of Amelioration";
      break;
    case 368:
      return "of Remedy";
      break;
    case 369:
      return "of Simplicity";
      break;
    case 370:
      return "of Ease";
      break;
    case 371:
      return "of Freedom";
      break;
    case 372:
      return "of Strength";
      break;
    case 373:
      return "of Might";
      break;
    case 374:
      return "of the Ox";
      break;
    case 375:
      return "of the Giant";
      break;
    case 376:
      return "of the Titan";
      break;
    case 377:
      return "of Atlus";
      break;
    case 378:
      return "of Strength";
      break;
    case 379:
      return "of Might";
      break;
    case 380:
      return "of the Ox";
      break;
    case 381:
      return "of the Giant";
      break;
    case 382:
      return "of the Titan";
      break;
    case 383:
      return "of Strength";
      break;
    case 384:
      return "of Might";
      break;
    case 385:
      return "of the Ox";
      break;
    case 386:
      return "of the Giant";
      break;
    case 387:
      return "of Strength";
      break;
    case 388:
      return "of Strength";
      break;
    case 389:
      return "of Strength";
      break;
    case 390:
      return "of Strength";
      break;
    case 391:
      return "of Strength";
      break;
    case 392:
      return "of Strength";
      break;
    case 393:
      return "of Virility";
      break;
    case 394:
      return "of Pacing";
      break;
    case 395:
      return "of Haste";
      break;
    case 396:
      return "of Speed";
      break;
    case 397:
      return "of Traveling";
      break;
    case 398:
      return "of Acceleration";
      break;
    case 399:
      return "of Inertia";
      break;
    case 400:
      return "of Inertia";
      break;
    case 401:
      return "of Inertia";
      break;
    case 402:
      return "of Self-Repair";
      break;
    case 403:
      return "of Fast Repair";
      break;
    case 404:
      return "of Ages";
      break;
    case 405:
      return "of Replenishing";
      break;
    case 406:
      return "of Propogation";
      break;
    case 407:
      return "of the Kraken";
      break;
    case 408:
      return "of Memory";
      break;
    case 409:
      return "of the Elephant";
      break;
    case 410:
      return "unused038";
      break;
    case 411:
      return "unused039";
      break;
    case 412:
      return "unused040";
      break;
    case 413:
      return "unused041";
      break;
    case 414:
      return "unused042";
      break;
    case 415:
      return "unused043";
      break;
    case 416:
      return "unused044";
      break;
    case 417:
      return "unused045";
      break;
    case 418:
      return "of Firebolts";
      break;
    case 419:
      return "of Firebolts";
      break;
    case 420:
      return "of Firebolts";
      break;
    case 421:
      return "of Charged Shield";
      break;
    case 422:
      return "of Charged Shield";
      break;
    case 423:
      return "of Charged Shield";
      break;
    case 424:
      return "of Icebolt";
      break;
    case 425:
      return "unused046";
      break;
    case 426:
      return "unused047";
      break;
    case 427:
      return "unused048";
      break;
    case 428:
      return "of Frost Shield";
      break;
    case 429:
      return "unused049";
      break;
    case 430:
      return "unused050";
      break;
    case 431:
      return "unused051";
      break;
    case 432:
      return "of Nova";
      break;
    case 433:
      return "of Nova";
      break;
    case 434:
      return "of Nova Shield";
      break;
    case 435:
      return "of Nova Shield";
      break;
    case 436:
      return "of Nova Shield";
      break;
    case 437:
      return "of Lightning";
      break;
    case 438:
      return "unused052";
      break;
    case 439:
      return "unused053";
      break;
    case 440:
      return "unused054";
      break;
    case 441:
      return "unused055";
      break;
    case 442:
      return "of Chain Lightning";
      break;
    case 443:
      return "of Chain Lightning";
      break;
    case 444:
      return "of Chain Lightning";
      break;
    case 445:
      return "unused056";
      break;
    case 446:
      return "unused057";
      break;
    case 447:
      return "unused058";
      break;
    case 448:
      return "unused059";
      break;
    case 449:
      return "unused060";
      break;
    case 450:
      return "unused061";
      break;
    case 451:
      return "unused062";
      break;
    case 452:
      return "unused063";
      break;
    case 453:
      return "unused064";
      break;
    case 454:
      return "of Hydra Shield";
      break;
    case 455:
      return "unused065";
      break;
    case 456:
      return "unused066";
      break;
    case 457:
      return "unused067";
      break;
    case 458:
      return "of Magic Arrows";
      break;
    case 459:
      return "unused068";
      break;
    case 460:
      return "unused069";
      break;
    case 461:
      return "of Fire Arrows";
      break;
    case 462:
      return "of Inner Sight";
      break;
    case 463:
      return "of Inner Sight";
      break;
    case 464:
      return "unused070";
      break;
    case 465:
      return "unused071";
      break;
    case 466:
      return "of Cold Arrows";
      break;
    case 467:
      return "of Cold Arrows";
      break;
    case 468:
      return "of Multiple Shot";
      break;
    case 469:
      return "of Multiple Shot";
      break;
    case 470:
      return "of Power Strike";
      break;
    case 471:
      return "of Power Strike";
      break;
    case 472:
      return "unused072";
      break;
    case 473:
      return "unused073";
      break;
    case 474:
      return "of Exploding Arrows";
      break;
    case 475:
      return "of Exploding Arrows";
      break;
    case 476:
      return "unused074";
      break;
    case 477:
      return "unused075";
      break;
    case 478:
      return "unused076";
      break;
    case 479:
      return "unused077";
      break;
    case 480:
      return "unused078";
      break;
    case 481:
      return "unused079";
      break;
    case 482:
      return "of Ice Arrows";
      break;
    case 483:
      return "of Ice Arrows";
      break;
    case 484:
      return "unused080";
      break;
    case 485:
      return "unused081";
      break;
    case 486:
      return "of Charged Strike";
      break;
    case 487:
      return "of Charged Strike";
      break;
    case 488:
      return "unused082";
      break;
    case 489:
      return "unused083";
      break;
    case 490:
      return "unused084";
      break;
    case 491:
      return "unused085";
      break;
    case 492:
      return "unused086";
      break;
    case 493:
      return "unused087";
      break;
    case 494:
      return "of Freezing Arrows";
      break;
    case 495:
      return "of Freezing Arrows";
      break;
    case 496:
      return "of Lightning Strike";
      break;
    case 497:
      return "of Lightning Strike";
      break;
    case 498:
      return "unused088";
      break;
    case 499:
      return "unused089";
      break;
    case 500:
      return "of Fire Bolts";
      break;
    case 501:
      return "of Fire Bolts";
      break;
    case 502:
      return "of Charged Bolts";
      break;
    case 503:
      return "of Charged Bolts";
      break;
    case 504:
      return "of Ice Bolts";
      break;
    case 505:
      return "of Ice Bolts";
      break;
    case 506:
      return "unused090";
      break;
    case 507:
      return "unused091";
      break;
    case 508:
      return "unused092";
      break;
    case 509:
      return "unused093";
      break;
    case 510:
      return "of Telekinesis";
      break;
    case 511:
      return "of Telekinesis";
      break;
    case 512:
      return "of Frost Novas";
      break;
    case 513:
      return "of Frost Novas";
      break;
    case 514:
      return "of Ice Blasts";
      break;
    case 515:
      return "of Ice Blasts";
      break;
    case 516:
      return "unused094";
      break;
    case 517:
      return "unused095";
      break;
    case 518:
      return "of Fire Balls";
      break;
    case 519:
      return "of Fire Balls";
      break;
    case 520:
      return "of Novas";
      break;
    case 521:
      return "of Novas";
      break;
    case 522:
      return "of Lightning";
      break;
    case 523:
      return "of Lightning";
      break;
    case 524:
      return "unused096";
      break;
    case 525:
      return "unused097";
      break;
    case 526:
      return "unused098";
      break;
    case 527:
      return "unused099";
      break;
    case 528:
      return "of Enchantment";
      break;
    case 529:
      return "of Enchantment";
      break;
    case 530:
      return "of Chain Lightning";
      break;
    case 531:
      return "of Chain Lightning";
      break;
    case 532:
      return "of Teleportation";
      break;
    case 533:
      return "of Teleportation";
      break;
    case 534:
      return "of Glacial Spikes";
      break;
    case 535:
      return "of Glacial Spikes";
      break;
    case 536:
      return "of Meteors";
      break;
    case 537:
      return "of Meteors";
      break;
    case 538:
      return "unused100";
      break;
    case 539:
      return "unused101";
      break;
    case 540:
      return "unused102";
      break;
    case 541:
      return "unused103";
      break;
    case 542:
      return "of Blizzards";
      break;
    case 543:
      return "of Blizzards";
      break;
    case 544:
      return "unused104";
      break;
    case 545:
      return "unused105";
      break;
    case 546:
      return "unused106";
      break;
    case 547:
      return "unused107";
      break;
    case 548:
      return "of Frozen Orbs";
      break;
    case 549:
      return "of Frozen Orbs";
      break;
    case 550:
      return "unused108";
      break;
    case 551:
      return "unused109";
      break;
    case 552:
      return "of Teeth";
      break;
    case 553:
      return "of Teeth";
      break;
    case 554:
      return "unused110";
      break;
    case 555:
      return "unused111";
      break;
    case 556:
      return "unused112";
      break;
    case 557:
      return "unused113";
      break;
    case 558:
      return "of Dim Vision";
      break;
    case 559:
      return "of Dim Vision";
      break;
    case 560:
      return "of Weaken";
      break;
    case 561:
      return "of Weaken";
      break;
    case 562:
      return "of Poison Dagger";
      break;
    case 563:
      return "of Poison Dagger";
      break;
    case 564:
      return "unused114";
      break;
    case 565:
      return "unused115";
      break;
    case 566:
      return "unused116";
      break;
    case 567:
      return "unused117";
      break;
    case 568:
      return "unused118";
      break;
    case 569:
      return "unused119";
      break;
    case 570:
      return "of Terror";
      break;
    case 571:
      return "of Terror";
      break;
    case 572:
      return "unused120";
      break;
    case 573:
      return "unused121";
      break;
    case 574:
      return "unused122";
      break;
    case 575:
      return "unused123";
      break;
    case 576:
      return "of Confusion";
      break;
    case 577:
      return "of Confusion";
      break;
    case 578:
      return "of Life Tap";
      break;
    case 579:
      return "of Life Tap";
      break;
    case 580:
      return "unused124";
      break;
    case 581:
      return "unused125";
      break;
    case 582:
      return "of Bone Spears";
      break;
    case 583:
      return "of Bone Spears";
      break;
    case 584:
      return "unused126";
      break;
    case 585:
      return "unused127";
      break;
    case 586:
      return "of Attraction";
      break;
    case 587:
      return "of Attraction";
      break;
    case 588:
      return "unused128";
      break;
    case 589:
      return "unused129";
      break;
    case 590:
      return "unused130";
      break;
    case 591:
      return "unused131";
      break;
    case 592:
      return "unused132";
      break;
    case 593:
      return "unused133";
      break;
    case 594:
      return "of Lower Resistance";
      break;
    case 595:
      return "of Lower Resistance";
      break;
    case 596:
      return "of Poison Novas";
      break;
    case 597:
      return "of Poison Novas";
      break;
    case 598:
      return "of Bone Spirits";
      break;
    case 599:
      return "of Bone Spirits";
      break;
    case 600:
      return "unused134";
      break;
    case 601:
      return "unused135";
      break;
    case 602:
      return "unused136";
      break;
    case 603:
      return "unused137";
      break;
    case 604:
      return "of Sacrifice";
      break;
    case 605:
      return "of Sacrifice";
      break;
    case 606:
      return "of Holy Bolts";
      break;
    case 607:
      return "of Holy Bolts";
      break;
    case 608:
      return "of Zeal";
      break;
    case 609:
      return "of Zeal";
      break;
    case 610:
      return "of Vengeance";
      break;
    case 611:
      return "of Vengeance";
      break;
    case 612:
      return "of Blessed Hammers";
      break;
    case 613:
      return "of Blessed Hammers";
      break;
    case 614:
      return "unused138";
      break;
    case 615:
      return "unused139";
      break;
    case 616:
      return "unused140";
      break;
    case 617:
      return "unused141";
      break;
    case 618:
      return "of Bashing";
      break;
    case 619:
      return "of Bashing";
      break;
    case 620:
      return "unused142";
      break;
    case 621:
      return "unused143";
      break;
    case 622:
      return "unused144";
      break;
    case 623:
      return "unused145";
      break;
    case 624:
      return "unused146";
      break;
    case 625:
      return "unused147";
      break;
    case 626:
      return "unused148";
      break;
    case 627:
      return "unused149";
      break;
    case 628:
      return "of Stunning";
      break;
    case 629:
      return "of Stunning";
      break;
    case 630:
      return "unused150";
      break;
    case 631:
      return "unused151";
      break;
    case 632:
      return "of Concentration";
      break;
    case 633:
      return "of Concentration";
      break;
    case 634:
      return "unused152";
      break;
    case 635:
      return "unused153";
      break;
    case 636:
      return "unused154";
      break;
    case 637:
      return "unused155";
      break;
    case 638:
      return "of Grim Ward";
      break;
    case 639:
      return "of Grim Ward";
      break;
    case 640:
      return "unused156";
      break;
    case 641:
      return "unused157";
      break;
    case 642:
      return "unused158";
      break;
    case 643:
      return "unused159";
      break;
    case 644:
      return "of Firestorms";
      break;
    case 645:
      return "of Firestorms";
      break;
    case 646:
      return "unused160";
      break;
    case 647:
      return "unused161";
      break;
    case 648:
      return "of Eruption";
      break;
    case 649:
      return "of Eruption";
      break;
    case 650:
      return "unused162";
      break;
    case 651:
      return "unused163";
      break;
    case 652:
      return "of Twister";
      break;
    case 653:
      return "of Twister";
      break;
    case 654:
      return "of Volcano";
      break;
    case 655:
      return "of Volcano";
      break;
    case 656:
      return "of Tornado";
      break;
    case 657:
      return "of Tornado";
      break;
    case 658:
      return "unused164";
      break;
    case 659:
      return "unused165";
      break;
    case 660:
      return "unused166";
      break;
    case 661:
      return "unused167";
      break;
    case 662:
      return "of Damage Amplification";
      break;
    case 663:
      return "of the Icicle";
      break;
    case 664:
      return "of the Glacier";
      break;
    case 665:
      return "of Fire";
      break;
    case 666:
      return "of Burning";
      break;
    case 667:
      return "of Lightning";
      break;
    case 668:
      return "of Thunder";
      break;
    case 669:
      return "of Daring";
      break;
    case 670:
      return "of Daring";
      break;
    case 671:
      return "of Knowledge";
      break;
    case 672:
      return "of Knowledge";
      break;
    case 673:
      return "of Virility";
      break;
    case 674:
      return "of Virility";
      break;
    case 675:
      return "of Readiness";
      break;
    case 676:
      return "of Craftsmanship";
      break;
    case 677:
      return "of Quality";
      break;
    case 678:
      return "of Maiming";
      break;
    case 679:
      return "of Craftsmanship";
      break;
    case 680:
      return "of Quality";
      break;
    case 681:
      return "of Craftsmanship";
      break;
    case 682:
      return "of Blight";
      break;
    case 683:
      return "of Venom";
      break;
    case 684:
      return "of Pestilence";
      break;
    case 685:
      return "of Anthrax";
      break;
    case 686:
      return "of Blight";
      break;
    case 687:
      return "of Venom";
      break;
    case 688:
      return "of Pestilence";
      break;
    case 689:
      return "of Anthrax";
      break;
    case 690:
      return "of Blight";
      break;
    case 691:
      return "of Venom";
      break;
    case 692:
      return "of Pestilence";
      break;
    case 693:
      return "of Anthrax";
      break;
    case 694:
      return "of Frost";
      break;
    case 695:
      return "of the Icicle";
      break;
    case 696:
      return "of the Glacier";
      break;
    case 697:
      return "of Winter";
      break;
    case 698:
      return "of Frost";
      break;
    case 699:
      return "of the Icicle";
      break;
    case 700:
      return "of the Glacier";
      break;
    case 701:
      return "of Winter";
      break;
    case 702:
      return "of Frost";
      break;
    case 703:
      return "of the Icicle";
      break;
    case 704:
      return "of the Glacier";
      break;
    case 705:
      return "of Winter";
      break;
    case 706:
      return "of Flame";
      break;
    case 707:
      return "of Fire";
      break;
    case 708:
      return "of Burning";
      break;
    case 709:
      return "of Incineration";
      break;
    case 710:
      return "of Flame";
      break;
    case 711:
      return "of Fire";
      break;
    case 712:
      return "of Burning";
      break;
    case 713:
      return "of Incineration";
      break;
    case 714:
      return "of Flame";
      break;
    case 715:
      return "of Fire";
      break;
    case 716:
      return "of Burning";
      break;
    case 717:
      return "of Incineration";
      break;
    case 718:
      return "of Shock";
      break;
    case 719:
      return "of Lightning";
      break;
    case 720:
      return "of Thunder";
      break;
    case 721:
      return "of Storms";
      break;
    case 722:
      return "of Shock";
      break;
    case 723:
      return "of Lightning";
      break;
    case 724:
      return "of Thunder";
      break;
    case 725:
      return "of Storms";
      break;
    case 726:
      return "of Shock";
      break;
    case 727:
      return "of Lightning";
      break;
    case 728:
      return "of Thunder";
      break;
    case 729:
      return "of Storms";
      break;
    case 730:
      return "of Dexterity";
      break;
    case 731:
      return "of Dexterity";
      break;
    case 732:
      return "of Strength";
      break;
    case 733:
      return "of Strength";
      break;
    case 734:
      return "of Thorns";
      break;
    case 735:
      return "of Frost";
      break;
    case 736:
      return "of Flame";
      break;
    case 737:
      return "of Blight";
      break;
    case 738:
      return "of Shock";
      break;
    case 739:
      return "of Regeneration";
      break;
    case 740:
      return "of Energy";
      break;
    case 741:
      return "of Light";
      break;
    case 742:
      return "of the Leech";
      break;
    case 743:
      return "of the Locust";
      break;
    case 744:
      return "of the Lamprey";
      break;
    case 745:
      return "of the Bat";
      break;
    case 746:
      return "of the Wraith";
      break;
    case 747:
      return "of the Vampire";
      break;
    default:
      return "$id";
  }
}

function time_name ($id) {
  $timenames = array('During Daytime', 'Near Dusk', 'During Nighttime', 'Near Dawn');
  return $timenames[$id];
}

function magic_properties ($id, $binitem, $offset, &$property, $level) {
  global $classes;
  global $difficulty;
  switch ($id) {
    case 0: // +X to Strength
      $stat = bindec(substr($binitem, $offset-7, 8))-32;
      $property = "+". $stat ." to Strength";
      $offset -= 8;
      break;
    case 1: // +X to Energy
      $stat = bindec(substr($binitem, $offset-6, 7))-32;
      $property = "+". $stat ." to Energy";
      $offset -= 7;
      break;
    case 2: // +X to Dexterity
      $stat = bindec(substr($binitem, $offset-6, 7))-32;
      $property = "+". $stat ." to Dexterity";
      $offset -= 7;
      break;
    case 3: // +X to Vitality
      $stat = bindec(substr($binitem, $offset-6, 7))-32;
      $property = "+". $stat ." to Vitality";
      $offset -= 7;
      break;
    case 7: // +X to Life
      $stat = bindec(substr($binitem, $offset-8, 9))-32;
      $property = "+". $stat ." to Life";
      $offset -= 9;
      break;
    case 9: // +X to Mana
      $stat = bindec(substr($binitem, $offset-7, 8))-32;
      $property = "+". $stat ." to Mana";
      $offset -= 8;
      break;
    case 11: // +X to Maximum Stamina
      $stat = bindec(substr($binitem, $offset-7, 8))-32;
      $property = "+". $stat ." to Maximum Stamina";
      $offset -= 8;
      break;
    case 16: // +X% Enhanced Defense
      $stat = bindec(substr($binitem, $offset-8, 9));
      $property = "+". $stat ."% Enhanced Defense";
      $offset -= 9;
      break;
    case 17: // +X% Enhanced Damage
      $stat1 = bindec(substr($binitem, $offset-8, 9)); // max
      $offset -= 9;
      $stat2 = bindec(substr($binitem, $offset-8, 9)); // min - always the same?
      $offset -= 9;
//      $property = "+". $stat2 ."% (min) +". $stat1 ."% (max)  Enhanced Damage";
      $property = "+". $stat2 ."% Enhanced Damage";
      break;
    case 18: // +X% Enhanced Min Damage
      $stat = bindec(substr($binitem, $offset-8, 9));
      $offset -= 9;
      $property = "+". $stat ."% Enhanced Min Damage";
      break;
    case 19: // +X to Attack Rating
      $stat = bindec(substr($binitem, $offset-9, 10));
      $property = "+". $stat ." to Attack Rating";
      $offset -= 10;
      break;
    case 20: // X% Increased Chance of Blocking
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = $stat ."% Increased Chance of Blocking";
      $offset -= 6;
      break;
    case 21: // +X to Minimum Damage - 1 handed
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = "+". $stat ." to Minimum Damage";
      $offset -= 6;
      break;
    case 22: // +X to Maximum Damage - 1 handed
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "+". $stat ." to Maximum Damage";
      $offset -= 7;
      break;
    case 23: // +X to Minimum Damage - 2 handed
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = "+". $stat ." to Minimum Damage";
      $offset -= 6;
      break;
    case 24: // +X to Maximum Damage - 2 handed
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "+". $stat ." to Maximum Damage";
      $offset -= 7;
      break;
    case 25: // Damage % nv
//      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "";
      $offset -= 8;
      break;
    case 26: // Regenerate Mana  % nv
//      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "";
      $offset -= 8;
      break;
    case 27: // Regenerate Mana X%
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "Regenerate Mana ". $stat ."%";
      $offset -= 8;
      break;
    case 28: // Heal Stamina X%
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "Heal Stamina ". $stat ."%";
      $offset -= 8;
      break;
    case 31: // +X Defense
      $stat = bindec(substr($binitem, $offset-10, 11))-10;
      $property = "+". $stat ." Defense";
      $offset -= 11;
      break;
    case 32: // +X Defense vs. Missile
      $stat = bindec(substr($binitem, $offset-8, 9));
      $property = "+". $stat ." Defense vs. Missile";
      $offset -= 9;
      break;
    case 33: // +X Defense vs. Melee
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." Defense vs. Melee";
      $offset -= 8;
      break;
    case 34: // Damage Reduced by X
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = "Damage Reduce by ". $stat;
      $offset -= 6;
      break;
    case 35: // Magic Damage Reduced by X
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = "Magic Damage Reduce by ". $stat;
      $offset -= 6;
      break;
    case 36: // Damage Reduced by X%
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "Damage Reduce by ". $stat ."%";
      $offset -= 8;
      break;
    case 37: // Magic Resist +X%
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "Magic Resist +". $stat ."%";
      $offset -= 8;
      break;
    case 38: // +X% to Maximum Magic Resist
      $stat = bindec(substr($binitem, $offset-4, 5));
      $property = "+". $stat ."% to Maximum Magic Resist";
      $offset -= 5;
      break;
    case 39: // Fire Resist +X%
      $stat = bindec(substr($binitem, $offset-7, 8))-50;
      $property = "Fire Resist +". $stat ."%";
      $offset -= 8;
      break;
    case 40: // +X% to Maximum Fire Resist
      $stat = bindec(substr($binitem, $offset-4, 5));
      $property = "+". $stat ."% to Maximum Fire Resist";
      $offset -= 5;
      break;
    case 41: // Lightning Resist +X%
      $stat = bindec(substr($binitem, $offset-7, 8))-50;
      $property = "Lightning Resist +". $stat ."%";
      $offset -= 8;
      break;
    case 42: // +X% to Maximum Lightning Resist
      $stat = bindec(substr($binitem, $offset-4, 5));
      $property = "+". $stat ."% to Maximum Lightning Resist";
      $offset -= 5;
      break;
    case 43: // Cold Resist +X%
      $stat = bindec(substr($binitem, $offset-7, 8))-50;
      $property = "Cold Resist +". $stat ."%";
      $offset -= 8;
      break;
    case 44: // +X% to Maximum Cold Resist
      $stat = bindec(substr($binitem, $offset-4, 5));
      $property = "+". $stat ."% to Maximum Cold Resist";
      $offset -= 5;
      break;
    case 45: // Poison Resist +X%
      $stat = bindec(substr($binitem, $offset-7, 8))-50;
      $property = "Poison Resist +". $stat ."%";
      $offset -= 8;
      break;
    case 46: // +X% to Maximum Poison Resist
      $stat = bindec(substr($binitem, $offset-4, 5));
      $property = "+". $stat ."% to Maximum Poison Resist";
      $offset -= 5;
      break;
    case 48: // Adds X-Y fire damage
      $stat1 = bindec(substr($binitem, $offset-7, 8));
      $offset -= 8;
      $stat2 = bindec(substr($binitem, $offset-8, 9));
      $offset -= 9;
      $property = "Adds ". $stat1 ."-". $stat2 ." fire damage";
      break;
    case 49: // Max Fire Damage
      $stat = bindec(substr($binitem, $offset-8, 9));
      $offset -= 9;
      $property = "Adds ". $stat ." fire damage";
      break;
    case 50: // Adds X-Y lightning damage
      $stat1 = bindec(substr($binitem, $offset-5, 6));
      $offset -= 6;
      $stat2 = bindec(substr($binitem, $offset-9, 10));
      $offset -= 10;
      $property = "Adds ". $stat1 ."-". $stat2 ." lightning damage";
      break;
    case 51: // Max Lightning Damage
      $stat = bindec(substr($binitem, $offset-9, 10));
      $offset -= 10;
      $property = "Adds ". $stat ." lightning damage";
      break;
    case 52: // Adds X-Y magic damage
      $stat1 = bindec(substr($binitem, $offset-7, 8));
      $offset -= 8;
      $stat2 = bindec(substr($binitem, $offset-8, 9));
      $offset -= 9;
      $property = "Adds ". $stat1 ."-". $stat2 ." magic damage";
      break;
    case 53: // Max Magic Damage
      $stat = bindec(substr($binitem, $offset-8, 9));
      $offset -= 9;
      $property = "Adds ". $stat ." magic damage";
      break;
    case 54: // Adds X-Y cold damage
      $stat1 = bindec(substr($binitem, $offset-7, 8));
      $offset -= 8;
      $stat2 = bindec(substr($binitem, $offset-8, 9));
      $offset -= 9;
      $stat3 = round(bindec(substr($binitem, $offset-7, 8))/25);
      $offset -= 8;
      $property = "Adds ". $stat1 ."-". $stat2 ." cold damage for ". $stat3 ." seconds";
      break;
    case 55: // Max Cold Damage
      $stat = bindec(substr($binitem, $offset-8, 9));
      $offset -= 9;
      $property = "Adds ". $stat ." cold damage";
      break;
    case 56: // Cold Length
      $stat = round(bindec(substr($binitem, $offset-8, 9))/25);
      $offset -= 9;
      $property = "Adds ". $stat ." seconds cold duration";
      break;
    case 57: // Adds X-Y poison damage over Z seconds
      $stat1 = bindec(substr($binitem, $offset-9, 10));
      $offset -= 10;
      $stat2 = bindec(substr($binitem, $offset-9, 10));
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-8, 9));
      $offset -= 9;
      if ($stat1 == $stat2) {
        $property = "Adds ". round($stat1 * $stat3 / 256) ." Poison Damage over ". round($stat3 / 25) ." seconds";
      } else {
        $property = "Adds ". round($stat1 * $stat3 / 256) ."-". round($stat2 * $stat3 / 256) ." Poison Damage over ". round($stat3 / 25) ." seconds";
      }
      break;
    case 58: // Max Poison Damage
      $stat = bindec(substr($binitem, $offset-9, 10));
      $offset -= 10;
      $property = "Adds ". $stat ." poison damage";
      break;
    case 59: // Max Poison Damage
      $stat = round(bindec(substr($binitem, $offset-8, 9))/25);
      $offset -= 9;
      $property = "Adds ". $stat ." seconds poison length";
      break;
    case 60: // X% Life stolen per hit
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ."% Life stolen per hit";
      $offset -= 7;
      break;
    case 62: // X% Mana stolen per hit
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ."% Mana stolen per hit";
      $offset -= 7;
      break;
    case 67: // Run/Walk Speed % nv
//      $stat = bindec(substr($binitem, $offset-6, 7))-30;
      $property = "";
      $offset -= 7;
      break;
    case 68: // Attack Speed % nv
//      $stat = bindec(substr($binitem, $offset-6, 7))-30;
      $property = "";
      $offset -= 7;
      break;
    case 71: // value
//      $stat = bindec(substr($binitem, $offset-7, 8))-100;
      $property = "";
      $offset -= 8;
      break;
    case 72: // Durability
//      $stat = bindec(substr($binitem, $offset-8, 9));
      $property = "";
      $offset -= 9;
      break;
    case 73: // +X Maximum Durability
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." Maximum Durability";
      $offset -= 8;
      break;
    case 74: // Replenish Life +X
      $stat = bindec(substr($binitem, $offset-5, 6))-30;
      $property = "Replenish Life +". $stat;
      $offset -= 6;
      break;
    case 75: // Increase Maximum Durability X%
      $stat = bindec(substr($binitem, $offset-6, 7))-20;
      $property = "Increase Maximum Durability ". $stat ."%";
      $offset -= 7;
      break;
    case 76: // Increase Maximum Life X%
      $stat = bindec(substr($binitem, $offset-5, 6))-10;
      $property = "Increase Maximum Life ". $stat ."%";
      $offset -= 6;
      break;
    case 77: // Increase Maximum Mana X%
      $stat = bindec(substr($binitem, $offset-5, 6))-10;
      $property = "Increase Maximum Mana ". $stat ."%";
      $offset -= 6;
      break;
    case 78: // Attacker Takes Damage of X
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Attacker Takes Damage of ". $stat;
      $offset -= 7;
      break;
    case 79: // X% Extra Gold from Monsters
      $stat = bindec(substr($binitem, $offset-8, 9))-100;
      $property = $stat ."% Extra Gold From Monsters";
      $offset -= 9;
      break;
    case 80: // X% Better Chance of Getting Magic Items
      $stat = bindec(substr($binitem, $offset-7, 8))-100;
      $property = $stat ."% Better Chance of Getting Magic Items";
      $offset -= 8;
      break;
    case 81: // Knockback
//      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Knockback";
      $offset -= 7;
      break;
    case 82: // Time Duration
      $stat = bindec(substr($binitem, $offset-8, 9))-20;
      $property = "";
      $offset -= 9;
      break;
    case 83: // + Class skill levels
      $stat1 = bindec(substr($binitem, $offset-2, 3));
      $offset -= 3;
      $stat2 = bindec(substr($binitem, $offset-2, 3));
      $offset -= 3;
      $property = "+". $stat2 ." to ". $classes[$stat1] ." Skill Levels";
      break;
    case 85: // Add experience
      $stat = bindec(substr($binitem, $offset-8, 9))-50;
      $property = "+". $stat . "% to Experience Gained";
      $offset -= 9;
      break;
    case 86: // Heal after kill
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "+". $stat . " to Life After Each Kill";
      $offset -= 7;
      break;
    case 87: // Reduced Prices
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Prices Reduced by ". $stat . "%";
      $offset -= 7;
      break;
    case 88: // Double Herb Duration
//      $stat = bindec(substr($binitem, $offset, 1));
      $property = "";
      $offset--;
      break;
    case 89: // +X to Light Radius
      $stat = bindec(substr($binitem, $offset-3, 4))-4;
      $property = "+". $stat ." to Light Radius";
      $offset -= 4;
      break;
    case 90: // alter the color of the ambient light.
      $stat = bindec(substr($binitem, $offset-23, 24));
      $lightcolorlist = array('White', 'Light Grey', 'Dark Grey', 'Black', 'Light Blue', 'Dark Blue', 'Crystal Blue', 'Light Red', 'Dark Red', 'Crystal Red', 'Light Green', 'Dark Green', 'Crystal Green', 'Light Yellow', 'Dark Yellow', 'Light Gold', 'Dark Gold', 'Light Purple', 'Dark Purple', 'Orange', 'Bright White');
      $property = "Change Ambient Light Color to ". $lightcolorlist[$stat];
      $offset -= 24;
      break;
    case 91: // Requirements -X%
      $stat = bindec(substr($binitem, $offset-7, 8))-100;
      $property = "Requirements ". $stat ."%";
      $offset -= 8;
      break;
    case 92: // Level Require
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Required Level ". $stat;
      $offset -= 7;
      break;
    case 93: // X% Increased Attack Speed
      $stat = bindec(substr($binitem, $offset-6, 7))-20;
      $property = $stat ."% Increased Attack Speed";
      $offset -= 7;
      break;
    case 94: // Level Require %
      $stat = bindec(substr($binitem, $offset-6, 7))-64;
      $property = "Required Level ". $stat ."%";
      $offset -= 7;
      break;
    case 96: // X% Faster Run/Walk
      $stat = bindec(substr($binitem, $offset-6, 7))-20;
      $property = $stat ."% Faster Run/Walk";
      $offset -= 7;
      break;
    case 97: // Non Class skill
      $stat1 = array_shift(skill_decode(bindec(substr($binitem, $offset-8, 9))));
      $offset -= 9;
      $stat2 = bindec(substr($binitem, $offset-5, 6));
      $offset -= 6;
      $property = "Level ". $stat2 ." ". $stat1;
      break;
    case 98: // state
//      $stat1 = bindec(substr($binitem, $offset-7, 8));
      $offset -= 8;
//      $stat2 = bindec(substr($binitem, $offset, 1));
      $offset--;
      $property = "";
      break;
    case 99: // X% Faster Hit Recovery
      $stat = bindec(substr($binitem, $offset-6, 7))-20;
      $property = $stat ."% Faster Hit Recovery";
      $offset -= 7;
      break;
    case 102: // X% Faster Block Rate
      $stat = bindec(substr($binitem, $offset-6, 7))-20;
      $property = $stat ."% Faster Block Rate";
      $offset -= 7;
      break;
    case 105: // X% Faster Cast Rate
      $stat = bindec(substr($binitem, $offset-6, 7))-20;
      $property = $stat ."% Faster Cast Rate";
      $offset -= 7;
      break;
    case 107: // +Y to spell X (character class Only)
      $stat1 = skill_decode(bindec(substr($binitem, $offset-8, 9)));
      $offset -= 9;
      $stat2 = bindec(substr($binitem, $offset-2, 3));
      $offset -= 3;
      $property = "+". $stat2 ." to ". $stat1[0] ." (". $classes[$stat1[1]] ." Only)";
      break;
    case 108: // Rest in Peace
      $property = "Rest in Peace";
      $offset--;
      break;
    case 109: // Curse Resistance
      $stat = bindec(substr($binitem, $offset-8, 9));
      $property = "+". $stat ." to Curse Resistance";
      $offset -= 9;
      break;
    case 110: // Poison Length Reduced by X%
      $stat = bindec(substr($binitem, $offset-7, 8))-20;
      $property = "Poison Length Reduced by ". $stat ."%";
      $offset -= 8;
      break;
    case 111: // Damage +X
      $stat = bindec(substr($binitem, $offset-8, 9))-20;
      $property = "Damage +". $stat;
      $offset -= 9;
      break;
    case 112: // Hit Causes Monster to Flee %
      $stat = bindec(substr($binitem, $offset-6, 7))+1;
      $property = "Hit Causes Monster to Flee ". round($stat * 100 / 127) ."%";
      $offset -= 7;
      break;
    case 113: // Hit Blinds Target +X
//      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Hit Blinds Target";
      $offset -= 7;
      break;
    case 114: // X% Damage Taken Goes to Mana
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = $stat ."% Damage Taken Goes to Mana";
      $offset -= 6;
      break;
    case 115: // Ignore Target Defense
      $property = "Ignore Target's Defense";
      $offset--;
      break;
    case 116: // X% Target Defense
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ."% Target Defense";
      $offset -= 7;
      break;
    case 117: // Prevent Monster Heal
//      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Prevent Monster Heal";
      $offset -= 7;
      break;
    case 118: // Half Freeze Duration
      $property = "Half Freeze Duration";
      $offset--;
      break;
    case 119: // X% Bonus to Attack Rating
      $stat = bindec(substr($binitem, $offset-8, 9))-20;
      $property = $stat ."% Bonus to Attack Rating ";
      $offset -= 9;
      break;
    case 120: // X to Monster Defense Per Hit
      $stat = bindec(substr($binitem, $offset-6, 7))-128;
      $property = $stat ." to Monster Defense Per Hit";
      $offset -= 7;
      break;
    case 121: // +X% Damage to Demons
      $stat = bindec(substr($binitem, $offset-8, 9))-20;
      $property = "+". $stat ."% Damage to Demons";
      $offset -= 9;
      break;
    case 122: // +X% Damage to Undead - in addition to inherent extra damage due to weapon class
      $stat = bindec(substr($binitem, $offset-8, 9))-20;
      $property = "+". $stat ."% Damage to Undead";
      $offset -= 9;
      break;
    case 123: // +X to Attack Rating against Demons
      $stat = bindec(substr($binitem, $offset-9, 10))-128;
      $property = "+". $stat ." to Attack Rating against Demons";
      $offset -= 10;
      break;
    case 124: // +X to Attack Rating against Undead
      $stat = bindec(substr($binitem, $offset-9, 10))-128;
      $property = "+". $stat ." to Attack Rating against Undead";
      $offset -= 10;
      break;
    case 125: // Throwable
      $property = "Throwable";
      $offset--;
      break;
    case 126: // I have +X to Fire Skills, UdieToo says Elemental Skill
      $stat = bindec(substr($binitem, $offset-2, 3));
      $property = "+". $stat ." to Fire Skills";
      $offset -= 3;
      break;
    case 127: // +X to All Skills
      $stat = bindec(substr($binitem, $offset-2, 3));
      $property = "+". $stat ." to All Skills";
      $offset -= 3;
      break;
    case 128: // Attacker Takes Lightning Damage of X
      $stat = bindec(substr($binitem, $offset-4, 5));
      $property = "Attacker Takes Lightning Damage of ". $stat;
      $offset -= 5;
      break;
    case 134: // Freezes Target
//      $stat = bindec(substr($binitem, $offset-4, 5));
      $property = "Freezes Target";
      $offset -= 5;
      break;
    case 135: // X% Chance of Open Wounds
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ."% Chance of Open Wounds";
      $offset -= 7;
      break;
    case 136: // X% Chance of Crushing Blow
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ."% Chance of Crushing Blow";
      $offset -= 7;
      break;
    case 137: // +X Kick Damage
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "+". $stat ." Kick Damage";
      $offset -= 7;
      break;
    case 138: // +X to Mana After Each Kill
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "+". $stat ." to Mana After Each Kill";
      $offset -= 7;
      break;
    case 139: // +X Life after each Demon Kill
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "+". $stat ." Life after each Demon Kill";
      $offset -= 7;
      break;
    case 140: // Unknown. Found on Swordback Hold Spiked Shield
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Unknown";
      $offset -= 7;
      break;
    case 141: // X% Deadly Strike
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ."% Deadly Strike ";
      $offset -= 7;
      break;
    case 142: // Fire Absorb X%
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Fire Absorb ". $stat ."%";
      $offset -= 7;
      break;
    case 143: // X Fire Absorb
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ." Fire Absorb";
      $offset -= 7;
      break;
    case 144: // Lightning Absorb X%
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Lightning Absorb ". $stat ."%";
      $offset -= 7;
      break;
    case 145: // X Lightning Absorb
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ." Lightning Absorb";
      $offset -= 7;
      break;
    case 146: // Magic Absorb X%
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Magic Absorb ". $stat ."%";
      $offset -= 7;
      break;
    case 147: // X Magic Absorb
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ." Magic Absorb";
      $offset -= 7;
      break;
    case 148: // Cold Absorb X%
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Cold Absorb ". $stat ."%";
      $offset -= 7;
      break;
    case 149: // X Cold Absorb
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ." Cold Absorb";
      $offset -= 7;
      break;
    case 150: // Slows Target by X%
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Slows Target by ". $stat ."%";
      $offset -= 7;
      break;
    case 151: // Aura
      $stat1 = array_shift(skill_decode(bindec(substr($binitem, $offset-8, 9))));
      $offset -= 9;
      $stat2 = bindec(substr($binitem, $offset-4, 5));
      $offset -= 5;
      $property = "Level ". $stat2 ." ". $stat1 ." Aura When Equipped";
      break;
    case 152: // Indestructable
      $property = "Indestructable";
      $offset--;
      break;
    case 153: // Cannot Be Frozen
      $property = "Cannot Be Frozen";
      $offset--;
      break;
    case 154: // X% Slower Stamina Drain
      $stat = bindec(substr($binitem, $offset-6, 7))-20;
      $property = $stat ."% Slower Stamina Drain";
      $offset -= 7;
      break;
    case 155: // X% Chance to Reanimate Target
      $stat1 = bindec(substr($binitem, $offset-9, 10));
      $offset -= 10;
      $stat2 = bindec(substr($binitem, $offset-6, 7));
      $offset -= 7;
      $property = $stat2 ."% Chance to Reanimate Monster ID ". $stat1;
      break;
    case 156: // Piercing Attack
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = $stat ."% Chance to Pierce";
      $offset -= 7;
      break;
    case 157: // Fires Magic Arrows
//      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Fires Magic Arrows or Bolts";
      $offset -= 7;
      break;
    case 158: // Fires Explosive Arrows or Bolts
//      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "Fires Explosive Arrows or Bolts";
      $offset -= 7;
      break;
    case 159: // +X to Minimum Damage (always with 21 and 23)
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = "+". $stat ." to Minimum Damage";
      $offset -= 6;
      break;
    case 160: // +X to Maximum Damage (always with 22 and 24)
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "+". $stat ." to Maximum Damage";
      $offset -= 7;
      break;
    case 179: // Attack Vs Monster
      $stat1 = bindec(substr($binitem, $offset-9, 10));
      $offset -= 10;
      $stat2 = bindec(substr($binitem, $offset-8, 9));
      $offset -= 9;
      $property = "+". $stat1 ."% Attack Rating to Monster Type ". $stat1;
      break;
    case 180: // Damage Vs Monster
      $stat1 = bindec(substr($binitem, $offset-9, 10));
      $offset -= 10;
      $stat2 = bindec(substr($binitem, $offset-8, 9));
      $offset -= 9;
      $property = "+". $stat1 ."% Damage to Monster Type ". $stat1;
      break;
    case 181: // Fade method
      $property = "";
      $offset -= 3;
      break;
    case 188: // +Y to skill set X Skills (character class Only)
      $stat1 = bindec(substr($binitem, $offset-2, 3));
      $offset -= 3;
      $stat2 = bindec(substr($binitem, $offset-12, 13));
      $offset -= 13;
      $stat3 = bindec(substr($binitem, $offset-2, 3));
      $offset -= 3;
      switch ($stat1) {
        case 0:
          switch ($stat2) {
            case 0:
              $property = "+". $stat3 ." to Bow and Crossbow Skills (Amazon Only)";
              break;
            case 1:
              $property = "+". $stat3 ." to Fire Spells (Sorceress Only)";
              break;
            case 2:
              $property = "+". $stat3 ." to Curses (Necromancer Only)";
              break;
            case 3:
              $property = "+". $stat3 ." to Combat Skills (Paladin Only)";
              break;
            case 4:
              $property = "+". $stat3 ." to Combat Skills (Barbarian Only)";
              break;
            case 5:
              $property = "+". $stat3 ." to Summoning (Druid Only)";
              break;
            case 6:
              $property = "+". $stat3 ." to Traps (Assassin Only)";
              break;
          }
          break;
        case 1:
          switch ($stat2) {
            case 0:
              $property = "+". $stat3 ." to Passive and Magic Skills (Amazon Only)";
              break;
            case 1:
              $property = "+". $stat3 ." to Lightning Spells (Sorceress Only)";
              break;
            case 2:
              $property = "+". $stat3 ." to Poison and Bone Spells (Necromancer Only)";
              break;
            case 3:
              $property = "+". $stat3 ." to Offensive Auras (Paladin Only)";
              break;
            case 4:
              $property = "+". $stat3 ." to Combat Masteries (Barbarian Only)";
              break;
            case 5:
              $property = "+". $stat3 ." to Shape Shifting (Druid Only)";
              break;
            case 6:
              $property = "+". $stat3 ." to Shadow Disciplines (Assassin Only)";
              break;
          }
          break;
        case 2:
          switch ($stat2) {
            case 0:
              $property = "+". $stat3 ." to Javelin and Spear Skills (Amazon Only)";
              break;
            case 1:
              $property = "+". $stat3 ." to Cold Spells (Sorceress Only)";
              break;
            case 2:
              $property = "+". $stat3 ." to Summoning Spells (Necromancer Only)";
              break;
            case 3:
              $property = "+". $stat3 ." to Defensive Auras (Paladin Only)";
              break;
            case 4:
              $property = "+". $stat3 ." to Warcries (Barbarian Only)";
              break;
            case 5:
              $property = "+". $stat3 ." to Elemental (Druid Only)";
              break;
            case 6:
              $property = "+". $stat3 ." to Martial Arts (Assassin Only)";
              break;
          }
          break;
      }
      break; 
    case 194: // Adds X extra sockets to the item.
      $stat = bindec(substr($binitem, $offset-3, 4));
      $property = "Adds ". $stat ." extra sockets";
      $offset -= 4;
      break;
    case 195: // Skill On Attack
      $stat1 = bindec(substr($binitem, $offset-5, 6));
      $offset -= 6;
      $stat2 = array_shift(skill_decode(bindec(substr($binitem, $offset-9, 10))));
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-6, 7));
      $offset -= 7;
      $property = $stat3 ."% Chance to Cast Level ". $stat1 ." ". $stat2 ." on Attack";
      break;
    case 196: // Skill On Kill
      $stat1 = bindec(substr($binitem, $offset-5, 6));
      $offset -= 6;
      $stat2 = array_shift(skill_decode(bindec(substr($binitem, $offset-9, 10))));
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-6, 7));
      $offset -= 7;
      $property = $stat3 ."% Chance to Cast Level ". $stat1 ." ". $stat2 ." on Kill";
      break;
    case 197: // Skill On Death
      $stat1 = bindec(substr($binitem, $offset-5, 6));
      $offset -= 6;
      $stat2 = array_shift(skill_decode(bindec(substr($binitem, $offset-9, 10))));
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-6, 7));
      $offset -= 7;
      $property = $stat3 ."% Chance to Cast Level ". $stat1 ." ". $stat2 ." on Death";
      break;
    case 198: // Skill On Hit
      $stat1 = bindec(substr($binitem, $offset-5, 6));
      $offset -= 6;
      $stat2 = array_shift(skill_decode(bindec(substr($binitem, $offset-9, 10))));
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-6, 7));
      $offset -= 7;
      $property = $stat3 ."% Chance to Cast Level ". $stat1 ." ". $stat2 ." on Striking";
      break;
    case 199: // Skill On Levelup
      $stat1 = bindec(substr($binitem, $offset-5, 6));
      $offset -= 6;
      $stat2 = array_shift(skill_decode(bindec(substr($binitem, $offset-9, 10))));
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-6, 7));
      $offset -= 7;
      $property = $stat3 ."% Chance to Cast Level ". $stat1 ." ". $stat2 ." on Level Up";
      break;
    case 201: // Skill on Get Hit
      $stat1 = bindec(substr($binitem, $offset-5, 6));
      $offset -= 6;
      $stat2 = array_shift(skill_decode(bindec(substr($binitem, $offset-9, 10))));
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-6, 7));
      $offset -= 7;
      $property = $stat3 ."% Chance to Cast Level ". $stat1 ." ". $stat2 ." When Struck";
      break;
    case 204: // Charged Skill
      $stat1 = bindec(substr($binitem, $offset-5, 6));
      $offset -= 6;
      $stat2 = array_shift(skill_decode(bindec(substr($binitem, $offset-9, 10))));
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-7, 8));
      $offset -= 8;
      $stat4 = bindec(substr($binitem, $offset-7, 8));
      $offset -= 8;
      $property = "Level ". $stat1 ." ". $stat2 ." (". $stat3 ."/". $stat4 ." Charges)";
      break;
    case 214: // +X to Defense (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." to Defense (Based on Character Level)";
      $offset -= 6;
      break;
    case 215: // X% Enhanced Defense (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = (int) ($stat * $level) ."% Enhanced Defense (Based on Character Level)";
      $offset -= 6;
      break;
    case 216: // +X to Life (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." to Life (Based on Character Level)";
      $offset -= 6;
      break;
    case 217: // +X to Mana (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." to Mana (Based on Character Level)";
      $offset -= 6;
      break;
    case 218: // +X to Maximum Damage (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." to Maximum Damage (Based on Character Level)";
      $offset -= 6;
      break;
    case 219: // X% Enhanced Maximum Damage (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = (int) ($stat * $level) ."% Enhanced Maximum Damage (Based on Character Level)";
      $offset -= 6;
      break;
    case 220: // +X to Strength (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." to Strength (Based on Character Level)";
      $offset -= 6;
      break;
    case 221: // +X to Dexterity (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." to Dexterity (Based on Character Level)";
      $offset -= 6;
      break;
    case 222: // +X to Energy (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." to Energy (Based on Character Level)";
      $offset -= 6;
      break;
    case 223: // +X to Vitality (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." to Vitality (Based on Character Level)";
      $offset -= 6;
      break;
    case 224: // +X to Attack Rating (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/2;
      $property = "+". (int) ($stat * $level) ." to Attack Rating (Based on Character Level)";
      $offset -= 6;
      break;
    case 225: // X% Bonus to Attack Rating (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/2;
      $property = (int) ($stat * $level) ."% Bonus to Attack Rating (Based on Character Level)";
      $offset -= 6;
      break;
    case 226: // +X Cold Damage (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." Cold Damage (Based on Character Level)";
      $offset -= 6;
      break;
    case 227: // +X Fire Damage (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." Fire Damage (Based on Character Level)";
      $offset -= 6;
      break;
    case 228: // +X Lightning Damage (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." Lightning Damage (Based on Character Level)";
      $offset -= 6;
      break;
    case 229: // +X Poison Damage (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." Poison Damage (Based on Character Level)";
      $offset -= 6;
      break;
    case 230: // Cold Resist +X% (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "Cold Resist +". (int) ($stat * $level) ."% (Based on Character Level)";
      $offset -= 6;
      break;
    case 231: // Fire Resist +X% to (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "Fire Resist +". (int) ($stat * $level) ."% (Based on Character Level)";
      $offset -= 6;
      break;
    case 232: // Lightning Resist +X% to (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "Lightning Resist +". (int) ($stat * $level) ."% (Based on Character Level)";
      $offset -= 6;
      break;
    case 233: // Poison Resist +X% to (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "Poison Resist +". (int) ($stat * $level) ."% (Based on Character Level)";
      $offset -= 6;
      break;
    case 234: // +X Cold Absorb (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." Cold Absorb (Based on Character Level)";
      $offset -= 6;
      break;
    case 235: // +X Fire Absorb (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." Fire Absorb (Based on Character Level)";
      $offset -= 6;
      break;
    case 236: // +X Lightning Absorb (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." Lightning Absorb (Based on Character Level)";
      $offset -= 6;
      break;
    case 237: // +X Lightning Absorb (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = "+". (int) ($stat * $level) ." Lightning Absorb (Based on Character Level)";
      $offset -= 6;
      break;
    case 238: // Attacker Takes Damage of X (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-4, 5))/8;
      $property = "Attacker Takes Damage of ". (int) ($stat * $level) ." (Based on Character Level)";
      $offset -= 5;
      break;
    case 239: // X% Extra Gold from Monsters (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = (int) ($stat * $level) ."% Extra Gold from Monsters (Based on Character Level)";
      $offset -= 6;
      break;
    case 240: // X% Better Chance of Getting Magic Items (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6))/8;
      $property = (int) ($stat * $level) ."% Better Chance of Getting Magic Items (Based on Character Level)";
      $offset -= 6;
      break;
    case 241: // Heal Stamina Plus X% (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = "Heal Stamina Plus ". (int) ($stat * $level) ."% (Based on Character Level)";
      $offset -= 6;
      break;
    case 243: // X% Damage to Demons (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = (int) ($stat * $level) ."% Damage to Demons (Based on Character Level)";
      $offset -= 6;
      break;
    case 244: // X% Damage to Undead (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = (int) ($stat * $level) ."% Damage to Undead (Based on Character Level)";
      $offset -= 6;
      break;
    case 245: // +X to Attack Rating against Demons (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = "+". (int) ($stat * $level) ." to Attack Rating against Demons (Based on Character Level)";
      $offset -= 6;
      break;
    case 246: // +X to Attack Rating against Undead (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = "+". (int) ($stat * $level) ." to Attack Rating against Undead (Based on Character Level)";
      $offset -= 6;
      break;
    case 247: // X% Chance of Crushing Blow (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = (int) ($stat * $level) ."% Chance of Crushing Blow (Based on Character Level) ";
      $offset -= 6;
      break;
    case 248: // X% Chance of Open Wounds (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = (int) ($stat * $level) ."% Chance of Open Wounds (Based on Character Level)";
      $offset -= 6;
      break;
    case 249: // +X Kick Damage (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = "+". (int) ($stat * $level) ." Kick Damage (Based on Character Level)";
      $offset -= 6;
      break;
    case 250: // X% to Deadly Strike (Based on Character Level)
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = (int) ($stat * $level) ."% to Deadly Strike (Based on Character Level)";
      $offset -= 6;
      break;
    case 252: // Repairs 1 durability in X seconds - UdieToo says '6', I say '5'
      $stat = 100 / bindec(substr($binitem, $offset-4, 5));
      $property = "Repairs 1 durability in ". (int) $stat ." seconds";
      $offset -= 5;
      break;
    case 253: // Replenishes Quantity (1 in X seconds)
      $stat = 100 / bindec(substr($binitem, $offset-5, 6));
      $property = "Replenishes Quantity (1 in ". (int) $stat ." seconds)";
      $offset -= 6;
      break;
    case 254: // Increased Stack Size (+X)
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "Increased Stack Size (+". $stat .")";
      $offset -= 8;
      break;
    // magic properties that change value depending on the time of day in game
    case 268: // +X Defense (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") Defense (Increases ". $stat1 .")";
      break;
    case 269: // X% Enhanced Defense (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Enhanced Defense (Increases ". $stat1 .")";
      break;
    case 270: // +X to Life (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". round($stat2 / 256) ."-". round($stat3 / 256) .") to Life (Increases ". $stat1 .")";
      break;
    case 271: // +X to Mana (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". round($stat2 / 256) ."-". round($stat3 / 256) .") to Mana (Increases ". $stat1 .")";
      break;
    case 272: // +X to Damage (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") to Damage (Increases ". $stat1 .")";
      break;
    case 273: // X% Enhanced Damage (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Enhanced Damage (Increases ". $stat1 .")";
      break;
    case 274: // +X to Strength (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") to Strength (Increases ". $stat1 .")";
      break;
    case 275: // +X to Dexterity (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") to Dexterity (Increases ". $stat1 .")";
      break;
    case 276: // +X to Energy (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") to Energy (Increases ". $stat1 .")";
      break;
    case 277: // +X to Vitality (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") to Vitality (Increases ". $stat1 .")";
      break;
    case 278: // X% Enhanced Attack Rating (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Enhanced Attack Rating (Increases ". $stat1 .")";
      break;
    case 279: // +X to Attack Rating (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") to Attack Rating (Increases ". $stat1 .")";
      break;
    case 280: // +X Cold Damage (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") Cold Damage (Increases ". $stat1 .")";
      break;
    case 281: // +X Fire Damage (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") Fire Damage (Increases ". $stat1 .")";
      break;
    case 282: // +X Lightning Damage (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") Lightning Damage (Increases ". $stat1 .")";
      break;
    case 283: // +X Poison Damage (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") Poison Damage (Increases ". $stat1 .")";
      break;
    case 284: // X% Cold Resist (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Cold Resist (Increases ". $stat1 .")";
      break;
    case 285: // X% Fire Resist (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Fire Resist (Increases ". $stat1 .")";
      break;
    case 286: // X% Lightning Resist (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Lightning Resist (Increases ". $stat1 .")";
      break;
    case 287: // X% Poison Resist (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Poison Resist (Increases ". $stat1 .")";
      break;
    case 288: // +X Cold Absorb (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") Cold Absorb (Increases ". $stat1 .")";
      break;
    case 289: // +X Fire Absorb (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") Fire Absorb (Increases ". $stat1 .")";
      break;
    case 290: // +X Lightning Absorb (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") Lightning Absorb (Increases ". $stat1 .")";
      break;
    case 291: // +X Poison Absorb (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") Poison Absorb (Increases ". $stat1 .")";
      break;
    case 292: // X% Extra Gold from Monsters (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Extra Gold from Monsters (Increases ". $stat1 .")";
      break;
    case 293: // X% Better Chance of Getting Magic Items (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Better Chance of Getting Magic Items (Increases ". $stat1 .")";
      break;
    case 294: // Heal Stamina Plus X% (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "Heal Stamina Plus (". $stat2 ."-". $stat3 .")% (Increases ". $stat1 .")";
      break;
    case 295: // +X to Stamina (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". round($stat2 / 256) ."-". round($stat3 / 256) .") to Stamina (Increases ". $stat1 .")";
      break;
    case 296: // X% Damage to Demons (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Damage to Demons (Increases ". $stat1 .")";
      break;
    case 297: // X% Damage to Undead (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Damage to Undead (Increases ". $stat1 .")";
      break;
    case 298: // +X to Attack Rating against Demons (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") to Attack Rating against Demons (Increases ". $stat1 .")";
      break;
    case 299: // +X to Attack Rating against Undead (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") to Attack Rating against Undead (Increases ". $stat1 .")";
      break;
    case 300: // X% Chance of Crushing Blow (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Chance of Crushing Blow (Increases ". $stat1 .")";
      break;
    case 301: // X% Chance of Open Wounds (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Chance of Open Wounds (Increases ". $stat1 .")";
      break;
    case 302: // +X Kick Damage (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "+(". $stat2 ."-". $stat3 .") Kick Damage (Increases ". $stat1 .")";
      break;
    case 303: // X% Deadly Strike (Increases by time)
      $stat1 = time_name(bindec(substr($binitem, $offset-1, 2)));
      $offset -= 2;
      $stat2 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $stat3 = bindec(substr($binitem, $offset-9, 10)) - 256;
      $offset -= 10;
      $property = "(". $stat2 ."-". $stat3 .")% Deadly Strike (Increases ". $stat1 .")";
      break;
    case 305: // item_pierce_cold
      $stat = bindec(substr($binitem, $offset-7, 8)) - 50;
      $property = "Pierce Cold by ". $stat;
      $offset -= 8;
      break;
    case 306: // item_pierce_fire
      $stat = bindec(substr($binitem, $offset-7, 8)) - 50;
      $property = "Pierce Fire by ". $stat;
      $offset -= 8;
      break;
    case 307: // item_pierce_ltng
      $stat = bindec(substr($binitem, $offset-7, 8)) - 50;
      $property = "Pierce Lightning by ". $stat;
      $offset -= 8;
      break;
    case 308: // item_pierce_pois
      $stat = bindec(substr($binitem, $offset-7, 8)) - 50;
      $property = "Pierce Poison by ". $stat;
      $offset -= 8;
      break;
    case 324: // item_extra_charges
      $stat = bindec(substr($binitem, $offset-5, 6));
      $property = $stat ." Extra Charges";
      $offset -= 6;
      break;
    case 329: // passive_fire_mastery
      $stat = bindec(substr($binitem, $offset-8, 9)) - 50;
      $property = "+". $stat ." to Passive Fire Mastery";
      $offset -= 9;
      break;
    case 330: // passive_ltng_mastery
      $stat = bindec(substr($binitem, $offset-8, 9)) - 50;
      $property = "+". $stat ." to Passive Lightning Mastery";
      $offset -= 9;
      break;
    case 331: // passive_cold_mastery
      $stat = bindec(substr($binitem, $offset-8, 9)) - 50;
      $property = "+". $stat ." to Passive Cold Mastery";
      $offset -= 9;
      break;
    case 332: // passive_pois_mastery
      $stat = bindec(substr($binitem, $offset-8, 9)) - 50;
      $property = "+". $stat ." to Passive Poison Mastery";
      $offset -= 9;
      break;
    case 333: // passive_fire_pierce
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Fire Pierce";
      $offset -= 8;
      break;
    case 334: // passive_ltng_pierce
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Lightning Pierce";
      $offset -= 8;
      break;
    case 335: // passive_cold_pierce
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Cold Pierce";
      $offset -= 8;
      break;
    case 336: // passive_pois_pierce
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Poison Pierce";
      $offset -= 8;
      break;
    case 337: // passive_critical_strike
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Critical Strike";
      $offset -= 8;
      break;
    case 338: // passive_dodge
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "+". $stat ." to Passive Dodge";
      $offset -= 7;
      break;
    case 339: // passive_avoid
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "+". $stat ." to Passive Avoid";
      $offset -= 7;
      break;
    case 340: // passive_evade
      $stat = bindec(substr($binitem, $offset-6, 7));
      $property = "+". $stat ." to Passive Evade";
      $offset -= 7;
      break;
    case 341: // passive_warmth
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Warmth";
      $offset -= 8;
      break;
    case 342: // passive_mastery_melee_th
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Melee Attack Rating";
      $offset -= 8;
      break;
    case 343: // passive_mastery_melee_dmg
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Melee Damage";
      $offset -= 8;
      break;
    case 344: // passive_mastery_melee_crit
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Melee Critical Strike";
      $offset -= 8;
      break;
    case 345: // passive_mastery_throw_th
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Throw Attack Rating";
      $offset -= 8;
      break;
    case 346: // passive_mastery_throw_dmg
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Throw Damage";
      $offset -= 8;
      break;
    case 347: // passive_mastery_throw_crit
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Throw Critical Strike";
      $offset -= 8;
      break;
    case 348: // passive_weaponblock
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Weapon Block";
      $offset -= 8;
      break;
    case 349: // passive_summon_resist
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Summon Resist";
      $offset -= 8;
      break;
    case 356: // questitemdifficulty
      $stat = $difficulty[bindec(substr($binitem, $offset-1, 2))];
      $property = "Quest Item Difficulty: ". $stat;
      $offset -= 2;
      break;
    case 357: // passive_mag_mastery
      $stat = bindec(substr($binitem, $offset-8, 9)) - 50;
      $property = "+". $stat ." to Passive Magic Mastery";
      $offset -= 9;
      break;
    case 358: // passive_mag_pierce
      $stat = bindec(substr($binitem, $offset-7, 8));
      $property = "+". $stat ." to Passive Magic Pierce";
      $offset -= 8;
      break;
    case 511: // end of property list
      $property = "";
      break;
    default: // unknown magic property - stop decoding now
      $property = "Unknown Magical Property ". $id;
  }
  return $offset;
}

function format_item_name_html ($item) {

  $displayname = $item['type'];
  $bold = $endbold = '';

// just for testing
  if (isset($item['quantity'])) $displayname = $item['quantity'] ." ". $displayname;

//  $qualitylist = array('', 'low', 'normal', 'high', 'magical', 'set', 'rare', 'unique', 'crafted');
  $qualitylist = array('', '', '', 'Superior ', '', '', '', '', '');

  $qualitycolors = array('', 'ffffff', 'ffffff', 'ffffff', '4850b8', '00c400', 'yellow', '908858', 'orange');
  if (!isset($item['quality'])) {
    $color = 'ffffff';
  } else {
    $displayname = $qualitylist[$item['quality']] . $displayname;
    $color = $qualitycolors[$item['quality']];
    if ( ($item['quality'] > 3) || $item['hasruneword'] == 1 ) {
      $bold = '<b>';
      $endbold = '</b>';
    }
    switch ($item['quality']) {
      case 1: // low quality
        switch ($item['quality2']) {
          case 0:
            $displayname = "Crude " . $displayname;
            break;
          case 1:
            $displayname = "Cracked " . $displayname;
            break;
          case 2:
            $displayname = "Damaged " . $displayname;
            break;
          case 3:
            $displayname = "Low Quality " . $displayname;
            break;
        }
        break;
      case 2:
      case 3:
        break;
      case 4: // magic
        if ($item['magicprefix'] > 0) $displayname = magic_prefix($item['magicprefix']) ." ". $displayname;
        if ($item['magicsuffix'] > 0) $displayname = $displayname ." ". magic_suffix($item['magicsuffix']);
        break;
      case 5: // set
        $displayname = set_name($item['setid'], $item['type']);
        break;
      case 6: // rare
        $displayname = rare_name($item['rareword1']) ." ". rare_name($item['rareword2']) ." ". $displayname;
        break;
      case 7: // unique
        $displayname = unique_name($item['uniqueid'], $item['type']);
        break;
      case 8: // crafted (same as rare)
        $displayname = rare_name($item['rareword1']) ." ". rare_name($item['rareword2']) ." ". $displayname;
        break;
    }
  }

//  if ($item['isquest'] == 1) $color = '908858';

  if ($color == 'ffffff' && $item['issocketed'] == 1) $color = 'gray';
  if ($color == 'ffffff' && $item['isethereal'] == 1) $color = 'darkgray';

  if ($item['hasruneword'] == 1) {
    $displayname = $item['runeword'] ." ". $displayname;
    $color = '908858';
  } elseif ($item['issocketed'] == 1 && $item['quality'] < 4 &&  $item['itemsinsockets'] > 0) {
    $displayname = "Gemmed ". $displayname;
  }

  if ($item['isear'] == 1) {
    $color = 'ffffff';
    $displayname = $item['earname'] ."'s ear";
  }

  if ($item['ispersonalized'] == 1) {
    $displayname = $item['itemname'] ."'s ". $displayname;
  }

  $prefix = '';

  // just for testing
  if (isset($item['defense'])) $displayname = $displayname ." ". $item['defense'];
/*
  if (isset($item['maxdurability'])) {
    if ($item['maxdurability'] == 0) {
      $displayname = $displayname ." Indestructable";
    } else {
      $displayname = $displayname ." ". $item['curdurability'] ." / ". $item['maxdurability'];
    }
  }
*/
  return $bold."<font color=".$color.">".$displayname."</font>".$endbold;
}

function item_decode ($startpos, $endpos, $rawdata, $data, &$items, $mercend, $level) {
  $item = array();
  $binitem = "";
  for($i=$endpos-1;$i>=$startpos;$i--) {
    if ($i < 0) break;
    $binitem .= sprintf("%08b", hexdec(padhex($data[$i])));
  }
//  $item['binary'] = $binitem;
  $itemlength=strlen($binitem);
  $item['isquest'] = substr($binitem, $itemlength - 1, 1);
  $item['isidentified'] = substr($binitem, $itemlength - 5, 1);
  $item['isdisabled'] = substr($binitem, $itemlength - 9, 1);
  $item['issocketed'] = substr($binitem, $itemlength - 12, 1);
  $item['foundthisrun'] = substr($binitem, $itemlength - 14, 1);
  $item['illegal'] = substr($binitem, $itemlength - 15, 1);
  $item['isear'] = substr($binitem, $itemlength - 17, 1);
  $item['isnewbie'] = substr($binitem, $itemlength - 18, 1);
  $item['issimple'] = substr($binitem, $itemlength - 22, 1);
  $item['isethereal'] = substr($binitem, $itemlength - 23, 1);
  $item['ispersonalized'] = substr($binitem, $itemlength - 25, 1);
  $item['noreadgems'] = substr($binitem, $itemlength - 26, 1);
  $item['hasruneword'] = substr($binitem, $itemlength - 27, 1);
  $item['version'] = bindec(substr($binitem, $itemlength - 42, 10));
  $item['location'] = bindec(substr($binitem, $itemlength - 45, 3));
  $item['position'] = bindec(substr($binitem, $itemlength - 49, 4));
  $item['column'] = bindec(substr($binitem, $itemlength - 53, 4));
  $item['row'] = bindec(substr($binitem, $itemlength - 57, 3));
  $item['storedin'] = bindec(substr($binitem, $itemlength - 60, 3));
  $item['stacked'] = 0;
  $item['magiccount'] = 0;
  $item['itemsinsockets'] = 0;
  $item['magiccolor'] = '4850b8';
  $socketstart = $endpos + 2;

  if ($item['isear']) {
    global $classes;
    global $Hardcore;
    $item['type'] = "ear";
    $item['magiccolor'] = 'ffffff';
    $item['earclass'] = $classes[bindec(substr($binitem, $itemlength-63, 3))];
    $item['earlevel'] = bindec(substr($binitem, $itemlength-70, 7));
    $earname = $letter = "";
    $letters = 0;
    $offset = $itemlength - 77;
    while ( ($letters < 18) && ($letter != chr(0)) ) {
      $letter = chr(bindec(substr($binitem, $offset, 7)));
      $earname = $earname . $letter;
      $letters++;
      $offset -= 7;
    }
    $item['earname'] = substr($earname, 0, -1);
    $item['issocketed'] = 0;
    $item['magicproperty0'] = $item['earclass'];
    $item['magicproperty1'] = "Level ". $item['earlevel'];
    if ($Hardcore) {
      $item['magicproperty2'] = "Hardcore";
      $item['magiccount'] = 3;
    } else {
      $item['magiccount'] = 2;
    }

  } else {
    $item['type'] = item_name(chr(bindec(substr($binitem, $itemlength-68, 8))) . chr(bindec(substr($binitem, $itemlength-76, 8))) . chr(bindec(substr($binitem, $itemlength-84, 8))), $item['description'], $item['stacked']);
//    $offset = $itemlength-85; // for simple items
    $offset = $itemlength - 93;

    if ($item['issimple'] == 0) {
      if ($item['noreadgems'] == 0) {
        $item['itemsinsockets'] = bindec(substr($binitem, $offset - 2, 3));
        $offset -= 3;
      }
      $item['id'] = str_pad(dechex(bindec(substr($binitem, $offset-31, 32))), 8, '0', STR_PAD_LEFT);
      $offset -= 32;
      $item['level'] = bindec(substr($binitem, $offset-6, 7));
      $offset -= 7;
      $item['quality'] = bindec(substr($binitem, $offset-3, 4));
      $offset -= 4;

      // graphic
      if (substr($binitem, $offset, 1) == 1) { // bool
        $item['ringpicture'] = bindec(substr($binitem, $offset-3, 3));
        $offset -= 3;
      }
      $offset--; 

      // class info
      if (substr($binitem, $offset, 1) == 1) { // bool
        $item['class'] = bindec(substr($binitem, $offset-11, 11));
        $offset -= 11;
      }
      $offset--; 

      // high or low quality item
      if ($item['quality'] == 1 || $item['quality'] == 3) {
        $item['quality2'] = bindec(substr($binitem, $offset-2, 3));
        $offset -= 3;
      }

      // normal quality item
      if ($item['quality'] == 2) {
//        if ($item['description'] == "char" && substr($binitem, $offset, 1) == 1) {
//          $item['charmaffix'] = bindec(substr($binitem, $offset-11, 11));
        if ($item['description'] == "char") {
          $item['charmaffix'] = bindec(substr($binitem, $offset-11, 12));
          $offset -= 12;
        }
        if ($item['description'] == "book" || $item['description'] == "scro") {
          $item['spellid'] = bindec(substr($binitem, $offset-4, 5));
          $offset -= 5;
        }
        if ($item['description'] == "body") { // not that I have an item that will make it here...
          $item['monsterid'] == bindec(substr($binitem, $offset-9, 10));
          $offset -= 10;
        }
      }

      // magic item
      if ($item['quality'] == 4) {
        $item['magicprefix'] = bindec(substr($binitem, $offset-10, 11));
        $item['magicsuffix'] = bindec(substr($binitem, $offset-21, 11));
        $offset -= 22;
      }

      // set item
      if ($item['quality'] == 5) {
        $item['setid'] = bindec(substr($binitem, $offset-11, 12));
        $offset -= 12;
      }

      // rare or crafted item
      if ($item['quality'] == 6 || $item['quality'] == 8) {
        $item['rareword1'] = bindec(substr($binitem, $offset-7, 8));
        $item['rareword2'] = bindec(substr($binitem, $offset-15, 8));
        $offset -= 16;

        if (substr($binitem, $offset, 1) == 1) {
          $item['rareprefix1'] = bindec(substr($binitem, $offset-11, 11));
          $offset -= 11;
        }
        $offset--;

        if (substr($binitem, $offset, 1) == 1) {
          $item['raresuffix1'] = bindec(substr($binitem, $offset-11, 11));
          $offset -= 11;
        }
        $offset--;

        if (substr($binitem, $offset, 1) == 1) {
          $item['rareprefix2'] = bindec(substr($binitem, $offset-11, 11));
          $offset -= 11;
        }
        $offset--;

        if (substr($binitem, $offset, 1) == 1) {
          $item['raresuffix2'] = bindec(substr($binitem, $offset-11, 11));
          $offset -= 11;
        }
        $offset--;

        if (substr($binitem, $offset, 1) == 1) {
          $item['rareprefix3'] = bindec(substr($binitem, $offset-11, 11));
          $offset -= 11;
        }
        $offset--;

        if (substr($binitem, $offset, 1) == 1) {
          $item['raresuffix3'] = bindec(substr($binitem, $offset-11, 11));
          $offset -= 11;
        }
        $offset--;
      }

      // unique item
      if ($item['quality'] == 7) {
        $item['uniqueid'] = bindec(substr($binitem, $offset-11, 12));
        $offset -= 12;
      }

      // tempered items?
      if ($item['quality'] == 9) {
        $item['rareword1'] = bindec(substr($binitem, $offset-7, 8));
        $item['rareword2'] = bindec(substr($binitem, $offset-15, 8));
        $offset -= 16;
      }

      // rune word
      if ($item['hasruneword'] == 1) {
        $item['runeword'] = runeword_decode(bindec(substr($binitem, $offset-15, 16)));
        $offset -= 16;
      }

      // personalized
      if ($item['ispersonalized'] == 1) {
        $itemname = $letter = "";
        $letters = 0;
        while ( ($letters < 15) && ($letter != chr(0)) ) {
          $letter = chr(bindec(substr($binitem, $offset-6, 7)));
          $itemname = $itemname . $letter;
          $letters++;
          $offset -= 7;
        }
        $item['itemname'] = substr($itemname, 0, -1);
      }

    }

    if ($item['description'] == "gold") {
      $item['goldflag'] = substr($binitem, $offset, 1);
      $offset--;
      if ($item['goldflag']) {
        $item['gold'] = bindec(substr($binitem, $offset-11, 12));
        $offset -= 12;
      } else {
        $item['gold'] = bindec(substr($binitem, $offset-31, 32));
        $offset -= 32;
      }
    }

    // Time Stamp Flag
    if (substr($binitem, $offset, 1) == 1) {
      $item['rand1'] = str_pad(dechex(bindec(substr($binitem, $offset-31, 32))), 8, '0', STR_PAD_LEFT);
      $item['rand2'] = str_pad(dechex(bindec(substr($binitem, $offset-63, 32))), 8, '0', STR_PAD_LEFT);
      $item['rand3'] = str_pad(dechex(bindec(substr($binitem, $offset-95, 32))), 8, '0', STR_PAD_LEFT);
      $offset -= 96;
    }
    $offset--;
    
    if ($item['issimple'] == 0) {

      // defense rating (base)
      if ($item['description'] == "armo" || $item['description'] == "shld") {
        $item['defense'] = bindec(substr($binitem, $offset-10, 11)) - 10;
        $offset -= 11;
      }

      // durability
      if ($item['description'] == "armo" || $item['description'] == "shld" || $item['description'] == "weap") {
        $item['maxdurability'] = bindec(substr($binitem, $offset-7, 8));
          $offset -= 8;
        if ($item['maxdurability'] > 0) {
          $item['curdurability'] = bindec(substr($binitem, $offset-8, 9));
          $offset -= 9;
        }
      }

      // quantity
      if ($item['stacked']) {
        $item['quantity'] = bindec(substr($binitem, $offset-8, 9));
        $offset -= 9;
      }

      // number of sockets
      if ($item['issocketed']) {
        $item['socketcount'] = bindec(substr($binitem, $offset-3, 4));
        $offset -= 4;
      }

      // number of magic property lists for set items
      if ($item['quality'] == 5) {
        $item['setlists'] = bindec(substr($binitem, $offset-4, 5));
        $offset -= 5;
      }

      $magiccount = 0;
      $magicproperty = '';
      $magicid = bindec(substr($binitem, $offset-8, 9));
      while ($magicid != 511 || $offset < 0) {
        $newoffset = magic_properties ($magicid, $binitem, $offset-9, $magicproperty, $level);
        if ($newoffset == $offset-9) break;
        $offset = $newoffset;
//        $item["magicproperty".$magiccount] = $magicid ." ". $magicproperty;
        $item["magicproperty".$magiccount] = $magicproperty;
        $magicid = bindec(substr($binitem, $offset-8, 9));
        if ($magiccount > 20) break;
        $magiccount++;
      }
      $offset -= 9;

      $lastmagicproperty = '';
      if ($item['isethereal']) $lastmagicproperty = "Ethereal (Cannot be Repaired), ";
      if ($item['issocketed']) $lastmagicproperty .= "Socketed (". $item['socketcount'] ."), ";
      if ($lastmagicproperty != "") {
        $item["magicproperty".$magiccount] = substr($lastmagicproperty, 0, -2);
        $magiccount++;
      }
      $item['magiccount'] = $magiccount;

    }

    if ($item['hasruneword'] == 1) {
//      $magiccount = 0;
      $magicproperty = '';
      $magicid = bindec(substr($binitem, $offset-8, 9));
      while ($magicid != 511 || $offset < 0) {
        $newoffset = magic_properties ($magicid, $binitem, $offset-9, $magicproperty, $level);
        if ($newoffset == $offset-9) break;
        $offset = $newoffset;
//        $item["magicproperty".$magiccount] = $magicid ." ". $magicproperty;
        $item["magicproperty".$magiccount] = $magicproperty;
        $magicid = bindec(substr($binitem, $offset-8, 9));
        if ($magiccount > 20) break;
        $magiccount++;
      }
      $item['magiccount'] = $magiccount;
    }

    if ($item['issocketed'] == 1) {
      for ($i=0;$i<$item['itemsinsockets'];$i++) {
        $socketitem = array();
        $socketend = strpos ($rawdata, 'JM', $socketstart);  // if there is a golem, this might break for the merc
        if ($socketend === false) $socketend = $mercend;
        $socketstart = item_decode($socketstart, $socketend, $rawdata, $data, $socketitem, $mercend, $level);
        $socketstart = $socketend + 2;
        $item["socket".$i] = array_merge($socketitem[0]);
      }
    }
  }

  array_push($items, $item);
//  return ($endpos + 2);
  return $socketstart;
}



?>