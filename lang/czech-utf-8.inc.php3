<?php
/* $Id$ */

/**
 * Czech language file by
 *   Michal Čihař <nijel at users.sourceforge.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('bajtů', 'kB', 'MB', 'GB');

$day_of_week = array('Neděle', 'Pondělí', 'Úterý', 'Středa', 'Čtvrtek', 'Pátek', 'Sobota');
$month = array('ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosince');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%a %e. %b %Y, %H:%M';

$strAPrimaryKey = 'V&nbsp;tabulce %s byl vytvořen primární klíč';
$strAccessDenied = 'Přístup odepřen';
$strAction = 'Akce';
$strAddDeleteColumn = 'Přidat/Smazat sloupec';
$strAddDeleteRow = 'Přidat/Smazat řádek s podmínkou';
$strAddNewField = 'Přidat nový sloupec';
$strAddPriv = 'Přidat nové privilegium';
$strAddPrivMessage = 'Oprávnění bylo přidáno.';
$strAddSearchConditions = 'Přidat vyhledávací parametry (obsah dotazu po příkazu "WHERE"):';
$strAddToIndex = 'Přidat do indexu  &nbsp;%s&nbsp;sloupců';
$strAddUser = 'Přidat nového uživatele';
$strAddUserMessage = 'Uživatel byl přidán.';
$strAffectedRows = 'Ovlivněné řádky:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Zpět';
$strAfterInsertNewInsert = 'Vložit další řádek';
$strAll = 'Všechno';
$strAllTableSameWidth = 'zobrazit všechny tabulky stejnou šířkou?';
$strAlterOrderBy = 'Změnit pořadí tabulky podle';
$strAnIndex = 'K&nbsp;tabulce %s byl přidán index';
$strAnalyzeTable = 'Analyzovat tabulku';
$strAnd = 'a';
$strAny = 'Jakýkoliv';
$strAnyColumn = 'Jakýkoliv sloupec';
$strAnyDatabase = 'Jakákoliv databáze';
$strAnyHost = 'Jakýkoliv počítač';
$strAnyTable = 'Jakákoliv tabulka';
$strAnyUser = 'Jakýkoliv uživatel';
$strAscending = 'Vzestupně';
$strAtBeginningOfTable = 'Na začátku tabulky';
$strAtEndOfTable = 'Na konci tabulky';
$strAttr = 'Vlastnosti';

$strBack = 'Zpět';
$strBeginCut = 'ZAČÁTEK VÝPISU';
$strBeginRaw = 'ZAČÁTEK VÝPISU';
$strBinary = ' Binární ';
$strBinaryDoNotEdit = ' Binární - neupravujte ';
$strBookmarkDeleted = 'Položka byla smazána z&nbsp;oblíbených.';
$strBookmarkLabel = 'Název';
$strBookmarkQuery = 'Oblíbený SQL dotaz';
$strBookmarkThis = 'Přidat tento SQL dotaz do oblíbených';
$strBookmarkView = 'Jen zobrazit';
$strBrowse = 'Projít';
$strBzip = '"zabzipováno"';

$strCantLoadMySQL = 'nelze nahrát rozšíření pro MySQL,<br />prosím zkontrolujte nastavení PHP.';
$strCantLoadRecodeIconv = 'Nelze nahrát rozšíření iconv ani recode potřebná pro převod znakových sad. Upravte nastavení php tak aby umožňovalo použít tyto rozšíření nebo vypněte převod znakových sad v phpMyAdminu.';
$strCantRenameIdxToPrimary = 'Index nemůžete přejmenovat na "PRIMARY"!';
$strCantUseRecodeIconv = 'Nelze použít funkce iconv ani libiconv ani recode_string, přestože rozšíření jsou nahrána. Zkontrolujte nastavení php.';
$strCardinality = 'Mohutnost';
$strCarriage = 'Návrat vozíku (CR): \\r';
$strChange = 'Změnit';
$strChangeDisplay = 'Zvolte které sloupce zobrazit';
$strChangePassword = 'Změnit heslo';
$strCharsetOfFile = 'Znaková sada souboru:';
$strCheckAll = 'Zaškrtnout vše';
$strCheckDbPriv = 'Zkontrolovat oprávnění pro databázi';
$strCheckTable = 'Zkontrolovat tabulku';
$strChoosePage = 'Zvolte stránku, kterou chcete změnit';
$strColComFeat = 'Zobrazuji komentáře sloupců';
$strColumn = 'Sloupec';
$strColumnNames = 'Názvy sloupců';
$strComments = 'Komentáře';
$strCompleteInserts = 'Uplné inserty';
$strConfigFileError = 'phpMyAdmin nemohl načíst konfigurační soubor!<br />Tato chyba může nastat pokud v&nbsp;něm php najde chybu nebo nemůže tento soubor najít.<br />Po kliknutí na následující odkaz se konfigurace spustí a budou zobrazeny informace o&nbsp;chybě, ke které došlo. Pak opravte tuto chybu (nejčastěji se jedná o chybějící středník).<br />Pokud získáte prázdnou stránku, všechno je v pořádku.';
$strConfigureTableCoord = 'Prosím nastavte souřadnice pro tabulku %s';
$strConfirm = 'Opravdu chcete toto provést?';
$strCookiesRequired = 'Během tohoto kroku musíte mít povoleny cookies.';
$strCopyTable = 'Kopírovat tabulku do (databáze<b>.</b>tabulka):';
$strCopyTableOK = 'Tabulka %s byla zkopírována do %s.';
$strCreate = 'Vytvořit';
$strCreateIndex = 'Vytvořit index na&nbsp;%s&nbsp;sloupcích';
$strCreateIndexTopic = 'Vytvořit nový index';
$strCreateNewDatabase = 'Vytvořit novou databázi';
$strCreateNewTable = 'Vytvořit novou tabulku v&nbsp;databázi %s';
$strCreatePage = 'Vytvořit novou stránku';
$strCreatePdfFeat = 'Vytváření PDF';
$strCriteria = 'Podmínka';

$strData = 'Data';
$strDataOnly = ' Jen data';
$strDatabase = 'Databáze ';
$strDatabaseHasBeenDropped = 'Databáze %s byla zrušena.';
$strDatabaseWildcard = 'Databáze (zástupné znaky povoleny):';
$strDatabases = 'databáze';
$strDatabasesStats = 'Statistiky databází';
$strDefault = 'Výchozí';
$strDelete = 'Smazat';
$strDeleteFailed = 'Smazání selhalo!';
$strDeleteUserMessage = 'Byl smazán uživatel %s.';
$strDeleted = 'Řádek byl smazán';
$strDeletedRows = 'Smazané řádky:';
$strDescending = 'Sestupně';
$strDisabled = 'Vypnuto';
$strDisplay = 'Zobrazit';
$strDisplayFeat = 'Zobrazení funkcí';
$strDisplayOrder = 'Seřadit podle:';
$strDisplayPDF = 'Zobrazit jako schéma v PDF';
$strDoAQuery = 'Provést "dotaz podle příkladu" (zástupný znak: "%")';
$strDoYouReally = 'Opravdu si přejete vykonat příkaz';
$strDocu = 'Dokumentace';
$strDrop = 'Odstranit';
$strDropDB = 'Odstranit databázi %s';
$strDropTable = 'Smazat tabulku';
$strDumpXRows = 'Vypsat %s řádků od %s.';
$strDumpingData = 'Dumpuji data pro tabulku';
$strDynamic = 'dynamický';

$strEdit = 'Upravit';
$strEditPDFPages = 'Upravit PDF stránky';
$strEditPrivileges = 'Upravit oprávnění';
$strEffective = 'Efektivní';
$strEmpty = 'Vyprázdnit';
$strEmptyResultSet = 'MySQL vrátil prázdný výsledek (tj. nulový počet řádků).';
$strEnabled = 'Zapnuto';
$strEnd = 'Konec';
$strEndCut = 'KONEC VÝPISU';
$strEndRaw = 'KONEC VÝPISU';
$strEnglishPrivileges = 'Poznámka: názvy oprávnění v&nbsp;MySQL jsou uváděny anglicky';
$strError = 'Chyba';
$strExplain = 'Vysvětlit (EXPLAIN) SQL';
$strExport = 'Export';
$strExportToXML = 'Export do XML';
$strExtendedInserts = 'Rozšířené inserty';
$strExtra = 'Extra';

$strField = 'Sloupec';
$strFieldHasBeenDropped = 'Sloupec %s byl odstraněn';
$strFields = 'Počet sloupců';
$strFieldsEmpty = ' Nebyl zadán počet sloupců! ';
$strFieldsEnclosedBy = 'Názvy sloupců uzavřené do';
$strFieldsEscapedBy = 'Názvy sloupců escapovány';
$strFieldsTerminatedBy = 'Sloupce oddělené';
$strFixed = 'pevný';
$strFlushTable = 'Vyprázdnit vyrovnávací paměť pro tabulku ("FLUSH")';
$strFormEmpty = 'Chybějící hodnota ve formuláři!';
$strFormat = 'Formát';
$strFullText = 'Celé texty';
$strFunction = 'Funkce';

$strGenBy = 'Vygeneroval';
$strGenTime = 'Vygenerováno';
$strGeneralRelationFeat = 'Obecné funkce relací';
$strGo = 'Proveď';
$strGrants = 'Oprávnění';
$strGzip = '"zagzipováno"';

$strHasBeenAltered = 'byla změněna.';
$strHasBeenCreated = 'byla vytvořena.';
$strHaveToShow = 'Musíte volit alespoň jeden sloupec, který chcete zobrazit.';
$strHome = 'Hlavní strana';
$strHomepageOfficial = 'Oficiální stránka phpMyAdmina';
$strHomepageSourceforge = 'Nová stránka phpMyAdmina';
$strHost = 'Počítač';
$strHostEmpty = 'Jméno počítače je prázdné!';

$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Pokud si přeješ natáhnout jenom určité sloupce z tabulky, specifikuj je jako seznam sloupců oddělených čárkou.';
$strIgnore = 'Ignorovat';
$strInUse = 'právě se používá';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s byl odstraněn';
$strIndexName = 'Jméno indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strIndexes = 'Indexy';
$strInsecureMySQL = 'Váš konfigurační soubor obsahuje nastavení (uživatel root bez hesla), které je výchozí pro MySQL. Váš MySQL server s&nbsp;tímto výchozím nastavením je snadno napadnutelný, a proto byste měli změnit tuto nastavení a tím podstatně zvýšit bezpečnost Vašeho serveru.';  
$strInsert = 'Vložit';
$strInsertAsNewRow = 'Vložit jako nový řádek';
$strInsertNewRow = 'Vložit nový řádek';
$strInsertTextfiles = 'Vložit textové soubory do tabulky';
$strInsertedRows = 'Vloženo řádků:';
$strInstructions = 'Instrukce';
$strInvalidName = '"%s" je rezervované slovo a proto ho nemůžete požít jako jméno databáze/tabulky/sloupce.';

$strKeepPass = 'Neměnit heslo';
$strKeyname = 'Klíčovy název';
$strKill = 'Zabít';

$strLength = 'Délka';
$strLengthSet = 'Délka/Množina*';
$strLimitNumRows = 'záznamu na stránku';
$strLineFeed = 'Ukončení řádku (Linefeed): \\n';
$strLines = 'Řádek';
$strLinesTerminatedBy = 'Řádky ukončené';
$strLinkNotFound = 'Odkaz nenalezen';
$strLinksTo = 'Odkazuje na';
$strLocationTextfile = 'Umístění textového souboru';
$strLogPassword = 'Heslo:';
$strLogUsername = 'Jméno:';
$strLogin = 'Přihlášení';
$strLogout = 'Odhlásit se';

$strMissingBracket = 'Chybí závorka';
$strModifications = 'Změny byly uloženy';
$strModify = 'Úpravy';
$strModifyIndexTopic = 'Upravit index';
$strMoveTable = 'Přesunout tabulku do (databáze<b>.</b>tabulka):';
$strMoveTableOK = 'Tabulka %s byla přesunuta do %s.';
$strMySQLCharset = 'Znaková sada v MySQL';
$strMySQLReloaded = 'MySQL znovu načteno.';
$strMySQLSaid = 'MySQL hlásí: ';
$strMySQLServerProcess = 'MySQL %pma_s1% spuštěné na %pma_s2%, přihlášen %pma_s3%';
$strMySQLShowProcess = 'Zobrazit procesy';
$strMySQLShowStatus = 'Ukázat MySQL informace o&nbsp;běhu';
$strMySQLShowVars = 'Ukázat MySQL systémové proměnné';

$strName = 'Název';
$strNext = 'Další';
$strNo = 'Ne';
$strNoDatabases = 'Žádné databáze';
$strNoDescription = 'žádný popisek';
$strNoDropDatabases = 'Příkaz "DROP DATABASE" je vypnutý.';
$strNoExplain = 'Bez vysvětlení (EXPLAIN) SQL';
$strNoFrames = 'phpMyAdmin se lépe používá v&nbsp;prohlížeči podporujícím rámy ("FRAME").';
$strNoIndex = 'Žádný index nebyl definován!';
$strNoIndexPartsDefined = 'Žádná část indexu nebyla definována!';
$strNoModification = 'Žádná změna';
$strNoPassword = 'Žádné heslo';
$strNoPhp = 'Bez PHP kódu';
$strNoPrivileges = 'Žádná oprávnění';
$strNoQuery = 'Žádný SQL dotaz!';
$strNoRights = 'Nemáte dostatečná práva na provedení této akce!';
$strNoTablesFound = 'V&nbsp;databázi nebyla nalezena ani jedna tabulka.';
$strNoUsersFound = 'Žádný uživatel nenalezen.';
$strNoValidateSQL = 'Bez kontroly SQL';
$strNone = 'Žádný';
$strNotNumber = 'Toto není číslo!';
$strNotOK = 'není OK';
$strNotSet = '<b>%s</b> tabulka nenalezena nebo není nastavena v&nbsp;%s';
$strNotValidNumber = ' není platné číslo řádku!';
$strNull = 'Nulový';
$strNumSearchResultsInTable = '%s odpovídající(ch) záznam(ů) v&nbsp;tabulce <i>%s</i>';
$strNumSearchResultsTotal = '<b>Celkem:</b> <i>%s</i> odpovídající(ch) záznam(ů)';

$strOK = 'OK';
$strOftenQuotation = 'Často uvozující znaky. Volitelně znamená, že pouze položky u kterých je to nutné (obvykle typu CHAR a VARCHAR) jsou uzavřeny do uzavíracích znaků.';
$strOperations = 'Úpravy';
$strOptimizeTable = 'Optimalizovat tabulku';
$strOptionalControls = 'Volitelné. Určuje jak zapisovat nebo číst speciální znaky.';
$strOptionally = 'Volitelně';
$strOptions = 'Vlastnosti';
$strOr = 'nebo';
$strOverhead = 'Navíc';

$strPHPVersion = 'Verze PHP';
$strPageNumber = 'Strana číslo:';
$strPartialText = 'Zkrácené texty';
$strPassword = 'Heslo';
$strPasswordEmpty = 'Heslo je prázdné!';
$strPasswordNotSame = 'Hesla nejsou stejná!';
$strPdfDbSchema = 'Schéma databáze "%s" - Strana %s';
$strPdfInvalidPageNum = 'Nedefinované číslo stránky v PDF!';
$strPdfInvalidTblName = 'Tabulka "%s" neexistuje!';
$strPdfNoTables = 'žádné tabulky';
$strPhp = 'Zobrazit PHP kód';
$strPmaDocumentation = 'Dokumentace phpMyAdmina';
$strPmaUriError = 'Parametr <tt>$cfg[\'PmaAbsoluteUri\']</tt> MUSÍ být nastaven v&nbsp;konfiguračním souboru!';
$strPos1 = 'Začátek';
$strPrevious = 'Předchozí';
$strPrimary = 'Primární';
$strPrimaryKey = 'Primární klíč';
$strPrimaryKeyHasBeenDropped = 'Primární klíč byl odstraněn';
$strPrimaryKeyName = 'Jméno primárního klíče musí být "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musí</b> být jméno <b>pouze</b> primárního klíče!)';
$strPrintView = 'Náhled k vytištění';
$strPrivileges = 'Oprávnění';
$strProperties = 'Vlastnosti';

$strQBE = 'Dotaz';
$strQBEDel = 'smazat';
$strQBEIns = 'přidat';
$strQueryOnDb = 'SQL dotaz na databázi <b>%s</b>:';

$strReType = 'Napsat znovu';
$strRecords = 'Záznamů';
$strReferentialIntegrity = 'Zkontrolovat integritu odkazů:';
$strRelationNotWorking = 'Některé funkce pro práci s&nbsp;propojenými tabulkami byly vypnuty. %sZde%s zjistíte proč.';
$strRelationView = 'Zobrazit relace';
$strReloadFailed = 'Znovunačtení MySQL selhalo.';
$strReloadMySQL = 'Znovunačtení MySQL';
$strRememberReload = 'Nezapomeňte znovu načíst server.';
$strRenameTable = 'Přejmenovat tabulku na';
$strRenameTableOK = 'Tabulka %s byla přejmenována na %s';
$strRepairTable = 'Opravit tabulku';
$strReplace = 'Přepsat';
$strReplaceTable = 'Přepsat data tabulky souborem';
$strReset = 'Původní (reset)';
$strRevoke = 'Zrušit';
$strRevokeGrant = 'Zrušit povolení přidělovat práva';
$strRevokeGrantMessage = 'Bylo zrušeno oprávnění přidělovat práva pro %s';
$strRevokeMessage = 'Byla zrušena práva pro %s';
$strRevokePriv = 'Zrušit práva';
$strRowLength = 'Délka řádku';
$strRowSize = ' Velikost řádku ';
$strRows = 'Řádků';
$strRowsFrom = 'řádků začínající od';
$strRowsModeHorizontal = 'vodorovném';
$strRowsModeOptions = 've %s režimu a opakovat hlavičky po %s řádcích.';
$strRowsModeVertical = 'svislém';
$strRowsStatistic = 'Statistika řádků';
$strRunQuery = 'Provést dotaz';
$strRunSQLQuery = 'Spustit SQL dotaz(y) na databázi %s';
$strRunning = 'na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Je možné, že jste našli chybu v SQL parseru. Prosím prozkoumejte podrobně SQL dotaz, především jestli jsou správně uvozovky a jestli nejsou proházené. Další možnost selhání je pokud nahráváte soubor s binárními daty nezapsanými v uvozovkách. Můéžete také vyzkoušet příkazovou řádku MySQL. Níže uvedený výstup z MySQL serveru (pokud je nějaký) Vám také může pomoci při zkoumání problému. Pokud stále máte problémy nebo pokud SQL parser ohlásí chybu u dotazu, který na příkazové řádce funguje, prosím pokuste se zredukovat dotaz na co nejmenší, ve kterém se problém ještě vyskytne, a ohlašte chybu na stránkách phpMyAdmina spolu se sekcí VÝPIS uvedenou níže:';
$strSQLParserUserError = 'Pravděpodobně máte v&nbsp;SQL dotazu chybu. Níže uvedený výstup MySQL serveru (pokud je nějaký) Vám také může pomoci při zkoumání problému';
$strSQLQuery = 'SQL-dotaz';
$strSQLResult = 'Výsledek SQL dotazu';
$strSQPBugInvalidIdentifer = 'Chybný identifikátor';
$strSQPBugUnclosedQuote = 'Neuzavřené uvozovky';
$strSQPBugUnknownPunctuation = 'Neznámé interpunkční znaménko';
$strSave = 'Ulož';
$strScaleFactorSmall = 'Měřítko je příliš malé, aby se schéma vešlo na jednu stránku';
$strSearch = 'Vyhledávání';
$strSearchFormTitle = 'Vyhledávání v&nbsp;databázi';
$strSearchInTables = 'V&nbsp;tabulkách:';
$strSearchNeedle = 'Slova nebo hodnoty, které chcete vyhledat (zástupný znak: "%"):';
$strSearchOption1 = 'alespoň jedno ze slov';
$strSearchOption2 = 'všechna slova';
$strSearchOption3 = 'přesnou frázi';
$strSearchOption4 = 'jako regulární výraz';
$strSearchResultsFor = 'Výsledny vyhledávání pro "<i>%s</i>" %s:';
$strSearchType = 'Najít:';
$strSelect = 'Vybrat';
$strSelectADb = 'Prosím vyberte databázi';
$strSelectAll = 'Vybrat vše';
$strSelectFields = 'Zvolte sloupec (alespoň jeden):';
$strSelectNumRows = 'v&nbsp;dotazu';
$strSelectTables = 'Vybrat tabulky';
$strSend = 'Poslat';
$strServerChoice = 'Výběr serveru';
$strServerVersion = 'Verze MySQL';
$strSetEnumVal = 'Pokud je sloupec typu "enum" nebo "set", zadávejte hodnoty v&nbsp;následujícím formátu: \'a\',\'b\',\'c\'...<br />Pokud potřebujete zadat zpětné lomítko ("\") nebo jednoduché uvozovky ("\'") mezi těmito hodnotami, napište před ně zpětné lomítko (příklad: \'\\\\xyz\' nebo \'a\\\'b\').';
$strShow = 'Zobrazit';
$strShowAll = 'Zobrazit vše';
$strShowColor = 'Barevné šipky';
$strShowCols = 'Zobrazit sloupce';
$strShowGrid = 'Zobrazit mřížku';
$strShowPHPInfo = 'Zobrazit informace o&nbsp;PHP';
$strShowTableDimension = 'Rozměry tabulek';
$strShowTables = 'Zobrazit tabulky';
$strShowThisQuery = 'Zobrazit zde tento dotaz znovu';
$strShowingRecords = 'Zobrazeny záznamy';
$strSingly = '(po jednom)';
$strSize = 'Velikost';
$strSort = 'Řadit';
$strSpaceUsage = 'Využití místa';
$strSplitWordsWithSpace = 'Slova jsou oddělena mezerou (" ").';
$strStatement = 'Údaj';
$strStrucCSV = 'CSV data';
$strStrucData = 'Strukturu a data';
$strStrucDrop = 'Přidej \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV data pro Ms Excel';
$strStrucOnly = 'Pouze strukturu';
$strStructPropose = 'Navrhnout strukturu tabulky';
$strStructure = 'Struktura';
$strSubmit = 'Odešli';
$strSuccess = 'Tvůj SQL-dotaz byl úspěšně vykonán';
$strSum = 'Celkem';

$strTable = 'Tabulka ';
$strTableComments = 'Komentáře k tabulce';
$strTableEmpty = 'Jméno tabulky je prázdné!';
$strTableHasBeenDropped = 'Tabulka %s byla odstraněna';
$strTableHasBeenEmptied = 'Tabulka %s byla vyprázdněna';
$strTableHasBeenFlushed = 'Vyrovnávací paměť pro tabulku %s byla vyprázdněna';
$strTableMaintenance = ' Údržba tabulky ';
$strTableStructure = 'Struktura tabulky';
$strTableType = 'Typ tabulky';
$strTables = '%s tabulek';
$strTextAreaLength = 'Tento sloupec možná nepůjde <br />(kvůli délce) upravit ';
$strTheContent = 'Obsah souboru byl vložen';
$strTheContents = 'Obsah souboru přepíše obsah zvolené tabulky v těch řádcích, kde je stejný primární nebo unikátní klíč.';
$strTheTerminator = 'Sloupce jsou odděleny tímto znakem.';
$strTotal = 'celkem';
$strType = 'Typ';

$strUncheckAll = 'Odškrtnout vše';
$strUnique = 'Unikátní';
$strUnselectAll = 'Odznačit vše';
$strUpdatePrivMessage = 'Byla aktualizovana oprávnění pro %s.';
$strUpdateProfile = 'Změny přístupu:';
$strUpdateProfileMessage = 'Přístup byl změněn.';
$strUpdateQuery = 'Aktualizovat dotaz';
$strUsage = 'Používá';
$strUseBackquotes = 'Použít zpětné uvozovky u&nbsp;jmen tabulek a sloupců';
$strUseTables = 'Použít tabulky';
$strUser = 'Uživatel';
$strUserEmpty = 'Jméno uživatele je prázdné!';
$strUserName = 'Jméno uživatele';
$strUsers = 'Uživatelé';

$strValidateSQL = 'Zkontrolovat SQL';
$strValue = 'Hodnota';
$strViewDump = 'Ukaž výpis (dump) tabulky';
$strViewDumpDB = 'Ukaž výpis (dump) databáze';

$strWelcome = 'Vítej v %s';
$strWithChecked = 'Zaškrtnuté:';
$strWrongUser = 'Špatné uživatelské jméno/heslo. Přístup odepřen.';

$strYes = 'Ano';

$strZip = '"zazipováno"';
// To translate

$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
?>
