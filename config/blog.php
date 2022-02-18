<?php

return [
	/*
	 * Configure settings related to the blog.
	 */

	// Can users register for accounts? Note that while disabling this removes the registration route completely, you can still log in by going to the /login route.
	'allowRegistrations' => true, // Default: true

	// Can users leave comments?
	'allowComments' => true, // Default: true

	// Do users have to verify their emails to post comments? Note: make sure that you have set up the mailer before enabling this!
	'requireVerifiedEmailForComments' => false, // Default: false

	// Should the site be in demo mode? (Do NOT use in production)
	'demoMode' => false, // Default: false
];
