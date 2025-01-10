<?php

namespace App\Livewire\Auth;

use App\Jobs\VerifySendSms;
use App\Models\Customer;
use App\Models\VerifyCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Verify extends Component
{

    public $code;
    public $email_mobile;
    public $type;


    protected function rules()
    {
        return [
            'code' => ['required', Rule::exists('verify_codes', 'code')
//                ->where('expires_at',">=", now())
//                ->where('used',false)
            ],
        ];
    }

    public function mount($email_mobile,$type)
    {
        $this->email_mobile = $email_mobile;
        $this->type = $type;
    }
    public $password_confirmation;

    public function verify()
    {
        $this->validate();
        $verify = VerifyCode::where("mobile_email",$this->email_mobile)->first();

        $credentials = $this->credentials();
        $customer  = Customer::where(function ($query) use ($credentials) {
            foreach ($credentials as $key => $value) {
                $query->where($key,$value);
            }
        })->first();

        if(!$customer){
            $data = $credentials;
            $data["password"] = Hash::make($this->email_mobile);
            $data["is_verified"] = true;
           $customer= Customer::create($data);
        }
        if($verify)
            $verify->update(["used"=>true]);
        $credentials["password"] = $this->email_mobile;

        logger("a",$credentials);
        if (Auth::guard('customer')->attempt($credentials)) {
            auth('customer')->login($customer);
//            return $this->redirectRoute('dashboard', navigate: true);
            session()->flash('message', __('You have successfully registered & logged in!'));
            return redirect(route("dashboard"));

        }

    }

    protected function credentials()
    {
        $email_mobile = convert2english($this->email_mobile);
        if ($this->type == "sms") {
            try {
                $email_mobile = phone($email_mobile, 'IR');
                $email_mobile = $email_mobile->formatForMobileDialingInCountry($email_mobile->getCountry());
                $this->email_mobile = $email_mobile;
            } catch (\Exception $e) {
                logger("error",[$e->getMessage()]);
            }
            return ['mobile' => $email_mobile];
        }  elseif (filter_var($email_mobile, FILTER_VALIDATE_EMAIL)) {
            $this->email_mobile = $email_mobile;
            return ['email' => $email_mobile];
        }
        return ['email' => "", 'password' => ""];
    }


    public function resendOtp()
    {
        dispatch(new VerifySendSms($this->email_mobile,$this->type));

    }

    public function render()
    {
        return view('livewire.auth.verify');
    }
}
