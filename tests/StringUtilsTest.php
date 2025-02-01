<?php

require("src/StringUtils.php");

require("vendor/autoload.php");

use Webmozart\Assert\Assert;

Assert::eq(StringUtils\capitalize('hello'), 'Hello');
Assert::eq(StringUtils\capitalize(''), '');
