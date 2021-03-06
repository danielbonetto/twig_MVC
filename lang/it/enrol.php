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
 * Strings for component 'enrol', language 'it', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Plugin di iscrizione disponibili';
$string['addinstance'] = 'Aggiungi metodo';
$string['ajaxnext25'] = 'Successivi 25...';
$string['ajaxoneuserfound'] = 'Trovato 1 utente';
$string['ajaxxusersfound'] = 'Trovati {$a} utenti';
$string['assignnotpermitted'] = 'Non hai i privilegi o non puoi assegnare ruoli in questo corso.';
$string['bulkuseroperation'] = 'Operazioni di massa sugli utenti';
$string['configenrolplugins'] = 'Per favore seleziona i plugin necessari e mettili in sequenza di utilizzo.';
$string['custominstancename'] = 'Nome istanza personalizzata';
$string['defaultenrol'] = 'Aggiungi istanza nei nuovi corsi';
$string['defaultenrol_desc'] = 'E\' possibile aggiungere per default questo plugin in tutti i nuovi corsi.';
$string['deleteinstanceconfirm'] = 'Sei certo di eliminare l\'istanza della plugin di iscrizione "{$a->name}" che ha {$a->users} utenti iscritti?';
$string['durationdays'] = '{$a} giorni';
$string['enrol'] = 'Iscrivi';
$string['enrolcandidates'] = 'Utenti non iscritti';
$string['enrolcandidatesmatching'] = 'Corrispondenza con utenti non iscritti';
$string['enrolcohort'] = 'Iscrivi gruppo globale';
$string['enrolcohortusers'] = 'Iscrivi utenti';
$string['enrollednewusers'] = 'Sono stati iscritti correttamente {$a} nuovi utenti';
$string['enrolledusers'] = 'Utenti iscritti';
$string['enrolledusersmatching'] = 'Corrispondenza con utenti iscritti';
$string['enrolme'] = 'Iscrivimi in questo corso';
$string['enrolmentinstances'] = 'Metodi di iscrizione';
$string['enrolmentnew'] = 'Nuova iscrizione a {$a}';
$string['enrolmentnewuser'] = '{$a->user} si è iscritto al corso "{$a->course}"';
$string['enrolmentoptions'] = 'Opzioni di iscrizione';
$string['enrolments'] = 'Iscrizione';
$string['enrolnotpermitted'] = 'Non hai i privilegi o non sei autorizzato ad iscrivere persone nel corso.';
$string['enrolperiod'] = 'Durata iscrizione';
$string['enroltimeend'] = 'L\'iscrizione termina';
$string['enroltimestart'] = 'L\'iscrizione inizia';
$string['enrolusage'] = 'Istanze / iscrizioni';
$string['enrolusers'] = 'Iscrivi utenti';
$string['errajaxfailedenrol'] = 'Non è stato possibile iscrivere l\'utente';
$string['errajaxsearch'] = 'Si è verificato un errore durante la ricerca degli utenti';
$string['erroreditenrolment'] = 'Si è verificato un errore durante il tentativo di modifica di una iscrizione';
$string['errorenrolcohort'] = 'Si è verificato un errore nel corso durante la creazione di un\'istanza Sincronizzazione gruppi globali';
$string['errorenrolcohortusers'] = 'Si è verificato un errore durante l\'iscrizione nel corso dei membri del gruppo globale';
$string['errorwithbulkoperation'] = 'Si è verificato un errore durante la modifica di massa delle iscrizione';
$string['extremovedaction'] = 'Azione di disiscrizione esterna';
$string['extremovedaction_help'] = 'Scegli l\'azione da compiere quando le iscrizioni degli utenti scompaiono dalla sorgente esterna. Tieni presente che alcuni dati ed impostazioni dell\'utente verranno eliminati quando l\'utente sarà disiscritto dal corso.';
$string['extremovedkeep'] = 'Mantieni iscritti gli utenti';
$string['extremovedsuspend'] = 'Disabilita l\'iscrizione al corso';
$string['extremovedsuspendnoroles'] = 'Disabilita le iscrizioni al corso e rimuovi i ruoli';
$string['extremovedunenrol'] = 'Disiscrivi gli utenti dal corso';
$string['finishenrollingusers'] = 'Termina iscrizione utenti';
$string['invalidenrolinstance'] = 'L\'istanza dell\'iscrizione non è valida';
$string['invalidrole'] = 'Ruolo non valido';
$string['manageenrols'] = 'Gestione iscrizione';
$string['manageinstance'] = 'Gestisci';
$string['nochange'] = 'Nessuna modifica';
$string['noexistingparticipants'] = 'Non ci sono partecipanti';
$string['noguestaccess'] = 'Gli ospiti non possono entrare in questo corso, per favore prova ad autenticarti.';
$string['none'] = 'Nessuno';
$string['notenrollable'] = 'Non puoi iscriverti al corso.';
$string['notenrolledusers'] = 'Altri utenti';
$string['otheruserdesc'] = 'Gli utenti elencati di seguito non sono iscritti al corso ma possiedono dei ruoli sia ereditati sia assegnati direttamente.';
$string['participationactive'] = 'Attivo';
$string['participationstatus'] = 'Stato';
$string['participationsuspended'] = 'Sospeso';
$string['periodend'] = 'fino al {$a}';
$string['periodstart'] = 'a partire da {$a}';
$string['periodstartend'] = 'da {$a->start} a {$a->end}';
$string['recovergrades'] = 'Recupera, ove possibile, i voti precedenti dell\'utente';
$string['rolefromcategory'] = '{$a->role} (Ereditato dalla categoria di corsi)';
$string['rolefrommetacourse'] = '{$a->role} (Ereditato dal corso genitore)';
$string['rolefromsystem'] = '{$a->role} (Assegnato a livello di sito)';
$string['rolefromthiscourse'] = '{$a->role} (Assegnato in questo corso)';
$string['startdatetoday'] = 'Oggi';
$string['synced'] = 'Sincronizzato';
$string['totalenrolledusers'] = '{$a} utenti iscritti';
$string['totalotherusers'] = '{$a} altri utenti';
$string['unassignnotpermitted'] = 'Non hai i privilegi per togliere ruoli da questo corso';
$string['unenrol'] = 'Disiscrivi';
$string['unenrolconfirm'] = 'Sei certo di disiscrivere l\'utente {$a->user}" dalcorso "{$a->course}"?';
$string['unenrolme'] = 'Disiscrivimi da {$a}';
$string['unenrolnotpermitted'] = 'Non hai i privilegi o non sei autorizzato ad disiscrivere persone dal corso.';
$string['unenrolroleusers'] = 'Disiscrivi utenti';
$string['uninstallconfirm'] = 'Stai per eliminare il plugin di iscrizione \'{$a}\'. Tutti i dati presenti nel database associati a questa plugin verranno eliminati. Sei certo di continuare ?';
$string['uninstalldeletefiles'] = 'Tutti i dati associati al plugin di iscrizione \'{$a->plugin}\' sono stati eliminati dal database. Per completare l\'eliminazione ed evitare che il plugin si re-installi automaticamente, devi eliminare anche la cartella {$a->directory} dal tuo server.';
$string['unknowajaxaction'] = 'E\' stata richiesta un\'azione sconosciuta';
$string['unlimitedduration'] = 'Illimitato';
$string['usersearch'] = 'Cerca';
$string['withselectedusers'] = 'Con gli utenti selezionati';
