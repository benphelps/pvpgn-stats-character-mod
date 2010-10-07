<?php
//if ( !defined('LOAD_INC') ) { header('Location: http://your.ladder.page/'); exit; }

function skill_decode ($skill) {
  if ($skill >= 32768) $skill -= 32768;		# high bit = left click hot key
  switch ($skill) {

    // Some common skills
    case 0:
      return array("Attack", 7);
      break;
    case 1:
      return array("Kick", 7);
      break;
    case 2:
      return array("Throw", 7);
      break;
    case 3:
      return array("Unsummon", 7);
      break;
    case 4:
      return array("Left Hand Throw", 7);
      break;
    case 5:
      return array("Left Hand Swing", 7);
      break;
    case 217:
      return array("Scroll of Identify", 7);
      break;
    case 218:
      return array("Tome of Identify", 7);
      break;
    case 219:
      return array("Scroll of Town Portal", 7);
      break;
    case 220:
      return array("Tome of Town Portal", 7);
      break;
//    case 65535:	# subtracted 32768 above
    case 32767:
//      return array("No skill selected", 7);
      return array("", 7);
      break;

    // Amazon Bow and Crossbow Skills
    case 6:
      return array("Magic Arrow", 0);
      break;
    case 7:
      return array("Fire Arrow", 0);
      break;
    case 11:
      return array("Cold Arrow", 0);
      break;
    case 12:
      return array("Multiple Shot", 0);
      break;
    case 16:
      return array("Exploding Arrow", 0);
      break;
    case 21:
      return array("Ice Arrow", 0);
      break;
    case 22:
      return array("Guided Arrow", 0);
      break;
    case 26:
      return array("Strafe", 0);
      break;
    case 27:
      return array("Immolation Arrow", 0);
      break;
    case 31:
      return array("Freezing Arrow", 0);
      break;
    // Amazon Passive and Magic Skills
    case 8:
      return array("Inner Sight", 0);
      break;
    case 9:
      return array("Critical Strike", 0);
      break;
    case 13:
      return array("Dodge", 0);
      break;
    case 17:
      return array("Slow Missiles", 0);
      break;
    case 18:
      return array("Avoid", 0);
      break;
    case 23:
      return array("Penetrate", 0);
      break;
    case 28:
      return array("Dopplezon", 0);
      break;
    case 29:
      return array("Evade", 0);
      break;
    case 32:
      return array("Valkyrie", 0);
      break;
    case 33:
      return array("Pierce", 0);
      break;
    // Amazon Javelin and Spear Skills
    case 10:
      return array("Jab", 0);
      break;
    case 14:
      return array("Power Strike", 0);
      break;
    case 15:
      return array("Poison Javelin", 0);
      break;
    case 19:
      return array("Impale", 0);
      break;
    case 20:
      return array("Lightning Bolt", 0);
      break;
    case 24:
      return array("Charged Strike", 0);
      break;
    case 25:
      return array("Plague Javelin", 0);
      break;
    case 30:
      return array("Fend", 0);
      break;
    case 34:
      return array("Lightning Strike", 0);
      break;
    case 35:
      return array("Lightning Fury", 0);
      break;

    // Sorceress Fire Spells
    case 36:
      return array("Fire Bolt", 1);
      break;
    case 37:
      return array("Warmth", 1);
      break;
    case 41:
      return array("Inferno", 1);
      break;
    case 46:
      return array("Blaze", 1);
      break;
    case 47:
      return array("Fire Ball", 1);
      break;
    case 51:
      return array("Fire Wall", 1);
      break;
    case 52:
      return array("Enchant", 1);
      break;
    case 56:
      return array("Meteor", 1);
      break;
    case 61:
      return array("Fire Mastery", 1);
      break;
    case 62:
      return array("Hydra", 1);
      break;
    // Sorceress Lightning Spells
    case 38:
      return array("Charged Bolt", 1);
      break;
    case 42:
      return array("Static Field", 1);
      break;
    case 43:
      return array("Telekinesis", 1);
      break;
    case 48:
      return array("Nova", 1);
      break;
    case 49:
      return array("Lightning", 1);
      break;
    case 53:
      return array("Chain Lightning", 1);
      break;
    case 54:
      return array("Teleport", 1);
      break;
    case 57:
      return array("Thunder Storm", 1);
      break;
    case 58:
      return array("Energy Shield", 1);
      break;
    case 63:
      return array("Lightning Mastery", 1);
      break;
    // Sorceress Cold Spells
    case 39:
      return array("Ice Bolt", 1);
      break;
    case 40:
      return array("Frozen Armor", 1);
      break;
    case 44:
      return array("Frost Nova", 1);
      break;
    case 45:
      return array("Ice Blast", 1);
      break;
    case 50:
      return array("Shiver Armor", 1);
      break;
    case 55:
      return array("Glacial Spike", 1);
      break;
    case 59:
      return array("Blizzard", 1);
      break;
    case 60:
      return array("Chilling Armor", 1);
      break;
    case 64:
      return array("Frozen Orb", 1);
      break;
    case 65:
      return array("Cold Mastery", 1);
      break;

    // Necromancer Curses
    case 66:
      return array("Amplify Damage", 2);
      break;
    case 71:
      return array("Dim Vision", 2);
      break;
    case 72:
      return array("Weaken", 2);
      break;
    case 76:
      return array("Iron Maiden", 2);
      break;
    case 77:
      return array("Terror", 2);
      break;
    case 81:
      return array("Confuse", 2);
      break;
    case 82:
      return array("Life Tap", 2);
      break;
    case 86:
      return array("Attract", 2);
      break;
    case 87:
      return array("Decrepify", 2);
      break;
    case 91:
      return array("Lower Resist", 2);
      break;
    // Necromancer Poison and Bone Spells
    case 67:
      return array("Teeth", 2);
      break;
    case 68:
      return array("Bone Armor", 2);
      break;
    case 73:
      return array("Poison Dagger", 2);
      break;
    case 74:
      return array("Corpse Explosion", 2);
      break;
    case 78:
      return array("Bone Wall", 2);
      break;
    case 83:
      return array("Poison Explosion", 2);
      break;
    case 84:
      return array("Bone Spear", 2);
      break;
    case 88:
      return array("Bone Prison", 2);
      break;
    case 92:
      return array("Poison Nova", 2);
      break;
    case 93:
      return array("Bone Spirit", 2);
      break;
    // Necromancer Summoning Spells
    case 69:
      return array("Skeleton Mastery", 2);
      break;
    case 70:
      return array("Raise Skeleton", 2);
      break;
    case 75:
      return array("Clay Golem", 2);
      break;
    case 79:
      return array("Golem Mastery", 2);
      break;
    case 80:
      return array("Raise Skeletal Mage", 2);
      break;
    case 85:
      return array("Blood Golem", 2);
      break;
    case 89:
      return array("Summon Resist", 2);
      break;
    case 90:
      return array("Iron Golem", 2);
      break;
    case 94:
      return array("Fire Golem", 2);
      break;
    case 95:
      return array("Revive", 2);
      break;

    // Paladin Combat Skills
    case 96:
      return array("Sacrifice", 3);
      break;
    case 97:
      return array("Smite", 3);
      break;
    case 101:
      return array("Holy Bolt", 3);
      break;
    case 106:
      return array("Zeal", 3);
      break;
    case 107:
      return array("Charge", 3);
      break;
    case 111:
      return array("Vengeance", 3);
      break;
    case 112:
      return array("Blessed Hammer", 3);
      break;
    case 116:
      return array("Conversion", 3);
      break;
    case 117:
      return array("Holy Shield", 3);
      break;
    case 121:
      return array("Fist of the Heavens", 3);
      break;
    // Paladin Offensive Auras
    case 98:
      return array("Might", 3);
      break;
    case 102:
      return array("Holy Fire", 3);
      break;
    case 103:
      return array("Thorns", 3);
      break;
    case 108:
      return array("Blessed Aim", 3);
      break;
    case 113:
      return array("Concentration", 3);
      break;
    case 114:
      return array("Holy Freeze", 3);
      break;
    case 118:
      return array("Holy Shock", 3);
      break;
    case 119:
      return array("Sanctuary", 3);
      break;
    case 122:
      return array("Fanaticism", 3);
      break;
    case 123:
      return array("Conviction", 3);
      break;
    // Paladin Defensive Auras
    case 99:
      return array("Prayer", 3);
      break;
    case 100:
      return array("Resist Fire", 3);
      break;
    case 104:
      return array("Defiance", 3);
      break;
    case 105:
      return array("Resist Cold", 3);
      break;
    case 109:
      return array("Cleansing", 3);
      break;
    case 110:
      return array("Resist Lightning", 3);
      break;
    case 115:
      return array("Vigor", 3);
      break;
    case 120:
      return array("Meditation", 3);
      break;
    case 124:
      return array("Redemption", 3);
      break;
    case 125:
      return array("Salvation", 3);
      break;

    // Barbarian Combat Skills
    case 126:
      return array("Bash", 4);
      break;
    case 132:
      return array("Leap", 4);
      break;
    case 133:
      return array("Double Swing", 4);
      break;
    case 139:
      return array("Stun", 4);
      break;
    case 140:
      return array("Double Throw", 4);
      break;
    case 143:
      return array("Leap Attack", 4);
      break;
    case 144:
      return array("Concentrate", 4);
      break;
    case 147:
      return array("Frenzy", 4);
      break;
    case 151:
      return array("Whirlwind", 4);
      break;
    case 152:
      return array("Bezerk", 4);
      break;
    // Barbarian Combat Masteries
    case 127:
      return array("Sword Mastery", 4);
      break;
    case 128:
      return array("Axe Mastery", 4);
      break;
    case 129:
      return array("Mace Mastery", 4);
      break;
    case 134:
      return array("Pole Arm Mastery", 4);
      break;
    case 135:
      return array("Throwing Mastery", 4);
      break;
    case 136:
      return array("Spear Mastery", 4);
      break;
    case 141:
      return array("Increased Stamina", 4);
      break;
    case 145:
      return array("Iron Skin", 4);
      break;
    case 148:
      return array("Increased Speed", 4);
      break;
    case 153:
      return array("Natural Resistance", 4);
      break;
    // Barbarian Warcries
    case 130:
      return array("Howl", 4);
      break;
    case 131:
      return array("Find Potion", 4);
      break;
    case 137:
      return array("Taunt", 4);
      break;
    case 138:
      return array("Shout", 4);
      break;
    case 142:
      return array("Find Item", 4);
      break;
    case 146:
      return array("Battle Cry", 4);
      break;
    case 149:
      return array("Battle Orders", 4);
      break;
    case 150:
      return array("Grim Ward", 4);
      break;
    case 154:
      return array("War Cry", 4);
      break;
    case 155:
      return array("Battle Command", 4);
      break;

    // Druid Summoning
    case 221:
      return array("Raven", 5);
      break;
    case 222:
      return array("Plague Poppy", 5);
      break;
    case 226:
      return array("Oak Sage", 5);
      break;
    case 227:
      return array("Summon Spirit", 5);
      break;
    case 231:
      return array("Cycle of Life", 5);
      break;
    case 236:
      return array("Heart of Wolverine", 5);
      break;
    case 237:
      return array("Summon Fenris", 5);
      break;
    case 241:
      return array("Vines", 5);
      break;
    case 246:
      return array("Spirit of Barbs", 5);
      break;
    case 247:
      return array("Summon Grizzly", 5);
      break;
    // Druid Shape Shifting
    case 223:
      return array("Wearwolf", 5);
      break;
    case 224:
      return array("Shape Shifting", 5);
      break;
    case 228:
      return array("Wearbear", 5);
      break;
    case 232:
      return array("Feral Rage", 5);
      break;
    case 233:
      return array("Maul", 5);
      break;
    case 238:
      return array("Rabies", 5);
      break;
    case 239:
      return array("Fire Claws", 5);
      break;
    case 242:
      return array("Hunger", 5);
      break;
    case 243:
      return array("Shock Wave", 5);
      break;
    case 248:
      return array("Fury", 5);
      break;
    // Druid Elemental
    case 225:
      return array("Firestorm", 5);
      break;
    case 229:
      return array("Molten Boulder", 5);
      break;
    case 230:
      return array("Arctic Blast", 5);
      break;
    case 234:
      return array("Eruption", 5);
      break;
    case 235:
      return array("Cyclone Armor", 5);
      break;
    case 240:
      return array("Twister", 5);
      break;
    case 244:
      return array("Volcano", 5);
      break;
    case 245:
      return array("Tornado", 5);
      break;
    case 249:
      return array("Armageddon", 5);
      break;
    case 250:
      return array("Hurricane", 5);
      break;

    // Assassin Traps
    case 251:
      return array("Fire Trauma", 6);
      break;
    case 256:
      return array("Shock Field", 6);
      break;
    case 257:
      return array("Blade Sentinel", 6);
      break;
    case 261:
      return array("Charged Bolt Sentry", 6);
      break;
    case 262:
      return array("Wake of Fire Sentry", 6);
      break;
    case 266:
      return array("Blade Fury", 6);
      break;
    case 271:
      return array("Lightning Sentry", 6);
      break;
    case 272:
      return array("Inferno Sentry", 6);
      break;
    case 276:
      return array("Death Sentry", 6);
      break;
    case 277:
      return array("Blade Shield", 6);
      break;
    // Assassin Shadow Disciplines
    case 252:
      return array("Claw Mastery", 6);
      break;
    case 253:
      return array("Psychic Hammer", 6);
      break;
    case 258:
      return array("Quickness", 6);
      break;
    case 263:
      return array("Weapon Block", 6);
      break;
    case 264:
      return array("Cloak of Shadows", 6);
      break;
    case 267:
      return array("Fade", 6);
      break;
    case 268:
      return array("Shadow Warrior", 6);
      break;
    case 273:
      return array("Mind Blast", 6);
      break;
    case 278:
      return array("Venom", 6);
      break;
    case 279:
      return array("Shadow Master", 6);
      break;
    // Assassin Martial Arts
    case 254:
      return array("Tiger Strike", 6);
      break;
    case 255:
      return array("Dragon Talon", 6);
      break;
    case 259:
      return array("Fists of Fire", 6);
      break;
    case 260:
      return array("Dragon Claw", 6);
      break;
    case 265:
      return array("Cobra Strike", 6);
      break;
    case 269:
      return array("Claws of Thunder", 6);
      break;
    case 270:
      return array("Dragon Tail", 6);
      break;
    case 274:
      return array("Blades of Ice", 6);
      break;
    case 275:
      return array("Dragon Flight", 6);
      break;
    case 280:
      return array("Royal Strike", 6);
      break;

    default:
      return array("unknown skill " . $skill, 7);
  }
}

?>
