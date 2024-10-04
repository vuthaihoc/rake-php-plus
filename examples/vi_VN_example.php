<?php

// Para ejecutar este ejemplo desde la línea de comando.:
// $ cd examples
// $ php es_AR_example.php "Algún texto de ejemplo del que me gustaría extraer palabras clave."

require '../vendor/autoload.php';

use DonatelloZa\RakePlus\RakePlus;

if ($argc < 2) {
    echo "Vui lòng chỉ định văn bản bạn muốn phân tích, ví dụ:\n";
    echo "php vi_VN_example.php \"Một số văn bản ví dụ mà tôi muốn trích xuất từ khóa.\"\n";
    exit(1);
}

$keywords = RakePlus::create($argv[1], 'vi_VN')->keywords();
print "Kết quả từ khóa: \"{$argv[1]}\"\n";
print_r($keywords);

$phrases = RakePlus::create($argv[1], 'vi_VN')->scores();
print "Kết quả cụm từ: \"{$argv[1]}\"\n";
print_r($phrases);
