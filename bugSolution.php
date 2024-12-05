To avoid this issue, create a clone of the object instead of making a reference:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = clone $obj1; // Create a copy
$obj2->value = 10;

echo $obj1->value; // Outputs 0, as expected
echo $obj2->value; // Outputs 10
```

Using the `clone` keyword ensures that modifications to `$obj2` do not affect `$obj1`.  Remember this distinction when working with objects in PHP to prevent unexpected behavior.