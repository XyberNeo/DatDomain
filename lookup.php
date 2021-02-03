<?php
/*************************************************************************
Author:      XyberNeo
Web Site:    http://www.xyberneo.com
Contact:     Via Telegram : t.me/Clawser or via mail at admin@xyberneo.com
*************************************************************************/

$domain = $_GET['domain'];



$whoisservers = array(
	"ac" => "whois.nic.ac", 
	"ae" => "whois.nic.ae", 
	"aero"=>"whois.aero",
	"af" => "whois.nic.af", 
	"ag" => "whois.nic.ag", 
	"ai" => "whois.ai",
	"al" => "whois.ripe.net",
	"am" => "whois.amnic.net",
	"arpa" => "whois.iana.org",
	"as" => "whois.nic.as",
	"asia" => "whois.nic.asia",
	"at" => "whois.nic.at",
	"au" => "whois.aunic.net",
	"ax" => "whois.ax",
	"az" => "whois.ripe.net",
	
	"be" => "whois.dns.be",
	"bg" => "whois.register.bg",
	"bi" => "whois.nic.bi",
	"biz" => "whois.biz",
	"bj" => "whois.nic.bj",
	"bn" => "whois.bn",
	"bo" => "whois.nic.bo",
	"br" => "whois.registro.br",
	"bt" => "whois.netnames.net",
	"by" => "whois.cctld.by",
	"bz" => "whois.belizenic.bz",
	
	"ca" => "whois.cira.ca",
	"cat" => "whois.cat",
	"cc" => "whois.nic.cc",
	"cd" => "whois.nic.cd",
	"ch" => "whois.nic.ch",
	"ci" => "whois.nic.ci",
	"ck" => "whois.nic.ck",
	"cl" => "whois.nic.cl",
	"cn" => "whois.cnnic.net.cn",
	"co" => "whois.nic.co",
	"com" => "whois.verisign-grs.com",
	"coop" => "whois.nic.coop",
	"cx" => "whois.nic.cx",
	"cz" => "whois.nic.cz",
	
	"de" => "whois.denic.de",
	"dk" => "whois.dk-hostmaster.dk",
	"dm" => "whois.nic.dm",
	"dz" => "whois.nic.dz",
	
	"ec" => "whois.nic.ec",
	"edu" => "whois.educause.edu",
	"ee" => "whois.eenet.ee",
	"eg" => "whois.ripe.net",
	"es" => "whois.nic.es",
	"eu" => "whois.eu",
	
	"fi" => "whois.ficora.fi",
	"fo" => "whois.nic.fo",
	"fr" => "whois.nic.fr",
	
	"gd" => "whois.nic.gd",
	"gg" => "whois.gg",
	"gi" => "whois2.afilias-grs.net",
	"gl" => "whois.nic.gl",
	"gov" => "whois.nic.gov",
	"gs" => "whois.nic.gs",
	"gy" => "whois.registry.gy",
	
	"hk" => "whois.hkirc.hk",
	"hn" => "whois.nic.hn",
	"hr" => "whois.dns.hr",
	"ht" => "whois.nic.ht",
	"hu" => "whois.nic.hu",
	
	"ie" => "whois.domainregistry.ie",
	"il" => "whois.isoc.org.il",
	"im" => "whois.nic.im",
	"in" => "whois.inregistry.net",
	"info" => "whois.afilias.net",
	"int" => "whois.iana.org",
	"io" => "whois.nic.io",
	"iq" => "whois.cmc.iq",
	"ir" => "whois.nic.ir",
	"is" => "whois.isnic.is",
	"it" => "whois.nic.it",
	
	"je" => "whois.je",
	"jobs" => "jobswhois.verisign-grs.com",
	"jp" => "whois.jprs.jp",
	
	"ke" => "whois.kenic.or.ke",
	"kg" => "www.domain.kg",
	"ki" => "whois.nic.ki",
	"kr" => "whois.kr",
	"kz" => "whois.nic.kz",
	
	"la" => "whois.nic.la",
	"li" => "whois.nic.li",
	"lt" => "whois.domreg.lt",
	"lu" => "whois.dns.lu",
	"lv" => "whois.nic.lv",
	"ly" => "whois.nic.ly",
	
	"ma" => "whois.iam.net.ma",
	"md" => "whois.nic.md",
	"me" => "whois.nic.me",
	"mg" => "whois.nic.mg",
	"mil" => "whois.nic.mil",
	"ml" => "whois.dot.ml",
	"mn" => "whois.nic.mn",
	"mo" => "whois.monic.mo",
	"mobi" => "whois.dotmobiregistry.net",
	"mp" => "whois.nic.mp",
	"ms" => "whois.nic.ms",
	"mu" => "whois.nic.mu",
	"museum" => "whois.museum",
	"mx" => "whois.mx",
	"my" => "whois.domainregistry.my",

	
	
	"na" => "whois.na-nic.com.na",
	"name" => "whois.nic.name",
	"nc" => "whois.nc",
	"net" => "whois.verisign-grs.net",
	"nf" => "whois.nic.nf",
	"ng" => "whois.nic.net.ng",
	"nl" => "whois.domain-registry.nl",
	"no" => "whois.norid.no",
	"nu" => "whois.nic.nu",
	"nz" => "whois.srs.net.nz",
	
	"om" => "whois.registry.om",
	"org" => "whois.pir.org",
	
	"pe" => "kero.yachay.pe",
	"pf" => "whois.registry.pf",
	"pl" => "whois.dns.pl",
	"pm" => "whois.nic.pm",
	"post" => "whois.dotpostregistry.net",
	"pr" => "whois.nic.pr",
	"pro" => "whois.dotproregistry.net",
	"pt" => "whois.dns.pt",
	"pw" => "whois.nic.pw",
	
	"qa" => "whois.registry.qa",
	
	"re" => "whois.nic.re",
	"ro" => "whois.rotld.ro",
	"rs" => "whois.rnids.rs",
	"ru" => "whois.tcinet.ru",

	"sa" => "whois.nic.net.sa",
	"sb" => "whois.nic.net.sb",
	"sc" => "whois2.afilias-grs.net",
	"se" => "whois.iis.se",
	"sg" => "whois.sgnic.sg",
	"sh" => "whois.nic.sh",
	"si" => "whois.arnes.si",
	"sk" => "whois.sk-nic.sk",
	"sm" => "whois.nic.sm",
	"sn" => "whois.nic.sn",
	"so" => "whois.nic.so",
	"st" => "whois.nic.st",
	"su" => "whois.tcinet.ru",
	"sx" => "whois.sx",
	"sy" => "whois.tld.sy",
	
	"tc" => "whois.meridiantld.net",
	"tel" => "whois.nic.tel",
	"tf" => "whois.nic.tf",
	"th" => "whois.thnic.co.th",
	"tj" => "whois.nic.tj",
	"tk" => "whois.dot.tk",
	"tl" => "whois.nic.tl",
	"tm" => "whois.nic.tm",
	"tn" => "whois.ati.tn",
	"to" => "whois.tonic.to",
	"tp" => "whois.nic.tl",
	"tr" => "whois.nic.tr",
	"travel" => "whois.nic.travel",
	"tv" => "tvwhois.verisign-grs.com",
	"tw" => "whois.twnic.net.tw",
	"tz" => "whois.tznic.or.tz",
	
	"ua" => "whois.ua",
	"ug" => "whois.co.ug",
	"uk" => "whois.nic.uk",
	"us" => "whois.nic.us",
	"uy" => "whois.nic.org.uy",
	"uz" => "whois.cctld.uz",
	
	"vc" => "whois2.afilias-grs.net",
	"ve" => "whois.nic.ve",
	"vg" => "whois.adamsnames.tc",

	"wf" => "whois.nic.wf",
	"ws" => "whois.website.ws",
	
	"xxx" => "whois.nic.xxx",

	"yt" => "whois.nic.yt",
	"yu" => "whois.ripe.net");
	

function LookupDomain($domain){
	global $whoisservers;
	$domain_parts = explode(".", $domain);
	$tld = strtolower(array_pop($domain_parts));
	$whoisserver = $whoisservers[$tld];
	if(!$whoisserver) {
		return "Error: No appropriate Whois server found for $domain domain!";
	}
	$result = QueryWhoisServer($whoisserver, $domain);
	if(!$result) {
		return "Error: No results retrieved from $whoisserver server for $domain domain!";
	}
	else {
		while(strpos($result, "Whois Server:") !== FALSE){
			preg_match("/Whois Server: (.*)/", $result, $matches);
			$secondary = $matches[1];
			if($secondary) {
				$result = QueryWhoisServer($secondary, $domain);
				$whoisserver = $secondary;
			}
		}
	}
	return "$domain domain lookup results from $whoisserver server:\n\n" . $result;
}

function LookupIP($ip) {
	$whoisservers = array(
	
		"whois.lacnic.net", // Latin America and Caribbean - returns data for ALL locations worldwide :-)
		"whois.apnic.net", // Asia/Pacific only
		"whois.arin.net", // North America only
		"whois.ripe.net" // Europe, Middle East and Central Asia only
	);
	$results = array();
	foreach($whoisservers as $whoisserver) {
		$result = QueryWhoisServer($whoisserver, $ip);
		if($result && !in_array($result, $results)) {
			$results[$whoisserver]= $result;
		}
	}
	$res = "RESULTS FOUND: " . count($results);
	foreach($results as $whoisserver=>$result) {
		$res .= "\n\n-------------\nLookup results for " . $ip . " from " . $whoisserver . " server:\n\n" . $result;
	}
	return $res;
}

function ValidateIP($ip) {
	$ipnums = explode(".", $ip);
	if(count($ipnums) != 4) {
		return false;
	}
	foreach($ipnums as $ipnum) {
		if(!is_numeric($ipnum) || ($ipnum > 255)) {
			return false;
		}
	}
	return $ip;
}

function ValidateDomain($domain) {
	if(!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
		return false;
	}
	return $domain;
}

function QueryWhoisServer($whoisserver, $domain) {
	$port = 43;
	$timeout = 10;
	$fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("Socket Error " . $errno . " - " . $errstr);
	fputs($fp, $domain . "\r\n");
	$out = "";
	while(!feof($fp)){
		$out .= fgets($fp);
	}
	fclose($fp);

	$res = "";
	if((strpos(strtolower($out), "error") === FALSE) && (strpos(strtolower($out), "not allocated") === FALSE)) {
		$rows = explode("\n", $out);
		foreach($rows as $row) {
			$row = trim($row);
			if(($row != '') && ($row{0} != '#') && ($row{0} != '%')) {
				$res .= $row."\n";
			}
		}
	}
	return $res;
}
?>

<?php
if($domain) {
	$domain = trim($domain);
	if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
	if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
	if(ValidateIP($domain)) {
		echo "hello before check";
		$result = LookupIP($domain);
	}
	elseif(ValidateDomain($domain)) {
		$result = LookupDomain($domain);
	}
	else die("Invalid Input!");
	echo "<pre>\n" . $result . "\n</pre>\n";
}
?>
</body>
</html>
