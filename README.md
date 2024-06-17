# Index of Refraction

## Story

In optics, the refractive index of a substance is a dimensionless number that describes how light goes through that medium.

When you put a glass jar into vegetable oil, it makes the jar kind of invisible.
The reason is that these two materials have the same index of refraction.

If we put multiple glass containers into that oil, it is really hard to find out where are the broken ones.

Your task is to write a function that helps with that problem.

## What are you going to learn?

- the use of `ReflectionClass`
- access `private` and `protected` properties and methods inside a class

## Tasks

1. Install the dependencies specified in `composer.json` by executing the `composer install` terminal command.
    - The `vendor` folder exists and contains at least a `phpunit` folder and an `autoload.php` file.

2. Implement the `getBrokenIndexes()` method of the `Oil` class to check where are the broken glasses.
    - The `getBrokenIndexes()` method returns an array of indexes (integers), where those `Glass` instances can be found, that has a `true` value stored in the `isBroken` property
    - The method uses `ReflectionClass` to find the broken glasses

3. Write at least 3 examples for what do you use `Reflection` for.
    - The `reflection_use_cases.md` file contains at least 3 examples of the proper use cases of `Reflection`

## General requirements

- You cannot make any changes to the `Glass` class

## Hints

- To verify your solution, you can run the `unit tests` in `tests/TestOil.php`.


## Background materials

- <i class="far fa-exclamation"></i> [PHP reflection API fundamentals](https://carlalexander.ca/php-reflection-api-fundamentals/)
- <i class="far fa-candy-cane"></i> [Index of Refraction demonstration](https://youtu.be/9Tj2KMZhfoc)
