The solution involves explicitly casting the ternary operation's result to a string before concatenating. This ensures that the output is always a string, preventing the parse error.

```php
<?php
echo "The result is: " . (string)(true ? 1 : 0);
?>
```
Alternatively, you can use more readable and robust string concatenation methods, separating the ternary logic:

```php
<?php
$result = (true ? 1 : 0);
echo "The result is: " . $result;
?>
```
This separates the calculation and output steps, enhancing code clarity and maintainability.