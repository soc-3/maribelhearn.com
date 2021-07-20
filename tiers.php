﻿<!DOCTYPE html>
<html lang='en'>
<?php
	include 'assets/shared/shared.php';
	hit(basename(__FILE__));
	$page = str_replace('.php', '', basename(__FILE__));
?>

    <head>
		<title>Touhou Tier List Creator</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width'>
        <meta name='description' content='Create your own Touhou tier lists!'>
        <meta name='keywords' content='touhou, touhou project, 東方, 东方, tier list, tiers, sorter, sort, sorting, creator'>
		<link rel='preload' type='font/woff2' href='assets/fonts/Felipa-Regular.woff2' as='font' crossorigin>
        <link rel='stylesheet' type='text/css' href='assets/shared/css_concat.php?page=tiers'>
		<link rel='icon' type='image/x-icon' href='assets/tiers/tiers.ico'>
        <script src='assets/shared/js_concat.php?page=tiers' defer></script>
    </head>

    <body>
        <div id='wrap' class='dark_bg'>
            <div id='init' class='dark_bg' data-html2canvas-ignore>
        		<nav>
        			<div id='nav' class='dark_bg'><?php echo navbar($page) ?></div>
        		</nav>
                <h1 id='title'>Touhou Tier List Creator</h1>
                <?php
                    if (!empty($_GET['redirect'])) {
                        echo '<p>(Redirected from <em>' . htmlentities($_GET['redirect']) . '</em>)</p>';
                    }
                ?>
                <div id='sort_selection' class='dark_bg'>
                    <label id='currently_tiering' for='sort'>Currently tiering:</label>
                    <select id='sort'>
                        <option value='characters'>Characters</option>
                        <option value='works'>Works</option>
                        <option value='shots'>Shottypes</option>
                    </select>
                    <label for='toggle_view'>Change view:</label>
                    <input id='toggle_view' class='button' type='button' value='Tier List View'>
                    <input id='toggle_picker' class='button' type='button' value='Small Picker'>
                </div>
                <p id='toggle'>
                    <input id='toggle_instructions' type='button' value='Show Instructions'>
                    <span id='import_button_tierview'></span>
                    <span id='export_button_tierview'></span>
                    <span id='screenshot_button_tierview'></span>
                    <span id='settings_button_tierview'></span>
                    <span id='changelog_button_tierview'></span>
                    <span id='reset_button_tierview'></span>
                </p>
            </div>
            <div id='tier_list_container' class='dark_bg'>
                <table id='tier_list_table'>
					<caption id='tier_list_caption'></caption>
                    <thead id='tier_list_thead' data-html2canvas-ignore>
                        <tr id='add_tier_box_mobile'>
                            <td id='add_tier_cell_mobile' colspan='2'>
                                <label for='tier_name_mobile'>
                                    <span class='hidden'>.</span>
                                    <input id='tier_name_mobile' type='text' value=''>
                                </label>
                                <label for='add_tier_mobile'>
                                    <span class='hidden'>.</span>
                                    <input id='add_tier_mobile' type='button' value='Add Tier'>
                                </label>
                            </td>
                        </tr>
                    </thead>
                    <tbody id='tier_list_tbody'></tbody>
                    <tfoot id='tier_list_tfoot' data-html2canvas-ignore>
                        <tr>
                            <td id='add_tier_desktop'>
                                <label for='tier_name'>
                                    <span class='hidden'>.</span>
                                    <input id='tier_name' type='text' value=''>
                                </label>
                                <label for='add_tier'>
                                    <span class='hidden'>.</span>
                                    <input id='add_tier' type='button' value='Add Tier'>
                                </label>
                            </td><td class='hidden'></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div id='buttons' class='dark_bg'>
            <div id='credits' class='dark_bg'>
                <p>The artworks used for this page are drawn by:
                <a href='https://www.pixiv.net/member.php?id=4920496' target='_blank'>Dairi</a>,
				<a href='https://twitter.com/korindo'>ZUN</a>,
                <a href='http://www.pixiv.net/member.php?id=4678572' target='_blank'>ETERSIARUM</a>.
                Special thanks go to <a href='https://www.youtube.com/channel/UCI1HPxKRky4Zm_mrRUH415Q' target='_blank'>Plus</a>
				for the original idea and testing,
                <a href='https://twitter.com/pienyan_' target='_blank'>pienyan</a> for testing,
                <a href='https://twitter.com/Doroshii_Sweet' target='_blank'>Dorothy Sweet</a> for design improvements and
                <a href='https://twitter.com/TheDukeofBooms' target='_blank'>ZXNova</a> and
				<a href='https://twitter.com/CuprianLycoris'>Cuprian Lycoris</a> for crops.</p>
            </div>
            <div id='menu' class='dark_bg'>
				<span id='save_button_container'>
	                <input id='save_button' type='button' class='button menu' value='Save Tiers'>
                </span>
                <span id='import_button_container'>
                	<input id='import_button' type='button' class='button menu' value='Import'>
                </span>
                <span id='export_button_container'>
                	<input id='export_button' type='button' class='button menu' value='Export'>
                </span>
                <br id='button_split'>
                <span id='screenshot_button_container'>
                    <input id='screenshot_button' type='button' class='button menu' value='Take Screenshot'>
                </span>
                <span id='settings_button_container'>
                	<input id='settings_button' type='button' class='button menu' value='Settings'>
				</span>
                <span id='changelog_button_container'>
	                <input id='changelog_button' type='button' class='button menu' value='Changelog'>
				</span>
                <span id='reset_button_container'>
	                <input id='reset_button' type='button' class='button menu' value='Reset'>
				</span>
            </div>
            <input id='information_button' class='button' type='button' value='Information'>
            <input id='view_button' class='button' type='button' value='Tier List View'>
            <br id='mobile_button_split'>
            <input id='menu_button' class='button' type='button' value='Menu'>
            <input id='switch_button' class='button' type='button' value='Switch Mode'>
            <p id='msg_container'></p>
        </div>
        <div id='modal'>
            <div id='modal_inner'></div>
        </div>
        <div id='characters' class='dark_bg'></div>
        <?php
            $json = file_get_contents('assets/json/chars.json');
            $chars = json_decode($json, true);
            $json = file_get_contents('assets/json/works.json');
            $works = json_decode($json, true);
            $json = file_get_contents('assets/json/shots.json');
            $shots = json_decode($json, true);
            echo '<div id="chars_load" class="dark_bg">';
            foreach ($chars as $category => $value) {
                foreach ($chars[$category] as $key => $value) {
                    echo '<input id="' . $category . '" type="hidden" value="' . implode(',', $value) . '">';
                }
            }
            echo '</div><div id="works_load" class="dark_bg">';
            foreach ($works as $category => $value) {
                foreach ($works[$category] as $key => $value) {
                    echo '<input id="' . $category . '" type="hidden" value="' . implode(',', $value) . '">';
                }
            }
            echo '</div><div id="shots_load" class="dark_bg">';
            foreach ($shots as $category => $value) {
                foreach ($shots[$category] as $key => $value) {
					foreach ($value as $key => $shot) {
						$value[$key] = $category . ' ' . $shot;
					}
                    echo '<input id="' . $category . '" type="hidden" value="' . implode(',', $value) . '">';
                }
            }
            echo '</div>';
        ?>
    </body>

</html>
