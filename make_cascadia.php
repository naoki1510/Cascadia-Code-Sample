<?php

$ligatures = [
    '.=',
    '.-',
    ':=',
    '=:=',
    '__',
    '==',
    '!=',
    '===',
    '!==',
    '=/=',
    '<-<',
    '<<-',
    '<--',
    '<-',
    '<->',
    '->',
    '-->',
    '->>',
    '>->',
    '<=<',
    '<<=',
    '<==',
    '<=>',
    '==>',
    '=>>',
    '>=>',
    '>>=',
    '>>-',
    '>-',
    '<~>',
    '-<',
    '-<<',
    '=<<',
    '<~~',
    '<~',
    '~~',
    '~>',
    '~~>',
    '<<<',
    '<<',
    '<=',
    '<>',
    '>=',
    '>>',
    '>>>',
    '<|||',
    '<||',
    '<|',
    '<|>',
    '|>',
    '||>',
    '|||>',
    '<$',
    '<$>',
    '$>',
    '<+',
    '<+>',
    '+>',
    '<*',
    '<*>',
    '*>',
    '\\\\',
    '\\\\\\',
    '/*',
    '*/',
    '///',
    '//',
    '</',
    '<!--',
    '</>',
    '-->',
    '/>',
    '0xef',
    '1x2',
    '6:30',
    'x+y',
    'x-y',
    '*xyz',
    ';;',
    '::',
    ':::',
    '..',
    '...',
    '..<',
    '!!',
    '??',
    '%%',
    '&&',
    '||',
    '?.',
    '?:',
    '+',
    '++',
    '+++',
    '-',
    '--',
    '---',
    '*',
    '**',
    '***',
    '~=',
    '~-',
    'www',
    '-~',
    '~@',
    '^=',
    '?=',
    '/=',
    '/==',
    '|=',
    '||=',
    '#!',
    '##',
    '###',
    '####',
    '#{',
    '}#',
    '#[',
    ']#',
    '#(',
    '#?',
    '#_',
    '#_('
];

$parts = '';

foreach ($ligatures as $ligature) {
    $parts .= '
        <div class="sample">
            <h4 class="mono">' . htmlspecialchars($ligature) . '</h4>
            <pre>' . htmlspecialchars($ligature) . '</pre>
        </div>';
}

$html = file_get_contents('cascadia.html');

$start = '<!-- %ligature -->';
$end = '<!-- ligature% -->';
echo $html = mb_substr($html, 0, mb_stripos($html, $start) + mb_strlen($start)) .
    $parts .
    mb_substr($html, mb_strrpos($html, $end));
    
file_put_contents('cascadia.html', $html);
