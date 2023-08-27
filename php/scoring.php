<?php
$json = file_get_contents('assets/shared/json/defaults.json');
$wr = json_decode($json, true);
$games = ['HRtP', 'SoEW', 'PoDD', 'LLS', 'MS', 'EoSD', 'PCB', 'IN', 'PoFV',
'MoF', 'SA', 'UFO', 'GFW', 'TD', 'DDC', 'LoLK', 'HSiFS', 'WBaWC', 'UM'];
$diffs = ['Easy', 'Normal', 'Hard', 'Lunatic', 'Extra'];

function no_extra(string $game) {
    return in_array($game, ['HRtP', 'PoDD', 'GFW']);
}
?>
<div id='wrap' class='wrap'>
    <?php echo wrap_top() ?>
    <noscript><strong>Notice:</strong> this page requires JavaScript.</noscript>
    <p>Enter your high scores. You can leave any high score empty. The scores you entered will be compared to the world records that
    were achieved with the same shottypes and percentages will be given. When you click the 'Calculate' button at the bottom of the
    page, sortable tables will be generated to tell you how your scores compare to the world records.</p>
    <p>Your scores should not include any characters other than digits, dots, commas and spaces.</p>
    <h2>Contents</h2>
    <div class='contents'>
		<?php
			foreach ($games as $key => $game) {
				echo '<p><a href="#' . $game . '">' . full_name($game) . '</a></p>';
				if ($game == 'MS') {
					echo '<p class="wide-top"> </p>';
				}
			}
		?>
    </div>
    <table id='checkboxes'>
        <tbody>
            <tr>
                <td>
                    <input id='HRtPc' type='checkbox' class='check' checked>
                    <label for='HRtPc'>HRtP</label>
                </td><td>
                    <input id='EoSDc' type='checkbox' class='check' checked>
                    <label for='EoSDc'>EoSD</label>
                </td><td>
                    <input id='SAc' type='checkbox' class='check' checked>
                    <label for='SAc'>SA</label>
                </td><td>
                    <input id='LoLKc' type='checkbox' class='check' checked>
                    <label for='LoLKc'>LoLK</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input id='SoEWc' type='checkbox' class='check' checked>
                    <label for='SoEWc'>SoEW</label>
                </td><td>
                    <input id='PCBc' type='checkbox' class='check' checked>
                    <label for='PCBc'>PCB</label>
                </td><td>
                    <input id='UFOc' type='checkbox' class='check' checked>
                    <label for='UFOc'>UFO</label>
                </td><td>
                    <input id='HSiFSc' type='checkbox' class='check' checked>
                    <label for='HSiFSc'>HSiFS</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input id='PoDDc' type='checkbox' class='check' checked>
                    <label for='PoDDc'>PoDD</label>
                </td><td>
                    <input id='INc' type='checkbox' class='check' checked>
                    <label for='INc'>IN</label>
                </td><td>
                    <input id='GFWc' type='checkbox' class='check' checked>
                    <label for='GFWc'>GFW</label>
                </td><td>
                    <input id='WBaWCc' type='checkbox' class='check' checked>
                    <label for='WBaWCc'>WBaWC</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input id='LLSc' type='checkbox' class='check' checked>
                    <label for='LLSc'>LLS</label>
                </td><td>
                    <input id='PoFVc' type='checkbox' class='check' checked>
                    <label for='PoFVc'>PoFV</label>
                </td><td>
                    <input id='TDc' type='checkbox' class='check' checked>
                    <label for='TDc'>TD</label>
                </td><td>
					<input id='UMc' type='checkbox' class='check' checked>
					<label for='UMc'>UM</label>
				</td>
            </tr>
            <tr>
                <td>
                    <input id='MSc' type='checkbox' class='check' checked>
                    <label for='MSc'>MS</label>
                </td><td>
                    <input id='MoFc' type='checkbox' class='check' checked>
                    <label for='MoFc'>MoF</label>
                </td><td>
                    <input id='DDCc' type='checkbox' class='check' checked>
                    <label for='DDCc'>DDC</label>
                </td><td class='noborders'></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan='4'>
                    <input id='all' type='checkbox' checked>
                    <label for='all'>All</label>
                </td>
            </tr>
        </tfoot>
    </table>
    <form><?php
		foreach ($games as $key => $game) {
			echo '<div id="' . $game . '"><table class="noborders"><caption><p><span id="' . $game . '_image" ' .
			'class="cover ' . ($key < 5 ? ' cover98' : '') . '"></span> ' . full_name($game) .
			'</p></caption><tr><th>Route</th>';
			foreach ($diffs as $key => $diff) {
				if (no_extra($game) && $diff == 'Extra') {
					break;
				}
				echo '<th>' . $diff . '</th>';
				if ($game == 'PCB' && $diff == 'Extra') {
					echo '<th>Phantasm</th>';
				}
			}
			foreach ($wr[$game]['Easy'] as $shot => $value) {
				echo '<tr><td>' . $shot . '</td>';
				foreach ($diffs as $key => $diff) {
					if (no_extra($game) && $diff == 'Extra') {
						break;
					}
					if ($game == 'HSiFS' && $diff == 'Extra' && substr($shot, -6) != 'Spring') {
						echo '<td></td>';
						continue;
					} else if ($game == 'HSiFS' && $diff == 'Extra') {
						$shot = substr($shot, 0, -6);
					}
					echo '<td' . ($diff == 'Hard' || $diff == 'Extra' ? ' class="break"' : '') .
					'><label for="' . $game . $diff . $shot . '" class="label">' . $diff .
					'</label><input id="' . $game . $diff . $shot . '" type="text"></td>';
					if ($game == 'PCB' && $diff == 'Extra') {
						$diff = 'Phantasm';
						echo '<td><label for="' . $game . $diff . $shot . '" class="label">' . $diff .
						'</label><input id="' . $game . $diff . $shot . '" type="text"></td>';
					}
				}
				echo '</tr>';
			}
			if ($game == 'GFW') {
				echo '<tr><td><label for="GFWExtra-">Extra</label></td>' .
				'<td id="GFWExtra" colspan="4"><input id="GFWExtra-" type="text"></td></tr>';
			}
			echo '</table></div>';
		}
	    ?>
        <section>
            <label for='precision'>Number of decimals:</label>
            <input id='precision' type='number' value='0' min='0' max='5' step='1'>
        </section>
        <p id='message' class='center'></p>
        <p id='error_message' class='center'></p>
        <section>
            <input id='save' type='button' value='Save'>
            <input id='calc' type='button' value='Calculate'>
        	<input id='import_button' type='button' value='Import'>
        	<input id='export' type='button' value='Export'>
            <input id='reset' type='button' value='Reset'>
        </section>
    </form>
	<div id='top_list'>
        <table id='score_table' class='sortable result_table'>
            <thead>
                <tr>
                    <th>Game + Difficulty</th>
                    <th>Shottype / Route</th>
                    <th>Score</th>
                    <th>WR Percentage</th>
                    <th>Progress Bar</th>
                    <th>WR</th>
                </tr>
            </thead>
            <tbody id='score_tbody'>
            </tbody>
        </table>
        <table id='game_table' class='sortable result_table'>
            <thead>
                <tr>
                    <th>Game</th>
                    <th>Average Percentage</th>
                </tr>
            </thead>
            <tbody id='game_tbody'>
            </tbody>
        </table>
    </div>
    <footer><strong><a href='#top'>Back to Top</a></strong></footer>
</div>
<div id='modal'>
    <div id='import_text' class='modal_inner'>
        <h2>Import from Text File</h2>
        <p>Note that the format should be the same as the exported text.</p>
        <p><strong>Warning:</strong> Importing can overwrite your current scores!</p>
        <form target='_self' method='post' enctype='multipart/form-data'>
            <label for='import_file'>Upload file:</label>
            <input id='import_file' name='import' type='file'>
            <p><input type='submit' value='Import'></p>
        </form>
    </div>
    <div id='export_text' class='modal_inner'>
        <h2>Export to Text File</h2>
        <p>
            <input id='copy_to_clipboard' type='button' value='Copy to Clipboard'>
            <input id='text_file' type='hidden' value=''>
        </p>
        <p>
            <a id='save_link' href='#' download='#'>
                <input type='button' class='button' value='Save to Device'>
            </a>
        </p>
    </div>
</div>