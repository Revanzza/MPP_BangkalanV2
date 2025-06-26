<?php

function modifyContent(string $content): string
{
    $replacements = [
        '<h2>' => '<h2 class="mt-6 mb-4 text-4xl font-bold">',
        '</h2>' => '</h2>',
        '<h3>' => '<h3 class="mt-4 mb-2 text-2xl font-semibold">',
        '</h3>' => '</h3>',
        '<strong>' => '<strong class="font-bold">',
        '</strong>' => '</strong>',
        '<em>' => '<em class="italic">',
        '</em>' => '</em>',
        '<u>' => '<u class="underline">',
        '</u>' => '</u>',
        '<s>' => '<s class="line-through">',
        '</s>' => '</s>',
        '<ul>' => '<ul class="pl-6 my-4 list-disc">',
        '<ol>' => '<ol class="pl-6 my-4 list-decimal">',
        '<li>' => '<li class="mb-2">',
        '<blockquote>' => '<blockquote class="pl-4 my-4 italic text-gray-600 border-l-4">',
        '</blockquote>' => '</blockquote>',
        '<code>' => '<code class="bg-gray-100 px-1 py-0.5 rounded text-sm text-pink-600 font-mono">',
        '</code>' => '</code>',
        '<pre>' => '<pre class="p-4 overflow-x-auto font-mono text-sm text-gray-800 bg-gray-100 rounded">',
        '</pre>' => '</pre>',
        '<a ' => '<a class="text-blue-600 underline hover:text-blue-800" ',
    ];

    return str_replace(array_keys($replacements), array_values($replacements), $content);
}