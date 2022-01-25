<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<span id="timer">00:00:00</span>
<button id="start">Start</button>
<button id="stop">Stop</button>
<button id="reset">Reset</button>

<button id="status">Status</button>
<script>
    console.clear();
    const timer = el => {
        let interval;
        let second = 0;
        let hour = 0;
        let minute = 0;

        function frame() {
            second++;
            if (second >= 60) {
                second = 0;
                minute++;
                if (minute >= 60) {
                    minute = 0;
                    hour++;
                }
            }
        }

        function resetFn() {
            clearInterval(interval);
            second = 0;
            hour = 0;
            minute = 0;
            el.textContent = format();
        }

        function format() {
            return (() => {
                let time = "";

                if (hour < 10)
                    time = `0${hour}:`
                else {
                    time = `${hour}:`;
                }

                if (minute < 10) {
                    time += `0${minute}:`
                } else {
                    time += `${minute}:`;
                }

                if (second < 10) {
                    time += `0${second}`
                } else {
                    time += second;
                }

                return time;
            })()
        }

        function startFn() {
            if (interval) return;

            interval = setInterval(() => {
                frame();
                el.textContent = format();
            }, 1000);
        }

        function stopFn() {
            clearInterval(interval);
        }

        return {
            start: startFn,
            stop: stopFn,
            reset: resetFn
        }
    }

    const { start, stop, reset } = timer(
        document.getElementById("timer")
    )

    document.getElementById("start").addEventListener("click", start);
    document.getElementById("stop").addEventListener("click", stop);
    document.getElementById("reset").addEventListener("click", reset);
</script>
</body>
</html>
