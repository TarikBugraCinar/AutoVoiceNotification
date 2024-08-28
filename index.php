<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesli Bildirim Şalteri</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Sesli Bildirim Şalteri</h2>

        <!-- Şalter Elemanı -->
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="notifySwitch">
            <label class="form-check-label" for="notifySwitch">Sesli Bildirim Aç/Kapat</label>
        </div>
    </div>

    <script>
        var audio = new Audio('dj_army.mp3');
        let count = 0;
        let intervalId;

        function playSoundAtIntervals() {
            count++;
            console.log("Sayaç: " + count);

            if (count % 5 === 0) { 
                if (audio.paused) {
                    audio.play();
                }
                console.log("Otomatik tıklama sonrası 5'in katında ses çalıyor.");
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const toggleSwitch = document.getElementById('notifySwitch');
            
            toggleSwitch.addEventListener('change', function() {
                if (this.checked) {
                    console.log("Şalter açık, interval başlatılıyor.");
                    intervalId = setInterval(playSoundAtIntervals, 1000);
                } else {
                    console.log("Şalter kapalı, interval durduruluyor.");
                    clearInterval(intervalId);
                    count = 0;
                }
            });
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
