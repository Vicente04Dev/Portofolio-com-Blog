<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = ['message' => 'Saindo', 'alert-type' => 'success'];

        return redirect(route('login'))->with($notification);
    }

    public function Profile(){

        $id = Auth::user()->id;

        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    }
    public function EditProfile(){

        $id = Auth::user()->id;

        $editData = User::find($id);
        return view('admin.admin_profile_edit', compact('editData'));
    }
    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $image = $data->image;

        if($request->file('profile_image')){

            $file = $request->file('profile_image');
            
            $filename = date('YmdHi').$file->getClientOriginalName();

            if(!empty($image)){
                unlink(public_path("upload/admin_images/$image"));
            }

            $file->move(public_path('upload/admin_images'), $filename);
            $data->image = $filename;
        }

        $data->save();

        return redirect(route('admin.profile'))->with(['message' => 'Perfil actualizado com sucesso', 'alert-type' => 'success']);
    }

    public function ChangePassword(){
        return view('admin.alteraSenha');
    }

    public function UpdatePassword(Request $request){

        $validData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_new_password' => 'required|same:new_password',
        ], [
            'old_password.required' => 'Digite sua senha antiga.',
            'new_password.required' => 'Digite sua nova senha.',
            'confirm_new_password.required' => 'Confirme sua nova senha.',
            'confirm_new_password.same' => 'As senhas são diferentes.',
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($validData['old_password'], $hashedPassword)){

            $user = User::find(Auth::id());
            $user->password = bcrypt($validData['new_password']);
            $user->save();

            session()->flash('message', 'Senha alterada com sucesso');
            return redirect()->back();
            
        }else{
            session()->flash('message', 'Não existe essa senha');
            return redirect()->back();

        }
    }

    public function ProfileDescription(){

        $data = about::get()->first();
        return view('admin.about_description', compact('data'));
    }
    public function ProfileDescriptionStore(Request $request){
        
        $datas = about::get('id')->first();

        $request->validate([
            'title' => 'required',
            'experience' => 'required',
            'short_description' => 'required',
            'description' => 'required'
        ], [
            'title.required' => 'O título é obrigatório.',
            'experience.required' => 'A experiência é obrigatória!',
            'short_description.required' => 'Digite uma breve descrição sobre você.',
            'description.required' => 'Fale sobre você um pouco mais (incluido experiências, projectos desenvolvidos, etc.)',
        ]);

        $datas->title = $request->title;
        $datas->experience = $request->experience;
        $datas->short_description = $request->short_description;
        $datas->description = strip_tags($request->description, ['<br>', '<ul>','<ol>', '<li>']);

        $datas->save();

        return redirect()->back()->with(['message' => 'Informações actualizadas com sucesso', 'alert-type' => 'success']);
    }
}
