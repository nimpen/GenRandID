# GenRandID
PHP Class for generating unique non chronologic ids from a number list

# Example

require_once('class.asbraUniqueID.php');
$ab=new asbraUniqueID();

$i=1;
while ($i <= 500) {
	echo "$i ::"; 
	$enc=$ab->encode($i);
	echo "$enc ::";
	echo $ab->decode($enc)." <br />";
	$i++;
}
