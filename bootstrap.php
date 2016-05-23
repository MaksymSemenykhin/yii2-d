/**
 * Debug function
 * d($var);
 */
function d($var, $exit = true)
{

    $caller = array_shift(debug_backtrace(1));

    echo '<code>File: '.$caller['file'].' / Line: '.$caller['line'].'</code>';
    echo '<pre>';
    yii\helpers\VarDumper::dump($var, 10, true);
    echo '</pre>';
    if($exit)
        exit;
}
