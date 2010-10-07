<?php
    define('LOAD_INC', true);
    $path = 'd:/pvpgn/var/charsave/';

  // check for input and clean it up
  if (isset($_REQUEST["name"]) && $_REQUEST["name"] != "") {
    $character = preg_replace('~[^-a-z0-9\-_\[\]]+~', '', strtolower(substr($_REQUEST["name"], 0, 15)));
    $file = $path . $character;
    include_once('includes/decode.php');
	include_once('class_skills.php');
  }

  foreach ($skillnames as $k => $v) {
  //echo $k . " => array ( 'name' => '" . $v . "' , 'tree' =>  , 'position' => '' ) ,\n" ;
  }
  //die();
?>
<HTML><HEAD><TITLE>PvPGN Server Ladders</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1251">
<LINK href="themes/bnet/res/war3-human-ie.css" type=text/css rel=stylesheet>
<LINK href="themes/bnet/res/war3-ladder-ranking.css" type=text/css rel=stylesheet>
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.idTabs.min.js"></script>
<LINK href="css/disabled-tree.css" type="text/css" rel=stylesheet>
<LINK href="skills.css" type="text/css" rel=stylesheet>
<LINK href="css/charstats.css" type="text/css" rel=stylesheet>
<LINK href="css/enabled-tree.css" type="text/css" rel=stylesheet>
<LINK href="css/waypoints.css" type="text/css" rel=stylesheet>
<META content="MSHTML 6.00.2800.1106" name=GENERATOR><style type="text/css">
<!--
a:visited {
	color: #cba300;
}

#treeimage {
	border: 0;
}

#treecont{
	width: 692px;
	height: 431px;
	overflow: hidden;
	margin: auto;
	font-size: 12px;
	position: relative;
	text-align: right;
}
#treecont span {
	width: 12px;
	font-size: 12px;
	font-weight: bold;
	color: #FFF;
}

.enabled-skill, .disabled-skill {
	position: absolute;
}

#treecont span.disabled-skill {
	background-color: #000;
	opacity: 0.50;
	display: block;
	width: 50px;
	height: 50px;
}

.clear {
	clear: both;
}
-->
</style></HEAD>
<BODY bgColor=#000000 leftMargin=0 topMargin=0 marginheight="0" marginwidth="0">
<SCRIPT language=JavaScript 
src="themes/bnet/res/layerFunctions.js"></SCRIPT>

<SCRIPT language=JavaScript 
src="themes/bnet/res/detection2.js"></SCRIPT>

<SCRIPT language=JavaScript 
src="themes/bnet/res/detection.js"></SCRIPT>

<DIV id=mouseTrap 
style="Z-INDEX: 50; VISIBILITY: hidden; WIDTH: 785px; POSITION: absolute; TEXT-ALIGN: center; left: 79px; height: 189px;"><A 
onmouseover="javascript:hideLayer('wbnMenu'); hideLayer('rocMenu'); hideLayer('ftMenu');hideLayer('scMenu');hideLayer('scxMenu');hideLayer('d2Menu');hideLayer('d2xMenu'); hideLayer('mouseTrap');" 
href="stats.php?game=&amp;type="><IMG height=176 
src="themes/bnet/res/pixel.gif" width=100% border=0></A></DIV>
<TABLE class=mainTable height="100%" cellSpacing=0 cellPadding=0 width="100%" 
border=0>
  <TBODY>
  <TR height=75>
    <TD 
    style="BACKGROUND-POSITION: left 50%; BACKGROUND-IMAGE: url(themes/bnet/res/right-bg.gif); BACKGROUND-REPEAT: repeat-y" 
    vAlign=top colSpan=3>
      <TABLE cellSpacing=0 cellPadding=0 
      background="themes/bnet/res/top-bg.gif" border=0>
        <TBODY>
        <TR>
          <TD width=15><IMG height=75 
            src="themes/bnet/res/top-left.gif" width=15></TD>
          <TD align=middle width="100%">

            <TABLE cellSpacing=0 cellPadding=0 width=875 
            background="themes/bnet/res/GS_Ladders.gif" border=0>
              <TBODY>
              <TR>
                <TD width="58" rowSpan=3>&nbsp;</TD>
                <TD width="723"><IMG height=33 src="themes/bnet/res/pixel.gif" 
                  width=371 useMap=#header_map2 border=0></TD></TR>
              <TR>
                <TD>
                  <TABLE cellSpacing=0 cellPadding=0  border=0 width="756">
                    <TBODY>

                    <TR>
                      <TD width="94" vAlign=top>
                        <DIV id=wbnMenu 
                        style="Z-INDEX: 100; VISIBILITY: hidden; WIDTH: 108px; POSITION: absolute">
                        <TABLE cellSpacing=0 cellPadding=0 width="110">
                          <TBODY>
                          <TR>
                            <TD class=headerOutline width="100%" 
                              bgColor=black>
							  <TABLE width="100%" cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>

                                <TR>
                                <TD class=menuHeader><SMALL><A class=button 
                                href="stats.php?game=W2BN&type=0"><IMG 
                                height=7
                                src="themes/bnet/res/pixel.gif" 
                                width="12" border=0>War 2 BNE<IMG height=7 
                                src="themes/bnet/res/pulldown-arrow.gif" 
                                1 border=0></A></SMALL></TD></TR>
                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=W2BN&type=0"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 border=0>Normal</A></SMALL></TD></TR>
                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=W2BN&type=1"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 border=0>Ladder</A></SMALL></TD></TR>
                                <TR>

				</TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
                        <TABLE cellSpacing=0 cellPadding=7 width="100%" 
border=0>
                          <TBODY>
                          <TR>
                            <TD><SMALL><A 
                              onmouseover="javascript:showLayer('wbnMenu'); showLayer('mouseTrap');" 
                              href="stats.php?game=W2BN&type=0">
							  <IMG height=7 width="12"
                              src="themes/bnet/res/pixel.gif" border=0>War 2 BNE<IMG height=7 
                              src="themes/bnet/res/pulldown-arrow.gif" 
                              1
                      border=0></A></SMALL></TD>
                          </TR></TBODY></TABLE></TD>
                      <TD width="104" vAlign=top>

                        <DIV id=rocMenu 
                        style="Z-INDEX: 100; VISIBILITY: hidden; WIDTH: 108px; POSITION: absolute">
                        <TABLE cellSpacing=0 cellPadding=0 width="110">
                          <TBODY>
                          <TR>
                            <TD class=headerOutline width="100%" 
                              bgColor=black>
							  <TABLE width="100%" cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=menuHeader><SMALL><A class=button 
                                href="stats.php?game=WAR3&type=solo"><IMG 
                                height=7
                                src="themes/bnet/res/pixel.gif" 
                                width="12" border=0>War III: ROC<IMG height=7 
                                src="themes/bnet/res/pulldown-arrow.gif" 
                                1 border=0></A></SMALL></TD></TR>

                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=WAR3&type=solo"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 border=0>Solo</A></SMALL></TD></TR>
                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=WAR3&type=team"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 border=0>Team</A></SMALL></TD></TR>
                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=WAR3&type=ffa"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 
                                border=0>FFA</A></SMALL></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
                        <TABLE cellSpacing=0 cellPadding=7 width="100%" 
border=0>

                          <TBODY>
                          <TR>
                            <TD><SMALL><A 
                              onmouseover="javascript:showLayer('rocMenu'); showLayer('mouseTrap');" 
                              href="stats.php?game=WAR3&type=solo">
							  <IMG height=7 width="12"
                              src="themes/bnet/res/pixel.gif" border=0>War III: ROC<IMG height=7 
                              src="themes/bnet/res/pulldown-arrow.gif" 
                              1
                      border=0></A></SMALL></TD>
                          </TR></TBODY></TABLE></TD>
                        <TD width="96" vAlign=top >
                        <DIV id=ftMenu 
                        style="Z-INDEX: 100; VISIBILITY: hidden; WIDTH: 92px; POSITION: absolute">
                        <TABLE cellSpacing=0 cellPadding=0 width="100%">

                          <TBODY>
                          <TR>
                            <TD class=headerOutline width="100%" 
                              bgColor=black><TABLE cellSpacing=0 cellPadding=0 
                              width="100%" border=0>
                                <TBODY>
                                <TR>
                                <TD class=menuHeader><SMALL><A class=button 
                                href="stats.php?game=W3XP&type=solo"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=6 border=0>War III: TFT<IMG height=7 
                                src="themes/bnet/res/pulldown-arrow.gif" 
                                1 border=0></A></SMALL></TD></TR>
                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=W3XP&type=solo"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 border=0>Solo</A></SMALL></TD></TR>

                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=W3XP&type=team"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 border=0>Team</A></SMALL></TD></TR>
                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=W3XP&type=ffa"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3
                                border=0>FFA</A></SMALL></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
                        <TABLE cellSpacing=0 cellPadding=7 width="100%" 
border=0>
                          <TBODY>
                          <TR>
                            <TD><SMALL><A 
                              onmouseover="javascript:showLayer('ftMenu'); showLayer('mouseTrap');" 
                              href="stats.php?game=W3XP&type=solo"><IMG 
                              height=7 
                              src="themes/bnet/res/pixel.gif" 
                              width=6 border=0>War III: TFT<IMG height=7 
                              src="themes/bnet/res/pulldown-arrow.gif" 
                              1 
                      border=0></A></SMALL></TD></TR></TBODY></TABLE></TD>

                      <TD width="83" vAlign=top >
                        <DIV id=scxMenu 
                        style="Z-INDEX: 100; VISIBILITY: hidden; WIDTH: 91px; POSITION: absolute">
                        <TABLE cellSpacing=0 cellPadding=0 width="100%">
                          <TBODY>
                          <TR>
                            <TD class=headerOutline width="100%" 
                              bgColor=black><TABLE cellSpacing=0 cellPadding=0 
                              width="100%" border=0>
                                <TBODY>
                                <TR>
                                <TD class=menuHeader><SMALL><A class=button 
                                href="stats.php?game=SEXP&type=0"><IMG 
                                height=7
                                src="themes/bnet/res/pixel.gif" 
                                width=8 border=0>BroodWar<IMG height=7 
                                src="themes/bnet/res/pulldown-arrow.gif" 
                                1 border=0></A></SMALL></TD></TR>

                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=SEXP&type=0"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 border=0>Normal</A></SMALL></TD></TR>
                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=SEXP&type=1"><IMG 
                                height=7
                                src="themes/bnet/res/pixel.gif" 
                                width=3 
                                border=0>Ladder</A></SMALL></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
                        <TABLE cellSpacing=0 cellPadding=7 width="100%" 
border=0>
                          <TBODY>
                          <TR>
                            <TD><SMALL><A 
                              onmouseover="javascript:showLayer('scxMenu'); showLayer('mouseTrap');" 
                              href="stats.php?game=SEXP&type=0"><IMG 
                              height=7 
                              src="themes/bnet/res/pixel.gif" 
                              width=8 border=0>BroodWar<IMG height=7 
                              src="themes/bnet/res/pulldown-arrow.gif" 
                              1 
                      border=0></A></SMALL></TD></TR></TBODY></TABLE></TD>

                      
                        <TD vAlign=top width=93>
                        <DIV id=scMenu 
                        style="Z-INDEX: 100; VISIBILITY: hidden; WIDTH: 91px; POSITION: absolute">
                        <TABLE cellSpacing=0 cellPadding=0 width="100%">
                          <TBODY>
                          <TR>
                            <TD class=headerOutline width="100%" 
                              bgColor=black><TABLE cellSpacing=0 cellPadding=0 
                              width="100%" border=0>
                                <TBODY>
                                <TR>
                                <TD class=menuHeader><SMALL><A class=button 
                                href="stats.php?game=STAR&type=0"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=12 border=0>Starcraft<IMG height=7 
                                src="themes/bnet/res/pulldown-arrow.gif" 
                                1 border=0></A></SMALL></TD></TR>

                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=STAR&type=0"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 border=0>Normal</A></SMALL></TD></TR>
                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=STAR&type=1"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 
                                border=0>Ladder</A></SMALL></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
                        <TABLE cellSpacing=0 cellPadding=7 width="186%" 
border=0>
                          <TBODY>
                          <TR>
                            <TD><SMALL><A 
                              onmouseover="javascript:showLayer('scMenu'); showLayer('mouseTrap');" 
                              href="stats.php?game=STAR&type=0"><IMG 
                              height=7 
                              src="themes/bnet/res/pixel.gif" 
                              width=12 border=0>Starcraft<IMG height=7 
                              src="themes/bnet/res/pulldown-arrow.gif" 
                              1 
                      border=0></A></SMALL></TD></TR></TBODY></TABLE></TD>

                      
                      <TD width="89" vAlign=top>
                        <DIV id=d1Menu 
                        style="Z-INDEX: 100; VISIBILITY: hidden; WIDTH: 50px; POSITION: absolute">
                        <TABLE cellSpacing=0 cellPadding=0 width="100%">
                          <TBODY>
                          <TR>
                            <TD class=headerOutline width="100%" 
                              bgColor=black><TABLE cellSpacing=0 cellPadding=0 
                              width="100%" border=0>
                                <TBODY>
                                
                               
                                </TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
                        <TABLE cellSpacing=0 cellPadding=7 width="100%" 
border=0>

                          <TBODY>
                          <TR>
                            <TD><SMALL><A 
                              
                              href="stats.php?game=DRTL&type=0"><IMG 
                              height=7 
                              src="themes/bnet/res/pixel.gif" 
                              width=22 border=0>Diablo</A></SMALL></TD>
                          </TR></TBODY></TABLE></TD>

                      <TD width="91" vAlign=top 05>
                        <DIV id=d2Menu 
                        style="Z-INDEX: 100; VISIBILITY: hidden; WIDTH: 90px; POSITION: absolute">
                        <TABLE cellSpacing=0 cellPadding=0 width="100%">
                          <TBODY>

                          <TR>
                            <TD class=headerOutline width="100%" 
                              bgColor=black><TABLE cellSpacing=0 cellPadding=0 
                              width="100%" border=0>
                                <TBODY>
                                <TR>
                                <TD class=menuHeader><SMALL><A class=button 
                                href="stats.php?game=D2DV&type=SC"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=13 border=0>Diablo II<IMG height=7 
                                src="themes/bnet/res/pulldown-arrow.gif" 
                                1 border=0></A></SMALL></TD></TR>
                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=D2DV&type=SC"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 border=0>SoftCore</A></SMALL></TD></TR>
                                <TR>

                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=D2DV&type=HC"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 
                                border=0>HardCore</A></SMALL></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
                        <TABLE cellSpacing=0 cellPadding=7 width="100%" 
border=0>
                          <TBODY>
                          <TR>
                            <TD><SMALL><A 
                              onmouseover="javascript:showLayer('d2Menu'); showLayer('mouseTrap');" 
                              href="stats.php?game=D2DV&type=SC"><IMG 
                              height=7 
                              src="themes/bnet/res/pixel.gif" 
                              width=13 border=0>Diablo II<IMG height=7 
                              src="themes/bnet/res/pulldown-arrow.gif" 
                              1 border=0> 
                      </A></SMALL></TD></TR></TBODY></TABLE></TD>
                      <TD width="106" vAlign=top>
                        <DIV id=d2xMenu 
                        style="Z-INDEX: 100; VISIBILITY: hidden; WIDTH: 103px; POSITION: absolute">

                        <TABLE cellSpacing=0 cellPadding=0 width="100%">
                          <TBODY>
                          <TR>
                            <TD class=headerOutline width="100%" 
                              bgColor=black><TABLE cellSpacing=0 cellPadding=0 
                              width="100%" border=0>
                                <TBODY>
                                <TR>
                                <TD class=menuHeader><SMALL><A class=button 
                                href="stats.php?game=D2XP&type=SC"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=4 border=0>Diablo II: LOD<IMG height=7 
                                src="themes/bnet/res/pulldown-arrow.gif" 
                                1 border=0></A></SMALL></TD></TR>
                                <TR>

                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=D2XP&type=SC"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 border=0>SoftCore</A></SMALL></TD></TR>
                                <TR>
                                <TD class=menuHeader 
                                style="TEXT-ALIGN: center"><SMALL><A 
                                class=button 
                                href="stats.php?game=D2XP&type=HC"><IMG 
                                height=7 
                                src="themes/bnet/res/pixel.gif" 
                                width=3 
                                border=0>HardCore</A></SMALL></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV>
                        <TABLE cellSpacing=0 cellPadding=7 width="100%" 
border=0>
                          <TBODY>
                          <TR>
                            <TD><SMALL><A 
                              onmouseover="javascript:showLayer('d2xMenu'); showLayer('mouseTrap');" 
                              href="stats.php?game=D2XP&type=SC"><IMG 
                              height=7 
                              src="themes/bnet/res/pixel.gif" 
                              width=4 border=0>Diablo II: LOD<IMG height=7 
                              src="themes/bnet/res/pulldown-arrow.gif" 
                              1 border=0> 
                      </A></SMALL></TD>

                            </TR>
                      
                      
                      </TBODY></TABLE></TD></TR>
                      
                      
                      
                      
                      
                    <TR>
                      <TD width="94" 10><IMG height=4 
                        src="themes/bnet/res/pixel.gif" 
11></TD>
                      <TD width="104" ><IMG height=4 
                        src="themes/bnet/res/pixel.gif" ></TD>
                      <TD width=96><IMG height=4 
                        src="themes/bnet/res/pixel.gif" width=89></TD>
                      <TD width="83" ><IMG height=4 
                        src="themes/bnet/res/pixel.gif" ></TD>
                      <TD width="93" 05><IMG height=4 
                        src="themes/bnet/res/pixel.gif" 
                    05></TD></TR></TBODY></TABLE></TD></TR>
              <TR>

                <TD><IMG height=10 src="themes/bnet/res/pixel.gif" 
                  width=366></TD></TR></TBODY></TABLE></TD>
          <TD width=15><IMG height=75 
            src="themes/bnet/res/top-right.gif" 
        width=15></TD></TR>
        
        
        </TBODY></TABLE></TD></TR>

<TR>
    <TD 
    style="BACKGROUND-POSITION: left 50%; BACKGROUND-IMAGE: url(themes/bnet/res/left-bg.gif); BACKGROUND-REPEAT: repeat-y" 
    width=5><IMG height=1 src="GameServer Ladders_archivos/pixel.gif" 
    width=5></TD>
    <TD vAlign=top align=middle width="100%"> 
<!--- ***************************************************************************************** --->
<!--- ***************************************************************************************** --->
<!--- ***************************************************************************************** --->
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>        <td width="5">        <TR>          <TD colSpan=2 align=middle><TD vAlign=top align=middle width="100%"></TD>        </TR>  <TR>    <BR>      <TABLE cellSpacing=0 cellPadding=0 width="80%" border=0>        <TBODY>        <TR>          <TD><IMG height=1 src="" width=5></TD>          <TD>            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>              <TBODY>              <TR>                <TD                 background="themes/bnet/res/rankingborder-top.gif">                  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>                    <TBODY>                    <TR>                      <TD width=16><IMG height=14                         src="themes/bnet/res/rankingborder-top-left.gif"                         width=16></TD>                      <TD width="100%"><IMG height=14                         src="themes/bnet/res/pixel.gif"                         width=598></TD>                      <TD align=right width=16><IMG height=14                         src="themes/bnet/res/rankingborder-top-right.gif"                         width=16></TD></TR></TBODY></TABLE></TD></TR>              <TR>                <TD>                  <TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>                    <TBODY>                    <TR>                      <TD vAlign=bottom width=11                       background="themes/bnet/res/rankingborder-left.gif"><IMG                         height=10                         src="themes/bnet/res/rankingborder-left-bot.gif"                         width=11></TD>                      <TD width="100%">                        <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>                          <TBODY>                          <tr>                                                 <TD     background="themes/bnet/res/top-back.gif"     height=80><IMG height=100       src="themes/bnet/res/top-left1.gif"       width=140></TD>    <TD align=middle     background="themes/bnet/res/top-back.gif"     height=80><IMG height=100       src="themes/bnet/res/top-midleft1.gif"       width=79><IMG height=100       src="themes/bnet/res/top-center1.gif"       width=285><IMG height=100       src="themes/bnet/res/top-midright1.gif"       width=83></TD>    <TD align=right     background="themes/bnet/res/top-back.gif"     height=80><IMG height=100       src="themes/bnet/res/top-right1.gif"       width=139></TD>            </tr></table>                            

<?php


if ($MAGIC) {
	/*
  $options = "";
  if ($Hardcore) $options .= "Hardcore, ";
  if ($Ladder) $options .= "Ladder, ";
  if ($Expansion) $options .= "Expansion, ";
  if ($HasDied) $options .= "Has Died, ";
  if ($options != "") $options = substr($options, 0, -2);

  $Town = '';
  if ($Town1 != "") $Town = "Normal - $Town1";
  if ($Town2 != "") $Town = "Nightmare - $Town2";
  if ($Town3 != "") $Town = "Hell - $Town3";

  echo "$Title $Name - Level $Level $Class - $options<br />\n";
  if ($Town != "") echo "$Town<br />\n";
  if ($MercControl != 0 && $MercExp != 0) {
    echo "Hireling: $MercName from $MercDiff - Level $MercLevel - $MercType";
    if ($MercSkill != "") echo " - $MercSkill";
    if ($MercDead) echo " - Dead";
    echo "<br />\n";
  } else {
    echo "No Hireling<br />\n";
  }
  */

  echo '
	<br />
	<div id="cstats">
		<div id="charstats">
			<span id="charname">' . $Name . '</span>
			<span id="charclass">' . $Class . '</span>
			<span id="charlevel">' . $Level . '</span>
			<span id="charexp">' . number_format($Experience) . '</span>
			<span id="charstr">' . $Strength . '</span>
			<span id="chardex">' . $Dexterity . '</span>
			<span id="charvit">' . $Vitality . '</span>
			<span id="charene">' . $Energy . '</span>
			<span id="charcstam">' . $CurrentStamina . '</span>
			<span id="charmstam">' . $MaximumStamina . '</span>
			<span id="charclife">' . $CurrentLife . '</span>
			<span id="charmlife">' . $MaximumLife . '</span>
			<span id="charcmana">' . $CurrentMana . '</span>
			<span id="charmmana">' . $MaximumMana . '</span>
			<span id="charstp">' . $StatPoints . '</span>
			<span id="charpg">' . number_format($PersonalGold) . '</span>
			<span id="charsg">' . number_format($StashGold) . '</span>
		</div>
		<div id="char-skills" class="' . $Class . '">
			<ul class="idTabs">
				<li><a href="#char-skilltab1" class="tab1">tab1</a></li>
				<li><a href="#char-skilltab2" class="tab2">tab2</a></li>
				<li><a href="#char-skilltab3" class="tab3">tab3</a></li>
			</ul>
			<span id="char-skills-left">' . $SkillPoints . '</span>
			<div id="char-skilltab1" class="char-skilltab">';

	for ( $i = 1 ; $i <= 30 ; $i++ ) {
		$enabled = $skilllevels [ $i ] ;
		if ( $class_skills [ $Class ] [ $i ] [ 'tree' ] == 1 ) {
			echo '<span class="' . ( ( empty ( $enabled ) ) ? 'disabled-skill ds' : 'enabled-skill es' ) . $class_skills [ $Class ] [ $i ] [ 'position' ] . '">' . ( ( empty ( $enabled ) ) ? FALSE : $enabled ) . '</span>' . "\n" ;
		}
	}
?>

			</div>
			<div id="char-skilltab2" class="char-skilltab">
<?php
	for ( $i = 1 ; $i <= 30 ; $i++ ) {
		$enabled = $skilllevels [ $i ] ;
		if ( $class_skills [ $Class ] [ $i ] [ 'tree' ] == 2 ) {
			echo '<span class="' . ( ( empty ( $enabled ) ) ? 'disabled-skill ds' : 'enabled-skill es' ) . $class_skills [ $Class ] [ $i ] [ 'position' ] . '">' . ( ( empty ( $enabled ) ) ? FALSE : $enabled ) . '</span>' . "\n" ;
		}
	}
?>
			</div>
			<div id="char-skilltab3" class="char-skilltab">
<?php
	for ( $i = 1 ; $i <= 30 ; $i++ ) {
		$enabled = $skilllevels [ $i ] ;
		if ( $class_skills [ $Class ] [ $i ] [ 'tree' ] == 3 ) {
			echo '<span class="' . ( ( empty ( $enabled ) ) ? 'disabled-skill ds' : 'enabled-skill es' ) . $class_skills [ $Class ] [ $i ] [ 'position' ] . '">' . ( ( empty ( $enabled ) ) ? FALSE : $enabled ) . '</span>' . "\n" ;
		}
	}
	
echo '
			</div>
		</div>		
	</div>';

  echo "<br />\n";
 
  /*
  echo "<br />\n";
  echo "Quests<br />\n";
  if ($normalimbue) echo "Normal Imbue not used<br />\n";
  if ($normalsocket) echo "Normal Socket not used<br />\n";
  if ($normalpersonalize) echo "Normal Personalize not used<br />\n";
  if ($normalcow) echo "Normal Cow Level not complete<br />\n";
  if ($nightmareimbue) echo "Nightmare Imbue not used<br />\n";
  if ($nightmaresocket) echo "Nightmare Socket not used<br />\n";
  if ($nightmarepersonalize) echo "Nightmare Personalize not used<br />\n";
  if ($nightmarecow) echo "Nightmare Cow Level not complete<br />\n";
  if ($hellimbue) echo "Hell Imbue not used<br />\n";
  if ($hellsocket) echo "Hell Socket not used<br />\n";
  if ($hellpersonalize) echo "Hell Personalize not used<br />\n";
  if ($hellcow) echo "Hell Cow Level not complete<br />\n";
*/

  echo "<br />\n";
  echo "<br />\n";
  echo "<br />\n";

//echo '<pre>';
//print_r($Char_Waypoints);
//echo '</pre>';

  echo '
	<div id="waypoints-container">
		<div id="waypoints-normal">
			<ul class="idTabs">
				<li><a href="#wnoa1" class="act1">Act1</a></li>
				<li><a href="#wnoa2" class="act2">Act2</a></li>
				<li><a href="#wnoa3" class="act3">Act3</a></li>
				<li><a href="#wnoa4" class="act4">Act4</a></li>
				<li><a href="#wnoa5" class="act5">Act5</a></li>
			</ul>
			<div class="clear"></div>
			<div class="wpc">
				<div id="wnoa1" class="wact1">
					' . showWaypoints ( 'Normal' , 'Act1' ) . '
				</div>
				<div id="wnoa2" class="wact2">
					' . showWaypoints ( 'Normal' , 'Act2' ) . '
				</div>
				<div id="wnoa3" class="wact3">
					' . showWaypoints ( 'Normal' , 'Act3' ) . '
				</div>
				<div id="wnoa4" class="wact4">
					' . showWaypoints ( 'Normal' , 'Act4' ) . '
				</div>
				<div id="wnoa5" class="wact5">
					' . showWaypoints ( 'Normal' , 'Act5' ) . '
				</div>
			</div>
		</div>
		<div id="waypoints-nightmare">
			<ul class="idTabs">
				<li><a href="#wnma1" class="act1">Act1</a></li>
				<li><a href="#wnma2" class="act2">Act2</a></li>
				<li><a href="#wnma3" class="act3">Act3</a></li>
				<li><a href="#wnma4" class="act4">Act4</a></li>
				<li><a href="#wnma5" class="act5">Act5</a></li>
			</ul>
			<div class="clear"></div>
				<div class="wpc">
				<div id="wnma1" class="wact1">
					' . showWaypoints ( 'Nightmare' , 'Act1' ) . '
				</div>
				<div id="wnma2" class="wact2">
					' . showWaypoints ( 'Nightmare' , 'Act2' ) . '
				</div>
				<div id="wnma3" class="wact3">
					' . showWaypoints ( 'Nightmare' , 'Act3' ) . '
				</div>
				<div id="wnma4" class="wact4">
					' . showWaypoints ( 'Nightmare' , 'Act4' ) . '
				</div>
				<div id="wnma5" class="wact5">
					' . showWaypoints ( 'Nightmare' , 'Act5' ) . '
				</div>
			</div>
		</div>
		<div id="waypoints-hell">
			<ul class="idTabs">
				<li><a href="#wha1" class="act1">Act1</a></li>
				<li><a href="#wha2" class="act2">Act2</a></li>
				<li><a href="#wha3" class="act3">Act3</a></li>
				<li><a href="#wha4" class="act4">Act4</a></li>
				<li><a href="#wha5" class="act5">Act5</a></li>
			</ul>
			<div class="clear"></div>
			<div class="wpc">
				<div id="wha1" class="wact1">
					' . showWaypoints ( 'Hell' , 'Act1' ) . '
				</div>
				<div id="wha2" class="wact2">
					' . showWaypoints ( 'Hell' , 'Act2' ) . '
				</div>
				<div id="wha3" class="wact3">
					' . showWaypoints ( 'Hell' , 'Act3' ) . '
				</div>
				<div id="wha4" class="wact4">
					' . showWaypoints ( 'Hell' , 'Act4' ) . '
				</div>
				<div id="wha5" class="wact5">
					' . showWaypoints ( 'Hell' , 'Act5' ) . '
				</div>
			</div>
		</div>
	</div>
	';

  echo "<table><tr>\n";

/*
  $BinaryItem = "";
  $itemstart = $skillsection+38;
  $itemend = strpos ($RawCharData, 'JM', $itemstart);
  for($i=$itemend-1;$i>=$itemstart;$i--) {
    $BinaryItem .= sprintf("%08b", hexdec(padhex($CharData[$i])));
  }
  $itemlength = strlen($BinaryItem);
  echo substr($BinaryItem, $itemlength-138, 46) . "<br />\n";
  echo substr($BinaryItem, $itemlength-95, 3) . "<br />\n";
  echo substr($BinaryItem, $itemlength-127, 32) . "<br />\n";
  echo substr($BinaryItem, $itemlength-138, 4) . "<br />\n";
  echo "<br /><br />\n";
*/


  echo "<br />\n";
  echo "<br />\n";
  echo "<br />\n";

  if ($itemcount > 0) {
    $equipped = $belt = $moved = $inventory = $cube = $stash = array();
    for ($i=0;$i<$itemcount;$i++) {
      switch ($ItemList[$i]['location']) {
        case 0: // stored - see 'storedin'
          switch ($ItemList[$i]['storedin']) {
            case 1: // inventory
              array_push ($inventory, $ItemList[$i]);
              break;
            case 4: // cube
              array_push ($cube, $ItemList[$i]);
              break;
            case 5: //stash
              array_push ($stash, $ItemList[$i]);
              break;
            default:
              array_push ($moved, $ItemList[$i]);
          }
          break;
        case 1: // equipped
          $equipped[$ItemList[$i]['position']] = $ItemList[$i];
          break;
        case 2: // belt
          array_push ($belt, $ItemList[$i]);
          break;
        case 4: // moved - picked up by mouse
          array_push ($moved, $ItemList[$i]);
          break;
        case 6: // glued in a socket (should never happen)
          array_push ($moved, $ItemList[$i]);
          break;
        default:
          array_push ($moved, $ItemList[$i]);
      }
    }
  }

//print_r($equipped);
echo "<table>\n";
echo "<tr><td colspan=3>Items</td></tr>\n";
echo "<tr><td colspan=3><u>Equipped</u></td></tr>\n";
$count = 1;
for ($i=1;$i<=12;$i++) {
  if (isset($equipped[$i])) {
    echo "<tr><td>". $count ."</td><td colspan=2>". format_item_name_html($equipped[$i]) ."</td></tr>\n";
    if ($equipped[$i]['magiccount'] > 0) {
      for ($s=0;$s<$equipped[$i]['magiccount'];$s++) {
        echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td><b><font color=".$equipped[$i]['magiccolor'].">".$equipped[$i]["magicproperty".$s]."</font></b></td></tr>\n";
      }
    }
    if ($equipped[$i]['issocketed'] == 1) {
      for ($s=0;$s<$equipped[$i]['itemsinsockets'];$s++) {
        echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>".format_item_name_html($equipped[$i]["socket".$s])."</td></tr>\n";
        if ($equipped[$i]["socket".$s]['magiccount'] > 0) {
          for ($t=0;$t<$equipped[$i]["socket".$s]['magiccount'];$t++) {
            echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td><b><font color=".$equipped[$i]["socket".$s]['magiccolor'].">&nbsp;&nbsp;".$equipped[$i]["socket".$s]["magicproperty".$t]."</font></b></td></tr>\n";
          }
        }
      }
    }
    $count++;
  }
}

echo "<tr><td colspan=3><u>Inventory</u></td></tr>\n";
//$count = 1;
foreach ($inventory as $item) {
  echo "<tr><td>". $count ."</td><td colspan=2>". format_item_name_html($item) . "</td></tr>\n";
  if ($item['magiccount'] > 0) {
    for ($s=0;$s<$item['magiccount'];$s++) {
      echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item['magiccolor'].">".$item["magicproperty".$s]."</font></b></td></tr>\n";
    }
  }
  if ($item['issocketed'] == 1) {
    for ($s=0;$s<$item['itemsinsockets'];$s++) {
      echo "<tr><td colspan=2>&nbsp;</td><td>".format_item_name_html($item["socket".$s])."</td></tr>\n";
      if ($item["socket".$s]['magiccount'] > 0) {
        for ($t=0;$t<$item["socket".$s]['magiccount'];$t++) {
          echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item["socket".$s]['magiccolor'].">&nbsp;&nbsp;".$item["socket".$s]["magicproperty".$t]."</font></b></td></tr>\n";
        }
      }
    }
  }
  $count++;
}

echo "<tr><td colspan=3><u>Cube</u></td></tr>\n";
//$count = 1;
foreach ($cube as $item) {
  echo "<tr><td>". $count ."</td><td colspan=2>". format_item_name_html($item) . "</td></tr>\n";
  if ($item['magiccount'] > 0) {
    for ($s=0;$s<$item['magiccount'];$s++) {
      echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item['magiccolor'].">".$item["magicproperty".$s]."</font></b></td></tr>\n";
    }
  }
  if ($item['issocketed'] == 1) {
    for ($s=0;$s<$item['itemsinsockets'];$s++) {
      echo "<tr><td colspan=2>&nbsp;</td><td>".format_item_name_html($item["socket".$s])."</td></tr>\n";
      if ($item["socket".$s]['magiccount'] > 0) {
        for ($t=0;$t<$item["socket".$s]['magiccount'];$t++) {
          echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item["socket".$s]['magiccolor'].">&nbsp;&nbsp;".$item["socket".$s]["magicproperty".$t]."</font></b></td></tr>\n";
        }
      }
    }
  }
  $count++;
}

echo "<tr><td colspan=3><u>Stash</u></td></tr>\n";
//$count = 1;
foreach ($stash as $item) {
  echo "<tr><td>". $count ."</td><td colspan=2>". format_item_name_html($item) . "</td></tr>\n";
  if ($item['magiccount'] > 0) {
    for ($s=0;$s<$item['magiccount'];$s++) {
      echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item['magiccolor'].">".$item["magicproperty".$s]."</font></b></td></tr>\n";
    }
  }
  if ($item['issocketed'] == 1) {
    for ($s=0;$s<$item['itemsinsockets'];$s++) {
      echo "<tr><td colspan=2>&nbsp;</td><td>".format_item_name_html($item["socket".$s])."</td></tr>\n";
      if ($item["socket".$s]['magiccount'] > 0) {
        for ($t=0;$t<$item["socket".$s]['magiccount'];$t++) {
          echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item["socket".$s]['magiccolor'].">&nbsp;&nbsp;".$item["socket".$s]["magicproperty".$t]."</font></b></td></tr>\n";
        }
      }
    }
  }
  $count++;
}

echo "<tr><td colspan=3><u>Belt</u></td></tr>\n";
//$count = 1;
foreach ($belt as $item) {
  echo "<tr><td>". $count ."</td><td colspan=2>". format_item_name_html($item) . "</td></tr>\n";
  if ($item['magiccount'] > 0) {
    for ($s=0;$s<$item['magiccount'];$s++) {
      echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item['magiccolor'].">&nbsp;&nbsp;".$item["magicproperty".$s]."</font></b></td></tr>\n";
    }
  }
  if ($item['issocketed'] == 1) {
    for ($s=0;$s<$item['itemsinsockets'];$s++) {
      echo "<tr><td colspan=2>&nbsp;</td><td>".format_item_name_html($item["socket".$s])."</td></tr>\n";
      if ($item["socket".$s]['magiccount'] > 0) {
        for ($t=0;$t<$item["socket".$s]['magiccount'];$t++) {
          echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item["socket".$s]['magiccolor'].">&nbsp;&nbsp;".$item["socket".$s]["magicproperty".$t]."</font></b></td></tr>\n";
        }
      }
    }
  }
  $count++;
}

if ($corpseitemcount > 0) {
  echo "<tr><td colspan=3><u>Items on Corpse</u></td></tr>\n";
//  $count = 1;
  foreach ($CorpseItemList as $item) {
    echo "<tr><td>". $count ."</td><td colspan=2>". format_item_name_html($item) . "</td></tr>\n";
    if ($item['magiccount'] > 0) {
      for ($s=0;$s<$item['magiccount'];$s++) {
        echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item['magiccolor'].">&nbsp;&nbsp;".$item["magicproperty".$s]."</font></b></td></tr>\n";
      }
    }
    if ($item['issocketed'] == 1) {
      for ($s=0;$s<$item['itemsinsockets'];$s++) {
        echo "<tr><td colspan=2>&nbsp;</td><td>".format_item_name_html($item["socket".$s])."</td></tr>\n";
        if ($item["socket".$s]['magiccount'] > 0) {
          for ($t=0;$t<$item["socket".$s]['magiccount'];$t++) {
            echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item["socket".$s]['magiccolor'].">&nbsp;&nbsp;".$item["socket".$s]["magicproperty".$t]."</font></b></td></tr>\n";
          }
        }
      }
    }
    $count++;
  }
}

if (count($moved) > 0) {
  echo "<tr><td colspan=3><u>Being Moved / Other</u></td></tr>\n";
//  $count = 1;
  foreach ($moved as $item) {
    echo "<tr><td>". $count ."</td><td colspan=2>". format_item_name_html($item) . "</td></tr>\n";
    if ($item['magiccount'] > 0) {
      for ($s=0;$s<$item['magiccount'];$s++) {
        echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item['magiccolor'].">".$item["magicproperty".$s]."</font></b></td></tr>\n";
      }
    }
    if ($item['issocketed'] == 1) {
      for ($s=0;$s<$item['itemsinsockets'];$s++) {
        echo "<tr><td colspan=2>&nbsp;</td><td>".format_item_name_html($item["socket".$s])."</td></tr>\n";
        if ($item["socket".$s]['magiccount'] > 0) {
          for ($t=0;$t<$item["socket".$s]['magiccount'];$t++) {
            echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$item["socket".$s]['magiccolor'].">&nbsp;&nbsp;".$item["socket".$s]["magicproperty".$t]."</font></b></td></tr>\n";
          }
        }
      }
    }
    $count++;
  }
}

if ($hasirongolem) {
  echo "<tr><td colspan=3>&nbsp;</td><tr>\n";
  echo "<tr><td colspan=3><u>Irom Golem</u></td></tr>\n";
  echo "<tr><td>1</td><td colspan=2>";
  echo format_item_name_html($GolemItem) . "</td></tr>\n";
  if ($GolemItem['magiccount'] > 0) {
    for ($s=0;$s<$GolemItem['magiccount'];$s++) {
      echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$GolemItem['magiccolor'].">".$GolemItem["magicproperty".$s]."</font></b></td></tr>\n";
    }
  }
  if ($GolemItem['issocketed'] == 1) {
    for ($s=0;$s<$GolemItem['itemsinsockets'];$s++) {
      echo "<tr><td colspan=2>&nbsp;</td><td>".format_item_name_html($GolemItem["socket".$s])."</td></tr>\n";
      if ($GolemItem["socket".$s]['magiccount'] > 0) {
        for ($t=0;$t<$GolemItem["socket".$s]['magiccount'];$t++) {
          echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$GolemItem["socket".$s]['magiccolor'].">&nbsp;&nbsp;".$GolemItem["socket".$s]["magicproperty".$t]."</font></b></td></tr>\n";
        }
      }

    }
  }
  $count++;
}

echo "<tr><td colspan=3>&nbsp;</td><tr>\n";
echo "<tr><td colspan=3><u>Mercenary</u></td></tr>\n";
  if ($mercitemcount >0) {
//    echo "Mercenary item count: $mercitemcount<br />\n";
//    echo "<table>\n";
//    echo "<tr><td>#</td><td>type</td></tr>\n";

    $stop = count($MercItemList);
    for ($i=0;$i<$stop;$i++) {
//      echo "<tr><td>".($i+1)."</td><td>".$MercItemList[$i]['type']."</td></tr>\n";
      echo "<tr><td>".($i+1)."</td><td colspan=2>".format_item_name_html($MercItemList[$i])."</td></tr>\n";

      if ($MercItemList[$i]['magiccount'] > 0) {
        for ($s=0;$s<$MercItemList[$i]['magiccount'];$s++) {
          echo "<tr><td colspan=2>&nbsp;</td><td><b><font color=".$MercItemList[$i]['magiccolor'].">".$MercItemList[$i]["magicproperty".$s]."</font></b></td></tr>\n";
        }
      }

      for ($s=0;$s<$MercItemList[$i]['itemsinsockets'];$s++) {
//        echo "<tr><td>&nbsp;</td><td>".$MercItemList[$i]["socket".$s]['type']."</td></tr>\n";
        echo "<tr><td colspan=2>&nbsp;</td><td>".format_item_name_html($MercItemList[$i]["socket".$s])."</td></tr>\n";
        if ($MercItemList[$i]["socket".$s]['magiccount'] > 0) {
          for ($t=0;$t<$MercItemList[$i]["socket".$s]['magiccount'];$t++) {
            echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td><b><font color=".$MercItemList[$i]["socket".$s]['magiccolor'].">&nbsp;&nbsp;".$MercItemList[$i]["socket".$s]["magicproperty".$t]."</font></b></td></tr>\n";
          }
        }
      }
    }
//  echo "</table>\n";
  echo "<br />\n";
  }

echo "</table><br />\n";


/*
  echo "<br /><br />\n";
  echo "<table>\n";
  echo "<tr><td colspan=2 align=center>location</td><td>&nbsp;</td><td colspan=3 align=center>value</td></tr>\n";
  echo "<tr><td>dec</td><td>hex</td><td>&nbsp;&nbsp;</td><td>bin</td><td>dec</td><td>hex</td></tr>\n";


  $length = sizeof($CharData);
//  for($i=0;$i<$length;$i++) {
//  for($i=765;$i<900;$i++) {
//  for($i=0;$i<100;$i++) {
//  for($i=714;$i<764;$i++) {
//  for($i=455;$i<538;$i++) {
//  for($i=$skillsection;$i<$skillsection+32;$i++) {
//  for($i=$skillsection+32;$i<$length;$i++) {
  for($i=$mercitemend;$i<$length;$i++) {
    echo "<tr><td>" . $i . "</td><td>" . dechex($i) . "</td><td>&nbsp;</td><td>" . $RawCharData[$i] . "</td><td>" . $CharData[$i] . "</td><td>" . padhex($CharData[$i]) . "</td></tr>\n";
  }
  echo "</table>\n";
*/

} else {
  echo "Invalid file.<br />\n";
}

?>

	  </TD>
         <TD vAlign=bottom width=11 
                      background="themes/bnet/res/rankingborder-right.gif"><IMG 
                        height=10 
                        src="themes/bnet/res/rankingborder-right-bot.gif" 
                        width=11></TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD 
                background="themes/bnet/res/rankingborder-bot.gif">
                  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                    <TBODY>
                    <TR>
                      <TD width="50%"><IMG height=12 
                        src="themes/bnet/res/rankingborder-bot-left.gif" 
                        width=19></TD>
                      <TD align=right width="50%"><IMG height=12 
                        src="themes/bnet/res/rankingborder-bot-right.gif" 
                        width=19></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>

                      </TD>
<TD><IMG height=1 
            src="themes/bnet/res/pvpgn.htm" 
            width=5></TD></TR></TBODY></TABLE>
    <TD width=5 
    background="themes/bnet/res/right-bg.gif"><IMG 
      height=362 
      src="themes/bnet/res/pixel.gif" 
      width=5></TD></TR><tr>
	  	<td></td>
	  </tr>
  </TABLE>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
  	<tr>
		<td width="5" background="themes/bnet/res/left-bg.gif"></td>

		<td>
		<small>
<div align="center">PvPGN Statistics System v2.4.5 by <a href="mailto:imeepmeep@yahoo.com?subject=PvPGN-Stats">jfro</a> , <a href="http://www.stormzone.ru" target="_blank">STORM</a> , <a href="mailto:snaiperx@tutopia.com">Newbiesx</a> , <a href="http://server1.onlinebattlezone.net/ladders/" target="_blank">Gambit</a> & <a href="mailto:pelish@gmail.com?subject=PvPGN_Stats">pelish</a><br /><br />

<a href="http://www.battle.net" target="_blank">Battle.net</a><br />
1996 - 2005 Blizzard Entertainment. All rights reserved. Battle.net and Blizzard Entertainment are trademarks or registered trademarks of Blizzard Entertainment in the U.S. and/or other countries.
<p />
</div>
		</td>
		<td width="5" background="themes/bnet/res/right-bg.gif"></td>
	</tr>
</table>

<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>

        
      
  
        <TR>
          <TD align=left 
          width="50%" 
          background="themes/bnet/res/bot-left-bg.gif">
            <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0" bordercolor="0">
              <tr>
                <td width="32"><a href="http://localhost/pvpgn/"><img src="themes/bnet/images/main/arrow-left.gif" width="32" height="52" border="0"></a></td>
                <td background="themes/bnet/images/main/bot-left-bg.gif"><table width="113" height="100%"  border="0" cellpadding="0" cellspacing="0">
                    <TR>
                      <TD width="113"><SMALL><BR>
                            <A href="http://localhost/pvpgn/">Return to Ladders </A></SMALL></TD>

                    </TR>
                </table></td>
                <td width="90" background="themes/bnet/images/main/left-logo.GIF">&nbsp;</td>
              </tr>
            </table></TD>
          <TD width=108><a href="http://www.blizzard.com/"><IMG height=52 
            src="themes/bnet/res/blizzlogo.gif" 
             border=0></a></TD>
          <TD width="50%" 
          background="themes/bnet/res/bot-right-bg.gif">
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>

              <TR>
                <TD vAlign=top align=middle width="100%">
                  <TABLE cellSpacing=0 cellPadding=0 border=0>
                    <TBODY>
                    <TR>
                      <TD vAlign=top align=middle colSpan=3>
                        <TABLE cellSpacing=0 cellPadding=0 border=0>
                          <TBODY>
                          <TR>

                            <TD><SPAN>&nbsp;</SPAN></TD></TR>
                          <TR>
                            <TD><IMG height=2 
                              src="themes/bnet/res/pixel.gif" 
                              width=1></TD></TR></TBODY></TABLE></TD></TR>
                    <TR>
                      <TD noWrap>
                      <form action="stats.php?action=search" method="POST">
                      
                      <input type="hidden" class='boxes' name="game" value="D2DV">
                      <input type="hidden" class='boxes' name="type" value="34">
                      <B class=gray>Player Search:&nbsp;</B>

                      <TD><INPUT class=searchBox name=user_search>&nbsp;</TD>
                      <TD>
                        <TABLE cellSpacing=0 cellPadding=0 width="100%">
                          <TBODY>
                          <TR>
                            <TD noWrap><SMALL class=header><INPUT type=image src="themes/bnet/res/go-button.gif"></SMALL></TD></TR></TBODY></TABLE></TD>
                    <TR>
                      <TD colSpan=3><IMG height=1 
                        src="themes/bnet/res/pixel.gif" 
                        width=297></TD></TR></TBODY></TABLE></TD>
  <TD width=15><IMG height=52 
                  src="themes/bnet/res/bot-right.gif" 
                  width=15></TD></TR></TBODY></TABLE></TR></TABLE>

</body>
</html>