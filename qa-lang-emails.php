<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

return array(
	'a_commented_body' => "<dl><dt>Your answer on ^site_title has a new comment by <strong>^c_handle</strong>:</dt><dd><i>^open^c_content^close</i></dd><br><dt>Your answer was:</dt><dd><i>^open^c_context^close</i></dd><br><dt>You may respond by adding your own comment:</dt><dd>^url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'a_commented_subject' => 'Your ^site_title answer has a new comment',

	'a_followed_body' => "<dl><dt>Your answer on ^site_title has a new related question by <strong>^q_handle</strong>:</dt><dd><i>^open^q_title^close</i></dd><br><dt>Your answer was:</dt><dd><i>^open^a_content^close</i></dd><br><dt>Click below to answer the new question:</dt><dd>^url</dd><br><dt>Thank you,</dt><dt>^site_title</dt><dt>^url</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'a_followed_subject' => 'Your ^site_title answer has a related question',

	'a_selected_body' => "<dl><dt>Congratulations! Your answer on ^site_title has been selected as the best by <strong>^s_handle</strong>:</dt><dd><i>^open^a_content^close</i></dd><br><dt>The question was:</dt><dd><i>^open^q_title^close</i></dd><br><dt>Click below to see your answer:</dt><dd>^url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'a_selected_subject' => 'Your ^site_title answer has been selected!',

	'c_commented_body' => "<dl><dt>A new comment by <strong>^c_handle</strong> has been added after your comment on ^site_title:</dt><dd><i>^open^c_content^close</i></dd><br><dt>The discussion is following:</dt><dd><i>^open^c_context^close</i></dd><br><dt>You may respond by adding another comment:</dt><dd>^url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'c_commented_subject' => 'Your ^site_title comment has been added to',

	'confirm_body' => "<dl><dt>Please click below to confirm your email address for ^site_title.<dd>^url</dd></dt><br><dt><strong>Confirmation code: ^code</strong></dt><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'confirm_subject' => '^site_title - Email Address Confirmation',

	'feedback_body' => "<p>Comments:<br>^message</p><p>Name:<br>^name</p><p>Email:<br>^email</p><p>Previous page:<br>^previous</p><p>User:<br>^url</p><p>IP address:<br>^ip</p><p>Browser:<br>^browser</p>",
	'feedback_subject' => '^ feedback',

	'flagged_body' => "<dl><dt>A post by <strong>^p_handle</strong> has received ^flags:</dt><dd><i>^open^p_context^close</i></dd><br><dt>Click below to see the post:</dt><dd>^url</dd><br><dt>Click below to review all flagged posts:</dt><dd>^a_url<br></dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'flagged_subject' => '^site_title has a flagged post',

	'moderate_body' => "<dl><dt>A post by <strong>^p_handle</strong> requires your approval:</dt><dd><i>^open^p_context^close</i></dd><br><dt>Click below to approve or reject the post:</dt><dd>^url</dd><br><dt>Click below to review all queued posts:</dt><dd>^a_url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'moderate_subject' => '^site_title moderation',

	'new_password_body' => "<dl><dt>Your new password for ^site_title is below.</dt><dd><strong>Password: ^password</strong></dd><br><dt>It is recommended to change this password immediately after logging in.</dt><br><dt>Thank you,</dt><dt>^site_title</dt><dt>^url</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'new_password_subject' => '^site_title - Your New Password',

	'private_message_body' => "<dl><dt>You have been sent a private message by <strong>^f_handle</strong> on ^site_title:</dt><dd><i>^open^message^close</i></dd><dd><i>^more</i></dd><br><dt>To block private messages, visit your account page:</dt><dd>^a_url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'private_message_info' => "<p><dl><dt>More information about <strong>^f_handle</strong>:</dt><dd>^url</dd></dl></p><br>",
	'private_message_reply' => "<p><dl><dt>Click below to reply to <strong>^f_handle</strong> by private message:</dt><dd>^url</dd></dl></p>",
	'private_message_subject' => 'Message from ^f_handle on ^site_title',

	'q_answered_body' => "<dl><dt>Your question on ^site_title has been answered by <strong>^a_handle</strong>:</dt><dd><i>^open^a_content^close</i></dd><br><dt>Your question was:</dt><dd><i>^open^q_title^close</i></dd><br><dt>If you like this answer, you may select it as the best:</dt><dd>^url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'q_answered_subject' => 'Your ^site_title question was answered',

	'q_commented_body' => "<dl><dt>Your question on ^site_title has a new comment by <strong>^c_handle</strong>:</dt><dd><i>^open^c_content^close</i></dd><br><dt>Your question was:</dt><dd><i>open^c_context^close</i></dd><br><dt>You may respond by adding your own comment:</dt><dd>^url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'q_commented_subject' => 'Your ^site_title question has a new comment',

	'q_posted_body' => "<dl><dt>A new question has been asked by <strong>^q_handle</strong>:</dt><dd><i>^open^q_title</dd><dd>^q_content^close</i></dd><br><dt>Click below to see the question:</dt><dd>^url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'q_posted_subject' => '^site_title has a new question',

	'remoderate_body' => "<dl><dt>An edited post by <strong>^p_handle</strong> requires your reapproval:</dt><dd><i>^open^p_context^close</i></dd><br><dt>Click below to approve or hide the edited post:</dt><dd>^url</dd><br><dt>Click below to review all queued posts:</dt><dd>^a_url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'remoderate_subject' => '^site_title moderation',

	'reset_body' => "<dl><dt>Please click below to reset your password for ^site_title.</dt><dd>^url</dd><br><dt>Alternatively, enter the code below into the field provided.</dt><dd><strong>Code: ^code</strong></dd><br><dt>If you did not ask to reset your password, please ignore this message.</dt><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'reset_subject' => '^site_title - Reset Forgotten Password',

	'to_handle_prefix' => "^,<p></p>",

	'u_registered_body' => "<p>A new user has registered as <strong>^u_handle</strong>.</p><dl><dt>Click below to view the user profile:</dt><dd>^url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'u_registered_subject' => '^site_title has a new registered user to approve',
	'u_to_approve_body' => "<p>A new user has registered as <strong>^u_handle</strong>.</p><dl><dt>Click below to approve the user:</dt><dd>^url</dd><br><dt>Click below to review all users waiting for approval:</dt><dd>^a_url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",

	'u_approved_body' => "<dl><dt>You can see your new user profile here:</dt><dd>^url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'u_approved_subject' => 'Your ^site_title user has been approved',

	'wall_post_body' => "<dl><dt><strong>^f_handle</strong> has posted on your user wall at ^site_title:</dt><dd><i>^open^post^close</i></dd><br><dt>You may respond to the post here:</dt><dd>^url</dd><br><dt>Thank you,</dt><dt>^site_title</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'wall_post_subject' => 'Post on your ^site_title wall',

	'welcome_body' => "<p>Thank you for registering for ^site_title.</p><dl><dt>^custom^confirmYour login details are as follows:<dd><strong>Username: ^handle</strong></dd><dd><strong>Email: ^email</strong></dd></dt><br><dt>Please keep this information safe for future reference.</dt><br><dt>Thank you,</dt><dt>^site_title</dt><dt>^url</dt></dl><p><small><b><i>Let us know what you think of our services!<br>Takes about a minute to complete our <a href=\"https://www.w3schools.com\">survey</a></i></b></small></p>",
	'welcome_confirm' => "<dl><dt>Please click below to confirm your email address.</dt><dd>^url</dd></dl>",
	'welcome_subject' => 'Welcome to ^site_title!',
);
