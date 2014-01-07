Savant3
=======

Savant: The Simple, Elegant Template System for PHP

Savant is a powerful but lightweight object-oriented template system for PHP.

Unlike other template systems, Savant by default does not compile your templates into PHP; instead, it uses PHP itself as its template language so you don't need to learn a new markup system.

Why Use Savant for Templates?
-----------------------------

 * You don't need to learn a new language or markup to create a template. The template language is PHP, and the template file is a regular PHP file.
 * You don't have to worry about separate directories (or permissions on those directories) for compiled template sources, because Savant is not a compiling engine (the template scripts are already written in PHP).
 * Even though Savant is not itself a compiling system, you can write your own compiler and plug it into Savant; this means you can use any template markup system you like.
 * The Savant source code is easy to read, understand, and extend, because it is exceptionally well-commented.
 * The object-oriented plugin, filter, error, and compiler classes for Savant are easy to use, understand, and extend.
 * Because your template script is a regular PHP script, you can sprinkle it with comments and use phpDocumentor to document it.

Test suite
----------

     phpunit tests/
