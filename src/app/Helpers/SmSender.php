<?php

namespace YFDev\System\App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use YFDev\System\App\Constants\ErrorCode;
use Illuminate\Support\Facades\Log;

class SmSender
{
    protected $client;
    protected $url;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = 'http://smsapi.mitake.com.tw/api/mtk/SmSend?CharsetURL=UTF-8';
    }

    /**
     * sendOTP
     *
     * @param string $phone
     * @param int $otpCode
     * @return bool|string
     */
    public function sendOTP(string $phone, int $otpCode): bool|string
    {
        $message = "【易期付】尊敬的客戶您好\n您的一次性驗證密碼為{$otpCode}請於10分鐘內輸入至驗證視窗 逾期失效。\n感謝您";

        if ($this->isMessageLengthAllowed($message)) {
            return $this->send($phone, $message);
        }
    }

    /**
    * sendMsg
    *
    * @param string $phone
    * @param string $message
    * @return bool|string
    */
    public function sendMsg(string $phone, string $message): bool|string
    {
        if ($this->isMessageLengthAllowed($message)) {
            return $this->send($phone, $message);
        }
    }

    /**
     * send
     *
     * @param string $phone
     * @param string $message
     * @return bool|string
     */
    protected function send(string $phone, string $message): bool|string
    {
        $data = [
            'username' => env('SMS_ACCOUNT'),
            'password' => env('SMS_PASSWORD'),
            'dstaddr'  => $phone,
            'smbody'   => $message,
        ];

        try {
            $response = $this->client->post($this->url, [
                'form_params' => $data
            ]);

            $result = $this->parseResponse($response->getBody()->getContents());

            $this->checkResponse($result);

            $this->checkAccountPoint($result);

            return TRUE;
        } catch (\Exception $e) {
            Log::error('SMS Sent Error.', [$e->getMessage()]);
            return $e->getMessage();
        } catch (GuzzleException $e) {
            Log::error('Guzzle Error.', [$e->getMessage()]);
            return 'Guzzle Error: ' . $e->getMessage();
        }
    }

    /**
     * parseResponse
     *
     * @param string $response
     * @return array
     */
    protected function parseResponse(string $response): array
    {
        $responseText = str_replace("\r\n", '&', $response);
        parse_str($responseText, $responseData);

        return $responseData;
    }

    /**
     * checkResponse
     *
     * @param array $result
     * @return void
     * @throws \Exception
     */
    protected function checkResponse(array $result): void
    {
        if (!isset($result['statuscode']) || !ctype_digit($result['statuscode'])) {
            throw new \Exception('SMS Request Failed: ' . ($result['Error'] ?? 'Unknown error'), ErrorCode::SMS_SENT_ERROR);
        }
    }

    /**
     * checkAccountPoint
     *
     * @param array $result
     * @return void
     */
    protected function checkAccountPoint(array $result): void
    {
        \Log::info('SMS Result.', [$result]);
        if (isset($result['AccountPoint']) && (int)$result['AccountPoint'] < 50) {
            telegram_notify()->warning("簡訊點數剩餘 ：" . $result['AccountPoint']);
        }
    }

    /**
     * isMessageLengthAllowed
     *
     * @param String $message
     * @return boolean
     */
    protected function isMessageLengthAllowed(String $message): bool
    {
        $length = mb_strlen($message, 'UTF-8');

        $newlineCount = substr_count($message, "\n");

        $length += $newlineCount;

        return $length <= 70;
    }
}
