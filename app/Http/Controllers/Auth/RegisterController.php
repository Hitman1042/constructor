use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

public function store(Request $request)
{
    // Валидация
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'company_name' => ['nullable', 'string', 'max:255'],
        'phone' => ['nullable', 'string', 'max:20'],
        'purpose' => ['nullable', 'in:ecommerce,services,education,other'],
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Создание пользователя
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'company_name' => $request->company_name,
        'phone' => $request->phone,
        'purpose' => $request->purpose,
    ]);

    // Отправка письма с подтверждением
    Mail::to($user->email)->send(new \App\Mail\VerifyEmail($user));

    return redirect('/login?verified=success')->with('status', 'Мы отправили ссылку для подтверждения на почту');
{
    $user = User::find($userId);

    if (!$user || $user->remember_token !== $token) {
        return redirect('/login')->with('error', 'Неверный токен подтверждения');
    }

    $user->email_verified_at = now();
    $user->remember_token = null;
    $user->save();

   // Перенаправляем на страницу с сообщением
    return redirect('/login')->with('status', 'Email подтвержден! Теперь вы можете войти.');
}
}

public function resendVerification(Request $request)
{
    $request->validate(['email' => 'required|email']);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return redirect()->back()->with('error', 'Пользователь с таким email не найден');
    }

    // Генерируем новый токен
    $user->remember_token = Str::random(60);
    $user->save();

    // Отправляем письмо повторно
    Mail::to($user->email)->send(new \App\Mail\VerifyEmail($user));

    return redirect()->back()->with('status', 'Письмо отправлено повторно');
}
}