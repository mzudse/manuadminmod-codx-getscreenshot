# manuadminmod_codx_getscreenshot

Tested with ManuAdminMod v0.11.5 beta.

1. Open plugins/basiccommands.php
2. Register the commands
```
$mod->registerCommand("getss", '~^getss \S.*$~i',"getss", $commands_basic);
```

3. Insert function from this file into the basiccommands.php
```
get_screenshot.php
```
