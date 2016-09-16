<?php

class cVideo {
    protected $title;
    protected $id;
    protected $permalink;
    protected $collection;
    
    public function __construct($title, $id, $permalink, $collection){
        $this->title = $title;
        $this->id = $id;
        $this->permalink = $permalink;
        $this->collection = $collection;
    }
    
	public function getTitle(){
		return $this->title;
	}
	
	public function getID(){
	    return $this->id;
	}
	
	public function getPermalink(){
	    return $this->permalink;
	}
	
	public function getCollection(){
	    return $this->collection;
	}
}

class cVideos{
    protected $videoList;
    
    public function __construct(){
        $this->videoList = Array();
    }
    
    public function addVideo($title,$id,$permalink,$ignore,$collection){
        $this->videoList[] = new cVideo($title,$id,$permalink,$collection);
    }
    
    public function totalVideos(){
    
    	return count($this->videoList);
    }
    
    public function getNextVideo($start = 0){
        if ($start < count($this->videoList))
            return $this->videoList[$start];
            
        return NULL;
    }

    public function getVideo($which){
        if ($which < count($this->videoList))
            return $this->videoList[$which];
            
        return NULL;
    }
        
    public function allVideos($callback)
    {
    	for( $i = 0; $i < count($this->videoList); ++$i ){
    		call_user_func($callback, $this->videoList[$i]);
    	}
    }
}

$gb_videos = new cVideos;

$gb_videos->addVideo(            "Sunsight Alignment Solution (SAS)", "70368527",                   "introduction",     "01",       "1 - Introduction");
$gb_videos->addVideo(                                 "AAT Overview", "59151072",                       "overview",     "03",       "1 - Introduction");
$gb_videos->addVideo(                               "Basic Features", "65770345",                  "basicfeatures",    "05A",       "1 - Introduction");
$gb_videos->addVideo(                    "Components & Construction", "65831684",                     "components",    "05B",       "1 - Introduction");
$gb_videos->addVideo(                          "Measurements Review", "65855920",                   "measurements",    "05C",       "1 - Introduction");
$gb_videos->addVideo(                              "Mounts Overview", "63972499",                         "mounts",     "08",             "2 - Mounts");
$gb_videos->addVideo(                         "Using the Side Mount", "64243369",                      "sidemount",     "09",             "2 - Mounts");
$gb_videos->addVideo(              "Using the Ericsson AIR 21 Mount", "85103264",                     "air21mount",     "10",             "2 - Mounts");
$gb_videos->addVideo(                          "Using the Top Mount", "64243370",                       "topmount",     "12",             "2 - Mounts");
$gb_videos->addVideo(                 "Keypad Startup and Operation", "72849977",                  "keypadstartup",     "18",             "3 - Keypad");
$gb_videos->addVideo(                     "Keypad Creating Profiles", "72998712",           "keypadcreateprofiles",    "19A",             "3 - Keypad");
$gb_videos->addVideo(                         "Keypad Capture Modes", "73035960",             "keypadcapturemodes",    "19B",             "3 - Keypad");
$gb_videos->addVideo(                   "Keypad Performing Captures", "72996854",       "keypadperformingcaptures",     "20",             "3 - Keypad");
$gb_videos->addVideo(                 "Keypad Quick Capture Feature", "77736747",             "keypadquickcapture",    "20A",             "3 - Keypad");
$gb_videos->addVideo(                 "Connecting via RJ45 FW Rel 3", "59605452",                "rel3connectrj45",    "21A",         "4 - Connection");
$gb_videos->addVideo(                 "Connecting via WiFi FW Rel 3", "60501992",                "rel3connectwifi",    "21B",         "4 - Connection");
$gb_videos->addVideo(                  "Connecting via iOS FW Rel 3", "60560602",                 "rel3connectios",    "21D",         "4 - Connection");
$gb_videos->addVideo(                 "Connecting via RJ45 FW Rel 4", "65742577",                "rel4connectrj45",    "21E",         "4 - Connection");
$gb_videos->addVideo(                 "Connecting via WiFi FW Rel 4", "65745613",                "rel4connectwifi",    "21F",         "4 - Connection");
$gb_videos->addVideo(                  "Connecting via iOS FW Rel 4", "65745612",                 "rel4connectios",    "21H",         "4 - Connection");
$gb_videos->addVideo(                            "AAT Website Login", "70194909",                   "websitelogin",    "26A",            "5 - Website");
$gb_videos->addVideo(                    "AAT Website Initial Setup", "70194910",            "websiteinitialsetup",    "26B",            "5 - Website");
$gb_videos->addVideo(                "AAT Website Creating Profiles", "70248813",          "websitecreateprofiles",    "27A",            "5 - Website");
$gb_videos->addVideo(              "AAT Website Performing Captures", "70282170",      "websiteperformingcaptures",    "27B",            "5 - Website");
$gb_videos->addVideo(                 "AAT Website Printing Reports", "70194911",         "websiteprintingreports",     "28",            "5 - Website");
$gb_videos->addVideo(                              "LASER Tape Drop", "73178836",                  "LASERtapedrop",     "25",            "6 - Options");
$gb_videos->addVideo(                      "Azimuth (AZM) Scope Kit", "83972867",                "azimuthscopekit",     "30",            "6 - Options");
$gb_videos->addVideo(                                "Browser Setup", "83056911",                   "browsersetup",     "81",      "7 - Miscellaneous");
$gb_videos->addVideo(               "Internet Explorer 9 & 10 Setup", "83080447",                       "ie9setup",    "82A",      "7 - Miscellaneous");
$gb_videos->addVideo(                "Internet Explorer 7 & 8 Setup", "83248236",                       "ie7setup",    "82B",      "7 - Miscellaneous");
$gb_videos->addVideo(                          "Google Chrome Setup", "83255672",                    "chromesetup",    "82C",      "7 - Miscellaneous");
$gb_videos->addVideo(                        "Mozilla Firefox Setup", "83312051",                   "firefoxsetup",    "82D",      "7 - Miscellaneous");
$gb_videos->addVideo(                             "Firmware upgrade", "67574583",                 "firmwareupdate",     "91",      "7 - Miscellaneous");
$gb_videos->addVideo(                    "Tilt and Roll Calibration", "73045865",            "tiltrollcalibration",     "24",    "8 - Troubleshooting");
$gb_videos->addVideo(                     "Azimuth (AZM) Diagnostic", "83506901",                  "azmdiagnostic",     "51",    "8 - Troubleshooting");
$gb_videos->addVideo(     "Troubleshooting Difficult GPS Conditions", "62207321",             "gpstroubleshooting",     "52",    "8 - Troubleshooting");

function foreachVideo($callback)
{
	global $gb_videos;
	$gb_videos->allVideos($callback);
}

function getVideoCount()
{
    global $gb_videos;
    
    return count($gb_videos);
}

function getVideoList()
{
    global $gb_videos;
    
    return $gb_videos;
}


?>