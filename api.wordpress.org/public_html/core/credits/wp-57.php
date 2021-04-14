<?php

class WP_57_Credits extends WP_Credits {

	public function groups() {
		$groups = [
			'core-developers'         => [
				'name'    => 'Noteworthy Contributors',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => [
					'matt'                => [ 'Matt Mullenweg', 'Release Lead' ],
					'metalandcoffee'      => [ 'Ebonie Butler', 'Release Lead' ],
					'hellofromTonya'      => [ 'Tonya Mork', 'Release Lead' ],
					'SergeyBiryukov'      => 'Sergey Biryukov',
					'noisysocks'          => 'Robert Anderson',
					'sarahricker'         => 'Sarah Ricker',
					'hedgefield'          => 'Tim Hengeveld',
					'audrasjb'            => 'Jean-Baptiste Audras',
					'monikarao'           => 'Monika Rao',
					'flixos90'            => 'Felix Arntz',
					'ryelle'              => 'Kelly Choyce-Dwan',
					'Clorith'             => 'Marius Jensen',
					'lukecarbis'          => 'Luke Carbis',
					'chanthaboune'        => 'Josepha Haden',
					'gziolo'              => 'Greg Ziółkowski',
					'youknowriad'         => 'Riad Benguella',
					'desrosj'             => 'Jonathan Desrosiers',
					'johnbillion'         => 'John Blackbourn',
					'ellatrix'            => 'Ella van Durpe',
					'peterwilsoncc'       => 'Peter Wilson',
					'ntsekouras'          => 'Nik Tsekouras',
					'TimothyBlynJacobs'   => 'Timothy Jacobs',
					'Joen'                => 'Joen Asmussen',
					'talldanwp'           => 'Daniel Richards',
					'nosolosw'            => 'André Maneiro',
					'jorgefilipecosta'    => 'Jorge Costa',
					'poena'               => 'Carolina Nymark',
				],
			],
			'contributing-developers' => [
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => [
					'annezazu'            => 'Anne McCarthy',
					'JeffPaul'            => 'Jeff Paul',
					'cbringmann'          => 'Chloé Bringmann',
					'francina'            => 'Francesca Marano',
					'davidbaumwald'       => 'David Baumwald',
					'marybaum'            => 'Mary Baum',
					'aristath'            => 'Ari Stathopoulos',
					'mukesh27'            => 'Mukesh Panchal',
					'davidszabo'          => 'Dávid Szabó',
					'Bernhard Reiter'     => 'Bernhard Reiter',
					'happiryu'            => 'Luke Walczak',
					'sabernhardt'         => 'Stephen Bernhardt',
					'addiestavlo'         => 'Addison Stavlo',
					'jonsurrell'          => 'Jon Surrell',
					'adamsilverstein'     => 'Adam Silverstein',
					'isabel_brison'       => 'Isabel Brison',
					'scruffian'           => 'Ben Dwyer',
					'azaozz'              => 'Andrew Ozz',
				],
			],
		];

		return $groups;
	}

	public function props() {
		return [
			'0mirka00',
			'7studio',
			'_luigi',
			'aaribaud',
			'aaroncampbell',
			'aaronrobertshaw',
			'abagtcs',
			'accessiblejoe',
			'acerempel',
			'activecoder',
			'ad7six',
			'adamboro',
			'adamsilverstein',
			'addiestavlo',
			'aduth',
			'afercia',
			'afragen',
			'ajlende',
			'akabarikalpesh',
			'akramipro',
			'albertomake',
			'alex27',
			'alexstine',
			'alexwoollam',
			'alinod',
			'aljullu',
			'allancole',
			'allendav',
			'almendron',
			'amandariu',
			'ambienthack',
			'amethystanswers',
			'amolv',
			'andraganescu',
			'andrewserong',
			'anevins',
			'ankitmaru',
			'annalamprou',
			'annezazu',
			'anotherdave',
			'antonlukin',
			'antpb',
			'anyssa',
			'apeatling',
			'arcangelini',
			'archon810',
			'aristath',
			'artpi',
			'atimmer',
			'audrasjb',
			'ayeshrajans',
			'azaozz',
			'bartosz777',
			'basscan',
			'bduclos',
			'becdetat',
			'bernhard-reiter',
			'bhanusinghkre',
			'birgire',
			'bobbingwide',
			'boniu91',
			'bonniebeeman',
			'boonebgorges',
			'bordoni',
			'bosconiandynamics',
			'bph',
			'brechtvds',
			'brentswisher',
			'brijeshb42',
			'burnuser',
			'burtrw',
			'carike',
			'carloscastilloadhoc',
			'carlosgprim',
			'celendesign',
			'cenay',
			'ceyhun0',
			'cfinke',
			'chanthaboune',
			'chaton666',
			'chemiker',
			'chexwarrior',
			'chipsnyder',
			'chouby',
			'chrisvanpatten',
			'clayray',
			'claytoncollie',
			'clorith',
			'codeamp',
			'collizo4sky',
			'copons',
			'coreyw',
			'cristinasoponar',
			'cvoell',
			'cybr',
			'daddou',
			'dam6pl',
			'danfarrow',
			'dariak',
			'davecpage',
			'davidanderson',
			'davidbaumwald',
			'davidbinda',
			'davidszabo',
			'dbtedg',
			'dd32',
			'dekervit',
			'denisco',
			'denishua',
			'desrosj',
			'dianeco',
			'dilipbheda',
			'dimadin',
			'dkarfa',
			'dkoo',
			'dlh',
			'donmhico',
			'dpcalhoun',
			'dragongate',
			'dratwas',
			'drewapicture',
			'drw158',
			'dvankooten',
			'e_baker',
			'eatsleepcode',
			'ebinnion',
			'ecgan',
			'ediamin',
			'ellatrix',
			'enej',
			'engahmeds3ed',
			'enricocarraro',
			'epicfaace',
			'epiqueras',
			'erichmond',
			'ericlewis',
			'ericmann',
			'estelaris',
			'etoledom',
			'eventualo',
			'fabiankaegy',
			'fabianpimminger',
			'felipeelia',
			'fierevere',
			'flixos90',
			'flootr',
			'florianziegler',
			'floriswt',
			'folletto',
			'francina',
			'frank-klein',
			'freewebmentor',
			'fullofcaffeine',
			'gab81',
			'galbaras',
			'garrett-eclipse',
			'geekpress',
			'geekzebre',
			'geoffguillain',
			'geoffrey1963',
			'georgestephanis',
			'geriux',
			'gkibria69',
			'glendaviesnz',
			'gmariani405',
			'goaroundagain',
			'grapplerulrich',
			'greatsaltlake',
			'grzim',
			'gumacahin',
			'gungeekatx',
			'gunnard',
			'gwwar',
			'gziolo',
			'hansjovisyoast',
			'happiryu',
			'hardeepasrani',
			'hareesh-pillai',
			'hauvong',
			'hazdiego',
			'hedgefield',
			'helen',
			'hellofromtonya',
			'helmutwalker',
			'herregroen',
			'hmabpera',
			'howdy_mcgee',
			'hsingyuc7',
			'hwk-fr',
			'hypest',
			'iamfriendly',
			'iandunn',
			'ianmjones',
			'ibdz',
			'ibiza69',
			'icaleb',
			'igorradovanov',
			'imath',
			'inc2734',
			'ingereck',
			'iprg',
			'ipstenu',
			'isabel_brison',
			'iseulde',
			'ismailelkorchi',
			'itsjonq',
			'iviweb',
			'ixkaito',
			'jadeddragoon',
			'jakeparis',
			'jakubtyrcha',
			'jamesgol',
			'jameskoster',
			'jamesros161',
			'janthiel',
			'jason_the_adams',
			'jaymanpandya',
			'jdgrimes',
			'jdy68',
			'jeffr0',
			'jeremyfelt',
			'jeremyyip',
			'jeroenrotty',
			'jessplease',
			'jfarthing84',
			'jmdodd',
			'jnylen0',
			'joanrho',
			'joedolson',
			'joelclimbsthings',
			'joemcgill',
			'joen',
			'johnbillion',
			'johnjamesjacoby',
			'johnwatkins0',
			'jomisica',
			'jonathanstegall',
			'jonkastonka',
			'jonoaldersonwp',
			'jonsurrell',
			'jontyravi',
			'joostdevalk',
			'jorbin',
			'jordesign',
			'jorgefilipecosta',
			'jose64',
			'joseeyoast',
			'joshuatf',
			'joshuawold',
			'joyously',
			'jrchamp',
			'jrf',
			'jsmoriss',
			'jsnajdr',
			'jtsternberg',
			'juliobox',
			'justinahinon',
			'justinsainton',
			'k3nsai',
			'kafleg',
			'karamcnair',
			'karmatosed',
			'kbjohnson90',
			'kburgoine',
			'kebbet',
			'kevin940726',
			'kirilzh',
			'kjellr',
			'knutsp',
			'kraftbj',
			'krstarica',
			'kurtpayne',
			'laurelfulford',
			'laxman-prajapati',
			'leogermani',
			'levdbas',
			'litemotiv',
			'lovor',
			'lpawlik',
			'lucasbustamante',
			'lukecarbis',
			'lukecavanagh',
			'luminuu',
			'macmanx',
			'madtownlems',
			'magicroundabout',
			'magnuswebdesign',
			'mahfuz01',
			'maigret',
			'malinajirka',
			'mallorydxw',
			'mamaduka',
			'manzoorwanijk',
			'manzurahammed',
			'mapk',
			'marcelo2605',
			'marcio-zebedeu',
			'marijnkoopman',
			'markhowellsmead',
			'markscottrobson',
			'marybaum',
			'mattchowning',
			'mattwiebe',
			'matveb',
			'maxpertici',
			'mayankmajeji',
			'mbabker',
			'mberard',
			'mcsf',
			'mdrockwell',
			'mdwolinski',
			'megabyterose',
			'megphillips91',
			'meher',
			'mehrshaddarzi',
			'mehulkaklotar',
			'melchoyce',
			'mendezcode',
			'metalandcoffee',
			'mgol',
			'michael-arestad',
			'mihdan',
			'miinasikk',
			'mikeschroder',
			'milana_cap',
			'mista-flo',
			'mkaz',
			'mmuyskens',
			'monika',
			'monikarao',
			'morenaf',
			'mrahmadawais',
			'mrjoeldean',
			'mte90',
			'mukesh27',
			'munyagu',
			'mzorz',
			'nacin',
			'naveen17797',
			'nerrad',
			'netweb',
			'netweblogic',
			'nicegamer7',
			'nico23',
			'nico_martin',
			'nicolalaserra',
			'nicolaskulka',
			'ninetyninew',
			'noahtallen',
			'noisysocks',
			'nonverbla',
			'nosolosw',
			'notlaura',
			'nre',
			'ntsekouras',
			'nwjames',
			'oakesjosh',
			'obenland',
			'ocean90',
			'oellin',
			'oglekler',
			'otshelnik-fm',
			'ovidiul',
			'oxyc',
			'paaljoachim',
			'pabline',
			'palmiak',
			'passoniate',
			'patopaiar',
			'paulschreiber',
			'pawki07',
			'pbearne',
			'pbiron',
			'pbking',
			'pedromendonca',
			'pento',
			'peterwilsoncc',
			'pinkalbeladiya',
			'pixelverbieger',
			'pixolin',
			'poena',
			'presstoke',
			'prettyboymp',
			'princeahmed',
			'pschrottky',
			'psmits1567',
			'pwallner',
			'pypwalters',
			'quadthemes',
			'r-a-y',
			'rachelbaker',
			'rafaelgalani',
			'rafhun',
			'rahe',
			'rahmohn',
			'ramiy',
			'ratneshk',
			'ravipatel',
			'reardestani',
			'retrofox',
			'rianrietveld',
			'rinatkhaziev',
			'rodrigosprimo',
			'roger995',
			'rogertheriault',
			'rolfsiebers',
			'romain-d',
			'ryan',
			'ryelle',
			'ryokuhi',
			'sabernhardt',
			'sanketchodavadiya',
			'sarahricker',
			'sarayourfriend',
			'scruffian',
			'sebastianpisula',
			'sebastienserre',
			'sebsz',
			'sergeybiryukov',
			'sergiomdgomes',
			'shahinsid07',
			'shaunandrews',
			'shital-patel',
			'sippis',
			'sirstuey',
			'skithund',
			'slaffik',
			'snapfractalpop',
			'soean',
			'souri_wpaustria',
			'spacedmonkey',
			'stefanjoebstl',
			'stevenkword',
			'stodorovic',
			'subrataemfluence',
			'sumitsingh',
			'swissspidy',
			'synchro',
			't-p',
			'tai',
			'talldanwp',
			'tanvirul',
			'teamdnk',
			'technosailor',
			'tejwanihemant',
			'terriann',
			'thorlentz',
			'tigertech',
			'tikifez',
			'timothyblynjacobs',
			'tinodidriksen',
			'tkama',
			'tmatsuur',
			'tmfespresso',
			'tnolte',
			'tobiasbg',
			'tobifjellner',
			'tomdxw',
			'tonysandwich',
			'toru',
			'transl8or',
			'trepmal',
			'tweetythierry',
			'tylertork',
			'tyxla',
			'tz-media',
			'umangvaghela123',
			'utz119',
			'vandestouwe',
			'vcanales',
			'viablethought',
			'vindl',
			'vipulc2',
			'vladytimy',
			'voboghure',
			'vyskoczilova',
			'wallstead',
			'webcommsat',
			'webmandesign',
			'wendyjchen',
			'wesselvandenberg',
			'westonruter',
			'whyisjake',
			'wonderboymusic',
			'worldedu',
			'wponlinesupport',
			'xkon',
			'yakimun',
			'yannkozon',
			'yoavf',
			'youknowriad',
			'yscik',
			'yuliyan',
			'zebulan',
			'zieladam',
			'zodiac1978',
		];
	}

	public function external_libraries() {
		return [
			[ 'Babel Polyfill', 'https://babeljs.io/docs/en/babel-polyfill' ],
			[ 'Backbone.js', 'http://backbonejs.org/' ],
			[ 'Class POP3', 'https://squirrelmail.org/' ],
			[ 'clipboard.js', 'https://clipboardjs.com/' ],
			[ 'Closest', 'https://github.com/jonathantneal/closest' ],
			[ 'CodeMirror', 'https://codemirror.net/' ],
			[ 'Color Animations', 'https://plugins.jquery.com/color/' ],
			[ 'getID3()', 'http://getid3.sourceforge.net/' ],
			[ 'FormData', 'https://github.com/jimmywarting/FormData' ],
			[ 'Horde Text Diff', 'https://pear.horde.org/' ],
			[ 'hoverIntent', 'http://cherne.net/brian/resources/jquery.hoverIntent.html' ],
			[ 'imgAreaSelect', 'http://odyniec.net/projects/imgareaselect/' ],
			[ 'Iris', 'https://github.com/Automattic/Iris' ],
			[ 'jQuery', 'https://jquery.com/' ],
			[ 'jQuery UI', 'https://jqueryui.com/' ],
			[ 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ],
			[ 'jQuery serializeObject', 'http://benalman.com/projects/jquery-misc-plugins/' ],
			[ 'jQuery.query', 'https://plugins.jquery.com/query-object/' ],
			[ 'jQuery.suggest', 'https://github.com/pvulgaris/jquery.suggest' ],
			[ 'jQuery UI Touch Punch', 'http://touchpunch.furf.com/' ],
			[ 'json2', 'https://github.com/douglascrockford/JSON-js' ],
			[ 'Lodash', 'https://lodash.com/' ],
			[ 'Masonry', 'http://masonry.desandro.com/' ],
			[ 'MediaElement.js', 'http://mediaelementjs.com/' ],
			[ 'Moment', 'http://momentjs.com/' ],
			[ 'PclZip', 'http://www.phpconcept.net/pclzip/' ],
			[ 'PemFTP', 'https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html' ],
			[ 'phpass', 'http://www.openwall.com/phpass/' ],
			[ 'PHPMailer', 'https://github.com/PHPMailer/PHPMailer' ],
			[ 'Plupload', 'http://www.plupload.com/' ],
			[ 'random_compat', 'https://github.com/paragonie/random_compat' ],
			[ 'React', 'https://reactjs.org/' ],
			[ 'Redux', 'https://redux.js.org/' ],
			[ 'Requests', 'http://requests.ryanmccue.info/' ],
			[ 'SimplePie', 'http://simplepie.org/' ],
			[ 'The Incutio XML-RPC Library', 'https://code.google.com/archive/p/php-ixr/' ],
			[ 'Thickbox', 'http://codylindley.com/thickbox/' ],
			[ 'TinyMCE', 'https://www.tinymce.com/' ],
			[ 'Twemoji', 'https://github.com/twitter/twemoji' ],
			[ 'Underscore.js', 'http://underscorejs.org/' ],
			[ 'whatwg-fetch', 'https://github.com/github/fetch' ],
			[ 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ],
		];
	}
}

