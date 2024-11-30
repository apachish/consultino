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


    protected function rules()
    {
        logger("codee",[VerifyCode::where("code",$this->code)->first(),$this->code]);
        return [
            'code' => ['required', Rule::exists('verify_codes', 'code')
//                ->where('expires_at',">=", now())
//                ->where('used',false)
            ],
        ];
    }

    public function mount($email_mobile)
    {
        $this->email_mobile = $email_mobile;
    }
    public $password_confirmation;

    public function verify()
    {
        $this->validate();
        $verify = VerifyCode::where("mobile_email",$this->email_mobile)->first();

        logger("customer",[Customer::all()]);
        $credentials = $this->credentials();
        $customer  = Customer::where(function ($query) use ($credentials) {
            foreach ($credentials as $key => $value) {
                $query->where($key,$value);
            }
        })->first();
        if(!$customer){
            $data = $credentials;
            $data["password"] = Hash::make("123456789");
            $data["is_verified"] = true;
            Customer::create($data);
        }
        if($verify)
            $verify->update(["used"=>true]);
        $credentials["password"] = "123456789";
        logger("a",$credentials);
        if (Auth::guard('customer')->attempt($credentials)) {
            return $this->redirectRoute('dashboard', navigate: true);
        }
        session()->flash('message', 'You have successfully registered & logged in!');

    }

    protected function credentials()
    {
        $email_mobile = convert2english($this->email_mobile);
        $mobile = false;
        try {
            phone($email_mobile, 'IR')->getCountry();
            $mobile = true;
        } catch (\Exception $e) {
            $mobile = false;
        }
        if ($mobile) {
            return ['mobile' => $email_mobile];
        }  elseif (filter_var($email_mobile, FILTER_VALIDATE_EMAIL)) {
            return ['email' => $email_mobile];
        }
        return ['email' => "", 'password' => ""];
    }


    public function resendOtp()
    {
        logger($this->email_mobile);
        dispatch(new VerifySendSms($this->email_mobile,"sms"));

    }

    public function render()
    {
        return view('livewire.auth.verify');
    }
}
