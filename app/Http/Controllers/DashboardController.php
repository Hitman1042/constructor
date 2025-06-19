// app/Http/Controllers/DashboardController.php
public function index()
{
    $projects = auth()->user()->projects;
    return view('dashboard', compact('projects'));
}

// app/Http/Controllers/ProfileController.php
public function edit()
{
    return view('profile.edit');
}

public function update(Request $request)
{
    // Логика обновления профиля
    return redirect()->route('profile.edit')->with('success', 'Данные обновлены');
}