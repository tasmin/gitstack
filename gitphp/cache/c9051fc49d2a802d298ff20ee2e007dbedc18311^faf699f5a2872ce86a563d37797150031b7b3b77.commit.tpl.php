<?php /*%%SmartyHeaderCode:214394f424904530be3-61067396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf699f5a2872ce86a563d37797150031b7b3b77' => 
    array (
      0 => '.\\templates\\commit.tpl',
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
    '418ccc1808202e72d7c694db00a81db38041be41' => 
    array (
      0 => '.\\templates\\title.tpl',
      1 => 1327762713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214394f424904530be3-61067396',
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f42490840920',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f42490840920')) {function content_4f42490840920($_smarty_tpl) {?><?php echo '<?'; ?>xml version="1.0" encoding="utf-8"<?php echo '?>'; ?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> <head> <title>
    
gitphp 0.2.6 :: test4.git/commit
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
    </script> </head> <body> <div class="page_header"> <a href="http://git-scm.com" title="git homepage"> <img src="images/git-logo.png" width="72" height="27" alt="git" class="logo" /> </a> <div class="lang_select"> <form action="/gitphp/index.php" method="get" id="frmLangSelect"> <div> <input type="hidden" name="p" value="test4.git" /> <input type="hidden" name="a" value="commit" /> <input type="hidden" name="h" value="e1dfb0010e4829ecaee6a3769e7cfc195848e689" /> <label for="selLang">language:</label> <select name="l" id="selLang"> <option selected="selected" value="en_US">English (en_US)</option> <option  value="de_DE">Deutsch (de_DE)</option> <option  value="fr_FR">Français (fr_FR)</option> <option  value="ja_JP">日本語 (ja_JP)</option> <option  value="ru_RU">Русский (ru_RU)</option> <option  value="zh_CN">中文简体 (zh_CN)</option> </select> <input type="submit" value="set" id="btnLangSet" /> </div> </form> </div> <a href="index.php">projects</a> / 
  <a href="/gitphp/index.php?p=test4.git&amp;a=summary">test4.git</a>
       / commit
        <form method="get" action="index.php" enctype="application/x-www-form-urlencoded"> <div class="search"> <input type="hidden" name="p" value="test4.git" /> <input type="hidden" name="a" value="search" /> <input type ="hidden" name="h" value="e1dfb0010e4829ecaee6a3769e7cfc195848e689" /> <select name="st"> <option  value="commit">commit</option> <option  value="author">author</option> <option  value="committer">committer</option> <option  value="file">file</option> </select> search: <input type="text" name="s" /> </div> </form> </div> <div class="page_nav"> <a href="/gitphp/index.php?p=test4.git&amp;a=summary">summary</a>
      | 
        <a href="/gitphp/index.php?p=test4.git&amp;a=shortlog&amp;h=e1dfb0010e4829ecaee6a3769e7cfc195848e689">shortlog</a>
      | 
        <a href="/gitphp/index.php?p=test4.git&amp;a=log&amp;h=e1dfb0010e4829ecaee6a3769e7cfc195848e689">log</a>
      | 
        commit
      | 
        <a href="/gitphp/index.php?p=test4.git&amp;a=commitdiff&amp;h=e1dfb0010e4829ecaee6a3769e7cfc195848e689">commitdiff</a>
      | 
        <a href="/gitphp/index.php?p=test4.git&amp;a=tree&amp;hb=e1dfb0010e4829ecaee6a3769e7cfc195848e689&amp;h=551db762e68e4888347ead1e6613f20b6aa6fb44">tree</a> <br /><br /> </div> <div class="title"> <a href="/gitphp/index.php?p=test4.git&amp;a=tree&amp;h=551db762e68e4888347ead1e6613f20b6aa6fb44&amp;hb=e1dfb0010e4829ecaee6a3769e7cfc195848e689" class="title">test added</a> <span class="refs"> </span> </div> <div class="title_text"> <table cellspacing="0"> <tr> <td>author</td> <td>poiuytrez</td> </tr> <tr> <td></td> <td> Mon, 20 Feb 2012 11:45:36 Pacific Standard Time 
                     (<span class="latenight">03:45</span> -0800)</td> </tr> <tr> <td>committer</td> <td>poiuytrez</td> </tr> <tr> <td></td> <td> Mon, 20 Feb 2012 11:45:36 Pacific Standard Time (03:45 -0800)</td> </tr> <tr> <td>commit</td> <td class="monospace">e1dfb0010e4829ecaee6a3769e7cfc195848e689</td> </tr> <tr> <td>tree</td> <td class="monospace"><a href="/gitphp/index.php?p=test4.git&amp;a=tree&amp;h=551db762e68e4888347ead1e6613f20b6aa6fb44&amp;hb=e1dfb0010e4829ecaee6a3769e7cfc195848e689" class="list">551db762e68e4888347ead1e6613f20b6aa6fb44</a></td> <td class="link"><a href="/gitphp/index.php?p=test4.git&amp;a=tree&amp;h=551db762e68e4888347ead1e6613f20b6aa6fb44&amp;hb=e1dfb0010e4829ecaee6a3769e7cfc195848e689">tree</a> | <a href="/gitphp/index.php?p=test4.git&amp;a=snapshot&amp;h=e1dfb0010e4829ecaee6a3769e7cfc195848e689" class="snapshotTip">snapshot</a></td> </tr> </table> </div> <div class="page_body">
                   test added
          <br /> </div> <div class="list_head"> </div> <table cellspacing="0"> <tr class="light"> <td> <a href="/gitphp/index.php?p=test4.git&amp;a=blob&amp;h=4ef837c322f6c0b7c30943674bb015e52a3cdf7d&amp;hb=e1dfb0010e4829ecaee6a3769e7cfc195848e689&amp;f=test.txt" class="list">
	     test.txt
	   </a> </td> <td> <span class="newfile">
	     	     [
	     	       	       new file with mode 0644
	     	     ]
	   </span> </td> <td class="link"> <a href="/gitphp/index.php?p=test4.git&amp;a=blob&amp;h=4ef837c322f6c0b7c30943674bb015e52a3cdf7d&amp;hb=e1dfb0010e4829ecaee6a3769e7cfc195848e689&amp;f=test.txt">blob</a>
	    | 
	   <a href="/gitphp/index.php?p=test4.git&amp;a=blob_plain&amp;h=4ef837c322f6c0b7c30943674bb015e52a3cdf7d&amp;f=test.txt">plain</a> </td> </tr> </table> <div class="page_footer"> <div class="page_footer_text">
    Unnamed repository; edit this file 'description' to name the repository.

    </div> <a href="/gitphp/index.php?p=test4.git&amp;a=rss" class="rss_logo">RSS</a> <a href="/gitphp/index.php?p=test4.git&amp;a=atom" class="rss_logo">Atom</a> </div> <div class="attr_footer"> <a href="http://xiphux.com/programming/gitphp/" target="_blank">GitPHP by Chris Han</a> </div> </body> </html><?php }} ?>