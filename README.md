# PHP Ternary Operator Parse Error
This repository demonstrates a subtle but common error in PHP that occurs when using the ternary operator within an echo statement.  The problem stems from directly concatenating the result of a ternary operation that might produce a non-string value. If the ternary returns a number, the concatenation fails, leading to a parse error.

The `bug.php` file shows the erroneous code, and `bugSolution.php` provides a corrected version that handles non-string outputs gracefully.