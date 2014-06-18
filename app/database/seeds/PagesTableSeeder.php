<?php

class PagesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('pages')->truncate();
        
		\DB::table('pages')->insert(array (
			0 => 
			array (
				'id' => 1,
				'title' => 'Team',
				'content' => '<div class="container">
<div class="row team margin-bottom-20">
<div class="col-md-5">
<div class="thumbnail-style">
<h3>Jack Bour <small>Chief Executive Officer</small></h3>

<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>Toll</li>
<li>Fein</li>
<li>Nett gro&szlig;z&uuml;gig und fein</li>
<li>Nett und fein</li>
<li>Nett gro&szlig;z&uuml;gig und fein</li>
<li>Nett gro&szlig;z&uuml;gig fein</li>
<li>Nett gro&szlig;z&uuml;gig und fein</li>
<li>Gro&szlig;z&uuml;gig und fein</li>
<li>Nett gro&szlig;z&uuml;gig und fein</li>
<li>Freundlich gro&szlig;z&uuml;gig und fein</li>
<li>Nett Gut und fein</li>
<li>Nett gro&szlig;z&uuml;gig und fein</li>
</ul>
</div>
</div>

<div class="col-md-7">
<div class="margin-bottom-10">&nbsp;</div>

<p>Acilis quidem rerum facilis est et expedita distinctio estet expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
&nbsp;

<div class="tag-box tag-box-v1">
<p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat.</p>
</div>

<div class="carousel slide testimonials testimonials-v1" id="testimonials-3">
<div class="carousel-inner">
<div class="item active">
<p>Ducimusqui ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sunt in culpaid delvoe molestias..</p>

<div class="testimonial-info"><img alt="" src="../uploads/doksoft_uploader/testimonials/img2.jpg" /> Jenny Lawiso <em>Web Developer, Unify Theme.</em></div>
</div>

<div class="item">
<p>Ducimusqui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sunt in culpaid delvoe molestias..</p>

<div class="testimonial-info"><img alt="" src="../uploads/doksoft_uploader/testimonials/img1.jpg" /> User <em>Java Developer, Htmlstream</em></div>
</div>

<div class="item">
<p>Ducimusqui ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, sunt in culpaid delvoe molestias..</p>

<div class="testimonial-info"><img alt="" src="../uploads/doksoft_uploader/testimonials/user.jpg" /> Kate Davenport <em>Web Designer, Google Inc.</em></div>
</div>
</div>

<div class="carousel-arrow">&nbsp;</div>
</div>
</div>
</div>

<div class="headline">
<h2>Account Directors</h2>
</div>

<div class="row team margin-bottom-40">
<div class="col-sm-4">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/3.jpg" />
<h3>Kate Metus <small>Project Manager</small></h3>




<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
</ul>
</div>
</div>

<div class="col-sm-4">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/2.jpg" />
<h3>Porta Gravida <small>VP of Operations</small></h3>

<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>Gut</li>
<li>Nett</li>
<li>Lieb</li>
</ul>
</div>
</div>

<div class="col-sm-4">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/4.jpg" />
<h3>Donec Elit <small>Director, R &amp; D Talent</small></h3>

<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>Gut</li>
<li>Nett</li>
<li>Lieb</li>
</ul>
</div>
</div>
</div>

<div class="tag-box tag-box-v2">
<p>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat.</p>
</div>

<div class="margin-bottom-60">&nbsp;</div>

<div class="headline">
<h2>Other Team Members</h2>
</div>

<div class="row team margin-bottom-20">
<div class="col-sm-3">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/1.jpg" />
<h3>Jack Bour <small>Chief Executive Officer</small></h3>

<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>Gut</li>
<li>Nett</li>
<li>Lieb</li>
</ul>
</div>
</div>

<div class="col-sm-3">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/3.jpg" />
<h3>Kate Metus <small>Project Manager</small></h3>

<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>Gut</li>
<li>Nett</li>
<li>Lieb</li>
</ul>
</div>
</div>

<div class="col-sm-3">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/2.jpg" />
<h3>Porta Gravida <small>VP of Operations</small></h3>

<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>Gut</li>
<li>Nett</li>
<li>Lieb</li>
</ul>
</div>
</div>

<div class="col-sm-3">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/4.jpg" />
<h3>Donec Elit <small>Director, R &amp; D Talent</small></h3>

<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>Gut</li>
<li>Nett</li>
<li>Lieb</li>
</ul>
</div>
</div>
</div>

<hr />
<div class="row team">
<div class="col-sm-3">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/2.jpg" />
<h3>Jack Bour <small>Chief Executive Officer</small></h3>

<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>Gut</li>
<li>Nett</li>
<li>Lieb</li>
</ul>
</div>
</div>

<div class="col-sm-3">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/1.jpg" />
<h3>Kate Metus <small>Project Manager</small></h3>

<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>Gut</li>
<li>Nett</li>
<li>Lieb</li>
</ul>
</div>
</div>

<div class="col-sm-3">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/4.jpg" />
<h3>Porta Gravida <small>VP of Operations</small></h3>

<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>

<ul>
<li>Gut</li>
<li>Nett</li>
<li>Lieb</li>
</ul>
</div>
</div>

<div class="col-sm-3">
<div class="thumbnail-style"><img alt="" class="img-responsive" src="../uploads/doksoft_uploader/team/3.jpg" />
<h3>&nbsp;</h3>
</div>
</div>
</div>
</div>
',
				'created_at' => '2014-04-01 13:52:26',
				'updated_at' => '2014-05-19 06:23:36',
				'is_published' => 1,
			),
			1 => 
			array (
				'id' => 3,
				'title' => 'AGB\'s',
				'content' => '<!-- Meta --><!-- CSS Global Compulsory--><!-- CSS Implementing Plugins --><!-- CSS Theme -->
<div class="container">
<div class="row-fluid privacy">
<p>&sect;1 Geltungsbereich: F&uuml;r den Vertragsabschluss zwischen der KochAbo Betriebs GmbH (&bdquo;KochAbo&ldquo;) und ihren Kunden gelten ausschlie&szlig;lich die vorliegenden AGB in der jeweils g&uuml;ltigen Fassung, welche auf der Website www.kochabo.at abgerufen werden k&ouml;nnen.</p>

<ol>
<li>Ut adipiscing elit magna sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet. Et harum quidem rerum facilis fusce condimentum eleifend enim a feugiat.</li>
<li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
<li>Praesentium voluptatum deleniti atque corrupti quos</li>
<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>
<li>Mentum eleifend enim a feugiat distinctio lor</li>
</ol>
&nbsp;

<h4>Lorem ipsum dolor integer sed arcu</h4>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non <a href="#">libero consectetur adipiscing</a> elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>

<p><strong>Iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non sit amet, consectetur adipiscing elit. Ut adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque lorem ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</strong></p>
&nbsp;

<h4>Molestias excepturi sint</h4>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>

<ul>
<li>Ut adipiscing elit magna sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet. Et harum quidem rerum facilis fusce condimentum eleifend enim a feugiat.</li>
<li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
<li>Praesentium voluptatum deleniti atque corrupti quos</li>
<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>
<li>Mentum eleifend enim a feugiat distinctio lor</li>
<li>Ut adipiscing elit magna sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet. Et harum quidem rerum facilis fusce condimentum eleifend enim a feugiat.</li>
<li>Lusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</li>
<li>Praesentium voluptatum deleniti atque corrupti quos</li>
<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</li>
<li>Mentum eleifend enim a feugiat distinctio lor</li>
</ul>

<p><em>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non ipsum dolor sit amet. Ut non libero magna. Sed et quam lacus usce condimentum eleifend enim a feugiat <a href="#">consectetur adipiscing elit</a>.</em></p>
</div>
</div>

<p>&nbsp;</p>
',
				'created_at' => '2014-04-06 14:26:33',
				'updated_at' => '2014-04-06 15:03:55',
				'is_published' => 1,
			),
			2 => 
			array (
				'id' => 4,
				'title' => 'Impressum',
				'content' => '<!-- Meta --><!-- CSS Global Compulsory--><!-- CSS Implementing Plugins --><!-- CSS Theme --><!--/breadcrumbs--><!--=== End Breadcrumbs ===--><!--=== Content Part ===-->
<div class="container">
<div class="row margin-bottom-30">
<div class="col-md-6 md-margin-bottom-40">
<p>Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers, tablets and phone. Lorem sequat ipsum dolor lorem sit amet, consectetur adipiscing dolor elit. Unify is an incredibly beautiful responsive Bootstrap Template for It works on all major web.<br />
<br />
<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">KochAbo Betriebs GmbH</span><br />
<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">Strobachgasse 4/6</span><br />
<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">1050 Wien<br />
<br />
Telefon: </span><a href="tel:+4315443900" style="color: rgb(20, 27, 7); text-decoration: underline; font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.66666603088379px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">01 544 3900</a><br />
<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">Internet: www.kochabo.at</span><br />
<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">E&minus;Mail: hilfe@kochabo.at</span><br />
<br />
<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">Gesch&auml;ftsf&uuml;hrer: Michael Str&ouml;ck, Philipp Stangl</span><br />
<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">Firmenbuch: </span><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">FN 386806 h</span><span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">&nbsp;(Handelsgericht Wien)</span><br />
<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">UID: ATU67487908&nbsp;</span><br />
<span style="background-color:rgb(255, 255, 255); color:rgb(87, 85, 86); font-family:arial,helvetica,sans-serif; font-size:13px">DVR: 4011336&nbsp;</span><br />
<br />
<br />
&nbsp;</p>

<ul>
<li>Donec id elit non mi porta gravida</li>
<li>Corporate and Creative</li>
<li>Responsive Bootstrap Template</li>
<li>Elit non mi porta gravida</li>
<li>Award winning digital agency</li>
</ul>
<br />
<!-- Blockquotes -->
<blockquote>
<p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why.</p>
<small>CEO Jack Bour</small></blockquote>
</div>

<div class="col-md-6 md-margin-bottom-40">
<div class="responsive-video"><iframe frameborder="0" src="http://player.vimeo.com/video/9679622"></iframe></div>
</div>
</div>
<!--/row--><!-- Meer Our Team --></div>
',
				'created_at' => '2014-04-06 14:29:39',
				'updated_at' => '2014-04-06 15:00:09',
				'is_published' => 1,
			),
			3 => 
			array (
				'id' => 5,
				'title' => 'Hilfe',
				'content' => '<!-- CSS Global Compulsory--><!-- CSS Implementing Plugins --><!-- CSS Theme --><!-- CSS Implementing Plugins --><!-- CSS Theme -->
<div class="container">
<div class="row">
<div class="col-md-9">
<div class="headline">
<h2>General Questions</h2>
</div>

<div class="panel-group acc-v1 margin-bottom-40" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapseOne">1. Put a bird on it squid single-origin coffee nulla? </a></h4>
</div>

<div class="panel-collapse collapse in" id="collapseOne">
<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapseTwo">2. Oliva pariatur cliche reprehenderit high life accusamus? </a></h4>
</div>

<div class="panel-collapse collapse" id="collapseTwo">
<div class="panel-body">
<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>

<ul>
<li>Donec id elit non mi porta gravida at eget metus..</li>
<li>Fusce dapibus, tellus ac cursus comodo egetine..</li>
<li>Food truck quinoa nesciunt laborum eiusmod runch..</li>
<li>Donec id elit non mi porta gravida at eget metus..</li>
</ul>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapseThree">3. Enim eiusmod high life accusamus terry richardson? </a></h4>
</div>

<div class="panel-collapse collapse" id="collapseThree">
<div class="panel-body">
<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird.</p>

<ul>
<li>Donec id elit non mi porta gravida at eget metus..</li>
<li>Fusce dapibus, tellus ac cursus comodo egetine..</li>
</ul>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapseFour">4. Livil anim keffiyeh helvetica craft beer labore wesde brunch? </a></h4>
</div>

<div class="panel-collapse collapse" id="collapseFour">
<div class="panel-body">Olif moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapseFive">5. Leggings occaecat craft beer farmto tableraw denim? </a></h4>
</div>

<div class="panel-collapse collapse" id="collapseFive">
<div class="panel-body">
<p>Keffiyeh anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>

<ul>
<li>Donec id elit non mi porta gravida at eget metus..</li>
<li>Fusce dapibus, tellus ac cursus comodo egetine..</li>
<li>Food truck quinoa nesciunt laborum eiusmod runch..</li>
<li>Donec id elit non mi porta gravida at eget metus..</li>
<li>Fusce dapibus, tellus ac cursus comodo egetine..</li>
<li>Food truck quinoa nesciunt laborum eiusmod runch..</li>
</ul>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapseSix">6. Keffiyeh anim keffiyeh helvetica craft beer labore wesse? </a></h4>
</div>

<div class="panel-collapse collapse" id="collapseSix">
<div class="panel-body">Helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Brunch sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapseSeven">7. Helvetica craft beer labore wes anderson cred nesciu ntlife richardson? </a></h4>
</div>

<div class="panel-collapse collapse" id="collapseSeven">
<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</div>
</div>
</div>
</div>
<!--/acc-v1--><!-- End General Questions --><!-- Other Questions -->

<div class="headline">
<h2>Other Questions</h2>
</div>

<div class="panel-group acc-v1" id="accordion-1">
<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapse-One">Collapsible Group Item #1 </a></h4>
</div>

<div class="panel-collapse collapse in" id="collapse-One">
<div class="panel-body">
<div class="row">
<div class="col-md-4"><img alt="" class="img-responsive" src="http://127.0.0.1/laravel/kochabo/public/assets/img/new/img5.jpg" /></div>

<div class="col-md-8">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
</div>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapse-Two">Collapsible Group Item #2 </a></h4>
</div>

<div class="panel-collapse collapse" id="collapse-Two">
<div class="panel-body">
<div class="row">
<div class="col-md-8">
<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>

<ul>
<li>Donec id elit non mi porta gravida at eget metus..</li>
<li>Fusce dapibus, tellus ac cursus comodo egetine..</li>
<li>Food truck quinoa nesciunt laborum eiusmod runch..</li>
</ul>
</div>

<div class="col-md-4"><img alt="" class="img-responsive" src="http://127.0.0.1/laravel/kochabo/public/assets/img/main/6.jpg" /></div>
</div>
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapse-Three">Collapsible Group Item #3 </a></h4>
</div>

<div class="panel-collapse collapse" id="collapse-Three">
<div class="panel-body">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#39;t heard of them accusamus labore sustainable VHS.</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4><a class="accordion-toggle" href="#collapse-Four">Collapsible Group Item #4 </a></h4>
</div>

<div class="panel-collapse collapse" id="collapse-Four">
<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
</div>
</div>
</div>
<!--/acc-v1--><!-- End Other Questions --></div>
<!--/col-md-9-->

<div class="col-md-3"><!-- Contacts -->
<div class="headline">
<h2>Contacts</h2>
</div>

<ul>
<li><a href="#">5B Streat, City 50987 New Town US</a></li>
<li><a href="#">info@example.com</a></li>
<li><a href="#">1(222) 5x86 x97x</a></li>
<li><a href="#">http://www.example.com</a></li>
</ul>
<!-- End Contacts --><!-- Business Hours -->

<div class="headline">
<h2>Business Hours</h2>
</div>

<ul>
<li><strong>Monday-Friday:</strong> 10am to 8pm</li>
<li><strong>Saturday:</strong> 11am to 3pm</li>
<li><strong>Sunday:</strong> Closed</li>
</ul>
<!-- End Business Hours --><!-- Info Block -->

<div class="headline">
<h2>Why we are?</h2>
</div>

<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>

<ul>
<li>Odio dignissimos ducimus</li>
<li>Blanditiis praesentium volup</li>
<li>Eos et accusamus</li>
</ul>
<!-- End Info Block --><!-- Social -->

<div class="magazine-sb-social margin-bottom-20">
<div class="headline headline-md">
<h2>Social Icons</h2>
</div>

<ul>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
</ul>

<div class="clearfix">&nbsp;</div>
</div>
<!-- End Social --></div>
<!--/col-md-3--></div>
<!--/row--></div>
<!--/container--><!--=== End Content Part ===-->

<p>&nbsp;</p>
',
				'created_at' => '2014-04-07 14:49:28',
				'updated_at' => '2014-04-11 10:16:26',
				'is_published' => 1,
			),
			4 => 
			array (
				'id' => 6,
				'title' => 'Sonstiges',
				'content' => '       <div class="tab-v2">
<ul class="nav nav-tabs">
<li class="active"><a href="#home-1" data-toggle="tab">Fotos</a></li>
<li><a href="#profile-1" data-toggle="tab">Impressum</a></li>
<li><a href="#messages-1" data-toggle="tab">AGB\'s</a></li>
<li><a href="#settings-1" data-toggle="tab">Hilfe</a></li>
</ul>                
<div class="tab-content">
<div class="tab-pane active" id="home-1">
<h4>Photo Gallery 1</h4>
<p>Bilder und ClipArt-Objekte können aus vielen verschiedenen Quellen in ein Dokument eingefügt oder kopiert werden. Sie können bei einem Anbieter von ClipArt-Objekten von einer Website heruntergeladen, von einer Webseite kopiert oder aus einem Ordner, in dem Bilder gespeichert sind, eingefügt werden.<br><br>

Sie können auch die Position eines Bilds oder eines ClipArt-Objekts innerhalb des Texts in einem Dokument mithilfe der Befehle Position und Zeilenumbruch ändern.<br><br>

TIPP   Wenn Sie ein Bild von einem Scanner oder einer Kamera einfügen möchten, verwenden Sie die im Lieferumfang des Scanners oder der Kamera enthaltene Software, um das Bild auf den Computer zu übertragen. Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum <strong>ivamus imperdiet</strong> condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque <strong>fermentum vivamus</strong> imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac felis consectetur id. Donec eget orci metusvivamus imperdiet.</p>   <br>

<a class="btn-u" href="../photo_gallery/1" style="float: right">Ansehen</a>
</div>




<div class="tab-pane" id="profile-1">

<h4>Unser Impressum</h4>

<p>Bal blabll bla datnot. Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, <strong>ac adipiscing nunc.</strong> Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac <strong>interdum ullamcorper.</strong></p><br>

<a class="btn-u" href="../page/4" style="float: right">Weiterlesen</a>
</div>

<div class="tab-pane" id="messages-1">
<h4>Allgemeine Geschäftsbedingungen</h4>
<p><img alt="" class="pull-right rgt-img-margin img-width-200" src="assets/img/main/6.jpg"> <strong>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id.</strong> Donec eget orci metus, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, consectetur id. Donec eget orci metus, ac adipiscing nunc. <strong>Pellentesque fermentum</strong>, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p><br>

<a class="btn-u" href="../page/3" style="float: right">Weiterlesen</a>

</div>

<div class="tab-pane" id="settings-1">
<h4>Hilfe</h4>
<p><img alt="" class="pull-right rgt-img-margin img-width-200" src="assets/img/main/1.jpg"> Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, Vivamus Dieser Bereich enthält häufig gestellte Fragen (sogenannte FAQ: "Frequently Asked Questions") und die zugehörigen Antworten zunächst zu den Komponenten der Fachanwendung Abwasser (FAA) des LISA. Diese sogenannten FAQ-Listen dienen der unmittelbaren Unterstützung der Anwender der FAA. <br>Die FAQ-Listen enthalten im Wesentlichen folgende Informationen:<br>

Informationen zum Funktionsumfang<br>       Hinweise zur Bedienung<br>       Allgemeine Tipps zur Arbeit mit der FAA<br>  Hinweise zu bekannten Fehlern und ggf. Workarounds oder Patches hierzu</p>

<a class="btn-u" href="../page/5" style="float: right">Weiterlesen</a>
</div>
</div>
</div>',
				'created_at' => '2014-04-14 10:22:17',
				'updated_at' => '2014-04-14 10:38:46',
				'is_published' => 1,
			),
		));
	}

}
