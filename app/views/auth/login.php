<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
    body{
        margin:0;
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
        background:#f5f5f5;
        font-family:Arial, sans-serif;
    }
    
    .login-card{
        display:flex;
        border-radius:15px;
        overflow:hidden;
        box-shadow:0 10px 30px rgba(0,0,0,.15);
    }
    
    .image-side{
        width:70%;
    }
    
    .image-side img{
        width:100%;
        height:100%;
        object-fit:cover;
    }
    
    .form-side{
        width:360px;
        padding:40px;
    }
    .login-logo{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    .login-logo img{
        width:70px;
        margin-bottom: -20px;
    }
    .login-logo h3{
        font-size: 17px;
        color: #2E7D32;
        
    
    }
    .form-side h1{
        font-size: 20px;
        color: #222;
        text-align: center;
    }
    .form-side p{
        text-align: center;
        color: #777;
        margin-bottom: 25px;
        font-size: 14px;
    }

    form{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .input-group{
        display: flex;
        align-items: center;
        width: 100%;
        border: 1px solid #dcdcdc;
        border-radius: 8px;
        padding: 12px 15px;
        margin-bottom: 18px;
    }
    .input-group i{
        color: #888;
        margin-right: 10px;
    
    }
    .input-group input{
        width: 100%;
        background: transparent;
        border: none;
        outline: none;
        font-size: 15px;
    }
    .input-group:focus-within{
        border-color: #2E7D32;
    }
    button{
        width: 100%;
        padding: 13px;
        background: #2E7D32;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: .3s;
        align-items: center;
    }
    
    button:hover{
        background:#218838;
    }
    
    a{
        display: block;
        text-align: center;
        text-decoration: none;
        margin-top: 18px;
        color: #666;
        font-size: 14px;
        cursor: pointer;
    }
    a{
        color: #2E7D32;
    }
    </style>
</head>
<body>  
    <div class="login-card">
        <div class="image-side">
            <img src="/sistema_inventario/img/image-side.png" alt="Logo Tienda" class="logo-tienda">
        </div>
    
        <div class="form-side">

             <div class="login-logo">
                 <img src="/sistema_inventario/img/loginicon.png" alt="login-icon">
                 <h3>Mi inventario</h3>
             </div>
            <h1>Sistema de Inventario</h1>
            <p>Bienvenido de nuevo, inicia sesión.</p>
            
            <form method="POST" action="">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="correo" placeholder="Correo" required>
                </div>
                
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>
                
                <button type="submit">Ingresar</button>

                <a href="#">¿Olvidaste tu contraseña?</a>
            </form>
        </div>
    </div> 
</body>
</html>