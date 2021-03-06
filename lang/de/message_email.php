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
 * Strings for component 'message_email', language 'de', branch 'MOODLE_22_STABLE'
 *
 * @package   message_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowusermailcharset'] = 'Zeichensatz für E-Mails wählbar';
$string['configallowusermailcharset'] = 'Wenn diese Option aktiviert ist, dürfen allen Nutzer/innen den Zeichensatz für E-Mails selbst festlegen.';
$string['configmailnewline'] = 'Zeichen für Zeilenschaltung in E-Mails. CRLF ist gemäß RFC 822bis notwendig. Einige Mailserver wandeln LF automatisch in CRLF um, andere konvertieren CRLF falsch in CRCRLF und wieder andere weisen Mails mit reinem LF zurück (z.B. qmail). Probieren Sie unterschiedliche Einstellungen aus, falls Probleme mit dem Mailversand auftreten oder doppelte Zeilenschaltungen angezeigt werden.';
$string['confignoreplyaddress'] = 'Tragen Sie hier die E-Mail-Adresse ein, die als Absender beim Versand von Nachrichten (z.B. aus Foren) genutzt werden soll, wenn die E-Mail-Adresse des Absenders nicht für Rückantworten genutzt werden kann.';
$string['configsitemailcharset'] = 'Alle E-Mails aus diesem Moodle werden mit dem hier eingetragen Zeichensatz versandt. Wenn Sie die nächste Einstellung aktivieren, können alle Nutzer/innen diese Vorgabe für sich selber ändern.';
$string['configsmtphosts'] = 'Geben Sie hier den vollen Namen von einem oder mehreren lokalen SMTP-Servern an, die Moodle für den E-Mail-Versand benutzen soll (z.B. \'mail.a.de\' oder \'mail.a.de;mail.b.de\'). Falls Sie einen Nicht-Standard-Port verwenden (z. B. nicht Port 25), verwenden Sie die [server]:[port] Syntax (z.B. mail.a.de:587). Wenn Sie dieses frei lassen, wird Moodle die Standard-Methode von PHP zum Senden von E-Mails verwenden.';
$string['configsmtpmaxbulk'] = 'Maximale Anzahl von Nachrichten pro SMTP-Session. Die Gruppierung von Mitteilungen sollte den Versand von E-mails beschleunigen. Mit Werten kleiner als 2 wird für jede E-Mail eine neue SMTP-Session gestartet.';
$string['configsmtpuser'] = 'Sofern Sie einen SMTP-Server angegeben haben und der Server Zugangsdaten erfordert, dann geben Sie hier Anmeldenamen und Kennwort an.';
$string['email'] = 'E-Mail-Mitteilung senden an';
$string['mailnewline'] = 'Festlegung für Zeilenschaltung in E-Mails';
$string['noreplyaddress'] = '"Nicht-Antworten" Adresse';
$string['pluginname'] = 'E-Mail';
$string['sitemailcharset'] = 'E-Mail-Zeichensatz';
$string['smtphosts'] = 'SMTP-Server';
$string['smtpmaxbulk'] = 'SMTP-Massenversand';
$string['smtppass'] = 'SMTP-Kennwort';
$string['smtpuser'] = 'SMTP-Anmeldename';
