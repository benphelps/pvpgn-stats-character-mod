<?php
//if ( !defined('LOAD_INC') ) { header('Location: http://your.ladder.page/'); exit; }

function runeword_decode ($number) {

  if($number == 0xFFFF) return "Ith";

  if( (($number&0xFF)-26) >= 80) $number++;

  $runeword = ($number&0xFF)-26;

  switch ($runeword) {
    case 1:
      return "Ancient's Pledge";
      break;
    case 2:
      return "Armageddon";
      break;
    case 3:
      return "Authority";
      break;
    case 4:
      return "The Beast";
      break;
    case 5:
      return "Beauty";
      break;
    case 6:
      return "Black";
      break;
    case 7:
      return "Blood";
      break;
    case 8:
      return "Bone";
      break;
    case 9:
      return "Bramble";
      break;
    case 10:
      return "Brand";
      break;
    case 11:
      return "Breath of the Dying";
      break;
    case 12:
      return "Broken Promise";
      break;
    case 13:
      return "Call to Arms";
      break;
    case 14:
      return "Chains of Honor";
      break;
    case 15:
      return "Chance";
      break;
    case 16:
      return "Chaos";
      break;
    case 17:
      return "Crescent Moon";
      break;
    case 18:
      return "Darkness";
      break;
    case 19:
      return "Daylight";
      break;
    case 20:
      return "Death";
      break;
    case 21:
      return "Deception";
      break;
    case 22:
      return "Delirium";
      break;
    case 23:
      return "Desire";
      break;
    case 24:
      return "Despair";
      break;
    case 25:
      return "Destruction";
      break;
    case 26:
      return "Doomsayer";
      break;
    case 27:
      return "Dragon";
      break;
    case 28:
      return "Dread";
      break;
    case 29:
      return "Dream";
      break;
    case 30:
      return "Duress";
      break;
    case 31:
      return "Edge";
      break;
    case 32:
      return "Destiny's Daughter";
      break;
    case 33:
      return "Enigma";
      break;
    case 34:
      return "Enlightenment";
      break;
    case 35:
      return "Envy";
      break;
    case 36:
      return "Eternity";
      break;
    case 37:
      return "Exile's Path";
      break;
    case 38:
      return "Faith";
      break;
    case 39:
      return "Famine";
      break;
    case 40:
      return "Flickering Flame";
      break;
    case 41:
      return "Fortitude";
      break;
    case 42:
      return "Fortune's Favor";
      break;
    case 43:
      return "Amity";
      break;
    case 44:
      return "Fury";
      break;
    case 45:
      return "Gloom";
      break;
    case 46:
      return "Glory";
      break;
    case 47:
      return "Widowmaker";
      break;
    case 48:
      return "Hand of Justice";
      break;
    case 49:
      return "Harmony";
      break;
    case 50:
      return "Hatred";
      break;
    case 51:
      return "Heart of the Oak";
      break;
    case 52:
      return "Heaven's Will";
      break;
    case 53:
      return "Holy Tears";
      break;
    case 54:
      return "Holy Thunder";
      break;
    case 55:
      return "Honor";
      break;
    case 56:
      return "Dweomer";
      break;
    case 57:
      return "Humility";
      break;
    case 58:
      return "Hunger";
      break;
    case 59:
      return "Ice";
      break;
    case 60:
      return "Infinity";
      break;
    case 61:
      return "Innocence";
      break;
    case 62:
      return "Insight";
      break;
    case 63:
      return "Jealousy";
      break;
    case 64:
      return "Judgment";
      break;
    case 65:
      return "King's Grace";
      break;
    case 66:
      return "Kingslayer";
      break;
    case 67:
      return "Knight's Vigil";
      break;
    case 68:
      return "Thirst for Knowledge";
      break;
    case 69:
      return "Last Wish";
      break;
    case 70:
      return "Law";
      break;
    case 71:
      return "Lawbringer";
      break;
    case 72:
      return "Leaf";
      break;
    case 73:
      return "Lightning";
      break;
    case 74:
      return "Lionheart";
      break;
    case 75:
      return "Lore";
      break;
    case 76:
      return "The Lovers";
      break;
    case 77:
      return "Loyalty";
      break;
    case 78:
      return "Lust";
      break;
    case 79:
      return "Madness";
      break;
    case 81:
      return "Malice";
      break;
    case 82:
      return "Melody";
      break;
    case 83:
      return "Memory";
      break;
    case 84:
      return "Mist";
      break;
    case 85:
      return "Morning Dew";
      break;
    case 86:
      return "Mystery";
      break;
    case 87:
      return "Myth";
      break;
    case 88:
      return "Nadir";
      break;
    case 89:
      return "Nature's Kingdom";
      break;
    case 90:
      return "Nightfall";
      break;
    case 91:
      return "Oath";
      break;
    case 92:
      return "Obedience";
      break;
    case 93:
      return "Oblivion";
      break;
    case 94:
      return "Obsession";
      break;
    case 95:
      return "Passion";
      break;
    case 95:
      return "Patience";
      break;
    case 97:
      return "Pattern";
      break;
    case 98:
      return "Peace";
      break;
    case 99:
      return "Winter";
      break;
    case 100:
      return "Penitence";
      break;
    case 101:
      return "Peril";
      break;
    case 102:
      return "Pestilence";
      break;
    case 103:
      return "Phoenix";
      break;
    case 104:
      return "Piety";
      break;
    case 105:
      return "Pillar of Faith";
      break;
    case 106:
      return "Plague";
      break;
    case 107:
      return "Praise";
      break;
    case 108:
      return "Prayer";
      break;
    case 109:
      return "Pride";
      break;
    case 110:
      return "Principle";
      break;
    case 111:
      return "Prowess in Battle";
      break;
    case 112:
      return "Prudence";
      break;
    case 113:
      return "Punishment";
      break;
    case 114:
      return "Purity";
      break;
    case 115:
      return "Question";
      break;
    case 116:
      return "Radiance";
      break;
    case 117:
      return "Rain";
      break;
    case 118:
      return "Reason";
      break;
    case 119:
      return "Red";
      break;
    case 120:
      return "Rhyme";
      break;
    case 121:
      return "Rift";
      break;
    case 122:
      return "Sanctuary";
      break;
    case 123:
      return "Serendipity";
      break;
    case 124:
      return "Shadow";
      break;
    case 125:
      return "Shadow of Doubt";
      break;
    case 126:
      return "Silence";
      break;
    case 127:
      return "Siren's Song";
      break;
    case 128:
      return "Smoke";
      break;
    case 129:
      return "Sorrow";
      break;
    case 130:
      return "Spirit";
      break;
    case 131:
      return "Splendor";
      break;
    case 132:
      return "Starlight";
      break;
    case 133:
      return "Stealth";
      break;
    case 134:
      return "Steel";
      break;
    case 135:
      return "Still Water";
      break;
    case 136:
      return "Sting";
      break;
    case 137:
      return "Stone";
      break;
    case 138:
      return "Storm";
      break;
    case 139:
      return "Strength";
      break;
    case 140:
      return "Tempest";
      break;
    case 141:
      return "Temptation";
      break;
    case 142:
      return "Terror";
      break;
    case 143:
      return "Thirst";
      break;
    case 144:
      return "Thought";
      break;
    case 145:
      return "Thunder";
      break;
    case 146:
      return "Time";
      break;
    case 147:
      return "Tradition";
      break;
    case 148:
      return "Treachery";
      break;
    case 149:
      return "Trust";
      break;
    case 150:
      return "Truth";
      break;
    case 151:
      return "Unbending Will";
      break;
    case 152:
      return "Valor";
      break;
    case 153:
      return "Vengeance";
      break;
    case 154:
      return "Venom";
      break;
    case 155:
      return "Victory";
      break;
    case 156:
      return "Voice";
      break;
    case 157:
      return "Void";
      break;
    case 158:
      return "War";
      break;
    case 159:
      return "Water";
      break;
    case 160:
      return "Wealth";
      break;
    case 161:
      return "Whisper";
      break;
    case 162:
      return "White";
      break;
    case 163:
      return "Wind";
      break;
    case 164:
      return "Wings of Hope";
      break;
    case 165:
      return "Wisdom";
      break;
    case 166:
      return "Woe";
      break;
    case 167:
      return "Wonder";
      break;
    case 168:
      return "Wrath";
      break;
    case 169:
      return "Youth";
      break;
    case 170:
      return "Zephyr";
      break;

    default:
      return "";
  }
}

?>
