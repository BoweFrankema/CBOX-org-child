<?php
/**
 * CBOX.org: Feature Overview
 *
 */
?>
	<div class="section-break green testimonials-break">
		<h2>CBOX is a platform for easy and powerful community websites.</h2>
	</div>

<div class="curated-plugins homepage-block row">

    <div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/curated-plugins.png">
	</div>

	<div class="column eight">

		<h2>Curated Plugins</h2>
			CBOX helps you to install BuddyPress along with a number of carefully selected and vetted BuddyPress plugins, so that you don't have to worry about which plugins are best and which are compatible with each other.
			<p>
			Besides the curated plugins there are also some recommended plugins you can easily install straight from the CBOX Dashboard. These plugins are not crucial but can be very helpful for your community. 
	</div>

</div>

<div class="collaboration-tools homepage-block row">

	<div class="column eight">

		<h2>Collaboration Tools</h2>
	Adds collaborative work spaces to your community. Part wiki, part document editing, part shared dropbox, it includes everything your community needs to easily work together on documents. 
	<p>
		Documents can even be linked to Discussion Groups and have different privacy levels. Want to work on a document together? The build in revision system and one-editor-at-a-time prevention system keeps things backed up and organised.
	</div>

	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/buddypress-docs.png">
	</div>

</div>

<div class="member-profiles homepage-block row">


    <div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/member-profiles.png">
	</div>

	<div class="column eight">

		<h2>Member Profiles</h2>
		


	</div>


</div>

<div class="discussion-groups homepage-block row">

	<div class="column eight">

		<h2>Discussion Groups</h2>
		This needs text
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, fugiat, perferendis incidunt consequatur consectetur nam necessitatibus voluptatibus corporis corrupti reiciendis soluta neque aliquid similique enim debitis id minus libero non.
	</div>

		    <div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discussion-groups.png">
	</div>


</div>


<div class="activity-streams homepage-block row">


	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/activity-stream.png">
	</div>

	<div class="column eight">

		<h2>Activity Streams</h2>

		Allow your members to easily keep track of what's going on across your community with the Activity Stream. New Blog posts, forum discussions and group activity is all collected in their personal stream, so they can get an overview of all activity blabla

	</div>


</div>

<div class="forums homepage-block row">

	<div class="column eight">

		<h2>Discussion Forums</h2>

		Commons in a Box is build upon WordPress; the The core software is built by hundreds of community volunteers, and when you’re ready for more there are thousands of <a href="/plugins/">plugins</a> and <a href="/themes/">themes</a> available to transform your site into almost <a href="/showcase/">anything you can imagine</a></p>
	</div>

	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discussion-forums.png">
	</div>

</div>

<div class="community-powered homepage-block row">

	<div class="column eight">

		<h2>Community Powered</h2>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, delectus facilis accusantium nostrum sunt quo quae molestias tenetur minus quasi ad dignissimos esse unde dolorem nam temporibus asperiores dolorum error.
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, fugiat, perferendis incidunt consequatur consectetur nam necessitatibus voluptatibus corporis corrupti reiciendis soluta neque aliquid similique enim debitis id minus libero non.
	</div>

	<div class="column eight">
		<?php if ( bp_has_members( 'user_id=0&type=random&max=15&per_page=15' ) ) : ?>	
			<div id="member-grid" class="avatar-block">
					<?php while ( bp_members() ) : bp_the_member(); ?>
					<div class="item-avatar">
						<a class="user-avatar" href="<?php bp_member_permalink() ?>" title="<?php bp_member_name(); ?>"><?php bp_member_avatar('type=full&width=75&height=75') ?></a>
					</div>
					<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>

</div>

<div class="much-more homepage-block row">

	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discussion-forums.png">
	</div>

	<div class="column eight">

		<h2>And so much more!</h2>

		Commons in a Box is build upon WordPress; the The core software is built by hundreds of community volunteers, and when you’re ready for more there are thousands of <a href="/plugins/">plugins</a> and <a href="/themes/">themes</a> available to transform your site into almost <a href="/showcase/">anything you can imagine</a></p>
	</div>

</div>