document.getElementById("formulario").addEventListener("submit", async (e) => {
    e.preventDefault();

    const Nombre = document.getElementById("Nombre").value;
    const RSocial = document.getElementById("RSocial").value;
    const correo = document.getElementById("correo").value;
    const Numero = document.getElementById("Numero").value;
    const TipoProducto = document.getElementById("TipoProducto").value;

    try {
        const response = await fetch('hola.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                Nombre,
                RSocial,
                correo,
                Numero,
                TipoProducto
            })
        });

        if (response.ok) {
            alert('Datos enviados correctamente');
            e.target.reset();
        } else {
            alert('Error al enviar los datos');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Error al procesar la solicitud');
    }
});