<?php /*%%SmartyHeaderCode:14414f424910b74624-81511249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c71cae1afa5c9517f9411e00ce9499297f87f62' => 
    array (
      0 => '.\\templates\\log.tpl',
      1 => 1327762713,
      2 => 'file',
    ),
    'e0276046ddaab007aafc8c83d343afa407e1052c' => 
    array (
      0 => '.\\templates\\projectbase.tpl',
      1 => 1327762713,
      2 => 'file',
    ),
    '325c040ac3eb2e57c3cb2db39552570ef3cca8a8' => 
    array (
      0 => '.\\templates\\main.tpl',
      1 => 1327762713,
      2 => 'file',
    ),
    '1a44282d013b0ddc1fdf40ca6ea0e2561e236bc7' => 
    array (
      0 => '.\\templates\\jsconst.tpl',
      1 => 1327762713,
      2 => 'file',
    ),
    '78dfd564017866b2a07d32220e5f711a454b3ecb' => 
    array (
      0 => '.\\templates\\nav.tpl',
      1 => 1327762713,
      2 => 'file',
    ),
    '8621d053279a5f25a6f5023ee092a9dce34a4fb1' => 
    array (
      0 => '.\\templates\\refbadges.tpl',
      1 => 1327762713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14414f424910b74624-81511249',
  'variables' => 
  array (
    'version' => 0,
    'stylesheet' => 0,
    'javascript' => 0,
    'googlejs' => 0,
    'supportedlocales' => 0,
    'SCRIPT_NAME' => 0,
    'requestvars' => 0,
    'var' => 0,
    'val' => 0,
    'locale' => 0,
    'currentlocale' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f42491156fd7',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f42491156fd7')) {function content_4f42491156fd7($_smarty_tpl) {?><?php echo '<?'; ?>xml version="1.0" encoding="utf-8"<?php echo '?>'; ?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <head> <title>
    
gitphp 0.2.6 :: test4.git/log
    </title> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <link rel="alternate" title="test4.git log (Atom)" href="/gitphp/index.php?p=test4.git&amp;a=atom" type="application/atom+xml" /> <link rel="alternate" title="test4.git log (RSS)" href="/gitphp/index.php?p=test4.git&amp;a=rss" type="application/rss+xml" /> <link rel="stylesheet" href="css/gitphp.min.css" type="text/css" /> <link rel="stylesheet" href="css/gitphpskin.min.css" type="text/css" /> <link rel="stylesheet" href="css/ext/jquery.qtip.css" type="text/css" /> <script src="js/ext/require.js"></script> <script type="text/javascript">

var GitPHP = GitPHP || {};

GitPHP.Resources = {
	Loading: "Loading…",
	LoadingBlameData: "Loading blame data…",
	Snapshot: "snapshot",
	NoMatchesFound: 'No matches found for "%1"'
};

GitPHP.Snapshot = {

	Formats: {
				"tar": "tar",				"zip": "zip",				"tbz2": "tar.bz2",				"tgz": "tar.gz"			}

}
		
</script> <script type="text/javascript">
    var GitPHPJSPaths = {
			jquery: 'ext/jquery-1.7.1.min'
	    };
    
        GitPHPJSPaths.common = "common.min";
        

    var GitPHPJSModules = null;
    
    GitPHPJSModules = ['common'];
    

    require({
    	baseUrl: 'js',
	paths: GitPHPJSPaths,
	priority: ['jquery']
    }, GitPHPJSModules);
    </script> </head> <body> <div class="page_header"> <a href="http://git-scm.com" title="git homepage"> <img src="images/git-logo.png" width="72" height="27" alt="git" class="logo" /> </a> <div class="lang_select"> <form action="/gitphp/index.php" method="get" id="frmLangSelect"> <div> <input type="hidden" name="p" value="test4.git" /> <input type="hidden" name="a" value="log" /> <input type="hidden" name="h" value="8fc725be14c1c800ea0c04232b4a4e8e8d6133bc" /> <label for="selLang">language:</label> <select name="l" id="selLang"> <option selected="selected" value="en_US">English (en_US)</option> <option  value="de_DE">Deutsch (de_DE)</option> <option  value="fr_FR">Français (fr_FR)</option> <option  value="ja_JP">日本語 (ja_JP)</option> <option  value="ru_RU">Русский (ru_RU)</option> <option  value="zh_CN">中文简体 (zh_CN)</option> </select> <input type="submit" value="set" id="btnLangSet" /> </div> </form> </div> <a href="index.php">projects</a> / 
  <a href="/gitphp/index.php?p=test4.git&amp;a=summary">test4.git</a>
       / log
        <form method="get" action="index.php" enctype="application/x-www-form-urlencoded"> <div class="search"> <input type="hidden" name="p" value="test4.git" /> <input type="hidden" name="a" value="search" /> <input type ="hidden" name="h" value="8fc725be14c1c800ea0c04232b4a4e8e8d6133bc" /> <select name="st"> <option  value="commit">commit</option> <option  value="author">author</option> <option  value="committer">committer</option> <option  value="file">file</option> </select> search: <input type="text" name="s" /> </div> </form> </div> <div class="page_nav"> <a href="/gitphp/index.php?p=test4.git&amp;a=summary">summary</a>
      | 
        <a href="/gitphp/index.php?p=test4.git&amp;a=shortlog&amp;h=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc">shortlog</a>
      | 
        log
      | 
        <a href="/gitphp/index.php?p=test4.git&amp;a=commit&amp;h=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc">commit</a>
      | 
        <a href="/gitphp/index.php?p=test4.git&amp;a=commitdiff&amp;h=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc">commitdiff</a>
      | 
        <a href="/gitphp/index.php?p=test4.git&amp;a=tree&amp;hb=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc">tree</a> <br />
        HEAD
      &sdot; 
        prev
      &sdot; 
        next
      <br /> </div> <div class="title"> <a href="/gitphp/index.php?p=test4.git&amp;a=commit&amp;h=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc" class="title"><span class="age">95 min ago</span>blab lab lba</a> <span class="refs"> <span class="head"> <a href="/gitphp/index.php?p=test4.git&amp;a=shortlog&amp;h=refs/heads/master">master</a> </span> </span> </div> <div class="title_text"> <div class="log_link"> <a href="/gitphp/index.php?p=test4.git&amp;a=commit&amp;h=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc">commit</a> | <a href="/gitphp/index.php?p=test4.git&amp;a=commitdiff&amp;h=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc">commitdiff</a> | <a href="/gitphp/index.php?p=test4.git&amp;a=tree&amp;h=646965a29773b8389e8a6f217c640f9fb5cc1dba&amp;hb=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc">tree</a> <br /> <a href="/gitphp/index.php?p=test4.git&amp;a=log&amp;h=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc&amp;pg=0&amp;m=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc">select for diff</a> <br /> </div> <em>poiuytrez [Mon, 20 Feb 2012 11:47:11 Pacific Standard Time]</em><br /> </div> <div class="log_body">
                             blab lab lba
              <br /> <br /> </div> <div class="title"> <a href="/gitphp/index.php?p=test4.git&amp;a=commit&amp;h=3a11b50e370312ec4ad6c3ea8eeb23c4bf68d8f6" class="title"><span class="age">95 min ago</span>a new line has been added. Cool</a> <span class="refs"> </span> </div> <div class="title_text"> <div class="log_link"> <a href="/gitphp/index.php?p=test4.git&amp;a=commit&amp;h=3a11b50e370312ec4ad6c3ea8eeb23c4bf68d8f6">commit</a> | <a href="/gitphp/index.php?p=test4.git&amp;a=commitdiff&amp;h=3a11b50e370312ec4ad6c3ea8eeb23c4bf68d8f6">commitdiff</a> | <a href="/gitphp/index.php?p=test4.git&amp;a=tree&amp;h=7a4178e49f7abb1a53a05974bd7f83e19f777a19&amp;hb=3a11b50e370312ec4ad6c3ea8eeb23c4bf68d8f6">tree</a> <br /> <a href="/gitphp/index.php?p=test4.git&amp;a=log&amp;h=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc&amp;pg=0&amp;m=3a11b50e370312ec4ad6c3ea8eeb23c4bf68d8f6">select for diff</a> <br /> </div> <em>poiuytrez [Mon, 20 Feb 2012 11:46:45 Pacific Standard Time]</em><br /> </div> <div class="log_body">
                             a new line has been added. Cool
              <br /> <br /> </div> <div class="title"> <a href="/gitphp/index.php?p=test4.git&amp;a=commit&amp;h=e1dfb0010e4829ecaee6a3769e7cfc195848e689" class="title"><span class="age">96 min ago</span>test added</a> <span class="refs"> </span> </div> <div class="title_text"> <div class="log_link"> <a href="/gitphp/index.php?p=test4.git&amp;a=commit&amp;h=e1dfb0010e4829ecaee6a3769e7cfc195848e689">commit</a> | <a href="/gitphp/index.php?p=test4.git&amp;a=commitdiff&amp;h=e1dfb0010e4829ecaee6a3769e7cfc195848e689">commitdiff</a> | <a href="/gitphp/index.php?p=test4.git&amp;a=tree&amp;h=551db762e68e4888347ead1e6613f20b6aa6fb44&amp;hb=e1dfb0010e4829ecaee6a3769e7cfc195848e689">tree</a> <br /> <a href="/gitphp/index.php?p=test4.git&amp;a=log&amp;h=8fc725be14c1c800ea0c04232b4a4e8e8d6133bc&amp;pg=0&amp;m=e1dfb0010e4829ecaee6a3769e7cfc195848e689">select for diff</a> <br /> </div> <em>poiuytrez [Mon, 20 Feb 2012 11:45:36 Pacific Standard Time]</em><br /> </div> <div class="log_body">
                             test added
              <br /> <br /> </div> <div class="page_footer"> <div class="page_footer_text">
    Unnamed repository; edit this file 'description' to name the repository.

    </div> <a href="/gitphp/index.php?p=test4.git&amp;a=rss" class="rss_logo">RSS</a> <a href="/gitphp/index.php?p=test4.git&amp;a=atom" class="rss_logo">Atom</a> </div> <div class="attr_footer"> <a href="http://xiphux.com/programming/gitphp/" target="_blank">GitPHP by Chris Han</a> </div> </body> </html><?php }} ?>