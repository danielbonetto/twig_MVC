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
 * Strings for component 'chat', language 'sv', branch 'MOODLE_22_STABLE'
 *
 * @package   chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajax'] = 'Version som använder Ajax';
$string['autoscroll'] = 'Automatisk skrollning';
$string['beep'] = 'pipsignal';
$string['cantlogin'] = 'Det gick inte att logga in till detta rum för direktsamtal!!';
$string['chat:chat'] = 'Åtkomst till ett rum för direktsamtal';
$string['chat:deletelog'] = 'Ta bort loggar för direktsamtal';
$string['chat:exportparticipatedsession'] = 'Exportera den session för direktsamtal som Du deltog i.';
$string['chat:exportsession'] = 'Exportera vilken session för direktsamtal som helst';
$string['chat:readlog'] = 'Läs loggar för direktsamtal';
$string['chat:talk'] = 'Tala i ett direktsamtal';
$string['chatintro'] = 'Introduktion';
$string['chatname'] = 'Namnet på det här rummet för direktsamtal';
$string['chatreport'] = 'Sessioner för direktsamtal';
$string['chattime'] = 'Tid för nästa direktsamtal';
$string['configmethod'] = 'Den metod för direktsamtal som erbjuder ett ajax-baserat gränssnitt  kontaktar regelbundet servern för uppdateringar.
Den normala metoden för  direktsamtal innebär att klienterna regelbundet måste kontakta servern för uppdateringar. Det kräver ingen konfiguration och fungerar överallt men en mängd  direktsamtalare samtidigt kan skapa en stor arbetsbelastning för servern. Att använda en server demon kräver "shell"-tillgång till UNIX men det resulterar i en snabb, skalbar miljö för direktsamtal.';
$string['confignormalupdatemode'] = 'Uppdateringar av rum för direktsamtal servas effektivt genom användning av egenskapen <em>Håll liv i</em> i HTTP 1.1 men detta leder fortfarande till ganska stor belastning på servern. En mer avancerad metod är att använda strategin med att <em>Strömma</em> för att mata på med uppdateringar åt användarna. Det är mycket bättre att använda <em>Strömma</em> skalor (metoden liknar chatd) men det kanske inte stödjs av Din server.';
$string['configoldping'] = 'Hur länge ska en användare få vara inaktiv innan Du anser att han/hon har avbrutit sin medverkan?';
$string['configrefreshroom'] = 'Hur ofta ska direktsamtalet uppdateras? (I sekunder räknat) Om Du ställer in en kort tid så kommer direktsamtalet att verka snabbare, men då blir det också mer jobb för servern när det är många som samtalar direkt.';
$string['configrefreshuserlist'] = 'Hur ofta ska listan på användare uppdateras? (i sekunder)';
$string['configserverhost'] = 'Värdnamnet på datorn där serverdemonen finns.';
$string['configserverip'] = 'Den numeriska IP-adressen stämmer överens med värdnamnet ovan';
$string['configservermax'] = 'Det maximala antalet tillåtna klienter';
$string['configserverport'] = 'Port att använda för demonen på servern';
$string['currentchats'] = 'Aktiva sessioner för direktsamtal';
$string['currentusers'] = 'Aktuella användare';
$string['deletesession'] = 'Ta bort denna session';
$string['deletesessionsure'] = 'Är Du säker på att Du vill ta bort denna session?';
$string['donotusechattime'] = 'Visa inte några tider för direktsamtal';
$string['enterchat'] = 'Klicka här för att gå in i direktsamtalet nu';
$string['errornousers'] = 'Systemet hittade inga användare';
$string['explaingeneralconfig'] = 'De här inställningarna gäller <strong>alltid</strong>';
$string['explainmethoddaemon'] = 'De här inställningarna har betydelse <strong>endast</strong> om Du har valt "Chat Server daemon" som chat_method';
$string['explainmethodnormal'] = 'De här inställningarna har betydelse <strong>endast</strong> om Du har valt "Normal metod" som chat_method';
$string['generalconfig'] = 'Allmän konfiguration';
$string['idle'] = 'F n inte aktiv';
$string['inputarea'] = 'Område för att mata in';
$string['invalidid'] = 'Det gick inte att hitta det rummet för direktsamtal!';
$string['list_all_sessions'] = 'Lista alla sessioner';
$string['list_complete_sessions'] = 'Lista bara fullföljda sessioner';
$string['listing_all_sessions'] = 'Listar alla sessioner';
$string['messagebeepseveryone'] = '{$a} skickar en pipsignal till alla!';
$string['messagebeepsyou'] = '{$a} har just skickat en pipsignal till Dig';
$string['messageenter'] = '{$a} har precis kommit in i detta direktsamtal';
$string['messageexit'] = '{$a} har lämnat det här direktsamtalet';
$string['messages'] = 'Meddelanden';
$string['messageyoubeep'] = 'Du signalerade till {$a}';
$string['method'] = 'Metod för direktsamtal';
$string['methodajax'] = 'Ajax-metoden';
$string['methoddaemon'] = 'Serverdemon för  direktsamtal';
$string['methodnormal'] = 'Normal metod';
$string['modulename'] = 'Direktsamtal';
$string['modulename_help'] = 'Aktivitetsmodulen Direktsamtal tillåter deltagarna att ha synkrona diskussioner (deltagarna är närvarande samtidigt) via webben. Det här är användbart om man vill förstå varandra och ämnet på ett alternativt sätt jämfört med asynkron kommunikation.';
$string['modulenameplural'] = 'Direktsamtal';
$string['neverdeletemessages'] = 'Radera aldrig några meddelanden';
$string['nextsession'] = 'Nästa schemalagda session';
$string['no_complete_sessions_found'] = 'Det gick inte att hitta några fullföljda sessioner.';
$string['nochat'] = 'Det gick inte att hitta något direktsamtal';
$string['noguests'] = 'Direktsamtalet  är inte öppet för gäster';
$string['nomessages'] = 'Inga meddelanden än';
$string['nopermissiontoseethechatlog'] = 'Du har inte tillstånd att se loggarna för direktsamtal.';
$string['normalkeepalive'] = 'Håll_Liv_I';
$string['normalstream'] = 'Strömma';
$string['noscheduledsession'] = 'Ingen schemalagd session';
$string['notallowenter'] = 'Du har inte tillstånd att gå in i rummet för direktsamtal';
$string['notlogged'] = 'Du är inte inloggad!';
$string['oldping'] = 'Koppla bort timeout';
$string['pastchats'] = 'Tidigare sessioner för direktsamtal';
$string['pluginadministration'] = 'Administration av direktsamtal';
$string['pluginname'] = 'Direktsamtal';
$string['refreshroom'] = 'Utrymme för uppdatering';
$string['refreshuserlist'] = 'Uppdatera listan över användare';
$string['removemessages'] = 'Ta bort alla meddelanden';
$string['repeatdaily'] = 'Vid samma tid varje dag';
$string['repeatnone'] = 'Inga upprepade visningar - visa bara den specificerade tiden';
$string['repeattimes'] = 'Upprepade sessioner';
$string['repeatweekly'] = 'Vid samma tid varje vecka';
$string['saidto'] = 'sade till';
$string['savemessages'] = 'Spara de sessioner som varit';
$string['seesession'] = 'Se den här sessionen';
$string['send'] = 'Skicka';
$string['sending'] = 'Skickar';
$string['serverhost'] = 'Namn på servern';
$string['serverip'] = 'IP för server';
$string['servermax'] = 'Max antal användare';
$string['serverport'] = 'Serverport';
$string['sessions'] = 'sessioner för direktsamtal';
$string['sessionstart'] = 'Sessionen för direktsamtal kommer att starta inom: {$a}';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Alla kan se de sessioner som har varit';
$string['studentseereports_help'] = 'Om detta är inställt till Nej så kommer bara användare som har kapaciteten mod/chat:readlog att kunna se loggarna för direktsamtalet.';
$string['talk'] = 'Tala';
$string['updatemethod'] = 'Metod för uppdatering';
$string['updaterate'] = 'Så snabbt uppdateras direktsamtalet:';
$string['userlist'] = 'Lista över användare';
$string['usingchat'] = 'Använder direktsamtal';
$string['usingchat_help'] = 'Modulen för chat innehåller några funktioner som ska göra det trevligare
att chatta.
**Smilies**
: Alla "smilies (emoticons) som Du kan skriva in på andra ställen
i Moodle kan Du även skriva in här och de kommer att visas på
ett korrekt sätt.
**Länkar**
: Internetadresser omvandlas automatiskt till länkar.
**Att uttrycka känslor**
: Du kan inleda en rad med "/me" eller ":" för att uttrycka känslor.
Om Du, till exempel, heter Lasse och skriver in ":skrattar"
eller "/me skrattar!" så kommer alla att se "Lasse skrattar!"
**Pipsignaler**
: Du kan skicka ett ljud till andra genom att klicka på "pip"-länken bredvid deras namn.
Du kan också skicka en signal till alla samtidigt genom att skriva "beep all".
**HTML**
: Om Du kan lite HTML-kod så kan Du använda det i Din text för att lägga in bilder,
spela upp ljud eller skapa text med olika färger och storlekar.';
$string['viewreport'] = 'Visa  de senaste sessionerna för direktsamtal';
