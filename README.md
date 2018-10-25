# manuadminmod_codx_getscreenshot

1. Open plugins/basiccommands.php
2. Register the commands

```
$mod->registerCommand("gs", '~^gs \S.*$~i',     "gs", $commands_basic);
```

3. Insert function from this file into the basiccommands.php
```
get_screenshot.php
```
