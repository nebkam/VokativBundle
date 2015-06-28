# VokativBundle
Symfony 2 Twig filter - Serbian grammar helper for addressing people.

Usage:
```twig
Pozdrav, {{ user.name|vokativ }}
```

..and if `user.name` is i.e. "Goran", it will output "Pozdrav, Gorane"

## Features
* useful for adressing people by their **names**, although it should work on all nouns in Serbian
* you don't have to worry about the gender of the noun, it should handle male and female nouns correctly

## Keep in mind
* the filter works on Serbian **Latin** input/output only
* the filter does not try to correct your spelling (first letter uppercase on proper nouns and names etc.)

## Credits
This is the unofficial port of http://vokativ.vokabular.org to Symfony 2, whose authors are:
* [Немања Аврамовић](http://www.avramovic.info/)
* [Филип Милетић](http://www.hdlfactory.com/~filmil/)
* Милош Вукотић

## Licence
http://creativecommons.org/licenses/by-sa/3.0/rs/
