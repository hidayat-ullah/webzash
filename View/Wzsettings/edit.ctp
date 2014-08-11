<?php
/**
 * The MIT License (MIT)
 *
 * Webzash - Easy to use web based double entry accounting software
 *
 * Copyright (c) 2014 Prashant Shah <pshah.mumbai@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
?>
<div class="email form">
<?php

	$drcr_toby_options = array(
		'drcr' => __d('webzash', 'Dr / Cr'),
		'toby' => __d('webzash', 'To / By'),
	);

	echo $this->Form->create('Wzsetting');
	echo $this->Form->input('drcr_toby', array('type' => 'select', 'options' => $drcr_toby_options, 'label' => __d('webzash', 'In entries use')));
	echo $this->Form->input('user_registration', array('type' => 'checkbox', 'label' => __d('webzash', 'User can create accounts')));
	echo $this->Form->input('admin_verification', array('type' => 'checkbox', 'label' => __d('webzash', 'Administrator approval is required for activating user accounts')));
	echo $this->Form->input('email_verification', array('type' => 'checkbox', 'label' => __d('webzash', 'Email verification required for activating user accounts')));

	echo $this->Form->input('email_protocol', array('type' => 'select', 'options' => array('mail' => 'mail', 'sendmail' => 'sendmail', 'smtp' => 'smtp'), 'label' => __d('webzash', 'Outgoing Email Protocol')));
	echo $this->Form->input('email_host', array('label' => __d('webzash', 'Outgoing Email Hostname')));
	echo $this->Form->input('email_port', array('label' => __d('webzash', 'Outgoing Email Port')));
	echo $this->Form->input('email_username', array('label' => __d('webzash', 'Outgoing Email Username')));
	echo $this->Form->input('email_password', array('type' => 'password', 'label' => __d('webzash', 'Outgoing Email Password')));
	echo $this->Form->end(__d('webzash', 'Submit'));
	echo $this->Html->link(__d('webzash', 'Back'), array('controller' => 'admin', 'action' => 'index'));
?>
</div>