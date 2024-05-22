<head>
<style>
        body, html {
            height: 100%;
            width: 100%;
            margin: 0;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .container {
            background: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .display-4 {
            color: #007bff; /* Color del título principal */
            margin-bottom: 20px;
        }
        .lead {
            color: #333; /* Color del subtítulo */
            font-size: 1.5rem;
            margin-bottom: 40px;
        }

    </style>
</head>
<div class="container">
    <h1 class="display-4">Home</h1>
    <h2 class="lead">¡Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>!</h2>
</div>
