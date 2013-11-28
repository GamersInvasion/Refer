<?PHP
include "config.php";
$s = $_SERVER['QUERY_STRING'];

if ($s==null) {echo "<head>

	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	<meta name=\"description\" content=\"anonymize your links with $sitename\" />
	<meta name=\"keywords\" content=\"anonymous,link,url,redirect,forum,board,script,domain,external,hompage\" />
	<title>$sitename | link to other sites anonymously</title>

	<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\" />
	<script type=\"text/javascript\" src=\"anonymizerTool.js\"></script>
</head>

	
<body>
	<div id=\"page\">
		<div id=\"header\"></div>			
		
		<div id=\"content\">
			<div class=\"lang_content\">

			<h1>anonymize your links with $sitename</h1>
			
			<div align=\"center\" class=\"nav_symbols\">
				<div style=\"width: 180px; float: left;\">
					<a href=\"#singleLink\"><img src=\"images/link.gif\" alt=\" anonymize a single link\" title=\" anonymize a single link\" /></a><br />
					<a href=\"#singleLink\">anonymize a single link</a>
				</div>
			
				<div style=\"width: 180px; float: left; margin-left: 20px;\">
					<a href=\"#multiLink\"><img src=\"images/script.gif\" alt=\"Script to anonymize all the links on your homepage or board\" title=\"Script to anonymize all the links on your homepage or board\" /></a><br />

					<a href=\"#multiLink\"> Script to anonymize all the links on your homepage or board</a>
				</div>
				<div style=\"width: 180px; float: left; margin-left: 20px;\">
					<a href=\"#info\"><img src=\"images/why.gif\" alt=\"Why use $sitename?\" title=\"Why use $sitename?\" /></a><br />
					<a href=\"#info\">Why use $sitename?</a>
				</div>
			
			</div>

			<div class=\"clearer\"></div>
			<br />

			<h2 id=\"singleLink\">anonymize a single link</h2>
			<p>In order to produce a single anonymous link, enter the URL you want to link to and then click on \"Generate URL\".</p>

			<form name=\"theform\" onSubmit=\"return go();\" action=\"#\">
				<fieldset>
					<h3>Your URL:</h3>

					<input class=\"anonym_input\" type=\"text\" maxlength=\"255\" name=\"nick\" value=\"http://\" />
					<input class=\"anonym_FormSubmit\" type=\"button\" onClick=javascript:go() value=\"Generate URL\" /><br /><br />
			
					<h3>This is the anonymous URL:</h3>
					<textarea class=\"anonym_textarea\" name=\"thelink1\" wrap=\"soft\" cols=\"66\" rows=\"1\" style=\"height: 30px; overflow: auto;\"></textarea><br />
					<br /><h3>This is the anonymous URL as an HTML link:</h3>
					<textarea class=\"anonym_textarea_big\" name=\"thelink2\" wrap=\"soft\" cols=\"66\" rows=\"1\" style=\"height: 30px; overflow: auto;\"></textarea><br />
					<br /><h3>This is the anonymous URL as a board link (works with any board software):</h3>

					<textarea class=\"anonym_textarea_big\" name=\"thelink3\" wrap=\"soft\" cols=\"66\" rows=\"1\" style=\"height: 30px; overflow: auto;\"></textarea><br />
			
				</fieldset>
			</form>
			<br /><br />

			<h2 id=\"multiLink\">Script to anonymize all the links on your homepage or board</h2>
			<p>If you want to anonymize all the external links on your board or homepage, we can generate a
			script for you to deal with this automatically for all your pages. Enter the Sites for which
			links shall not be redirected to anonym.to (e.g. your own) and click on \"Generate script\".</p>
			<br />

			
			<form name=\"displayResult\" onsubmit=\"return false;\" action=\"#\">
				<fieldset class=\"embeddingData\">
					<label for=\"embeddingCode\" accesskey=\"2\" style=\"padding-top: 4px; display: block;\">You only have to place the resulting code at the end of the body area (if possible, directly before the &lt;/body&gt; tag) of your main template. (<a href=\"#anleitung\">detailed instructions</a>)</label>
			
					<textarea class=\"anonym_textarea\" id=\"embeddingCode\" name=\"embeddingCode\"></textarea>
					<input class=\"anonym_FormSubmit\" type=\"button\" name=\"markAll\" id=\"markAll\" value=\"select all\" onclick=\"document.displayResult.embeddingCode.select();\" />

				</fieldset>
			</form>
			<br />
			<form name=\"anonymizerForm\" onsubmit=\"generateCode('anonymizerForm', 'embeddingCode'); return false;\" action=\"#\">
				<fieldset class=\"generationData\">
					<label for=\"keywordsInput\" accesskey=\"1\" style=\"padding-top: 4px; display: block;\">Do not anonymize the following domains / keywords (comma separated: domain1.tld, domain2.tld, keyword1, ...):</label>
					<input type=\"text\" id=\"keywordsInput\" name=\"keywords\" class=\"anonym_input\" /><br />
					<input type=\"submit\" id=\"submitButton\" value=\"generate\" class=\"anonym_FormSubmit\" />

			
				</fieldset>
			</form>
			<br /><br />
			<script type=\"text/javascript\">
			   generateCode(\"anonymizerForm\", \"embeddingCode\");
			</script>
			
			<h2 id=\"info\">The advantages of anonymizing your external links with $sitename</h2>
			<p>Webmasters can use this tool to prevent their site from appearing in the server logs of
			referred pages as referrer. The operators of the referred pages cannot see where their 
			visitors come from any more.<br>
			Using the referrer removal service is quite easy:<br>

			<a href=\"http://$url/?http://www.dephy.org/\">http://$url/?http://www.dephy.org/</a>
			produces an anonymous link to <a href=\"http://www.dephy.org/\">dephy.org</a> which prevents
			the original site from appearing as a referrer in the logfiles of the referred page.</p>
			
			<br /><br />
			
			<h2 id=\"anleitung\">Detailed instructions for the anonymizing script</h2>
			<p>Once the script is embedded in a website, it redirects all the links via $sitename
			- except for the sites that were excluded when generating the script. In vBulletin, for 
			example, you can include the script code in the footer of the global templates
			(Styles&amp;Templates - Global templates - Footer). In Wordpress, use the footer.php.<br>

			Since the script can only anonymize links that have already been loaded at runtime, 
			it's a good idea to place the code as close to the end as possible. Otherwise, links
			that appear after the script code would not be redirected via $sitename.<br />
			<br />
			$sitename only disguises what page a visitor comes from.

			<div class=\"clearer\"></div>

			</div>
		</div>

		
		<div id=\"footer\">
			<div id=\"footer_inside\">
				<p>
				Running Version 1.0 of <a href=\"http://sourceforge.net/projects/noreferplz/\">NoReferPLZ</a>, an <a href=\"http://anonym.to/\">Anonym.to</a> clone, by <a href=\"http://dephy.org/\">DEPHY</a>
				</p>
				<div class=\"sp16\"></div>
			</div>
		</div>
		
	</div>
</body>
</html>"; }
else echo "
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
	<meta http-equiv=\"refresh\" content=\"$wait; URL=$s\">
	<title>$sitename - free dereferer service</title>
	<style type=\"text/css\">
	html {
		background: #000;
	}
	body {
		background: #404040;
		border: 1px solid #666;
		color: #999;
		font: 14px \"Lucida Grande\", \"Lucida Sans Unicode\", tahoma, verdana, arial, sans-serif;
		margin: 5% 10%;
		text-align: center;
	}
	
	a {
		color: #FF8301;
	}
	
	h1 {
		color: #EEE;
	}
	
	#container {
		background: #292929;
		line-height: 2.4;
		padding: 1em;
	}
	
	p#url {
		font-weight: bold;
		overflow: hidden;
		width: 100%;
	}
	
	</style>
</head>

<body>

	<h1>$sitename</h1>
	<div id=\"container\">

		
		<p>Please wait while you're being redirected to ...<br />
		<p id=\"url\"><a href=\"$s\">$s</a></p>

		<hr />
		<p><a href=\"http://$url/\">$sitename</a></p>
		
	</div>

 
</body><br />

</html>";
