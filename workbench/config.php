<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//	TO CONFIGURE WORKBENCH FOR ALL YOUR USERS, ADJUST THE "DEFAULT" VALUES FOR THE KEYS BELOW.
//  FOR EASIER UPGRADING, YOU MAY IT IS RECOMMENDE TO MAKE THESE CHANGES TO THE configOverrides.php FILE
//  WHICH ARE APPLIED AFTER LOADING CONFIGURATIONS FROM THIS FILE.
//
//	IF YOU WOULD LIKE TO ALLOW YOUR USERS TO OVERRIDE THE DEFAUTS SET THE "OVERRIDEABLE" VALUE TO true.
//	THIS WILL CAUSE THE KEY TO APPEAR ON THE 'SETTINGS' PAGE AND WILL BE CUSTOMIZABLE ON A USER-BY-USER
//	BASIS. THIS IS ACCOMPLISHED BY SETTING COOKIES IN THE USER'S BROWSER AND THE USER'S SETTINGS WILL
//	RETURN TO THE DEFAULTS SET BELOW IF THE COOKIES ARE CLEARED. THE "LABEL" AND "DESCRIPTION" VALUES CONTROL
//	HOW THE SETTING IS DISPLAYED ON THE 'SETTINGS' PAGE.
//
//	DO NOT ALTER THE KEY NAME, "DATATYPE", "MAXVALUE", OR "MINVALUE" VALUES. THESE MUST REMAIN AS IS FOR THE
//	FOR WORKBENCH TO FUNCTION PROPERLY.
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config["header_General"] = array(
	"label" => "General Options",
	"display" => true,
	"isHeader" => true
);
	$config["linkIdToUi"] = array(
		"label" => "Link Ids to Record Detail",
		"description" => "Display queried Id fields as hyperlinks to their corresponding record in the Salesforce user interface. Note, links to objects without detail pages will fail.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
		
	$config["abcOrder"] = array(
		"label" => "Alphabetize Field Names",
		"description" => "Alphabetizes field names for across application. Otherwise, field names are displayed in the order returned by Salesforce.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["mruHeader_updateMru"] = array(
		"label" => "Update Recent Items on Sidebar",
		"description" => "Indicates whether to update the list of most recently used (MRU) items on the Salesforce sidebar. For queries, the MRU is only updated when returning one record.",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["invalidateSessionOnLogout"] = array(
		"label" => "Invalidate Session on Logout",
		"description" => "Invalidates the current API session when logging out of Workbench. This option is only available when logging in with API version 13.0 and higher; otherwise it is ignored.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
			
	$config["displayRequestTime"] = array(
		"label" => "Display Request Time",
		"description" => "Display the time to render the page in the footer.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["checkSSL"] = array(
		"label" => "Check for Secure Connection",
		"description" => "Display a warning to users in the footer if an unsecure connection to between this computer and the Workbench server OR between Workbench server and Salesforce API is detected.",
		"default" => true,
		"overrideable" => false,
		"dataType" => "boolean"
	);
			
	$config["debug"] = array(
		"label" => "Debug Mode",
		"description" => "Enables debugging mode for showing supervariables and SOAP messages.",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["callOptions_defaultNamespace"] = array(
		"label" => "Default Namespace",
		"description" => " A string that identifies a developer namespace prefix",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);

	$config["textareaRows"] = array(
		"label" => "Text Area Rows",
		"description" => "Number of rows for Query, Search, and Execute text areas.",
		"default" => 5,
		"overrideable" => true,
		"dataType" => "int",
		"minValue" => 1,
		"maxValue" => 100
	);


$config["header_LoginOptions"] = array(
	"label" => "Login Options",
	"display" => true,
	"isHeader" => true
);
	$config["defaultLoginType"]  = array(
		"label" => "Default Login Type",
		"description" => "Determines default login type that is loaded on startup.",
		"default" => "Standard",
		"overrideable" => true,
		"dataType" => "picklist",
		"valuesToLabels" => array(
			"Standard" => "Standard",
			"Advanced" => "Advanced"
		)
	);

	$config["defaultApiVersion"]  = array(
		"label" => "Default API Version",
		"description" => "Default API version to be used for login. Recommended to choose latest version. Some features may act unexpectedly when using older versions.",
		"default" => "18.0",
		"overrideable" => true,
		"dataType" => "picklist",
		"valuesToLabels" => array(
			"18.0" => "18.0",
			"17.0" => "17.0",
			"16.0" => "16.0",
			"15.0" => "15.0",
			"14.0" => "14.0",
			"13.0" => "13.0",
			"12.0" => "12.0",
			"11.1" => "11.1",
			"11.0" => "11.0",
			"10.0" => "10.0",
			"9.0" => "9.0",
			"8.0" => "8.0"
		)
	);
	
	$config["defaultInstance"]  = array(
		"label" => "Default Instance",
		"description" => "Default instance to be used for login.",
		"default" => "login",
		"overrideable" => true,
		"dataType" => "picklist",
		"labelKey" => "0",
		"valuesToLabels" => array(
			"login" => array("Production Login",""),
			"na0-api" => array("NA0 (SSL)","0"),
			"na1-api" => array("NA1","3"),
			"na2-api" => array("NA2","4"),
			"na3-api" => array("NA3","5"),
			"na4-api" => array("NA4","6"),
			"na5-api" => array("NA5","7"),
			"na6-api" => array("NA6","8"),
			"na7-api" => array("NA7","A"),
			"na8-api" => array("NA8","B"),
			"ap0-api" => array("AP","1"),
			"ap1-api" => array("AP1","9"),
			"eu0-api" => array("EMEA","2"),
			"test" => array("Sandbox Login (test)",""),
			"tapp0-api" => array("Sandbox CS0 (tapp0)","T"),
			"cs1-api" => array("Sandbox CS1","S"),
			"cs2-api" => array("Sandbox CS2","R"),
			"cs3-api" => array("Sandbox CS3","Q"),
			"cs4-api" => array("Sandbox CS4","P"),
			"cs5-api" => array("Sandbox CS5","O"),
			"cs6-api" => array("Sandbox CS6","N"),
			"cs7-api" => array("Sandbox CS7","M"),
			"cs8-api" => array("Sandbox CS8","L"),
			"prerelna1.pre" => array("Pre-Release","t")
		)
	);

	$config["useHTTPS"] = array(
		"label" => "Connect to Salesforce over HTTPS",
		"description" => "Use HTTPS to connect to Salesforce API from Workbench server. Does not guarantee HTTPS will be used from this computer to Workbench server. Disabling this setting will also change redirect Server URLs returned from Salesforce to use HTTP. Must login again for changes to take effect.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["fuzzyServerUrlLookup"] = array(
		"label" => "Enable Server URL Fuzzy Lookup",
		"description" => "When logging in with a Session Id, Workbench attempts to guess the associated Server URL. This may fail for orgs that have been migrated from one instance to another.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["loginScopeHeader_organizationId"] = array(
		"label" => "Portal Organization Id",
		"description" => "Specify an org id for Self-Service, Customer Portal, and Partner Portal Users. Leave blank for standard Salesforce users.",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);
	
	$config["loginScopeHeader_portalId"] = array(
		"label" => "Portal Id",
		"description" => "Specify an portal id for Customer Portal, and Partner Portal Users. Leave blank for standard Salesforce users.",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);
	
	$config["callOptions_client"] = array(
		"label" => "Client Id",
		"description" => "Specify a Client Id for a partner with special API functionality.",
		"default" => "WORKBENCH_DEFAULT", //Value 'WORKBENCH_DEFAULT' will convert to Workbench UserAgent format, unless otherwise overriden by user
		"overrideable" => true,
		"dataType" => "string"
	);

$config["header_Describe"] = array(
	"label" => "Describe Results Color Coding",
	"display" => true,
	"isHeader" => true
);	
	$config["highightBooleanValues"] = array(
		"label" => "Boolean Values",
		"description" => "Color code true and false values in Describe results",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["highlightSystemFields"] = array(
		"label" => "System Fields",
		"description" => "Color code system fields (i.e. Id, CreatedById, LastModified, etc.) in Describe results.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["highlightCustomFields"] = array(
		"label" => "Custom Fields",
		"description" => "Color code custom fields in Describe results.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
				
	
$config["header_DataManagement"] = array(
	"label" => "Data Management Options",
	"display" => true,
	"isHeader" => true
);


	$config["showReferenceBy"] = array(
		"label" => "Enable Smart Lookup",
		"description" => "Show the Smart Lookup column for insert, update, and upsert operations for mapping with foreign keys via relationships.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["fieldsToNull"] = array(
		"label" => "Insert Null Values",
		"description" => "Forces null values to be committed to the database when inserting, updating, or upserting records; otherwise null values will be overridden by the existing values in the database",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["emailHeader_triggerAutoResponseEmail"] = array(
		"label" => "Trigger Auto-Response Emails",
		"description" => "Send Auto-Response e-mails when inserting Leads and Cases",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["emailHeader_triggertriggerUserEmail"] = array(
		"label" => "Trigger User Emails",
		"description" => "Send e-mails to users when resetting a password, creating a new user, adding comments to a case, or creating or modifying a task",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["emailHeader_triggerOtherEmail"] = array(
		"label" => "Trigger Other Emails",
		"description" => "Send other e-mails for insert, update, and upsert of records",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["allowFieldTruncationHeader_allowFieldTruncation"] = array(
		"label" => "Allow Field Truncation",
		"description" => "For API 15.0 and higher, specifies to automatically truncatrate string values that are too long when performing Insert, Update, Upsert, Updelete, or Execute; otherwise a STRING_TOO_LONG error is returned. This is ignored in all previous API versions.",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["assignmentRuleHeader_useDefaultRule"] = array(
		"label" => "Use Default Assignment Rule",
		"description" => "Apply default Assignment Rule to apply to insert, update, and upsert operations. May not be used in conjunction with Assignment Rule Id option.",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["assignmentRuleHeader_assignmentRuleId"] = array(
		"label" => "Assignment Rule Id",
		"description" => "Specify an Assignment Rule Id to apply to insert, update, and upsert operations. May not be used if Use Default Assignment Rule option is checked.",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);

	$config["UserTerritoryDeleteHeader_transferToUserId"] = array(
		"label" => "Territory Delete Transfer User",
		"description" => "The ID of the user to whom open opportunities will be assigned when an opportunity's owner is removed from a territory",
		"default" => null,
		"overrideable" => true,
		"dataType" => "string"
	);
	
	$config["asyncConcurrencyMode"]  = array(
		"label" => "Asynchronous Concurrency Mode",
		"description" => "When loading records asynchronously via the Bulk API, determines if batches are processed by Salesforce in parallel or serially. Parallel is recommended unless serial processing is needed to avoid contention.",
		"default" => "Parallel",
		"overrideable" => true,
		"dataType" => "picklist",
		"valuesToLabels" => array(
			"Parallel" => "Parallel",
			"Serial" => "Serial"
		)
	);	
		
$config["header_queryAndSearchOptions"] = array(
	"label" => "Query & Search Options",
	"display" => true,
	"isHeader" => true
);

	$config["autoJumpToResults"] = array(
		"label" => "Automatically Jump to Results",
		"description" => "When displaying query results in the browser, automatically jump to the top of the query results.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["areTablesSortable"] = array(
		"label" => "Sortable Results (Beta)",
		"description" => "Allow results tables to be sorted directly in the browser after the query or search has been completed. This feature is currently in beta, as some complex queries produce unexpected results.",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean",
	);

	$config["autoRunQueryMore"] = array(
		"label" => "Automatically Retrieve More Query Results",
		"description" => "Automatically retrieve all query results with queryMore() API call for browser view; otherwise, 'More...' button is show when additional results are available. If a large query is run with this setting enabled, the operation may be subject to unexpected timeouts. CSV exports automatically retrieve all results.",
		"default" => false,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["queryOptions_batchSize"] = array(
		"label" => "Preferred Query Batch Size",
		"description" => "Requested query batch size. This is not a guaranteed value and depends on the data set being returned.",
		"default" => 500,
		"overrideable" => true,
		"dataType" => "int",
		"minValue" => 200,
		"maxValue" => 2000
	);
	
	
$config["header_Execute"] = array(
	"label" => "Apex Execute Logging Options",
	"display" => true,
	"isHeader" => true
);

	$config["defaultLogCategory"]  = array(
		"label" => "Default Log Category",
		"description" => "Default Log Category when displaying results from anonymous Apex execution. Defaults will not apply until after logging in again.",
		"default" => "Apex_code",
		"overrideable" => true,
		"dataType" => "picklist",
		"valuesToLabels" => array(
			"Db" => "Database",
			"Workflow" => "Workflow",
			"Validation" => "Validation",
			"Callout" => "Callout",
			"Apex_code" => "Apex Code",
			"Apex_profiling" => "Apex Profiling"
		)
	);
	
	$config["defaultLogCategoryLevel"]  = array(
		"label" => "Default Log Level",
		"description" => "Default Log Level when displaying results from anonymous Apex execution. Defaults will not apply until after logging in again.",
		"default" => "DEBUG",
		"overrideable" => true,
		"dataType" => "picklist",
		"valuesToLabels" => array(
			"ERROR" => "Error",
			"WARN" => "Warn",
			"INFO" => "Info",
			"DEBUG" => "Debug",
			"FINE" => "Fine",
			"FINER" => "Finer",
			"FINEST" => "Finest"
		)
	);	
	
$config["header_Performance"] = array(
	"label" => "Performance Options",
	"display" => true,
	"isHeader" => true
);

	$config["cacheGetUserInfo"] = array(
		"label" => "Cache User Info",
		"description" => "Caches the results from the getUserInfo() API call. Improves performance of Workbench in that user info does not need to be retrieved more than once, but not recommended if active session should be checked on each page load.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["cacheDescribeGlobal"] = array(
		"label" => "Cache Object Names",
		"description" => "Caches the results from the describeGlobal() API call. Improves performance of Workbench in that object names do not need to be retrieved more than once. Recommended unless actively making changes to metadata of your Salesforce organization.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["cacheDescribeSObject"] = array(
		"label" => "Cache Object Descriptions",
		"description" => "Caches the results from the describeSobject() API calls. Improves performance of Workbench in that the object descriptions and field names do not need to be retrieved more than once. Recommended unless actively making changes to metadata of your Salesforce organization.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);

	$config["enableGzip"] = array(
		"label" => "Enable Compression",
		"description" => "Enables GZIP compression to improve performance of API call response time. Recommended to leave enabled unless SOAP capturing is necessary.",
		"default" => true,
		"overrideable" => true,
		"dataType" => "boolean"
	);
	
	$config["batchSize"] = array(
		"label" => "Synchronous Record Batch Size",
		"description" => "Number of records that are batched together in one synchronous API call. Recommended to leave at 200.",
		"default" => 200,
		"overrideable" => true,
		"dataType" => "int",
		"minValue" => 1,
		"maxValue" => 200
	);

	$config["asyncBatchSize"] = array(
		"label" => "Asynchronous Record Batch Size",
		"description" => "Number of records that are batched together for asynchronous record loading via the Bulk API",
		"default" => 5000,
		"overrideable" => true,
		"dataType" => "int",
		"minValue" => 1
	);
	
	$config["maxFileSize"] = array(
		"label" => "Maxiumum File Size (bytes)",
		"description" => "Maximum file size for upload in bytes.",
		"default" => 10000000,
		"overrideable" => false,
		"dataType" => "int",
		"minValue" => 1
	);

	$config["maxFileLengthRows"] = array(
		"label" => "Maxiumum File Length (rows)",
		"description" => "Maximum file size for upload in number of CSV rows.",
		"default" => 50000,
		"overrideable" => false,
		"dataType" => "int",
		"minValue" => 1
	);

$config["header_proxyOptions"] = array(
	"label" => "Proxy Options",
	"display" => false,
	"isHeader" => true
);

	$config["proxyEnabled"] = array(
		"label" => "Connect with Proxy",
		"description" => "Check this box to use the proxy information below to connect to Salesforce.",
		"default" => false,
		"overrideable" => false,
		"dataType" => "boolean"
	);
	
	$config["proxyHost"] = array(
		"label" => "Proxy Host",
		"description" => "Proxy Host",
		"default" => null,
		"overrideable" => false,
		"dataType" => "string"
	);
	
	
	$config["proxyPort"] = array(
		"label" => "Proxy Port Number",
		"description" => "Proxy Port Number",
		"default" => null,
		"overrideable" => false,
		"dataType" => "int",
		"minValue" => 0,
		"maxValue" => 65536
	);
	
	
	$config["proxyUsername"] = array(
		"label" => "Proxy Username",
		"description" => "Proxy Username",
		"default" => null,
		"overrideable" => false,
		"dataType" => "string"
	);
	
	
	$config["proxyPassword"] = array(
		"label" => "Proxy Password",
		"description" => "Proxy Password",
		"default" => null,
		"overrideable" => false,
		"dataType" => "password"
	);

	
///////////////////////////////////////////////////////////////////////////////////////////
//  
//  
//  CONSTANTS. DO NOT CHANGE.
//  
//  
////////////////////////////////////////////////////////////////////////////////////////// 

$GLOBALS["WORKBENCH_VERSION"] = "2.5.18 Beta 1";

class Page {
	public $title;
	public $desc;
    public $onMenuMain;
	public $onMenuSetup;
	public $onMenuSelect;
	public $onMenuUtilities;
	
	public function __construct($title, $desc, $onMenuMain=false, $onMenuSetup=false, $onMenuSelect=false, $onMenuUtilities=false){
		$this->title = $title;
		$this->desc = $desc;
	    $this->onMenuMain = $onMenuMain;
		$this->onMenuSetup = $onMenuSetup;
		$this->onMenuSelect = $onMenuSelect;	
		$this->onMenuUtilities = $onMenuUtilities;	
	}
}

$GLOBALS["PAGES"] = array(
		'login.php' => new Page('Login','Logs into your Salesforce organization',false,true,false),
		'logout.php' => new Page('Logout','Logs out of your Salesforce organization',false,true,false),
		'select.php' => new Page('Select','Select action to which to jump',false,false,false),
		'describe.php' => new Page('Describe','Describes the attributes, fields, record types, and child relationships of an object in a tree format',true,false,true),
		'describeTable.php' => new Page('Describe','Describes the attributes, fields, record types, and child relationships of an object in a tabular format',false,false,false),
		'insert.php' => new Page('Insert','Creates new records from a CSV file',true,false,true),
		'upsert.php' => new Page('Upsert','Creates new records and/or updates existing records from a CSV file based on a unique External Id',true,false,true),
		'update.php' => new Page('Update','Updates existing records from a CSV file',true,false,true),
		'delete.php' => new Page('Delete','Moves records listed in a CSV file to the Recycle Bin. Note, some objects cannot be undeleted',true,false,true),
		'undelete.php' => new Page('Undelete','Restores records listed in a CSV file from the Recycle Bin. Note, some objects cannot be undeleted.',true,false,true),
		'purge.php'  => new Page('Purge','Permenantly deletes records listed in a CSV file from your Recycle Bin.',true,false,true),
		'query.php' => new Page('Query','Queries the data in your organization and displays on the screen or exports to a CSV file',true,false,true),
		'search.php' => new Page('Search','Search the data in your organization across multiple objects',true,false,true),
		'execute.php' => new Page('Execute','Execute Apex code as an anonymous block',true,false,true),
		'settings.php' => new Page('Settings','Configure Workbench',false,true,true),
	    'help.php' => new Page('Help','Get help about using Workbench',false,true,false),
	    'about.php' => new Page('About','Learn about Workbench',false,true,false),
        'utilities.php' => new Page('Utilities','Random, experimental utilities'),
		'asyncStatus.php' => new Page('Bulk API Job Status & Results','Asynchronous Data Load Status and Results',false,false,false,true),
		'pwdMgmt.php' => new Page('Password Management','Set and Reset Passwords',false,false,false,true),
		'burn.php' => new Page('API Call Afterburner','',false,false,false,true)
	);
?>