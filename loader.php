<?php
DEFINE('DOMAINFILE', __DIR__ . '/www/whois/network/domains.tsv');

$site = pathinfo(SITEPATH, PATHINFO_FILENAME);
define('SITENAME', $site == 'www' ? 'cmflx' : $site);

define('ALLSITESNAMES', ['india', 'uae']);
define('ALLSITESDATA', __DIR__ . '/www/data/all-sites.tsv');

include_once __DIR__ . '/../spring/entry.php';
variable('NetworkMenuName', 'CM Flx');

runFrameworkFile('site/begin');
