# myORM
This simple Php-ORM built for learning purpose.

## Usage
**index.php**
```
require_once('MysqlAdapter.php');
require_once ('ORMMapper.php');
require_once('TestModel.php');

$users = new TestModel();
$users = $users->findAll();

var_dump($users);

```

**Response:** ``` array(3) { [0]=> object(stdClass)#4 (3) { ["id"]=> string(1) "1" ["i"]=> NULL ["second"]=> NULL } [1]=> object(stdClass)#7 (3) { ["id"]=> string(1) "2" ["i"]=> NULL ["second"]=> NULL } [2]=> object(stdClass)#6 (3) { ["id"]=> string(1) "3" ["i"]=> string(1) "1" ["second"]=> string(1) "2" } } ```

