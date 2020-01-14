<?php
//======================================================================
// Patrick Roelofs | 584025
//======================================================================
?>
<?php

function customTextParser($content)
{
    $content = chop($content);

    $customcodeRegex = array(
        0 => '/\[b\](.+?)\[\/b\]/s',
        1 => '/\[i\](.+?)\[\/i\]/s',
        2 => '/\[url\](.+?)\[\/url\]/s',
        3 => '/\[image\](.+?)\[\/image\]/s',
        4 => '/\[p\](.+?)\[\/p\]/s',
        5 => '/\[h1\](.+?)\[\/h1\]/s',
        6 => '/\[h2\](.+?)\[\/h2\]/s',
        7 => '/\[h3\](.+?)\[\/h3\]/s',
        8 => '/\[h4\](.+?)\[\/h4\]/s',
        9 => '/\[h5\](.+?)\[\/h5\]/s',
        10 => '/\[h6\](.+?)\[\/h6\]/s',
    );

    $customcodeReplace = array(
        0 => '<b>$1</b>',
        1 => '<i>$1</i>',
        2 => '<a href="$1" target="_blank">$1</a>',
        3 => '<img src="$1">',
        4 => '<p>$1</p>',
        5 => '<h1>$1</h1>',
        6 => '<h2>$1</h2>',
        7 => '<h3>$1</h3>',
        8 => '<h4>$1</h4>',
        9 => '<h5>$1</h5>',
        10 => '<h6>$1</h6>',
    );

    ksort($customcodeRegex);
    ksort($customcodeReplace);

    $customCodeReplaced = preg_replace($customcodeRegex, $customcodeReplace, $content);
    $contentWithNewLine = nl2br($customCodeReplaced);

    return $contentWithNewLine;
}