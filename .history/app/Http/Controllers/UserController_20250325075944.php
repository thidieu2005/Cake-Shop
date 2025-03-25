use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

public function Register(Request $request)
{
$input = $request->validate([
'name' => 'required|string',
'email' => 'required|email|unique:users',
'password' => 'required|string|min:8',
'_password' => 'required|same:password'
]);

$input['password'] = Hash::make($input['password']); // Mã hóa mật khẩu

User::create($input); // Tạo người dùng

echo '<script>
    alert("Đăng ký thành công. Vui lòng đăng nhập.");
    window.location.assign("login");
</script>';
}