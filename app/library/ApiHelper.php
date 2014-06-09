<?php

/*
|--------------------------------------------------------------------------
| API Constant
|--------------------------------------------------------------------------
|
| Define all required constant for API here
|
*/
define( 'API_CODE' ,    'code' );
define( 'API_MESSAGE' , 'message' );

// success code
define( 'API_GENERAL_SUCCESS' ,           1000 );

// error code
define( 'API_ERROR_UNKNOWN' ,                     2000 );
define( 'API_ERROR_ACTION_FORBIDDEN' ,            2001 );
define( 'API_ERROR_ID_UNAVAILABLE_SOCMED' ,       2002 );
define( 'API_ERROR_ID_UNAVAILABLE_CANDIDATE' ,    2003 );
define( 'API_ERROR_ID_UNAVAILABLE_ANONYMOUS' ,    2004 );

class APIHelper 
{

    public static function XOR_encrypt($message, $key)
    {
        $ml = strlen($message);
        $kl = strlen($key);
        $newmsg = "";

        for ($i = 0; $i < $ml; $i++){
          $newmsg = $newmsg . ($message[$i] ^ $key[$i % $kl]);
        }

        return base64_encode($newmsg);
    }

    public static function XOR_decrypt($encrypted_message, $key)
    {
        $msg = base64_decode($encrypted_message);
        $ml = strlen($msg);
        $kl = strlen($key);
        $newmsg = "";

        for ($i = 0; $i < $ml; $i++){
          $newmsg = $newmsg . ($msg[$i] ^ $key[$i % $kl]);
        }

        return $newmsg;
    }

    /**
     * return JSON response.
     * @param int $status
     * @param array $data
     * @param null $error_code
     * @param array $headers
     * @return mixed
     */
    public static function response( $status = 200, $data = array(), $error_code = null, array $headers = array() )
  	{  
              // check wheter status is not OK
              if( $status != 200 )
              {
                    // assign error code and message
                    if( isset($error_code) )
                    {
                          $result[API_CODE]         = $error_code;
                          $result[API_MESSAGE]      = static::requestErrorReadableFormat( $error_code );
                    }
                    else
                    {
                          $result[API_CODE]         = API_ERROR_UNKNOWN;
                          $result[API_MESSAGE]      = static::requestStatus( $status );
                    }
                    
                    // override error message if there is available error message
                    if( count($data) > 0 )
                    {
                          $result[API_MESSAGE] = $data;
                    }
              }
              else
              {               
                    // check whether code is not null
                    if( $error_code == null )
                    {
                          $result[API_CODE]    = API_GENERAL_SUCCESS;
                          $result[API_MESSAGE] = $data;
                    }
                    else
                    {
                          $result[API_CODE]    = $error_code ;
                          $result[API_MESSAGE] = static::requestErrorReadableFormat( $error_code );
                    }

                    // override error message if there is available error message
                    if( count($data) > 0 )
                    {
                          $result[API_MESSAGE] = $data;
                    }
              }

  		return Response::json( $result, $status, $headers );
  	}

    /**
     * request readable message error based on error code
     * @param  error_code $error error code constant
     * @return message error message in readable format
     */
    public static function requestErrorReadableFormat($error) 
    {
          $errorMessage = array(
                API_ERROR_UNKNOWN                   => 'Unknown error.',
                API_ERROR_ACTION_FORBIDDEN          => 'Action forbidden.',
                API_ERROR_ID_UNAVAILABLE_SOCMED     => 'Given social media id is unavailable.',
                API_ERROR_ID_UNAVAILABLE_CANDIDATE  => 'Given candidate id is unavailable.',
                API_ERROR_ID_UNAVAILABLE_ANONYMOUS  => 'Given anonymous is unavailable.' );
          return ($errorMessage[$error])?$errorMessage[$error]:$errorMessage[100]; 
    }

    /**
     * request readable header status format
     * @param  header_status $code error code constant
     * @return message header status message in readable format
     */
    public static function requestStatus($code) {
      $status = array( 
          100 => 'Continue',   
          101 => 'Switching Protocols',   
          200 => 'OK', 
          201 => 'Created',   
          202 => 'Accepted',   
          203 => 'Non-Authoritative Information',   
          204 => 'No Content',   
          205 => 'Reset Content',   
          206 => 'Partial Content',   
          300 => 'Multiple Choices',   
          301 => 'Moved Permanently',   
          302 => 'Found',   
          303 => 'See Other',   
          304 => 'Not Modified',   
          305 => 'Use Proxy',   
          306 => '(Unused)',   
          307 => 'Temporary Redirect',   
          400 => 'Bad Request. Potentially request format malformed',   
          401 => 'Unauthorized',   
          402 => 'Payment Required',   
          403 => 'Forbidden',   
          404 => 'Not Found',   
          405 => 'Method Not Allowed',   
          406 => 'Not Acceptable',   
          407 => 'Proxy Authentication Required',   
          408 => 'Request Timeout',   
          409 => 'Conflict',   
          410 => 'Gone',   
          411 => 'Length Required',   
          412 => 'Precondition Failed',   
          413 => 'Request Entity Too Large',   
          414 => 'Request-URI Too Long',   
          415 => 'Unsupported Media Type',   
          416 => 'Requested Range Not Satisfiable',   
          417 => 'Expectation Failed',   
          500 => 'Internal Server Error',   
          501 => 'Not Implemented',   
          502 => 'Bad Gateway',   
          503 => 'Service Unavailable',   
          504 => 'Gateway Timeout',   
          505 => 'HTTP Version Not Supported'); 
      return ($status[$code])?$status[$code]:$status[500]; 
    }
	
}
