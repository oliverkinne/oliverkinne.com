<?php include '/srv/www/htdocs/includes/header.php' ?>
	<article>
		<section>
			<h3>My Projects</h3>

			<aside>
				<h4>LSi Online Website Rebuild</h4>
				<p class="dates">June 2012 to April 2013</p>
				<p class="team">Team Members: <a href="http://www.linkedin.com/in/oliverkinne">Oliver Kinne</a>, <a href="http://uk.linkedin.com/pub/alex-dato/60/267/835/">Alex Dato</a>, <a href="http://uk.linkedin.com/pub/lee-baldock/1/b94/5a0/">Lee Baldock</a></p>
				<p>The LSi Online website was rebuilt to make it device agnostic, allowing it to display equally well on desktop and laptop computers, as well as tablets and smartphones. The site was also built to load quickly, using &quot;lazyload&quot; for images, CSS sprites, late loading of JavaScript, caching of searches and other database driven information on the server and pre-building of database driven information where possible.</p>
				<p>The site also employs SEO techniques, uses metadata for page classification and content tagging (OpenGraph) and is built with visually impaired users in mind as well.</p>
				<p>Alex Dato was responsible for the design of the site, while Lee Baldock oversaw the project to make sure it met the Media team's requirements, and he tested the site as well. I built the site in ASP (JScript) using Dreamweaver.</p>
				<p><a href="https://github.com/plasa/LSi_Online_2012"><img class="middle" src="/img/githubi.png" alt="GitHub"></a> The site's code is maintained on GitHub for versioning and change tracking.</p>
			</aside>

			<aside class="side">
<?php
$w = stream_get_wrappers();
//echo 'openssl: ',  extension_loaded  ('openssl') ? 'yes':'no', "\n";
//echo 'http wrapper: ', in_array('http', $w) ? 'yes':'no', "\n";
//echo 'https wrapper: ', in_array('https', $w) ? 'yes':'no', "\n";
//echo 'wrappers: ', var_dump($w);

$events = file_get_contents('https://api.github.com/users/oliverkinne/events');
?>
				<pre><?php echo $events ?></pre>
			</aside>

			<aside>
				<h4>Online Manuals System</h4>
				<p class="dates">January 2012 to Present</p>
				<p class="team">Team Members: <a href="http://www.linkedin.com/in/oliverkinne">Oliver Kinne</a></p>
				<p>I developed an online manuals system for exhibitions and events. The system allows exhibitors to submit their orders to exhibition contractors, as well as complete regulatory and other required documentation to help the event management process.</p>
				<p>The system is highly customizable to allow seamless integration with an exhibition's branding and design. It can cope with virtually any type, quantity and complexity of forms, including multi-step forms, required fields, fields that become required based on other selections, enforcement of field types (date, number, etc.), secure fields (credit card details, etc.) and file uploads (attachments, etc.).</p>
				<p>The system can email form submission confirmations to the exhibitor, as well as to the contractor and allows the exhibitor and contractor to keep track of which forms have been submitted, which ones are outstanding and when they need to be completed by.</p>
				<p>Contractors can download the submitted information either as a CSV or XML file, or view the information on screen or print it out. The system also keeps track of what information a contractor has already downloaded, to allow only new submissions to be downloaded, as well as the full set, if required.</p>
				<p><a href="https://github.com/plasa/PLASA_Manuals"><img class="middle" src="/img/githubi.png" alt="GitHub"></a> The site's code is maintained on GitHub for versioning and change tracking.</p>

				<h4>PLASA Lib - JQuery and JScript</h4>
				<p class="dates">January 2011 to Present</p>
				<p class="team">Team Members: <a href="http://www.linkedin.com/in/oliverkinne">Oliver Kinne</a></p>
				<p>I built a library of JScript and JQuery functionality for rapid website development. The library is not based on existing code, but was programmed from the ground up. It covers string functions, date and number formatting functions, character conversion functions for UTF-8 and other HTML character sets, as well as server- and client-side form validation routines.</p>
				<p><a href="https://github.com/plasa/PLASA_Lib"><img class="middle" src="/img/githubi.png" alt="GitHub"></a> The library's code is maintained on GitHub for versioning and change tracking.</p>

				<h4>SagePay Credit Card Payment Processing Module</h4>
				<p class="dates">January 2012 to Present</p>
				<p class="team">Team Members: <a href="http://www.linkedin.com/in/oliverkinne">Oliver Kinne</a></p>
				<p>I developed a payment processing module, using the direct integration method of SagePay, to allow easy credit card processing on all of PLASA's websites.</p>
				<p><a href="https://github.com/plasa/PLASA_Lib/blob/master/sagepay.asp"><img class="middle" src="/img/githubi.png" alt="GitHub"></a> The module's code is maintained on GitHub for versioning and change tracking.</p>

				<h4>Searchable Book Database OTree</h4>
				<p class="dates">December 1998 to Present</p>
				<p class="team">Team Members: <a href="http://www.linkedin.com/in/oliverkinne">Oliver Kinne</a></p>
				<p>Development of bespoke, searchable books database on CD, which contained full information about tens of thousands of books, including title, author, description, ISBN, binding, pages, illustrations, etc. as well as a scanned cover image. I developed a new database system, called OTree, which was based on BTree, to create a highly compressed database of the books that would fit onto CD and would allow very fast searches and information retrieval.</p>
			</aside>

			<div class="clear">&nbsp;</div>
		</section>
	</article>

<?php include '/srv/www/htdocs/includes/footer.php' ?>