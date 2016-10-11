<?php
/**
 * DeletePagePermanently.php
 * lmout82	2008
 * v. 1.0 BETA
 * GPL
*/

if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 ) ;
}

$wgExtensionCredits['other'][] = array(
    'name' => 'DeletePagePermanently',
	'version' => '1.0 BETA',
    'author' => 'lmout82',
    'desciprion' => 'Adds a new delete tab to each page. Pages are deleted permanently from the database.',
	'url'     => 'http://www.mediawiki.org/wiki/Extension:DeletePagePermanently',
);

# Default settings
$wgGroupPermissions['*']         ['deleteperm'] = false;
$wgGroupPermissions['user']      ['deleteperm'] = false;
$wgGroupPermissions['bureaucrat']['deleteperm'] = false;
$wgGroupPermissions['sysop']     ['deleteperm'] = true; 

$wgExtensionMessagesFiles['DeletePagePermanently'] = dirname( __FILE__ ) . '/DeletePagePermanently.i18n.php';

$wgExtensionFunctions[] = 'wfDeletePagePermanently';

function wfDeletePagePermanently()
{
	new wfDeletePagePermanently;
	return true;
}

class wfDeletePagePermanently
{
	function wfDeletePagePermanently()
	{
		global $wgHooks, $wgMessageCache;
	
		wfLoadExtensionMessages( 'DeletePagePermanently' );
		
		$wgMessageCache->addMessage( 'delete_permanently', wfMsg('tab_label'));
		$wgHooks['SkinTemplateContentActions'][] = array(&$this, 'AddContentHook');
		$wgHooks['UnknownAction'][] = array(&$this, 'AddActionHook');
	}
	
	function AddContentHook( &$content_actions )
	{
		global $wgRequest, $wgRequest, $wgTitle, $wgUser;
    
		if(!$wgUser->isAllowed( 'deleteperm' ) )
			return true;
		
		$action = $wgRequest->getText( 'action' );

		if ( $wgTitle->getNamespace() != NS_SPECIAL )
		{
			wfLoadExtensionMessages( 'DeletePagePermanently' );
			$content_actions['delete_permanently'] = array(
				'class' => $action == 'delete_permanently' ? 'selected' : false,
				'text' => wfMsg( 'delete_permanently' ),
				'href' => $wgTitle->getLocalUrl( 'action=delete_permanently' )
			);
		}

		return true;
	}
	
	function AddActionHook( $action, &$wgArticle )
	{
		global $wgOut, $wgUser;
	
		if(!$wgUser->isAllowed( 'deleteperm' ))
		{
			$wgOut->permissionRequired('deleteperm');
			return false;
		}
        
		if ($action != 'delete_permanently' )
			return false;
		
		wfLoadExtensionMessages( 'DeletePagePermanently' );
		
		$dbw = wfGetDB( DB_MASTER );
		$ns  = $wgArticle->mTitle->getNamespace();
		$t   = $wgArticle->mTitle->getDBkey();
		$id  = $wgArticle->mTitle->getArticleID();

		if ( $t == '' || $id == 0 || $ns != NS_MAIN)
			return false;
		
		# Delete restrictions for the page
		$dbw->delete( 'page_restrictions', array ( 'pr_page' => $id ), __METHOD__ );

		# In the table 'revision' : read all the 'rev_text_id' where 'rev_page' = $id
		$rev_text_id = array();
		$result_rev_text_id = $dbw->select ('revision', 'rev_text_id', "rev_page=$id");
		if(false !== $result_rev_text_id)
			while($row = $dbw->fetchObject($result_rev_text_id))
				$rev_text_id[] = $row->rev_text_id;
		
		# In the table 'text' : delete the rows where 'old_id' = 'rev_text_id'
		foreach ($rev_text_id as &$value)
			$dbw->delete('text', array('old_id'=>$value), __METHOD__);
		
		# In the table 'revision' : delete all the revision of the page where 'rev_page' = $id
		$dbw->delete('revision', array('rev_page'=>$id), __METHOD__);
		
		# In the table 'page' : delete the page entry
		$dbw->delete( 'page', array( 'page_id' => $id ), __METHOD__);
		
		# Clean up recent changes entries...
		$dbw->delete( 'recentchanges', array( 'rc_namespace' => $ns, 'rc_title' => $t ), __METHOD__ );
	
		$wgOut->addHTML(wfMsgHtml('del_done')); 
	
		return false;
	}
}
