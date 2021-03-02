<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>


	<!-- s : #container-wrap //-->
	<div id="container-wrap" class="mcontainer">
		<div id="contents">
			<!-- s: page-start//-->
			<!-- s: msec-visual -->
			<div class="msec-visual">
				<div class="visual-slide" style="text-align: center;">
					<div class="item c03">
						<video style="width:2200px;" height="" id="vid"  autoplay="autoplay" loop="loop" muted>
							<source src="http://designvii.link/mov/hgp/146412010.mp4" type="video/mp4">
<!--							 309111412 / 325256507 / 93678700  / -->
							Your browser does not support HTML5 video.
						</video>
<!--						<embed src="mms://wm-003.cafe24.com/hgp2020/146412010.mp4" type="video/mp4">-->
					</div>
					
					<div class="item c02">
						<div class="img"></div>
					</div>
					
					<div class="item c01">
						<div class="img"></div>
					</div>
				</div>
				<div class="visual-txt" id="visual-txt">
					<p class="btxt">HEALTHCARE GREEN PARTNERS</p>
					<p class="stxt"><span>OUR VISION</span>Be the leading and wise companion adding value, synergy and profitability</p>
					<p class="stxt"><span>OUR MISSION</span>We make a material and positive impact in the lives of our partners and clients</p>
					<div class="stxt"><span>OUR CORE VALUES</span>
						<ul>
							<li><a href="./"><div><img src="/_Img/Main/icon-m_compassionate.png" alt=""><span>COMPASSIONATE</span></div></a></li>
							<li><a href="./"><div><img src="/_Img/Main/icon-m_forthright.png" alt=""><span>FORTHRIGHT</span></div></a></li>
							<li><a href="./"><div><img src="/_Img/Main/icon-m_considerate.png" alt=""><span>CONSIDERATE</span></div></a></li>
							<li><a href="./"><div><img src="/_Img/Main/icon-m_innovative.png" alt=""><span>INNOVATIVE</span></div></a></li>
						</ul>
					</div>
				</div>
				<div class="ctrl">
					<a href="#n" class="prev"><span class="blind">이전</span></a>
					<a href="#n" class="next"><span class="blind">다음</span></a>
				</div>
			</div>
			<!-- e: msec-visual -->
			<div class="msec-cont div-cont" >
				<!-- s: about -->
				<section id="about">
					<div class="tit">
						<h4 data-aos="fade-down">ABOUT</h4>
						<h3 data-aos="fade-down">Healthcare Green Partners</h3>
					</div>
					<div class="txtbox">
						<p class="stxt" data-aos="fade-right">Founded in 2009 and based in Washington DC Metropolitan Area, USA, Healthcare Green Partners helps the world’s most ambitious change makers define the future by providing strategic guidelines &amp; vital resources.</p>
						<br>
						<p class="stxt" data-aos="fade-right" >HGP bridges and integrates with leading institutions in:</p>
						<div class="ab_graphy">
							<span class="sround1 sround"></span>
							<span class="bround" data-aos="fade-down" data-aos-delay="0"><img src="/_Img/Main/icon-healthcare.png" alt=""><p>Healthcare</p></span><span class="sround"></span>
							<span class="bround" data-aos="fade-down" data-aos-delay="150"><img src="/_Img/Main/icon-clean.png" alt=""><p>Clean Energy</p></span><span class="sround"></span>
							<span class="bround" data-aos="fade-down" data-aos-delay="300"><img src="/_Img/Main/icon-education.png" alt=""><p>Education</p></span><span class="sround"></span>
							<span class="bround" data-aos="fade-down" data-aos-delay="450"><img src="/_Img/Main/icon-leisure.png" alt=""><p>Leisure &amp; Entertainment</p></span><span class="sround"></span>
							<span class="bround" data-aos="fade-down" data-aos-delay="500"><img src="/_Img/Main/icon-finance.png" alt=""><p>Finance</p></span>
							<span class="sround1 sround"></span>
						</div>
						<p class="stxt" data-aos="fade-right">We work alongside our clients as one team with a shared ambition to achieve extraordinary results, outperform the competition and redefine industries.</p>
						<br>
						<br>
						<p class="stxt" data-aos="fade-right">We complement our tailored, integrated expertise with a vibrant ecosystem of healthcare and green innovators to deliver better, faster and more enduring outcomes.</p>
						<br>
						<br>
						<p class="stxt" data-aos="fade-right">Our offerings also include bespoke advisory and capital markets solutions targeted at operating companies, real estate and real asset transactions and partner with family offices and private equity firms on deals ranging from $5 million to $350 million.</p>
						<br>
						<span class="ab_bg"><p class="stxt" data-aos="fade-right">HGP provides comprehensive strategic business advisory, consultancy, corporate development and capital formation services to business owners, and sponsors.</p></span>
					</div>				
				</section>
				<!-- e: about -->
				<!-- s: service -->
				<section id="service">
					<div class="serbg"></div>
					<div class="tit">
						<h4 data-aos="fade-down"></h4>
						<h3 data-aos="fade-down">Our Service</h3>
					</div>
					<div class="con">
						<ul>
							<li class="item">
								<div class="itemtop"><span data-target="#consultancy">CONSULTANCY</span></div>
								<h3>Consultancy</h3>
								<ul class="sertxt">
									<li data-aos="fade-right" data-aos-dalay="100">Unique Performance with Value</li>
									<li data-aos="fade-right" data-aos-dalay="200">Focus on our clients' most critical issues and opportunities: strategy, marketing, organization, operations, technology, transformation, digital, advanced analytics, corporate finance, mergers &amp; acquisitions and sustainability across all industries and geographies.</li>
								</ul>
							</li>
							<li class="item">
								<div class="itemtop"><span data-target="#advisory">ADVISORY</span></div>
								<h3>Advisory</h3>
								<ul class="sertxt">
									<li data-aos="fade-right" data-aos-dalay="150">Constant Growth with Synergy</li>
									<li data-aos="fade-right" data-aos-dalay="250">Strategic alliances, partnerships and corporate development for developing a global expansion strategy to enter into new market</li>
								</ul>
							</li>
							<li class="item">
								<div class="itemtop"><span data-target="#investment">INVESTMENT</span></div>
								<h3>Investment</h3>
								<ul class="sertxt">
									<li data-aos="fade-right" data-aos-dalay="200">Innovative Impact with Profitability</li>
									<li data-aos="fade-right" data-aos-dalay="300">Work with best-in-class independent operators and investment teams to optimize the outcome for the businesses.</li>
								</ul>
							</li>
							<li class="item">
								<div class="itemtop"><span data-target="#development">DEVELOPMENT</span></div>
								<h3>Development</h3>
								<ul class="sertxt">
									<li data-aos="fade-right" data-aos-dalay="250">Smart Infrastructure for Smart Citizens</li>
									<li data-aos="fade-right" data-aos-dalay="350">Identify, invest, develop and maintain the most compelling set of smart infrastructures such as Global Healthcare Community which are self-sufficient, innovative and convergence.</li>
								</ul>
							</li>
						</ul>
					</div>
				</section>
				<!-- e: service -->
				<!-- s: advisory -->
				<section id="advisory">
					<div class="tit">
						<h4 data-aos="fade-down">SERVICE</h4>
						<h3 data-aos="fade-down">Advisory Services</h3>
					</div>
					<div class="con">
						<div class="serimg">
							<img src="/_Img/Main/advisory.jpg" alt="" data-aos="zoom-in">
							<span><p class="btxt">When your company needs an expert...</p></span>
						</div>
						<ul>
							<li data-aos="fade-right" data-aos-dalay="100">HGP offers Business Advisory Services to companies who are ready to excel.</li>
							<li data-aos="fade-right" data-aos-dalay="200">HGP will review your current business model, lead an analysis that will provoke critical thinking about what methods best trigger specific growth realization, and help you create a plan of execution.</li>
							<li data-aos="fade-right" data-aos-dalay="300">Creating this action plan for your business is a motivating exercise for you and your management team. It will invigorate your business with a catalyst to move forward and infuse purpose in your day to day operations.</li>
						</ul>
					</div>
				</section>
				<!-- e: advisory -->
				<!-- s: consultancy -->
				<section id="consultancy">
					<div class="serbg"></div>
					<div class="tit">
						<h4 data-aos="fade-down">SERVICE</h4>
						<h3 data-aos="fade-down">Consultanct Services</h3>
					</div>
					<div class="con">
						<div class="serimg" >
							<img src="/_Img/Main/consultancy.jpg" alt="" data-aos="zoom-in">
							<span><p class="btxt">In both challenging and favorable economic conditions,<br> organizations strive to be smart, nimble, creative and forward thinking.</p></span>
						</div>
						<ul>
							<li data-aos="fade-right" data-aos-dalay="100">In both challenging and favorable economic conditions, organizations strive to be smart, nimble, creative and forward thinking. HGP provides deep technical knowledge and extensive industry experience to assist clients in addressing business strategy, structure, management, and operations to pursue a mid to long term project.</li>
							<li data-aos="fade-right" data-aos-dalay="200">Our experience spans every industry and challenge, which gives us a unique perspective that we bring to every client relationship. We help you see the world differently, discover opportunities you may never have imagined and achieve results that bridge what is with what can be.</li>
							<li data-aos="fade-right" data-aos-dalay="300">We bring deep, functional expertise, but are known for our holistic perspective: we capture value across boundaries and between the silos of any organization.</li>
							<li data-aos="fade-right" data-aos-dalay="400">We have proven a multiplier effect from optimizing the sum of the parts, not just the individual pieces.</li>
						</ul>
					</div>
				</section>	
				<!-- e: consultancy -->
				<!-- s: government -->
				<section id="government"  >
					<div class="tit">
						<h4 data-aos="fade-down">SERVICE</h4>
						<h3 data-aos="fade-down">Government Contracting Services</h3>
					</div>
					<div class="con">
						<div class="serimg1" >
							<img src="/_Img/Main/government1.jpg" alt="" data-aos="zoom-in">
						</div>
						<ul>
							<li data-aos="fade-right" data-aos-delay="100">HGP has the knowledge and relationships to support your business in attacking the competitive US Federal, State and local Government procurement opportunities.</li>
							<li data-aos="fade-right" data-aos-delay="200">The US Federal Government is the largest purchaser of goods and services in the world, spending about $500 billion dollars annually.</li>
							<li data-aos="fade-right" data-aos-delay="300">Comprising the network of disabled veteran’s, minority-owned, tribal native, independent contractor, small business operating is a good strategy to support procurement needs between manufactures, supplies with the best valued products/services.</li>
						</ul>
						<div class="serimg2">
							<img src="/_Img/Main/government2-2.png" alt="" data-aos="fade-up" data-aos-delay="500">
						</div>
					</div>
				</section>	
				<!-- e: government -->
				<!-- s: landing -->
				<section id="landing" >
					<div class="serbg"></div>
					<div class="tit">
						<h4 data-aos="fade-down">SERVICE</h4>
						<h3 data-aos="fade-down">Business Expansion Services – Soft Landing</h3>
					</div>
					<div class="con">
						<div class="serimg">
							<img src="/_Img/Main/landing1.jpg" alt="" data-aos="zoom-in">
							<span><p class="btxt">HGP supports business expansion into new markets.</p></span>
						</div>
						<ul class="contxt">
							<li data-aos="fade-right" data-aos-delay="100">HGP supports business expansion into new markets, helping both international businesses and domestic companies headquartered outside the region, to quickly and effectively enter the local business ecosystem. Typically operating within a worldwide network of facilities with programs, soft landings are designed specifically to ensure that businesses expanding into a new market are provided with an accelerated introduction into that market’s business practices, regulations and culture.</li>
							<li data-aos="fade-right" data-aos-delay="200">The intake process for a company expanding into new area is designed to get the company working in the new market as easily and painlessly as possible, while their business grows and their best permanent location is identified. Soft landing enables the company to focus on their business – what they do best, with help navigating the things they don’t know how to do without upsetting their business flow. The immediate point is to help the business make contacts and find services quickly and efficiently while providing access to the resources necessary to meet their business goals.</li>
							<li data-aos="fade-right" data-aos-delay="300">This fee-based process begins with an assessment to determine assets, liabilities, and to identify their unique needs. Much of the assessment can usually be performed before they arrive in their new location. Depending on their particular needs, temporary operating space is provided, and the incoming companies are paired with a specialized resources team designed to assist them with their specific requirements.</li>
							<li>
							<img src="/_Img/Main/landing2.jpg" alt="" data-aos="zoom-in" data-aos-delay="400"></li>
							<li data-aos="fade-right" data-aos-delay="400"><span class="bold">Eligible companies are</span>: headquartered outside the local region, must provide valid paperwork needed to conduct business in the United States, must be a for-profit business, and can pay the monthly program and facility membership for intended time of stay. To achieve the most impact, these candidates should also demonstrate the ability to have a positive economic impact in the community through a technology, product or service deemed to have high growth potential in the marketplace and the creation of new high-paying jobs in their target area.</li>
						</ul>
						<div class="serimg2">
							<ul><span>Examples of services typically provided by through a soft landing program include:</span>
								<li>Language and translation services</li>
								<li>Domestic market research and entry assistance</li>
								<li>Intellectual property and patent assistance</li>
								<li>Help meeting government regulations and import/export laws</li>
								<li>Access to capital and potential investors</li>
								<li>Immigration, visa, drivers and business license assistance</li>
								<li>Cultural training</li>
								<li>Housing Assistance</li>
							</ul>
						</div>
					</div>
				</section>
				<!-- e: landing -->
				<!-- s: investment -->
				<section id="investment" >
					<div class="tit">
						<h4 data-aos="fade-down">SERVICE</h4>
						<h3 data-aos="fade-down">Investment Services</h3>
					</div>
					<div class="con">
						<div class="serimg">
							<img src="/_Img/Main/investment.jpg" alt="" data-aos="zoom-in">
							<span><p class="btxt">HGP is an independent private investment partner focused on healthcare and clean energy and offering family offices and institutional investors exclusive access to direct and co-investment opportunities in private equity and venture capital. </p></span>
							</div>
							<ul>
								<li data-aos="fade-right" data-aos-dalay="100">HGP is an independent private investment partner focused on healthcare and clean energy and offering family offices and institutional investors exclusive access to direct and co-investment opportunities in private equity and venture capital. Each investment is focused on how transformative innovation, company-level strategy will impact investment value. </li>
								<li data-aos="fade-right" data-aos-dalay="200">HGP sponsors deals as a general partner and provides family offices and other end institutional investors a single point of entry for transactions.  The investments are sourced from our extensive proprietary, global network and undergo extensive due diligence by HGP’s senior team and subject matter experts. </li>
								<li data-aos="fade-right" data-aos-dalay="300">HGP partners with private equity funds to invest in early to middle stage companies in healthcare and energy where there is a clear view on how to achieve revenue expansion and profitability.  </li>
								<li data-aos="fade-right" data-aos-dalay="400">HGP positions companies to raise capital, and achieve owner, investor and market return expectations.</li>
								<li data-aos="fade-right" data-aos-dalay="500">HGP supports businesses with identifying capital sources, and assessing IPO readiness through evaluating the benefits, risks, and requirements for going public, and helping organizations weigh the pros and cons, and the appropriate timing.</li>
								<li data-aos="fade-right" data-aos-dalay="600">Our approach provides greater fee transparency, an alignment of incentives through our equity investment and the opportunity for investors to have much greater control around their alternative investment activities.  All deals are exclusive to HGP and we do not rely on brokers, finders, placement agents, or other intermediaries.  HGP operates strictly as an investment advisor, not a broker-dealer, aligning interest with investors.</li>
							</ul>
						</div>
					</section>
				<!-- e: investment -->
				<!-- s: development -->
				<section id="development" >
				<div class="serbg"></div>
					<div class="tit">
						<h4 data-aos="fade-down">SERVICE</h4>
						<h3 data-aos="fade-down">Development</h3>
					</div>
					<div class="con">
						<div class="serimg">
							<img src="/_Img/Main/development.jpg" alt="" data-aos="zoom-in">
							<span><p class="btxt">HGP is to identify, invest, develop and maintain the most compelling set of smart infrastructures such as Global Healthcare Community which are self-sufficient, innovative and convergence. </p></span>
						</div>
						<ul>
							<li data-aos="fade-right" data-aos-dalay="100">HGP is to identify, invest, develop and maintain the most compelling set of smart infrastructures such as Global Healthcare Community which are self-sufficient, innovative and convergence.</li>
							<li data-aos="fade-right" data-aos-dalay="200">Global Healthcare Community is where academy, medicine and industry get together to form a new cluster to collaborate each other domestically and internationally.
								<ul>
									<li>Joint research activities with local experts and industry</li>
									<li>Provide opportunity of higher learning achievements into innovative implementation</li>
									<li>Most innovative ubiquitous residence facility</li>
								</ul>
							</li>
							<li data-aos="fade-right" data-aos-dalay="300">Customized and individualized education, healthcare and industry practice (patient care) to foster smart scholars, researchers and workforce based on the needs of end users (smart citizens/users)</li>
							<li data-aos="fade-right" data-aos-dalay="400">Provide the right care at the right place at the right time</li>
						</ul>
					</div>
					<span class="line"></span>
					<div class="con">
						<p class="stxt">By gathering world-class university, hospital, multinational global innovative companies, and research centers, pursue research and business activities jointly with local companies, universities and research centers</p>
						<div class="serimg3">
							<img src="/_Img/Main/development1.png" alt="" class="develop01" data-aos="fade-down" >
							<img src="/_Img/Main/development2.png" alt="" class="develop02" data-aos="fade-down" data-aos-delay="200">
							<img src="/_Img/Main/development3.png" alt="" class="develop03" data-aos="fade-down" data-aos-delay="400">
							<img src="/_Img/Main/development4.png" alt="" class="develop04" data-aos="fade-down" data-aos-delay="600">
							<img src="/_Img/Main/development5.png" alt="" class="develop05" data-aos="fade-down" data-aos-delay="800">
							<img src="/_Img/Main/development6.png" alt="" class="develop06" data-aos="fade-down" data-aos-delay="1100">
						</div>
					</div>
				</section>
				<!-- e: development -->
				<!-- s: introduce -->
				<section id="introduce" >
					<div class="tit">
						<h4 data-aos="fade-down">Leadership</h4>
						<h3 data-aos="fade-down">Seungmin “Daniel” Lee</h3>
					</div>
					<div class="con">
						<ul>
							<li data-aos="fade-right" data-aos-dalay="100">Over 20 years of professional investment and developments fields, corporate and entrepreneurial experience across geographies, Daniel Seungmin Lee, founder and managing partner of Healthcare Green Partners, serves as a strategic advisor to C-Suites, Boards, and key decision makers within large and small companies bringing extensive experience in international and domestic geographies.  Mr. Lee has access to a wide-reaching proprietary network of deal sources, capital providers, strategic partners, advisors, executives, and diligence partners.</li>
							<li data-aos="fade-right" data-aos-dalay="200">As Vice President of Bio Medical City from 2001 to 2009, Mr. Lee lead its international business developments in Asia and the USA.  As General Manager of Asia Venture Partners from 1999 to 2001, he has extensively interacted and associated with academic, research and medical institutions in the USA to advance into Asia.</li>
							<li data-aos="fade-right" data-aos-dalay="300">Mr. Lee is accel in removing barriers to success, building companies and teams to realize their maximum potential, facilitating reorganizations and pivots if necessary.  He advises on strategic planning, revenue growth and profit improvement, systems and processes, operating model, sales, marketing, and business development.  He contributes to the development of a high-performance culture that attracts world-class talent.</li>
						</ul>
						<div class="serimg">
							<img src="/_Img/Main/introduce.png" alt="" data-aos="fade-down">
						</div>
					</div>
				</section>
				<!-- e: introduce -->
				<!-- s: partners -->
				<section id="partners" >
					<div class="tit2">
						<div class="div-cont">
							<h4>Strategic Partners &amp; Advisors</h4>
						</div>
					</div>
					<div class="con">
						<ul class="partners">
							<li>
								<img src="/_Img/Main/partners1.jpg" alt="">
								<div class="txt">
									<p class="intro">Strategic Non-Executive Partners</p>
									<p class="name">David Lenihan, JD, Ph.D.,</p>
									<p class="stxt">Co-Founder and CEO of Tiber Health (tiberhealth.com);<br>President of Ponce Health Science University (psm.edu);<br>Former Dean of Touro College (touro.edu)</p>
								</div>
							</li>
							<li>
								<img src="/_Img/Main/partners2.jpg" alt="">
								<div class="txt">
									<p class="intro">Strategic Non-Executive Partners</p>
									<p class="name">Bruce E. Douglas, Ph.D.,</p>
									<p class="stxt">Founder and CEO of Douglas Consulting;<br>Former Executive Director of Capital Region Education Council (crec.org)<br>from 1998 to 2015</p>
								</div>
							</li>
							<li>
								<img src="/_Img/Main/partners3.jpg" alt="">
								<div class="txt">
									<p class="intro">Strategic Non-Executive Partners</p>
									<p class="name">Gautam Bazaz</p>
									<p class="stxt">Founder and CEO of Amarnath Partners (amarnathpartners.com)</p>
								</div>
							</li>
							<li>
								<img src="/_Img/Main/partners4.jpg" alt="">
								<div class="txt">
									<p class="intro">Strategic Non-Executive Partners</p>
									<p class="name">Stephen Arrivello</p>
									<p class="stxt">Founder and CEO of C-PACE Capital Group (axcelcap.com);<br>Director of Capital Markets at Marcus &amp; Millichap Capital Corporation<br>(marcusmillichap.com)</p>
								</div>
							</li>
							<li>
								<img src="/_Img/Main/partners5.jpg" alt="">
								<div class="txt">
									<p class="intro">Legal</p>
									<p class="name">Joung “Jackie” E. Lee</p>
									<p class="stxt">Attorney at Law, the Law Ofice of J.E. Lee, PLLC</p>
								</div>
							</li>
							<li>
								<img src="/_Img/Main/partners6.jpg" alt="">
								<div class="txt">
									<p class="intro">Strategic Non-Executive Partners</p>
									<p class="name">Kevin Humes,</p>
									<p class="stxt">Co-Founder of Vet Power Industries (vetpower.org);<br>Managing Partner of Florida Veteran Chamber of Commerce (floridaveteranschambers.org)</p>
								</div>
							</li>
						</ul>
						<div class="partners_arrow">
							<span class="btn_prev" id="btn_prev"></span>
							<span class="btn_next" id="btn_next"></span>
						</div>
					</div>
					<script>
					$('.partners').slick({
						dots: true,
						infinite: true,
						slidesToShow: 3,
						slidesToScroll: 1,
						arrows: true,
						prevArrow: $('#btn_prev'),
						nextArrow: $('#btn_next'),
						autoplay: true,
						autoplaySpeed: 4000,						
						responsive: [
							{
								breakpoint: 1024,
								settings: {
									slidesToShow: 2,
									slidesToScroll: 1,
								}
							},
							{
								breakpoint: 600,
								settings: {
									slidesToShow: 1,
									slidesToScroll: 1
								}
							},
							{
								breakpoint: 480,
								settings: {
									slidesToShow: 1,
									slidesToScroll: 1
								}
							}
						]
					});
					</script>
				</section>
				<!-- s: partners -->
				<!-- s: contact -->
				<section id="contact" >
					<div class="tit2">
						<div class="div-cont">
							<h4>CONTACT</h4>
						</div>
					</div>
					<script>
					function chkMailFrm() {
						var f = document.formmail;
						if (!f.name1.value) {
							alert("Please enter your name.");
							f.name1.focus();
							return false;
						}
						if (!f.name2.value) {
							alert("Please enter your name.");
							f.name2.focus();
							return false;
						}
						if (!f.phone.value) {
							alert("Please enter your phone number.");
							f.phone.focus();
							return false;
						}
						if (!f.email.value) {
							alert("Please enter your e-mail.");
							f.email.focus();
							return false;
						}
					}
					</script>
					<div class="con">
						<form name="formmail" method="get" action="/qa_post.php" onSubmit="return chkMailFrm()">
						<p>Email us</p>
						<div class="inputbox">
							<input type="text" name="wr_subject" style="display: none;" value="This message is from HGP.">
							<span class="name"><input type="text" placeholder="First Name" name="name1"><input type="text" placeholder="Last Name" name="name2"></span>
							<span class="email"><input type="text" placeholder="Email" name="wr_email"></span>
							<span class="phone"><input type="text" placeholder="Phone" name="wr_1"></span>
							<span class="message"><textarea name="wr_content" id="" cols="30" rows="10" placeholder="Message"></textarea></span>
						</div>
						<input type="submit" value="SUBMIT" name="submit" class="submit">
						</form>
					</div>
				</section>
				<!-- e: contact -->
			</div>
				<!-- e : page-end //-->
		</div>
	</div>
	<!-- e: #container-wrap //-->
<?php
include_once(G5_PATH.'/tail.php');
?>