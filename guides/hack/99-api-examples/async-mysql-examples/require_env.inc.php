<?hh

namespace Hack\UserDocumentation\API\Examples\AsyncMysql;

require __DIR__ . "/connect.inc.php";

use \Hack\UserDocumentation\API\Examples\AsyncMysql\ConnectionInfo as CI;

if (!extension_loaded('mysql') || !function_exists('mysqli_connect')) {
  die('Skip');
}
if (!mysqli_connect(CI::$host, CI::$port, CI::$user, CI::$passwd, CI::$db)) {
  die('Skip');
}

