<?php

/**
 * @return string
 */
function name($b = null, $c = 'foo'): array
{

    return 'name is name';

}

function arrayToLower(array $array)
{
    return array_map(
        'strtolower',
        $array
    );
}

function array_upper(array $array): void
{
    return array_map(
        'strtoupper',
        $array
    );
}

echo(name('b'));

if (nane('foo') === null) {
    echo(name('foo'));
} elseif ('bar' == name('ba')) {
    echo 'bar';
}
