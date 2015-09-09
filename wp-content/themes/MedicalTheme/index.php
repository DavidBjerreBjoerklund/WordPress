<?php get_header(); ?>
			<p id="text1">
			<span id="textspan1">Forside</span> &#x2f; Nyheder
			</p>
		</header>	
		<div id="container" class="clearfix">
			<section class="banner" class="clearfix">
				<img id="image1" src="<?php bloginfo('stylesheet_directory');?>/img/Banner.png" class="image" />
			</section>
			<main id="Content" class="clearfix">
				<h1>
				Nyheder
				</h1>

<!-- Post begins -->
				<article id="" class="newsBlock clearfix">
					<section class="header">
						<h2>Nye kort</h2>
						<span class="pubDate">Feb. 2015</span>
					</section>
					<section class="newsBlock-content">
						<p>Grundet klager har vi besluttet at f&aring; lavet stregkodekort i en bedre kvalitet, dvs. at vi bruger papir der er dobbelt s&aring; tykt - det er jo ikke gratis s&aring; disse kort vil koster 15 &oslash;re mere pr. kort - n&aring;r I har hentet den sidste nye version af programmet vil det tydeligt fremg&aring; hvilken korttype I kan v&aelig;lge.</p>
						<p>&quot;Gamle&quot; kort - b&aring;de streg og endel&oslash;se - vil ikke &aelig;ndre prisen.</p>
					</section>



					<section class="newsBlock-img">
						<img src="<?php bloginfo('stylesheet_directory');?>/img/taevekort.jpg" alt="">
					</section>
				</article>

				<article id="" class="newsBlock clearfix">
					<section class="header">
						<h2>WinMink 12.7</h2>
						<span class="pubDate">Feb. 2015</span>
					</section>
					<section class="newsBlock-content">
						<p>Programmet er klar til opdatering.</p>
						<p><span id="textspan6">Kodeord&#x3a;&nbsp;</span>14126211</p>
						<p><a class="btn-download" type="button" href="#">Hent opdatering</a> <span class="highlight-important">Vigtigt&#x3a; Minkprogrammet m&aring; IKKE k&oslash;re under installation.</span></p>
					</section>
					<section class="newsBlock-img"><img src="<?php bloginfo('stylesheet_directory');?>/img/hanstat.jpg" alt=""></section>
				</article>

				<article id="" class="newsBlock clearfix">
					<section class="header">
						<h2>Mors&oslash; Multiholder™</h2>
						<span class="pubDate">Feb. 2015</span>
					</section>
					<section class="newsBlock-content">
						<p> Slut med &oslash;mme skuldre og tr&aelig;tte arme, vi har flyttet kortene ned i brysth&oslash;jde, s&aring; nu foreg&aring;r scanning af kort i en behagelig arbejdsstilling.</p>
						<p>Multiholderen kan selvf&oslash;lgelig ogs&aring; bruges p&aring; f&aelig;lder under sortering, eller p&aring; b&oslash;jler inden skindene skal til auktion eller p&aring; udstilling.</p>
						<p>Ring for varepr&oslash;ver 97721655.</p>					
					</section>

					<section class="newsBlock-img">
						<img src="<?php bloginfo('stylesheet_directory');?>/img/5.jpg" alt="">
					</section>
				</main>
<!-- Posts ends -->

			</div>
		</main>
		<aside id="Sidepanel" class="clearfix">
			<div id="cart" class="widget clearfix">
				<h2 class="header">
				Indk&oslash;bskurv
				</h2>
				<table id="box3" class="clearfix">
					<tr>
						<td>1 x</td>
						<td>1k Minkkort</td>
					</tr>
					<tr>
						<td>1 x</td>
						<td>WinMink License</td>
					</tr>
					<tr>
						<td>60 x</td>
						<td>Multiholder</td>
					</tr>
					<tr>
						<td>Total&#x3a;&nbsp;</td>
						<td>4000 DKK</td>
					</tr>
				</table>
				<input id="btn-placeOrder" class="btn-widget" type="button" value="bestil"></input>
			</div>

			<div id="trackOrder" class="widget clearfix">
				<h2 class="header">
				Spor bestilling
				</h2>
				<label id="formgroup">
					<p>
					Indtast bestilllings nr.
					</p>
					<input id="inOrderNum" type="text" value=""></input>
				</label>
				<input id="btn-searchOrder" class="btn-widget" type="button" value="s&oslash;g"></input>
			</div>
		</aside>
	<?php get_footer(); ?>