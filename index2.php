<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png"/>
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png"/>
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png"/>
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="theme-light.css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Mono"/>
	<script src="https://kit.fontawesome.com/63535dd4e0.js"></script>
	<script defer src="script.js"></script>

	<title>cmd:/> home</title>
	<meta name="keywords" content="cmd.sh,cmd_site,cmd,command-line interface,command prompt,console,terminal,shell,interpreter,gnu linux,linux,bash,windows,dos,ms-dos,pc-dos,freedos,dosbox,wiersz poleceń,konsola,powłoka"/>
	<meta name="description" content="Learn commands from the GNU Linux, Windows and DOS"/>
</head>
<body onscroll="markAnchor()">
	<header>
		<div id="header-content">
			<h1>
				<a id="menu" href="javascript:void(0);" title="Menu" onclick="changeMenu()">
				<i class="fa fa-list-ul fa-fw"></i></a>
			</h1>
			<h1><a href="index.php"><i class="fa fa-terminal"></i>cmd.sh</a></h1>
			<ul>
				<li><a href="linux.php?lang=en&theme=light"><i class="fab fa-linux"></i> <span>linux</span></a></li>
				<li><a href="win-dos.php?lang=en&theme=light"><i class="fab fa-windows"></i> <span>windows cmd</span></a></li>
				<li>
					<a href="?lang=en&theme=blue" title="Motyw"><i class="fa fa-adjust"></i></a>
				</li>
				<li>
											<a href="?lang=pl&theme=light" title="wersja polska">
							<img src="img/polska.png" alt="Polska"/>
						</a>
									</li>
			</ul>
			<div style="clear: both"></div>
		</div>
	</header>
	<div id="wrapper">
<nav>
	<hr>
	<h2><a href="index.php?lang=en&theme=light"><i class="fa fa-home fa-fw"></i> home</a></h2>
	<hr>
	<ul>
		<li><a href="how-to.php?lang=en&theme=light"><i class="far fa-lightbulb fa-fw"></i> how to ...</a></li>
		<li><a href="screenshots-txt.php?lang=en&theme=light"><i class="fa fa-terminal fa-fw"></i> screenshots (txt)</a></li>
		<li><a href="screenshots-img.php?lang=en&theme=light"><i class="far fa-image fa-fw"></i> screenshots (img)</a></li>
		<li><a href="links.php?lang=en&theme=light"><i class="fa fa-link fa-fw"></i> links</a></li>
		<li><a href="guest-book.php?lang=en&theme=light"><i class="fa fa-address-book fa-fw"></i> guest book</a></li>
		<li><a href="about.php?lang=en&theme=light"><i class="fa fa-info-circle fa-fw"></i> about</a></li>
	</ul>
	<hr>
	<h2><a href="linux.php?lang=en&theme=light"><i class="fab fa-linux fa-fw"></i> linux</a></h2>
	<hr>
	<h2><a href="win-dos.php?lang=en&theme=light"><i class="fab fa-windows fa-fw"></i> win cmd / dos</a></h2>
	<hr>
</nav>
<main onclick="hideMenuByClickOutsideIt()">

<h2><i class="fa fa-home"></i> home</h2>
<hr>

<h3>Let's learn the Command-Line Interface!</h3>
<section>
	<h4><i class="fab fa-linux"></i> GNU Linux (BASH)</h4>
	<p>
		GNU Linux is an operating system. In most of the distributions (e.g. <a target="_blank" href="https://ubuntu.com/">Ubuntu</a>, <a target="_blank" href="https://www.linuxmint.com/">Linux Mint</a>), we can use it with CLI (Command-Line Interface) and GUI (Graphical User Interface).
	</p>
	<p>
		If we are just using a GUI, we can use a terminal emulator (pseudoterminal) or go to the CLI.
	</p>
	<p>
		To enter to the CLI (not terminal emulator), press <kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>F2</kbd>. Instead of <kbd>F2</kbd> can be <kbd>F3</kbd>, <kbd>F4</kbd>, <kbd>F5</kbd>, <kbd>F6</kbd> or <kbd>F1</kbd>.
	</p>
	<p>
		If you want to go back to the GUI, press <kbd>Alt</kbd> + <kbd>F1</kbd>. Instead of <kbd>F1</kbd> can be <kbd>F6</kbd>, <kbd>F7</kbd> or other function key. You can also quickly switch between instances of the command line with <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-right"></i></kbd> or <kbd>Alt</kbd> + <kbd><i class="fas fa-arrow-left"></i></kbd>.
	</p>

	<pre><font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ pwd
/home/karol
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ whatis pwd
pwd (1)              - print name of current/working directory
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ whatis whatis
whatis (1)           - display one-line manual page descriptions
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ whatis ls
ls (1)               - list directory contents
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ ls
<font color="#729FCF"><b>Apps</b></font>  <font color="#729FCF"><b>Desktop</b></font>  <font color="#729FCF"><b>Documents</b></font>  <font color="#729FCF"><b>Downloads</b></font>  <font color="#729FCF"><b>Music</b></font>  <font color="#729FCF"><b>Pictures</b></font>  <font color="#729FCF"><b>Public</b></font>  <font color="#729FCF"><b>Templates</b></font>  <font color="#729FCF"><b>Videos</b></font>
<font color="#8AE234"><b>karol@aspireOne</b></font>:<font color="#729FCF"><b>~</b></font>$ ls -l
total 36
drwxrwxr-x 11 karol karol 4096 Nov 23 19:44 <font color="#729FCF"><b>Apps</b></font>
drwxr-xr-x  5 karol karol 4096 Dec 10 13:29 <font color="#729FCF"><b>Desktop</b></font>
drwxr-xr-x  3 karol karol 4096 Oct 24 15:51 <font color="#729FCF"><b>Documents</b></font>
drwxr-xr-x  3 karol karol 4096 Dec  9 20:13 <font color="#729FCF"><b>Downloads</b></font>
drwxr-xr-x  7 karol karol 4096 Dec  8 08:21 <font color="#729FCF"><b>Music</b></font>
drwxr-xr-x  3 karol karol 4096 Oct 24 13:35 <font color="#729FCF"><b>Pictures</b></font>
drwxr-xr-x  2 karol karol 4096 Oct 24 13:21 <font color="#729FCF"><b>Public</b></font>
drwxr-xr-x  2 karol karol 4096 Oct 24 13:21 <font color="#729FCF"><b>Templates</b></font>
drwxr-xr-x  2 karol karol 4096 Dec  5 21:39 <font color="#729FCF"><b>Videos</b></font>
</pre>


</section>
<hr>
<section>
	<h4><i class="fab fa-windows"></i> Windows CMD / DOS</h4>
	
	</p>
	<p>
		Windows is an operating system. Unlike GNU Linux, Windows does not have a CLI mode that works without a GUI. But we can use the command interpreter in the GUI.
	</p>
	<p>
		Cmd.exe is a command interpreter in Windows. Cmd.exe is derived from command.com - a DOS interpreter. Because of this, many cmd.exe commands are compatible with DOS commands.
	</p>
	<p>
		To run cmd.exe, click the Start Menu and start typing <em>cmd.exe</em> or go: Start > Programs > System tools > Command prompt.
	</p>
	<p>
		DOS (Disk Operating System) was popular in the 80s and early 90s. It doesn't have GUI, so we can use DOS only in Command-Line Interface. Nowadays, DOS is practically not used as the primary operating system.
	</p>
	<p>
		On modern computers, we will not run the original DOS versions (MS-DOS / PC-DOS). However, we can run <a target="_blank" href="http://freedos.org/">FreeDOS</a> - a DOS compatible operating system. There are also DOS emulators. The most popular of them is <a target="_blank" href="https://www.dosbox.com">DOSBox</a>.
	</p>
	<pre>
Microsoft Windows [Version 10.0.17134.472]
(c) 2018 Microsoft Corporation. Wszelkie prawa zastrze¿one.

C:\Users\Karol>help help
Provides help information for Windows commands.

HELP [command]

command - displays help information on that command.

C:\Users\Karol>dir
Volume in drive C has no label.
Volume Serial Number is 36A7-DDFF

Directory of C:\Users\Karol

30.12.2018  19:19    &lt;DIR&gt;          .
30.12.2018  19:19    &lt;DIR&gt;          ..
31.12.2018  16:15    &lt;DIR&gt;          3D Objects
31.12.2018  16:15    &lt;DIR&gt;          Contacts
31.12.2018  16:15    &lt;DIR&gt;          Desktop
31.12.2018  16:15    &lt;DIR&gt;          Documents
01.01.2019  04:07    &lt;DIR&gt;          Downloads
31.12.2018  16:15    &lt;DIR&gt;          Favorites
31.12.2018  16:15    &lt;DIR&gt;          Links
31.12.2018  16:15    &lt;DIR&gt;          Music
31.12.2018  09:51    &lt;DIR&gt;          OneDrive
31.12.2018  16:15    &lt;DIR&gt;          Pictures
31.12.2018  16:15    &lt;DIR&gt;          Saved Games
31.12.2018  16:15    &lt;DIR&gt;          Searches
31.12.2018  16:15    &lt;DIR&gt;          Videos
           0 File(s)              0 bytes
          15 Dir(s)  63 127 109 632 bytes free
</pre>	<pre>
  Name           Total           Conventional       Upper Memory                
  --------  ----------------   ----------------   ----------------              
  SYSTEM      16,784   (16K)     10,480   (10K)      6,304    (6K)              
  COMMAND      4,064    (4K)          0    (0K)      4,064    (4K)              
  UDVD2        2,000    (2K)          0    (0K)      2,000    (2K)              
  FDAPM          928    (1K)          0    (0K)        928    (1K)              
  CTMOUSE      3,104    (3K)          0    (0K)      3,104    (3K)              
  SHSUCDX     11,008   (11K)          0    (0K)     11,008   (11K)              
  Free       710,896  (694K)    640,496  (625K)     70,400   (69K)              
  Drives Assigned                                                               
Drive  Driver   Unit                                                            
  D:   FDCD0001   0                                                             
2 drive(s) available.                                                           
                                                                                
Done processing startup files C:\FDCONFIG.SYS and C:\AUTOEXEC.BAT               
                                                                                
Type HELP to get support on commands and navigation.                            
                                                                                
Welcome to the FreeDOS 1.2 operating system (http://www.freedos.org)            
                                                                                
C:\>ver                                                                         
                                                                                
FreeCom version 0.84-pre2 XMS_Swap [Aug 28 2006 00:29:00]                       
C:\>
</pre>
</section>

		</main>
	</div><!--WRAPPER-->
	<footer>
		<h2>&copy; copyright 2019</h2>
	</footer>
	<div id="prv-billboard"></div>
</body>
</html>