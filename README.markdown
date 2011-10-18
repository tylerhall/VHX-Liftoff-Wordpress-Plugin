VHX-Liftoff-Wordpress-Plugin
=========

A WordPress plugin that enables your website to work with [VirtualHostX Lift Off](http://clickontyler.com/virtualhostx/liftoff/).

INSTALL
-------

The Lift Off plugin installs like any other WordPress plugin.

 * Copy `liftoff.php` into your blog's `wp-content/plugins/` directory.
 * Navigate to your blog's Admin Dashboard, click on "Plugins" and activate "VirtualHostX Liftoff".

You're done!

TECHNICAL DESCRIPTION
---------------------

The Lift Off service inserts a `VHXOriginalHost` cookie into each HTTP request it proxies. This
plugin looks for that cookie and, if detected, alters your blog's URL on the fly to match the
original Lift Off hostname. It does this by inserting filters for

 * option_home
 * option_siteurl
 * theme_root_uri

An earlier version of Lift Off inserted a special HTTP header instead of relying on a cookie, but we
found certain security hardened versions of PHP stripped out the header. Cookies, however, made it
through.

LICENSE
-------

The MIT License

Copyright (c) 2011 Tyler Hall <tylerhall AT gmail DOT com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
