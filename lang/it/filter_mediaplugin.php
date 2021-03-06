<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'filter_mediaplugin', language 'it', branch 'MOODLE_22_STABLE'
 *
 * @package   filter_mediaplugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['fallbackaudio'] = 'Link audio';
$string['fallbackvideo'] = 'Link video';
$string['filtername'] = 'Plugin multimediali';
$string['flashanimation'] = 'Animazione Flash';
$string['flashanimation_help'] = 'File con estensione *.swf. per motivi di sicurezza questo filtro viene usato solo in contenuti testuali affidabili.';
$string['flashvideo'] = 'Video Flash';
$string['flashvideo_help'] = 'File con estensione *.flv e *.f4v. Esegue clip video tramite Flowplayer (sono necessari plugin Flash e javascript). In presenza di più sorgetni, il filtro usa il video fallback dell\'HTML 5';
$string['html5audio'] = 'Audio HTML 5';
$string['html5audio_help'] = 'File audio con estensione *.ogg, *.acc ed altri. Compatibile solamente con i browser più recenti, sfortunatamente non esistono formati supportati da tutti i browser esistenti. Un modo per risolvere il problema è quello di specificare dei fallback separati dal carattere # (ad esempio http://example.org/audio.acc#http://example.org/audio.acc#http://example.org/audio.mp3#). Il player QuickTime viene utilizzato come fallback per i browser più antiquati ed il fallback può essere qualsiasi tipo di audio.';
$string['html5video'] = 'Video HTML 5';
$string['html5video_help'] = 'File audio con estensione *.webm, *.m4v, *.ogv, *.mp4 ed altri. Compatibile solamente con i browser più recenti, sfortunatamente non esistono formati supportati da tutti i browser esistenti. Un modo per risolvere il problema è quello di specificare dei fallback separati dal carattere # (ad esempio http://example.org/video.m4v#http://example.org/video.acc#http://example.org/video.ogv#d=640x480). Il player QuickTime viene utilizzato come fallback per i browser più antiquati.';
$string['legacyheading'] = 'Media player legacy';
$string['legacyheading_help'] = 'L\'uso dei formati che seguono è sconsigliato, di norma sono utilizzati in installazioni intranet con client gestiti centralmente.';
$string['legacyquicktime'] = 'QuickTime player';
$string['legacyquicktime_help'] = 'File con estensione *.mov, *.mp4, *.m4a, and *.mpg. Prerequisito è il player oppure i codec QuickTime.';
$string['legacyreal'] = 'Real media player';
$string['legacyreal_help'] = 'File con estensione *.rm, *.ra, *.ram, *.rp, *.rv. Prerequisito è il RealPlayer.';
$string['legacywmp'] = 'Windows media player';
$string['legacywmp_help'] = 'File con estensione *.avi e *.wmv. E\' pienamente compatibile con Internet Explorer su Windows, potrebbe presentare qualche probelma con browser o sistemi operativi di altro tipo.';
$string['mp3audio'] = 'Audio MP3';
$string['mp3audio_help'] = 'File con estensione *.mp3. Esegue audio tramite Flowplayer, prerequisito il plugin Flash.';
$string['sitevimeo'] = 'Vimeo';
$string['sitevimeo_help'] = 'Sito di video sharing Vimeo';
$string['siteyoutube'] = 'YouTube';
$string['siteyoutube_help'] = 'Supporta il sito di sharing Youtube, i video e le playlist.';
