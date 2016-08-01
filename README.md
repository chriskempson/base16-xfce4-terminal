Base16 for XFCE4 Terminal
=========================

![Base16 XFCE4 Terminal](https://raw.github.com/illarionK/base16-xfce4-terminal/master/base16-xfce4-terminal.png)

## Installation Example

### Script

Open terminal and type:
```bash
$ git clone https://github.com/chriskempson/base16-xfce4-terminal
$ cd base16-xfce4-terminal
$ ./install base16-eighties.dark.terminalrc
```

### Alternative themes install
Open terminal and type:
```bash
$ git clone https://github.com/chriskempson/base16-xfce4-terminal
$ cd base16-xfce4-terminal
$ php convert2theme.php
$ cd themes
$ sudo cp *.theme /usr/share/xfce4/terminal/colorschemes/
```
Now you can choose theme from XFCE terminal -> Preferences -> Colors -> Presets.  
**Uninstall base16 themes:**  
```bash
$ sudo rm -r /usr/share/xfce4/terminal/colorschemes/base16-*.theme
```

### Manual

Run `mousepad ~/.config/xfce4/terminal/terminalrc` in the terminal

Copy lines from `base16-eighties.dark.terminalrc` file to your terminalrc file.  
*Note: If the terminalrc file is not empty, do not copy the `[Configuration]` line, as there should be only one in the beginning of the file.*

Close and open your terminal again to see changes
