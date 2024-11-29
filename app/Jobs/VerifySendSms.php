<?php

namespace App\Jobs;

use App\Mail\VerifyCode;
use App\Models\VerifyCode as VerifyCodeModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use Ipe\Sdk\Facades\SmsIr;
use Kavenegar\KavenegarApi;
use function Symfony\Component\String\b;

class VerifySendSms implements ShouldQueue
{
    use Queueable;

    private $mobile_email;
    private $type_send;

    /**
     * Create a new job instance.
     */
    public function __construct($mobile_email, $type_send)
    {
        $this->mobile_email = $mobile_email;
        $this->type_send = $type_send;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $code = $this->setCode();
        if ($code) {
            $token = data_get($code, "code");
            logger($this->type_send,[$token,$code]);
            switch ($this->type_send) {
                case "sms":
                    if (env("USE_SMS") == "smsir") {
                        $templateId = env("TEMPLATE_SMSIR"); // شناسه الگو
                        $parameters = [
                            [
                                "name" => "CODE",
                                "value" => $token,
                            ]
                        ];

                        $response = SmsIr::verifySend($this->mobile_email, $templateId, $parameters);
                    } elseif (env("USE_SMS") == "kaveh")
                    {
                        $templateId = env("TEMPLATE_KAVEH"); // شناسه الگو
                        $result = KavenegarApi::VerifyLookup($this->mobile_email, $token, null, null, $templateId, $type = null);
                    }
                    else
                        logger("verify code",[$code]);
                    break;
                case "mail":
                    Mail::to($this->mobile_email)->send(new VerifyCode($token));
                    break;
            }


        }

    }

    private function setCode()
    {
        $code = VerifyCodeModels::where('mobile_email', $this->mobile_email)
            ->whereDate("expires_at", ">", now())
            ->where('used', 0)->first();
        if (!$code) {
            $code = VerifyCodeModels::updateOrCreate(
                ["mobile_email" => $this->mobile_email],
                [
                    "code" => rand(11111, 99999),
                    "used" => false,
                    "expires_at" => now()->addMinutes(2),
                ]);
            return $code;
        }
        return false;
    }
}
