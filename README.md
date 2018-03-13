# cPanelEmailManager
Pequeña plataforma hecha con PHP & AJAX mayormente, utilizando la UAPI de cPanel para poder brindar un panel de administración de cuentas de correo de forma rápida e intuitiva.

Actualmente no cuenta con un sitema de control de usuarios (aka; logueo) ya que está enfocado para uso interno (intranet o plataforma de gestión de clientes con un poco de trabajito extra)

### :octocat: Cosas que se pueden realizar
- Crear cuenta de correo
- Eliminar cuenta de correo
- Cambiar contraseña
- Cambiar capacidad de la bandeja
- Activar/Desactivar cuenta de correo



### :octocat: Como configurar...

Agregar los datos de tu servidor en el archivo `cP_config.php`

	define('cP_user', '__modify_this__');
	define('cP_pass', '__modify_this__');
	define('cp_svIP', '__modify_this__');



### :octocat: Agradecimientos

- @N1ghteyes, creador de la librería en PHP para interactuar con la UAPI.
- @crodas por ayudarme cuando me surgían dudas...


### :octocat: Problemas?

Aún sigo realizando pruebas varias para poder agregar cosas útiles, pero si en algún momento encuentran algún problemita que se me haya pasado por alto, no duden en avisarme en la sección `Issues`
