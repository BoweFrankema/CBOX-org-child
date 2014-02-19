<?php
/**
 * CBOX.org: Feature Overview
 *
 */
?>
	<div class="section-break green testimonials-break">
		<h2>CBOX is a platform for easy and powerful community websites.</h2>
	</div>

<div class="wow slideInLeft curated-plugins homepage-block row">

    <div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/curated-plugins.png">
	</div>

	<div class="column eight">

		<h2>Curated Plugins</h2>
			CBOX helps you to install BuddyPress along with a number of carefully selected and vetted BuddyPress plugins, so that you don't have to worry about which plugins are best and which are compatible with each other.
			<p>
			Besides the curated plugins there are also some recommended plugins you can easily install straight from the CBOX Dashboard. These plugins are not crucial but can be very helpful for your community. Do you already have a WordPress site and a set of favorite plugins? No worries, these will work just fine with Commons in a Box!
	</div>

</div>

<div class="wow slideInRight collaboration-tools homepage-block row">

	<div class="column eight">

		<h2>Collaboration Tools</h2>
Adds collaborative work spaces to your community. Part wiki, part document editing, part shared Dropbox, CBOX provides the tools your community needs to work together.
	<p>
Documents can be linked to Discussion Groups and have different privacy levels. Want to work on a document together? The revision system and one-editor-at-a-time prevention system keeps things backed up and organized. 
	</div>

	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/buddypress-docs.png">
	</div>

</div>

<div class="wow slideInLeft member-profiles homepage-block row">


    <div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/member-profiles.png">
	</div>

	<div class="column eight">

		<h2>Member Profiles</h2>
		
		Members of your community build a public profile where they share personal information. As the Commons administrator, you set up profile fields relevant for your community, such as Academic interests, Positions, and Educational background. 
	<p>
The Member Directory lets members search for other members based on these profile fields, and connect with each other through private messages or public mentions across the community. 

	</div>


</div>

<div class="wow slideInRight discussion-groups homepage-block row">

	<div class="column eight">

		<h2>Discussion Groups</h2>
Boost engagement by letting your community members create and join discussion groups that match their interests. These groups can focus on any topic and include discussion forums, document collaboration and much more. 
		<p>
Want to discuss something in private? Groups can be public, private or completely hidden. Access is granted by the Group Moderator(s) to ensure the right people can access the right groups. 
	</div>

		    <div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discussion-groups.png">
	</div>


</div>


<div class="wow slideInLeft activity-streams homepage-block row">


	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/activity-stream.png">
	</div>

	<div class="column eight">

		<h2>Activity Streams</h2>

Allow members to easily keep track of what's going on across your community with the Activity Stream. New blog posts, forum discussions and group activity are collected in personal streams, and members can quickly get an overview of their colleagues’ activity. 

		<p>

Members can also post status updates about their work progress, share useful resources or simply use the stream to see the latest items published across your network! 
	</div>


</div>

<div class="wow slideInRight forums homepage-block row">

	<div class="column eight">

		<h2>Discussion Forums</h2>
		
For in-depth discussions about various topics, the group forums are the perfect solution. Let community members create topics and see threaded discussion unfold. Create separate support forums to help members get started using your Commons or add a forum to one of your discussion groups. 

		<p>

Once members start to participate in forum discussions, they’ll want to stay current with what’s going on.  Individual members configure how they want their email notifications arrive – separately, or in daily or weekly digests. Even replying to a topic straight from their email is possible! 

	</div>

	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discussion-forums.png">
	</div>

</div>

<div class="wow slideInLeft community-powered homepage-block row">

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

	<div class="column eight">

		<h2>Community Powered</h2>
The Commons In A Box community is full of people that use CBOX to power their networks. Visit the CBOX forums to receive help from our community and leave feedback and suggestions for the development team. You’ll find extensive documentation, development tutorials and various tips and tricks about how to customize your site. 
		<p>
	
		Create your profile on Commonsinabox.org and help us make CBOX better. Are you a developer? Help us improve CBOX and start contributing code through <a href="https://github.com/cuny-academic-commons/" target="_blank">GitHUb</a>. 
	</div>

</div>

<div class="wow slideInRight much-more homepage-block row">

	<div class="column eight">

		<h2>And so much more!</h2>

Commons in a Box is built upon WordPress, the biggest Open Source software in the world. This means that there are hundreds of volunteers all over the world working every day to make WordPress faster, easier and more secure. 
	
	<p>
	
There is a healthy eco-system of freelance developers and consultants who are experienced in working on WordPress projects. By leveraging the power of WordPress and BuddyPress, we're able to provide a free, distributable, and easy-to-install package for creating Commons communities.
		 </p>
	</div>

	
	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discussion-forums.png">
	</div>

</div>