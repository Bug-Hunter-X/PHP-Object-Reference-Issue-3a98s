# PHP Object Reference Assignment Bug

This repository demonstrates a common error in PHP involving object references.  When objects are assigned, a new reference is created rather than a copy. This behavior can result in unexpected side effects, particularly when modifying objects passed to functions.

The `bug.php` file shows the problematic code. The `bugSolution.php` file offers a solution using cloning.