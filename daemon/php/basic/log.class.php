<?PHP
// =============================================================================
// CLASS Log
// =============================================================================
class Log
{

	// =========================================================================
	// Public Methods
	// =========================================================================

	public static function this($message, $exception)
	{
		echo(
			date("Y-m-d H:i:s") . " | " . ($exception ? "[EXCEPTION]" : "") . 
			$message . "\r\n"
		);
	}

}