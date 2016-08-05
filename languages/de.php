<?php
@define('__transLocale', 'de_DE');

return array(
'UserCP' => 'User Panel',
'AdminCP' => 'Admin Panel',

'Sort_Date'	=> 'Datum',
'Sort_ID'	=> 'ID',

'yes'	=>	'ja',
'Yes'	=>	'Ja',
'no'	=>	'nein',
'No'	=>	'Nein',

'PM_Inbox' => 'Posteingang',
'PM_Outbox' => 'Postausgang',
'PM_Write' => 'Verfassen',
'PM_Outbox_Items' => '{0, plural,'.
	'zero	{Your Outbox is empty!},'.
	'one	{One message:},'.
	'other	{# messages:}
}',
'PM_Outbox_empty' => 'Dein Postausgang ist leer',

'PM_Inbox_Items' => '{0, plural,'.
	'zero	{Your Inbox is empty!},'.
	'one	{One message:},'.
	'other	{# messages:}
}',
'PM_Inbox_empty' => 'Dein Posteingang ist leer',

'PM_Subject' => 'Betreff',
'PM_Sender' => 'Absender',
'PM_Sent' => 'Gesendet',
'PM_Received' => 'Empfangen',
'PM_Recipient' => 'Empfänger',
'PM_question_Delete' => 'Nachricht löschen?',
'PM_confirm_Delete' => 'Nachricht wird gelöscht, sicher?',
'PM_unread' => 'ungelesen',
'PM_ReplySubject' => 'Aw:',
'PM_ReplyMessageHeader' => 'Am {0} schrieb {1}:',
'PM_WritePM' => 'Nachricht verfassen',
//'PM_Messaging' => 'Nachrichten',

// using php strftime
'Month_Calendar' => '{0,date,custom,%B %Y}',
'Weekday' => '{0,date,custom,%A}',

/*
'Menu_Profile' => 'Profil',
'Menu_Messaging' => 'Nachrichten (PM)',
'Menu_Authoring' => 'Authoring',
'Menu_MyLibrary' => 'Mein Archiv',
'Menu_Reviews' => 'Bewertungen',
'Menu_Preferences' => 'Preferences',
*/

// User elements
'UserField_Type1'	=> 'URL',			// _FIELDURL
'UserField_Type2'	=> 'Auswahlfeld',	// _FIELDSELECT
'UserField_Type3'	=> 'Ja/Nein',		// _FIELDYESNO
'UserField_Type4'	=> 'ID mit URL',	// _FIELDIDURL
'UserField_Type5'	=> 'Custom Code',	// _FIELDCUSTOM
'UserField_Type6'	=> 'Text',			// _TEXT









// UserCP elements
'UserMenu_Profile' => 'Profil',
'UserMenu_Message' => 'Nachrichten',
'UserMenu_PMInbox' => 'Posteingang',
'UserMenu_PMOutbox' => 'Postausgang',
'UserMenu_PMWrite' => 'Verfassen',
'UserMenu_Authoring' => 'Authoring',
'UserMenu_MyLibrary' => 'My Library',
	'Library_Favourites' => '{0, plural,'.
		'other	{Favourites (#)}
	}',
	'AddFavourite'	=>	'Add favourite',
	'Library_Bookmarks' => '{0, plural,'.
		'other	{Bookmarks (#)}
	}',
	'AddBookmark'	=> 'Add bookmark',
	'Library_Recommendations' => '{0, plural,'.
		'other	{Recommendations (#)}
	}',
'UserMenu_Reviews' => 'Reviews',
'UserMenu_Preferences' => 'Preferences',

'UserMenu_AddStory' => 'Add Story',
'UserMenu_Curator' => 'Betreuer',

// AdminCP Home elements
'AdminMenu_General' => 'Allgemeine Einstellungen',

'AdminMenu_Home' => 'Home',
'AdminMenu_Manual' => 'Handbuch',
'AdminMenu_CustomPages' => 'Custom Pages',
'AdminMenu_News' => 'News',
'AdminMenu_Modules' => 'Module',
'AdminMenu_Shoutbox' => 'Shoutbox',

'AdminMenu_Settings' => 'Einstellungen',
'AdminMenu_Server' => 'Server',
	'AdminMenu_DateTime'	=> 'Datum und Uhrzeit',
'AdminMenu_Registration' => 'Registrierung',
	'AdminMenu_AntiSpam'	=> 'Spam-Schutz',
'AdminMenu_Security'	=> 'Sicherheit',
'AdminMenu_Layout' => 'Layout',
'AdminMenu_Themes' => 'Themes',
'AdminMenu_Icons' => 'Icons',
'AdminMenu_Language' => 'Sprachen',

'AdminMenu_Members' => 'Members',
	'AdminMenu_Search' => 'Suchen',
	'AdminMenu_Pending' => 'Pending',
	'AdminMenu_Groups' => 'Gruppen',
	'AdminMenu_Profile' => 'Profil',
	'AdminMenu_Team' => 'Team',

'AdminMenu_Archive' => 'Archive',
	'AdminMenu_Intro' => 'Intro',
'AdminMenu_Featured' => 'Featured',
	'AdminMenu_Future' => 'Zukünftige',
	'AdminMenu_Current' => 'Current',
	'AdminMenu_Past' => 'Past',
'AdminMenu_Characters' => 'Characters',
'AdminMenu_Tags' => 'Tags',
	'AdminMenu_Edit' => 'Edit',
	'AdminMenu_Taggroups' => 'Groups',
	'AdminMenu_Tagcloud' => 'Cloud',
'AdminMenu_Categories' => 'Categories',
'ACP_Categories_Success_Deleted' => 'Kategories "{0}" wurde erfolgreich gelöscht!',
'ACP_Categories_Error_notEmpty' => 'Kann Kategories "{0}" nicht löschen, da sie nicht leer ist!',
'ACP_Categories_Error_DBError' => 'Konnte Kategories "{0}" wegen Datenbankfehler nicht löschen!',
'ACP_Categories_Error_badID' => 'Kann die Kategories nicht löschen, keine gültige ID gefunden!',

'AdminMenu_Stories' => 'Stories',
'AdminMenu_Pending' => 'Pending',
'AdminMenu_Edit' => 'Edit',
'AdminMenu_Add' => 'Add',


'Welcome' => 'Willkommen',
'Shoutbox' => 'Shoutbox',

// Story view'
'Stories' => 'Stories',
'St_NewStories' => 'Neue Geschichten',
'St_RandomStory' => 'Zufällige Geschichte',
'St_RandomStories' => 'Zufällige Geschichten',
'St_FeaturedStory' => 'Featured Story',
'St_FeaturedStories' => 'Featured Stories',

'St_BookmarkAdd'		=> 'Diese Geschichte hat kein Lesezeichen.
Hier clicken um eines zu setzen.',
'St_BookmarkRemove'		=> 'Diese Geschichte hat ein Lesezeichen.
Hier clicken um es zu entfernen.',
'St_FavouriteAdd'		=> 'Diese Geschichte gehört nicht zu den Favoriten.
Hier clicken um hinzuzufügen.',
'St_FavouriteRemove'	=> 'Diese Geschichte gehört zu den Favoriten.
Hier clicken um zu entfernen.',

'St_NoTags' => 'Keine Tags gesetzt',
'St_Published' => 'Veröffentlicht',
'St_Updated'	=> 'Zuletzt überarbeitet',
'St_Chapters' => 'Kapitel',
'St_Words' => 'Wörter',
'St_Status' => 'Status',
'St_WIP' => 'Work in progress',
'St_Completed' => 'Abgeschlossen',
'Characters' => 'Charaktere',
'Author_Notes' => 'Anmerkungen des Autors',
'Summary'	=> 'Zusammenfassung',

'Review_Link' => '{0, plural,'.
	'zero	{Noch keine ... schreibe die erste!},'.
	'one	{Eine Review},'.
	'other	{# Reviews}
}',
'Review_Link_TOC' => '{0, plural,'.
	'zero	{Keine Reviews},'.
	'one	{Eine Review},'.
	'other	{# Reviews}
}',

'Search' => 'Suche',
'Tagcloud' => 'Tagcloud',

// Feedback
'Feedback_Not_Logged_In' => 'Du musst angemeldet sein, um eine Review oder einen Kommentar zu verfassen.',

// Archiv News'
'News_Box' => 'Archiv News',
'News_Archive' => 'Alle News lesen',
'News_writtenby' => 'geschrieben von',

// Archiv Stats'
'AS_ArchiveStats' => 'Archiv Statistiken',
'AS_Members' => 'Mitglieder',
'AS_Authors' => 'Autoren',
'AS_Stories' => 'Stories',
'AS_Chapters' => 'Kapitel',
'AS_Reviews' => 'Reviews',
'AS_Online' => 'Wer online ist',
'AS_Guests' => 'Gäste',
'AS_Users' => 'Mitglieder',
'AS_LatestMember' => 'Neuestes Mitglied',

'Status_Changes' => '{0, plural,'.
	'zero	{Keine Änderungen.},'.
	'one	{Ein Element geändert.},'.
	'other	{# Elemente geändert.}
}',
);

?>