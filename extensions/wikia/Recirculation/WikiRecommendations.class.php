<?php

class WikiRecommendations {

	const THUMBNAIL_WIDTH = 100;
	const THUMBNAIL_RATIO = 16 / 9;
	const WIKI_RECOMMENDATIONS_LIMIT = 3;

	const RECOMMENDATIONS = [
		'en' =>
			[
				[
					'title' => 'For the People Wiki',
					'url' => 'http://forthepeople.wikia.com/wiki/For_the_People_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/forthepeople5309/images/8/8a/ForThePeople.jpg/revision/latest?cb=20180130160036',
				],
				[
					'title' => 'Grey\'s Anatomy Wiki',
					'url' => 'http://greysanatomy.wikia.com/wiki/Grey%27s_Anatomy_Universe_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/greys/images/d/dd/GAS6cast.jpg/revision/latest?cb=20100614210055',
				],
				[
					'title' => 'Chicago PD Wiki',
					'url' => 'http://chicago-pd.wikia.com/wiki/Chicago_PD_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/chicago-pd/images/c/c3/Chicago-pd21.jpg/revision/latest?cb=20140123152937',
				],
				[
					'title' => 'Chicago Fire Wiki',
					'url' => 'http://chicagofire.wikia.com/wiki/Chicago_Fire_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/chicagotrilogy/images/8/82/ChicagoFire.jpg/revision/latest?cb=20150825184429',
				],
				[
					'title' => 'Chicago Med Wiki',
					'url' => 'http://chicagomed.wikia.com/wiki/Chicago_Med_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/chicagomed/images/3/36/Mountains_And_Molehills_4.jpg/revision/latest?cb=20171219153457',
				],
				[
					'title' => 'The Handmaid\'s Tale Wiki',
					'url' => 'http://the-handmaids-tale.wikia.com/wiki/The_Handmaid%27s_Tale_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/the-handmaids-tale/images/c/c2/Handmaids_tale_hulu_ep_5.jpg/revision/latest/scale-to-width-down/2000?cb=20170511002613',
				],
				[
					'title' => 'The Dresden Files Wiki',
					'url' => 'http://dresdenfiles.wikia.com/wiki/Dresden_Files',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/dresdenfiles/images/9/93/HarryThomas.jpg/revision/latest?cb=20180223024704',
				],
				[
					'title' => 'Diep.io Wikia',
					'url' => 'http://diepio.wikia.com/wiki/Diepio_Wikia',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/diepio/images/3/32/Spotlight.png/revision/latest?cb=20180227151035',
				],
				[
					'title' => 'Future Wiki',
					'url' => 'http://future.wikia.com/wiki/Main_Page',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/future/images/2/22/Future-wallpaper-beautiful-future-wallpaper-x-of-future-wallpaper-1024x576.jpg/revision/latest?cb=20180316120033',
				],
				[
					'title' => 'Criminal Case Wiki',
					'url' => 'http://criminalcasegame.wikia.com/wiki/Criminal_Case_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/criminal-case-grimsborough/images/0/0e/Community-header-background/revision/latest?cb=20170614003827',
				],
				[
					'title' => 'unOrdinary Wiki',
					'url' => 'http://unordinary.wikia.com/wiki/UnOrdinary_Wikia',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/unordinary6344/images/4/47/UnOrdinary_spotlight.png/revision/latest?cb=20180325053803',
				],
				[
					'title' => 'SoNyuhShiDae Wiki',
					'url' => 'http://snsd.wikia.com/wiki/Girls%27_Generation_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/snsd/images/d/d5/Girl%27s_Generation_Promotional_Picture_for_Holiday_Night.png/revision/latest?cb=20180324135038',
				],
				[
					'title' => 'Assassin\'s Creed',
					'url' => 'http://assassinscreed.wikia.com/wiki/Assassin%27s_Creed_Wiki',
					'thumbnailUrl' => 'http://vignette1.wikia.nocookie.net/assassinscreed/images/2/25/Wikia-Visualization-Main%2Cassassinscreed.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102142202',
				],
			],
		'fr' =>
			[
				[
					'title' => 'Wiki Westworld',
					'url' => 'http://fr.westworld.wikia.com/wiki/Wiki_Westworld',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/elsas-test/images/a/a8/FR-Westworld-Spotlight.jpg/revision/latest?cb=20180316162000&path-prefix=fr',
				],
				[
					'title' => 'Wiki DC Extended Universe',
					'url' => 'http://fr.dc-extended-universe.wikia.com/wiki/Wikia_L%27univers_cin%C3%A9matique_DC',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/elsas-test/images/7/75/FR-Krypton-Spotlight.jpg/revision/latest?cb=20180316161958&path-prefix=fr',
				],
				[
					'title' => 'Wiki My Hero Academia',
					'url' => 'http://fr.bokunoheroacademia.wikia.com/wiki/Wiki_Boku_no_Hero_Academia',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/elsas-test/images/c/c1/FR-MyHeroAcademiaS3-Spotlight.jpg/revision/latest?cb=20180316161959&path-prefix=fr',
				],
				[
					'title' => 'Wiki X-Men',
					'url' => 'http://fr.xmen.wikia.com/wiki/Wiki_X-Men_First_Class',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/elsas-test/images/1/1e/FR-Legion-Spotlight.jpg/revision/latest?cb=20180316162000&path-prefix=fr',
				],
				[
					'title' => 'Wiki Naruto',
					'url' => 'http://fr.naruto.wikia.com/wiki/Accueil',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/elsas-test/images/7/70/FR-Naruto-Spotlight.jpg/revision/latest?cb=20180321133028&path-prefix=fr',
				],
				[
					'title' => 'Assassin\'s Creed',
					'url' => 'http://assassinscreed.wikia.com/wiki/Assassin%27s_Creed_Wiki',
					'thumbnailUrl' => 'http://vignette1.wikia.nocookie.net/assassinscreed/images/2/25/Wikia-Visualization-Main%2Cassassinscreed.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102142202',
				],
			],
		'de' =>
			[
				[
					'title' => 'The Defenders Wiki',
					'url' => 'http://de.the-defenders.wikia.com/wiki/The_Defenders_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/d/d2/Jessica_Jones_Spotlight.jpg/revision/latest?cb=20180228160654&path-prefix=de',
				],
				[
					'title' => 'Tomb Raider Wiki',
					'url' => 'http://de.tombraider.wikia.com/wiki/Tomb_Raider_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/e/e0/Tomb_Raider_2018_Spotlight.jpg/revision/latest?cb=20180228164144&path-prefix=de',
				],
				[
					'title' => 'The Walking Dead Wiki',
					'url' => 'http://de.thewalkingdeadtv.wikia.com/wiki/The_Walking_Dead_(TV]_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/c/c2/Fear_the_Walking_Dead_Spotlight.jpg/revision/latest?cb=20180228165826&path-prefix=de',
				],
				[
					'title' => 'Lucifer Wiki',
					'url' => 'http://de.lucifer.wikia.com/wiki/Lucifer_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/3/3e/Lucifer_Season_3_Spotlight.jpg/revision/latest?cb=20180228170424&path-prefix=de',
				],
				[
					'title' => 'Stargate Wiki',
					'url' => 'http://de.stargate.wikia.com/wiki/Stargate_SG-1_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/7/75/Stargate_Origins_Spotlight.jpg/revision/latest?cb=20180228171958&path-prefix=de',
				],
				[
					'title' => 'Shadowhunters Wiki',
					'url' => 'http://de.shadowhunterstv.wikia.com/wiki/Shadowhunterstv_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/4/44/Shadowhunters_Spotlight.jpg/revision/latest?cb=20180228172418&path-prefix=de',
				],
				[
					'title' => 'Kirby Wiki',
					'url' => 'http://de.kirby.wikia.com/wiki/Kirby_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/0/03/Kirby_Main_Artwork_HD.jpg/revision/latest?cb=20180228112718&path-prefix=de',
				],
				[
					'title' => 'Ni No Kuni Wiki',
					'url' => 'http://de.ninokuni.wikia.com/wiki/Ni_no_Kuni_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/1/18/Ni_No_Kuni_2_Key_Art_16-9.jpg/revision/latest?cb=20180228114650&path-prefix=de',
				],
				[
					'title' => 'Far Cry Wiki',
					'url' => 'http://de.farcry.wikia.com/wiki/FarCry_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/4/40/Far_Cry_5_Spotlight.jpg/revision/latest?cb=20180228131517&path-prefix=de',
				],
				[
					'title' => 'Videospiele Wiki',
					'url' => 'http://videospiele.wikia.com/wiki/Videospiele_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/2/21/Videospiele_Wiki.jpg/revision/latest?cb=20180228143312&path-prefix=de',
				],
				[
					'title' => 'Subnautica Wiki',
					'url' => 'http://de.subnautica.wikia.com/wiki/Subnautica_Wikia',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/d/db/Subnautica_Spotlight.jpg/revision/latest?cb=20171023143728&path-prefix=de',
				],
				[
					'title' => 'Kingdom Come: Deliverance Wiki',
					'url' => 'http://de.kingdom-come-deliverance.wikia.com/wiki/Kingdom_Come:_Deliverance_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/b/b0/Kingdom-Come-Deliverance-Spotlight.jpg/revision/latest?cb=20180123123322&path-prefix=de',
				],
				[
					'title' => 'Secret of Mana Wiki',
					'url' => 'http://de.secretofmana.wikia.com/wiki/Secret_of_Mana_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/8/86/Secret_of_Mana_Spotlight.jpg/revision/latest?cb=20180123124131&path-prefix=de',
				],
				[
					'title' => 'Pillars of Eternity Wiki',
					'url' => 'http://de.pillarsofeternity.wikia.com/wiki/Pillars_of_Eternity_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/bossosbastelbude/images/0/03/Pillars_of_Eternity_II_Deadfire_Spotlight.jpg/revision/latest?cb=20180228144059&path-prefix=de',
				],
				[
					'title' => 'Assassin\'s Creed',
					'url' => 'http://assassinscreed.wikia.com/wiki/Assassin%27s_Creed_Wiki',
					'thumbnailUrl' => 'http://vignette1.wikia.nocookie.net/assassinscreed/images/2/25/Wikia-Visualization-Main%2Cassassinscreed.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102142202',
				],
			],
		'it' =>
			[
				[
					'title' => 'One-Punch Man Wiki',
					'url' => 'https://goo.gl/QrXG3a',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/onepunchman/images/a/a7/Tatsumaki.png/revision/latest?cb=20171101151651&path-prefix=it',
				],
				[
					'title' => 'Monster Hunter Wiki',
					'url' => 'https://goo.gl/B8GDED',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/monsterhunter/images/c/c9/MHW-Rathalos_Artwork_002.jpg/revision/latest?cb=20170613095127',
				],
				[
					'title' => 'Super Mario Italia Wiki',
					'url' => 'https://goo.gl/8q571K',
					'thumbnailUrl' => 'https://vignette3.wikia.nocookie.net/supermarioitalia/images/8/81/Wikia-Visualization-Main%2Citsupermarioitalia.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102154509&path-prefix=it',
				],
				[
					'title' => 'Jawapedia',
					'url' => 'https://goo.gl/MF5jEG',
					'thumbnailUrl' => 'https://vignette1.wikia.nocookie.net/starwars/images/2/2a/Wikia-Visualization-Main%2Citstarwars.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102142316&path-prefix=it',
				],
				[
					'title' => 'Kingdom Hearts Wiki',
					'url' => 'https://goo.gl/4VQrt1',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/kingdomhearts/images/b/b1/Wikia-Visualization-Main%2Ckingdomhearts.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102141406',
				],
				[
					'title' => 'Assassin\'s Creed',
					'url' => 'http://assassinscreed.wikia.com/wiki/Assassin%27s_Creed_Wiki',
					'thumbnailUrl' => 'http://vignette1.wikia.nocookie.net/assassinscreed/images/2/25/Wikia-Visualization-Main%2Cassassinscreed.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102142202',
				],
				[
					'title' => 'One Piece Wiki Italia',
					'url' => 'http://bit.ly/fandom-it-footer-itonepiece',
					'thumbnailUrl' => 'https://vignette4.wikia.nocookie.net/onepiece/images/3/36/Promo_wiki.png/revision/latest?cb=20161129202134',
				],
				[
					'title' => 'Narutopedia',
					'url' => 'http://bit.ly/fandom-it-footer-itnaruto',
					'thumbnailUrl' => 'https://vignette4.wikia.nocookie.net/naruto/images/5/50/Wikia-Visualization-Main%2Cplnaruto.png/revision/latest?cb=20161102143013',
				],
				[
					'title' => 'Dragon Ball Wiki',
					'url' => 'http://bit.ly/fandom-it-footer-itdragonball',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/dragonball/images/0/0f/Wikia-Visualization-Main%2Citdragonball.png/revision/latest?cb=20161102150926&path-prefix=it',
				],
				[
					'title' => 'Harry Potter Wiki',
					'url' => 'http://bit.ly/fandom-it-footer-itharrypotter',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/harrypotter/images/a/a4/Wikia-Visualization-Main%2Citharrypotter.png/revision/latest?cb=20161102142436&path-prefix=it',
				],
				[
					'title' => 'Il Trono di Spade Wiki',
					'url' => 'http://bit.ly/fandom-it-footer-itiltronodispade',
					'thumbnailUrl' => 'https://vignette3.wikia.nocookie.net/iltronodispade/images/6/60/Il_Trono_di_Spade3.png/revision/latest/thumbnail-down/width/660/height/660?cb=20111128211925&path-prefix=it',
				],
				[
					'title' => 'Creepypasta Italia',
					'url' => 'http://bit.ly/fandom-it-footer-itcreepypasta',
					'thumbnailUrl' => 'https://vignette3.wikia.nocookie.net/creepypastaitalia/images/2/2f/Header_2.png/revision/latest/thumbnail-down/width/1600/height/1600?cb=20170106211156&path-prefix=it',
				],
				[
					'title' => 'Assassin\'s Creed Wiki',
					'url' => 'http://bit.ly/fandom-it-footer-itassassinscreed',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/assassinscreed/images/f/f9/Wikia-Visualization-Main%2Citassassinscreed.png/revision/latest?cb=20161102150231&path-prefix=it',
				],
				[
					'title' => 'Brave Frontier RPG Wiki',
					'url' => 'http://bit.ly/fandom-it-footer-itbravefrontierrpg',
					'thumbnailUrl' => 'https://vignette4.wikia.nocookie.net/bravefrontierrpg/images/0/0d/Brave_Frontier_RPG_ITALIA.png/revision/latest/thumbnail-down/width/660/height/660?cb=20151107095731&path-prefix=it',
				],
				[
					'title' => 'Shingeki no Kyojin Wiki',
					'url' => 'http://bit.ly/fandom-it-footer-itshingekinokyojin',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/shingekinokyojin/images/4/42/Wikia-Visualization-Main%2Citshingekinokyojin.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102171435&path-prefix=it',
				],
				[
					'title' => 'Super Mario Italia Wiki',
					'url' => 'https://goo.gl/8q571K',
					'thumbnailUrl' => 'https://vignette3.wikia.nocookie.net/supermarioitalia/images/8/81/Wikia-Visualization-Main%2Citsupermarioitalia.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102154509&path-prefix=it',
				],
				[
					'title' => 'Jawapedia',
					'url' => 'https://goo.gl/MF5jEG',
					'thumbnailUrl' => 'https://vignette1.wikia.nocookie.net/starwars/images/2/2a/Wikia-Visualization-Main%2Citstarwars.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102142316&path-prefix=it',
				],
				[
					'title' => 'The Elder Scrolls Wiki',
					'url' => 'http://bit.ly/fandom-it-footer-itelderscrolls',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/elderscrolls/images/d/de/Wikia-Visualization-Main%2Citelderscrolls.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102153432&path-prefix=it',
				],
				[
					'title' => 'Zeldapedia',
					'url' => 'http://bit.ly/fandom-it-footer-itzelda',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/zelda/images/b/b1/The_Legend_of_Zelda_WiiU_Artwork.png/revision/latest?cb=20170306075901',
				],
				[
					'title' => 'Rick and Morty Wiki',
					'url' => 'http://bit.ly/fandom-it-footer-itrickandmorty',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/rickandmorty/images/b/bc/Slider_-_Personaggi.png/revision/latest/scale-to-width-down/670?cb=20170802162630&path-prefix=it',
				],
				[
					'title' => 'Monster Hunter Wiki',
					'url' => 'https://goo.gl/B8GDED',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/monsterhunter/images/c/c9/MHW-Rathalos_Artwork_002.jpg/revision/latest?cb=20170613095127',
				],
				[
					'title' => 'Kingdom Hearts Wiki',
					'url' => 'http://bit.ly/fandom-it-footer-itkhwita',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/kingdomhearts/images/b/b1/Wikia-Visualization-Main%2Ckingdomhearts.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102141406',
				],
				[
					'title' => 'One-Punch Man Wiki',
					'url' => 'https://goo.gl/QrXG3a',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/onepunchman/images/a/a7/Tatsumaki.png/revision/latest?cb=20171101151651&path-prefix=it',
				],
			],
		'ja' =>
			[
				[
					'title' => 'Battlefront Wiki',
					'url' => 'http://ja.battlefront.wikia.com',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/battlefront/images/3/3b/BF2_IMG.jpg/revision/latest?cb=20170905023120&path-prefix=ja',
				],
				[
					'title' => 'ゲームオブスローンズ Wiki',
					'url' => 'http://ja.gameofthrones.wikia.com',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/gameofthrones/images/7/75/GOTS7-E5-25.jpg/revision/latest/scale-to-width-down/640?cb=20170822083703&path-prefix=ja',
				],
				[
					'title' => 'ウーキーペディア',
					'url' => 'http://ja.starwars.wikia.com',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/starwars/images/6/65/Battle_of_Endor.png/revision/latest?cb=20150129051829&path-prefix=ja',
				],
				[
					'title' => 'Assassin\'s Creed',
					'url' => 'http://assassinscreed.wikia.com/wiki/Assassin%27s_Creed_Wiki',
					'thumbnailUrl' => 'http://vignette1.wikia.nocookie.net/assassinscreed/images/2/25/Wikia-Visualization-Main%2Cassassinscreed.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102142202',
				],
			],
		'pl' =>
			[
				[
					'title' => 'League of Legends Wiki',
					'url' => 'http://pl.leagueoflegends.wikia.com/wiki/League_of_Legends_Wiki',
					'thumbnailUrl' => 'https://vignette4.wikia.nocookie.net/vuh/images/a/a2/League_of_Legends_Wiki.jpg/revision/latest?cb=20170901024914&path-prefix=pl',
				],
				[
					'title' => 'Rayman Wiki',
					'url' => 'http://pl.rayman.wikia.com/wiki/Rayman_Wiki:Strona_g%C5%82%C3%B3wna',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/vuh/images/e/e1/Rayman_Wiki.jpg/revision/latest?cb=20170825174755&path-prefix=pl',
				],
				[
					'title' => 'DC Wiki',
					'url' => 'http://pl.dc.wikia.com/wiki/DC_Wiki',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/vuh/images/6/60/DC_Wiki.jpg/revision/latest?cb=20170825173855&path-prefix=pl',
				],
				[
					'title' => 'The Elder Scrolls Wiki',
					'url' => 'http://pl.elderscrolls.wikia.com/wiki/The_Elder_Scrolls_Wiki',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/vuh/images/7/7f/The_Elder_Scrolls_Wiki.jpg/revision/latest?cb=20170901024627&path-prefix=pl',
				],
				[
					'title' => 'Złoczyńcy Wiki',
					'url' => 'http://pl.villains.wikia.com/wiki/Z%C5%82oczy%C5%84cy_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/plwikia/images/8/81/Slider-Z%C5%82oczy%C5%84cy_Wiki.jpg/revision/latest?cb=20170929175616',
				],
				[
					'title' => 'Wiedźmin Wiki',
					'url' => 'http://wiedzmin.wikia.com/wiki/Wied%C5%BAmin_Wiki',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/vuh/images/3/35/Wied%C5%BAmin_Wiki.jpg/revision/latest?cb=20170901031050&path-prefix=pl',
				],
				[
					'title' => 'Warframe Wiki',
					'url' => 'http://pl.warframe.wikia.com/wiki/Strona_g%C5%82%C3%B3wna',
					'thumbnailUrl' => 'https://vignette3.wikia.nocookie.net/vuh/images/2/2b/Warframe_Wiki.jpg/revision/latest?cb=20170901031050&path-prefix=pl',
				],
				[
					'title' => 'My Little Pony Wiki',
					'url' => 'http://pl.mlp.wikia.com/wiki/My_Little_Pony_Przyja%C5%BA%C5%84_to_magia_Wiki',
					'thumbnailUrl' => 'https://vignette1.wikia.nocookie.net/vuh/images/b/b3/My_Little_Pony_Wiki.jpg/revision/latest?cb=20170901030633&path-prefix=pl',
				],
				[
					'title' => 'Naruto Wiki',
					'url' => 'http://pl.naruto.wikia.com/wiki/Naruto_Wiki',
					'thumbnailUrl' => 'https://vignette1.wikia.nocookie.net/vuh/images/f/fa/Naruto_Wiki.jpg/revision/latest?cb=20170901032034&path-prefix=pl',
				],
				[
					'title' => 'Gwint Wiki',
					'url' => 'http://gwint.wikia.com/wiki/Gwint_Wiki',
					'thumbnailUrl' => 'https://vignette3.wikia.nocookie.net/vuh/images/b/ba/Gwint_Wiki.jpg/revision/latest?cb=20170901031049&path-prefix=pl',
				],
				[
					'title' => 'Gra o Tron Wiki',
					'url' => 'http://graotron.wikia.com/wiki/Gra_o_tron_Wiki',
					'thumbnailUrl' => 'https://vignette3.wikia.nocookie.net/vuh/images/5/5d/Gra_o_Tron_Wiki.jpg/revision/latest?cb=20170901033400&path-prefix=pl',
				],
				[
					'title' => 'Pokemon Wiki',
					'url' => 'http://pl.pokemon.wikia.com/wiki/Pok%C3%A9mon_Wiki',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/vuh/images/0/0f/Pokemon_Wiki.jpg/revision/latest?cb=20170901033359&path-prefix=pl',
				],
				[
					'title' => 'Need for Speed Wiki',
					'url' => 'http://pl.nfs.wikia.com/wiki/Need_for_Speed_Wiki',
					'thumbnailUrl' => 'https://vignette3.wikia.nocookie.net/vuh/images/f/fe/Need_for_Speed_Wiki.jpg/revision/latest?cb=20170901033401&path-prefix=pl',
				],
				[
					'title' => 'Overwatch Wiki',
					'url' => 'http://pl.overwatch.wikia.com/wiki/Overwatch_Wiki',
					'thumbnailUrl' => 'https://vignette3.wikia.nocookie.net/vuh/images/5/59/Overwatch_Wiki.jpg/revision/latest?cb=20170901030239&path-prefix=pl',
				],
				[
					'title' => 'Death Note Wiki',
					'url' => 'http://pl.deathnote.wikia.com/wiki/Death_Note_Wiki',
					'thumbnailUrl' => 'https://vignette4.wikia.nocookie.net/vuh/images/d/d7/Death_Note.jpg/revision/latest?cb=20170901032713&path-prefix=pl',
				],
				[
					'title' => 'Battlefield Wiki',
					'url' => 'http://pl.battlefield.wikia.com/wiki/Battlefield_Wiki',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/vuh/images/5/5e/Battlefield_Wiki.jpg/revision/latest?cb=20170901033400&path-prefix=pl',
				],
				[
					'title' => 'Auta Wiki',
					'url' => 'http://pl.auta.wikia.com/wiki/Auta_Wiki',
					'thumbnailUrl' => 'https://vignette3.wikia.nocookie.net/vuh/images/b/b1/Auta_Wiki.png/revision/latest?cb=20170901025628&path-prefix=pl',
				],
				[
					'title' => 'Life is Strange Wiki',
					'url' => 'http://pl.lifeisstrange.wikia.com/wiki/Life_Is_Strange_Wikia',
					'thumbnailUrl' => 'https://vignette2.wikia.nocookie.net/vuh/images/6/6e/Life_is_Strange_Wiki.jpg/revision/latest?cb=20170901032033&path-prefix=pl',
				],
				[
					'title' => 'Unturned Wiki',
					'url' => 'http://pl.unturned.wikia.com/wiki/Unturned_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/unturned-polska/images/b/b6/Spotlight.jpg/revision/latest?cb=20170929203539&path-prefix=pl',
				],
				[
					'title' => 'Arrowwersum',
					'url' => 'http://arrowwersum.wikia.com/wiki/Arrowwersum',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/plwikia/images/6/66/Spotlight_Arrowwersum_%28pa%C5%BAdziernik_2017_nowa_wersja%29.png/revision/latest?cb=20170923195223',
				],
				[
					'title' => 'Star Wars Fanonpedia',
					'url' => 'http://gwfanon.wikia.com/wiki/Strona_g%C5%82%C3%B3wna',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/plwikia/images/3/30/Fanonpedia_spotlight_listopad_2017.png/revision/latest?cb=20171008170243',
				],
				[
					'title' => 'ELEX Wiki',
					'url' => 'http://pl.elex.wikia.com/wiki/ELEX_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/vuh/images/7/7b/ELEX_Wiki.png/revision/latest?cb=20171105202319&path-prefix=pl',
				],
				[
					'title' => 'YouTube Wiki',
					'url' => 'http://pl.youtube.wikia.com/wiki/YouTube_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/plwikia/images/2/27/YouTube_Wiki.jpg/revision/latest?cb=20171105210441',
				],
				[
					'title' => 'Phoenotopia Wiki',
					'url' => 'http://pl.phoenotopia.wikia.com/wiki/Phoenotopia_Wikia',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/vuh/images/7/74/UTfRdUj.jpg/revision/latest?cb=20171201175632&path-prefix=pl',
				],
				[
					'title' => 'Xenopedia',
					'url' => 'http://pl.alien.wikia.com/wiki/Strona_g%C5%82%C3%B3wna',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/vuh/images/4/4c/TI6Q6jX.jpg/revision/latest?cb=20171201175705&path-prefix=pl',
				],
				[
					'title' => 'Łowcy Trolli Wiki',
					'url' => 'http://pl.lowcy-trolli.wikia.com/wiki/%C5%81owcy_Trolli_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/lowcy-trolli/images/c/c1/Jim_sezon2.jpg/revision/latest?cb=20171217213110&path-prefix=pl',
				],
				[
					'title' => 'Dziedzictwo Wiki',
					'url' => 'http://dziedzictwo.wikia.com/wiki/Strona_g%C5%82%C3%B3wna',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/vuh/images/f/f3/Dziedzictwo_Wiki_01-2018.jpg/revision/latest?cb=20180102224021&path-prefix=pl',
				],
				[
					'title' => 'Star Butterfly kontra Siły Zła Wiki',
					'url' => 'http://pl.star-butterfly-kontra-sily-zla.wikia.com/wiki/Star_Butterfly_kontra_si%C5%82y_z%C5%82a_Wikia',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/vuh/images/8/8d/Star_Butterfly_kontra_si%C5%82y_z%C5%82a_Wiki_01_2018.png/revision/latest?cb=20180102224140&path-prefix=pl',
				],
				[
					'title' => 'Tokyo Ghoul Wiki',
					'url' => 'http://pl.tokyo-ghoul.wikia.com/wiki/Tokyo_Ghoul_Wiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/vuh/images/e/ed/TG_Spotlight.png/revision/latest?cb=20180202194503&path-prefix=pl',
				],
				[
					'title' => 'Assassin\'s Creed',
					'url' => 'http://assassinscreed.wikia.com/wiki/Assassin%27s_Creed_Wiki',
					'thumbnailUrl' => 'http://vignette1.wikia.nocookie.net/assassinscreed/images/2/25/Wikia-Visualization-Main%2Cassassinscreed.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102142202',
				],
			],
		'pt-br' =>
			[
			],
		'ru' =>
			[
				[
					'title' => 'The Elder Scrolls Wiki',
					'url' => 'http://bit.ly/teswiki',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/8/80/Elder_Scrolls_11_17.jpg/revision/latest?cb=20171029100935',
				],
				[
					'title' => 'Dark Souls вики',
					'url' => 'http://bit.ly/ru-spotlight-darksouls-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/b/b5/Dark_Souls_January_17.jpg/revision/latest?cb=20171221092333',
				],
				[
					'title' => 'Убежище',
					'url' => 'http://bit.ly/ru-spotlight-fallout-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/a/a6/Fallout_11_17.jpg/revision/latest?cb=20171029100935',
				],
				[
					'title' => 'Черепахопедия',
					'url' => 'http://bit.ly/ru-spotlight-turtle-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/ninga/images/f/fc/Rise_of_TMNT_Promo_1.jpg/revision/latest?cb=20180201103754&path-prefix=ru',
				],
				[
					'title' => 'Spore Wiki',
					'url' => 'http://bit.ly/ru-spotlight-spore-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spore/images/c/c2/%D0%91%D0%B0%D0%BD%D0%BD%D0%B5%D1%80-%D0%B4%D0%BB%D1%8F-SporeWiki-2-%D0%B8%D1%81%D0%BF%D1%80.png/revision/latest?cb=20180221114256&path-prefix=ru',
				],
				[
					'title' => 'S.T.A.L.K.E.R. Wiki',
					'url' => 'http://bit.ly/ru-spotlight-stalker-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/stalker/images/f/f9/XR_3DA_2014-05-16_23-15-37-09.png/revision/latest?cb=20140517123013&path-prefix=ru',
				],
				[
					'title' => 'Википисалия',
					'url' => 'http://bit.ly/ru-spotlight-pisalia-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/meownjik/images/0/00/%D0%91%D0%B0%D0%BD%D0%BD%D0%B5%D1%80_%D0%BD%D0%BE%D0%B2.png/revision/latest?cb=20180220132208&path-prefix=ru',
				],
				[
					'title' => 'Mount & Blade Wiki',
					'url' => 'http://bit.ly/ru-spotlight-mountblade-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/6/6f/Mount_and_Blade.jpg/revision/latest?cb=20180223092135',
				],
				[
					'title' => 'Far Cry 5',
					'url' => 'http://bit.ly/ru-spotlight-farcry-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/2/2c/Far_Cry_5.jpg/revision/latest?cb=20180322084609',
				],
				[
					'title' => 'Сумеречные охотники вики',
					'url' => 'http://bit.ly/ru-spotlight-shadowhunters-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/c/c7/Shadowhunters.jpg/revision/latest?cb=20180322084613',
				],
				[
					'title' => 'Kingdom Come: Deliverance Wiki',
					'url' => 'http://bit.ly/ru-spotlight-kingdomcome-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/0/02/Kingdom-Come-Deliverance.jpg/revision/latest?cb=20180322084610',
				],
				[
					'title' => 'Скуби Ду Вики',
					'url' => 'http://bit.ly/ru-spotlight-scoobydoo-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/2/24/Scoobydoo.jpg/revision/latest?cb=20180322084612',
				],
				[
					'title' => 'Люцифер Вики',
					'url' => 'http://bit.ly/ru-spotlight-lucifer-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/4/4a/Lucifer-season-3.jpg/revision/latest?cb=20180322084611',
				],
				[
					'title' => 'Сотня вики',
					'url' => 'http://bit.ly/ru-spotlight-the100-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/6/61/The_100_season_5.jpg/revision/latest?cb=20180322084614',
				],
				[
					'title' => 'Бойся ходячих мертвецов',
					'url' => 'http://bit.ly/ru-spotlight-fearwalkingdead-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/2/23/Fear-the-Walking-Dead-season-4.jpg/revision/latest?cb=20180322084610',
				],
				[
					'title' => 'Смешарики. Дежавю',
					'url' => 'http://bit.ly/ru-spotlight-smesh-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/3/33/Smeshariki-Dezha-vu.jpg/revision/latest?cb=20180322084614',
				],
				[
					'title' => 'Slime Rancher вики',
					'url' => 'http://bit.ly/ru-spotlight-slimerancher-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/0/09/Slime_rancher.jpg/revision/latest?cb=20180322084613',
				],
				[
					'title' => 'Винксопедия',
					'url' => 'http://bit.ly/ru-spotlight-winx-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/d/dc/Winx.jpg/revision/latest?cb=20180322084615',
				],
				[
					'title' => 'Overwatch вики',
					'url' => 'http://bit.ly/ru-spotlight-overwatch-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/0/07/Overwatch.jpg/revision/latest?cb=20180322084612',
				],
				[
					'title' => 'Tokyo Ghoul:re',
					'url' => 'http://bit.ly/ru-spotlight-tokyoghoul-april',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/spotlightsimagestemporary/images/4/49/Tokyo_Ghoul.jpg/revision/latest?cb=20180322084615',
				],
				[
					'title' => 'Assassin\'s Creed',
					'url' => 'http://assassinscreed.wikia.com/wiki/Assassin%27s_Creed_Wiki',
					'thumbnailUrl' => 'http://vignette1.wikia.nocookie.net/assassinscreed/images/2/25/Wikia-Visualization-Main%2Cassassinscreed.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102142202',
				],
			],
		'es' =>
			[
				[
					'title' => 'Walhalla Krieg',
					'url' => 'http://bit.ly/2HTexZv',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/eswikia/images/b/b5/Arte_de_la_wiki.jpg/revision/latest?cb=20180228225933',
				],
				[
					'title' => 'Shokugeki no Soma',
					'url' => 'http://bit.ly/2F51IK0',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/eswikia/images/3/30/Season_2_Promotion_Poster.png/revision/latest?cb=20180219004137',
				],
				[
					'title' => 'Kirbypedia',
					'url' => 'http://bit.ly/2t2M14t',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/eswikia/images/1/1f/Spotlight_%28Kirbypedia%29.jpg/revision/latest?cb=20180226141624',
				],
				[
					'title' => 'Wiki Re:Zero',
					'url' => 'http://bit.ly/2dVVtyn',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/eswikia/images/b/b4/Re_Zero_-_Spotlight.png/revision/latest?cb=20180210023101',
				],
				[
					'title' => 'One Piece Fanon',
					'url' => 'http://bit.ly/2u3gdsl',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/eswikia/images/5/50/One_Piece_Fanon_Spotlight.png/revision/latest?cb=20170420162143',
				],
				[
					'title' => 'Cazadores de Sombras Wiki',
					'url' => 'http://bit.ly/2mpODVP',
					'thumbnailUrl' => 'https://vignette.wikia.nocookie.net/eswikia/images/0/09/Wiki_Cazadores_de_Sombras.png/revision/latest?cb=20170113234553',
				],
				[
					'title' => 'Assassin\'s Creed',
					'url' => 'http://assassinscreed.wikia.com/wiki/Assassin%27s_Creed_Wiki',
					'thumbnailUrl' => 'http://vignette1.wikia.nocookie.net/assassinscreed/images/2/25/Wikia-Visualization-Main%2Cassassinscreed.png/revision/latest/thumbnail-down/width/660/height/660?cb=20161102142202',
				],
			]
	];

	const STAGING_RECOMMENDATIONS = [
		[
			'thumbnailUrl' => 'https://vignette.wikia-staging.nocookie.net/muppet/images/4/4b/Image001.png/revision/latest?cb=20170911141514',
			'title' => 'Selenium',
			'url' => 'http://selenium.wikia-staging.com',
		],
		[
			'thumbnailUrl' => 'https://vignette.wikia-staging.nocookie.net/selenium/images/e/e2/Image009.jpg/revision/latest?cb=20170911141722',
			'title' => 'Halloween',
			'url' => 'http://halloween.wikia-staging.com',
		],
		[
			'thumbnailUrl' => 'https://vignette.wikia-staging.nocookie.net/selenium/images/2/2e/WallPaperHD_138.jpg/revision/latest?cb=20170911141722',
			'title' => 'Sktest123',
			'url' => 'http://sktest123.wikia-staging.com',
		]
	];

	const DEV_RECOMMENDATIONS = [
		'us' => [
			[
				'thumbnailUrl' => 'https://vignette.wikia-dev.us/gameofthrones/images/3/3a/WhiteWalker_%28Hardhome%29.jpg/revision/latest?cb=20150601151110',
				'title' => 'Game of Thrones',
				'url' => 'http://gameofthrones.wikia.com/wiki/Game_of_Thrones_Wiki',
			],
			[
				'thumbnailUrl' => 'https://vignette.wikia-dev.us/deathnote/images/1/1d/Light_Holding_Death_Note.png/revision/latest?cb=20120525180447',
				'title' => 'Death Note',
				'url' => 'http://deathnote.wikia.com/wiki/Main_Page',
			],
			[
				'thumbnailUrl' => 'https://vignette.wikia-dev.us/midnight-texas/images/b/b0/Blinded_by_the_Light_106-01-Rev-Sheehan-Davy-Deputy.jpg/revision/latest?cb=20170820185915',
				'title' => 'Midnight Texas',
				'url' => 'http://midnight-texas.wikia.com/wiki/Midnight,_Texas_Wikia',
			]
		],
		'pl' => [
			[
				'thumbnailUrl' => 'https://vignette.wikia-dev.pl/gameofthrones/images/3/3a/WhiteWalker_%28Hardhome%29.jpg/revision/latest?cb=20150601151110',
				'title' => 'Game of Thrones',
				'url' => 'http://gameofthrones.wikia.com/wiki/Game_of_Thrones_Wiki',
			],
			[
				'thumbnailUrl' => 'https://vignette.wikia-dev.pl/deathnote/images/1/1d/Light_Holding_Death_Note.png/revision/latest?cb=20120525180447',
				'title' => 'Death Note',
				'url' => 'http://deathnote.wikia.com/wiki/Main_Page',
			],
			[
				'thumbnailUrl' => 'https://vignette.wikia-dev.pl/midnight-texas/images/b/b0/Blinded_by_the_Light_106-01-Rev-Sheehan-Davy-Deputy.jpg/revision/latest?cb=20170820185915',
				'title' => 'Midnight Texas',
				'url' => 'http://midnight-texas.wikia.com/wiki/Midnight,_Texas_Wikia',
			]
		]
	];

	public static function getRecommendations( $contentLanguage ) {
		global $wgWikiaDatacenter, $wgWikiaEnvironment;

		if ( $wgWikiaEnvironment === WIKIA_ENV_STAGING ) {
			$recommendations = self::STAGING_RECOMMENDATIONS;
		} elseif ( $wgWikiaEnvironment === WIKIA_ENV_DEV ) {
			if ( $wgWikiaDatacenter === WIKIA_DC_POZ ) {
				$recommendations = self::DEV_RECOMMENDATIONS['pl'];
			} else {
				$recommendations = self::DEV_RECOMMENDATIONS['us'];
			}
		} else {
			$recommendations = self::RECOMMENDATIONS['en'];
			$fallbackedContentLanguage = self::fallbackToSupportedLanguages( $contentLanguage );

			if ( array_key_exists( $fallbackedContentLanguage, self::RECOMMENDATIONS ) ) {
				$recommendations = self::RECOMMENDATIONS[$fallbackedContentLanguage];
			}
			shuffle( $recommendations );
		}

		$recommendations = array_slice( $recommendations, 0, self::WIKI_RECOMMENDATIONS_LIMIT );

		$index = 1;
		foreach ( $recommendations as &$recommendation ) {
			$recommendation['thumbnailUrl'] = self::getThumbnailUrl( $recommendation['thumbnailUrl'] );
			$recommendation['index'] = $index;
			$index++;
		}

		return $recommendations;
	}

	private static function fallbackToSupportedLanguages( $language ) {
		switch ( $language ) {
			case 'pt':
				return 'pt-br';
			case 'zh-tw':
			case 'zh-hk':
				return 'zh';
			case 'be':
			case 'kk':
			case 'uk':
				return 'ru';
			default:
				return $language;
		}
	}

	private static function getThumbnailUrl( $url ) {
		try {
			return VignetteRequest::fromUrl( $url )->zoomCrop()->width( self::THUMBNAIL_WIDTH )->height(
				floor( self::THUMBNAIL_WIDTH / self::THUMBNAIL_RATIO )
			)->url();
		} catch ( Exception $exception ) {
			\Wikia\Logger\WikiaLogger::instance()->warning(
				"Invalid thumbnail url provided for explore-wikis module inside mixed content footer",
				[
					'thumbnailUrl' => $url,
					'message' => $exception->getMessage(),
				]
			);

			return '';
		}
	}
}
