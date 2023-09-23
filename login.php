<?php

function readOptionsVar($userName) {
	$pathFolder = "usuarios/";
	$fileExtension = ".txt";
	$fileName = "$pathFolder$userName$fileExtension";
	$file = fopen($fileName, 'r'); // read current file

	while ($line = fgets($file)) {
		$line = rtrim($line);      // removes linebreaks and spaces at end
		$ifRemover = substr( $line, 0, 7 );
		$queRemover = substr( $line, 7, 30 );
		if ($ifRemover == "remover") {
			$lines = file($fileName); // reads a file into a array with the lines
			$output = '';

			foreach ($lines as $line) {
				if (!strstr($line, $queRemover)) {
					$output .= $line;
				} 
			}

			// replace the contents of the file with the output
			file_put_contents($fileName, $output);
		}
		else {
			if ($line == "duolingo") {
				echo '<div class="clickUser" id="duolingo" href="https://www.duolingo.com/"><div id="removerduolingo" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Duolingo</p></span></div>';
			}
			elseif ($line == "keybr") {
				echo '<div class="clickUser" id="keybr" href="http://www.keybr.com/"><div id="removerkeybr" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-keyboard-o"></i></span></div>';
			}
			elseif ($line == "excelexposure") {
				echo '<div class="clickUser" id="excelexposure" href="http://excelexposure.com/"><div id="removerexcelexposure" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormal"><p>Excel Exposure</p></span></div>';
			}
			elseif ($line == "netflix") {
				echo '<div class="clickUser" id="netflix" href="http://www.netflix.com"><div id="removernetflix" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Netflix</p></span></div>';
			}
			elseif ($line == "gtasks") {
				echo '<div class="clickUser" id="gtasks" href="https://mail.google.com/tasks/canvas?pli=1"><div id="removergtasks" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-check-square-o"></i></span></div>';
			}
			elseif ($line == "oyster") {
				echo '<div class="clickUser" id="oyster" href="https://www.oysterbooks.com/"><div id="removeroyster" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Oyster Books</p></span></div>';
			}
			elseif ($line == "gbookmarks") {
				echo '<div class="clickUser" id="gbookmarks" href="https://www.google.com/bookmarks/"><div id="removergbookmarks" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-bookmark-o"></i></span></div>';
			}
			elseif ($line == "gdrive") {
				echo '<div class="clickUser" id="gdrive" href="https://drive.google.com/#my-drive"><div id="removergdrive" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Google Drive</p></span></div>';
			}
			elseif ($line == "memrise") {
				echo '<div class="clickUser" id="memrise" href="https://www.memrise.com/"><div id="removermemrise" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Memrise</p></span></div>';
			}
			elseif ($line == "gtranslate") {
				echo '<div class="clickUser" id="gtranslate" href="https://translate.google.com/"><div id="removergtranslate" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormal"><p>Google Translate</p></span></div>';
			}
			elseif ($line == "gcurrency") {
				echo '<div class="clickUser" id="gcurrency" href="https://www.google.com/search?q=google+currency+converter&oq=google+currency+converter"><div id="removergcurrency" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormal"><p>Google Currency Converter</p></span></div>';
			}
			elseif ($line == "expatarrivals") {
				echo '<div class="clickUser" id="expatarrivals" href="http://www.expatarrivals.com/"><div id="removerexpatarrivals" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Expat Arrivals</p></span></div>';
			}
			elseif ($line == "expatquotes") {
				echo '<div class="clickUser" id="expatquotes" href="http://www.expat-quotes.com/directory/global.htm"><div id="removerexpatquotes" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Expat Quotes</p></span></div>';
			}
			elseif ($line == "spotify") {
				echo '<div class="clickUser" id="spotify" href="http://www.spotify.com/"><div id="removerspotify" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-spotify"></i></span></div>';
			}
			elseif ($line == "bbmiami") {
				echo '<div class="clickUser" id="bbmiami" href="https://www30.bancobrasil.com.br/aai/"><div id="removerbbmiami" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto">US$</span></div>';
			}
			elseif ($line == "bb") {
				echo '<div class="clickUser" id="bb" href="http://www.bb.com.br/portalbb/home29,116,116,1,1,1,1.bb"><div id="removerbb" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto">R$</span></div>';
			}
			elseif ($line == "instapaper") {
				echo '<div class="clickUser" id="instapaper" href="http://instapaper.com/"><div id="removerinstapaper" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="zocial-instapaper"></span></div>';
			}
			elseif ($line == "wikivoyage") {
				echo '<div class="clickUser" id="wikivoyage" href="http://www.wikivoyage.org/"><div id="removerwikivoyage" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Wiki Voyage</p></span></div>';
			}
			elseif ($line == "faxzero") {
				echo '<div class="clickUser" id="faxzero" href="http://faxzero.com/"><div id="removerfaxzero" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Fax Zero</p></span></div>';
			}
			elseif ($line == "viabox") {
				echo '<div class="clickUser" id="viabox" href="https://www.viabox.com/"><div id="removerviabox" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Viabox</p></span></div>';
			}
			elseif ($line == "officeonline") {
				echo '<div class="clickUser" id="officeonline" href="https://office.live.com/start/default.aspx"><div id="removerofficeonline" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-file-word-o"></i></span></div>';
			}
			elseif ($line == "remembermilk") {
				echo '<div class="clickUser" id="remembermilk" href="https://www.rememberthemilk.com/"><div id="removerremembermilk" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-check-square-o"></span></i></div>';
			}
			elseif ($line == "facebook") {
				echo '<div class="clickUser" id="facebook" href="https://www.facebook.com/"><div id="removerfacebook" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-facebook-square"></i></span></div>';
			}
			elseif ($line == "twitter") {
				echo '<div class="clickUser" id="twitter" href="https://twitter.com/"><div id="removertwitter" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-twitter"></span></i></div>';
			}
			elseif ($line == "instagram") {
				echo '<div class="clickUser" id="instagram" href="http://instagram.com/"><div id="removerinstagram" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-instagram"></i></span></div>';
			}
			elseif ($line == "readability") {
				echo '<div class="clickUser" id="readability" href="https://www.readability.com/"><div id="removerreadability" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Readability</p></span></div>';
			}
			elseif ($line == "tinyurl") {
				echo '<div class="clickUser" id="tinyurl" href="http://tinyurl.com/"><div id="removertinyurl" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Tiny URL</p></span></div>';
			}
			elseif ($line == "gmaps") {
				echo '<div class="clickUser" id="gmaps" href="https://www.google.com/maps/"><div id="removergmaps" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Google Maps</p></span></div>';
			}
			elseif ($line == "wunderground") {
				echo '<div class="clickUser" id="wunderground" href="http://www.wunderground.com/"><div id="removerwunderground" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-umbrella"></i></span></div>';
			}
			elseif ($line == "gutenberg") {
				echo '<div class="clickUser" id="gutenberg" href="https://www.gutenberg.org/"><div id="removergutenberg" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormal"><p>Project Guttenberg</p></span></div>';
			}
			elseif ($line == "goodreads") {
				echo '<div class="clickUser" id="goodreads" href="http://www.goodreads.com/"><div id="removergoodreads" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Good Reads</p></span></div>';
			}
			elseif ($line == "pixelofink") {
				echo '<div class="clickUser" id="pixelofink" href="http://www.pixelofink.com/"><div id="removerpixelofink" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Pixel of Ink</p></span></div>';
			}
			elseif ($line == "whatreadnext") {
				echo '<div class="clickUser" id="whatreadnext" href="http://whatshouldireadnext.com/"><div id="removerwhatreadnext" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormal"><p>What should I read next?</p></span></div>';
			}
			elseif ($line == "whichbook") {
				echo '<div class="clickUser" id="whichbook" href="http://www.openingthebook.com/whichbook/"><div id="removerwhichbook" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Whichbook</p></span></div>';
			}
			elseif ($line == "expensify") {
				echo '<div class="clickUser" id="expensify" href="https://www.expensify.com/"><div id="removerexpensify" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Expensify</p></span></div>';
			}
			elseif ($line == "mega") {
				echo '<div class="clickUser" id="mega" href="https://mega.co.nz/"><div id="removermega" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Mega</p></span></div>';
			}
			elseif ($line == "dropbox") {
				echo '<div class="clickUser" id="dropbox" href="https://www.dropbox.com/"><div id="removerdropbox" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="zocial-dropbox"></span></div>';
			}
			elseif ($line == "onedrive") {
				echo '<div class="clickUser" id="onedrive" href="https://onedrive.live.com/"><div id="removeronedrive" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormal"><p>Microsoft One Drive</p></span></div>';
			}
			elseif ($line == "linkedin") {
				echo '<div class="clickUser" id="linkedin" href="https://www.linkedin.com/nhome/"><div id="removerlinkedin" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-linkedin-square"></i></span></div>';
			}
			elseif ($line == "gett") {
				echo '<div class="clickUser" id="gett" href="http://ge.tt/"><div id="removergett" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Ge.tt</p></span></div>';
			}
			elseif ($line == "hightail") {
				echo '<div class="clickUser" id="hightail" href="https://www.hightail.com/"><div id="removerhightail" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>High Tail</p></span></div>';
			}
			elseif ($line == "anydo") {
				echo '<div class="clickUser" id="anydo" href="http://www.any.do/"><div id="removeranydo" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-check-square-o"></i></span></div>';
			}
			elseif ($line == "fitocracy") {
				echo '<div class="clickUser" id="fitocracy" href="https://www.fitocracy.com/"><div id="removerfitocracy" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Fitocracy</p></span></div>';
			}
			elseif ($line == "genius") {
				echo '<div class="clickUser" id="genius" href="http://genius.com/"><div id="removergenius" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Genius</p></span></div>';
			}
			elseif ($line == "haikudeck") {
				echo '<div class="clickUser" id="haikudeck" href="https://www.haikudeck.com/"><div id="removerhaikudeck" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Haiku Deck</p></span></div>';
			}
			elseif ($line == "prezi") {
				echo '<div class="clickUser" id="prezi" href="https://prezi.com/"><div id="removerprezi" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Prezi</p></span></div>';
			}
			elseif ($line == "hotelwifi") {
				echo '<div class="clickUser" id="hotelwifi" href="http://www.hotelwifitest.com/"><div id="removerhotelwifi" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-bed"></i><i class="fa fa-wifi"></i></span></div>';
			}
			elseif ($line == "peek") {
				echo '<div class="clickUser" id="peek" href="http://www.peek.com/"><div id="removerpeek" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Peek</p></span></div>';
			}
			elseif ($line == "pocket") {
				echo '<div class="clickUser" id="pocket" href="https://getpocket.com/"><div id="removerpocket" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="zocial-pocket"></span></div>';
			}
			elseif ($line == "quip") {
				echo '<div class="clickUser" id="quip" href="https://quip.com/"><div id="removerquip" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-check-square-o"></i></span></div>';
			}
			elseif ($line == "roadtrippers") {
				echo '<div class="clickUser" id="roadtrippers" href="https://roadtrippers.com/"><div id="removerroadtrippers" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-road"></i></span></div>';
			}
			elseif ($line == "scribd") {
				echo '<div class="clickUser" id="scribd" href="https://www.scribd.com/"><div id="removerscribd" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Scribd</p></span></div>';
			}
			elseif ($line == "calendarsunrise") {
				echo '<div class="clickUser" id="calendarsunrise" href="https://calendar.sunrise.am/"><div id="removercalendarsunrise" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-calendar"></i><i class="fa fa-sun-o"></i></span></div>';
			}
			elseif ($line == "supercook") {
				echo '<div class="clickUser" id="supercook" href="http://www.supercook.com/"><div id="removersupercook" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-cutlery"></i></span></div>';
			}
			elseif ($line == "truecar") {
				echo '<div class="clickUser" id="truecar" href="https://www.truecar.com/#/"><div id="removertruecar" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Truecar</p></span></div>';
			}
			elseif ($line == "whatsapp") {
				echo '<div class="clickUser" id="whatsapp" href="https://www.whatsapp.com/"><div id="removerwhatsapp" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-whatsapp"></i></span></div>';
			}
			elseif ($line == "gracieu") {
				echo '<div class="clickUser" id="gracieu" href="https://www.gracieuniversity.com/"><div id="removergracieu" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormal"><p>Gracie University</p></span></div>';
			}
			elseif ($line == "artofjj") {
				echo '<div class="clickUser" id="artofjj" href="https://www.artofjiujitsu.com/"><div id="removerartofjj" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormal"><p>Art of Jiu-Jitsu</p></span></div>';
			}
			elseif ($line == "reddit") {
				echo '<div class="clickUser" id="reddit" href="http://www.reddit.com/"><div id="removerreddit" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-reddit"></i></span></div>';
			}
			elseif ($line == "zoho") {
				echo '<div class="clickUser" id="zoho" href="https://www.zoho.com/mail/"><div id="removerzoho" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Zoho</p></span></div>';
			}
			elseif ($line == "outlook") {
				echo '<div class="clickUser" id="outlook" href="https://www.live.com/"><div id="removeroutlook" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-envelope-square"></i></span></div>';
			}
			elseif ($line == "gmail") {
				echo '<div class="clickUser" id="gmail" href="https://mail.google.com/"><div id="removergmail" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="zocial-gmail"></span></div>';
			}
			elseif ($line == "yahoomail") {
				echo '<div class="clickUser" id="yahoomail" href="https://mail.yahoo.com/"><div id="removeryahoomail" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="zocial-yahoo"></span></div>';
			}
			elseif ($line == "fluentu") {
				echo '<div class="clickUser" id="fluentu" href="http://www.fluentu.com/"><div id="removerfluentu" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click3textoNormalCentro"><p>Fluent U</p></span></div>';
			}
			elseif ($line == "youtube") {
				echo '<div class="clickUser" id="youtube" href="https://www.youtube.com/"><div id="removeryoutube" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-youtube-play"></i></span></div>';
			}
			elseif ($line == "habitrpg") {
				echo '<div class="clickUser" id="habitrpg" href="https://habitrpg.com/"><div id="removerhabitrpg" class="removerLink"><span class="center"><i class="fa fa-minus"></i></span></div><span class="click1texto"><i class="fa fa-check-square-o"></i></span></div>';
			}
			else {
	
			}
		}
	}
	fclose($file);
}

if (isset($_POST['id'])) {
	$response = $_POST['id'];
	writeOptions($response);
}

function checkDuplicates() {
	$pathFolder = "usuarios/";
	$fileExtension = ".txt";
	$cookieValue = $_COOKIE["itamaratyhp"];
	$fileName = "$pathFolder$cookieValue$fileExtension";
	$lines = file($fileName);
	$lines = array_unique($lines);
	file_put_contents($fileName, implode($lines));
}

function writeOptions($LinkToAdd) {
	$pathFolder = "usuarios/";
	$fileExtension = ".txt";
	$cookieValue = $_COOKIE["itamaratyhp"];
	$fileName = "$pathFolder$cookieValue$fileExtension";
        $myfile = fopen($fileName, "a+");
        $newLine = "\n";
        $finalText = "$LinkToAdd$newLine";
	fwrite($myfile, $finalText);
	fclose($myfile);
	checkDuplicates();
}

class OneFileLoginApplication
{
    /**
     * @var string Type of used database (currently only SQLite, but feel free to expand this with mysql etc)
     */
    private $db_type = "sqlite"; //

    /**
     * @var string Path of the database file (create this with _install.php)
     */
    private $db_sqlite_path = "users.db";

    /**
     * @var object Database connection
     */
    private $db_connection = null;

    /**
     * @var bool Login status of user
     */
    private $user_is_logged_in = false;

    /**
     * @var string System messages, likes errors, notices, etc.
     */
    public $feedback = "";

    /**
     * Does necessary checks for PHP version and PHP password compatibility library and runs the application
     */
    public function __construct()
    {
        if ($this->performMinimumRequirementsCheck()) {
            $this->runApplication();
        }
    }

    /**
     * Performs a check for minimum requirements to run this application.
     * Does not run the further application when PHP version is lower than 5.3.7
     * Does include the PHP password compatibility library when PHP version lower than 5.5.0
     * (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
     * @return bool Success status of minimum requirements check, default is false
     */
    private function performMinimumRequirementsCheck()
    {
        if (version_compare(PHP_VERSION, '5.3.7', '<')) {
            echo "Sorry, Simple PHP Login does not run on a PHP version older than 5.3.7 !";
        } elseif (version_compare(PHP_VERSION, '5.5.0', '<')) {
            require_once("libraries/password_compatibility_library.php");
            return true;
        } elseif (version_compare(PHP_VERSION, '5.5.0', '>=')) {
            return true;
        }
        // default return
        return false;
    }

    /**
     * This is basically the controller that handles the entire flow of the application.
     */
    public function runApplication()
    {
        // check is user wants to see register page (etc.)
        if (isset($_GET["action"]) && $_GET["action"] == "register") {
            $this->doRegistration();
            $this->showPageRegistration();
        } else {
            // start the session, always needed!
            $this->doStartSession();
            // check for possible user interactions (login with session/post data or logout)
            $this->performUserLoginAction();
            // show "page", according to user's login status
            if ($this->getUserLoginStatus()) {
                $this->showPageLoggedIn();
            } else {
                $this->showPageLoginForm();
            }
        }
    }

    /**
     * Creates a PDO database connection (in this case to a SQLite flat-file database)
     * @return bool Database creation success status, false by default
     */
    private function createDatabaseConnection()
    {
        try {
            $this->db_connection = new PDO($this->db_type . ':' . $this->db_sqlite_path);
            return true;
        } catch (PDOException $e) {
            $this->feedback = "PDO database connection problem: " . $e->getMessage();
        } catch (Exception $e) {
            $this->feedback = "General problem: " . $e->getMessage();
        }
        return false;
    }

    /**
     * Handles the flow of the login/logout process. According to the circumstances, a logout, a login with session
     * data or a login with post data will be performed
     */
    private function performUserLoginAction()
    {
        if (isset($_GET["action"]) && $_GET["action"] == "logout") {
            $this->doLogout();
        } elseif (!empty($_SESSION['user_name']) && ($_SESSION['user_is_logged_in'])) {
            $this->doLoginWithSessionData();
        } elseif (isset($_POST["login"])) {
            $this->doLoginWithPostData();
        }
    }

    /**
     * Simply starts the session.
     * It's cleaner to put this into a method than writing it directly into runApplication()
     */
    private function doStartSession()
    {
        session_start();
    }

    /**
     * Set a marker (NOTE: is this method necessary ?)
     */
    private function doLoginWithSessionData()
    {
        $this->user_is_logged_in = true; // ?
    }

    /**
     * Process flow of login with POST data
     */
    private function doLoginWithPostData()
    {
        if ($this->checkLoginFormDataNotEmpty()) {
            if ($this->createDatabaseConnection()) {
                $this->checkPasswordCorrectnessAndLogin();
            }
        }
    }

    /**
     * Logs the user out
     */
    private function doLogout()
    {
        $_SESSION = array();
        session_destroy();
        $this->user_is_logged_in = false;
        $this->feedback = "Voc&ecirc; se desconectou com sucesso.";
    }

    /**
     * The registration flow
     * @return bool
     */
    private function doRegistration()
    {
        if ($this->checkRegistrationData()) {
            if ($this->createDatabaseConnection()) {
                $this->createNewUser();
            }
        }
        // default return
        return false;
    }

    /**
     * Validates the login form data, checks if username and password are provided
     * @return bool Login form data check success state
     */
    private function checkLoginFormDataNotEmpty()
    {
        if (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {
            return true;
        } elseif (empty($_POST['user_name'])) {
            $this->feedback = "Voc&ecirc; esqueceu o nome do usu&aacute;rio.";
        } elseif (empty($_POST['user_password'])) {
            $this->feedback = "Voc&ecirc; esqueceu de preencher a senha.";
        }
        // default return
        return false;
    }

    /**
     * Checks if user exits, if so: check if provided password matches the one in the database
     * @return bool User login success status
     */
    private function checkPasswordCorrectnessAndLogin()
    {
        // remember: the user can log in with username or email address
        $sql = 'SELECT user_name, user_email, user_password_hash
                FROM users
                WHERE user_name = :user_name OR user_email = :user_name
                LIMIT 1';
        $query = $this->db_connection->prepare($sql);
        $query->bindValue(':user_name', $_POST['user_name']);
        $query->execute();

        // Btw that's the weird way to get num_rows in PDO with SQLite:
        // if (count($query->fetchAll(PDO::FETCH_NUM)) == 1) {
        // Holy! But that's how it is. $result->numRows() works with SQLite pure, but not with SQLite PDO.
        // This is so crappy, but that's how PDO works.
        // As there is no numRows() in SQLite/PDO (!!) we have to do it this way:
        // If you meet the inventor of PDO, punch him. Seriously.
        $result_row = $query->fetchObject();
        if ($result_row) {
            // using PHP 5.5's password_verify() function to check password
            if (password_verify($_POST['user_password'], $result_row->user_password_hash)) {
                // write user data into PHP SESSION [a file on your server]
                $_SESSION['user_name'] = $result_row->user_name;
                $_SESSION['user_email'] = $result_row->user_email;
                $_SESSION['user_is_logged_in'] = true;
                $this->user_is_logged_in = true;
                return true;
            } else {
                $this->feedback = "Senha errada.";
            }
        } else {
            $this->feedback = "Esse usu&aacute;rio n&atilde;o existe.";
        }
        // default return
        return false;
    }

    /**
     * Validates the user's registration input
     * @return bool Success status of user's registration data validation
     */
    private function checkRegistrationData()
    {
        // if no registration form submitted: exit the method
        if (!isset($_POST["register"])) {
            return false;
        }

        // validating the input
        if (!empty($_POST['user_name'])
            && strlen($_POST['user_name']) <= 64
            && strlen($_POST['user_name']) >= 2
            && preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])
            && !empty($_POST['user_email'])
            && strlen($_POST['user_email']) <= 64
            && filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['user_password_new'])
            && !empty($_POST['user_password_repeat'])
            && ($_POST['user_password_new'] === $_POST['user_password_repeat'])
        ) {
            // only this case return true, only this case is valid
            return true;
        } elseif (empty($_POST['user_name'])) {
            $this->feedback = "Usu&aacute;rio em branco.";
        } elseif (empty($_POST['user_password_new']) || empty($_POST['user_password_repeat'])) {
            $this->feedback = "Senha em branco.";
        } elseif ($_POST['user_password_new'] !== $_POST['user_password_repeat']) {
            $this->feedback = "As senha e sua repetição não são iguais.";
        } elseif (strlen($_POST['user_password_new']) < 6) {
            $this->feedback = "A senha deve ter pelo menos seis caracteres.";
        } elseif (strlen($_POST['user_name']) > 64 || strlen($_POST['user_name']) < 2) {
            $this->feedback = "O nome do usu&aacute;rio n&atilde;o pode ter menos de 2 nem mais de 64 caracteres.";
        } elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])) {
            $this->feedback = "Apenas letras de &quot;a&quot; a &quot;z&quot; e n&uacute;meros s&atilde;o permitidos no nome do usu&aacute;rio.";
        } elseif (empty($_POST['user_email'])) {
            $this->feedback = "&quot;E-mail&quot; n&atilde;o pode ficar em branco.";
        } elseif (strlen($_POST['user_email']) > 64) {
            $this->feedback = "O campo &quot;e-mail&quot; n&atilde;o pode ter mais de 64 caracteres.";
        } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            $this->feedback = "O e-mail informado n&atilde;o parece ser um endere&ccedil;o v&aacute;lido de e-mail.";
        } else {
            $this->feedback = "Um erro desconhecido ocorreu, por favor tente novamente.";
        }

        // default return
        return false;
    }

    /**
     * Creates a new user.
     * @return bool Success status of user registration
     */
    private function createNewUser()
    {
        // remove html code etc. from username and email
        $user_name = htmlentities($_POST['user_name'], ENT_QUOTES);
        $user_email = htmlentities($_POST['user_email'], ENT_QUOTES);
        $user_password = $_POST['user_password_new'];
        // crypt the user's password with the PHP 5.5's password_hash() function, results in a 60 char hash string.
        // the constant PASSWORD_DEFAULT comes from PHP 5.5 or the password_compatibility_library
        $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);

        $sql = 'SELECT * FROM users WHERE user_name = :user_name OR user_email = :user_email';
        $query = $this->db_connection->prepare($sql);
        $query->bindValue(':user_name', $user_name);
        $query->bindValue(':user_email', $user_email);
        $query->execute();

        // As there is no numRows() in SQLite/PDO (!!) we have to do it this way:
        // If you meet the inventor of PDO, punch him. Seriously.
        $result_row = $query->fetchObject();
        if ($result_row) {
            $this->feedback = "Sorry, that username / email is already taken. Please choose another one.";
        } else {
            $sql = 'INSERT INTO users (user_name, user_password_hash, user_email)
                    VALUES(:user_name, :user_password_hash, :user_email)';
            $query = $this->db_connection->prepare($sql);
            $query->bindValue(':user_name', $user_name);
            $query->bindValue(':user_password_hash', $user_password_hash);
            $query->bindValue(':user_email', $user_email);
            // PDO's execute() gives back TRUE when successful, FALSE when not
            // @link http://stackoverflow.com/q/1661863/1114320
            $registration_success_state = $query->execute();

            if ($registration_success_state) {
                $this->feedback = "Seu usu&aacute;rio foi criado com sucesso, $user_name. Siga o link abaixo para fazer login.";
                $fp = fopen('usuarios/'.$user_name.'.txt', 'a+');
                fwrite($fp, $user_email.PHP_EOL);
                fwrite($fp, $user_password.PHP_EOL);
                fclose($fp);
                return true;
            } else {
                $this->feedback = "Desculpe, seu registro n&atilde;o funcionou. Por favor, tente novamente.";
            }
        }
        // default return
        return false;
    }

    /**
     * Simply returns the current status of the user's login
     * @return bool User's login status
     */
    public function getUserLoginStatus()
    {
        return $this->user_is_logged_in;
    }

    /**
     * Simple demo-"page" that will be shown when the user is logged in.
     * In a real application you would probably include an html-template here, but for this extremely simple
     * demo the "echo" statements are totally okay.
     */
    private function showPageLoggedIn()
    {
	echo '<div id="logout">';
		echo '</span>';
		echo '<span class="acercaTexto">';
		        if ($this->feedback) {
		            echo $this->feedback . "<br/><br/>";
		        }
			global $itamaratyhp;
			$itamaratyhp = $_SESSION['user_name'];
			?>
				<script type="text/javascript">
					$.cookie('itamaratyhp', "<?php echo $itamaratyhp; ?>", { expires: 7 });
				</script>
			<?php

			echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?action=logout">Clique aqui para desconectar-se.</a>';
		echo '</span>';
		echo '<div class="loginFechar" title="Fechar"><span class="acercaFecharTexto"><i class="fa fa-times-circle"></i></span></div>';
	echo '</div>';

	readOptionsVar($itamaratyhp);

        ?>
	<script type="text/javascript">
	$( "#logout" ).hide();
	$( "#usuario1" ).hide();
	$( "#usuario2" ).show();
	$('.inserirLink').show();
	</script>
	<?php
    }

    /**
     * Simple demo-"page" with the login form.
     * In a real application you would probably include an html-template here, but for this extremely simple
     * demo the "echo" statements are totally okay.
     */
    private function showPageLoginForm()
    {
	echo '<div id="login">';
		echo '</span>';
		echo '<span class="acercaTexto">';
		        if ($this->feedback) {
		            echo $this->feedback . "<br/><br/>";
		        }
		        echo '<form method="post" action="' . $_SERVER['SCRIPT_NAME'] . '" name="loginform">';
		        echo '<p><label for="login_input_username">Nome do usu&aacute;rio:</label></p> ';
		        echo '<input id="login_input_username" type="text" name="user_name" required /> ';
		        echo '<p><label for="login_input_password">Senha:</label></p> ';
		        echo '<input id="login_input_password" type="password" name="user_password" required/> ';
		        echo '<input type="submit"  name="login" value="Log in" />';
		        echo '</form>';
		        echo '<p>';
		        echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?action=register">Clique aqui para criar novo usu&aacute;rio</a>';
		        echo '</p>';
	        echo '</span>';
		echo '<div class="loginFechar" title="Fechar"><span class="acercaFecharTexto"><i class="fa fa-times-circle"></i></span></div>';
        ?>
	<script type="text/javascript">
	$( "#usuario1" ).show();
	$( "#usuario2" ).hide();
	$('.inserirLink').hide();</script>
	<?php
    }

    /**
     * Simple demo-"page" with the registration form.
     * In a real application you would probably include an html-template here, but for this extremely simple
     * demo the "echo" statements are totally okay.
     */
    private function showPageRegistration()
    {
	echo '<div id="login">';
		echo '<span class="acercaTexto">';
		        if ($this->feedback) {
		            echo $this->feedback . "<br/><br/>";
		        }
		        echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '">Clique aqui para retornar &agrave; pagina de login</a>';
		        echo '<hr />';
			echo '<p>Criar um usu&aacute;rio e fazer login permitir&aacute; acrescentar links da p&aacute;gina azul (&quot;links &uacute;teis&quot;) &agrave; p&aacute;gina laranja (&quot;links pessoais&quot;). N&atilde;o h&aacute; nada de sens&iacute;vel aqui, a sua senha pode ser o seu nome, por exemplo (e absolutamente n&atilde;o use suas senhas usuais aqui, muito menos a senha do Itamaraty). Por exemplo, o meu login &eacute; &quot;tiago&quot; e a minha senha &eacute; &quot;senha123&quot;.</p>';
			echo '<hr />';
		        echo '<p>Registro de novo usu&aacute;rio</p>';
		        echo '<br>';
		        echo '<form method="post" action="' . $_SERVER['SCRIPT_NAME'] . '?action=register" name="registerform">';
		        echo '<p><label for="login_input_username">Nome do usu&aacute;rio: (apenas letras e n&uacute;meros, de 2 a 64 caracteres)</label></p>';
		        echo '<input id="login_input_username" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />';
		        echo '<p><label for="login_input_email">Seu e-mail:</label></p>';
		        echo '<input id="login_input_email" type="email" name="user_email" required />';
		        echo '<p><label for="login_input_password_new">Sua senha (m&iacute;nimo de 6 caracteres):</label></p>';
		        echo '<input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />';
		        echo '<p><label for="login_input_password_repeat">Repita a senha, por favor:</label></p>';
		        echo '<input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />';
		        echo '<input type="submit" name="register" value="Register" />';
		        echo '</form>';
	        echo '</span>';
	        echo '<div class="loginFechar" title="Fechar"><span class="acercaFecharTexto"><i class="fa fa-times-circle"></i></span></div>';
        echo '</div>';
        ?>
	<script type="text/javascript">
	$( "#usuario1" ).show();
	$( "#usuario2" ).hide();
$('.inserirLink').hide();
	</script>
	<?php
    }
}