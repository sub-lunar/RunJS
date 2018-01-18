# RunJS

Execute NodeJS scripts on any old server. Linux 64 bit servers only
supported at this time, but binaries for other OSs may trivially
be added, just download them from
<https://nodejs.org/en/download/>. NodeJS 8.9.4 (current LTS
version at time of this writing) included for convenience.

```php
require_once(__DIR__ . '/runjs.php');

use SubLunar\RunJS;

// just run a script
RunJS\run('script.js');

// run a script with three command line arguments and use the
// output
$output_lines = RunJS\run('script.js', ['arg1', 'arg2', 'arg3']);

// run a script and use the output and the exit code; the third
// TRUE argument changes the return value to
// array($output_lines, $exit_code)
list($output_lines, $exit_code) = RunJS\run('script.js', [], TRUE);
```

The node binary is subject to the license found here:
<https://github.com/nodejs/node/blob/master/LICENSE>

This project is published under a [MIT license](LICENSE.md).
