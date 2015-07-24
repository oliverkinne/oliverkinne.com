<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php' ?>
	<article>
		<section>
			<div class="addthis_sharing_toolbox"></div>
			<h1>My Projects</h1>

			<aside>
				<p>I have over two decades' experience in IT, covering DevOps, infrastructure management, IT support, software and web development, email marketing, CMS, CRM, cloud services, databases, servers, networking, security and many related technologies.</p>
				<p>Below is a selection of projects that illustrate my experience.</p>
			</aside>

			<aside>
				<h2>Custom Puppet modules</h2>
				<p class="dates"><?php print_date_range('1 January 2015', null) ?></p>
				<p class="team"></p>
				<p>I look after about a dozen virtual servers or so, mostly Linux machines, but also some Windows servers. Currently we configure each server manually, but using Puppet will make it much easier.</p>
				<p>I know it would have been possible to use existing, off-the-shelf modules to enforce a consistent configuration of our server infrastructure, but I wanted to have modules that were written to ensure our servers are configured in a secure way and follow the company's policy and all relevant good practice, without having to pass a large number of parameters for each node.</p>
				<p>So writing our own set of Puppet modules was the way forward, allowing to &quot;hard code&quot; the policies into the modules, making it hard to by-pass them, while offering enough parameters to allow the right level of customization needed for different types of servers.</p>
				<p>I also added SELinux policies for Apache to write its logs to a directory other than /var/log, rather than having to disable SELinux completely as many often do instead of trying to amend the policies.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>Puppet, DevOps, Apache, IIS, Github, Cloud Computing, MySQL</p>

				<h3 class="github">Github Updates</h3>
				<p>The site's code is maintained as a private GitHub repository for versioning and change tracking.</p>
			</aside>

			<aside>
				<h2>Zenoss to Slack WebHook</h2>
				<p class="dates"><?php print_date_range('1 November 2014', '1 November 2014') ?></p>
				<p class="team"></p>
				<p>I had started using Slack to have one central feed for all alerts and notifications coming from a number of monitoring tools. Slack supports many solutions out of the box and offers the option to add your own via WebHooks.</p>
				<p>The Slack channel was already receiving notifications from New Relic (native integration) and StatusCake (via WebHook), but I wanted to add alerts from Zenoss, which wasn't possible natively.</p>
				<p>So I wrote a bash shell script that was called from Zenoss to call the web hook and post it a JSON message that contained the notification information from Zenoss.</p>
				<p>It took a few hours to develop and even though it's not a perfect solution, it was easy and free to implement.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>Zenoss, Slack, WebHooks, DevOps</p>

				<h3 class="github">Github Updates</h3>
				<p>The site's code is maintained as a private GitHub repository for versioning and change tracking.</p>
			</aside>

			<aside>
				<h2>Webistrano/Capistrano Xen VM Build</h2>
				<p class="dates"><?php print_date_range('1 August 2014', '1 August 2014') ?></p>
				<p class="team"></p>
				<p>The development team needed to replace their existing Webistrano server, so I was tasked with building a guest VM on one of the development team's Xen servers.</p>
				<p>I started with a standard CentOS installation, hardened the configuration and set up IP forwarding on the VM host, so that the guest would be directly accessible from the internal network.</p>
				<p>I then started installing the applications, which was no problem, except for Webistrano. However, after some thorough &quot;head scratching&quot; (aka Google searches) I was able to get it all running.</p>
				<p>I finished by writing a few scripts to ensure everything started up again, if the server was ever rebooted.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>Webistrano, Capistrano, Xen, Virtualization, CentOS, Networking</p>
			</aside>

			<aside>
				<h2>Zenoss Virtual Linux Server Monitoring</h2>
				<p class="dates"><?php print_date_range('1 July 2014', '1 July 2014') ?></p>
				<p class="team"></p>
				<p>We decided to use Zenoss to monitor our server infrastructure, so I was tasked with configuring the solution for our virtual Linux servers.</p>
				<p>Zenoss had already been set up and configured for our Windows server infrastructure, as well as some of our network devices, but as the new DevOps engineer it came to me to configure the solution to monitor our virtual Linux servers.</p>
				<p>Initially the project was started as a "nice-to-have", but the information we received from Zenoss quickly highlighted a few server inefficiencies, which we were able to investigate further and fix, thus making our servers work more reliably.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>Virtualization, Zenoss, CentOS, System Administration, Servers</p>
			</aside>

			<aside>
				<h2>CRM Migration</h2>
				<p class="dates"><?php print_date_range('1 February 2012', '31 January 2014') ?></p>
				<p class="team"></p>
				<p>The project started in February 2012 when we started to invite CRM vendors to demo their products. We needed a solution that would be accessible equally from all of our three offices, Eastbourne, London and New York, and would be able to handle as many of our business processes as possible.</p>
				<p>As with most projects of this type, not one provider could meet our brief completely, so we had to compromise and choose the provider that was offering the best balance between costs and functionality.</p>
				<p>The solution we chose is a software-as-a-service product that is hosted in the USA, allowing easy access from anywhere in the world.</p>
				<p>After a few months of scoping and planning, involving key members of staff from each department, we began an initial data conversion test run in August 2012, followed by a second test run soon after.</p>
				<p>The test conversions proved to be essential. They allowed us to get used to the conversion file layouts and allowed the whole team to identify potential issues with mapping our business processes onto the new software.</p>
				<p>The final conversion went fairly smoothly, and the vendor was very good at helping us resolve all issues. We eventually were able to copy over half a million records from about eight data sources into the new system.</p>
				<p>It was a long process, but it was important to take our time and do the proper planning, as well as involve our colleagues, to make the project successful.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>SQL Server, CRM, Cloud Computing, Project Management</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="http://community.spiceworks.com/people/oliverkinne/projects/crm-migration">Spiceworks Project Page</a></li>
				</ul>
			</aside>

			<aside>
				<h2>i-Power Website</h2>
				<p class="dates"><?php print_date_range('1 November 2013', '31 December 2013') ?></p>
				<p class="team"></p>
				<p>i-Power (UK) Limited designs, builds and installs fully integrated audio, power and access control systems operating on a pure IP platform, which means existing networks and infrastructure can be reused and the systems can be controlled via the internet.</p>
				<p>I based the website design on an early company brochure, using its colour scheme and graphical elements to provide two intial design options, which I made in Illustrator and Photoshop and sent to the client as PDFs.</p>
				<p>The client chose elements from the initial designs which I combined into one, final design, which was further refined before being signed off.</p>
				<p>I converted the design into a website using Dreamweaver and created an AWS virtual server running Windows Server 2008 with IIS for testing.</p>
				<p>Throughout the project there was regular contact with the client, and even though the schedule was fairly tight, the site launched on time, just before the Christmas break and quickly attracted customer interest.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>JavaScript, JQuery, SEO, HTML, CSS, ASP, Dreamweaver, Web Development, Illustrator Photoshop, Amazon Web Services, Virtualization, Cloud Computing, Project Management</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="http://www.pentonuk.co.uk/ipower/">Website</a></li>
					<li><a href="http://community.spiceworks.com/people/oliverkinne/projects/i-power-website-build">Spiceworks Project Page</a></li>
				</ul>
			</aside>

			<aside>
				<h2>Clans of Macaria</h2>
				<p class="dates"><?php print_date_range('1 October 2013', null) ?></p>
				<p class="team"></p>
				<p>Clans of Macaria is an on-line, turn-based game for multiple players. The game system uses elements from many popular board games, but as a whole is completely original.</p>
				<p>It is still in development and is programmed in PHP, using a MySQL database to store the game states and related data. The site uses JQuery, CSS and HTML.</p>
				<p>It is an illustration of my development knowledge and experience and shows that I am self-motivated and can learn new skills quickly and independantly.</p>
				<p>The website is hosted on a Linux server running Apache, MySQL and PHP on Amazon's Web Services, and it uses performance improving and search engine optimisation techniques, as well as CDN.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>JavaScript, JQuery, SEO, HTML, CSS, PHP, CDN, MySQL, YaST, Dreamweaver, Web Development, Github, Amazon Web Services, Virtualization, Cloud Computing, Project Management</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="http://www.clansofmacaria.com/">Website</a></li>
					<li><a href="https://github.com/oliverkinne/Clans-of-Macaria">GitHub Repository</a></li>
					<li><a href="https://github.com/oliverkinne/Clans-of-Macaria/wiki/Entity-Relationship-Diagramme">Entity Relationship Diagramme</a></li>
				</ul>

				<h3 class="github">Github Updates</h3>
<?php
GitHubEvents('/repos/oliverkinne/clans-of-macaria/events');
?>
			</aside>

			<aside>
				<h2>My Website</h2>
				<p class="dates"><?php print_date_range('1 September 2013', null) ?></p>
				<p class="team"></p>
				<p>The oliverkine.com website was built in PHP, with SEO and pageload performance in mind. CloudFlare CDN was applied to make the site even more efficient and load even more quickly.</p>
				<p>CSS is used on the homepage to create rollover effects, as well as for styling.</p>
				<p>The opening of external links in a new window/tab is achieved via JQuery.</p>
				<p>The website is hosted on a Linux server running Apache, MySQL and PHP on Amazon's Web Services, and it uses performance improving and search engine optimisation techniques, as well as CDN.</p>
				<p>It is an illustration of the web development skills and experience I have and shows that I can work on a project independantly, am self-motivated and can quickly learn new skills on the job.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>JavaScript, JQuery, SEO, HTML, CSS, PHP, CDN, YaST, Dreamweaver, Web Development, Github, Amazon Web Services, Virtualization, Cloud Computing, Project Management, System Administration, Firewalls</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="http://www.oliverkinne.com/">Website</a></li>
					<li><a href="https://github.com/oliverkinne/oliverkinne.com">GitHub Repository</a></li>
				</ul>

				<h3 class="github">Github Updates</h3>
<?php
GitHubEvents('/repos/oliverkinne/oliverkinne.com/events');
?>
			</aside>

			<aside>
				<h2>Confluence by Atlassian Installation</h2>
				<p class="dates"><?php print_date_range('1 September 2013', '1 September 2013') ?></p>
				<p class="team"></p>
				<p>We have been looking for a Wiki for our organisation for a while, when we were offered a free licence of Confluence by Atlassian, which we would otherwise not have considered as an option.</p>
				<p>After looking at a number of different options for a Wiki, we weren't really satisfied with any of them, until we were offered a free licence of Confluence as part of another project with an external supplier.aving used Confluence on that project, many of our staff were familiar with it and liked it, so it made it very easy to get buy-in - and given that the software was offered free of charge, there was also no hurdle at that end.</p>
				<p>The software installation itself was very straightforward. We set it all up on our virtual web server, to allow access to the Wiki from anywhere in the world, despite the potential security implications of hosting a system such as Confluence.</p>
				<p>However, Atlassian are very good at responding to new security threats, so updates are regularly available and their support is also very good.</p>
				<p>We are very pleased with the solution, even though we wouldn't have considered it if it hadn't been offered to us free of charge.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>CMS, Cloud Computing</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="http://community.spiceworks.com/people/oliverkinne/projects/confluence-by-atlassian-installation">Spiceworks Project Page</a></li>
				</ul>
			</aside>

			<aside>
				<h2>PCI-DSS Compliance</h2>
				<p class="dates"><?php print_date_range('1 January 2013', null) ?></p>
				<p class="team"></p>
				<p>Many years ago, our company used to take card payments over the phone, by fax, even email, as well as on our websites. So when the PCI-DSS standard was introduced, we had to comply.</p>
				<p>PCI-DSS compliance is an ongoing process, so the project will never be finished. We're currently compliant to PCI-DSS v2, but with v3 on the horizon, it won't be long until we have to adjust to the new requirements for that.</p>
				<p>It all started when PCI-DSS was introduced as the new, required standard for card payments - however these were taken or processed. We used to have PDQ machines and we would get payment details given over the phone, faxed to us, emailed, or stored on a secure server when taken via our websites.</p>
				<p>The project was mostly driven by cost reduction. Our finance director had been contacted by our bank about an online payment system, SagePay, that would replace our PDQs and would reduce our ongoing costs - both because we no longer had to rent PDQs, but also because transaction fees would go down.</p>
				<p>As part of implementing the card payment processor SagePay, we had to show our compliance with PCI-DSS v1 at the time, which involved no longer accepting payment details via fax or email for security, and also dissuading people from giving us card details over the form - and offering everyone online payment forms instead.</p>
				<p>All websites had to be re-programmed accordingly and I spent a good few months learning how to integrate SagePay into our systems, while at the same time complying with PCI-DSS.</p>
				<p>Then it took a few more months actually doing the work of updating our websites with the new SagePay integration, which, after a lot of testing and fixing, lead to a little ASP function library that made SagePay integration much easier.</p>
				<p>We also purchased SecurityMetric's penetration testing services, to prove how robust our systems were. The service helped us identify issues that didn't affect our PCI-DSS compliance, which meant we reduced the vulnerability of our servers, including web servers, to attacks in general.</p>
				<p>Since PCI-DSS v1 compliance, we have moved to PCI-DSS v2 compliance and are currently going through another SagePay integration change, whereby we update our websites so they no longer acquire payment details to be passed onto SagePay, but instead use IFRAMEs, so that SagePay directly collects and processes payment information, reducing the compliance headache to our company even further.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>PCI DSS, Payment Processing</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="http://community.spiceworks.com/people/oliverkinne/projects/pci-dss-compliance">Spiceworks Project Page</a></li>
				</ul>
			</aside>

			<aside>
				<h2>On-Premise Exchange to Office 365 Migration</h2>
				<p class="dates"><?php print_date_range('1 August 2012', '1 September 2012') ?></p>
				<p class="team"></p>
				<p>We had recently merged with another organisation in the United States and now had to cater for a total of three offices in two time zones, Eastbourne and London in the UK and New York in the US, each of which was running its own Exchange server and was linked to the Eastbourne HQ via sub domains.</p>
				<p>We were looking for a solution that would offer us 24/7/365 support to all three offices, high reliability, built-in backup and the option of archiving, at a relatively low running cost. We narrowed our search to Google and Microsoft as the main contenders, after ruling out hosted Exchange solutions by other providers.</p>
				<p>We chose Microsoft, because the majority of our setup was Microsoft based. It promised a more seamless integration and less potential for incompatibility issues. It also offered Outlook Web Access and integration with smartphone for when staff travel.</p>
				<p>We had to migrate over 50 mailboxes, migrating one office at a time. I migrated the mailboxes in the Eastbourne and London offices, but had the help of our New York support team to migrate the US based mailboxes.</p>
				<p>Once everyone had been migrated, I manually re-created all distribution lists and external contacts. There was a tool to automate the process via Active Directory, but I preferred to do it manually, because it was an opportunity to get rid of outdated lists and contacts and clean everything up.</p>
				<p>We have since migrated from BPOS to Office 365, which was a completely painless and seamless process, which didn't require any involvement on our part, and Microsoft kept us updated with regular emails.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>Cloud Computing, Office 365, Microsoft Exchange, Team Leadership, Project Management</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="http://community.spiceworks.com/people/oliverkinne/projects/on-premise-exchange-to-office-365-migration">Spiceworks Project Page</a></li>
				</ul>
			</aside>

			<aside>
				<h2>LSi Online Website Rebuild</h2>
				<p class="dates"><?php print_date_range('1 June 2012', '30 April 2013') ?></p>
				<p class="team">Team Members: <a href="http://uk.linkedin.com/pub/alex-dato/60/267/835">Alex Dato</a>, <a href="http://uk.linkedin.com/pub/lee-baldock/1/b94/5a0">Lee Baldock</a></p>
				<p>The LSi Online website was rebuilt to make it device agnostic, allowing it to display equally well on desktop and laptop computers, as well as tablets and smartphones. The site was also built to load quickly, using &quot;lazyload&quot; for images, CSS sprites, late loading of JavaScript, caching of searches and other database driven information on the server and pre-building of database driven information where possible.</p>
				<p>The site also employs SEO techniques, uses metadata for page classification and content tagging (OpenGraph) and is built with visually impaired users in mind as well.</p>
				<p>Alex Dato was responsible for the design of the site, while Lee Baldock oversaw the project to make sure it met the Media team's requirements, and he tested the site as well. I built the site in ASP (JScript) using Dreamweaver.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>JScript, JavaScript, JQuery, SEO, HTML, CSS, ASP, Databases, Dreamweaver, Web Development, Email Marketing, Github, Photoshop, Flash, Virtualization, IIS, Team Leadership, Project Management</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="http://www.lsionline.co.uk/">Website</a></li>
					<li><a href="http://community.spiceworks.com/people/oliverkinne/projects/website-rebuild">Spiceworks Project Page</a></li>
					<li><a href="https://github.com/plasa/LSi_Online_2012">GitHub Repository</a></li>
				</ul>

				<h3 class="github">Github Updates</h3>
				<p>The site's code is maintained as a private GitHub repository for versioning and change tracking.</p>
			</aside>

			<aside>
				<h2>Online Manuals System</h2>
				<p class="dates"><?php print_date_range('1 January 2012', null) ?></p>
				<p class="team"></p>
				<p>I developed an online manuals system for exhibitions and events. The system allows exhibitors to submit their orders to exhibition contractors, as well as complete regulatory and other required documentation to help the event management process.</p>
				<p>The system is highly customizable to allow seamless integration with an exhibition's branding and design. It can cope with virtually any type, quantity and complexity of forms, including multi-step forms, required fields, fields that become required based on other selections, enforcement of field types (date, number, etc.), secure fields (credit card details, etc.) and file uploads (attachments, etc.).</p>
				<p>The system can email form submission confirmations to the exhibitor, as well as to the contractor and allows the exhibitor and contractor to keep track of which forms have been submitted, which ones are outstanding and when they need to be completed by.</p>
				<p>Contractors can download the submitted information either as a CSV or XML file, or view the information on screen or print it out. The system also keeps track of what information a contractor has already downloaded, to allow only new submissions to be downloaded, as well as the full set, if required.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>JScript, JavaScript, JQuery, HTML, CSS, ASP, Databases, Dreamweaver, Web Development, Github, Virtualization, IIS, IT Strategy, Cloud Computing, Project Management, 
Budgets</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="https://www.plasamanuals.com/plasa2013/">Website</a></li>
					<li><a href="https://github.com/plasa/PLASA_Manuals">GitHub Repository</a></li>
				</ul>

				<h3 class="github">Github Updates</h3>
				<p>The system's code is maintained as a private GitHub repository for versioning and change tracking.</p>
			</aside>

			<aside>
				<h2>SagePay Credit Card Payment Processing Module</h2>
				<p class="dates"><?php print_date_range('1 January 2012', null) ?></p>
				<p class="team"></p>
				<p>I developed a payment processing module, using the direct integration method of SagePay, to allow easy credit card processing on all of PLASA's websites.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>JScript, Github, PCI DSS, Payment Processing</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="https://github.com/plasa/PLASA_Lib/blob/master/sagepay.asp">GitHub Repository</a></li>
				</ul>

				<h3 class="github">Github</h3>
				<p>The module's code is maintained as a private GitHub repository for versioning and change tracking.</p>
			</aside>

			<aside>
				<h2>PLASA Lib - JQuery and JScript</h2>
				<p class="dates"><?php print_date_range('1 January 2011', null) ?></p>
				<p class="team"></p>
				<p>I built a library of JScript and JQuery functionality for rapid website development. The library is not based on existing code, but was programmed from the ground up. It covers string functions, date and number formatting functions, character conversion functions for UTF-8 and other HTML character sets, as well as server- and client-side form validation routines.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>JScript, JavaScript, JQuery, Web Development, Github</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="https://github.com/plasa/PLASA_Lib">GitHub Repository</a></li>
				</ul>

				<h3 class="github">Github Updates</h3>
				<p>The library's code is maintained as a private GitHub repository for versioning and change tracking.</p>
			</aside>

			<aside>
				<h2>Virtualization of Web Server</h2>
				<p class="dates"><?php print_date_range('1 May 2009', '1 June 2009') ?></p>
				<p class="team"></p>
				<p>We used to own a HP ProLiant DL380 G4 server co-located with FastNet in Brighton, but as it started to became less reliable and as it was well beyond its manufacturer's warranty, we had to choose between replacing it with a new server, at a cost of around &pound;15k or switching to a virtual machine at a cost of around &pound;6.5k a year. We chose the virtual option, because even though it was more expensive over the average lifetime of a server of three years, we gained the benefits of a virtual solution, in particular not having to maintain the hardware, gaining built-in failover due to the setup's replicated nature, and being able to add more RAM, hard disc space or CPUs, or indeed reduce the spec, as and when needed.</p>
				<p>FastNet provided the new virtual machine free of charge for a month to allows us to keep the current and new servers running in parallel, reducing the amount of downtime of the websites to virtually nothing.</p>
				<p>FastNet set up the virtual server with all the basic settings and with Windows Server, IIS and SQL Server installed and set to their default configuration. I then changed the settings to our requirements, configured VPN and RDP access to the server for remote administration and adjusted the firewall settings to allow access from our Eastbourne office IP range to the new server.</p>
				<p>I also set up regular SQL Server backup and database maintenance jobs and installed and configured MozyPro to backup our database backup and website files off-site, giving us the added benefit of versioning as well.I also did the actual migration, which involved not only moving half a dozen websites to its new home, as well as the same number of SQL Server databases, but also testing everything and dealing with differences between IIS and SQL Server versions.</p>
				<p></p>
				<p>Once everything had been tested thoroughly, I updated all DNS records to point to the virtual machine and monitored the changeover to ensure everything was going live without a problem.</p>
				<p>After allowing 24 hours for the DNS changes to propagate through the internet, I copied some of the database information from the old server to the new virtual machine so that no information was lost.</p>
				<p>It was a successful project and FastNet's help was really appreciated.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>Virtualization, Cloud Computing, SQL Server, Networking, Servers, Firewalls, Network Administration</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="http://community.spiceworks.com/people/oliverkinne/projects/virtualization-of-web-server">Spiceworks Project Page</a></li>
				</ul>
			</aside>

			<aside>
				<h2>Office Relocation</h2>
				<p class="dates"><?php print_date_range('15 December 2006', '14 January 2007') ?></p>
				<p class="team"></p>
				<p>At the end of 2006, PLASA relocated its office from the centre of town into a newly built trading estate. The relocation included 15 clients, one server and misc network equipment.</p>
				<p>The new premises were available to us for about four weeks before the actual move, which gave me time to plan some of the migration and place orders for new equipment and services. There was going to be a dedicated server room, with its own air cooling, which was a huge improvement to the "cupboard" in the old premises.</p>
				<p>I ordered four ADSL Max (2MBit) connections, which were the fastest available at the site due to its distance to the local phone exchange. We bonded three of the lines to gain faster internet access and kept one line dedicated to our print production and media team, to allow for fast high resolution media exchange between us and our printers.</p>
				<p>During that time I also installed a floor standing server cabinet to home the server, all networking equipment, UPS devices, the patch panels and the phone system, with room for expansion as necessary.</p>
				<p>The phone system was installed by an external supplier, with whom I liaised to make sure the ADSL lines were patched into the cabinet for easy access, patching and maintenance.</p>
				<p>I bought a new 3Com 48 port gigabit switch to deal with all LAN traffic, when we used to have two 24 port hubs at the old office, which meant we could now benefit from a faster network throughput.</p>
				<p>The network cabling was done by an external contractor, who also did the electrical wiring, but I patched the whole office network and moved some of the network points that are held in floor boxes to accommodate the position of the office equipment, client computers, printers and fax machine.</p>
				<p>Just before the office move the office server died and we had to replace it, so that added to the pressure of having everything ready in time, but it meant we could replace the tower based server with a rack-mounted version.</p>
				<p>The actual move involved the help of a removal company to transport all our client computers and the network equipment, except for the server itself, which I moved myself in my car, so that I could set it up in the server cabinet, patch it into the local network and configure it for the ADSL broadband connections, test everything and have it ready for when the client computers arrived.</p>
				<p>Everything went relatively smoothly, even though there was a bit of a worry about the ADSL connections being ready on time and of course the suspense when moving the office server.</p>
				<p>Over the years, we've added to the equipment in the server room, such as a Terminal Server, we changed from broadband to fibre, set up WiFi access points, etc.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>Networking, Servers, Firewalls</p>

				<h3>Related Links</h3>
				<ul>
					<li><a href="http://community.spiceworks.com/people/oliverkinne/projects/office-relocation">Spiceworks Project Page</a></li>
				</ul>
			</aside>

			<aside>
				<h2>Searchable Book Database OTree</h2>
				<p class="dates"><?php print_date_range('1 September 1998', '31 October 1998') ?></p>
				<p class="team"></p>
				<p>Development of bespoke, searchable books database on CD, which contained full information about tens of thousands of books, including title, author, description, ISBN, binding, pages, illustrations, etc. as well as a scanned cover image. I developed a new database system, called OTree, which was based on BTree, to create a highly compressed database of the books that would fit onto CD and would allow very fast searches and information retrieval.</p>
			</aside>

			<aside class="side">
				<h3>Related Skills</h3>
				<p>Databases, Operating Systems, System Administration, C++</p>
			</aside>

			<div class="clear">&nbsp;</div>
		</section>
	</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php' ?>

<?php

function GitHubEvents($githubapiurl) {
	ini_set('user_agent', 'PHP'); // GitHub requires this

	$events = json_decode(file_get_contents('https://api.github.com' . $githubapiurl, false, stream_context_create(array('http' => array('method' => 'GET', 'header' => 'Authorization: token 25ac31313306ee23e01cbbe0262992d69cb09af8')))));

	if (count($events) > 0) {
?>
				<div class="scroll">
					<ul>
<?php
		for ($event = 0; $event < count($events); $event++) {
			// created at date
			$date = date('d/m/Y H:i:s', strtotime($events[$event]->created_at));
			$last_description = $description;
			$description = "";
			$url = "";

			switch ($events[$event]->type) {
				// push event
				case "PushEvent":
					$commits = $events[$event]->payload->commits;
					for ($commit = 0; $commit < count($commits) - 1; $commit++) {
						$description = strShorten($commits[$commit]->message, 50);
						$url = str_replace('/commits/', '/commit/', str_replace('api.github.com/repos/', 'github.com/', $commits[$commit]->url));
?>
						<li><a href="<?php echo $url?>"><?php echo htmlentities($description)?></a> (<?php echo $date?>)</li>
<?php
					}

					$description = strShorten($commits[count($commits) - 1]->message, 50);
					$url = str_replace('/commits/', '/commit/', str_replace('api.github.com/repos/', 'github.com/', $commits[count($commits) - 1]->url));

					break;

				// create event
				case "CreateEvent":
					$description = strShorten('Created ' . $events[$event]->payload->ref_type . ' \'' . ($events[$event]->payload->ref == null ? $events[$event]->payload->master_branch : $events[$event]->payload->ref) . '\'', 50);
					$url = $events[$event]->payload->issue->html_url;

					break;

				// delete event
				case "DeleteEvent":
					$description = strShorten('Deleted ' . $events[$event]->payload->ref_type . ' \'' . ($events[$event]->payload->ref == null ? $events[$event]->payload->master_branch : $events[$event]->payload->ref) . '\'', 50);
					$url = $events[$event]->payload->issue->html_url;

					break;

				// issues event
				case "IssuesEvent":
					$description = strShorten(ucfirst($events[$event]->payload->action) . ' issue \'' . $events[$event]->payload->issue->title . '\'', 50);
					$url = $events[$event]->payload->issue->html_url;

					break;

				// issue comment event
				case "IssueCommentEvent":
					$description = strShorten('Commented on issue \'' . $events[$event]->payload->issue->title . '\'', 50);
					$url = $events[$event]->payload->issue->html_url;

					break;

				// Gollum event
				case "GollumEvent":
					$description = strShorten(ucfirst($events[$event]->payload->pages[0]->action) . ' Wiki page \'' . $events[$event]->payload->pages[0]->title . '\'', 50);
					$url = $events[$event]->payload->pages[0]->html_url;

					break;
			}

			if ($last_description != $description && $description != "") {
?>
						<li><?php
				if ($url != "") {
?><a href="<?php echo $url?>"><?php 
				}
				echo htmlentities($description);
				if ($url != "") {
?></a><?php 
				}
?> (<?php echo $date?>)</li>
<?php
			}
		}
?>
					</ul>
				</div>
<?php
	}
}

function strShorten($description, $length) {
	if (strlen($description) > $length)
		$description = preg_replace('/ [^ ]*$/', ' ', substr($description, 0, $length)) . '...';

	return $description;
}

function print_date_range($date1, $date2) {
	$date1 = strtotime($date1);
	echo date('F Y', $date1);

	if ($date2 == null) {
		$date2 = strtotime(date('d F Y'));
		echo ' - Present';
	}
	else {
		$date2 = strtotime($date2);
		if ($date1 != $date2)
			echo ' - ' . date('F Y', $date2);
	}

	$diff = abs($date2 - $date1);
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

	if ($date1 != $date2) {
		echo ' (';
		if ($years > 0) {
			echo $years . ' year';
			if ($years > 1)
				echo 's';
		}
		if ($years > 0 && $months > 0)
			echo ' ';
		if ($months > 0) {
			echo $months . ' month';
			if ($months > 1)
				echo 's';
		}
		if ($years <= 0 && $months <=0)
			echo 'less than a month';
		echo ')';
	}
}
?>