--TEST--
Preloading: Loadable class checking (2)
--INI--
opcache.enable=1
opcache.enable_cli=1
opcache.optimization_level=-1
opcache.preload={PWD}/preload_loadable_classes_2.inc
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
Unreachable
--EXPECTF--
Fatal error: Undefined constant 'UNDEF' in Unknown on line 0

Fatal error: Failed to resolve initializers of class Test during preloading in Unknown on line 0
