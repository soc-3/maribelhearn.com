﻿<!DOCTYPE html>
<html lang='en' class='no-js'>
<?php include '.stats/count.php'; hit(basename(__FILE__)); ?>

    <head>
		<title>Touhou Replay Showcase</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width'>
        <meta name='description' content='Submit to the Touhou Replay Showcase Twitch stream and see the schedules.'>
        <meta name='keywords' content='touhou, touhou project, replay, showcase, trs, twitch, stream, submit, submitting, submission, schedule, schedules'>
		<link rel='stylesheet' type='text/css' href='assets/trs/trs.css'>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Felipa&display=swap'>
		<link rel='icon' type='image/x-icon' href='assets/trs/trs.ico'>
        <script src='assets/shared/modernizr-custom.js' defer></script>
        <script>document.documentElement.classList.remove("no-js");head=document.getElementsByTagName("head")[0];done=false;
		function dark(){style=document.createElement("link");style.id="dark";style.href="assets/shared/dark.css";
		style.type="text/css";style.rel="stylesheet";head.append(style)}function ready(){if(done){return}done=true;
		hy=document.getElementById("hy");if(localStorage.theme=="dark"){hy.src="assets/shared/y-bar.png";hy.title="Youkai Mode";dark()}}
		function theme(e){if(e.src.indexOf("y")<0){e.src="assets/shared/y-bar.png";e.title="Youkai Mode";localStorage.theme="dark";
		dark()}else{e.src="assets/shared/h-bar.png";e.title="Human Mode";head.removeChild(head.lastChild);localStorage.theme="light"}}
		</script>
    </head>

    <body>
		<div id='nav' class='wrap'>
			<nav>
                <?php
                    $nav = file_get_contents('nav.html');
                    $page = str_replace('.php', '', basename(__FILE__));
                    $nav = str_replace('<a href="' . $page . '">', '<strong>', $nav);
                    $cap = strlen($page) < 4 ? strtoupper($page) : ucfirst($page);
                    echo str_ireplace($page . '</a>', $cap . '</strong>', $nav);
                ?>
			</nav>
		</div>
        <div id='wrap' class='wrap'>
            <img id='hy' src='assets/shared/h-bar.png' title='Human Mode' onClick='theme(this)' onLoad='ready()'>
            <h1>Touhou Replay Showcase Scheduling</h1>
            <?php
                if (!empty($_GET['redirect'])) {
                    echo '<p>(Redirected from <em>' . $_GET['redirect'] . '</em>)</p>';
                }
            ?>
            <p>This page contains the schedules of the <a href='https://twitch.tv/touhou_replay_showcase'><img src='ext/twitch-icon-small.ico' alt='Twitch favicon'> Touhou
            Replay Showcase</a> stream from its 2018 reboot onward. The upcoming stream's schedule will be listed at the top once it becomes available.</p>
            <p><strong>Notice:</strong> The stream is currently being transferred to <a href='https://twitter.com/Gastari_'>Gastari</a> and several changes will be made. We will probably resume by November.</p>
            <h3>Saturday, 5 October 2019 (September runs)</h3>
            <ul>
                <li>ZPS UFO Lunatic SanaeB Scoring</li>
                <li>AntiHoodBravi EoSD Lunatic ReimuB</li>
                <li>Cephiro EoSD Extra MarisaA NMNB</li>
                <li>Levea IN Lunatic Border Team Scoring</li>
                <li>Chum/Dagoth PoFV Lunatic PvP matches</li>
                <li>KirbyComment GFW Lunatic Route A2 NMNB</li>
                <li>Kachirou Kano GFW Lunatic Route A1 NMNB</li>
                <li>Dai SA Lunatic ReimuA NB</li>
            </ul>
            <h3>Sunday, 29 September 2019</h3>
            <em>Moved to next week</em>
            <h3>Saturday, 28 September 2019</h3>
            <em>Moved to Sunday</em>
            <h3>Saturday, 21 September 2019</h3>
            <ul>
                <li>Priw8 IN Lunatic Border Team NB</li>
                <li>Amlux MoF Normal MarisaB</li>
                <li>Wryyyman PCB Extra ReimuB NBNBB</li>
                <li>Helio LuaSTG BoAP "Phantasm Lunatic" MarisaB NB</li>
                <li>Gyoro IN Lunatic Border Team</li>
                <li>Pieraz FDF2 Phantasm Reimu</li>
                <li>Sacrifar EoSD Lunatic ReimuB Scoring</li>
                <li>Blade of Night TNA Lunatic "MoF" MarisaB</li>
            </ul>
            <h3>Sunday, 15 September 2019</h3>
            <ul>
                <li>tails41yoshi EoSD Extra MarisaA NB</li>
                <li>Borealis WBaWC Normal YoumuEagle NNNN</li>
                <li>Raymario Pokenic LoLK Easy Sanae Scoring</li>
                <li>ZM UFO Lunatic SanaeB Scoring</li>
                <li>Diamenciory UFO Extra SanaeB NBNV</li>
                <li>Lusus Danmakufu Junko Fight</li>
                <li>Gaston EoSD Lunatic ReimuB</li>
            </ul>
            <h3>Saturday, 14 September 2019</h3>
            <em>Moved to Sunday</em>
            <h3>Saturday, 7 September 2019</h3>
            <ul>
                <li>InceRabbit WBaWC Extra MarisaW</li>
                <li>Cao Minh WBaWC Lunatic MarisaW NB</li>
                <li>Plus WBaWC Extra YoumuO Speedrun</li>
                <li>CreepyNinja CoBD Lunatic Satori&Koishi NB</li>
                <li>Gastari GFW Easy A1 No Freeze</li>
                <li>Nitori-chan PCB Hard SakuyaA</li>
                <li>Ivin PCB Phantasm SakuyaB NMNBNBB</li>
            </ul>
            <h3>Saturday, 31 August 2019</h3>
            <ul>
                <li>Borealis WBaWC Extra YoumuWolf NNNN</li>
                <li>RB WBaWC Lunatic MarisaW NB</li>
                <li>Cao Minh WBaWC Lunatic MarisaW</li>
                <li>Jaimers WBaWC Lunatic MarisaW NBNHNRB</li>
                <li>Araneae WBaWC Lunatic MarisaW</li>
                <li>Kachirou Kano GFW Lunatic B2 NMNB</li>
                <li>KirbyComment PoDD Lunatic Mima Scoring</li>
                <li>Helio LoLK Lunatic Marisa NB</li>
            </ul>
            <h3>Saturday, 24 August 2019</h3>
            <ul>
                <li>Kayu VD Shot Only</li>
                <li>Priw8 WBaWC Lunatic "RNG + Dio Patch" MarisaW</li>
                <li>Guy WBaWC Extra ReimuW</li>
                <li>Shin MoF Easy ReimuA</li>
                <li>Cure Flora TD Lunatic Youmu Stage 4 Scoring</li>
                <li>ZPS UFO Lunatic SanaeB Scoring</li>
                <li>TrickOfHat MoF Lunatic ReimuB NB</li>
            </ul>
            <h3>Saturday, 17 August 2019</h3>
            <ul>
                <li>Plus LoLK Lunatic "Chaos Patch" Marisa</li>
                <li>Ramtoi UFO Lunatic ReimuA NB</li>
                <li>Gastari MoF Lunatic ReimuA NB</li>
                <li>Kurzov WBaWC Easy MarisaW</li>
                <li>Wryyyman WBaWC Hard ReimuW</li>
                <li>Dai WBaWC Lunatic MarisaW NBNH</li>
                <li>Borealis WBaWC Extra ReimuW Spell Practice</li>
                <li>V-MAX WBaWC Extra MarisaE NM</li>
            </ul>
            <h3>Sunday, 11 August 2019</h3>
            <ul>
                <li>LinieEber TD Normal Reimu</li>
                <li>AntiHoodBravi HSiFS Extra "OC Patch" Reimu NB</li>
                <li>raviddog HSiFS Lunatic ReimuWinter</li>
                <li>bluebus HSiFS Lunatic MarisaWinter NBNR</li>
                <li>Fox in the Woods HSiFS Lunatic AyaWinter</li>
                <li>Lone DDC Extra MarisaB</li>
                <li>32th System VD Nightmare Week Wednesday-5</li>
            </ul>
            <h3>Saturday, 10 August 2019</h3>
            <em>Moved to Sunday</em>
            <h3>Saturday, 3 August 2019</h3>
            <ul>
                <li>Raymario Pokenic MoF Lunatic ReimuB Stage 6 NMNB</li>
                <li>InceRabbit UFO Extra MarisaA NMNBNV</li>
                <li>tails41yoshi UFO Normal ReimuA NB</li>
                <li>Blade of Night TNA Lunatic YuyukoB</li>
                <li>Popfan HRtP Lunatic Makai</li>
                <li>Innocence Mrs. Estacion Special HimekaB NMNB</li>
                <li>Ivin PCB Extra MarisaA NMNBNBB</li>
                <li>Crested DDC "TriUltra" ReimuB TAS</li>
            </ul>
            <h3>Sunday, 28 July 2019</h3>
            <ul>
                <li>sp0 PCB Lunatic SakuyaB Scoring</li>
                <li>yeashie FFF Legacy Lunatic Sanae Route C NB</li>
            </ul>
            <h3>Saturday, 27 July 2019</h3>
            <ul>
                <li>Kayu Len'en 2 EMS Normal Tsubakura NBNFB</li>
                <li>InceRabbit EoSD Lunatic MarisaA</li>
                <li>ZPS PCB Extra ReimuB NBNBB</li>
                <li>Mikuru WBaWC Normal ReimuOtter Scoring</li>
                <li>Innocence BoSM Lunatic MarisaA NB</li>
                <li>Pieraz FDF 2 Extra Reimu NMNBNBB</li>
            </ul>
            <h3>Sunday, 21 July 2019</h3>
            <ul>
                <li>Priw8 Touhou Fantasia Reimu NBNC</li>
                <li>LinieEber DDC Hard ReimuA NB</li>
                <li>Cephiro EoSD Hard ReimuA NB</li>
                <li>Watericekiller EoSD Normal ReimuB Scoring</li>
                <li>KirbyComment SoEW Lunatic ReimuA Scoring</li>
            </ul>
            <h3>Saturday, 20 July 2019</h3>
            <em>Moved to Sunday</em>
            <h3>Sunday, 14 July 2019</h3>
            <ul>
                <li>V-MAX IN Extra Marisa</li>
                <li>RB LoLK Extra RNG Patch Reimu</li>
                <li>Cao Minh UFO Lunatic ReimuA</li>
                <li>Wryyyman WBaWC Normal ReimuOtter NM</li>
                <li>FoxintheWoods SA Normal ReimuA</li>
                <li>Blade of Night TNA Lunatic ReimuB NB</li>
                <li>CreepyNinja BoSM Ultra MarisaA</li>
            </ul>
            <h3>Saturday, 13 July 2019</h3>
            <em>Moved to Sunday</em>
            <h3>Saturday, 6 July 2019</h3>
            <ul>
                <li>Raymario Pokenic PCB Hard MarisaB NB</li>
                <li>KaizoPt LoLK Lunatic Reisen Scoring</li>
                <li>FiberVibe MoF Normal ReimuA NB</li>
                <li>Obama IN Lunatic Scarlet Team Scoring</li>
                <li>tails41yoshi HSiFS Extra Reimu NBNR</li>
                <li>Maribel Hearn HSiFS Lunatic AyaAutumn Scoring</li>
                <li>pienyan EoSD Lunatic ReimuB Stage 6 Scoring</li>
            </ul>
            <h3>Saturday, 29 June 2019</h3>
            <ul>
                <li>Ramtoi LoLK Lunatic Reimu NB</li>
                <li>ZPS LLS Normal ReimuA Scoring</li>
                <li>Dagoth PoFV Extra Youmu Scoring</li>
                <li>Gyoro EoSD Hard ReimuB Remilia NMNB</li>
                <li>TrickOfHat EoSD Extra ReimuB Scoring</li>
                <li>Daikarasu MoF Lunatic ReimuB NB</li>
                <li>KirbyComment PoDD Lunatic Reimu NMNB</li>
            </ul>
            <h3>Saturday, 22 June 2019</h3>
            <ul>
                <li>Borealis SA Extra ReimuA Scoring</li>
                <li>Ivin UFO Lunatic ReimuA NBNV</li>
                <li>ACBorgia MoF Lunatic ReimuA</li>
                <li>Wryyyman DDC Lunatic MarisaB</li>
                <li>Cao Minh PCB Lunatic ReimuB NB</li>
                <li>FoxintheWoods SA Normal ReimuA</li>
                <li>Crested LoLK "TriUltra" Reimu TAS</li>
            </ul>
            <h3>Saturday, 15 June 2019</h3>
            <ul>
                <li>CreepyNinja SA Lunatic RNG Patch MarisaA</li>
                <li>yeashie Marine Benefit Lunatic SanaeA NB</li>
                <li>AntiHoodBravi HSiFS "OC Patch" AyaSpring</li>
                <li>Master Sparky IN Lunatic Border Team NB</li>
                <li>Cephiro EoSD Lunatic ReimuA</li>
                <li>Ichthyosaur EoSD Lunatic MarisaB Scoring</li>
                <li>kana0603 EoSD Extra MarisaB Scoring</li>
            </ul>
            <h3>Sunday, 9 June 2019</h3>
            <ul>
                <li>Raymario Pokenic EoSD Lunatic MarisaA</li>
                <li>Plus "20DC" Lunatic MarisaB</li>
                <li>Priw8 IN Lunatic Scarlet Team NB</li>
                <li>Akaldar IN Lunatic Marisa NB</li>
                <li>InceRabbit LoLK Lunatic Reimu</li>
                <li>Ness SA Lunatic ReimuA NB</li>
            </ul>
            <h3>Saturday, 8 June 2019</h3>
            <em>Moved to Sunday</em>
            <h3>Sunday, 2 June 2019</h3>
            <ul>
                <li>Master Sparky HSiFS Normal CirnoSummer</li>
                <li>RB LoLK Lunatic RNG Patch Marisa</li>
                <li>LinieEber DDC Lunatic ReimuA</li>
                <li>Wryyyman TD Normal Reimu NB</li>
                <li>DarkPermafrost Len'en EE Unreal Suzumi NMNBNFB</li>
                <li>Priw8 IN Lunatic Scarlet Team NB</li>
                <li>Pieraz EoSD Lunatic ReimuA NB</li>
            </ul>
            <h3>Saturday, 1 June 2019</h3>
            <em>Moved to Sunday</em>
            <h3>Saturday, 25 May 2019</h3>
            <ul>
                <li>TSG TD Normal Reimu NMNBNT</li>
                <li>Borealis WBaWC Lunatic MarisaWolf NMNBNH</li>
                <li>Funen WBaWC Lunatic ReimuWolf NMNBNH</li>
                <li>Dagoth PoFV Lunatic Cirno 1 Miss</li>
                <li>KirbyComment DS Scoring</li>
                <li>Cephiro EoSD Normal ReimuA NMNB</li>
                <li>TrickOfHat EoSD Lunatic ReimuB NB</li>
                <li>32th System WBaWC Hard MarisaEagle NM</li>
            </ul>
            <h3>Saturday, 18 May 2019</h3>
            <ul>
                <li>Cepukka DDC Lunatic MarisaB</li>
                <li>AE PCB Lunatic SakuyaB No Hori</li>
                <li>Cao Minh FDF Hard Reimu</li>
                <li>P_jet UFO Hard SanaeA NB</li>
                <li>kana0603 EoSD Lunatic ReimuB NB</li>
                <li>Daikarasu IN Easy Border Team</li>
            </ul>
            <h3>Saturday, 11 May 2019</h3>
            <ul>
                <li>Borealis EoSD Normal ReimuA</li>
                <li>Kayu EoSD Extra MarisaA NB</li>
                <li>ACBorgia EoSD Lunatic ReimuA</li>
                <li>Crested LoLK Lunatic RNG Patch Reimu TAS</li>
                <li>Starks IN Easy Border Team</li>
                <li>ZPScissors SA Lunatic ReimuA NB</li>
                <li>seventh MoF Extra MarisaA Scoring</li>
            </ul>
            <h3>Sunday, 5 May 2019</h3>
            <ul>
                <li>Raymario Pokenic TD Hard Reimu NBNT</li>
                <li>InceRabbit TD Overdrive Marisa</li>
                <li>Cure Flora TD Lunatic Youmu Scoring</li>
                <li>Plus LoLK Lunatic Reisen Scoring</li>
                <li>tails41yoshi UFO Extra MarisaA</li>
                <li>Blade of Night TNA Lunatic ReimuB</li>
            </ul>
            <h3>Saturday, 4 May 2019</h3>
            <em>Moved to Sunday</em>
            <h3>Saturday, 27 April 2019</h3>
            <ul>
                <li>FiberVibe TD Normal Reimu</li>
                <li>Dass DDC Extra MarisaB Scoring</li>
                <li>Crested UFO "QuadUltra" ReimuA TAS</li>
                <li>inmate LoLK Lunatic Reimu</li>
                <li>SMB3 UFO Normal SanaeB Scoring</li>
                <li>TrickOfHat MS Extra Mima NMNB</li>
                <li>Phanton PCB Lunatic ReimuB NB</li>
                <li>Daikarasu MoF Lunatic ReimuB NB</li>
            </ul>
            <h3>Saturday, 20 April 2019</h3>
            <ul>
                <li>Anibal UFO Extra MarisaB NMNBNV</li>
                <li>PKWeegee SA Ultra Normal ReimuA</li>
                <li>TwoEyedMike PoFV Normal Aya</li>
                <li>KirbyComment SoEW Extra ReimuA Scoring</li>
                <li>Mino EoSD Lunatic ReimuB NMNB</li>
                <li>Levea EoSD Lunatic ReimuB NB</li>
                <li>Танос PCB Phantasm ReimuB NM</li>
            </ul>
            <h3>Saturday, 13 April 2019</h3>
            <ul>
                <li>P_jet MoF Lunatic ReimuC NB</li>
                <li>Raymario Pokenic UFO Lunatic ReimuA</li>
                <li>yeashie CtC Lunatic MarisaC NMNBNH</li>
                <li>raviddog EoSD Lunatic MarisaB NB</li>
                <li>kana0603 EoSD Lunatic ReimuA</li>
                <li>Adam PCB Normal MarisaA NBNF</li>
                <li>FoxintheWoods HSiFS Lunatic CirnoWinter</li>
            </ul>
            <h3>Saturday, 6 April 2019</h3>
            <ul>
                <li>Ince Rabbit MoF Lunatic RNG Patch ReimuB</li>
                <li>CreepyNinja GoDS Lunatic MarisaA-Water NB</li>
                <li>tails41yoshi PCB Extra ReimuB</li>
                <li>Poynting EoSD Lunatic ReimuA NB</li>
                <li>DarkPermafrost RMI Unreal Suzumi NMNBNFB</li>
                <li>Solid Moose SA Lunatic ReimuA NB</li>
                <li>Chip SoHW Normal RyoukoB Scoring</li>
            </ul>
            <h3>Saturday, 30 March 2019</h3>
            <ul>
                <li>ACBorgia IN Hard Border Team</li>
                <li>Dorothy Sweet MoF Lunatic ReimuB NB</li>
                <li>sp0 PCB Lunatic ReimuB Scoring</li>
                <li>ioioto EoSD Lunatic MarisaB</li>
                <li>Cao Minh IN Lunatic Border Team</li>
                <li>Maribel Hearn TD Lunatic Reimu NBNT</li>
            </ul>
            <h3>Saturday, 23 March 2019</h3>
            <ul>
                <li>Mirrakh MoF Normal ReimuB NB</li>
                <li>CreepyNinja FDF2 Lunatic Marisa</li>
                <li>RB LoLK Lunatic Sanae</li>
                <li>Dagoth-Ur PoFV Lunatic Eiki Scoring</li>
                <li>FoxintheWoods HSiFS Lunatic ReimuWinter</li>
                <li>Pieraz EoSD Extra ReimuB NMNB</li>
            </ul>
            <h3>Saturday, 16 March 2019</h3>
            <ul>
                <li>Borealis DDC Extra RNG Patch MarisaA</li>
                <li>Solid Moose IN Lunatic Ghost Team NB</li>
                <li>Priw8 "LoDDK" Extra Minesweeper Mode NB</li>
                <li>DarkPermafrost FDF Lunatic Marisa NMNB</li>
                <li>kana0603 EoSD Lunatic MarisaB Scoring</li>
                <li>TrickOfHat EoSD Lunatic MarisaB</li>
            </ul>
            <h3>Saturday, 9 March 2019</h3>
            <ul>
                <li>Raymario Pokenic EoSD Lunatic MarisaA</li>
                <li>P_jet MoF Hard ReimuC NB</li>
                <li>raviddog MoF Lunatic ReimuA</li>
                <li>Master Sparky SA Extra ReimuA NB</li>
                <li>pyro DDC Lunatic ReimuB NB</li>
                <li>Ince Rabbit PCB Lunatic MarisaB NB</li>
                <li>KirbyComment MS Easy Mima Scoring</li>
            </ul>
            <h3>Saturday, 2 March 2019</h3>
            <ul>
                <li>32th System EoSD Lunatic MarisaB</li>
                <li>Poynting MoF Lunatic ReimuC NB</li>
                <li>Crested SA "QuadUltra" ReimuA TAS</li>
                <li>ZPScissors UFO Lunatic ReimuA NB</li>
                <li>Blade of Night SSS Ultra Koishi TAS</li>
                <li>AntiHoodBravi PCB Lunatic ReimuB</li>
                <li>Daikarasu IN Lunatic Border Team NB</li>
            </ul>
            <h3>Saturday, 23 February 2019</h3>
            <ul>
                <li>P_jet MoF Normal ReimuC</li>
                <li>Maribel Hearn SA Lunatic ReimuA NB</li>
                <li>Gaston_ssbm EoSD Normal ReimuA</li>
                <li>Cephiro EoSD Normal ReimuB NB</li>
                <li>Sacrifar EoSD Lunatic ReimuB Scoring</li>
                <li>KirbyComment PoDD Easy Marisa Scoring</li>
            </ul>
            <h3>Saturday, 16 February 2019</h3>
            <ul>
                <li>AntiHoodBravi LoLK Hard Reimu</li>
                <li>Daikarasu LoLK Lunatic Reimu NB</li>
                <li>RB UFO Lunatic ReimuA NBNV</li>
                <li>Gastari IN Lunatic Border Team NB</li>
                <li>Akaldar IN Lunatic Youmu NB</li>
                <li>inmate EoSD Lunatic ReimuB</li>
                <li>pienyan EoSD Lunatic ReimuA Scoring</li>
            </ul>
            <h3>Saturday, 9 February 2019</h3>
            <ul>
                <li>Cao Minh UFO Lunatic ReimuA</li>
                <li>Raymario Pokenic LoLK Easy Sanae Scoring</li>
                <li>Blade of Night HSoB Lunatic ReimuYellow</li>
                <li>kana0603 EoSD Hard ReimuB Scoring</li>
                <li>Mirrakh MoF Normal ReimuB NB</li>
                <li>Pieraz TD Extra Reimu NMNBNT</li>
            </ul>
            <h3>Saturday, 2 February 2019</h3>
            <ul>
                <li>Ince Rabbit PCB Lunatic MarisaB</li>
                <li>CreepyNinja HSoB Lunatic MarisaBlack NB</li>
                <li>Master Sparky SA Lunatic ReimuA NB</li>
                <li>ZM UFO Lunatic SanaeB Scoring</li>
                <li>Cure Flora PCB Lunatic MarisaA NB</li>
                <li>Cepukka HardUFO+Ultra Extra MarisaA TAS</li>
                <li>DarkPermafrost SSS Lunatic Sanae NMNBFS</li>
            </ul>
            <h3>Sunday, 27 January 2019</h3>
            <ul>
                <li>P_jet MoF Normal ReimuB</li>
                <li>Plus LoLK Lunatic Reimu NB</li>
                <li>Dagoth-Ur PoFV Lunatic Youmu VS Scoring</li>
                <li>Funen PCB Lunatic Marisa NBNBB</li>
                <li>Priw8 IN Lunatic Scarlet Team NB</li>
                <li>Crested TD Lunatic "Tri-Ultra" TAS</li>
                <li>Cure Flora EoSD Extra MarisaA NMNB</li>
                <li>seventh MoF Extra ReimuB No Vertical</li>
            </ul>
            <h3>Saturday, 26 January 2019</h3>
            <ul>
                <li>Raymario Pokenic PoFV Lunatic Aya NC</li>
                <li>KirbyComment PoDD Lunatic Mima Scoring</li>
                <li>ZPScissors LLS Lunatic MarisaA NB</li>
                <li>Frozen MoF Extra MarisaC NMNB</li>
                <li>RB LoLK Lunatic Reimu</li>
                <li>Cephiro EoSD Extra ReimuA NB</li>
                <li>yeashie EoSD Normal ReimuB</li>
                <li>Ichthyosaur/pienyan EoSD Lunatic ReimuA Co-Op</li>
            </ul>
            <h3>Saturday, 19 January 2019</h3>
            <ul>
                <li>Kayu MoF Normal Reisen Mod</li>
                <li>Daikarasu UFO Lunatic ReimuA NB</li>
                <li>Kachirou Kano GFW Lunatic B1 NMNB</li>
                <li>Poynting PCB Lunatic ReimuB NB</li>
                <li>AntiHoodBravi HSiFS Extra Reimu NMNBNR</li>
                <li>Mirrakh EoSD Normal ReimuB</li>
                <li>SMB3 MoF Normal ReimuB NMNB</li>
            </ul>
            <h3>Sunday, 13 January 2019</h3>
            <ul>
                <li>Ince Rabbit SA Hard MarisaC</li>
                <li>Ramtoi SA Lunatic MarisaB NB</li>
                <li>CreepyNinja BoSM Lunatic MarisaB NB</li>
                <li>DarkPermafrost GFW Extra NMNB</li>
                <li>MasterSparky MoF Lunatic ReimuB NB</li>
                <li>kana0603 EoSD Lunatic ReimuB Scoring</li>
                <li>Phanton EoSD Lunatic ReimuB NB</li>
            </ul>
            <h3>Saturday, 12 January 2019</h3>
            <em>Moved to Sunday</em>
            <h3>Sunday, 6 January 2019</h3>
            <em>Moved to next week</em>
            <h3>Saturday, 5 January 2019</h3>
            <em>Moved to next week</em>
            <h3>Sunday, 30 December 2018</h3>
            <ul>
                <li>chum DS Aya/Hatate Scoring</li>
                <li>Traesto LLS Lunatic MarisaA</li>
                <li>RB LoLK Lunatic Reisen 75fps NB</li>
                <li>Maribel Hearn Banshiryuu C67 Easy Scoring</li>
                <li>Kayo Mayo MoF Lunatic ReimuB NMNB</li>
                <li>Cure Flora EoSD Extra MarisaA NB</li>
                <li>Sacrifar EoSD Lunatic ReimuB NB</li>
                <li>ZPScissors UFO Normal SanaeB Scoring</li>
            </ul>
            <h3>Saturday, 29 December 2018</h3>
            <em>Moved to Sunday</em>
            <h3>Saturday, 22 December 2018</h3>
            <ul>
                <li>Kayu TD Normal Marisa NBNT</li>
                <li>Plus EoSD Lunatic MarisaA</li>
                <li>P_jet IN Hard Sakuya</li>
                <li>ZeroPride UFO Lunatic ReimuA NMNB</li>
                <li>Traesto LLS Lunatic MarisaA</li>
                <li>seventh MoF Extra ReimuC Scoring</li>
                <li>cactu EoSD Lunatic ReimuB Scoring</li>
            </ul>
            <h3>Sunday, 16 December 2018</h3>
            <ul>
                <li>DarkPermafrost LoLK Extra Sanae NMNB</li>
                <li>Kvasovy MoF Hard MarisaC</li>
                <li>KirbyComment DS Aya/Hatate Scoring</li>
                <li>Critz UFO Hard SanaeB</li>
                <li>judg3GH IN Normal Magic Team</li>
                <li>Crested "FastSA" ReimuA TAS</li>
                <li>sp0 PCB Lunatic SakuyaB Scoring</li>
            </ul>
            <h3>Saturday, 15 December 2018</h3>
            <em>Moved to Sunday</em>
            <h3>Saturday, 8 December 2018</h3>
            <ul>
                <li>Priw8 EoSD Lunatic ReimuA NB</li>
                <li>Daikarasu DDC Lunatic ReimuA NB</li>
                <li>Ness IN Lunatic Ghost Team</li>
                <li>Obama IN Normal Scarlet Team Scoring</li>
                <li>Phanton GFW Lunatic C1</li>
                <li>pienyan EoSD Lunatic ReimuB Scoring</li>
            </ul>
            <h3>Saturday, 1 December 2018</h3>
            <ul>
                <li>BraviNoname UFO Hard SanaeB</li>
                <li>Ince Rabbit MoF Hard MarisaA NB</li>
                <li>Krolo MoF Extra ReimuA NB</li>
                <li>MasterSparky GFW Easy No Freeze</li>
                <li>Scarlet Moose TD Lunatic Youmu NBNT</li>
                <li>TrickOfHat EoSD Extra ReimuB Scoring</li>
                <li>kana0603 EoSD Lunatic MarisaB Scoring</li>
                <li>Hourai din Bucuresti UFO Hard SanaeB</li>
            </ul>
            <h3>Sunday, 25 November 2018</h3>
            <ul>
                <li>ZeroPride LoLK Lunatic Reimu NB</li>
                <li>Rysosis IN Lunatic Scarlet Team Stage 5 Scoring</li>
                <li>ZM UFO Lunatic MarisaA Scoring</li>
                <li>Kvasovy HSiFS Extra Reimu NB</li>
                <li>32th System DDC Easy ReimuA</li>
                <li>sp0 PCB Lunatic SakuyaB Scoring</li>
                <li>Maribel Hearn GFW Lunatic A1 NMNB</li>
            </ul>
            <h3>Saturday, 24 November 2018</h3>
            <ul>
                <li>Dorothy Sweet MoF Lunatic VoWG Endphase NMNB</li>
                <li>muru koyete DDC Hard ReimuB</li>
                <li>Ramtoi EoSD Lunatic ReimuB NB</li>
                <li>TruesPCB IN Lunatic Remilia</li>
                <li>Akaldar IN Lunatic Magic Team NB</li>
                <li>kana0603 LoLK Extra Reimu</li>
                <li>pienyan EoSD Lunatic ReimuB Stage 6 Scoring</li>
                <li>P_jet MoF Easy ReimuC NB</li>
            </ul>
            <h3>Sunday, 18 November 2018</h3>
            <em>Cancelled</em>
            <h3>Saturday, 17 November 2018</h3>
            <em>Cancelled</em>
            <h3>Sunday, 11 November 2018</h3>
            <em>Cancelled</em>
            <h3>Saturday, 10 November 2018</h3>
            <ul>
                <li>Plus LoLK Lunatic Reimu NB</li>
                <li>chum DS Aya/Hatate Scoring</li>
                <li>Carol_pseudonym DS Ultra</li>
                <li>Ice Master GFW Easy A1 NMNB</li>
                <li>CreepyNinja Re:SA Lunatic Marisa NM</li>
                <li>Poynting 0 Power Captures Compilation</li>
                <li>Mokou Sheep HSiFS Lunatic AyaAutumn Scoring</li>
            </ul>
            <h3>Sunday, 4 November 2018</h3>
            <ul>
                <li>Cepukka PCB Phantasm ReimuB</li>
                <li>Kayu Len'en 4 BPoHC AbEx</li>
                <li>DarkPermafrost LuaSTG Activity7 Lunatic Sanae NMNB</li>
                <li>BraviNoname TD Lunatic Reimu</li>
                <li>Mikuru HSiFS Hard ReimuWinter</li>
                <li>Hourai din Bucuresti HSiFS Spell Captures</li>
                <li>TrickOfHat PCB Lunatic SakuyaA NB</li>
            </ul>
            <h3>Saturday, 3 November 2018</h3>
            <ul>
                <li>Priw8 IN Lunatic Border Team</li>
                <li>ZPScissors PCB Lunatic ReimuB NB</li>
                <li>KirbyComment PoDD Hard Chiyuri Scoring</li>
                <li>Dagoth-Ur PoFV Lunatic Youmu Scoring</li>
                <li>Crested DDC Lunatic SakuyaB HarDDC TAS</li>
                <li>Ince Rabbit IN Lunatic Magic Team</li>
                <li>trivial171 IN Lunatic Border Team NB</li>
            </ul>
            <h3>Sunday, 28 October 2018</h3>
            <em>Cancelled</em>
            <h3>Saturday, 27 October 2018</h3>
            <ul>
                <li>Borealis LoLK Lunatic Reimu</li>
                <li>Plus LoLK Lunatic Marisa NB</li>
                <li>TruesPCB ISC 5-2 No Items</li>
                <li>Krolo HSiFS Extra Reimu NMNB</li>
                <li>omegajoaquin EoSD Lunatic ReimuB NB</li>
                <li>Fox in the Woods MoF Extra MarisaC</li>
                <li>Cao Minh TD Lunatic Reimu NBNT</li>
            </ul>
            <h3>Sunday, 21 October 2018</h3>
            <ul>
                <li>Raymario Pokenic LoLK Easy Sanae Scoring</li>
                <li>AncientMedic EoSD Normal ReimuB NB</li>
                <li>Ione EoSD Normal MarisaA NMNB</li>
                <li>sp0 PCB Lunatic ReimuB Scoring</li>
                <li>Levea PCB Phantasm ReimuB NMNB</li>
                <li>raviddog PCB Hard SakuyaB</li>
                <li>PeppermintCandy IN Easy Reimu NB</li>
            </ul>
            <h3>Saturday, 20 October 2018</h3>
            <ul>
                <li>Dorothy Sweet LoLK Lunatic Reisen NB</li>
                <li>sazandora HSiFS Lunatic MarisaSummer</li>
                <li>Maribel Hearn GFW Lunatic A2 NMNB</li>
                <li>SMB3 UFO Normal ReimuA NMNB</li>
                <li>Dagoth-Ur PoFV Lunatic Youmu vs CPU</li>
                <li>streetmachino PCB Lunatic ReimuB Scoring</li>
                <li>Cephiro PCB Extra MarisaA NB</li>
                <li>TrickOfHat IN Lunatic Scarlet Team NB</li>
            </ul>
            <h3>Sunday, 14 October 2018</h3>
            <ul>
                <li>Skorokhodov SA Normal ReimuA 1MNB</li>
                <li>Crested UFO Lunatic ReimuA HardUFO TAS</li>
                <li>Rysosis IN Lunatic Scarlet Team Scoring</li>
                <li>Mikuru HSiFS Normal ReimuSpring NB</li>
                <li>Kvasovy HSiFS Extra Reimu NMNB</li>
                <li>Ince Rabbit HSiFS "Maingame Overdrive" CirnoWinter</li>
                <li>pienyan EoSD Lunatic ReimuB Scoring</li>
                <li>Traesto LLS Extra MarisaA</li>
            </ul>
            <h3>Saturday, 13 October 2018</h3>
            <ul>
                <li>chum DS Aya/Hatate Scoring</li>
                <li>cactu PCB Lunatic SakuyaB Scoring</li>
                <li>trivial171 DDC Lunatic MarisaB</li>
                <li>Ichthyosaur EoSD Extra ReimuA</li>
                <li>Akaldar IN Lunatic Sakuya NB</li>
                <li>Poynting MoF Lunatic ReimuB NB</li>
                <li>ZM UFO Lunatic SanaeB Scoring</li>
                <li>ioioto TD Lunatic Youmu</li>
            </ul>
            <h3>Sunday, 7 October 2018</h3>
            <ul>
                <li>Daikarasu PCB Lunatic ReimuB NB</li>
                <li>kana0603 EoSD Lunatic MarisaA Scoring</li>
                <li>Priw8 DDC Easy Sanae NMNB (modded shottype)</li>
                <li>Kayu HSiFS Extra Cirno</li>
                <li>Termian SA Lunatic ReimuA NB</li>
                <li>DarkPermafrost Len'en 3 RMI Unreal NB</li>
                <li>omegajoaquin EoSD Lunatic ReimuB NB</li>
                <li>Hourai din Bucuresti EoSD Extra ReimuA</li>
            </ul>
            <h3>Saturday, 6 October 2018</h3>
            <ul>
                <li>CreepyNinja SA Lunatic MarisaB 1MNB</li>
                <li>KirbyComment GFW Lunatic A1 NMNB</li>
                <li>Gastari LoLK Lunatic Reimu NB</li>
                <li>ZPScissors EoSD Lunatic ReimuB NB</li>
                <li>Stooge EoSD Extra ReimuB silly death</li>
                <li>Starshine Shuusou Gyoku Lunatic Scoring</li>
                <li>Flariz UFO Lunatic SanaeA</li>
                <li>BraviNoname DDC Lunatic SakuyaA</li>
                <li>Locke Cole PoDD Lunatic Reimu</li>
            </ul>
            <h3>Sunday, 30 September 2018</h3>
            <ul>
                <li>KirbyComment LLS Hard ReimuB Scoring</li>
                <li>kana0603 EoSD Lunatic ReimuA Scoring</li>
                <li>trivial171 PCB Lunatic ReimuB NB</li>
                <li>RB LoLK "Death Label" Reimu</li>
                <li>Plus LoLK Lunatic Reimu NB</li>
                <li>Maribel Hearn Samidare Extra Scoring</li>
                <li>TrickOfHat PCB Normal ReimuB</li>
                <li>CrestedPeak9 MoF "Maingame Extra" ReimuB</li>
                <li>Pieraz TD Lunatic Reimu NMNBNT</li>
            </ul>
            <h3>Saturday, 29 September 2018</h3>
            <ul>
                <li>Kayu HSiFS Normal CirnoSummer NR</li>
                <li>Obama HSiFS Lunatic ReimuWinter Scoring</li>
                <li>Draco TD Lunatic Marisa</li>
                <li>CreepyNinja SSS Lunatic Marisa NMNB</li>
                <li>Priw8 EoSD Lunatic MarisaB</li>
                <li>Simonrai EoSD Lunatic ReimuB NB</li>
                <li>Cirnobyl MoF Lunatic ReimuA</li>
                <li>raviddog MoF Hard ReimuC</li>
            </ul>
            <h3>Sunday, 23 September 2018</h3>
            <ul>
                <li>Poynting SA Lunatic ReimuA NB</li>
                <li>LogicallySound SA Extra ReimuA</li>
                <li>sp0 PCB Lunatic ReimuB Scoring</li>
                <li>Errmmm UFO Hard ReimuA</li>
                <li>Phanton IN Lunatic Yuyuko NB</li>
                <li>Dagoth/Grayst PoFV Versus</li>
                <li>Rysosis EoSD Lunatic ReimuB NB</li>
                <li>BabyBlueFord EoSD Extra MarisaA NMNB</li>
            </ul>
            <h3>Saturday, 22 September 2018</h3>
            <ul>
                <li>Tails_ SA Lunatic ReimuA</li>
                <li>Gastari UFO Lunatic ReimuB NB</li>
                <li>DarkPermafrost SSS Lunatic Sanae NBNR</li>
                <li>chum DS Aya/Hatate Scoring</li>
                <li>Locke Cole EoSD Hard ReimuB</li>
                <li>Cao Minh PoFV Hard Aya Practice</li>
                <li>Ultroloth LoLK Lunatic Marisa Junko NMNB</li>
                <li>FoxintheWoods HSiFS AyaAutumn Lunatic</li>
            </ul>
            <h3>Sunday, 16 September 2018</h3>
            <em>Cancelled</em>
            <h3>Saturday, 15 September 2018</h3>
            <ul>
                <li>Chromatrope LoLK Normal Reisen Scoring</li>
                <li>Ince Rabbit HSiFS Ultra MarisaSpring</li>
                <li>Granpapa777 PCB Normal SakuyaA</li>
                <li>Starshine IN Lunatic Border Team NB</li>
                <li>BraviNoname MoF Lunatic ReimuA</li>
                <li>Pienyan EoSD Lunatic ReimuB s5 Practice Scoring</li>
                <li>Yeashie SSS Lunatic Sanae NB</li>
                <li>ZPScissors LLS Lunatic MarisaA NB</li>
            </ul>
            <h2 id='ack'>Acknowledgements</h2>
            <p id='credit'>The background image was drawn by <a href='http://www.pixiv.net/member.php?id=21613'>Kong Xian</a>.</p>
            <p id='back'><strong><a id='backtotop' href='#nav'>Back to Top</a></strong></p>
        </div>
    </body>

</html>
