<?php

namespace App\Http\Controllers\live_search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

    
header('Access-Control-Allow-Origin: http://ajaxlivesearch.com');
header('Access-Control-Allow-Methods: *');
header('Content-Type: application/json');

// $DS = DIRECTORY_SEPARATOR;
// file_exists(__DIR__ . $DS . 'Handler.php') ? require_once __DIR__ . $DS . 'Handler.php' : die('Handler.php not found');

/**
 * Class AjaxProcessor
 * @package AjaxLiveSearch\core
 */
class AjaxProcessor extends Controller
{
    private $handler;

    /**
     * AjaxProcessor constructor.
     */
    public function __construct()
    {
        $this->handler = new Handler();
    }

    /**
     * Validate the request
     */
    //TODO: lúc đầu không có (Request $request) vì ko dùng Request của laravel, giờ thì phải có
    private function validateRequest(Request $request)
    {
        // 1. Validate if the request is AJAX
        if ($this->handler->isAJAX() !== true) {
            $this->handler->formResponse('failed', 'Error: Request must be AJAX');
        }

        // 2. A layer of security against those Bots that submit a form quickly
        if (!isset($request->ls_page_loaded_at) ||
            $this->handler->verifyBotSearched($request->ls_page_loaded_at) !== true) {
            // Searching is started sooner than the search start time offset
            $this->handler->formResponse('failed', 'Error: You are too fast, or this is a Bot. Please search now.');
        }

        //TODO: Vì dùng token sinh ra bới laravel nên ko cần cái này`
        // 3. Verify the token - CSRF protection
        // if (!isset($request->ls_token) || $this->handler->verifySessionValue('token', $request->ls_token) !== true
        //      || !isset($request->ls_anti_bot) ||
        //     $this->handler->verifySessionValue('anti_bot', $request->ls_anti_bot) !== true
        // ) {
        //     // Tokens are not matched
        //     $this->handler->formResponse('failed', 'Error: Token mismatch. Refresh the page.
        //     It seems that your session is expired.');
        // }

        // 4. Validate all inputs
        $errors = $this->handler->validateInput($request);

        if (!empty($errors)) {
            // Required inputs are not provided
            $this->handler->formResponse('failed', 'Error: Required or invalid inputs: ' . implode(',', $errors));
        }
    }

    /**
     * Search in database
     */
    //TODO: lúc đầu không có (Request $request) vì ko dùng Request của laravel, giờ thì phải có
    private function search(Request $request)
    {
        try {
            // Start looking for the query
            $result = json_encode($this->handler->renderView(
                $request->ls_query_id,
                $request->ls_query,
                (int) $request->ls_current_page,
                (int) $request->ls_items_per_page
            ));
        } catch (\Exception $e) {
            $caughtError = $e->getMessage();
        }

        if (empty($caughtError)) {
            // 5. Return the result
            $this->handler->formResponse('success', 'Successful request', $result);
        } else {
            $this->handler->formResponse('failed', $caughtError);
        }
    }

    /**
     * Process the request
     */
    //TODO: lúc đầu không có (Request $request) vì ko dùng Request của laravel, giờ thì phải có
    public function process(Request $request)
    {
        $this->validateRequest($request);
        $this->search($request);
        //TODO: Thêm return vì hàm này được gọi từ ajax trong 'ajaxlivesearch.js'
        return redirect()->route('index');
    }
}

/**
 * Create a new object of the class and call process function
 */
// (new AjaxProcessor())->process();


