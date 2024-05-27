
define("HOST", "localhost");     // Para o host com o qual você quer se conectar.

define("USER", "sec_user");     // O nome de usuário para o banco de dados.

define("PASSWORD", "4Fa98xkHVd2XmnfK");    // A senha do banco de dados. 

define("DATABASE", "secure_login");    // O nome do banco de dados. 

define("CAN_REGISTER", "any");      // qualquer um pode entrar 
define("DEFAULT_ROLE", "member");   //e que se entra se menbro

include_once 'psl-config.php';  // inclui outras paginas

$mysqli = new $mysqli(HOST, USER, PASSWORD, DATABASE); //guarda o usuario






