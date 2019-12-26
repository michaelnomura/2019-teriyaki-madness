<?php
/**
 * portal-config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */


//site keys based upon your own server)
$siteKey = "6LfelDYUAAAAAFzeIMeojqqa-pvfqpphTV-I3-0x";
$secretKey = "6LfelDYUAAAAAImbHOahvzq9ah4WdBLJGqtFy01t";


//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');


//this constant allows a page to know it's own url/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


$nav1['index.php'] = "Home";
$nav1['menu.php'] = "Menu";
$nav1['map.php'] = "Map";
$nav1['contact.php'] = "Contact";


switch(THIS_PAGE)
{//change variables according to the current page
    case "index.php":
        $title = "Home";
        $PageID = "Welcome";
    break;
    
    case "menu.php":
        $title = "Menu";
        $PageID = "Menu";
    break;
        
    case "map.php":
        $title = "Map";
        $PageID = "Map";
    break;

    case "contact.php":
        $title = "Contact";
        $PageID = "Contact";
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID = "";
    break;        
}//end switch

function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text)
    {//make list with class added to selected option
        if(THIS_PAGE == $url)
        {//if selected add class
           $myReturn .= '<li><a href="' . $url . '" class="selected">' . $text . '</a></li>';            
        }else{//if not selected do not add class
           $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'; 
        }//end else       
    }//end foreach
    
    return $myReturn;
}//end makeLnks function