In PHP, a common yet subtle error arises when dealing with object references and assignments.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = $obj1; // Assignment, not cloning
$obj2->value = 10;

echo $obj1->value; // Outputs 10, unexpectedly
```

Because PHP uses object references by default, assigning `$obj1` to `$obj2` doesn't create a copy; it creates another reference to the *same* object. Modifying `$obj2` directly changes `$obj1`.

This behavior can lead to unexpected side effects when working with objects in functions or methods, potentially leading to difficult-to-debug issues.