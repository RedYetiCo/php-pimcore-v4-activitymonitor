<?php

	#
	# Add this to: /website/config/startup.php
	#

	// Mail notifications on document changes...
	\Pimcore::getEventManager()->attach( 'document.postAdd', function( \Zend_EventManager_Event $e ) {
		$document = $e->getTarget();
		$mail = new \Pimcore\Mail();
		$mail->addTo( 'me@my-email.com' );
		$mail->setSubject( 'Site Update! website.com - Document Added' );
		$mail->setBodyText( "\nDocument Added: ".$document->getFullPath() );
		$mail->send();
	} );
	\Pimcore::getEventManager()->attach( 'document.postUpdate', function( \Zend_EventManager_Event $e ) {
		$document = $e->getTarget();
		$mail = new \Pimcore\Mail();
		$mail->addTo( 'me@my-email.com' );
		$mail->setSubject( 'Site Update! website.com - Document Updated' );
		$mail->setBodyText( "\nDocument Updated: ".$document->getFullPath() );
		$mail->send();
	} );
	\Pimcore::getEventManager()->attach( 'document.postDelete', function( \Zend_EventManager_Event $e ) {
		$document = $e->getTarget();
		$mail = new \Pimcore\Mail();
		$mail->addTo( 'me@my-email.com' );
		$mail->setSubject( 'Site Update! website.com - Document Deleted' );
		$mail->setBodyText( "\nDocument Deleted: ".$document->getFullPath() );
		$mail->send();
	} );

	// Mail notifications on object changes...
	\Pimcore::getEventManager()->attach( 'object.postAdd', function( \Zend_EventManager_Event $e ) {
		$object = $e->getTarget();
		$mail = new \Pimcore\Mail();
		$mail->addTo( 'me@my-email.com' );
		$mail->setSubject( 'Site Update! website.com - Object Added' );
		$mail->setBodyText( "\nObject Added: ".$object->getFullPath() );
		$mail->send();
	} );
	\Pimcore::getEventManager()->attach( 'object.postUpdate', function( \Zend_EventManager_Event $e ) {
		$object = $e->getTarget();
		$mail = new \Pimcore\Mail();
		$mail->addTo( 'me@my-email.com' );
		$mail->setSubject( 'Site Update! website.com - Object Updated' );
		$mail->setBodyText( "\nObject Updated: ".$object->getFullPath() );
		$mail->send();
	} );
	\Pimcore::getEventManager()->attach( 'object.postDelete', function( \Zend_EventManager_Event $e ) {
		$object = $e->getTarget();
		$mail = new \Pimcore\Mail();
		$mail->addTo( 'me@my-email.com' );
		$mail->setSubject( 'Site Update! website.com - Object Deleted' );
		$mail->setBodyText( "\nObject Deleted: ".$object->getFullPath() );
		$mail->send();
	} );

	// Mail notifications on asset changes...
	\Pimcore::getEventManager()->attach( 'asset.postAdd', function( \Zend_EventManager_Event $e ) {
		$asset = $e->getTarget();
		$mail = new \Pimcore\Mail();
		$mail->addTo( 'me@my-email.com' );
		$mail->setSubject( 'Site Update! website.com - Asset Added' );
		$mail->setBodyText( "\nAsset Added: ".$asset->getFullPath() );
		$mail->send();
	} );
	\Pimcore::getEventManager()->attach( 'asset.postUpdate', function( \Zend_EventManager_Event $e ) {
		$asset = $e->getTarget();
		$mail = new \Pimcore\Mail();
		$mail->addTo( 'me@my-email.com' );
		$mail->setSubject( 'Site Update! website.com - Asset Updated' );
		$mail->setBodyText( "\nAsset Updated: ".$asset->getFullPath() );
		$mail->send();
	} );
	\Pimcore::getEventManager()->attach( 'asset.postDelete', function( \Zend_EventManager_Event $e ) {
		$asset = $e->getTarget();
		$mail = new \Pimcore\Mail();
		$mail->addTo( 'me@my-email.com' );
		$mail->setSubject( 'Site Update! website.com - Asset Deleted' );
		$mail->setBodyText( "\nAsset Deleted: ".$asset->getFullPath() );
		$mail->send();
	} );
