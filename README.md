# LKT Tools

## Array tools

### arrayAverage

Returns the AVG value from a numeric array

| Arg    | Type     | Description   |
|--------|----------|---------------|
| $array | number[] | Input numbers |

#### Usage

```php
\Lkt\Tools\Arrays\arrayAverage([5, 5]); // Will return 5
\Lkt\Tools\Arrays\arrayAverage([7, 3]); // Will return 5
```

### arrayPushUnique

Push an item to an array if not exists yet

| Arg    | Type  | Description           |
|--------|-------|-----------------------|
| $array | any[] | Array                 |
| $datum | any   | Any datum to be added |

#### Usage

```php
$array = [1, 3];
\Lkt\Tools\Arrays\arrayPushUnique($array, 2); // Array content: [1, 3, 2]
\Lkt\Tools\Arrays\arrayPushUnique($array, 3); // Array content: [1, 3, 2]
\Lkt\Tools\Arrays\arrayPushUnique($array, 4); // Array content: [1, 3, 2, 4]
```

### arrayKeyPushUnique

Adds a key to an array only if not defined yet

| Arg    | Type   | Description           |
|--------|--------|-----------------------|
| $array | any[]  | Array                 |
| $key   | string | Array key             |
| $datum | any    | Any datum to be added |

#### Usage

```php
$array = ['one' => 1, 'three' => 3];
\Lkt\Tools\Arrays\arrayKeyPushUnique($array, 'two', 2); // Array content: ['one' => 1, 'three' => 3, 'two' => 2]
\Lkt\Tools\Arrays\arrayKeyPushUnique($array, 'three', 6); // Array content: ['one' => 1, 'three' => 3, 'two' => 2]
\Lkt\Tools\Arrays\arrayKeyPushUnique($array, 'four', 4); // Array content: ['one' => 1, 'three' => 3, 'two' => 2, 'four' => 4]
```

### arrayRemoveDatum

Finds data in an array and removes it.

If it's a numeric indexed array, it will reset indexes

| Arg    | Type   | Description             |
|--------|--------|-------------------------|
| $array | any[]  | Array                   |
| $datum | any    | Any datum to be removed |

#### Usage

```php
$array = ['one' => 1, 'three' => 3];
\Lkt\Tools\Arrays\arrayRemoveDatum($array, 1); // Array content: ['three' => 3]
```

### arrayValuesRecursive

Converts input array and array properties to one single array with all properties inside

| Arg    | Type   | Description             |
|--------|--------|-------------------------|
| $array | any[]  | Array                   |

#### Usage

```php

$array = ['test' => 'Test', 'test2'=> ['a' => 'A', 'b' => 'B']];
\Lkt\Tools\Arrays\arrayValuesRecursive($array, 1); // Array content: ['Test', 'A', 'B']
```

### arrayValuesRecursiveWithKeys

Same as `arrayValuesRecursive` but keeping a key structure

| Arg    | Type   | Description             |
|--------|--------|-------------------------|
| $array | any[]  | Array                   |

#### Usage

```php

$array = ['test' => 'Test', 'test2'=> ['a' => 'A', 'b' => 'B']];
\Lkt\Tools\Arrays\arrayValuesRecursiveWithKeys($array, 1); // Array content: ['test' => 'Test', 'test2.a' => 'A', 'test2.b' => 'B']
```


### compareArrays

Compares two arrays and determine which keys were added and/or removed

| Arg     | Type   | Description             |
|---------|--------|-------------------------|
| $array1 | any[]  | Array                   |
| $array2 | any[]  | Array                   |

#### Usage

```php

$arr1 = [1, 2, 3];
$arr2 = [1, 2, 4];

\Lkt\Tools\Arrays\compareArrays($arr1, $arr2); // Result: ['added' => [4], 'deleted' => [3]]
```


### getArrayFirstPosition

Returns the first element in an array no matter if it has numeric or string indexes

| Arg    | Type   | Description             |
|--------|--------|-------------------------|
| $array | any[]  | Array                   |

#### Usage

```php

$array = [1, 2, 3];

\Lkt\Tools\Arrays\getArrayFirstPosition($array); // Result: 1
```


### implodeWithAND

Implodes array elements with ` AND ` string

| Arg    | Type   | Description             |
|--------|--------|-------------------------|
| $array | any[]  | Array                   |

#### Usage

```php

$array = [1, 2, 3];

\Lkt\Tools\Arrays\implodeWithAND($array); // Result: '1 AND 2 AND 3'
```


### implodeWithOR

Implodes array elements with ` OR ` string

| Arg    | Type   | Description             |
|--------|--------|-------------------------|
| $array | any[]  | Array                   |

#### Usage

```php

$array = [1, 2, 3];

\Lkt\Tools\Arrays\implodeWithOR($array); // Result: '1 OR 2 OR 3'
```

## Color

### decToHex

Converts a rgb color into hexadecimal string

| Arg    | Type           | Description                                           |
|--------|----------------|-------------------------------------------------------|
| $color | [int, int int] | A 3 values array containing (red, green, blue) values |

#### Usage

```php
\Lkt\Tools\Color\decToHex([255, 255, 255]); // Result: #ffffff
\Lkt\Tools\Color\decToHex([255, 255, 0]); // Result: #ffff00
```

### hexToDec

Converts a hexadecimal color into rgb array

| Arg    | Type   | Description                      |
|--------|--------|----------------------------------|
| $color | string | A valid hexadecimal string color |

#### Usage

```php
\Lkt\Tools\Color\hexToDec('#ffffff'); // Result: [255, 255, 255]
\Lkt\Tools\Color\hexToDec('#ffff00'); // Result: [255, 255, 0]
```

## Pagination

### getTotalPages

Calculate the max number of pages

| Arg            | Type | Description                    |
|----------------|------|--------------------------------|
| $amountOfItems | int  | Amount of elements to paginate |
| $itemsPerPage  | int  | Max elements shown per page    |

#### Usage

```php
\Lkt\Tools\Pagination\getTotalPages(9, 5); // Result: 2
\Lkt\Tools\Pagination\getTotalPages(11, 5); // Result: 3
```

## Parse

### clearInput

Sanitizes an input string

| Arg           | Type   | Description                 |
|---------------|--------|-----------------------------|
| $value        | string | Datum                       |

#### Usage

```php
\Lkt\Tools\Parse\clearInput('   \Hello world'); // Result: 'Hello world'
```

### removeDuplicatedWitheSpices

Removes all duplicated withe spaces and replace it with a single space 

| Arg           | Type   | Description                 |
|---------------|--------|-----------------------------|
| $value        | string | Datum                       |

#### Usage

```php
\Lkt\Tools\Parse\removeDuplicatedWitheSpices('Hello     world'); // Result: 'Hello world'
```