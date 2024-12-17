<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
    $(".sidebar ul li").on('click', function () {
        $(".sidebar ul li.active").removeClass('active');
        $(this).addClass('active');
    });

    $('.open-btn').on('click', function () {
        $('.sidebar').addClass('active');
    });


    $('.close-btn').on('click', function () {
        $('.sidebar').removeClass('active');
    })
</script>
<script>
  const currentDate = new Date();
  const inputField = document.getElementById('date');
  inputField.value = currentDate.toISOString().substr(0, 10);
</script>
<script>
    const timeInput = document.getElementById('total_time');

    timeInput.addEventListener('input', () => {
        const inputValue = timeInput.value;
        const timeRegex = /^(\d{2}):(\d{2}):(\d{2})$/;

        if (!timeRegex.test(inputValue)) {
            // Si el valor de entrada no coincide con el formato HH:MM:SS, no hacer nada
            return;
        }

        // Extraer las horas, minutos y segundos del valor de entrada
        const [hours, minutes, seconds] = inputValue.split(':').map(Number);

        // Validar las horas, minutos y segundos
        if (hours < 0 || hours > 23 || minutes < 0 || minutes > 59 || seconds < 0 || seconds > 59) {
            // Si las horas, minutos o segundos son inválidos, mostrar un mensaje de error
            alert('Hora inválida');
            timeInput.value = '00:00:00';
        }
    });

    // Agregar un evento de blur para formatear el tiempo cuando el usuario sale del campo
    timeInput.addEventListener('blur', () => {
        const inputValue = timeInput.value;
        const timeRegex = /^(\d{2}):(\d{2}):(\d{2})$/;

        if (!timeRegex.test(inputValue)) {
            // Si el valor de entrada no coincide con el formato HH:MM:SS, formatear el tiempo
            const [hours, minutes, seconds] = inputValue.split(':').map(Number);
            timeInput.value = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>