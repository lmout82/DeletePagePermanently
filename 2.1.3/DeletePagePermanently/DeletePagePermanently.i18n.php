<?php
/**
 * DeletePagePermanently.i18n.php
 * Internationalisation file
 * based on Version 1.0 BETA from lmout82 (2008)
 * Wolfgang Stöttinger 2008
 * v. 2.0 BETA
 * GPL
 */

$messages = array();

/** English */
$messages['en'] = array(
	'tab_label' => 'Delete permanently',
	'del_impossible' => 'This page can not be deleted permanently',
	'ask_deletion' => 'Are you sure, you want to delete this page permanently? All versions and log entries will be deleted. There is no chance to undo this process after completion.',
	'yes' => 'Yes',
	'del_done' => 'The page has been permanently deleted.',
	'del_not_done' => 'The page has NOT been permanently deleted.',
	'right-deleteperm' => 'Delete pages permanently'
);

/** German (Deutsch) */
$messages['de'] = array(
	'tab_label' => 'Dauerhaft löschen',
	'del_impossible' => 'Diese Seite kann nicht dauerhaft gelöscht werden.',
	'ask_deletion' => 'Sind Sie sicher, dass Sie diese Seite dauerhaft löschen wollen? Es werden alle Versionen und Logeinträge gelöscht. Danach besteht keine Möglichkeit, diesen Vorgang rückgängig zu machen.',
	'yes' => 'Ja',
	'del_done' => 'Diese Seite wurde dauerhaft gelöscht.',
	'del_not_done' => 'Die Seite wurde nicht dauerhaft gelöscht.',
	'right-deleteperm' => 'Dauerhaft löschen'
);

/** French (Français) */
$messages['fr'] = array(
	'tab_label' => 'Supprimer définitivement',
	'del_impossible' => 'Cette page ne peut pas être supprimée définitivement.',
	'ask_deletion' => 'Êtes-vous sûr de vouloir supprimer cette page définitivement ? Toutes les révisions et les entrées du log seront supprimées. Il sera impossible d\’annuler la suppression.',
	'yes' => 'Oui',
	'del_done' => 'La page a été supprimée définitivement.',
	'del_not_done' => 'La page n\’a pas été supprimée définitivement.',
	'right-deleteperm' => 'Supprimer définitivement'
);

/** Italian (italiano) */
$messages['it'] = array(
	'tab_label' => 'Cancella permanentemente',
	'del_impossible' => 'Questa pagina non può essere cancellata permanentemente',
	'ask_deletion' => 'Sei sicuro di voler cancellare permanentemente questa pagina? Tutte le vecchie versioni e i log relativi verranno cancellati. Questo processo una volta completato sarà irreversibile.',
	'yes' => 'Sì',
	'del_done' => 'La pagina è stata cancellata permanentemente con successo.',
	'del_not_done' => 'La pagina NON è stata cancellata permanentemente.',
	'right-deleteperm' => 'Cancella pagine permanentemente'
);

/** Russian (Русский) */
$messages['ru'] = array(
	'tab_label' => 'Удалить с концами',
	'del_impossible' => 'Эту страницу невозможно удалить.',
	'ask_deletion' => 'Вы собираетесь удалить страницу из БД. Все предыдущие версии записи и история изменений будут удалены без возможности восстановления. Вы уверены?',
	'yes' => 'Да, удалить страницу',
	'del_done' => 'Страница удалена.',
	'del_not_done' => 'Страница НЕ удалена.',
	'right-deleteperm' => 'Удалить с концами'
);

/** Polish (Polski) */ 
$messages['pl'] = array( 
	'tab_label' => 'Usuń trwale',
	'del_impossible' => 'Ta strona nie może zostać trwale usunięta',
	'ask_deletion' => 'Czy na pewno chcesz trwale usunąć tę stronę? Wszystkie wersje oraz wpisy w historii zostaną usunięte. Nie będzie możliwości cofnąć tego procesu po jego zakończeniu.',
	'yes' => 'Tak',
	'del_done' => 'Ta strona została trwale usunięta.',
	'del_not_done' => 'Ta strona nie została trwale usunięta.',
	'right-deleteperm' => 'Usuń trwale'
); 

/** Portuguese (Português) */
$messages['pt'] = array(
	'tab_label' => 'Eliminar permanentemente',
	'del_impossible' => 'Esta página não pode ser eliminada permanentemente',
	'ask_deletion' => 'Tem certeza que quer eliminar esta página permanentemente? Todas as versões prévias e registros serão excluídos. Não há como reverter este processo após finalizado.',
	'yes' => 'Sim',
	'del_done' => 'A página foi eliminada permanentemente.',
	'del_not_done' => 'A página NÃO foi eliminada.',
	'right-deleteperm' => 'Eliminar permanentemente'
);
$messages['pt-br'] = $messages['pt']; //No differences here between Brazilian and European Portuguese

/** Spanish (Español-España)*/
$messages['es'] = array(
	'tab_label' => 'Borrar permanentemente',
	'del_impossible' => 'Esta página no se puede eliminar de forma permanente',
	'ask_deletion' => '¿Está seguro, que desea eliminar esta página de forma permanente? Todas las versiones y las entradas de registro serán borradas. No hay ninguna posibilidad de deshacer este proceso después de su finalización.',
	'yes' => 'Si',
	'del_done' => 'La página ha sido borrada permanentemente.',
	'del_not_done' => 'La página no ha sido borrada permanentemente.',
	'right-deleteperm' => 'Borrar permanentemente'
);

/** Japanese（日本語） */
$messages['ja'] = array(
	'tab_label' => '完全削除',
	'del_impossible' => 'このページは完全削除できません。',
	'ask_deletion' => 'あなたはこのページを完全に削除しようとしています。このページに関するデータやログは完全に削除され、恒久的に復元することはできません。',
	'yes' => '上記の内容を完全に理解して完全削除する',
	'del_done' => 'このページは完全に削除されました。',
	'del_not_done' => '完全削除ができませんでした。',
	'right-deleteperm' => 'ページの完全削除'
); 
/** Urdu */
$messages['ur'] = array(
        'tab_label' => 'مستقل حذف کریں',
        'del_impossible' => 'یہ صفحہ مستقلا حذف نہیں ہو سکتا',
        'ask_deletion' => 'کیا آپ واقعی اس صفحے کو مستقلا حذف کرنا چاہتے ہیں؟ تمام دوہرائیاں اور لاگ ساتھ ہی ختم ہو جائیں گے اور ان کی واپسی کا کوئی امکان نہیں۔',
        'yes' => 'جی ہاں',
        'del_done' => 'یہ صفحہ مستقلا حذف کر دیا گیا ہے ',
        'del_not_done' => 'یہ صفحہ مستقلا حذف نہیں کیا جا سکتا۔',
        'right-deleteperm' => 'مستقل حذف'
);

/** Simplified Chinese (简体中文) */
$messages['zh'] = array(
        'tab_label' => '永久删除',
        'del_impossible' => '不允许永久删除这个（类）页面',
        'ask_deletion' => '你确定要永久删除这个页面吗？所有版本、日志记录将一并删除。一旦删除完成后就不能撤销。',
        'yes' => '确认',
        'del_done' => '这个页面已被永久删除。',
        'del_not_done' => '这个页面未被永久删除。',
        'right-deleteperm' => '永久删除页面'
);
$messages['zh-hans'] = $messages['zh-cn'] = $messages['zh-sg'] = $messages['zh-my'] = $messages['zh'];

/** Traditional Chinese (繁體中文) */
$messages['zh-hant'] = array(
        'tab_label' => '永久刪除',
        'del_impossible' => '不允許永久刪除這個（類）頁面',
        'ask_deletion' => '你確定要永久刪除這個頁面嗎？所有版本、日誌記錄將一併刪除。一旦刪除完成後就不能撤銷。',
        'yes' => '確認',
        'del_done' => '這個頁面已被永久刪除。',
        'del_not_done' => '這個頁面未被永久刪除。',
        'right-deleteperm' => '永久刪除頁面'
);
$messages['zh-hk'] = $messages['zh-tw'] = $messages['zh-mo'] = $messages['zh-hant'];
