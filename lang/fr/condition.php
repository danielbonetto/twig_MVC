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
 * Strings for component 'condition', language 'fr', branch 'MOODLE_22_STABLE'
 *
 * @package   condition
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Ajouter au formulaire {no} conditions d\'activité';
$string['addgrades'] = 'Ajouter {no} conditions de note';
$string['availabilityconditions'] = 'Restreindre la disponibilité';
$string['availablefrom'] = 'Disponible dès le';
$string['availablefrom_help'] = 'Les dates de disponibilité dès le/jusqu\'au détermine la période durant laquelle les participants peuvent accéder à l\'activité via un lien sur la page du cours.
La différence entre ces dates et les dates d\'accès indiquées dans les réglages de l\'activité est que ces dernières permettent de voir la description de l\'activité, tandis que les dates de disponibilité empêchent totalement l\'accès à l\'activité.';
$string['availableuntil'] = 'Disponible jusqu\'au';
$string['badavailabledates'] = 'Dates non valables. Si vous définissez les deux dates, assurez-vous que la date de début de disponibilité soit antérieure à celle de fin.';
$string['badgradelimits'] = 'Si vous définissez une limite supérieure et une limite inférieure, la limite supérieure doit être plus grande que la limite inférieure.';
$string['completion_complete'] = 'doit être marqué comme terminé';
$string['completion_fail'] = 'doit être terminé avec une note d\'échec';
$string['completion_incomplete'] = 'ne doit pas être marqué comme terminé';
$string['completion_pass'] = 'doit être terminé avec une note de réussite';
$string['completioncondition'] = 'Condition de fin d\'activité';
$string['completioncondition_help'] = 'Ce réglage détermine les conditions sur l\'achèvement d\'autres activités pour que l\'activité soit rendue disponible. Le suivi d\'achèvement des activités doit bien entendu être activé avant qu\'une telle condition puisse être fixée.
Plusieurs conditions d\'achèvement peuvent être spécifiées. Dans ce cas, l\'activité sera rendue disponible lorsque toutes les conditions d\'achèvement d\'activité seront remplies.';
$string['configenableavailability'] = 'Permet de définir des conditions (basées sur la date, une note ou la fin d\'une activité) qui déterminent si une activité ou une ressource est disponible.';
$string['enableavailability'] = 'Activer la disponibilité conditionnelle';
$string['grade_atleast'] = 'doit être supérieur à';
$string['grade_upto'] = 'et inférieur à';
$string['gradecondition'] = 'Condition de note';
$string['gradecondition_help'] = 'Ce réglage détermine les conditions sur les notes pour que l\'activité soit rendue disponible.
Plusieurs conditions sur les notes peuvent être spécifiées. Dans ce cas, l\'activité sera rendue disponible lorsque toutes les conditions seront remplies.';
$string['gradeitembutnolimits'] = 'Veuillez saisir une limite supérieure ou une limite inférieure, ou les deux.';
$string['gradelimitsbutnoitem'] = 'Vous devez sélectionner un élément d\'évaluation.';
$string['gradesmustbenumeric'] = 'Les notes maximales et minimales doivent être des nombres (ou vides).';
$string['none'] = '(aucune)';
$string['notavailableyet'] = 'Pas encore disponible';
$string['requires_completion_0'] = 'Non disponible tant que l\'activité <strong>{$a}</strong> n\'est pas terminée.';
$string['requires_completion_1'] = 'Non disponible avant que l\'activité <strong>{$a}</strong> soit marquée comme terminée.';
$string['requires_completion_2'] = 'Non disponible avant que l\'activité <strong>{$a}</strong> soit terminée et réussie.';
$string['requires_completion_3'] = 'Non disponible tant que l\'activité <strong>{$a}</strong> est terminée et non réussie.';
$string['requires_date'] = 'Disponible dès le {$a}.';
$string['requires_date_before'] = 'Disponible jusqu\'au {$a}.';
$string['requires_date_both'] = 'Disponible du {$a->from} au {$a->until}.';
$string['requires_date_both_single_day'] = 'Disponible le {$a}';
$string['requires_grade_any'] = 'Non disponible avant que vous receviez une note pour <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'Non disponible tant que vous n\'obtenez pas une note adéquate dans <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Non disponible avant que vous obteniez une note requise dans <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'Non disponible tant que vous n\'obtenez pas une note spécifique dans <strong>{$a}</strong>.';
$string['showavailability'] = 'Avant que l\'activité soit disponible';
$string['showavailability_hide'] = 'Cacher complètement l\'activité';
$string['showavailability_show'] = 'Afficher l\'activité en gris, avec une information sur la restriction';
$string['userrestriction_hidden'] = 'Restreinte (cachée complètement, pas de message) : « {$a} »';
$string['userrestriction_visible'] = 'Restreinte : « {$a} »';
