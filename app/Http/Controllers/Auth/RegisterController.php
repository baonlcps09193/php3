<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\ThuChaoMung;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules =[
            'username' => ['required', 'max:255'],
            'name' => ['required', 'string', 'min:2', 'max:30'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
            'diachi' => ['max:255'],
        ];
        $messages = [
            'username.required' => 'Vui lòng nhập tên đăng nhập', 
            'username.max' => 'Tên đăng nhập quá dài',
            'name.required' => 'Vui lòng nhập họ tên',
            'name.min' => 'Họ tên quá ngắn',
            'name.max' => 'Họ tên quá dài',
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email phải đúng dạng',
            'email.unique' => 'Email đã tồn tại',
            'email.max' => 'Email quá dài',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu quá ngắn',
            'password.confirmed' => 'Xác nhận mật khẩu không đúng',
            'diachi.max' => 'Địa chỉ quá dài',
        ];
        return Validator::make($data, $rules, $messages);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'diachi' => $data['diachi'],
            'username' => $data['username'],
        ]);
        Mail::to($data['email'])->send( new ThuChaoMung($user));
        return $user;
    }
}
