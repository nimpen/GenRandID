# GenRandID
PHP Class for generating unique non chronologic ids from a number list

# Example
```php
require_once('class.GenRandID.php');
$ab=new GenRandID();

$i=1;
while ($i <= 500) {
	echo "$i ::"; 
	$enc=$ab->encode($i);
	echo "$enc ::";
	echo $ab->decode($enc)." <br />";
	$i++;
}
```
