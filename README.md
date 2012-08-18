BraincraftedHumanDateBundle
===========================

[![Build Status](https://secure.travis-ci.org/braincrafted/human-date-bundle.png?branch=master)](http://travis-ci.org/braincrafted/human-date-bundle)

Made by in Vienna [Florian Eckerstorfer](http://florianeckerstorfer.com).


About
-----

Transforms the given `\DateTime` object into a human date.

Installation
------------

BraincraftedHumanDateBundle is on Packagist: `braincrafted/human-date-bundle`

Usage
-----

For example, assuming that today is `2012-08-18`:

    <?php

    $t = new HumanDateTransformer();

    echo $t->transform(new DateTime('now'));
    // 'Today'

    echo $t->transform(new DateTime('+1 day'));
    // 'Tomorrow'

    echo $t->transform(new DateTime('-1 day'));
    // 'Yesterday'

    echo $t->transform(new DateTime('2012-08-21'));
    // 'Next Tuesday'

    echo $t->transform(new DateTime('2012-09-30'));
    // 'September 30'

    echo $t->transform(new DateTime('2013-03-30'));
    // 'March 30, 2013'


There is also a Twig extension included in the bundle

    episode.airDate|humanDate

License
-------

The MIT License (MIT)
Copyright (c) 2012 Florian Eckerstorfer

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
