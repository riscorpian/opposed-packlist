<?php
/*$bots['Bot1'] = 'url_to_bot';*/
/*$bots['Bot2'] = 'url_to_bot';*/
$bots['Bot3'] = 'url_to_bot';

$cbot = (isset($_GET['bot'])) ? $bots[$_GET['bot']] : $cbot = $bots[array_rand($bots)];

$xList = file_get_contents($cbot);
preg_match_all('/#(\d+)\s+(\d+)x\s+\[.*?(\d+\.?\d+?)(.*)\]\s+(.*)\W/mi', $xList, $packs);
preg_match('/\*+\s+\d+\spacks\s+\*+\s+(\d+)\sof\s(\d+)\s/mi', $xList, $slots);
preg_match('/\*+\s+Bandwidth\sUsage\s+\*+\s+Current:\s([\d\.K|MB\/s]+),\sRecord:\s([\d\.K|MB\/s]+)$/mi', $xList, $busage);
preg_match('/^Total\sOffered:\s([\dMGB]+)\s+Total\sTransferred:\s([\d\.?MGB]+)$/mi', $xList, $storage);
?>
		<div id='planimate'><div id='tutorial'>
			
			<span>how to download</span>
			<strong>STEP 1</strong>
			<p>Open your IRC client and connect to <a href='irc://irc.irchighway.net/opposed' title='Visit the IRC channel'>#opposed on irc.irchighway.net</a></p>
			
			<strong>STEP 2</strong>
			<p>Select the file that you want to download from the list on the left. Further instructions will then be displayed.</p>
			
			<!--<span>bot statistics</span>
			<strong>BANDWIDTH</strong>
			<p id='bandwidth'>
				<em><?php echo $slots[1], ' OF ', $slots[2]; ?></em>Open slots:<br/>
				<em><?php echo $busage[1]; ?></em>Current usage:<br/>
				<em><?php echo $busage[2]; ?></em>Record usage:
			</p>
			<strong>STORAGE</strong>
			<p id='storage'>
				<em><?php echo $storage[1]; ?></em>Total Offered:<br/>
				<em><?php echo $storage[2]; ?></em>Total Transferred:
			</p>-->
			
			<!--<span>not working?</span>
			Try <?php
/*$orout = false;
foreach($bots as $out){
	if($out != $cbot){
		echo '<a href=\'/?bot=', array_search($out, $bots), '\'>', array_search($out, $bots), '</a>';
		if(!$orout && count($bots) > 2){
			echo ' or ';
			$orout = true;
		}
	}
}*/
?> instead.-->
			
		</div>

		<ul id='plheader'>
			<li class='plc1 plselectedasc'>PACK</li>
			<li class='plc2'>FILENAME</li>
			<li class='plc3'>GETS</li>
			<li class='plc4'>SIZE</li>
		</ul><div id='headerfade'></div>
		<div id='packlist'>
<?php
for($x=0; $x<count($packs[0]); $x++)
	echo '			<ul>
				<li class=\'plc1\'>', $packs[1][$x], '</li>
				<li class=\'plc2\'>', $packs[5][$x], '</li>
				<li class=\'plc3\'>', $packs[2][$x], '</li>
				<li class=\'plc4\'>', $packs[3][$x], strtolower($packs[4][$x]), '</li>
			</ul>';
?>
		</div><div id='packlist2'></div></div>
		
		<div id='overlay'><div class='ovcont'><div class='ovconti'>
			<span></span>
			TO DOWNLOAD, COPY THE FOLLOWING LINE INTO YOUR IRC CLIENT:<br/>
			<input value='/msg <? echo array_search($cbot, $bots); ?> xdcc send #999'/><br/>
			(CLICK ANYWHERE OUTSIDE THE BOX TO CLOSE THE OVERLAY)<br/>
		</div></div></div>