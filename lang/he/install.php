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
 * Strings for component 'install', language 'he', branch 'MOODLE_22_STABLE'
 *
 * @package   install
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'ספריית מנהל המערכת המצויינת שגויה';
$string['admindirname'] = 'ספריית מנהל המערכת';
$string['admindirsetting'] = 'שירותי אירוח אתרים מעטים משתמשים/מתנהלים כ-Url מיוחד עבורך כדי לגשת ללוח הבקרה למשל. למרבה הצער דבר זה עומד נגד המיקום התקני של עמודי מנהל המערכת של Moodle. תוכל לתקן זאת ע"י שינוי שם ספריית ה-admin בהתקנה שלך והכנסת שם חדש זה כאן. למשל:<br /> <br /><b>moodleadmin</b><br /> <br />
דבר זה יתקן את קישורי ה-admin ב-Moodle.';
$string['admindirsettinghead'] = 'הגדר את ספריית מנהל המערכת...';
$string['admindirsettingsub'] = 'שירותי אירוח אתרים מעטים משתמשים/מתנהלים כ-Url מיוחד עבורך כדי לגשת ללוח הבקרה למשל. למרבה הצער דבר זה עומד נגד המיקום התקני של עמודי מנהל המערכת של Moodle. תוכל לתקן זאת ע"י שינוי שם ספריית ה-admin בהתקנה שלך והכנסת שם חדש זה כאן. למשל:<br /> <br /><b>moodleadmin</b><br /> <br />
דבר זה יתקן את קישורי ה-admin ב-Moodle.';
$string['availablelangs'] = 'חבילות שפה זמינות';
$string['caution'] = 'אזהרה';
$string['chooselanguage'] = 'בחר שפה';
$string['chooselanguagehead'] = 'בחר שפה';
$string['chooselanguagesub'] = 'אנא בחר שפה עבור ההתקנה בלבד. תוכל לבחור בשפה שונה לאתר ולמשתמש באחד מהמסכים הבאים.';
$string['cliadminpassword'] = 'סיסמה חדשה למנהל המערכת';
$string['cliadminusername'] = 'שם משתמש של חשבון מנהל המערכת';
$string['clialreadyconfigured'] = 'קובץ config.php כבר קיים, אנא השתמש ב
admin/cli/install_database.php
אם ברצונך להתקין את אתר זה.';
$string['clialreadyinstalled'] = 'קובץ ה-config.php קיים כבר, אנא השתמש ב- admin/cli/upgrade.php
אם ברצונך לשדרג את האתר שלך.';
$string['cliinstallfinished'] = 'ההתקנה הושלמה בהצלחה.';
$string['cliinstallheader'] = 'תוכנית התקנת Moodle {$a} בשורת הפקודה';
$string['climustagreelicense'] = 'במצב לא אינטרקטיבי הינך חייב להסכים לרשיון המצויין כאן, על-ידי סימון אפשרות הסכמת הרשיון.';
$string['clitablesexist'] = 'טבלאות מסד הנתונים נוחכות כבר, התקנת CLI לא יכולה להימשך.';
$string['compatibilitysettings'] = 'בדיקת הגדרות ה-PHP שלך...';
$string['compatibilitysettingshead'] = 'בדיקת הגדרות ה-PHP שלך...';
$string['compatibilitysettingssub'] = 'השרת שלך צריך לעבור את כל בדיקות אלו כדי להפעיל את Moodle כהלכה.';
$string['configfilenotwritten'] = 'תסריט (script) ההתקנה לא הצליח ליצור באופן אוטומטי את קובץ config.php המכיל את בחירת ההגדרות שלך, ייתכן שהדבר קרה בגלל שספריית ה-Moodle שלך איננה ניתנת לכתיבה. תוכל באופן ידני להעתיק את הקוד הבא לתוך קובץ config.php בספריית האם של Moodle.';
$string['configfilewritten'] = 'קובץ config.php נוצר בהצלחה';
$string['configurationcomplete'] = 'הגדרות התצורה הושלמו';
$string['configurationcompletehead'] = 'הגדרות התצורה הושלמו';
$string['configurationcompletesub'] = 'Moodle ניסה לשמור את הגדרות התצורה שלך בקובץ בספריית ה-root של התקנת ה-Moodle.';
$string['database'] = 'מסד נתונים';
$string['databasecreationsettings'] = 'כעת נותר לך לעצב את הגדרות מסד הנתונים שלך היכן שרוב נתוני Moodle יאוחסנו. מסד נתונים זה ייווצר באופן אוטומטי ע"י ההתקנה
עם ההגדרות המצויינות להלן:
</br>
<br /> <br />
<b>סוג:</b> תוקן ל"mysql" ע"י קובץ ההתקנה<br />
<b>מחשב מארח:</b> תוקן ל"localhost" ע"י קובץ ההתקנה<br />
<b>שם:</b> שם מסד הנתונים, למשל: Moodle <br />
<b>שם משתמש מסד הנתונים:</b> תוקן ל"root" ע"י קובץ ההתקנה<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות';
$string['databasecreationsettingshead'] = 'כעת נותר לך לעצב את הגדרות מסד הנתונים שלך היכן שרוב נתוני Moodle יאוחסנו. מסד נתונים זה ייווצר באופן אוטומטי ע"י ההתקנה
עם ההגדרות המצויינות להלן.';
$string['databasecreationsettingssub'] = '<b>סוג:</b> תוקן ל"mysql" ע"י קובץ ההתקנה<br />
<b>מחשב מארח:</b> תוקן ל"localhost" ע"י קובץ ההתקנה<br />
<b>שם:</b> שם מסד הנתונים, למשל: Moodle <br />
<b>שם משתמש מסד הנתונים:</b> תוקן ל"root" ע"י קובץ ההתקנה<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות';
$string['databasehead'] = 'הגדרות מסד הנתונים';
$string['databasehost'] = 'מסד הנתונים המארח (host)';
$string['databasename'] = 'שם מסד הנתונים';
$string['databasepass'] = 'סיסמת מסד הנתונים';
$string['databasesettings'] = 'כעת נותר לך לעצב את הגדרות מסד הנתונים שלך היכן שרוב נתוני Moodle יאוחסנו. מסד נתונים זה חייב כבר להיות קיים בנוסף שם משתמש וסיסמה לשם גישה אליו.
.<br />
<br /> <br />
<b>סוג:</b> mysql או postgres7<br />
<b>מחשב מארח:</b> לדוגמה localhost או db.isp.com<br />
<b>שם:</b> database שם מסד הנתונים למשל-moodle<br />
<b>שם משתמש:</b> שם משתמש מסד הנתונים שלך<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות';
$string['databasesettingshead'] = 'כעת נותר לך לעצב את הגדרות מסד הנתונים שלך היכן שרוב נתוני Moodle יאוחסנו. מסד נתונים זה חייב כבר להיות קיים בנוסף שם משתמש וסיסמה לשם גישה אליו.';
$string['databasesettingssub'] = '<b>סוג:</b> mysql או postgres7<br />
<b>מחשב מארח:</b> לדוגמה localhost או db.isp.com<br />
<b>שם:</b> database שם מסד הנתונים למשל-moodle<br />
<b>שם משתמש:</b> שם משתמש מסד הנתונים שלך<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות';
$string['databasesettingssub_mssql'] = '<b>Type:</b> SQL*Server (non UTF-8) <b><font color="red">Experimental! (not for use in production)</font></b><br />
<b>מחשב מארח:</b> לדוגמה localhost או db.isp.com<br />
<b>שם:</b> database שם מסד הנתונים למשל-moodle<br />
<b>שם משתמש:</b> שם משתמש מסד הנתונים שלך<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות (הכרחי)';
$string['databasesettingssub_mssql_n'] = '</b> סוג:</b> SQL*server (UTF-8 enabled(<br>
<b>מחשב מארח:</b> לדוגמה localhost או db.isp.com<br />
<b>שם:</b> database שם מסד הנתונים למשל-moodle<br />
<b>שם משתמש:</b> שם משתמש מסד הנתונים שלך<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות (הכרחי)';
$string['databasesettingssub_mysql'] = '<b>סוג:</b> MySQL<br />
<b>מחשב מארח:</b> לדוגמה localhost או db.isp.com<br />
<b>שם:</b> database שם מסד הנתונים למשל-moodle<br />
<b>שם משתמש:</b> שם משתמש מסד הנתונים שלך<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות (אפשרי)';
$string['databasesettingssub_mysqli'] = '<b>סוג:</b> Improved MySQL<br />
<b>מחשב מארח:</b> לדוגמה localhost או db.isp.com<br />
<b>שם:</b> שם מסד הנתונים למשל-moodle<br />
<b>שם משתמש:</b> שם משתמש מסד הנתונים שלך<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות (אפשרי)';
$string['databasesettingssub_oci8po'] = '<b>סוג:</b> Oracle<br />
<b>מחשב מארח:</b> לא בשימוש, חייב להיות ריק מצד שמאל<br />
<b>שם: </b> השם ניתן מחיבור ה- tnsnames.ora
<b>שם משתמש:</b> שם משתמש מסד הנתונים שלך<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות (mandatory, 2cc. max)';
$string['databasesettingssub_odbc_mssql'] = '<b>סוג:</b> SQL*Server (over ODBC) Experimental! (not for use in production)<br />
<b>מחשב מארח:</b> השם הניתן ע"י ה-DNS ב-ODBO control panel<br />
<b>שם משתמש:</b> שם משתמש מסד הנתונים שלך<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות (הכרחי)';
$string['databasesettingssub_postgres7'] = '<b>סוג:</b> PostgreSQL<br />
<b>מחשב מארח:</b> לדוגמה localhost או db.isp.com<br />
<b>שם:</b> database שם מסד הנתונים למשל-moodle<br />
<b>שם משתמש:</b> שם משתמש מסד הנתונים שלך<br />
<b>סיסמה:</b> סיסמת מסד הנתונים שלך<br />
<b>תחילית הטבלאות:</b> תחילית רשות לכל שמות הטבלאות (אפשרי)';
$string['databasesettingswillbecreated'] = '<b>הערה: </b> ההתקנה תנסה ליצור את מסד הנתונים אוטומטית אם הוא לא קיים.';
$string['databasesocket'] = '(socket) יוניקס';
$string['databasetypehead'] = 'בחר התקן מסד הנתונים';
$string['databasetypesub'] = 'Moodle תומך במגוון שרתי מסדי נתונים. אנא שאל את מנהל המערכת  אם אינך יודע איזה סוג לבחור.';
$string['databaseuser'] = 'שם משתמש מסד הנתונים';
$string['dataroot'] = 'ספריית הנתונים';
$string['datarooterror'] = 'ספריית "נתוני Moodle" שציינת לא נמצאה או יכלה להיווצר. אנא תקן את נתיב זה או צור את ספרייה זו באופן ידני.';
$string['datarootpermission'] = 'הרשאות תיקיות bתונים (data)';
$string['datarootpublicerror'] = 'ספריית ה-\'Data Directory\' שציינת ניתנת לגישה ישירות מהרשת. אתה מוכרח להשתמש בספרייה אחרת.';
$string['dbconnectionerror'] = 'לא הצלחנו להתחבר למסד הנתונים שציינת. אנא בדוק את הגדרות מסד הנתונים שלך.';
$string['dbcreationerror'] = 'חלה שגיאה ביצירת מסד הנתונים. המערכת לא הצליחה ליצור את שם מסד הנתונים שציינת עם ההגדרות שסופקו.';
$string['dbhost'] = 'שרת מארח';
$string['dbpass'] = 'סיסמה';
$string['dbport'] = 'יציאה (port)';
$string['dbprefix'] = 'Tables prefix';
$string['dbtype'] = 'סוג';
$string['dbwrongencoding'] = 'מסד הנתונים שציינת פועל תחת קידוד לא מומלץ ({$a}). יהיה זה עדיף להשתמש באחד מקידודי ה- Unicode (UTF-8) במקום. בכל אופן, תוכל לעקוף את נסיון זה ע"י בחירה ב"דלג על DB Encoding Test" המצויין למטה, אך תוכל להתקל בבעיות שוב בעתיד.';
$string['dbwronghostserver'] = 'הינך חייב לעקוב אחר תפקידי ה"מארח" כמתואר למעלה.';
$string['dbwrongnlslang'] = 'משתנה הסביבה NLS_LANG בשרת האתר שלךחייב להשתמש בקבוצת קידוד התווים AL32UTF8. ראה תיעוד ה-PHP על איך להגדיר כהלכה את OCI8.';
$string['dbwrongprefix'] = 'אתה חייב לעקוב אחר תפקידי ה-"Table Prefix" כמוסבר למעלה';
$string['directorysettings'] = '<p> אנא וודא את מיקומי התקנת Moodle זו.</p>
<p><b>כתובת האתר:</b>
ציין את כתובת האתר המלאה אשר Moodle יופעל ממנה. אם שרת האתר שלך ניתן לגישה דרך Url-ים מרובים בחר באחד הטבעיים בו הסטודנטים ישתמשו. אל תכיל בתוך הכתובת זנב של לוכסן.</p>
<p><b>ספריית Moodle </b>
ציין את הנתיב הספרייה המלא עבור התקנה זו. שים לב כי כי האותיות הקטנות או גדולות נכונות.
<p><b>ספריית הנתונים:</b>
תצטרך למצוא מיקום עבור שמירת קבצים שהועלו לאתר Moodle שלך. ספרייה זו חייבת להיות בעלת הרשאת כתיבה וקריאה ע"י משתמש שרת האתר (בדרך כלל \'nobody\' או \'apache\'), אולם אסור שתהיה ברת גישה מהרשת.';
$string['directorysettingshead'] = 'אנא אשר את מיקומי התקנת Moodle זה.';
$string['directorysettingssub'] = '<p> אנא וודא את מיקומי התקנת Moodle זו.</p>
<p><b>כתובת האתר:</b>
ציין את כתובת האתר המלאה אשר Moodle יופעל ממנה. אם שרת האתר שלך ניתן לגישה דרך Url-ים מרובים בחר באחד הטבעיים בו הסטודנטים ישתמשו. אל תכיל בתוך הכתובת זנב של לוכסן.</p>
<br>
<br>
<p><b>ספריית Moodle </b>
ציין את הנתיב הספרייה המלא עבור התקנה זו. שים לב כי כי האותיות הקטנות או גדולות נכונות.
<br>
<br>
<p><b>ספריית הנתונים:</b>
תצטרך למצוא מיקום עבור שמירת קבצים שהועלו לאתר Moodle שלך. ספרייה זו חייבת להיות בעלת הרשאת כתיבה וקריאה ע"י שרת האתר ...';
$string['dirroot'] = 'ספריית ה-Moodle';
$string['dirrooterror'] = 'הגדרת ספריית ה-Moodle כנראה איננה נכונה - איננו מוצאים את התקנת Moodle כאן. הערך כאן אותחל.';
$string['download'] = 'הורדה';
$string['downloadlanguagebutton'] = 'הורד את חבילת השפה ה-&quot;{$a}&quot;';
$string['downloadlanguagehead'] = 'הורד חבילת שפה';
$string['downloadlanguagenotneeded'] = 'אתה יכול להמשיך את תהליך ההתקנה ע"י שימוש ב-"{$a}" שפת ברירת המחדל';
$string['downloadlanguagesub'] = 'כעת יש באפשרותך להוריד חבילת שפה ולהמשיך את תהליך ההתקנה עם שפה זו.
<br/><br/>
אם אינך מצליח להוריד את חבילת השפה, תהליך ההתקנה ימשיך בשפה האנגלית (כאשר תהליך ההתקנה הסתיים, תיהיה לך את האפשרות להוריד ולהתקין אילו חבילות שפה נוספות שתחפוץ).';
$string['doyouagree'] = 'האם אתה מסכים? (כן/לא):';
$string['environmenthead'] = 'בודק את הסביבה שלך...';
$string['environmentsub'] = 'אנו בודקים את רכיבים השונים';
$string['environmentsub2'] = 'לכל התקנת Moodle יש דרישות מינימליות לגרסת ה-PHP ומספר הרחבות הכרחי של ה-PHP.
בדיקת הסביבה הושלמה לפני התקנת כל אחד ושדרוגו.אם הינך מתקשה, אנא פנה למנהל המערכת בכדי להתקין גרסת PHP חדשה או לאפשר הרחבות PHP.';
$string['errorsinenvironment'] = 'בדיקת הסביבה נכשלה!';
$string['fail'] = 'כישלון';
$string['fileuploads'] = 'העלאת קבצים';
$string['fileuploadserror'] = 'חייב לאפשר זאת';
$string['fileuploadshelp'] = '<p> העלאת קובץ נמנעה בשרת שלך.</p>
<p> Moodle יכול עדיין להיות מותקן, אך בלי יכולת זו לא תוכל להעלות קבצי קורסים או תמונות פרופילי משתמש חדשות.</p>
<p> בכדי לאפשר את תכונה זו של העלאת קבצים (בניהול המערכת שלך), תצטרך  לערוך את קובץ php.ini ולשנות את המשתנה <b> file_uploads</b> ל-1 </p>';
$string['gdversion'] = 'גרסת GD';
$string['gdversionerror'] = 'ספריית GD אמורה לפעול וליצור תמונות';
$string['gdversionhelp'] = '<p> כנראה שלשרת שלך אין GD מותקן.</p>
GD היא ספרייה אשר נדרשת ע"י PHP לאפשר ל-Moodle להפעיל תמונות או צורות (כמו צלמיות פרופיל המשתמש) וליצור תמונות חדשות (כמו גרפים של יומני המעקב). Moodle עדיין יעבוד ללא GD - כך שמאפיינים אלו לא יהיו זמינות לך.</p>
<p> בכדי להוסיף את GD ל-PHP תחת unix, בצע קומפילציה ל-PHP ע"י שימוש בפרמטר ה --with.
</p>
<p> תחת Windows תוכל בפשטות לערוך את קובץ ה-php.ini ולהסיר את הערה תחת הפרמטר של php_gd2.dll. </p>';
$string['globalsquotes'] = 'טיפול לא בטוח של משתנים גלובלים';
$string['globalsquoteserror'] = 'תקן את הגדרות ה-PHP שלך: מנע את register_globals  ו/או אפשר את magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>צירוף מניעה של Magic Quotes GPC ואיפשור Register Globals בו זמנית לא מומלץ.</p>
<p>
ההגדרה המומלצת היא
<b>
magic_quotes_gpc = On
</b> ו-
<b>
register_globals = Off
</b>
בקובץ ה-php.ini שלך
</p>
<p> אם אין לך גישה לקובץ ה-php.ini שלך יתכן ותוכל להחליף את השורה הבאה בקובץ שנקרא .htaccess בתוך ספריית ה-Moodle שלך.
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['inputdatadirectory'] = 'ספריית המידע
(Data directory):';
$string['inputwebadress'] = 'כתובת האתר:';
$string['inputwebdirectory'] = 'כתובת ספריית ה-Moodle:';
$string['installation'] = 'התקנה';
$string['langdownloaderror'] = 'לצערינו השפה "{$a}" לא הותקנה. תהליך ההתקנה ימשיך באנגלית.';
$string['langdownloadok'] = 'השפה "{$a}" הותקנה בהצלחה. תהליך ההתקנה ימשיך בשפה זו.';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'חייב למנוע זאת';
$string['magicquotesruntimehelp'] = '<p>רצוי שמשתנה Magic quotes runtime  יהיה כבוי עבור Moodle בכדי שיעבור כהלכה.
</p>
<p> בד"כ משתנה זה כבוי כברירת מחדל... ראה בהגדרות קובץ ה-php.ini את משתנה זה <b> magic_quotes_runtime </b>
<p> אם אין לך גישה לקובץ ה-php.ini, תוכל להחליף את השורה הבאה בקובץ שנקרא .htaccess בתוך ספריית ה-Moodle שלך.
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'גבול הזיכרון';
$string['memorylimiterror'] = 'משתנה גבול הזיכרון (memory limit) של ה-PHP הוגדר לרמה נמוכה... תוכל להגדיר זאת יותר מאוחר';
$string['memorylimithelp'] = '<p>
גבול הזיכרון של ה-PHP לשרת שלך כרגע מכוון ל-{$a}
</p>
<p>
דבר זה עלול לגרום בעיות זיכרון בהמשך, במיוחד אם יש לך מודולים רבים פעילים אוו הרבה משתמשים. </p>
<p> אנו ממליצים שתעצב את הגדרת ה-PHP עם ערך גבוה להגבלת הזיכרון, כמו 40M.
ישנן דרכים רבות לכך:
<ol>
<il>
אם תוכל להדר את PHP שוב עם <i> -- enable-memory-limit </i>
דבר זה יאפשר ל-Moodle להגדיר את גבול הזיכרון לבד. </i>
<i> אם יש לך גישה לקובץ ה-php.ini, תוכל לשנות את משתנה ה- <b> memory_limit </b>
שנה שם את הערך למשל ל-40M. אם אין לך גישה לקובץ זה תוכל לבקש ממנהל המערכת שלך שיעשה זאת עבורך.
</i>
<i> בכמה שרתי PHP תוכל ליצור קובץ  .htaccess בספריית  ה-Moodle שלך בצירוף שורה זו:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p> בכל אופן, בכמה שרתים דבר זה ימנע <b>מכל </b> הדפים לעבוד ( אם תראה שגיאות כאשר תיכנס לדפים) תדע כי הינך צריך להסיר את הקובץ  .htaccess.
</p>
</il>
</ol>

</p>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server with UTF-8 support (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP לא הוגדר כהלכה עם הרחבת MSSQL בכדי שהוא יוכל לתקשר עם SQL*SERVER. אנא בדוק את קובץ הגדרות הPHP שלך- php.ini או הדר את ה-PHP שלך.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP לא הוגדר כהלכה עם הרחבת MySQL בכדי שהוא יוכל לתקשר עם MySQL. אנא בדוק את קובץ הגדרות הPHP שלך- php.ini או הדר את ה-PHP שלך.';
$string['mysqli'] = 'Improved MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP לא הוגדר נכון עם הרחבת ה-MYSQLi כך שהוא יוכל להתקשר עם MYSQL. אנא בדוק את הגדרות ה-php.ini שלך או הרץ את תוכנת ה-PHP שוב. MYSQLi לא זמינה עבור PHP4.';
$string['nativemssql'] = 'SQL*Server FreeTDS (native/mssql)';
$string['nativemssqlhelp'] = 'כעת תצטרך להגדיר את מסד הנתונים בו ימצא וישמר רוב המידע. מסד נתונים זה צריך להיווצר מבעוד מועד בנוסף לשם משתמש וסיסמה לגישה אליו.
תחילית הטבלה הכרחית אף היא.';
$string['nativemysqli'] = 'Improved MySQL (native/mysqli)';
$string['nativemysqlihelp'] = 'כעת תצטרך להגדיר את מסד הנתונים בו ימצא וישמר רוב המידע. מסד הנתונים יכול להיווצר אם שם המשתמש שלו מצריך , שם המשתמש והסיסמה חייבים להיווצר קודם לכן. תחילית הטבלה אופציונלית.';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'כעת תצטרך להגדיר את מסד הנתונים בו ימצא וישמר רוב המידע. מסד נתונים זה צריך להיווצר מבעוד מועד בנוסף לשם משתמש וסיסמה לגישה אליו.
תחילית הטבלה הכרחית אף היא.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = 'כעת תצטרך להגדיר את מסד הנתונים בו ימצא וישמר רוב המידע. מסד נתונים זה צריך להיווצר מבעוד מועד בנוסף לשם משתמש וסיסמה לגישה אליו.
תחילית הטבלה הכרחית אף היא.';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'כעת תצטרך להגדיר את מסד הנתונים בו ימצא וישמר רוב המידע. מסד נתונים זה צריך להיווצר מבעוד מועד בנוסף לשם משתמש וסיסמה לגישה אליו.
תחילית הטבלה הכרחית אף היא.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP לא הוגדר כהלכה עם הרחבת OCI8 בכדי שהוא יוכל לתקשר עם Oracle. אנא בדוק את קובץ הגדרות הPHP שלך- php.ini או הדר את ה-PHP שלך.';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP לא הוגדר כהלכה עם הרחבת ODBC בכדי שהוא יוכל לתקשר עם SQL*Server. אנא בדוק את קובץ הגדרות הPHP שלך- php.ini או הדר את ה-PHP שלך.';
$string['pass'] = 'עבר';
$string['paths'] = 'נתיבים';
$string['pathserrcreatedataroot'] = 'ספריית המידע (Data Directory) - ({$a->dataroot}) לא יכולה להיווצר על-ידי המתקין.';
$string['pathshead'] = 'נתיבים מאושרים';
$string['pathsrodataroot'] = 'ספריית המידע (Data Directory) לא ניתנת לכתיבה.';
$string['pathsroparentdataroot'] = 'ספריית האב - ({$a->parent}) לא ניתנת לכתיבה.
ספריית המידע (Data Directory) - ({$a->dataroot}) לא יכולה להיווצר על-ידי המתקין.';
$string['pathssubdirroot'] = 'הנתיב המלא לספריית ההתקנה של Moodle';
$string['pathsunsecuredataroot'] = 'ספריית המידע (Data Directory) לא מאובטחת';
$string['pathswrongadmindir'] = 'ספריית ה-admin לא קיימת';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP לא הוגדר כהלכה עם הרחבת PGSQL בכדי שהוא יוכל לתקשר עם PostgreSQL. אנא בדוק את קובץ הגדרות הPHP שלך- php.ini או הדר את ה-PHP שלך.';
$string['phpextension'] = 'הרחבת PHP {$a}';
$string['phpversion'] = 'גירסת PHP';
$string['phpversionhelp'] = '<p>גרסת PHP חייבת להיות לפחות 4.3.0 או 5.1.0 (בגרסאות 5.0.x קיימות מספר בעיות ידועות) </p>
<p> במערכת שלך פועלת כרגע גרסת {$a} </p>
<p> אתה חייב לשדרג את גרסת ה-PHP שלך או לעבור למחשב מארח עם עם גירסת PHP חדשה! <br/>
(במקרים של גרסת 5.0.x תוכל גם לרדת בגרסה ל- 4.4.x)
</p>';
$string['postgres7'] = 'PostgreSQL (postgres7';
$string['releasenoteslink'] = 'למידע על גרסת Moodle זו, נא הכנס להסבר כאן {$a}';
$string['safemode'] = 'מצב בטוח (Safe Mode)';
$string['safemodeerror'] = 'ל-Moodle קיימת בעיה עם איפשור מצב הבטוח (safe mode)';
$string['safemodehelp'] = '<p>
קיימות מספר בעיות ל-Moodle כאשר ה"מצב הבטוח" פעיל, כנראה לא תיהיה אפשרות ליצור קבצים חדשים. </p>
<p> מצב בטוח (safe mode) מאופשר בד"כ ע"י מארחי שרתים ציבוריים פרנואידים, כך שתצטרך כנראה להחליף את חברת שרת המחשב המארח של אתר ה-Moodle שלך ולמצוא אחת חדשה.
<p> תוכל להמשיך בהתקנה אם תרצה, אך צפה לבעיות בהמשך.';
$string['sessionautostart'] = 'פתיחת מושב אוטומטית';
$string['sessionautostarterror'] = 'חייב לכבות זאת';
$string['sessionautostarthelp'] = '<p>
Moodle דורש תמיכת מושב ולא יכול לעבוד בלעדיו.
<p>
מושבים (sessions) ניתנים לאיפשור בקובץ php.ini... חפש את פרמטר session.auto_start';
$string['skipdbencodingtest'] = 'דלג על DB Encoding Test';
$string['sqliteextensionisnotpresentinphp'] = 'PHP לא הוגדר בצורה תקינה  עם הרחבת SQLite. אנא בדוק את קובץ ה-php.ini שלך או קמפל את PHP שוב.';
$string['upgradingqtypeplugin'] = 'שדרוג תוסף סוג שאלה.';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'הינך רואה את עמוד זה מפני שהתקנת והפעלת בהלכה את <strong>{$a->packname} {$a->packversion}</strong>
חבילה במחשבך. ברכותינו!';
$string['welcomep30'] = 'גירסת <strong>{$a->installername}</strong> כוללת את היישומים ליצור סביבה אשר בה <strong> Moodle </strong>
יפעל דהיינו:';
$string['welcomep40'] = 'החבילה כוללת בנוסף
<strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'השימוש בכל היישומים בחבילה זו מפוקח ע"י הרשיונות המתאימים להם. החבילה
<strong>{$a->installername}</strong>
השלמה היא
<a href="http://www.opensource.org/docs/definition_plain.html"> קוד פתוח
</a>
והיא מבוזרת תחת רישיון
<a>
href="http://www.gnu.org/copyleft/gpl.html">GPL</a>';
$string['welcomep60'] = 'העמודים הבאים יובילו אותך בצורה פשוטה דרך כמה צעדים לעיצוב הגדרות <strong>Moodle</strong> במחשבך.
תוכל לאשר את הגדרות  ברירת המחדל או, באפשרותך, לשנותם לפי צרכיך.';
$string['welcomep70'] = 'לחצו "המשך" למטה כדי להמשיך עם הגדרת ה-<strong>Moodle</strong>';
$string['wwwroot'] = 'כתובת האתר';
$string['wwwrooterror'] = 'כתובת האתר כנראה איננה תקנית - התקנת Moodle זו כנראה איננה שם. הערך כאן אותחל.';
