$pattern = '/<\/?[\w\s="-]+>/';

$text = '<p>Текст <strong>с тегами</strong>.</p>';
preg_match_all($pattern, $text, $matches);
print_r($matches[0]); // Выводим найденные теги
