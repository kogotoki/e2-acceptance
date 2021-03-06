<? $stopwatch = microtime();
define('E2_VERSION', 2741);
define('E2_RELEASE', '2.3');
define('E2_UA_STRING', 'E2 (v' . E2_VERSION . '; Aegea)');
header('X-Powered-By: E2 Aegea v' . E2_VERSION);
define('WITH_AUDIO', true);
define('OUTPUT_CHARSET', 'UTF-8');
define('TRANS_TAGS_UTF8_URLS', false);
setlocale(LC_CTYPE, 'ru_RU.UTF');
mb_internal_encoding('UTF-8');
define('HSC_ENC', 'UTF-8');
if (function_exists('date_default_timezone_set')) {
    date_default_timezone_set('GMT');
}
error_reporting(E_ALL);
define('RUN_ID', chr(rand(65, 90)));
define('DEV_TRACK_TIME', false);
define('DEV_HOST', 'e2');
define('E2_WEBSITE_HOST', 'blogengine.ru');
define('E2_WEBSITE', 'http://' . E2_WEBSITE_HOST . '/');
define('SECONDS_IN_A_MINUTE', 60);
define('SECONDS_IN_AN_HOUR', 3600);
define('SECONDS_IN_A_DAY', 86400);
define('SECONDS_IN_A_MONTH', 2592000);
define('SECONDS_IN_A_YEAR', 31536000);
define('YEAR_DISPLAY_THRESH', 7884000);
define('KILO_THRESH', 768);
define('BYTES_DECIMALS', 1);
define('FILE_READ_BUFFER', 64 * 1024);
define('KEYWORDS_MANY_THRESH', 50);
define('SCALE_FACTOR_THRESH', 0.75);
define('NEW_FILES_RIGHTS', 0777);
$ra57c1 = substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], '/index.php'));
$u57de2 = $_SERVER['HTTP_HOST'];
/* Does not work properly with nginx and php built in web server
if(80!=$_SERVER['SERVER_PORT'])$u57de2.=':'. $_SERVER['SERVER_PORT']; */
$full_blog_url = 'http://' . $u57de2 . $ra57c1;
$t097cc = 'http://' . $u57de2 . $_SERVER['REQUEST_URI'];
$_user_folder_name = str_replace('/', '--', $u57de2 . $ra57c1);
if (substr($_user_folder_name, 0, 4) == 'www.') {
    $_user_folder_name = substr($_user_folder_name, 4);
}
if (is_file('superconfig.php')) {
    include 'superconfig.php';
}
if (is_file('multiuser')) {
    define('USER_MODE', 'multi');
    if (array_key_exists($_user_folder_name, $_superconfig['rewrites'])) {
        $_user_folder_name = $_superconfig['rewrites'][$_user_folder_name];
    }
} else {
    define('USER_MODE', 'single');
}
define('ROOT_FOLDER', $_SERVER['DOCUMENT_ROOT'] . (($_SERVER['DOCUMENT_ROOT'] != '/') ? '/' : ''));
if (USER_MODE == 'multi') {
    define('USER_FOLDER', 'users/' . $_user_folder_name . '/');
} else {
    define('USER_FOLDER', @$__E2_FOLDER_PREFIX__ . 'user/');
}
define('EXTRAS_FOLDER', USER_FOLDER . 'extras/');
define('BACKUP_FOLDER', USER_FOLDER . 'backup/');
define('CACHES_FOLDER', USER_FOLDER . 'caches/');
define('USER_LIBRARY_FOLDER', USER_FOLDER . 'library/');
define('TEMPLATES_FOLDER', 'themes/');
define('PICTURES_FOLDER', 'pictures/');
define('AUDIO_FOLDER', 'audio/');
define('THUMBNAILS_FOLDER', 'pictures/thumbs/');
define('SCALED_IMAGES_FOLDER', 'pictures/scaled/');
define('SYSTEM_FOLDER', 'system/');
define('SCRIPTS_FOLDER', 'system/js/');
define('SYSTEM_LIBRARY_FOLDER', 'system/library/');
define('LANGUAGES_FOLDER', 'system/languages/');
define('DEFAULT_TEMPLATE_FOLDER', 'system/theme/');
define('DEFAULTS_FOLDER', 'system/default/');
define('MTMPL_FOLDER', 'system/default/mail/');
if (substr(@$_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == 'ru') {
    define('DEFAULT_LANGUAGE', 'ru');
} else {
    define('DEFAULT_LANGUAGE', 'en');
}
define('NO_REASON', '');
define('CACHE', true);
define('CACHE_NOTES', CACHE and true);
define('CACHE_NOTES_COMMENTS', CACHE and true);
define('CACHE_HOT', CACHE and true);
define('CACHE_FAVS', CACHE and true);
define('CACHE_TAGS', CACHE and true);
define('CACHE_FAVTAGS', CACHE and true);
define('CACHE_NOTES_COUNTS', CACHE and true);
define('CACHE_EDGE_TIMEINFO', CACHE and true);
define('CACHE_FRONTPAGE', CACHE and true);
define('CACHE_FULLLIST', CACHE and true);
define('CACHE_DRAFTS', CACHE and true);
define('CACHE_FILENAMES_NOTES', CACHES_FOLDER . 'note-*.ctree.psa');
define('CACHE_FILENAMES_NOTES_COMMENTS', CACHES_FOLDER . 'note-*-comments.ctree.psa');
define('CACHE_FILENAMES_NOTES_COUNTS', CACHES_FOLDER . 'notes-count-*.txt');
define('CACHE_FILENAMES_EDGE_TIMEINFO', CACHES_FOLDER . '*.e2time.psa');
define('CACHE_FILENAME_HOT', CACHES_FOLDER . 'hot.ctree.psa');
define('CACHE_FILENAME_HOT_EXPIRES', CACHES_FOLDER . 'hot-expires.txt');
define('CACHE_FILENAME_FAVS', CACHES_FOLDER . 'favourites.ctree.psa');
define('CACHE_FILENAME_TAGS', CACHES_FOLDER . 'tags.psa');
define('CACHE_FILENAME_FAVTAGS', CACHES_FOLDER . 'favtags.ctree.psa');
define('CACHE_FILENAME_FRONTPAGE', CACHES_FOLDER . 'frontpage.ctree.psa');
define('CACHE_FILENAME_FRONTPAGE_AUTHOR', CACHES_FOLDER . 'frontpage-author.ctree.psa');
define('CACHE_FILENAME_FRONTPAGE_RSS', CACHES_FOLDER . 'index.xml');
define('CACHE_FILENAME_FULLLIST', CACHES_FOLDER . 'notes-list.ctree.psa');
define('CACHE_FILENAME_DRAFTS', CACHES_FOLDER . 'drafts.psa');
define('IMPORT_DB_SETTINGS', true);
define('DB_PASSWORD_RECOVER_AND_SHOW', false);
define('DEFAULT_ITEMS_PER_PAGE', 10);
define('MAX_ITEMS_PER_PAGE', 100);
define('MAX_SEARCH_RESULTS', 50);
define('DB_CANNOT_FIND', -1);
define('DB_CANNOT_CONNECT', -2);
define('FP_NO_ID_OR_NEW', -1);
define('FP_INSERT_ERROR', -10);
define('FP_UPDATE_ERROR', -11);
define('FP_EMPTY_FIELD', -20);
define('FP_TITLE_OR_TEXT_EMPTY', -21);
define('FP_NOT_COMMENTABLE', -30);
define('FP_COMMENT_DOUBLE_POST', -101);
define('FP_COMMENT_TOO_LONG', -102);
define('FP_COMMENT_SPAM_SUSPECT', -103);
define('NOTE_COMMENTABLE_NOW', -1);
define('NOTE_COMMENTABLE_NOW_CONDITIONALLY', -2);
define('CSS_CLASS_HIGHLIGHT', 'e2-marked');
define('THUMB_WIDTH', 86);
define('THUMB_HEIGHT', 64);
define('THUMB_JPG_QUALITY', 80);
define('SCALED_IMAGE_JPG_QUALITY', 80);
define('USERPIC_WIDTH', 128);
define('USERPIC_HEIGHT', 96);
define('USERPIC_JPG_QUALITY', 90);
@include DEFAULTS_FOLDER . 'config.php';
$_default_config = $_config;
@include USER_FOLDER . 'config.php';
$_config = array_merge($_default_config, $_config);
if ($_config['write_log']) {
    define('__LOG', 1);
} else {
    define('__LOG', 0);
}
$b5269f = @$_SERVER['HTTP_USER_AGENT'] or $b5269f = '';
$_ios = strstr($b5269f, 'iPhone') || strstr($b5269f, 'iPad');
$_macintosh = strstr($b5269f, 'Macintosh');
$_opera = strstr($b5269f, 'Opera');
error_reporting(E_ALL);
$_db_error = false;
$_fp_error = false;
$z589b3 = true;
if (strstr(__FILE__, 'all.php')) {
    $z589b3 = false;
}
function __log($l1cb25, $nc9e9a = 0)
{
    global $stopwatch;
    if ($l1cb25 === null) {
        if (function_exists('file_put_contents')) {
            @file_put_contents(USER_FOLDER . 'log.txt', '');
            @chmod(USER_FOLDER . 'log.txt', NEW_FILES_RIGHTS);
        }
        return;
    }
    $f605ac = '';
    $aaf240 = str_pad(round(c7f78() - $stopwatch, 5), 10, ' ', STR_PAD_RIGHT);
    $a8e13f = RUN_ID . ' ' . $f605ac . '' . $aaf240 . ' ' . $l1cb25 . "\n";
    $r15d61 = FILE_APPEND;
    if (function_exists('file_put_contents')) {
        @file_put_contents(USER_FOLDER . 'log.txt', $a8e13f, $r15d61);
        @chmod(USER_FOLDER . 'log.txt', NEW_FILES_RIGHTS);
    }
}

function e2_go_to($z56790 = '')
{
    global $u57de2, $ra57c1;
    @session_start();
    $_SESSION['errors'] = ff8d8();
    if (substr($z56790, 0, 7) != 'http://') {
        header('Location: http://' . $u57de2 . $ra57c1 . '/' . $z56790);
    } else {
        header('Location: ' . $z56790);
    }
    flush();
    return true;
}

function y4930()
{
    $e469bb = $_SERVER['HTTP_REFERER'];
    return e2_go_to($e469bb);
}

function u4924($z56790)
{
    if ($_SERVER['HTTP_REFERER']) {
        $z56790 = $_SERVER['HTTP_REFERER'];
    }
    return e2_go_to($z56790);
}

function y8c3b($qb2145 = '')
{
    $w9dd4e = substr_count($_SERVER['HTTP_HOST'], '.');
    $e2cb9d = @str_repeat('_', $w9dd4e) . $qb2145;
    return $e2cb9d;
}

function cc64a($qb2145, $c2063c = '', $bb0b70 = true)
{
    $qcd91e = $bb0b70 ? (time() + 3600 * 24 * 365) : (0);
    $jad5f8 = $_SERVER['HTTP_HOST'];
    $ce9c6c = substr_count($jad5f8, '.');
    if ($ce9c6c < 3) {
        $jad5f8 = str_repeat('.', 3 - $ce9c6c) . $jad5f8;
    }
    $w9dd4e = setcookie(y8c3b($qb2145), $c2063c, $qcd91e, '/');
}

function y163d($n183d6, $sb45cf, $zcadc8 = '')
{
    if (trim($sb45cf) != '') {
        $sb45cf = explode($n183d6, $sb45cf);
        foreach ($sb45cf as $j865c0 => $g8ce4b) {
            $sb45cf[$j865c0] = trim($g8ce4b);
        }
        foreach ($sb45cf as $j865c0 => $g8ce4b) {
            if ($g8ce4b == '') {
                unset ($sb45cf[$j865c0]);
            }
        }
        $s7b774 = array_unique($sb45cf);
        if ('sort' == $zcadc8) {
            sort($s7b774);
        }
        return $s7b774;
    } else {
        return array();
    }
}

function jbb8d($sb45cf)
{
    global $_macintosh, $_opera, $_ios;
    if ($_ios) {
        return '';
    }
    $u902bc = '<span class="tsp">&nbsp;</span>';
    $hd7d18 = $u902bc . '+' . $u902bc;
    $u902bc = '';
    if ($sb45cf == 'submit') {
        if ($_opera and $_macintosh) {
            return '&#x2318;' . $u902bc . '&#x21a9;';
        } elseif ($_macintosh) {
            return '&#x2303;' . $u902bc . '&#x21a9;';
        } else {
            return 'Ctrl' . $hd7d18 . 'Enter';
        }
    }
    if ($sb45cf == 'livesave') {
        if ($_opera and $_macintosh) {
            return '&#x2303;' . $u902bc . 'S';
        } elseif ($_macintosh) {
            return '&#x2318;' . $u902bc . 'S';
        } else {
            return 'Ctrl' . $hd7d18 . 'S';
        }
    }
    if ($sb45cf == 'navigation') {
        if ($_opera and $_macintosh) {
            return '&#x2325;' . $u902bc . '&#x21e7;';
        } elseif ($_macintosh) {
            return '&#x2325;';
        } else {
            return 'Ctrl';
        }
    }
    if ($sb45cf == 'navigation-later') {
        if ($_opera and $_macintosh) {
            return '&#x2325;' . $u902bc . '&#x21e7;' . $u902bc . '&uarr;';
        } elseif ($_macintosh) {
            return '&#x2325;' . $u902bc . '&uarr;';
        } else {
            return 'Ctrl' . $hd7d18 . '&uarr;';
        }
    }
    if ($sb45cf == 'navigation-earlier') {
        if ($_opera and $_macintosh) {
            return '&#x2325;' . $u902bc . '&#x21e7;' . $u902bc . '&darr;';
        } elseif ($_macintosh) {
            return '&#x2325;' . $u902bc . '&darr;';
        } else {
            return 'Ctrl' . $hd7d18 . '&darr;';
        }
    }
}

function u01d3($sb45cf)
{
    $t2db95 = strlen($sb45cf);
    return (strspn($sb45cf, 'abcdefghijklmnopqrstuvwxyz-1234567890') == $t2db95 and $t2db95 > 0);
}

function i7b91($l1cb25)
{
    $l1cb25 = str_replace('<', '&lt;', $l1cb25);
    $l1cb25 = str_replace('>', '&gt;', $l1cb25);
    return $l1cb25;
}

function zc4b6($l1cb25)
{
    $l1cb25 = str_replace('"', '&quot;', $l1cb25);
    return $l1cb25;
}

function xd056($c2063c, $j5d6db)
{
    return str_replace('.', ',', round($c2063c, $j5d6db));
}

function e2_stripslashes_array($zf1f71)
{
    return is_array($zf1f71) ? array_map('e2_stripslashes_array', $zf1f71) : stripslashes($zf1f71);
}

function b269a()
{
    if (get_magic_quotes_runtime()) {
        set_magic_quotes_runtime(0);
    }
    if (get_magic_quotes_gpc()) {
        $_GET = e2_stripslashes_array($_GET);
        $_POST = e2_stripslashes_array($_POST);
        $_COOKIE = e2_stripslashes_array($_COOKIE);
        $_REQUEST = e2_stripslashes_array($_REQUEST);
    }
}

function u8e95()
{
    if ((strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') === 0) and !is_file('.htaccess')) {
        if (is_file('htaccess')) {
            if (@rename('htaccess', '.htaccess')) {
                e2_go_to();
            }
        }
        echo 'Looks like you are using Apache and have lost or forgot to put in place "htaccess" file. Please obtain it from E2 installation package and put into your installation directory.';
        die;
    }
}

function g0786($o957b5)
{
    return sprintf('%u', ip2long($o957b5));
}

function f7c85($db1bc2)
{
    return long2ip(sprintf('%d', $db1bc2));
}

function e2_decline_for_number($l1cb25, $db1bc2 = null)
{
    $a2f713 = $l1cb25;
    if ($db1bc2 === null) {
        $db1bc2 = substr($l1cb25, 0, strpos($l1cb25, ' '));
        $a2f713 = substr($l1cb25, strpos($l1cb25, ' ') + 1);
    }
    $nf07c9 = strpos($a2f713, '(');
    $p46901 = strpos($a2f713, ')');
    if ($p46901 > $nf07c9) {
        $n22b9f = substr($a2f713, $nf07c9, $p46901 - $nf07c9 + 1);
    }
    $t93da6 = explode(',', trim(@$n22b9f, '()'));
    if (count($t93da6) == 2) {
        array_unshift($t93da6, '');
    }
    $pc78bd = array(2, 0, 1, 1, 1, 2, 2, 2, 2, 2);
    if ($db1bc2 % 100 > 10 and $db1bc2 % 100 < 20) {
        $ocd14c = 2;
    } else {
        $ocd14c = $pc78bd[$db1bc2 % 10];
    }
    $kef3e3 = $t93da6[$ocd14c];
    $l1cb25 = str_replace($n22b9f, $kef3e3, $l1cb25);
    if (strstr($l1cb25, '(') and strstr($l1cb25, ')')) {
        return e2_decline_for_number($l1cb25, $db1bc2);
    } else {
        return $l1cb25;
    }
}

function ac5a6($pf2ce1)
{
    $s87e9e = glob($pf2ce1, GLOB_NOSORT);
    if (is_array($s87e9e)) {
        foreach ($s87e9e as $b435ed) {
            @unlink($b435ed);
        }
    }
}

function k74dc($l73600)
{
    $s87e9e = glob($l73600 . '*', GLOB_NOSORT);
    if (is_array($s87e9e)) {
        foreach ($s87e9e as $b435ed) {
            if (basename($b435ed) != '.' and basename($b435ed) != '..') {
                if (is_dir($b435ed)) {
                    if (k74dc($b435ed . '/')) {
                        if (!rmdir($b435ed)) {
                            return false;
                        }
                    } else {
                        return false;
                    }
                } else {
                    @unlink($b435ed);
                }
            }
        }
        return true;
    } else {
        return false;
    }
}

function ncc38($x572d4)
{
    global $u57de2, $ra57c1;
    if (__LOG) {
        __log('Spawn ' . $x572d4 . '...');
    }
    $x572d4 = str_replace('http://' . $u57de2, '', $x572d4);
    $d0666f = @fsockopen($_SERVER['HTTP_HOST'], $_SERVER['SERVER_PORT'], $n70106, $o809b1, 1);
    if (__LOG) {
        __log('Spawn fsockopen returns ' . $d0666f . ', (errno=' . $n70106 . ', errstr=' . $o809b1 . ')...');
    }
    if ($d0666f) {
        @socket_set_timeout($d0666f, 1);
        $n8d777 = 'GET ' . $x572d4 . " HTTP/1.0\r\n" . 'Host: ' . $u57de2 . "\r\n" . 'User-Agent: ' . E2_UA_STRING . "\r\n" . bff2e(
            );
        $p5e369 = @fwrite($d0666f, $n8d777 . "\r\n");
        $p5e369 = @fclose($d0666f);
        return true;
    } else {
        return false;
    }
}

function taf42($cd6fe1)
{
    $cd6fe1 = trim($cd6fe1, '/');
    $cd6fe1 = explode('/', $cd6fe1);
    $l73600 = '';
    foreach ($cd6fe1 as $g83878) {
        $l73600 = $l73600 . $g83878;
        if (!is_dir($l73600)) {
            if (@mkdir($l73600)) {
                @chmod($l73600, NEW_FILES_RIGHTS);
            } else {
                return false;
            }
        }
        $l73600 = $l73600 . '/';
    }
    return true;
}

function n4d36($cd6fe1)
{
    return preg_replace('/\/([^\/]+?)\/\.\./', '', $cd6fe1);
}

function hce9b($sb45cf)
{
    $pcee6f = get_html_translation_table(HTML_ENTITIES);
    $pcee6f = array_flip($pcee6f);
    return strtr($sb45cf, $pcee6f);
}

function c7f78($l32c11 = null)
{
    if (null == $l32c11) {
        $l32c11 = microtime();
    }
    list ($m6021b, $h74459) = explode(' ', $l32c11);
    return ((float)$m6021b + (float)$h74459);
}

define('HEL_SPECIAL_CHAR', "\x1");
define('HEL_SPECIAL_SEQUENCE_LENGTH', 6);
function b4e85($g6a992)
{
    return str_pad($g6a992, HEL_SPECIAL_SEQUENCE_LENGTH, '0', STR_PAD_LEFT);
}

function hel_savetag($ue4d23)
{
    global $b16234;
    $g6a992 = count($b16234);
    $b16234[$g6a992] = $ue4d23[0];
    return HEL_SPECIAL_CHAR . b4e85($g6a992) . HEL_SPECIAL_CHAR;
}

function udae3($l1cb25)
{
    global $b16234;
    if ($b16234) {
        foreach ($b16234 as $g6a992 => $c2063c) {
            $l1cb25 = str_replace(HEL_SPECIAL_CHAR . b4e85($g6a992) . HEL_SPECIAL_CHAR, $c2063c, $l1cb25);
        }
    }
    return $l1cb25;
}

$stopwatch = c7f78($stopwatch);
function v3aa5($w9dd4e)
{
    global $_e2utf8__unformat_htmlentity_neasden;
    if ($_e2utf8__unformat_htmlentity_neasden) {
        return $w9dd4e;
    } else {
        return '((html ' . $w9dd4e . '))';
    }
}

function kedd9($ge98a6, $w98df3 = false)
{
    $y80a41 = '';
    $uf5a8e = strlen($ge98a6);
    for ($j865c0 = 0; $j865c0 < 256; ++$j865c0) {
        $hf3d13[$j865c0] = 0;
        $n0fc3c = $j865c0;
        while ($n0fc3c & 0x00000080) {
            $n0fc3c <<= 1;
            ++$hf3d13[$j865c0];
        }
    }
    for ($j865c0 = 0xd090; $j865c0 <= 0xd0bf; $j865c0++) {
        $n84a26[$j865c0] = chr(($j865c0 & 0x000000ff) + 48);
    }
    for ($j865c0 = 0xd180; $j865c0 <= 0xd18f; $j865c0++) {
        $n84a26[$j865c0] = chr(($j865c0 & 0x000000ff) + 112);
    }
    $n84a26[0xd081] = "\xa8";
    $n84a26[0xd191] = "\xb8";
    $n84a26[0xc299] = "\x99";
    $n84a26[0xc2a9] = "\xa9";
    $n84a26[0xc2ae] = "\xae";
    $n84a26[0xc2ab] = "\xab";
    $n84a26[0xc2bb] = "\xbb";
    $n84a26[0xc2a0] = "\xa0";
    $j865c0 = 0;
    while ($j865c0 < $uf5a8e) {
        $iac558 = $ge98a6{$j865c0};
        $zc267c = ord($iac558);
        if ($hf3d13[$zc267c] == 0) {
            $y80a41 .= $iac558;
            ++$j865c0;
        } elseif ($hf3d13[$zc267c] == 2) {
            $l06214 = $n84a26[($zc267c << 8) | ord($ge98a6{$j865c0 + 1})];
            $y80a41 .= ($l06214 != null) ? $l06214 : ($w98df3 ? (v3aa5(zebe5(substr($ge98a6, $j865c0, 2)))) : '?');
            $j865c0 += 2;
        } else {
            $mdfbc9 = substr($ge98a6, $j865c0, $hf3d13[$zc267c]);
            if ($mdfbc9 == "\xe2\x84\x96") {
                $y80a41 .= "\xb9";
            } elseif ($mdfbc9 == "\xe2\x80\x93") {
                $y80a41 .= "\x96";
            } elseif ($mdfbc9 == "\xe2\x80\x94") {
                $y80a41 .= "\x97";
            } elseif ($mdfbc9 == "\xe2\x80\x98") {
                $y80a41 .= "\x91";
            } elseif ($mdfbc9 == "\xe2\x80\x99") {
                $y80a41 .= "\x92";
            } elseif ($mdfbc9 == "\xe2\x80\x9a") {
                $y80a41 .= "\x82";
            } elseif ($mdfbc9 == "\xe2\x80\x9c") {
                $y80a41 .= "\x93";
            } elseif ($mdfbc9 == "\xe2\x80\x9d") {
                $y80a41 .= "\x94";
            } elseif ($mdfbc9 == "\xe2\x80\x9e") {
                $y80a41 .= "\x84";
            } elseif ($mdfbc9 == "\xe2\x80\xa6") {
                $y80a41 .= "\x85";
            } elseif ($mdfbc9 == "\xe2\x80\xb9") {
                $y80a41 .= "\x8b";
            } elseif ($mdfbc9 == "\xe2\x80\xba") {
                $y80a41 .= "\x9b";
            } elseif ($mdfbc9 == "\xe2\x82\xac") {
                $y80a41 .= "\x88";
            } elseif ($mdfbc9 == "\xe2\x84\xa2") {
                $y80a41 .= "\x99";
            } else {
                $y80a41 .= $w98df3 ? (v3aa5(
                    zebe5($mdfbc9)
                )) : '?';
            }
            $j865c0 += $hf3d13[$zc267c];
        }
    }
    return $y80a41;
}

function zebe5($m4a8a0)
{
    $acc411 = '';
    $uf5a8e = strlen($m4a8a0);
    for ($j865c0 = 0; $j865c0 < $uf5a8e; ++$j865c0) {
        $acc411 .= preg_replace('/^1*0/', '', decbin(ord($m4a8a0{$j865c0})));
    }
    return '&#' . bindec($acc411) . ';';
}

function jfd97($z341be)
{
    $e2cb9d = $z341be;
    $e2cb9d = preg_replace_callback('/([\x80-\xFF])/', 'e2_utf_from_windows_1251_char', $e2cb9d);
    return $e2cb9d;
}

function e2_utf_from_windows_1251_char($m4a8a0)
{
    list (, $m4a8a0) = $m4a8a0;
    if ($m4a8a0 == "\xa8") {
        return "\xd0\x81";
    }
    if ($m4a8a0 == "\xb8") {
        return "\xd1\x91";
    }
    if ($m4a8a0 >= "\xc0" && $m4a8a0 <= "\xef") {
        return "\xd0" . chr(ord($m4a8a0) - 48);
    }
    if ($m4a8a0 >= "\xf0") {
        return "\xd1" . chr(ord($m4a8a0) - 112);
    }
    if ($m4a8a0 == "\x85") {
        return "\xe2\x80\xa6";
    }
    if ($m4a8a0 == "\x96") {
        return "\xe2\x80\x93";
    }
    if ($m4a8a0 == "\x97") {
        return "\xe2\x80\x94";
    }
    if ($m4a8a0 == "\xab") {
        return "\xc2\xab";
    }
    if ($m4a8a0 == "\xbb") {
        return "\xc2\xbb";
    }
    if ($m4a8a0 == "\x91") {
        return "\xe2\x80\x98";
    }
    if ($m4a8a0 == "\x92") {
        return "\xe2\x80\x99";
    }
    if ($m4a8a0 == "\x93") {
        return "\xe2\x80\x9c";
    }
    if ($m4a8a0 == "\x94") {
        return "\xe2\x80\x9d";
    }
    if ($m4a8a0 == "\x84") {
        return "\xe2\x80\x9e";
    }
    if ($m4a8a0 == "\x99") {
        return "\xe2\x84\xa2";
    }
    if ($m4a8a0 == "\xb9") {
        return "\xe2\x84\x96";
    }
    if ($m4a8a0 == "\xa0") {
        return "\xc2\xa0";
    }
    return '?';
}

;
function e2_utf8_version_of_array_($zf1f71)
{
    foreach ($zf1f71 as $g8ce4b => $c9e366) {
        if (!array_key_exists($g8ce4b . '.u?', $zf1f71)) {
            if (is_string($zf1f71[$g8ce4b])) {
                $zf1f71[$g8ce4b] = jfd97($zf1f71[$g8ce4b]);
            } elseif (is_array($zf1f71[$g8ce4b])) {
                $zf1f71[$g8ce4b] = e2_utf8_version_of_array_($zf1f71[$g8ce4b]);
            }
        }
    }
    return $zf1f71;
}

function jcdf0($g8c7dd)
{
    if (function_exists('file_get_contents')) {
        return @file_get_contents($g8c7dd);
    } else {
        $r8fa14 = fopen($g8c7dd, "rb");
        clearstatcache();
        $oe358e = fread($r8fa14, filesize($g8c7dd));
        fclose($r8fa14);
        return $oe358e;
    }
}

function c6e52($g8c7dd, $sb45cf)
{
    if (function_exists('file_put_contents')) {
        if (!file_put_contents($g8c7dd, $sb45cf, LOCK_EX)) {
            return false;
        }
    } else {
        if ($d0666f = @fopen($g8c7dd, 'a+b')) {
            flock($d0666f, LOCK_EX);
            ftruncate($d0666f, 0);
            fseek($d0666f, 0);
            fwrite($d0666f, $sb45cf);
            fclose($d0666f);
        } else {
            return false;
        }
    }
    @chmod($g8c7dd, NEW_FILES_RIGHTS);
    return true;
}

function wcd2d($g8c7dd, $sb45cf)
{
    if (function_exists('file_put_contents')) {
        $e2cb9d = @file_put_contents($g8c7dd, $sb45cf);
        @chmod($g8c7dd, NEW_FILES_RIGHTS);
        return $e2cb9d;
    } else {
        $r8fa14 = @fopen($g8c7dd, 'ab');
        if ($r8fa14) {
            if (@flock($r8fa14, LOCK_EX)) {
                $sb92d9 = ignore_user_abort(1);
                @ftruncate($r8fa14, 0);
                @fseek($r8fa14, 0);
                fwrite($r8fa14, $sb45cf);
                fflush($r8fa14);
                @flock($r8fa14, LOCK_UN);
                fclose($r8fa14);
                @chmod($g8c7dd, NEW_FILES_RIGHTS);
                ignore_user_abort($sb92d9);
                return true;
            } else {
                fclose($r8fa14);
                return false;
            }
        } else {
            return false;
        }
    }
}

function hf5a9()
{
    global $settings, $_template;
    if (__LOG) {
        __log(
            'Files: Prepage to scale images for template <' . $_template['name'] . ' : ' . $_template['max_image_width'] . '>'
        );
    }
    if ($settings['max-image-width'] != $_template['max_image_width']) {
        if (__LOG) {
            __log('Files: max_image_width changed to ' . $_template['max_image_width']);
        }
        $settings['max-image-width'] = $_template['max_image_width'];
        if (__LOG) {
            __log('Files: Cleaning cached notes');
        }
        q7996();
        if (__LOG) {
            __log('Files: Cleaning pre-scaled images');
        }
        ac5a6(SCALED_IMAGES_FOLDER . '*');
        if (__LOG) {
            __log('Files: Saving updated settings for max-image-width');
        }
        c6e52(USER_FOLDER . 'settings.psa', serialize($settings));
    }
    if (__LOG) {
        __log('Files: Done preparing to scale images');
    }
}

function x25cb($b435ed, $v3dbb8)
{
    if ($v3dbb8) {
        $n80127 = explode('/', $b435ed);
        $a954eb = array_pop($n80127);
        $m35b88 = explode('.', $a954eb);
        if (count($m35b88) < 2) {
            $m35b88[] = '';
        }
        $dabf77 = array_pop($m35b88);
        $m35b88[] = $v3dbb8;
        if ($dabf77) {
            $m35b88[] = $dabf77;
        }
        $a954eb = implode('.', $m35b88);
        $n80127[] = $a954eb;
        $b435ed = implode('/', $n80127);
    }
    return $b435ed;
}

function u291d($gaf721)
{
    $pd1789 = array('w' => THUMB_WIDTH, 'h' => THUMB_HEIGHT, 'q' => THUMB_JPG_QUALITY);
    return j8611(PICTURES_FOLDER . $gaf721, THUMBNAILS_FOLDER . x25cb($gaf721, 'thumb'), $pd1789);
}

function j8611($gaf721, $f6efa1, $z93a57)
{
    global $_config;
    if (__LOG) {
        __log('Scale image: <' . $gaf721 . '>');
    }
    $t8743c = pathinfo($gaf721);
    $dabf77 = $t8743c['extension'];
    $o7ae08 = pathinfo($f6efa1);
    if (in_array(strtolower($dabf77), array('jpg', 'jpeg', 'gif', 'png'))) {
        if (__LOG) {
            __log('Scale image: source_name <' . $gaf721 . '>');
        }
        if (__LOG) {
            __log('Scale image: dest_name <' . $f6efa1 . '>');
        }
        if ($z93a57['h'] == -1) {
            $z93a57['h'] = 999999;
        }
        if (!is_file($f6efa1)) {
            if (@taf42($o7ae08['dirname'])) {
                e6b7f($gaf721, $z93a57['w'], $z93a57['h'], $z93a57['q'], $f6efa1);
                if (is_file($f6efa1)) {
                    if (__LOG) {
                        __log('Scale image: done');
                    }
                    chmod($f6efa1, $_config['uploaded_files_mode']);
                } else {
                    if (__LOG) {
                        __log('Scale image: error (no php_gd?)');
                    }
                    return false;
                }
            }
        }
        return $f6efa1;
    }
    return false;
}

function v9c0a($bb0689)
{
    if (preg_match('//u', $bb0689)) {
        $bb0689 = kedd9($bb0689, false);
    }
    $w96704 = '';
    for ($j865c0 = 0; $j865c0 < strlen($bb0689); $j865c0++) {
        if ($bb0689[$j865c0] == '?') {
            $w96704 .= '';
        } elseif ($bb0689[$j865c0] == ' ') {
            $w96704 .= '-';
        } elseif (ord($bb0689[$j865c0]) <= 127) {
            $w96704 .= $bb0689[$j865c0];
        }
    }
    if ($w96704 == '') {
        $w96704 = 'picture';
    }
    if ($w96704[0] == '.') {
        $w96704 = 'picture' . $w96704;
    }
    if (is_file(PICTURES_FOLDER . $w96704)) {
        $a5c917 = substr($w96704, 0, strrpos($w96704, '.'));
        $dabf77 = substr($w96704, strrpos($w96704, '.'));
        $j865c0 = 0;
        while (is_file($a5c917 . '_' . ++$j865c0 . $dabf77)) {
            ;
        }
        $w96704 = $a5c917 . '_' . $j865c0 . $dabf77;
    }
    return $w96704;
}

function e2j_file_upload()
{
    global $_config;
    @taf42(PICTURES_FOLDER);
    @chmod(PICTURES_FOLDER, $_config['uploaded_files_mode']);
    if (WITH_AUDIO) {
        @taf42(AUDIO_FOLDER);
        @chmod(AUDIO_FOLDER, $_config['uploaded_files_mode']);
    }
    if (count($_FILES) > 0) {
        foreach ($_FILES as $g8c7dd) {
            if (!$g8c7dd['error']) {
                if (__LOG) {
                    __log('Ajax file upload: <' . $g8c7dd['name'] . '>');
                }
                $w96704 = v9c0a($g8c7dd['name']);
                $o9f57c = PICTURES_FOLDER . $w96704;
                $f12e09 = 'image';
                if (WITH_AUDIO) {
                    if (substr($g8c7dd['name'], strrpos($g8c7dd['name'], '.')) == '.mp3') {
                        $o9f57c = AUDIO_FOLDER . $w96704;
                        $f12e09 = 'audio';
                    }
                }
                move_uploaded_file($g8c7dd['tmp_name'], $o9f57c);
                @chmod($o9f57c, $_config['uploaded_files_mode']);
                if ($f12e09 == 'image') {
                    if ($pf1210 = u291d($w96704)) {
                        if (__LOG) {
                            __log('Ajax file upload: thumbnail, done');
                        }
                        die ('image|' . $w96704 . '|' . $pf1210);
                    } else {
                        @unlink($o9f57c);
                        die ('error|could-not-create-thumbnail');
                    }
                }
                if ($f12e09 == 'audio') {
                    if (__LOG) {
                        __log('Ajax file upload: audio, done');
                    }
                    $pf1210 = DEFAULTS_FOLDER . 'audio.png';
                    die ('audio|' . $w96704 . '|' . $pf1210);
                }
            } elseif (4 != $g8c7dd['error']) {
                if ($g8c7dd['error'] == 1) {
                    die ('error|too-big');
                } elseif ($g8c7dd['error'] == 2) {
                    die ('error|too-big');
                } elseif ($g8c7dd['error'] == 3) {
                    die ('error|partial');
                } else {
                    die ('error|' . $g8c7dd['error']);
                }
            }
        }
    } else {
        if (__LOG) {
            __log('Ajax file upload error: no files');
        }
        die ('error|no-files');
    }
}

function e2j_userpic_upload()
{
    global $_config;
    if (count($_FILES) == 1) {
        $g8c7dd = array_pop($_FILES);
        if (!$g8c7dd['error']) {
            if (__LOG) {
                __log('Ajax userpic upload: <' . $g8c7dd['name'] . '>');
            }
            $za93b8 = pathinfo($g8c7dd['name']);
            $dabf77 = strtolower($za93b8['extension']);
            if ($dabf77 != 'png') {
                $dabf77 = 'jpg';
            }
            $b435ed = 'userpic.original.' . $dabf77;
            move_uploaded_file($g8c7dd['tmp_name'], USER_FOLDER . $b435ed);
            @chmod(USER_FOLDER . $b435ed, $_config['uploaded_files_mode']);
            $pd1789 = array('w' => USERPIC_WIDTH, 'h' => USERPIC_HEIGHT, 'q' => USERPIC_JPG_QUALITY);
            @unlink(USER_FOLDER . 'userpic.png');
            @unlink(USER_FOLDER . 'userpic.jpg');
            $pf1210 = j8611(USER_FOLDER . $b435ed, USER_FOLDER . 'userpic.jpg', $pd1789);
            @unlink(USER_FOLDER . $b435ed);
            if ($pf1210) {
                if (__LOG) {
                    __log('Ajax userpic upload: userpic, done');
                }
                die ('image|' . $pf1210);
            } else {
                die ('image|system/default/userpic.png');
            }
        } elseif (4 != $g8c7dd['error']) {
            if ($g8c7dd['error'] == 1) {
                die ('error|too-big');
            } elseif ($g8c7dd['error'] == 2) {
                die ('error|too-big');
            } elseif ($g8c7dd['error'] == 3) {
                die ('error|partial');
            } else {
                die ('error|' . $g8c7dd['error']);
            }
        }
    } else {
        if (__LOG) {
            __log('Ajax userpic upload error: no or too many files');
        }
        die ('error|no-or-too-many-files');
    }
    die ('error|uncatched-error');
}

function e2s_scale_image($parameters)
{
    global $settings;
    $b435ed = $parameters['picture'];
    list ($a137ae,) = getimagesize(PICTURES_FOLDER . $b435ed);
    $rce62f = $settings['max-image-width'] / $a137ae;
    if ($rce62f < SCALE_FACTOR_THRESH) {
        $pd1789 = array('w' => $settings['max-image-width'], 'h' => -1, 'q' => SCALED_IMAGE_JPG_QUALITY);
        if ($m72f31 = j8611(PICTURES_FOLDER . $b435ed, SCALED_IMAGES_FOLDER . x25cb($b435ed, 'scaled'), $pd1789)) {
            e2_go_to($m72f31);
            die;
        }
    }
    e2_go_to(PICTURES_FOLDER . $b435ed);
    die;
}

function e2j_file_remove()
{
    $g8c7dd = $pf1210 = '';
    if (array_key_exists('file', $_POST)) {
        $g8c7dd = $_POST['file'];
    }
    if (array_key_exists('thumb', $_POST)) {
        $pf1210 = $_POST['thumb'];
    }
    if (WITH_AUDIO and substr($g8c7dd, strrpos($g8c7dd, '.')) == '.mp3') {
        @unlink(AUDIO_FOLDER . $g8c7dd);
        die ('nothing');
    } else {
        $pf1210 = x25cb($g8c7dd, 'thumb');
        $bd911a = x25cb($g8c7dd, 'scaled');
        if ($g8c7dd) {
            $rf6347 = @unlink(PICTURES_FOLDER . $g8c7dd);
            $o8f458 = @unlink(THUMBNAILS_FOLDER . $pf1210);
            $ee57e0 = @unlink(SCALED_IMAGES_FOLDER . $bd911a);
            die ('nothing');
        }
    }
    die ('error|no-filename-passed');
}

function e6b7f($xfce75, $gc69cd, $td35fb, $qd6663, $g1c925 = '')
{
    if (!extension_loaded('gd')) {
        if (!dl('gd.so')) {
            header('Content-type: image/gif');
            return false;
        }
    }
    $pcaf9b = @getimagesize($xfce75);
    if (!$pcaf9b or $pcaf9b[2] > 3) {
        return;
    }
    $d599dc = $pcaf9b[2];
    if ($d599dc == 1 and function_exists('imagecreatefromgif')) {
        list ($g73beb, $d599dc) = array(imagecreatefromgif($xfce75), 'gif');
    }
    if ($d599dc == 2 and function_exists('imagecreatefromjpeg')) {
        list ($g73beb, $d599dc) = array(imagecreatefromjpeg($xfce75), 'jpeg');
    }
    if ($d599dc == 3 and function_exists('imagecreatefrompng')) {
        list ($g73beb, $d599dc) = array(imagecreatefrompng($xfce75), 'png');
    }
    if (!$g73beb) {
        return false;
    }
    $beaae2 = imagesx($g73beb);
    $kb435e = imagesy($g73beb);
    $w0cb47 = min($gc69cd / $beaae2, $td35fb / $kb435e);
    if ($w0cb47 < 1) {
        $gc69cd = round($beaae2 * $w0cb47);
        $td35fb = round($kb435e * $w0cb47);
    } else {
        $gc69cd = $beaae2;
        $td35fb = $kb435e;
    }
    $h28e3d = imagecreatetruecolor($gc69cd, $td35fb);
    imageinterlace($h28e3d, 1);
    if (empty ($g1c925)) {
        $j19229 = stat($xfce75);
        $j19229 = date('r', $j19229['mtime']);
        header('Last-Modified: ' . $j19229);
    }
    imagecopyresampled($h28e3d, $g73beb, 0, 0, 0, 0, $gc69cd, $td35fb, $beaae2, $kb435e);
    imagejpeg($h28e3d, $g1c925, $qd6663);
    return true;
}

function e74e0()
{
    global $settings;
    if (!isset ($settings)) {
        $settings = array();
    }
    if (is_file(USER_FOLDER . 'settings.psa')) {
        $pfa816 = unserialize(jcdf0(USER_FOLDER . 'settings.psa'));
        if (!is_array($pfa816)) {
            $pfa816 = array();
        }
        $settings = array_merge($settings, $pfa816);
    }
    if (!is_numeric(@$settings['appearance']['notes_per_page']) or @$settings['appearance']['notes_per_page'] < 1) {
        $settings['appearance']['notes_per_page'] = DEFAULT_ITEMS_PER_PAGE;
    }
    if (@$settings['appearance']['notes_per_page'] > MAX_ITEMS_PER_PAGE) {
        $settings['appearance']['notes_per_page'] = MAX_ITEMS_PER_PAGE;
    }
    if (!array_key_exists('comments', $settings) or !array_key_exists('on', @$settings['comments'])) {
        $settings['comments']['on'] = true;
    }
    return true;
}

function e2m_name_and_author()
{
    global $settings, $_template, $_strings;
    $e2cb9d['title'] = $_strings['pt--name-and-author'];
    $e2cb9d['heading'] = $_strings['pt--name-and-author'];
    $e2cb9d['form'] = 'form-name-and-author';
    $e2cb9d['form-name-and-author'] = array(
        'form-action' => e83c8('e2s_name_and_author'),
        'blog-title-default' => htmlspecialchars($_strings['e2--default-blog-title'], ENT_COMPAT, HSC_ENC),
        'blog-title' => htmlspecialchars(n6f51(), ENT_COMPAT, HSC_ENC),
        'blog-description' => htmlspecialchars(@$settings['description'], ENT_COMPAT, HSC_ENC),
        'blog-author-default' => htmlspecialchars($_strings['e2--default-blog-author'], ENT_COMPAT, HSC_ENC),
        'blog-author' => htmlspecialchars(@$settings['author'], ENT_COMPAT, HSC_ENC),
        'submit-text' => $_strings['fb--save-changes'],
    );
    return $e2cb9d;
}

function e2s_name_and_author()
{
    global $settings;
    $v05df2 = $p67daf = '';
    if (array_key_exists('blog-title', $_POST)) {
        $v05df2 = trim($_POST['blog-title']);
    }
    if (array_key_exists('blog-description', $_POST)) {
        $p67daf = trim($_POST['blog-description']);
    }
    if (array_key_exists('blog-author', $_POST)) {
        $f02bd9 = trim($_POST['blog-author']);
    }
    $settings['site_title'] = $v05df2;
    $settings['site_title'] = n6f51();
    $settings['description'] = $p67daf;
    $settings['author'] = $f02bd9;
    ac5a6(CACHE_FILENAMES_NOTES_COMMENTS);
    if (!c6e52(USER_FOLDER . 'settings.psa', serialize($settings))) {
        e8a40($_strings['er--cannot-save-data']);
    }
    e2_go_to(e83c8('e2m_frontpage')) and die;
}

function e2m_settings()
{
    global $settings, $_template, $_strings;
    $if3e33 = array();
    $q5e107 = @$settings['language'] ? $settings['language'] : DEFAULT_LANGUAGE;
    foreach (glob(LANGUAGES_FOLDER . '*.php') as $b435ed) {
        $c5b54c = substr(basename($b435ed), 0, 2);
        $i98bf7 = file_get_contents($b435ed);
        if (preg_match('/^ *\/\/ *display_name *\= *(.*?) *$/ismu', $i98bf7, $i9c28d)) {
            $fc2657 = $i9c28d[1];
        } else {
            $fc2657 = $c5b54c;
        }
        $if3e33[$c5b54c] = array('selected?' => (bool)($q5e107 == $c5b54c), 'display-name' => $fc2657,);
    }
    $e2cb9d['title'] = $_strings['pt--settings'];
    $e2cb9d['heading'] = $_strings['pt--settings'];
    $e2cb9d['form'] = 'form-preferences';
    $e2cb9d['form-preferences'] = array(
        'languages' => $if3e33,
        'language' => $q5e107,
        'form-action' => e83c8('e2s_settings_save'),
        'notes-per-page' => $settings['appearance']['notes_per_page'],
        'email-notify?' => (bool)@$settings['notifications']['new_comments'],
        'email' => htmlspecialchars(@$settings['user']['email'], ENT_NOQUOTES, HSC_ENC),
        'comments-on?' => (bool)@$settings['comments']['on'],
        'comments-fresh-only?' => (bool)@$settings['comments']['fresh_only'],
        'hot-block?' => (bool)(@$settings['appearance']['hot_frontpage']),
        'favourites-block?' => (bool)@$settings['appearance']['favourites_frontpage'],
        'template-name' => $_template['name'],
        'templates' => n94dd(),
        'submit-text' => $_strings['fb--save-changes'],
    );
    return $e2cb9d;
}

function e2s_settings_save()
{
    global $settings;
    $v05df2 = $p67daf = '';
    if (array_key_exists('language', $_POST)) {
        $h8512a = $_POST['language'];
    }
    if (array_key_exists('email', $_POST)) {
        $i0c83f = trim($_POST['email']);
    }
    if (array_key_exists('template', $_POST)) {
        $g66f61 = trim($_POST['template']);
    }
    $settings['language'] = $h8512a;
    $settings['user']['email'] = $i0c83f;
    $y0c2bd = (int)$_POST['notes-per-page'];
    if ($settings['appearance']['notes_per_page'] != $y0c2bd or $settings['comments']['on'] != isset ($_POST['comments-on']) or $settings['comments']['fresh_only'] != isset ($_POST['comments-fresh-only'])) {
        @unlink(CACHE_FILENAME_FRONTPAGE);
        @unlink(CACHE_FILENAME_FRONTPAGE_AUTHOR);
        $settings['appearance']['notes_per_page'] = $y0c2bd;
        $settings['comments']['on'] = isset ($_POST['comments-on']);
        $settings['comments']['fresh_only'] = isset ($_POST['comments-fresh-only']);
    }
    $settings['notifications']['new_comments'] = isset ($_POST['email-notify']);
    $settings['appearance']['favourites_frontpage'] = isset ($_POST['favourites-block']);
    $settings['appearance']['hot_frontpage'] = isset ($_POST['hot-block']);
    $settings['template'] = $g66f61;
    if (!c6e52(USER_FOLDER . 'settings.psa', serialize($settings))) {
        e8a40($_strings['er--cannot-save-data']);
    }
    e2_go_to(e83c8('e2m_frontpage')) and die;
}

function e2m_database()
{
    global $settings, $_strings, $_superconfig;
    if (@$_superconfig['disallow_db_config']) {
        die ('DB Configuration not allowed');
    }
    $e2cb9d['title'] = $_strings['pt--database'];
    $e2cb9d['heading'] = $_strings['pt--database'];
    $e2cb9d['form'] = 'form-database';
    $e2cb9d['form-database'] = array(
        'form-action' => e83c8('e2s_database_save'),
        'db-server' => htmlspecialchars(@$settings['db']['server'] ? $settings['db']['server'] : 'localhost'),
        'db-user' => htmlspecialchars(@$settings['db']['user_name'] ? $settings['db']['user_name'] : 'root'),
        'db-password' => htmlspecialchars(@$settings['db']['passw']),
        'db-database' => htmlspecialchars(@$settings['db']['name']),
        'db-prefix' => htmlspecialchars(@$settings['db']['table_prefix'] ? $settings['db']['table_prefix'] : 'e2Blog'),
        'submit-text' => $_strings['fb--connect-to-this-db'],
    );
    return $e2cb9d;
}

function e2s_database_save()
{
    global $settings, $_superconfig;
    if (@$_superconfig['disallow_db_config']) {
        die ('DB Configuration not allowed');
    }
    if (array_key_exists('db-server', $_POST)) {
        $settings['db']['server'] = @$_POST['db-server'];
        $settings['db']['user_name'] = @$_POST['db-user'];
        $settings['db']['passw'] = @$_POST['db-password'];
        $settings['db']['name'] = @$_POST['db-database'];
        $settings['db']['table_prefix'] = @$_POST['db-prefix'];
        if (!c6e52(USER_FOLDER . 'settings.psa', serialize($settings))) {
            e8a40($_strings['er--cannot-save-data']);
        }
        e2_drop_all_kinds_of_cache();
    }
    e2_go_to(e83c8('e2m_settings')) and die;
}

e74e0();
function e8a40($p67daf, $d599dc = 'error')
{
    global $errors, $settings, $_config, $_strings;
    $h90f2d = 'Cannot backtrace, need PHP 4.3+';
    if (function_exists('debug_backtrace')) {
        $h90f2d = debug_backtrace();
    }
    $errors[] = array('description' => $p67daf, 'location' => null, 'backtrace' => $h90f2d, 'type' => $h90f2d,);
    if (count($errors) == @$_config['max_errors']) {
        e8a40($_strings['er--too-many-errors']);
        echo iec07();
        die;
    }
    return true;
}

function de1c4($lc1336, $p67daf)
{
    if (0 == error_reporting() or ($lc1336 & 8)) {
        return;
    }
    global $errors;
    e8a40('PHP (' . $lc1336 . '): ' . $p67daf);
    $errors[count($errors) - 1]['phpcode'] = $lc1336;
}

function c4193()
{
    global $errors;
    return (count($errors) > 0);
}

function ff8d8()
{
    global $errors;
    return $errors;
}

function x2616($o69206)
{
    global $ra57c1;
    $o69206 = array_reverse($o69206);
    $o69206 = array_splice($o69206, 0, count($o69206) - 1);
    $qe1671 = '<div style="background: #fea; padding: .25em .5em; margin: .5em 1em 1em 0; line-height: 1em; overflow: hidden">';
    foreach ($o69206 as $j865c0 => $oe358e) {
        $f195df = @$oe358e['args'] or $f195df = array();
        $fa956a = array();
        foreach ($f195df as $w5919c) {
            $fa956a[] = var_export($w5919c, true);
        }
        $g8c7dd = @$oe358e['file'];
        $g8c7dd = str_replace($_SERVER['DOCUMENT_ROOT'], '', $g8c7dd);
        $p6438c = (@$oe358e['line'] ? (' #' . $oe358e['line']) : '?');
        $qe1671 .= '<div style="margin: .25em 0 .5em ' . $j865c0 * 3 . 'em">';
        $qe1671 .= '<span style="float: right; color: #666"> ' . $g8c7dd . $p6438c . '</span>';
        $qe1671 .= '<tt><b>' . @$oe358e['function'] . ' (</b>';
        if (count($fa956a)) {
            $ueb84a = str_replace("array (\n)", 'array ()', $fa956a);
            $ueb84a = implode(', ', $ueb84a);
            if (0) {
                $ueb84a = highlight_string('<?' . $ueb84a . '?' . '>', true);
                $ueb84a = substr($ueb84a, 77, -28);
            }
            $ueb84a = str_replace('&nbsp;', ' ', $ueb84a);
            $ueb84a = nl2br($ueb84a);
            $qe1671 .= '<div style="margin: 0 0 0 1.12em">' . $ueb84a . '</div>';
        }
        $qe1671 .= '<b>)</b> &rarr;</tt></div>';
    }
    $qe1671 .= '</div>';
    return $qe1671;
}

function iec07()
{
    global $errors, $settings, $_config;
    @session_start();
    if (is_array(@$_SESSION['errors'])) {
        $qe1671 = array_merge(@$_SESSION['errors'], $errors);
    } else {
        $qe1671 = $errors;
    }
    $j1897a = (!ne852() + 1 <= (int)$_config['show_call_stack']);
    if (@$_config['store_backtrace'] and $j1897a and $qe1671 != null) {
        c6e52('backtrace.psa', serialize($qe1671));
    } else {
        @unlink('backtrace.psa');
    }
    if (isset ($_SESSION['errors'])) {
        unset($_SESSION['errors']);
    }
    if (count($qe1671) > 0) {
        foreach ($qe1671 as $j865c0 => $d08a44) {
            $qe1671[$j865c0] = '<li><b>' . $d08a44['description'] . '</b>';
            if ($j1897a) {
                $qe1671[$j865c0] .= '<br /><small>' . x2616($d08a44['backtrace']) . '</small>';
            }
            $qe1671[$j865c0] .= '</li>';
        }
        if (@$_config['store_backtrace'] and $j1897a and is_file('debug.php')) {
            return @('<ul>' . implode(
                        '<br />',
                        $qe1671
                    ) . '</ul>') . '<p><a href="debug.php">Debug</a></p>';
        } else {
            return @('<ul>' . implode(
                    '<br />',
                    $qe1671
                ) . '</ul>');
        }
    } else {
        return '';
    }
}

set_error_handler('de1c4');
function e2_error404_mode()
{
    global $_strings;
    header('HTTP/1.1 404 Not found');
    $ve70c4['error-404-description'] = $_strings['gs--page-not-found'];
    $ve70c4['title'] = $_strings['pt--page-not-found'];
    return $ve70c4;
}

include_once 'neasden/neasden.php';
function l6f10($l1cb25)
{
    $t97dbc = $l1cb25;
    $a7b8b9 = array(
        'text-original' => $t97dbc,
        'config' => SYSTEM_FOLDER . 'neasden/config.php',
        'profile-name' => 'kavychki',
        'explain' => false,
    );
    $a7b8b9 = neasden($a7b8b9);
    $t97dbc = $a7b8b9['text-final'];
    $l1cb25 = $t97dbc;
    return $l1cb25;
}

function y8d7d($cf2ffc, $l1cb25, $c5c18e)
{
    if ($cf2ffc == 'calliope') {
        preg_match_all('/\(\(([^ ]*)( |\)\))/', $l1cb25, $i9c28d);
        return $i9c28d[1];
    } elseif ($cf2ffc == 'neasden' and function_exists('neasden')) {
        $t97dbc = $l1cb25;
        $a7b8b9 = array(
            'text-original' => $t97dbc,
            'config' => SYSTEM_FOLDER . 'neasden/config.php',
            'profile-name' => $c5c18e,
            'explain' => false,
        );
        $a7b8b9 = neasden($a7b8b9);
        return $a7b8b9['resources-detected'];
    } else {
        return array();
    }
}

function t154e($cf2ffc, $l1cb25, $c5c18e)
{
    if (__LOG) {
        __log('Format: format with formatter "' . $cf2ffc . '" in context "' . $c5c18e . '"');
    }
    if ($cf2ffc == 'calliope') {
        $l1cb25 = kedd9($l1cb25);
        $l1cb25 = r5599($l1cb25, $c5c18e);
        $meta = array();
        $l1cb25 = jfd97($l1cb25);
        $l1cb25 = l6f10($l1cb25);
    } elseif ($cf2ffc == 'neasden' and function_exists('neasden')) {
        $t97dbc = $l1cb25;
        $a7b8b9 = array(
            'text-original' => $t97dbc,
            'config' => SYSTEM_FOLDER . 'neasden/config.php',
            'profile-name' => $c5c18e,
            'explain' => 0,
        );
        $a7b8b9 = neasden($a7b8b9);
        $t97dbc = $a7b8b9['text-final'];
        unset ($a7b8b9['text-final']);
        $meta = $a7b8b9;
        $l1cb25 = $t97dbc;
    }
    return array('text-final' => $l1cb25, 'meta' => $meta,);
}

function yb7f1($l1cb25, $c5c18e)
{
    global $_config;
    return t154e($_config['default_formatter'], $l1cb25, $c5c18e);
}

function r5599($l1cb25, $c5c18e)
{
    global $_config, $settings, $full_blog_url;
    @ (list ($c5c18e, $pe8fab) = explode('|', $c5c18e));
    require_once 'calliope/WikiFormatter.php';
    if ('full' == $c5c18e) {
        $yad910 = WF_FULL_MODE;
    } elseif ('simple' == $c5c18e) {
        $yad910 = WF_SIMPLE_MODE;
    } else {
        return $l1cb25;
    }
    $s0a1d3 = new WikiFormatter();
    $s0a1d3->replace = array(
        '/' => 'i',
        '+' => 'small',
        '-' => 's',
        '*' => 'b',
        '^' => 'sup',
        'v' => 'sub',
        '#' => 'tt',
        '!' => 'blockquote',
    );
    $s0a1d3->settings = array(
        'hrefSize' => 100,
        'localImgDir' => $full_blog_url . '/' . PICTURES_FOLDER,
        'localImgDirScaled' => $full_blog_url . '/' . SCALED_IMAGES_FOLDER,
        'localImgScalingProvider' => '?go=@scale-image:',
        'maxImgWidth' => $settings['max-image-width'],
        'mode' => $yad910,
        'enableShrinkLongHref' => 1,
        'enableHr' => 0,
        'enableBr' => 1,
        'enableHeaders' => 1,
        'headersStartWith' => 1,
        'enableTables' => 1,
        'simpleTableCSSClass' => 'e2-text-table',
        'enableAutoAcronymEngine' => 0,
        'enableAcronym' => 0,
        'acronymBase' => '',
        'enableList' => 1,
        'mailSafe' => "<a href=\"\" onmouseover=\"this.href='mailto:'+{email}\">{icon}<script language=\"JavaScript\">document.write({name});</script></a>",
        'ljUserTag' => '<a href="http://livejournal.com/users/{name}/">{name}</a>',
        'fullVersionURL' => $pe8fab,
        'enableTagIcons' => 0,
        'outerUrlInNewWindow' => 0,
        'lineBreak' => "\n",
        'extLinkHrefPrefix' => '',
    );
    $l1cb25 = $s0a1d3->Wiki2HTML($l1cb25);
    return $l1cb25;
}

function e2m_timezone()
{
    global $_strings, $settings;
    $vde2fd = array(
        'form-action' => e83c8('e2s_select_timezone'),
        'submit-text' => $_strings['fb--select'],
        'timezone-selector' => i9fe5($settings['timezone']['offset'], 1),
        'dst?' => $settings['timezone']['is_dst'],
    );
    return array(
        'title' => $_strings['pt--default-timezone'],
        'heading' => $_strings['pt--default-timezone'],
        'form' => 'form-timezone',
        'form-timezone' => $vde2fd,
    );
}

function g4c37()
{
    global $_strings;
    $g5cacd = array(
        -720 => '',
        -660 => '',
        -600 => '',
        -540 => '',
        -480 => $_strings['tt--zone-pt'],
        -420 => $_strings['tt--zone-mt'],
        -360 => $_strings['tt--zone-ct'],
        -300 => $_strings['tt--zone-et'],
        -240 => '',
        -210 => '',
        -180 => '',
        -120 => '',
        -60 => '',
        0 => $_strings['tt--zone-gmt'],
        60 => $_strings['tt--zone-cet'],
        120 => $_strings['tt--zone-eet'],
        180 => '',
        210 => '',
        240 => $_strings['tt--zone-msk'],
        270 => '',
        300 => '',
        330 => '',
        345 => '',
        360 => $_strings['tt--zone-ekt'],
        390 => '',
        420 => '',
        480 => '',
        540 => '',
        570 => '',
        600 => '',
        660 => '',
        720 => '',
        780 => '',
        840 => '',
    );
    return $g5cacd;
}

function g82a3($j7a86c)
{
    $g5cacd = g4c37();
    return @$g5cacd[(int)$j7a86c / SECONDS_IN_A_MINUTE];
}

function t9515($j7a86c)
{
    $x04b29 = '+';
    if ($j7a86c < 0) {
        $x04b29 = '&ndash;';
    }
    $p73cdd = str_pad((int)(abs($j7a86c) / 3600), 2, '0', STR_PAD_LEFT);
    $o640fd = str_pad(abs($j7a86c) / 60 % 60, 2, '0', STR_PAD_LEFT);
    return 'GMT' . $x04b29 . $p73cdd . ':' . $o640fd;
}

function i9fe5($e0743a, $y5784d = '')
{
    global $_strings;
    $g5cacd = g4c37();
    $e2cb9d = '';
    if (!$y5784d) {
        $y5784d = count($g5cacd);
    }
    $e2cb9d .= '<select name="offset" size="' . $y5784d . '">';
    foreach ($g5cacd as $j7a86c => $v83bce) {
        $dc03a8 = '';
        if ($j7a86c * SECONDS_IN_A_MINUTE == $e0743a) {
            $dc03a8 = ' selected="selected"';
        }
        $e2cb9d .= '<option' . $dc03a8 . ' value="' . $j7a86c . '">';
        $x04b29 = '';
        if ($j7a86c < 0) {
            $x04b29 = '−';
        }
        if ($j7a86c > 0) {
            $x04b29 = '+';
        }
        $p73cdd = (int)(abs($j7a86c * SECONDS_IN_A_MINUTE) / 3600);
        $o640fd = (int)(abs($j7a86c * SECONDS_IN_A_MINUTE) / 60 % 60);
        if ($p73cdd) {
            $e2cb9d .= ($x04b29 . ' ' . $p73cdd . ' ' . $_strings['gs--timezone-offset-hours'] . ' ' . ($o640fd ? ($o640fd . ' ' . $_strings['gs--timezone-offset-minutes']) : ''));
            if ($v83bce) {
                $e2cb9d .= ' (' . $v83bce . ')';
            }
        } else {
            $e2cb9d .= $v83bce;
        }
        $e2cb9d .= '</option>';
    }
    $e2cb9d .= '</select>';
    return $e2cb9d;
}

function e2s_select_timezone()
{
    global $settings, $_strings;
    if (@$_POST['offset'] >= -720 and @$_POST['offset'] <= 780) {
        $settings['timezone']['offset'] = @$_POST['offset'] * SECONDS_IN_A_MINUTE;
        $settings['timezone']['is_dst'] = isset ($_POST['is_dst']);
    }
    if (!c6e52(USER_FOLDER . 'settings.psa', serialize($settings))) {
        e8a40($_strings['er--error-occurred']);
    }
    e2_go_to(e83c8('e2m_settings')) and die ();
}

function a0923($taad65)
{
    return array('offset' => (int)$taad65['Offset'], 'is_dst' => (bool)$taad65['IsDST'],);
}

function p3211()
{
    return array('offset' => 0, 'is_dst' => false,);
}

function t5c05()
{
    global $settings;
    return $settings['timezone'];
}

function a7770($cb2c6c, $udf491)
{
    if (@$cb2c6c['is_dst']) {
        $d30481 = (int)date('I', $udf491);
        $o6b7ea = date('Z', $udf491) - $d30481 * SECONDS_IN_AN_HOUR;
        $i3e61a = $cb2c6c['offset'];
        $u178ae = $i3e61a - $o6b7ea;
        $t75b02 = date('I', $udf491 + $u178ae);
        return $t75b02;
    } else {
        return 0;
    }
}

function yb2bf($cb2c6c, $udf491)
{
    global $settings;
    if ($cb2c6c and is_array($cb2c6c)) {
        return ($cb2c6c['offset'] + a7770($cb2c6c, $udf491) * SECONDS_IN_AN_HOUR);
    }
}

function v8afe($udf491)
{
    return yb2bf(t5c05(), $udf491);
}

function j5a2f($n1ddcb, $r4a202, $cb2c6c)
{
    return gmdate($n1ddcb, $r4a202 + yb2bf($cb2c6c, $r4a202));
}

function ba846($n1ddcb, $r4a202)
{
    return j5a2f($n1ddcb, $r4a202, t5c05());
}

function r66cd($n41529, $w6f8f5 = false, $u8277e = false)
{
    if (is_numeric($u8277e)) {
        $iea2b2 = gmmktime(0, 0, 0, $w6f8f5, $u8277e, $n41529);
        $q7f021 = gmmktime(0, 0, 0, $w6f8f5, $u8277e + 1, $n41529) - 1;
    } elseif (is_numeric($w6f8f5)) {
        $iea2b2 = gmmktime(0, 0, 0, $w6f8f5, 1, $n41529);
        $q7f021 = gmmktime(0, 0, 0, $w6f8f5 + 1, 1, $n41529) - 1;
    } else {
        $iea2b2 = gmmktime(0, 0, 0, 1, 1, $n41529);
        $q7f021 = gmmktime(0, 0, 0, 1, 1, $n41529 + 1) - 1;
    }
    return array($iea2b2, $q7f021);
}

function r2143($cb2c6c, $n41529, $w6f8f5 = false, $u8277e = false)
{
    list ($iea2b2, $q7f021) = r66cd($n41529, $w6f8f5, $u8277e);
    $iea2b2 -= yb2bf($cb2c6c, $iea2b2);
    $q7f021 -= yb2bf($cb2c6c, $q7f021);
    return array($iea2b2, $q7f021);
}

function yac5b($n41529, $w6f8f5 = false, $u8277e = false)
{
    return r2143(t5c05(), $n41529, $w6f8f5, $u8277e);
}

function m5273($n41529, $w6f8f5 = false, $u8277e = false)
{
    $v32038 = 13;
    $kda4f0 = -12;
    $v32038 += 1;
    $kda4f0 -= 1;
    list ($iea2b2, $q7f021) = r66cd($n41529, $w6f8f5, $u8277e);
    $iea2b2 -= $v32038 * 3600;
    $q7f021 -= $kda4f0 * 3600;
    return array($iea2b2, $q7f021);
}

function ad17a($j7a86c)
{
    if ((int)@$j7a86c > 0) {
        return (string)'+' . abs(@$j7a86c);
    } elseif ((int)@$j7a86c < 0) {
        return (string)'-' . abs(
            @$j7a86c
        );
    } else {
        return '';
    }
}

function ud536($udf491)
{
    $s2ab64 = v8afe($udf491);
    $x04b29 = ($s2ab64 >= 0) ? '+' : '-';
    $s2ab64 = abs($s2ab64);
    $l03c7c = $s2ab64 % 60;
    $s2ab64 -= $l03c7c;
    $w6f8f5 = $s2ab64 % 3600 / 60;
    $s2ab64 -= $w6f8f5 * 60;
    $i2510c = $s2ab64 / 3600;
    if ($i2510c < 10) {
        $i2510c = '0' . $i2510c;
    }
    if ($w6f8f5 < 10) {
        $w6f8f5 = '0' . $w6f8f5;
    }
    return $x04b29 . $i2510c . $w6f8f5;
}

function qa618($laa759)
{
    global $settings;
    if (is_numeric($laa759)) {
        $result['offset'] = SECONDS_IN_A_MINUTE * $laa759;
        $result['is_dst'] = false;
        $gd8935 = SECONDS_IN_A_MINUTE * $laa759 - SECONDS_IN_AN_HOUR;
        $pa6cfc = array('offset' => $gd8935, 'is_dst' => true);
        $pa6cfc = (int)yb2bf($pa6cfc, time());
        if ($result['offset'] == $pa6cfc) {
            $result['offset'] = $gd8935;
            $result['is_dst'] = true;
        }
    } else {
        if (array_key_exists('timezone', $settings)) {
            $result = $settings['timezone'];
        } else {
            $result['offset'] = 0;
            $result['is_dst'] = false;
        }
    }
    return $result;
}

function f692f($u96b8c)
{
    $i2510c = ba846('H', $u96b8c);
    if ($i2510c <= 4) {
        return 4;
    } elseif ($i2510c <= 10) {
        return 1;
    } elseif ($i2510c <= 16) {
        return 2;
    } elseif ($i2510c <= 22) {
        return 3;
    } else {
        return 4;
    }
}

function y7a0b($d0e524, $eb65f7 = null)
{
    global $_strings;
    $cb2c6c = t5c05();
    $jdb42a = j5a2f('d.m.Y', $i97bc5, $cb2c6c);
    $d33284 = j5a2f('d.m.Y', $d0e524, $cb2c6c);
    $eed79a = SECONDS_IN_A_MINUTE;
    $m77cbc = SECONDS_IN_AN_HOUR;
    $i97bc5 = time();
    $w0b375 = f692f($i97bc5);
    $h3dfda = f692f($d0e524);
    $h74459 = $i97bc5 - $d0e524;
    if ($h74459 < 0) {
        return $_strings['tt--from-the-future'];
    }
    if ($h74459 >= 0 and $h74459 < 54) {
        return $_strings['tt--just-published'];
    }
    if ($h74459 >= 54 and $h74459 < 108) {
        return $_strings['tt--one-minute-ago'];
    }
    $g7eccb = $h74459 + 12;
    $a7828e = floor($g7eccb / $eed79a);
    if ($h74459 >= 108 and $h74459 < 54 * $eed79a) {
        return e2l_get_string(
            'tt--minutes-ago',
            array('minutes' => $a7828e)
        );
    }
    if ($h74459 >= 54 * $eed79a and $h74459 < 108 * $eed79a) {
        return $_strings['tt--one-hour-ago'];
    }
    $g7eccb = $h74459 + 12 * $eed79a;
    $v6b497 = floor($g7eccb / $m77cbc);
    if ($h74459 >= 108 * $eed79a and $h74459 < 4 * $m77cbc) {
        return e2l_get_string(
            'tt--hours-ago',
            array('hours' => $v6b497)
        );
    }
    $p07cc6 = j5a2f('G:i', $d0e524, $cb2c6c);
    if ($h74459 >= 4 * $m77cbc and $w0b375 > $h3dfda and $jdb42a == $d33284) {
        return e2l_get_string('tt--today-at', array('time' => $p07cc6));
    }
    if ((($i97bc5 - $d0e524) <= YEAR_DISPLAY_THRESH)) {
        return e2l_get_string(
            'tt--date-and-time',
            array('day' => j5a2f('j', $d0e524, $eb65f7), 'month' => j5a2f('m', $d0e524, $eb65f7), 'time' => $p07cc6,)
        );
    }
    return e2l_get_string(
        'tt--date-year-and-time',
        array(
            'day' => j5a2f('j', $d0e524, $eb65f7),
            'month' => j5a2f('m', $d0e524, $eb65f7),
            'year' => j5a2f('Y', $d0e524, $eb65f7),
            'time' => $p07cc6,
        )
    );
}

$_model_contractions = array(
    'key' => "INT UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    'pkey' => "INT UNSIGNED DEFAULT '0' NOT NULL",
    'int' => "INT DEFAULT '0' NOT NULL",
    'uint' => "INT UNSIGNED DEFAULT '0' NOT NULL",
    'time' => "INT UNSIGNED DEFAULT '0' NOT NULL",
    '0' => "TINYINT( 1 ) DEFAULT '0' NOT NULL",
    '1' => "TINYINT( 1 ) DEFAULT '1' NOT NULL",
    'v8' => "VARCHAR( 8 ) DEFAULT '' NOT NULL",
    'v15' => "VARCHAR( 15 ) DEFAULT '' NOT NULL",
    'v32' => "VARCHAR( 32 ) DEFAULT '' NOT NULL",
    'v64' => "VARCHAR( 64 ) DEFAULT '' NOT NULL",
    'fid' => "VARCHAR( 32 ) DEFAULT '" . $_config['default_formatter'] . "' NOT NULL",
    'v255' => "VARCHAR( 255 ) DEFAULT '' NOT NULL",
    'text' => "TEXT NOT NULL",
);
$_model = array(
    'Aliases' => array(
        array('ID', 'key'),
        array('EntityID', 'pkey'),
        array('Alias', 'v64'),
        array('Stamp', 'time'),
    ),
    'Notes' => array(
        array('ID', 'key'),
        array('Title', 'v255'),
        array('OriginalAlias', 'v64'),
        array('Text', 'text'),
        array('FormatterID', 'fid'),
        array('IsPublished', '0'),
        array('IsIssue', '0'),
        array('IsCommentable', '1'),
        array('IsVisible', '1'),
        array('IsFavourite', '0'),
        array('Stamp', 'time'),
        array('LastModified', 'time'),
        array('Offset', 'int'),
        array('IsDST', '0'),
        array('IP', 'v15'),
    ),
    'Comments' => array(
        array('ID', 'key'),
        array('NoteID', 'pkey'),
        array('AuthorName', 'v255'),
        array('AuthorEmail', 'v255'),
        array('Text', 'text'),
        array('Reply', 'text'),
        array('IsVisible', '1'),
        array('IsFavourite', '0'),
        array('IsReplyVisible', '0'),
        array('IsReplyFavourite', '0'),
        array('IsAnswerAware', '1'),
        array('IsSubscriber', '0'),
        array('IsSpamSuspect', '0'),
        array('IsNew', '0'),
        array('Stamp', 'time'),
        array('LastModified', 'time'),
        array('ReplyStamp', 'time'),
        array('ReplyLastModified', 'time'),
        array('IP', 'v15'),
    ),
    'Keywords' => array(
        array('ID', 'key'),
        array('ParentKeywordID', 'pkey'),
        array('Keyword', 'v255'),
        array('URLName', 'v32'),
        array('Description', 'text'),
        array('IsFavourite', '0'),
    ),
    'NotesKeywords' => array(array('ID', 'key'), array('NoteID', 'pkey'), array('KeywordID', 'pkey'),),
);
function uf1ac($uaab9e)
{
    global $settings, $_model, $_model_contractions;
    if (array_key_exists($uaab9e, $_model)) {
        $o54ca8 = array();
        foreach ($_model[$uaab9e] as $c1afd3) {
            list ($bb0689, $d599dc) = $c1afd3;
            $o54ca8[] = "`" . $bb0689 . "` " . $_model_contractions[$d599dc];
        }
        $l1b1cc = ("CREATE TABLE `" . $settings['db']['table_prefix'] . $uaab9e . "` " . "(" . implode(
                " ,",
                $o54ca8
            ) . ") " . "ENGINE=MyISAM DEFAULT CHARSET=utf8");
        if (p0738($l1b1cc)) {
            return true;
        }
    }
}

function h9943($uaab9e, $bde17f)
{
    global $settings;
    $zd05b6 = "`" . implode("`, `", array_keys($bde17f)) . "`";
    $gf09cc = "'" . implode("', '", array_values($bde17f)) . "'";
    $l1b1cc = ("INSERT INTO `" . $settings['db']['table_prefix'] . $uaab9e . "` " . "(" . $zd05b6 . ") VALUES (" . $gf09cc . ");");
    if (p0738($l1b1cc)) {
        $bde17f['ID'] = mysql_insert_id();
        return $bde17f;
    }
}

function eaa79($uaab9e, $bde17f, $j7692d = false)
{
    global $settings;
    if (__LOG) {
        __log('Model: update record, table <' . $uaab9e . '>');
    }
    $p6a7f2 = array();
    foreach (e2model__soft_fields_for_table_($uaab9e) as $b06e3d) {
        if (array_key_exists($b06e3d, $bde17f)) {
            $p6a7f2[] = '`' . $b06e3d . '`' . "='" . p7928($bde17f[$b06e3d]) . "'";
        }
    }
    $ub5b39 = array();
    if (is_array($j7692d)) {
        foreach (e2model__soft_fields_for_table_($uaab9e) as $b06e3d) {
            if (array_key_exists($b06e3d, $j7692d)) {
                $ub5b39[] = '`' . $b06e3d . '`' . "='" . p7928($j7692d[$b06e3d]) . "'";
            }
        }
    }
    if (count($ub5b39)) {
        $z56790 = implode(" AND ", $ub5b39);
    } else {
        if (!array_key_exists('ID', $bde17f) or !is_numeric($bde17f['ID'])) {
            die ('API MISUSE: e2_update_record must be called with an ID field in $record when updating single row');
        }
        $z56790 = "`ID`=" . $bde17f['ID'];
    }
    if (count($p6a7f2) > 0) {
        $l1b1cc = ("UPDATE `" . $settings['db']['table_prefix'] . $uaab9e . "` " . "SET " . implode(
                ', ',
                $p6a7f2
            ) . " WHERE " . $z56790);
        if (p0738($l1b1cc)) {
            return true;
        }
    }
}

function e2model__soft_fields_for_table_($uaab9e)
{
    global $_model;
    $e2cb9d = array();
    if (array_key_exists($uaab9e, $_model)) {
        foreach ($_model[$uaab9e] as $b06e3d) {
            if (!in_array($b06e3d[1], array('key'))) {
                $e2cb9d[] = $b06e3d[0];
            }
        }
    }
    return $e2cb9d;
}

function e2m_install()
{
    global $settings, $_strings, $_superconfig;
    $e2cb9d = array();
    if (e2_is_installed()) {
        e2_go_to('');
    } else {
        if ($_superconfig['disallow_installer']) {
            die ('Installer disabled by superconfig');
        }
        if (__LOG) {
            __log('Installer: not installed, present user with form');
        }
        $e2cb9d['title'] = $_strings['pt--install'];
        $e2cb9d['heading'] = $_strings['pt--install'];
        $ic50d0 = $_strings['fb--begin'];
        $nd77d5['server'] = @$_COOKIE[y8c3b('install_db_server')];
        $nd77d5['user_name'] = @$_COOKIE[y8c3b('install_db_user_name')];
        $nd77d5['passw'] = @$_COOKIE[y8c3b('install_db_passw')];
        $nd77d5['name'] = @$_COOKIE[y8c3b('install_db_name')];
        $nd77d5['table_prefix'] = @$_COOKIE[y8c3b('install_db_table_prefix')];
        $nd77d5['exists'] = @$_COOKIE[y8c3b('install_db_exists')];
        $e2cb9d['form-install'] = array(
            'form-action' => e83c8('e2s_install'),
            'form-check-db-config-action' => e83c8('e2j_check_db_config'),
            'form-list-databases-action' => e83c8('e2j_list_databases'),
            'submit-text' => $ic50d0,
            'db-server' => htmlspecialchars(@$nd77d5['server'] ? $nd77d5['server'] : 'localhost'),
            'db-user' => htmlspecialchars(@$nd77d5['user_name'] ? $nd77d5['user_name'] : 'root'),
            'db-password' => htmlspecialchars(DB_PASSWORD_RECOVER_AND_SHOW ? (@$nd77d5['passw']) : ''),
            'db-database' => htmlspecialchars(@$nd77d5['name']),
            'db-prefix' => htmlspecialchars(@$nd77d5['table_prefix'] ? $nd77d5['table_prefix'] : 'e2Blog'),
            'db-exists?' => (bool)$nd77d5['exists'],
        );
        $d444bc = true;
        $ub5d6c = array(
            USER_FOLDER,
            CACHES_FOLDER,
            BACKUP_FOLDER,
            PICTURES_FOLDER,
            THUMBNAILS_FOLDER,
            SCALED_IMAGES_FOLDER,
        );
        $t90fec = array();
        $s45a93 = array();
        if (__LOG) {
            __log('Installer: force directories');
        }
        foreach ($ub5d6c as $o45684) {
            @taf42($o45684);
            if (is_dir($o45684)) {
                if (false !== @wcd2d($pfa816 = $o45684 . 'installer-check.tmp', '')) {
                    @unlink($pfa816);
                } else {
                    $s45a93[] = $o45684;
                }
            } else {
                $t90fec[] = $o45684;
            }
        }
        if (count($t90fec) == 0 and count($s45a93) == 0) {
            if (__LOG) {
                __log('Installer: everything is fine');
            }
            $e2cb9d['form-install']['installation-possible?'] = true;
        } else {
            if (__LOG) {
                __log('Installer: problems, tell user');
            }
            $e2cb9d['form-install']['installation-possible?'] = false;
            $e2cb9d['message'] = '<p>' . $_strings['gs--user-fixes-needed'] . '</p>';
            if (count($t90fec) > 0) {
                $e2cb9d['message'] .= '<p>' . $_strings['gs--following-folders-missing'] . '<br />';
                foreach ($t90fec as $x987dd) {
                    $e2cb9d['message'] .= '' . $x987dd . '<br />';
                }
                $e2cb9d['message'] .= '</p>';
                $e2cb9d['message'] .= '<p>' . $_strings['gs--could-not-create-them-automatically'] . '</p>';
            }
            if (count($s45a93) > 0) {
                $e2cb9d['message'] .= '<p>' . $_strings['gs--let-scripts-write-to-following-folders'] . '<br />';
                foreach ($s45a93 as $x23ce6) {
                    $e2cb9d['message'] .= '' . $x23ce6 . '<br />';
                }
                $e2cb9d['message'] .= '</p>';
            }
            $e2cb9d['message'] .= '<p>' . $_strings['gs--and-reload-installer'] . '</p>';
        }
    }
    if (__LOG) {
        __log('Installer: return');
    }
    return $e2cb9d;
}

function e2_instantiate($y2af72)
{
    global $_instance;
    $_instance['version'] = $y2af72;
    if (c6e52(USER_FOLDER . '/instance.psa', serialize($_instance))) {
        return true;
    } else {
        die ('Cannot instantiate v' . $y2af72 . ': probably permission denied');
    }
}

function e2s_instantiate($parameters)
{
    global $_strings;
    if (e2_is_installed()) {
        die ('Remove the file "' . USER_FOLDER . 'instance.psa" first');
    } else {
        if (is_numeric($parameters['version'])) {
            if (e2_instantiate($parameters['version'])) {
                e8a40($_strings['gs--instantiated-version'] . ' v' . $parameters['version']);
                e2_go_to(e83c8('e2m_frontpage'));
                die;
            }
        }
    }
    die ('Could not create instance of engine');
}

function e2s_install()
{
    global $settings, $_strings, $_instance;
    if (e2_is_installed()) {
        e2_go_to(e83c8('e2m_install'));
        die;
    } else {
        e2_drop_all_kinds_of_cache();
        $nd77d5['server'] = @$_POST['db-server'];
        $nd77d5['user_name'] = @$_POST['db-user'];
        $nd77d5['passw'] = @$_POST['db-password'];
        $nd77d5['name'] = @$_POST['db-database'];
        $nd77d5['table_prefix'] = @$_POST['db-prefix'];
        $nd77d5['exists'] = isset ($_POST['db-exists']);
        $cb2c6c = qa618(@$_POST['gmt-offset']);
        foreach ($nd77d5 as $g8ce4b => $c9e366) {
            cc64a('install_db_' . $g8ce4b, $c9e366);
        }
        @session_start();
        if (!array_key_exists('password', $_POST) or $_POST['password'] == '') {
            e8a40($_strings['er--no-password-entered']);
        }
        if (!c4193()) {
            $d444bc = true;
            $g88162 = trim($_POST['password']);
            $a2d6d8['sessions'] = array(
                array(
                    'stamp' => time(),
                    'remote_ip' => $_SERVER['REMOTE_ADDR'],
                    'key_hash' => ke8ed(true),
                    'ua' => $_SERVER['HTTP_USER_AGENT'],
                )
            );
            if (!w1d21($a2d6d8)) {
                $d444bc = false;
            }
            if (!@c6e52(USER_FOLDER . 'password-hash.psa', serialize(c4c49($g88162)))) {
                $d444bc = false;
            }
            if (!$nd77d5['exists']) {
                $settings = array();
            }
            $settings['db'] = $nd77d5;
            $settings['timezone'] = $cb2c6c;
            if (!@c6e52(USER_FOLDER . 'settings.psa', serialize($settings))) {
                $d444bc = false;
            }
            if (!$d444bc) {
                e8a40($_strings['er--file-write-failed-blame-rights']);
            } else {
                if ($nd77d5['exists']) {
                    if (__LOG) {
                        __log('Installer: No need to create DB');
                    }
                    $dba46b = q0f7c();
                    if (!$dba46b) {
                        if (__LOG) {
                            __log('Installer: DB not OK');
                        }
                        e8a40($_strings['er--double-check-db-params']);
                    }
                } else {
                    if (__LOG) {
                        __log('Installer: Creating DB...');
                    }
                    $dba46b = (uf1ac('Notes') and uf1ac('Comments') and uf1ac('Keywords') and uf1ac(
                            'NotesKeywords'
                        ) and uf1ac('Aliases'));
                    if (!$dba46b) {
                        if (__LOG) {
                            __log('Installer: DB not OK');
                        }
                        e8a40($_strings['er--double-check-db-params']);
                    }
                }
                if ($dba46b) {
                    if (__LOG) {
                        __log('Installer: DB OK, instantiating...');
                    }
                    e2_instantiate(E2_VERSION);
                    if (__LOG) {
                        __log('Installer: Done');
                    }
                    if (!$nd77d5['exists']) {
                        if (__LOG) {
                            __log('Installer: Adding indexes...');
                        }
                        p0738(
                            "ALTER TABLE `" . $settings['db']['table_prefix'] . "Notes` " . "ADD FULLTEXT (`Title`, `Text`)"
                        );
                        p0738(
                            "ALTER TABLE `" . $settings['db']['table_prefix'] . "NotesKeywords` " . "ADD INDEX (`NoteID`)"
                        );
                        if (__LOG) {
                            __log('Installer: Done');
                        }
                    }
                    if (__LOG) {
                        __log('Installer: Complete');
                    }
                    e2_go_to();
                    die;
                }
            }
        }
        if (c4193()) {
            e2_go_to(e83c8('e2m_install'));
            die;
        }
    }
}

function e2_is_installed()
{
    global $_instance;
    return (bool)$_instance;
}

function e2_make_sure_that_installed()
{
    global $u57de2, $ra57c1, $_instance, $_superconfig;
    if (__LOG) {
        __log('Installer: making sure that engine is installed');
    }
    if (e2_is_installed()) {
        if (__LOG) {
            __log('Installer: done');
        }
        if (E2_VERSION < $_instance ['version']) {
            header('HTTP/1.1 503 Service Unavailable');
            die ('E2 does not support automatic downgrade.');
        } elseif (E2_VERSION > $_instance ['version']) {
            header('Location: http://' . $u57de2 . $ra57c1 . '/perform_update/');
            header('Location: ' . e83c8('e2s_update_perform'));
            die;
        } else {
            return;
        }
    }
    if ($_superconfig['disallow_installer']) {
        die ('Not installed');
    } else {
        $s601f0 = e83c8('e2m_install');
        if (__LOG) {
            __log('Installer: not yet, will need to install, going to ' . $s601f0);
        }
        e2_go_to($s601f0);
        die;
    }
}

function e2_dbserver_usable_databases($xcf1e8, $kee11c, $z5f4dc)
{
    $x32e95 = array();
    if (($f2a304 = mysql_connect($xcf1e8, $kee11c, $z5f4dc)) !== false) {
        $oe61ce = mysql_list_dbs($f2a304);
        while ($sf1965 = mysql_fetch_row($oe61ce)) {
            if (mysql_select_db($sf1965[0], $f2a304) and !in_array($sf1965[0], array('information_schema', 'mysql'))) {
                $x32e95[] = $sf1965[0];
            }
        }
    }
    return $x32e95;
}

function e2j_check_db_config()
{
    global $_model;
    $xcf1e8 = $kee11c = $z5f4dc = $t11e0e = $r851f5 = '';
    if (array_key_exists('server', $_POST)) {
        $xcf1e8 = $_POST['server'];
    }
    if (array_key_exists('user', $_POST)) {
        $kee11c = $_POST['user'];
    }
    if (array_key_exists('password', $_POST)) {
        $z5f4dc = $_POST['password'];
    }
    if (array_key_exists('database', $_POST)) {
        $t11e0e = $_POST['database'];
    }
    if (array_key_exists('prefix', $_POST)) {
        $r851f5 = $_POST['prefix'];
    }
    $de0879 = (bool)($_POST['exists'] == 'true');
    ini_set('mysql.connect_timeout', 1);
    if (($u098f6 = mysql_connect($xcf1e8, $kee11c, $z5f4dc)) === false) {
        if (($u098f6 = mysql_connect($xcf1e8)) === false) {
            die ('no-connect');
        } else {
            die ('server-responding');
        }
    } else {
        if (!$t11e0e) {
            $x32e95 = e2_dbserver_usable_databases($xcf1e8, $kee11c, $z5f4dc);
            $t11e0e = $x32e95[0];
        }
        if (mysql_select_db($t11e0e, $u098f6) === false) {
            die ('server-lets-in');
        } else {
            $k08cfc = false;
            $e35f9b = array();
            $qac5c7 = 'SHOW TABLES FROM `' . p7928($t11e0e) . '`';
            $result = mysql_query($qac5c7, $u098f6);
            if ($result) {
                while ($sf1965 = mysql_fetch_row($result)) {
                    foreach (array_keys($_model) as $gd2ffa) {
                        if (strcasecmp($sf1965[0], $r851f5 . $gd2ffa) === 0) {
                            $k08cfc = true;
                            $e35f9b[] = $gd2ffa;
                        }
                    }
                }
            }
            $m6cfe6 = true;
            foreach (array_keys($_model) as $gd2ffa) {
                if (!in_array($gd2ffa, $e35f9b)) {
                    $m6cfe6 = false;
                }
            }
            if (!$de0879 and $k08cfc) {
                die ('prefix-occupied');
            }
            if ($de0879 and !$k08cfc) {
                die ('prefix-not-found');
            }
            die ('bingo');
        }
    }
}

function e2j_list_databases()
{
    $xcf1e8 = $kee11c = $z5f4dc = '';
    if (array_key_exists('server', $_POST)) {
        $xcf1e8 = $_POST['server'];
    }
    if (array_key_exists('user', $_POST)) {
        $kee11c = $_POST['user'];
    }
    if (array_key_exists('password', $_POST)) {
        $z5f4dc = $_POST['password'];
    }
    $x32e95 = e2_dbserver_usable_databases($xcf1e8, $kee11c, $z5f4dc);
    if ($x32e95) {
        die (implode('|', $x32e95));
    }
    die;
}

function qbef8($y7d0db, $pcb5e1)
{
    $z076ae['update-failed-at'] = $y7d0db;
    @c6e52(USER_FOLDER . 'update-state.psa', serialize($z076ae));
    header('HTTP/1.1 503 Service Unavailable');
    die ('Update stuck at v' . $y7d0db . ' with message:<br /><br />' . $pcb5e1);
}

function e2s_update_perform()
{
    global $_instance, $_model, $settings;
    $bd98a0 = max((int)($_instance['version']), 2285);
    if ($_instance['version'] == E2_VERSION) {
        y4930();
        die;
    }
    $z076ae = @unserialize(jcdf0(USER_FOLDER . '/update-state.psa'));
    if (isset ($z076ae['update-failed-at'])) {
        $bd98a0 = $z076ae['update-failed-at'] - 1;
        @unlink(USER_FOLDER . '/update-state.psa');
    }
    if ($bd98a0 < 2344) {
        @unlink(USER_FOLDER . 'last-update.psa');
        e2_instantiate(2344);
    }
    if ($bd98a0 < 2411) {
        p0738(
            "ALTER TABLE `" . $settings['db']['table_prefix'] . "Notes` " . "ADD `FormatterID` VARCHAR( 32 ) DEFAULT 'calliope' NOT NULL AFTER `Text`"
        );
        e2_drop_all_kinds_of_cache();
        e2_instantiate(2411);
    }
    if ($bd98a0 < 2425) {
        p0738(
            "ALTER TABLE `" . $settings['db']['table_prefix'] . "Notes` " . "CHANGE `URLName` `URLName` VARCHAR( 32 ) DEFAULT '' NOT NULL"
        );
        e2_drop_all_kinds_of_cache();
        e2_instantiate(2425);
    }
    if ($bd98a0 < 2560) {
        e2_drop_all_kinds_of_cache();
    }
    if ($bd98a0 < 2587) {
        ac5a6('caches/*');
        rmdir('caches');
        @taf42(CACHES_FOLDER);
    }
    if ($bd98a0 < 2609) {
        uf1ac('Aliases');
        e2_instantiate(2609);
    }
    if ($bd98a0 < 2610) {
        p0738(
            "ALTER TABLE `" . $settings['db']['table_prefix'] . "Notes` " . "CHANGE `URLName` `OriginalAlias` VARCHAR( 64 ) DEFAULT '' NOT NULL AFTER `FormatterID`"
        );
        e2_instantiate(2610);
    }
    if ($bd98a0 < 2661) {
        @taf42(BACKUP_FOLDER);
        e2_drop_all_kinds_of_cache();
    }
    if ($bd98a0 < 2688) {
        foreach (array_keys($_model) as $gd2ffa) {
            p0738("SHOW TABLE STATUS LIKE '" . $settings['db']['table_prefix'] . $gd2ffa . "' ");
            $j4b43b = j0d6b();
            if (count($j4b43b) > 0) {
                $td89e2 = $j4b43b[0]['Collation'];
                if ($td89e2 != 'utf8_general_ci') {
                    p0738(
                        "ALTER TABLE `" . $settings['db']['table_prefix'] . $gd2ffa . "` " . "CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci"
                    );
                }
            }
        }
        e2_instantiate(2688);
        e2_drop_all_kinds_of_cache();
    }
    if ($bd98a0 < 2691) {
        $settings = e2_utf8_version_of_array_($settings);
        if (!c6e52(USER_FOLDER . 'settings.psa', serialize($settings))) {
            e8a40($_strings['er--cannot-save-data']);
        }
        e2_drop_all_kinds_of_cache();
    }
    @c6e52(USER_FOLDER . 'settings.psa', serialize($settings));
    e2_instantiate(E2_VERSION);
    e8a40(
        e2l_get_string('gs--updated-successfully', array('from' => 'v' . $bd98a0, 'to' => 'v' . $_instance['version'],))
    );
    e2_go_to();
    die;
}

function q0f7c()
{
    global $settings, $_db, $_db_error;
    if (@$_db['connected'] !== true) {
        if (($_db['link'] = @mysql_connect(
                $settings['db']['server'],
                $settings['db']['user_name'],
                $settings['db']['passw']
            )) !== false
        ) {
            if (mysql_select_db($settings['db']['name'])) {
                $_db['connected'] = true;
                return true;
            } else {
                $_db_error = DB_CANNOT_FIND;
                return false;
            }
        } else {
            $_db_error = DB_CANNOT_CONNECT;
            return false;
        }
    } else {
        return true;
    }
}

function p0738($u7694f)
{
    global $y11755, $_db, $_db_error, $settings, $_strings;
    if (__LOG) {
        __log('DB: query <' . $u7694f . '>');
    }
    $q9b54f = c7f78();
    @$y11755++;
    if (q0f7c()) {
        $r8e815 = 'utf8';
        if (version_compare(mysql_get_server_info(), '4.1', '>=') and @$_db['latest_setnames'] != $r8e815) {
            mysql_query("SET NAMES " . $r8e815);
            $_db['latest_setnames'] = $r8e815;
        }
        if ($_db['result'] = mysql_query($u7694f, $_db['link'])) {
            if (__LOG) {
                __log('DB: done in ' . round(c7f78() - $q9b54f, 3));
            }
            return true;
        } else {
            e8a40(
                $_strings['er--error-in-query'] . ': <br /><code>' . nl2br(
                    $u7694f
                ) . '</code><br /><br />' . 'mySQL said: <i>' . mysql_error() . '</i><br />'
            );
            return false;
        }
    } else {
        if ($_db_error == DB_CANNOT_FIND) {
            if (__LOG) {
                __log('DB: cannot find db');
            }
            e8a40($_strings['er--cannot-find-db']);
        } elseif ($_db_error == DB_CANNOT_CONNECT) {
            if (__LOG) {
                __log('DB: cannot connect to db');
            }
            e8a40($_strings['er--cannot-connect-to-db']);
        } else {
            if (__LOG) {
                __log('DB: db error ' . $_db_error);
            }
            e8a40($_strings['er--error-occurred'] . ' (' . $_db_error . ')');
        }
        return false;
    }
}

function j0d6b($d599dc = MYSQL_ASSOC)
{
    global $_db;
    $e2cb9d = array();
    while ($x0cc17 = @mysql_fetch_array($_db['result'], $d599dc)) {
        foreach ($x0cc17 as $j865c0 => $x4921c) {
            if (is_string($x4921c)) {
                $x0cc17[$j865c0] = $x4921c;
            }
        }
        $e2cb9d[] = $x0cc17;
    }
    return $e2cb9d;
}

function p7928($sb45cf)
{
    q0f7c();
    return mysql_real_escape_string($sb45cf);
}

function hb488()
{
    echo '<pre>';
    echo 'Sifting backups...<br>';
    $s10ae9 = array();
    foreach (glob(BACKUP_FOLDER . '*.sql') as $g8c7dd) {
        if (preg_match('/^backup\-(\d+)\-(\d+)\-(\d+)\-at\-(\d+)\-(\d+)\-(\d+)\.sql$/is', basename($g8c7dd), $i9c28d)) {
            list (, $n41529, $w6f8f5, $u8277e, $i2510c, $j865c0, $l03c7c) = $i9c28d;
            $u96b8c = gmmktime($i2510c, $j865c0, $l03c7c, $w6f8f5, $u8277e, $n41529);
            $s10ae9[$u96b8c] = $g8c7dd;
        }
    }
    if (count($s10ae9) > 3) {
        echo 'More than 3 backups, time to sift...<br>';
        $p536a1 = -1;
        $pf46c9 = array(SECONDS_IN_A_MINUTE, SECONDS_IN_AN_HOUR, SECONDS_IN_A_DAY, -1);
        $j865c0 = 0;
        foreach (array_reverse($s10ae9, true) as $u96b8c => $g8c7dd) {
            echo '-> ' . $g8c7dd . ' (' . gmdate('r', $u96b8c) . ')<br>';
            if ($p536a1 == -1) {
                echo '   latest, leave<br>';
                $p536a1 = $u96b8c;
            } elseif ($pf46c9[$j865c0] == -1) {
                echo '   too old, remove<br>';
                unlink($g8c7dd);
            } else {
                if ($p536a1 - $u96b8c < $pf46c9[$j865c0]) {
                    echo '   no need (not long ago), remove<br>';
                    unlink($g8c7dd);
                } else {
                    $j865c0++;
                    echo '   ok, leave, set interval to ' . $pf46c9[$j865c0] . '<br>';
                    $p536a1 = $u96b8c;
                }
            }
        }
    } else {
        echo 'No need to sift<br>';
    }
    echo '</pre>';
    return;
}

function e2s_dump()
{
    global $_model, $settings, $_db;
    if (q0f7c()) {
        if ($_db['link']) {
            $k9ab2e = array();
            foreach (array_keys($_model) as $uaab9e) {
                $k9ab2e[] = $settings['db']['table_prefix'] . $uaab9e;
            }
            e2_backup($_db['link'], $k9ab2e, BACKUP_FOLDER . 'backup-' . gmdate('Y-m-d-\a\t-H-i-s') . '.sql');
            hb488();
            die ('Done');
        }
    }
    die ('Could not backup');
}

function e2ali__alias_from_title_($d36cd3)
{
    $o3e891 = $d36cd3;
    $o3e891 = e2l_transliterate($o3e891);
    $o3e891 = str_replace('\'', '', $o3e891);
    $o3e891 = str_replace(chr(146), '', $o3e891);
    $n17901 = '';
    for ($j865c0 = 0; $j865c0 < strlen($o3e891); ++$j865c0) {
        if ((ord($o3e891[$j865c0]) >= 48 and ord($o3e891[$j865c0]) <= 57) or (ord($o3e891[$j865c0]) >= 65 and ord(
                    $o3e891[$j865c0]
                ) <= 90) or (ord($o3e891[$j865c0]) >= 97 and ord($o3e891[$j865c0]) <= 122) or 0
        ) {
            $n17901 .= $o3e891[$j865c0];
        } else {
            $n17901 .= '-';
        }
    }
    $n17901 = preg_replace('/\-+/', '-', $n17901);
    $n17901 = trim($n17901, '-');
    $n17901 = strtolower($n17901);
    if ($n17901 == '-') {
        $n17901 = '';
    }
    return $n17901;
}

function e2_aliasrec_of_alias_($q72487)
{
    global $settings;
    if (!$q72487) {
        return false;
    }
    if (p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Aliases` " . "WHERE `Alias` = '" . $q72487 . "' " . "ORDER BY Stamp LIMIT 1"
    )
    ) {
        $result = j0d6b();
        if (count($result) == 1) {
            return $result[0];
        }
    }
}

function e2_active_alias_for_note_with_id_($d21158)
{
    global $settings, $_e2_active_alias_for_note_by_ids;
    if ($d21158) {
        if (is_array($_e2_active_alias_for_note_by_ids) and array_key_exists(
                $d21158,
                $_e2_active_alias_for_note_by_ids
            )
        ) {
            return @$_e2_active_alias_for_note_by_ids[$d21158];
        } else {
            if (p0738(
                "SELECT `Alias` " . "FROM `" . $settings['db']['table_prefix'] . "Aliases` " . "WHERE `EntityID` = " . $d21158 . " " . "ORDER BY `Stamp` DESC LIMIT 1"
            )
            ) {
                $result = j0d6b();
                $_e2_active_alias_for_note_by_ids[$d21158] = $result[0]['Alias'];
            }
        }
        return @$_e2_active_alias_for_note_by_ids[$d21158];
    } else {
    }
}

function yd712($r15d61, $d21158, $d36cd3, $ffb873 = 1)
{
    global $settings;
    if ($r15d61 == 'set' and !$d21158) {
        return false;
    }
    $n17901 = e2ali__alias_from_title_($d36cd3);
    if ($ffb873 > 1) {
        $n17901 .= '-' . $ffb873;
    }
    if ($n17901 != '' and $jc45dd = e2_aliasrec_of_alias_($n17901)) {
        $u1123c = $jc45dd['EntityID'];
        if (($d21158 and $u1123c == $d21158) or $n17901 != e2_active_alias_for_note_with_id_($u1123c)) {
            if ($r15d61 == 'find') {
                return $n17901;
            }
            if ($r15d61 == 'set') {
                if (eaa79(
                    'Aliases',
                    array('ID' => $jc45dd['ID'], 'EntityID' => $d21158, 'Alias' => $n17901, 'Stamp' => time(),)
                )
                ) {
                    return $n17901;
                }
            }
        } else {
            return yd712($r15d61, $d21158, $d36cd3, $ffb873 + 1);
        }
    } else {
        if ($d21158 and $n17901 == '') {
            if (e2_active_alias_for_note_with_id_($d21158) == '') {
                return '';
            }
        }
        if ($r15d61 == 'find') {
            return $n17901;
        }
        if ($r15d61 == 'set') {
            if (h9943('Aliases', array('EntityID' => $d21158, 'Alias' => $n17901, 'Stamp' => time(),))) {
                return $n17901;
            }
        }
    }
    return '';
}

function wb7c3($d21158, $d36cd3, $ffb873 = 1)
{
    return yd712('set', $d21158, $d36cd3, $ffb873 = 1);
}

function e2m_note($parameters = array())
{
    global $settings, $u57de2, $_config, $_strings;
    if (__LOG) {
        __log('Note: working...');
    }
    $taad65 = $parameters['*note'];
    $i229c3 = $parameters['day-number'];
    $e80791 = -1;
    if (__LOG) {
        __log('Note: slide down...');
    }
    while (1) {
        if ($taad65 == false or !($taad65['IsVisible'] or ne852())) {
            if ($e80791 == -1) {
                $e80791 = rf9fb($parameters['year'], $parameters['month'], $parameters['day']);
            }
            if ($i229c3 > 1) {
                --$i229c3;
                $taad65 = @$e80791[$i229c3 - 1];
                continue;
            }
            return e2_error404_mode();
        } else {
            break;
        }
    }
    if ($taad65['Stamp'] > time() and !ne852()) {
        return e2_error404_mode();
    }
    if (__LOG) {
        __log('Note: redirect if necessary');
    }
    if ($i229c3 != $parameters['day-number']) {
        $parameters['day-number'] = $i229c3;
        e2_go_to(e83c8('e2m_note', $parameters));
    }
    if (__LOG) {
        __log('Note: done slide down');
    }
    $ld58c0 = e83c8('e2m_note', $parameters);
    if ($settings['comments']['on']) {
        n3010($_strings['nf--comments-on-this-post'], e83c8('e2m_note_comments_rss', $parameters));
    }
    if (__LOG) {
        __log('Note: navigation...');
    }
    $tfcb08 = ncca7($taad65, 'prev');
    $jd0cab = ncca7($taad65, 'next');
    if ($tfcb08) {
        $sb3b32['prev-href'] = e83c8('e2m_note', array('*note' => $tfcb08));
        $sb3b32['prev-title'] = l6f10(htmlspecialchars(gea9c($tfcb08), ENT_NOQUOTES, HSC_ENC));
    }
    if ($jd0cab) {
        $sb3b32['next-href'] = e83c8('e2m_note', array('*note' => $jd0cab));
        $sb3b32['next-title'] = l6f10(htmlspecialchars(gea9c($jd0cab), ENT_NOQUOTES, HSC_ENC));
    }
    $sb3b32['title'] = $_strings['nm--posts'];
    $sb3b32['timeline?'] = false;
    $sb3b32['this-title'] = l6f10(htmlspecialchars(gea9c($taad65), ENT_NOQUOTES, HSC_ENC));
    if (__LOG) {
        __log('Note: packaging...');
    }
    $taad65['_']['_id'] = $taad65['ID'];
    $taad65['_']['_ord'] = 0;
    $taad65['_']['_ord_max'] = 0;
    $f8e4cd = w6791($taad65);
    $ie35b1 = '';
    $h01a5b = '';
    $f33ff2 = false;
    $j905f7 = false;
    $r7bae4 = '';
    $yd09b4 = '';
    if (1 or @$settings['comments']['on']) {
        $e83625 = e2_note_cache_filename_with_id_($taad65['_']['_id'] . '-comments');
        $q1e8cc = null;
        if (CACHE_NOTES_COMMENTS and !ne852() and is_file($e83625)) {
            $q1e8cc = @unserialize(jcdf0($e83625));
        }
        if (__LOG) {
            __log('Note: comments...');
        }
        if (is_array($q1e8cc)) {
            if (__LOG) {
                __log('Note: retrieve cached ctree');
            }
            $ie35b1 = $q1e8cc;
        } else {
            if (__LOG) {
                __log('Note: assemble ctree...');
            }
            $pc1fdc = b1baf($taad65['ID'], "ORDER BY `Stamp`");
            $va5d49 = array();
            $o04c25 = true;
            foreach ($pc1fdc as $g8ce4b => $m4032b) {
                if ($m4032b['IsVisible']) {
                    $m4032b['_']['_id'] = $m4032b['ID'];
                    $m4032b['_']['_ord'] = $g8ce4b;
                    $m4032b['_']['_ord_max'] = count($pc1fdc) - 1;
                    $n06d4c = p86f8($taad65, $m4032b, $g8ce4b + 1);
                    if ($n06d4c['new?'] and $o04c25) {
                        $n06d4c['first-new?'] = true;
                        $o04c25 = false;
                    }
                    $va5d49[] = $n06d4c;
                }
            }
            $ie35b1 = $va5d49;
            if (CACHE_NOTES_COMMENTS and !ne852()) {
                c6e52($e83625, serialize($ie35b1));
            }
        }
        $h01a5b = e83c8('e2m_note_comments_rss', array('*note' => $taad65));
        if ($f8e4cd['commentable-now?']) {
            $o80f02 = i66aa($taad65);
        }
        if (ne852() and sb387($taad65, NOTE_COMMENTABLE_NOW_CONDITIONALLY)) {
            if ($taad65['IsCommentable']) {
                $r7bae4['href'] = e83c8(
                    'e2m_note_flag',
                    array('*note' => $taad65, 'flag' => 'IsCommentable', 'value' => 0,)
                );
                $r7bae4['text'] = $_strings['bt--close-comments-to-post'];
            } else {
                $r7bae4['href'] = e83c8(
                    'e2m_note_flag',
                    array('*note' => $taad65, 'flag' => 'IsCommentable', 'value' => 1,)
                );
                $r7bae4['text'] = $_strings['bt--open-comments-to-post'];
            }
        }
    }
    if (ne852() and array_key_exists('new-comments-count', $f8e4cd) and $f8e4cd['new-comments-count']) {
        if (__LOG) {
            __log('Note: mark comments as not new');
        }
        e2_drop_caches_for_note_($d21158);
        eaa79('Comments', array('IsNew' => 0), array('NoteID' => $taad65['_']['_id']));
    }
    if (__LOG) {
        __log('Note: more work...');
    }
    $ca80da = o5421($f8e4cd['text']);
    $ve70c4['class'] = 'note';
    $ve70c4['title'] = gea9c($taad65);
    $ve70c4['pages'] = $sb3b32;
    $ve70c4['summary'] = $ca80da;
    $ve70c4['notes'] = array('only' => $f8e4cd);
    if ($ie35b1) {
        $ve70c4['comments'] = $ie35b1;
    }
    if ($h01a5b) {
        $ve70c4['comments-rss-href'] = $h01a5b;
    }
    if ($r7bae4) {
        $ve70c4['comments-toggle'] = $r7bae4;
    }
    if ($o80f02) {
        $ve70c4['form-comment'] = $o80f02;
    }
    if (__LOG) {
        __log('Note: done');
    }
    return $ve70c4;
}

function e2m_note_withdraw($parameters = array())
{
    global $settings, $_strings;
    $dea59a = $parameters['*note'];
    if (!$dea59a) {
        return e2_error404_mode();
    }
    $dea59a['IsPublished'] = 0;
    $dea59a['IsVisible'] = 1;
    $dea59a['Stamp'] = time();
    $dea59a['IP'] = $_SERVER['REMOTE_ADDR'];
    if ($parameters['alias']) {
        $dea59a['OriginalAlias'] = $parameters['alias'];
    } else {
        $dea59a['OriginalAlias'] = yd712('find', $dea59a['ID'], $dea59a['Title']);
    }
    e2_drop_caches_for_note_($dea59a['ID']);
    @unlink(CACHE_FILENAME_DRAFTS);
    if ($dea59a['IsFavourite']) {
        @unlink(CACHE_FILENAME_FAVS);
    }
    if (eaa79('Notes', $dea59a)) {
        wb7c3($dea59a['ID'], '');
        e2_go_to(e83c8('e2m_draft', array('draft' => $d21158, 'oalias' => $dea59a['OriginalAlias'],)));
    } else {
        y4930();
    }
}

function e2m_note_delete($parameters = array())
{
    global $settings, $_strings;
    $dea59a = $parameters['*note'];
    if (!$dea59a) {
        return e2_error404_mode();
    }
    $zf91b2 = !$dea59a['IsPublished'];
    if ($zf91b2) {
        $r72bd7 = e2l_get_string(
            'gs--draft-will-be-deleted',
            array('draft' => htmlspecialchars($dea59a['Title'], ENT_NOQUOTES, HSC_ENC),)
        );
    } else {
        $r72bd7 = e2l_get_string(
            'gs--post-will-be-deleted',
            array('post' => htmlspecialchars($dea59a['Title'], ENT_NOQUOTES, HSC_ENC),)
        );
    }
    $qd5d3d = $zf91b2 ? $_strings['pt--draft-deletion'] : $_strings['pt--post-deletion'];
    $q57529 = array(
        '.note-id' => $dea59a['ID'],
        '.is-draft' => (int)$zf91b2,
        'note-title' => htmlspecialchars($dea59a['Title'], ENT_COMPAT, HSC_ENC),
        'caution-text' => $r72bd7,
        'form-action' => e83c8('e2s_note_delete'),
        'submit-text' => $_strings['fb--delete'],
        'draft?' => (int)$zf91b2,
    );
    $e2cb9d = array(
        'title' => $qd5d3d . ': ' . htmlspecialchars($dea59a['Title'], ENT_NOQUOTES, HSC_ENC),
        'heading' => $qd5d3d,
        'form' => 'form-note-delete',
        'form-note-delete' => $q57529,
    );
    return $e2cb9d;
}

function e2m_note_flag_favourite($parameters)
{
    global $_config;
    $parameters['flag'] = 'IsFavourite';
    if (q7e6c($parameters)) {
        $u67142 = $parameters;
        $u67142['value'] = !$parameters['value'];
        if ($parameters['value'] == 1) {
            $v99859 = e83c8('e2m_note_flag_favourite', $u67142);
            $z1fa03 = 'on-rehref|' . $v99859;
        } else {
            $v99859 = e83c8('e2m_note_flag_favourite', $u67142);
            $z1fa03 = 'off-rehref|' . $v99859;
        }
    } else {
        $z1fa03 = 'error';
    }
    if (array_key_exists('result', $_POST) and ($_POST['result'] == 'ajaxresult')) {
        die ($z1fa03);
    } else {
        e2_go_to(e83c8('e2m_note', $parameters));
        die;
    }
}

function e2m_note_flag($parameters)
{
    q7e6c($parameters);
    if (array_key_exists('draft', $parameters)) {
        e2_go_to(e83c8('e2m_draft', $parameters));
    } else {
        e2_go_to(e83c8('e2m_note', $parameters));
    }
    die;
}

function q7e6c($parameters)
{
    $d21158 = $parameters['*note']['ID'];
    if (!is_numeric($d21158)) {
        return e2_error404_mode();
    }
    e2_drop_caches_for_note_($d21158);
    if ($parameters['flag'] == 'IsFavourite') {
        @unlink(CACHE_FILENAME_FAVS);
    }
    $result = eaa79('Notes', array('ID' => $d21158, $parameters['flag'] => (int)($parameters['value'] == 1),));
    return $result;
}

function e2m_note_use_formatter($parameters)
{
    $d21158 = $parameters['*note']['ID'];
    if (!is_numeric($d21158)) {
        return e2_error404_mode();
    }
    e2_drop_caches_for_note_($d21158);
    if (!$parameters['*note']['IsPublished']) {
        @unlink(CACHE_FILENAME_DRAFTS);
    }
    if (in_array($parameters['formatter'], array('calliope', 'raw', 'neasden'))) {
        $result = eaa79('Notes', array('ID' => $d21158, 'FormatterID' => $parameters['formatter'],));
        echo 'formatter set to ' . $parameters['formatter'];
    } else {
        echo 'unknown formatter';
    }
    die;
}

function e2m_note_use_alias($parameters)
{
    $d21158 = $parameters['*note']['ID'];
    if (!is_numeric($d21158)) {
        return e2_error404_mode();
    }
    e2_drop_caches_for_note_($d21158);
    if (!$parameters['*note']['IsPublished']) {
        @unlink(CACHE_FILENAME_DRAFTS);
    }
    $o3e891 = $parameters['newalias'];
    if (($n17901 = wb7c3($d21158, $o3e891)) !== false) {
        echo 'alias set to "' . $n17901 . '"';
    } else {
        echo 'error setting alias';
    }
    die;
}

function e2m_note_edit($parameters = array())
{
    return r7dd3('edit', $parameters);
}

function r7dd3($p60cd8, $parameters = array())
{
    global $full_blog_url, $settings, $_strings, $_config;
    $qd5d3d = $_strings['pt--new-post'];
    $ef74f5 = $_strings['pt--new-post'];
    $d21158 = 'new';
    $e9763c = $_config['default_formatter'];
    if ($p60cd8 == 'edit') {
        $dea59a = $parameters['*note'];
        if (!$dea59a) {
            return e2_error404_mode();
        }
        if ($dea59a) {
            if ($dea59a['IsPublished']) {
                $ef74f5 = $_strings['pt--edit-post'];
                $q72487 = $parameters['alias'];
            } else {
                $ef74f5 = $_strings['pt--edit-draft'];
                if (@$dea59a['OriginalAlias']) {
                    $q72487 = $dea59a['OriginalAlias'];
                } else {
                    $q72487 = yd712('find', $dea59a['ID'], $dea59a['Title']);
                }
            }
        }
        $d21158 = $dea59a['ID'];
        $e9763c = $dea59a['FormatterID'];
        $qd5d3d = gea9c($dea59a);
    }
    $a04868 = d3873();
    $x77b75 = array();
    foreach ($a04868 as $nd7df5) {
        $x77b75[] = htmlspecialchars($nd7df5['Keyword'], ENT_COMPAT, HSC_ENC);
    }
    $sd2e3e = array();
    if ($p60cd8 == 'edit' and count($x77b75)) {
        $a04868 = oa463($dea59a['ID']);
        foreach ($a04868 as $nd7df5) {
            $sd2e3e[] = htmlspecialchars($nd7df5['Keyword'], ENT_NOQUOTES, HSC_ENC);
        }
    }
    $dc93df = array();
    foreach ($x77b75 as $nd7df5) {
        $vfd2ef['name'] = $nd7df5;
        $vfd2ef['selected?'] = in_array($nd7df5, $sd2e3e);
        $dc93df[] = $vfd2ef;
    }
    $a9dbb8 = '';
    $sd2e3e = implode(', ', $sd2e3e);
    if ($sd2e3e) {
        $a9dbb8 = $sd2e3e;
    }
    if ($p60cd8 == 'write') {
        $ic50d0 = $_strings['fb--save-and-preview'];
    }
    if ($p60cd8 == 'edit') {
        if (array_key_exists('draft', $parameters)) {
            $ic50d0 = $_strings['fb--save-and-preview'];
        } else {
            $ic50d0 = $_strings['fb--save-changes'];
        }
    }
    $i9c28d = array();
    if ($i9c28d = y8d7d($dea59a['FormatterID'], $dea59a['Text'], 'full')) {
        foreach ($i9c28d as $je3cc9) {
            if (is_file(PICTURES_FOLDER . $je3cc9)) {
                if ($pf1210 = u291d($je3cc9)) {
                    $f59b51[] = array('name' => $je3cc9, 'thumb' => $pf1210);
                }
            }
            if (WITH_AUDIO) {
                if (is_file(AUDIO_FOLDER . $je3cc9)) {
                    $f59b51[] = array('name' => $je3cc9, 'thumb' => DEFAULTS_FOLDER . 'audio.png');
                }
            }
        }
    }
    $e2cb9d['title'] = $qd5d3d;
    $e2cb9d['heading'] = $ef74f5;
    $e2cb9d['form'] = 'form-note';
    $e2cb9d['form-note'] = array(
        '.note-id' => $d21158,
        '.formatter-id' => $e9763c,
        '.from' => substr($_SERVER['HTTP_REFERER'], strlen($full_blog_url) + 1),
        '.old-tags-hash' => md5($a9dbb8),
        '.instant-publish' => 'no',
        '.action' => $p60cd8,
        'form-action' => e83c8('e2s_note_process'),
        'form-note-livesave-action' => e83c8('e2j_note_livesave'),
        'form-file-upload-action' => e83c8('e2j_file_upload'),
        'form-file-remove-action' => e83c8('e2j_file_remove'),
        'create:edit?' => (bool)($p60cd8 == 'write'),
        'title' => htmlspecialchars($dea59a['Title'], ENT_COMPAT, HSC_ENC),
        'tags' => $a9dbb8,
        'tags-info' => $dc93df,
        'text' => htmlspecialchars($dea59a['Text'], ENT_NOQUOTES, HSC_ENC),
        'images' => $f59b51,
        'all-tags' => $x77b75,
        'stamp-formatted' => j5a2f('d.m.Y H:i:s', $dea59a['Stamp'], a0923($dea59a)),
        'time' => $dea59a['IsPublished'] ? array((int)$dea59a['Stamp'], a0923($dea59a)) : false,
        'alias-autogenerated' => yd712('find', $dea59a['ID'], $dea59a['Title']),
        'alias' => $q72487,
        'submit-text' => $ic50d0,
    );
    if ($p60cd8 == 'edit') {
        $e2cb9d['form-note']['delete-href'] = e83c8('e2m_note_delete', array('*note' => $dea59a));
        if (!array_key_exists('draft', $parameters)) {
            $dea59a['_']['_id'] = $dea59a['ID'];
            $dea59a['_']['_ord'] = 0;
            $dea59a['_']['_ord_max'] = 0;
            $e2cb9d['form-note']['note'] = w6791($dea59a);
        }
    }
    return $e2cb9d;
}

function e2m_write()
{
    return r7dd3('write');
}

function e2s_note_process()
{
    global $_fp_error, $_strings;
    $d21158 = ja21e();
    if (!$d21158) {
        if ($_fp_error == FP_TITLE_OR_TEXT_EMPTY) {
            e8a40($_strings['er--post-must-have-title-and-text']);
        } elseif ($_fp_error == FP_NO_ID_OR_NEW) {
        } else {
            e8a40($_strings['er--error-occurred'] . ' (' . $_fp_error . ')');
        }
        e2_go_to(e83c8('e2m_write'));
        die;
    }
    $taad65 = p4627($d21158);
    if ($taad65['IsPublished']) {
        e2_go_to(e83c8('e2m_note', array('*note' => $taad65)));
    } else {
        e2_go_to(e83c8('e2m_draft', array('*note' => $taad65)));
    }
    die;
}

function e2s_note_publish()
{
    global $settings, $_strings;
    $d21158 = false;
    if (array_key_exists('note-id', $_POST)) {
        $d21158 = $_POST['note-id'];
        $dea59a = p4627($d21158);
        $s82b30 = $dea59a['OriginalAlias'];
        $dea59a = array(
            'ID' => $d21158,
            'IsPublished' => 1,
            'IsFavourite' => 0,
            'Stamp' => time(),
            'IP' => $_SERVER['REMOTE_ADDR'],
        );
        $cb2c6c = qa618(@$_POST['gmt-offset']);
        if ($cb2c6c) {
            $dea59a['Offset'] = (int)$cb2c6c['offset'];
            $dea59a['IsDST'] = (int)$cb2c6c['is_dst'];
        }
        e2_drop_caches_for_note_($d21158);
        @unlink(CACHE_FILENAME_DRAFTS);
        if (eaa79('Notes', $dea59a)) {
            if ($s82b30) {
                $q72487 = wb7c3($d21158, $s82b30);
                $dea59a['OriginalAlias'] = $q72487;
            }
            if ($q72487 != $s82b30) {
                eaa79('Notes', $dea59a);
            }
            e2_go_to(e83c8('e2m_note', array('*note' => $dea59a)));
            die;
        } else {
            e8a40($_strings['er--error-publishing-post']);
            y4930();
            die;
        }
    }
    e2_go_to();
    die;
}

function e2s_note_delete()
{
    global $settings, $_strings;
    $d21158 = $_POST['note-id'];
    $zf91b2 = (bool)$_POST['is-draft'];
    e2_drop_caches_for_note_($d21158);
    if ($zf91b2) {
        @unlink(CACHE_FILENAME_DRAFTS);
    } else {
        @unlink(CACHE_FILENAME_FAVS);
    }
    if (p0738(
        "DELETE FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `ID` = '" . ((int)$d21158) . "'"
    )
    ) {
        p0738("DELETE FROM `" . $settings['db']['table_prefix'] . "Aliases` " . "WHERE `EntityID`=" . ((int)$d21158));
        p0738(
            "DELETE FROM `" . $settings['db']['table_prefix'] . "NotesKeywords` " . "WHERE `NoteID`=" . ((int)$d21158)
        );
        if ($zf91b2) {
            e2_go_to(e83c8('e2m_drafts'));
        } else {
            e2_go_to();
        }
        die;
    } else {
        e8a40($_strings['er--error-deleting-post']);
        e2_go_to();
        die;
    }
}

function e2j_note_livesave()
{
    die (ja21e('ajaxresult'));
}

function w6791($taad65, $h4dd42 = array())
{
    global $settings, $_config, $_candy, $_current_tag, $u57de2, $je5564, $je9bf8, $t097cc;
    $xda497 = e2_note_cache_filename_with_id_($taad65['_']['_id']);
    $fe244c = null;
    if (CACHE_NOTES and is_file($xda497)) {
        $fe244c = @unserialize(jcdf0($xda497));
    }
    if (__LOG) {
        __log('Notes: package note <' . $taad65['_']['_id'] . '>...');
    }
    $xe919a = c7f78();
    if (CACHE_NOTES and is_array($fe244c)) {
        if (__LOG) {
            __log('Notes: retrieve cached ctree');
        }
        $kc6827 = $fe244c;
    } else {
        if (__LOG) {
            __log('Notes: assemle cacheable ctree...');
        }
        if (__LOG) {
            __log('Notes: formatter ID = ' . $taad65['FormatterID']);
        }
        $t2bfe4 = t154e($taad65['FormatterID'], @$taad65['Text'], 'full');
        $kc6827['title'] = l6f10(htmlspecialchars(gea9c($taad65), ENT_NOQUOTES, HSC_ENC));
        $kc6827['text'] = $t2bfe4['text-final'];
        $kc6827['format-info'] = $t2bfe4['meta'];
        $kc6827['time'] = array((int)$taad65['Stamp'], a0923($taad65));
        $kc6827['last-modified'] = array((int)$taad65['LastModified'], a0923($taad65));
        $kc6827['last-ip'] = $taad65['IP'];
        $kc6827['published?'] = (bool)$taad65['IsPublished'];
        $kc6827['commentable?'] = (bool)($taad65['IsCommentable'] && $taad65['IsPublished']);
        $kc6827['favourite?'] = (bool)($taad65['IsFavourite'] && $taad65['IsPublished']);
        $kc6827['visible?'] = (bool)($taad65['IsVisible'] || !$taad65['IsPublished']);
        if (!$kc6827['published?']) {
            unset ($kc6827['time']);
        }
        $m0dff3 = lce23($taad65['ID']);
        $md57ac = array();
        foreach ($m0dff3 as $j865c0 => $wb19ad) {
            $ue4d23['name'] = htmlspecialchars($wb19ad['Keyword'], ENT_NOQUOTES, HSC_ENC);
            $ue4d23['href'] = e83c8(
                'e2m_tag',
                TRANS_TAGS_UTF8_URLS ? array(
                    'tag' => htmlspecialchars($wb19ad['Keyword']),
                    ENT_NOQUOTES,
                    HSC_ENC
                ) : array('tag-urlname' => $wb19ad['URLName'])
            );
            $md57ac[] = $ue4d23;
        }
        $kc6827['tags'] = $md57ac;
        $j905f7 = z254f($taad65['ID']);
        if ($kc6827['published?']) {
            $kc6827['comments-count'] = $j905f7;
            $kc6827['comments-count-text'] = e2l_get_string('gs--n-comments', array('number' => $j905f7));
            $kc6827['your-comment-href'] = (e83c8('e2m_note_comment', array('*note' => $taad65)));
        }
        $fe244c = $kc6827;
        if (CACHE_NOTES) {
            @c6e52($xda497, serialize($fe244c));
        }
    }
    if (__LOG) {
        __log('Notes: continue with the uncacheable, ' . round(c7f78() - $xe919a, 3) . ' so far...');
    }
    $kc6827['commentable-now?'] = sb387($taad65);
    $kc6827['can-be-commentable?'] = $settings['comments']['on'] && $kc6827['published?'];
    foreach ($kc6827['tags'] as $g8ce4b => $c9e366) {
        $kc6827['tags'][$g8ce4b]['current?'] = (bool)($kc6827['tags'][$g8ce4b]['name'] == $_current_tag);
    }
    if ($taad65['IsPublished']) {
        $ld58c0 = e83c8('e2m_note', array('*note' => $taad65));
    } else {
        $ld58c0 = e83c8('e2m_draft', array('*note' => $taad65));
    }
    $kc6827['href'] = $ld58c0;
    if ($taad65['IsPublished']) {
        if ($taad65['OriginalAlias']) {
            $kc6827['href-original'] = e83c8('e2m_note', array('alias' => $taad65['OriginalAlias']));
        } else {
            $l010d9 = $taad65;
            $l010d9['__noalias!'] = true;
            $kc6827['href-original'] = e83c8('e2m_note', array('*note' => $l010d9));
        }
    }
    $kc6827['comments-link?'] = (bool)($taad65['IsPublished'] && ($settings['comments']['on'] && sb387(
                $taad65
            ) or ($kc6827['comments-count'] > 0)) && ('e2m_note' != $_candy));
    if (ne852()) {
        $efe9e2 = z254f($taad65['ID'], 'new');
        $kc6827['new-comments-count'] = $efe9e2;
        $kc6827['new-comments-count-text'] = e2l_get_string('gs--comments-n-new', array('number' => $efe9e2));
        if ($taad65['IsPublished']) {
            if ($taad65['IsFavourite']) {
                $kc6827['favourite-toggle-href'] = e83c8(
                    'e2m_note_flag_favourite',
                    array('*note' => $taad65, 'value' => 0)
                );
            } else {
                $kc6827['favourite-toggle-href'] = e83c8(
                    'e2m_note_flag_favourite',
                    array('*note' => $taad65, 'value' => 1)
                );
            }
        }
        $kc6827['edit-href'] = e83c8('e2m_note_edit', array('*note' => $taad65));
        $n9920c = $kc6827['edit-href'];
        if (!$taad65['IsPublished']) {
            $kc6827['delete-href'] = e83c8('e2m_note_delete', array('*note' => $taad65));
        }
    }
    $kc6827['future?'] = $taad65['Stamp'] > time();
    if (@is_array($h4dd42) and count($h4dd42) > 0) {
        foreach (array('title', 'text') as $b65d3b) {
            $kc6827[$b65d3b] = preg_replace_callback('/<[^>]+>/isu', 'hel_savetag', $kc6827[$b65d3b]);
            foreach ($h4dd42 as $i2510c) {
                if ($i2510c == '-') {
                    continue;
                }
                $kc6827[$b65d3b] = preg_replace(
                    '/(?<=^|\W)(' . preg_quote($i2510c, '/') . ')(?=^$|\W)/iu',
                    '<span class="' . CSS_CLASS_HIGHLIGHT . '">$1</span>',
                    $kc6827[$b65d3b]
                );
            }
            $kc6827[$b65d3b] = str_replace('</span> <span class="' . CSS_CLASS_HIGHLIGHT . '">', ' ', $kc6827[$b65d3b]);
            $kc6827[$b65d3b] = udae3($kc6827[$b65d3b]);
        }
    }
    if (array_key_exists('_', $taad65)) {
        $kc6827['_'] = $taad65['_'];
    }
    if (__LOG) {
        __log('Notes: package note done in ' . round(c7f78() - $xe919a, 3));
    }
    return $kc6827;
}

function p4627($zb80bb)
{
    global $settings, $_strings;
    if (p0738("SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `ID` = '" . $zb80bb . "'")) {
        $pfa816 = j0d6b();
        if (count($pfa816) > 0) {
            return $pfa816[0];
        } else {
            return false;
        }
    } else {
        e8a40($_strings['er--cannot-get-post-from-db']);
        y4930();
        die;
    }
}

function ncca7($taad65, $ib4ca4, $b8f888 = 1)
{
    global $settings, $_strings;
    $o7ffc4 = ($ib4ca4 == 'next') ? '>' : '<';
    $n1dee8 = ($ib4ca4 == 'next') ? '' : 'DESC ';
    if (!ne852()) {
        $f91d12 = ' AND `IsVisible`=1';
    }
    if (p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=" . $b8f888 . " AND `Stamp` " . $o7ffc4 . " '" . $taad65['Stamp'] . "'" . @$f91d12 . " " . "ORDER BY STAMP " . $n1dee8 . "LIMIT 1"
    )
    ) {
        $pfa816 = j0d6b();
        if (count($pfa816) > 0) {
            return $pfa816[0];
        } else {
            return false;
        }
    } else {
        e8a40($_strings['er--cannot-get-post-from-db']);
        y4930();
        die;
    }
}

function gea9c($taad65)
{
    if ($taad65['Title']) {
        return $taad65['Title'];
    } else {
        return '#' . $taad65['ID'];
    }
}

function r50d7($pd5566, $l71860 = 1)
{
    global $settings, $_config;
    $tb01a5 = $pd5566;
    $i8b7af = 'all';
    if ('rss' == $pd5566 or !ne852()) {
        $p25715 = "AND `IsVisible`=1 ";
        $i8b7af = 'visible';
    }
    if ('web' == $pd5566) {
        $tb01a5 .= '_' . $i8b7af;
    }
    if ('web' == $pd5566) {
        $o19ee4 = ($l71860 - 1) * $settings['appearance']['notes_per_page'];
        $jaa9f7 = $o19ee4 . ', ' . $settings['appearance']['notes_per_page'];
    }
    if ('rss' == $pd5566) {
        $jaa9f7 = $_config['rss_items'];
    }
    if (p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 " . @$p25715 . "ORDER BY `Stamp` DESC " . "LIMIT " . $jaa9f7
    )
    ) {
        $result = j0d6b();
        return $result;
    } else {
        return false;
    }
}

function e82dc($n41529, $w6f8f5)
{
    global $settings;
    list ($yfc6b2, $u10df4) = m5273($n41529, $w6f8f5);
    if (!ne852()) {
        $qf79b1 = "`IsVisible`=1 AND ";
    }
    if (p0738(
        "SELECT `Stamp`, `Offset`, `IsDST` " . "FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 AND " . @$qf79b1 . "`Stamp` BETWEEN '" . $yfc6b2 . "' AND '" . $u10df4 . "'"
    )
    ) {
        $result = j0d6b();
        $b44fde = array();
        foreach ($result as $f65afd) {
            if (((int)$n41529) . '/' . ((int)$w6f8f5) == j5a2f('Y/n', $f65afd['Stamp'], a0923($f65afd))) {
                $b44fde[] = (int)j5a2f('j', $f65afd['Stamp'], a0923($f65afd));
            }
        }
        $b44fde = @array_unique($b44fde);
        sort($b44fde);
        return $b44fde;
    } else {
        return false;
    }
}

function xb92c($n41529)
{
    global $settings;
    list ($e5a603, $kc2b31) = m5273($n41529);
    if (!ne852()) {
        $qf79b1 = "`IsVisible`=1 AND ";
    }
    if (p0738(
        "SELECT `Stamp`, `Offset`, `IsDST` " . "FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 AND " . @$qf79b1 . "`Stamp` BETWEEN '" . $e5a603 . "' AND '" . $kc2b31 . "'"
    )
    ) {
        $result = j0d6b();
        foreach ($result as $f65afd) {
            if (((int)$n41529) == j5a2f('Y', $f65afd['Stamp'], a0923($f65afd))) {
                $dda36c[] = (int)j5a2f('n', $f65afd['Stamp'], a0923($f65afd));
            }
        }
        $dda36c = @array_unique($dda36c);
        sort($dda36c);
        return $dda36c;
    } else {
        return false;
    }
}

function pd864($n8d777)
{
    global $settings, $l71860, $_strings;
    $u7694f = $n8d777['query'];
    if (isset ($n8d777['page']) and $n8d777['page'] < 1) {
        return e2_error404_mode();
    }
    $jd7e5d = $settings['appearance']['notes_per_page'];
    $sb3b32 = array();
    $hfbb44 = false;
    if (isset ($n8d777['page'])) {
        $l71860 = $n8d777['page'];
        $u7694f .= ' LIMIT ' . ($n8d777['page'] - 1) * $jd7e5d . ', ' . $jd7e5d;
        $n61e23 = str_replace('SELECT *', 'SELECT count(*)', $n8d777['query']);
        if (p0738($n61e23)) {
            $result = j0d6b();
            $hfbb44 = $result[0]['count(*)'];
            $cae0fe = ceil($hfbb44 / $jd7e5d);
            if ($l71860 > $cae0fe and $l71860 != 1) {
                return e2_error404_mode();
            }
            $sb3b32['count'] = $cae0fe;
            $sb3b32['this'] = $l71860;
            $sb3b32['timeline?'] = true;
            $sb3b32['earlier-title'] = $_strings['gs--earlier'];
            $sb3b32['later-title'] = $_strings['gs--later'];
            $u920fa = $n8d777['parameters'];
            if ($l71860 < $cae0fe) {
                $u920fa['page'] = $l71860 + 1;
                $sb3b32['earlier-href'] = e83c8($n8d777['candy'], $u920fa);
            }
            if ($l71860 > 1) {
                $u920fa['page'] = $l71860 - 1;
                $sb3b32['later-href'] = e83c8($n8d777['candy'], $u920fa);
            }
        } else {
            return array();
        }
    }
    $a4358b = array();
    if (p0738($u7694f)) {
        $result = $ze5b87 = j0d6b();
        if (@$n8d777['query-returns-only-ids']) {
            $result = array();
            foreach ($ze5b87 as $taad65) {
                $taad65 = p4627($taad65['ID']);
                if ($taad65['IsPublished'] and ($taad65['IsVisible'] or ne852())) {
                    $result[] = $taad65;
                }
            }
        }
        foreach ($result as $g8ce4b => $taad65) {
            $taad65['_']['_id'] = $taad65['ID'];
            $taad65['_']['_ord'] = k;
            $taad65['_']['_ord_max'] = count($result) - 1;
            $a4358b[] = w6791($taad65, $n8d777['highlight']);
        }
    } else {
        return array();
    }
    $f05a16 = $a4358b;
    if (!isset ($n8d777['show-all-notes']) or @$n8d777['show-all-notes'] != true) {
        $f05a16 = array_slice($a4358b, 0, $jd7e5d);
    }
    if ($hfbb44 === false) {
        $hfbb44 = count($f05a16);
    }
    if (!count($a4358b) and array_key_exists('no-notes-text', $n8d777)) {
        $e2cb9d['no-notes-text'] = $n8d777['no-notes-text'];
    }
    $fcd0fd = array('class', 'superheading', 'heading', 'title', 'search-related-tag', 'related-rss-href',);
    foreach ($fcd0fd as $mf97bf) {
        if (array_key_exists($mf97bf, $n8d777)) {
            $e2cb9d[$mf97bf] = $n8d777[$mf97bf];
        }
    }
    if ($hfbb44) {
        $h5cde2 = e2l_get_string('pt--n-posts', array('number' => $hfbb44));
    } else {
        $h5cde2 = $_strings['pt--no-posts'];
    }
    if (array_key_exists('maximum-notes', $n8d777) and $hfbb44 >= $n8d777['maximum-notes']) {
        $h5cde2 = $_strings['gs--many-posts'];
    }
    foreach (array('title', 'heading', 'superheading') as $e4b24c) {
        if (strstr($n8d777[$e4b24c], '%total%')) {
            $e2cb9d[$e4b24c] = str_replace('%total%', $h5cde2, $n8d777[$e4b24c]);
        }
    }
    $e2cb9d['notes'] = $f05a16;
    $e2cb9d['pages'] = $sb3b32;
    return $e2cb9d;
}

function rf9fb($n41529, $w6f8f5, $u8277e = false)
{
    global $settings;
    list ($j7b314, $ta1f20) = m5273($n41529, $w6f8f5, $u8277e);
    if (p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished` AND (`Stamp` BETWEEN " . $j7b314 . " AND " . $ta1f20 . ")" . "ORDER BY Stamp"
    )
    ) {
        $result = j0d6b();
        $db1bc2 = 1;
        $e2cb9d = array();
        foreach ($result as $f65afd) {
            if (is_numeric($u8277e)) {
                $j3f917 = ((int)$n41529) . '/' . ((int)$w6f8f5) . '/' . ((int)$u8277e) == j5a2f(
                        'Y/n/j',
                        $f65afd['Stamp'],
                        a0923($f65afd)
                    );
            } elseif (is_numeric($w6f8f5)) {
                $j3f917 = ((int)$n41529) . '/' . ((int)$w6f8f5) == j5a2f('Y/n', $f65afd['Stamp'], a0923($f65afd));
            } else {
                $j3f917 = ((int)$n41529) == j5a2f('Y', $f65afd['Stamp'], a0923($f65afd));
            }
            if ($j3f917) {
                if (is_numeric($u8277e)) {
                    $f65afd['day_number'] = $db1bc2;
                }
                $e2cb9d[] = $f65afd;
                $db1bc2++;
            }
        }
        return $e2cb9d;
    } else {
        return false;
    }
}

function e2_published_noterec_with_alias_($q72487)
{
    global $settings;
    if ($jc45dd = e2_aliasrec_of_alias_($q72487)) {
        $taad65 = p4627($jc45dd['EntityID']);
        if ($taad65['IsPublished']) {
            return $taad65;
        }
    }
}

function e2_published_noterec_with_parameters_($parameters = array())
{
    global $settings;
    $p39a37 = e2_noterec_with_parameters_($parameters);
    if ($p39a37['IsPublished']) {
        return $p39a37;
    }
}

function e2_noterec_with_parameters_($parameters = array())
{
    global $settings;
    $taad65 = false;
    $jb5445 = false;
    if (@$parameters['oalias']) {
        $jb5445 = $parameters['oalias'];
    }
    if ($jb5445) {
        if (p0738(
            "SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `OriginalAlias` = '" . $jb5445 . "' " . "AND `IsPublished` = 0"
        )
        ) {
            $taad65 = j0d6b();
            if (count($taad65) == 1) {
                $taad65 = @$taad65[0];
                if ($taad65) {
                    return $taad65;
                }
            }
        }
    }
    $u67e85 = false;
    if (@$parameters['draft']) {
        $u67e85 = $parameters['draft'];
    }
    if (@$parameters['draft2']) {
        $u67e85 = $parameters['draft2'];
    }
    if ($u67e85) {
        $taad65 = p4627($u67e85);
        return $taad65;
    }
    if (@$parameters['alias']) {
        if ($jc45dd = e2_aliasrec_of_alias_(@$parameters['alias'])) {
            $taad65 = p4627($jc45dd['EntityID']);
            if ($taad65['IsPublished']) {
                return $taad65;
            }
        }
    }
    $ic2d18 = rf9fb($parameters['year'], $parameters['month'], $parameters['day']);
    if (@$ic2d18[$parameters['day-number'] - 1]) {
        return $ic2d18[$parameters['day-number'] - 1];
    }
}

function de56b($qd5d3d, $l1cb25, $cb2c6c = false)
{
    global $_config;
    oe2f1();
    @unlink(CACHE_FILENAME_DRAFTS);
    $p39a37 = array(
        'Title' => p7928($qd5d3d),
        'Text' => p7928($l1cb25),
        'FormatterID' => $_config['default_formatter'],
        'Stamp' => (int)time(),
        'LastModified' => (int)time(),
        'IP' => p7928($o957b5),
        'OriginalAlias' => yd712('find', '', $qd5d3d),
    );
    if ($cb2c6c and is_array($cb2c6c)) {
        $p39a37['Offset'] = (int)$cb2c6c['offset'];
        $p39a37['IsDST'] = (int)$cb2c6c['is_dst'];
    }
    if (($p39a37 = h9943('Notes', $p39a37)) !== false) {
        return $p39a37['ID'];
    }
}

function ja21e($r98ea6 = '')
{
    global $settings, $_fp_error, $_config, $_e2utf8__unformat_htmlentity_neasden;
    $_fp_error = false;
    $d21158 = $qd5d3d = $md57ac = $l1cb25 = $jb4960 = '';
    if (array_key_exists('note-id', $_POST)) {
        $d21158 = $_POST['note-id'];
    }
    if (array_key_exists('title', $_POST)) {
        $qd5d3d = trim($_POST['title']);
    }
    if (array_key_exists('tags', $_POST)) {
        $md57ac = $_POST['tags'];
    }
    if (array_key_exists('text', $_POST)) {
        $l1cb25 = trim($_POST['text'], "\r\n");
    }
    if (array_key_exists('old-tags-hash', $_POST)) {
        $jb4960 = $_POST['old-tags-hash'];
    }
    if (is_array($md57ac)) {
        $md57ac = implode(', ', $md57ac);
    }
    $md57ac = trim($md57ac);
    if ($d21158 == 'new') {
        $_e2utf8__unformat_htmlentity_neasden = ($_config['default_formatter'] == 'neasden');
    } else {
        $_e2utf8__unformat_htmlentity_neasden = ($_POST['formatter-id'] == 'neasden');
    }
    $xffa71 = $l1cb25;
    $xffa71 = str_replace("\n", '\n' . "\n", $xffa71);
    $xffa71 = str_replace("\r", '\r' . "\r", $xffa71);
    if (__LOG) {
        __log('e2fp_note: Text is [' . $xffa71 . '] (' . strlen($l1cb25) . 'b)');
    }
    $aa6168 = y163d(',', $md57ac, 'sort');
    $md57ac = implode(', ', $aa6168);
    $i65f31 = md5($md57ac);
    if (array_key_exists('browser-offset', $_POST)) {
        $cb2c6c = qa618(@$_POST['browser-offset']);
    } else {
        $cb2c6c = false;
    }
    $sd17d3 = '/^ *(\d{1,2})\.(\d{1,2})\.(\d{2}|\d{4}) +(\d{1,2})\:(\d{1,2})\:(\d{1,2}) *$/';
    $c02b37 = @$_POST['old-stamp'];
    $naddfe = @$_POST['stamp'];
    $q72487 = @$_POST['alias'];
    if ($d21158 != 'new') {
        $p39a37 = p4627($d21158);
    } else {
        $p39a37 = array();
    }
    if ($d21158) {
        if ($qd5d3d != '' and $l1cb25 != '') {
            if ($d21158 == 'new') {
                if ($d21158 = de56b($qd5d3d, $l1cb25, $cb2c6c)) {
                    $wc852f = e83c8('e2m_note_edit', array('*note' => p4627($d21158),));
                    $z1fa03 = '{' . '"status": "created", ' . '"id": "' . $d21158 . '", ' . '"new-full-url": "' . $wc852f . '"}';
                    $result = (int)$d21158;
                } else {
                    $z1fa03 = '{"status": "error", "message": "Cannot create record (' . mysql_error() . ')"}';
                    $result = false;
                }
            } else {
                e2_drop_caches_for_note_($d21158);
                if (!$p39a37['IsPublished']) {
                    @unlink(CACHE_FILENAME_DRAFTS);
                }
                $dea59a = array('ID' => $d21158, 'Title' => $qd5d3d, 'Text' => $l1cb25, 'LastModified' => time(),);
                if ($cb2c6c and is_array($cb2c6c)) {
                    $dea59a['Offset'] = (int)$cb2c6c['offset'];
                    $dea59a['IsDST'] = (int)$cb2c6c['is_dst'];
                }
                if ($c02b37 != $naddfe) {
                    if (preg_match($sd17d3, $naddfe, $w6f8f5)) {
                        $u96b8c = gmmktime($w6f8f5[4], $w6f8f5[5], $w6f8f5[6], $w6f8f5[2], $w6f8f5[1], $w6f8f5[3]);
                        $u96b8c -= yb2bf($cb2c6c, $u96b8c);
                        $dea59a['Stamp'] = $u96b8c;
                    } else {
                        unset ($u96b8c);
                    }
                }
                $n17901 = $q72487;
                if ($q72487) {
                    $na7ff0 = $q72487;
                } else {
                    $na7ff0 = $qd5d3d;
                }
                if ($p39a37['IsPublished']) {
                    $n17901 = wb7c3($d21158, $na7ff0);
                    $wc852f = e83c8('e2m_note_edit', array('*note' => $dea59a, 'alias' => $n17901,));
                } else {
                    $r926c6 = true;
                    $n17901 = yd712('find', $d21158, $na7ff0);
                    $dea59a['OriginalAlias'] = $n17901;
                    $wc852f = e83c8(
                        'e2m_note_edit',
                        array('draft' => $d21158, 'is-published' => 0, 'oalias' => $n17901,)
                    );
                }
                if (eaa79('Notes', $dea59a)) {
                    $z1fa03 = '{' . '"status": "saved", ' . '"new-alias": "' . $n17901 . '", ' . '"new-full-url": "' . $wc852f . '"' . '}';
                    $result = (int)$d21158;
                } else {
                    $z1fa03 = '{"status": "error", "message": "Cannot update record (' . mysql_error() . ')"}';
                    $result = false;
                };
            }
            if ($i65f31 != $jb4960) {
                i93c2(array('NoteID' => $d21158));
                foreach ($aa6168 as $ue4d23) {
                    $f70b77 = i0188($ue4d23);
                    if (!$f70b77) {
                        $ud7ca3 = yec0d($ue4d23);
                        $f70b77['ID'] = i478d($ue4d23, $ud7ca3, 0, '', 0);
                    }
                    p0738(
                        "INSERT INTO `" . $settings['db']['table_prefix'] . "NotesKeywords` " . "(`NoteID`, `KeywordID`) " . "VALUES (" . ((int)$d21158) . ", " . ((int)$f70b77['ID']) . ")"
                    );
                }
            }
            if ($r98ea6 != 'ajaxresult' and $result and $_POST['instant-publish'] == 'yes') {
                $_POST['note-id'] = $d21158;
                e2s_note_publish();
            }
        } else {
            $z1fa03 = '{"status":"error", "message": "Title or text is empty"}';
            $_fp_error = FP_TITLE_OR_TEXT_EMPTY;
            $result = false;
        }
    } else {
        $z1fa03 = '{"status":"error", "message": "No note id/new specified"}';
        $_fp_error = FP_NO_ID_OR_NEW;
        $result = false;
    }
    ncc38(e83c8('e2s_dump', array()));
    if ($r98ea6 == 'ajaxresult') {
        return $z1fa03;
    } else {
        return $result;
    }
}

function bcc02($e92c58)
{
    global $settings;
    $i8b7af = 'p1';
    if (!ne852()) {
        $i8b7af = 'p1v1';
        $qf79b1 = "AND `IsVisible`=1";
    }
    $fd29bb = CACHES_FOLDER . $e92c58 . '-stamp-' . $i8b7af . '.e2time.psa';
    if (CACHE_EDGE_TIMEINFO and is_file($fd29bb)) {
        $result = @unserialize(jcdf0($fd29bb));
    }
    if (is_array($result)) {
        return $result;
    } else {
        if ($e92c58 == 'start') {
            p0738(
                "SELECT Stamp, Offset, IsDST FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 " . $qf79b1 . " ORDER BY Stamp LIMIT 1"
            );
        } elseif ($e92c58 == 'end') {
            p0738(
                "SELECT Stamp, Offset, IsDST FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 " . $qf79b1 . " ORDER BY Stamp DESC LIMIT 1"
            );
        }
        $result = j0d6b();
        if (count($result)) {
            $result = array('stamp' => $result[0]['Stamp'], 'timezone' => a0923($result[0]),);
            if (CACHE_EDGE_TIMEINFO) {
                c6e52($fd29bb, serialize($result));
            }
            return $result;
        } else {
            return array();
        }
    }
}

function l8ca0($i1653c, $v0604c)
{
    global $settings;
    if (!($i1653c and $v0604c) and !ne852()) {
        die ('API MISUSE: e2_notes_count_general cannot be called for invisible notes or drafts unsecurely :-(');
    }
    if (!is_bool($i1653c) or !is_bool($v0604c)) {
        die ('API MISUSE: e2_notes_count_general must be called with bool params :-(');
    }
    if (!$i1653c and !$v0604c) {
        die ('API MISUSE: e2_notes_count_general called with nonsensical parameters');
    }
    $fd29bb = CACHES_FOLDER . 'notes-count-p' . (int)$i1653c . ($i1653c ? ('v' . (int)$v0604c) : '') . '.txt';
    $result = false;
    if (CACHE_NOTES_COUNTS and is_file($fd29bb)) {
        $result = @jcdf0($fd29bb);
    }
    if (is_numeric($result) and $result > 0) {
        return $result;
    } else {
        p0738(
            "SELECT COUNT(*) As NotesCount FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=" . (int)$i1653c . " " . ($i1653c ? ("AND   `IsVisible`=" . (int)$v0604c) : "")
        );
        $result = j0d6b();
        $result = $result[0]['NotesCount'];
        if ($result) {
            if (CACHE_NOTES_COUNTS) {
                c6e52($fd29bb, $result);
            }
            return $result;
        } else {
            return null;
        }
    }
}

function o5421($l1cb25)
{
    $ca80da = $l1cb25;
    $ca80da = str_replace(array('<p>', '<blockquote>', '<ul>', '<ol>', '<br />',), "\n", $ca80da);
    $ca80da = trim(strip_tags($ca80da));
    if (strpos($ca80da, "\n") !== false) {
        $ca80da = substr($ca80da, 0, strpos($ca80da, "\n"));
        $ca80da = trim($ca80da, ' :.()' . "\n");
    }
    if (preg_match('/^(.{100,}?)[:.!?()]|' . "\n" . '/s', $ca80da, $i9c28d)) {
        $ca80da = trim($i9c28d[0], ' :.()' . "\n");
    }
    if (preg_match('/^(.{150,}?)[:.!?(),]/s', $ca80da, $i9c28d)) {
        $ca80da = trim($i9c28d[0], ' :.()' . "\n");
    }
    if (preg_match('/^(.{200,}?)[:.!?(), ]/s', $ca80da, $i9c28d)) {
        $ca80da = trim($i9c28d[0], ' :.()' . "\n");
    }
    if (in_array($ca80da[strlen($ca80da) - 1], array(',', ' '))) {
        $ca80da = trim($ca80da, ', ') . '...';
    }
    if (mb_strlen($ca80da) > 250) {
        $ca80da = mb_substr($ca80da, 0, 250) . '...';
    }
    return $ca80da;
}

define('DRAFT_PREVIEW_LENGTH', 100);
function e2m_drafts()
{
    global $_strings, $settings;
    if (__LOG) {
        __log('Drafts list: working...');
    }
    $kda3ad = 'LastModified';
    $vda48a = null;
    if (CACHE_DRAFTS and is_file(CACHE_FILENAME_DRAFTS)) {
        $vda48a = @unserialize(jcdf0(CACHE_FILENAME_DRAFTS));
    }
    if (CACHE_DRAFTS and is_array($vda48a)) {
        if (__LOG) {
            __log('Drafts list: retrieve cached ctree');
        }
    } else {
        if (__LOG) {
            __log('Drafts list: assemle cacheable ctree...');
        }
        $vda48a = array();
        if (__LOG) {
            __log('Drafts list: select for finding identical OriginalAliases...');
        }
        $cda552 = array();
        if (p0738(
            "SELECT `OriginalAlias` FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=0 " . "ORDER BY `ID`"
        )
        ) {
            $result = j0d6b();
            $a4358b = array();
            foreach ($result as $g8ce4b => $p39a37) {
                @$cda552[$p39a37['OriginalAlias']]++;
            }
        }
        if (__LOG) {
            __log('Drafts list: select by ' . $kda3ad . '...');
        }
        if (p0738(
            "SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=0 " . "ORDER BY `" . $kda3ad . "` DESC"
        )
        ) {
            $result = j0d6b();
            $a4358b = array();
            foreach ($result as $g8ce4b => $p39a37) {
                $taad65['_']['_id'] = $p39a37['ID'];
                $taad65['_']['_ord'] = k;
                $taad65['_']['_ord_max'] = count($result) - 1;
                $pa43fa = array();
                if ($p39a37['OriginalAlias'] == '') {
                    $pa43fa['draft'] = $p39a37['ID'];
                } elseif ($cda552[$p39a37['OriginalAlias']] == 1) {
                    $pa43fa['oalias'] = $p39a37['OriginalAlias'];
                } else {
                    $pa43fa['oalias2'] = $p39a37['OriginalAlias'];
                    $pa43fa['draft2'] = $p39a37['ID'];
                }
                $taad65['href'] = e83c8('e2m_draft', $pa43fa);
                $taad65['title'] = l6f10(htmlspecialchars(gea9c($p39a37), ENT_NOQUOTES, HSC_ENC));
                if (isset ($taad65['image-href'])) {
                    unset ($taad65['image-href']);
                }
                $i9c28d = array();
                if ($i9c28d = y8d7d($p39a37['FormatterID'], $p39a37['Text'], 'full')) {
                    $je3cc9 = array_shift($i9c28d);
                    if (is_file(PICTURES_FOLDER . $je3cc9)) {
                        if ($pf1210 = u291d($je3cc9)) {
                            $taad65['image-href'] = $pf1210;
                        }
                    }
                }
                $t2bfe4 = t154e($p39a37['FormatterID'], str_replace("\n", ' ', $p39a37['Text']), 'simple');
                $taad65['text-fragment'] = strip_tags($t2bfe4['text-final']);
                $r2ab2d = false;
                if (mb_strlen($taad65['text-fragment']) > DRAFT_PREVIEW_LENGTH) {
                    $r2ab2d = mb_strpos($taad65['text-fragment'], '.', DRAFT_PREVIEW_LENGTH);
                }
                if ($r2ab2d !== false) {
                    $taad65['text-fragment'] = mb_substr($taad65['text-fragment'], 0, $r2ab2d + 1);
                }
                $vda48a[] = $taad65;
            }
            if (CACHE_DRAFTS) {
                c6e52(CACHE_FILENAME_DRAFTS, serialize($vda48a));
            }
        }
    }
    if (__LOG) {
        __log('Drafts list: done');
    }
    return array('title' => $_strings['pt--drafts'], 'heading' => $_strings['pt--drafts'], 'drafts' => $vda48a,);
}

function e2m_draft($parameters = array())
{
    global $_strings, $u57de2, $settings;
    $taad65 = e2_noterec_with_parameters_($parameters);
    if (!$taad65) {
        $parameters['alias'] = $parameters['oalias'];
        unset($parameters['oalias']);
        $taad65 = e2_noterec_with_parameters_($parameters);
        if ($taad65) {
            $ld58c0 = e83c8('e2m_note', array('*note' => $taad65));
            return e2_go_to($ld58c0);
        }
    }
    if (!$taad65) {
        return e2_error404_mode();
    }
    $taad65['_']['_id'] = $taad65['ID'];
    $taad65['_']['_ord'] = 0;
    $taad65['_']['_ord_max'] = 0;
    $f8e4cd = w6791($taad65);
    $m45513 = array(
        '.note-id' => $taad65['ID'],
        'form-action' => e83c8('e2s_note_publish'),
        'submit-text' => $_strings['fb--publish-draft'],
    );
    return array(
        'title' => gea9c($taad65) . ' (' . $_strings['wd--draft'] . ')',
        'notes' => array('only' => $f8e4cd),
        'form' => 'form-note-publish',
        'form-note-publish' => $m45513,
    );
}

$_url_map = array(
    '@build' => 'e2://e2s_build',
    '@sync' => 'e2://e2s_sync',
    '@dump' => 'e2://e2s_dump',
    '@instantiate:version' => 'e2://e2s_instantiate',
    '@info' => 'e2://e2m_info',
    '@utfinfo' => 'e2://e2m_utfinfo',
    '@scale-image:picture' => 'e2://e2s_scale_image',
    '@ajax/::' => 'e2://e2j_::',
    '@actions/::' => 'e2://e2s_::',
    '' => 'e2://e2m_frontpage?page=1',
    ':page' => 'e2://e2m_frontpage',
    'rss' => 'e2://e2m_frontpage_rss',
    ':year' => 'e2://e2m_year',
    ':year/:month' => 'e2://e2m_month',
    ':year/:month/:day' => 'e2://e2m_day',
    'all' => 'e2://e2m_everything',
    ':note' => 'e2://e2m_note',
    ':note/comment' => 'e2://e2m_note_comment',
    ':note/edit' => 'e2://e2m_note_edit?is_published=1',
    ':note/favourite' => 'e2://e2m_note_flag_favourite?is_published=1&value=1',
    ':note/unfavourite' => 'e2://e2m_note_flag_favourite?is_published=1&value=0',
    ':note/show' => 'e2://e2m_note_flag?is_published=1&flag=IsVisible&value=1',
    ':note/hide' => 'e2://e2m_note_flag?is_published=1&flag=IsVisible&value=0',
    ':note/discuss' => 'e2://e2m_note_flag?is_published=1&flag=IsCommentable&value=1',
    ':note/quiet' => 'e2://e2m_note_flag?is_published=1&flag=IsCommentable&value=0',
    ':note/withdraw' => 'e2://e2m_note_withdraw?is_published=1',
    ':note/delete' => 'e2://e2m_note_delete?is_published=1',
    ':note/format/:formatter' => 'e2://e2m_note_use_formatter?is_published=1',
    ':note/alias' => 'e2://e2m_note_use_alias?is_published=1&newalias=',
    ':note/alias/:alias' => 'e2://e2m_note_use_alias?is_published=1',
    ':note/:unsubscr' => 'e2://e2m_unsubscribe?is_published=1',
    ':note/comments-rss' => 'e2://e2m_note_comments_rss',
    ':note/:comnum' => 'e2://e2m_comment',
    ':note/:comnum/edit' => 'e2://e2m_comment_edit',
    ':note/:comnum/important' => 'e2://e2m_comment_flag_ajax?flag=IsFavourite&value=1',
    ':note/:comnum/usual' => 'e2://e2m_comment_flag_ajax?flag=IsFavourite&value=0',
    ':note/:comnum/replace' => 'e2://e2m_comment_flag_ajax?flag=IsVisible&value=1',
    ':note/:comnum/remove' => 'e2://e2m_comment_flag_ajax?flag=IsVisible&value=0',
    ':note/:comnum/spam' => 'e2://e2m_comment_flag?flag=IsSpamSuspect&value=1',
    ':note/:comnum/good' => 'e2://e2m_comment_flag?flag=IsSpamSuspect&value=0',
    ':note/:comnum/wipe' => 'e2://e2m_comment_delete',
    ':note/:comnum/reply/edit' => 'e2://e2m_comment_reply',
    ':note/:comnum/reply/important' => 'e2://e2m_comment_flag_ajax?flag=IsReplyFavourite&value=1',
    ':note/:comnum/reply/usual' => 'e2://e2m_comment_flag_ajax?flag=IsReplyFavourite&value=0',
    ':note/:comnum/reply/replace' => 'e2://e2m_comment_flag_ajax?flag=IsReplyVisible&value=1',
    ':note/:comnum/reply/remove' => 'e2://e2m_comment_flag_ajax?flag=IsReplyVisible&value=0',
    ':note/:comnum/reply/delete' => 'e2://e2m_comment_reply_delete',
    'drafts' => 'e2://e2m_drafts',
    'drafts/:draft' => 'e2://e2m_draft',
    'drafts/:draft/edit' => 'e2://e2m_note_edit?is_published=0',
    'drafts/:draft/show' => 'e2://e2m_note_flag?is_published=0&flag=IsVisible&value=1',
    'drafts/:draft/hide' => 'e2://e2m_note_flag?is_published=0&flag=IsVisible&value=0',
    'drafts/:draft/delete' => 'e2://e2m_note_delete?is_published=0',
    'drafts/:draft/format/:formatter' => 'e2://e2m_note_use_formatter?is_published=0',
    'tags' => 'e2://e2m_tags',
    'tags/:tag' => 'e2://e2m_tag?page=1',
    'tags/:tag/:page' => 'e2://e2m_tag',
    'tags/:tag/rss' => 'e2://e2m_tag_rss',
    'tags/:tag/edit' => 'e2://e2m_tag_edit',
    'tags/:tag/delete' => 'e2://e2m_tag_delete',
    'tags/:tag/pin' => 'e2://e2m_tag_flag_ajax?flag=IsFavourite&value=1',
    'tags/:tag/unpin' => 'e2://e2m_tag_flag_ajax?flag=IsFavourite&value=0',
    'untagged' => 'e2://e2m_untagged',
    'hot' => 'e2://e2m_most_commented',
    'selected' => 'e2://e2m_favourites?page=1',
    'selected/:page' => 'e2://e2m_favourites',
    'found' => 'e2://e2m_found&query=',
    'found/:query' => 'e2://e2m_found',
    'found/:query/rss' => 'e2://e2m_found_rss',
    'new' => 'e2://e2m_write',
    'install' => 'e2://e2m_install',
    'settings' => 'e2://e2m_settings',
    'settings/name' => 'e2://e2m_name_and_author',
    'settings/database' => 'e2://e2m_database',
    'settings/password' => 'e2://e2m_password',
    'settings/timezone' => 'e2://e2m_timezone',
    'settings/sessions' => 'e2://e2m_sessions',
    'sign-in' => 'e2://e2m_sign_in',
    'sign-out' => 'e2://e2m_sign_out',
);
$_url_chunks = array(
    '\:page' => 'page\-(?P<page>\d+)',
    '\:year' => '(?P<year>\d{4})',
    '\:month' => '(?P<month>\d{1,2})',
    '\:day' => '(?P<day>\d{1,2})',
    '\:note' => array(
        'all\/(?P<alias>[-a-zA-Z0-9]+)',
        '(?P<year>\d{4})\/(?P<month>\d{1,2})\/(?P<day>\d{1,2})\/(?P<day_number>\d+)',
    ),
    '\:draft' => array(
        '(?P<oalias2>[-a-zA-Z0-9]+)\/(?P<draft2>\d+)',
        '(?P<oalias>[-a-zA-Z0-9]+)',
        '-\/(?P<draft>\d+)',
    ),
    '\:comnum' => 'comment\-(?P<comment_number>[0-9]+)',
    '\:file' => '(?P<file>.*?)',
    '\:tag' => TRANS_TAGS_UTF8_URLS ? '(?P<tag>.*?)' : '(?P<tag_urlname>.*?)',
    '\:query' => '(?P<query>.*?)',
    '\:version' => '\:(?P<version>\d+)',
    '\:picture' => '\:(?P<picture>.*?)',
    '\:unsubscr' => 'unsubscribe\:(?P<unsubscribe_email>.+?)\:(?P<unsubscribe_key>[0-9a-f]{32})',
    '\:formatter' => '(?P<formatter>.*?)',
    '\:alias' => '(?P<newalias>.*?)',
);
$_url_autoredirects = array(
    '/^favo(?:u?)rites(\~.+)?$/i' => 'selected\\1',
    '/^favo(?:u?)rites\/(.+)/i' => 'selected/\\1',
    '/^keywords$/i' => 'tags',
    '/^keywords\/(.*)/i' => 'tags/\\1',
    '/^everything$/i' => 'all',
    '/^no\-tags(\~.+)?$/i' => '@untagged\\1',
    '/^no\-tags\/(.+)/i' => '@untagged/\\1',
    '/^untagged(\~.+)?$/i' => '@untagged\\1',
    '/^search\/(.+)/i' => 'found/\\1',
    '/^(\d{4}\/\d{1,2}\/\d{1,2}\/\d+)\/comments(\/?)$/i' => '\\1',
    '/^\~(\d+)/i' => 'page-\\1',
    '/\/?\~(\d+)/i' => '/page-\\1',
);
function tb6b0($x572d4)
{
    global $_url_autoredirects, $ra57c1;
    $x572d4 = preg_replace(array_keys($_url_autoredirects), array_values($_url_autoredirects), $x572d4);
    if (preg_match('/^([0-9]+)[.-]([0-9]+)[.-]([0-9]+)(.*)/', $x572d4, $i9c28d)) {
        if (2 == strlen($i9c28d[3])) {
            $i9c28d[3] = '20' . $i9c28d[3];
        }
        return ($i9c28d[3] . '/' . $i9c28d[2] . '/' . $i9c28d[1] . $i9c28d[4]);
    }
    if (preg_match('/^tags\-rss\/(.*?)\/?$/', $x572d4, $i9c28d)) {
        $ue4d23 = substr($i9c28d[1], strrpos($i9c28d[1], '/') + 1);
        return ('tags/' . $ue4d23 . '/rss/');
    }
    return $x572d4;
}

function b7059()
{
    global $__synthetic_urls, $_config;
    $__synthetic_urls = false;
    if ($_config['url_composition'] == 'auto') {
        if (function_exists('apache_get_modules')) {
            if (in_array('mod_rewrite', apache_get_modules())) {
                $__synthetic_urls = true;
            }
        }
    }
    if ($_config['url_composition'] == 'synthetic') {
        $__synthetic_urls = true;
    }
}

function e83c8($ic48ba, $parameters = array())
{
    global $_url_map, $_url_chunks, $_config, $__synthetic_urls, $u57de2, $ra57c1;
    $bc2bd7 = array_flip($_url_map);
    if (@$_config['preferred_domain_name'] and $_SERVER['HTTP_HOST'] != $_config['preferred_domain_name']) {
        $u57de2 = $_config['preferred_domain_name'];
    }
    $x572d4 = 'http://' . $u57de2 . $ra57c1 . '/';
    $b9c464 = 'e2://' . $ic48ba;
    if (array_key_exists('page', $parameters)) {
        $l71860 = $parameters['page'];
    } else {
        $l71860 = 1;
    }
    if ($parameters) {
        $b9c464 .= '?';
        $s1c61f = array();
        $v21711 = array();
        foreach ($parameters as $k3c6e0 => $c2063c) {
            if ($k3c6e0 == '*note') {
                $v21711[] = $k3c6e0;
                $s1c61f[] = e2urls__expand_tricky_parameters_for_note_($c2063c);
            }
        }
        foreach ($v21711 as $k3c6e0) {
            unset($parameters[$k3c6e0]);
        }
        foreach ($s1c61f as $j58e2a) {
            $parameters = array_merge($parameters, $j58e2a);
        }
        foreach ($parameters as $k3c6e0 => $c2063c) {
            if (!@$k3c6e0[0] == '_') {
                if (array_key_exists('\:' . $k3c6e0, $_url_chunks)) {
                    $f93316 = $_url_chunks['\:' . $k3c6e0];
                    if (preg_match_all('/\<(.*?)\>/', $f93316, $i9c28d)) {
                        foreach ($i9c28d[1] as $je3cc9) {
                            if (array_key_exists($je3cc9, $parameters)) {
                                $b9c464 .= $je3cc9 . '=' . urlencode($parameters[$je3cc9]) . '&';
                            }
                        }
                    }
                } else {
                    $b9c464 .= $k3c6e0 . '=' . urlencode($c2063c) . '&';
                }
            }
        }
        $b9c464 = substr($b9c464, 0, -1);
    }
    if (0 and array_key_exists($b9c464, $bc2bd7)) {
        if ($bc2bd7[$b9c464] != '') {
            $x572d4 .= $bc2bd7[$b9c464] . '/';
        }
        return $x572d4;
    } else {
        $i44907 = false;
        foreach ($bc2bd7 as $k45ea8 => $n9ea44) {
            $ab7365 = $k45ea8;
            $ab7365 = preg_quote($ab7365, '/');
            if (strstr($k45ea8, '::')) {
                $ab7365 = str_replace('\:\:', '(.*)', $ab7365);
                $ab7365 = '/^' . $ab7365 . '$/s';
                if (preg_match($ab7365, $b9c464, $i9c28d)) {
                    $m0dc02 = str_replace('_', '-', $i9c28d[1]);
                    $b95a17 = str_replace('::', $m0dc02, $n9ea44);
                    if ($__synthetic_urls) {
                        $x572d4 .= $b95a17 . '/';
                    } else {
                        $x572d4 .= '?go=' . $b95a17 . '/';
                    }
                    return $x572d4;
                }
            }
            $xebe09 = parse_url($k45ea8);
            $z2f532 = $xebe09['host'];
            $t54435 = false;
            if ($ic48ba == $z2f532) {
                $i44907 = true;
                if ($xebe09['query']) {
                    $d22c38 = explode('&', $xebe09['query']);
                    foreach ($d22c38 as $u8822b) {
                        list ($k3c6e0, $c2063c) = explode('=', $u8822b);
                        $c2063c = urldecode($c2063c);
                        $k3c6e0 = str_replace('_', '-', $k3c6e0);
                        if (array_key_exists($k3c6e0, $parameters) and $parameters[$k3c6e0] != $c2063c) {
                            $t54435 = true;
                            break;
                        }
                    }
                }
                if (!$t54435) {
                    if (preg_match_all('/\:[\-a-z]+/i', $n9ea44, $i9c28d)) {
                        foreach ($i9c28d[0] as $xfc413) {
                            $mb0f75 = $_url_chunks['\\' . $xfc413];
                            if (!is_array($mb0f75)) {
                                $mb0f75 = array($mb0f75);
                            }
                            $j05f62 = $mb0f75[0];
                            foreach ($mb0f75 as $j05f62) {
                                $deab03 = '/\(\?P\<(.*?)\>.*?\)/e';
                                $u4274e = true;
                                if (preg_match($deab03, $j05f62, $i9c28d)) {
                                    $u4274e = true;
                                    for ($j865c0 = 1; $j865c0 < count($i9c28d); ++$j865c0) {
                                        if (!$parameters[str_replace("_", "-", $i9c28d[$j865c0])]) {
                                            $u4274e = false;
                                            break;
                                        }
                                    }
                                }
                                if (!$u4274e) {
                                    continue;
                                }
                                $ff9e1e = preg_replace($deab03, '$parameters[str_replace ("_", "-", "\\1")]', $j05f62);
                                $ff9e1e = stripslashes($ff9e1e);
                                $nc5d91 = str_replace($xfc413, $ff9e1e, $n9ea44);
                                break;
                            }
                            $n9ea44 = $nc5d91;
                        }
                    }
                    $q15214 = array();
                    if ($n9ea44) {
                        if ($__synthetic_urls) {
                            $x572d4 .= $n9ea44 . '/';
                        } else {
                            $q15214[] = 'go=' . $n9ea44 . '/';
                        }
                    }
                    foreach ($_GET as $g8ce4b => $c9e366) {
                        if (in_array(
                            $g8ce4b,
                            array('result', 'raw', 'themeless', 'part', 'of')
                        )
                        ) {
                            $q15214[] = $g8ce4b . ($c9e366 ? ('=' . urlencode($c9e366)) : '');
                        }
                    }
                    if (count($q15214)) {
                        $x572d4 .= '?' . implode('&', $q15214);
                    }
                    return $x572d4;
                }
            }
        }
        if ($i44907) {
            return $x572d4;
        } else {
            die ('Cannot compose url for candy ' . $ic48ba);
        }
    }
}

function jb7e9($x572d4)
{
    global $_url_map, $_url_chunks, $_config, $__synthetic_urls, $u57de2, $ra57c1;
    $h196c2 = $x572d4;
    $x572d4 = trim($x572d4, '/');
    $x572d4 = tb6b0($x572d4);
    $parameters = array();
    foreach ($_url_map as $c12a24 => $k45ea8) {
        $hd532d = $c12a24;
        $hd532d = preg_quote($hd532d, '/');
        if (strstr($c12a24, '::')) {
            $hd532d = str_replace('\:\:', '(.*)', $hd532d);
            $hd532d = '/^' . $hd532d . '$/s';
            if (preg_match($hd532d, $x572d4, $i9c28d)) {
                $u53b9e = str_replace('-', '_', $i9c28d[1]);
                $b9c464 = str_replace('::', $u53b9e, $k45ea8);
            }
        } elseif (strstr($c12a24, ':')) {
            $l1e380 = array();
            foreach ($_url_chunks as $g8ce4b => $c9e366) {
                if (is_array($c9e366)) {
                    $l1e380[$g8ce4b] = '(?:(?:' . implode(')|(?:', $c9e366) . '))';
                } else {
                    $l1e380[$g8ce4b] = $c9e366;
                }
            }
            $hd532d = str_replace(array_keys($l1e380), array_values($l1e380), $hd532d);
            $hd532d = '/^' . $hd532d . '$/s';
            if (preg_match($hd532d, $x572d4, $i9c28d)) {
                $b9c464 = $k45ea8;
                foreach ($i9c28d as $k3c6e0 => $c2063c) {
                    if (!is_numeric($k3c6e0)) {
                        $k3c6e0 = str_replace('_', '-', $k3c6e0);
                        $parameters[$k3c6e0] = $c2063c;
                    }
                }
            }
        } else {
            if ($c12a24 == $x572d4) {
                $b9c464 = $k45ea8;
                break;
            }
        }
    }
    $ifafdd = (bool)$b9c464;
    if (!$b9c464) {
        $b9c464 = 'e2://e2m_404';
    }
    $xebe09 = parse_url($b9c464);
    $ic48ba = $xebe09['host'];
    if ($xebe09['query']) {
        $d22c38 = explode('&', $xebe09['query']);
        foreach ($d22c38 as $u8822b) {
            list ($k3c6e0, $c2063c) = explode('=', $u8822b);
            $c2063c = urldecode($c2063c);
            $k3c6e0 = str_replace('_', '-', $k3c6e0);
            $parameters[$k3c6e0] = $c2063c;
        }
    }
    $e2cb9d = false;
    $parameters = e2urls__consolidate_tricky_parameters_($parameters);
    if ($ifafdd) {
        if ($_config['force_canonical_urls']) {
            $w95d32 = e83c8($ic48ba, $parameters);
            $da37bf = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $e5d6ba = 'http://' . $_SERVER['HTTP_HOST'] . urldecode($_SERVER['REQUEST_URI']);
            if ($da37bf != $w95d32 and $e5d6ba != $w95d32) {
                e2_go_to($w95d32);
            }
        }
        if (is_callable($ic48ba)) {
            $e2cb9d = array($ic48ba, $parameters);
        } else {
            $e2cb9d = array(null, array());
        }
    } else {
        $e2cb9d = array(null, array());
    }
    return $e2cb9d;
}

function e2urls__expand_tricky_parameters_for_note_($taad65)
{
    global $settings, $ra57c1;
    if (!isset ($taad65['IsPublished'])) {
        return array();
    }
    if (!$taad65['IsPublished']) {
        $parameters['draft'] = $taad65['ID'];
        $parameters['oalias'] = $taad65['OriginalAlias'];
        $parameters['is-published'] = 0;
        return $parameters;
    }
    $parameters['is-published'] = 1;
    $zb80bb = $taad65['ID'];
    $u96b8c = $taad65['Stamp'];
    $cb2c6c = a0923($taad65);
    if (!isset ($taad65['__noalias!'])) {
        if (isset ($taad65['alias'])) {
            $parameters['alias'] = $taad65['alias'];
        } else {
            $parameters['alias'] = e2_active_alias_for_note_with_id_($taad65['ID']);
        }
    }
    if ($parameters['alias']) {
        return $parameters;
    }
    list ($n41529, $w6f8f5, $u8277e) = explode('/', j5a2f('Y/m/d', $u96b8c, $cb2c6c));
    $parameters['year'] = $n41529;
    $parameters['month'] = $w6f8f5;
    $parameters['day'] = $u8277e;
    if (isset ($taad65['day_number'])) {
        $parameters['day-number'] = $taad65['day_number'];
    } else {
        list ($gd9d0f,) = m5273($n41529, $w6f8f5, $u8277e);
        if (p0738(
            "SELECT `ID`, `Stamp`, `Offset`, `IsDST` " . "FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished` = 1 AND (`Stamp` BETWEEN " . $gd9d0f . " AND " . $u96b8c . ") " . "ORDER BY `Stamp`"
        )
        ) {
            $result = j0d6b();
            $db1bc2 = 1;
            foreach ($result as $f65afd) {
                if ($n41529 . '/' . $w6f8f5 . '/' . $u8277e == j5a2f('Y/m/d', $f65afd['Stamp'], a0923($f65afd))) {
                    if ($f65afd['ID'] == $zb80bb) {
                        $d444bc = 1;
                        break;
                    }
                    $db1bc2++;
                }
            }
            if (@$d444bc != 1) {
                header('HTTP/1.1 503 Service Unavailable');
                die ('<big style="background: #a00; color: #ccc; padding: .1em .33em">CANDIDATES_ENUMERATION_FAILED</big>');
            }
        }
        $parameters['day-number'] = $db1bc2;
    }
    return $parameters;
}

function e2urls__consolidate_tricky_parameters_($parameters)
{
    if (@$parameters['alias'] or (@$parameters['year'] and @$parameters['month'] and @$parameters['day'] and @$parameters['day-number'])) {
        $parameters['*note'] = e2_published_noterec_with_parameters_($parameters);
    }
    if (@$parameters['oalias'] or @$parameters['draft'] or @$parameters['oalias2'] or @$parameters['draft2']) {
        $parameters['*note'] = e2_noterec_with_parameters_($parameters);
    }
    return $parameters;
}

function e2m_tags()
{
    global $settings, $_strings;
    $result = s24e7();
    $n59aeb = array();
    foreach ($result['keywords'] as $k0ac27) {
        $kc6827['tag'] = htmlspecialchars($k0ac27['Keyword'], ENT_NOQUOTES, HSC_ENC);
        $kc6827['href'] = e83c8(
            'e2m_tag',
            TRANS_TAGS_UTF8_URLS ? array('tag' => $kc6827['tag']) : array('tag-urlname' => $k0ac27['URLName'])
        );
        $kc6827['favourite?'] = (bool)$k0ac27['IsFavourite'];
        $kc6827['notes-count'] = 0;
        $kc6827['last-used'] = 0;
        $kc6827['freshness'] = 0;
        $kc6827['weight'] = 0;
        $n59aeb[$k0ac27['ID']] = $kc6827;
    }
    $p9fdd5 = 0;
    $y8f57c = 0;
    $y06894 = 0;
    foreach ($result['ordering_info'] as $q28a42) {
        $kc6827 =& $n59aeb[$q28a42['KeywordID']];
        $kc6827['notes-count'] = $q28a42['Count'];
        if (@$kc6827['last-used'] < $q28a42['LastUsed']) {
            $kc6827['last-used'] = $q28a42['LastUsed'];
            $l452b4 = (time() - $kc6827['last-used']) / SECONDS_IN_A_YEAR;
            $kc6827['freshness'] = pow(1 / 2, $l452b4);
        }
        $p9fdd5 = max($p9fdd5, $kc6827['notes-count']);
        $y8f57c = max($y8f57c, $kc6827['freshness']);
        $y06894 = max($y06894, $kc6827['notes-count'] * $kc6827['freshness']);
    }
    $a86d7e = array();
    foreach ($n59aeb as $j865c0 => $c9e366) {
        if ($c9e366['notes-count'] == 0) {
            continue;
        }
        $n95e80 = mb_strtolower($c9e366['tag']);
        $a86d7e[$n95e80] = $c9e366;
        if ($y8f57c != 0) {
            $a86d7e[$n95e80]['freshness'] = $c9e366['freshness'] / $y8f57c;
        } else {
            $a86d7e[$n95e80]['freshness'] = 0;
        }
        if ($y06894 != 0) {
            $a86d7e[$n95e80]['weight'] = ($c9e366['freshness'] * $c9e366['notes-count'] / $y06894);
        } else {
            $a86d7e[$n95e80]['weight'] = 0;
        }
        if ($a86d7e[$n95e80]['favourite?']) {
            $a86d7e[$n95e80]['weight'] = 1;
        }
    }
    $e2cb9d['title'] = $_strings['pt--tags'];
    $e2cb9d['heading'] = $_strings['pt--tags'];
    if (count($a86d7e) > 0) {
        $e2cb9d['tags'] = array('many?' => count($a86d7e) > KEYWORDS_MANY_THRESH, 'each' => $a86d7e,);
    }
    return $e2cb9d;
}

function e2m_tag($parameters = array())
{
    global $settings, $_config, $_current_tag, $_strings, $l71860, $full_blog_url;
    if (array_key_exists('_tagrec', $parameters)) {
        $nd7df5 = $parameters['_tagrec'];
        $l7186e = $parameters['tag-urlname'];
    } else {
        return e2_error404_mode();
    }
    $_current_tag = $nd7df5['Keyword'];
    $l71860 = $parameters['page'];
    $qf79b1 = 'AND `IsVisible`=1';
    if (ne852()) {
        $qf79b1 = '';
    }
    $tc2b7b = $settings['db']['table_prefix'];
    $z56790[] = "`" . $tc2b7b . "NotesKeywords`.KeywordID=" . $nd7df5['ID'];
    $z56790 = implode(' OR ', $z56790);
    $r76595 = ("SELECT DISTINCT `" . $tc2b7b . "Notes`.* FROM `" . $tc2b7b . "Notes` " . "INNER JOIN `" . $tc2b7b . "NotesKeywords` " . "ON `" . $tc2b7b . "NotesKeywords`.NoteID=`" . $tc2b7b . "Notes`.ID " . "WHERE `IsPublished`=1 AND (" . $z56790 . ") " . $qf79b1 . " " . "ORDER BY `" . $tc2b7b . "Notes`.`Stamp` DESC");
    $jd7e5d = $settings['appearance']['notes_per_page'];
    $u7694f = $r76595 . ' LIMIT ' . ($l71860 - 1) * $jd7e5d . ', ' . $jd7e5d;
    $n61e23 = str_replace(
        "SELECT DISTINCT `" . $settings['db']['table_prefix'] . "Notes`.*",
        "SELECT COUNT(DISTINCT `" . $settings['db']['table_prefix'] . "Notes`.`ID`) AS NotesCount",
        $r76595
    );
    $sb3b32 = array();
    if (p0738($n61e23)) {
        $result = j0d6b();
        $hfbb44 = $result[0]['NotesCount'];
        $cae0fe = ceil($hfbb44 / $jd7e5d);
        $sb3b32['timeline?'] = true;
        $sb3b32['count'] = $cae0fe;
        $sb3b32['this'] = $l71860;
        $sb3b32['earlier-title'] = $_strings['gs--earlier'];
        $sb3b32['later-title'] = $_strings['gs--later'];
        $u920fa = $parameters;
        if ($l71860 < $cae0fe) {
            $u920fa['page'] = $l71860 + 1;
            $sb3b32['earlier-href'] = e83c8('e2m_tag', $u920fa);
        }
        if ($l71860 > 1) {
            $u920fa['page'] = $l71860 - 1;
            $sb3b32['later-href'] = e83c8('e2m_tag', $u920fa);
        }
    }
    if ($hfbb44 == 0) {
        return e2_error404_mode();
    }
    if (p0738($u7694f)) {
        $result = j0d6b();
        foreach ($result as $g8ce4b => $taad65) {
            $taad65['_']['_id'] = $taad65['ID'];
            $taad65['_']['_ord'] = k;
            $taad65['_']['_ord_max'] = count($result) - 1;
            $a4358b[] = w6791($taad65);
        }
        if (count($result) == 0) {
            if ($l71860 != 1) {
                return e2_error404_mode();
            }
        }
    }
    if (ne852()) {
        $g97a59['edit-href'] = e83c8(
            'e2m_tag_edit',
            TRANS_TAGS_UTF8_URLS ? array(
                'tag' => htmlspecialchars(
                    $nd7df5['Keyword'],
                    ENT_NOQUOTES,
                    HSC_ENC
                )
            ) : array('tag-urlname' => $l7186e)
        );
    }
    if ('' != $nd7df5['Description']) {
        $t2bfe4 = yb7f1($nd7df5['Description'], 'simple', 'nocache');
        $p67daf = $t2bfe4['text-final'];
        $g97a59['description'] = $p67daf;
        $g97a59['description-format-info'] = $t2bfe4['meta'];
    }
    if (TRANS_TAGS_UTF8_URLS) {
        $r3ad42 = e83c8('e2m_tag_rss', array('tag' => htmlspecialchars($nd7df5['Keyword'], ENT_NOQUOTES, HSC_ENC)));
    } else {
        $r3ad42 = e83c8('e2m_tag_rss', array('tag-urlname' => $l7186e));
    }
    n3010($_strings['pt--posts-tagged'] . ': ' . htmlspecialchars($nd7df5['Keyword'], ENT_NOQUOTES, HSC_ENC), $r3ad42);
    $d96963 = (e2l_get_string('pt--n-posts', array('number' => $hfbb44)) . ' ' . $_strings['gs--tagged']);
    $e2cb9d = array(
        'title' => $d96963 . ': ' . $nd7df5['Keyword'],
        'superheading' => $d96963,
        'heading' => $nd7df5['Keyword'],
        'related-rss-href' => $r3ad42,
        'pages' => $sb3b32,
        'notes' => $a4358b,
        'tag' => $g97a59,
    );
    if (ne852()) {
        $e2cb9d['related-edit-href'] = $g97a59['edit-href'];
        $e2cb9d['related-edit-title'] = $_strings['tt--edit-tag'];
    }
    return $e2cb9d;
}

function e2m_tag_edit($parameters = array())
{
    global $settings, $_strings;
    if (array_key_exists('_tagrec', $parameters)) {
        $nd7df5 = $parameters['_tagrec'];
    } else {
        return e2_error404_mode();
    }
    $qcd831 = array(
        '.tag-id' => $nd7df5['ID'],
        'form-action' => e83c8('e2s_tag_edit'),
        'submit-text' => $_strings['fb--save-changes'],
        'tag' => htmlspecialchars($nd7df5['Keyword'], ENT_COMPAT, HSC_ENC),
        'urlname' => htmlspecialchars($nd7df5['URLName'], ENT_COMPAT, HSC_ENC),
        'description' => htmlspecialchars($nd7df5['Description'], ENT_COMPAT, HSC_ENC),
        'favourite?' => (bool)$nd7df5['IsFavourite'],
        'delete-href' => e83c8(
            'e2m_tag_delete',
            TRANS_TAGS_UTF8_URLS ? array(
                'tag' => htmlspecialchars(
                    $nd7df5['Keyword'],
                    ENT_NOQUOTES,
                    HSC_ENC
                )
            ) : array('tag-urlname' => $nd7df5['URLName'])
        ),
    );
    $e2cb9d = array(
        'title' => $_strings['pt--tag-edit'] . ': ' . $nd7df5['Keyword'],
        'heading' => $_strings['pt--tag-edit'],
        'form' => 'form-tag',
        'form-tag' => $qcd831,
    );
    return $e2cb9d;
}

function e2m_tag_flag_ajax($parameters)
{
    if (a2e88($parameters)) {
        $u67142 = $parameters;
        $u67142['value'] = !$parameters['value'];
        if ($parameters['value'] == 1) {
            $v99859 = e83c8('e2m_tag_flag_ajax', $u67142);
            $z1fa03 = 'on-rehref|' . $v99859;
        } else {
            $v99859 = e83c8('e2m_tag_flag_ajax', $u67142);
            $z1fa03 = 'off-rehref|' . $v99859;
        }
    } else {
        $z1fa03 = 'error';
    }
    if (array_key_exists('result', $_POST) and ($_POST['result'] == 'ajaxresult')) {
        die ($z1fa03);
    } else {
        e2_go_to(e83c8('e2m_tag', $parameters));
        die;
    }
}

function a2e88($parameters)
{
    if (array_key_exists('_tagrec', $parameters)) {
        $nd7df5 = $parameters['_tagrec'];
    } else {
        return false;
    }
    @unlink(CACHE_FILENAME_FAVTAGS);
    @unlink(CACHE_FILENAME_TAGS);
    $result = eaa79('Keywords', array('ID' => $nd7df5['ID'], $parameters['flag'] => (int)($parameters['value'] == 1),));
    return $result;
}

function e2m_tag_delete($parameters = array())
{
    global $settings, $_strings;
    if (array_key_exists('_tagrec', $parameters)) {
        $nd7df5 = $parameters['_tagrec'];
    } else {
        return e2_error404_mode();
    }
    $uecc14 = array(
        '.tag-id' => $nd7df5['ID'],
        'caution-text' => e2l_get_string(
            'gs--tag-will-be-deleted-notes-remain',
            array('tag' => htmlspecialchars($nd7df5['Keyword'], ENT_COMPAT, HSC_ENC))
        ),
        'tag' => htmlspecialchars($nd7df5['Keyword'], ENT_COMPAT, HSC_ENC),
        'form-action' => e83c8('e2s_tag_delete'),
        'submit-text' => $_strings['fb--delete'],
    );
    $e2cb9d = array(
        'title' => $_strings['pt--tag-delete'] . ': ' . $nd7df5['Keyword'],
        'heading' => $_strings['pt--tag-delete'],
        'form' => 'form-tag-delete',
        'form-tag-delete' => $uecc14,
    );
    return $e2cb9d;
}

function e2m_untagged()
{
    global $settings, $_strings;
    $qf79b1 = 'AND `IsVisible`=1';
    if (ne852()) {
        $qf79b1 = '';
    }
    return pd864(
        array(
            'query' => "SELECT n.* FROM `" . $settings['db']['table_prefix'] . "Notes` n " . "LEFT OUTER JOIN `" . $settings['db']['table_prefix'] . "NotesKeywords` nk " . "ON nk.NoteID = n.ID " . "WHERE `IsPublished`=1 AND nk.KeywordID IS NULL " . $qf79b1 . " " . "ORDER BY n.Stamp DESC",
            'title' => $_strings['pt--posts-without-tags'],
            'heading' => $_strings['pt--posts-without-tags'],
            'no-notes-text' => $_strings['gs--no-posts-without-tags'],
            'show-all-notes' => true,
        )
    );
}

function e2s_tag_edit()
{
    global $settings, $_strings;
    $y89e37 = 1;
    if (!u01d3($_POST['urlname'])) {
        e8a40($_strings['er--bad-tag-urlname']);
        $y89e37 = 0;
    }
    if (p0738(
        "SELECT Keyword, URLName FROM `" . $settings['db']['table_prefix'] . "Keywords` " . "WHERE (Keyword = '" . p7928(
            $_POST['tag']
        ) . "' " . "OR URLName = '" . p7928($_POST['urlname']) . "') " . "AND (ID != " . ((int)$_POST['tag-id']) . ")"
    )
    ) {
        if (count(j0d6b()) == 0) {
            q7996();
            @unlink(CACHE_FILENAME_FAVTAGS);
            @unlink(CACHE_FILENAME_TAGS);
            if (p0738(
                "UPDATE `" . $settings['db']['table_prefix'] . "Keywords` " . "SET " . "`Keyword`='" . p7928(
                    $_POST['tag']
                ) . "', " . ($y89e37 ? "`URLName`='" . p7928(
                        $_POST['urlname']
                    ) . "', " : '') . "`Description`='" . p7928(
                    $_POST['description']
                ) . "'" . ' WHERE `ID`=' . ((int)$_POST['tag-id'])
            )
            ) {
                if ($y89e37 and TRANS_TAGS_UTF8_URLS) {
                    e2_go_to(e83c8('e2m_tag', array('tag' => $_POST['tag'])));
                } elseif (!TRANS_TAGS_UTF8_URLS) {
                    e2_go_to(e83c8('e2m_tag', array('tag-urlname' => $_POST['urlname'])));
                } else {
                    y4930();
                }
                die;
            } else {
                e8a40($_strings['er--error-updating-tag']);
                y4930();
                die;
            }
        } else {
            e8a40($_strings['er--cannot-rename-tag']);
            y4930();
            die;
        }
    } else {
        e8a40($_strings['er--error-updating-tag']);
        y4930();
        die;
    }
}

function e2s_tag_delete()
{
    global $settings, $_strings;
    $zb80bb = ((int)$_POST['tag-id']);
    q7996();
    @unlink(CACHE_FILENAME_FAVTAGS);
    @unlink(CACHE_FILENAME_TAGS);
    $d444bc = (p0738("DELETE FROM `" . $settings['db']['table_prefix'] . "Keywords` WHERE `ID`=" . $zb80bb) and p0738(
            "DELETE FROM `" . $settings['db']['table_prefix'] . "NotesKeywords` WHERE `KeywordID`=" . $zb80bb
        ));
    if ($d444bc) {
        e2_go_to(e83c8('e2m_tags'));
        die;
    } else {
        e8a40($_strings['er--error-deleting-tag']);
        y4930();
        die;
    }
}

function p3b25($parameters = array())
{
    global $settings;
    if (TRANS_TAGS_UTF8_URLS) {
        if (array_key_exists('tag', $parameters)) {
            $g8ce4b = i0188($parameters['tag']);
            if ($g8ce4b) {
                $parameters['_tagrec'] = $g8ce4b;
            }
            $parameters['tag-urlname'] = $parameters['_tagrec']['URLName'];
        }
    } else {
        if (array_key_exists('tag-urlname', $parameters)) {
            $g8ce4b = m812d($parameters['tag-urlname']);
            if ($g8ce4b) {
                $parameters['_tagrec'] = $g8ce4b;
            }
            $parameters['tag'] = $parameters['_tagrec']['Keyword'];
        }
    }
    return $parameters;
}

function s24e7()
{
    global $settings;
    p0738("SELECT * FROM `" . $settings['db']['table_prefix'] . "Keywords` " . "ORDER BY `Keyword`");
    $n59aeb = j0d6b();
    p0738(
        "SELECT nk.KeywordID, COUNT(DISTINCT n.ID) as Count, max(n.Stamp) as LastUsed " . "FROM `" . $settings['db']['table_prefix'] . "NotesKeywords` nk, " . "`" . $settings['db']['table_prefix'] . "Notes` n " . "WHERE nk.NoteID = n.ID AND n.IsPublished " . (ne852(
        ) ? "" : "AND n.IsVisible=1 ") . "GROUP BY nk.KeywordID"
    );
    $h0c6dc = j0d6b();
    return array('keywords' => $n59aeb, 'ordering_info' => $h0c6dc);
}

function yaf16($o07f25)
{
    global $settings, $t097cc, $_current_tag;
    $d9df9d = null;
    if (CACHE_FAVTAGS and is_file(CACHE_FILENAME_FAVTAGS)) {
        $d9df9d = @unserialize(jcdf0(CACHE_FILENAME_FAVTAGS));
    }
    if (!is_array($d9df9d)) {
        p0738(
            "SELECT * FROM `" . $settings['db']['table_prefix'] . "Keywords` " . "WHERE IsFavourite = 1 ORDER BY `Keyword`"
        );
        $k9cdff = j0d6b();
        $d9df9d = array();
        foreach ($k9cdff as $w04ff0) {
            $kc6827['tag'] = htmlspecialchars($w04ff0['Keyword'], ENT_NOQUOTES, HSC_ENC);
            $kc6827['href'] = e83c8(
                'e2m_tag',
                TRANS_TAGS_UTF8_URLS ? array('tag' => $kc6827['tag']) : array('tag-urlname' => $w04ff0['URLName'])
            );
            $d9df9d[] = $kc6827;
        }
        if (CACHE_FAVTAGS) {
            c6e52(CACHE_FILENAME_FAVTAGS, serialize($d9df9d));
        }
    }
    $x8a4f1 = false;
    foreach ($d9df9d as $g8ce4b => $c9e366) {
        $d9df9d[$g8ce4b]['current?'] = ($d9df9d[$g8ce4b]['tag'] == $_current_tag);
        if ($d9df9d[$g8ce4b]['current?']) {
            $x8a4f1 = true;
            $w08187 = $o07f25;
            $w08187['flag'] = 'IsFavourite';
            $w08187['value'] = 0;
            if (ne852()) {
                $d9df9d[$g8ce4b]['pinnable?'] = true;
                $d9df9d[$g8ce4b]['pinned?'] = true;
                $d9df9d[$g8ce4b]['pinned-toggle-href'] = (e83c8('e2m_tag_flag_ajax', $w08187));
            }
        }
    }
    if (ne852()) {
        if (!$x8a4f1 and array_key_exists('_tagrec', $o07f25)) {
            $fa55a9 = $o07f25;
            $fa55a9['flag'] = 'IsFavourite';
            $fa55a9['value'] = 1;
            $td5a7a = array(
                'tag' => htmlspecialchars($o07f25['_tagrec']['Keyword'], ENT_NOQUOTES, HSC_ENC),
                'href' => e83c8('e2m_tag', $o07f25),
                'current?' => true,
                'pinnable?' => true,
                'pinned?' => false,
                'pinned-toggle-href' => e83c8('e2m_tag_flag_ajax', $fa55a9),
            );
            $d9df9d[] = $td5a7a;
        }
    }
    return $d9df9d;
}

function lce23($d21158, $parameters = '')
{
    global $settings;
    $m0dff3 = array();
    if (p0738(
        "SELECT `" . $settings['db']['table_prefix'] . "Keywords`.* " . "FROM `" . $settings['db']['table_prefix'] . "Keywords`, " . "`" . $settings['db']['table_prefix'] . "NotesKeywords` " . "WHERE `" . $settings['db']['table_prefix'] . "NotesKeywords`.NoteID=" . ((int)$d21158) . " " . "AND `" . $settings['db']['table_prefix'] . "Keywords`.ID=`" . $settings['db']['table_prefix'] . "NotesKeywords`.KeywordID " . "ORDER BY `Keyword`"
    )
    ) {
        $m0dff3 = j0d6b();
    }
    return $m0dff3;
}

function i93c2($aeaa60)
{
    global $settings;
    $k316e8 = array();
    foreach (array('ID', 'NoteID', 'KeywordID',) as $b06e3d) {
        if (array_key_exists($b06e3d, $aeaa60)) {
            $p6a7f2[] = '`' . $b06e3d . '`' . "='" . p7928($aeaa60[$b06e3d]) . "'";
            if ($b06e3d == 'ID') {
                $a729d6 = 'tagbinging-id';
            }
            if ($b06e3d == 'NoteID') {
                $a729d6 = 'tagbinging-note-id';
            }
            if ($b06e3d == 'KeywordID') {
                $a729d6 = 'tagbinging-tag-id';
            }
            $k316e8[$a729d6] = $aeaa60[$b06e3d];
        }
    }
    $l1b1cc = ("DELETE FROM `" . $settings['db']['table_prefix'] . "NotesKeywords` " . "WHERE " . implode(
            ' AND ',
            $p6a7f2
        ));
    if (p0738($l1b1cc)) {
        return true;
    }
}

function qcbd4($aeaa60)
{
    global $settings;
    if (!array_key_exists('ID', $aeaa60) or !is_numeric($aeaa60['ID'])) {
        die ('API MISUSE: e2q_update_tagbinding must be called with an ID field in $tagbinding_record');
    }
    $p6a7f2 = array();
    foreach (array('NoteID', 'KeywordID',) as $b06e3d) {
        if (array_key_exists($b06e3d, $aeaa60)) {
            $p6a7f2[] = '`' . $b06e3d . '`' . "='" . p7928($aeaa60[$b06e3d]) . "'";
        }
    }
    if (count($p6a7f2) > 0) {
        $l1b1cc = "UPDATE `" . $settings['db']['table_prefix'] . "NotesKeywords` " . "SET " . implode(
                ', ',
                $p6a7f2
            ) . " " . "WHERE `ID`=" . $aeaa60['ID'];
        if (p0738($l1b1cc)) {
            return true;
        }
    }
}

function i478d($nd7df5, $ud7ca3, $o71883, $p67daf, $u8b087)
{
    global $settings;
    $d444bc = p0738(
        "INSERT INTO `" . $settings['db']['table_prefix'] . "Keywords` (" . "`Keyword`, `URLName`, `ParentKeywordID`, `Description`, `IsFavourite`" . ") VALUES (" . "'" . p7928(
            $nd7df5
        ) . "', " . "'" . p7928($ud7ca3) . "', " . "'" . p7928($o71883) . "', " . "'" . p7928(
            $p67daf
        ) . "', " . "'" . ((int)$u8b087) . "' " . ")"
    );
    @unlink(CACHE_FILENAME_TAGS);
    if ($u8b087) {
        @unlink(CACHE_FILENAME_FAVTAGS);
    }
    if ($d444bc) {
        return mysql_insert_id();
    } else {
        return false;
    }
}

function yec0d($sb45cf)
{
    $sb45cf = e2l_transliterate($sb45cf);
    $sb45cf = strtr(
        $sb45cf,
        array(' ' => '-', '/' => '-', '<' => '-', '>' => '-', '.' => '-', ',' => '-', ':' => '-', '&' => '-and-',)
    );
    $sb45cf = preg_replace('/\-+/', '-', $sb45cf);
    $sb45cf = preg_replace('/[^a-z0-9-\']*/i', '', $sb45cf);
    $sb45cf = strtolower($sb45cf);
    if (__LOG) {
        __log('Gen urlname');
    }
    $result = $sb45cf;
    $db1bc2 = '2';
    while (m812d($result) !== false) {
        $result = $sb45cf . '-' . $db1bc2;
        ++$db1bc2;
    }
    return $result;
}

function d3873($kda3ad = 'Keyword')
{
    global $settings;
    $aa6168 = null;
    if (CACHE_TAGS and is_file(CACHE_FILENAME_TAGS)) {
        $aa6168 = @unserialize(jcdf0(CACHE_FILENAME_TAGS));
    }
    if (!is_array($aa6168)) {
        if (p0738("SELECT * FROM `" . $settings['db']['table_prefix'] . "Keywords` ORDER BY `" . $kda3ad . "`")) {
            $pfa816 = j0d6b();
        } else {
            $pfa816 = array();
        }
        $aa6168 = array();
        foreach ($pfa816 as $oe358e) {
            $aa6168[] = $oe358e;
        }
        if (CACHE_TAGS) {
            c6e52(CACHE_FILENAME_TAGS, serialize($aa6168));
        }
    }
    return $aa6168;
}

function oa463($d21158, $kda3ad = 'Keyword')
{
    global $settings;
    if (p0738(
        "SELECT `" . $settings['db']['table_prefix'] . "Keywords`.* " . "FROM `" . $settings['db']['table_prefix'] . "Keywords`, " . "`" . $settings['db']['table_prefix'] . "NotesKeywords` " . "WHERE `" . $settings['db']['table_prefix'] . "NotesKeywords`.NoteID=" . ((int)$d21158) . " AND " . "`" . $settings['db']['table_prefix'] . "Keywords`.ID=" . "`" . $settings['db']['table_prefix'] . "NotesKeywords`.KeywordID " . "ORDER BY `" . $kda3ad . "`"
    )
    ) {
        $pfa816 = j0d6b();
    } else {
        $pfa816 = array();
    }
    $n59aeb = array();
    foreach ($pfa816 as $oe358e) {
        $n59aeb[] = $oe358e;
    }
    return $n59aeb;
}

function p7d5e($nd7df5)
{
    global $settings;
    if (p0738(
        "SELECT `URLName` FROM `" . $settings['db']['table_prefix'] . "Keywords` " . "WHERE `Keyword`='" . p7928(
            $nd7df5
        ) . "'"
    )
    ) {
        $pfa816 = j0d6b();
    } else {
        $pfa816 = array();
    }
    if (isset ($pfa816[0]['URLName'])) {
        return $pfa816[0]['URLName'];
    } else {
        return false;
    }
}

function i0188($nd7df5)
{
    global $settings;
    if (p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Keywords` " . "WHERE `Keyword`='" . p7928($nd7df5) . "'"
    )
    ) {
        $g8ce4b = j0d6b();
        if (isset ($g8ce4b[0])) {
            return $g8ce4b[0];
        }
    }
    return null;
}

function m812d($ud7ca3)
{
    global $settings;
    if (p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Keywords` " . "WHERE `URLName`='" . p7928($ud7ca3) . "'"
    )
    ) {
        $pfa816 = j0d6b();
    } else {
        $pfa816 = array();
    }
    if (isset ($pfa816[0])) {
        return $pfa816[0];
    } else {
        return false;
    }
}

function f4e28($zb80bb)
{
    global $settings;
    if (p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Keywords` " . "WHERE `ID`='" . ((int)$zb80bb) . "'"
    )
    ) {
        $g8ce4b = j0d6b();
        if (isset ($g8ce4b[0])) {
            $g8ce4b = $g8ce4b[0];
            return $g8ce4b;
        } else {
            return null;
        }
    }
    return null;
}

function e2m_comment($parameters = array())
{
    e2_go_to(e83c8('e2m_note', $parameters));
    die;
}

function e2m_comment_edit($parameters = array())
{
    return z4fb7('edit', $parameters);
}

function e2m_note_comment($parameters = array())
{
    return z4fb7('write', $parameters);
}

function z4fb7($p60cd8, $parameters = array())
{
    global $_strings, $full_blog_url, $settings;
    $qd5d3d = $ef74f5 = $_strings['pt--new-comment'];
    $p69b97 = 'new';
    if ($p60cd8 == 'edit') {
        $m4032b = e2_commentrec_with_parameters_($parameters);
        $ic50d0 = $_strings['fb--save-changes'];
        $p39a37 = $m4032b['noterec'];
        $qd5d3d = $ef74f5 = $_strings['pt--edit-comment'];
        $p69b97 = $maca8d['ID'];
        if (!$m4032b) {
            return e2_error404_mode();
        }
        $o80f02 = array(
            '.note-id' => $m4032b['NoteID'],
            '.comment-id' => $m4032b['ID'],
            '.already-subscribed?' => false,
            '.from' => substr($_SERVER['HTTP_REFERER'], strlen($full_blog_url) + 1),
            'create:edit?' => false,
            'form-action' => e83c8('e2s_comment_process'),
            'submit-text' => $ic50d0,
            'show-subscribe?' => true,
            'subscribe?' => (bool)$m4032b['IsSubscriber'],
            'name' => htmlspecialchars($m4032b['AuthorName'], ENT_COMPAT, HSC_ENC),
            'email' => htmlspecialchars($m4032b['AuthorEmail'], ENT_COMPAT, HSC_ENC),
            'text' => htmlspecialchars($m4032b['Text'], ENT_COMPAT, HSC_ENC),
            'email-field-name' => 'elton-john',
        );
    } else {
        $p39a37 = $parameters['*note'];
        $o80f02 = i66aa($p39a37);
    }
    return array('title' => $qd5d3d, 'heading' => $ef74f5, 'form' => 'form-comment', 'form-comment' => $o80f02,);
}

function e2m_comment_reply($parameters = array())
{
    global $_strings, $settings;
    $m4032b = e2_commentrec_with_parameters_($parameters);
    if (!$m4032b) {
        return e2_error404_mode();
    }
    $p39a37 = $m4032b['noterec'];
    $t1aec6 = p86f8($p39a37, $m4032b, $parameters['comment-number']);
    $t1aec6['_']['_id'] = $m4032b['ID'];
    $t1aec6['_']['_ord'] = 0;
    $t1aec6['_']['_ord_max'] = 0;
    $t1aec6['replying?'] = (bool)true;
    $g817c7 = ($m4032b['Reply'] == '' or !$m4032b['IsReplyVisible']);
    $qd5d3d = $g817c7 ? $_strings['pt--reply-to-comment'] : $_strings['pt--edit-reply-to-comment'];
    $x4dc70 = array(
        '.note-id' => $p39a37['ID'],
        '.comment-id' => $m4032b['ID'],
        '.reply-action' => $g817c7 ? 'new' : 'edit',
        'form-action' => e83c8('e2s_comment_edit_reply'),
        'submit-text' => $g817c7 ? $_strings['fb--publish'] : $_strings['fb--save-changes'],
        'create:edit?' => (bool)($g817c7),
        'reply-text' => htmlspecialchars($m4032b['Reply'], ENT_COMPAT, HSC_ENC),
        'mail-back?' => (bool)($g817c7),
    );
    return array(
        'title' => $qd5d3d,
        'heading' => $qd5d3d,
        'comments' => array('only' => $t1aec6),
        'form' => 'form-comment-reply',
        'form-comment-reply' => $x4dc70,
    );
}

function e2m_comment_delete($parameters = array())
{
    global $_strings, $settings, $ucbcce;
    if (!@$settings['comments']['on']) {
        return e2_error404_mode();
    }
    $m4032b = e2_commentrec_with_parameters_($parameters);
    $d21158 = $m4032b['NoteID'];
    if (!$m4032b) {
        return e2_error404_mode();
    }
    e2_drop_caches_for_note_($d21158);
    if (p0738(
        "DELETE FROM `" . $settings['db']['table_prefix'] . "Comments` " . "WHERE `ID` = '" . ((int)$m4032b['ID']) . "'"
    )
    ) {
        @unlink(USER_FOLDER . '/last-comment.psa');
    } else {
        e8a40($_strings['er--error-removing-comment']);
    }
    y4930();
    die;
}

function e2m_comment_reply_delete($parameters = array())
{
    global $_strings, $settings;
    if (!@$settings['comments']['on']) {
        return e2_error404_mode();
    }
    $m4032b = e2_commentrec_with_parameters_($parameters);
    if (!$m4032b) {
        return e2_error404_mode();
    }
    if (p0738(
        "UPDATE `" . $settings['db']['table_prefix'] . "Comments` SET " . "`Reply`='', " . "`IsReplyFavourite`='0' " . "WHERE `ID`=" . ((int)$m4032b['ID'])
    )
    ) {
    } else {
        e8a40($_strings['er--error-removing-comment-reply']);
    }
    y4930();
    die;
}

function e2m_unsubscribe($parameters)
{
    global $_strings, $settings;
    $u70a17 = "ORDER BY `ID` DESC";
    $p39a37 = $parameters['*note'];
    $d21158 = $p39a37['ID'];
    $i0c83f = $parameters['unsubscribe-email'];
    $j1bc29 = $parameters['unsubscribe-key'];
    $i0c83f = str_replace(' ', '+', $i0c83f);
    if ($d21158) {
        if (p0738(
            "SELECT `ID`, `Stamp` FROM `" . $settings['db']['table_prefix'] . "Comments` " . "WHERE `NoteID`=" . $d21158 . " AND `IsSubscriber`=1 AND `AuthorEmail`='" . $i0c83f . "' " . $u70a17
        )
        ) {
            $result = j0d6b();
            if (count($result) < 1) {
                $e2cb9d['unsubscription-status']['success?'] = false;
                $e2cb9d['unsubscription-status']['error-message'] = $_strings['gs--you-are-not-subscribed'];
            } else {
                $n06d4c = @$result[0];
                $n97f69 = md5($n06d4c['ID'] . $n06d4c['Stamp'] . 'x');
                $l260ca = false;
                if ($j1bc29 == $n97f69) {
                    if (p0738(
                        "UPDATE `" . $settings['db']['table_prefix'] . "Comments` SET `IsSubscriber`=0 " . "WHERE `NoteID`=" . $d21158 . " AND `AuthorEmail` = '" . p7928(
                            $i0c83f
                        ) . "'"
                    )
                    ) {
                        $l260ca = true;
                        $e2cb9d['unsubscription-status']['success?'] = true;
                        $e2cb9d['unsubscription-status']['note-title'] = l6f10(
                            htmlspecialchars(gea9c($p39a37), ENT_COMPAT, HSC_ENC)
                        );
                        $e2cb9d['unsubscription-status']['note-href'] = e83c8('e2m_note', array('*note' => $p39a37));
                    }
                }
                if (!$l260ca) {
                    $e2cb9d['unsubscription-status']['success?'] = false;
                    $e2cb9d['unsubscription-status']['error-message'] = $_strings['gs--unsubscription-didnt-work'];
                }
            }
        } else {
            $e2cb9d['unsubscription-status']['success?'] = false;
            $e2cb9d['unsubscription-status']['error-message'] = $_strings['gs--comment-not-found'];
        }
    } else {
        $e2cb9d['unsubscription-status']['success?'] = false;
        $e2cb9d['unsubscription-status']['error-message'] = $_strings['gs--post-not-found'];
    }
    return $e2cb9d;
}

function e2m_comment_flag($parameters)
{
    k6e30($parameters);
    e2_go_to(e83c8('e2m_note', $parameters));
    die;
}

function e2m_comment_flag_ajax($parameters)
{
    if (k6e30($parameters)) {
        $u67142 = $parameters;
        $u67142['value'] = !$parameters['value'];
        if ($parameters['value'] == 1) {
            $v99859 = e83c8('e2m_comment_flag_ajax', $u67142);
            $z1fa03 = 'on-rehref|' . $v99859;
        } else {
            $v99859 = e83c8('e2m_comment_flag_ajax', $u67142);
            $z1fa03 = 'off-rehref|' . $v99859;
        }
    } else {
        $z1fa03 = 'error';
    }
    if (array_key_exists('result', $_POST) and ($_POST['result'] == 'ajaxresult')) {
        die ($z1fa03);
    } else {
        e2_go_to(e83c8('e2m_note', $parameters));
        die;
    }
}

function k6e30($parameters)
{
    $m4032b = e2_commentrec_with_parameters_($parameters);
    $d21158 = $m4032b['NoteID'];
    $result = false;
    if ($m4032b) {
        $result = eaa79(
            'Comments',
            array('ID' => $m4032b['ID'], $parameters['flag'] => (int)($parameters['value'] == 1),)
        );
        e2_drop_caches_for_note_($d21158);
    }
    return $result;
}

function e2s_comment_process()
{
    global $_strings, $settings, $_fp_error;
    list ($d21158, $p69b97, $p9d090) = l1a90();
    if (!$p69b97) {
        $f05c36 = '';
        if ($_fp_error == FP_NOT_COMMENTABLE) {
            e8a40($_strings['er--post-not-commentable']);
        } elseif ($_fp_error == FP_EMPTY_FIELD) {
            e8a40($_strings['er--name-email-text-required']);
        } elseif ($_fp_error == FP_COMMENT_TOO_LONG) {
            $oaa731 = $_strings['gs--comment-too-long'];
            $f05c36 = $_strings['gs--comment-too-long-description'];
        } elseif ($_fp_error == FP_COMMENT_DOUBLE_POST) {
            $oaa731 = $_strings['gs--comment-double-post'];
            $f05c36 = $_strings['gs--comment-double-post-description'];
        } elseif ($_fp_error == FP_COMMENT_SPAM_SUSPECT) {
            $oaa731 = $_strings['gs--comment-spam-suspect'];
            $f05c36 = $_strings['gs--comment-spam-suspect-description'];
        } else {
            e8a40($_strings['er--error-occurred'] . ' (' . $_fp_error . ')');
        }
        if ($f05c36) {
            $e2cb9d['title'] = $oaa731;
            $e2cb9d['heading'] = $oaa731;
            $e2cb9d['form'] = 'form-unaccepted-comment';
            $e2cb9d['form-unaccepted-comment'] = array(
                'reason' => $f05c36,
                'text' => @htmlspecialchars($p9d090['text'], ENT_COMPAT, HSC_ENC),
            );
            return $e2cb9d;
        }
    }
    e2_go_to(e83c8('e2m_note', array('*note' => p4627($d21158))));
    die;
}

function e2s_comment_edit_reply()
{
    global $_strings, $settings, $u57de2;
    $fe84af = @$_POST['text'];
    if (trim($fe84af) == '') {
        $fe84af = '';
    }
    $d21158 = @$_POST['note-id'];
    $taad65 = p4627($d21158);
    $p69b97 = @$_POST['comment-id'];
    $n06d4c = gb559($p69b97);
    $z54eb6 = isset ($_POST['mail-back']);
    $d54fa9 = time();
    if (@$_POST['reply-action'] == 'new') {
        $se0e30 = time();
    }
    @unlink(e2_note_cache_filename_with_id_($d21158 . '-comments'));
    if ($n06d4c and p0738(
            "UPDATE `" . $settings['db']['table_prefix'] . "Comments` SET " . "`Reply`='" . p7928(
                $fe84af
            ) . "', " . (isset ($se0e30) ? ("`ReplyStamp`='" . $se0e30 . "', ") : ("")) . "`ReplyLastModified`='" . $d54fa9 . "', " . "`IsReplyVisible`='1' " . "WHERE `ID`=" . ((int)$p69b97)
        )
    ) {
        $ld58c0 = e83c8('e2m_note', array('*note' => $taad65));
        if ($z54eb6 and $fe84af != '') {
            $kc6827['comment-time'] = array($n06d4c['Stamp'], t5c05());
            $kc6827['commenter'] = $n06d4c['AuthorName'];
            $kc6827['commenter-email'] = $n06d4c['AuthorEmail'];
            $kc6827['comment-text'] = $n06d4c['Text'];
            $kc6827['note-title'] = l6f10(gea9c($taad65));
            $kc6827['reply-time'] = array(time(), t5c05());
            $kc6827['blog-author'] = x2640();
            $kc6827['note-href'] = $ld58c0;
            $kc6827['comment-href'] = $ld58c0;
            $kc6827['reply-text'] = $fe84af;
            if (1) {
                $yde7a3 = b3e5c('comment-reply', $kc6827);
                $ab904c = e2l_get_string('em--comment-reply', $kc6827);
                $p77613 = $n06d4c['AuthorEmail'];
                $d1a49b = 'From: ' . aaed2();
                oa41b($p77613, $ab904c, $yde7a3, $d1a49b);
            }
            if (1) {
                unset ($kc6827['commenter-email']);
                $d1a49b = 'From: ' . aaed2();
                foreach (a4975($taad65, $n06d4c['AuthorEmail']) as $u39c63) {
                    $pba570 = $u39c63['AuthorEmail'];
                    $n6fd85 = md5($u39c63['ID'] . $u39c63['Stamp'] . 'x');
                    $kc6827['unsubscribe-href'] = e83c8(
                        'e2m_unsubscribe',
                        array('*note' => $taad65, 'unsubscribe-email' => $pba570, 'unsubscribe-key' => $n6fd85,)
                    );
                    $p77613 = $pba570;
                    $yde7a3 = b3e5c('comment-reply-to-public', $kc6827);
                    $ab904c = e2l_get_string('em--comment-reply-to-public-subject', $kc6827);
                    oa41b($p77613, $ab904c, $yde7a3, $d1a49b);
                }
            }
        }
        e2_go_to($ld58c0);
        die;
    } else {
        e8a40($_strings['er--error-editing-comment-reply']);
        y4930();
        die;
    }
}

function p86f8($taad65, $n06d4c, $db1bc2 = false)
{
    global $settings, $_config;
    if (__LOG) {
        __log('Comments: package comment <' . $n06d4c['ID'] . '>...');
    }
    if ($taad65 === null) {
        $taad65 = p4627($n06d4c['NoteID']);
    }
    if ($db1bc2 !== false) {
        $kc6827['number'] = $db1bc2;
    }
    $kc6827['name'] = htmlspecialchars($n06d4c['AuthorName'], ENT_NOQUOTES, HSC_ENC);
    if (ne852()) {
        $kc6827['email'] = htmlspecialchars($n06d4c['AuthorEmail'], ENT_NOQUOTES, HSC_ENC);
        if ('' != trim($n06d4c['IP'])) {
            $kc6827['ip'] = $n06d4c['IP'];
            $kc6827['ip-href'] = $_config['whois_service'] . $kc6827['ip'];
        }
    }
    $kc6827['author-name'] = x2640();
    $kc6827['visible?'] = (bool)$n06d4c['IsVisible'];
    $kc6827['important?'] = (bool)$n06d4c['IsFavourite'];
    $kc6827['reply-visible?'] = (bool)($n06d4c['IsVisible'] && $n06d4c['IsReplyVisible']);
    $kc6827['reply-important?'] = (bool)$n06d4c['IsReplyFavourite'];
    $kc6827['spam-suspect?'] = (bool)$n06d4c['IsSpamSuspect'];
    $u10a7e = array((int)$n06d4c['Stamp'], a0923($taad65));
    $kc6827['time'] = $u10a7e;
    $kc6827['last-modified'] = $u10a7e;
    if ($n06d4c['LastModified']) {
        $kc6827['last-modified'] = array((int)$n06d4c['LastModified'], a0923($taad65));
    }
    if ($n06d4c['ReplyStamp']) {
        $kc6827['reply-time'] = array((int)$n06d4c['ReplyStamp'], a0923($taad65));
    }
    if ($n06d4c['ReplyLastModified']) {
        $kc6827['reply-last-modified'] = array(
            (int)$n06d4c['ReplyLastModified'],
            a0923($taad65)
        );
    }
    if (ne852()) {
        $kc6827['subscriber?'] = (bool)$n06d4c['IsSubscriber'];
        $kc6827['new?'] = (bool)$n06d4c['IsNew'];
        $kc6827['first-new?'] = false;
        if ($n06d4c['IsFavourite']) {
            $kc6827['important-toggle-href'] = e83c8(
                'e2m_comment_flag_ajax',
                array('*note' => $taad65, 'comment-number' => $db1bc2, 'flag' => 'IsFavourite', 'value' => 0)
            );
        } else {
            $kc6827['important-toggle-href'] = e83c8(
                'e2m_comment_flag_ajax',
                array('*note' => $taad65, 'comment-number' => $db1bc2, 'flag' => 'IsFavourite', 'value' => 1)
            );
        }
        if ($n06d4c['IsReplyFavourite']) {
            $kc6827['reply-important-toggle-href'] = e83c8(
                'e2m_comment_flag_ajax',
                array('*note' => $taad65, 'comment-number' => $db1bc2, 'flag' => 'IsReplyFavourite', 'value' => 0)
            );
        } else {
            $kc6827['reply-important-toggle-href'] = e83c8(
                'e2m_comment_flag_ajax',
                array('*note' => $taad65, 'comment-number' => $db1bc2, 'flag' => 'IsReplyFavourite', 'value' => 1)
            );
        }
        $kc6827['edit-href'] = e83c8('e2m_comment_edit', array('*note' => $taad65, 'comment-number' => $db1bc2));
        $kc6827['removed-toggle-href'] = e83c8(
            'e2m_comment_flag_ajax',
            array(
                '*note' => $taad65,
                'comment-number' => $db1bc2,
                'flag' => 'IsVisible',
                'value' => !$n06d4c['IsVisible']
            )
        );
        $kc6827['removed-reply-toggle-href'] = e83c8(
            'e2m_comment_flag_ajax',
            array(
                '*note' => $taad65,
                'comment-number' => $db1bc2,
                'flag' => 'IsReplyVisible',
                'value' => !$n06d4c['IsReplyVisible']
            )
        );
        $de36ef = e83c8('e2m_comment_reply', array('*note' => $taad65, 'comment-number' => $db1bc2));
        if ($n06d4c['Reply'] == '' or !$n06d4c['IsReplyVisible']) {
            $kc6827['reply-href'] = $de36ef;
        } else {
            $kc6827['edit-reply-href'] = $de36ef;
        }
    }
    $t2bfe4 = t154e($taad65['FormatterID'], $n06d4c['Text'], 'simple');
    $kc6827['text'] = $t2bfe4['text-final'];
    $kc6827['replying?'] = (bool)false;
    $kc6827['replied?'] = (bool)((trim($n06d4c['Reply']) != '') && ($n06d4c['IsReplyVisible']));
    $t2bfe4 = t154e($taad65['FormatterID'], $n06d4c['Reply'], 'full');
    $kc6827['reply'] = $t2bfe4['text-final'];
    if (array_key_exists('_', $n06d4c)) {
        $kc6827['_'] = $n06d4c['_'];
    }
    if (__LOG) {
        __log('Comments: done');
    }
    return $kc6827;
}

function gb559($zb80bb)
{
    global $settings;
    if (p0738("SELECT * FROM `" . $settings['db']['table_prefix'] . "Comments` " . "WHERE `ID` = '" . $zb80bb . "'")) {
        $pfa816 = j0d6b();
        if (count($pfa816) > 0) {
            return $pfa816[0];
        }
    }
    return false;
}

function oe5b6($v0604c)
{
    e2_comment_set_flag('IsVisible', $v0604c);
}

function z3183($i0dd2c)
{
    e2_comment_set_flag('IsReplyVisible', $i0dd2c);
}

function i66aa($dea59a)
{
    global $_strings;
    $ke3cb9 = @$_COOKIE[y8c3b('commenter_name')];
    $qf92ee = @$_COOKIE[y8c3b('commenter_email')];
    $b3d682 = @$_COOKIE[y8c3b('commenter_ph')];
    $r92399 = false;
    if ($qf92ee and cookie_unsubscribe_key) {
        foreach (a4975($dea59a) as $u39c63) {
            $n97f69 = md5($u39c63['ID'] . $u39c63['Stamp'] . 'x');
            if ($u39c63['AuthorEmail'] == $qf92ee and $b3d682 == $n97f69) {
                $r92399 = true;
                break;
            }
        }
    }
    $ic50d0 = $_strings['fb--submit'];
    $o80f02 = array(
        '.note-id' => $dea59a['ID'],
        '.comment-id' => 'new',
        '.already-subscribed?' => (bool)$r92399,
        'create:edit?' => true,
        'form-action' => e83c8('e2s_comment_process'),
        'submit-text' => $ic50d0,
        'show-subscribe?' => (bool)!$r92399,
        'subscribe?' => (bool)$r92399,
        'subscription-status' => $r92399 ? $_strings['gs--you-are-already-subscribed'] : '',
        'visible?' => true,
        'email-field-name' => 'elton-john',
        'name' => htmlspecialchars($ke3cb9, ENT_COMPAT, HSC_ENC),
        'email' => htmlspecialchars($qf92ee, ENT_COMPAT, HSC_ENC),
        'text' => htmlspecialchars($n06d4c['Text'], ENT_COMPAT, HSC_ENC),
    );
    return $o80f02;
}

function z254f($d21158, $odaf19 = 0)
{
    global $settings;
    if (!$odaf19) {
        $qf79b1 = ' AND `IsVisible`=1';
    }
    if ('all' === $odaf19) {
        $qf79b1 = '';
    }
    if ('new' === $odaf19) {
        $qf79b1 = ' AND `IsNew`=1';
    }
    $wbc751 = 0;
    if (p0738(
        "SELECT count(*) FROM `" . $settings['db']['table_prefix'] . "Comments` " . "WHERE `NoteID`=" . @$d21158 . @$qf79b1
    )
    ) {
        $result = j0d6b();
        $result = (int)$result[0]['count(*)'];
        $wbc751 = $result;
    }
    return (int)$wbc751;
}

function n2a6b()
{
    global $settings;
    $le2942 = 0;
    $x7ec7e = '';
    $pe8fab = '';
    if (p0738(
        "SELECT `NoteID`, `Text` FROM `" . $settings['db']['table_prefix'] . "Comments` " . "WHERE `IsNew`=1 ORDER BY `Stamp`"
    )
    ) {
        $result = j0d6b();
        $le2942 = count($result);
        $x7ec7e = array();
        foreach ($result as $sf1965) {
            $t2bfe4 = yb7f1(str_replace("\n", ' ', $sf1965['Text']), 'simple');
            $x7ec7e[] = strip_tags($t2bfe4['text-final']);
        }
        $x7ec7e = implode(' &bull; ', $x7ec7e);
        if (mb_strlen($x7ec7e) > 512) {
            $x7ec7e = mb_substr($x7ec7e, 0, 509) . '...';
        }
        if ($le2942) {
            $d21158 = $result[0]['NoteID'];
            $pe8fab = e83c8('e2m_note', array('*note' => p4627($d21158)));
        } else {
            $pe8fab = '';
        }
    }
    return array((int)$le2942, $x7ec7e, $pe8fab);
}

function b1baf($d21158, $j641f6)
{
    global $settings;
    if (__LOG) {
        __log('Comments: getting comments for note ' . $d21158);
    }
    if (p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Comments` " . "WHERE `NoteID`=" . @$d21158 . " " . @$qf79b1 . " " . $j641f6
    )
    ) {
        $result = j0d6b();
        return $result;
    }
    return array();
}

function a4975($taad65, $wd1cc6 = '')
{
    global $settings;
    $u70a17 = "ORDER BY `ID` DESC";
    $e2cb9d = $maf67c = array();
    if (p0738(
        "SELECT DISTINCT `ID`, `Text`, `IsSubscriber`, `AuthorName`, `AuthorEmail`, `Stamp` " . "FROM `" . $settings['db']['table_prefix'] . "Comments` " . "WHERE `NoteID`=" . @$taad65['ID'] . " " . "AND `IsSubscriber`=1 " . "AND `AuthorEmail`!='" . p7928(
                $wd1cc6
            ) . "' " . $u70a17
    )
    ) {
        $result = j0d6b();
        foreach ($result as $u39c63) {
            if (!in_array($u39c63['AuthorEmail'], $maf67c)) {
                $e2cb9d[] = $u39c63;
            }
            $maf67c[] = $u39c63['AuthorEmail'];
        }
    }
    return $e2cb9d;
}

function sb387($taad65, $j3f917 = NOTE_COMMENTABLE_NOW)
{
    global $settings, $_config;
    $p61f40 = $settings['comments']['on'];
    $b8f888 = $taad65['IsPublished'];
    $lbdb20 = true;
    if (@$settings['comments']['fresh_only']) {
        if (isset ($_config['comment_freshness_days'])) {
            if ($taad65['Stamp'] < time() - $_config['comment_freshness_days'] * SECONDS_IN_A_DAY
            ) {
                $lbdb20 = false;
            }
        }
    }
    $rc770a = $taad65['IsCommentable'];
    if ($j3f917 == NOTE_COMMENTABLE_NOW_CONDITIONALLY) {
        $rc770a = true;
    }
    $o825ff = $taad65['IsVisible'];
    return $p61f40 and $b8f888 and $lbdb20 and $rc770a and $o825ff;
}

function e2_commentrec_with_parameters_($parameters = array())
{
    $p39a37 = $parameters['*note'];
    $va5d49 = b1baf($p39a37['ID'], "ORDER BY `Stamp`");
    $m4032b = @$va5d49[$parameters['comment-number'] - 1];
    if ($m4032b) {
        $m4032b['noterec'] = $p39a37;
        return $m4032b;
    }
}

function l1a90($r98ea6 = '')
{
    global $settings, $ucbcce, $_config, $_fp_error;
    $_fp_error = false;
    $zbe16c = 'elton-john';
    $d21158 = $p69b97 = $bb0689 = $i0c83f = $l1cb25 = '';
    if (array_key_exists('note-id', $_POST)) {
        $d21158 = trim(@$_POST['note-id']);
    }
    if (array_key_exists('comment-id', $_POST)) {
        $p69b97 = trim(@$_POST['comment-id']);
    }
    if (array_key_exists('name', $_POST)) {
        $bb0689 = trim(@$_POST['name']);
    }
    if (array_key_exists($zbe16c, $_POST)) {
        $i0c83f = trim(@$_POST[$zbe16c]);
    }
    if (array_key_exists('text', $_POST)) {
        $l1cb25 = trim(@$_POST['text']);
    }
    $s07d3d = ((array_key_exists('already-subscribed', $_POST) and $_POST['already-subscribed']) or (array_key_exists(
                'subscribe',
                $_POST
            ) and $_POST['subscribe']));
    $w20612 = time();
    $p9d090['text'] = $l1cb25;
    if ($p69b97 == 'new') {
        cc64a('commenter_name', $bb0689);
        cc64a('commenter_email', $i0c83f);
    }
    $a848b5 = ($p69b97 == 'new' and (array_key_exists('email', $_POST) and $_POST['email'] != ''));
    $vc2b1a = 1;
    $result = false;
    if (!$d21158) {
        $_fp_error = FP_NO_ID_OR_NEW;
    } elseif (!$p69b97) {
        $_fp_error = FP_NO_ID_OR_NEW;
    } else {
        if ($p69b97 and $bb0689 == '' or $i0c83f == '' or $l1cb25 == '') {
            $_fp_error = FP_EMPTY_FIELD;
        }
        if ($p69b97 == 'new') {
            $o795f1 = @unserialize(jcdf0(USER_FOLDER . '/last-comment.psa'));
            if (md5($bb0689 . $i0c83f . $l1cb25) == $o795f1['md5']) {
                $_fp_error = FP_COMMENT_DOUBLE_POST;
            }
            if (isset ($_config['max_comment_length']) and strlen(@$_POST['text']) > ($_config['max_comment_length'])) {
                $_fp_error = FP_COMMENT_TOO_LONG;
            }
            $p39a37 = p4627($d21158);
            if ($p69b97 == 'new' and !sb387($p39a37)) {
                $_fp_error = FP_NOT_COMMENTABLE;
            }
            if ($a848b5) {
                $_fp_error = FP_COMMENT_SPAM_SUSPECT;
            }
        }
    }
    if (!$_fp_error) {
        e2_drop_caches_for_note_($d21158);
        if ($p69b97 == 'new') {
            $m4032b = array(
                'NoteID' => (int)$d21158,
                'AuthorName' => p7928($bb0689),
                'AuthorEmail' => p7928($i0c83f),
                'Text' => p7928($l1cb25),
                'IsVisible' => 1,
                'IsAnswerAware' => 1,
                'IsSubscriber' => (int)$s07d3d,
                'IsSpamSuspect' => (int)$a848b5,
                'IsNew' => (int)$vc2b1a,
                'Stamp' => (int)time(),
                'LastModified' => (int)time(),
                'IP' => p7928($_SERVER['REMOTE_ADDR']),
            );
            if (($m4032b = h9943('Comments', $m4032b)) !== false) {
                $p69b97 = $m4032b['ID'];
                $o795f1 = array('id' => $p69b97, 'md5' => md5($bb0689 . $i0c83f . $l1cb25),);
                c6e52(USER_FOLDER . '/last-comment.psa', serialize($o795f1));
                $result = (int)$p69b97;
                $y303ee = md5($m4032b['ID'] . $m4032b['Stamp'] . 'x');
                cc64a('commenter_ph', $y303ee);
                $w60422 = z254f($d21158, 'all') - 1 + 1;
                $taad65 = p4627($d21158);
                $ld58c0 = e83c8('e2m_note', array('*note' => $taad65));
                $kc6827['comment-time'] = array($w20612, t5c05());
                $kc6827['commenter'] = $bb0689;
                $kc6827['commenter-email'] = $i0c83f;
                $kc6827['comment-text'] = $l1cb25;
                $kc6827['note-title'] = gea9c($taad65);
                $kc6827['note-href'] = $ld58c0;
                $kc6827['comment-href'] = $ld58c0;
                $kc6827['comments-disable-href'] = e83c8(
                    'e2m_note_flag',
                    array('*note' => $taad65, 'flag' => 'IsCommentable', 'value' => 0)
                );
                $kc6827['reply-href'] = e83c8(
                    'e2m_comment_reply',
                    array('*note' => $taad65, 'comment-number' => $w60422)
                );
                if (isset ($settings['user']['email']) and @$settings['notifications']['new_comments']) {
                    $yde7a3 = b3e5c('comment-new-to-author', $kc6827);
                    $ab904c = e2l_get_string('em--comment-new-to-author-subject', $kc6827);
                    $p77613 = $settings['user']['email'];
                    $d1a49b = 'From: ' . aaed2() . "\r\n" . 'Reply-to: ' . $bb0689 . ' <' . $i0c83f . ">";
                    oa41b($p77613, $ab904c, $yde7a3, $d1a49b);
                }
                if (!$a848b5) {
                    unset ($kc6827['commenter-email']);
                    $d1a49b = 'From: ' . aaed2();
                    foreach (a4975($taad65, $i0c83f) as $u39c63) {
                        $pba570 = $u39c63['AuthorEmail'];
                        $n6fd85 = md5($u39c63['ID'] . $u39c63['Stamp'] . 'x');
                        $kc6827['unsubscribe-href'] = e83c8(
                            'e2m_unsubscribe',
                            array('*note' => $taad65, 'unsubscribe-email' => $pba570, 'unsubscribe-key' => $n6fd85)
                        );
                        $p77613 = $pba570;
                        $yde7a3 = b3e5c('comment-new-to-public', $kc6827);
                        $ab904c = e2l_get_string('em--comment-new-to-public-subject', $kc6827);
                        oa41b($p77613, $ab904c, $yde7a3, $d1a49b);
                    }
                }
            } else {
                $_fp_error = FP_INSERT_ERROR;
            }
        } else {
            $dfd6f3 = array(
                'ID' => $p69b97,
                'AuthorName' => $bb0689,
                'AuthorEmail' => $i0c83f,
                'Text' => $l1cb25,
                'IsSubscriber' => ((int)$s07d3d),
                'LastModified' => time(),
            );
            if (eaa79('Comments', $dfd6f3)) {
                $result = (int)$p69b97;
            } else {
                $_fp_error = FP_UPDATE_ERROR;
            };
        }
    }
    if ($r98ea6 == 'ajaxresult') {
        return $z1fa03;
    } else {
        return array((int)$d21158, $result, $p9d090);
    }
}

function e2m_most_commented()
{
    global $settings, $_strings, $_config;
    $ca0acf = @$_GET['period'];
    if ($ca0acf == '') {
        $ca0acf = $_config['hot_period'];
    }
    $q632a2 = time() - m35c3($ca0acf);
    $qf79b1 = "AND `IsVisible`=1 ";
    if (ne852()) {
        $qf79b1 = '';
    }
    return pd864(
        array(
            'query' => "SELECT `IsVisible`, `Stamp`, `NoteID` ID, count(*) c " . "FROM `" . $settings['db']['table_prefix'] . "Comments` " . "WHERE (`Stamp` > " . $q632a2 . ") " . $qf79b1 . "GROUP BY `NoteID` " . "ORDER BY c " . "DESC " . "LIMIT " . $settings['appearance']['notes_per_page'],
            'query-returns-only-ids' => 1,
            'limit' => $settings['appearance']['notes_per_page'],
            'class' => 'most-commented',
            'title' => e2l_get_string('pt--most-commented', array('period' => $ca0acf)),
            'heading' => e2l_get_string('pt--most-commented', array('period' => $ca0acf)),
            'no-notes-text' => $_strings['gs--no-such-notes'],
        )
    );
}

function e2m_favourites($parameters = array())
{
    global $settings, $_strings;
    $qf79b1 = "AND `IsVisible`=1 ";
    if (ne852()) {
        $qf79b1 = '';
    }
    return pd864(
        array(
            'query' => "SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 AND `IsFavourite`=1 " . $qf79b1 . "ORDER BY `Stamp` DESC",
            'page' => $parameters['page'],
            'candy' => 'e2m_favourites',
            'parameters' => $parameters,
            'class' => 'favourites',
            'title' => $_strings['pt--favourites'],
            'heading' => $_strings['pt--favourites'],
            'no-notes-text' => $_strings['gs--no-favourites'],
        )
    );
}

function m35c3($ca0acf)
{
    if ('year' == $ca0acf) {
        return SECONDS_IN_A_YEAR;
    } elseif ('month' == $ca0acf) {
        return SECONDS_IN_A_MONTH;
    } elseif ('week' == $ca0acf) {
        return SECONDS_IN_A_DAY * 7;
    } elseif ('day' == $ca0acf) {
        return SECONDS_IN_A_DAY;
    } else {
        return PHP_INT_MAX;
    }
}

function b09d1()
{
    global $settings, $t097cc, $_config;
    $ca0acf = $_config['hot_period'];
    if (__LOG) {
        __log('Hot list: working...');
    }
    $xe919a = c7f78();
    $ta44c0 = null;
    if (CACHE_HOT and is_file(CACHE_FILENAME_HOT) and is_file(CACHE_FILENAME_HOT_EXPIRES)) {
        $ta44c0 = @unserialize(jcdf0(CACHE_FILENAME_HOT));
        $p85e91 = (int)@jcdf0(CACHE_FILENAME_HOT_EXPIRES);
    }
    if (CACHE_HOT and is_array($ta44c0) and (time() < $p85e91)) {
        if (__LOG) {
            __log('Hot list: retrieve cached ctree');
        }
        $ldbb0c = $ta44c0;
    } else {
        if (__LOG) {
            __log('Hot list: assemle cacheable ctree...');
        }
        $q632a2 = time() - m35c3($ca0acf);
        $a4358b = array();
        if (p0738(
            "SELECT `Stamp`, `NoteID` ID, count(*) c " . "FROM `" . $settings['db']['table_prefix'] . "Comments` " . "WHERE `Stamp` > " . $q632a2 . " AND IsVisible='1'" . "GROUP BY `NoteID` " . "ORDER BY c DESC LIMIT 10"
        )
        ) {
            $result = j0d6b();
            $ldbb0c = array();
            foreach ($result as $g8ce4b => $p39a37) {
                $p39a37 = p4627($p39a37['ID']);
                if ($p39a37['IsVisible'] and $p39a37['IsPublished']) {
                    $taad65['_']['_id'] = $p39a37['ID'];
                    $taad65['_']['_ord'] = $g8ce4b;
                    $taad65['_']['_ord_max'] = count($result) - 1;
                    $taad65['href'] = e83c8('e2m_note', array('*note' => $p39a37));
                    $taad65['time'] = array($p39a37['Stamp'], a0923($p39a37));
                    $taad65['title'] = l6f10(htmlspecialchars(gea9c($p39a37), ENT_NOQUOTES, HSC_ENC));
                    $ldbb0c[] = $taad65;
                }
            }
            $ta44c0 = $ldbb0c;
            if (CACHE_HOT) {
                c6e52(CACHE_FILENAME_HOT, serialize($ta44c0));
                c6e52(CACHE_FILENAME_HOT_EXPIRES, time() + SECONDS_IN_A_DAY);
            }
        }
    }
    foreach ($ldbb0c as $g8ce4b => $c9e366) {
        $ldbb0c[$g8ce4b]['current?'] = ($ldbb0c[$g8ce4b]['href'] == $t097cc);
    }
    if (__LOG) {
        __log('Hot list: done in ' . round(c7f78() - $xe919a, 3));
    }
    return $ldbb0c;
}

function laca6()
{
    global $settings;
    $xa2e48 = 'a:0:{}';
    if (CACHE_FAVS and is_file(CACHE_FILENAME_FAVS)) {
        return filesize(CACHE_FILENAME_FAVS) > strlen($xa2e48);
    }
    if (p0738(
        "SELECT * " . "FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 AND `IsFavourite`=1 AND `IsVisible`=1 " . "LIMIT 1"
    )
    ) {
        $result = j0d6b();
        if (count($result) > 0) {
            if (CACHE_FAVS) {
                c6e52(CACHE_FILENAME_FAVS, serialize('favourites-exist'));
            }
            return true;
        } else {
            if (CACHE_FAVS) {
                c6e52(CACHE_FILENAME_FAVS, $xa2e48);
            }
            return false;
        }
    }
}

function b3385()
{
    global $settings, $t097cc;
    if (__LOG) {
        __log('Favourites list: working...');
    }
    $xe919a = c7f78();
    $yffbd2 = null;
    if (CACHE_FAVS and is_file(CACHE_FILENAME_FAVS)) {
        $yffbd2 = @unserialize(jcdf0(CACHE_FILENAME_FAVS));
    }
    if (CACHE_FAVS and is_array($yffbd2)) {
        if (__LOG) {
            __log('Favourites list: retrieve cached ctree');
        }
        $ldbb0c = $yffbd2;
    } else {
        if (__LOG) {
            __log('Favourites list: assemle cacheable ctree...');
        }
        $ldbb0c = array();
        if (p0738(
            "SELECT `IsPublished`, `ID`, `Title`, `Stamp`, `Offset`, `IsDST` " . "FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 AND `IsFavourite`=1 AND `IsVisible`=1 " . "ORDER BY `Stamp` DESC " . "LIMIT 10"
        )
        ) {
            $result = j0d6b();
            foreach ($result as $g8ce4b => $p39a37) {
                $taad65['_']['_id'] = $p39a37['ID'];
                $taad65['_']['_ord'] = $g8ce4b;
                $taad65['_']['_ord_max'] = count($result) - 1;
                $taad65['href'] = e83c8('e2m_note', array('*note' => $p39a37));
                $taad65['time'] = array($p39a37['Stamp'], a0923($p39a37));
                $taad65['title'] = l6f10(htmlspecialchars(gea9c($p39a37), ENT_NOQUOTES, HSC_ENC));
                $ldbb0c[] = $taad65;
            }
            $yffbd2 = $ldbb0c;
            if (CACHE_FAVS) {
                c6e52(CACHE_FILENAME_FAVS, serialize($yffbd2));
            }
        }
    }
    foreach ($ldbb0c as $g8ce4b => $c9e366) {
        $ldbb0c[$g8ce4b]['current?'] = ($ldbb0c[$g8ce4b]['href'] == $t097cc);
    }
    if (__LOG) {
        __log('Favourites list: done in ' . round(c7f78() - $xe919a, 3));
    }
    return $ldbb0c;
}

function e2m_password()
{
    global $settings, $_strings;
    $e2cb9d['title'] = $_strings['pt--password'];
    $e2cb9d['heading'] = $_strings['pt--password-for-blog'];
    $e2cb9d['form'] = 'form-password';
    $e2cb9d['form-password'] = array(
        'form-action' => e83c8('e2s_password_save'),
        'submit-text' => $_strings['fb--change'],
    );
    return $e2cb9d;
}

function e2m_sessions()
{
    global $settings, $_strings;
    $a2d6d8 = b7785();
    $e2cb9d['title'] = $_strings['pt--sessions'];
    $e2cb9d['heading'] = $_strings['pt--sessions'];
    $w161bc = array();
    $k3c6e0 = $_COOKIE[y8c3b('key')];
    foreach ($a2d6d8['sessions'] as $g8ce4b => $c9e366) {
        $w161bc[] = array(
            'current?' => c4c49($k3c6e0) == $c9e366['key_hash'],
            'opened' => array((int)$c9e366['stamp'], p3211()),
            'ip-address' => $c9e366['remote_ip'],
            'source' => ($c9e366['remote_ip'] == '127.0.0.1') ? $_strings['gs--locally'] : $c9e366['remote_ip'],
            'title' => kcc31($c9e366['ua']),
            'user-agent' => $c9e366['ua'] ? $c9e366['ua'] : $_strings['gs--unknown'],
        );
    }
    $w161bc = array_reverse($w161bc);
    $e2cb9d['sessions']['each'] = $w161bc;
    if (count($w161bc) > 1) {
        $e2cb9d['form'] = 'form-sessions';
        $e2cb9d['form-sessions'] = array(
            'form-action' => e83c8('e2s_drop_other_sessions'),
            'submit-text' => $_strings['fb--end-all-sessions-but-this'],
        );
    }
    return $e2cb9d;
}

function e2m_sign_in()
{
    if (ne852()) {
        e2_go_to(e83c8('e2m_frontpage'));
    } else {
        return array();
    }
}

function e2m_sign_out()
{
    $a2d6d8 = b7785();
    $n48bb9 = -1;
    if (array_key_exists('sessions', $a2d6d8) and is_array($a2d6d8['sessions'])) {
        foreach ($a2d6d8['sessions'] as $g8ce4b => $c9e366) {
            $k3c6e0 = $_COOKIE[y8c3b('key')];
            if (c4c49($k3c6e0) == $c9e366['key_hash']) {
                $n48bb9 = $g8ce4b;
                break;
            }
        }
    }
    if ($n48bb9 > -1) {
        unset ($a2d6d8['sessions'][$n48bb9]);
    }
    if (!w1d21($a2d6d8)) {
        e8a40($_strings['er--cannot-write-auth-data']);
    }
    cc64a('key', '');
    y4930();
    die;
}

function e2s_password_save()
{
    global $settings, $_strings;
    $g88162 = trim($_POST['password']);
    if ($g88162 != '' and c6e52(USER_FOLDER . '/password-hash.psa', serialize(c4c49($g88162)))) {
        e8a40($_strings['gs--password-changed']);
        e2_go_to();
    } else {
        e8a40($_strings['er--could-not-change-password']);
        e2_go_to(e83c8('e2m_password'));
    }
    die;
}

function e2s_sign_in_necessary()
{
    e2_go_to(e83c8('e2m_sign_in'));
    die;
}

function e2s_sign_in()
{
    global $_strings;
    $a2d6d8 = b7785();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $z5f4dc = @$_POST['password'];
        $a6bc8e = @$_POST['is_public_pc'];
    } else {
        $z5f4dc = @$_GET['password'];
        $a6bc8e = false;
    }
    if (ta8cf($z5f4dc)) {
        $n21d6f = array(
            'stamp' => time(),
            'remote_ip' => $_SERVER['REMOTE_ADDR'],
            'key_hash' => ke8ed($a6bc8e),
            'ua' => $_SERVER['HTTP_USER_AGENT'],
        );
        $a2d6d8['sessions'][] = $n21d6f;
    } elseif (strlen(trim($z5f4dc)) > 0) {
        e8a40($_strings['er--wrong-password']);
    }
    if (!w1d21($a2d6d8)) {
        e8a40($_strings['er--cannot-write-auth-data']);
    }
    y4930();
    die;
}

function e2s_drop_other_sessions()
{
    global $_strings;
    $a2d6d8 = b7785();
    foreach ($a2d6d8['sessions'] as $g8ce4b => $c9e366) {
        $k3c6e0 = $_COOKIE[y8c3b('key')];
        if (c4c49($k3c6e0) == $c9e366['key_hash']) {
            $n21d6f = $c9e366;
            break;
        }
    }
    $a2d6d8['sessions'] = array($n21d6f);
    if (!w1d21($a2d6d8)) {
        e8a40($_strings['er--cannot-write-auth-data']);
    }
    y4930();
    die;
}

function ta8cf($z5f4dc)
{
    $c8e9a8 = @unserialize(jcdf0(USER_FOLDER . '/password-hash.psa'));
    return (c4c49($z5f4dc) == $c8e9a8 and trim($z5f4dc) != '');
}

function ke8ed($w2a2a4 = false)
{
    global $settings;
    $k3c6e0 = q2a24();
    $y3f363 = c4c49($k3c6e0);
    cc64a('key', $k3c6e0, !$w2a2a4);
    return $y3f363;
}

function ne852()
{
    global $z1c0b7, $settings, $_auth_sessions;
    if (isset ($z1c0b7)) {
        return $z1c0b7;
    }
    $z1c0b7 = false;
    if (isset ($_COOKIE[y8c3b('key')])) {
        $k3c6e0 = $_COOKIE[y8c3b('key')];
        $a2d6d8 = b7785();
        $g0f83b = array();
        if (array_key_exists('sessions', $a2d6d8) and is_array($a2d6d8['sessions'])) {
            foreach ($a2d6d8['sessions'] as $n21d6f) {
                $g0f83b[] = $n21d6f['key_hash'];
            }
            $_auth_sessions['count'] = count($a2d6d8['sessions']);
        }
        if (1) {
            $z1c0b7 = (bool)in_array(c4c49($k3c6e0), $g0f83b);
        }
        if (!$z1c0b7) {
            cc64a('key', '');
        }
    }
    return $z1c0b7;
}

function c4c49($v25d90)
{
    if (function_exists('sha1')) {
        return sha1($v25d90);
    } else {
        return substr(md5($v25d90) . md5(' ' . $v25d90), 0, 40);
    }
}

function b7785()
{
    if (is_file(USER_FOLDER . 'auth.psa')) {
        $a2d6d8 = unserialize(@file_get_contents(USER_FOLDER . 'auth.psa'));
        if ($a2d6d8) {
            return $a2d6d8;
        }
    }
    return array();
}

function w1d21($a2d6d8)
{
    return wcd2d(USER_FOLDER . 'auth.psa', serialize($a2d6d8));
}

function bff2e()
{
    if ($k3c6e0 = $_COOKIE[y8c3b('key')]) {
        return 'Cookie: ' . y8c3b('key') . '=' . $k3c6e0 . "\r\n";
    }
    return '';
}

function fe68c($ic48ba)
{
    global $_strings;
    $m74546 = array(
        'e2m_write' => 'write',
        'e2m_note_edit' => 'note-edit',
        'e2m_note_withdraw' => 'note-withdraw',
        'e2m_comment_edit' => 'comment-edit',
        'e2m_comment_reply' => 'comment-reply',
        'e2m_drafts' => 'drafts',
        'e2m_draft' => 'draft',
        'e2m_tag_edit' => 'tag-edit',
        'e2m_name_and_author' => 'name-and-author',
        'e2m_settings' => 'settings',
        'e2m_password' => 'password',
        'e2m_database' => 'database',
        'e2m_sessions' => 'sessions',
    );
    if (array_key_exists($ic48ba, $m74546)) {
        return e2l_get_string(
            'gs--need-password-for-action',
            array('action' => $_strings['gs--np-action-' . $m74546[$ic48ba]])
        );
    } else {
        return $_strings['gs--need-password'];
    }
}

function kcc31($b5269f)
{
    global $_strings;
    if (strstr($b5269f, 'iPhone')) {
        return $_strings['gs--ua-iphone'];
    }
    if (strstr($b5269f, 'iPad')) {
        return $_strings['gs--ua-ipad'];
    }
    if (strstr($b5269f, 'Opera')) {
        $e2cb9d = $_strings['gs--ua-opera'];
    }
    if (strstr($b5269f, 'Firefox')) {
        $e2cb9d = $_strings['gs--ua-firefox'];
    }
    if (strstr($b5269f, 'Chrome')) {
        $e2cb9d = $_strings['gs--ua-chrome'];
    }
    if (strstr($b5269f, 'Safari') and !strstr($b5269f, 'Chrome')) {
        $e2cb9d = $_strings['gs--ua-safari'];
    }
    if (!$e2cb9d) {
        $e2cb9d = $_strings['gs--ua-unknown'];
    }
    if (strstr($b5269f, 'Macintosh')) {
        if ($e2cb9d) {
            $e2cb9d .= ' ' . $_strings['gs--ua-for-mac'];
        }
    }
    return $e2cb9d;
}

function e2j_check_password()
{
    $c8e9a8 = @unserialize(jcdf0(USER_FOLDER . '/password-hash.psa'));
    $z5f4dc = '';
    if (array_key_exists('password', $_POST)) {
        $z5f4dc = $_POST['password'];
    }
    if (c4c49($z5f4dc) == $c8e9a8 and trim($z5f4dc) != '') {
        die ('password-correct');
    }
    die ('password-wrong');
}

function q2a24()
{
    $vb04ec = '';
    $hb8d1b = '0123456789abcdef';
    for ($j865c0 = 0; $j865c0 < 40; $j865c0++) {
        $vb04ec .= $hb8d1b[mt_rand(0, 15)];
    }
    $vb04ec .= time();
    $vb04ec = c4c49($vb04ec);
    return $vb04ec;
}

$_candies_installer = array(
    'e2s_build',
    'e2m_info',
    'e2m_install',
    'e2j_check_db_config',
    'e2j_list_databases',
    'e2s_instantiate',
    'e2s_install',
    'e2s_update_perform',
);
$_candies_public = array(
    'e2m_info',
    'e2m_frontpage',
    'e2m_frontpage_rss',
    'e2m_note',
    'e2m_note_comment',
    'e2m_note_comments_rss',
    'e2m_tags',
    'e2m_tag',
    'e2m_tag_rss',
    'e2m_favourites',
    'e2m_most_commented',
    'e2m_found',
    'e2m_found_rss',
    'e2m_comments',
    'e2m_everything',
    'e2m_year',
    'e2m_month',
    'e2m_day',
    'e2m_unsubscribe',
    'e2m_sign_out',
    'e2s_sign_in',
    'e2s_comment_process',
    'e2s_search',
    'e2s_scale_image',
    'e2j_check_password',
);
$_candies_sidebarable = array(
    'e2m_frontpage',
    'e2m_note',
    'e2m_tags',
    'e2m_tag',
    'e2m_favourites',
    'e2m_most_commented',
    'e2m_found',
    'e2m_comments',
    'e2m_everything',
    'e2m_year',
    'e2m_month',
    'e2m_day',
    'e2m_drafts',
);
$_candies_spawning = array(
    'e2m_frontpage',
    'e2m_note',
    'e2m_year',
    'e2m_month',
    'e2m_day',
    'e2m_write',
    'e2m_drafts',
    'e2m_draft',
    'e2m_name_and_author',
    'e2m_settings',
    'e2m_password',
    'e2m_database',
    'e2m_timezone',
    'e2m_sessions',
);
$_candies_public = array_merge($_candies_public, $_candies_installer);
$_candies_unabortable = array();
$_candies_parents = array('e2m_note' => 'e2m_tag', 'e2m_tag' => 'e2m_tags',);
$_candies_indexable = array('e2m_note',);
$_candies_indexable_conditionally = array(
    'e2m_frontpage',
    'e2m_tag',
    'e2m_favourites',
    'e2m_most_commented',
    'e2m_found',
    'e2m_tags',
    'e2m_everything',
);
$_candies_ajax = array(
    'e2j_check_db_config',
    'e2j_list_databases',
    'e2j_check_password',
    'e2j_userpic_upload',
    'e2j_file_upload',
    'e2j_file_remove',
    'e2j_note_livesave',
    'e2m_note_flag_favourite',
    'e2m_comment_flag_ajax',
    'e2m_tag_flag_ajax',
);
function e2_modes($parameters)
{
    global $y11755, $content, $settings, $e1e2ad, $full_blog_url, $z589b3, $_config, $_strings, $s_addurl, $stopwatch, $_candy, $_db_error, $_candies_sidebarable;
    if (!is_array($parameters)) {
        $parameters = array();
    }
    if (array_key_exists('~', $parameters)) {
        $l71860 = $parameters['~'];
    }
    if (e2_is_installed()) {
        $content['content-page?'] = false;
        if (in_array($_candy, $_candies_sidebarable)) {
            $content['content-page?'] = true;
            if (__LOG) {
                __log('Modes: favourites block');
            }
            if (laca6()) {
                $content['favourites'] = array(
                    'title' => $_strings['nm--favourites'],
                    'href' => e83c8('e2m_favourites'),
                );
                if (@$settings['appearance']['favourites_frontpage']) {
                    $content['favourites']['each'] = b3385();
                }
            }
            if ($settings['comments']['on']) {
                if (__LOG) {
                    __log('Modes: hot block');
                }
                $j2888a = b09d1();
                if (count($j2888a) > 0) {
                    $content['most-commented'] = array(
                        'title' => $_strings['nm--most-commented'],
                        'href' => e83c8('e2m_most_commented'),
                    );
                    if ((@$settings['appearance']['hot_frontpage'])) {
                        $content['most-commented']['each'] = $j2888a;
                    }
                }
            }
            if (__LOG) {
                __log('Modes: tags block');
            }
            if (count(d3873()) > 0) {
                $content['tags-menu']['each'] = yaf16($parameters);
                $content['tags-menu']['not-empty?'] = count($content['tags-menu']['each']);
            }
        }
    }
}

function n6f51()
{
    global $settings, $_strings;
    if (array_key_exists('site_title', $settings) and trim($settings['site_title']) != '') {
        return trim($settings['site_title']);
    } else {
        return $_strings['e2--default-blog-title'];
    }
}

function x2640()
{
    global $settings, $_strings;
    if (array_key_exists('author', $settings) and trim($settings['author']) != '') {
        return trim($settings['author']);
    } else {
        return $_strings['e2--default-blog-author'];
    }
}

function e2m_info()
{
    global $settings, $_config, $u57de2, $ra57c1, $_template;
    $zf1f71 = array(
        'E2_VERSION' => E2_VERSION,
        'E2_RELEASE' => E2_RELEASE,
        'E2_UA_STRING' => E2_UA_STRING,
        '---',
        'installed' => (bool)e2_is_installed(),
        'server_name' => $u57de2,
        'folder_on_server' => $ra57c1,
        '---',
        'request_logging' => $_config['request_logging'],
        'default formatter' => $_config['default_formatter'],
        '---',
        'theme' => $settings['template'],
        '---',
        'Olba name' => $_template['name'],
        'Olba max_image_width' => $_template['max_image_width'],
        'Olba stack' => $_template['stack'],
        '---',
        'Neasden' => substr(md5(file_get_contents('system/neasden/neasden.php')), 0, 4),
        '---',
    );
    echo '<pre>';
    foreach ($zf1f71 as $g8ce4b => $c9e366) {
        if ($c9e366 == '---') {
            echo "\n";
            continue;
        }
        echo str_pad($g8ce4b, 24);
        echo '\'';
        print_r($c9e366);
        echo '\'';
        echo "\n";
    }
    echo '</pre>';
    die;
}

function e2m_frontpage($parameters = array())
{
    global $settings, $_config, $_strings;
    $l71860 = $parameters['page'];
    $jd7e5d = $settings['appearance']['notes_per_page'];
    $g06d2e = l8ca0(true, true);
    if (ne852()) {
        $g06d2e += l8ca0(true, false);
    }
    $cae0fe = ceil($g06d2e / $jd7e5d);
    $fd29bb = CACHE_FILENAME_FRONTPAGE;
    if (ne852()) {
        $fd29bb = CACHE_FILENAME_FRONTPAGE_AUTHOR;
    }
    if ($l71860 < 1) {
        return e2_error404_mode();
    }
    if (CACHE_FRONTPAGE and $l71860 == 1 and is_file($fd29bb)) {
        $a4358b = @unserialize(jcdf0($fd29bb));
    }
    if (CACHE_FRONTPAGE and $l71860 == 1 and is_array($a4358b)) {
    } else {
        if (($result = r50d7('web', $l71860)) === false) {
            e8a40($_strings['er--cannot-show-latest-notes']);
            return array('title' => htmlspecialchars(n6f51(), ENT_NOQUOTES, HSC_ENC),);
        }
        $a4358b = array();
        if (count($result) > 0) {
            foreach ($result as $g8ce4b => $taad65) {
                $taad65['_']['_id'] = $taad65['ID'];
                $taad65['_']['_title'] = gea9c($taad65);
                $taad65['_']['_ord'] = $g8ce4b;
                $taad65['_']['_ord_max'] = count($result) - 1;
                $fe244c = w6791($taad65);
                $a4358b[] = $fe244c;
            }
        } else {
            if ($l71860 != 1) {
                return e2_error404_mode();
            }
        }
        if (CACHE_FRONTPAGE and $l71860 == 1) {
            c6e52($fd29bb, serialize($a4358b));
        }
    }
    $sb3b32['timeline?'] = true;
    $sb3b32['count'] = $cae0fe;
    $sb3b32['this'] = (int)$l71860;
    if ($cae0fe > 1) {
        if ($l71860 < $cae0fe) {
            $sb3b32['earlier-href'] = e83c8('e2m_frontpage', array('page' => $l71860 + 1));
        }
        if ($l71860 > 1) {
            $sb3b32['later-href'] = e83c8('e2m_frontpage', array('page' => $l71860 - 1));
        }
        $sb3b32['earlier-title'] = $_strings['gs--earlier'];
        $sb3b32['later-title'] = $_strings['gs--later'];
    }
    $qd5d3d = n6f51();
    return array('frontpage?' => (bool)($l71860 == 1), 'title' => $qd5d3d, 'notes' => $a4358b, 'pages' => $sb3b32,);
}

function e2m_frontpage_rss($parameters = array())
{
    global $settings;
    $w8bb85 = '';
    $gf0e70 = 0;
    if (($result = r50d7('rss')) !== false) {
        foreach ($result as $taad65) {
            if ($taad65['IsVisible'] and $taad65['IsPublished']) {
                $w8bb85 .= h307d($taad65);
                $gf0e70 = max($gf0e70, $taad65['Stamp']);
            }
        }
    }
    u7be5(CACHE_FILENAME_FRONTPAGE_RSS, $w8bb85, $gf0e70, $settings['site_title'], e83c8('e2m_frontpage'));
    die;
}

function e2m_note_comments_rss($parameters = array())
{
    global $settings, $_config, $_strings;
    $taad65 = e2_published_noterec_with_parameters_($parameters);
    $gf0e70 = 0;
    if (($result = b1baf(
            $taad65['ID'],
            "AND `Stamp` > " . (time() - SECONDS_IN_A_MONTH) . " ORDER BY `Stamp` DESC LIMIT " . $_config['rss_items']
        )) !== false
    ) {
        foreach ($result as $n06d4c) {
            if ($n06d4c['IsVisible'] and !$n06d4c['IsSpamSuspect']) {
                $w8bb85 .= lc6e2($taad65, $n06d4c);
                $gf0e70 = max($gf0e70, $n06d4c['Stamp']);
            }
        }
    }
    u7be5(
        '',
        $w8bb85,
        $gf0e70,
        $settings['site_title'] . ', ' . $_strings['gs--comments-on-post'] . ': ' . $taad65['Title'],
        e83c8('e2m_note', array('*note' => $taad65))
    );
    die;
}

function e2m_tag_rss($parameters = array())
{
    global $settings, $_config, $_strings;
    if (array_key_exists('_tagrec', $parameters)) {
        $ue4d23 = $parameters['_tagrec'];
    } else {
        return e2_error404_mode();
    }
    $z56790[] = ("`" . $settings['db']['table_prefix'] . "NotesKeywords`.KeywordID=" . $ue4d23['ID']);
    $z56790 = implode(' OR ', $z56790);
    $tc2b7b = $settings['db']['table_prefix'];
    return wcbfb(
        "INNER JOIN `" . $tc2b7b . "NotesKeywords` " . "ON `" . $tc2b7b . "NotesKeywords`.NoteID=`" . $tc2b7b . "Notes`.ID " . "WHERE (" . $z56790 . ") " . "ORDER BY `" . $tc2b7b . "Notes`.`Stamp` DESC LIMIT " . $_config['rss_items'],
        $settings['site_title'] . ', ' . $_strings['gs--posts-tagged'] . ': ' . $ue4d23['Keyword'],
        e83c8('e2m_tag', $parameters)
    );
}

function e2m_found_rss($parameters = array())
{
    global $_config, $settings, $_strings;
    $parameters['query'] = trim($parameters['query']);
    $l1b1cc = $parameters['query'];
    return wcbfb(
        "WHERE MATCH (`Title`, `Text`) AGAINST ('" . p7928(
            preg_quote($l1b1cc)
        ) . "') ORDER BY `Stamp` DESC LIMIT " . $_config['rss_items'],
        $settings['site_title'] . ', ' . $_strings['gs--search-results'] . ': ' . $l1b1cc,
        e83c8('e2m_found', $parameters)
    );
}

function wcbfb($g15c46, $qd5d3d, $f2a304)
{
    global $settings;
    $w8bb85 = '';
    $gf0e70 = 0;
    if ((p0738(
            "SELECT `" . $settings['db']['table_prefix'] . "Notes`.* " . "FROM `" . $settings['db']['table_prefix'] . "Notes` " . $g15c46
        )) !== false
    ) {
        $result = j0d6b();
        foreach ($result as $taad65) {
            if ($taad65['IsVisible'] and $taad65['IsPublished']) {
                $w8bb85 .= h307d($taad65);
                $gf0e70 = max($gf0e70, $taad65['Stamp']);
            }
        }
    }
    u7be5('', $w8bb85, $gf0e70, $qd5d3d, $f2a304);
    die;
}

function n3010($qd5d3d, $pe8fab)
{
    global $_newsfeeds;
    $s336a4 = array('title' => $qd5d3d, 'href' => $pe8fab);
    $_newsfeeds[] = $s336a4;
}

function h307d($taad65)
{
    global $settings, $u57de2;
    $u90141 = e83c8('e2m_note', array('*note' => $taad65));
    $n59aeb = lce23($taad65['ID']);
    foreach ($n59aeb as $j865c0 => $nd7df5) {
        $n59aeb[$j865c0] = ('<a href="' . e83c8(
                'e2m_tag',
                array('tag-urlname' => $nd7df5['URLName'])
            ) . '">' . htmlspecialchars($nd7df5['Keyword'], ENT_NOQUOTES, HSC_ENC) . '</a>');
    }
    $w8bb85 = '';
    $w8bb85 .= '<item>';
    $w8bb85 .= '<title>' . (l6f10(htmlspecialchars(gea9c($taad65), ENT_NOQUOTES, HSC_ENC))) . '</title>';
    $w8bb85 .= '<guid isPermaLink="true">' . $u90141 . '</guid>';
    $w8bb85 .= '<link>' . $u90141 . '</link>';
    if (@$settings['comments']['on']) {
        $w8bb85 .= '<comments>' . $u90141 . '</comments>';
    }
    $p67daf = t154e($taad65['FormatterID'], @$taad65['Text'], 'full');
    $p67daf = $p67daf['text-final'];
    $w8bb85 .= '<description>';
    $w8bb85 .= htmlspecialchars($p67daf, ENT_NOQUOTES, HSC_ENC);
    $w8bb85 .= '</description>';
    $f588e0 = ba846('D, d M Y H:i:s ', $taad65['Stamp']) . ud536($taad65['Stamp']);
    $w8bb85 .= '<pubDate>' . $f588e0 . '</pubDate>';
    $w8bb85 .= '</item>';
    return $w8bb85;
}

function lc6e2($taad65, $n06d4c)
{
    global $settings, $u57de2, $_strings;
    $u90141 = e83c8('e2m_note', array('*note' => $taad65));
    $p0ad4f = '<b>' . htmlspecialchars(
            $n06d4c['AuthorName'],
            ENT_NOQUOTES,
            HSC_ENC
        ) . '</b>, ' . $_strings['gs--comment-on-post'] . ' <a href="' . $u90141 . '">"' . l6f10(
            htmlspecialchars(gea9c($taad65), ENT_NOQUOTES, HSC_ENC)
        ) . '"</a>';
    $w8bb85 = '';
    $w8bb85 .= '<item>';
    $w8bb85 .= '<title>' . strip_tags($p0ad4f) . '</title>';
    $w8bb85 .= '<link>' . $u90141 . '</link>';
    $p67daf = $p0ad4f . ':';
    $p67daf .= '<br /><br />';
    $y64be6 = t154e($taad65['FormatterID'], $n06d4c['Text'], 'simple');
    $y64be6 = $y64be6['text-final'];
    $p67daf .= $y64be6;
    $w8bb85 .= '<description>';
    $w8bb85 .= htmlspecialchars($p67daf, ENT_NOQUOTES, HSC_ENC);
    $w8bb85 .= '</description>';
    $f588e0 = ba846('D, d M Y H:i:s ', $n06d4c['Stamp']) . ud536($n06d4c['Stamp']);
    $w8bb85 .= '<pubDate>' . $f588e0 . '</pubDate>';
    $w8bb85 .= '</item>';
    return $w8bb85;
}

function u7be5($i1cd44, $f691d5, $gf0e70, $qd5d3d, $f2a304)
{
    global $settings;
    $content = array(
        'title' => htmlspecialchars($qd5d3d, ENT_NOQUOTES, HSC_ENC),
        'link' => $f2a304,
        'generator' => E2_UA_STRING,
        'items' => $f691d5,
    );
    if (array_key_exists('description', $settings)) {
        $content['description'] = htmlspecialchars($settings['description'], ENT_NOQUOTES, HSC_ENC);
    }
    $r54870 = gmdate('r', $gf0e70);
    $y1872a = md5($gf0e70);
    header('Content-type: application/xml; charset=utf-8');
    header('Last-modified: ' . $r54870);
    header('Etag: ' . $y1872a);
    header('Cache-Control: public');
    header('Expires: ' . date('r', $gf0e70 + SECONDS_IN_A_DAY));
    $r0c3cd = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? stripslashes($_SERVER['HTTP_IF_MODIFIED_SINCE']) : false;
    $oc3522 = isset($_SERVER['HTTP_IF_NONE_MATCH']) ? stripslashes($_SERVER['HTTP_IF_NONE_MATCH']) : false;
    if (!$r0c3cd && !$oc3522 or $oc3522 && $oc3522 != $y1872a or $r0c3cd && $r0c3cd != $r54870) {
        $w92eac = DEFAULTS_FOLDER . 'rss/rss.tmpl.php';
        if (is_file($w92eac)) {
            ob_start();
            include $w92eac;
            $w8bb85 = ob_get_contents();
            ob_end_clean();
        }
        if (!empty ($i1cd44) and !ne852()) {
            c6e52($i1cd44, $w8bb85);
        }
        echo $w8bb85;
    } else {
        header('HTTP/1.1 304 Not Modified');
    }
}

function e2m_year($parameters = array())
{
    global $_strings, $settings;
    $n84cdc = $parameters['year'];
    $c09d6c = e2l_get_string('pt--nth-year', array('year' => $n84cdc));
    if (!k1665($n84cdc)) {
        return e2_error404_mode();
    }
    $we6e7d = gmmktime(0, 0, 0, 1, 1, $n84cdc - 1);
    $a029bd = gmmktime(0, 0, 0, 1, 1, $n84cdc + 1);
    list ($e8aebd, $s5a7f3) = e2__fruitful_neighbours_with_ymd_($n84cdc);
    $ya6d40 = 'e2m_year';
    if ($e8aebd) {
        $sb3b32['prev-href'] = e83c8($ya6d40, e2__parameters_with_timestamp_($e8aebd));
        $sb3b32['prev-jump?'] = (bool)(gmdate('Y', $we6e7d) != gmdate('Y', $e8aebd));
        $sb3b32['prev-title'] = gmdate('Y', $e8aebd);
    }
    if ($s5a7f3) {
        $sb3b32['next-href'] = e83c8($ya6d40, e2__parameters_with_timestamp_($s5a7f3));
        $sb3b32['next-jump?'] = (bool)(gmdate('Y', $a029bd) != gmdate('Y', $s5a7f3));
        $sb3b32['next-title'] = gmdate('Y', $s5a7f3);
    }
    $sb3b32['timeline?'] = false;
    $sb3b32['this'] = $n84cdc;
    $sb3b32['this-title'] = $n84cdc;
    $eb2442 = bcc02('start');
    $y8dbc7 = bcc02('end');
    if ($n84cdc == j5a2f('Y', $eb2442['stamp'], $eb2442['timezone'])) {
        $ufa098 = j5a2f('m', $eb2442['stamp'], $eb2442['timezone']);
    } else {
        $ufa098 = 1;
    }
    if ($n84cdc == ba846('Y', time())) {
        $qfd384 = ba846('m', time());
    } else {
        $qfd384 = 12;
    }
    $t6eac3 = xb92c($n84cdc);
    for ($b7436f = 1; $b7436f <= 12; ++$b7436f) {
        $d7f769 = gmmktime(0, 0, 0, $b7436f, 1, $n84cdc);
        $hd039b[$b7436f] = array(
            'number' => $b7436f,
            'start-time' => array($d7f769, p3211()),
            'href' => gmdate('Y/m/', $d7f769),
            'real?' => $b7436f >= $ufa098 and $b7436f <= $qfd384,
            'fruitful?' => @in_array(gmdate('n', $d7f769), $t6eac3),
        );
    }
    list ($j7b314, $ta1f20) = m5273($n84cdc);
    p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished` = 1 AND `IsVisible` = 1 " . "AND `Stamp` BETWEEN " . $j7b314 . " " . "AND " . $ta1f20 . " " . "ORDER BY `Stamp`"
    );
    $result = j0d6b();
    $a4358b = y28df($result, $n84cdc);
    return array(
        'title' => $c09d6c,
        'heading' => $c09d6c,
        'pages' => $sb3b32,
        'year' => (int)$n84cdc,
        'year-months' => $hd039b,
        'notes-list' => $a4358b,
    );
}

function e2m_month($parameters = array())
{
    global $_strings, $settings;
    $n84cdc = $parameters['year'];
    $b7436f = $parameters['month'];
    $c09d6c = e2l_get_string('pt--nth-month-of-nth-year', array('year' => $n84cdc, 'month' => $b7436f));
    if (!k1665($n84cdc, $b7436f)) {
        return e2_error404_mode();
    }
    $we6e7d = gmmktime(0, 0, 0, $b7436f - 1, 1, $n84cdc);
    $a029bd = gmmktime(0, 0, 0, $b7436f + 1, 1, $n84cdc);
    list ($e8aebd, $s5a7f3) = e2__fruitful_neighbours_with_ymd_($n84cdc, $b7436f);
    $ya6d40 = 'e2m_month';
    if ($e8aebd) {
        $sb3b32['prev-href'] = e83c8($ya6d40, e2__parameters_with_timestamp_($e8aebd));
        $sb3b32['prev-jump?'] = (bool)(gmdate('Y/m', $we6e7d) != gmdate('Y/m', $e8aebd));
        $sb3b32['prev-title'] = e2l_get_string(
            'gs--nth-month-of-nth-year',
            array('year' => gmdate('Y', $e8aebd), 'month' => gmdate('n', $e8aebd))
        );
    }
    if ($s5a7f3) {
        $sb3b32['next-href'] = e83c8($ya6d40, e2__parameters_with_timestamp_($s5a7f3));
        $sb3b32['next-jump?'] = (bool)(gmdate('Y/m', $a029bd) != gmdate('Y/m', $s5a7f3));
        $sb3b32['next-title'] = e2l_get_string(
            'gs--nth-month-of-nth-year',
            array('year' => gmdate('Y', $s5a7f3), 'month' => gmdate('n', $s5a7f3))
        );
    }
    $sb3b32['timeline?'] = false;
    $sb3b32['this-title'] = $c09d6c;
    list ($j7b314, $ta1f20) = m5273($n84cdc, $b7436f);
    p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished` = 1 AND `IsVisible` = 1 " . "AND `Stamp` BETWEEN " . $j7b314 . " " . "AND " . $ta1f20 . " " . "ORDER BY `Stamp`"
    );
    $result = j0d6b();
    $a4358b = y28df($result, $n84cdc, $b7436f);
    $ve70c4['title'] = $c09d6c;
    $ve70c4['heading'] = $c09d6c;
    $ve70c4['pages'] = $sb3b32;
    $ve70c4['year'] = (int)$n84cdc;
    $ve70c4['month'] = (int)$b7436f;
    $ve70c4['month-days'] = e2_pack_month_days_with_ymd_($n84cdc, $b7436f, false);
    $ve70c4['notes-list'] = $a4358b;
    return $ve70c4;
}

function e2m_day($parameters = array())
{
    global $_strings;
    $n84cdc = (int)$parameters['year'];
    $b7436f = (int)$parameters['month'];
    $j628b7 = (int)$parameters['day'];
    if (!(k1665($n84cdc, $b7436f, $j628b7))) {
        return e2_error404_mode();
    }
    $c09d6c = e2l_get_string(
        'pt--nth-day-of-nth-month-of-nth-year',
        array('year' => $n84cdc, 'month' => $b7436f, 'day' => $j628b7)
    );
    $we6e7d = gmmktime(0, 0, 0, $b7436f, $j628b7 - 1, $n84cdc);
    $a029bd = gmmktime(0, 0, 0, $b7436f, $j628b7 + 1, $n84cdc);
    list ($e8aebd, $s5a7f3) = e2__fruitful_neighbours_with_ymd_($n84cdc, $b7436f, $j628b7);
    $ya6d40 = 'e2m_day';
    if ($e8aebd) {
        $sb3b32['prev-href'] = e83c8($ya6d40, e2__parameters_with_timestamp_($e8aebd));
        $sb3b32['prev-jump?'] = (bool)(gmdate('Y/m/d', $we6e7d) != gmdate('Y/m/d', $e8aebd));
        $sb3b32['prev-title'] = e2l_get_string(
            'gs--nth-day-of-nth-month-of-nth-year',
            array('year' => gmdate('Y', $e8aebd), 'month' => gmdate('n', $e8aebd), 'day' => gmdate('j', $e8aebd),)
        );
    }
    if ($s5a7f3) {
        $sb3b32['next-href'] = e83c8($ya6d40, e2__parameters_with_timestamp_($s5a7f3));
        $sb3b32['next-jump?'] = (bool)(gmdate('Y/m/d', $a029bd) != gmdate('Y/m/d', $s5a7f3));
        $sb3b32['next-title'] = e2l_get_string(
            'gs--nth-day-of-nth-month-of-nth-year',
            array('year' => gmdate('Y', $s5a7f3), 'month' => gmdate('n', $s5a7f3), 'day' => gmdate('j', $s5a7f3),)
        );
    }
    $sb3b32['timeline?'] = false;
    $sb3b32['this-title'] = $c09d6c;
    if (($result = rf9fb($n84cdc, $b7436f, $j628b7)) !== false) {
        $result = array_reverse($result);
        foreach ($result as $g8ce4b => $taad65) {
            if ($taad65['IsVisible'] or ne852()) {
                $taad65['_']['_id'] = $taad65['ID'];
                $taad65['_']['_ord'] = k;
                $taad65['_']['_ord_max'] = count($result) - 1;
                $a4358b[] = w6791($taad65);
            }
        }
    }
    $ve70c4['title'] = $c09d6c;
    $ve70c4['heading'] = $c09d6c;
    $ve70c4['pages'] = $sb3b32;
    $ve70c4['notes'] = $a4358b;
    $ve70c4['month-days'] = e2_pack_month_days_with_ymd_($n84cdc, $b7436f, $j628b7);
    return $ve70c4;
}

function e2m_everything($parameters = array())
{
    global $_strings, $settings;
    $a4358b = null;
    if (CACHE_FULLLIST and is_file(CACHE_FILENAME_FULLLIST)) {
        $a4358b = @unserialize(jcdf0(CACHE_FILENAME_FULLLIST));
        if (__LOG) {
            __log('Everything: retrieving from cache...');
        }
    }
    if (!is_array($a4358b)) {
        if (__LOG) {
            __log('Everything: retrieving from database...');
        }
        p0738(
            "SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished` = 1 AND `IsVisible` = 1 " . "ORDER BY `Stamp`"
        );
        $result = j0d6b();
        if (__LOG) {
            __log('Everything: preparing notes list...');
        }
        $a4358b = y28df($result);
        if (__LOG) {
            __log('Everything: saving cache...');
        }
        if (CACHE_FULLLIST) {
            c6e52(CACHE_FILENAME_FULLLIST, serialize($a4358b));
        }
    }
    $o1f525 = count($a4358b);
    $c09d6c = e2l_get_string('pt--n-posts', array('number' => $o1f525));
    if (array_key_exists('part', $_GET) and array_key_exists('of', $_GET)) {
        if (__LOG) {
            __log('Everything: splitting into parts...');
        }
        $kf4c93 = $_GET['part'];
        $e8bf88 = $_GET['of'];
        $c09d6c .= ' (' . e2l_get_string('gs--part-x-of-y', array('part' => $kf4c93, 'of' => $e8bf88)) . ')';
        $u895e3 = $o1f525 / $e8bf88;
        $bd98a0 = ($kf4c93 - 1) * $u895e3;
        $z01b6e = $kf4c93 * $u895e3;
        $a4358b = array_slice($a4358b, round($bd98a0), round($z01b6e - round($bd98a0)));
    }
    if (__LOG) {
        __log('Everything: done, returning');
    }
    return array('class' => 'everything', 'title' => $c09d6c, 'heading' => $c09d6c, 'notes-list' => $a4358b,);
}

function e2_pack_month_days_with_ymd_($n84cdc, $b7436f, $j628b7)
{
    $ca6933 = j5a2f('t', gmmktime(0, 0, 0, $b7436f, 1, $n84cdc), p3211());
    $eb2442 = bcc02('start');
    $y8dbc7 = bcc02('end');
    if ($n84cdc . '/' . $b7436f == j5a2f('Y/n', $eb2442['stamp'], $eb2442['timezone'])) {
        $c42eb4 = j5a2f('d', $eb2442['stamp'], $eb2442['timezone']);
    } else {
        $c42eb4 = 1;
    }
    if ($n84cdc . '/' . $b7436f == ba846('Y/n', time())) {
        $fd5f50 = ba846('d', time());
    } else {
        $fd5f50 = $ca6933;
    }
    $ve4602 = e82dc($n84cdc, $b7436f);
    for ($j865c0 = 1; $j865c0 <= $ca6933; ++$j865c0) {
        $d7f769 = gmmktime(0, 0, 0, $b7436f, $j865c0, $n84cdc);
        $u271c1[$j865c0] = array(
            'number' => $j865c0,
            'start-time' => array($d7f769, p3211()),
            'href' => gmdate('Y/m/d/', $d7f769),
            'this?' => (bool)($j865c0 == $j628b7),
            'real?' => $j865c0 >= $c42eb4 and $j865c0 <= $fd5f50,
            'fruitful?' => @in_array(gmdate('d', $d7f769), $ve4602),
        );
    }
    return $u271c1;
}

function k1665($n84cdc, $b7436f = false, $j628b7 = false)
{
    $eb2442 = bcc02('start');
    if ($eb2442 === false) {
        return false;
    }
    $ac1f1e = j5a2f('Y', $eb2442['stamp'], $eb2442['timezone']);
    $webeb3 = ba846('Y', time());
    if ($b7436f === false) {
        return (bool)($n84cdc >= $ac1f1e and $n84cdc <= $webeb3);
    } else {
        $j782fc = j5a2f('n', $eb2442['stamp'], $eb2442['timezone']);
        $x13dd1 = ba846('n', time());
        if ($j628b7 === false) {
            return (bool)($b7436f >= 1 and $b7436f <= 12 and (($n84cdc > $ac1f1e and $n84cdc < $webeb3) or ($n84cdc == $ac1f1e and $b7436f >= $j782fc) or ($n84cdc == $webeb3 and $b7436f <= $x13dd1)));
        } else {
            $j7a9c0 = j5a2f('j', $eb2442['stamp'], $eb2442['timezone']);
            $m23209 = ba846('j', time());
            if (1) {
                return (bool)(checkdate(
                        $b7436f,
                        $j628b7,
                        $n84cdc
                    ) and (($n84cdc > $ac1f1e and $n84cdc < $webeb3) or ($n84cdc == $ac1f1e and $b7436f > $j782fc) or ($n84cdc == $ac1f1e and $b7436f == $j782fc and $j628b7 >= $j7a9c0) or ($n84cdc == $webeb3 and $b7436f < $x13dd1) or ($n84cdc == $webeb3 and $b7436f == $x13dd1 and $j628b7 <= $m23209)));
            }
        }
    }
}

function e2__fruitful_neighbours_with_ymd_($n41529, $w6f8f5 = false, $u8277e = false)
{
    global $settings, $_db;
    list ($t3d2fa, $j9468c) = m5273($n41529, $w6f8f5, $u8277e);
    $rada4b = SECONDS_IN_A_DAY;
    if ($u8277e === false) {
        $rada4b = SECONDS_IN_A_MONTH;
    }
    if ($w6f8f5 === false) {
        $rada4b = SECONDS_IN_A_YEAR;
    }
    if (!ne852()) {
        $qf79b1 = "`IsVisible`=1 AND ";
    }
    if (q0f7c()) {
        $_db['result'] = mysql_query(
            "SELECT `Stamp`, `Offset`, `IsDST` " . "FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 AND " . @$qf79b1 . "Stamp < '" . ($j9468c - $rada4b) . "' " . "ORDER BY Stamp DESC",
            $_db['link']
        );
        while ($p6438c = @mysql_fetch_array($_db['result'], MYSQL_ASSOC)) {
            list ($n84cdc, $b7436f, $j628b7) = explode('/', j5a2f('Y/n/j', $p6438c['Stamp'], a0923($p6438c)));
            $l7474d = $n41529 * 10000 + ($w6f8f5 ? ($w6f8f5 * 100) : 0) + ($u8277e ? $u8277e : 0);
            $ibd8da = $n84cdc * 10000 + ($w6f8f5 ? ($b7436f * 100) : 0) + ($u8277e ? $j628b7 : 0);
            if ($ibd8da < $l7474d) {
                $vbf025 = gmmktime(0, 0, 0, $b7436f, $j628b7, $n84cdc);
                break;
            }
        }
        $_db['result'] = mysql_query(
            "SELECT `Stamp`, `Offset`, `IsDST` " . "FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 AND " . @$qf79b1 . "Stamp > '" . ($t3d2fa + $rada4b) . "' " . "ORDER BY Stamp",
            $_db['link']
        );
        while ($p6438c = @mysql_fetch_array($_db['result'], MYSQL_ASSOC)) {
            list ($n84cdc, $b7436f, $j628b7) = explode('/', j5a2f('Y/n/j', $p6438c['Stamp'], a0923($p6438c)));
            $l7474d = $n41529 * 10000 + ($w6f8f5 ? ($w6f8f5 * 100) : 0) + ($u8277e ? $u8277e : 0);
            $ibd8da = $n84cdc * 10000 + ($w6f8f5 ? ($b7436f * 100) : 0) + ($u8277e ? $j628b7 : 0);
            if ($ibd8da > $l7474d) {
                $k8dc98 = gmmktime(0, 0, 0, $b7436f, $j628b7, $n84cdc);
                break;
            }
        }
        return array($vbf025, $k8dc98);
    }
}

function e2__parameters_with_timestamp_($u96b8c)
{
    list ($parameters['year'], $parameters['month'], $parameters['day']) = explode('/', gmdate('Y/m/d', $u96b8c));
    return $parameters;
}

function y28df($ic2d18, $n84cdc = false, $b7436f = false)
{
    $i229c3 = 0;
    $a4358b = array();
    $df09d8 = '';
    $a4358b = array();
    foreach ($ic2d18 as $g8ce4b => $p39a37) {
        $ma88c7 = j5a2f('Y/m/d', $p39a37['Stamp'], a0923($p39a37));
        if ($ma88c7 != $df09d8) {
            $i229c3 = 0;
        }
        $df09d8 = $ma88c7;
        ++$i229c3;
        list ($n41529, $w6f8f5, $u8277e) = explode('/', $ma88c7);
        $taad65['href'] = e83c8(
            'e2m_note',
            array('year' => $n41529, 'month' => $w6f8f5, 'day' => $u8277e, 'day-number' => $i229c3,)
        );
        $taad65['time'] = array((int)$p39a37['Stamp'], a0923($p39a37));
        $taad65['last-modified'] = array((int)$p39a37['LastModified'], a0923($p39a37));
        $taad65['favourite?'] = (bool)($p39a37['IsFavourite'] && $p39a37['IsPublished']);
        $taad65['title'] = htmlspecialchars(gea9c($p39a37), ENT_NOQUOTES, HSC_ENC);
        if (($n84cdc and $b7436f and (((int)$n84cdc) . '/' . ((int)$b7436f) == j5a2f(
                        'Y/n',
                        $p39a37['Stamp'],
                        a0923($p39a37)
                    ))) or ($n84cdc and !$b7436f and ((int)$n84cdc == j5a2f(
                        'Y',
                        $p39a37['Stamp'],
                        a0923($p39a37)
                    ))) or (!$n84cdc and !$b7436f)
        ) {
            array_unshift($a4358b, $taad65);
        }
    }
    return $a4358b;
}

function e2s_sync()
{
    e2_drop_all_kinds_of_cache();
    die ('All caches clean.');
}

function e2_note_cache_filename_with_id_($zb80bb)
{
    return str_replace('*', $zb80bb, CACHE_FILENAMES_NOTES);
}

function e2_drop_caches_for_note_($d21158)
{
    if (__LOG) {
        __log('Caches: Drop caches for note id ' . $d21158);
    }
    oe2f1();
    h22e7();
    @unlink(e2_note_cache_filename_with_id_($d21158));
    @unlink(e2_note_cache_filename_with_id_($d21158 . '-comments'));
    @unlink(CACHE_FILENAME_HOT);
    @unlink(CACHE_FILENAME_FRONTPAGE);
    @unlink(CACHE_FILENAME_FRONTPAGE_AUTHOR);
    @unlink(CACHE_FILENAME_FRONTPAGE_RSS);
    @unlink(CACHE_FILENAME_FULLLIST);
}

function q7996()
{
    if (__LOG) {
        __log('Caches: Drop notes caches');
    }
    ac5a6(CACHE_FILENAMES_NOTES);
    ac5a6(CACHE_FILENAMES_NOTES_COMMENTS);
    @unlink(CACHE_FILENAME_FRONTPAGE);
    @unlink(CACHE_FILENAME_FRONTPAGE_AUTHOR);
    @unlink(CACHE_FILENAME_FRONTPAGE_RSS);
}

function oe2f1()
{
    if (__LOG) {
        __log('Caches: Drop notes counts cache');
    }
    ac5a6(CACHE_FILENAMES_NOTES_COUNTS);
}

function h22e7()
{
    if (__LOG) {
        __log('Caches: Drop egde time info cache');
    }
    ac5a6(CACHE_FILENAMES_EDGE_TIMEINFO);
}

function e2_drop_all_kinds_of_cache()
{
    if (__LOG) {
        __log('Caches: Drop all kinds of caches');
    }
    ac5a6(CACHES_FOLDER . '*');
    return true;
}

function c4e27($e139c8)
{
    global $_template, $_config;
    $eaf10b = array();
    $h8598c = $e139c8;
    $h620f7 = TEMPLATES_FOLDER . $h8598c . '/';
    $m1b14d = false;
    if (e2_is_installed() and $e139c8 != '' and !array_key_exists('themeless', $_GET)) {
        if (is_dir($h620f7) and is_file($h620f7 . '/theme-info.php')) {
            while (1) {
                $h620f7 = TEMPLATES_FOLDER . $h8598c . '/';
                array_push($eaf10b, $h620f7);
                $z38226 = include $h620f7 . '/theme-info.php';
                $r4e502[$h620f7] = $z38226;
                if (array_key_exists('max_image_width', $z38226)) {
                    if ($m1b14d === false) {
                        $m1b14d = $z38226['max_image_width'];
                    }
                }
                if (array_key_exists('based_on', $z38226)) {
                    $h8598c = $z38226['based_on'];
                } else {
                    break;
                }
            }
        } else {
        }
    }
    $h620f7 = DEFAULT_TEMPLATE_FOLDER;
    array_push($eaf10b, $h620f7);
    $z38226 = include $h620f7 . '/theme-info.php';
    $r4e502[$h620f7] = $z38226;
    if (array_key_exists('max_image_width', $z38226)) {
        if ($m1b14d === false) {
            $m1b14d = $z38226['max_image_width'];
        }
    }
    if ($m1b14d === false) {
        $m1b14d = $_config['max_image_width'];
    }
    $_template['name'] = $e139c8;
    $_template['max_image_width'] = $m1b14d;
    $_template['stack'] = $eaf10b;
    $_template['infos'] = $r4e502;
}

;
function p53ee($ad436e)
{
    global $content;
    ++$_olba_includes;
    include $ad436e;
}

function t6a97($j52678)
{
    if (0) {
        echo '<div style="background: #ff0">' . $j52678 . '</div>';
    }
    if (is_dir(EXTRAS_FOLDER)) {
        $v71cae = EXTRAS_FOLDER . $j52678 . '.tmpl.php';
        if (is_file($v71cae)) {
            p53ee($v71cae);
        }
    }
    return '';
}

function e166b($j52678)
{
    global $_template, $_olba_includes;
    $v71cae = 'templates/' . $j52678 . '.tmpl.php';
    if ($ad436e = e2o__usable_file_with_basename_($v71cae)) {
        p53ee($ad436e);
    } else {
        e1928($v71cae);
    }
}

function jbc21()
{
    global $_config;
    if (@$_config['raw_template_data'] or @$_config['raw_template_data_with_param'] and array_key_exists(
                'raw',
                $_GET
            )
    ) {
        $v3f7d9 = 'raw';
    } else {
        $v3f7d9 = 'main';
    }
    return e166b($v3f7d9);
}

function e1928($i8b7af)
{
    wf1da($i8b7af, '_olba_missing_templates');
}

function sd4c1($i45ac4)
{
    wf1da($i45ac4 . '.css', '_olba_used_stylesheets');
}

function md00a($y3205c)
{
    wf1da($y3205c . '.js', '_olba_used_scripts');
}

function g16f0($xe8acc)
{
    foreach (array(SYSTEM_LIBRARY_FOLDER, USER_LIBRARY_FOLDER) as $n71379) {
        foreach (glob($n71379 . $xe8acc . '/*') as $g8c7dd) {
            $dabf77 = pathinfo($g8c7dd, PATHINFO_EXTENSION);
            if ($dabf77 == 'js') {
                wf1da($g8c7dd, '_olba_used_scripts');
            }
            if ($dabf77 == 'css') {
                wf1da($g8c7dd, '_olba_used_stylesheets');
            }
        }
    }
}

function oe655()
{
    global $_olba_missing_templates;
    if (isset ($_olba_missing_templates)) {
        return array_unique($_olba_missing_templates);
    }
}

function n94dd()
{
    global $_template, $_config, $settings;
    $sccf6b[''] = DEFAULT_TEMPLATE_FOLDER;
    if ($ye1260 = @opendir(TEMPLATES_FOLDER)) {
        while (false !== ($k1f769 = readdir($ye1260))) {
            if (is_dir(TEMPLATES_FOLDER . $k1f769) and $k1f769 != '.' and $k1f769 != '..') {
                if (is_file(TEMPLATES_FOLDER . $k1f769 . '/theme-info.php')) {
                    $sccf6b[$k1f769] = TEMPLATES_FOLDER . $k1f769 . '/';
                }
            }
        }
        closedir($ye1260);
    }
    $s10ae9 = array();
    foreach ($sccf6b as $bb0689 => $m85114) {
        $z38226 = include $m85114 . 'theme-info.php';
        $fc2657 = $z38226['display_name'];
        if (!is_file($cbe5fb = $m85114 . $g8c7dd . 'preview.png')) {
            $cbe5fb = DEFAULTS_FOLDER . 'preview.png';
        }
        if (is_array($fc2657)) {
            if (array_key_exists($settings['language'], $fc2657)) {
                $fc2657 = $fc2657[$settings['language']];
            } else {
                $fc2657 = array_shift($fc2657);
            }
        }
        $s10ae9[] = array(
            'name' => $bb0689,
            'display-name' => $fc2657,
            'current?' => (bool)($bb0689 == $_template['name']),
            'preview' => $cbe5fb,
        );
    }
    return $s10ae9;
}

function l1492($b435ed)
{
    return e2o__usable_file_with_basename_('images/' . $b435ed);
}

function z576f($i45ac4)
{
    global $_template;
    $a954eb = 'styles/' . $i45ac4 . '.css';
    $v95aa1 = array();
    foreach ($_template['stack'] as $h620f7) {
        if (is_file($b435ed = $h620f7 . $a954eb)) {
            $v95aa1[] = $b435ed;
        }
        if (array_key_exists('reset_styles', $_template['infos'][$h620f7]) and in_array(
                $i45ac4,
                $_template['infos'][$h620f7]['reset_styles']
            )
        ) {
            break;
        }
    }
    $v95aa1 = array_reverse($v95aa1);
}

function e37ca()
{
    global $_olba_used_stylesheets, $_template;
    if (!isset ($_olba_used_stylesheets)) {
        return;
    }
    $_olba_used_stylesheets = array_unique($_olba_used_stylesheets);
    $tc7f50 = array();
    foreach ($_olba_used_stylesheets as $i45ac4) {
        if (is_file($i45ac4)) {
            $tc7f50[] = $i45ac4;
            continue;
        }
        if (is_file($b435ed = USER_FOLDER . 'js/' . $i45ac4)) {
            $tc7f50[] = $b435ed;
        }
        $a954eb = 'styles/' . $i45ac4;
        $v95aa1 = array();
        foreach ($_template['stack'] as $h620f7) {
            if (is_file($b435ed = $h620f7 . $a954eb)) {
                $v95aa1[] = $b435ed;
            }
            if (array_key_exists('reset_styles', $_template['infos'][$h620f7]) and in_array(
                    $i45ac4,
                    $_template['infos'][$h620f7]['reset_styles']
                )
            ) {
                break;
            }
        }
        $v95aa1 = array_reverse($v95aa1);
        $tc7f50 = array_merge($tc7f50, $v95aa1);
    }
    return $tc7f50;
}

function z4753()
{
    global $_olba_used_scripts;
    if (!isset ($_olba_used_scripts)) {
        return;
    }
    $_olba_used_scripts = array_unique($_olba_used_scripts);
    $od6c58 = array();
    foreach ($_olba_used_scripts as $y3205c) {
        if (is_file($y3205c)) {
            $od6c58[] = $y3205c;
            continue;
        }
        if (is_file($p9d679 = USER_FOLDER . 'js/' . $y3205c)) {
            $od6c58[] = $p9d679;
        }
        $a954eb = 'js/' . $y3205c;
        if ($p9d679 = e2o__usable_file_with_basename_($a954eb)) {
            $od6c58[] = $p9d679;
        }
    }
    return $od6c58;
}

function wf1da($c2063c, $zf1f71)
{
    if (!isset ($GLOBALS[$zf1f71])) {
        $GLOBALS[$zf1f71] = array($c2063c);
    } else {
        $GLOBALS[$zf1f71][] = $c2063c;
    }
}

function e2o__usable_file_with_basename_($a954eb)
{
    global $_template;
    foreach ($_template['stack'] as $h620f7) {
        if (is_file($b435ed = $h620f7 . $a954eb)) {
            return $b435ed;
        }
    }
    return '';
}

function e2s_search()
{
    global $settings;
    $l1b1cc = @$_POST['query'];
    $l1b1cc = str_replace(' ', '+', $l1b1cc);
    e2_go_to(e83c8('e2m_found', array('query' => $l1b1cc)));
    die;
}

function e2m_found($parameters = array())
{
    global $settings, $_strings;
    $parameters['query'] = trim($parameters['query']);
    $l1b1cc = $parameters['query'];
    if (!$l1b1cc) {
        return array(
            'title' => $_strings['pt--search-query-empty'],
            'heading' => $_strings['pt--search'],
            'no-notes-text' => $_strings['gs--search-query-empty'],
        );
    }
    if (mb_strlen($l1b1cc) < 4) {
        return array(
            'title' => $_strings['pt--search-query-too-short'],
            'heading' => $_strings['pt--search'],
            'no-notes-text' => $_strings['gs--search-query-too-short'],
        );
    }
    $qf79b1 = "AND `IsVisible`=1 ";
    if (ne852()) {
        $qf79b1 = '';
    }
    $d11128 = false;
    if (p0738(
        "SELECT * FROM `" . $settings['db']['table_prefix'] . "Keywords` " . "WHERE `Keyword`='" . p7928($l1b1cc) . "'"
    )
    ) {
        $pfa816 = j0d6b();
        if (isset ($pfa816[0]['ID'])) {
            $d11128 = array(
                'href' => e83c8(
                    'e2m_tag',
                    TRANS_TAGS_UTF8_URLS ? array(
                        'tag' => htmlspecialchars(
                            $pfa816[0]['Keyword'],
                            ENT_NOQUOTES,
                            HSC_ENC
                        )
                    ) : array('tag-urlname' => $pfa816[0]['URLName'])
                ),
                'name' => htmlspecialchars($l1b1cc, ENT_NOQUOTES, HSC_ENC),
            );
        }
    }
    $f75006 = $_strings['gs--nothing-found'];
    $r3ad42 = e83c8('e2m_found_rss', array('query' => htmlspecialchars($l1b1cc, ENT_NOQUOTES, HSC_ENC)));
    n3010($_strings['pt--search-results'] . ': ' . htmlspecialchars($l1b1cc, ENT_NOQUOTES, HSC_ENC), $r3ad42);
    $b36a38 = p7928(preg_quote($l1b1cc));
    $meb31b = ("SELECT * FROM `" . $settings['db']['table_prefix'] . "Notes` " . "WHERE `IsPublished`=1 AND MATCH (`Title`, `Text`) AGAINST ('" . $b36a38 . "')" . $qf79b1 . " " . "LIMIT " . MAX_SEARCH_RESULTS);
    $n8d777 = array(
        'query' => $meb31b,
        'maximum-notes' => MAX_SEARCH_RESULTS,
        'show-all-notes' => true,
        'candy' => 'e2m_found',
        'parameters' => $parameters,
        'title' => '%total% ' . $_strings['gs--found-for-query'] . ': ' . htmlspecialchars(
            $l1b1cc,
            ENT_NOQUOTES,
            HSC_ENC
        ),
        'superheading' => '%total% ' . $_strings['gs--found-for-query'],
        'heading' => $l1b1cc,
        'related-rss-href' => $r3ad42,
        'highlight' => y163d(' ', $l1b1cc),
        'no-notes-text' => $f75006,
    );
    if ($d11128) {
        $n8d777['search-related-tag'] = $d11128;
    }
    return pd864($n8d777);
}

function e2_check_timeout()
{
    static $b90272;
    if (is_null($b90272)) {
        $lf48ef = ini_get('max_execution_time');
        if ($lf48ef) {
            $b90272 = time() + $lf48ef - 5;
        } else {
            $b90272 = 0;
        }
    }
    return ($b90272 == 0) ? true : $b90272 >= time();
}

function e2_write_dump_header($g8c7dd)
{
    $p099fb = ('SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";' . PHP_EOL . 'SET AUTOCOMMIT=0;' . PHP_EOL . 'START TRANSACTION;' . PHP_EOL . "/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;" . PHP_EOL . "/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;" . PHP_EOL . "/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;" . PHP_EOL . "/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;" . PHP_EOL . "/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;" . PHP_EOL . "/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=NO_AUTO_VALUE_ON_ZERO */;" . PHP_EOL . "/*!40101 SET NAMES utf8 */;" . PHP_EOL . '');
    fwrite($g8c7dd, $p099fb);
    return true;
}

function e2_write_dump_footer($g8c7dd)
{
    $n251d1 = 'COMMIT;' . PHP_EOL;
    $n251d1 .= "/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;" . PHP_EOL . "/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;" . PHP_EOL . "/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;" . PHP_EOL . "/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;" . PHP_EOL . "/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;" . PHP_EOL . "/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;" . PHP_EOL;
    fwrite($g8c7dd, $n251d1);
    return true;
}

function e2_get_table_definition($p0c1d0, $uaab9e)
{
    $u5c286 = null;
    $result = mysql_query("SHOW CREATE TABLE `{$uaab9e}`", $p0c1d0);
    if ($result) {
        $v47c80 = mysql_fetch_array($result);
        $u5c286 = $v47c80['Create Table'];
    }
    return $u5c286;
}

function e2_write_table_definition($g8c7dd, $p0c1d0, $uaab9e)
{
    $x30618 = e2_get_table_definition($p0c1d0, $uaab9e);
    if (e2_check_timeout() && $x30618) {
        fwrite($g8c7dd, $x30618);
        fwrite($g8c7dd, ';');
        fwrite($g8c7dd, PHP_EOL . PHP_EOL);
        return true;
    }
    return false;
}

function e2_get_table_data($p0c1d0, $uaab9e, $j7a86c, $jaa9f7)
{
    $l1b1cc = "SELECT * FROM `{$uaab9e}` LIMIT {$j7a86c}, {$jaa9f7}";
    $result = mysql_query($l1b1cc);
    if (!$result) {
        return false;
    }
    $g66e9c = '';
    $u3c41a = "INSERT INTO `{$uaab9e}` VALUES";
    while ($sf1965 = mysql_fetch_assoc($result)) {
        $f691d5 = array();
        foreach ($sf1965 as $c2063c) {
            $f691d5[] = is_null($c2063c) ? "NULL" : "'" . mysql_real_escape_string($c2063c, $p0c1d0) . "'";
        }
        $g66e9c .= $u3c41a . '(' . join(', ', $f691d5) . ');' . PHP_EOL;
    }
    return $g66e9c;
}

function e2_table_disable_keys($uaab9e)
{
    return "ALTER TABLE `{$uaab9e}` DISABLE KEYS;" . PHP_EOL;
}

function e2_table_enable_keys($uaab9e)
{
    return "ALTER TABLE `{$uaab9e}` ENABLE KEYS;" . PHP_EOL;
}

function e2_get_total_records($p0c1d0, $uaab9e)
{
    return mysql_result(mysql_query("SELECT COUNT(*) FROM `{$uaab9e}`", $p0c1d0), 0);
}

function e2_write_table_data($g8c7dd, $p0c1d0, $uaab9e)
{
    $hfbb44 = e2_get_total_records($p0c1d0, $uaab9e);
    $j7a86c = 0;
    $jaa9f7 = 1000;
    $result = true;
    $o47495 = 20000;
    $h80fc1 = 30;
    if ($hfbb44) {
        $efbda5 = e2_table_disable_keys($uaab9e);
        fwrite($g8c7dd, $efbda5);
    }
    $g66e9c = "INSERT INTO `{$uaab9e}` VALUES";
    $jde57a = $hfbb44;
    while ($jde57a > 0) {
        $l1b1cc = "SELECT * FROM `{$uaab9e}` LIMIT {$j7a86c}, {$jaa9f7}";
        $result = mysql_query($l1b1cc);
        $cb428d = mysql_num_rows($result);
        if (!$result || !e2_check_timeout()) {
            $result = false;
            break;
        }
        $mdf347 = array();
        $i4b3a6 = 0;
        $ab6539 = 0;
        while ($sf1965 = mysql_fetch_assoc($result)) {
            if (!e2_check_timeout()) {
                $result = false;
                break;
            }
            $cb428d--;
            $o54ca8 = array();
            foreach ($sf1965 as $c2063c) {
                $o54ca8[] = is_null($c2063c) ? "NULL" : "'" . mysql_real_escape_string($c2063c, $p0c1d0) . "'";
            }
            $n8d777 = '(' . join(', ', $o54ca8) . ')';
            $i4b3a6 += strlen($n8d777);
            $mdf347[] = $n8d777;
            $ab6539++;
            if (($i4b3a6 >= $o47495) || ($ab6539 >= $h80fc1) || ($cb428d == 0)) {
                $l1b1cc = $g66e9c . join(', ', $mdf347) . ';';
                fwrite($g8c7dd, $l1b1cc);
                fwrite($g8c7dd, PHP_EOL);
                $i4b3a6 = 0;
                $ab6539 = 0;
                $mdf347 = array();
            }
        }
        $j7a86c += $jaa9f7;
        $jde57a -= $jaa9f7;
    }
    if ($hfbb44) {
        $a6bfc4 = e2_table_enable_keys($uaab9e);
        fwrite($g8c7dd, $a6bfc4);
    }
    return $result;
}

function e2_backup($p0c1d0, $k9ab2e, $aa9745, $t93da6 = array())
{
    mysql_query("SET NAMES utf8", $p0c1d0);
    $y2beda = tmpfile();
    e2_write_dump_header($y2beda);
    $k75101 = true;
    foreach ($k9ab2e as $uaab9e) {
        $d91e7e = e2_write_table_definition($y2beda, $p0c1d0, $uaab9e);
        $u35285 = e2_write_table_data($y2beda, $p0c1d0, $uaab9e);
        $k75101 = $d91e7e && $u35285;
        if ($k75101 === false) {
            break;
        }
    }
    if ($k75101) {
        e2_write_dump_footer($y2beda);
        fseek($y2beda, 0);
        $g8c7dd = fopen($aa9745, 'w+');
        while ($k75101 && ($n8d777 = fread($y2beda, 1024))) {
            if (e2_check_timeout()) {
                fwrite($g8c7dd, $n8d777);
            } else {
                $k75101 = false;
            }
        }
        fclose($g8c7dd);
    }
    fclose($y2beda);
    return $k75101;
}

function b3e5c($e0c426, $content)
{
    $r52766 = MTMPL_FOLDER . $e0c426 . '.mtmpl.php';
    if (is_file($r52766)) {
        ob_start();
        include $r52766;
        $yde7a3 = ob_get_contents();
        ob_end_clean();
        return trim($yde7a3);
    }
}

function aaed2()
{
    global $_config;
    $j9e35a = $_config['mail_from'];
    if ($j9e35a[strlen($j9e35a) - 1] == '@') {
        $j9e35a .= $_SERVER['HTTP_HOST'];
    }
    return $j9e35a;
}

function oa41b($z01b6e, $subject, $i78e73, $x145a2 = '')
{
    global $u57de2;
    if ($u57de2 == DEV_HOST) {
        $r8fa14 = tempnam('mail-debug', '');
        $l1cb25 = ('To:       ' . $z01b6e . "\n" . 'Subject:  ' . $subject . "\n" . "--------------------------------------------------\n" . $i78e73);
        c6e52($r8fa14, $l1cb25);
        chmod($r8fa14, NEW_FILES_RIGHTS);
        rename($r8fa14, $r8fa14 . '.txt');
    } else {
        $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
        $x145a2 .= "\r\nContent-Type: text/plain; charset=utf-8";
        mail($z01b6e, $subject, $i78e73, trim($x145a2));
    }
}

function _A($l1cb25)
{
    global $_candy, $u57de2, $ra57c1, $t097cc;
    if (preg_match(
            '/\<a href\=\"(.*?)\"[^>]*\>(.*?)\<\/a\>/si',
            $l1cb25,
            $i9c28d
        ) and ($i9c28d[1] == '' or $i9c28d[1] == $t097cc or 'http://' . $u57de2 . $i9c28d[1] == $t097cc or 'http://' . $u57de2 . $ra57c1 . '/' . $i9c28d[1] == $t097cc or $_candy == 'e2m_install')
    ) {
        return $i9c28d[2];
    } else {
        return $l1cb25;
    }
}

function _AT($pe8fab)
{
    global $_candy, $u57de2, $ra57c1, $t097cc;
    return ($pe8fab == '' or $pe8fab == $t097cc or 'http://' . $u57de2 . $pe8fab == $t097cc or 'http://' . $u57de2 . $ra57c1 . '/' . $pe8fab == $t097cc);
}

function _IMGSRC($b435ed)
{
    return l1492($b435ed);
}

function _COLOR($kf97c5, $ub8a9f, $ycc321, $w4efa2 = 1)
{
    if (strlen($kf97c5) != 3 and strlen($kf97c5) != 6) {
        return 'f0f';
    }
    if (strlen($ub8a9f) != 3 and strlen($ub8a9f) != 6) {
        return 'f0f';
    }
    if (strlen($kf97c5) == 3) {
        $kf97c5 = $kf97c5{0} . $kf97c5{0} . $kf97c5{1} . $kf97c5{1} . $kf97c5{2} . $kf97c5{2};
    }
    if (strlen($ub8a9f) == 3) {
        $ub8a9f = $ub8a9f{0} . $ub8a9f{0} . $ub8a9f{1} . $ub8a9f{1} . $ub8a9f{2} . $ub8a9f{2};
    }
    $gf09cc = array(
        $kf97c5{0} . $kf97c5{1},
        $kf97c5{2} . $kf97c5{3},
        $kf97c5{4} . $kf97c5{5},
        $ub8a9f{0} . $ub8a9f{1},
        $ub8a9f{2} . $ub8a9f{3},
        $ub8a9f{4} . $ub8a9f{5},
    );
    foreach ($gf09cc as $g8ce4b => $c9e366) {
        $gf09cc[$g8ce4b] = hexdec($c9e366);
    }
    $k22af6 = array(
        $gf09cc[0] + pow($ycc321, $w4efa2) * ($gf09cc[3] - $gf09cc[0]),
        $gf09cc[1] + pow($ycc321, $w4efa2) * ($gf09cc[4] - $gf09cc[1]),
        $gf09cc[2] + pow($ycc321, $w4efa2) * ($gf09cc[5] - $gf09cc[2]),
    );
    $m70dda = '';
    foreach ($k22af6 as $g8ce4b => $c9e366) {
        $m70dda .= str_pad(dechex($c9e366), 2, '0', STR_PAD_LEFT);
    }
    return $m70dda;
}

function _DT($n1ddcb, $mb35c6)
{
    if (!$mb35c6) {
        return '';
    }
    list ($u96b8c, $cb2c6c) = $mb35c6;
    $e2cb9d = $n1ddcb;
    $b7436f = j5a2f('m', $u96b8c, $cb2c6c);
    $e2cb9d = str_replace('{zone}', e2__escape_all(t9515($cb2c6c['offset'])), $e2cb9d);
    $e2cb9d = str_replace('{month}', e2__escape_all(e2l_get_string('um--month', array('month' => $b7436f))), $e2cb9d);
    $e2cb9d = str_replace(
        '{month-short}',
        e2__escape_all(e2l_get_string('um--month-short', array('month' => $b7436f))),
        $e2cb9d
    );
    $e2cb9d = str_replace(
        '{month-g}',
        e2__escape_all(e2l_get_string('um--month-g', array('month' => $b7436f))),
        $e2cb9d
    );
    $e2cb9d = j5a2f($e2cb9d, $u96b8c, $cb2c6c);
    return $e2cb9d;
}

function _AGO($mb35c6)
{
    return y7a0b($mb35c6[0], array('offset' => $mb35c6[1]['offset'], 'is_dst' => $mb35c6[1]['is_dst']));
}

function _NUM($l1cb25)
{
    return e2_decline_for_number($l1cb25);
}

function _SIZE($size, $e3e34b = _SIZE_AUTO)
{
    return e2_format_size($size, $e3e34b);
}

function _FIRST($h437b9)
{
    return ($h437b9['_']['_ord'] == 0);
}

function _LAST($h437b9)
{
    return ($h437b9['_']['_ord'] == $h437b9['_']['_ord_max']);
}

function _CSS($jc7a62)
{
    return sd4c1($jc7a62);
}

function _CSS_HREF($jc7a62)
{
    return z576f($jc7a62);
}

function _JS($k32981)
{
    return md00a($k32981);
}

function _LIB($xe8acc)
{
    return g16f0($xe8acc);
}

function _T($j52678)
{
    return e166b($j52678);
}

function _X($j52678)
{
    return t6a97($j52678);
}

function _T_FOR($j52678, $pd5566 = null)
{
    global $content;
    if ($pd5566 === null) {
        $pd5566 = $j52678;
    }
    if (array_key_exists($pd5566, $content)) {
        e166b($j52678);
    } else {
        return '';
    }
}

function _GUIDES($ceca07 = false)
{
    global $_olba_guides;
    if (is_array($ceca07)) {
        $_olba_guides = $ceca07;
    }
    if (!is_array($_olba_guides)) {
        return;
    }
    $y88408 = '<div style="position: fixed; width: 100%; height: 100%; z-index: -100">';
    $r1d623 = 0;
    $g07d43 = $_olba_guides;
    $g07d43[] = 100;
    foreach ($g07d43 as $j865c0 => $td89e2) {
        if ($td89e2 == 100) {
            break;
        }
        $r1d623 += $td89e2;
        $y88408 .= '<div style="position: fixed; left: ' . $td89e2 . '%; width: 0; height: 100%; border-left: 1px #000 dotted; opacity: .2; -webkit-opacity: .2; -moz-opacity: .2"></div>';
        $ia1b01 = 'position: absolute; padding: 2px 3px; top: 0; font-size: 9px; background: #ccc; color: #000; font-family: "Verdana", sans-serif; opacity: .8; -webkit-opacity: .8; -moz-opacity: .8';
        if ($g07d43[$j865c0 + 1] - $g07d43[$j865c0] < 4) {
            $y88408 .= '<div style="' . $ia1b01 . '; right: ' . (100 - $td89e2) . '%; border-bottom-left-radius: .5em; -webkit-border-bottom-left-radius: .5em; -moz-border-bottom-left-radius: .5em;">' . $td89e2 . '%</div>';
        } else {
            $y88408 .= '<div style="' . $ia1b01 . '; left: ' . $td89e2 . '%; border-bottom-right-radius: .5em; -webkit-border-bottom-right-radius: .5em; -moz-border-bottom-right-radius: .5em;">' . $td89e2 . '%</div>';
        }
    }
    $y88408 .= '</div>';
    $_olba_current_col = 0;
    return $y88408;
}

function _S($sb45cf)
{
    global $_strings;
    return $_strings[$sb45cf];
}

function _SHORTCUT($bb0689)
{
    return jbb8d($bb0689);
}

function e2__escape_all($sb45cf)
{
    $e2cb9d = '';
    for ($j865c0 = 0; $j865c0 <= mb_strlen($sb45cf); ++$j865c0) {
        $e2cb9d .= '\\' . mb_substr($sb45cf, $j865c0, 1);
    }
    return $e2cb9d;
}

function e2l_get_string($tfa206, $n8d777)
{
    global $_strings;
    $bb0689 = $_strings[$tfa206];
    if (preg_match_all('/\$\[(.+?)\]/u', $bb0689, $i9c28d, PREG_SET_ORDER)) {
        foreach ($i9c28d as $je3cc9) {
            $qb2145 = $je3cc9[1];
            $cf2ffc = '';
            if (strstr($qb2145, '.')) {
                list ($qb2145, $cf2ffc) = explode('.', $qb2145, 2);
            }
            if (array_key_exists($qb2145, $n8d777)) {
                if ($cf2ffc) {
                    $bb0689 = str_replace($je3cc9[0], e2l__format_value($cf2ffc, $n8d777[$qb2145], $tfa206), $bb0689);
                } else {
                    $bb0689 = str_replace($je3cc9[0], $n8d777[$qb2145], $bb0689);
                }
            }
        }
    }
    return $bb0689;
}

function e2l_transliterate($sb45cf)
{
    $oe358e = array();
    if (is_file(DEFAULTS_FOLDER . 'translit.txt')) {
        $oe358e = file(DEFAULTS_FOLDER . 'translit.txt');
    }
    $bd98a0 = $z01b6e = '';
    foreach ($oe358e as $j865c0 => $p6438c) {
        if ($j865c0 % 2) {
            $z01b6e .= rtrim($p6438c) . ' ';
        } else {
            $bd98a0 .= rtrim($p6438c) . ' ';
        }
    }
    $t60ae1 = '';
    $qde2e7 = -1;
    for ($j865c0 = 0; $j865c0 < mb_strlen($bd98a0); ++$j865c0) {
        $m4a8a0 = mb_substr($bd98a0, $j865c0, 1);
        if ($m4a8a0 != ' ') {
            $t60ae1 .= $m4a8a0;
            if ($qde2e7 == -1) {
                $qde2e7 = $j865c0;
            }
        } elseif ($t60ae1) {
            $u52ac1 = trim(mb_substr($z01b6e, $qde2e7, mb_strpos($z01b6e, ' ', $qde2e7 + 1) - $qde2e7));
            $t33c9b = array($t60ae1, $u52ac1);
            $rce83f[mb_strlen($t60ae1)][] = $t33c9b;
            $t60ae1 = '';
            $qde2e7 = -1;
        }
    }
    $t1d78d = array();
    for ($j865c0 = count($rce83f); $j865c0 > 0; --$j865c0) {
        foreach ($rce83f[$j865c0] as $t33c9b) {
            $t1d78d[$t33c9b[0]] = $t33c9b[1];
        }
    }
    return strtr($sb45cf, $t1d78d);
}

function e2l__format_value($cf2ffc, $c2063c, $tfa206)
{
    list ($cf2ffc, $e3ad73) = explode('.', $cf2ffc, 2);
    $ue6875 = 'e2lstr_' . $cf2ffc;
    if (function_exists($ue6875)) {
        return call_user_func($ue6875, $c2063c, $e3ad73, $tfa206);
    } else {
        return $c2063c;
    }
    return $c2063c;
}

if ($_config['write_log_reset']) {
    __log(null);
}
if (__LOG) {
    __log('System: loaded');
}
if (is_file($n2d354 = LANGUAGES_FOLDER . $settings['language'] . '.php')) {
    include $n2d354;
} elseif (is_file($n2d354 = LANGUAGES_FOLDER . DEFAULT_LANGUAGE . '.php')) {
    include $n2d354;
} else {
    die ('Language file missing: ' . $n2d354);
}
$_strings = e2l_load_strings();
if (!$z589b3) {
    @include 'builder.php';
}
function e2()
{
    global $u57de2, $settings, $errors, $content, $ra57c1, $full_blog_url, $stopwatch, $y11755, $t097cc, $_newsfeeds, $_instance, $_candy, $_config, $_auth_sessions, $_route, $_strings, $_candies_installer, $_candies_public, $_candies_spawning, $_candies_unabortable, $_candies_indexable, $_candies_indexable_conditionally, $_candies_ajax, $_user_folder_name, $_olba_includes;
    u8e95();
    b269a();
    if (__LOG) {
        __log('System: go');
    }
    $errors = array();
    header('Content-type: text/html; charset=' . OUTPUT_CHARSET);
    $_instance = false;
    if (is_file(USER_FOLDER . 'instance.psa')) {
        $t0d149 = @jcdf0(USER_FOLDER . 'instance.psa') or $t0d149 = false;
        if ($t0d149) {
            $t0d149 = @unserialize($t0d149) or $t0d149 = false;
            if ($t0d149) {
                $_instance = $t0d149;
            }
        }
    }
    c4e27(@$settings['template']);
    hf5a9();
    if (__LOG) {
        __log('System: resolve url <' . $_GET['go'] . '>');
    }
    b7059();
    list ($ic48ba, $parameters) = jb7e9($_GET['go']);
    if (__LOG) {
        __log('System: candy <' . $ic48ba . '>');
    }
    $_candy = $ic48ba;
    if (@$_config['debug_slow_ajax'] and (in_array($ic48ba, $_candies_ajax))) {
        sleep(1 + 2 * (rand() / getrandmax()));
    }
    if (!in_array($ic48ba, $_candies_installer)) {
        e2_make_sure_that_installed();
    }
    if (in_array($ic48ba, $_candies_unabortable)) {
        ignore_user_abort(1);
    }
    $j58387 = (bool)ne852();
    $m0b448 = !in_array($ic48ba, $_candies_public);
    $x49ecc = $m0b448 && !$j58387;
    if (__LOG) {
        __log('System: signed in? ' . (int)$j58387);
    }
    $rc1f6f = array('done?' => $j58387, 'required?' => $m0b448, 'necessary?' => $x49ecc,);
    $_newsfeeds = false;
    n3010(htmlspecialchars(n6f51(), ENT_NOQUOTES, HSC_ENC), e83c8('e2m_frontpage_rss'));
    $parameters = p3b25($parameters);
    if (is_callable($ic48ba)) {
        if ($x49ecc) {
            if (substr($ic48ba, 0, 4) == 'e2s_') {
                $content = call_user_func('e2s_sign_in_necessary');
            } else {
                $content['title'] = $_strings['pt--sign-in'];
                $content['sign-in-prompt'] = fe68c($ic48ba);
            }
        } else {
            if (__LOG) {
                __log('System: candy call');
            }
            $content = call_user_func($ic48ba, $parameters);
            if (__LOG) {
                __log('System: candy return');
            }
        }
    } else {
        $rc1f6f['required?'] = false;
        $rc1f6f['necessary?'] = false;
        $content = e2_error404_mode();
    }
    $content['class'] = str_replace('_', '-', str_replace('e2m_', '', $ic48ba));
    $content['sign-in'] = $rc1f6f;
    $content['sessions']['count'] = $_auth_sessions['count'];
    $content['sessions']['multiple?'] = ($_auth_sessions['count'] > 1);
    if (e2_is_installed()) {
        if (__LOG) {
            __log('System: nav and pages');
        }
        $content['navigation-links'] = array(
            array(
                'rel' => 'index',
                'href' => e83c8('e2m_frontpage'),
                'id' => 'link-index',
            )
        );
        if (array_key_exists('pages', $content)) {
            foreach (array('prev', 'next', 'earlier', 'later') as $jc47d1) {
                if (array_key_exists($jc47d1 . '-href', $content['pages'])) {
                    $o7ffc4 = $jc47d1;
                    if ($jc47d1 == 'earlier') {
                        $o7ffc4 = 'prev';
                    }
                    if ($jc47d1 == 'later') {
                        $o7ffc4 = 'next';
                    }
                    $content['navigation-links'][] = array(
                        'rel' => $o7ffc4,
                        'href' => $content['pages'][$jc47d1 . '-href'],
                        'id' => 'link-' . $jc47d1,
                    );
                }
            }
        }
        if (__LOG) {
            __log('System: search form');
        }
        if (array_key_exists('query', $parameters)) {
            $l1b1cc = trim($parameters['query']);
        } else {
            $l1b1cc = '';
        }
        $content['form-search'] = array(
            'form-action' => e83c8('e2s_search'),
            'query' => htmlspecialchars(@$l1b1cc, ENT_COMPAT, HSC_ENC),
        );
        if (__LOG) {
            __log('System: blog information');
        }
        $content['blog']['author'] = htmlspecialchars(x2640(), ENT_NOQUOTES, HSC_ENC);
        if (array_key_exists('description', $settings)) {
            $content['blog']['description'] = htmlspecialchars(l6f10($settings['description']), ENT_NOQUOTES, HSC_ENC);
        }
        $content['blog']['title'] = htmlspecialchars(n6f51(), ENT_NOQUOTES, HSC_ENC);
        $content['blog']['userpic-href'] = DEFAULTS_FOLDER . 'userpic.png';
        if (is_file(USER_FOLDER . 'userpic.png')) {
            $content['blog']['userpic-href'] = USER_FOLDER . 'userpic.png';
        } elseif (is_file(USER_FOLDER . 'userpic.jpg')) {
            $content['blog']['userpic-href'] = USER_FOLDER . 'userpic.jpg';
        }
        $content['blog']['userpic-upload-action'] = e83c8('e2j_userpic_upload');
        $content['blog']['href'] = e83c8('e2m_frontpage');
        $content['blog']['rss-href'] = e83c8('e2m_frontpage_rss');
        if (__LOG) {
            __log('System: edge timeinfo');
        }
        $i97bc5 = array(time(), t5c05());
        $i5f36b = ba846('Y', $i97bc5[0]);
        $content['blog']['now'] = $i97bc5;
        $maa103 = $i5f36b;
        $i33b09 = bcc02('start');
        if (array_key_exists('stamp', $i33b09)) {
            $maa103 = ba846('Y', $i33b09['stamp']);
            $content['blog']['start-time'] = array((int)$i33b09['stamp'], $i33b09['timezone']);
        }
        $e40d73 = (int)l8ca0(true, true);
        if (ne852()) {
            if (__LOG) {
                __log('System: stuff for logged in user');
            }
            $content['blog']['drafts-count'] = (int)l8ca0(false, true);
            $content['admin-hrefs'] = array(
                'new-note' => e83c8('e2m_write'),
                'drafts' => e83c8('e2m_drafts'),
                'name-and-author' => e83c8('e2m_name_and_author'),
                'settings' => e83c8('e2m_settings'),
                'password' => e83c8('e2m_password'),
                'database' => e83c8('e2m_database'),
                'timezone' => e83c8('e2m_timezone'),
                'sessions' => e83c8('e2m_sessions'),
                'logout' => e83c8('e2m_sign_out'),
            );
            if ($settings['comments']['on']) {
                list ($efe9e2, $w85ee4, $u20699) = n2a6b();
                if ($efe9e2) {
                    $content['new-comments'] = array(
                        'count' => $efe9e2,
                        'texts' => $w85ee4,
                        'href' => $u20699,
                    );
                }
            }
        } else {
            if (__LOG) {
                __log('System: login form');
            }
            $content['form-login']['form-action'] = e83c8('e2s_sign_in');
            $content['form-login']['form-check-password-action'] = e83c8('e2j_check_password');
            $content['form-login']['login-name'] = @$settings['author'];
            $content['form-login']['public-pc?'] = false;
            if (array_key_exists('_login_request_message', $content)) {
                $content['form-login']['request'] = $content['_login_request_message'];
            }
        }
        if (ne852()) {
            $rd0a87 = (($e40d73 + (int)l8ca0(true, false)) == 0);
        } else {
            $rd0a87 = ($e40d73 == 0);
        }
        if ($_db_error) {
            $rd0a87 = false;
        }
        $a9fbfe = $_config['years_range_separator'] ? $_config['years_range_separator'] : '&mdash;';
        $content['blog']['years-range'] = $maa103 . (($maa103 == $i5f36b) ? '' : ($a9fbfe . $i5f36b));
        $content['blog']['notes-count'] = $e40d73;
        $content['blog']['virgin?'] = $rd0a87;
        if ($ra57c1) {
            $content['blog']['parent-site-href'] = substr($ra57c1, (int)strpos('/', $ra57c1));
        }
        $content['hrefs'] = array(
            'sign-in' => e83c8('e2m_sign_in'),
            'tags' => e83c8('e2m_tags'),
            'everything' => e83c8('e2m_everything'),
        );
    }
    $e1e2ad = 'noindex, follow';
    if (@$_config['index_follow_everything']) {
        $e1e2ad = 'index, follow';
    }
    if (in_array($ic48ba, $_candies_indexable)) {
        $content['robots'] = 'index, follow';
    }
    if (in_array($ic48ba, $_candies_indexable_conditionally)) {
        $content['robots'] = $e1e2ad;
    }
    $content['output-charset'] = OUTPUT_CHARSET;
    $content['base-href'] = $full_blog_url . '/';
    $content['current-href'] = $t097cc;
    if (!array_key_exists('summary', $content)) {
        $content['summary'] = $content['blog']['description'];
    }
    $content['title'] = strip_tags(l6f10(htmlspecialchars($content['title'], ENT_NOQUOTES, HSC_ENC)));
    if (@$content['heading']) {
        $content['heading'] = strip_tags(l6f10(htmlspecialchars($content['heading'], ENT_NOQUOTES, HSC_ENC)));
    }
    if (__LOG) {
        __log('System: e2_modes call');
    }
    e2_modes($parameters);
    if (__LOG) {
        __log('System: e2_modes return');
    }
    if (@$_config['request_logging']) {
        $r8fa14 = fopen(USER_FOLDER . 'log-' . date('Y-m-d') . '.txt', 'a');
        fwrite(
            $r8fa14,
            date(
                'd.m.Y H:i:s'
            ) . "\tT = " . $content['pgt'] . "\tQ = " . $content['total_queries'] . "\tIP = " . $_SERVER['REMOTE_ADDR'] . "\tRequest = " . $_SERVER['REQUEST_URI'] . "\r\n"
        );
        fclose($r8fa14);
    }
    $content['misc']['sape-link'] = 'http://www.sape.ru/r.206a4276c2.php';
    $cc8542 = round(c7f78() - $stopwatch, 3);
    $content['engine']['pgt'] = str_replace('.', ',', $cc8542);
    if (function_exists('memory_get_peak_usage')) {
        $content['engine']['mp'] = str_replace('.', ',', round((memory_get_peak_usage() / 1024 / 1024) * 100) / 100);
    }
    $content['engine']['qc'] = (int)@$y11755;
    $content['engine']['built?'] = $z589b3;
    $content['engine']['installed?'] = e2_is_installed();
    $content['engine']['version'] = 'v' . E2_VERSION;
    $a68966 = '(' . $_strings['e2--release'] . ' ' . E2_RELEASE . ', v' . E2_VERSION . ')';
    $content['engine']['version-description'] = $_strings['e2--vname-aegea'] . ' ' . $a68966;
    $content['engine']['user-folder-name'] = $_user_folder_name;
    $content['engine']['href'] = E2_WEBSITE;
    $content['engine']['about'] = '<span title="E2 ' . $a68966 . '">' . $_strings['e2--powered-by'] . ' <a href="' . E2_WEBSITE . '">' . $_strings['e2--vname-aegea'] . '</a></span>';
    $content['stylesheets'] = e37ca();
    $content['scripts'] = z4753();
    if ($qe1671 = iec07()) {
        $content['message'] = $qe1671;
    }
    ob_start();
    jbc21();
    $l78e62 = ob_get_contents();
    ob_end_clean();
    if (is_array($content['notes'])) {
        foreach ($content['notes'] as $taad65) {
            if (is_array($taad65['format-info']['links-required'])) {
                foreach ($taad65['format-info']['links-required'] as $f2a304) {
                    if (substr($f2a304, -3) == '.js') {
                        md00a(substr($f2a304, 0, -3));
                    }
                    if (substr($f2a304, -4) == '.css') {
                        sd4c1(substr($f2a304, 0, -4));
                    }
                }
            }
        }
    }
    $content['stylesheets'] = e37ca();
    $content['scripts'] = z4753();
    if ($_newsfeeds) {
        $content['newsfeeds'] = $_newsfeeds;
    }
    ob_start();
    e166b('head');
    $f96e89 = ob_get_contents();
    ob_end_clean();
    $l78e62 = str_replace('<e2:head-data />', $f96e89, $l78e62);
    if ($za0856 = oe655() and !$_config['ignore_missing_template_files']) {
        echo '<h1>Templates missing</h1>';
        echo '<ul>';
        foreach ($za0856 as $c380ec) {
            echo '<li>' . $c380ec . ' </li>';
        }
        echo '</ul>';
        echo '<pre>';
        print_r($content);
        echo '</pre>';
    } else {
        echo $l78e62;
    }
    if (__LOG) {
        __log('System: end');
    }
    if (DEV_TRACK_TIME and $u57de2 == DEV_HOST) {
        $l06bc4 = str_replace('.', ',', round(c7f78() - $stopwatch, 3) - $cc8542);
        echo '<div style="font-size: 300%; text-align: center; position: fixed; bottom: 0; width: 100%; background: #ffc; opacity: .88">' . '<span style="color: #f80">' . $content['engine']['pgt'] . ' ' . '<small>' . $content['engine']['qc'] . 'q</small></span>' . '<span style="color: #08f"> + ' . $l06bc4 . ' ' . '<small>' . $_olba_includes . 'i</small></span>' . '</div>';
    }
}

if (__LOG) {
    __log('');
} ?>