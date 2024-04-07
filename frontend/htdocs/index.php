<?php
$start_time = microtime(true);
set_include_path('./');

include_once("./commons/config.php");
include_once("./commons/langs.php");

enum PageTypes {
	case HomePage;
	case ProjectPage;
	case ArtifactPage;
};
$url_parts = explode("/", l10n_url_switch(NULL));
$url_parts = array_filter($url_parts, fn($url_part) => $url_part !== '');
?>
<!DOCTYPE html>
<html lang="<?php echo($user_language); ?>">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
	<meta name="viewport" content="width=device-width"/>
	<meta name="author" content="Herwin Bozet">
	<meta name="robots" content="index, follow">
	<link rel="icon" type="image/svg+xml" href="/favicon.svg">
	<link rel="alternate icon" href="/favicon.ico">
	<title>NibblePoker's CI/CD</title>
	<link rel="stylesheet" href="https://nibblepoker.lu/resources/FontAwesomePro/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="https://nibblepoker.lu/resources/NibblePoker/css/nibblepoker.min.css?v=3">
	<meta name="description" content="TODO">
	<meta property="og:title" content="NibblePoker's CI/CD"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://cicd.nibblepoker.lu/"/>
	<meta property="og:image" content="https://nibblepoker.com/resources/NibblePoker/images/logos/v2_opengraph.png"/>
	<meta property="og:image:type" content="image/png"/>
	<meta property="og:description" content="TODO"/>
</head>
<body>
<header class="w-full p-m pl-s">
	<h1 class="t-size-17 t-w-500">
		<i class="fad fa-gear-code mr-s"></i>NibblePoker's CI/CD '<?php echo(l10n_url_switch(NULL)); ?>'
	</h1>
	<?php include_once("./commons/DOM/header-lang.php"); ?>
</header>
<main id="main" class="border border-r-0 border-l-0 p-l">
	<div class="heading-main p-xs border r-s bkgd-grid">
		<h3 class="t-w-500 t-size-16">
			<i class="fad fa-circle-info t-muted t-size-14"></i><?php echo(localize("cicd.introduction.title")); ?>
		</h3>
	</div>
	<p class="mt-xs mr-s ml-s">This subdom</p>
	<p class="mt-xs mr-s ml-s">GitHub:<br>
	●&nbsp;&nbsp;<a href="https://github.com/aziascreations">AziasCreations</a><br>
	●&nbsp;&nbsp;<a href="https://github.com/NibblePoker">NibblePoker</a>
	</p>
	<p class="mt-xs mr-s ml-s"><a href="https://git.nibblepoker.lu/">Self-hosted Gitea Instance</a></p>
	
	<div class="heading-main p-xs border r-s bkgd-grid mt-l">
		<h3 class="t-w-500 t-size-16">
			<i class="fad fa-box-circle-check t-muted t-size-14"></i><?php echo(localize("cicd.projects.title")); ?>
		</h3>
	</div>
	<div class="px-xs">
		<table class="stylish r-s border o-hidden table-p-xs table-h-p-s table-v-center w-full mt-m px-m">
			<thead>
				<tr>
					<th>Project</th>
					<th>Last build</th>
					<th>???</th>
					<th>Source Code</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="t-bold"><a href="/tcc/">Tiny C Compiler (TCC)</a></td>
					<td>1970/01/01</td>
					<td>???</td>
					<td><a class="f-center" href="https://repo.or.cz/w/tinycc.git">https://repo.or.cz/w/tinycc.git</a></td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<div class="heading-main p-xs border r-s bkgd-grid mt-l">
		<h3 class="t-w-500 t-size-16">
			<i class="fad fa-bug t-muted t-size-14"></i>Debugging
		</h3>
	</div>
	<div class="px-xs mt-m">
		<div class="code w-full p-xxs">
			<?php print_r($url_parts); ?>
		</div>
	</div>
</main>
<footer class="d-flex flex-align-center w-full p-s py-xs">
	<a href="https://nibblepoker.lu/" class="bland-link">
		<button id="sidebar-toggle-footer" class="p-xs border r-s t-size-10" aria-label="Go back to main site.">
			<i class="fad fa-sign-out-alt fa-rotate-180"></i>
		</button>
	</a>
	<p class="flex-fill t-center t-size-10 t-w-500 t-muted">
		<a class="bland-link" href="https://nibblepoker.lu/privacy/">Privacy policy</a>
	</p>
	<a href="/">
		<img id="logo-footer" src="https://nibblepoker.lu/resources/NibblePoker/images/logos/v2_full_unshaded_original.svg"
			 alt="NibblePoker logo" draggable="false">
	</a>
</footer>
</body>
</html>
<?php
$end_time = microtime(true);
if($print_execution_timer) {
	echo("<!-- PHP execution took " . round(($end_time - $start_time) * 1000, 2) . " ms -->");
}
?>