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
 * Strings for component 'qformat_xml', language 'es', branch 'MOODLE_22_STABLE'
 *
 * @package   qformat_xml
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname_help'] = 'Es un formato específico de Moodle para importar y exportar preguntas utilizadas en las actividades de tipo cuestionario.';
$string['truefalseimporterror'] = '<b> ¡Atención! </ b>: La pregunta de tipo verdadero/falso \'{$a->questiontext}\' no pudo ser importada correctamente. No estaba claro si la respuesta correcta era Verdadero o Falso. La pregunta se ha importado suponiendo de que la respuesta es \'{$a->answer}\'. Si esto no es correcto, tendrá que editar la pregunta.';
$string['xmlimportnoquestion'] = 'No se encuentra el texto de la pregunta en el fichero XML';
