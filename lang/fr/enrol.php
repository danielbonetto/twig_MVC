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
 * Strings for component 'enrol', language 'fr', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Plugins d\'inscription aux cours disponibles';
$string['addinstance'] = 'Ajouter méthode';
$string['ajaxnext25'] = '25 suivants...';
$string['ajaxoneuserfound'] = '1 utilisateur trouvé';
$string['ajaxxusersfound'] = '{$a} utilisateurs trouvés';
$string['assignnotpermitted'] = 'Vous n\'avez pas les autorisations pour attribuer des rôles dans ce cours.';
$string['bulkuseroperation'] = 'Opération en lot sur les utilisateurs';
$string['configenrolplugins'] = 'Veuillez sélectionner tous les plugins désirés et les trier dans l\'ordre adéquat.';
$string['custominstancename'] = 'Nom personnalisé de l\'instance';
$string['defaultenrol'] = 'Ajouter une instance aux nouveaux cours';
$string['defaultenrol_desc'] = 'Il est possible d\'ajouter par défaut ce plugin à tous les nouveaux cours.';
$string['deleteinstanceconfirm'] = 'Voulez-vous vraiment supprimer l\'instance du plugin d\'inscription « {$a->name} » gérant {$a->users} utilisateurs inscrits ?';
$string['durationdays'] = '{$a} jours';
$string['enrol'] = 'Inscrire';
$string['enrolcandidates'] = 'Utilisateurs non inscrits';
$string['enrolcandidatesmatching'] = 'Utilisateurs non inscrits correspondants';
$string['enrolcohort'] = 'Inscrire une cohorte';
$string['enrolcohortusers'] = 'Inscrire des utilisateurs';
$string['enrollednewusers'] = '{$a} utilisateurs inscrits';
$string['enrolledusers'] = 'Utilisateurs inscrits';
$string['enrolledusersmatching'] = 'Utilisateurs inscrits correspondants';
$string['enrolme'] = 'M\'inscrire dans ce cours';
$string['enrolmentinstances'] = 'Méthodes d\'inscription';
$string['enrolmentnew'] = 'Nouvelle inscription dans {$a}';
$string['enrolmentnewuser'] = '{$a->user} s\'est inscrit au cours « {$a->course} »';
$string['enrolmentoptions'] = 'Options d\'inscription';
$string['enrolments'] = 'Inscriptions';
$string['enrolnotpermitted'] = 'Vous n\'avez pas les autorisations pour inscrire quelqu\'un dans ce cours.';
$string['enrolperiod'] = 'Durée d\'inscription';
$string['enroltimeend'] = 'L\'inscription se termine';
$string['enroltimestart'] = 'L\'inscription commence';
$string['enrolusage'] = 'Méthodes / inscriptions';
$string['enrolusers'] = 'Inscrire des utilisateurs';
$string['errajaxfailedenrol'] = 'Échec de l\'inscription de l\'utilisateur';
$string['errajaxsearch'] = 'Erreur lors de la recherche d\'utilisateurs';
$string['erroreditenrolment'] = 'Une erreur est survenue lors de la modification de l\'inscription d\'utilisateurs';
$string['errorenrolcohort'] = 'Erreur lors de la création de l\'instance de synchronisation des cohortes dans ce cours.';
$string['errorenrolcohortusers'] = 'Erreur lors de l\'inscription des membres de cohorte dans ce cours.';
$string['errorwithbulkoperation'] = 'Une erreur est survenue lors du traitement de vos modifications d\'inscription en lot.';
$string['extremovedaction'] = 'Action de désincription externe';
$string['extremovedaction_help'] = 'Veuillez sélectionner une action à effectuer lorsque l\'inscription d\'un utilisateur disparaît de la source d\'inscriptions externe. Attention : certains réglages et données utilisateur sont supprimées du cours lors de la désinscription.';
$string['extremovedkeep'] = 'Garder l\'utilisateur inscrit';
$string['extremovedsuspend'] = 'Désactiver l\'inscription au cours';
$string['extremovedsuspendnoroles'] = 'Désactiver l\'inscription au cours et retirer l\'attribution des rôles';
$string['extremovedunenrol'] = 'Désinscrire du cours l\'utilisateur';
$string['finishenrollingusers'] = 'Terminer l\'inscription des utilisateurs';
$string['invalidenrolinstance'] = 'Instance d\'inscription non valide';
$string['invalidrole'] = 'Rôle non valide';
$string['manageenrols'] = 'Gérer les plugins d\'inscription';
$string['manageinstance'] = 'Gestion';
$string['nochange'] = 'Aucun changement';
$string['noexistingparticipants'] = 'Aucun participant';
$string['noguestaccess'] = 'Les visiteurs anonymes ne peuvent pas accéder à ce cours. Veuillez vous connecter.';
$string['none'] = 'Aucun';
$string['notenrollable'] = 'Vous ne pouvez pas  vous inscrire à ce cours.';
$string['notenrolledusers'] = 'Autres utilisateurs';
$string['otheruserdesc'] = 'Les utilisateurs suivants ne sont pas inscrits dans ce cours, mais y ont des rôles attribués ou hérités.';
$string['participationactive'] = 'Active';
$string['participationstatus'] = 'Statut';
$string['participationsuspended'] = 'Suspendu';
$string['periodend'] = 'jusqu\'au {$a}';
$string['periodstart'] = 'dès le {$a}';
$string['periodstartend'] = 'du {$a->start} au {$a->end}';
$string['recovergrades'] = 'Récupérer si possible les anciennes notes de l\'utilisateur';
$string['rolefromcategory'] = '{$a->role} (hérité d\'une catégorie de cours)';
$string['rolefrommetacourse'] = '{$a->role} (hérité du cours parent)';
$string['rolefromsystem'] = '{$a->role} (attribué au niveau du site)';
$string['rolefromthiscourse'] = '{$a->role} (attribué dans ce cours)';
$string['startdatetoday'] = 'Aujourd\'hui';
$string['synced'] = 'Synchronisé';
$string['totalenrolledusers'] = '{$a} utilisateurs inscrits';
$string['totalotherusers'] = '{$a} autres utilisateurs';
$string['unassignnotpermitted'] = 'Vous n\'avez pas les autorisations pour retirer des rôles dans ce cours';
$string['unenrol'] = 'Désinscription';
$string['unenrolconfirm'] = 'Voulez-vous vraiment désinscrire « {$a->user} » du cours « {$a->course} »?';
$string['unenrolme'] = 'Me désinscrire de {$a}';
$string['unenrolnotpermitted'] = 'Vous n\'avez pas les autorisations pour désinscrire cet utilisateur de ce cours.';
$string['unenrolroleusers'] = 'Désinscrire les utilisateurs';
$string['uninstallconfirm'] = 'Vous êtes sur le point de supprimer complètement le plugin d\'inscription « {$a} ». Ceci effacera totalement de la base de données tout ce qui concerne ce type d\'inscription. Voulez-vous vraiment effectuer cette action ?';
$string['uninstalldeletefiles'] = 'Toutes les données associées au plugin d\'inscription « {$a->plugin} » ont été supprimées de la base de données. Pour terminer la suppression et éviter ainsi que le plugin ne se réinstalle, veuillez supprimer le dossier suivant de votre serveur : {$a->directory}';
$string['unknowajaxaction'] = 'Action demandée inconnue';
$string['unlimitedduration'] = 'Illimité';
$string['usersearch'] = 'Recherche';
$string['withselectedusers'] = 'Pour les utilisateurs sélectionnés';
