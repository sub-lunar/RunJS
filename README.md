# RunJS

Execute NodeJS scripts on any old server. Linux 64 bit servers only
supported at this time, but binaries for other OSs may trivially
be added, just download them from
<https://nodejs.org/en/download/>. NodeJS 8.9.4 (current LTS
version at time of this writing) included for convenience.

```php
require_once(__DIR__ . '/runjs.php');

use SubLunar\RunJS;

RunJS\run('script.js');

$output_lines = RunJS\run('script.js', ['arg1', 'arg2', 'arg3']);

list($output_lines, $exit_code) = RunJS\run('script.js', [], TRUE);
```

The node binary is subject to the license found here:
<https://github.com/nodejs/node/blob/master/LICENSE>

This project is published under a MIT license:

```txt
The MIT License (MIT)

Copyright (c) 2018 Emanuel Tannert

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```
