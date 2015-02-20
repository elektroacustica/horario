<?php

class AuthController extends \BaseController {

	public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/cbtis');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('login.index');
    }

    public function postLogin()
    {
        // Guardamos en un arreglo los datos del usuario.
        $data = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        
        if (Auth::attempt($data)) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {
            // Si nuestros datos son correctos mostramos la página de inicio
            return Redirect::intended('/cbtis');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('/')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
    }

    public function logOut()
    {
        Auth::logout();
        return Redirect::to('/')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }


}