# substr_position() - PHP 7.1+

## Installation

```
composer require carloscarucce/substr-position
```

## Examples

Examples:
```php
//Basic usage
$original = 'test';
$valueToAdd = 'abc';
substr_position($original, $valueToAdd, 2); //string(5) "teabc"

//Limiting result size
substr_position("test", "abc", 2, 4); //string(4) "teab"

//Adding to a position beyond original string maxlength
substr_position("test", "abc", 10); //string(13) "test      abc"
```
