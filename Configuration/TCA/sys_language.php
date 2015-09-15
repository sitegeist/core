<?php
return array(
	'ctrl' => array(
		'label' => 'title',
		'tstamp' => 'tstamp',
		'default_sortby' => 'ORDER BY title',
		'title' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language',
		'adminOnly' => 1,
		'rootLevel' => 1,
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'typeicon_column' => 'flag',
		'typeicon_classes' => array(
			'default' => 'mimetypes-x-sys_language',
			'mask' => 'flags-###TYPE###'
		),
		'versioningWS_alwaysAllowLiveEdit' => TRUE
	),
	'interface' => array(
		'showRecordFieldList' => 'hidden,title'
	),
	'columns' => array(
		'title' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'input',
				'size' => '35',
				'max' => '80',
				'eval' => 'trim,required'
			)
		),
		'hidden' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
			'exclude' => 1,
			'config' => array(
				'type' => 'check',
				'default' => '0'
			)
		),
		'language_isocode' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language.language_isocode',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
				'items' => array(),
				'itemsProcFunc' => \TYPO3\CMS\Core\Service\IsoCodeService::class . '->renderIsoCodeSelectDropdown',
			)
		),
		'static_lang_isocode' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language.isocode',
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0)
				),
				'foreign_table' => 'static_languages',
				'foreign_table_where' => 'AND static_languages.pid=0 ORDER BY static_languages.lg_name_en',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1
			)
		),
		'flag' => array(
			'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language.flag',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0, ''),
					array('multiple', 'multiple', 'flags-multiple'),
					array('ad', 'ad', 'flags-ad'),
					array('ae', 'ae', 'flags-ae'),
					array('af', 'af', 'flags-af'),
					array('ag', 'ag', 'flags-ag'),
					array('ai', 'ai', 'flags-ai'),
					array('al', 'al', 'flags-al'),
					array('am', 'am', 'flags-am'),
					array('an', 'an', 'flags-an'),
					array('ao', 'ao', 'flags-ao'),
					array('ar', 'ar', 'flags-ar'),
					array('as', 'as', 'flags-as'),
					array('at', 'at', 'flags-at'),
					array('au', 'au', 'flags-au'),
					array('aw', 'aw', 'flags-aw'),
					array('ax', 'ax', 'flags-ax'),
					array('az', 'az', 'flags-az'),
					array('ba', 'ba', 'flags-ba'),
					array('bb', 'bb', 'flags-bb'),
					array('bd', 'bd', 'flags-bd'),
					array('be', 'be', 'flags-be'),
					array('bf', 'bf', 'flags-bf'),
					array('bg', 'bg', 'flags-bg'),
					array('bh', 'bh', 'flags-bh'),
					array('bi', 'bi', 'flags-bi'),
					array('bj', 'bj', 'flags-bj'),
					array('bm', 'bm', 'flags-bm'),
					array('bn', 'bn', 'flags-bn'),
					array('bo', 'bo', 'flags-bo'),
					array('br', 'br', 'flags-br'),
					array('bs', 'bs', 'flags-bs'),
					array('bt', 'bt', 'flags-bt'),
					array('bv', 'bv', 'flags-bv'),
					array('bw', 'bw', 'flags-bw'),
					array('by', 'by', 'flags-by'),
					array('bz', 'bz', 'flags-bz'),
					array('ca', 'ca', 'flags-ca'),
					array('catalonia', 'catalonia', 'flags-catalonia'),
					array('cc', 'cc', 'flags-cc'),
					array('cd', 'cd', 'flags-cd'),
					array('cf', 'cf', 'flags-cf'),
					array('cg', 'cg', 'flags-cg'),
					array('ch', 'ch', 'flags-ch'),
					array('ci', 'ci', 'flags-ci'),
					array('ck', 'ck', 'flags-ck'),
					array('cl', 'cl', 'flags-cl'),
					array('cm', 'cm', 'flags-cm'),
					array('cn', 'cn', 'flags-cn'),
					array('co', 'co', 'flags-co'),
					array('cr', 'cr', 'flags-cr'),
					array('cs', 'cs', 'flags-cs'),
					array('cu', 'cu', 'flags-cu'),
					array('cv', 'cv', 'flags-cv'),
					array('cx', 'cx', 'flags-cx'),
					array('cy', 'cy', 'flags-cy'),
					array('cz', 'cz', 'flags-cz'),
					array('de', 'de', 'flags-de'),
					array('dj', 'dj', 'flags-dj'),
					array('dk', 'dk', 'flags-dk'),
					array('dm', 'dm', 'flags-dm'),
					array('do', 'do', 'flags-do'),
					array('dz', 'dz', 'flags-dz'),
					array('ec', 'ec', 'flags-ec'),
					array('ee', 'ee', 'flags-ee'),
					array('eg', 'eg', 'flags-eg'),
					array('eh', 'eh', 'flags-eh'),
					array('en-us-gb', 'en-us-gb', 'flags-en-us-gb'),
					array('england', 'england', 'flags-gb-eng'),
					array('er', 'er', 'flags-er'),
					array('es', 'es', 'flags-es'),
					array('et', 'et', 'flags-et'),
					array('europeanunion', 'europeanunion', 'flags-eu'),
					array('fam', 'fam', 'flags-fam'),
					array('fi', 'fi', 'flags-fi'),
					array('fj', 'fj', 'flags-fj'),
					array('fk', 'fk', 'flags-fk'),
					array('fm', 'fm', 'flags-fm'),
					array('fo', 'fo', 'flags-fo'),
					array('fr', 'fr', 'flags-fr'),
					array('ga', 'ga', 'flags-ga'),
					array('gb', 'gb', 'flags-gb'),
					array('gd', 'gd', 'flags-gd'),
					array('ge', 'ge', 'flags-ge'),
					array('gf', 'gf', 'flags-gf'),
					array('gh', 'gh', 'flags-gh'),
					array('gi', 'gi', 'flags-gi'),
					array('gl', 'gl', 'flags-gl'),
					array('gm', 'gm', 'flags-gm'),
					array('gn', 'gn', 'flags-gn'),
					array('gp', 'gp', 'flags-gp'),
					array('gq', 'gq', 'flags-gq'),
					array('gr', 'gr', 'flags-gr'),
					array('gs', 'gs', 'flags-gs'),
					array('gt', 'gt', 'flags-gt'),
					array('gu', 'gu', 'flags-gu'),
					array('gw', 'gw', 'flags-gw'),
					array('gy', 'gy', 'flags-gy'),
					array('hk', 'hk', 'flags-hk'),
					array('hm', 'hm', 'flags-hm'),
					array('hn', 'hn', 'flags-hn'),
					array('hr', 'hr', 'flags-hr'),
					array('ht', 'ht', 'flags-ht'),
					array('hu', 'hu', 'flags-hu'),
					array('id', 'id', 'flags-id'),
					array('ie', 'ie', 'flags-ie'),
					array('il', 'il', 'flags-il'),
					array('in', 'in', 'flags-in'),
					array('io', 'io', 'flags-io'),
					array('iq', 'iq', 'flags-iq'),
					array('ir', 'ir', 'flags-ir'),
					array('is', 'is', 'flags-is'),
					array('it', 'it', 'flags-it'),
					array('jm', 'jm', 'flags-jm'),
					array('jo', 'jo', 'flags-jo'),
					array('jp', 'jp', 'flags-jp'),
					array('ke', 'ke', 'flags-ke'),
					array('kg', 'kg', 'flags-kg'),
					array('kh', 'kh', 'flags-kh'),
					array('ki', 'ki', 'flags-ki'),
					array('km', 'km', 'flags-km'),
					array('kn', 'kn', 'flags-kn'),
					array('kp', 'kp', 'flags-kp'),
					array('kr', 'kr', 'flags-kr'),
					array('kw', 'kw', 'flags-kw'),
					array('ky', 'ky', 'flags-ky'),
					array('kz', 'kz', 'flags-kz'),
					array('la', 'la', 'flags-la'),
					array('lb', 'lb', 'flags-lb'),
					array('lc', 'lc', 'flags-lc'),
					array('li', 'li', 'flags-li'),
					array('lk', 'lk', 'flags-lk'),
					array('lr', 'lr', 'flags-lr'),
					array('ls', 'ls', 'flags-ls'),
					array('lt', 'lt', 'flags-lt'),
					array('lu', 'lu', 'flags-lu'),
					array('lv', 'lv', 'flags-lv'),
					array('ly', 'ly', 'flags-ly'),
					array('ma', 'ma', 'flags-ma'),
					array('mc', 'mc', 'flags-mc'),
					array('md', 'md', 'flags-md'),
					array('me', 'me', 'flags-me'),
					array('mg', 'mg', 'flags-mg'),
					array('mh', 'mh', 'flags-mh'),
					array('mk', 'mk', 'flags-mk'),
					array('ml', 'ml', 'flags-ml'),
					array('mm', 'mm', 'flags-mm'),
					array('mn', 'mn', 'flags-mn'),
					array('mo', 'mo', 'flags-mo'),
					array('mp', 'mp', 'flags-mp'),
					array('mq', 'mq', 'flags-mq'),
					array('mr', 'mr', 'flags-mr'),
					array('ms', 'ms', 'flags-ms'),
					array('mt', 'mt', 'flags-mt'),
					array('mu', 'mu', 'flags-mu'),
					array('mv', 'mv', 'flags-mv'),
					array('mw', 'mw', 'flags-mw'),
					array('mx', 'mx', 'flags-mx'),
					array('my', 'my', 'flags-my'),
					array('mz', 'mz', 'flags-mz'),
					array('na', 'na', 'flags-na'),
					array('nc', 'nc', 'flags-nc'),
					array('ne', 'ne', 'flags-ne'),
					array('nf', 'nf', 'flags-nf'),
					array('ng', 'ng', 'flags-ng'),
					array('ni', 'ni', 'flags-ni'),
					array('nl', 'nl', 'flags-nl'),
					array('no', 'no', 'flags-no'),
					array('np', 'np', 'flags-np'),
					array('nr', 'nr', 'flags-nr'),
					array('nu', 'nu', 'flags-nu'),
					array('nz', 'nz', 'flags-nz'),
					array('om', 'om', 'flags-om'),
					array('pa', 'pa', 'flags-pa'),
					array('pe', 'pe', 'flags-pe'),
					array('pf', 'pf', 'flags-pf'),
					array('pg', 'pg', 'flags-pg'),
					array('ph', 'ph', 'flags-ph'),
					array('pk', 'pk', 'flags-pk'),
					array('pl', 'pl', 'flags-pl'),
					array('pm', 'pm', 'flags-pm'),
					array('pn', 'pn', 'flags-pn'),
					array('pr', 'pr', 'flags-pr'),
					array('ps', 'ps', 'flags-ps'),
					array('pt', 'pt', 'flags-pt'),
					array('pw', 'pw', 'flags-pw'),
					array('py', 'py', 'flags-py'),
					array('qa', 'qa', 'flags-qa'),
					array('qc', 'qc', 'flags-qc'),
					array('re', 're', 'flags-re'),
					array('ro', 'ro', 'flags-ro'),
					array('rs', 'rs', 'flags-rs'),
					array('ru', 'ru', 'flags-ru'),
					array('rw', 'rw', 'flags-rw'),
					array('sa', 'sa', 'flags-sa'),
					array('sb', 'sb', 'flags-sb'),
					array('sc', 'sc', 'flags-sc'),
					array('scotland', 'scotland', 'flags-scotland'),
					array('sd', 'sd', 'flags-sd'),
					array('se', 'se', 'flags-se'),
					array('sg', 'sg', 'flags-sg'),
					array('sh', 'sh', 'flags-sh'),
					array('si', 'si', 'flags-si'),
					array('sj', 'sj', 'flags-sj'),
					array('sk', 'sk', 'flags-sk'),
					array('sl', 'sl', 'flags-sl'),
					array('sm', 'sm', 'flags-sm'),
					array('sn', 'sn', 'flags-sn'),
					array('so', 'so', 'flags-so'),
					array('sr', 'sr', 'flags-sr'),
					array('st', 'st', 'flags-st'),
					array('sv', 'sv', 'flags-sv'),
					array('sy', 'sy', 'flags-sy'),
					array('sz', 'sz', 'flags-sz'),
					array('tc', 'tc', 'flags-tc'),
					array('td', 'td', 'flags-td'),
					array('tf', 'tf', 'flags-tf'),
					array('tg', 'tg', 'flags-tg'),
					array('th', 'th', 'flags-th'),
					array('tj', 'tj', 'flags-tj'),
					array('tk', 'tk', 'flags-tk'),
					array('tl', 'tl', 'flags-tl'),
					array('tm', 'tm', 'flags-tm'),
					array('tn', 'tn', 'flags-tn'),
					array('to', 'to', 'flags-to'),
					array('tr', 'tr', 'flags-tr'),
					array('tt', 'tt', 'flags-tt'),
					array('tv', 'tv', 'flags-tv'),
					array('tw', 'tw', 'flags-tw'),
					array('tz', 'tz', 'flags-tz'),
					array('ua', 'ua', 'flags-ua'),
					array('ug', 'ug', 'flags-ug'),
					array('um', 'um', 'flags-um'),
					array('us', 'us', 'flags-us'),
					array('uy', 'uy', 'flags-uy'),
					array('uz', 'uz', 'flags-uz'),
					array('va', 'va', 'flags-va'),
					array('vc', 'vc', 'flags-vc'),
					array('ve', 've', 'flags-ve'),
					array('vg', 'vg', 'flags-vg'),
					array('vi', 'vi', 'flags-vi'),
					array('vn', 'vn', 'flags-vn'),
					array('vu', 'vu', 'flags-vu'),
					array('wales', 'wales', 'flags-wales'),
					array('wf', 'wf', 'flags-wf'),
					array('ws', 'ws', 'flags-ws'),
					array('ye', 'ye', 'flags-ye'),
					array('yt', 'yt', 'flags-yt'),
					array('za', 'za', 'flags-za'),
					array('zm', 'zm', 'flags-zm'),
					array('zw', 'zw', 'flags-zw')
				),
				'selicon_cols' => 16,
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1
			)
		)
	),
	'types' => array(
		'1' => array('showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
										title,language_isocode,flag,
									--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
										hidden')
	)
);
